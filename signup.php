<!DOCTYPE html>
<?php  include 'par/_db.php' ?>
<?php
$al=false;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=$_POST["name"];
  $uname=$_POST["uname"];
  $email=$_POST["email"];
  $pass=$_POST["pass"];
  $cpass=$_POST["cpass"];
  $gen=$_POST["gender"];
  $ex="select * from user where username='$uname'";
  $res=mysqli_query($con,$ex);
  $numr=mysqli_num_rows($res);
   if($numr>0){
     $exist=true;
   }
  else{
    $exist=false;
  }


  
//  echo"$name,$uname,$email,$pass,$gen";
  if(($pass==$cpass) && $exist==false){
    $sql="INSERT INTO user(name,username,password,gender,email) VALUES ('$name','$uname','$pass','$gen','$email')";
    $result=mysqli_query($con,$sql);
    if($result){
      $al=true;

    }
  }
  else {
    echo "user name used";
  }
}

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>signup</title>
  </head>
  <body>
   <?php require 'par/_nav.php' ?>


   <div class="container">
     <h1 style="">signup to our sit</h1>
     <form class="" action="signup.php" method="post">
       <fieldset>
         <legend>fill in login details</legend>
         <table>
         <tr><th><label for="uname">fullname</label></th><td><input type="text" name="name" value=""></td></tr><br>
         <tr><th><label for="username">username</label></th><td><input type="text" name="uname" value=""></td></tr><br>
         <tr><th><label for="email">email</label></th><td><input type="email" name="email" value=""></td></tr><br>
         <tr><th><label for="password">password</label></th><td><input type="text" name="pass" value=""></td></tr><br>
         <tr><th><label for="conforn">conform password</label></th><td><input type="text" name="cpass" value=""></td></tr><br>
       </table>
         <br><label for="">enter ur gender</label><br>
         <input type="radio" id="gen" name="gender" value="male">male<br>
         <input type="radio" id="gen" name="gender" value="female">female<br>
         <input type="radio" id="gen" name="gender" value="other">other<br>

         <input type="submit" name="" value="signup">
         <?php if($al){echo'
         <div class="alert alert-sucess alert-dismissible fade show" role="alert">
        <strong>successfully</strong> your account is created.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
       ';}
       ?>
       </fieldset>
     </form>
   </div>
  </body>
</html>
