<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Session.php');
Session::init();

include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');

spl_autoload_register(function($class){
    include_once "classes/".$class.".php";
});

$db = new Database();
$fm = new Format();
$usr = new User();
$exm = new Exam();
$pro = new process();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<head>
	<title>Exam-room</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</head>
<body>

<?php
if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    Session::destroy();
    header("Location:index.php");
    exit();
}
?>

<div class="phpcoding">
	<section class="headeroption">
     
    <div class="menuUp">
        <ul>
            <?php
            $login = Session::get("login");
            if($login == true){
            ?>
            <li><img src="img/logo.jpg" width="120px" height="90px"></li>
            <li><a href="class.php">CLASS ROOM</a></li>
            <li><a href="exam.php">EXAM ROOM</a></li>
            <li><a href="notes.php">NOTES</a></li>
            <li><a href="tutorial_index.php">TUTORIALS</a></li>
            <li><a href="?action=logout">LOG OUT </a></li>

            <?php }else {
            ?>
            <li><img src="img/logo.jpg" width="130px" height="100px"></li>
            <li><a href="tutorial_index.php">TUTORIALS</a></li>
            <li><a href="index.php">STUDENT LOGIN</a></li>      
            <li><a href="teacher\index.php">TEACHER LOGIN</a></li>
            <li><a href="register.php">REGISTER</a></li>

            <?php } ?>
        </ul>

    </div>

    </section>
		<section class="maincontent">
		<div class="menu">
		<ul>
            <?php
            $login = Session::get("login");
            if($login == true){
            ?>
			<li><a href="profile.php">Profile</a></li>
			
			

            <?php }else {
            ?>
            <!--
            <li><a href="index.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            ------>

            <?php } ?>
		</ul>

            <?php
            $login = Session::get("login");
            if($login == true){
            ?>
            <span style="float: right; color: #888">
                welcome <a href="profile.php"><strong><?php echo Session::get("username"); ?></strong></a>
            </span>
            <?php } ?>
		</div>
	