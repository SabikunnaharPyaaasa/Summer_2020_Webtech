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

  //Email validation
   $email=$_POST['email'];
   $pos1 =strpos($email, '@');
   $pos2 = strpos($email, ".com");
   if(empty($email))
   {
    echo "   Email canot be empty";
   }
   elseif($pos1==False && $pos2==False && $pos2>$pos1)
   {
    echo "Must be a valid email address (i.e anything@example.com) ";
    
   }
   else
   {
     echo " Email: ";
     echo $email;
   }

   //Gender Validation

    if (isset($_POST['gender']))
    {
     $gender = $_POST['gender'];
        if ($_POST['gender'] == 'Male')
          {
            echo "Gender: Male";
          }
        elseif($_POST['gender'] == 'Female')
            {
              echo "Gender: Female";
            }
         elseif($_POST['gender'] == 'Other')
            {
              echo "Gender: Other";
            }
           }
        else
        {
         echo "please select gender !!!";
        }
}
