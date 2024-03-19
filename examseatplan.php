<?php
		require	'config.php';
?>
<?php
	
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
</head>
<body>
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="lab la-accusoft">Wilson Academy</span></h2>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="index.php"><span class="las la-igloo"></span><span> Dashboard</span></a>
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
					<p><?php echo $row["name"]; ?></p>
					<small>Admin</small>
					<small href="logout.php">Logout</small>
				</div>
			</div>
		</header>

		<main>
			
		<form	action="test6.php" method="get">
	<h2>Create Exam Seat Plan</h2><br>
	<label for="exam_type">Select Exam Type: </label>
	<select name="exam_type">
		<option value="1st Unit Test">1st Unit Test</option>
		<option value="1st Term">1st Term</option>
		<option value="2nd Unit Test">2nd Unit Test</option>
		<option value="2nd Term">2nd Term</option>
		<option value="3rd Unit Test">3rd Unit Test</option>
		<option value="Final Exam">Final Exam</option>
	</select>
	<br><br>

	<!-- Class -->
	<label for="Select Class">Select Class:</label><br>
	<div class="class-select">
	<input type="checkbox" name="select_class[]" value="Class 5">
	<label for="">Class Five: Total Students - 
		<?php 
					$query= "SELECT roll_no FROM class_five order by roll_no;";
					$query_run=mysqli_query($con,$query);
					$row = mysqli_num_rows($query_run);
					echo '<label>' .$row. '</label>';
			?>
	</label>

	<input type="checkbox" name="select_class[]" value="Class 6">
	<label for="">Class Six: Total Students - 
		<?php 
					$query= "SELECT roll_no FROM class_six order by roll_no;";
					$query_run=mysqli_query($con,$query);
					$row = mysqli_num_rows($query_run);
					echo '<label>' .$row. '</label>';
			?>
	</label>
	
	<input type="checkbox" name="select_class[]" value="Class 7">
	<label for="">Class Seven: Total Students - 
		<?php 
					$query= "SELECT roll_no FROM class_seven order by roll_no;";
					$query_run=mysqli_query($con,$query);
					$row = mysqli_num_rows($query_run);
					echo '<label>' .$row. '</label>';
			?>
	</label>

	<input type="checkbox" name="select_class[]" value="Class 8">
	<label for="">Class Eight: Total Students - 
			<?php 
					$query= "SELECT roll_no FROM class_eight order by roll_no;";
					$query_run=mysqli_query($con,$query);
					$row = mysqli_num_rows($query_run);
					echo '<label>' .$row. '</label>';
			?>
	</label>
	
	<input type="checkbox" name="select_class[]" value="Class 9">
	<label for="">Class Nine: Total Students - 
			<?php 
					$query= "SELECT roll_no FROM class_nine order by roll_no;";
					$query_run=mysqli_query($con,$query);
					$row = mysqli_num_rows($query_run);
					echo '<label>' .$row. '</label>';
					
			?>
	</label>

	<input type="checkbox" name="select_class[]" value="Class 10">
	<label for="">Class Ten: Total Students - 
			<?php 
					$query= "SELECT roll_no FROM class_ten order by roll_no;";
					$query_run=mysqli_query($con,$query);
					$row = mysqli_num_rows($query_run);
					echo '<label>' .$row. '</label>';
			?>
	</label>
</div>
	
	<!-- Room -->
	<br><br>
	<label for="Select Room">Select Room:</label><br>

	<input type="checkbox" name="select_room[]" value="Room No 5">
	<label for="">Room No Five: Total Seats - 
		<?php 
					$sql= "SELECT total_seats FROM classroom_details WHERE classroom_no=5;";
					$query=$con->query($sql);
					$row=$query->fetch_assoc();
					echo '<label>' .$row["total_seats"]. '</label>';
					?>
	</label>

	<input type="checkbox" name="select_room[]" value="Room No 6">
	<label for="">Room No Six: Total Seats - 
		<?php 
					$sql= "SELECT total_seats FROM classroom_details WHERE classroom_no=6;";
					$query=$con->query($sql);
					$row=$query->fetch_assoc();
					echo '<label>' .$row["total_seats"]. '</label>';
					?>
	</label>

	<input type="checkbox" name="select_room[]" value="Room No 7">
	<label for="">Room No Seven: Total Seats - 
		<?php 
					$sql= "SELECT total_seats FROM classroom_details WHERE classroom_no=7;";
					$query=$con->query($sql);
					$row=$query->fetch_assoc();
					echo '<label>' .$row["total_seats"]. '</label>';
					?>
	</label>

	<input type="checkbox" name="select_room[]" value="Room No 8">
	<label for="">Room No Eight: Total Seats - 
			<?php 
					$sql= "SELECT total_seats FROM classroom_details WHERE classroom_no=8;";
					$query=$con->query($sql);
					$row=$query->fetch_assoc();
					echo '<label>' .$row["total_seats"]. '</label>';
					?>
	</label>

	<input type="checkbox" name="select_room[]" value="Room No 9">
	<label for="">Room No Nine: Total Seats - 
			<?php 
					$sql= "SELECT total_seats FROM classroom_details WHERE classroom_no=9;";
					$query=$con->query($sql);
					$row=$query->fetch_assoc();
					echo '<label>' .$row["total_seats"]. '</label>';
					?>
	</label>

	<input type="checkbox" name="select_room[]" value="Room No 10">
	<label for="">Room No Ten: Total Seats - 
			<?php 
					$sql= "SELECT total_seats FROM classroom_details WHERE classroom_no=10;";
					$query=$con->query($sql);
					$row=$query->fetch_assoc();
					echo '<label>' .$row["total_seats"]. '</label>';
			?>
	</label>
	<br><br>
	<!-- Assign Teachers -->
	<label for="">Select Teachers:</label><br>

	<?php 
					$query="SELECT * from teacher_detail;";
					$result=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($result)){
	?>
			<input type="checkbox" name="select_teacher[]" value="<?php echo $row['t_name'] ?>" ">
			<?php echo $row['t_id'];?>
				<?php echo $row['t_name'];
		}?>


<br><br>
	<input type="submit" name="Submit" style="align-content:center;">
</form>
		</main>
	</div>

</body>
</html>