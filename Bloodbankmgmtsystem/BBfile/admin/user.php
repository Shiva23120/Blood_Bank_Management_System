<!DOCTYPE>
<html>
<head>

<title>Blood Request</title>
       <link rel = "icon" href =  
"images/logo.png" 
        type = "image/x-icon"> 
  <style type="text/css">
  <style type="text/css">
  body{

  	color:black;
    background-image: url("css/bg.jpg");
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

th, td {
  padding: 20px;
}
h1{

	color:black;
	font-size:30px;
	text-align:left;
}
</style>
<title>Blood Details</title>
</head>

<body>

<div>
<?php 

session_start();

$conn= mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'bloodbank');
echo "<h1 style=position:center;>List of Users who Logged In and their Details</h1>";
$statement = "select * from login;";
$result = mysqli_query($conn, $statement);
if(mysqli_num_rows($result)>0)
{
	while($rows = mysqli_fetch_assoc($result))
	{
		echo "<table style=position:relative;width:15cm;>";
		echo "<tr>";
		echo "<th>user</th>";
		echo "<th>useremail</th>";
		echo "<th>bloodgroup</th>";
		echo "</tr>";
		echo "<tr style=position:relative;width:13cm;>";
	  	$user= $rows['user'];
		echo "<td>$user</td>";
		echo "<br>";
		$useremail= $rows['useremail'];
		echo "<td>$useremail</td>";
		echo "<br>";
		$bloodgroup= $rows['bloodgroup'];
		echo "<td>$bloodgroup</td>";
		echo "<br>";
		
		
	}
}
else
{
	echo "No Blood Available";

}

?>
  
</div>
</body>
</html>