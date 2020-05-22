<?php

/**
 * @file pages/admin/AdminHandler.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class AdminHandler
 * @ingroup pages_admin
 *
 * @brief Handle requests for site administration functions.
 */

import('classes.handler.Handler');

class AdminHandler extends Handler {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();

		$this->addRoleAssignment(
			array(ROLE_ID_SITE_ADMIN),
			array('index', 'contexts', 'settings', 'wizard')
		);
	}

	/**
	 * @copydoc PKPHandler::authorize()
	 */
	function authorize($request, &$args, $roleAssignments) {
		import('lib.pkp.classes.security.authorization.PKPSiteAccessPolicy');
		$this->addPolicy(new PKPSiteAccessPolicy($request, null, $roleAssignments));
		$returner = parent::authorize($request, $args, $roleAssignments);

		// Make sure user is in a context. Otherwise, redirect.
		$context = $request->getContext();
		$router = $request->getRouter();
		$requestedOp = $router->getRequestedOp($request);

		if ($requestedOp == 'settings') {
			$contextDao = Application::getContextDAO();
			$contextFactory = $contextDao->getAll();
			if ($contextFactory->getCount() == 1) {
				// Don't let users access site settings in a single context installation.
				// In that case, those settings are available under management or are not
				// relevant (like site appearance).
				return false;
			}
		}

		return $returner;
	}

	/**
	 * Display site admin index page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function index($args, $request) {
		$this->setupTemplate($request);
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->display('admin/index.tpl');
	}

	/**
	 * Display a list of the contexts hosted on the site.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function contexts($args, $request) {
		$this->setupTemplate($request);
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->display('admin/contexts.tpl');
	}

	/**
	 * Display the administration settings page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function settings($args, $request) {
		$this->setupTemplate($request);
		$templateMgr = TemplateManager::getManager($request);
		$site = $request->getSite();
		$dispatcher = $request->getDispatcher();

		$apiUrl = $dispatcher->url($request, ROUTE_API, CONTEXT_ID_ALL, 'site');
		$themeApiUrl = $dispatcher->url($request, ROUTE_API, CONTEXT_ID_ALL, 'site/theme');
		$temporaryFileApiUrl = $dispatcher->url($request, ROUTE_API, CONTEXT_ID_ALL, 'temporaryFiles');
		$siteUrl = $request->getBaseUrl();

		import('classes.file.PublicFileManager');
		$publicFileManager = new PublicFileManager();
		$baseUrl = $request->getBaseUrl() . '/' . $publicFileManager->getSiteFilesPath();

		$supportedLocales = $site->getSupportedLocales();
		$localeNames = AppLocale::getAllLocales();
		$locales = array_map(function($localeKey) use ($localeNames) {
			return ['key' => $localeKey, 'label' => $localeNames[$localeKey]];
		}, $supportedLocales);

		$siteAppearanceForm = new \PKP\components\forms\site\PKPSiteAppearanceForm($apiUrl, $locales, $site, $baseUrl, $temporaryFileApiUrl);
		$siteConfigForm = new \PKP\components\forms\site\PKPSiteConfigForm($apiUrl, $locales, $site);
		$siteInformationForm = new \PKP\components\forms\site\PKPSiteInformationForm($apiUrl, $locales, $site);
		$themeForm = new \PKP\components\forms\context\PKPThemeForm($themeApiUrl, $locales, $siteUrl);

		$settingsData = [
			'components' => [
				FORM_SITE_APPEARANCE => $siteAppearanceForm->getConfig(),
				FORM_SITE_CONFIG => $siteConfigForm->getConfig(),
				FORM_SITE_INFO => $siteInformationForm->getConfig(),
				FORM_THEME => $themeForm->getConfig(),
			],
		];

		$templateMgr->assign('settingsData', $settingsData);

		$templateMgr->display('admin/settings.tpl');
	}

	/**
	 * Display a settings wizard for a journal
	 *
	 * @param $args array
	 * @param $request PKPRequest
	 */
	public function wizard($args, $request) {
		$this->setupTemplate($request);
		$router = $request->getRouter();
		$dispatcher = $request->getDispatcher();

		if (!isset($args[0]) || !ctype_digit($args[0])) {
			$request->getDispatcher()->handle404();
		}

		import('classes.core.Services');
		$contextService = Services::get('context');
		$context = $contextService->get((int) $args[0]);

		if (empty($context)) {
			$request->getDispatcher()->handle404();
		}

		$apiUrl = $dispatcher->url($request, ROUTE_API, $context->getPath(), 'contexts/' . $context->getId());
		$themeApiUrl = $dispatcher->url($request, ROUTE_API, $context->getPath(), 'contexts/' . $context->getId() . '/theme');
		$contextUrl = $router->url($request, $context->getPath());
		$sitemapUrl = $router->url($request, $context->getPath(), 'sitemap');

		$supportedFormLocales = $context->getSupportedFormLocales();
		$localeNames = AppLocale::getAllLocales();
		$locales = array_map(function($localeKey) use ($localeNames) {
			return ['key' => $localeKey, 'label' => $localeNames[$localeKey]];
		}, $supportedFormLocales);

		$contextForm = new APP\components\forms\context\ContextForm($apiUrl, __('admin.contexts.form.edit.success'), $locales, $request->getBaseUrl(), $context);
		$themeForm = new PKP\components\forms\context\PKPThemeForm($themeApiUrl, $locales, $contextUrl, $context);
		$indexingForm = new PKP\components\forms\context\PKPSearchIndexingForm($apiUrl, $locales, $context, $sitemapUrl);

		$settingsData = [
			'components' => [
				FORM_CONTEXT => $contextForm->getConfig(),
				FORM_SEARCH_INDEXING => $indexingForm->getConfig(),
				FORM_THEME => $themeForm->getConfig(),
			],
		];

		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign([
			'settingsData' => $settingsData,
			'editContext' => $context,
		]);

		$templateMgr->display('admin/contextSettings.tpl');
	}

	/**
	 * Initialize the handler.
	 * @param $request PKPRequest
	 */
	function initialize($request) {
		AppLocale::requireComponents(LOCALE_COMPONENT_PKP_ADMIN, LOCALE_COMPONENT_APP_MANAGER, LOCALE_COMPONENT_APP_ADMIN, LOCALE_COMPONENT_APP_COMMON, LOCALE_COMPONENT_PKP_MANAGER);
		return parent::initialize($request);
	}
}
