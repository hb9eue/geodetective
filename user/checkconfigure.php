<?php
session_start();
 
   include("../templateoben.php");  

   if(isset($abbrechen)) {
    echo "<script>window.location.href='../menu/main.php';</script>";
    
    exit(1);
}

if(isset($editscoutgroup)) {
    echo "<script>window.location.href='editscoutgroup.php';</script>";
    
    exit(1);
}
   
  
  if  (isset($username) and isset($password)){
 $hash = password_hash($password, PASSWORD_DEFAULT);

if ($result->num_rows)  {
    echo "<script>window.location.href='register.php?msg=".htmlentities(errorusername)."';</script>";
   //header("location: register.php?msg='".errorusername."'");
     exit(1);
}

if ($password!=$password2){
    echo "<script>window.location.href='register.php?msg=".htmlentities(errorpasswordidentity)."';</script>";
    //header("location: register.php?msg='".errorpasswordidentity."'");
     exit(1);
}
$sql="UPDATE user set username=".$username.", scoutgroup=".$scoutgroup.", password=".$hash." where id=".$_SESSION['userid'];
}
if  (isset($username) and !isset($password)){
    {
        $sql="UPDATE user set username=".$username.", scoutgroup=".$scoutgroup." where id=".$_SESSION['userid'];  
    }


//Wenn alle OK ist, User ändern

$conn->query($sql);
echo "<script>window.location.href='chooselanguage.php';</script>";
//header("location: ../menu/main.php");
exit(1);
}  



?>