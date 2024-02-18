// function abc()
// {
//     let a = document.getElementById('username').value;
//     let b = document.getElementById('password').value;

//     if(a=="groupc@gmail.com" && b=="groupc@123")
//     {
//         alert("Successful log In");
//         var datab = '../html/page1.html';
//         window.open(datab);
//     }
//     else{
//         alert("Wrong username or password!!");
//     }
// }

function passw(){
    let passw = document.getElementById('password');
    if (passw.type === "password") {
        passw.type = "text";
    }
     else {
        passw.type = "password";
    }
}