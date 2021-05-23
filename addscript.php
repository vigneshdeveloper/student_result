<?php
include 'connection.php';


if (isset($_POST['_submit'])) 
	{
		$rlno = $_POST['_rollno'];
		$stud = $_POST['_studname'];
		$mail = $_POST['_email'];
		$mbl = $_POST['_mobile'];
		$dpt = $_POST['_dept'];

		$sub = $_POST['_subject'];
		$totl = $_POST['_total'];
		$mark = $_POST['_markobtain'];
		$resu = $_POST['_result'];
		$grd = $_POST['_grade'];

		$query1 = "INSERT INTO student(rollno,name,email,mobile,dept) values ('$rlno','$stud','$mail','$mbl','$dpt')";
		if($connection->query($query1)){
					
			$query = "INSERT INTO result(rollno,subject,totalmark,markobtain,result,grade) values ('$rlno','$sub','$totl','$mark','$resu','$grd')";
			if($connection->query($query)){
						echo '<script>
					alert("Successfully Added!!!");
					window.location ="index.php";
				  </script>';
			}
		}
		

	}
			 
		
?>

