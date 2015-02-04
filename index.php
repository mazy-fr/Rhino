<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

    <title>Project Rhino</title>
</head>
<body>
    <div id="map" style="position: relative; height: 700px; width: 100%"></div>
    <script>
        // create a map in the "map" div, set the view to a given place and zoom
        var map = L.map('map').setView([47, 1], 6);

        // add an OpenStreetMap tile layer
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // add a marker in the given location, attach some popup content to it and open the popup
        L.marker([49.045, 1.85]).addTo(map)
        .bindPopup('Jambville')
        .openPopup();
    </script>
</body>
</html>
