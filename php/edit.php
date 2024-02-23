<?php
include "connection.php";
mysqli_select_db($conn, "groupcdb");

    if (isset($_POST['update'])) {
        $Id = $_POST['id'];
        echo $Id;
        $firstname = $_POST['firstname'];
        echo $firstname;
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "UPDATE `groupc` SET `firstname`='$firstname',`lastname`='$lastname',`phone`='$phone',`gender`='$gender',`address`='$address',`username`='$username',`password`='$password' WHERE `id`='$Id'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
            header('Location: #');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    }

if (isset($_GET['id'])) {
    $Id = $_GET['id'];
    echo $Id;          
    $sql = "SELECT * FROM groupc WHERE id='$Id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $phone = $row['phone'];
            $gender = $row['gender'];
            $address = $row['address'];
            $username = $row['username'];
            $password = $row['password'];
        }
    ?>


        <h2>Student details Update Form</h2>
        <form action="" method="POST">
          <fieldset>
            <legend>Personal information:</legend>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <span>First Name</span> <br><input type="text" name="firstname" value="<?php echo $firstname; ?>" required><br><br>
            <span>Last Name</span><br><input type="text" name="lastname" value="<?php echo $lastname; ?>"  required><br><br>
            <span>Phone</span><br><input type="text" name="phone" value="<?php echo $phone; ?>" required><br><br>
            <span>Gender</span><br><input type="text" name="gender"  value="<?php echo $gender; ?>" ><br><br>
            <span>Address</span><br><input type="text" name="address" value="<?php echo $address; ?>"  required><br><br>
            <span>Username</span><br><input type="text" name="username" value="<?php echo $username; ?>"  required><br><br>
            <span>Password</span><br><input type="password" name="password" value="<?php echo $password; ?>" required><br><br>
            <input type="submit" value="update" name="update">
          </fieldset>
        </form>
        </body>
        </html>


    <?php
    } else{
        header('Location: view-student.php');
    }
}
?>