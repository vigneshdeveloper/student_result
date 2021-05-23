<?php 
include 'connection.php';
if(isset($_GET['delete']))
{
	$delete=$_GET['delete'];
    $rlno=$_GET['rollno'];
    if($delete=='rollno')
    {
	    $query="DELETE FROM student WHERE rollno='$rlno'";
	    $result=$connection->query($query);
	    $query1="DELETE FROM result WHERE rollno='$rlno'";
    	$connection->query($query1);
	    echo '<script>
					alert("Deleted Successfully!!!");
					window.location ="index.php";
				  </script>';
			  
	}
}
 ?>