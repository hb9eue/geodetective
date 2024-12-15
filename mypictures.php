<?php
/*
 * Created on 27.10.2024
 * updated on 27.10.2024
 *
 
 */#

  include("./templateoben.php");
  ?>

<center>


<h1>Meine Bilder</h1>
    <form action="checkmypictures.php" method="post">
        
 <button type="submit" name="einreichen">Neues Bild einreichen</button><br><br>
 <button type="submit" name="bearbeiten">Meine Bilder bearbeiten</button><br><br>
 
    </form>



</center>

<?php
  include("./templateunten.php");
  ?>
