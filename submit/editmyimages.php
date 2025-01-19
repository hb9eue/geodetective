<?php

 
   include("../templateoben.php");  

  ?>

<script>
function wirklichloeschen() {
    if (confirm("<?=reallydelete?>")) {
    this.form.submit();
  } else {
    return false;
  }
  
}
</script>

   <form action="editimage.php" method="post">
  



<?php   
  if(isset($mode) && $mode=='admin' && $_SESSION['role']=='admin') {
   $sql="SELECT * FROM image WHERE  eventid='".$_SESSION['eventid']."' ";
   echo'<H1>Administratormodus</H1>';
  }
  else {   
   $sql="SELECT * FROM image WHERE userid='".$_SESSION['userid']."' and eventid='".$_SESSION['eventid']."' ";
  }
   $result = $conn->query($sql);

   $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
   if($result->num_rows==0)
   {
      echo editmyimagesnomimages;
   }
   else {
      echo editmyimagesclickimage;
   }
   foreach($datensaetze as $datensatz) {
    $filename=$datensatz['filename'];    
    $imageid=$datensatz['id'];     

    echo '
    <button type="submit" id="chosenimage" name="chosenimage" value="'.$imageid.'">
        <img src="../uploads/'.$filename.'" style="width: 100%;max-width: 200px;margin-top: 20px;">
      </button>    
    ';
    
    if (isset($mode) && $mode=='admin' && $_SESSION['role']=='admin') {

      echo '<br><br><button type="submit" id="accept" name="accept" value="'.$imageid.'">';
      if(!$datensatz['accepted']) {echo editmyimagesaccept;}else{echo editmyimagesdecline;};  
      echo'</button> ';

      echo'<button onclick="return wirklichloeschen()" id="delete" name="delete" value="'.$imageid.'">'.buttondelete.'</button>';
      }

   


      echo'  
       <br> 
       <br> 
       ';
   }
   ?>

</form>

<button  onclick="window.location.href='../menu/main.php'"><?=buttonback?></button>




<?php
  include("../templateunten.php");
  ?>
