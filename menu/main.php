<?php
/*
 * Created on 27.10.2024
 * updated on 27.10.2024
 *
 
 */#

  include("../templateoben.php");
  ?>

<center>


<h1>Hauptmenü</h1>
    <form action="checkmain.php" method="post">
 <?php       
 if ($_SESSION['role']=='admin') {
 echo'<button type="submit" name="admin">Admin</button><br><br>';
 }
 ?>
 <button type="submit" name="spielen">Spielen</button><br><br>
 <button type="submit" name="einreichen">Meine Bilder</button><br><br>
 <button type="submit" name="ergebnisse">Auflösung</button><br><br>
 <button type="submit" name="einstellungen">Einstellungen</button><br><br>
 <button type="submit" name="abmelden">Abmelden</button>
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
