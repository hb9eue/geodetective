<?php
session_start();
 
   include("./templateoben.php");  
   
   $result = $conn->query("SELECT * FROM user WHERE id='".$_SESSION['userid']."'");
   $datensatz = $result->fetch_assoc();

   ?>

<center>


<h1>Bild einreichen</h1>
Klicke auf den Button um ein Bild hochzuladen.
Beachte dass auf dem Bild etwas Pfadfinderisches zu sehen sein muss und auch genug
Hinweise enthalten muss um den Aufnhameort erraten zu können.
    <form action="checksubmitimage.php" method="post" enctype="multipart/form-data">
    <img src="images/photo.jpg" class="responsive">
    <br>   
   <input id="uploadedimage" type="file" accept="image/* , text/plain"  name="uploadedimage" />
   <!--<input id="uploadedimage" type="file"  name="uploadedimage" />-->
   
   
    
    
    <br /><br />
    <input type="submit" value="Upload" />
    <input type="submit" name='abbrechen' value='abbrechen'/>
    </form>



</center>

<?php
  include("./templateunten.php");
  ?>
