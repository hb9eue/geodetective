<?php
session_start();
 
   include("../templateoben.php");  


  
   if(isset($adminuser)) {
     echo "<script>window.location.href='adminuser.php';</script>";
     exit(1);
}


if(isset($admingroup)) {
     echo "<script>window.location.href='adminscoutgroup.php';</script>";
    
     exit(1);
}

if(isset($adminevent)) {
     echo "<script>window.location.href='adminevent.php';</script>";
     
      exit(1);
 }

if(isset($images)) {
     echo "<script>window.location.href='../submit/editmyimages.php?mode=admin';</script>";
        
     exit(1);
}


if(isset($sortimages)) {
     
     echo "<script>window.location.href='adminsortimages.php';</script>";
    
     exit(1);
}

if(isset($back)) {
     echo "<script>window.location.href='../menu/main.php';</script>";
    
     exit(1);
}


?>