<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$num_ambulances = $_POST['num_ambulances'];

// SQL query to insert data into the database
$sql = "INSERT INTO hospital (name, address, phone_number, num_ambulances) VALUES ('$name', '$address', '$phone_number', '$num_ambulances')";

if ($conn->query($sql) === TRUE) {
    echo "Hospital registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
