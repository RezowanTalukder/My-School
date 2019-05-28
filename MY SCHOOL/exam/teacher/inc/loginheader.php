<?php
include_once("../lib/Session.php");
Session::checkAdminLogin();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache");
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<head>
	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="phpcoding">
	<section class="headeroption">
		
	  <div class="menuUp">
        <ul>
            <?php
            $login = Session::get("login");
            if($login == true){
            ?>
            <li><img src="img/logo.jpg" width="120px" height="90px"></li>
            <li><a href="#">CLASS ROOM</a></li>
            <li><a href="exam.php">EXAM ROOM</a></li>
            <li><a href="uploadNotes.php">NOTES </a></li>
            <li><a href="http://localhost/spl/tutorial_index.php">TUTORIALS</a></li>
            <li><a href="?action=logout">LOG OUT </a></li>

            <?php }else {
            ?>
            <li><img src="img/logo.jpg" width="130px" height="100px"></li>
            <li><a href="http://localhost/spl/tutorial_index.php">TUTORIALS</a></li>
            <li><a href="http://localhost/spl/index.php">STUDENT LOGIN</a></li>      
            <li><a href="index.php">TEACHER LOGIN</a></li>
            <li><a href="#">REGISTER</a></li>
            <li><a href="uploadNotes.php">NOTES </a></li>

            <?php } ?>
        </ul>

    </div>

	</section>
		<section class="maincontent">

	