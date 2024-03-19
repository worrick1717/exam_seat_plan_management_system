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
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Exam Seat Plan Management System</title>
      <link rel="stylesheet" href="selectclassstyle.css">
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
   </div>


      
      <div class="container">
         <p style="text-align: center; width: 100%;  margin-left: 350px;  font-size: 30px; font-family: 'Poppins',sans-serif; margin-top: 50px;"> Create Exam Seat Plan</p>
         <div class="progress-bar" style="margin-left:340px; width:100%;">
            <div class="step">
               <p>
                  Exam Type
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Select Class
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Allocate Rooms
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit Details
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
            <form action="sidemenu.php">
               <div class="page slide-page">
                  
                  <!-- select exam type code -->
                  <div class="title">
                     Select Exam Type:
                  </div>
               <div class="input_field">
                         <input type="radio" id="fut" name="exam_type" value="First Unit Test" onclick="setExamType(this.value)">
                        <label for="fut">  First Unit Test</label><br><br>
                         <input type="radio" id="fte" name="exam_type" value="First Term Exam" onclick="setExamType(this.value)">
                        <label for="fte">  First Terminal Examination</label><br><br>
                         <input type="radio" id="sut" name="exam_type" value="Second Unit Test" onclick="setExamType(this.value)">
                        <label for="sut">  Second Unit Test</label><br><br>
                         <input type="radio" id="ste" name="exam_type" value="Second Term Exam" onclick="setExamType(this.value)">
                        <label for="ste">  Second Terminal Examination</label><br><br>
                        <input type="radio" id="tut" name="exam_type" value="Third Unit Test" onclick="setExamType(this.value)">
                         <label for="tut">  Third Unit Test</label><br><br>
                         <input type="radio" id="tte" name="exam_type" value="Third Terminal Examination" onclick="setExamType(this.value)">
                          <label for="tte">  Third Terminal Examination</label>
                  </div>
                  <div class="title">
                     Select pattern: 
                  </div>
                  <div class="input_field">
                     <input type="radio" id="row" name="pattern_of_seat">
                     <label for="row"> Row</label>&nbsp&nbsp&nbsp&nbsp
                     <input type="radio" id="row" name="pattern_of_seat">
                     <label for="row"> Column</label>
                  </div>

                  <div class="field">
                     <button class="firstNext next">Next</button>
                  </div>
               </div>

               <!-- Select Classroom that have exam code -->
               <div class="page">
                   <div class="title">
                     Select Classes:
                  </div>
                        <div class="class_select input_field">

                        <input type="radio" id="all">
                        <label for="all">  Select All</label><br><br>

                        <?php
        
                           $classes = Array(
                              "class_five",
                              "class_six",
                              "class_seven",
                              "class_eight",
                              "class_nine",
                              "class_ten",
                           );

                           foreach($classes as $class){
                                 $sql = "SELECT COUNT(roll_no) AS total, s_class FROM `$class` ";
                                 $result = mysqli_query($con,$sql);

                                 $row = mysqli_fetch_assoc($result);
                                 
                                 $class_no = $row['s_class'];
                                 $total = $row['total'];

                                 echo "
                                    <input type='checkbox' id='$class' --data-total='$total'  onclick='total_std($total)'>
                                    <label for='$class'> Class: ". ucfirst(substr($class,6)) ." - Total Students $total</label><br><br>
                                 ";
                           }
                        
                        ?>
                       
                        
                        <!-- <input type="radio" id="class_6">
                        <label for="class_6">  Class 6 - Total Students 36</label><br><br>
                        <input type="radio" id="class_7">
                        <label for="class_7">  Class 7 - Total Students 36</label><br><br>
                        <input type="radio" id="class_8">
                        <label for="class_8">  Class 8 - Total Students 36</label><br><br>
                        <input type="radio" id="class_9">
                        <label for="class_9">  Class 9 - Total Students 36</label><br><br>
                        <input type="radio" id="class_10">
                        <label for="class_10">  Class 10 - Total Students 36</label><br><br> -->
                        <label for="">  Total Students Selected - <span id="total_std">0</span></label>
                         </div>
                         <div class="field btns">
                     <button class="prev-1 prev">Previous</button>
                     <button class="next-1 next">Next</button>
                  </div>
               </div>

               <!-- Assign Room Code -->
               <div class="page"> 
                 <div class="title">
                  Allocate Rooms:
                 </div>
                 <div class="room_select input_field">
                        <label>Total Students: <span id="total_std_count"></span></label>  <br><br> 
                        <input type="radio" id="select_all_rooms">
                        <label for="select_all_rooms">  Select All</label><br><br>

                        <?php
                           $total_room_capacity = 0;
                           $sql = "SELECT * FROM `classroom_details`";

                           $result = mysqli_query($con,$sql);

                           while($row = mysqli_fetch_assoc($result)){
                              $room_no = $row['classroom_no'];
                              $capacity = $row['total_seats'];

                              echo "
                                 <input type='checkbox' id='$room_no' --data-capacity='$capacity' onclick='seatCapacity()'>
                                 <label for='$room_no'>  Room No. $room_no - Capacity $capacity Seats</label><br><br>
                              ";

                              // echo "<input type='checkbox' name='rooms[]' value='$room_no' capacity='$capacity'>";
                              // echo "<label>$room_no [ $capacity ]</label>";
                           }

                        ?> 

                        <!-- <label for="room_5">  Room No. 5 - Capacity 36 Students</label><br><br>
                        <input type="radio" id="room_6">
                        <label for="room_6">  Room No. 6 - Capacity 36 Students</label><br><br>
                        <input type="radio" id="room_7">
                        <label for="room_7">  Room No. 7 - Capacity 36 Students</label><br><br>
                        <input type="radio" id="room_8">
                        <label for="room_8">  Room No. 8 - Capacity 36 Students</label><br><br>
                        <input type="radio" id="room_9">
                        <label for="room_9">  Room No. 9 - Capacity 36 Students</label><br><br>
                        <input type="radio" id="room_10">
                        <label for="room_10">  Room No. 10 - Capacity 36 Students</label><br><br> -->
                        <label>Total Room Capacity - <span id="seat_capacity">0</span> Seats</label>
                 </div>
                  <div class="field btns">
                     <button class="prev-2 prev">Previous</button>
                     <button class="next-2 next">Submit</button>
                  </div>
               </div>
               
               
               <div class="page">
                  <div class="title">
                     Information:
                  </div>
                  <div class="input_field">
                     <label>Exam Type: <span id="final-exam-type"></span></label><br><br>
                     <label>Selected Classes: <span id="final-selected-class"></span></label><br><br>
                     <label>Selected Rooms: <span id="final-selected-room"></span></label>
                  </div>
                  
                  <div class="field btns">
                     <button class="prev-3 prev">Previous</button>
                     <button class="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
      <script src="script.js"></script>
   </body>
</html>