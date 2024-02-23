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
    animation: borde 3s infinite;
}
@keyframes borde {
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
.table1 td{
    background-color: grey;
    padding:10px;
    text-align:center;
}
.container{
    margin-top:-50px;
}

#hero{
    animation: borde 3s infinite;
}

/* footer */
.footer{
    background-color: black;
    width: 100%;
    height: 140px;
    display: flex;
    justify-content: center;
    text-align: center;
    align-items: center;
    margin-top:20%;
}

.left{
    /* background-color: blue; */
    width: 15%;
}

.left img{
    width: 100px;
    height: 100px;
    border-radius: 50%;
}
.middle{
    /* background-color: aliceblue; */
    width: 40%;

}



.middle ul li,h1,span,p{
    color: white;
}
.right{
    /* background-color: brown; */
    width: 40%;
}

#spth{
    margin-top: 10px;
}
#names li{
    padding: 2px;
}


.followus{
    justify-content: center;
    text-align: center;
}
.followus a img{ 
    width: 20px;
    height: 20px;
}

#copyright{
    text-align: center;
}

#copyright p{
    /* font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; */
    color: orangered;
    font-size: 15px;
    margin-top: 8px;
    font-family: "Sofia", sans-serif;
}


.alignleft h1,.alignright h1{
    color: orangered;
    font-family: "Audiowide", sans-serif;
    margin-left: 30px ;
}

.alignleft p,.alignright p{

    color: rgb(163, 95, 71);
    font-family: "Sofia", sans-serif;
    margin-left: 40px;
    padding: 10px;
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

<!-- main code -->

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

                        <td><a href="edit.php?id=<?php echo $Id;?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                        
                    <?php
                        } 
                        } 
                    ?>
                    
                </tbody>
              </table>
              <center>
              <a href="../html/database.html"><button id="hero" style="cursor:pointer; padding:10px;
              width:80px;border-radius:150px;font-size:20px; margin-top:60px;background-color:orangered;color:white;
              ">Add</button></a>
              </center>
        </div>
    </section>

<!-- up to here  -->
<!-- <footer></footer> -->
<footer>
<div class="footer">

<div class="left">
    <img src="../images/mainlogo.jpg" alt="">
</div>

<div class="middle">
    <h1 style="color: orangered;">Our Team</h1>
    <ul id="names">
        <li>Rashbin Rijal</li>
        <li>Samir Devkota</li>
        <li>Bikash Magar</li>
        <li>Pramshu Adhikari</li>
        <li>Aayusha Shrestha</li>
    </ul>
</div>

<div class="right">
    <h1 style="color: orangered;">Available In</h1>
    <span>Kathmandu,Nepal</span><br>
    <p>Contact Us: 9761688767</p>
    <span>paperwork-group-c@gmail.com</span>
    <h3 id="spth" style="color: orangered;">Special Thanks</h3>
    <p>National School of Sciences [Department of Computer Science]</p>
</div>

</div>
<div class="followus" style="background-color: black;">
<a href=""><img src="../images/youtube.png" alt=""></a>
<a href=""><img src="../images/instagram.png" alt=""></a>
<a href=""><img src="../images/linkedin.png" alt=""></a>
<a href=""><img src="../images/tik-tok.png" alt=""></a>
<a href=""><img src="../images/facebook.png" alt=""></a>
</div>
<div id="copyright" style="background-color: black; margin-top: -10px;">
<p>@copyright-2024_paperwork-group-c</p>
</div>
</footer>

</body>
</html>