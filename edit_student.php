<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"dbms project");
	$query = "update students set mobile='$_POST[mobile]', password='$_POST[password]',email='$_POST[email]' where roll_no= '$_POST[roll_no]'";

	$query_run = mysqli_query($connection,$query);
	
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "student_dashboard.php";
</script>
