<?php
require_once 'connection.php';
if(isset($_GET['id'])){

$sql = "DELETE FROM students WHERE id =".$_GET['id'] ;

// execution de la requet sql 
if(mysqli_query($connection,$sql)){
  header('location: ./students.php');
}
else {
  echo "Error: " ;
}
}

?>