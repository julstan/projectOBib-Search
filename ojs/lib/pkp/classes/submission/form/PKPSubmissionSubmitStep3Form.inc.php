<?php

/**
 * @file classes/submission/form/PKPSubmissionSubmitStep3Form.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class PKPSubmissionSubmitStep3Form
 * @ingroup submission_form
 *
 * @brief Form for Step 3 of author submission: submission metadata
 */

import('lib.pkp.classes.submission.form.SubmissionSubmitForm');

class PKPSubmissionSubmitStep3Form extends SubmissionSubmitForm {

	/** @var SubmissionMetadataFormImplementation */
	var $_metadataFormImplem;

	/**
	 * Constructor.
	 * @param $context Context
	 * @param $submission Submission
	 * @param $metadataFormImplementation MetadataFormImplementation
	 */
	function __construct($context, $submission, $metadataFormImplementation) {
		parent::__construct($context, $submission, 3);

		$this->setDefaultFormLocale($submission->getLocale());
		$this->_metadataFormImplem = $metadataFormImplementation;
		$this->_metadataFormImplem->addChecks($submission);
	}

	/**
	 * @copydoc SubmissionSubmitForm::initData
	 */
	function initData() {
		$this->_metadataFormImplem->initData($this->submission);
		return parent::initData();
	}

	/**
	 * @copydoc SubmissionSubmitForm::fetch
	 */
	function fetch($request, $template = null, $display = false) {
		$templateMgr = TemplateManager::getManager($request);
		$context = $request->getContext();

		// Tell the form what fields are enabled (and which of those are required)
		$metadataFields = Application::getMetadataFields();
		foreach ($metadataFields as $field) {
			$templateMgr->assign(array(
				$field . 'Enabled' => $context->getData($field) === METADATA_REQUEST || $context->getData($field) === METADATA_REQUIRE,
				$field . 'Required' => $context->getData($field) === METADATA_REQUIRE,
			));
		}

		// Categories list
		$assignedCategories = [];
		$categoryDao = DAORegistry::getDAO('CategoryDAO'); /* @var $categoryDao CategoryDAO */
		$categories = $categoryDao->getByPublicationId($this->submission->getCurrentPublication()->getId());
		while ($category = $categories->next()) {
			$assignedCategories[] = $assignedCategory->getId();
		}

		$items = [];
		$categoryDao = DAORegistry::getDAO('CategoryDAO'); /* @var $categoryDao CategoryDAO */
		$categories = $categoryDao->getByContextId($context->getId())->toAssociativeArray();
		foreach ($categories as $category) {
			$title = $category->getLocalizedTitle();
			if ($category->getParentId()) {
				$title = $categories[$category->getParentId()]->getLocalizedTitle() . ' > ' . $title;
			}
			$items[] = [
				'id' => (int) $category->getId(),
				'title' => $title,
			];
		}
		$categoriesList = new \PKP\components\listPanels\ListPanel(
			'categories',
			__('grid.category.categories'),
			[
				'canSelect' => true,
				'items' => $items,
				'itemsMax' => count($items),
				'selected' => $assignedCategories,
				'selectorName' => 'categories[]',
			]
		);

		$templateMgr->assign(array(
			'assignedCategories' => $assignedCategories,
			'hasCategories' => !empty($categoriesList->items),
			'categoriesListData' => [
				'components' => [
					'categories' => $categoriesList->getConfig(),
				]
			]
		));

		$templateMgr->assign('publicationId', $this->submission->getCurrentPublication()->getId());

		return parent::fetch($request, $template, $display);
	}

	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$this->_metadataFormImplem->readInputData();
	}

	/**
	 * Get the names of fields for which data should be localized
	 * @return array
	 */
	function getLocaleFieldNames() {
		return $this->_metadataFormImplem->getLocaleFieldNames();
	}

	/**
	 * Save changes to submission.
	 * @return int the submission ID
	 */
	function execute(...$functionArgs) {
		// Execute submission metadata related operations.
		$this->_metadataFormImplem->execute($this->submission, Application::get()->getRequest());

		// Get an updated version of the submission.
		$submissionDao = DAORegistry::getDAO('SubmissionDAO'); /* @var $submissionDao SubmissionDAO */
		$this->submission = $submissionDao->getById($this->submissionId);

		// Set other submission data.
		if ($this->submission->getSubmissionProgress() <= $this->step) {
			$this->submission->setSubmissionProgress($this->step + 1);
			$this->submission->stampLastActivity();
			$this->submission->stampModified();
		}

		parent::execute(...$functionArgs);

		// Save the submission.
		$submissionDao->updateObject($this->submission);

		return $this->submissionId;
	}
}
