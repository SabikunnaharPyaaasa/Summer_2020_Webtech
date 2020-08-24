"use strict"
var valid=false;

function NameValidity(){
var  Name= document.getElementById("Name").value;
if(Name=="")
{
	document.getElementById("nameMsg").innerHTML = "! Cannot be empty";
	window.valid = false;
	
}
else if(Name.length<2 && (Name>='A' && Name<='Z' || Name>='a' && Name<='z'))
{
	document.getElementById("nameMsg").innerHTML = "! Contains at least two words";
	window.valid = false;
}
else if(Name>='0' && Name<='9')
{
	document.getElementById("nameMsg").innerHTML = "!Must be starts with letter";
	window.valid = false;
}

else if(Name >='0'  && Name<='9' || Name=='~' || Name=='!' || Name=='@' || Name =='#' || Name=='$' || Name=='%' || Name=='^' || Name=='&' || Name=='*' || Name=='()'|| Name=='/' )
{
	document.getElementById('nameMsg').innerHTML = "! Can contain A-Z  a-z or dot(.) or dash(-)";
	window.valid = false;
}
 else if( Name>='A' && Name<='Z' || Name>='a'&& Name<='z' || Name=='.' || Name=='-')
    {
        
                window.valid =true;
    } 
}


function validate()
{
	NameValidity();
	if(window.valid==true)
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
	document.getElementById('nameMsg').innerHTML = "";
}