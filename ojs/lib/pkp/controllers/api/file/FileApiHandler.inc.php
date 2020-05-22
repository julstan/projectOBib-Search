<?php
/**
 * @defgroup controllers_api_file File API controller
 */

/**
 * @file controllers/api/file/FileApiHandler.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class FileApiHandler
 * @ingroup controllers_api_file
 *
 * @brief Class defining an AJAX API for supplying file information.
 */

// Import the base handler.
import('classes.handler.Handler');
import('lib.pkp.classes.core.JSONMessage');
import('lib.pkp.classes.file.SubmissionFileManager');
import('lib.pkp.classes.security.authorization.SubmissionFileAccessPolicy');

class FileApiHandler extends Handler {

	/**
	 * Constructor.
	 */
	function __construct() {
		parent::__construct();
		$this->addRoleAssignment(
			array(ROLE_ID_MANAGER, ROLE_ID_SUB_EDITOR, ROLE_ID_ASSISTANT, ROLE_ID_REVIEWER, ROLE_ID_AUTHOR),
			array('downloadFile', 'downloadLibraryFile', 'downloadAllFiles', 'recordDownload', 'enableLinkAction')
		);
	}

	//
	// Implement methods from PKPHandler
	//
	function authorize($request, &$args, $roleAssignments) {
		$fileIds = $request->getUserVar('filesIdsAndRevisions');
		$libraryFileId = $request->getUserVar('libraryFileId');

		if (is_string($fileIds)) {
			$fileIdsArray = explode(';', $fileIds);
			// Remove empty entries (a trailing ";" will cause these)
			$fileIdsArray = array_filter($fileIdsArray, function($a) {
				return !empty($a);
			});
		}
		if (!empty($fileIdsArray)) {
			$multipleSubmissionFileAccessPolicy = new PolicySet(COMBINING_DENY_OVERRIDES);
			foreach ($fileIdsArray as $fileIdAndRevision) {
				$multipleSubmissionFileAccessPolicy->addPolicy($this->_getAccessPolicy($request, $args, $roleAssignments, $fileIdAndRevision));
			}
			$this->addPolicy($multipleSubmissionFileAccessPolicy);
		} else if (is_numeric($libraryFileId)) {
			import('lib.pkp.classes.security.authorization.ContextAccessPolicy');
			$this->addPolicy(new ContextAccessPolicy($request, $roleAssignments));
		} else {
			// IDs will be specified using the default parameters.
			$this->addPolicy($this->_getAccessPolicy($request, $args, $roleAssignments));
		}

		return parent::authorize($request, $args, $roleAssignments);
	}

	//
	// Public handler methods
	//
	/**
	 * Download a file.
	 * @param $args array
	 * @param $request Request
	 */
	function downloadFile($args, $request) {
		$submissionFile = $this->getAuthorizedContextObject(ASSOC_TYPE_SUBMISSION_FILE);
		assert(isset($submissionFile)); // Should have been validated already
		$context = $request->getContext();
		$fileManager = $this->_getFileManager($context->getId(), $submissionFile->getSubmissionId());
		if (!$fileManager->downloadById($submissionFile->getFileId(), $submissionFile->getRevision(), false, $submissionFile->getClientFileName())) {
			error_log('FileApiHandler: File ' . $submissionFile->getFilePath() . ' does not exist or is not readable!');
			header('HTTP/1.0 500 Internal Server Error');
			fatalError('500 Internal Server Error');
		}
	}

	/**
	 * Download a library file.
	 * @param $args array
	 * @param $request Request
	 */
	function downloadLibraryFile($args, $request) {
		import('lib.pkp.pages.libraryFiles.LibraryFileHandler');
		$libraryFileHandler = new LibraryFileHandler($this);
		return $libraryFileHandler->downloadLibraryFile($args, $request);
	}

	/**
	 * Download all passed files.
	 * @param $args array
	 * @param $request Request
	 */
	function downloadAllFiles($args, $request) {
		// Retrieve the authorized objects.
		$submissionFiles = $this->getAuthorizedContextObject(ASSOC_TYPE_SUBMISSION_FILES);
		$submission = $this->getAuthorizedContextObject(ASSOC_TYPE_SUBMISSION);

		// Find out the paths of all files in this grid.
		$context = $request->getContext();
		$filePaths = array();
		$fileManager = $this->_getFileManager($context->getId(), $submission->getId());
		$filesDir = $fileManager->getBasePath();
		foreach ($submissionFiles as $submissionFile) {
			// Remove absolute path so the archive doesn't include it (otherwise all files are organized by absolute path)
			$filePaths[str_replace($filesDir, '', $submissionFile->getFilePath())] = $submissionFile->getClientFileName();

		}

		import('lib.pkp.classes.file.FileArchive');
		$fileArchive = new FileArchive();
		$archivePath = $fileArchive->create($filePaths, $filesDir);
		if (file_exists($archivePath)) {
			$fileManager = new FileManager();
			if ($fileArchive->zipFunctional()) {
				$fileManager->downloadByPath($archivePath, 'application/x-zip', false, 'files.zip');
			} else {
				$fileManager->downloadByPath($archivePath, 'application/x-gtar', false, 'files.tar.gz');
			}
			$fileManager->deleteByPath($archivePath);
		} else {
			fatalError('Creating archive with submission files failed!');
		}
	}

	/**
	 * Record file download and return js event to update grid rows.
	 * @param $args array
	 * @param $request Request
	 * @return string
	 */
	function recordDownload($args, $request) {
		$submissionFiles = $this->getAuthorizedContextObject(ASSOC_TYPE_SUBMISSION_FILES);
		$fileId = null;

		foreach ($submissionFiles as $submissionFile) {
			$submissionFileManager = new SubmissionFileManager($request->getContext()->getId(), $submissionFile->getSubmissionId());
			$submissionFileManager->recordView($submissionFile);
			$fileId = $submissionFile->getFileId();
			unset($submissionFile);
		}

		if (count($submissionFiles) > 1) {
			$fileId = null;
		}

		return $this->enableLinkAction($args, $request);
	}

	/**
	 * Returns a data changd event to re-enable the link action.  Refactored out of
	 *  recordDownload since library files do not have downloads recorded and are in a
	 *  different context.
	 * @param $args aray
	 * @param $request Request
	 * @return JSONMessage JSON object
	 */
	function enableLinkAction($args, $request) {
		return DAO::getDataChangedEvent();
	}

	/**
	 * return the application specific file manager.
	 * @param $contextId int the context for this manager.
	 * @param $submissionId int the submission id.
	 * @return SubmissionFileManager
	 */
	function _getFileManager($contextId, $submissionId) {
		return new SubmissionFileManager($contextId, $submissionId);
	}

	/**
	 * return the application specific file access policy.
	 * @param $request PKPRequest
	 * @param $args
	 * @param $roleAssignments array
	 * @param $fileIdAndRevision array optional
	 * @return SubmissionFileAccessPolicy
	 */
	function _getAccessPolicy($request, $args, $roleAssignments, $fileIdAndRevision = null) {
		return new SubmissionFileAccessPolicy($request, $args, $roleAssignments, SUBMISSION_FILE_ACCESS_READ, $fileIdAndRevision);
	}
}


