<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();

if(isset($_GET['q'])){
  $number = (int)$_GET['q'];   /*here now $number = quesNo*/
}else{
    header("Location:exam.php");
}
$total    = $exm->getTotalRows();
$question = $exm->getQuesByNumber($number);
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $process = $pro->processData($_POST);
}
?>


<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="TimeCircles/TimeCircles.js"></script>
<link rel="stylesheet" type="text/css" href="TimeCircles/TimeCircles.css">
<?php
    $connection = mysqli_connect("localhost", "root", "", "db_exam");
    
    $sql = "SELECT * FROM tbl_examTime WHERE id=( SELECT MAX(id) FROM tbl_examTime )";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_object($result);
?>



<div data-date="<?php echo $row->endTime; ?>" id="count-down"></div>

<script type="text/javascript">
    $(function () {
        $("#count-down").TimeCircles();
    });
</script>



<div class="main">




	<?php
	/*
		$t = date('Y-m-d H:i:s');

		if ($t > $row->requiredDate) {

		
		}else{
			?>
			<div data-date="<?php echo $row->requiredDate; ?>" id="count-down"></div>
		<?php
		}
		*/
	?>


<h1>Question <?php echo $question['quesNo']; ?> of <?php echo $total;?> </h1>
	<div class="test">
		<form method="post" action="">
		<table> 
			<tr>
				<td colspan="2">
				 <h3 style="font-size: 18px">Ques <?php echo $question['quesNo']; ?>: <?php echo $question['ques'];?> </h3>
				</td>
			</tr>

            <?php
                $answer = $exm->getAnswer($number);
            if($answer){
                while($result = $answer->fetch_assoc()){
            ?>

			<tr>
				<td>
				 <input type="radio" name="ans" value="<?php echo $result['id']; ?>"/>
                    <?php echo $result['ans']; ?>
				</td>
			</tr>
			<?php } } ?>

			<tr style="padding-left: 12px;" class="button_next">
			  <td >
				<input type="submit" name="submit" value="Next Question>"/>
				<input type="hidden" name="number" value="<?php echo $number; ?>"/>
			</td>
			</tr>
			
		</table>
     </form>

</div>
 </div>

<?php include 'inc/footer.php'; ?>