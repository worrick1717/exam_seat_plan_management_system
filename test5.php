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
<html>
	<head>
		<title>Exam Seat Plan Management System</title>
	</head>
	<body>
		<main>
			<?php
				class Examseatplanmanagement{
					public $data1;
					public $data2=array();

	function __construct(){
		
			
	}
	function roomno5seatplanning(){
		echo "Room No 5 Seat Planning";
		echo "<form method='post' action=''>";
		echo "<table border='1' cellpadding='0' cellspacing='0'>";
		echo"<tr>";
		echo "<th><select name='select_class' id='select_class'>";
		$class_name=$_GET['select_class'];
		echo "<option>Select class</option>";
			foreach ($class_name as $var) {
						echo "<option value='$var'>  $var(1-7)</option>";
					}
		echo "</select>";
		echo "<input type='submit' name='submit1' value='Click Me'>";
		echo "</th>";
		echo "</form>";

		echo "<form method='post' action=''>";
		echo "<th><select name='select_class2' id='select_class2'>";
		//$class_name=$_GET['select_class'];
		echo "<option>Select class</option>";
			foreach ($class_name as $var) {
						echo "<option value='$var'>  $var(1-7)</option>";
					}
		echo "</select>";
		echo "<input type='submit' name='submit2' value='Click Me'>";

		echo "</th>";
		echo "</tr>";
		echo "</form>";



		if(isset($_POST['submit1'])){
			$class_name=$_POST['select_class'];
				if($class_name=='Class 5'){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_five LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 5</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";

            				}
            		echo "</table>";

				}
				else if($class_name=="Class 6"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_six LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 6</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}

				}
				else if($class_name=="Class 7"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_seven LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 7</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
				}
				else if($class_name=="Class 8"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_eight LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 8</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
				}
				else if($class_name=="Class 9"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_nine LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 9</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
				}
				else if($class_name=="Class 10"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_ten LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 10</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
				}
				else{
					echo "error";
				}
			}


		if(isset($_POST['submit2'])){
			$class_name=$_POST['select_class2'];
				if($class_name=="Class 5"){
					//echo "Class 5";
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_five WHERE roll_no BETWEEN 7 AND 14;";
					$dbresult=mysqli_query($con,$sql);
					echo "<td>Class 5</td>";
					while($rows=mysqli_fetch_assoc($dbresult)){
							$this->data2=$rows;
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
				}
				else if($class_name=="Class 6"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_six LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 6</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}

				}
				else if($class_name=="Class 7"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_seven LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 7</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
				}
				else if($class_name=="Class 8"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_eight LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 8</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
				}
				else if($class_name=="Class 9"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_nine LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 9</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
				}
				else if($class_name=="Class 10"){
					$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
					$sql="SELECT s_class,roll_no,s_name FROM class_ten LIMIT 7;";
					$dbresult=mysqli_query($con,$sql);
					echo "<tr align='center'><td>Class 10</td></tr>";
					while($rows=mysqli_fetch_assoc($dbresult)){
               		 		echo "<tr><td>$rows[roll_no] $rows[s_name]</td></tr>";
            				}
				}
				else{
					echo "error";
				}
			}




		function innerfunction(){
			echo "Hello";
			
		//$function_call=innerfunction();

	}
}
	function roomno6seatplanning(){
		echo "hi 6";
	}
	function roomno7seatplanning(){
		echo "hi 7";
	}
	function roomno8seatplanning(){
		echo "hi 8";
	}
	function roomno9seatplanning(){
		echo "hi 9";
	}
	function roomno10seatplanning(){
		echo "hi 10";
	}
	function submitted(){
		if(isset($_GET["Submit"])){
      							$selected_room=$_GET['select_room'];
      							foreach($selected_room as $select){
         							if($select=="Room No 5"){

                							$this->roomno5seatplanning();

         								 }
         							if($select=="Room No 6"){

                							$this->roomno6seatplanning();

         								 }
         							if($select=="Room No 7"){

                							$this->roomno7seatplanning();

         								 }
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
	$call_object= new Examseatplanmanagement();
	$call_object-> submitted();
	$call_object->data2;
	if(isset($_POST['submit2'])){
		foreach ($call_object->data2 as $var) {
		echo $var;
	}
	}
	
	echo "<table>";
	echo "<tr></tr>";
	
	echo "</table>";
	?>
		</main>
		<div>
		</div>
	</body>
</html>

