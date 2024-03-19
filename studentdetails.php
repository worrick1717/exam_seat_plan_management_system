<?php
	require 'config.php';
	if(isset($_POST["submit"])){
		$s_roll=$_POST["s_roll"];
		$s_name=$_POST["s_name"];
		$s_class=$_POST["s_class"];
		$s_section=$_POST["s_section"];
		//$query="INSERT INTO student_detail(roll_no,s_name,s_class,s_section) VALUES('$s_roll','$s_name','$s_class','$s_section')";
		
		if($s_class==10){
			$query="INSERT INTO class_ten(roll_no,s_name,s_class,s_section) VALUES('$s_roll','$s_name','$s_class','$s_section')";
		}else if($s_class==9){
			$query="INSERT INTO class_nine(roll_no,s_name,s_class,s_section) VALUES('$s_roll','$s_name','$s_class','$s_section')";
		}elseif ($s_class==8) {
			$query="INSERT INTO class_eight(roll_no,s_name,s_class,s_section) VALUES('$s_roll','$s_name','$s_class','$s_section')";
		}elseif ($s_class==7) {
			$query="INSERT INTO class_seven(roll_no,s_name,s_class,s_section) VALUES('$s_roll','$s_name','$s_class','$s_section')";
		}
		elseif ($s_class==6) {
			$query="INSERT INTO class_six(roll_no,s_name,s_class,s_section) VALUES('$s_roll','$s_name','$s_class','$s_section')";
		}
		elseif ($s_class==5) {
			$query="INSERT INTO class_five(roll_no,s_name,s_class,s_section) VALUES('$s_roll','$s_name','$s_class','$s_section')";
		}else{
			echo "<script>alert('Please Select a proper class')</script>";
		}


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
					<a href="studentdetails.php" class="active"><span class="las la-clipboard"></span><span> Student Details</span></a>
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
			
			<div class="studentdetails" align="center">
	<form class="" action="" method="post">
		<h2>Student Details</h2><br><br>

		<label for="s_roll">Student Roll No:</label>
		<input type="number" name="s_roll" id="s_roll"><br><br>
		<label for="s_name">Enter Student Name:</label>
		<input type="text" name="s_name" id="s_name"><br><br>


		<label for="s_class">Enter Student Class:</label>
		<select id="s_class" name="s_class">
			<option>Select Class</option>
			<option value="1">One</option>
			<option value="2">Two</option>
			<option value="3">Three</option>
			<option value="4">Four</option>
			<option value="5">Five</option>
			<option value="6">Six</option>
			<option value="7">Seven</option>
			<option value="8">Eight</option>
			<option value="9">Nine</option>
			<option value="10">Ten</option>
		</select>
		<br><br>
		<label for="s_section">Enter Student Section:</label>
		<input type="radio" name="s_section" value="a">A
		<input type="radio" name="s_section" value="b">B
		<br><br>
		<button type="submit" name="submit">Submit</button>
	</form>
	</div>
	<br><br>
	<form action="csvfileupload.php" enctype="multipart/form-data" method="post" style="text-align:center;" >
		<h4>For Bulk Data Upload</h4><br>
		<label for="file">Import csv file: </label>
		<input type="file" name="csv" id="csv" class="large" accept=".csv"><br><br>

		<label for="s_class">Select Class:</label>
		<select id="s_class" name="s_class">
			<option>Select Class</option>
			<option value="1">One</option>
			<option value="2">Two</option>
			<option value="3">Three</option>
			<option value="4">Four</option>
			<option value="5">Five</option>
			<option value="6">Six</option>
			<option value="7">Seven</option>
			<option value="8">Eight</option>
			<option value="9">Nine</option>
			<option value="10">Ten</option>
		</select>
		<br><br>
		<button type="submit" name="submit">Submit</button>
	</form>
		</main>
		

	</div>

</body>
</html>