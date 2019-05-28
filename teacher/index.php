<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
?>


<div class="main">
<h1 style="text-align: center">Welcome to Examroom</h1>
    <div class="adminpanel">
        

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.min.css" />

		

		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
		<script src="http://cdn.craig.is/js/rainbow-custom.min.js"></script>
		<script>
		      $(document).ready(function() {
		        	$.datetimepicker.setLocale('pt-BR');
		       	$('#datetimepicker').datetimepicker();
		      });

		      $(document).ready(function() {
		        	$.datetimepicker.setLocale('pt-BR');
		       	$('#datetimepicker2').datetimepicker();
		      });

		</script>

		<form method="post" action="dateSender.php">

		Enter Start Time: 
		<input id="datetimepicker" type="text" name="datetimepicker"> <br><br>

		Enter End Time: 
		<input id="datetimepicker2" type="text" name="datetimepicker2"> <br><br><br>

		<button type="submit" style="padding: 10px" name="reg_time" id = "reg_time">Submit</button>
			
		</form>
		




    </div>
	
</div>

<?php include 'inc/footer.php'; ?>