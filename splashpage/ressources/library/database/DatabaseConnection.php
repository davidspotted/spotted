<?php

require_once realpath(dirname(__FILE__) . '/../../Config.php');

class DatabaseConnection {

	private static $instance = null;
	private $connection = null;

	private function __construct() {
		$configDB = Config::getDbInfo();
		try {
			$this->connection = new PDO("mysql:host={$configDB['prod']['host']};dbname={$configDB['prod']['dbname']}", $configDB['prod']['username'], $configDB['prod']['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			throw $e;
		}
	}

	public static function getInstance() {
		if (self::$instance === null) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function prepare($_query) {
		return $this->connection->prepare($_query);
	}

}

?>