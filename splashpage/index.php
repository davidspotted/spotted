<?php

require_once realpath(dirname(__FILE__) . '/ressources/Config.php');
$pathInfo = Config::getPathInfo();
Config::initLocale();

$t_title = _('PREREGISTER_TITLE');
$t_fScript = "";
$t_script = "
$(document).ready(function() {
      $('#popup').hide();
      
      $('#frmPreRegister').submit(function(_event) {
            _event.preventDefault();
            var form = $(this);
            var term = form.find(\"input[name='email']\").val();
            var action = form.attr('action');

            $.ajax({
                  type: 'GET',
                  url: action,
                  data: { 'email': term },
                  dataType: 'html',
                  success: function(_data, _status, _xhr) {
                        console.log(_status);
                        var re = $($.parseHTML(_data)).filter('#return_value');
                        $('#popup').empty().append(re.html());
                        $('#popup').fadeIn(500);
                        positionPopup();
                        $('#poptop a.closebutton').click(function(){
                              $('#popup').fadeOut(500);
                        });
                  },
                  error: function(_data, _error) {
                        console.log(_error);
                  }
            });
      });

      function positionPopup(){
            if(!$('#popup').is(':visible')){
                  return;
            }
            $('#popup').css({
                  left: ($(window).width() - $('#popup').width()) / 2,
                  top: ($(window).width() - $('#popup').width()) / 7,
                  position:'absolute'
            });
      }

      $(window).bind('resize',positionPopup);
});
";

ob_start();
include realpath(Config::getTemplatePath() . '/preregister/header.php');
$t_header = ob_get_contents();
ob_end_clean();

ob_start();
include realpath(realpath(Config::getTemplatePath() . '/preregister/main.php'));
$t_main = ob_get_contents();
ob_end_clean();

ob_start();
include realpath(Config::getTemplatePath() . '/preregister/footer.php');
$t_footer = ob_get_contents();
ob_end_clean();

require realpath(Config::getTemplatePath() . '/general/default.php');

?>