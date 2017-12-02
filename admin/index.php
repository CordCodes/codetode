<?php
  include('login_process.php');
  if(isset($_SESSION['login_user'])) {
    header("location: admin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>codeTode&#40;adminLogin&#41;&#59;</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="login">
      <h2>Login</h2>
      <form action="" method="post">
        <div class="imgcontainer">
          <img src="img/img_avatar.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
          <label><strong>Username</strong></label>
          <input type="text" placeholder="Username..." name="user" required>

          <label><strong>Password</strong></label>
          <input type="password" placeholder="Password..." name="pass" required>

          <button type="submit">Login</button>
          <span><?php echo $error; ?></span>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
  </body>
</html>
