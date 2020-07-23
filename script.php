<!-- 
  script.php file linked to index.html which helps estabilish a connection to the 
  databse created using MySQL and send the values from the form to the database.

  @ author Kinshuk Chadha/
 -->

<?php

//get the values from the form and store them into variables
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password'];

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
echo "Congratulations, You have successfully registered!";

//insert the values from the form to the table created in the database
$sql = "INSERT INTO myguests(firstname,email,password)
VALUES ('$firstname', '$email', '$password_1')";

//make a query for the database
mysqli_query($conn, $sql);

//close the previously opened databse connection
mysqli_close($conn);
}
?>


