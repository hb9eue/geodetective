<?php
session_start();
 
   include("../templateoben.php");  

       
$result = $conn->query("SELECT * FROM scoutgroup WHERE name='".$name."'");

$datensatz = $result->fetch_assoc();


if ($result->num_rows)  {
    header("location: registerscoutgroup.php?msg='Der Gruppenname ist bereits angelegt, bitte aus der Liste auswählen.'");
     exit(1);
}

if (strlen($jid)>0 && strlen($jid)<>6)  {
    header("location: registerscoutgroup.php?msg='Der JID-Code muss sechstellig sein.'");
     exit(1);
}

//Wenn alle OK ist, Gruppe anlegen


$conn->query("INSERT INTO scoutgroup (name, country,city,contact,association,jid) VALUES ('".$name."', '".$country."', '".$city."', '".$contact."', '".$association."', '".$jid."')");

//id holen
$result = $conn->query("SELECT * FROM scoutgroup WHERE name='".$name."'");

$datensatz = $result->fetch_assoc();


header("location: register.php?scoutgroup=".$datensatz['id']);
exit(1);
  



?>