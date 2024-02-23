<?php
    require_once "connection.php";
    mysqli_select_db($conn, "groupcdb");

    $id = $_GET["id"];
    $query = "DELETE FROM groupc WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: info.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>