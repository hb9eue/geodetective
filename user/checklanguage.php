<?php
session_start();
 
$_SESSION['language']=$_POST['language'];   


header('location: registerscoutgroup.php');
     exit(1);
 



?>