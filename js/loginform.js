
function validate(){
    varA=document.getElementById("user").value
    varB=document.GetElementById("pass").value
    if(A==""){
        alert('user is empty')
        else if(A.length<6)
        {
            alert('username should be at least 6 characters')
        }
            else if (A=="nist12345@gmail.com"&&B=="nist@123456")
        {
    alert('successfully logged in')
    }
    else if(B=="")
    {
        alert('password is empty')
        else
        {
            alert('invalid')

        }
    }
}}