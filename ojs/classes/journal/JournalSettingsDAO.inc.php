<?php

/**
 * @file classes/journal/JournalSettingsDAO.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class JournalSettingsDAO
 * @ingroup journal
 *
 * @brief Operations for retrieving and modifying journal settings.
 */

import('lib.pkp.classes.db.SettingsDAO');

class JournalSettingsDAO extends SettingsDAO {
	/**
	 * Get the settings table name.
	 * @return string
	 */
	protected function _getTableName() {
		return 'journal_settings';
	}

	/**
	 * Get the primary key column name.
	 */
	protected function _getPrimaryKeyColumn() {
		return 'journal_id';
	}

	/**
	 * Get the cache name.
	 */
	protected function _getCacheName() {
		return 'journalSettings';
	}
}


