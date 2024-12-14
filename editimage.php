
 
<?php
session_start();
/*
 * Created on 05.04.2007
 * updated: 27.10.2024
 * author: Ralf LÜsebrink
*/
 # Werte auf Entwicklungssystem einstellen!
 $server = "localhost";  // MySQL-Server
 $user   = "root";       // MySQL-Nutzer
 $pass   = "iwa2sql!";           // MySQL-Kennwort
 $dbase  = "geodetective";  // Standarddatenbank


$conn = mysqli_connect($server, $user, $pass,$dbase);

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
  //Alle GET Variablen einlesen
  //while(list($key, $val) = each($_GET)){$$key=$val;};
  
  //Alle POST Variablen einlesen
  //while(list($key, $val) = each($_POST)){$$key=$val;};
  foreach($_GET as $key => $val){$$key=$val;}
  foreach($_POST as $key => $val) {echo $key;$$key=$val;}

  

  /*
  foreach($_POST as $rvar)
  {
    key($_POST).' ';
    echo $rvar.'<br>';
   $rvarkey=key($_POST);
   $$rvarkey=$rvar;
  
  }
  foreach($_GET as $gvar)
  {
    echo $gvar.'<br>';
   $gvarkey=key($_GET);
   $$gvarkey=$gvar;
 
  }
*/
  ?>
  
  
  
  

  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//DE">
  <html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimap mit Beschreibung</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"/>

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
  
  <style>
        /* Grundlegendes Layout und Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .map-container {
            width: 50%;
            max-width: 300px;
            height: 300px;
            margin-top: 20px;
            border: 2px solid #ccc;
        }

        .controls {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            width: 100%;
            max-width: 600px;
            padding: 10px;
            box-sizing: border-box;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .controls input {
            padding: 10px;
            margin-top: 10px;
            width: 100%;
            max-width: 500px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .controls button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            margin-top: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .controls button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design für Handys */
        @media (max-width: 600px) {
            .map-container {
                height: 200px;
            }

            .controls {
                width: 90%;
                padding: 15px;
            }
        }
    </style>
  
  

  
  
  </head>
  
  
  
  <body>  
<?php   
   $sql="SELECT * FROM image WHERE id='".$_SESSION['imageid']."'";
   $result = $conn->query($sql);

   $datensatz = $result->fetch_assoc();
$filename=$datensatz['filename'];
$lat=$datensatz['lat'];
$lon=$datensatz['lon'];
   ?>







<center>


<img src="uploads/<?=$filename;?>" style="width: 100%;max-width: 600px;
            height: 300px;
            margin-top: 20px;
            border: 2px solid #ccc;">


    
    <form action="checkeditimage.php" method="post">
    
    <div id="map" class="map-container"></div>

    <!-- Steuerungselemente -->
    <div class="controls">
       
        <button type="submit" name="reposition">Koordinaten anpasssen</button>
        <input type="text" name="imagedescription" placeholder="Bildbeschreibung" />
        <?php
         if($msg!='') {
         echo'<span style="color:red;">'.$msg.'<br></span>';
       }
       ?>   
        <button type="submit" name="save">Speichern</button>
    </div>

    
    
    
    
    
    
    
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        // Initiale Koordinaten (Latitude, Longitude)
        let lat = <?=$lat;?>  // Beispiel: Berlin
        let lon = <?=$lon;?> 

        // Initialisiere die Karte
        const map = L.map('map').setView([lat, lon], 13);

        // Füge eine TileLayer hinzu (OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Füge einen Marker an der aktuellen Position hinzu
        const marker = L.marker([lat, lon]).addTo(map);

        // Funktion, um die Position anzupassen
        document.getElementById('adjust-position-button').addEventListener('click', () => {
            // Setze eine neue zufällige Position als Beispiel
            lat = 51.1657 + (Math.random() - 0.5) * 2;  // zufällige Abweichung innerhalb Deutschlands
            lon = 10.4515 + (Math.random() - 0.5) * 2; // zufällige Abweichung innerhalb Deutschlands

            // Aktualisiere die Karte und den Marker
            map.setView([lat, lon], 13);
            marker.setLatLng([lat, lon]);

            // Ausgabe der neuen Koordinaten in der Konsole
            console.log(`Neue Position: Lat: ${lat}, Lon: ${lon}`);
        });

        // Füge EventListener hinzu, um Bildbeschreibung anzuzeigen
        const descriptionInput = document.getElementById('image-description');
        descriptionInput.addEventListener('input', (event) => {
            console.log('Bildbeschreibung: ', event.target.value);
        });
    </script>

<?php
  include("./templateunten.php");
  ?>
