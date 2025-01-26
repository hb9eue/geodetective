<?php
session_start();
 
   include("../templateoben.php");  

     



if (strlen($jid)>0 && strlen($jid)<>6)  {
    echo "<script>window.location.href='editscoutgroup.php?msg=".htmlentities("Der JID-Code muss sechstellig sein.")."';</script>"; 
    //header("location: registerscoutgroup.php?msg='Der JID-Code muss sechstellig sein.'");
     exit(1);
}

//Wenn alle OK ist, Gruppe ändern

$sql="update scoutgroup set country='".$country."',city='".$city."',contact='".$contact."',association='".$association."',jid='".$jid."' where id=".$_SESSION['userscoutgroup'];

$conn->query($sql);

echo "<script>window.location.href='configure.php';</script>"; 

exit(1);
  



?>