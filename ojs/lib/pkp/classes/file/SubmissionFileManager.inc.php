<?php

/**
 * @file classes/file/SubmissionFileManager.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class SubmissionFileManager
 * @ingroup file
 *
 * @brief Helper class for database-backed submission file management tasks.
 *
 * Submission directory structure:
 * [submission id]/note
 * [submission id]/public
 * [submission id]/submission
 * [submission id]/submission/original
 * [submission id]/submission/review
 * [submission id]/submission/review/attachment
 * [submission id]/submission/editor
 * [submission id]/submission/copyedit
 * [submission id]/submission/layout
 * [submission id]/attachment
 */

import('lib.pkp.classes.file.BaseSubmissionFileManager');

class SubmissionFileManager extends BaseSubmissionFileManager {
	/**
	 * Constructor.
	 * @param $contextId int
	 * @param $submissionId int
	 */
	function __construct($contextId, $submissionId) {
		parent::__construct($contextId, $submissionId);
	}


	//
	// Public methods
	//
	/**
	 * Upload a submission file.
	 * @param $fileName string the name of the file used in the POST form
	 * @param $fileStage int submission file workflow stage
	 * @param $uploaderUserId int The id of the user that uploaded the file.
	 * @param $revisedFileId int
	 * @param $genreId int (e.g. Manuscript, Appendix, etc.)
	 * @return SubmissionFile
	 */
	function uploadSubmissionFile($fileName, $fileStage, $uploaderUserId,
			$revisedFileId = null, $genreId = null, $assocType = null, $assocId = null) {
		return $this->_handleUpload(
			$fileName, $fileStage, $uploaderUserId,
			$revisedFileId, $genreId, $assocType, $assocId
		);
	}

	/**
	 * Copy a submission file.
	 * @param $filePath string the path of the file on the file system
	 * @param $fileStage int submission file workflow stage
	 * @param $copyUserId int The id of the user that originates the file copy
	 * @param $revisedFileId int
	 * @param $genreId int (e.g. Manuscript, Appendix, etc.)
	 * @return SubmissionFile
	 */
	function copySubmissionFile($filePath, $fileStage, $copyUserId,
			$revisedFileId = null, $genreId = null, $assocType = null, $assocId = null) {
		return $this->_handleCopy(
			$filePath, $fileStage, $copyUserId,
			$revisedFileId, $genreId, $assocType, $assocId
		);
	}

	/**
	 * Delete a file.
	 * @param $fileId integer
	 * @param $revisionId integer
	 * @return boolean returns true if successful
	 */
	function deleteById($fileId, $revision = null) {
		$submissionFile = $this->_getFile($fileId, $revision);
		if (isset($submissionFile)) {
			return parent::deleteByPath($submissionFile->getfilePath());
		} else {
			return false;
		}
	}

	/**
	 * Download a file.
	 * @param $fileId int the file id of the file to download
	 * @param $revision int the revision of the file to download
	 * @param $inline boolean print file as inline instead of attachment, optional
	 * @param $filename string The client-side download filename (optional)
	 * @return boolean
	 */
	function downloadById($fileId, $revision = null, $inline = false, $filename = null) {
		$returner = false;
		$submissionFile = $this->_getFile($fileId, $revision);
		if (isset($submissionFile)) {
			// Make sure that the file belongs to the submission.
			if ($submissionFile->getSubmissionId() != $this->getSubmissionId()) fatalError('Invalid file id!');

			$this->recordView($submissionFile);

			// Send the file to the user.
			$filePath = $submissionFile->getFilePath();
			$mediaType = $submissionFile->getFileType();
			if(!isset($filename)) $filename = $submissionFile->getClientFileName();
			$returner = parent::downloadByPath($filePath, $mediaType, $inline, $filename);
		}

		return $returner;
	}

	/**
	 * Record a file view in database.
	 * @param $submissionFile SubmissionFile
	 */
	function recordView($submissionFile) {
		// Mark the file as viewed by this user.
		$sessionManager = SessionManager::getManager();
		$session = $sessionManager->getUserSession();
		$user = $session->getUser();
		if (is_a($user, 'User')) {
			$viewsDao = DAORegistry::getDAO('ViewsDAO'); /* @var $viewsDao ViewsDAO */
			$viewsDao->recordView(
			ASSOC_TYPE_SUBMISSION_FILE, $submissionFile->getFileIdAndRevision(),
			$user->getId()
			);
		}
	}

	/**
	 * Copies an existing SubmissionFile and renames it.
	 * @param $sourceFileId int
	 * @param $sourceRevision int
	 * @param $fileStage int
	 * @param $destFileId int (optional)
	 * @param $viewable boolean (optional)
	 * @return array? array(file_id, revision) on success; null on failure
	 */
	function copyFileToFileStage($sourceFileId, $sourceRevision, $newFileStage, $destFileId = null, $viewable = false) {
		if (HookRegistry::call('SubmissionFileManager::copyFileToFileStage', array(&$sourceFileId, &$sourceRevision, &$newFileStage, &$destFileId, &$result))) return $result;

		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO'); /* @var $submissionFileDao SubmissionFileDAO */
		$sourceFile = $submissionFileDao->getRevision($sourceFileId, $sourceRevision); /* @var $sourceFile SubmissionFile */
		if (!$sourceFile) return false;

		// Rename the variable just so that we don't get confused.
		$destFile = $sourceFile;

		// Find out where the source file lives.
		$sourcePath = $sourceFile->getFilePath();

		// Update the ID (or clear if making a new file) and get new revision number.
		if ($destFileId != null) {
			$currentRevision = $submissionFileDao->getLatestRevisionNumber($destFileId);
			$revision = $currentRevision + 1;
			$destFile->setFileId($destFileId);
		} else {
			$destFile->setFileId(null);
			$revision = 1;
		}

		// Update the necessary fields of the destination file.
		$destFile->setRevision($revision);
		$destFile->setFileStage($newFileStage);
		$destFile->setDateModified(Core::getCurrentDate());
		$destFile->setViewable($viewable);
		// Set the old file as the source
		$destFile->setSourceFileId($sourceFileId);
		$destFile->setSourceRevision($sourceRevision);

		// Find out where the file should go.
		$destPath = $destFile->getFilePath();

		// Now insert the row into the DB and get the inserted file id.
		$insertedFile = $submissionFileDao->insertObject($destFile, $sourcePath);

		return $insertedFile ? array($insertedFile->getFileId(), $insertedFile->getRevision()) : null;
	}

	//
	// Private helper methods
	//
	/**
	 * Upload the file and add it to the database.
	 * @param $fileName string index into the $_FILES array
	 * @param $fileStage int submission file stage (one of the SUBMISSION_FILE_* constants)
	 * @param $uploaderUserId int The id of the user that uploaded the file.
	 * @param $revisedFileId int ID of an existing file to revise
	 * @param $genreId int foreign key into genres table (e.g. manuscript, etc.)
	 * @param $assocType int
	 * @param $assocId int
	 * @return SubmissionFile the uploaded submission file or null if an error occured.
	 */
	function _handleUpload($fileName, $fileStage, $uploaderUserId,
			$revisedFileId = null, $genreId = null, $assocType = null, $assocId = null) {

		// Ensure that the file has been correctly uploaded to the server.
		if (!$this->uploadedFileExists($fileName)) return null;

		// Retrieve the location of the uploaded file.
		$sourceFile = $this->getUploadedFilePath($fileName);

		// Instantiate and pre-populate a new submission file object.
		$submissionFile = $this->_instantiateSubmissionFile($sourceFile, $fileStage, $revisedFileId, $genreId, $assocType, $assocId);
		if (is_null($submissionFile)) return null;

		// Retrieve and copy the file type of the uploaded file.
		$fileType = $this->getUploadedFileType($fileName);
		assert($fileType !== false);
		$submissionFile->setFileType($fileType);

		// Retrieve and copy the file name of the uploaded file.
		$originalFileName = $this->getUploadedFileName($fileName);
		assert($originalFileName !== false);
		$submissionFile->setOriginalFileName($this->truncateFileName($originalFileName));

		// Set the uploader's user and user group id.
		$submissionFile->setUploaderUserId($uploaderUserId);

		// Copy the uploaded file to its final destination and
		// persist its meta-data to the database.
		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO'); /* @var $submissionFileDao SubmissionFileDAO */
		return $submissionFileDao->insertObject($submissionFile, $fileName, true);
	}

	/**
	 * Copy a file and add it to the database.
	 * @param $filePath string full path to file on the file system
	 * @param $fileStage int submission file stage (one of the SUBMISSION_FILE_* constants)
	 * @param $copyUserId int The id of the user that is copying the file.
	 * @param $revisedFileId int ID of an existing file to revise
	 * @param $genreId int foreign key into genres table (e.g. manuscript, etc.)
	 * @param $assocType int
	 * @param $assocId int
	 * @return SubmissionFile the submission file or null if an error occured.
	 */
	function _handleCopy($filePath, $fileStage, $copyUserId,
			$revisedFileId = null, $genreId = null, $assocType = null, $assocId = null) {

		// Ensure that the file exists on the file system
		if (!$this->fileExists($filePath)) return null;

		// Instantiate and pre-populate a new submission file object.
		$submissionFile = $this->_instantiateSubmissionFile($filePath, $fileStage, $revisedFileId, $genreId, $assocType, $assocId);
		if (is_null($submissionFile)) return null;

		// Retrieve and copy the file type of the uploaded file.
		$fileType = PKPString::mime_content_type($filePath);
		assert($fileType !== false);
		$submissionFile->setFileType($fileType);

		// Retrieve the file name from the file path
		$originalFileName = basename($filePath);
		assert($originalFileName !== false);
		$submissionFile->setOriginalFileName($this->truncateFileName($originalFileName));

		// Set the user and user group id for the copied file
		$submissionFile->setUploaderUserId($copyUserId);

		// Save the submission file to the database.
		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO'); /* @var $submissionFileDao SubmissionFileDAO */
		return $submissionFileDao->insertObject($submissionFile, $filePath, false);
	}

	/**
	 * Routine to instantiate and pre-populate a new submission file.
	 * @param $sourceFilePath string
	 * @param $fileStage integer SUBMISSION_FILE_...
	 * @param $revisedFileId integer optional
	 * @param $genreId integer optional
	 * @param $assocId integer optional
	 * @param $assocType integer optional
	 * @return SubmissionFile returns the instantiated submission file or null if an error occurs.
	 */
	function _instantiateSubmissionFile($sourceFilePath, $fileStage, $revisedFileId = null, $genreId = null, $assocType = null, $assocId = null) {
		$revisedFile = null;

		// Retrieve the submission file DAO.
		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO'); /* @var $submissionFileDao SubmissionFileDAO */

		// Except for reviewer file attachments we either need a genre id or a
		// revised file, otherwise we cannot identify the target file
		// implementation.
		if ($fileStage != SUBMISSION_FILE_REVIEW_ATTACHMENT) {
			assert(isset($genreId) || isset($revisedFileId));
			if (!$genreId || $revisedFileId) {
				// Retrieve the revised file. (null $fileStage in case the revision is from a previous stage).
				$revisedFile = $submissionFileDao->getLatestRevision($revisedFileId, null, $this->getSubmissionId());
				if (!is_a($revisedFile, 'SubmissionFile')) return null;
			}
		}

		// If we don't have a genre then use the genre from the
		// existing file.
		if ($revisedFile && !$genreId) {
			$genreId = $revisedFile->getGenreId();
		}

		// Instantiate a new submission file implementation.
		$submissionFile = $submissionFileDao->newDataObjectByGenreId($genreId); /* @var $submissionFile SubmissionFile */
		$submissionFile->setSubmissionId($this->getSubmissionId());

		// Instantiate submission locale for the file
		$submissionDao = DAORegistry::getDAO('SubmissionDAO'); /* @var $submissionDao SubmissionDAO */
		$submission = $submissionDao->getById($submissionFile->getSubmissionId());
		$submissionFile->setSubmissionLocale($submission->getLocale());

		// Do we create a new file or a new revision of an existing file?
		if ($revisedFileId) {
			// Make sure that the submission of the revised file is
			// the same as that of the uploaded file.
			if ($revisedFile->getSubmissionId() != $this->getSubmissionId()) return null;

			// If file stages are different we reference with the sourceFileId
			// Otherwise, we keep the file id, update the revision, and copy other fields.
			if(!is_null($fileStage) && $fileStage !== $revisedFile->getFileStage()) {
				$submissionFile->setSourceFileId($revisedFileId);
				$submissionFile->setSourceRevision($revisedFile->getRevision());
				$submissionFile->setRevision(1);
				$submissionFile->setViewable(false);
			} else {
				// Create a new revision of the file with the existing file id.
				$submissionFile->setFileId($revisedFileId);
				$submissionFile->setRevision($revisedFile->getRevision()+1);

				// Copy the file stage (in case of null passed in).
				$fileStage = (int)$revisedFile->getFileStage();

				// Copy the assoc type.
				if(!is_null($assocType) && $assocType !== $revisedFile->getAssocType()) fatalError('Invalid submission file assoc type!');
				$assocType = (int)$revisedFile->getAssocType();

				// Copy the assoc id.
				if (!is_null($assocId) && $assocId !== $revisedFile->getAssocId()) fatalError('Invalid submission file assoc ID!');
				$assocId = (int)$revisedFile->getAssocId();

				// Copy the viewable flag.
				$submissionFile->setViewable($revisedFile->getViewable());
			}

			// Copy assorted user-facing metadata.
			$submissionFile->copyEditableMetadataFrom($revisedFile);
		} else {
			// Create the first revision of a new file.
			$submissionFile->setRevision(1);
			$submissionFile->setViewable($fileStage == SUBMISSION_FILE_SUBMISSION?true:false); // Bug #8308: Submission files should be selected for promotion by default
		}

		// Determine and set the file size of the file.
		$submissionFile->setFileSize(filesize($sourceFilePath));

		// Set the file file stage.
		$submissionFile->setFileStage($fileStage);

		// Set the file genre.
		$submissionFile->setGenreId($genreId);

		// Set dates to the current system date.
		$submissionFile->setDateUploaded(Core::getCurrentDate());
		$submissionFile->setDateModified(Core::getCurrentDate());

		// Is the submission file associated to another entity?
		if(isset($assocId)) {
			assert(isset($assocType));
			$submissionFile->setAssocType($assocType);
			$submissionFile->setAssocId($assocId);
		}

		// Return the pre-populated submission file.
		return $submissionFile;
	}

	/**
	 * Internal helper method to retrieve file
	 * information by file ID.
	 * @param $fileId integer
	 * @param $revision integer
	 * @return SubmissionFile
	 */
	function _getFile($fileId, $revision = null) {
		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO'); /* @var $submissionFileDao SubmissionFileDAO */
		if ($revision) {
			return $submissionFileDao->getRevision($fileId, $revision);
		} else {
			return $submissionFileDao->getLatestRevision($fileId);
		}
	}
}


