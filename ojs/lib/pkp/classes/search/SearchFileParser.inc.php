<?php

/**
 * @defgroup search Search
 * Implements search tools, such as file parsers, workflow integration,
 * indexing, querying, etc.
 */

/**
 * @file classes/search/SearchFileParser.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class SearchFileParser
 * @ingroup search
 *
 * @brief Abstract class to extract search text from a given file.
 */


class SearchFileParser {

	/** @var string the complete path to the file */
	var $filePath;

	/** @var int file handle */
	var $fp;

	/**
	 * Constructor.
	 * @param $filePath string
	 */
	function __construct($filePath) {
		$this->filePath = $filePath;
	}

	/**
	 * Return the path to the file.
	 * @return string
	 */
	function getFilePath() {
		return $this->filePath;
	}

	/**
	 * Change the file path.
	 * @param $filePath string
	 */
	function setFilePath($filePath) {
		$this->filePath = $filePath;
	}

	/**
	 * Open the file.
	 * @return boolean
	 */
	function open() {
		$this->fp = @fopen($this->filePath, 'rb');
		return $this->fp ? true : false;
	}

	/**
	 * Close the file.
	 */
	function close() {
		fclose($this->fp);
	}

	/**
	 * Read and return the next block/line of text.
	 * @return string (false on EOF)
	 */
	function read() {
		if (!$this->fp || feof($this->fp)) {
			return false;
		}
		return $this->doRead();
	}

	/**
	 * Read from the file pointer.
	 * @return string
	 */
	function doRead() {
		return fgets($this->fp, 4096);
	}


	//
	// Static methods
	//

	/**
	 * Create a text parser for a file.
	 * @param $file [Article|Paper]File
	 * @return SearchFileParser
	 */
	static function fromFile($file) {
		return SearchFileParser::fromFileType($file->getFileType(), $file->getFilePath());
	}

	/**
	 * Create a text parser for a file.
	 * @param $type string
	 * @param $path string
	 */
	static function fromFileType($type, $path) {
		switch ($type) {
			case 'text/plain':
				$returner = new SearchFileParser($path);
				break;
			case 'text/html':
			case 'text/xml':
			case 'application/xhtml':
			case 'application/xml':
				$returner = new SearchHTMLParser($path);
				break;
			default:
				$returner = new SearchHelperParser($type, $path);
		}
		return $returner;
	}
}


