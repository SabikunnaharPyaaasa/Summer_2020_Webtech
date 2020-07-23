<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['blood']))
	{
	 $blood=$_POST['blood'];
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
<!DOCTYPE html>
<head>
</head>
<body>

      <title></title>
      <form method="POST">
      	<fieldset>
      		<legend>Blood Group</legend>
       <select name="blood">
							    <option value="+A">A+</option>
						    	<option value="-A">A-</option>
							    <option value=+B">B+</option>
							    <option value="-B">B-</option>
							    <option value="+O">O+</option>
							    <option value="-O">0-</option>
							    <option value="+AB">AB+</option>
							    <option value="-AB">AB-</option>
        <input type="submit" name ="submit" value="Submit">
        </fieldset>
 </body>
</html>
