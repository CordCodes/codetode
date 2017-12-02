<?php
  $connection=mysql_connect("localhost", "root", "");
  $db=mysql_select_db("admin", $connection);
  session_start();
  $user_check=$_SESSION['login_user'];
  $ses_sql=mysql_query("select username from login where username='$usercheck'", $connection);
  $row=mysql_fetch_assoc($ses_sql);
  $login_session = $row['username'];
  if(!isset($login_session)) {
    mysql_close($connection);
    header('location: index.php');
  }
?>
