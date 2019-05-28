<?php


$db = mysqli_connect('localhost', 'root', '', 'db_exam');

// REGISTER USER
if (isset($_POST['reg_time'])) {
  // receive all input values from the form
  $startTime = mysqli_real_escape_string($db, $_POST['datetimepicker']);
  $endTime = mysqli_real_escape_string($db, $_POST['datetimepicker2']);


 
  $query = "INSERT INTO tbl_examTime (endTime, startTime) 
  			  VALUES('$endTime', '$startTime')";
  	mysqli_query($db, $query);

    mysqli_close($db);


}

?>

<?php

    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

?>