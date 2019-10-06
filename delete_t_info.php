<?php
include "header.php";

if(isset($_POST["submit"])){
	if($_POST["codename"]=="")
		echo "Fill up the field"."<br>";
	else
		$codename= $_POST["codename"];
}

$con=mysqli_connect("localhost", "root", "", "routine");

if(isset($codename)){
	$q= "DELETE FROM teachers_info WHERE Codename='$codename'";
	if(mysqli_query($con, $q))
	{
		header("refresh:1; url=admin_s-faculty-info.php");
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

 <form action="delete_t_info.php" method="post">
	<p align=center style=font-size:150%;>Fill up the following info</p>
	<p align=center style="font-size:120%;">Codename: <input type="text" name="codename"></p>
	<p align=center><input type="Submit" name="submit" value="Submit"></p>
		
 </form>

</body>
</html>