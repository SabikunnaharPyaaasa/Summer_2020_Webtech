<?php
if(isset($_POST['submit']))
{
	if (isset($_POST['degree']))
    {
     $degree = $_POST['degree'];
        if ($_POST['degree'] == 'ssc')
          {
            echo "Degree: SSC";
          
          }
        if($_POST['degree'] == 'hsc')
            {
              echo "Degree: HSC";
            }
         if($_POST['degree'] == 'bsc')
            {
              echo "Degree: BSc";
            }
        }
        else
        {
         echo "please select degree !!!";
        }
      }
?>

