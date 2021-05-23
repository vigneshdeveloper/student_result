<?php
	// $connection = mysqli_connect("localhost", "root", "", "studentresult");

$connection = new mysqli("localhost", "root", "", "studentresults");
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
?>