<?php
echo '<h1 align=center>Routine Management System</h1>';

$name= $_POST["name"];
$cname= $_POST["cname"];
$department= $_POST["department"];
$email= $_POST["email"];
$password= $_POST["password"];

$con=mysqli_connect("localhost", "root", "", "routine");

$s="INSERT INTO reg_teacher(name, code_name, department, email, PASSWORD) 
VALUES ('$name', '$cname', '$department', '$email', '$password')";

if (mysqli_query($con, $s))
	header("refresh:1; url=login-teacher-before.php");
//echo "Success!!"."<br>"."To insert information again <a href=http://localhost/rms/i_routine.html> Click Here </a>";
else
	echo "Insertion failed";

//echo "<p style=font-size:120%;>To see routine <a href=http://localhost/rms/s_routine_admin.php> Click Here </a></p>";

?>

