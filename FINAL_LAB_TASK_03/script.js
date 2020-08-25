"use strict"
var Namevalid=false;
var Gendervalid=false;
var dobValid=false;

function NameValidity(){
var  Name= document.getElementById("name").value;
if(Name=="")
{
	document.getElementById("nameMsg").innerHTML = "! Cannot be empty";
	window.Namevalid = false;
	
}
else if(Name.length<2 && (Name>='A' && Name<='Z' || Name>='a' && Name<='z'))
{
	document.getElementById("nameMsg").innerHTML = "! Contains at least two words";
	window.Namevalid = false;
}
else if(Name>='0' && Name<='9')
{
	document.getElementById("nameMsg").innerHTML = "!Must be starts with letter";
	window.Namevalid = false;
}

else if(Name >='0'  && Name<='9' || Name=='~' || Name=='!' || Name=='@' || Name =='#' || Name=='$' || Name=='%' || Name=='^' || Name=='&' || Name=='*' || Name=='()'|| Name=='/' )
{
	document.getElementById('nameMsg').innerHTML = "! Can contain A-Z  a-z or dot(.) or dash(-)";
	window.Namevalid = false;
}
 else if( Name>='A' && Name<='Z' || Name>='a'&& Name<='z' || Name=='.' || Name=='-')
    {
        
                window.Namevalid =true;
    } 
}

function nameRemove()
{
	document.getElementById('nameMsg').innerHTML = "";
}

//Gender
function genderValidation()
{ 
	if(document.getElementById("Male").checked ||document.getElementById("Female").checked||document.getElementById("Other").checked)
	{
		window.Gendervalid=true;
	}
	else
	{
		document.getElementById("genderMsg").innerHTML="At least one of them has to be selected";
		window.Gendervalid = false;
	}
}

function genderRemove()
{
	document.getElementById('genderMsg').innerHTML = "";
}

// Date of Birth

function dobValidation()
 {
    var date = document.getElementById("date").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    
    if(date ==""|| month==""||year=="")
    {  
        document.getElementById("dobMsg").innerHTML="Cannot be empty";
        
        window.dobValid =false;
    }

    else if((date>=1 && date<=31) && (month >=1 && month<=12) && (year >=1900 && year <=2016))
    {   
         
         window.dobValid =true;
        
    }
    
 
    else 
    {
        document.getElementById("dobMsg").innerHTML="Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)";  
        window.dobValid =false;
    } 

    
 }

 
function dobRemove()
{
    document.getElementById("dobMsg").innerHTML = "";
    
}


function Validate()
{
	if(window.Namevalid==true && window.GenderValid && window.dobValid==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}

