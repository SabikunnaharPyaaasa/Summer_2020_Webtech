<?php

	session_start();

	if(isset($_POST['submit'])){

        $Id       = $_POST['Id'];
	    $password 	= md5($_POST['password']);
	    $confirmPassword=md5($_POST['confirmPassword']);			
		$Name 		= $_POST['Name'];
		$email 		= $_POST['email'];	
		$User     =$_POST['User'];
		$Admin        =$_POST['Admin'];
		



		if(empty($Id) || empty($password) || empty( $confirmPassword) || empty($Name)||empty($email)||empty($User)||empty($Admin)){
			echo "null submission found!";
		}elseif($password==$confirmPassword)
		{
			setcookie('Id',$Id, time()+3600,'/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('confirmPassword', $confirmPassword, time()+3600, '/');
			setcookie('Name',$Name, time()+3600,'/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('User', $User, time()+3600, '/');
			setcookie('Admin', $Admin, time()+3600, '/');
			header('location: Login.html');
		}	

	}else{
		//echo "invalid request";
		header('location: Login.html');
	}




?> 