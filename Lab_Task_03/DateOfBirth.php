<?php
if(isset($_POST['submit']))
{
	  $date=$_POST['Date'];
    $month=$_POST['Month'];
    $year=$_POST['Year'];
    if(empty($date)||empty($month)||empty($year))
    {
      echo "Invalid Date of Birth";
    }
    elseif(($date<=31 && $date>0) && ($month<=12 && $month>0) && ($year>1900))
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
}

?>
<!DOCTYPE html>
<head>
</head>
<body>

      <title></title>
      <form method="POST">
      	<fieldset>
      		<legend>DOB</legend>
             dd<input type="text" name="Date"  size="1%"><b>/</b>
			 mm<input type="text" name="Month"  size="1%"><b>/</b>
		   	 yy<input type="text" name="Year"  size="1%"> 
        <input type="submit" name ="submit" value="Submit">
 </body>
</html>