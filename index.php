<?php
session_start();
	include 'connection.php';

	$query="SELECT *, r.id as rid  FROM student s INNER JOIN result r ON s.rollno = r.rollno";
	$result=$connection->query($query);
	?>
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student Results</h2>
  <a style="float: right;" href="add.php">Add New</a>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Roll number</th>
		<th>Student Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Department</th>
        <th>Subject</th>
        <th>Mark obtain</th>
        <th>Result</th>
        <th>Grade</th>
        <th>Update</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	while( $row=$result->fetch_assoc())
		{
		?>
	<tr>
		<td><?php echo $row['rollno']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['dept']; ?></td>
		<td><?php echo $row['subject']; ?></td>
		<td><?php echo $row['markobtain']; ?></td>
		<td><?php 
    if ($row['result']==1) {
      echo "Pass";
    }else{
      echo "Fail";
    }
    ?>
    </td>
		<td><?php echo $row['grade']; ?></td>
		<td><?php echo '<a href="update.php?rollno='.$row['rid'].'">Edit</a>';?></td>
		<td><?php echo '<a href="delete.php?rollno='.$row['rollno'].'&delete=rollno">Delete</a>';?></td>
	</tr>
	<?php
	}
	?>
	</tbody>
  </table>
</div>

</body>
</html>
	
