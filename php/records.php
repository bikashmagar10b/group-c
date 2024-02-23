<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
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
        </div>
    </section>



</body>
</html>