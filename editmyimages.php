
 
<?php

 
   include("./templateoben.php");  

  ?>
  
   <form action="editimage.php" method="post">
  



<?php   
   $sql="SELECT * FROM image WHERE userid='".$_SESSION['userid']."' and eventid='".$_SESSION['eventid']."' ";
   
   $result = $conn->query($sql);

   $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
   if($result->num_rows==0)
   {
      echo' Du hast bisher keine Bilder eingereicht.';
   }
   else {
      echo' Klicke auf ein Bild um es zu bearbeiten<br>';
   }
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

<button  onclick="window.location.href='main.php'">Zurück</button>




<?php
  include("./templateunten.php");
  ?>
