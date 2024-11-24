<?php
session_start();
 
   include("./templateoben.php");  

   if(isset($abbrechen)) {
    echo 'hier';
    header("location: main.php");
    exit(1);
}
   
  
  if  (isset($username) and isset($password)){
 $hash = password_hash($password, PASSWORD_DEFAULT);

if ($result->num_rows)  {
    header("location: register.php?msg='Der Nutzername ist bereits vergeben'");
     exit(1);
}

if ($password!=$password2){
    header("location: register.php?msg='Die Passwörter stimmen nicht überein'");
     exit(1);
}
$sql="UPDATE user set username=".$username.", scoutgroup=".$scoutgroup.", password=".$hash." where id=".$_SESSION['userid'];
}
if  (isset($username) and !isset($password)){
    {
        $sql="UPDATE user set username=".$username.", scoutgroup=".$scoutgroup." where id=".$_SESSION['userid'];  
    }


//Wenn alle OK ist, User ändern

//$conn->query($sql);
echo $sql;
//header("location: main.php");
exit(1);
}  



?>