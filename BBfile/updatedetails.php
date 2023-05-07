<!DOCTYPE html>
<html>
<head>
	<title>Update Details</title>
	<link rel="stylesheet" type="text/css" href="css/updatedetails.css">
</head>
    <h1>Please Provide the Required Information</h1>
<form method="post" action="update.php">
	<h2>Fill all the details</h2>
	<label>Name</label>
	<input type="text" name="name">
	<br><br>
	<label>Email</label>
	<input type="text" name="email">
	<br><br>
	<label>City</label>
	<input type="text" name="city">
	<br><br>
	<label>Blood Group</label>
	<input type="text" name="blood">
	<br><br>
	<label>Mobile</label>
	<input type="text" name="mobile">
	<br><br>
	<button name="submit">Submit</button>
</form>
</body>
</html>

<?php 
include 'database.php';
session_start();
error_reporting(0);

if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobilenumber']) && isset($_POST['address']) && isset($_POST['city']))
{
	$name = strtoupper($_POST['name']);
	$email = strtoupper($_POST['email']);
	$mobilenumber = strtoupper($_POST['mobilenumber']);
	$address = strtoupper($_POST['address']);
	$city = $_POST['city'];
	$user_id = $_SESSION['login_id'];

	$statement = "update UserDetail set user_name = $name, email = $email, mobile = $mobilenumber, address = $address, city = $city where  userid = $user_id;";
	mysqli_query($conn, $statement);
	header("Location:profile.php");
}