<?php
session_start();
 
   include("../templateoben.php");  


  



if(isset($einreichen)) {
    echo "<script>window.location.href='submitimage.php';</script>";
    //header('location: submitimage.php');
     exit(1);
}
if(isset($bearbeiten)) {
    echo "<script>window.location.href='editmyimages.php';</script>";
    //header('location: editmyimages.php');
     exit(1);
}



?>