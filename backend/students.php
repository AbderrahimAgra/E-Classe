<?php
session_start();
if(!isset($_SESSION['user'])){
  header("location: ./index.php?err=You have to login first!"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>Page Students</title>
</head>

<body>
    <main>
    <div class="d-flex" id="dashboard">

        <?php include 'includes/Sidebar.php'?>

         <div id="page-content-dashboard">

             <?php include 'includes/Header.php'?>
  
             <div class="container-fluid bg-light  px-4">
                <div class="row ">
                    <div class=" d-flex justify-content-between my-3">
                        <h1 class="fs-4 ">Students List</h1>
                        <div>
                            <i class="fas fa-sort mx-3 text-info "></i>
                            <button type="button" class="btn btn-info text-white" data-toggle="modal" data-target="#add-new-student"  > ADD NEW STUDENT</button>
                      </div>
                    </div>
                          </div>
                      
                    <div class=" table-responsive-sm table-responsive-md">
                        <table class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Enroll Number</th>
                                    <th>Date of admission</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
 //*****************************incloude connection
                                require_once 'connection.php' ;
                                //affecter  a $eq la requette 
                                $req = 'SELECT * FROM students' ;
                                $qer = mysqli_query($connection,$req) ;
                                while($student = mysqli_fetch_assoc($qer)){
                                ?>    
                                <tr  data-id="<?= $student['id'];?>">   
                                    <td role="avatar"><img src="image/user.jpg" alt="user" style="width: 50px;"></td>
                                    <td role="name"><?= $student['name'] ?></td>
                                    <td role="email"><?= $student['email'] ?></td>
                                    <td role="phone"><?= $student['phone'] ?></td>
                                    <td role="enrole_number"><?= $student['enroll_number'] ?></td>
                                    <td role="date"><?= $student['date'] ?></td>
                                    <td><button class="btn btn-primary text-white" data-toggle="modal" data-target="#update-new-student" onclick="setStudentData(<?= $student['id'];?>)" ><i class="fas fa-pen mx-4 text-white"></button></td>
                                    <td><a class="btn btn-danger " href="delete.php?id=<?= $student['id'];?>"><i class="fas fa-trash mx-4 text-white"></td></a>
                                </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./modals/add-student.php" ?>
    <?php include "./modals/update-student.php" ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("dashboard");
        var toggleButton = document.getElementById("menu-toggle");
        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    </main>
  

</body>

</html>