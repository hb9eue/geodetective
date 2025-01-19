<?php
session_start();
 
   include("../templateoben.php");  


  
   if(isset($adminuser)) {
     echo "<script>window.location.href='adminuser.php';</script>";
    //header('location: adminuser.php');
     exit(1);
}


if(isset($admingroup)) {
     echo "<script>window.location.href='adminscoutgroup.php';</script>";
    //header('location: adminscoutgroup.php');
     exit(1);
}

if(isset($adminevent)) {
     echo "<script>window.location.href='adminevent.php';</script>";
     //header('location: adminevent.php');
      exit(1);
 }

if(isset($images)) {
     echo "<script>window.location.href='../submit/editmyimages.php?mode=admin';</script>";
    //header('location: ../submit/editmyimages.php?mode=admin');
     exit(1);
}

if(isset($back)) {
     echo "<script>window.location.href='../menu/main.php';</script>";
    //header('location: ../menu/main.php');
     exit(1);
}


?>