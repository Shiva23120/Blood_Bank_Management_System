<!DOCTYPE>
<html>
<head>

<title>Camps</title>
       <link rel = "icon" href =  
"images/logo.png" 
        type = "image/x-icon"> 
  <style type="text/css">

  body{

  	color:black;
    background-image: url("seamless.jpg");
    text-align: center;
    font-size:10px;
    
  	}




div
{
	position:relative;
	left:7cm;

}

table, td, th {  
  border: 5px solid black;
  text-align: center;
  font-size:20px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th{
	
	font-size: 24px;
	color:blue;
	font-style: bold;
} 
td {
  padding: 20px;
}
h1{

	color:black;
	font-size:30px;
}
</style>
</head>

<body>
<p style="text-align:center;font-size:60px;font-family:cursive;color:black;text-decoration:underline;border-radius:0.5px">BBMS</p>
 <?php 
require 'functions/functions.php';
session_start();
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}
$user = $_SESSION['user'];
session_destroy();
session_start();
$_SESSION['user'] = $user;
ob_start(); 
$conn = connect();
?>
<?php 



$conn= mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'bloodbank');
echo "<h1 style=position:relative;text-decoration:underline>Ongoing and Upcoming Camps</h1>";
$statement = "select * from camps;";
$result = mysqli_query($conn, $statement);
if(mysqli_num_rows($result)>0)
{
	while($rows = mysqli_fetch_assoc($result))
	{
		echo "<table style=position:center;width:38cm;>";
		echo "";
		echo "<th>HOSPITAL</th>";
		echo "<th>ADDRESS</th>";
		echo "<th>CITY</th>";
		echo "<th>CONTACT</th>";
		echo "<th>DATE</th>";
	   echo "<th>TIME</th>";
		echo "</tr>";
		echo "<tr style=position:relative;width:13cm;>";
	  	$hospital = $rows ['hospital'];
		echo "<td>$hospital</td>";
		echo "<br>";
		$address = $rows['address'];
		echo "<td>$address</td>";
		echo "<br>";
		$city = $rows['city'];
		echo "<td>$city</td>";
		echo "<br>";
		$contact = $rows['contact'];
		echo "<td>$contact</td>";
		echo "<br>";
		$date = $rows['date'];
		echo "<td>$date</td>";
		$time = $rows['time'];
		echo "<td>$time</td>";
		echo "<br>";
		echo "</td>";
		echo "</table>";
	}
}
else
{
	echo "No Camps";

}

?>
	</div>
</div>
	<footer class="footer-distributed">
 
            
                <h3 style="color:black;font-size: 20px">&copy 2019 BBMS</h3>
                <a href="home.php"style="color:black;font-size: 20px">Back to home</a>

               

</body>
</html>
