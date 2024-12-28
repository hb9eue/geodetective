<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartenmarker mit Entfernungen</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map { height: 500px; }
        #marker-list { margin-top: 20px; }
        li { margin-bottom: 5px; }
    </style>
</head>
<body>

    <h1>Auflösung</h1>
    
    <div id="map"></div>

    <h2>Liste der Einsendungen</h2>
    <ul id="marker-list"></ul>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>

        //marker
        var jotamarker = new L.Icon({
  iconUrl: 'images/jotamarker.png',
  shadowUrl: 'images/jotashadow.png',
  iconSize: [50, 73],
  iconAnchor: [25, 73],
  popupAnchor: [1, -77],
  shadowSize: [0, 0]
});
        // Referenzpunkt (z.B. Berlin)
        const referencePoint = [52.5200, 13.4050]; // Latitude und Longitude von Berlin

        // Marker-Daten (Name, Latitude, Longitude)
        const markers = [
            { name: "Marker 1", lat: 52.5201, lng: 13.4051 },
            { name: "Marker 2", lat: 52.5300, lng: 13.4000 },
            { name: "Marker 3", lat: 52.5100, lng: 13.3900 },
            { name: "Marker 4", lat: 52.5250, lng: 13.4100 }
        ];

        // Erstelle die Karte
        const map = L.map('map').setView(referencePoint, 13);

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
            const markerElement = L.marker(markerLatLng).addTo(map).bindPopup(marker.name);
            return { ...marker, distance, element: markerElement };
        });

        // Sortiere Marker nach Entfernung zum Referenzpunkt (aufsteigend)
        distances.sort((a, b) => a.distance - b.distance);

        // Zeige die sortierten Marker in einer Liste an
        const listElement = document.getElementById('marker-list');
        distances.forEach(marker => {
            const listItem = document.createElement('li');
            //listItem.textContent = `${marker.name}: ${Math.round(marker.distance / 1000)} km`;
            listItem.textContent = `${marker.name}: ${Math.round(marker.distance)} m`;
            //listItem.textContent = `${marker.name}: ${marker.distance} m`;
            listElement.appendChild(listItem);
        });
    </script>

</body>
</html>
