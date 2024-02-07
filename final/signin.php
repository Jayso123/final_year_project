<?php
// Assuming your MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbscholar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['email'];
$email = $_POST['pass'];

// Insert data into MySQL database
$sql = "INSERT INTO sign_in (Email, Password) VALUES ('$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
