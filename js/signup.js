function valid(){
    let a=document.getElementById('username').value;
    let b=document.getElementById('email').value;
    let c=document.getElementById('password').value;
    let d=document.getElementById('confirmPassword').value;
    if(a=="Group-c" && b=="groupc@gmail.com" && c=="groupc@123" && d==c){
        alert('signed up succesfully');
        return true;
    }
    else{
        alert('wrong info!!!')
        return false;
    }
 }