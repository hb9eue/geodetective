<?php
session_start();
 
   include("./templateoben.php");  


  
   if(isset($adminuser)) {
    header('location: adminuserverwaltung.php');
     exit(1);
}


if(isset($admingroup)) {
    header('location: adminuserverwaltung.php');
     exit(1);
}

if(isset($images)) {
    header('location: editmyimages.php?mode=admin');
     exit(1);
}

if(isset($back)) {
    header('location: main.php');
     exit(1);
}


?>