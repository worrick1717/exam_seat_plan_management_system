
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seal Plan Arrangement List</title>
</head>
<body>
	<label for="total_students">Total Selected Students:</label>
	<?php
	require 'config.php';
	if(isset($_POST["submit"])){
		$room=$_GET['s_room'];
		if($room==8){
			echo "Hello World";
		}
	}
?>
	<label for="total_seats">Total Seats</label>
</body>
</html>