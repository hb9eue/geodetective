<?php
session_start();
 
   include("../templateoben.php");  

 $editeventid=$_SESSION['editeventid'];   
 
 //Format für Datepicker: yyyy-mm-ddThh:mm   
 //Format für Timestamp: yyyy-mm-dd hh:mm:ss   
 $starttimestamp=str_replace("T"," ",$starttimestamp).":00";
 $endtimestamp=str_replace("T"," ",$endtimestamp).":00";
 $submitfrom=str_replace("T"," ",$submitfrom).":00";
 $submituntil=str_replace("T"," ",$submituntil).":00";


$sql="update event set name='".$name."',";
$sql=$sql."starttimestamp='".$starttimestamp."', endtimestamp='".$endtimestamp."', ";
$sql=$sql."startnightsrest='".$startnightsrest."', endnightsrest='".$endnightsrest."', ";
$sql=$sql."submitfrom='".$submitfrom."', submituntil='".$submituntil."', ";
$sql=$sql."publishinterval='".$interval."',imagesperinterval='".$imagesperinterval."' ";
$sql=$sql." where id=".$editeventid;

//echo $sql;
$conn->query($sql);

 
$_SESSION['starttimestamp'] = $starttimestamp;
$_SESSION['endtimestamp'] = $endtimestamp;
$_SESSION['interval'] = $interval;
$_SESSION['imagesperinterval'] = $imagesperinterval;
$_SESSION['submitfrom'] = $submitfrom;
$_SESSION['submituntil'] = $submituntil;
$_SESSION['startnight'] = $startnightsrest;
$_SESSION['endnight'] = $endnightsrest;
   


echo "<script>window.location.href='adminevent.php';</script>"; 
//header("location: adminevent.php");
exit(1);
  



?>