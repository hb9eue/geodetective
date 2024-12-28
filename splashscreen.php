<?php
/*
 * Created on 27.10.2024
 * updated on 27.10.2024
 *
 
 */#

  include("./templatelogin.php");
  ?>

<center>
<img src="images/GeoDetective-JOTA-JOTI.png" class="responsive">

<h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Benutzername" ><br>
        <input type="password" name="password" placeholder="Passwort" >
        <br>
        <?php
       
        if($msg!='') {
          echo'<span style="color:red;">'.$msg.'<br></span>';
        }
        ?>   
 <button type="submit" name="login">Anmelden</button>
 <button type="submit" name="register">Registrieren</button>
    </form>



</center>

<?php
  include("./templateunten.php");
  ?>
