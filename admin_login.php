<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
	.header{
    background-image: url("b.jpg");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;

    height: 100vh;
    position: fixed;
    left: 0;
    right: 0;
    z-index: -1;
    filter: blur(3px);
    -webkit-filter: blur(3px);

}
.heading1{
    font-size: 40px;
}

.button{
    background-color: cyan;
    border-color: black;
    border-width: 1px;
    border-radius: 5%;
    width: 100px;
    height: 30px
}
.button:hover{
    background-color:rgb(238, 78, 112);
}
#displayed-captcha{
	display: inline-block;
	width: 80px;
	height: 20px;
	background-color: #FFF8F3;
	color: rgb(0,0,0,0.7);
	text-decoration: line-through;
	padding: 5px;
	border-radius: 5%;
}



</style>



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
				<tr styles="margin-top: 10px">
					<td><strong>Captcha:</strong></td>
					<td><p id="displayed-captcha" >Captcha</p></td>
                </tr>
			
			</table>
			<br>
			<div>
				<input id="entered-captcha" type="text" name="captcha" placeholder="Enter Captcha" required>
			</div>
			<br>
			<input id="login-button" class="button" type="submit" name="submit" value="LogIn">
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
							<span>Wrong Email or Password !!</span>
							<?php
						}
					}
				}
				
			}
		?>
	</center>
	<script src="student_login_js.js"></script>
</body>
</html>