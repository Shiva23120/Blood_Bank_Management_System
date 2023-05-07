<?php 

session_start();

$conn= mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,'bloodbank');
   $searchq = $_POST['search'];
  $searchqq = $_POST['search2'];

$sql = "delete from requestblood where id LIKE '%$searchq%' AND fullname LIKE '%$searchqq%' ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();