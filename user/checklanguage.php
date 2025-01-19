<?php
session_start();
 
$_SESSION['language']=$_POST['language'];   

echo "<script>window.location.href='registerscoutgroup.php';</script>";
//header('location: registerscoutgroup.php');
     exit(1);
 



?>