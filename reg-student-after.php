<?php
echo '<h1 align=center>Routine Management System</h1>';

$id= $_POST["id"];
$name= $_POST["name"];
$department= $_POST["department"];
$intake= $_POST["intake"];
$section= $_POST["section"];
$password= $_POST["password"];

$con=mysqli_connect("localhost", "root", "", "routine");

$s="INSERT INTO reg_student(id, name, department, intake, section, PASSWORD) 
VALUES ('$id', '$name', '$department', '$intake', '$section', '$password')";

if (mysqli_query($con, $s))
	header("refresh:1; url=login-student-before.php");
//echo "Success!!"."<br>"."To insert information again <a href=http://localhost/rms/i_routine.html> Click Here </a>";
else
	echo "Insertion failed";

//echo "<p style=font-size:120%;>To see routine <a href=http://localhost/rms/s_routine_admin.php> Click Here </a></p>";

?>

