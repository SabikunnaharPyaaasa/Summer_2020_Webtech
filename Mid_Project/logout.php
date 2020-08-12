<?php
 
 session_start();
 if($_COOKIE['ustatus']=="OK")
 {
    setcookie('ustatus', "OK", time()-36000, '/');
    header("location:login.php");
 }
 
 else
 {
    header("location:login.php");
 }

?>