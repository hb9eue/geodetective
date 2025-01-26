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
  
  $sql="";
  if  (isset($username) and isset($password)){
 $hash = password_hash($password, PASSWORD_DEFAULT);

 $sql0="SELECT * FROM user WHERE id<>".$_SESSION['userid']." and username='".$username."'";
 $result = $conn->query($sql0);
 $datensatz = $result->fetch_assoc();
 

if ($result->num_rows)  {
    echo "<script>window.location.href='configure.php?msg=".htmlentities(errorusername)."';</script>";
   
     exit(1);
}

if ($password!=$password2){
    echo "<script>window.location.href='configure.php?msg=".htmlentities(errorpasswordidentity)."';</script>";
   
     exit(1);
}else {
$sql="UPDATE user set username='".$username."',  password='".$hash."' where id=".$_SESSION['userid'];
echo $sql;
$_SESSION['userscoutgroup'] = $scoutgroup;
$conn->query($sql);
  }
}

if  (isset($username) and !isset($password)){
 
        $sql="UPDATE user set username='".$username."' where id=".$_SESSION['userid']; 
        $_SESSION['userscoutgroup'] = $scoutgroup;
        $conn->query($sql);
}
echo "<script>window.location.href='../menu/main.php';</script>";

exit(1);
  



?>