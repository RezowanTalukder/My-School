<?php
$link = mysqli_connect("localhost", "root", "", "db_exam");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$catagory = mysqli_real_escape_string($link, $_REQUEST['catagory']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
 

$sql = "INSERT INTO tbl_request (name, email, catagory, description) VALUES ('$name', '$email', '$catagory', '$description')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>