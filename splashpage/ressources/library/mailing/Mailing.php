<?php

require_once realpath(dirname(__FILE__) . '/../../Config.php');
require_once realpath(Config::getLibraryPath() . '/database/DatabaseConnection.php');

class Mailing {

	public static function preRegister($_emailAddress) {
		if (!self::validateEmailAddress($_emailAddress)) {
			throw new Exception(sprintf(_('ERROR_INVALID_EMAIL_ADDRESS'), $_emailAddress));
		}

		$dbh = DatabaseConnection::getInstance();

		$verifyString = "SELECT EXISTS (SELECT 1 FROM t_preregister WHERE LOWER(p_email)=LOWER(:email))";
		$verifyStmt = $dbh->prepare($verifyString);
		$verifyStmt->bindParam(':email', $_emailAddress, PDO::PARAM_STR, 255);
		$verifyStmt->execute();

		if ($verifyStmt->fetchColumn() == 0) {
			$token = md5(uniqid(mt_rand(), true));
			$insertString = "INSERT INTO t_preregister (p_email, p_token) VALUES (:email, :token)";
			$insertStmt = $dbh->prepare($insertString);
			$insertStmt->execute(array(':email' => $_emailAddress, ':token' => $token));
			self::sendConfirmationMailTo($_emailAddress, $token);
		} else {
			throw new Exception(sprintf(_('ERROR_EMAIL_ADDRESS_EXISTS'), $_emailAddress));
		}
	}

	public static function validateEmailAddress($_emailAddress) {
		return preg_match("/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b/", strtoupper($_emailAddress));
	}

	public static function sendConfirmationMailTo($_emailAddress, $_token) {
		$urlInfo = Config::getEnvInfo();
		$confirmLink = "{$urlInfo['url'][$urlInfo['current']]}/confirmemail.php?token={$_token}";

		$emailInfo = Config::getEmailInfo();
		$subject = "Confirmez votre inscription - Confirm your subscription";
		$message = "Bonjour, merci de vous avoir inscrit à notre liste d’attendte SPOTTED. Notre site web et application seront bientôt disponibles. Nous vous tiendrons au courant de l’avancement et des nouveautés à venir.\n\nConfirmez votre adresse courriel avec l’aide du lien ci-dessous :\n<a href='{$confirmLink}'>Confirmation</a>\n\nSi vous avez reçu ce courriel par mégarde, simplement ignorer ce message.\n\n\nHello, your registration as been sucessful for SPOTTED waiting list. Our website and application will be available soon. We will keep you informed of the progress and upcoming features.\n\nConfirm your email address using the link below:\n<a href='{$confirmLink}'>Confirmation</a>\n\nIf you have received this email by mistake, simply ignore this message.\n\nMerci, Thanks,\nSPOTTED Team";
		$from = $emailInfo['diffusion'];

		mail($_emailAddress, $subject, $message, "From: $from");
	}

	public static function confirmEmail($_token) {
		$dbh = DatabaseConnection::getInstance();
		$verifyString = "SELECT EXISTS (SELECT 1 FROM t_preregister WHERE p_token=:token)";
		$verifyStmt = $dbh->prepare($verifyString);
		$verifyStmt->execute(array(':token' => $_token));

		if ($verifyStmt->fetchColumn() === 0) {
			throw new Exception(_('ERROR_TOKEN_UNEXISTENT'));
		} else {
			$updateString = "UPDATE t_preregister SET p_verified=1 WHERE p_token=:token";
			$updateStmt = $dbh->prepare($updateString);
			$updateStmt->execute(array(':token' => $_token));
			return _('CONFIRMED_EMAIL_PREREGISTER');
		}
		
	}

}

?>