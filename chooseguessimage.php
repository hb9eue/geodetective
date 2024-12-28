
 
<?php

 
   include("./templateoben.php");  

  ?>
   <h2>Tippabgabe</h2>
   
   <form action="guess.php" method="post">
   
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

  
$sql="SELECT * FROM image WHERE eventid='".$_SESSION['eventid']."' and accepted=1  order by submitted limit ".$bildanzahlpublished." offset ".$bildanzahldeadline ;
//$sql="SELECT * FROM image WHERE eventid='".$_SESSION['eventid']."' and accepted=1 ";
   
   $result = $conn->query($sql);

   $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
   $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
   
   if($result->num_rows==0)
   {
      echo' Im Moment gibt es keine Bilder';
   }
   else {
echo'Bei Geodetectives geht es darum möglichst genau den Standort des Fotografen von Bildern zu
   bestimmen. Suche dir zuerst ein Bild aus für das du den Standort erraten möchtest:
   Klicke auf ein Bild um einen Tipp abzugeben<br>';
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
