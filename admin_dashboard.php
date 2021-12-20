<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<!-- <link rel="stylesheet" type="text/css" href="admin_dashboard.css"> -->
	<!-- echo "<link rel="stylesheet" type="text/css" href="admin_dashboard.css" />" -->
  	<!-- script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script -->
	
	<style type="text/css">


input[type="submit"] {
    appearance: auto;
    user-select: none;
    white-space: pre;
    align-items: flex-start;
    text-align: center;
    cursor: default;
    box-sizing: border-box;
    background-color: lightblue;
    color: black;
    padding: 1px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
    border-image: initial;
}
.bt, .ct {
    cursor: pointer;
    float: left;
    margin-top: -30px;
    /* padding: 16px; */
    border-radius: 12px;
    font-weight: 600;
    /* padding-inline: 18px;
    margin-inline: 106px; */
    height: 32px;
    padding-top: 1px;
    background-color: rgb(183, 200, 226);
}
.save {
    /* width: 32%; */
    /* margin-left: 145px; */
    cursor: pointer;
    background-color: lightgreen;
    border-radius: 15px;
    font-weight: 600;
    margin-top: 36px;
}

.bt:hover,
.ct:hover {
    background-color: rgb(42, 112, 216);
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
.c {
    /* margin-left: -150px; */
    box-sizing: border-box;
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.8;
    height: 100%;
    margin-top: -80px;
    margin-bottom: -80px;
    margin-left: -150px;
    margin-right: 50px;
}
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
#left_side{
    height: 75%;
    width: 15%;
    top: 10%;
    position: fxed;
}
/* #right_side{
    backdrop-filter: blur(10px);
    height: 75%;
    width: 80%;
    position: fixed;
    left: 10%;
    top: 21%;
    color: black;
    border: solid 1px black;
}i */
#top_side{
    /* height: 25%; */
    /* width: 15%; */
    /* top: 10%; */
    /* position: relative; */
    column-gap: 100px;
    
}
#top_span{
    top: 15%;
    width: 80%;
    left: 17%;
   
    position: fixed;
}
td{
    /* border: 1px solid black; */
    /* margin-left: 20px;
    padding-left: 2px; */
    padding: 100 150px;
    color: black;
    text-align: left;
    width: 200px;
}
#td1{
    color: black;
    /* background-color: blue; */
}
#input1{
    background-color: rgb(88, 98, 236);
    color: black;
    
}
#input1:hover{
    background-color: yellowgreen;
}

#img{
    background-image: url('college_img.jpg');
}
/* #search{
    background-color: purple;
} */
#search:hover{
    background-color: greenyellow;
}
#delete:hover{
    background-color: red;
}
/* 
#h11{
    color: black;
} */
#link{
    color: cyan;
}
#link:hover{
    /* color: red; */
    background-color: darkblue;
}
	</style>


	  <?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"dbms project");
	?>
</head>
<body id="img">
	<div id="header">
		<centre><u>Student Management System</u>
			<br>
		<br>Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome :<?php echo $_SESSION['name'];?> 
		<button id="link"><a href="logout.php">Logout</a></button>
		</centre>
	</div>
	
	
	<div id="right_side" ><br>
		<div id="demo">
			<img src="c.jpg" class="c" alt="no image">
	
		<div id="top_side">
		<!-- <br><br><br> -->
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input class="ct" type="submit" name="search_student" value="Search Student" onclick="">
					</td>
				<!-- </tr>
				<tr> -->
					<td>
						<input class="ct" type="submit" name="edit_student" value="Edit Student">
					</td>
				<!-- </tr>
				<tr> -->
					<td>
						<input class="ct" type="submit" name="add_new_student" value="Add New Student">
					</td>
				<!-- </tr>
				<tr> -->
					<td>
						<input class="ct" type="submit" name="delete_student" value="Delete Student">
					</td>
				<!-- </tr>
				<tr> -->
					<td>
						<input class="ct" type="submit" name="show teacher" value="Show Teachers">
					</td>
				</tr>
			</table>
		</form>
	</div>
	
	
	<br>
	
	
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST["search_student"]))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					<input type="submit" id="search" name="search_by_roll_no_for_search" value="Search" class="save">
					</form><br><br>
					<!-- <h4><b><u>Student's details</u></b></h4><br><br> -->
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
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
									<textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea>
								</td>
							</tr>
						</table>
						<?php
					}
				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit"  id="search" name="search_by_roll_no_for_edit" value="Search" class="save">
				<!-- <h4><b><u>Student's details</u></b></h4><br><br>
				 -->
				</form><br><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				// <!-- // <h4><b><u>Student details</u></b></h4><br><br> -->
				
				$query = "select * from students where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>

						<tr>
							<td>
								<b>Department No:</b>
							</td> 
							<td>
								<input type="text" name="dept_number" value="<?php echo $row['dept_number']?>">
							</td>
						</tr>

						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remark"><?php echo $row['remark']?></textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input id="delete" type="submit" name="search_by_roll_no_for_delete" value="Delete" class="save">
				</form><br><br>
				</center>
				<?php
			}
			?>
			<!-- <code for add new student> -->
			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>

						<tr>
							<td>
								<b>Department No:</b>
							</td> 
							<td>
								<input type="text" name="dept_number" required>
							</td>
						</tr>

						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" placeholder="Optional" name="remark"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
			<!-- <code for teacher details> -->
			<?php
				if(isset($_POST['show_teacher']))
				{
					?>
					<center>
						<h1>Teacher's Details</h1>
						<table>
							<tr>
								<td id="td1"><b>ID</b></td>
								<td id="td1"><b>Name</b></td>
								<td id="td1"><b>Mobile</b></td>
								<td id="td1"><b>Courses</b></td>
								<td id="td1"><b>View Detail</b></td>
							</tr>
						</table>
					</center>
					<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td1"><?php echo $row['t_id']?></td>
								<td id="td1"><?php echo $row['dept_number']?></td>
								<td id="td1"><?php echo $row['name']?></td>
								<td id="td1"><?php echo $row['mobile']?></td>
								<td id="td1"><?php echo $row['courses']?></td>
								<td id="td1"><a href="#">View</a></td>
							</tr>
						</table>
						</center>
						<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>