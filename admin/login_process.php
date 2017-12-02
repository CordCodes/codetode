<?php
  session_start();
  $error = '';
  if(isset($_POST['submit'])) {
    if(empty($_POST['username']) || empty($_POST['password'])) {
      $error = "Incorrect username or password.";
    } else {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $connection = mysql_connect("localhost:6112", "root", "");
      $username = stripslashes($username);
      $password = stripslashes($password);
      $username = mysql_real_escape_string($username);
      $password = mysql_real_escape_string($password);
      $db = mysql_select_db("admin", $connection);
      $query = mysql_query("select * from login where password=$'password' and username='username'.", $connection);
      $rows = mysql_num_rows($query);
      if($rows == 1) {
        $_SESSION['login_user']=$username;
        header("location: admin.php");
      } else {
        $error = "Incorrect username or password.";
      }
      mysql_close($connection);
    }
  }
?>
