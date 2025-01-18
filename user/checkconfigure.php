<?php
session_start();
 
   include("../templateoben.php");  

   if(isset($abbrechen)) {
   
    header("location: ../menu/main.php");
    exit(1);
}
   
  
  if  (isset($username) and isset($password)){
 $hash = password_hash($password, PASSWORD_DEFAULT);

if ($result->num_rows)  {
    header("location: register.php?msg='".errorusername."'");
     exit(1);
}

if ($password!=$password2){
    header("location: register.php?msg='".errorpasswordidentity."'");
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
header("location: ../menu/main.php");
exit(1);
}  



?>