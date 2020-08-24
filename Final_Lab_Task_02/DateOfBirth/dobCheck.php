<?php
if(isset($_POST['submit']))
{
	  $date=$_POST['date'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    if(empty($date)||empty($month)||empty($year))
    {
      echo "Invalid Date of Birth";
    }
    elseif(($date<=31 && $date>0) && ($month<=12 && $month>0) && ($year>=1900 &&$year<=2016))
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
