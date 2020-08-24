<?php
if(isset($_POST['submit'])){
 $email=$_POST['Email'];
   $pos1 =strpos($email, '@');
   $pos2 = strpos($email, ".com");
   if(!empty($email))
   {
    if($pos1==True && $pos2==True && $pos2>$pos1)
    {
       echo "Thanks";
       ?></br><?php
       echo $email;
    }
    
   else
   {
     echo " Invalid ";
     
   }
 }
 }
?>
