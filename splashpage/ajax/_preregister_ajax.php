<?php

require_once realpath(dirname(__FILE__) . '/../ressources/Config.php');
Config::initLocale();
require_once realpath(Config::getLibraryPath() . '/mailing/Mailing.php');

$email = $_GET['email'];
$error_msg = null;

try {
	Mailing::preRegister($email);
} catch (Exception $e) {
	$error_msg = $e->getMessage();
}

?>

<div id="return_value">
	<div id="poptop">
		<a class="closebutton" href="javascript:void(0)"><img src="<?php print Config::getImagePath('x.png'); ?>"></a>
	</div>
	<div id="popbottom">
		<?php if ($error_msg !== null): ?>
			<h5 class="error"><?php print _('ERROR_TITLE'); ?></h5>
			<p><?php print $error_msg; ?></p>
			<p><?php print _('ERROR_FOOTER'); ?></p>
		<?php else: ?>
			<h5 class="success"><?php print _('CONFIRMATION_TITLE'); ?></h5>
			<p><?php print _('CONFIRMATION_BODY'); ?></p>
			<p><?php print _('CONFIRMATION_THANKYOU'); ?></p>
			<p><?php print _('CONFIRMATION_SIGNATURE'); ?></p>
		<?php endif; ?>
	</div>
</div>