"use strict"
window.valid = false;
function emailValidity()
{
	var  Email= document.getElementById("Email").value;
	var position1=Email.search("@");
	var position2=Email.search(".com");

	if(Email=="")
	{
		document.getElementById("emailMsg").innerHTML = "i Email Cannot be empty";
		window.valid=false;

	}
	else if(position1== false && position2== false && position1>position2)
	{
		document.getElementById("emailMsg").innerHTML = "anything@example.com";
		window.valid=false;
	}
	else
	{
		window.valid=true;
	}

}
function Remover()
{
	document.getElementById("emailMsg").innerHTML = "";

}

function Validate()
{
	emailValidity();
	if(window.valid==true)
	{
		return true;
	}
	else
	{
		return false;
	}

}
