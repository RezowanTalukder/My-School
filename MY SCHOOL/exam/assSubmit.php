<?php

include 'dbconfig.php';

$statusMsg = '';

// File upload path


$targetDir = "classAssignment/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

    $allowTypes = array('jpg','png','jpeg','gif','pdf','zip','rar','doc','docx','php','html','cpp');


    if(in_array($fileType, $allowTypes)){

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            $insert = $db->query("INSERT into tbl_class (name, uploaded_on) VALUES ('".$fileName."', NOW())");

            $ins = $db->query("UPDATE tbl_class SET assignment='X' WHERE id=1") ;

            if($insert && $ins){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";

            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}


   //     echo '<script language="javascript">';
     //   echo 'alert("file uploaded successfully !!")';
       // echo '</script>';

   // if (isset($_SERVER["HTTP_REFERER"])) {
  //      header("Location: " . $_SERVER["HTTP_REFERER"]);
  //  }


  
echo $statusMsg;
//echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";

?>