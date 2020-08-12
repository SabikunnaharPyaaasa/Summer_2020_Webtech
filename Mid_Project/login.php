
<?php 
session_start();
if(isset($_COOKIE['remember']))
{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
<form action="logcheck.php" method="POST">
	<table>
		<tr>
			
			<td>
				User Name:
			</td>
			<td>
				<input type="text" placeholder=" User Name" name="UserName" value="<?php echo $_COOKIE['UserName'];?>">
			</td>
		</tr>
		<tr>
			
			<td>
				Password:
			</td>
			<td>
				<input type="password" placeholder="Password" name="Password" value="<?php echo $_COOKIE['Password'];?>">
			</td>


		</tr>
        <tr>
        	<td>
        		<input  type="checkbox" name="checkRemember" autocomplete="on" checked><i>Remember Me</i>
        	</td>
        </tr>
			
			 
			
		<tr>
			<td>
			<input type="Submit" value="Submit" name="submit">
			<input type="Reset" value="Reset" name="">
			<a href="Registration.php"><u>Register</u></a>
		</td>
		</tr>


	</table>

</form>
</body>
</html>
 <?php
    }

 else
{
?>
	<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
<form action="logcheck.php" method="POST">
	<table>
		<tr>
			
			<td>
				User Name:
			</td>
			<td>
				<input type="text" placeholder=" User Name" name="UserName" >
			</td>
		</tr>
		<tr>
			
			<td>
				Password:
			</td>
			<td>
				<input type="password" placeholder="Password" name="Password"
				>
			</td>


		</tr>
        <tr>
        	<td>
        		<input  type="checkbox" name="checkRemember"><i>Remember Me</i>
        	</td>
        </tr>
			
			 
			
		<tr>
			<td>
			<input type="Submit" value="Submit" name="submit">
			<input type="Reset" value="Reset" name="">
			<a href="Registration.php"><u>Register</u></a>
		</td>
		</tr>


	</table>

</form>
</body>
</html>

<?php
}
	

?>
