<?php
  session_start();
  $users = ['cordingley','Minty','bardell','phillips','marshall'];
  $passes = ['acae273a5a5c88b46b36d65a25f5f435','2339d39a8b334e0128522a03d2d180f0','4f97319b308ed6bd3f0c195c176bbd77','332532dcfaa1cbf61e2a266bd723612c','f156e7995d521f30e6c59a3d6c75e1e5'];
  if (!empty($_POST)){
    if (in_array($_POST['user'], $users)){
      if (false !== $key = array_search($_POST['user'],$users)){
        if (in_array(md5($_POST['pass']),$passes)){
          if (md5($_POST['pass']) === $passes[$key]){
            header('Location:admin.php');
            $_SESSION['logged'] = 1;
          } else{
            header('Location:../public');
          }
        } else{
          header('Location:../public');
        }
      } else {
        header('Location:../public');
      }
    } else {
      header('Location:../public');
    }
  }else{
    header('Location:index.php');
  }
?>
