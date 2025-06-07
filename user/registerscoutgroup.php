<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
 
   include("../templatelogin.php");  


   ?>

<center>


<h1>Neuer Benutzer</h1>

<form action="register.php" method="post">
    <?=registergroupchoose?><br><br>
    
    
    <?php
       echo '<select id="scoutgroup" name="scoutgroup">'; 
       $result = $conn->query("SELECT * FROM scoutgroup order by association,name");
       $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
       foreach($datensaetze as $datensatz) {
            echo '<option value = "'.$datensatz["id"].'">' .$datensatz["association"] .' - '.$datensatz["name"];
       }
       echo '</select><br><br>';
    ?>
    <button type="submit"><?=next?></button><br><br>
    </form>
    <br><br>
    <font color="#9900FF"> <?=registergroupor?><br><br>
    <form action="checkgroupregister.php" method="post">
    
    <?=registergroupnew?><br><br><br><br></font color>
        <input type="text" name="name" placeholder="<?=registergroupname?>" required>
        <input type="text" name="association" placeholder="<?=registergroupassociation?>" required>
        <input type="text" name="city" placeholder="<?=registergroupcity?>" required><br>
        <?=registergroupcountry?>:<select id="country" name="country" required>
              <option value="Schweiz">Schweiz</option>
              <option value="Deutschland">Deutschland</option>
              <option value="Österreich">Österreich</option>
              <option value="Luxemburg">Luxemburg</option>
        </select><br><br>
        <input type="text" name="jid" placeholder="<?=registergroupjid?>">  
        <input type="text" name="contact" placeholder="<?=registergroupcontact?>">  
        <?php
        if(isset($msg)) {
         echo'<span style="color:red;">'.$msg.'<br></span>';
       }
       ?>  
        <button type="submit"><?=registergroupbutton?></button>
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
