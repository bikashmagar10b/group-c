<?php
require 'connection.php';

// Select database
mysqli_select_db($conn, "groupcdb");

// SQL query to create table
$sql = "CREATE TABLE IF NOT EXISTS groupc (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    phone VARCHAR(15),
    gender ENUM('Male', 'Female', 'Other'),
    address VARCHAR(255),
    password VARCHAR(255) NOT NULL
)";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
