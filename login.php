<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link </head>
	<style>
		.img {
			width: 100%;
			/* position: absolute; */
			z-index: -1;
			opacity: 0.5;
			position:fixed;
			margin-top: -250px;
			height: 120%;
		}

		.left {
			display: inline-block;
			/* border: 2px solid red; */
			position: absolute;
			left: 60px;
			top: 50px;
			margin-left: 675px;
		}

		.left img {
			width: 250px;
			height: 200px;
			margin-left: -56px;
		}
		}

		.left div {
			line-height: 16px;
			font-size: 14px;
			margin-left: -50px;
		}

		.b,
		.c {
			cursor: pointer;
			border-radius: 7px;
			background-color: rgb(179, 245, 250);
			font-weight: 750;
			margin-inline: 24px;
			font-size: 23px;
			padding-inline: 37px;
		}

		.b:hover,
		.c:hover {
			background-color: rgb(250, 129, 129);
		}

		#s {
			font-size: 44px;
			color: orange;
		}

		.container {
			padding-bottom: 2px;
		}

		.container ul li {
			text-align: left;
			margin-left: 0px;
			font-size: 16px;
			color: solid black;
			font-weight: bold;
		}

		.container p {
			text-align: left;
			margin-left: 32px;
			color: red;
			font-size: 22px;
			margin-top: 74px;
			/* line-height: 0px; */
			font-weight: bold;
		}
		.div{
			margin-top: -31px;
    margin-left: -54px;
		}
		#main{
			margin-top:250px;
		}
	</style>

<body>
	<img class="img" src="d.jpg" alt="no img">
	<div class="left">
		<img src="logo.jpg" alt="">
		<div class="div">XYZ College of Engineering </div>
	</div>
	<div id="main">
	<center>
		<h3 id="s">Student Information System</h3><br>
		<form action="" method="POST">
			<input class="b" type="submit" name="admin_login" value="Admin Login" required>
			<input class="c" type="submit" name="student_login" value="Student Login" required>
		</form>
		<!-- <div class="container">
			<p>About</p>
			<ul type="disc">
				<li>Admissions</li>
				<li>Results</li>
				<li>Examination related matters</li>
				<li>Scholarship</li>
			</ul>
		</div> -->
		<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	    ?>
	</center>
	</div>
</body>

</html>