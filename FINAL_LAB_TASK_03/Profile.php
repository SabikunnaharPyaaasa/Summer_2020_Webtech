<?php

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	echo "Successfully submitted";
	echo $name;
}
?>