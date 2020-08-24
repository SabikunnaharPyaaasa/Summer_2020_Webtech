<?php
if(isset($_POST['Submit']))
{
	$name=$_POST['Name'];
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
						if(($name[$i]>='A' && $name[$i]<='Z') || ($name[$i]>='a' && $name[$i]<='z') || $name[$i]!='.' || $name[$i]='-'|| $name[$i]!='')
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
}
?>