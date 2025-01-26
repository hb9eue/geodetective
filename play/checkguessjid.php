<?php
session_start();
 
   include("../templateoben.php");  

   if (strlen($jid)>0 && strlen($jid)<>6)  {
    echo "<script>window.location.href='guessjid.php?msg=".htmlentities(errorjid)."';</script>";
    //header("location: registerscoutgroup.php?msg='".errorjid."'");
     exit(1);
}
       
   //1. prüfen ob für dieses Bild schon ein Tipp abgegeben wurde:
   $sql="select * from guess where userid=".$_SESSION['userid']." and imageid=".$_SESSION['imageid'];
   
   $result = $conn->query($sql);
   if ($result->num_rows)
   {
   $guessresult = $result->fetch_assoc();
   $guessid=$guessresult['id']; 
    
   $sql="update  guess set guessedjid='".$jid."' where id=".$guessid;
   
   $conn->query($sql);

   }
   else { 

    $sql="insert into guess (imageid,userid,guessedjid) values (".$_SESSION['imageid'].",".$_SESSION['userid'].",'".$jid."')";
   
    $conn->query($sql);   
   
   }
   
   echo "<script>window.location.href='guess.php?chosenimage=".$_SESSION['imageid']."';</script>";
   //header("location: ../menu/main.php");
   exit(1);
   
        
   
?>