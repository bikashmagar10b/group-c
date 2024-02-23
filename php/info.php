<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
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
.table1{
    background-color:white;
    width: 100%;
}
.table1 td{
    background-color: grey;
    padding:10px;
    text-align:center;
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
   <a href="page1.html" style="margin-right: 10%;"><img src="../images/basket.png" alt="basket" style="
        width: 50px;
        height: 50px;
        ">
        </a>
    <a href="firstpage.html"> <img src="../images/menu.png" alt="menu-icon" id="icon1" style="width: 30px; height: 30px;"></a>
</div>
</div>

    <h1 style="text-align:center;margin-top:10px;">No of Users in Paperwork Database</h1>

<section style="margin: 50px 0;">
        <div class="container">
            <table class="table1" border="1">
                <thead>
                  <tr>
                    <th scope="col" style="background-color:orangered; color:white; padding:10px;">Id</th>
                    <th scope="col" style="background-color:orangered; color:white; padding:10px;">First Name</th>
                    <th scope="col" style="background-color:orangered; color:white; padding:10px;">Last Name</th>
                    <th scope="col" style="background-color:orangered; color:white; padding:10px;">Phone</th>
                    <th scope="col" style="background-color:orangered; color:white; padding:10px;">Gender</th>
                    <th scope="col" style="background-color:orangered; color:white; padding:10px;">Address</th>
                    <th scope="col" style="background-color:orangered; color:white; padding:10px;">Username</th>
                    <th scope="col" style="background-color:orangered; color:white; padding:10px;">Password</th>
                    <th scope="col" style="background-color:green;">Edit</th>
                    <th scope="col" style="background-color:red;">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "connection.php";
                        mysqli_select_db($conn, "groupcdb");
                        $sql_query = "SELECT * FROM groupc";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $Id = $row['id'];
                                $firstname = $row['firstname'];
                                $lastname = $row['lastname'];
                                $phone = $row['phone'];
                                $gender = $row['gender'];
                                $address = $row['address'];
                                $username = $row['username'];
                                $password = $row['password'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $firstname; ?></td>
                        <td><?php echo $lastname; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $gender; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $password; ?></td>

                        <td><a href="edit.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                        
                    <?php
                        } 
                        } 
                    ?>
                    
                </tbody>
              </table>
              <center>
              <a href="../html/database.html"><button style="cursor:pointer; padding:10px;
              width:80px;border-radius:150px;font-size:20px; margin-top:60px;background-color:orangered;color:white;
              ">Add</button></a>
              </center>
        </div>
    </section>



</body>
</html>