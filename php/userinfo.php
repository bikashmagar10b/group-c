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