<?php
session_start();
 
   include("../templateoben.php");  
   if ($_SESSION['role']!='admin' && $_SESSION['role']!='moderator') {
    echo "<script>window.location.href='../menu/main.php';</script>";
    exit(1);
 } 

   ?>

<script>
function wirklichloeschen() {
    if (confirm("Soll der User wirklich unwiderruflich gelöscht werden?")) {
    this.form.submit();
  } else {
    return false;
  }
  
}
</script>
<center>


<h1>User verwalten</h1>

<form action="edituser.php" method="post">
    <br><br>
    
    <table id='tabelle'>
    <tr>
        <th>Name</th>
        <th>Gruppe</th>
        <th>Rolle</th>
        <th>Ändern</th>
        <th>Löschen</th>
        <tr>
    <?php
      
       $result = $conn->query("SELECT user.id,username,name,role FROM user left join scoutgroup on user.scoutgroup=scoutgroup.id");
       $datensaetze = $result->fetch_all(MYSQLI_ASSOC);
       foreach($datensaetze as $datensatz) {
            echo '
            <tr>
            <td>'.$datensatz["username"].'</td>
            <td>'.$datensatz["name"].'</td>
            <td>'.$datensatz["role"].'</td>
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
