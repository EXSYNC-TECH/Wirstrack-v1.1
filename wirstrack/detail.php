<?php 
include 'proses/koneksi.php';

$latlong = 'SELECT * FROM latlong';
$query1 = mysqli_query($conn, $latlong);
$data1 = mysqli_fetch_array($query1);

$kurir = 'SELECT * FROM kurir WHERE id IN(SELECT MAX(id) FROM kurir )';
$query2 = mysqli_query($conn, $kurir);
$data2= mysqli_fetch_array($query2);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WirsTrack | Konversi Rute</title>
    <link rel="icon" href="src/img/icon.svg">
    <!-- My Style -->
    <link rel="stylesheet" href="src/css/detail.css">

    <!-- Leaflet JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>

<body>
    <!-- Mengambil Navbar dari template nav.php -->
    <?php include 'template/nav.php'; ?>

    <!-- Body Section Start -->
    <section class="body">
        <div class="box">
            <div class="splitLeft">
                <div class="head">
                    <a href="rute.php"><img src="src/img/back.svg" alt="back"></a>
                    <h3>Rute Map</h3>
                </div>
                <h4>Detail Rute</h5>
                <div class="box">
                    <label class="alamatTujuan1"><?=$data2['alamat_tujuan1'];?></label>
                    <p class="jarak">15 m</p>
                    <p class="jalanan">Jl. Pejaten Raya</p>
                    <hr>
                    <p class="waktu">3,3 km (11 menit)</p>
                    <label class="alamatAsal"><?=$data2['alamat_asal'];?></label>
                </div>
                
            </div>
            <div class="splitRight">
                <div id="map" style="width: 100%; height: 800px;"></div>
            </div>
        </div>
    </section>
    <!-- Body Section End -->

    <div class="shape">&nbsp;</div>

    <!-- Mengambil dari template footer.php -->
    <?php include 'template/footer.php'; ?>


    <!-- JQuery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

    <!-- Map Quest -->
    <script>
         var map = L.map('map').setView([-6.207241022654177, 106.84763395395483], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>



</body>

</html>