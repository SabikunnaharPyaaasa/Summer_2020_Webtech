<?php
if(isset($_POST['submit'])){
//Name validation
	$a = $_POST['name'];
	$valid=FALSE;
	if($a == "")
	 {
	 	$valid=FALSE;
	 	echo "empty";
	 }
	 if(strlen($a)<2)
	 {
	 	$valid=FALSE;
	 	echo "should be greater or equal 2";
	 }
	 elseif(strlen($a)>=2 && $a[0]>='A' && $a[0]<='Z' || $a[0]>='a' && $a[0]<='z' || $a[0]=='.' ||$a[0]=='-')
	 {

	 	for($i = 1; $i<strlen($a); $i++)
           {
               if($a>='A'&& $a<='Z' || $a>='a'&& $a<='z' || $a=='.' || $a=='-' )
                 {
                      $valid = TRUE;
                      //echo $a;
                 }

                 else {
                     $valid = FALSE;
                 }
           }
	 }
    else
	 {
	 	$valid==FALSE;	
	 }

  if($valid == TRUE )
   {
   	echo "Name: ";
       echo $a;
   }
   else {
       echo "Invalid Name!";
   }

  	 

}