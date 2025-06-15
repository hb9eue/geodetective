<?php
session_start();
 
   include("../templateoben.php");  
       
   //Kommentar speichern
   $commenttext = htmlspecialchars(trim($_POST['commenttext']));
   $sql="insert into comment (imageid,userid,text) values (".$_POST['imageid'].",".$_SESSION['userid'].",'".$commenttext."')";
   $conn->query($sql);
   echo "<script>window.location.href='choosesolutionimage.php?saved=1';</script>";
   exit(1);
   
        
   
?>