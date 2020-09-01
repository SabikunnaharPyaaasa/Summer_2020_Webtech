<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" id="Email" onkeyup="emailValidity()" ></td>
				</tr>
				<tr>
					<td id="emailMsg"></td>
					<td><input type="submit" name="submit" value="Submit" onclick = "f1()"></td>
					<a href = "login.php" style = "display:none">login</a>
				</tr>
			</table>
		</fieldset>
	</form>
	<script>
		function f1(){
			document.getElementsByTagName('a')[0].style.display = 'inline';
		}

		
		function emailValidity()
      {
	     var  Email= document.getElementById("Email").value;

	      if(Email=="")
	     {
		    document.getElementById("emailMsg").innerHTML = "i Email Cannot be empty";
		     return false;

	     }
	
	    else
	      {
		   return true;
	       }

}
	</script>
</body>
</html>