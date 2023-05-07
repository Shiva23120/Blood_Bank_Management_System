<?php
session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'bloodbank');
$hospital=$_POST['hospital'];
$address=$_POST['address'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$date=$_POST['date'];
$time=$_POST['time'];
$s = "select * from camps where hospital= '$hospital'";
$result = mysqli_query($con, $s);
$num = mysqli_fetch_row($result);
if($num==true)
{
	echo "<script>alert('Hospital is already scheduled')</script>";
}
 elseif ($hospital==null && $contact==null)
    {
       echo"Please fill all the fields.";
      exit();
   } 
 

else
{
$reg="insert into camps (hospital,address,city,contact,date,time) values ('$hospital','$address','$city','$contact','$date','$time')";
mysqli_query($con,$reg);
 echo "<script>alert('Camps Entry is Successfull')</script>";
 
   exit();
 }
            ?>
    