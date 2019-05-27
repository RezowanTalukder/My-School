<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
$usr1 = new User();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $catagory = $_POST['catagory'];
    $description = $_POST['description'];

    $getReq = $usr1->getRequest($name, $email, $catagory, $description);

   }
?>