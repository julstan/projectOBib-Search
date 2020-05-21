<?php

/**
 * @file controllers/grid/announcements/ManageAnnouncementGridHandler.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class PKPManageAnnouncementGridHandler
 * @ingroup classes_controllers_grid_announcements
 *
 * @brief Handle announcements management grid requests.
 */

import('lib.pkp.controllers.grid.announcements.AnnouncementGridHandler');
import('lib.pkp.classes.controllers.grid.DataObjectGridCellProvider');
import('lib.pkp.controllers.grid.announcements.form.AnnouncementForm');

class ManageAnnouncementGridHandler extends AnnouncementGridHandler {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
		$this->addRoleAssignment(
			ROLE_ID_MANAGER,
			array(
				'fetchGrid', 'fetchRow', 'moreInformation',
				'addAnnouncement', 'editAnnouncement',
				'updateAnnouncement', 'deleteAnnouncement'
			)
		);
	}


	//
	// Overridden template methods
	//
	/**
	 * @copydoc AnnouncementGridHandler::initialize()
	 */
	function initialize($request, $args = null) {
		parent::initialize($request, $args);

		$this->setTitle('announcement.announcements');

		// Load language components
		AppLocale::requireComponents(LOCALE_COMPONENT_PKP_MANAGER);

		// Add grid action.
		$router = $request->getRouter();

		import('lib.pkp.classes.linkAction.request.AjaxModal');
		$this->addAction(
			new LinkAction(
				'addAnnouncement',
				new AjaxModal(
					$router->url($request, null, null, 'addAnnouncement', null, null),
					__('grid.action.addAnnouncement'),
					'modal_add_item',
					true
				),
				__('grid.action.addAnnouncement'),
				'add_item')
		);
	}

	/**
	 * @copydoc GridHandler::initFeatures()
	 */
	function initFeatures($request, $args) {
		import('lib.pkp.classes.controllers.grid.feature.PagingFeature');
		return array(new PagingFeature());
	}

	/**
	 * @copydoc GridHandler::getRowInstance()
	 */
	protected function getRowInstance() {
		import('lib.pkp.controllers.grid.announcements.AnnouncementGridRow');
		return new AnnouncementGridRow();
	}

	/**
	 * @copydoc GridHandler::authorize()
	 */
	function authorize($request, &$args, $roleAssignments, $requireAnnouncementsEnabled = false) {
		import('lib.pkp.classes.security.authorization.ContextAccessPolicy');
		$this->addPolicy(new ContextAccessPolicy($request, $roleAssignments));
		return parent::authorize($request, $args, $roleAssignments, $requireAnnouncementsEnabled);
	}

	/**
	 * @copydoc GridHandler::loadData()
	 */
	protected function loadData($request, $filter) {
		$context = $request->getContext();
		$announcementDao = DAORegistry::getDAO('AnnouncementDAO'); /* @var $announcementDao AnnouncementDAO */
		$rangeInfo = $this->getGridRangeInfo($request, $this->getId());
		return $announcementDao->getByAssocId($context->getAssocType(), $context->getId(), $rangeInfo);
	}


	//
	// Public handler methods.
	//
	/**
	 * Display form to add announcement.
	 * @param $args array
	 * @param $request PKPRequest
	 * @return string
	 */
	function addAnnouncement($args, $request) {
		return $this->editAnnouncement($args, $request);
	}

	/**
	 * Display form to edit an announcement.
	 * @param $args array
	 * @param $request PKPRequest
	 * @return JSONMessage JSON object
	 */
	function editAnnouncement($args, $request) {
		$context = $request->getContext();
		$announcementForm = new AnnouncementForm($context->getId(), (int) $request->getUserVar('announcementId'));
		$announcementForm->initData();
		return new JSONMessage(true, $announcementForm->fetch($request));
	}

	/**
	 * Save an edited/inserted announcement.
	 * @param $args array
	 * @param $request PKPRequest
	 * @return JSONMessage JSON object
	 */
	function updateAnnouncement($args, $request) {
		$announcementId = (int) $request->getUserVar('announcementId');
		$context = $request->getContext();

		// Form handling.
		$announcementForm = new AnnouncementForm($context->getId(), $announcementId);
		$announcementForm->readInputData();

		if ($announcementForm->validate()) {
			if ($announcementId) {
				// Successful edit of an existing announcement.
				$notificationLocaleKey = 'notification.editedAnnouncement';
			} else {
				// Successful added a new announcement.
				$notificationLocaleKey = 'notification.addedAnnouncement';
			}

			$announcementId = $announcementForm->execute();

			// Record the notification to user.
			$notificationManager = new NotificationManager();
			$user = $request->getUser();
			$notificationManager->createTrivialNotification($user->getId(), NOTIFICATION_TYPE_SUCCESS, array('contents' => __($notificationLocaleKey)));

			// Prepare the grid row data.
			return DAO::getDataChangedEvent($announcementId);
		}
		return new JSONMessage(false);
	}

	/**
	 * Delete an announcement.
	 * @param $args array
	 * @param $request
	 * @return JSONMessage JSON object
	 */
	function deleteAnnouncement($args, $request) {
		$context = $request->getContext();
		$announcementId = (int) $request->getUserVar('announcementId');

		$announcementDao = DAORegistry::getDAO('AnnouncementDAO'); /* @var $announcementDao AnnouncementDAO */
		$announcement = $announcementDao->getById($announcementId, $context->getAssocType(), $context->getId());
		if ($announcement && $request->checkCSRF()) {
			$announcementDao->deleteObject($announcement);

			// Create notification.
			$notificationManager = new NotificationManager();
			$user = $request->getUser();
			$notificationManager->createTrivialNotification($user->getId(), NOTIFICATION_TYPE_SUCCESS, array('contents' => __('notification.removedAnnouncement')));

			return DAO::getDataChangedEvent($announcementId);
		}

		return new JSONMessage(false);
	}
}


