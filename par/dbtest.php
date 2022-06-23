 <?php

$ser="localhost";
$nam="root";
$pass="2024";
$db="db";
$con=mysqli_connect($ser,$nam,$pass);
if($con){
  //echo"successfully connected to database";
}
else {
  die("error".msqli_error());
}

$quer="create db";
if($con->query("use db")==TRUE){
    $con=mysqli_connect($ser,$nam,$pass,$db);
    echo "successfully link to data base";
}
else{
    //creating database
    if($con->query("create database db")==TRUE){
    $con=mysqli_connect($ser,$nam,$pass,$db);
    echo "connection made successfully\n";
    }
    if($con->query("select * from user")>0){
      echo "table already created";
    }
    else{
      //creating table
      $myquery="create table if not exists user(name varchar(20),username varchar(25),password varchar(26),gender varchar(10),email varcahr(35))";
      //making query to create table user
      if($con->query($myquery)){
        echo "table created";
      }
      else{
        die("failed reasion-->".mysqli_error());
      }
    }



}

  ?>
