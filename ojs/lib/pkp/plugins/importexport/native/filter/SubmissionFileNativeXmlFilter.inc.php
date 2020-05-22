<?php

/**
 * @file plugins/importexport/native/filter/SubmissionFileNativeXmlFilter.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class SubmissionFileNativeXmlFilter
 * @ingroup plugins_importexport_native
 *
 * @brief Base class that converts a submissionFile to a Native XML document
 */

import('lib.pkp.plugins.importexport.native.filter.NativeExportFilter');

class SubmissionFileNativeXmlFilter extends NativeExportFilter {
	/**
	 * Constructor
	 * @param $filterGroup FilterGroup
	 */
	function __construct($filterGroup) {
		$this->setDisplayName('Native XML submission file export');
		parent::__construct($filterGroup);
	}


	//
	// Implement template methods from PersistableFilter
	//
	/**
	 * @copydoc PersistableFilter::getClassName()
	 */
	function getClassName() {
		return 'lib.pkp.plugins.importexport.native.filter.SubmissionFileNativeXmlFilter';
	}

	//
	// Implement template methods from Filter
	//
	/**
	 * @see Filter::process()
	 * @param $submissionFile SubmissionFile
	 * @return DOMDocument
	 */
	function &process(&$submissionFile) {
		// Create the XML document
		$doc = new DOMDocument('1.0');
		$doc->preserveWhiteSpace = false;
		$doc->formatOutput = true;
		$deployment = $this->getDeployment();
		$rootNode = $this->createSubmissionFileNode($doc, $submissionFile);
		$doc->appendChild($rootNode);
		$rootNode->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
		$rootNode->setAttribute('xsi:schemaLocation', $deployment->getNamespace() . ' ' . $deployment->getSchemaFilename());

		return $doc;
	}

	//
	// SubmissionFile conversion functions
	//
	/**
	 * Create and return a submissionFile node.
	 * @param $doc DOMDocument
	 * @param $submissionFile SubmissionFile
	 * @return DOMElement
	 */
	function createSubmissionFileNode($doc, $submissionFile) {
		$deployment = $this->getDeployment();
		$context = $deployment->getContext();

		// Create the submission_file node and set metadata
		$submissionFileNode = $doc->createElementNS($deployment->getNamespace(), $this->getSubmissionFileElementName());

		$stageToName = array_flip($deployment->getStageNameStageIdMapping());
		$submissionFileNode->setAttribute('stage', $stageToName[$submissionFile->getFileStage()]);
		$submissionFileNode->setAttribute('id', $submissionFile->getFileId());

		// Create the revision node and set metadata
		$revisionNode = $doc->createElementNS($deployment->getNamespace(), 'revision');
		$revisionNode->setAttribute('number', $submissionFile->getRevision());
		if ($sourceFileId = $submissionFile->getSourceFileId()) {
			$revisionNode->setAttribute('source', $sourceFileId . '-' . $submissionFile->getSourceRevision());
		}

		$genreDao = DAORegistry::getDAO('GenreDAO'); /* @var $genreDao GenreDAO */
		$genre = $genreDao->getById($submissionFile->getGenreId());
		if ($genre) {
			$revisionNode->setAttribute('genre', $genre->getName($context->getPrimaryLocale()));
		}

		$revisionNode->setAttribute('filename', $submissionFile->getOriginalFileName());
		$revisionNode->setAttribute('viewable', $submissionFile->getViewable()?'true':'false');
		$revisionNode->setAttribute('date_uploaded', strftime('%Y-%m-%d', strtotime($submissionFile->getDateUploaded())));
		$revisionNode->setAttribute('date_modified', strftime('%Y-%m-%d', strtotime($submissionFile->getDateModified())));
		if ($submissionFile->getDirectSalesPrice() !== null) {
			$revisionNode->setAttribute('direct_sales_price', $submissionFile->getDirectSalesPrice());
		}
		$revisionNode->setAttribute('filesize', $submissionFile->getFileSize());
		$revisionNode->setAttribute('filetype', $submissionFile->getFileType());

		$userDao = DAORegistry::getDAO('UserDAO'); /* @var $userDao UserDAO */
		$uploaderUser = $userDao->getById($submissionFile->getUploaderUserId());
		assert(isset($uploaderUser));
		$revisionNode->setAttribute('uploader', $uploaderUser->getUsername());

		$this->addIdentifiers($doc, $revisionNode, $submissionFile);
		$this->createLocalizedNodes($doc, $revisionNode, 'name', $submissionFile->getName(null));

		// if it is a dependent file, add submission_file_ref element
		if ($submissionFile->getFileStage() == SUBMISSION_FILE_DEPENDENT && $submissionFile->getAssocType() == ASSOC_TYPE_SUBMISSION_FILE) {
			$fileRefNode = $doc->createElementNS($deployment->getNamespace(), 'submission_file_ref');
			$fileRefNode->setAttribute('id', $submissionFile->getAssocId());
			$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO'); /* @var $submissionFileDao SubmissionFileDAO */
			$latestRevision = $submissionFileDao->getLatestRevisionNumber($submissionFile->getAssocId());
			$fileRefNode->setAttribute('revision', $latestRevision);
			$revisionNode->appendChild($fileRefNode);
		}

		$submissionFileNode->appendChild($revisionNode);
		// Embed the file contents

		if (array_key_exists('no-embed', $this->opts)) {
			$hrefNode = $doc->createElementNS($deployment->getNamespace(), 'href');
			if (array_key_exists('use-file-urls', $this->opts)) {
				$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO');
				$stageId = $submissionFileDao->getWorkflowStageId($submissionFile);
				$app = Application::getApplication();
				$dispatcher = $app->getDispatcher();
				$params = ["fileId" => $submissionFile->getFileId(),
						   "revision" => $submissionFile->getRevision(),
						   "submissionId" => $submissionFile->getSubmissionId(),
						   "stageId" => $stageId];
				$url = $dispatcher->url($app->getRequest(), ROUTE_COMPONENT, $context->getPath(), "api.file.FileApiHandler", "downloadFile", null, $params);
				$hrefNode->setAttribute('src', $url);
			} else {
				$hrefNode->setAttribute('src', $submissionFile->getFilePath());
			}
			$hrefNode->setAttribute('mime_type', $submissionFile->getFileType());
			$revisionNode->appendChild($hrefNode);
		} else {
			$embedNode = $doc->createElementNS($deployment->getNamespace(), 'embed', base64_encode(file_get_contents($submissionFile->getFilePath())));
			$embedNode->setAttribute('encoding', 'base64');
			$revisionNode->appendChild($embedNode);
		}
		return $submissionFileNode;
	}

	/**
	 * Create and add identifier nodes to a submission node.
	 * @param $doc DOMDocument
	 * @param $revisionNode DOMElement
	 * @param $submissionFile SubmissionFile
	 */
	function addIdentifiers($doc, $revisionNode, $submissionFile) {
		$deployment = $this->getDeployment();

		// Ommiting the internal ID here because it is in the submission_file attribute

		// Add public ID
		if ($pubId = $submissionFile->getStoredPubId('publisher-id')) {
			$revisionNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'id', htmlspecialchars($pubId, ENT_COMPAT, 'UTF-8')));
			$node->setAttribute('type', 'public');
			$node->setAttribute('advice', 'update');
		}

		// Add pub IDs by plugin
		$pubIdPlugins = PluginRegistry::loadCategory('pubIds', true, $deployment->getContext()->getId());
		foreach ($pubIdPlugins as $pubIdPlugin) {
			$this->addPubIdentifier($doc, $revisionNode, $submissionFile, $pubIdPlugin);
		}
	}

	/**
	 * Add a single pub ID element for a given plugin to the document.
	 * @param $doc DOMDocument
	 * @param $revisionNode DOMElement
	 * @param $submissionFile SubmissionFile
	 * @param $pubIdPlugin PubIdPlugin
	 * @return DOMElement|null
	 */
	function addPubIdentifier($doc, $revisionNode, $submissionFile, $pubIdPlugin) {
		$pubId = $submissionFile->getStoredPubId($pubIdPlugin->getPubIdType());
		if ($pubId) {
			$deployment = $this->getDeployment();
			$revisionNode->appendChild($node = $doc->createElementNS($deployment->getNamespace(), 'id', htmlspecialchars($pubId, ENT_COMPAT, 'UTF-8')));
			$node->setAttribute('type', $pubIdPlugin->getPubIdType());
			$node->setAttribute('advice', 'update');
			return $node;
		}
		return null;
	}

	/**
	 * Get the submission file element name
	 */
	function getSubmissionFileElementName() {
		return 'submission_file';
	}
}


