<?php
session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'bloodbank');
$name=$_POST['name'];
$email=$_POST['email'];
$city=$_POST['city'];
$blood=$_POST['blood'];
$mobile=$_POST['mobile'];
$s = "select * from userdetail where name= '$name";
$reg="insert into userdetail (name,email,city,blood,mobile) values ('$name','$email','$city','$blood','$mobile')";
mysqli_query($con,$reg);
 echo "<script>alert('Thank you for providing your details')</script>";
 exit();
  ?>
   