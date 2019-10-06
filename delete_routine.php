<?php
include "header.php";

if(isset($_POST["submit"])){
	if($_POST["day"]=="")
		echo "Fill up the day field"."<br>";
	else
		$day= $_POST["day"];
	
	if($_POST["time"]=="")
		echo "Fill up the time field"."<br>";
	else
		$time= $_POST["time"];
	
	if($_POST["room"]=="")
		echo "Fill up the Room field"."<br>";
	else
		$room= $_POST["room"];
}
$con=mysqli_connect("localhost", "root", "", "routine");

if(isset($day, $time, $room)){
	$q= "DELETE FROM class_routine WHERE day='$day' AND time='$time' AND room='$room'";
	if(mysqli_query($con, $q))
	{
		header("refresh:1; url=admin_class-routine-p1.php");
	}
	else
	{
		echo "Deletion failed";
	}
}

?>

<html>
<body>
<h1 align=center>Delete Information</h1><br>

 <form action="delete_routine.php" method="post">
	<p align=center style=font-size:150%;>Fill up the following info</p>
	<p align="center" style="font-size:120%;">Select a day:
	<select name="day">
			<option value="Saturday">Saturday</option>
			<option value="Sunday">Sunday</option>
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednesday</option>
		</select>
	<p align="center" style="font-size:120%;">Select a time:
	<select name="time">
			<option value="8:30-9:30">8:30-9:30</option>
			<option value="9:35-10:35">9:35-10:35</option>
			<option value="10:40-11:40">10:40-11:40</option>
			<option value="11:45-12:45">11:45-12:45</option>
			<option value="1:15-2:15">1:15-2:15</option>
			<option value="2:20-3:20">2:20-3:20</option>
			<option value="3:25-4:25">3:25-4:25</option>
			<option value="4:30-5:30">4:30-5:30</option>
		</select>
	<p align=center style="font-size:120%;">Room: <input type="text" name="room"></p>
	<p align=center><input type="Submit" name="submit" value="Submit"></p>
		
 </form>

</body>
</html>