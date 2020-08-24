<?php
if(isset($_POST['Submit'])){
 $email=$_POST['Email'];
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

