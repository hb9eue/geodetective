<?php
session_start();
 
   include("./templateoben.php");  
   result = $conn->query("SELECT * FROM image WHERE id='".$_SESSION['imageid']."'");

   $datensatz = $result->fetch_assoc();
$filename=$datensatz['filename'];
   ?>

<center>
<img src="uploads/<?=$filename>" class="responsive">


    
    <form action="checkeditimage.php" method="post">
    
    <br><br>
        <input type="text" name="description" placeholder="Bildbeschreibung" required>
        <?php
        if ($_SESSION['role']=='admin'){       
            echo'<input type="checkbox" id="accepted" name="accepted" value="accepted"'; 
            if ($datensatz['accepted'] == 1) { echo' checked '; }; 
            echo'><label for="accepted">Akzeptiert:</label><br>';
        }?>
        
        
        <button type="submit">Speichern</button>
    </form>



</center>

<?php
  include("./templateunten.php");
  ?>
