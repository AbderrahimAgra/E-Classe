<?php
 $name = $_POST['name'] ;
 $email = $_POST['email'] ;
 $phone = $_POST['phone'] ;
 $e_num = $_POST['enroll_number'] ;
 $date = $_POST['date'] ;

 require_once 'connection.php' ;
 //leschamps de table student(name,email,phone,enroll_number,date )  
$sql = "INSERT INTO students (name,email,phone,enroll_number,date ) VALUES ('$name','$email','$phone','$e_num','$date')" ;
//execution de la requet sql 
if(mysqli_query($connection,$sql)){
  header('location: ./students.php');
}
else {
  echo "Error: " ;
}
?>