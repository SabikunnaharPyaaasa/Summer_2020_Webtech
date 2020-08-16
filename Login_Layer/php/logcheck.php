  <?php
	session_start();

	if(isset($_POST['submit'])){

		$UserName 	= $_POST['UserName'];
		$Password 	= $_POST['Password'];
		
        $valid=FALSE;
		if(empty($UserName) || empty($Password)){
			$valid=FALSE;
			echo "null submission";

		}else{
			
			$conn =mysqli_connect('localhost', 'root', '', 'user');
			
			$sql = "select * from userregistration where UserName='{$UserName}' and Password='{$Password}'";

			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			echo $_POST['checkRemember'];
			if(!empty($user)){

				if(isset($_POST['checkRemember']))
				{
					setcookie('UserName',$user['UserName'],time()+300000000,'/');
					setcookie('Password',$user['Password'],time()+300000000,'/');

					setcookie('remember',$_POST['checkRemember'], time()+300000000,'/');
					setcookie('status','OK',time()+3000000,'/');
				}	

				else if(!isset($_POST['checkRemember']))
				{

					setcookie('remember',$_POST['checkRemember'], time()-3000000,'/');
					setcookie('UserName',$user['UserName'],time()+3650,'/');
					setcookie('Password',$user['Password'],time()+3650,'/');
					setcookie('status','OK',time()-3655,'/');
					setcookie('ustatus','OK',time()+31000,'/');

				}
              mysqli_close($conn);
				$valid=TRUE;
			}

			if($valid==TRUE)
			{
				header("location:Home.php");
			}

			else{
				header("location:login.php");
			}
		}

	}else{
		header("location: Login.php");
	}

?>