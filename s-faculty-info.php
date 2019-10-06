<?php include "header.php"; ?>

	<h1 align='center'>Routine Management System</h1><br>
<table border=1 cellpadding=1 cellspacing=1>
	<tr>
		<th>Name</th>
		<th>Code Name</th>
		<th>Designation</th>
		<th>Room</th>
		<th>Email</th>
		<th>Department</th>
	</tr>
	<?php
		$con=mysqli_connect("localhost", "root", "", "routine");
		$sql = "SELECT * FROM teachers_info";
		$r = mysqli_query($con, $sql);
		
		while($row = mysqli_fetch_array($r))
		{
			echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Codename']."</td>";
			echo "<td>".$row['Designation']."</td>";
			echo "<td>".$row['Room']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Department']."</td>";
			//echo "<td><a href=d_t_info.php?codename=".$row['Codename'].">Delete</a></td>";
		}
	?>
</table> 
	<br><br>
	<a class='btn btn-danger' role='button' href=login-student-before.php> Log out </a>
	
<?php include "footer.php"; ?>