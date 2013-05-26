<?php

require_once realpath(dirname(__FILE__) . '/ressources/Config.php');
$pathInfo = Config::getPathInfo();
Config::initLocale();
require_once realpath(Config::getLibraryPath() . '/mailing/Mailing.php');

if (isset($_GET['token']) && $_GET['token'] != '') {
	try {
		print Mailing::confirmEmail($_GET['token']);
	} catch (Exception $e) {
		print $e->getMessage();
	}
}

?>