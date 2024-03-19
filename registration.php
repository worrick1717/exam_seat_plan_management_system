<?php
	require 'config.php';
	if(!empty($_SESSION["id"])){
  	header("Location: index.php");
	}
	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$username=$_POST["username"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$confirmpassword=$_POST["confirmpassword"];
		$duplicate=mysqli_query($con,"SELECT * FROM registration_db WHERE username='$username' OR email='$email'");
		if(mysqli_num_rows($duplicate)>0){
			echo 
			"<script>alert('Username or Email Has Already Taken'); </script>";
		}
		else{
			if($password==$confirmpassword){
				$query="INSERT INTO registration_db VALUES('','$name','$username','$email','$password')";
			mysqli_query($con,$query);
			echo 
			"<script>alert('Registration Successful');</script>";	
			}
			else{
			echo 
			"<script>alert('Password does not match. Try again');</script>";	
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="registrationpagestyle.css">
</head>
<body>
	<div class="center">
	     <img src="images/logo.png" alt="wilson academy logo" class="logo" ">
	<form class="" action="" method="post" autocomplete="off">

		<div class="txt_field">
		<input type="text" name="name" id="name" required>
		<span></span>
		<label>Name:</label>
		</div>
		
		<div class="txt_field">
		<input type="text" name="username" id="username" required>
		<span></span>
		<label for="username">UserName:</label>
		</div>

		<div class="txt_field">
		<input type="email" name="email" id="email" required>
		<span></span>
		<label for="email">Email:</label>
		</div>

		<div class="txt_field">
		<input type="password" name="password" id="password" required>
		<span></span>
		<label for="password">Password:</label>
		</div>

		<div class="txt_field">
		<input type="password" name="confirmpassword" id="confirmpassword" required>
		<span></span>
		<label for="confirmpassword">Confirm Password:</label>
		</div>
		<input type="submit" name="submit" value="Register">

		<div class="signup_link">
			Already a member? Then <a href="login.php">Login</a>
		</div>
	</form>
	
</body>
</div>
</html>