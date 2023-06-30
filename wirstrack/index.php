<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WirsTrack | Landing Page</title>
    <link rel="icon" href="src/img/icon.svg">
    <!-- My Style -->
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <!-- Mengambil Navbar dari template nav.php -->
    <?php include 'template/nav.php'; ?>

    <!-- Body Section Start -->
    <section class="body">
        <div class="split">
            <div class="splitLeft">
                <h1>Temukan Pelacakan Lokasi yang Akurat</h1>
                <p>Temukan Lokasi Anda dengan Presisi dan Kemudahan dengan WirsTrack</p>
                <a href="form.php">Tentukan Lokasi</a>
                <p>5.000 orang mencoba fitur ini</p>
            </div>
            <div class="splitRight">
                <img src="src/img/browserframe.svg" alt="browserframe">
            </div>
        </div>
    </section>
    <!-- Body Section End -->

    <div class="shape">&nbsp;</div>

    <!-- Mengambil dari template footer.php -->
    <?php include 'template/footer.php'; ?>
    
</body>

</html>