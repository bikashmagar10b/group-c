<?php
// Include the database connection code
include 'connection.php';

// Select the database
mysqli_select_db($conn, "groupcdb");

// Query to fetch user information
$sql = "SELECT * FROM groupc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch data from the result set
    $row = $result->fetch_assoc();
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $gender = $row["gender"];
    $phone = $row["phone"];
    $address = $row["address"];
    $username = $row["username"];
    $password = $row["password"];
} else {
    echo "No user found.";
}

// Close the database connection
$conn->close();

// Include index.html
include '../html/database.html';
?>
