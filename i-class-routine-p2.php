<?php
include "header.php";

$department= $_POST["department"];
$intake= $_POST["intake"];
$section= $_POST["section"];
$day= $_POST["day"];
$time= $_POST["time"];
$ccode= $_POST["ccode"];
$cname= $_POST["cname"];
$room= $_POST["room"];

$con=mysqli_connect("localhost", "root", "", "routine");

$s="INSERT INTO class_routine(department, intake, section, day, time, course, faculty, room) 
VALUES ('$department', '$intake', '$section', '$day', '$time', '$ccode', '$cname', '$room')";

if (mysqli_query($con, $s))
	header("refresh:1; url=admin_class-routine-p1.php");
else
	echo "Insertion failed";

?>

