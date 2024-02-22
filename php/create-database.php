<?php
require 'connection.php';

$sql = "CREATE DATABASE IF NOT EXISTS groupcdb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
