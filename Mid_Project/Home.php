<?php
  
  if(isset($_COOKIE['status'])||isset($_COOKIE['ustatus']))
  {

?>  	
	<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
</head>
<body>
	<fieldset> 

		<table width="50%" height="50%">
			<tr>
				<td align="center">
					<a href="logout.php">Log out</a>    |
					<a href="Profile.html">Profile</a>    |
					<a href="Blog.html">Blog</a>       |
					<input type="text" placeholder=" Search" name=""
				</td>
			</tr>
		</table>
		</fieldset>
	
<form action="" method="POST">
	<fieldset >
	<table width="100%" height="800%" >
		<tr height="10%">
				<td width="100px" >
				Add
				<select name="">
							<option value="">Instructor</option>
							<option value="">Student</option>
							
			</td>
			<td width="100px" >
				Cancel
				<select name="">
							<option value="">Instructor</option>
							<option value="">Student</option>
				
			</td>
           <td width="100px">
			<a href="CourseMaterial.html">Course Materials</a>
		</td>
	</tr>
			<tr height="20%">
				<td>
				<a href="Income.html">View Income</a>
			</td>
			
			<td>
				<a href="Advertisement.html">Post Advertisement</a>
			</td>
           <td>
			<a href="StartMeeting.html">Start Meeting</a>
		</td>
	</tr>

	<tr height="20%">
				<td>
				<a href="Rating.html">View Rating</a>
			</td>
			
			<td>
				<a href="Rating.html">View Comment</a>
			</td>
           <td>
			<a href="StartMeeting.html">FAQ</a>
		</td>
	</tr>
	</table>

</form>
</body>
</fieldset>
</form>
</html>

<?php
  }
  else
  {

     header("location:Login.php");

  }

?>
