<?php
session_start();
 
   include("./templateoben.php");  

  
  if  (isset($username) and isset($password)){
     
$result = $conn->query("SELECT * FROM user WHERE username='".$username."'");

$datensatz = $result->fetch_assoc();
//$hash = password_hash($password, PASSWORD_DEFAULT);

if ($result->num_rows)  {
    header("location: register.php?msg='Der Nutzername ist bereits vergeben'");
     exit(1);
}

if ($password!=$password2){
    header("location: register.php?msg='Die Passwörter stimmen nicht überein'");
     exit(1);
}

//Wenn alle OK ist, User anlegen
$hash = password_hash($password, PASSWORD_DEFAULT);
$conn->query("INSERT INTO user (username, scoutgroup,password) VALUES ('".$username."', '".$scoutgroup."', '".$hash."')");

//und einloggen

$_SESSION['userid'] = $datensatz['id'];
$_SESSION['role'] = $datensatz['role'];
header("location: main.php");
exit(1);
}  



?>