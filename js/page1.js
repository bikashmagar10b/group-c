function rootaccess(){
    let username = prompt("Enter your root username");
    let password = prompt("Enter your root password");

    if(username=="groupc@gmail.com" && password =="groupc@123")
    {
        alert("Successful log In");
        var datab = '../html/page2.html';
        window.open(datab);
    }
    else{
        alert(" Error!!!");
    }
    }
