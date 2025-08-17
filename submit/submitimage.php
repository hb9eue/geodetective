<?php
session_start();
 
   include("../templateoben.php");  
   
   $result = $conn->query("SELECT * FROM user WHERE id='".$_SESSION['userid']."'");
   $datensatz = $result->fetch_assoc();

   
$submitfrom = new DateTime($_SESSION['submitfrom']);   
$submitfrom=$submitfrom->getTimestamp();
$submituntil = new DateTime($_SESSION['submituntil']); 
$submituntil=$submituntil->getTimestamp();
$aktuellezeit = new DateTime();
$aktuellezeit=$aktuellezeit->getTimestamp();
$submitok=false;
if ($aktuellezeit>=$submitfrom && $aktuellezeit<=$submituntil) {
  $submitok=true;
}



   ?>

<center>


<h1><?=submitimagetitle?></h1>
<?=submitimageexplain?>
    <hr>
    <form action="checksubmitimage.php" method="post" enctype="multipart/form-data">
    <img src="../images/photo.jpg" class="responsive">
    <br> 
    <label for="uploadedimage"><?php echo "Limmit: " . ini_get('upload_max_filesize'); ?></label>
    <?php if (!$submitok) {echo'<H2>'; echo submitdiabled; echo'</H2><br>';}?> 
   <input id="uploadedimage" type="file" accept="image/* , text/plain"  name="uploadedimage" 
   <?php if (!$submitok) {echo' disabled ';}; ?>
   
   />
   <!--<input id="uploadedimage" type="file"  name="uploadedimage" />-->
   
   
    
    
    <br />
    <br />
    <input type="submit" value="<?=buttonupload?>" <?php if (!$submitok) {echo' disabled ';}; ?>/>
    <input type="reset" name='abbrechen' value='<?=buttoncancel?>'/>
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
