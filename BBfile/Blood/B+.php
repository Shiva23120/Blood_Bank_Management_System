<!DOCTYPE>
<html>
<head>
<title>B+</title>
</head>
<style>
	 body{

  	color:black;
  background-image:url("seamless.jpg");
    text-align: left;
    
  	}

  h2{

  	text-align: center;
  	color:blue;
  }



div
{
	position:relative;
	left:7cm;

}

table, td, th {  
  border: 5px solid black;
  text-align: center;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;

}
</style>
<body>
 <h2>BBMS</h2>

<div>
<?php 

session_start();

$conn= mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'bloodbank');
echo "<h1 style=position:relative;>B+</h1>";
$statement = "select * from b";
$result = mysqli_query($conn, $statement);
if(mysqli_num_rows($result)>0)
{
	while($rows = mysqli_fetch_assoc($result))
	{
		echo "<table style=position:relative;width:15cm;>";
		echo "<tr>";
		echo "<th>Bloodname</th>";
		echo "<th>Availibility</th>";
		echo "<th>Unit</th>";
	
		echo "</tr>";
		echo "<tr style=position:relative;width:13cm;>";
	  	$Bloodname = $rows ['Bloodname'];
		echo "<td>$Bloodname</td>";
		echo "<br>";
		$Availibility = $rows['Availibility'];
		echo "<td>$Availibility</td>";
		echo "<br>";
		$unit = $rows['unit'];
		echo "<td>$unit(in half liters)</td>";
		echo "<br>";
		echo "<br>";
		echo "</td>";
		echo "</table>";
	}
}
 else
 {
 echo "Not Available";

}

?>
<h3 style="color:black;font-size: 20px">&copy 2019 BBMS</h3>
</div>
</body>
</html>
