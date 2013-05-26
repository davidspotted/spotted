<?php

class Config {

	const DEFAULT_LOCALE = 'en_US';

	private static $library_path = null;
	private static $templates_path = null;
	private static $locale_path = null;
	private static $db_info = array(
		'prod' => array(
			'dbname' => 'spotteddb',
			'username' => 'spotteddb',
			'password' => 'Sp0t!3d5wa3g',
			'host' => 'spotteddb.db.10526796.hostedresource.com'
		),
	);
	private static $env_info = array(
		'current' => null,
		'url' => array(
			'local' => 'http://local.ugotspotted.com',
			'beta' => 'http://beta.ugotspotted.com',
			'prod' => 'http://www.ugotspotted.com',
		),
	);
	private static $path_info = array(
		// 'resources' => '/path/to/resources', // ??
		'javascript' => '/js',
		'ajax' => '/ajax',
		'images' => array(
			'general' => '/images',
			'content' => '/images/content',
			'layout' => '/images/layout',
		),
		'fonts' => '/fonts',
	);
	private static $email_info = array(
		'info' => 'info@ugotspotted.com',
		'diffusion' => 'noreply@ugotspotted.com',
	);


	public static function getLibraryPath() {
		if (self::$library_path == null) {
			self::$library_path = realpath(dirname(__FILE__) . '/library');
		}
		return self::$library_path;
	}
	public static function getTemplatePath() {
		if (self::$templates_path == null) {
			self::$templates_path = realpath(dirname(__FILE__) . '/templates');
		}
		return self::$templates_path;
	}
	public static function getLocalePath() {
		if (self::$locale_path == null) {
			self::$locale_path = realpath(dirname(__FILE__) . '/locale');
		}
		return self::$locale_path;
	}
	public static function getDbInfo() {
		return self::$db_info;
	}
	public static function getEnvInfo() {
		if (self::$env_info['current'] == null) {
			$temp = explode('.', $_SERVER['HTTP_HOST']);
			self::$env_info['current'] = ($temp[0] == 'www') ? 'prod' : $temp[0];
		}
		return self::$env_info;
	}
	public static function getPathInfo() {
		if (self::$path_info['javascript'] == null) {
			self::$path_info['javascript'] = "{$_SERVER['DOCUMENT_ROOT']}/js";
		}
		if (self::$path_info['ajax'] == null) {
			self::$path_info['ajax'] = "{$_SERVER['DOCUMENT_ROOT']}/ajax";
		}
		if (self::$path_info['images']['general'] == null) {
			self::$path_info['images']['general'] = "/images";
		}
		if (self::$path_info['images']['content'] == null) {
			// self::$path_info['images']['content'] = "{$_SERVER['DOCUMENT_ROOT']}/images/content";
			self::$path_info['images']['content'] = "/images/content";
		}
		if (self::$path_info['images']['layout'] == null) {
			self::$path_info['images']['layout'] = "/images/layout";
		}
		return self::$path_info;
	}
	public static function getAjaxPath($_libFile) {
		$pathinfo = self::getPathInfo();
		return "{$pathinfo['ajax']}/$_libFile";
	}
	public static function getImagePath($_image, $_option = '') {
		$pathinfo = self::getPathInfo();
		if ($_option !== '' && in_array($_option, array_keys($pathinfo['images']))) {
			return "{$pathinfo['images'][$_option]}/$_image";
		} else {
			return "{$pathinfo['images']['general']}/$_image";
		}
	}
	public static function getFontPath($_font) {
		$pathinfo = self::getPathInfo();
		return "{$pathinfo['fonts']}/$_font";
	}
	public static function getEmailInfo() {
		return self::$email_info;
	}
	public static function getCurrentLocale() {
		$r_locale = null;
		if (self::_isVariableSet($_GET['locale'])) {
			$r_locale = $_GET['locale'];
		} elseif (session_id() && self::_isVariableSet($_SESSION['locale'])) {
			$r_locale = $_SESSION['locale'];
		} elseif (self::_isVariableSet($_COOKIE['locale'])) {
			$r_locale = $_COOKIE['locale'];
		} else {
			$r_locale = self::DEFAULT_LOCALE;
		}
		self::setLocale($r_locale);

		return $r_locale;
	}

	public static function initLocale() {
		putenv('LANG=' . self::getCurrentLocale());
		setlocale(LC_ALL, self::getCurrentLocale());

		$domain = 'messages';
		bindtextdomain($domain, self::getLocalePath());
		bind_textdomain_codeset($domain, 'UTF-8');

		textdomain($domain);
	}
	public static function setLocale($_locale) {
		setcookie('locale', $_locale);
	}


	private static function _isVariableSet($_var) {
		return (isset($_var) && $_var != '');
	}

}

?>