<?php
if(isset($_POST['submit'])){
 $email=$_POST['email'];
   $pos1 =strpos($email, '@');
   $pos2 = strpos($email, ".com");
   if(empty($email))
   {
    echo "Email canot be empty";
   }
   if($pos1==False && $pos2==False && $pos2>$pos1)
   {
    echo "Must be a valid email address (i.e anything@example.com) ";
    
   }
   else
   {
     echo " Email: ";
     echo $email;
   }
  }
?>

<!DOCTYPE html>
<head>
</head>
<body>

      <title></title>
      <form method="POST">
        Email:<input type="email" name = "email" value="">
        <input type="submit" name ="submit" value="Submit">
 </body>
</html>