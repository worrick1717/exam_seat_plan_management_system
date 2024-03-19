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
					<a href="studentdetails.php" ><span class="las la-clipboard"></span><span> Student Details</span></a>
				</li>
				<li>
					<a href="teacherdetails.php"><span class="las la-users"></span><span> Teacher Details</span></a>
				</li>
				<li>
					<a href="selectclasss.php" class="active"><span class="las la-clipboard-list"></span><span> Create Exam Seat Plan</span></a>
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
	</div>
	<div class="reserve-seat">
		<?php
			include("reserve_seat.php");
		?>
	</div>
</body>
</html>