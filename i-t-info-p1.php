<?php include "header.php"; ?>

 <form action="i-t-info-p2.php" method="post">
	<p style="font-size:150%;">Insert Teacher's Information</p>
	Name: <input type="text" name="name"><br><br>
	Code Name: <input type="text" name="cname"><br><br>
	Designation: <input type="text" name="designation"><br><br>
	Room: <input type="text" name="room"><br><br>
	Email: <input type="text" name="email"><br><br>
	Department: <select name="department">
		<option value="CSE">CSE</option>
		<option value="EEE">EEE</option>
		<option value="Textile">Textile</option>
		<option value="Architecture">Architecture</option>
		<option value="BBA">BBA</option>
		<option value="English">English</option>
		<option value="Law">Law</option>
		<option value="Economics">Economics</option>
		</select><br><br>
	
		<input type="Submit" value="Submit"><br><br>
		
 </form>
 
<?php include "footer.php"; ?>