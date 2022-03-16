<?php 
session_start();
 require_once('connection.php');
  if(isset($_POST['submit'])){
   
    $email = $_POST["email"] ;
    $password = $_POST["password"];

    if(empty($email) || empty($password)){
      header('location: ./index.php?err=champs vide  ou le compte n\'existe dans la base du donner');
    }
    
    $req = "SELECT * FROM user WHERE user_name='".$email."'";
    $qer = mysqli_query($connection,$req);
    $user = mysqli_fetch_assoc($qer);
    if(!empty($user)){
      if(password_verify($password,$user['password'])){
        $_SESSION['user'] = $user;
        header('location: ./dashboard.php');
      }else{
        header('location: ./index.php?err=Incorrect password!');
      }
    }
    
  }
      

