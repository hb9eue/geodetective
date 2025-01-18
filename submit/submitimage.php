<?php
session_start();
 
   include("../templateoben.php");  
   
   $result = $conn->query("SELECT * FROM user WHERE id='".$_SESSION['userid']."'");
   $datensatz = $result->fetch_assoc();

   ?>

<center>


<h1><?=submitimagetitle?></h1>
<?=submitimageexplain?>
    <form action="checksubmitimage.php" method="post" enctype="multipart/form-data">
    <img src="../images/photo.jpg" class="responsive">
    <br>   
   <input id="uploadedimage" type="file" accept="image/* , text/plain"  name="uploadedimage" />
   <!--<input id="uploadedimage" type="file"  name="uploadedimage" />-->
   
   
    
    
    <br /><br />
    <input type="submit" value="<?=buttonupload?>" />
    <input type="submit" name='abbrechen' value='<?=buttoncancel?>'/>
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
