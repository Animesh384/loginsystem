<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['loggedin'])){header("locatiom:login.php");exit;}

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>welecom-<?php echo$_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'par/_nav.php'; ?>
  welcome  <?php echo"{$_SESSION['username']}<br>";
echo"name:{$_SESSION['R=result']['name']}<br>"."username:{$_SESSION['R=result']['username']} <br>"."password:{$_SESSION['R=result']['password']}<br>"."gender:{$_SESSION['R=result']['gender']} <br>"."email:{$_SESSION['R=result']['email']}";
  ?>
  </body>
</html>
