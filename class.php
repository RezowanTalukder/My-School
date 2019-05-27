<?php include 'inc/header.php';
include 'dbconfig.php';
?>


<?php
Session::checkSession();
?>
<?php
$query = $db->query("SELECT * FROM tbl_class ORDER BY id ASC");

?>
    <div class="main">

    	<h1>Welcome to CLASS ROOM</h1>
		<h3 align="center"> Due Assignment List</h3>
        
        <div class="manageuser">
        	<table class="tblone" >
        		<tr>
        			<th>Class ID</th>
        			<th>Class Name</th>
        			<th>Due Assignment</th>
        			<th>&nbsp</th>
        		</tr>
        		<tr>
        	<?php
			if($query->num_rows > 0){
			    while($row = $query->fetch_assoc()){
			    	$id = $row["id"];
			        $URL = $row["name"];
			        $ass = $row["assignment"];
			?>
			    <td><?php echo $id; ?> </td>
			    <td><?php echo $URL; ?> </td>
			    <td><?php echo $ass; ?> </td>
			    <td><button class="button_class" style="padding: 5px"><a href="assignmentSubmissionPage.php">Submit</a></button></td>

			</tr>
			<?php }
			}else{ ?>
			    <p>No file(s) found...</p>
			<?php } ?>
		</table>
		</div>

	</div>


<?php include 'inc/footer.php'; ?>