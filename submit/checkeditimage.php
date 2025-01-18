<?php
session_start();
 
   include("../templateoben.php");  


  

if(isset($reposition)) {
    header('location: map.php');
     exit(1);
}

if(isset($save)) {
    
    if(strlen($imagedescription)==0){
        header("location: editimage.php?msg=Bitte eine Bildbeschreibung eingeben");
         exit(1);
    }else {
        
   //Bildbeschreibung speichern und zum Hauptmenü
   $sql="update  image set description='".$imagedescription."',solutiontext='".$imagesolutiontext."' where id=".$_SESSION['imageid'];
   echo $sql;
   $conn->query($sql);
   header("location: ../menu/main.php");
   exit(1);



    }    


}



include("../templateunten.php"); 
?>