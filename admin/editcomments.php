<?php
include("../templateohne.php");  
 



if (isset($accept)) {
    $commentid=$_POST['accept'];
    $sql="update comment set accepted= NOT accepted WHERE id='".$commentid."'";
    $conn->query($sql);

    echo "<script>window.location.href='admincomments.php';</script>";
    
    exit(1);
}else
if (isset($delete)) {
    $commentid=$_POST['delete'];
    
    
    
    $sql="delete from comment  WHERE id='".$commentid."'";
    $conn->query($sql);

   
    
    echo "<script>window.location.href='admincomments.php';</script>";
    
}
else{
    echo "<script>window.location.href='admincomments.php';</script>";
} 
  


  include("../templateunten.php");
  ?>
