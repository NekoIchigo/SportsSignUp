function validate()
{
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;
    var confirmpass=document.getElementById("confirmpass").value;

    if(username!==""&&password!==""&&confirmpass!=="")
    {
        if(password==confirmpass)
        {
        alert("sign up succesfully");
        return false;
        }
        else
        {
        alert("sign up failed");
        }
    }
    else
    {
    alert("sign up failed");
    }


}