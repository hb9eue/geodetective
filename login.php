<?php
session_start();
 
   include("./templateoben.php");  


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
    header('location: main.php');
     exit(1);
} 
else
{
    //echo 'Passwort ist falsch!';
    header('location: splashscreen.php?msg=Der eingegebene Benutzername oder Passwort ist falsch');
     exit(1);
}
}
?>