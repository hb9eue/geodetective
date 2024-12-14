<?php
session_start();
 
   include("./templateoben.php");  


   ?>

<center>


<h1>Neuer Benutzer</h1>
Du bist noch nicht registriert. Bitte fülle das Formular aus um dich zu registrieren
    <form action="checkregister.php" method="post">
        <input type="hidden" name="scoutgroup" value="<?=$scoutgroup?>" />
        <input type="text" name="username" placeholder="Benutzername" required>
        <input type="password" name="password" placeholder="Passwort" required>
        <input type="password" name="password2" placeholder="Passwort wiederholen" required> 
        <?php
         if($msg!='') {
         echo'<span style="color:red;">'.$msg.'<br></span>';
       }
       ?>      
 <button type="submit">Neuen Benutzer registrieren</button>
    </form>



</center>

<?php
  include("./templateunten.php");
  ?>
