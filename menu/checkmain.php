<?php
session_start();
 
   include("../templateoben.php");  


  
   if(isset($admin)) {
    header('location: ../admin/admin.php');
     exit(1);
}


if(isset($spielen)) {
    header('location: ../play/chooseguessimage.php');
     exit(1);
}

if(isset($einreichen)) {
    header('location: ../submit/mypictures.php');
     exit(1);
}
if(isset($ergebnisse)) {
    header('location: ../play/choosesolutionimage.php');
     exit(1);
}

if(isset($einstellungen)) {
    header('location: ../user/configure.php');
     exit(1);
}
if(isset($abmelden)) {
    session_destroy();
    header('location: ../splashscreen.php');
     exit(1);
}

?>