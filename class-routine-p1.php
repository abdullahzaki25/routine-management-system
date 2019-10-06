<?php include "header.php"; ?>
	
	<form action="class-routine-p2.php" method="post">
		<p align="center" style="color:green; font-size:150%;">Select a department:<br>
		<select name="department" size="3">
			<option value="CSE">CSE</option>
			<option value="EEE">EEE</option>
			<option value="BBA">BBA</option>
			<option value="English">English</option>
			<option value="Law">Law</option>
			<option value="Textile">Textile</option>
		</select>
		<br><br>
		<p align="center" style="color:green; font-size:150%;">Intake: <input name="intake" type="text"><br>
		<p align="center" style="color:green; font-size:150%;">Section: <input name="section" type="text"><br>
		<p align="center"><input type="Submit" value="Submit">
	</form>
	
<?php include "footer.php"; ?>