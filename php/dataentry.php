<?php
include 'connection.php';

// Select database
mysqli_select_db($conn, "groupcdb");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Insert data into table
    $sql = "INSERT INTO groupc (firstname, lastname, gender, phone, address, username, password)
    VALUES ('$firstname', '$lastname', '$gender', '$phone', '$address', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
