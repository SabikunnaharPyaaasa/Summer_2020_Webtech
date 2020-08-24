"use strict"

window.valid=false;

function bloodValidation()
{ 
    var bloodgroup= document.getElementById("bloodGroup").value;

    if(bloodgroup=="")
    {
        document.getElementById("bloodMsg").innerHTML="i Must be selected";
        window.valid=false;
       
    }
    else
    {
        window.valid=true;
    }
}

function Validate()
{
    if(window.valid==true)
    {
        alert("Successful");
    
        return true;
    }
    else
    {
      
        return false;
    }
}
function Remove()
{
    document.getElementById("bloodMsg").innerHTML="";
}