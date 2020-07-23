<?php
if(isset($_POST['submit'])){
//Name validation
$name=$_POST['name'];
  $valid=FALSE;
  {
    if($name!="")
    {
      if(strlen($name)>=2)
      {
        if($name[0]>='A' && $name[0]<='Z' || $name[0]>='a' && $name[0]<='z')
        {
          for($i = 0; $i<strlen($name); $i++)
          {
            if(($name[$i]>='A' && $name[$i]<='Z') || ($name[$i]>='a' && $name[$i]<='z') || $name[$i]!='.' || $name[$i]='-')
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
      else echo "Must be contain at least two word";
    }
    else
    {
      echo "Invalid user Input for empty";
    }
    if($valid==TRUE)
    {
      echo $name;
    }
    else
    {
      echo "Invalid";
    }
  }

  //Email validation
   $email=$_POST['email'];
   $pos1 =strpos($email, '@');
   $pos2 = strpos($email, ".com");
   if(!empty($email))
   {
    if($pos1==True && $pos2==True && $pos2>$pos1)
    {
       echo "Email:", $email;
    }
    
   else
   {
     echo " Invalid ";
     
   }
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
//DOB Validation

    $date=$_POST['Date'];
    $month=$_POST['Month'];
    $year=$_POST['Year'];
    if(empty($date)||empty($month)||empty($year))
    {
      echo "Invalid Date of Birth";
    }
    elseif(($date<=31 && $date>0) && ($month<=12 && $month>0) && ($year>=1900 && $year<=2016))
    {
      echo "Date: ";
      echo $date;
      echo "/";
      echo $month;
      echo "/";
      echo $year;
      
    }
    else
    {
      echo "Invalid Date format";
    }

  //Degree Validation

    if (isset($_POST['degree']))
    {
     $degree = $_POST['degree'];
        if ($_POST['degree'] == 'SSC')
          {
            echo "Degree: SSC";
          
          }
        if($_POST['degree'] == 'HSC')
            {
              echo "Degree: HSC";
            }
         if($_POST['degree'] == 'BSc')
            {
              echo "Degree: BSc";
            }
          if($_POST['degree'] == 'MSc')
            {
              echo "Degree: MSc";
            }
        }
        else
        {
         echo "please select degree !!!";
        }

  //Blood Group Validation

        if(isset($_POST['blood']))
  {
   $blood=$_POST['blood'];
    //echo $blood;
   if(($_POST['blood']=="+A") ||($_POST['blood']=="-A") || ($_POST['blood']=="+B") || ($_POST['blood']=="+B") || ($_POST['blood']=="+O") || ($_POST['blood']=="-O") || ($_POST['blood']=="+AB") || ($_POST['blood']=="-AB"))
   {
     echo $blood;
   }
  
  }
  else
  {
    echo "Error";
  }

  //Picture upload Validation

  $a = $_POST['file'];

if(($_POST['file']==" "))
{
    echo "Invalid User  Id!";
}

else
{
   echo "Submit Successful!";
}
}
?>
