<!DOCTYPE html>
<?php include 'par/_db.php' ?>
<?php
$login=false;
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $uname=$_POST["name"];
  $pass=$_POST["password"];
  $sql="select * from user where username='$uname'AND password='$pass'";
  $r=mysqli_query($con,$sql);
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

}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
    <?php require'par/_nav.php' ?>
    <form action="login.php" method="post">
  <table>
    <tr>
      <td>username:</td>
      <td><input type="text" name="name" value=""/></td>
    </tr>
    <tr>
      <td>password:</td>
      <td><input type="password" name="password"/> </td>
    </tr>
    <tr>
      <td></td>
      <td colspan="2"><input type="submit" value="login"/> </td>
    </tr>
  </table>

</form>
  </body>
</html>
