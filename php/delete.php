<?php
include "connection.php";
mysqli_select_db($conn, "groupcdb");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];

  $sql = "DELETE FROM groupc WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    header("Location: info.php"); 
  } else {
    echo "Error deleting user.";
  }
}
$conn->close();
?>
