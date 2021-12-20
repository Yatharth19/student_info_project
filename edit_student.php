<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"dbms project");
	if(!$db)
	{
		die("connec failed");
	}
	echo "success";
	$query = "update students set mobile='$_POST[mobile]' where roll_no= '$_POST[roll_no]'";
	$rol=$_POST['email'];
	echo $rol;
	echo $query;
	// $query="select * from students where email = '$_POST[email]'";
	$query_run = mysqli_query($connection,$query);
	if(!$query_run)
	{
		die("connec failed");
	}
	echo $query;
	
?>
<!-- <script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "student_dashboard.php";
</script> -->
