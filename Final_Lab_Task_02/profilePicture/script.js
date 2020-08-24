"use strict"

var valid=false;
var uservalid=false;

function userValidation()
{
    var userId = document.getElementById("id").value;
    
    if(userId==""  )
    {
       document.getElementById("userMsg").innerHTML="User Id cannot ne empty";
       
        window.uservalid=false;
    }

   
    else if (userId<0) 
    {
        document.getElementById("userMsg").innerHTML="user id must be positive Number";
        window.uservalid=false;
    }
    else
    {
        window.uservalid=true;
    }
}

function Picture()
{
    var picture = document.getElementById("file").value;
     if(picture=="")
    {
        document.getElementById("picMsg").innerHTML="picture cannot be empty";
        
        window.valid=false;
    }
    else
    {
        window.valid=true;
    }

}



function Validate()
{
    if(window.uservalid==true && window.valid==true )
    {
        return true;
    }
    else
    {
        return false;
    }
}

function Remove()
{
    document.getElementById("userMsg").innerHTML="";
    document.getElementById("picMsg").innerHTML="";
}