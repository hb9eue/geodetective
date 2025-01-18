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
 echo'<button type="submit" name="admin">'.menuadmin.'</button><br><br>';
 }
 ?>
 <button type="submit" name="spielen"><?=menuplay?></button><br><br>
 <button type="submit" name="einreichen"><?=menumyimages?></button><br><br>
 <button type="submit" name="ergebnisse"><?=menusolution?></button><br><br>
 <button type="submit" name="einstellungen"><?=menuoptions?></button><br><br>
 <button type="submit" name="abmelden"><?=menulogout?></button>
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
