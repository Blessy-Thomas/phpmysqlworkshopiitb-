<?php 

	require('connect.php');
	$select_query = "SELECT * FROM class1 where name = 'Rohan'";

	$execute_query = mysqli_query($conn,$select_query);

	$detail = $execute_query-> fetch_array(MYSQLI_ASSOC);




	$total	=	$detail['sub1'] + $detail['sub2'] + $detail['sub3'] + $detail['sub4'] + $detail['sub4'];
	$percentage = ($total/500)*100;
	
	$update_query = "UPDATE class1 SET sub5='99',total_obtained=$total,percentage=$percentage WHERE name='ROHAN'";

	mysqli_query($conn,$update_query);






	if (mysqli_num_rows($execute_query)>0){
	echo "Updated Details <br>";
	echo "Name: ".$detail['name']." <br>";
	echo "Subject 1 ".$detail['sub1']." <br>";
	echo "Subject 2 ".$detail['sub2']." <br>";
	echo "Subject 3 ".$detail['sub3']." <br>";
	echo "Subject 4 ".$detail['sub4']." <br>";
	echo "Subject 5 ".$detail['sub5']." <br>";
	echo "Total Marks Obtained ".$detail['total_obtained']." <br>";
	echo "Total Marks ".$detail['total_marks']." <br>";
	echo "Percentage ".$detail['percentage']." <br>";
	}
	else{
		echo "No such content in database";
	}




	?>