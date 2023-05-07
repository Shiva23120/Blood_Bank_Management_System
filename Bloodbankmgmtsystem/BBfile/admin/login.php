<?php


require 'functions/functions.php';
require_once 'connection.php';

if (isset($_SESSION['user'])) {
    header("location:admin1.html");
}
session_destroy();
session_start();
ob_start(); 
?>


 <?php
  $user= $pass="";
      if(isset($_POST['sub']))
      {

        $user=$_POST['user'];
        $pass=$_POST['pass']; 
        $q=$db-> prepare("SELECT * from admin where user='$user' && pass='$pass'");
        $q->execute();
        $res=$q->fetchAll(PDO::FETCH_OBJ);
        if($res)
        {
         $_SESSION['user']=$user;
          header("Location:admin1.html");
        }
        else
        {
          echo"<script>alert('You are not an admin')</script>";
        }
          
          function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;

          }

      }
      ?>