<?php
//$wfsUrl =
#file_get_contents("https://geoportal.klaten.go.id/geoserver/ows");

# Ubah URL pada file_get_contents sesuai alamat file pada geoserver
$wfsUrl =
file_get_contents("https://geoportal.klaten.go.id/geoserver/ows?service=WFS&version=1.0.0&request=GetFeature&typename=geonode%3ABATAS_ADMINISTRASI_KABUPATEN_AR&outputFormat=json&srs=EPSG%3A4326&srsName=EPSG%3A4326");
header('Content-type: application/json');
echo ($wfsUrl);
# Jika terdapat &maxFeatures=50 pada url wfs geojson, dihapus supaya jumlah feature tidak dibatasi
?>



