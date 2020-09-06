<?php
    require_once('../php/session_header.php');
    require_once('../service/AuthorService.php');
	if (isset($_GET['id'])) {
		if($author = delete($_GET['id']))
		{
			header("location:all_author.php");
		}	
	}else{
		header('location:all_author.php');
	}

?>