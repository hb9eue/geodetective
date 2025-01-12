<?php
session_start();
 
   include("../templateoben.php");  


   ?>

<script>
function wirklichloeschen() {
    if (confirm("Soll das Event wirklich unwiderruflich gelöscht werden?")) {
    this.form.submit();
  } else {
    return false;
  }
  
}
</script>
<center>


<h1>Event verwalten</h1>

<form action="editevent.php" method="post">
    <br><br>
    
    <table id='tabelle'>
    <tr>
        <th>Name</th>
        <th>Beginn</th>
        <th>Ende</th>
        <th>Bilder einreichen ab</th>
        <th>Bilder einreichen bis</th>
        <th>Ändern</th>
        
        <tr>
    <?php
      
       $result = $conn->query("SELECT * FROM event");
       $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
       foreach($datensaetze as $datensatz) {
            echo '
            <tr>
            <td>'.$datensatz["name"].'</td>
            <td>'.$datensatz["starttimestamp"].'</td>
            <td>'.$datensatz["endtimestamp"].'</td>
            <td>'.$datensatz["submitfrom"].'</td>
            <td>'.$datensatz["submituntil"].'</td>
            <td><button id="edit" name="edit" value="'.$datensatz["id"].'">Ändern</button></td>
            
            </tr>
           ';
       }
       
    ?>
   </table>
    </form>
    <br><br>
    <button  onclick="window.location.href='admin.php'">Zurück</button>   


</center>

<?php
  include("../templateunten.php");
  ?>
