<?php
	include("config.php");
	if (isset($_FILES['csv'])):
		$s_class=$_POST["s_class"];
		$csv_file=$_FILES['csv']['tmp_name'];
		if(is_file($csv_file)):
			if(($handle=fopen($csv_file, "r"))!== false):
				while(($csv_data=fgetcsv($handle,1000,","))!==false){
					$num=count($csv_data);
					for($c=0;$c<$num;$c++):
						$column[$c]=$csv_data[$c];
					endfor;
					if($s_class==10){
						$inserted=$con->query("INSERT INTO class_ten(roll_no,s_name,s_class,s_section) VALUES('$column[0]','$column[1]','$column[2]','$column[3]')");
					}
					elseif($s_class==9){
						$inserted=$con->query("INSERT INTO class_nine(roll_no,s_name,s_class,s_section) VALUES('$column[0]','$column[1]','$column[2]','$column[3]')");
					}
					elseif($s_class==8){
						$inserted=$con->query("INSERT INTO class_eight(roll_no,s_name,s_class,s_section) VALUES('$column[0]','$column[1]','$column[2]','$column[3]')");
					}
					elseif($s_class==7){
						$inserted=$con->query("INSERT INTO class_seven(roll_no,s_name,s_class,s_section) VALUES('$column[0]','$column[1]','$column[2]','$column[3]')");
					}
					elseif($s_class==6){
						$inserted=$con->query("INSERT INTO class_six(roll_no,s_name,s_class,s_section) VALUES('$column[0]','$column[1]','$column[2]','$column[3]')");
					}
					elseif($s_class==5){
						$inserted=$con->query("INSERT INTO class_five(roll_no,s_name,s_class,s_section) VALUES('$column[0]','$column[1]','$column[2]','$column[3]')");
					}
					else{
						echo "<script>alert('Unable to upload data')</script>";
					}
				}
				$msg="<script>alert('Data Uploaded Successfully')</script>";;
				fclose($handle);
			else:
				$msg="Unable to read the format try again";
			endif;
		else:
			$msg="CSV format file not found";
		endif;
	else:
		$msg="Please try again";
	endif;
	echo $msg;
?>