<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['bloodgroup']))
	{
	 $blood=$_POST['bloodgroup'];
	  //echo $blood;
	 if(($_POST['blood']=="+A") ||($_POST['blood']=="-A") || ($_POST['blood']=="+B") || ($_POST['blood']=="+B") || ($_POST['blood']=="+O") || ($_POST['blood']=="-O") || ($_POST['blood']=="+AB") || ($_POST['blood']=="-AB"))
	 {
	 	 echo $blood;
	 }
	
	}
	else
	{
		echo "Error";
	}
}

?>