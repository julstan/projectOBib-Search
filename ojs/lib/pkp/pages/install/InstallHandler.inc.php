<?php

/**
 * @file pages/install/InstallHandler.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class InstallHandler
 * @ingroup pages_install
 *
 * @brief Handle installation requests.
 */

import('lib.pkp.classes.install.form.InstallForm');
import('lib.pkp.classes.install.form.UpgradeForm');
import('classes.handler.Handler');

class InstallHandler extends Handler {

	/**
	 * If no context is selected, list all.
	 * Otherwise, display the index page for the selected context.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function index($args, $request) {
		// Make sure errors are displayed to the browser during install.
		@ini_set('display_errors', true);

		$this->validate(null, $request);
		$this->setupTemplate($request);

		if (($setLocale = $request->getUserVar('setLocale')) != null && AppLocale::isLocaleValid($setLocale)) {
			$request->setCookieVar('currentLocale', $setLocale);
		}

		$installForm = new InstallForm($request);
		$installForm->initData();
		$installForm->display($request);
	}

	/**
	 * Redirect to index if system has already been installed.
	 * @param $request PKPRequest
	 */
	function validate($requiredContexts = null, $request = null) {
		if (Config::getVar('general', 'installed')) {
			$request->redirect(null, 'index');
		}
	}

	/**
	 * Execute installer.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function install($args, $request) {
		$this->validate(null, $request);
		$this->setupTemplate($request);

		$installForm = new InstallForm($request);
		$installForm->readInputData();

		if ($installForm->validate()) {
			$installForm->execute();
		} else {
			$errors = $installForm->getErrorsArray();
			$error = array_shift($errors);
			$installForm->installError($error, false);
		}
	}

	/**
	 * Display upgrade form.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function upgrade($args, $request) {
		$this->validate(null, $request);
		$this->setupTemplate($request);

		if (($setLocale = $request->getUserVar('setLocale')) != null && AppLocale::isLocaleValid($setLocale)) {
			$request->setCookieVar('currentLocale', $setLocale);
		}

		$installForm = new UpgradeForm($request);
		$installForm->initData();
		$installForm->display($request);
	}

	/**
	 * Execute upgrade.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function installUpgrade($args, $request) {
		$this->validate(null, $request);
		$this->setupTemplate($request);

		$installForm = new UpgradeForm($request);
		$installForm->readInputData();

		if ($installForm->validate()) {
			$installForm->execute();
		} else {
			$installForm->display($request);
		}
	}

	/**
	 * Set up the installer template.
	 * @param $request PKPRequest
	 */
	function setupTemplate($request) {
		parent::setupTemplate($request);
		AppLocale::requireComponents(LOCALE_COMPONENT_PKP_INSTALLER);
	}
}


