<?php
session_start();
 
   include("../templateoben.php");  


  

if(isset($reposition)) {
    echo "<script>window.location.href='map.php';</script>";
    //header('location: map.php');
     exit(1);
}

if(isset($save)) {
    
    if(strlen($imagedescription)==0){
        echo "<script>window.location.href='editimage.php?msg=".htmlentities(errormissingdescription)."';</script>"; 
        header("location: editimage.php?msg=Bitte eine Bildbeschreibung eingeben");
         exit(1);
    }else {
        
   //Bildbeschreibung speichern und zum Hauptmenü
   $sql="update  image set description='".$imagedescription."',solutiontext='".$imagesolutiontext."',acceptedby=0,accepted=0,deadline='".hival."' where id=".$_SESSION['imageid'];
   echo $sql;
   $conn->query($sql);
   echo "<script>window.location.href='../menu/main.php';</script>"; 
   //header("location: ../menu/main.php");
   exit(1);



    }    


}



include("../templateunten.php"); 
?>