<?php

/**
 * @file classes/db/DBConnection.inc.php
 *
 * Copyright (c) 2014-2020 Simon Fraser University
 * Copyright (c) 2000-2020 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class DBConnection
 * @ingroup db
 *
 * @brief Class for accessing the low-level database connection.
 * Currently integrated with ADOdb (from http://adodb.sourceforge.net).
 */

define('ADODB_OUTP', array('DBConnection', 'logAdodbMessage'));

class DBConnection {

	/** The underlying database connection object */
	var $dbconn;

	/** Database connection parameters */
	var $driver;
	var $host;
	var $username;
	var $password;
	var $databaseName;
	var $persistent;
	var $connectionCharset;
	var $forceNew; // Only applicable if non-persistent

	/** @var boolean establish connection on initiation */
	var $connectOnInit;

	/* @var boolean enable debugging output */
	var $debug;

	/** @var boolean indicate connection status */
	var $connected;

	/**
	 * Constructor.
	 * Calls initDefaultDBConnection if no arguments are passed,
	 * otherwise calls initCustomDBConnection with custom connection
	 * parameters.
	 */
	function __construct() {
		$this->connected = false;

		if (func_num_args() == 0) {
			$this->initDefaultDBConnection();
		} else {
			$args = func_get_args();
			call_user_func_array(array($this, 'initCustomDBConnection'), $args);
		}
	}

	/**
	 * Log message handler for ADODB.
	 * @param $msg string
	 * @param $newline boolean
	 * @see ADOConnection::outp
	 */
	static function logAdodbMessage($msg, $newline=true) {
		error_log('PKP-Database-Logger ' . Registry::get('system.debug.startTime') . ': ' . PKPString::html2text($msg));
	}

	/**
	 * Create new database connection with the connection parameters from
	 * the system configuration.
	 * @return boolean
	 */
	function initDefaultDBConnection() {
		$this->driver = Config::getVar('database', 'driver');
		$this->host = Config::getVar('database', 'host');
		$socket = Config::getVar('database', 'unix_socket');
		$port = Config::getVar('database', 'port');
		if ($socket) {
			$this->host .= ':' . $socket;
		} elseif ($port) {
			$this->host .= ':' . $port;
		}
		$this->username = Config::getVar('database', 'username');
		$this->password = Config::getVar('database', 'password');
		$this->databaseName = Config::getVar('database', 'name');
		$this->persistent = Config::getVar('database', 'persistent') ? true : false;
		$this->connectionCharset = Config::getVar('i18n', 'connection_charset');
		$this->debug = Config::getVar('database', 'debug') ? true : false;
		$this->connectOnInit = true;
		$this->forceNew = false;

		return $this->initConn();
	}

	/**
	 * Create new database connection with the specified connection
	 * parameters.
	 * @param $driver string
	 * @param $host string (Use host:socket and host:port for non-standard port and socket)
	 * @param $username string
	 * @param $password string
	 * @param $databaseName string
	 * @param $persistent boolean use persistent connections (default false)
	 * @param $connectionCharset string character set to use for the connection (default none)
	 * @param $connectOnInit boolean establish database connection on initiation (default true)
	 * @param $debug boolean enable verbose debug output (default false)
	 * @param $forceNew boolean force a new connection (default false)
	 * @return boolean
	 */
	function initCustomDBConnection($driver, $host, $username, $password, $databaseName, $persistent = false, $connectionCharset = false, $connectOnInit = true, $debug = false, $forceNew = false) {
		$this->driver = $driver;
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->databaseName = $databaseName;
		$this->persistent = $persistent;
		$this->connectionCharset = $connectionCharset;
		$this->connectOnInit = $connectOnInit;
		$this->debug = $debug;
		$this->forceNew = $forceNew;

		return $this->initConn();
	}

	/**
	 * Initialize database connection object and establish connection to the database.
	 * @return boolean
	 */
	function initConn() {
		require_once('lib/pkp/lib/vendor/adodb/adodb-php/adodb.inc.php');

		$this->dbconn = ADONewConnection($this->driver);

		if ($this->connectOnInit) {
			return $this->connect();
		} else {
			return true;
		}
	}

	/**
	 * Establish connection to the database.
	 * @return boolean
	 */
	function connect() {
		if ($this->persistent) {
			$this->connected = @$this->dbconn->PConnect(
				$this->host,
				$this->username,
				$this->password,
				$this->databaseName
			);

		} else {
			$this->connected = @$this->dbconn->Connect(
				$this->host,
				$this->username,
				$this->password,
				$this->databaseName,
				$this->forceNew
			);
		}

		if ($this->debug) {
			// Enable verbose database debugging (prints all SQL statements as they're executed)
			$this->dbconn->debug = true;
		}

		if ($this->connected && $this->connectionCharset) {
			// Set client/connection character set
			// NOTE: Only supported on some database servers and versions
			$this->dbconn->SetCharSet($this->connectionCharset);
		}

		return $this->connected;
	}

	/**
	 * Disconnect from the database.
	 */
	function disconnect() {
		if ($this->connected) {
			$this->dbconn->Disconnect();
			$this->connected = false;
		}
	}

	/**
	 * Reconnect to the database.
	 * @param $forceNew boolean force a new connection
	 */
	function reconnect($forceNew = false) {
		$this->disconnect();
		if ($forceNew) {
			$this->persistent = false;
		}
		$this->forceNew = $forceNew;
		return $this->connect();
	}

	/**
	 * Return the database connection object.
	 * @return ADONewConnection
	 */
	function &getDBConn() {
		return $this->dbconn;
	}

	/**
	 * Check if a database connection has been established.
	 * @return boolean
	 */
	function isConnected() {
		return $this->connected;
	}

	/**
	 * Get number of database queries executed.
	 * @return int
	 */
	function getNumQueries() {
		return isset($this->dbconn) ? $this->dbconn->numQueries : 0;
	}

	/**
	 * Return a reference to a single static instance of the database connection manager.
	 * @param $setInstance DBConnection
	 * @return DBConnection
	 */
	static function getInstance($setInstance = null) {
		$instance =& Registry::get('dbInstance', true, null);

		if (isset($setInstance)) {
			$instance = $setInstance;
		} else if ($instance === null) {
			$instance = new DBConnection();
		}

		return $instance;
	}

	/**
	 * Return a reference to a single static instance of the database connection.
	 * @return ADONewConnection
	 */
	static function &getConn() {
		$conn = DBConnection::getInstance();
		return $conn->getDBConn();
	}

	/**
	 * Return the name of the driver used for this connection.
	 * @return string
	 */
	function getDriver() {
		return $this->driver;
	}
}


