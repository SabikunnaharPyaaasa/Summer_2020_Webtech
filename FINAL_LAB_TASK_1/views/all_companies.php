<?php
	require_once('../php/session_header.php');
	require_once('../service/companyService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Company List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>Company list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company Name</td>
			<td>Profile Description</td>
			<td>Industry</td>
			<td>Company Website</td>
			<td>Company Logo</td>
			<td>User Account Id</td>
			<td>Operation</td>
		</tr>

		<?php  
			$company = getAllCompany();
			for ($i=0; $i != count($company); $i++) {  ?>
		<tr>
			<td><?=$company[$i]['id']?></td>
			<td><?=$company[$i]['company_name']?></td>
			<td><?=$company[$i]['profile_description']?></td>
			<td><?=$company[$i]['industry']?></td>
			<td><?=$company[$i]['company_website']?></td>
			<td><img src="<?=$company[$i]['company_logo']?>"></td>
			<td><?=$company[$i]['user_account_id']?></td>
			<td>
				<a href="companyUpdate.php?id=<?=$company[$i]['id']?>">Edit</a> | 
				<a href="companyDelete.php?id=<?=$company[$i]['id']?>"><input type="button" value="Delete" onclick="return confirm('Are you want to delete <?=$company[$i]['companyDelete']?>?')" ></a>
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>