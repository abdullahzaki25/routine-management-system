<?php
include "header.php";

$un= $_POST["un"];
$password= $_POST["pass"];
echo '<h1 align=center>Routine Management System</h1>';
echo "<br>";
$con= mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "routine");
$c="SELECT * FROM login_admin";
$result= mysqli_query($con, $c);
while($row=mysqli_fetch_row($result))
{
	if($un==$row[0] && $password==$row[1])
	{
		echo "<h1 align=center><a class='btn btn-primary btn-lg' role='button' href='admin_class-routine-p1.php'>Class Routine</a></h1>";
		echo "<h1 align=center><a class='btn btn-primary btn-lg' role='button' href=admin_faculty-routine-p1.php>Faculty Routine</a></h1>";
		#echo "<h1 align=center><a href=http://localhost/rms/create_routine.php> Create Routine </a></h1>";
		#echo "<h1 align=center><a href=i-class-routine-p1.php> Insert into Class Routine </a></h1>";
		#echo "<h1 align=center><a href=i-faculty-routine-p1.php> Insert into Faculty Routine </a></h1>";
		#echo "<h1 align=center><a href=http://localhost/rms/u_routine.html> Update Routine </a></h1>";
		echo "<h1 align=center><a class='btn btn-primary btn-lg' role='button' href=admin_s-faculty-info.php> Teachers information </a></h1>";
		#echo "<h1 align=center><a href=http://localhost/rms/p_2.html> Teachers information </a></h1>";
		#echo "<h1 align=center><a href=i-t-info-p1.php> Insert Teachers information </a></h1>";	
		echo "<br>";
		echo "<p align=center><a class='btn btn-danger' role='button' href=admin_login.php> Log out </a></p>";		
	}
else
	{
		echo "<p align=center style=font-size:150%;>Log in failed.</p>";
		echo "<br>";
		echo "<p align=center><a href=login-admin.php>Go Back </a></p>";
	}
}

#include "footer.php";
?>