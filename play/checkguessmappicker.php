<?php
session_start();
 
   include("../templateoben.php");  

   if(isset($abbrechen)) {
       header("location: ../menu/main.php");
    exit(1);
   }
   if(isset($ok) and  isset($Location_Latitude)) {
       
   //1. prüfen ob für dieses Bild schon ein Tipp abgegeben wurde:
   $sql="select * from guess where userid=".$_SESSION['userid']." and imageid=".$_SESSION['imageid'];
   
   $result = $conn->query($sql);
   if ($result->num_rows)
   {
   $guessresult = $result->fetch_assoc();
   $guessid=$guessresult['id']; 
    
   $sql="update  guess set lat=".$Location_Latitude.",lon=".$Location_Longitude." where id=".$guessid;
   
   $conn->query($sql);

   }
   else { 

    $sql="insert into  guess (imageid,userid,lat,lon) values (".$_SESSION['imageid'].",".$_SESSION['userid'].",".$Location_Latitude.",".$Location_Longitude.")";
   
    $conn->query($sql);   
   
   }
   }
   header("location: ../menu/main.php");
   exit(1);
   
        
   
?>