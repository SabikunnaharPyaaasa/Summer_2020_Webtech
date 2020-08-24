"use strict"
var valid=false;
function degreeValidation()
{ 
	if(document.getElementById("ssc").checked ||document.getElementById("hsc").checked||document.getElementById("bsc").checked)
	{
		window.valid=true;
	}
	
	else
	{
		document.getElementById("degreeMsg").innerHTML="At least one of them has to be selected";
		window.valid = false;
	}
}

function Validate()
{
	
	if(window.valid==true)
	{
		alert("successfull");
		return true;
	}
	else
	{
		return false;
	}
}
function Remove()
{
	document.getElementById("degreeMsg").innerHTML="";
}