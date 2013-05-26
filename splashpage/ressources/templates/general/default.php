<?php

require_once realpath(dirname(__FILE__) . '/../../Config.php');
Config::initLocale();

?>

<!DOCTYPE html>
<html>
      <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;"/>
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta charset="utf-8"/>

            <title><?php echo $t_title; ?></title>

            <!--link rel="stylesheet" type="text/css" href="css/reset.css"/-->
            <link rel="stylesheet" type="text/css" href="css/style.php"/>
            <link href='http://fonts.googleapis.com/css?family=Raleway:400,700|Pacifico' rel='stylesheet' type='text/css'>

            <script type="text/javascript" src="js/jquery.js"></script>
            <?php echo $t_fScript; ?>
            <script type="text/javascript">
                  <?php echo $t_script; ?>
            </script>
      </head>
      <body>
            <div id="page">
                  <div id="header-wrapper">
                        <?php echo $t_header; ?>
                  </div>
                  <div id="main">
                        <?php echo $t_main; ?>
                  </div>
                  <div id="footer">
                        <?php echo $t_footer; ?>
                  </div>
            </div>
      </body>
</html>