<?php
$servername = "localhost";
$username = "id7426771_abcdlk";
$password = "12345";
$database = "id7426771_abcd";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$firstName = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lastName = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$contactNumber = mysqli_real_escape_string($conn, $_REQUEST['contactnumber']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$courseName = mysqli_real_escape_string($conn, $_REQUEST['courseName']);

$sql="INSERT INTO `form`(`firstName`, `lastName`, `contactNumber`, `e-mail`, `course`) VALUES ('$firstName','$lastName','$contactNumber','$email','$courseName')";

if(mysqli_query($conn, $sql)){
    echo "Added Succes";
}
else{
    echo "Error".mysqli_error($conn);
}
//connectiom Close
mysqli_close($conn);
?>