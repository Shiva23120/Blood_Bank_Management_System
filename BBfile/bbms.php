<!DOCTYPE>
<html>
<head>
<title>Donor List</title>
</head>
<style>
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




<?php 

session_start();

$conn= mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'bloodbank');
  $searchq = $_POST['search'];
  $searchqq = $_POST['search2'];
 $statement = "select * from donate where bloodgroup LIKE '%$searchq%' AND city LIKE '%$searchqq%' ";
$result = mysqli_query($conn, $statement);
if(mysqli_num_rows($result)>0)
{
  
     
    while($rows = mysqli_fetch_assoc($result))
  {

    echo "<table style=position:center;width:30cm;>";
     echo "<h1 style=position:relative;>Donor Found Contact him/her</h1>";

    echo "<th>Fullname</th>";
    echo "<th>Bloodgroup You Want</th>";
    echo "<th>Age of Donor</th>";
    echo "<th>Donor City</th>";
    echo "<th>Donor Contact Number</th>";
        echo "<th>Gender</th>";
    echo "</tr>";
    echo "<tr style=position:relative;width:13cm;>";
      $fullname = $rows ['fullname'];
    echo "<td>$fullname</td>";
    echo "<br>";
    $bloodgroup = $rows['bloodgroup'];
    echo "<td>$bloodgroup</td>";
    echo "<br>";
    $age = $rows['age'];
    echo "<td>$age</td>";
    echo "<br>";
    $city = $rows['city'];
    echo "<td>$city</td>";
    echo "<br>";
    $phno = $rows['phno'];
    echo "<td>$phno</td>";
      $gender = $rows['gender'];
    echo "<td>$gender</td>";

    echo "<br>";
    echo "</td>";
    echo "</table>";
	}
}
	 else 
   {
		echo "<script>alert('Donor Not Found')</script>";
    header("Location:js/donate.html");
	}


?>
