<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>codeTode&#40;adminLogin&#41;&#59;</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript">
      function validateForm() {
        var x = document.forms["myForm"]["user"].value;
        var y = document.forms["myForm"]["pass"].value;
        if (x == "" || y == "") {
          alert("Name must be filled out");
          return false;
        }
      }
    </script>
  </head>
  <body>
    <div class="login">
      <h2>Login</h2>
      <form action="./login_process.php" method="post" onsubmit="return validateForm();">
        <div class="imgcontainer">
          <img src="img/img_avatar.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
          <label><strong>Username</strong></label>
          <input type="text" placeholder="Username..." name="user">

          <label><strong>Password</strong></label>
          <input type="password" placeholder="Password..." name="pass">

          <button type="submit">Login</button>
          <!-- <span><?php echo $error; ?></span> -->
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <a href="http://localhost/codetode/public"><button type="button" class="cancelbtn">Cancel</button></a>
        </div>
      </form>
    </div>
  </body>
</html>
