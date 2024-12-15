<?php
session_start();
 
   include("./templateoben.php");  


  



if(isset($einreichen)) {
    header('location: submitimage.php');
     exit(1);
}
if(isset($bearbeiten)) {
    header('location: editmyimages.php');
     exit(1);
}



?>