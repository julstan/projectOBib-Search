<?php

/**
 * @file classes/handler/Handler.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class Handler
 * @ingroup handler
 *
 * @brief Base request handler application class
 */

import('lib.pkp.classes.handler.PKPHandler');

class Handler extends PKPHandler {

	/**
	 * Returns a "best-guess" journal, based in the request data, if
	 * a request needs to have one in its context but may be in a site-level
	 * context as specified in the URL.
	 * @param $request Request
	 * @param $journalsCount int Optional reference to receive journals count
	 * @return mixed Either a Journal or null if none could be determined.
	 */
	function getTargetContext($request, &$journalsCount = null) {
		// Get the requested path.
		$router = $request->getRouter();
		$requestedPath = $router->getRequestedContextPath($request);

		if ($requestedPath === 'index' || $requestedPath === '') {
			// No journal requested. Check how many journals the site has.
			$journalDao = DAORegistry::getDAO('JournalDAO'); /* @var $journalDao JournalDAO */
			$journals = $journalDao->getAll(true);
			$journalsCount = $journals->getCount();
			$journal = null;
			if ($journalsCount === 1) {
				// Return the unique journal.
				$journal = $journals->next();
			}
			if (!$journal && $journalsCount > 1) {
				// Get the site redirect.
				$journal = $this->getSiteRedirectContext($request);
			}
		} else {
			// Return the requested journal.
			$journal = $router->getContext($request);

			// If the specified journal does not exist, respond with a 404.
			if (!$journal) $request->getDispatcher()->handle404();
		}
		if (is_a($journal, 'Journal')) {
			return $journal;
		}
		return null;
	}
}


