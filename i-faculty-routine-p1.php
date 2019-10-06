<?php include "header.php"; ?>

 <form action="i-faculty-routine-p2.php" method="post">
 
	<p style="font-size:150%;">Insert Faculty Routine Information</p>
	Code name of the teacher: <input type="text" name="fcode"><br><br>
	Course Code: <input type="text" name="ccode"><br><br>
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
	Intake: <input type="text" name="intake"><br><br>
	Section: <input type="text" name="section"><br><br>
	Select a day:
	<select name="day">
			<option value="Saturday">Saturday</option>
			<option value="Sunday">Sunday</option>
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednesday</option>
		</select><br><br>
	Time: <select name="time">
		<option value="8:30-9:30">8:30-9:30</option>
		<option value="9:35-10:35">9:35-10:35</option>
		<option value="10:40-11:40">10:40-11:40</option>
		<option value="11:45-12:45">11:45-12:45</option>
		<option value="1:15-2:15">1:15-2:15</option>
		<option value="2:20-3:20">2:20-3:20</option>
		<option value="3:25-4:25">3:25-4:25</option>
		<option value="4:30-5:30">4:30-5:30</option>
		</select><br><br>
	Room: <input type="text" name="room"><br><br>
	
	<input type="Submit" value="Submit"><br><br>
		
 </form>
 
<?php include "footer.php"; ?>