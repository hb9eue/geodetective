<?php
session_start();
 
   include("../templateoben.php");  


  
   if(isset($adminuser)) {
    header('location: adminuser.php');
     exit(1);
}


if(isset($admingroup)) {
    header('location: adminscoutgroup.php');
     exit(1);
}

if(isset($adminevent)) {
     header('location: adminevent.php');
      exit(1);
 }

if(isset($images)) {
    header('location: ../submit/editmyimages.php?mode=admin');
     exit(1);
}

if(isset($back)) {
    header('location: ../menu/main.php');
     exit(1);
}


?>