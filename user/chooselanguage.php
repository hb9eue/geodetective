<?php
session_start();
 
   include("../templatelogin.php");  


   ?>

<center>


<h1>Choose language</h1>
Sprache wählen / choose language / choisir la langue /
taal kiezen
    <form action="checklanguage.php" method="post">
    <select id="language" name="language" required>
              
              <option value="de" <?php if ($_SESSION['language'] =='de') {echo ' selected ';} ?>>Deutsch</option>
              <option value="en" <?php if ($_SESSION['language'] =='en') {echo ' selected ';} ?>>English </option>
              <option value="fr" <?php if ($_SESSION['language'] =='fr') {echo ' selected ';} ?>>Français  </option>
              
             
        </select>

 <button type="submit"><?=buttonok?></button>
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
