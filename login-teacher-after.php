<?php
include "header.php";

$email= $_POST["email"];
$password= $_POST["pass"];
echo "<p align='center' style=font-size:150%;>Insert a Faculty Code</p>";
$con= mysqli_connect("localhost", "root", "", "routine");
$c="SELECT * FROM reg_teacher WHERE email='$email'";
$result= mysqli_query($con, $c);
while($row=mysqli_fetch_row($result))
{
	if($email==$row[3] && $password==$row[4])
	{
		echo "<form action='faculty-routine-p1.php' method='post'>
		<p align='center' style='color:green; font-size:120%;'>Faculty Code: <input name='fcode' type='text'>
		<br>
		<p align='center'><input type='Submit' value='Submit'>
		</form>
		<br><br>
		<p align=center><a class='btn btn-danger' role='button' href=login-teacher-before.php> Log out </a></p>";		
	}
else
	{
		echo "<p align=center style=font-size:150%;>Log in failed.</p>";
		echo "<br>";
		echo "<p align=center><a href=login-teacher-before.php>Go Back </a></p>";
	}
}

include "footer.php";
?>