<?php
session_start();
 
   include("./templateoben.php");  

   if(isset($abbrechen)) {
       header("location: main.php");
    exit(1);
   }
   if(isset($ok) and  isset($Location_Latitude)) {
       //Koordinaten des Pickers in Bild schreiben
   

   $sql="update  image set lat=".$Location_Latitude.",lon=".$Location_Longitude." where id=".$_SESSION['imageid'];
   $conn->query($sql);
   }

   header("location: editimage.php");
   exit(1);
   
        
   
?>