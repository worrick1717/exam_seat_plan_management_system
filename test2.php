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
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="indexpage.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="lab la-accusoft">Wilson Academy</span></h2>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="index.php" ><span class="las la-igloo"></span><span> Dashboard</span></a>
				</li>
				<li>
					<a href="classroomdetails.php"><span class="las la-users"></span>
						<span>Classroom Details</span>
						
					</a>
				</li>
				<li>
					<a href="studentdetails.php"><span class="las la-clipboard"></span><span> Student Details</span></a>
				</li>
				<li>
					<a href="teacherdetails.php"><span class="las la-users"></span><span> Teacher Details</span></a>
				</li>
				<li>
					<a href="examseatplan.php" class="active"><span class="las la-clipboard-list"></span><span> Create Exam Seat Plan</span></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="main-content">
		<header>
			<h2>
				<label for="">
					<span class="las la-bars"></span>
				</label>
				Dashboard
			</h2>
			<div class="search-wrapper">
				<span class="las la-search"></span>
				<input type="search" placeholder="Search here">
			</div>
			<div class="user-wrapper">
				<img src="images/logo.png" width="30px" height="30px" alt="">
				<div>
					<h4><?php echo $row["name"]; ?></h4>
					<small>Admin</small>
					<small href="logout.php">Logout</small>
				</div>
			</div>
		</header>

		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h1>105</h1>
						<span>Total Students</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>108</h1>
						<span>Total Seats Available</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>5</h1>
						<span>Total Room</span>
					</div>
					<div>
						<span class="las la-clipboard"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>4</h1>
						<span>Total Teachers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>
			</div>
				<h3>Make Seat Plan</h3>
				<?php
					
					class CreateSeatPlan{
						public $all_student_of_class_eight;

						function __construct(){
      						if(isset($_POST['exam_type'])){
      							$exam=$_POST['exam_type'];
      							echo '<p>Exam Type: ' . $exam . '</p>';
      						}
    						if(isset($_POST['select_class'])){
      							echo '<p>Selected Classes: ' . implode(', ', $_POST['select_class']) . '</p>';
      							// $this->count_selected_class = count($_POST['select_class']);
      							if('select_class'=="Class 8"){

      							}
    						}
    						if(isset($_POST['select_room'])){
      							echo '<p>Selected Room: ' . implode(', ', $_POST['select_room']) . '</p>';
      							$a=implode(', ', $_POST['select_room']);
      							$count_selected_room = count($_POST['select_room']);
      							// echo "Total Selected Rooms: ".$count_selected_room;
      						}
    						if(isset($_POST['select_teacher'])){
      							echo '<p>Selected Teacher: ' . implode(', ', $_POST['select_teacher']) . '</p>';
      							$count_selected_teacher = count($_POST['select_teacher']);
      							// echo "Total Selected Teacher: ".$count_selected_teacher;
      						}
      				echo "<br>";
      						if(isset($_POST["Submit"])){
      							$select_class=$_POST['select_class'];
      							foreach($select_class as $select){
          							if($select=="Class 8"){
          								$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
                						$sql="SELECT s_class,roll_no,s_name FROM class_eight;";
                						$dbresult=mysqli_query($con,$sql);
                						$this->all_student_of_class_eight=$dbresult;
                 // while($rows=mysqli_fetch_assoc($dbresult))
                 //  {
                 //    echo  $rows['roll_no'] ;
                 //    echo  $rows['s_name'] ;
                 //  }
          							}
          							if($select=="Class 9"){

                						echo "Niraj";
          							}
          							if($select=="Class 10"){
                						echo "Maharjan";
          							}
      							}
      						}
      					}
						function roomno8seatplanning(){
							echo "Room No 8 Seat Planning";
							$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
							$sql= "SELECT * FROM classroom_details WHERE classroom_no=8;";
            				$query=$con->query($sql);
							while ($room_info=$query->fetch_assoc()) {
								$row_count=$room_info['no_of_rows'];
								$col_count=$room_info['no_of_column'];
								$total_seats=$room_info['total_seats'];
							}
							echo "<table border='1px' cellspacing='0' cellpadding='0' style='width:600px; margin-top:60px;'>";
							
							for ($row = 1; $row <= $row_count+1; $row++) {
								echo "<tr>";

    							for ($col = 1; $col <= $col_count*2+1; $col++) {
    								if($row<2){
    									$class_name=$_POST['select_class'];
    									echo "<td><select><option>Select Class</option>";
    									foreach($class_name as $var){
    										echo "<option>$var</option>";
    										if($var=='Class 8'){
    											$con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
                								$sql="SELECT s_class,roll_no,s_name FROM class_eight LIMIT {$row_count};";
                								$dbresult=mysqli_query($con,$sql);
                								$this->all_student_of_class_eight=$dbresult;
                								// while($rows=mysqli_fetch_assoc($dbresult))
                 								// {
                 								//  	echo "<div id='response'>$rows[roll_no] $rows[s_name] </div>";
                  								// }
                  							}
    									}
    									echo "</select></td>";
    								}
    								else if($row>=2 && $row<=8){
    									if(isset($_POST['Submit'])){
    										while($rows=mysqli_fetch_assoc($dbresult))
                 								{
                 								 	echo "<tr><td id='response'>$rows[roll_no] $rows[s_name] </td></tr>";
                  								}

    									}
    								}
    								else{
    									echo "<tr><td>&nbsp</td></tr>";
    								}
    							}
    							echo "</tr>";
							}

							echo "</table>";
							echo "<button type='submit' id='Submit'>Randomize Seats</button>";
						}
						function roomno9seatplanning(){
							echo "Room 9";
						}

						
						function submitted(){
      						if(isset($_POST["Submit"])){
      							$selected_room=$_POST['select_room'];
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
					$call_object= new CreateSeatPlan();
					$call_object-> submitted();
				?>
		</main>

	</div>
	<script>
$("#Submit").click( function() {
 
   $.post( $("#form").attr("action"),
           $("#form :input").serializeArray(),
       function(info) {
 
         $("#response").empty();
         $("#response").html(info);
    
       });
 
  $("#form").submit( function() {
     return false;  
  });
});
 
</script>

</body>
</html>