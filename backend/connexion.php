<?php
 $servername = 'localhost' ;
 $username = 'root' ;
 $password = '' ;
//creat connection
 $connection = mysqli_connect( $servername , $username , $password ) ;
 //verefication
 if(!$connection){
   die ('connection failed' . mysqli_connect_error()) ;
 }
 echo "connection successfully" ;