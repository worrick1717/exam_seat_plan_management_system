<?php
	require 'config.php';
	if(isset($_POST["insert"])){
		$classroom_no=$_POST["classroom_no"];
		$no_of_rows=$_POST["no_of_rows"];
		$no_of_column=$_POST["no_of_column"];
		$total_seats=($no_of_rows*($no_of_column*2));
		$query="INSERT INTO classroom_details(classroom_no,no_of_rows,no_of_column,total_seats) VALUES('$classroom_no','$no_of_rows','$no_of_column','$total_seats')";
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
					<a href="classroomdetails.php" class="active"><span class="las la-users"></span>
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
					<p><?php echo $row["name"]; ?></p>
					<small>Admin</small>
					<small href="logout.php">Logout</small>
				</div>
			</div>
		</header>

		<main>
			
			<div class="mydiv" align="center">
	<h2>Classroom Format</h2><br><br>
	<table border="1" width="500" height="80" cellpadding="0" cellspacing="0">
		<tr>
			<th colspan="5">Board</th>
		</tr>
		<tr>
			<th align="center" colspan="2">Column 1</th>
			<td align="center" rowspan="2">Walkthrough</td>
			<th align="center" colspan="2">Column 2</th>
		</tr>
		<tr align="center">
			<td>Student 1</td>
			<td>Student 2</td>
			<td>Student 3</td>
			<td>Student 4</td>
		</tr>
		
	</table>
	
	<br>
	<form class="" action="" method="post" autocomplete="off">

	<label for="classroom_no">Enter Classroom Number:</label>
	<input type="number" name="classroom_no" id="classroom_no"><br><br>

	<label for="no_of_rows">Enter no. of rows:</label>
	<input type="number" name="no_of_rows" id="no_of_rows"><br><br>

	<label for="no_of_column">Enter no. of column:</label>
	<input type="number" name="no_of column" id="no_of_column"><br><br>

	<button type="submit" name="insert">Insert</button>
	</form>
</div>
		</main>
		

	</div>

</body>
</html>



