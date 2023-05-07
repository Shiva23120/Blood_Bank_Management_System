<?php
session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'bloodbank');
$user=$_POST['user'];
$password=$_POST['pass'];
$useremail=$_POST['useremail'];
$bloodgroup=$_POST['bloodgroup'];
$gender=$_POST['gender'];
$s = "select * from login where user= '$user'";
$result = mysqli_query($con, $s);
$num = mysqli_fetch_row($result);
if($num==true)
{
	echo "<script>alert('Username Taken')</script>";
}
 elseif ($user==null && $password==null)
    {
       echo"Please fill all the fields.";
      exit();
   } 
 

else
{
$reg="insert into login (user, pass,useremail,bloodgroup,gender) values ('$user','$password','$useremail','$bloodgroup','$gender')";
mysqli_query($con,$reg);
 echo "<script>alert('Registration successfull Sign in With your Username')</script>";
 header("location:successfull.html");
   exit();
 }
            ?>
    