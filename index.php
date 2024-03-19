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
					<a href="index.php" class="active"><span class="las la-igloo"></span><span> Dashboard</span></a>
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
						<h1>198</h1>
						<span>Total Students</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>244</h1>
						<span>Total Seats Available</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>6</h1>
						<span>Total Room</span>
					</div>
					<div>
						<span class="las la-clipboard"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1>24</h1>
						<span>Total Teachers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>
				<h3>Recent Seat Plan</h3>
			</div>
			<table class="table mt-5" border="1 px" cellpadding="0" cellspacing="0" style="width: 100%;font-size: 16px; border-spacing: 0px;  border-collapse: collapse; color: #1c233d;">
            <thead>
              <tr style="text-align: left;">
                <th>Exam ID</th>
                <th>Exam Name</th>
                <th>Created Date</th>
                <th>View Seat Plan</th>
                <!-- Add more table headers as needed -->
              </tr>
            </thead>
            <tbody>
              <!-- Loop through the orders and display each order as a table row -->

             
			  <?php
				
				if(isset($_SESSION['exam_type'])){
					echo "
						<tr>
						<td>05</td>
						<td>{$_SESSION['exam_type']}
						</td>
						<td>2023-05-15</td>
						<td><a href='display_seat_plan.php' target='_blank'>View Details</a></td>
						</tr>
					";
				}
			 
			 
			?>
			 <tr>
                <td>01</td>
                <td>First Unit Test
                </td>
                <td>2023-05-01</td>
                <td><a href="#">View Details</a></td>
              </tr>
              <tr>
                <td>02</td>
                <td>First Terminal Examination</td>
                <td>2023-05-15</td>
                <td><a href="#">View Details</a></td>
              </tr>
              <tr>
                <td>03</td>
                <td>Second Unit Test
                </td>
                <td>2023-05-15</td>
                <td><a href="#">View Details</a></td>
              </tr>
              <tr>
                <td>04</td>
                <td>Second Term Test
                </td>
                <td>2023-05-15</td>
                <td><a href="#">View Details</a></td>
              </tr>
            </tbody>
          </table>

		</main>
		

	</div>

</body>
</html>