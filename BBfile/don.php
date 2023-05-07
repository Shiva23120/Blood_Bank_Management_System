<?php
session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'bloodbank');
	$fullname=$_POST['fullname'];
	$age=$_POST['age'];
	$bloodgroup=$_POST['bloodgroup'];
	$city=$_POST['city'];
	$phno=$_POST['phno'];
	$gender=$_POST['gender'];
$s = "select * from donate where fullname= '$fullname'";
$result = mysqli_query($con, $s);
$num = mysqli_fetch_row($result);
if($num==true)
{
	echo "<script>alert('Already Received')</script>";
}
 elseif ($fullname==null && $phno==null)
    {
       echo"Please fill all the fields.";
      exit();
   } 
 

else
{
$reg="insert into donate (fullname, age,bloodgroup,city,phno,gender) values ('$fullname','$age','$bloodgroup','$city','$phno','$gender')";
mysqli_query($con,$reg);
echo"<script>alert('Your donation request have been registered.Thank you for your kindness. ')</script>";
 }
            ?>
    