<?php
// session_start();
// if(!isset($_SESSION['user'])){
//   header("location: ./index.php?err=You have to login first!"); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADD NEW STUDENTS</title>
</head>
<body class="bg-light">

<div class="container ">
<div class="row vh-100 align-items-center justify-content-center">
  <div class="col-md-12 text-center">
    <h1 class="h1">ADD NEW STUDENTS</h1>
  </div>
  <div class="col-md-8">
  <form action="add.php" method="POST" >
   <div>
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Phone</label>
      <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter number phone">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Enroll Number</label>
      <input type="enumber" class="form-control" id="enroll_number" name="enroll_number" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Date of admission</label>
      <input type="date" class="form-control" id="date" name="date" >
    </div>
    <div class="">
      <button type="submit" class="btn btn-primary">ADD STUDENT</button>
      <button type="reset" class="btn btn-danger" >reset</button>
      
    </div>
</form>
  </div>
</div>

</div>
</body>
</html>
