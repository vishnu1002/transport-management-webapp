
function validate()
{
    var email = document.getElementById('mail');
    var name = document.getElementById('name');
    var reg = document.getElementById('reg');
    var sem = document.getElementById('sem');
    var pass = document.getElementById('pass');
    var door_no = document.getElementById('door_no');
    var street_name = document.getElementById('street_name');
    var landmark = document.getElementById('landmark');
    var pincode = document.getElementById('pincode');
    var error = document.getElementById("error");

    if(email.value == "")
    {
        email.focus();
        error.innerHTML = "Email field is empty";
        return false;
    }
    // var mailid = document.form.mail.value;
    // atpos = mailid.indexOf("@");
    // dotpos = mailid.lastIndexOf(".");
    // if(atpos < 1 || (dotpos - atpos < 6) || mailid.lastIndexOf("g") != atpos+1)
    // {
    //     error.innerHTML = "Unknown Email ID";
    //     return false;
    // }
    if(name.value == "")
    {
        error.innerHTML = "Name field is empty";
        return false;
    }
    if(reg.value == "")
    {
        error.innerHTML = "Roll No field is empty";
        return false;
    }
    if(sem.value == "")
    {
        error.innerHTML = "Semester field is empty";
        return false;
    }
    if(pass.value == "")
    {
        error.innerHTML = "Password field is empty";
        return false;
    }

    if(door_no.value == "")
    {
        error.innerHTML = "Door No field is empty";
        return false;
    }
    if(street_name.value == "")
    {
        error.innerHTML = "Street Name field is empty";
        return false;
    }
    if(landmark.value == "")
    {
        error.innerHTML = "Landmark field is empty";
        return false;
    }
    if(pincode.value == "")
    {
        error.innerHTML = "Pincode field is empty";
        return false;
    }
    
}
