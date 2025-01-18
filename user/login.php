<?php
session_start();
 
   include("../templatelogin.php");  


  if  (isset($username) and isset($password)){
      
$result = $conn->query("SELECT * FROM user WHERE username='".$username."'");
$datensatz = $result->fetch_assoc();


if(isset($register)) {
    header('location: registerscoutgroup.php');
     exit(1);
}


if(password_verify($password, $datensatz['password']) && $username==$datensatz['username']) 
{
    //echo 'Passwort stimmt!';
    $_SESSION['userid'] = $datensatz['id'];
    $_SESSION['role'] = $datensatz['role'];
    $_SESSION['language'] = $language;
    
    //load event
    $eventresult = $conn->query("SELECT * FROM event WHERE curdate() between submitfrom and endtimestamp");
    $event = $eventresult->fetch_assoc();
       
    $_SESSION['eventid'] = $event['id']; 
    $_SESSION['starttimestamp'] = $event['starttimestamp'];
    $_SESSION['endtimestamp'] = $event['endtimestamp'];
    $_SESSION['interval'] = $event['publishinterval'];
    $_SESSION['imagesperinterval'] = $event['imagesperinterval'];
    $_SESSION['submitfrom'] = $event['submitfrom'];
    $_SESSION['submituntil'] = $event['submituntil'];
       

    header('location: ../menu/main.php');
     exit(1);
} 
else
{
    //echo 'Passwort ist falsch!';
    header('location: ../splashscreen.php?msg=Der eingegebene Benutzername oder Passwort ist falsch');
     exit(1);
}
}
?>