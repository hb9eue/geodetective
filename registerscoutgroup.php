<?php
session_start();
 
   include("./templateoben.php");  


   ?>

<center>


<h1>Neuer Benutzer</h1>

<form action="register.php" method="post">
    Wähle bitte dein Pfadigruppe sie hier aus:<br><br>
    
    
    <?php
       echo '<select id="scoutgroup" name="scoutgroup">'; 
       $result = $conn->query("SELECT * FROM scoutgroup");
       $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
       foreach($datensaetze as $datensatz) {
            echo '<option value = "'.$datensatz["id"].'">' .$datensatz["name"] .'" - "'.$datensatz["association"].'>';
       }
       echo '</select><br><br>';
    ?>
    <button type="submit">weiter</button><br><br>
    </form>
    
    <form action="checkgroupregister.php" method="post">
    
    Sollte deine Gruppe nicht aufgeführt sein, fülle bitte folgende Felder aus:<br><br>
        <input type="text" name="name" placeholder="Name deiner Pfadigruppe" required>
        <input type="text" name="association" placeholder="Name deines Pfadfinderverbands" required>
        <input type="text" name="city" placeholder="Aus welchem Ort kommt ihr?" required>
        Land:
        <select id="country" name="country" required>
              <option value="hb9">Schweiz</option>
              <option value="dl">Deutschland</option>
              <option value="oe">Österreich</option>
              <option value="lx">Luxemburg</option>
        </select><br><br>
        <input type="text" name="jid" placeholder="Wie lautet euer JID-Code?">  
        <input type="text" name="contact" placeholder="Wie seid Ihr beim JOTA/JOTI erreichbar?">  
        <?php
        if($msg!='') {
         echo'<span style="color:red;">'.$msg.'<br></span>';
       }
       ?>  
        <button type="submit">Neue Pfadfindergruppe registrieren</button>
    </form>



</center>

<?php
  include("./templateunten.php");
  ?>
