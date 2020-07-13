<?php

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO myguests(firstname,email,password)
VALUES ('$firstname', '$email', '$password')";

mysqli_query($conn, $sql);

mysqli_close($conn);
}
?>


