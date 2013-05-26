<?php
	header('Content-type: text/css; charset: UTF-8');
	require_once realpath(dirname(__FILE__) . '/../ressources/Config.php');;
?>

body {

	color: #898989;
	text-decoration: none;
	margin: 0;
	font: 400 16px/20px 'Raleway', sans-serif;
	background: white;
}

a:link, a:visited {
	color: #d51616;
	outline:  none;
	text-decoration: none;
	}

a:hover {
	text-decoration: none;
	color: #5D5B59;
	}

h2 {
	color: #ffffff;
	font: normal normal 25px/30px Pacifico;
}

h3 {
	color: #d51616;
	font: normal normal 40px/30px Pacifico;
}

h5.error {
	color: #ff9000;
	font: normal normal 25px/30px Pacifico;
}

h5.success {
	color: #d51616;
	font: normal normal 25px/30px Pacifico;
}

#page {
	width: 100%;
	height: 100%;
}

#header-wrapper {
	width: 100%;
	height: 560px;
	box-shadow:3px 3px 8px #a3a3a3;
	-webkit-box-shadow:2px 2px 3px #b3b3b3;
	-moz-box-shadow: 2px 2px 3px #b3b3b3;
	border-color: #656565;
	background: url("<?php print Config::getImagePath('header_bg.png'); ?>") repeat scroll;
}

#header {
	width: 940px;
	height: 100%;
	margin-top: 0;
	margin-left: auto;
	margin-right: auto;
}

#logo {
	margin-left: auto;
	margin-right: auto;
	width: 48.828125%;
	height: 36.56462585034%;
	transition: all 0.1s;
	-moz-transition: all 0.1s; /* Firefox 4 */
	-webkit-transition: all 0.1s; /* Safari and Chrome */
	-o-transition: all 0.1s;
	text-align: center;
	padding-top: 130px;
}

#subscribe {
	width: 318px;
	height: 95px;
	margin-top: 50px;
	margin-left: 350px;
	margin-right: auto;
}

#email {
	height: 40px;
	width: 195px;
	margin-left: auto;
	margin-right: auto;
	outline: 0;
	border-style: none;
	font-size: 14px;
	padding-left: 15px;
	color: gray;
	float: left;
	background: transparent url("<?php print Config::getImagePath('form.png'); ?>") no-repeat;
}

#button {
	height: 42px;
	width: 100px;
	float: left;
	margin-left: auto;
	margin-right: auto;
}

.submit {
	width:100px;
	float:left;
	display:block;
	margin-left: -2px;
}

.inputText {
	display: block;
	float: left;
	margin-left: -2px;
    	width: 212px;
}


#main {
	width: 940px;
	height: 100%;
	margin-left: auto;
	margin-right: auto;
	margin-top: -81px;
}

#box1 {
	width: 410px;
	height: 410px;
	background-image: url("<?php print Config::getImagePath('box1.png'); ?>");
	margin-left: auto;
	margin-right: auto;
	padding-top: 150px;
	padding-right: 530px;
}

#box2 {
	width: 590px;
	height: 342px;
	background-image: url("<?php print Config::getImagePath('box2.png'); ?>");
	margin-left: auto;
	margin-right: auto;
	padding-left: 350px;
	padding-top: 100px;
	line-height: 22px;
}

#box3 {
	width: 940px;
	height: 422px;
	background-image: url("<?php print Config::getImagePath('box3.png'); ?>");
	margin-left: auto;
	margin-right: auto;
}

#box3 div#left {
	width: 550px;
	height: 410px;
	padding-top: 35px;
	float: left;
}

#box3 div#right{
	width: 390px;
	height: 410px;
	padding-top: 35px;
	float: right;
	text-align: center;
}

#social {
	display: block;
	list-style-type: none;
	
}

#footer {
	width: 100%;
	height: 50px;
	text-align: center;
	font: 12px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
}


#popup {
	position: absolute;
	width: 400px;
	height: 275px;
	color: white;
	font-size: 12px;
	padding: 10px;
	background-image: url("<?php print Config::getImagePath('bg-popup.png'); ?>");
	line-height: 14px;
}

#poptop {
	width: 390px;
	height: 27px;
}

#popbottom {
	width: 300px;
	height: 228px;
	padding-left: 50px;
	padding-right: 50px;
}

/* `Clear Floated Elements
----------------------------------------------------------------------------------------------------*/

/* http://sonspring.com/journal/clearing-floats */

.clear {
  clear: both;
  display: block;
  overflow: hidden;
  visibility: hidden;
  width: 0;
  height: 0;
}

/* http://www.yuiblog.com/blog/2010/09/27/clearfix-reloaded-overflowhidden-demystified */

.clearfix:before,
.clearfix:after {
  content: '\0020';
  display: block;
  overflow: hidden;
  visibility: hidden;
  width: 0;
  height: 0;
}

.clearfix:after {
  clear: both;
}

/*
  The following zoom:1 rule is specifically for IE6 + IE7.
  Move to separate stylesheet if invalid CSS is a problem.
*/

.clearfix {
  zoom: 1;
}