<?php
include 'connection.php';

mysqli_select_db($conn, "groupcdb");

$sql = "SELECT * FROM groupc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

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

$conn->close();

include '../html/database.html';
?>
