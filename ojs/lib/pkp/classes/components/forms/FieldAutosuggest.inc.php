<?php
/**
 * @file classes/components/form/FieldAutosuggest.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class FieldAutosuggest
 * @ingroup classes_controllers_form
 *
 * @brief A text field that provides suggested values while typing.
 */
namespace PKP\components\forms;

define('AUTOSUGGEST_POSITION_INLINE', 'inline');
define('AUTOSUGGEST_POSITION_BELOW', 'below');

class FieldAutosuggest extends Field {
	/** @copydoc Field::$component */
	public $component = 'field-autosuggest';

	/** @var string Displayed in the text box or below the input. One of the AUTOSUGGEST_POSITION_* constants. */
	public $initialPosition = AUTOSUGGEST_POSITION_INLINE;

	/** @var string A URL to retrieve suggestions. */
	public $suggestionsUrl;

	/**
	 * @copydoc Field::getConfig()
	 */
	public function getConfig() {
		$config = parent::getConfig();
		$config['initialPosition'] = $this->initialPosition;
		$config['suggestionsUrl'] = $this->suggestionsUrl;
		$config['deselectLabel'] = __('common.removeItem');
		$config['noneLabel'] = __('common.none');
		$config['selectedLabel'] = __('common.selectedPrefix');

		return $config;
	}
}
