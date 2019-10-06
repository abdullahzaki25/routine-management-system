<?php include "header.php"; ?>

<section class="form-section">
<div class="container">
<form action="reg-student-after.php" method="post">
 
	<h1 align="center" style="color:bold;">Welcome to Routine Management System</h1><br>
	<p align="center" style="color:green; font-size:150%;">ID: <input type="text" name="id"><br>
	<p align="center" style="color:green; font-size:150%;">Name: <input type="text" name="name"><br>
	<p align="center" style="color:green; font-size:150%;">Department: <input type="text" name="department"><br>
	<p align="center" style="color:green; font-size:150%;">Intake: <input type="text" name="intake"><br>
	<p align="center" style="color:green; font-size:150%;">Section: <input type="text" name="section"><br>
	<p align="center" style="color:green; font-size:150%;">Password: <input type="password" name="password"><br>
	<p align="center"><input type="Submit" value="Register">
	</form>
</div>
</section>

<?php include "footer.php"; ?>