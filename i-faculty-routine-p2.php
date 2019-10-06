<?php
include "header.php";

$fcode= $_POST["fcode"];
$ccode= $_POST["ccode"];
$department= $_POST["department"];
$intake= $_POST["intake"];
$section= $_POST["section"];
$day= $_POST["day"];
$time= $_POST["time"];
$room= $_POST["room"];

$con=mysqli_connect("localhost", "root", "", "routine");

$s="INSERT INTO faculty_routine(faculty_code, course_code, department, intake, section, day, time, room) 
VALUES ('$fcode', '$ccode', '$department', '$intake', '$section', '$day', '$time', '$room')";

if (mysqli_query($con, $s))
	header("refresh:1; url=admin_faculty-routine-p1.php");
else
	echo "Insertion failed";


?>

