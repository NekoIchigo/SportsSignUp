function validate()
{
    var username=document.getElementById("username").value;
    var password=document.getElementById("password").value;

    if(username!==""&&password!=="")
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