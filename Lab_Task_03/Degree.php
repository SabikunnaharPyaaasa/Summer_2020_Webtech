<?php
if(isset($_POST['submit']))
{
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
      }
?>

<!DOCTYPE html>
<head>
</head>
<body>

      <title></title>
      <form method="POST">
      	<fieldset>
      		<legend>Email</legend>
        <input type="checkbox" name="degree" value="SSC">SSC
		<input type="checkbox" name="degree" value="HSC">HSC
		<input type="checkbox" name="degree" value="BSc">BSc.
		<input type="checkbox" name="degree" value="MSc">MSc.
        <input type="submit" name ="submit" value="Submit">
        </fieldset>
 </body>
</html>