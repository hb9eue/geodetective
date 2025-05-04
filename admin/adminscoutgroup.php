<?php
session_start();
 
   include("../templateoben.php");  
   if ($_SESSION['role']!='admin' ) {
    echo "<script>window.location.href='../menu/main.php';</script>";
    exit(1);
 } 

   ?>

<script>
function wirklichloeschen() {
    if (confirm("Soll die Gruppe wirklich unwiderruflich gelöscht werden?")) {
    this.form.submit();
  } else {
    return false;
  }
  
}
</script>
<center>


<h1>Pfadigruppe verwalten</h1>

<form action="editscoutgroup.php" method="post">
    Vorhandene Gruppen:<br><br>
    
    <table id='tabelle'>
    <tr>
        <th>Name</th>
        <th>Land</th>
        <th>Stadt</th>
        <th>Kontakt</th>
        <th>Verband</th>
        <th>JID</th>
        <th>Ändern</th>
        <th>Löschen</th>
        <tr>
    <?php
      
       $result = $conn->query("SELECT * FROM scoutgroup");
       $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
       foreach($datensaetze as $datensatz) {
            echo '
            <tr>
            <td>'.$datensatz["name"].'</td>
            <td>'.$datensatz["country"].'</td>
            <td>'.$datensatz["city"].'</td>
            <td>'.$datensatz["contact"].'</td>
            <td>'.$datensatz["association"].'</td>
            <td>'.$datensatz["jid"].'</td>
            <td><button id="edit" name="edit" value="'.$datensatz["id"].'">Ändern</button></td>
            <td><button onclick="return wirklichloeschen()" id="delete" name="delete" value="'.$datensatz["id"].'">löschen</button></td>
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
