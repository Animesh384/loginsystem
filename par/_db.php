//this config file for database

<?php
$ser="localhost";
$nam="root";
$pass="2024";
$db="db";
$con=mysqli_connect($ser,$nam,$pass,$db);
if($con){
  //echo"successfully connected to database";
}
else {
  die("error".msqli_error());
}
 ?>
