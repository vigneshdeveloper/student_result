<?php
include 'connection.php';


if (isset($_POST['_submit'])) 
	{
		$rlno = $_POST['_rollno'];
		$stud = $_POST['_studname'];
		$mail = $_POST['_email'];
		$mbl = $_POST['_mobile'];
		$dpt = $_POST['_dept'];
		$rid = $_POST['rid'];
		$sub = $_POST['_subject'];
		$totl = $_POST['_total'];
		$mark = $_POST['_markobtain'];
		$resu = $_POST['_result'];
		$grd = $_POST['_grade'];

		$query1 = "UPDATE student SET rollno = '$rlno', name = '$stud',email = '$mail',mobile = '$mbl', dept = '$dpt' WHERE rollno = '$rlno'";
		if($connection->query($query1)){
					
			$query = "UPDATE result SET rollno = '$rlno',subject = '$sub', totalmark = '$totl', markobtain = '$mark', result = '$resu', grade = '$grd' WHERE id = '$rid'";
			if($connection->query($query)){
						echo '<script>
					alert("Successfully Updated!!!");
					window.location ="index.php";
				  </script>';
			}
		}
		

	}
			 
		
?>

