<?php
session_start();
  include 'connection.php';
  $rid = @$_GET['rollno'];
  $query="SELECT *, r.id as rid  FROM student s INNER JOIN result r ON s.rollno = r.rollno where r.id = '$rid'";
  $result=$connection->query($query);
  $res = $result->fetch_assoc();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Student Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="autocalculate.js"></script>

</head>
<body>

<div class="container">
  <h2>Add Student Result</h2>
  <form class="form-horizontal" method="post" action="<?=($rid)?'updatescript.php':'addscript.php';?>">
    <div class="form-group">
      <label class="control-label col-sm-2">Roll No :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" placeholder="Enter Roll No" name="_rollno" value="<?=@$res['rollno'];?>">
        <input type="hidden" name="rid" value="<?=$rid;?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Student Name :</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="" placeholder="Enter Student Name " name="_studname" value="<?=@$res['name'];?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Email :</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="" placeholder="Enter Your Email " name="_email" value="<?=@$res['email'];?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Mobile :</label>
      <div class="col-sm-10">          
        <input type="tel" class="form-control" id="" placeholder="Enter Contact Number " name="_mobile" value="<?=@$res['mobile'];?>" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Dept :</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" id="" placeholder="Enter Your Department " name="_dept" value="<?=@$res['dept'];?>" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2">Subject :</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" id="" placeholder="Enter Your Subject" name="_subject" value="<?=@$res['subject'];?>" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Total Mark :</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" id="" placeholder="Enter Total " name="_markobtain" onchange="calculateAmount(this.value)" value="<?=@$res['markobtain'];?>" required>
      </div>
    </div>    <div class="form-group">
      <label class="control-label col-sm-2">Mark Obtain :</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" id="mark_opt" placeholder="Enter Mark Obtain " name="_markobtain" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Result :</label>
      <div class="col-sm-10" value="$res['name']">         
        <input type="" class="form-control" id="result" placeholder="Enter Result " name="_result" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Grade :</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" id="grade" placeholder="Enter Grade" name="_grade" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input style="float:right;" type="submit" value="Update" class="btn btn-default" name="_submit">
      </div>
    </div>
  </form>
</div>

</body>
</html>
