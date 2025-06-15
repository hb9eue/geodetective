<?php
session_start();
 
   include("../templatelogin.php");  


   ?>

<center>


<h1><?registertitle?></h1>

<?=registerexplain?>
    <form action="checkregister.php" method="post">
        <input type="hidden" name="scoutgroup" value="<?=$scoutgroup?>" />
        <input type="text" name="username" placeholder="<?=username?>" required>
        <input type="password" name="password" placeholder="<?=password?>" required>
        <input type="password" name="password2" placeholder="<?=repeatpassword?>" required> 
        <button type="submit"><?=registerbutton?></button>
 <?php
         if(isset($msg)) {
          
         echo'<br><span style="color:red;">'.constant($msg).'<br></span>';
       }
       ?>   
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
