<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>*{
    padding: 0px;
    margin: 0px;
    text-decoration: none;
    list-style: none;
}

body{
    background-color: rgb(175, 146, 146);
}

#logo{
    width: 10%;
    margin-top: 16px;
    text-align: center;
}
#left-bar{
    width: 40%;
    margin-top: 14px;
    text-align: center;
}

#right-bar{
    background-color: rgb(11, 11, 53);
    width: 50%;
    display: flex;
    justify-content: right;
    align-items: center;
}
.navbar{
    background-color: rgb(37, 16, 16);
    display: flex;
    justify-content: center;
    height: 90px;
    width: 100%;
}


#heading
{
    color: orangered;
    font-size: 50px;


}

#icon1{
    margin-right: 15px;
}

#mainlogo{
    width: 50px;
    height: 50px;
    border-radius: 50%;
}


#adddata{
    background-color: rgb(83, 67, 67);
    margin-top: 5%;
    margin-bottom: 5%;
    width: 450px;
    border-radius: 20px 50px 20px 50px;
    animation: border 4s infinite;
}

#adddata span{
    color: white;
    font-size: 20px;
}

#adddata h2{
    color: orangered;
    animation: list 3s infinite;
}

#adddata input{
    width: 300px;
    padding: 10px;
    border-radius: 10px;
    border: none;
    text-align: center;
}

#submit{
    margin-bottom: 20px;
    color: white;
    font-size: 30px;
    background-color: orangered;
    transition: 0.4s;
}
#submit:hover{
    background-color: orange;
    color: rgb(107, 98, 98);
}



@keyframes list {
    0%{
        color: red;
    }
    50%{
        color: rgb(141, 12, 23);
    }
    100%{
        color: orangered;
    }
}
@keyframes border {
    0%{
      border:solid red;
    }
    50%
    {
      border: solid blue;
    }
    100%{
      border:solid green;
    }
  }
</style>
</head>
<body>
<div class="navbar">

<div id="logo">
    <img src="../images/mainlogo.jpg" id="mainlogo" alt="logo">
</div>

<div id="left-bar">
    <level id="heading" style="
font-family: Audiowide, sans-serif;
        
        ">PAPERWORK</level>
</div>

<div id="right-bar">
   <a href="../html/page1.html" style="margin-right: 10%;"><img src="../images/basket.png" alt="basket" style="
        width: 50px;
        height: 50px;
        ">
        </a>
    <a href="firstpage.html"> <img src="../images/menu.png" alt="menu-icon" id="icon1" style="width: 30px; height: 30px;"></a>
</div>
</div>

</body>
</html>



<?php
include "connection.php";
mysqli_select_db($conn, "groupcdb");

    if (isset($_POST['update'])) {
        $Id = $_POST['id'];
        $firstname = $_POST['firstname'];
        echo $firstname;
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "UPDATE `groupc` SET `firstname`='$firstname',`lastname`='$lastname',
        `phone`='$phone',`gender`='$gender',`address`='$address',`username`='$username',`password`='$password' WHERE `id`='$Id'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
            header('Location: info.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    }

if (isset($_GET['id'])) {
    $Id = $_GET['id'];         
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

<center>

        <form action="" method="POST" id="adddata">
          <!-- <fieldset> -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <h2 style="color:orangered; margin-top:10px;margin-bottom:10px;">Update Your Form</h2>
            <span>First Name</span> <br><input type="text" name="firstname" value="<?php echo $firstname; ?>" required><br><br>
            <span>Last Name</span><br><input type="text" name="lastname" value="<?php echo $lastname; ?>"  required><br><br>
            <span>Phone</span><br><input type="text" name="phone" value="<?php echo $phone; ?>" required><br><br>
            <span>Gender</span><br><input type="text" name="gender"  value="<?php echo $gender; ?>" ><br><br>
            <span>Address</span><br><input type="text" name="address" value="<?php echo $address; ?>"  required><br><br>
            <span>Username</span><br><input type="text" name="username" value="<?php echo $username; ?>"  required><br><br>
            <span>Password</span><br><input type="password" name="password" value="<?php echo $password; ?>" required><br><br>
            <input type="submit" value="update" name="update" id="submit">
          <!-- </fieldset> -->
        </form>
</center>

    <?php
    } else{
        header('Location: view-student.php');
    }
}
?>