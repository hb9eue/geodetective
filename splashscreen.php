<?php
/*
 * Created on 27.10.2024
 * updated on 27.10.2024
 * 
 * Wenn fertig dann:
 * <option value="fr">Français</option>
 * <option value="nl">Nederlands</option>
 *
 
 */#

  include("./templatelogin.php");
  ?>

<center>
<img src="images/GeoDetective-JOTA-JOTI.png" class="responsive">

<h1>Login</h1>
    <form action="user/login.php" method="post">
      Language:
    <select id="language" name="language" required>
              <option value="de" <?php if ($_SESSION['language'] =='de') {echo ' selected ';} ?>>Deutsch</option>
              <option value="en" <?php if ($_SESSION['language'] =='en') {echo ' selected ';} ?>>English </option>
              <option value="fr" <?php if ($_SESSION['language'] =='fr') {echo ' selected ';} ?>>Français  </option>
              
             
        </select><br><br>
        <input type="text" name="username" placeholder="Benutzername" ><br>
        <input type="password" name="password" placeholder="Passwort" >
        <br>
        <?php
       
        if(isset($msg)) {
          echo'<span style="color:red;">'.errorwrongpassword.'<br></span>';
        }
        ?>   
 <button type="submit" name="login">Login</button>
 <button type="submit" name="register">Register</button>
    </form>



</center>

<?php
  include("./templateunten.php");
  ?>
