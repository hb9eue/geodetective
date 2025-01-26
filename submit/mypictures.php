<?php
/*
 * Created on 27.10.2024
 * updated on 27.10.2024
 *
 
 */#

  include("../templateoben.php");
  ?>

<center>


<h1><?=mypicturestitle?></h1>
    <form action="checkmypictures.php" method="post">
        
 <button type="submit" name="einreichen"><?=mypicturesnew?></button><br><br>
 <button type="submit" name="bearbeiten"><?=mypicturesedit?></button><br><br>
 
    </form>
    <button  onclick="window.location.href='../menu/main.php'"><?=buttonback?></button>


</center>

<?php
  include("../templateunten.php");
  ?>
