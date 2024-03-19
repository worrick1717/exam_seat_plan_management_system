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
	class RoomNo{
		function __construct(){
				if(isset($_POST["submit"])){
					//$select_room=$_GET["select_room"];
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql= "SELECT * FROM classroom_details WHERE classroom_no=8;";
					$query=$con->query($sql);
					while ($room_info=$query->fetch_assoc()) {
						$row_count=$room_info['no_of_rows'];
						$col_count=$room_info['no_of_column'];
						$total_seats=$room_info['total_seats'];
						// echo $row_count;
						// echo $col_count;
						// echo $total_seats;
					}
					$class_name=$_GET['select_class'];
					foreach($class_name as $var){
						if($var=="Class 8"){
						$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
        				$sql="SELECT s_class,roll_no,s_name FROM class_eight LIMIT {$row_count};";
        				$dbresult=mysqli_query($con,$sql);
        				//$this->all_student_of_class_eight=$dbresult;
        				while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
						}	
					}
				}
		}
		function roomno8seatplanning(){
			echo "Room No 8 Seat Planning";
			echo "<form method='post' action=''>";
			echo "<table border='1' cellpadding='0' cellspacing='0'>";
			echo"<tr>
				<th><select name='select_class'>";
				 
					$class_name=$_GET['select_class'];
					echo "<option>Select class</option>";
					foreach ($class_name as $var) {
						echo "<option value=$var>$var(1-7)</option>";
					}
			
		
				echo "</select>";
				echo "<input type='submit' name='submit'>";
				echo "</th>";
		echo "<th><select name='select_class'>";
			 
			$class_name=$_GET['select_class'];
			echo "<option>Select class</option> ";
			foreach ($class_name as $var) {
				echo "<option value="$var">$var(1-7)</option>";
			}
			
		
		echo "</select>";
		echo "<input type='submit' name='submit'>";
		echo "</th>";
		echo "<th>Walkthrough</th>";
		echo "<th><select name='select_class'>";
			 
			$class_name=$_GET['select_class'];
			echo "<option>Select class</option>";
			foreach ($class_name as $var) {
				echo "<option value=$var>$var(1-7)</option>";
			}
			echo "</select>";
			echo "<input type='submit' name='submit'>";
			echo "</th>";
			echo "<th><select name='select_class'>";
			$class_name=$_GET['select_class'];
			echo "<option>Select class</option>";
			foreach ($class_name as $var) {
				echo "<option value=$var>$var(1-7)</option>";
			}
		echo "</select>";
		echo "<input type='submit' name='submit'>";
	echo "</th>";
		echo "</tr>";
		echo "<tr>";
				$call_object= new RoomNo();
		echo "</tr>";
	echo "</table>";
	
echo "</form>";
		}
		function roomno9seatplanning(){
				echo "	Hello";
		}
		function submitted(){
      						if(isset($_GET["Submit"])){
      							$selected_room=$_GET['select_room'];
      							foreach($selected_room as $select){
         							if($select=="Room No 8"){

                							$this->roomno8seatplanning();

         								 }
         							if($select=="Room No 9"){

                						$this->roomno9seatplanning();
          								}
          							if($select=="Room No 10"){
               							$this->roomno10seatplanning();
          							}
      							}
							}
						}
					}
						$call_object= new RoomNo();
						$call_object-> submitted();
					
			?>





<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exam Seat Plan</title>
</head>
<body>
	
		
	
	
	
</body>
</html> -->
