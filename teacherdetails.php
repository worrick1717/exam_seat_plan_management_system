<?php
	require 'config.php';
	if(isset($_POST["save"])){
		$teacher_id=$_POST["teacher_id"];
		$teacher_name=$_POST["teacher_name"];
		$teacher_designation=$_POST["teacher_designation"];
		$query="INSERT INTO teacher_detail(t_id,t_name,t_designation) VALUES('$teacher_id','$teacher_name','$teacher_designation')";
		if(mysqli_query($con,$query)){
			echo "<script>alert('Data inserted successfully')</script>";
		}
		else{
			echo "<script>alert('Invalid Data')</script>";
		}
	}
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
					<a href="teacherdetails.php" class="active"><span class="las la-users"></span><span> Teacher Details</span></a>
				</li>
				<li>
					<a href="selectclass.php"><span class="las la-clipboard-list"></span><span> Create Exam Seat Plan</span></a>
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
			
			<div class="mydiv" align="center">
	<form class="" action="" method="post" autocomplete="off">
		<h2>Teachers Information</h2>
		<br>
		<label for="teacher_id">Enter Teacher id:</label>
		<input type="number" name="teacher_id" id="teacher_id"><br><br>

		<label for="teacher_name">Enter Teachers Name:</label>
		<input type="text" name="teacher_name" id="teacher_name"><br><br>

		<label for="teacher_designation">Enter Teacher Designation:</label>
		<input type="text" name="teacher_designation" id="teacher_designation"><br><br>

		<button type="submit" name="save">Save</button>
	</form>
</div>
		</main>
		

	</div>

</body>
</html>