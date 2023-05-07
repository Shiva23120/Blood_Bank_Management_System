<?php
session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'bloodbank');
$Bloodname=$_POST['Bloodname'];
$availability=$_POST['Availibility'];
$unit=$_POST['unit'];
$s = "select * from ab_ where Bloodname= '$Bloodname'";
$result = mysqli_query($con, $s);
$num = mysqli_fetch_row($result);
if($num==true)
{
	echo "<script>alert('These type of blood entry is already done')</script>";
}
 elseif ($unit==null && $Bloodname==null)
    {
       echo"Please fill all the fields.";
      exit();
   } 
 

else
{
$reg="insert into ab_ (Bloodname, Availibility,unit) values ('$Bloodname','$availability','$unit')";
mysqli_query($con,$reg);
 echo "<script>alert('AB- Entry is Successfull')</script>";
 
   exit();
 }
            ?>
    