<?php
require 'connection.php';
mysqli_select_db($conn, "groupcdb");

$sql = "CREATE TABLE IF NOT EXISTS groupc (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    phone VARCHAR(15),
    gender ENUM('Male', 'Female', 'Other'),
    address VARCHAR(255),
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
