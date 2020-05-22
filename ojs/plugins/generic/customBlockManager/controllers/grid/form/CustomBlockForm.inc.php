<?php

/**
 * @file plugins/generic/customBlockManager/controllers/grid/form/CustomBlockForm.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CustomBlockForm
 * @ingroup controllers_grid_customBlockManager
 *
 * Form for press managers to create and modify sidebar blocks
 *
 */

import('lib.pkp.classes.form.Form');

class CustomBlockForm extends Form {
	/** @var int Context (press / journal) ID */
	var $contextId;

	/** @var CustomBlockPlugin Custom block plugin */
	var $plugin;

	/**
	 * Constructor
	 * @param $template string the path to the form template file
	 * @param $contextId int
	 * @param $plugin CustomBlockPlugin
	 */
	function __construct($template, $contextId, $plugin = null) {
		parent::__construct($template);

		$this->contextId = $contextId;
		$this->plugin = $plugin;

		// Add form checks
		$this->addCheck(new FormValidatorPost($this));
		$this->addCheck(new FormValidatorCSRF($this));
		$this->addCheck(new FormValidator($this, 'blockName', 'required', 'plugins.generic.customBlock.nameRequired'));
		$this->addCheck(new FormValidatorRegExp($this, 'blockName', 'required', 'plugins.generic.customBlock.nameRegEx', '/^[a-zA-Z0-9_-]+$/'));
	}

	/**
	 * Initialize form data from current group group.
	 */
	function initData() {
		$contextId = $this->contextId;
		$plugin = $this->plugin;

		$templateMgr = TemplateManager::getManager();

		$blockName = null;
		$blockContent = null;
		if ($plugin) {
			$blockName = $plugin->getName();
			$blockContent = $plugin->getSetting($contextId, 'blockContent');
		}
		$this->setData('blockContent', $blockContent);
		$this->setData('blockName', $blockName);
	}

	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$this->readUserVars(array('blockName', 'blockContent'));
	}

	/**
	 * @copydoc Form::execute()
	 */
	function execute(...$functionArgs) {
		$plugin = $this->plugin;
		$contextId = $this->contextId;
		if (!$plugin) {
			// Create a new custom block plugin
			import('plugins.generic.customBlockManager.CustomBlockPlugin');
			$customBlockManagerPlugin = PluginRegistry::getPlugin('generic', CUSTOMBLOCKMANAGER_PLUGIN_NAME);
			$plugin = new CustomBlockPlugin($this->getData('blockName'), $customBlockManagerPlugin);
			// Default the block to being enabled
			$plugin->setEnabled(true);

			// Add the custom block to the list of the custom block plugins in the
			// custom block manager plugin
			$blocks = $customBlockManagerPlugin->getSetting($contextId, 'blocks');
			if (!isset($blocks)) $blocks = array();

			array_push($blocks, $this->getData('blockName'));
			$customBlockManagerPlugin->updateSetting($contextId, 'blocks', $blocks);
		}

		// update custom block plugin content
		$plugin->updateSetting($contextId, 'blockContent', $this->getData('blockContent'));

		parent::execute(...$functionArgs);
	}
}

