<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
  
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name= $_POST['UserName'];
$pwd= $_POST['Password'];
  
$sql = "INSERT INTO student (firstname, password) VALUES ('$name','$pwd')";
  
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>