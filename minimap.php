<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimap mit Beschreibung</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"/>
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
            width: 100%;
            max-width: 600px;
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

    <!-- Karte -->
    <div id="map" class="map-container"></div>

    <!-- Steuerungselemente -->
    <div class="controls">
        <button id="adjust-position-button">Position anpassen</button>
        <input type="text" id="image-description" placeholder="Bildbeschreibung" />
    </div>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        // Initiale Koordinaten (Latitude, Longitude)
        let lat = 52.5200;  // Beispiel: Berlin
        let lon = 13.4050;

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
</body>
</html>
