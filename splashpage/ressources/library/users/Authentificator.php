<?php

require_once realpath(dirname(__FILE__) . '/../../Config.php');
require_once realpath(Config::getLibraryPath() . '/database/DatabaseConnection.php');
require_once realpath(Config::getLibraryPath() . '/users/User.php');

class Authentificator {

	private static $instance;
	private $current;

	private __construct() {
		$this->current = null;
	}

	public static function getInstance() {
		if (!isset(self::$instance) || self::$instance === null) {
			self::$instance = new Authentificator();
		}
		return self::$instance;
	}

	public function connect($_username, $_password) {
		$dbh = DatabaseConnection::getInstance();
		$connStr = "SELECT u_id FROM t_user WHERE (u_username=:usern OR u_email=:email) AND u_password=MD5(:passw) LIMIT 1";
		$connStmt = $dbh->prepare($connStr);
		$connStmt->bindParam(':usern', $_username, PDO::PARAM_STR, 255);
		$connStmt->bindParam(':email', $_username, PDO::PARAM_STR, 255);
		$connStmt->bindParam(':passw', $_password, PDO::PARAM_STR, 255);
		$connStmt->execute();

		if (($user = $connStmt->fetch()) !== null) {
			$this->current = new User($user['u_id']);
		} else {
			throw new Exception(_('ERROR_USER_UNEXISTENT'));
		}
	}

	public function disconnect() {
		$this->current = null;
	}

	public function getCurrentUser() {
		return $this->current;
	}

}

?>