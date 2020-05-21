<?php

/**
 * @file classes/search/ArticleSearchDAO.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2003-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class ArticleSearchDAO
 * @ingroup search
 * @see ArticleSearch
 *
 * @brief DAO class for article search index.
 */

import('classes.search.ArticleSearch');
import('lib.pkp.classes.search.SubmissionSearchDAO');

class ArticleSearchDAO extends SubmissionSearchDAO {
	/**
	 * Retrieve the top results for a phrases with the given
	 * limit (default 500 results).
	 * @param $keywordId int
	 * @return array of results (associative arrays)
	 */
	function getPhraseResults($journal, $phrase, $publishedFrom = null, $publishedTo = null, $type = null, $limit = 500, $cacheHours = 24) {
		import('lib.pkp.classes.db.DBRowIterator');
		if (empty($phrase)) {
			$results = false;
			return new DBRowIterator($results);
		}

		$sqlFrom = '';
		$sqlWhere = '';
		$params = array();

		for ($i = 0, $count = count($phrase); $i < $count; $i++) {
			if (!empty($sqlFrom)) {
				$sqlFrom .= ', ';
				$sqlWhere .= ' AND ';
			}
			$sqlFrom .= 'submission_search_object_keywords o'.$i.' NATURAL JOIN submission_search_keyword_list k'.$i;
			if (strstr($phrase[$i], '%') === false) $sqlWhere .= 'k'.$i.'.keyword_text = ?';
			else $sqlWhere .= 'k'.$i.'.keyword_text LIKE ?';
			if ($i > 0) $sqlWhere .= ' AND o0.object_id = o'.$i.'.object_id AND o0.pos+'.$i.' = o'.$i.'.pos';

			$params[] = $phrase[$i];
		}

		if (!empty($type)) {
			$sqlWhere .= ' AND (o.type & ?) != 0';
			$params[] = $type;
		}

		if (!empty($publishedFrom)) {
			$sqlWhere .= ' AND p.date_published >= ' . $this->datetimeToDB($publishedFrom);
		}

		if (!empty($publishedTo)) {
			$sqlWhere .= ' AND p.date_published <= ' . $this->datetimeToDB($publishedTo);
		}

		if (!empty($journal)) {
			$sqlWhere .= ' AND i.journal_id = ?';
			$params[] = $journal->getId();
		}

		import('lib.pkp.classes.submission.PKPSubmission'); // STATUS_PUBLISHED
		$result = $this->retrieveCached(
			'SELECT
				o.submission_id,
				MAX(s.context_id) AS journal_id,
				MAX(i.date_published) AS i_pub,
				MAX(p.date_published) AS s_pub,
				COUNT(*) AS count
			FROM
				submissions s
				JOIN publications p ON (p.publication_id = s.current_publication_id)
				JOIN publication_settings ps ON (ps.publication_id = p.publication_id AND ps.setting_name=\'issueId\')
				JOIN issues i ON (i.issue_id = ps.setting_value)
				JOIN submission_search_objects o ON (s.submission_id = o.submission_id)
				NATURAL JOIN ' . $sqlFrom . '
			WHERE
				s.status = ' . STATUS_PUBLISHED . ' AND
				i.published = 1 AND ' . $sqlWhere . '
			GROUP BY o.submission_id
			ORDER BY count DESC
			LIMIT ' . $limit,
			$params,
			3600 * $cacheHours // Cache for 24 hours
		);

		$returner = array();
		while (!$result->EOF) {
			$row = $result->getRowAssoc(false);
			$returner[$row['submission_id']] = array(
				'count' => $row['count'],
				'journal_id' => $row['journal_id'],
				'issuePublicationDate' => $this->datetimeFromDB($row['i_pub']),
				'publicationDate' => $this->datetimeFromDB($row['s_pub'])
			);
			$result->MoveNext();
		}
		$result->Close();

		return $returner;
	}
}


