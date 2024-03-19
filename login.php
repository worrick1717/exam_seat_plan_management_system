<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($con, "SELECT * FROM registration_db WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
  <link rel="stylesheet" href="loginpagestyle.css">
</head>
<body>
      <div class="center">
	     <img src="images/logo.png" alt="wilson academy logo" class="logo" ">
       <!-- <h1>Login</h1> -->

	     <form class="" action="" method="post" autocomplete="off" >
		   
      <div class="txt_field">
		  <input type="text" name="usernameemail" id="usernameemail" required>
      <span></span>
      <label>Username or Email</label>
      </div>

		  <div class="txt_field">
		  <input type="password" name="password" id="password" required>
      <span></span>
      <label>Password</label>
      </div>

      <div class="pass">Forgot Password?</div>

		  <input type="submit" name="submit" value="Login">

      <div class="signup_link">
        Not a member? <a href="registration.php">Register</a>
      </div>
      </div>
	     </form>

	     
     </div>
  </body>
</html>
