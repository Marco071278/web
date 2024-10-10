<?php
include("../res/x5engine.php");
$nameList = array("lk4","4zu","ee3","fny","2y8","efn","ztj","ccv","nyh","3hp");
$charList = array("L","S","L","8","Z","N","U","G","D","A");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
