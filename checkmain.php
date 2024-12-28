<?php
session_start();
 
   include("./templateoben.php");  


  

if(isset($spielen)) {
    header('location: chooseguessimage.php');
     exit(1);
}

if(isset($einreichen)) {
    header('location: mypictures.php');
     exit(1);
}
if(isset($ergebnisse)) {
    header('location: choosesolutionimage.php');
     exit(1);
}

if(isset($einstellungen)) {
    header('location: configure.php');
     exit(1);
}
if(isset($abmelden)) {
    session_destroy();
    header('location: splashscreen.php');
     exit(1);
}

?>