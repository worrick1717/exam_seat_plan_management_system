<?php
	require 'config.php';
	if(!empty($_SESSION["id"])){
  		$id = $_SESSION["id"];
  		$result = mysqli_query($con, "SELECT * FROM registration_db WHERE id = $id");
  	$row = mysqli_fetch_assoc($result);
	}
	else{
  		header("Location: login.php");
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exam Seat Plan Management System</title>
</head>
<body>
	<main>
		<?php
			class Examseatplanmanagement{
				function __construct(){

				}
				function roomno5seatplanning(){
					echo "Room no 5 Seat Planning";
				}
			}
			$call_object= new Examseatplanmanagement();
			$call_object-> roomno5seatplanning();
		?>
	</main>

</body>
</html>