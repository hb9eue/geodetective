
 
<?php

 
   include("./templateoben.php");  

  ?>
   <h2>Tippabagabe</h2>
   Bei Geodetectives geht es darum möglichst genau den Standort des Fotografen von Bildern zu
   bestimmen. Suche dir zuerst ein Bild aus für das du den Standort erraten nöchtest:
   
   <form action="guess.php" method="post">
   Klicke auf ein Bild um einen Tipp abzugeben<br>
<?php   
   $sql="SELECT * FROM image WHERE eventid='".$_SESSION['eventid']."' and accepted=1 ";
   
   $result = $conn->query($sql);

   $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
   foreach($datensaetze as $datensatz) {
    $filename=$datensatz['filename'];    
    $imageid=$datensatz['id'];     

    echo '
    <button type="submit" id="chosenimage" name="chosenimage" value="'.$imageid.'">
        <img src="uploads/'.$filename.'" style="width: 100%;max-width: 200px;margin-top: 20px;">
      </button>    
    
    
        
       <br> 
       <br> 
       ';
   }
   ?>

</form>






<?php
  include("./templateunten.php");
  ?>
