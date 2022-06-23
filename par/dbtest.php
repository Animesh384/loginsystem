 <?php
/* $r=mysqli_query($con,$sql);
  $num=mysqli_num_rows($r);
  if($num==1){
      echo "$sql";
      //while($row=mysqli_fetch_array($r)){echo"{$row['name']}"."{$row['username']}"."{$row['password']}"."{$row['gender']}"."{$row['email']}";  }
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['username']=$uname;
      $_SESSION['R=result']=mysqli_fetch_array($r);
      header("location:welecome.php");
  }
  else {
  echo"no non npn npn no";
  $_SESSION['loggedin']=false;
  }
  $sql="select * from user where username='$uname'AND password='$pass'";
  $r=mysqli_query($con,$sql);
  $num=mysqli_num_rows($r);
  */



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
    echo "hello sucess";
}
else{
    echo "hello sucshvsvsss";
    if($con->query("create database db")==TRUE){
    $con=mysqli_connect($ser,$nam,$pass,$db);
    }
    if($con->query("select * from user")>0){

        }
    else{
      $myquery="create table if not exists user(name varchar(20),username varchar(25),password varchar(26),gender varchar(10),email varcahr(35))";
      $con->query($myquery);
    }    



}
  
  ?>