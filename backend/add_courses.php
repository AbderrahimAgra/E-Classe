<?php
$title = $_POST['title'] ;
$topic = $_POST['topic'] ;
$duree = $_POST['duree'] ;
$level = $_POST['level'] ;
//creat connection
require_once 'connection.php';
//requett d'insertion dans db
$sql = " INSERT INTO courses (title,topic,duree,level) VALUES ('$title' , '$topic' , '$duree' , '$level')";

if (mysqli_query($connection, $sql)){
  echo "record creat successfully" ;
}
?>