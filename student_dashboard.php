<!DOCTYPE html>
<html>

<!-- <link rel="stylesheet" type="text/css" href="student_dashboard.css"> -->
<head>
	<title>Admin Dashboard</title>
	<style type="text/css">
		#header {
			height: 11%;
			width: 68%;
			background-color: black;
			display: flex;
			position: absolute;
			color: white;
			padding-inline-start: 32%;
			margin: -10px;
			font-size: 22px;
			padding-top: 20px;
            text-align: center;
		}

		table {
			text-align: center;
			justify-content: center;
		}



#right_side {
    z-index: 1;
    padding: 150px;
    padding-top: 80px;
    display: flex;
    position: absolute;
    z-index: -1;
    /* float: right; */
    flex-shrink: 6;
    margin-right: 20px;
    /* font-size: small; */
    height: auto;
    width: 60%;
    background-color: rgb(224, 234, 243);
    position: fixed;
    left: 10%;
    top: 21%;
    /* bottom: 20%; */
    /* right: 12%; */
    border: solid 1px black;
    color: rgb(42, 112, 216);
}

		#top_span {
			top: 13%;
			width: 100%;
			/* left: 17%; * */
			display: flex;
			position: absolute;
			font-weight: 700;
		}

		.tb {
			margin: 7px;
			border-radius: 6px;
			width: 90%;
			text-align: start;
		}

		.save {
			width: 50%;
			height: 2em;
			margin-left: 145px;
			cursor: pointer;
			background-color: lightgreen;
			border-radius: 15px;
			font-weight: 600;
			margin-top: 36px;
		}

		.save:hover {
			/* color:red; */
			background-color: red;
		}

		.bt,
		.ct {
			cursor: pointer;
			/* float: left; */
			/* margin-top: -30px; */
			padding: 16px;
			border-radius: 12px;
			font-weight: 600;
			/* padding-inline: 18px; */
			margin-inline: 106px;
			height: 32px;
			padding-top: 2px;
			background-color: rgb(183, 200, 226);

		}

		.bt:hover,
		.ct:hover {
			background-color: rgb(42, 112, 216);
		}

		.b {
			width: 100%;
			position: fixed;
            height: 100%;
			z-index: -1;
			opacity: 0.6;
            margin: -10px;
            margin-right: 10px;
		}

		.c {
			/* margin-left: -150px; */
			/* display: fixed; */
			box-sizing: border-box;
			width: 100%;
			position: absolute;
			z-index: -1;
			opacity: 0.8;
			height: 100%;
            
			margin-top: -30px;
			margin-bottom: -80px;
            margin-left: -250px;
            margin-right: 50px;
		}
		.form .f{
			opacity: 0.9;
		}
		.demo{
			/* background-color:yellow; */
			margin-left: 100px;
			margin-top: -50px;
		}
		.center{
			margin-left: 150px;
		}
		.center1{
			margin-left:100px;
		}
	</style>

	<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"dbms project");
	?>
</head>

<body>
	<img src="b.jpg" class="b" alter="no image">
	<div id="header"><br>
		<centre>
			<u>Student Management System</u> <br>
		<br>
		Email:
			<?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:
			<?php echo $_SESSION['name'];?>
			<a href="logout.php">Logout</a>
		</centre>
	</div>
	<span id="top_span">
		<!-- <marquee>Note:- This portal is open till 15 December 2021...Plz edit your information, if wrong.</marquee> -->
	</span>

	<div id="left_side">
		
	</div>



	<div id="right_side">
	<br><br>
		<div class="demo">
			<img src="c.jpg" class="c" alt="no image">


			
		<form action="" method="post">
		
		<table>
			<tr>
				<td>
					<input type="submit" class="ct" name="edit_detail" value="Edit Detail">
				</td>
			<!-- </tr>
			<tr> -->
				<td>
					<input type="submit" class="ct" name="show_detail" value="Show Detail">
				</td>
			</tr>
		</table>	
		</form> 


			<?php
					if(isset($_POST['edit_detail']))
					{
						$query = "select * from students where email = '$_SESSION[email]'";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)) 
						{
							?>
			<!-- <form action="" method="post" class="form"> -->

				<!-- <div class="container">
					<input class="bt" type="button" value="Show Details">
					<input class="ct" type="button" value="Edit Details">
				</div> -->
			<!-- </form> -->



			<form action="edit_student.php" method="post" class="f">
				<div class="center1">
				<table class="tb">
				<tr>
						<td>
							<b>Roll No:</b>
						</td>
						<td>
							<input type="text" name="roll_no" class="tb" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Department No:</b>
						</td>
						<td>
							<input type="text" name="dept_number" class="tb" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>

					<tr>
						<td>
							<b>Name:</b>
						</td>
						<td>
							<input type="text" name="name" class="tb" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Father's Name:</b>
						</td>
						<td>
							<input type="text" name="father_name" class="tb" value="<?php echo $row['father_name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Class:</b>
						</td>
						<td>
							<input type="text" name="class" class="tb" value="<?php echo $row['class']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Mobile:</b>
						</td>
						<td>
							<input type="text" name="mobile" class="tb" value="<?php echo $row['mobile']?>">
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td>
						<td>
							<input type="text" name="email" class="tb" value="<?php echo $row['email']?>">
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td>
						<td>
							<input type="password" name="password" class="tb" value="<?php echo $row['password']?>">
						</td>
					</tr>
					<tr>
						<td>
							<b>Remark:</b>
						</td>
						<td>
							<textarea rows="3" cols="5" name="remark" class="tb"><?php echo $row['remark']?></textarea>
						</td>
						</tr>
						<tr>
						<td>
							<input type="submit" class="save" value="Save">
						</td>
					</tr>
				</table>
						</div>
			</form>

			<?php
				}
			}
			?>










			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
				<br><br>
				<div class="center">
				<table>
					<tr>
						<td>
							<b>Roll No:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					
					<tr>
						<td>
							<b>Department No:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['dept_number']?>" disabled>
						</td>
					</tr>

					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Father's Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['father_name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Class:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['class']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Mobile:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Remark:</b>
						</td> 
						<td>
							<textarea rows="3" cols="20" disabled><?php echo $row['remark']?></textarea>
						</td>
					</tr>
				</table>
				</div>
				<?php
				}	
			}
			?>


		
		</div>
	</div>
</body>

</html>