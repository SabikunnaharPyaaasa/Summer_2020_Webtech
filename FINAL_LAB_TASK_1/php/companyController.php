<?php 
	require_once('../php/session_header.php');
	require_once('../service/companyService.php');

//add company
	if(isset($_POST['create_company'])){

		$company_name 	= $_POST['company_name'];
		$profile_description = $_POST['profile_description'];
		$industry 		= $_POST['industry'];
		$company_website = $_POST['company_website'];
		$company_logo 		= $_POST['company_logo'];
		$user_account_id = $_POST['user_account_id'];

		if(empty($company_name) || empty($profile_description) || empty($industry) || empty($company_website) || empty($company_logo) || empty($user_account_id)){
			header('location: ../views/createcompany.php?error=null_value');
		}else{

			$company = [
				'company_name'=> $company_name,
				'profile_description'=> $profile_description,
				'industry'=> $industry,
				'company_website'=> $company_website,
				'company_logo'=> $company_logo,
				'user_account_id'=> $user_account_id	
			];

			$status = insert($company);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/CompanyUpdate.php?error=db_error');
			}
		}
	}


	//update company
	if(isset($_POST['update_company'])){

		$company_name 	= $_POST['company_name'];
		$profile_description = $_POST['profile_description'];
		$industry 		= $_POST['industry'];
		$company_website = $_POST['company_website'];
		$company_logo 		= $_POST['company_logo'];
		$user_account_id = $_POST['user_account_id'];

		if(empty($company_name) || empty($profile_description) || empty($industry) || empty($company_website) || empty($company_logo) || empty($user_account_id)){
			header('location: ../views/createcompany.php?error=null_value');
		}else{

			$company = [
				'company_name'=> $company_name,
				'profile_description'=> $profile_description,
				'industry'=> $industry,
				'company_website'=> $company_website,
				'company_logo'=> $company_logo,
				'user_account_id'=> $user_account_id	
			];

			$status = update($company);

			if($status){
				header('location: ../views/all_companies.php?success=done');
			}else{
				header('location: ../views/companyUpdate.php?id={$id}');
			}
		}
	}


	


?>