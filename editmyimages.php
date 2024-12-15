
 
<?php

 
   include("./templateoben.php");  

  ?>
  
   <form action="editimage.php" method="post">
   Klicke auf ein Bild im es zu bearbeiten<br>



<?php   
   $sql="SELECT * FROM image WHERE userid='".$_SESSION['userid']."' and eventid='".$_SESSION['eventid']."' ";
   
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
