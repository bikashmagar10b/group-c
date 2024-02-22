<?php
include "connection.php";
mysqli_select_db($conn, "groupcdb");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO groupc (firstname, lastname, phone, gender, address, username, password) 
            VALUES ('$firstname', '$lastname', '$phone', '$gender', '$address', '$username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: info.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
