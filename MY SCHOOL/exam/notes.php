<?php
include 'inc/header.php'; 
include 'dbconfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM tbl_note ORDER BY uploaded_on DESC");

?>
    <div class="main">
        <h1 style="text-align: center; font-size: 24px">Find your Notes</h1>
        <div class="manageuser">
        	<table class="tblone" >
        		<tr>
        	<?php
			if($query->num_rows > 0){
			    while($row = $query->fetch_assoc()){
			    	$id = $row["id"];
			        $URL = $row["file_name"];
			        $date = $row["uploaded_on"];
			?>
			    <td><?php echo $id; ?>" </td>
			    <td><?php echo $URL; ?>" </td>
			    <td><?php echo $date; ?>" </td>
			    <td><button class="button_class">VIEW</button></td>

			</tr>
			<?php }
			}else{ ?>
			    <p>No image(s) found...</p>
			<?php } ?>
		</table>
		</div>

	</div>

<?php include 'inc/footer.php'; ?>