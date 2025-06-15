<?php
declare(strict_types=1);

if(session_status() !== PHP_SESSION_ACTIVE) session_start();

include('credentials.php');

$conn = mysqli_connect($server, $user, $pass,$dbase);

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
  //Alle GET Variablen einlesen
  foreach($_GET as $key => $val){$$key=htmlspecialchars($val);}
  foreach($_POST as $key => $val) {$$key=htmlspecialchars($val);}

  if (!isset($_SESSION['language'])) {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['fr', 'it', 'en', 'de', 'nl']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'de';
    $_SESSION['language']=$lang;
  }

  include('locale/' . $_SESSION['language'] . '.php');
  
  ?>
  
  
  
  

  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//DE">
  <html>
  <head>
  
  <title>JOTA-JOTI Geodetective</title>
  <meta http-equiv="content-type" content= "text/html; iso-8859-1">
  <meta name="robots" content= "INDEX,FOLLOW">
  <meta http-equiv="content-language" content= "de">
  <meta name="keywords" content= "JOTA, JOTI, Pfadfinder, Scouts, Spiel, ">
  <meta name="author" content= "Ralf Lüsebrink">
  <meta name="publisher" content= "Ralf Lüsebrink">
  <link rev="made" content= "rnh@gmx.net">
  <meta name="copyright" content= "Ralf Lüsebrink">
  <meta name="audience" content= "Alle">
  <meta name="page-type" content= "Spiel für Pfadfinder">
  <meta name="page-topic" content= "Spiel zum JOTA">
  <meta name="revisit after" content= "7 days">
  <META NAME="Description" CONTENT="Jamboree in the Air and Internet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="SHORTCUT ICON" href="favicon.ico">
  
  
  
  
  
  
  <style type="text/css">
  
  
       
  A:link.black { text-decoration:none; color:#000000;}
  A:visited.black {text-decoration:none; color:#000000; }
  A:active.black {text-decoration:none; color:#000000;}
  A:hover.black {text-decoration:none; color:#FFFFFF;background-color:#1a2a7e;}
  
   
   
    A:link.white  { text-decoration:none;  color:#FFFFFF; }
    A:visited.white  { text-decoration:none;  color:#FFFFFF; }
    A:hover.white  { text-decoration:none; color:#000000; }
    A:active.white  { text-decoration:none;  color:#FFFFFF;}
  
    A:link.more { text-decoration:none;  color:#FFFFFF;font-size:8pt;font-style:italic;}
    A:visited.more { text-decoration:none;  color:#FFFFFF;font-size:8pt;font-style:italic; }
    A:hover.more { text-decoration:none; color:#FFFFFF;font-size:8pt;font-style:italic; }
    A:active.more { text-decoration:none;  color:#FFFFFF;font-size:8pt;font-style:italic;}
  
   
  A:link.green { text-decoration:none; color:#00FF00;}
  A:visited.green {text-decoration:none; color:#00FF00; }
  A:active.green {text-decoration:none; color:#00FF00;}
  A:hover.green {text-decoration:none; color:#00FF00;background-color:#1a2a7e;}
  
        A:link.blue { text-decoration:none; color:#0000FF;}
  A:visited.blue {text-decoration:none; color:#0000FF; }
  A:active.blue {text-decoration:none; color:#0000FF;}
  A:hover.blue {text-decoration:none; color:#0000FF;background-color:#1a2a7e;}
  
        A:link.red { text-decoration:none; color:#FF0000;}
        A:visited.red {text-decoration:none; color:#FF0000; }
  A:active.red {text-decoration:none; color:#FF0000;}
  A:hover.red {text-decoration:none; color:#FF0000;background-color:#1a2a7e;}
  
        A:link.unterartikel { text-decoration:none; color:#000000;background-color:#BBBBBB;}
  A:visited.unterartikel {text-decoration:none; color:#000000; background-color:#BBBBBB;}
  A:active.unterartikel {text-decoration:none; color:#000000;background-color:#BBBBBB;}
  A:hover.unterartikel {text-decoration:none; color:#000000;background-color:#CCCCCC;}
  
  form {
            margin: 0 auto;
            width: 80%;
            
        }
        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            
            color: black;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input#file-upload[type="file"] {
    display: none;
}

input#file-upload2[type="file"] {
    display: none;
}
.file-upload {
    border: none;
    padding: 6px 12px;
    cursor: pointer;
    width: 10px;
    height: 10px;
}


        .responsive {
  width: 100%;
  max-width: 400px;
  height: auto;
}
  
      
  body {
    
    background-color:#ffffff;
    font-family:arial;
  }
  
  
    
  </style>
  
  
  </head>
  
  
  
  <body> 





