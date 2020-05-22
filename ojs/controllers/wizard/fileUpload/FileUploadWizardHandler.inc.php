<?php
/**
 * @defgroup controllers_wizard_fileUpload File Upload Wizard
 * The file upload wizard implements the 3-step wizard used to manage
 * uploads of submission files.
 */

/**
 * @file controllers/wizard/fileUpload/FileUploadWizardHandler.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class FileUploadWizardHandler
 * @ingroup controllers_wizard_fileUpload
 *
 * @brief A controller that handles basic server-side
 *  operations of the file upload wizard.
 */

// Import the base handler.
import('lib.pkp.controllers.wizard.fileUpload.PKPFileUploadWizardHandler');

class FileUploadWizardHandler extends PKPFileUploadWizardHandler {
	//
	// Implement template methods from PKPHandler
	//
	function authorize($request, &$args, $roleAssignments) {
		// We validate file stage outside a policy because
		// we don't need to validate in another places.
		$fileStage = $request->getUserVar('fileStage');
		if ($fileStage) {
			$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO'); /* @var $submissionFileDao SubmissionFileDAO */
			$fileStages = $submissionFileDao->getAllFileStages();
			if (!in_array($fileStage, $fileStages)) {
				return false;
			}
		}

		// Validate file ids. We have two cases where we might have a file id.
		// CASE 1: user is uploading a revision to a file, the revised file id
		// will need validation.
		$revisedFileId = (int)$request->getUserVar('revisedFileId');
		// CASE 2: user already have uploaded a file (and it's editing the metadata),
		// we will need to validate the uploaded file id.
		$fileId = (int)$request->getUserVar('fileId');
		// Get the right one to validate.
		$fileIdToValidate = null;
		if ($revisedFileId && !$fileId) {
			$fileIdToValidate = $revisedFileId;
		} else if ($fileId && !$revisedFileId) {
			$fileIdToValidate = $fileId;
		} else if ($revisedFileId && $fileId) {
			// Those two cases will not happen at the same time.
			return false;
		}
		if ($fileIdToValidate) {
			import('lib.pkp.classes.security.authorization.SubmissionFileAccessPolicy');
			$this->addPolicy(new SubmissionFileAccessPolicy($request, $args, $roleAssignments, SUBMISSION_FILE_ACCESS_MODIFY, $fileIdToValidate));
		}

		// Allow both reviewers (if in review) and context roles.
		$stageId = (int)$request->getUserVar('stageId');
		import('lib.pkp.classes.security.authorization.ReviewStageAccessPolicy');
		$this->addPolicy(new ReviewStageAccessPolicy($request, $args, $roleAssignments, 'submissionId', $stageId));

		// Authorize review round id when this handler is used in review stages.
		import('lib.pkp.classes.submission.SubmissionFile'); // Constants
		if ($stageId == WORKFLOW_STAGE_ID_EXTERNAL_REVIEW && !in_array($request->getUserVar('fileStage'), array(SUBMISSION_FILE_QUERY, SUBMISSION_FILE_DEPENDENT))) {
			import('lib.pkp.classes.security.authorization.internal.ReviewRoundRequiredPolicy');
			$this->addPolicy(new ReviewRoundRequiredPolicy($request, $args));
		}

		return parent::authorize($request, $args, $roleAssignments);
	}

	/**
	 * @copydoc PKPFileUploadWizardHandler::_attachEntities
	 */
	protected function _attachEntities($submissionFile) {
		parent::_attachEntities($submissionFile);

		switch ($submissionFile->getFileStage()) {
			case SUBMISSION_FILE_PROOF:
				$galleyDao = DAORegistry::getDAO('ArticleGalleyDAO'); /* @var $galleyDao ArticleGalleyDAO */
				assert($submissionFile->getAssocType() == ASSOC_TYPE_REPRESENTATION);
				$galley = $galleyDao->getById($submissionFile->getAssocId());
				if ($galley) {
					$galley->setFileId($submissionFile->getFileId());
					$galleyDao->updateObject($galley);
				}
				break;
		}
	}
}


