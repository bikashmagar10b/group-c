<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST["id"];

  $sql = "DELETE FROM groupc WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    header("Location: info.php"); // Redirect to index.php after deletion
  } else {
    echo "Error deleting user.";
  }
}
$conn->close();
?>
