<?php
if(isset($_POST['submit'])){
 $email=$_POST['email'];
   $pos1 =strpos($email, '@');
   $pos2 = strpos($email, ".com");
   if(!empty($email))
   {
    if($pos1==True && $pos2==True && $pos2>$pos1)
    {
       echo "Thanks", $email;
    }
    
   else
   {
     echo " Invalid ";
     
   }
 }
 }
?>

<!DOCTYPE html>
<head>
</head>
<body>

      <title></title>
      <form method="POST">
        Email:<input type="email" name = "email" value="" placeholder="any@example.com">
        <input type="submit" name ="submit" value="Submit">
 </body>
</html>