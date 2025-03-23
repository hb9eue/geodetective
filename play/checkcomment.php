<?php
session_start();
 
   include("../templateoben.php");  
       
   //Kommentar speichern
   $sql="insert into comment (imageid,userid,text) values (".$_POST['imageid'].",".$_SESSION['userid'].",'".$_POST['commenttext']."')";
   $conn->query($sql);
   echo "<script>window.location.href='choosesolutionimage.php?saved=1';</script>";
   exit(1);
   
        
   
?>