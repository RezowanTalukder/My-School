<?php include 'inc/header.php';
include 'dbconfig.php';
?>


<?php
Session::checkSession();
?>

<div class="main">

    <h1>Select File from your Local Stoage</h1>
    <div class="adminpanel" style="background-color:   #d9d9d9">
         <form action="assSubmit.php" method="post" enctype="multipart/form-data">
		    <h3></h3><br><br>
		    <input type="file" name="file">
		    <input type="submit" name="submit" value="Upload">
		</form>

	</div>
        
</div>


<?php include 'inc/footer.php'; ?>