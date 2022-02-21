<?php
session_start();
if(!isset($_SESSION['user'])){
  header("location: ./index.php?err=You have to login first!"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COURSES</title>
</head>
  <body>

      <div class="container ">
          <form class="display-flex align-items-center vh-100" action="add_courses.php" method="POST" >

            <div>
                <label for="courses-title">Title</label>
                <input type="text" class="form-control" id="courses-title" name="title" placeholder="Enter title">
            </div>

            <div>
                <label for="courses-topic">Topic</label>
                <input type="text" class="form-control" id="courses-topic" name="topic" placeholder="Enter topic">
            </div>

            <div>
                <label for="courses-duree"> Duree </label>
                <input type="duree" class="form-control" id="courses-duree" name="duree" placeholder="Enter duree">
            </div>

            <div>
                <label for="courses-title">Level </label>
                <input type="number" class="form-control" id="courses-level" name="level" placeholder="Enter title">
            </div>
            
            <div class="">
                <button type="submit" class="btn btn-primary">SUBMIT</button>
                <button type="reset" class="btn btn-danger" >reset</button>
            </div>

          </form>
      </div>
  </body>
</html>