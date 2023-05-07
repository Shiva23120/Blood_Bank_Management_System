

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form action="changepassword.php" method="post">
	<h4>Change Password</h4>
	<br><br>
	<label>Username</label>
	<input type="text" name="user">
	<br><br>
	<label>Old Password</label>
	<input type="password" name="pass">
	<br><br>
	<label>New Password</label>
	<input type="password" name="pass">
	<br><br>
	<button name="submit">Submit</button>
</form>

    </body>
    </html>

<?php 
session_start();
include 'config.php';
error_reporting(0);
$username = $_POST['user'];
        $password = $_POST['pass'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysql_query("SELECT password login user_info WHERE 
       user_id='$user'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
        $sql=mysql_query("UPDATE user_info SET pass='$newpassword' where 

 name='$user'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>