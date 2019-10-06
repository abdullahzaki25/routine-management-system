<?php
include "header.php";

$uid= $_POST["uid"];
$password= $_POST["pass"];
echo '<h1 align=center>Routine Management System</h1>';
echo "<br>";
$con= mysqli_connect("localhost", "root", "", "routine");
$c="SELECT * FROM `reg_student` WHERE id='$uid'";
$result= mysqli_query($con, $c);
while($row=mysqli_fetch_row($result))
{
	if($uid==$row[0] && $password==$row[5])
	{
		echo "<h1 align=center><a class='btn btn-primary btn-lg' role='button' href=class-routine-p1.php> Class Routine </a></h1>";
		echo "<h1 align=center><a class='btn btn-primary btn-lg' role='button' href=s-faculty-info.php> Teachers information </a></h1>";
		echo "<br><br>";
		echo "<p align=center><a class='btn btn-danger' role='button' href=login-student-before.php> Log out </a></p>";		
	}
else
	{
		echo "<p align=center style=font-size:150%;>Log in failed.</p>";
		echo "<br>";
		echo "<p align=center><a href=login-student-before.php>Go Back </a></p>";
	}
}

include "footer.php";
?>