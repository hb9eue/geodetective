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
        <?php
         if($msg!='') {
         echo'<span style="color:red;">'.$msg.'<br></span>';
       }
       ?>      
 <button type="submit"><?=registerbutton?></button>
    </form>



</center>

<?php
  include("../templateunten.php");
  ?>
