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
      	var email = document.getElementById('email').value;
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', '../php/emailCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('email='+email);

			xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){

				if(this.responseText != ""){
					document.getElementById('emailmsg').innerHTML = this.responseText;
				}else{
					document.getElementById('emailMsg').innerHTML = "";
				}
				
			}	
        }
    }
	</script>
</body>
</html>