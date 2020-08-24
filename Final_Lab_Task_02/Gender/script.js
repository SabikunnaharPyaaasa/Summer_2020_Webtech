"use strict"
var valid=false;
function genderValidation()
{ 
	if(document.getElementById("Male").checked ||document.getElementById("Female").checked||document.getElementById("Other").checked)
	{
		window.valid=true;
	}
	if(document.getElementById("Male").checked)
	{
		window.valid=true;
	}
	if(valid)
	{
		alert("successfull");
	}
	else
	{
		document.getElementById("genderMsg").innerHTML="At least one of them has to be selected";
		window.valid = false;
	}
}

function Validate()
{
	
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
	document.getElementById("genderMsg").innerHTML="";
}