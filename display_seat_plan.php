<?php

    require 'config.php';   

    $sql = "SELECT * FROM selected_room_list";
    $room_result = mysqli_query($con, $sql);

    $classes = [];
    $mysqli_result = [];

    
    while($room_data = mysqli_fetch_assoc($room_result)){

        $stds=[];
        $room = $room_data['room'];

        $sql = "SELECT * FROM classroom_details WHERE classroom_no = $room";
        $result = mysqli_query($con, $sql);
        $data = mysqli_fetch_assoc($result);

        $row = $data['no_of_rows'];
        $col = $data['no_of_column'];


        $sql = "SELECT * FROM exam_schedule where room = $room";
        $exam_schedule = mysqli_query($con, $sql);

        while($row1 = mysqli_fetch_assoc($exam_schedule)){
            $class = $row1['class'];
            if(!in_array($class, $classes)){
                $classes[] = $class;

                $sql = "SELECT * FROM $class";
                $mysqli_result[$class] = mysqli_query($con, $sql);
            }
        }

        $sql = "SELECT * FROM exam_schedule where room = $room";
        $exam_schedule = mysqli_query($con, $sql);
        while($row1 = mysqli_fetch_assoc($exam_schedule)){
            $class = $row1['class'];
            
            for($i=0; $i<$row1['student_no']; $i++){
                $std_info = mysqli_fetch_assoc($mysqli_result[$class]);
                $stds[] = "Class: " . ucfirst(substr($class,6)) ." <br> Name: " . $std_info['s_name'];
            }

        }
        createFormat($row, $col, $stds, $room);
        // print_r($stds);
        // echo "<br>";

    }

    function createFormat($row, $col, $stds, $room){
        echo "
            <table border cellspacing='0' cellpadding='10' width='100%'>
            <tr>
                <th colspan='4'>Room No: $room</th>
            </tr>
            <tr>
                <th colspan='2'>Left</th>
                <th colspan='2'>Right</th>
            </tr>
        ";
        $std_total_count = count($stds);
        $std_count = 0;
        shuffle($stds);
        for($i=0;$i<$row;$i++){
            echo "<tr>";
            for($j = 0; $j < $col*2; $j++){
                if($std_count >= $std_total_count){
                    echo "<td></td>";
                }else{
                    $std = $stds[$std_count];
                    echo "<td>$std</td>";
                }
                $std_count++;
            }
            echo "</tr>";
        }
        echo"
            </table>
            <br>
        ";
    }

?>