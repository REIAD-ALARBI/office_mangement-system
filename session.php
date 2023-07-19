<?php
   error_reporting(0);
   include('connection.php');

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select userName from users where userName = '$userName' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['userName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>