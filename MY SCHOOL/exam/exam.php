<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();
?>

<div class="main">
<h1>Welcome to EXAM ROOM</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/online_exam.png"/>
	</div>
	<div class="segment">
	<h2>Exam Rule</h2>


        <p style="text-align: justify; display: block; font-size: 16px; color: #444444">Communicating or trying to communicate in any way with fellow students<br>
- Attempting to view examination papers of others<br>
- Using unapproved examination materials, such as: calculators, mobile phones, formulas<br>
- Possessing “cheat sheets”<br>
- Writing on desk, body parts, dress, scale or in any other materials</p>


	<ul style="padding-top: 20px; padding-left: 50px;">
		<li><a href="start_test.php">Start Here...</a></li>
	</ul>
	</div>
	
  </div>
<?php include 'inc/footer.php'; ?>