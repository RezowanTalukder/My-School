<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
$usr = new User();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];



    $uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
		$userReg = $usr->userRegistration($name, $username, $password, $email);
	}

    else{
		echo "invalid email !" ;
    }

    
	}
?>