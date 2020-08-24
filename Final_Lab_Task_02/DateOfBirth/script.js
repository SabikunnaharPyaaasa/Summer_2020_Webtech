"use strict"

window.valid=false;

 
 function dobValidation()
 {
    var date = document.getElementById("date").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    
    if(date ==""|| month==""||year=="")
    {  
        document.getElementById("dobMsg").innerHTML="Cannot be empty";
        
        window.valid =false;
    }

    else if((date>=1 && date<=31) && (month >=1 && month<=12) && (year >=1900 && year <=2016))
    {   
         
         window.valid =true;
        
    }
    
 
    else 
    {
        document.getElementById("dobMsg").innerHTML="Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)";  
        window.valid =false;
    } 

    
 }

 
function Remove()
{
    document.getElementById("dobMsg").innerHTML = "";
    
}

function Validate()
{
   
    if(window.valid==true)
    {
       
        return true;
        alert("Successful");    }
    else
    {
        
        return false;
    }
    
}