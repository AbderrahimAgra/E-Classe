<?php
 $servername = 'localhost' ;
 $username = 'root' ;
 $password = '' ;
 $db = 'e-class' ;
//creat connection
 $connection = mysqli_connect( $servername , $username , $password , $db ) ;
 //verefication
 if(!$connection){
   die ('connection failed' . mysqli_connect_error()) ;
 }
 echo "connection successfully" ;