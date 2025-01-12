<?php
session_start();
 
   include("../templateoben.php");  

 $edituserid=$_SESSION['edituserid'];      

$sql0="SELECT * FROM user WHERE id<>".$edituserid." and username='".$username."'";
$result = $conn->query($sql0);
$datensatz = $result->fetch_assoc();

if ($result->num_rows)  {
    header("location: edituser.php?msg='Der Username existiert bereits. Bitte wähle einen anderen.");
     exit(1);
}


$sql="update user set username='".$username."', scoutgroup='".$scoutgroup."',role='".$role."' ";

if ($password<>"*****") {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql=$sql.",password='".$hash."'";
    
}
$sql=$sql." where id=".$edituserid;
$conn->query($sql);


header("location: adminuser.php");
exit(1);
  



?>