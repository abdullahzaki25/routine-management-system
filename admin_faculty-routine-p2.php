	<?php include "header.php"; ?>
		
		<input type="button" value="Insert" onclick="window.open('i-faculty-routine-p1.php')">
		<input type="button" value="Delete" onclick="window.open('delete_faculty.php')">
		
		<?php
        # connect to mysql server
        # and select the database
        $conn = mysqli_connect("localhost", "root", "", "routine");
		
		$fcode = $_POST["fcode"];
		
        # Query the data from database.
        $query  = "SELECT course_code, department, intake, section, day, time, room FROM `faculty_routine` WHERE faculty_code='$fcode' ORDER BY day";
        $result = mysqli_query($conn, $query);

        # $arr is array which will be help ful during 
        # printing
        $arr = array();

        # Intialize the array, which will 
        # store the fetched data.
        $course_code = array();
		$department = array();
		$intake = array();
		$section = array();
		$day = array();
		$time = array();
		$room = array();

        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
        #     data saving and rowspan calculation        #
        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#

        # Loop over all the fetched data, and save the
        # data.
        while($row = mysqli_fetch_assoc($result)) {
            array_push($course_code, $row['course_code']);
			array_push($department, $row['department']);
			array_push($intake, $row['intake']);
			array_push($section, $row['section']);
            array_push($day, $row['day']);
			array_push($time, $row['time']);
			array_push($room, $row['room']);

            if (!isset($arr[$row['day']])) {
                $arr[$row['day']]['rowspan'] = 0;
            }
            $arr[$row['day']]['printed'] = 'no';
            $arr[$row['day']]['rowspan'] += 1;
        }


        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        #        DATA PRINTING             #
        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
        echo "<table cellspacing='0' cellpadding='0'>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
					<th>Course Code</th>
					<th>Department</th>
					<th>Intake</th>
					<th>Section</th>
					<th>Room</th>
                </tr>";


        for($i=0; $i < sizeof($time); $i++) {
            $dayName = $day[$i];
            echo "<tr>";

            # If this row is not printed then print.
            # and make the printed value to "yes", so that
            # next time it will not printed.
            if ($arr[$dayName]['printed'] == 'no') {
                echo "<td rowspan='".$arr[$dayName]['rowspan']."'>".$dayName."</td>";
                $arr[$dayName]['printed'] = 'yes';
            }
            echo "<td>".$time[$i]."</td>";
			echo "<td>".$course_code[$i]."</td>";
			echo "<td>".$department[$i]."</td>";
			echo "<td>".$intake[$i]."</td>";
			echo "<td>".$section[$i]."</td>";
			echo "<td>".$room[$i]."</td>";
            echo "</tr>";
        }
        echo "</table>";
		
		echo "<br><br>";
		echo "<a class='btn btn-danger' role='button' href=admin_login.php> Log out </a></p>";	
		
		include "footer.php";
    ?>