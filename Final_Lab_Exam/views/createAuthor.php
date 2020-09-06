<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Author user</title>
</head>
<body>

	<form action="../php/AuthorController.php" method="post">
		<fieldset>
			<legend>Create New Author</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" name="author_name"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" name="contact_number"></td>
				</tr>
				<tr>
					<td>UserNname</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>