<?php
session_start();
 
   include("../templateoben.php");  
  
    $sql="SELECT * from guess WHERE imageid=".$_SESSION['imageid']." and userid=".$_SESSION['userid'];
    $guessresult = $conn->query($sql);
    
    $jid="";
    if ($guessresult->num_rows)  {
        $guessdatensatz = $guessresult->fetch_assoc();
        $jid=$guessdatensatz['jid'];
    
    }
?>

<center>


<h1><?=buttonguessjid?></h1>

 
    <form action="checkguessjid.php" method="post">
    
        <label for="jid">Jid:</label> 
        <input type="text" name="jid" value="<?=$jid?>"><br>
        <?php
        if($msg!='') {
         echo'<span style="color:red;">'.$msg.'<br></span>';
       }
       ?>  
        <button type="submit"><?=buttonsave?></button><br><br>
        
    </form>
    <button  onclick="window.location.href='guess.php?chosenimage=<?=$_SESSION['imageid']?>'"><?=buttonback?></button>


</center>

<?php
  include("../templateunten.php");
  ?>
