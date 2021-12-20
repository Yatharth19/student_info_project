<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="styles.css">
</head>
<body>
	<center><br><br>
	<div class="header"></div>
	<div class="header-text">
		<h3 class=heading1>Admin LogIn Page</h3><br>
		<form action="" method="post">
			<table>
				<tr>
					<td><strong>Email ID:</strong></td>
					<td><input type="text" name="email" placeholder="example@example.com" required></td>
				</tr>
				<tr>
					<td><strong>Password:</strong></td>
					<td><input type="password" name="password" placeholder="Password" required></td>
				</tr>
			</table>
			<br>
			<input type="checkbox" name="checkbox"><label><strong>I'm not a robot<strong></label>
			<br>
			<input class="button" type="submit" name="submit" value="LogIn">
		</form><br>
		</div>
		
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"dbms project");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: admin_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
				}
				
			}
		?>
	</center>
</body>
</html>