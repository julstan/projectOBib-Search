<?php
/**
 * @file classes/services/QueryBuilders/PKPContextQueryBuilder.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class PKPContextQueryBuilder
 * @ingroup query_builders
 *
 * @brief Base class for context (journals/presses) list query builder
 */

namespace PKP\Services\QueryBuilders;

use Illuminate\Database\Capsule\Manager as Capsule;
use PKP\Services\QueryBuilders\Interfaces\EntityQueryBuilderInterface;

abstract class PKPContextQueryBuilder extends BaseQueryBuilder implements EntityQueryBuilderInterface {

	/** @var string The database name for this context: `journals` or `presses` */
	protected $db;

	/** @var string The database name for this context's settings: `journal_settings` or `press_settings` */
	protected $dbSettings;

	/** @var string The column name for a context ID: `journal_id` or `press_id` */
	protected $dbIdColumn;

	/** @var boolean enabled or disabled contexts */
	protected $isEnabled = null;

	/** @var string search phrase */
	protected $searchPhrase = null;

	/**
	 * Set isEnabled filter
	 *
	 * @param $isEnabled boolean
	 *
	 * @return \PKP\Services\QueryBuilders\PKPContextQueryBuilder
	 */
	public function filterByIsEnabled($isEnabled) {
		$this->isEnabled = $isEnabled;
		return $this;
	}

	/**
	 * Set query search phrase
	 *
	 * @param $phrase string
	 *
	 * @return \PKP\Services\QueryBuilders\PKPContextQueryBuilder
	 */
	public function searchPhrase($phrase) {
		$this->searchPhrase = $phrase;
		return $this;
	}

	/**
	 * @copydoc PKP\Services\QueryBuilders\Interfaces\EntityQueryBuilderInterface::getCount()
	 */
	public function getCount() {
		return $this
			->getQuery()
			->select('c.' . $this->dbIdColumn)
			->get()
			->count();
	}

	/**
	 * @copydoc PKP\Services\QueryBuilders\Interfaces\EntityQueryBuilderInterface::getIds()
	 */
	public function getIds() {
		return $this
			->getQuery()
			->select('c.' . $this->dbIdColumn)
			->pluck('c.' . $this->dbIdColumn)
			->toArray();
	}

	/**
	 * @copydoc PKP\Services\QueryBuilders\Interfaces\EntityQueryBuilderInterface::getQuery()
	 */
	public function getQuery() {
		$this->columns[] = 'c.*';
		$q = Capsule::table($this->db . ' as c')
					->leftJoin($this->dbSettings . ' as cs', 'cs.' . $this->dbIdColumn, '=', 'c.' . $this->dbIdColumn)
					->groupBy('c.' . $this->dbIdColumn);

		if (!empty($this->isEnabled)) {
			$q->where('c.enabled', '=', 1);
		} elseif ($this->isEnabled === false) {
			$q->where('c.enabled', '!=', 1);
		}

		// search phrase
		if (!empty($this->searchPhrase)) {
			$words = explode(' ', $this->searchPhrase);
			if (count($words)) {
				foreach ($words as $word) {
					$q->where(function($q) use ($word) {
						$q->where(function($q) use ($word) {
								$q->where('cs.setting_name', 'name');
								$q->where('cs.setting_value', 'LIKE', "%{$word}%");
							})
							->orWhere(function($q) use ($word) {
								$q->where('cs.setting_name', 'description');
								$q->where('cs.setting_value', 'LIKE', "%{$word}%");
							})
							->orWhere(function($q) use ($word) {
								$q->where('cs.setting_name', 'acronym');
								$q->where('cs.setting_value', 'LIKE', "%{$word}%");
							})
							->orWhere(function($q) use ($word) {
								$q->where('cs.setting_name', 'abbreviation');
								$q->where('cs.setting_value', 'LIKE', "%{$word}%");
							});
					});
				}
			}
		}

		// Add app-specific query statements
		\HookRegistry::call('Context::getContexts::queryObject', array(&$q, $this));

		$q->select($this->columns);

		return $q;
	}
}
