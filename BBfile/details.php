<?php
 session_start(); 
 ob_start();

 include("functions/functions.php");
 
?>


<?php

   $con= mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'bloodbank');
if (isset($_GET['submit']))
$user=$_GET['user'];
$userbirthdate = $_GET['selectyear'] . '-' . $_GET['selectmonth'] . '-' . $_GET['selectday'];
$usergender=$_GET['usergender'];
$userhometown=$_GET['userhometown'];
$userstatus=$_GET['userstatus'];
$userabout=$_GET['userabout'];


    $s=mysql_query("UPDATE login SET user='$user', userbirthdate='$userbirthdate',usergender='$usergender',userhometown='$userhometown',userstatus='$userstatus',userabout='$userabout' WHERE user='$user",$con);
      $query = mysql_query("select * from login", $con);
     while ($row = mysql_fetch_array($query))

    if ($s==true)
        { echo "<script alert('Successful - Record Updated!')</script>"; }
    else
        { echo "<script alert('Unsuccessful - ERROR!')</script>"; }


$query1=mysql_query("SELECT * FROM login WHERE user='$user".mysql_real_escape_string($_SESSION["VALID_USER"])."'  AND user = '$user".mysql_real_escape_string('1')."'");
$query2=mysql_fetch_array($query1); 

?>


<?php
//  close  while  loop

?>

