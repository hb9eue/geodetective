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
              <option value="de">Deutsch</option>
              <option value="en">English</option>
              <option value="fr">Français</option>
              
             
        </select>

 <button type="submit"><?=buttonok?></button>
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
