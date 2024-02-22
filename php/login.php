<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';

    mysqli_select_db($conn, "groupcdb");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM groupc WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["username"] = $username;
        header("Location: ../html/page1.html");
    } else {
        $_SESSION["login_error"] = "Invalid username or password";
        header("Location: ../html/loginform.html");
    }
} else {
    header("Location: ../html/loginform.html");
}
?>
