<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Author Home</title>
</head>
<body>
	<h1>Welcome Author!<?=$_SESSION['username']?></h1> 
	<a href="../views/create_write_post.php">Add Write Post</a> |
	<a href="../views/all_write_post.php">write_post List</a> |
	<a href="../php/logout.php">Logout</a> 
</body>
</html>