<?php
	require_once('../php/session_header.php');
	require_once('../service/AuthorService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Author List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3> Author list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Author Name</td>
			<td>Contact Number</td>
			<td>User Name</td>
			<td>Password</td>
			<td>Action</td>
		</tr>

		<?php  
			$author = getAllAuthor();
			for ($i=0; $i != count($author); $i++) {  ?>
		<tr>
			<td><?=$author[$i]['id']?></td>
			<td><?=$author[$i]['author_name']?></td>
			<td><?=$author[$i]['contact_number']?></td>
			<td><?=$author[$i]['username']?></td>
			
			<td>
				<a href="UpdateAuthor.php?id=<?=$author[$i]['id']?>">Edit</a> |
				<a href="delete_author.php?id=<?=$author[$i]['id']?>"><input type="button" style="background-color:white; border:none; color:blue; cursor:pointer; text-decoration: underline; " value="Delete" onclick="return confirm('Are you want to delete <?=$author[$i]['author_name']?>?')" ></a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>