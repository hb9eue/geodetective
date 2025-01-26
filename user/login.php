<?php
session_start();
 
   include("../templateloginohne.php");  


  if  (isset($username) and isset($password)){
      
$result = $conn->query("SELECT * FROM user WHERE username='".$username."'");
$datensatz = $result->fetch_assoc();


if(isset($register)) {
    echo "<script>window.location.href='chooselanguage.php';</script>";
    //header('location: chooselanguage.php');
    exit(1);
}


if(password_verify($password, $datensatz['password']) && $username==$datensatz['username']) 
{
    //echo 'Passwort stimmt!';
    $_SESSION['userid'] = $datensatz['id'];
    $_SESSION['role'] = $datensatz['role'];
    $_SESSION['language'] = $language;
    $_SESSION['userscoutgroup'] = $datensatz['scoutgroup'];

    include('locale/' . $_SESSION['language'] . '.php');
    
    include("loadevent.php");  

    
       
    echo "<script>window.location.href='../menu/main.php';</script>";
    exit;
    //header('location: ../menu/main.php');
    // exit(1);
} 
else
{
    //echo 'Passwort ist falsch!';
    echo "<script>window.location.href='../splashscreen.php?msg=".htmlentities(errorwrongpassword)."';</script>";
    exit;
    //header('location: ../splashscreen.php?msg='.errorwrongpassword);
    // exit(1);
}
}

?>