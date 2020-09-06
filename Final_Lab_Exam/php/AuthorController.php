<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/AuthorService.php');


	//add author
	if(isset($_POST['create'])){
		$author_name 	= $_POST['author_name'];
		$contact_number 	= $_POST['contact_number'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];




		if(empty($author_name) ||empty($contact_number) || empty($username) || empty($password)){
			header('location: ../views/createAuthor.php?error=null_value');
		}else{

			$author = [
				'author_name'=>$author_name,
				'contact_number'=>$contact_number
				'username'=> $username,
				'password'=> $password,
			];

			$status = insert($author);

			if($status){
				header('location: ../views/all_author.php?success=done');
			}else{
				header('location: ../views/createAuthor.php?error=db_error');
			}
		}
	}


	//update author
	if(isset($_POST['edit'])){

		if(isset($_POST['edit'])){
		$author_name 	= $_POST['author_name'];
		$contact_number 	= $_POST['contact_number'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];




		if(empty($author_name) ||empty($contact_number) || empty($username) || empty($password)){
			header('location: ../views/UpdateAuthor.php?error=null_value');
		}else{

			$author = [
				'author_name'=>$author_name,
				'contact_number'=>$contact_number
				'username'=> $username,
				'password'=> $password,
			];

			$status = insert($author);

			if($status){
				header('location: ../views/all_author.php?success=done');
			}else{
				header('location: ../views/createAuthor.php?error=db_error');
			}
		}
	}



?>
