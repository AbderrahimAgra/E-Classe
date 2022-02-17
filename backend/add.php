<?php
 $name = $_POST['name'] ;
 $email = $_POST['email'] ;
 $phone = $_POST['phone'] ;
 $e_num = $_POST['enroll_number'] ;
 $date = $_POST['date'] ;

 require_once 'connection.php' ;
 
$sql = "INSERT INTO students (name,email,phone,enroll_number,date ) VALUES ('$name','$email','$phone','$e_num','$date')" ;
if(mysqli_query($connection,$sql)){
  echo " worked successfully ";
}
else {
  echo "Error: " ;
}
?>