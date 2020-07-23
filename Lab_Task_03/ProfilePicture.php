<?php
if(isset($_POST['submit'])){
$userid = $_POST['text'];

if(($userid == " ") || ($_POST['file']==" "))
{
    echo "Invalid User  Id!";
}

elseif ($_POST['file'] && $userid > 0) 
{
   $file = $_POST['file'];

   echo "Successfully Submitted!";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Profile Picture</legend>
			<form method="POST">
			User Id<input type="text" name="text"><br>
			<br>
			Picture<input type="file" name="file"><br>
			<br>
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>