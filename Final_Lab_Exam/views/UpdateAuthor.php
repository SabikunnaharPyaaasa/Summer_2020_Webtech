<?php
	require_once('../php/session_header.php');
	//require_once('../php/companyController.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Author</title>
</head>
<body>

	<form action="../php/AuthorController.php" method="post">
		<fieldset>
			<legend>Edit Author</legend>
			<table>
				<tr>
					<td>Author Name</td>
					<td><input type="text" name="author_name" value="<?=$author['author_name']?>"></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" name="contact-number"  value="<?=$author['contact_number']?>"></td>
				</tr>
				<tr>
					<td>UserName</td>
					<td><input type="text" name="username" value="<?=$author['username']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$author['password']?>"></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$author['id']?>">
						<input type="submit" name="update_author" value="Update"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>