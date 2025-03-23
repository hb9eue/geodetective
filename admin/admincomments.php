<?php

 
   include("../templateoben.php");  

   if (isset($allcomments)) {
    echo'<button  onclick="window.location.href=\'admincomments.php\'">Nur nicht freigegebe Kommentare anzeigen</button>'; 
    
    $sql="SELECT comment.id,filename,username,comment.submitted,comment.accepted,comment.text FROM comment join user on comment.userid=user.id join image on comment.imageid=image.id order by comment.submitted desc";} 
    else {
      echo'<button  onclick="window.location.href=\'admincomments.php?allcomments=1\'">Alle Kommentare anzeigen</button>';    
   $sql="SELECT comment.id,filename,username,comment.submitted,comment.accepted,comment.text FROM comment join user on comment.userid=user.id join image on comment.imageid=image.id WHERE  comment.accepted=0 order by comment.submitted desc";
  }

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

   <form action="editcomments.php" method="post">

<?php   
   $result = $conn->query($sql);

  $kommentare = $result->fetch_all(MYSQLI_ASSOC);
  foreach($kommentare as $kommentar) {
   echo'<img src="../uploads/'.$kommentar['filename'].'" style="width: 100%;max-width: 100px;margin-top: 20px;"><br><br>'; 
   echo '<br><br><b>'.$kommentar['username'].' ';
   echo $kommentar['submitted'];
   echo ':</b><br>';
   
   echo $kommentar['text'];

   echo '<br><br><button type="submit" id="accept" name="accept" value="'.$kommentar['id'].'">';
   if($kommentar['accepted']==0) {echo editmyimagesaccept;}else{echo editmyimagesdecline;};  
   echo'</button> ';

   echo'<button onclick="return wirklichloeschen()" id="delete" name="delete" value="'.$kommentar['id'].'">'.buttondelete.'</button>';
   echo'  
   <br> 
   <br> 
   ';

  }
   ?>

</form>

<button  onclick="window.location.href='admin.php'"><?=buttonback?></button>




<?php
  include("../templateunten.php");
  ?>
