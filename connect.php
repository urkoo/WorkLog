<?php

// $servername = "localhost";
// $username = "id12247826_admin";
// $password = "iamadmin";
// $database = "id12247826_user";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// ?>

<?php

$servername = "localhost";
$username = "id12435903_logwork";
$password = "w8GqNBV<+/p+";
$database = "id12435903_worklog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_error($conn));
}else{
  die("Connection successfully! ".mysqli_error($conn));
}

?>
