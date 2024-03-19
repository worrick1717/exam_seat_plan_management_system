
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Seat Plan</title>
</head>
<body>
  <?php
    require 'config.php';
  class SeatPlan{
    public $calculate_to_display_students;
    public $student_of_each_class=0;
    public $initial;
    public $upperlimit;
    public $lowerlimit;
    public $count_selected_class;
    function __construct(){
      if(isset($_POST['exam_type'])){
      $exam=$_POST['exam_type'];
      echo '<p>Exam Type: ' . $exam . '</p>';
      }
    if(isset($_POST['select_class'])){
      echo '<p>Selected Classes: ' . implode(', ', $_POST['select_class']) . '</p>';
      $this->count_selected_class = count($_POST['select_class']);
      echo "Total Selected Classes: " .$this->count_selected_class;
    }
    if(isset($_POST['select_room'])){
      echo '<p>Selected Room: ' . implode(', ', $_POST['select_room']) . '</p>';
      $a=implode(', ', $_POST['select_room']);
      $count_selected_room = count($_POST['select_room']);
      echo "Total Selected Rooms: ".$count_selected_room;
      }
    if(isset($_POST['select_teacher'])){
      echo '<p>Selected Teacher: ' . implode(', ', $_POST['select_teacher']) . '</p>';
      $count_selected_teacher = count($_POST['select_teacher']);
      echo "Total Selected Teacher: ".$count_selected_teacher;
      }
      echo "<br>";
      
    }
    function roomno8seatplanning(){
            echo " <p style=text-align:center;>Lets plan students at room no 8: </p>";
            $con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
            $sql= "SELECT * FROM classroom_details WHERE classroom_no=8;";
            $query=$con->query($sql);
            $row=$query->fetch_assoc();
            $seats=$row["total_seats"];
            $count_selected_class = count($_POST['select_class']);
            echo "<p style=text-align:center;>Total Seats: $seats </p>";
            $student_of_each_class=$seats/$count_selected_class;
            $avg_student_of_each_class=intval($student_of_each_class);
            $this->lowerlimit=0;
            $this->upperlimit=$this->lowerlimit+$student_of_each_class;
            
            echo "<p style=text-align:center;> $student_of_each_class of each class can be arranged </p>";
            $selected_class=$_POST['select_class'];
            echo "<table align='center' border='1px' cellspacing='0' cellpadding='0' style='width:600px; line-height:40px';>";
            echo "<tr>";
              echo "<th colspan='3'><h2>Room No 8</h2></th>";
            echo "</tr>";
            echo "<tr>";
              echo "<th>Class</th>";
              echo "<th>Roll No</th>";
              echo "<th>Name of Students</th>";
            echo "</tr>";
            
            
            if(isset($_POST['Submit'])){
              
              foreach($selected_class as $value){
                if($value=="Class 8"){
                  $sql="SELECT s_class,roll_no,s_name FROM class_eight WHERE roll_no BETWEEN {$this->lowerlimit} AND {$this->upperlimit}";
                  $dbresult=mysqli_query($con,$sql);
                  while($rows=mysqli_fetch_assoc($dbresult))
                  {
                    echo "<tr align>";
                    echo "<td>" .$rows['s_class']. "</td>";
                    echo "<td>" .$rows['roll_no']. "</td>";
                    echo "<td>" .$rows['s_name']. "</td>";
                    echo "</tr>";
                  }
                  
                }
                if($value=="Class 9"){
                  $sql="SELECT s_class,roll_no,s_name FROM class_nine WHERE roll_no BETWEEN {$this->lowerlimit} AND {$this->upperlimit}";
                  $dbresult=mysqli_query($con,$sql);
                  while($rows=mysqli_fetch_assoc($dbresult))
                  {
                    echo "<tr>";
                    echo "<td>" .$rows['s_class']. "</td>";
                    echo "<td>" .$rows['roll_no']. "</td>";
                    echo "<td>" .$rows['s_name']. "</td>";
                    echo "</tr>";
                  }
                }
                if($value=="Class 10"){
                  $sql="SELECT s_class,roll_no,s_name FROM class_ten WHERE roll_no BETWEEN {$this->lowerlimit} AND {$this->upperlimit}";
                  $dbresult=mysqli_query($con,$sql);
                  while($rows=mysqli_fetch_assoc($dbresult))
                  {
                    echo "<tr>";
                    echo "<td>" .$rows['s_class']. "</td>";
                    echo "<td>" .$rows['roll_no']. "</td>";
                    echo "<td>" .$rows['s_name']. "</td>";
                    echo "</tr>";
                  }
                }
              }
            }
            echo "</table>";

    }
            
            
      
    function roomno9seatplanning(){
            echo " <p style=text-align:center;>Lets plan students at room no 9: </p>";
            $con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
            $sql= "SELECT * FROM classroom_details WHERE classroom_no=9;";
            $query=$con->query($sql);
            $row=$query->fetch_assoc();
            $seats=$row["total_seats"];
            $count_selected_class = count($_POST['select_class']);
            echo "<p style=text-align:center;>Total Seats: $seats </p>";
            $student_of_each_class=$seats/$count_selected_class;
            $avg_student_of_each_class=intval($student_of_each_class);
            $this->lowerlimit=$this->upperlimit;
            $this->upperlimit=$this->lowerlimit+$student_of_each_class;
            
            echo "<p style=text-align:center;> $student_of_each_class of each class can be arranged </p>";
            $selected_class=$_POST['select_class'];
            echo "<table align='center' border='1px' cellspacing='0' cellpadding='0' style='width:600px; line-height:40px';>";
            echo "<tr>";
              echo "<th colspan='3'><h2>Room No 9</h2></th>";
            echo "</tr>";
            echo "<tr>";
              echo "<th>Class</th>";
              echo "<th>Roll No</th>";
              echo "<th>Name of Students</th>";
            echo "</tr>";
            
            
            if(isset($_POST['Submit'])){
              
              foreach($selected_class as $value){
                if($value=="Class 8"){
                  $sql="SELECT s_class,roll_no,s_name FROM class_eight WHERE roll_no BETWEEN {$this->lowerlimit} AND {$this->upperlimit}";
                  $dbresult=mysqli_query($con,$sql);
                  while($rows=mysqli_fetch_assoc($dbresult))
                  {
                    echo "<tr align>";
                    echo "<td>" .$rows['s_class']. "</td>";
                    echo "<td>" .$rows['roll_no']. "</td>";
                    echo "<td>" .$rows['s_name']. "</td>";
                    echo "</tr>";
                  }

                }
                if($value=="Class 9"){
                  $sql="SELECT s_class,roll_no,s_name FROM class_nine WHERE roll_no BETWEEN {$this->lowerlimit} AND {$this->upperlimit}";
                  $dbresult=mysqli_query($con,$sql);
                  while($rows=mysqli_fetch_assoc($dbresult))
                  {
                    echo "<tr>";
                    echo "<td>" .$rows['s_class']. "</td>";
                    echo "<td>" .$rows['roll_no']. "</td>";
                    echo "<td>" .$rows['s_name']. "</td>";
                    echo "</tr>";
                  }
                }
                if($value=="Class 10"){
                  $sql="SELECT s_class,roll_no,s_name FROM class_ten WHERE roll_no BETWEEN {$this->lowerlimit} AND {$this->upperlimit}";
                  $dbresult=mysqli_query($con,$sql);
                  while($rows=mysqli_fetch_assoc($dbresult))
                  {
                    echo "<tr>";
                    echo "<td>" .$rows['s_class']. "</td>";
                    echo "<td>" .$rows['roll_no']. "</td>";
                    echo "<td>" .$rows['s_name']. "</td>";
                    echo "</tr>";
                  }
                }
              }
            }
            echo "</table>";
            
          }
    function roomno10seatplanning(){
            echo " <p style=text-align:center;>Lets plan students at room no 10: </p>";
            $con=mysqli_connect("localhost","root","","exam_seat_plan_management_system");
            $sql= "SELECT * FROM classroom_details WHERE classroom_no=10;";
            $query=$con->query($sql);
            $row=$query->fetch_assoc();
            $seats=$row["total_seats"];
            $count_selected_class = count($_POST['select_class']);
            echo "<p style=text-align:center;>Total Seats: $seats </p>";
            $student_of_each_class=$seats/$count_selected_class;
            $this->lowerlimit=$this->upperlimit;
            $this->upperlimit=$this->lowerlimit+$student_of_each_class;
            echo "<p style=text-align:center;> $student_of_each_class of each class can be arranged </p>";
            $selected_class=$_POST['select_class'];
            echo "<table align='center' border='1px' cellspacing='0' cellpadding='0' style='width:600px; line-height:40px';>";
            echo "<tr>";
              echo "<th colspan='3'><h2>Room No 10</h2></th>";
            echo "</tr>";
            echo "<tr>";
              echo "<th>Class</th>";
              echo "<th>Roll No</th>";
              echo "<th>Name of Students</th>";
            echo "</tr>";
            
            
            if(isset($_POST['Submit'])){
              
              foreach($selected_class as $value){
                if($value=="Class 8"){
                  $sql="SELECT s_class,roll_no,s_name FROM class_eight WHERE roll_no BETWEEN {$this->lowerlimit} AND {$this->upperlimit}";
                  $dbresult=mysqli_query($con,$sql);
                  while($rows=mysqli_fetch_assoc($dbresult))
                  {
                    echo "<tr align>";
                    echo "<td>" .$rows['s_class']. "</td>";
                    echo "<td>" .$rows['roll_no']. "</td>";
                    echo "<td>" .$rows['s_name']. "</td>";
                    echo "</tr>";
                  }
                  
                }
                if($value=="Class 9"){
                  $sql="SELECT s_class,roll_no,s_name FROM class_nine WHERE roll_no BETWEEN {$this->lowerlimit} AND {$this->upperlimit}";
                  $dbresult=mysqli_query($con,$sql);
                  while($rows=mysqli_fetch_assoc($dbresult))
                  {
                    echo "<tr>";
                    echo "<td>" .$rows['s_class']. "</td>";
                    echo "<td>" .$rows['roll_no']. "</td>";
                    echo "<td>" .$rows['s_name']. "</td>";
                    echo "</tr>";
                  }
                }
                if($value=="Class 10"){
                  $sql="SELECT s_class,roll_no,s_name FROM class_ten WHERE roll_no BETWEEN {$this->lowerlimit} AND {$this->upperlimit}";
                  $dbresult=mysqli_query($con,$sql);
                  while($rows=mysqli_fetch_assoc($dbresult))
                  {
                    echo "<tr>";
                    echo "<td>" .$rows['s_class']. "</td>";
                    echo "<td>" .$rows['roll_no']. "</td>";
                    echo "<td>" .$rows['s_name']. "</td>";
                    echo "</tr>";
                  }
                }
              }
            }
            echo "</table>";
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

    
        // $check_students=$_POST['select_class'];
        // foreach($check_students as $check){
        //   if($check=="Class 8"){
        //     if("Class 8">27){
        //       $count_selected_class--;
        //     }
        //   }
        //   if($check=="Class 9"){
        //     if("Class 9">46){
        //       $count_selected_class--;
        //     }
        //   }
        //   if($check=="Class 10"){
        //     if("Class 10">32){
        //       $count_selected_class--;
        //     }
        //   }
        // }
      



    }
  }  
}

$call_function=new SeatPlan();
$call_function->submitted();
// if($this->upperlimit>){}
?>

</body>
