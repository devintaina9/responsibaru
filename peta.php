<!DOCTYPE html>
    <html lang="en">
    <head>
      <title>WEBGIS DEVINTA CAHAYA PUTRI</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    

<head>

    <!-- Judul pada tab browser -->
    <title>WEBGIS DEVINTA CAHAYA PUTRI</title>

    <!-- Leaflet CSS Library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">

    <!-- Tab browser icon -->
    <link rel="icon" type="image/x-icon" href=https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css>

    <!-- Search CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-search/leaflet-search.css" />

    <!-- Geolocation CSS Library for Plugin -->
    <link rel="stylesheet"
        href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css" />
        

    <!-- Leaflet Mouse Position CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-mouseposition/L.Control.MousePosition.css" />

    <!-- Leaflet Measure CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-measure/leaflet-measure.css" />

    <!-- EasyPrint CSS Library -->
    <link rel="stylesheet" href="assets/plugins/leaflet-easyprint/easyPrint.css" />

    <!-- Marker Cluster CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.Default.css">

    <!-- Routing CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />

    <style>
        /* Background pada Judul */
        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            text-align: center;
        }

        .info h2 {
            margin: 0 0 6px;
            color: #777;
            
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center">
        <h1>PETA PERSEBARAN HOTEL TERDEKAT WISATA DI KABUPATEN KLATEN</h1>
      </div>
      
    <!-- Leaflet JavaScript Library -->
    <div id="map" style="height: 100vh;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div id="map" style="height: 200px;"></div>

    <!-- Search JavaScript Library -->
    <script src="assets/plugins/leaflet-search/leaflet-search.js"></script>
<!-- Masthead-->
<header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Hotel di Klaten</h1>
                        <a class="btn btn-primary" href="#geoportal">Dapatkan Hotel Terdekat Dengan Wisata</a>
                    </div>
                </div>
            
            </div>
        </header>
         <!-- About-->
        <section class="about-section text-center" id="geoportal">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-90">
                      
                            <a href="https://www.traveloka.com/id-id/hotel/indonesia/city/klaten-106797">Klik disini untuk pembelian tiket hotel</a>
                           
                        </p>
                    </div>
                </div>
            </div>
        </section>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="DIVSIG UGM">
    <meta name="description" content="leaflet basic">

    <!-- Judul pada tab browser -->
    <title>Peta PhpMyAdmin</title>

    <!-- Leaflet CSS Library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css">

    <!-- Tab browser icon -->
    <link rel="icon" type="image/x-icon" href="http://luk.staff.ugm.ac.id/logo/UGM/Resmi/Warna.gif">

    <style>
        /* Tampilan peta fullscreen */
        html,
        body,
        #map {
            height: 100%;
            width: 100%;
            margin: 0px;
        }
    </style>
</head>


<body>
    <!-- Leaflet JavaScript Library -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>

    <div id="map"></div>

    <script>
        
        /* Initial Map */
        var map = L.map('map').setView([-7.75, 110.3], 12); //lat, long, zoom

        /* Tile Basemap */
        var basemap1 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | <a href="DIVSIG UGM" target="_blank">DIVSIG UGM</a>' //menambahkan nama//
        });

        var basemap2 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri | <a href="Latihan WebGIS" target="_blank">DIVSIG UGM</a>'
        });

        var basemap3 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri | <a href="Lathan WebGIS" target="_blank">DIVSIG UGM</a>'
        });

        var basemap4 = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        });

        basemap4.addTo(map);
        
        var title = new L.Control();
        title.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };
        title.update = function () {
            this._div.innerHTML = '<h1>WEBGIS | PERSEBARAN HOTEL DEKAT WISATA KLATEN</h1>RESPONSI PEMROGRAMAN SPASIAL : WEB'
        };
        title.addTo(map);
        // Memanggil data koordinat dari PHP
        var coordinates = <?php
        // Sesuaikan dengan setting MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "devresponsi";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM tabeldevresponsi";
        $result = $conn->query($sql);

        $coordinates = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $coordinates[] = [
                    'lat' => $row["latitude"],
                    'lng' => $row["longitude"],
                    'popup' => $row["namahotel"],
                ];
            }
        }

        echo json_encode($coordinates);
        $conn->close();
        ?>;

        // Menambahkan marker ke peta
        coordinates.forEach(function (coordinate) {
            L.marker([coordinate.lat, coordinate.lng]).addTo(map)
                .bindPopup(coordinate.popup);
        });

        /* Control Layer */
        var baseMaps = {
            "OpenStreetMap": basemap1,
            "Esri World Street": basemap2,
            "Esri Imagery": basemap3,
            "Stadia Dark Mode": basemap4
        };

        var overlayMaps = {};

        // Buat grup lapisan
        var coordinateGroup = L.layerGroup();

        // Tambahkan marker ke grup lapisan
        coordinates.forEach(function (coordinate) {
            var marker = L.marker([coordinate.lat, coordinate.lng]).bindPopup(coordinate.popup);
            coordinateGroup.addLayer(marker);
            // Tambahkan marker ke overlayMaps untuk kontrol lapisan
            overlayMaps[coordinate.popup] = marker;
        });

        L.control.layers(baseMaps, overlayMaps).addTo(map);

        // Tambahkan grup lapisan ke peta
        coordinateGroup.addTo(map);

        /* Scale Bar */
        L.control.scale({
            maxWidth: 150,
            position: 'bottomright'
        }).addTo(map);
    </script>
</body>
 
</html>