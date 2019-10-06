	<?php include "header.php"; ?>
	
	<input type="button" value="Insert" onclick="window.open('i-class-routine-p1.php')">
	<input type="button" value="Delete" onclick="window.open('delete_routine.php')">
	
	<?php
        # connect to mysql server
        # and select the database
        $conn = mysqli_connect("localhost", "root", "", "routine");
		
		$department = $_POST["department"];
		$intake = $_POST["intake"];
		$section = $_POST["section"];
		
        # Query the data from database.
        $query  = "SELECT day, time, course, faculty, room FROM `class_routine` WHERE department='$department' AND intake='$intake' AND section='$section' ORDER BY day";
        $result = mysqli_query($conn, $query);

        # $arr is array which will be help ful during 
        # printing
        $arr = array();

        # Intialize the array, which will 
        # store the fetched data.
        $day = array();
        $time = array();
		$course = array();
		$faculty = array();
		$room = array();

        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
        #     data saving and rowspan calculation        #
        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#

        # Loop over all the fetched data, and save the
        # data.
        while($row = mysqli_fetch_assoc($result)) {
            array_push($day, $row['day']);
            array_push($time, $row['time']);
			array_push($course, $row['course']);
			array_push($faculty, $row['faculty']);
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
					<th>Course</th>
					<th>Faculty</th>
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
			echo "<td>".$course[$i]."</td>";
			echo "<td>".$faculty[$i]."</td>";
			echo "<td>".$room[$i]."</td>";
			#echo "<td><a href=delete_routine.php?day=".$row['day']."&time=".$row['time']."&room=".$row['room'].">Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
		
		echo "<br><br>";
		echo "<a class='btn btn-danger' role='button' href=admin_login.php> Log out </a></p>";	
		
		include "footer.php";
    ?>