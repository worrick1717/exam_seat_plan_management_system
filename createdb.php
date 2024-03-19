<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Database</title>
</head>
<body>
	<?php
		$con=mysqli_connect("localhost","root","");
		if(!$con){
			die("Database not connected" .mysqli_connect());
		}
		else{
			print "Database is connected";
		}
		$sql="CREATE DATABASE exam_seat_plan_management_system";
		if(mysqli_query($con,$sql)){
			echo "<br>Database is created";
		}
		else{
			echo "<br>Database not created" .mysql_error($con);
		}
		mysqli_close($con);
	?>

</body>
</html>