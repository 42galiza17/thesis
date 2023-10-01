<?php 
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "system2";

   
$con= new mysqli($servername,$username ,$password , $database);

if(!$con){
  die(mysqli_error($con));
}

?>