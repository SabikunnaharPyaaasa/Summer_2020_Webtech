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
	<title>Delete Company</title>
</head>
<body>

	<form action="../php/companyController.php" method="post">
		<fieldset>
			<legend>Delete Company</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="<?=$company['company_name']?>"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="profile_description"  value="<?=$company['profile_description']?>"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry" value="<?=$company['industry']?>"></td>
				</tr>
				<tr>
					<td>Company Website</td>
					<td><input type="text" name="company_website" value="<?=$company['company_website']?>"></td>
				</tr>
				<tr>
					<td>Company Logo</td>
					<td><input type="text" name="company_logo" value="<?=$company['company_logo']?>"></td>
				</tr>
				<tr>
					<td>User Account Id</td>
					<td><input type="text" name="user_account_id" value="<?=$company['user_account_id']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$company['id']?>">
						<input type="submit" name="delete_company" value="Delete"> 
						<a href="all_companies.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>