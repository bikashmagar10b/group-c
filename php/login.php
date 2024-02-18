<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection code
    include 'connection.php';

    // Select the database
    mysqli_select_db($conn, "groupcdb");

    // Get username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check if the username and password match
    $sql = "SELECT * FROM groupc WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful, store username in session and redirect to dashboard
        $_SESSION["username"] = $username;
        header("Location: ../html/page1.html");
    } else {
        // Login failed, redirect back to login page with error message
        $_SESSION["login_error"] = "Invalid username or password";
        header("Location: ../html/loginform.html");
    }
} else {
    // Redirect back to login page if accessed directly
    header("Location: ../html/loginform.html");
}
?>
