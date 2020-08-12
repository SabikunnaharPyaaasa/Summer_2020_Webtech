<?php
session_start();
if(isset($_POST['submit']))
{
	$Name=$_POST['Name'];
	$Email=$_POST['Email'];
	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];
	$ConfirmPassword=$_POST['ConfirmPassword'];
	$gender=$_POST['gender'];
	 $date=$_POST['date'];
	 $UserType=$_POST['UserType'];
	$valid=FALSE;

	if(empty($Name)||empty($Email)||empty($UserName)||empty($Password)||empty($ConfirmPassword))
	{
	    echo "Field should not be empty";
	}  

	 else if(!isset($_POST['gender'])||empty($_POST['UserType']))
	 {
	 	echo "Field should not be empty";
	 }
	 //Name Validation
	else if (strlen($Name)>=4 )
			{
					for($i = 0; $i<strlen($Name); $i++)
					{
						if($Name[$i]>='A' && $Name[$i]<='Z' || $Name[$i]>='a' && $Name[$i]<='z')
						{

							$valid=TRUE;
						}
						else
						{
							//$valid=FALSE;
							echo "Name cannot be a number";

						}
					}
									
			}
	       else if (strlen($UserName)>=6 )
	         {
		       if($name[0]>='A' && $name[0]<='Z' || $name[0]>='a'&& $name[0]<='z')
	
			     {
					for($i = 1; $i<strlen($UserName); $i++)
					{
						if($Name[$i]>='A' && $UserName[$i]<='Z' || $UserName[$i]>='a' && $UserName[$i]<='z')
						{

							$valid=TRUE;
						}
						else
						{
							$valid=FALSE;
							

						}
					}
				}					
			}

		else
		{   
			if($_POST['gender']=="Female")
			{
				$gender="Female";
			}

			else if($_POST['gender']=="Male")
			{
				$gender="Male";
			}
			
			else
			{
				$gender="Other";
			}

			$valid=TRUE;

			
	
}

	if($valid==TRUE)
	{
		echo "Registration Successful";
		$conn = mysqli_connect('127.0.0.1', 'root', '','user');
	//mysqli_select_db($conn,'user');
	$query="select UserName from userregistration where UserName='".$_POST['UserName']."'";
	$result = mysqli_query($conn, $query);
	$data=mysqli_fetch_assoc($result);
	//echo $data;
	$num=mysqli_num_rows($result);
	if(empty($data))
	{

		if($_POST['Password'] == $_POST['ConfirmPassword']) 
			{
				# code...
				$sql1="INSERT INTO userregistration (Name, Email, UserName, Password, gender, DateOfBirth, UserType) VALUES ('$Name', '$Email', '$UserName','$Password','$gender','$date','$UserType')";

					mysqli_query($conn,$sql1);
					echo "done";
					header("location:login.php");
					 
			}
			else
			{
				echo "password did not match";
			}
			mysqli_close($conn);
	}

			else
			 {
				echo "User Name already taken!!!!!";
			 }
	}
	else
	{
		echo "Failed";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<body> 
	</body>
	
	<form action="#" method="POST">
				
		<fieldset>
        <legend><b>REGISTRATION</b></legend>
	
		<br/>
             Name</br>
				
				<input type="text" name="Name" ></br>
				Email	</br>		
					<input name="Email" type="email">
					<abbr title="hint: sample@example.com"><b>i</b></abbr></br>
					
				UserName</br>
		         <input type="text" name="UserName" ></br>

		     Passsword</br>
		         <input type="text" name = "Password" ></br>
			    
				
				Confirm Password</br>
				<input type="password" name="ConfirmPassword" >
					
			 
					
				
				</br>Gender</br>
				    <input name="gender" type="radio"  value="Male">Male
				    <input  name="gender" type="radio"  value="Female">Female
					<input  name="gender"  type="radio" value="Other">Other</br>

					Date Of Birth</br>
					   
						    <input type="date" name="date" size="1%"><b>/</b>
		           
					<select name="UserType" >
						<option name="UserType" value="Admin">Admin</option>
						<option name="UserType" value="Instructor">Instructor</option>
						<option name="UserType" value="Learners">Learners</option>
					</select>
						User Type [<i>Admin/Instructor/Learners</i>]</br>
					</br><input type="submit" name="submit" value="Registration">
		     <a href = "login.php">Login</a>	
									
		</fieldset>
	</form>



	</head>
</html>



