<?php include "header.php"; ?>

<section class="form-section">
<div class="container">
<form action="reg-teacher-after.php" method="post">
 
	<h1 align="center" style="color:bold;">Welcome to Routine Management System</h1><br>
	<p align="center" style="color:green; font-size:150%;">Name: <input type="text" name="name"><br>
	<p align="center" style="color:green; font-size:150%;">Code Name: <input type="text" name="cname"><br>
	<p align="center" style="color:green; font-size:150%;">Department: <input type="text" name="department"><br>
	<p align="center" style="color:green; font-size:150%;">Email: <input type="email" name="email"><br>
	<p align="center" style="color:green; font-size:150%;">Password: <input type="password" name="password"><br>
	<p align="center"><input type="Submit" value="Register">
	</form>
</div>
</section>

<?php include "footer.php"; ?>