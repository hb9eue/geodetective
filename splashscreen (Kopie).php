<?php
/*
 * Created on 11.04.2007
 * updated pn 01.07.2012
 *
 
 */
include("../templateoben.php");


$sql='SELECT * from '.$db.' WHERE id='.$id;
$bildsql='SELECT * from '.$db.'bilder WHERE '.$db.'id='.$id.' ORDER by id';
$softwaresql='SELECT * from '.$db.'software WHERE artikelid='.$id;

$result=mysql_query($sql,$conn);
$anzahl=mysql_num_rows($result);
$row=mysql_fetch_array($result,MYSQL_ASSOC);

$bildresult=mysql_query($bildsql,$conn);
if ($bildresult) 
{
  $bildanzahl=mysql_num_rows($bildresult);
  $bildrow=mysql_fetch_array($bildresult,MYSQL_ASSOC);
} 
else { 
       $bildanzahl=0;
      }


$softwareresult=mysql_query($softwaresql,$conn);
if ($softwareresult)
{
$softwareanzahl=mysql_num_rows($softwareresult);
$softwarerow=mysql_fetch_array($softwareresult,MYSQL_ASSOC);
}
else
{
 $softwareanzahl=0;
}

//hintergrundbild

include("../hintergrundanimation.php");

//Content


echo' 
<div id="headline">
'.$row["headline"].'
</div>
<div id="summary">
'.nl2br($row["summary"]).'
</div>
';

echo'
<div id="text">
';

if ($bildanzahl>0 && trim($bildrow["datei"])!="")
{echo'<img src="'.$db.'bilder/'.$bildrow["datei"].'" align=center><br><br>';};
echo'
'.nl2br($row["text"]);

//UNterartikelausgabe
if ($row["unterartikel"]=="zeitung")
{
 include("newsmitspalten.php");
}
if ($row["unterartikel"]=="vorschau")
{
 include("vorschau.php");
}
if ($row["unterartikel"]=="unterartikel")
{
 include("unterartikel.php");
}
if ($row['oberartikelid']>0)
{
echo'<br><br><A class="blue" href="showarticle.php?db=artikel&id='.$row["oberartikelid"].'">zurueck zum Hauptartikel</A>';
echo'<br><br>';
}


//Downloads

if($softwareanzahl>0)
{
echo'<table> <tr>';
for($i=0;$i<$softwareanzahl;$i++)
{ 
  if ($i>0) {$softwarerow=mysql_fetch_array($softwareresult,MYSQL_ASSOC);};
  
  echo' <td><A href="'.$db.'software/'.$softwarerow[datei].'">'.$softwarerow[caption].'</A></td>';
  if ($i % 2 ==0) {echo' </tr><tr>';};

}
echo'
</tr></table>
<br><br>
';

}




//weitere Bilder
if($bildanzahl>0)
{
echo'<br><br><br>';
echo'
<table> <tr>
';
for($i=0;$i<$bildanzahl;$i++)
{ 
  if ($i>0) {$bildrow=mysql_fetch_array($bildresult,MYSQL_ASSOC);};
  
  echo' <td><A href="showpicture.php?artikelid='.$id.'&db='.$db.'&id='.$bildrow["id"].'"><img src="'.$db.'bilder/'.$bildrow["datei"].'"
width="100px"><br>'.$bildrow["caption"].' </A><td>';
  if ($i % 5 ==0) {echo' </tr<tr>';};

}
echo'</table>';

}
echo'<br><br><br><br><br><br><br><br><br><br><br><br><br>';
echo'<br><br><br><br><br><br><br><br><br><br><br><br><br>';
echo'<br><br><br><br><br><br><br><br><br><br><br><br><br>';
include("../templateunten.php");


?>
