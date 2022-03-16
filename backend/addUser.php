<?php
if(isset($_POST["submit"])){
  $name = $_POST['fName'] ;
  $email = $_POST['email'] ;
  $phone = $_POST['phoneNumber'] ;
  $password = $_POST['password'];
  $password = password_hash($password, PASSWORD_DEFAULT);
  require_once("connection.php") ;
  $sql = "INSERT INTO user (fName,user_name,password,phone) VALUES ('".$name."','".$email."','".$password."','".$phone."')" ;
  if(mysqli_query($connection,$sql)){
   header('location: ./index.php');
 }
 else {
   echo "Error: " ;
 }
}
?>