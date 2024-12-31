<?php
session_start();
 
   include("../templateoben.php");  
   
   $result = $conn->query("SELECT * FROM user WHERE id='".$_SESSION['userid']."'");
   $datensatz = $result->fetch_assoc();

   ?>

<center>


<h1>Account ändern</h1>
Du bist noch nicht registriert. Bitte fülle das Formular aus um dich zu registrieren
    <form action="checkconfigure.php" method="post">
    <?php
       echo '<select id="scoutgroup" name="scoutgroup">'; 
       $result2 = $conn->query("SELECT * FROM scoutgroup");
       $datensaetze = $result2->fetch_all(MYSQLI_ASSOC);
       foreach($datensaetze as $datensatz2) {
            echo '<option value = "'.$datensatz2["id"].'"';
            if ($datensatz["scoutgroup"]==$datensatz2["id"]) {echo' selected ';};
            echo'>' .$datensatz2["name"] .' - '.$datensatz2["association"];
       }
       echo '</select><br><br>';
    ?>
        <input type="text" name="username" placeholder="Benutzername" value='<?=$datensatz["username"] ?>' required>
        <input type="password" name="password" placeholder="Passwort" >
        <input type="password" name="password2" placeholder="Passwort wiederholen" > 
        <?php
       
       if($msg!='') {
         echo'<span style="color:red;">'.$msg.'<br></span>';
       }
       ?>      
 <button type="submit">Daten Ändern</button>
 <button type="submit" name='abbrechen'>Abbrechen</button>
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
