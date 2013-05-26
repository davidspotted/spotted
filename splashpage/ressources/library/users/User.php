<?php

require_once realpath(dirname(__FILE__) . '/../../Config.php');
require_once realpath(Config::getLibraryPath() . '/database/DatabaseConnection.php');

class User {

	private $dbh;

	private $id;
	private $username;
	private $email;
	private $password;
	private $gender;
	private $birthday;
	private $created;
	
	public function __construct($_id) {
		$dbh = DatabaseConnection::getInstance();
		$userString = "SELECT * FROM t_user WHERE u_id=:id LIMIT 1";
		$userStmt = $dbh->prepare($userString);
		$userStmt->bindParam(':id', $_id, PDO::PARAM_INT);
		$userStmt->execute();

		$user = $userStmt->fetch();
		$this->id = $_id;
		$this->username = $user['u_username'];
		$this->email = $user['u_email'];
		$this->password = $user['u_password'];
		$this->gender = $user['u_gender'];
		$this->birthday = $user['u_birthday'];
		$this->created = $user['u_created'];
	}
}

?>