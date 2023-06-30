<?php 
include 'proses/koneksi.php';

$sql = 'SELECT * FROM latlong';
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WirsTrack | Alamat Tujuan</title>
    <link rel="icon" href="src/img/icon.svg">
    <!-- My Style -->
    <link rel="stylesheet" href="src/css/alamat.css">

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
                    <a href="form.php"><img src="src/img/back.svg" alt="back"></a>
                    <h3>Alamat</h3>
                </div>
                <form action="proses/prosesAlamatTujuan.php" method="POST">
                    <label for="alamatTujuan1">Alamat Tujuan</label>
                    <input  list="alamatTujuan" name="alamat_tujuan1" id="alamatTujuan1" placeholder="Masukkan Alamat Tujuan" autocomplete="off">
                    <datalist id="alamatTujuan">
                        <?php while ($data = mysqli_fetch_array($query)): ?>
                        <option value="<?=$data['name'];?>"><?=$data['name'];?></option>
                        <?php endwhile; ?>
                    </datalist>

                    <input disabled="disabled" id="submit" type="submit" value="Temukan Rute">
                </form>
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

    <!-- Filter List -->
    <script type="text/javascript" src="src/js/filterlist.js"></script>

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

    <!-- Disable Button -->
    <script>
        (function () {
            $('form > input').keyup(function () {

                var empty = false;
                $('form > input').each(function () {
                    if ($(this).val() == '') {
                        empty = true;
                    }
                });

                if (empty) {
                    $('#submit').attr('disabled', 'disabled');
                    $("input[type=submit").css("background-color", "#D5D9EB");
                } else {
                    $('#submit').removeAttr('disabled');
                    $("input[type=submit").css("background-color", "#175CD3");
                }
            });
        })()
    </script>



</body>

</html>