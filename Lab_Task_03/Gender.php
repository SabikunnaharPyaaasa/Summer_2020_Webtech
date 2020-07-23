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
<!DOCTYPE html>
<head>
</head>
<body>

      <title></title>
      <form method="POST">
      	<fieldset>
      		<legend>Gender</legend>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
        <input type="submit" name ="submit" value="Submit">
    </fieldset>
 </body>
</html>