<?php 
	session_start();
	require_once('../php/session_header.php');
	require_once('../service/BlogService.php');


	//add author
	if(isset($_POST['create'])){
		$writing_title 	= $_POST['writing_title'];
		$writing_description 	= $_POST['writing_description'];
		




		if(empty($writing_name) ||empty($writing_description)){
			header('location: ../views/create_write_post.php?error=null_value');
		}else{

			$blog = [
				'writing_name'=>$writing_name,
				'writing_description'=>$writing_description
			];

			$status = insert($blog);

			if($status){
				header('location: ../views/all_write_post.php?success=done');
			}else{
				header('location: ../views/create_write_post.php?error=db_error');
			}
		}
	}


	//update write
		if(isset($_POST['edit'])){
		$writing_title 	= $_POST['writing_title'];
		$writing_description 	= $_POST['writing_description'];
		
		if(empty($writing_name) ||empty($writing_description)){
			header('location: ../views/create_write_post.php?error=null_value');
		}else{

			$blog = [
				'writing_name'=>$writing_name,
				'writing_description'=>$writing_description
			];

			$status = insert($blog);

			if($status){
				header('location: ../views/all_write_post.php?success=done');
			}else{
				header('location: ../views/create_write_post.php?error=db_error');
			}
		}
	}



?>
