<?php
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   if(!isset($_SESSION['login_user'])){
      header("Location: go2.php");
   }
?>
