<?php
$name= $_POST["name"];
$cname= $_POST["cname"];
$designation= $_POST["designation"];
$room= $_POST["room"];
$email= $_POST["email"];
$department= $_POST["department"];

$con=mysqli_connect("localhost", "root", "", "routine");

$s="INSERT INTO teachers_info(Name, Codename, Designation, Room, Email, Department) VALUES ('$name', '$cname', '$designation', '$room', '$email', '$department')";
if (mysqli_query($con, $s))
	header("refresh:1; url=admin_s-faculty-info.php");
else
	echo "Insertion failed";

?>