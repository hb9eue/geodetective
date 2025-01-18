
 
<?php

 
   include("../templateoben.php");  

  ?>
   <h2>Auflösung</h2>
   
   
   <form action="solution.php" method="post">
  
<?php   
   
   $limit=0;

   $startzeit = new DateTime($_SESSION['starttimestamp']);
   $aktuellezeit = new DateTime();
  
   

/*
Event:
Ein Event hat eine Start und Endezeit
Nach beginn der Startzeit wird das Event in Iatervalle aufgeteilt.
In jedem Intervall werden x weitere der eingereichten Bilder zum arten freigegeben.
Nach ablauf des Intervalls kann kein Tipp mehr abegegeben werden und die Lösung
sowie alle Tipps erscheinen unter "Ergebnisse".
Die Ergebnisse bleiben bis zum Eventende abrufbar. 
*/
  
   //event läuft
    if ($startzeit<$aktuellezeit )
   {
    
    //intervallnummer bestimmen: aktuellezeit-startzeitpunkt in stunden / interval
    $diff_mins = abs($startzeit->getTimestamp() - $aktuellezeit->getTimestamp()) / 60;
    $diff_hours=floor($diff_mins/60);  
    $intervallnummer=floor($diff_hours/$_SESSION['interval'])+1; 
    //anzahl der bereits veröffentlichen Bilder:
    $bildanzahlpublished=$intervallnummer*$_SESSION['imagesperinterval'];
    //anzahl der Bilder deren Dealine bereits abgelaufen ist
    $bildanzahldeadline=($intervallnummer-1)*($_SESSION['imagesperinterval']);
       
     
   }

     
   $sql="SELECT * FROM image WHERE eventid='".$_SESSION['eventid']."' and accepted=1  order by submitted limit ".$bildanzahldeadline ;
   $result = $conn->query($sql);
    
   if($result->num_rows==0)
   {
      echo' Es gibt noch keine Ergebnisse';
   }
   else {
      echo'Für folgende Bilder ist keine Tippabgabe mehr möglich.<br>
   Klicke auf ein Bild um des Rätsels Lösung anzusehen:<br><br>';
   }

   $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
   foreach($datensaetze as $datensatz) {
    $filename=$datensatz['filename'];    
    $imageid=$datensatz['id']; 
     

    echo '
    <button type="submit" id="chosenimage" name="chosenimage" value="'.$imageid.'">
        <img src="../uploads/'.$filename.'" style="width: 100%;max-width: 200px;margin-top: 20px;">
      </button>    
      <br><br>
    '.$datensatz['description'].'
    <br><br>
        '.$datensatz['solutiontext'].'
       <br> 
       <br> 
       ';
   }

   
   ?>

</form>

<button  onclick="window.location.href='../menu/main.php'">Zurück</button>




<?php
  include("../templateunten.php");
  ?>
