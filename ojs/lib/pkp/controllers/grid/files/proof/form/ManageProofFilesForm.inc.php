<?php

/**
 * @file controllers/grid/files/proof/form/ManageProofFilesForm.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class ManageProofFilesForm
 * @ingroup controllers_grid_files_proof
 *
 * @brief Form to add files to the proof files grid
 */

import('lib.pkp.controllers.grid.files.form.ManageSubmissionFilesForm');

class ManageProofFilesForm extends ManageSubmissionFilesForm {

	/** @var int Representation ID. */
	var $_representationId;

	/**
	 * Constructor.
	 * @param $submissionId int Submission ID.
	 * @param $publicationId int Publication ID
	 * @param $representationId int Representation ID.
	 */
	function __construct($submissionId, $publicationId, $representationId) {
		parent::__construct($submissionId, 'controllers/grid/files/proof/manageProofFiles.tpl');
		$this->_publicationId = $publicationId;
		$this->_representationId = $representationId;
	}


	//
	// Overridden template methods
	//
	/**
	 * @copydoc ManageSubmissionFilesForm::fetch
	 */
	function fetch($request, $template = null, $display = false) {
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign('publicationId', $this->_publicationId);
		$templateMgr->assign('representationId', $this->_representationId);
		return parent::fetch($request, $template, $display);
	}

	/**
	 * @copydoc ManageSubmissionFilesForm::fileExistsInStage
	 */
	protected function fileExistsInStage($submissionFile, $stageSubmissionFiles, $fileStage) {
		return false;
	}


	/**
	 * @copydoc ManageSubmissionFilesForm::importFile()
	 */
	protected function importFile($context, $submissionFile, $fileStage) {
		$newSubmissionFile = parent::importFile($context, $submissionFile, $fileStage);

		$representationDao = Application::getRepresentationDAO();
		$representation = $representationDao->getById($this->_representationId);

		$newSubmissionFile->setAssocType(ASSOC_TYPE_REPRESENTATION);
		$newSubmissionFile->setAssocId($representation->getId());
		$newSubmissionFile->setFileStage(SUBMISSION_FILE_PROOF);
		$newSubmissionFile->setViewable(false); // Not approved by default

		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO'); /* @var $submissionFileDao SubmissionFileDAO */
		$submissionFileDao->updateObject($newSubmissionFile);
		return $newSubmissionFile;
	}
}


