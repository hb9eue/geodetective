<?php
/*
 * Created on 27.10.2024
 * updated on 27.10.2024
 *
 
 */#

  include("./templateoben.php");
  ?>

<center>
<img src="images/GeoDetective-JOTA-JOTI.png" class="responsive">

<h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Benutzername" >
        <input type="password" name="password" placeholder="Passwort" >
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
