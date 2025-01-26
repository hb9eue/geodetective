<?php

include("../templateohne.php");  



$imageid=$_SESSION['imageid'];

if (isset($chosenimage)) {
    
    $imageid=$_POST['chosenimage'];
    $_SESSION['imageid']=$imageid;


    $sql="SELECT * FROM image WHERE  id=".$imageid;
    
    $result = $conn->query($sql);
    $datensatz = $result->fetch_assoc();
    $lat=$datensatz['lat'];
    $lon=$datensatz['lon'];
    
    //JID des Bildes
    $jidsql="SELECT * FROM image join user on image.userid=user.id join scoutgroup on user.scoutgroup=scoutgroup.id WHERE image.id=".$imageid;
    $imagejid = $conn->query($jidsql);
    $imagejiddtaensatz = $imagejid->fetch_assoc();
    $jid= $imagejiddtaensatz['jid']; 

   
    $sql="SELECT * FROM guess join user on guess.userid=user.id join scoutgroup on user.scoutgroup=scoutgroup.id WHERE imageid=".$imageid;
    $guesses = $conn->query($sql);
    
    
   
    }
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=solutiontitle?></title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map { height: 500px; }
        #marker-list { margin-top: 20px; }
        li { margin-bottom: 5px; }
    </style>
</head>
<body>

    <h1><?=solutionheadline?></h1>
    
    <div id="map"></div>

    <h2><?=solutionlist?></h2>
    <ul id="marker-list"></ul>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>

        //marker
        var jotamarker = new L.Icon({
  iconUrl: '../images/jotamarker.png',
  shadowUrl: '../images/jotashadow.png',
  iconSize: [50, 73],
  iconAnchor: [25, 73],
  popupAnchor: [1, -77],
  shadowSize: [0, 0]
});

var greenmarker = new L.Icon({
    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});
        // Referenzpunkt (z.B. Berlin)
        const referencePoint = [<?=$lat?>, <?=$lon?>]; // Latitude und Longitude von Berlin

        // Marker-Daten (Name, Latitude, Longitude)
        const markers = [
            <?php
             
             $first=true;
             foreach($guesses as $guess) {
                
                //jid korrekt
                $jidcorrect="";
                if ($guess['guessedjid']==$jid)
                {
                    $jidcorrect=solutionjidcorrect; 
                }
                if (!$first) {echo ',';}; 
                $first=false;
                $beschriftung="";
                
                if ($guess['userid']==$_SESSION['userid']) {
                    $beschriftung=$beschriftung."*";
                }
                $beschriftung=$beschriftung.$guess['name']." (".$guess['city'].", ".$guess['country'].")";
                
                $beschriftung=$beschriftung." ".$jidcorrect;
                echo'{ name: "'.$beschriftung.'", lat: '.$guess['lat'].', lng: '.$guess['lon'].' }';

             }
                



            //{ name: "Marker 1", lat: 52.5201, lng: 13.4051 },
           ?>
        ];

        // Erstelle die Karte
        const map = L.map('map').setView(referencePoint, 10);

        // Füge OpenStreetMap als Layer hinzu
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // Füge den Referenzpunkt als Marker hinzu
        //L.marker([51.5, -0.09], {icon: greenIcon}).addTo(map);
        //L.marker(referencePoint, {icon: jotamarker}).addTo(map).bindPopup('Ziel').openPopup();
        L.marker(referencePoint, {icon: jotamarker}).addTo(map);
        // Füge die Marker zur Karte hinzu und berechne die Entfernungen
        const distances = markers.map(marker => {
            const markerLatLng = [marker.lat, marker.lng];
            const distance = map.distance(referencePoint, markerLatLng); // Luftlinienentfernung
            var ismymarker="t"+marker.name;
            var markerElement;
            if (ismymarker.endsWith('*')) {
                 markerElement = L.marker(markerLatLng, {icon: greenmarker}).addTo(map).bindPopup(marker.name);
            } else {
             markerElement = L.marker(markerLatLng).addTo(map).bindPopup(marker.name);
            }
            return { ...marker, distance, element: markerElement };
        });

        // Sortiere Marker nach Entfernung zum Referenzpunkt (aufsteigend)
        distances.sort((a, b) => a.distance - b.distance);

        // Zeige die sortierten Marker in einer Liste an
        const listElement = document.getElementById('marker-list');
        distances.forEach(marker => {
            const listItem = document.createElement('li');
            var distance=marker.distance.toFixed(2);
            var einheit='m';
            if(distance>1000) {
                distance=(distance/1000).toFixed(3);
                einheit='km';
            }
            distance=distance.replace('.',',');
            //listItem.textContent = `${marker.name}: ${Math.round(marker.distance / 1000)} km`;
            listItem.textContent = `${marker.name}: ${distance} ${einheit}`;
            //listItem.textContent = `${marker.name}: ${marker.distance} m`;
            listElement.appendChild(listItem);
        });
    </script>
 <button  onclick="window.location.href='choosesolutionimage.php'"><?=buttonback?></button>
</body>
</html>
