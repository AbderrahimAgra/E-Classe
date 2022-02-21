<?php 
require_once 'connection.php' ;
$userId = $_GET["id"];
$req= "SELECT name,email,phone  FROM students WHERE id=$userId";
$result = mysqli_query($connection , $req);
while($student = mysqli_fetch_assoc($result)){

  $name = $student["name"];
  $email = $student["email"];
  $phone = $student["phone"];
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $req ="UPDATE students SET name='$name',email='$email' ,phone='$phone' WHERE id='$userId'";
  mysqli_query($connection,$req);
  header('location: ./update.php');
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update</title>
</head>
<body class="bg-light">

<div class="container ">
<div class="row vh-100 align-items-center justify-content-center">
  <div class="col-md-12 text-center">
    <h1 class="h1">UPDATE</h1>
  </div>
  <div class="col-md-8">
  <form action="update.php?id=<?=$userId ?>" method="POST" >
   <div>
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>"  placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Phone</label>
      <input type="number" class="form-control" id="phone" name="phone" value="<?= $phone ?>"   placeholder="Enter number phone">
    </div>
   
    </div> -->
    <div class="">
      <button type="submit" class="btn btn-primary">ADD MODIFICATION</button>
     
      
    </div>
</form>
  </div>
</div>

</div>
</body>
</html>