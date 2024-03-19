<?php
    if(session_id()==""){
        session_start();    
    }
    

    $classes = $_SESSION['selected_class'];
    $rooms = $_SESSION['selected_room'];
    
    $count = max(count($classes), count($rooms));


    $total_seat = $_SESSION['total_seat'];
    $total_std = $_SESSION['total_std'];

    echo "
        <script>
            var total_std_count = $total_std;
        </script>
    ";

    $class_colors = array(
        "class_five"=> "crimson",
        "class_six"=> "lightgreen",
        "class_seven"=> "blue",
        "class_eight"=> "purple",
        "class_nine"=> "green",
        "class_ten"=> "orange",
    );
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        table td{
            padding: 20px;
        }
        .d-flex{
            display: flex;
        }
        .justify-content-center{
            justify-content: center;
        }
        .justify-content-between{
            justify-content: space-between;
        }
        .m-5{
            margin: 5px;
        }
        .my-5{
            margin: 5px 0;
        }
        .p-10{
            padding: 10px;
        }
        .room-select{
            text-align: center;
        }
        .w-25{
            width: 25%;
        }
        .w-50{
            width: 50%;
        }
        .class-select select, .class-select option{
            padding: 10px;
        }
        .class-select > *, .review-room > *{
            width: 100%;
        }
        .place_std{
            display: none;
        }
        .place_std.active{
            display: block;
        }
        .review-room > h3,.status h3, .status h5{
            text-align: center;
        }
        .status{
            line-height: 25px;
            text-align: center;
            margin-top: 20px;
        }
        .status > div{
            margin: 5px 0;
            padding: 10px;
        }


        .review-room table tr td.divider{
            width: 100px;
        }
        .legend span{
            display: inline-block;
            padding: 5px;
            border: 1px solid black;
        }
        .legend .legend-available{
            background: grey;
        }
        button.active{
            background-color: blue;
            color: white;
        }
        .nxt-btn{
            display: flex;
            justify-content: center;
        }
        .nxt-btn button{
            padding: 10px;
        }
    </style>
<!-- </head> -->
<!-- <body> -->
    <script>
        var current = [];
        var placement = [];

        var room_status = [];
        var class_status = [];

        var student_no;

        var class_color = {
            "class_five": "crimson",
            "class_six": "lightgreen",
            "class_seven": "blue",
            "class_eight": "purple",
            "class_nine": "green",
            "class_ten": "orange",
        }

    </script>
    <div class="p-10 room-select">
            <?php
                foreach($rooms as $room) {
                    $sql = "SELECT * FROM `classroom_details` WHERE classroom_no = $room ";
    
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $available_seat = $row['total_seats'];
                    $no_row = $row['no_of_rows'];
    
                    echo "<button class='p-10 m-5' --data-room='$room' --data-row-seat='$no_row'>Room $room </button>";
                    echo "
                    <script>

                        room = {
                                'available': $available_seat,
                                'reserved': 0,
                                'remaining': $available_seat,
                                'no_row': $no_row,
                        }
                        room_status[$room] = room;
                    </script>
                    ";
                }

            ?>
    </div>
    <div class="d-flex">
        <div class="p-10 w-25 class-select">
            <div class="status">
                
                <h3>Class Status</h3>
                <p>Total Count: <?=$total_std?></p>
                <div class="class-status">
                    <div class="d-flex justify-content-between">
                        <p>Students: <span id="total_std"></span> </p>
                        <p>Reserved Students: <span id="reserved_std"></span></p>
                    </div>
                    <p>Remaining Students: <span id="remaining_std"></span></p>
                </div>
            </div>

            <select name="" id="">
                <option value="" disabled="disabled" selected>Select class</option>
                <?php
                
                
                foreach($classes as $class) {
                        $sql = "SELECT COUNT(roll_no) AS total FROM `$class` ";
        
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $std_count = $row['total'];
                        
                        echo "<option --data-class='$class' --data-total='$std_count'>$class</option>";
                        echo "
                        <script>

                            class_no = {
                                'available': $std_count,
                                'reserved': 0,
                                'remaining': $std_count,
                            }
                            class_status['$class'] = class_no;
                        </script>
                        ";
                }
                    
                ?>
            </select>

            <button class="p-10 my-5 place_std" id="place_std">Place Student</button>
            
        </div>
        <div class="p-10 w-50 review-room">
            <h3>Room No: <span id="set_room"></span></h3>
            <table  cellspacing="5" cellpadding="30">
            </table>
            <div class="legend d-flex justify-content-center">
                <?php
                    foreach($classes as $class){
                        $bgcolor = $class_colors[$class];
                        
                        echo "
                            <p class='p-10'><span style='background: $bgcolor'></span> $class  </p>
                        ";
                    }
                
                ?>
                <p class="p-10"><span class="legend-available"></span> Available Seat </p>
            </div>
        </div>
        <div class="p-10 w-25">
            <div class="status">
                <h3>Room Status</h3>
                <p>Total Count: <?= $total_seat ?></p>
                    <div class="room-status">
                        <div class="d-flex justify-content-between">
                            <p>Total Seats: <span id="available_seat"></span></p>
                            <p>Reserved Seats: <span id="reserved_seat"></span></p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="nxt-btn">
        <button>NEXT</button>
    </div>

    <script>
        console.log(room_status);
        console.log(class_status);

        console.log(class_color.class_five);

        current['room'] = Object.keys(room_status)[0]
      

        // events handling

        let room_btns = document.querySelectorAll(".room-select button"); // selecting all room buttons
        room_btns[0].classList.add('active'); // setting default button to active

        handleRoom(current['room']);
        setReviewRoom();

        // following code states the task that need to be performed at every room select button clicked
        room_btns.forEach((x)=>{ // looping through all buttons 
            x.addEventListener("click", function(){ // listening click event in these buttons
                room_btns.forEach((x)=>{    // setting all buttons to default style before assigning active to clicked button
                    x.classList.remove('active');
                })

                this.classList.add("active") // assigning the clicked button: active
                

                let room_no = x.getAttribute('--data-room');    // getting current room_no
                handleRoom(room_no);    // states the task related to room needs to be performed on button clicked
                setReviewRoom(); // creating room view based on the selected room button
                highlightPlacedStudent();
            });
        });

        // following code states the task that need to be performed at every class select button clicked
        let class_btns = document.querySelector("select"); // getting all class buttons
        class_btns.addEventListener("change", () => {   // listening change event on every class button 
            let class_no = class_btns.value;    // getting the selected option

            let place_std = document.querySelector("#place_std");
            place_std.classList.add("active");
            handleClass(class_no); // states the task related to class needs  be performed on selected option
        });

        let place_std = document.querySelector("#place_std");
        place_std.addEventListener('click', function(){
            setStudentInClass();
        });

        let nxt_btn = document.querySelector(".nxt-btn");
        nxt_btn.addEventListener('click', () => {
            
            let total = 0;

            placement.forEach((x)=>{
                total += x[2];
            })
            
            if(total != total_std_count){
                alert("Not all students have been assigned seats.")
                return; 
            }

            let jsonData = JSON.stringify(placement);
            console.log(jsonData);
            let data = fetch('set_students.php',{
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: jsonData,
            })
            .then(response => {
            })
            .then(data=>{
                console.log(data);
            })
            .catch(error => {
                console.error('Error: ', error);
            })

            alert("Seat Plan Created");

            location.href = " index.php";
        })

        // functions to handle request

        function handleRoom(room_no){
            current['room'] = room_no;
            console.log(current);
            let available_seat = document.querySelector("#available_seat"); // getting available seat status 
            let reserved_seat = document.querySelector("#reserved_seat"); // getting reserved seat status 

            let set_room = document.querySelector("#set_room");

            set_room.textContent = room_no; // setting the selected room number
            
            available_seat.textContent = room_status[room_no].available;    // setting the available room number from selected room no 
            reserved_seat.textContent = room_status[room_no].reserved;  // setting the reserved room number from selected room

        }

        function setReviewRoom(){
            let table = document.querySelector("table");    // selecting table 
                let tr = document.querySelectorAll("tr");   // selecting table row [tr]

                tr.forEach((x)=>{   // before creating table row and data, removing the current one 
                    table.removeChild(x);   
                })
        // function to create room view
            let current_room = current['room'];
            let no_row = room_status[current_room]['no_row'];
            let bg_color;
            // console.log(room_status[current_room]['no_row']);


            let cellcount = 0;  // variable to store cell number
            for(let i = 0; i < no_row; i++){
                let tr = document.createElement("tr");
                for(let j = 0; j<5;j++){
                    cellcount++;    
                    bg_color = "grey";
                    if(i != 0 && j ==2 ) continue;
                    
                    let td = document.createElement("td");
                    
                    if(i == 0 && j == 2){
                        td.rowSpan = no_row;
                        td.className = "divider";
                        bg_color = "white";
                    }
                    td.style.backgroundColor = bg_color;
                    tr.appendChild(td);
                }
                table.appendChild(tr);
            }
        }


        function handleClass(class_no){
            current['class'] = class_no;
            console.log(current);
            let total_std = document.querySelector("#total_std");
            let reserved_std = document.querySelector("#reserved_std");
            let remaining_std = document.querySelector("#remaining_std");

            total_std.textContent = class_status[class_no]['available'];
            reserved_std.textContent = class_status[class_no]['reserved'];
            remaining_std.textContent = class_status[class_no]['remaining'];
        }
        
        function setStudentInClass(){
            let current_class = class_status[current['class']];
            let current_room = room_status[current['room']];

            student_no = parseInt(prompt("Enter number of students to place here:"));
            if(isNaN(student_no)) return;
            if(!isValid(current_class, current_room)) return false;

            // setStudent();
            let arr = [current['room'],current['class'],student_no];
            placement.push(arr);
            console.log("placement: ");
            console.log(placement);

            current_class.reserved += student_no;
            current_room.reserved += student_no;

            current_class.remaining = current_class.available - current_class.reserved;
            current_room.remaining = current_room.available - current_room.reserved;

            handleClass(current['class']);
            handleRoom(current['room']);

            setReviewRoom();
            highlightPlacedStudent();
        }
        function highlightPlacedStudent(){
            let current_room = current['room'];
            let td_count = 0;
            let td = document.querySelectorAll("td:not(.divider)");

            console.log("All tds: ");
            console.log(td);

            // retrieving only the array of room matching with current room
            let curr_room_placement = placement.map((elem) => {
                if(elem[0] == current_room) return elem; 
            });

            console.log("curr room placement");
            console.log(curr_room_placement);
            if(curr_room_placement.length == 0) return;


            curr_room_placement.forEach((x)=>{
                if(x){
                    let room_no = x[0];
                    let class_no = x[1];
                    let std = x[2];
                    let bg_color = class_color[class_no];
                    console.log(std);
                    for(let i = 0; i < std; i++){
                        td[td_count].style.backgroundColor = bg_color;
                        td_count++;
                    }
                }
            })

            console.log(curr_room_placement);
        }
        function isValid(current_class, current_room){
            // console.log(current_class.available);
            // console.log(current_room.available);

            if(current_class.available == current_class.reserved){
                alert("All Students Placed");
                return false;
            }

            if(current_room.available == current_room.reserved){
                alert("All Seat Reserved");
                return false;
            }
            
            if(student_no > current_class.available || student_no > current_room.available){
                alert("Student number overexceeded");
                return false;
            } 

            if(student_no > current_class.remaining || student_no > current_room.remaining){
                alert("Student Count not Valid");
                return false;
            }

                
            return true;
        }
</script>
<!-- </body>
</html>              -->