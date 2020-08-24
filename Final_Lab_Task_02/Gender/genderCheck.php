<?php
if(isset($_POST['submit']))
{
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
?>