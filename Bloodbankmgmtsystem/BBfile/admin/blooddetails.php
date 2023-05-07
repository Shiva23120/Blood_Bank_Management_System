<?php
session_start();

$con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'bloodbank');
$slno=$_POST['slno'];
$bloodtype=$_POST['bloodtype'];
$availability=$_POST['availability'];
$unit=$_POST['unit'];
$s = "select * from blooddetails where bloodtype= '$bloodtype'";
$result = mysqli_query($con, $s);
$num = mysqli_fetch_row($result);
if($num==true)
{
	echo "<script>alert('These type of blood entry is already done')</script>";
}
 elseif ($slno==null && $bloodtype==null)
    {
       echo"Please fill all the fields.";
      exit();
   } 
 

else
{
$reg="insert into blooddetails (slno, bloodtype,availability,unit) values ('$slno','$bloodtype','$availability','$unit')";
mysqli_query($con,$reg);
 echo "<script>alert('Blood Details Entry is Successfull')</script>";
 
   exit();
 }
            ?>
    