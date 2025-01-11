<?php
/*
 * Created on 31.12.2024
 * updated on 31.12.2024
 *
 
 */#

  
  include("../templateoben.php");
  if ($_SESSION['role']!='admin') {
    header('location: ../menu/main.php');
    exit(1);
 } 
?>

<center>


<h1>Administration</h1>
    <form action="checkadmin.php" method="post">
 


 <button type="submit" name="adminuser">Userverwaltung</button><br><br>
 <button type="submit" name="admingroup">Gruppenverwaltung</button><br><br>
 <button type="submit" name="adminevent">Eventverwaltung</button><br><br>
 <button type="submit" name="images">Bilderverwaltung</button><br><br>
 <button type="submit" name="back">Hauptmenü</button>

 </form>



</center>

<?php
  include("../templateunten.php");
  ?>
