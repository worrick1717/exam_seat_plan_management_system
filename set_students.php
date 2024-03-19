<?php
    require("config.php");
    session_start();
    // Check if the data has been sent via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get the raw JSON data
  $jsonData = file_get_contents("php://input");

  // Convert JSON to PHP array
  $myArray = json_decode($jsonData, true);

  $sql = "DELETE FROM `selected_class_list`";
  mysqli_query($con, $sql);

  $sql = "DELETE FROM `selected_room_list`";
  mysqli_query($con, $sql);

  $sql = "DELETE FROM `exam_schedule`";
  $result = mysqli_query($con, $sql);

  foreach($_SESSION['selected_room'] as $room){
        $sql = "INSERT INTO selected_room_list VALUES($room)";
        mysqli_query($con, $sql);
  }
  
  foreach($_SESSION['selected_class'] as $class){
    $sql = "INSERT INTO `selected_class_list`(`class`) VALUES ('$class')";
    mysqli_query($con, $sql);
  }

  foreach($myArray as $placement){
    $sql = "INSERT INTO `exam_schedule`(`name`, `room`, `class`, `student_no`) VALUES ('','$placement[0]','$placement[1]','$placement[2]')";
    $result = mysqli_query($con, $sql);
    $exam_room_list[] = $placement[0];
    $exam_class_list[] = $placement[1];
  }

}
?>