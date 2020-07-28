<?php

	session_start();

	if(isset($_POST['submit'])){

        $name       = $_POST['name'];
		$uname 		= $_POST['uname'];
		$email 		= $_POST['email'];
		$password 	= md5($_POST['password']);
		$gender     =$_POST['gender'];
		$day        =$_POST['day'];
		$month      =$_POST['month'];
		$year        =$_POST['year'];



		if(empty($name) || empty($uname) || empty($password) || empty($email)||empty($gender)||empty($day)||empty($month)||empty($year) ){
			echo "null submission found!";
		}else{
			setcookie('name',$name, time()+3600,'/');
			setcookie('uname', $uname, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('gender', $gender, time()+3600, '/');
			setcookie('day', $day, time()+3600, '/');
			setcookie('month', $month, time()+3600, '/');
			setcookie('year', $year, time()+3600, '/');

			header('location: Login.html');
		}	

	}else{
		//echo "invalid request";
		header('location: Login.html');
	}




?> 