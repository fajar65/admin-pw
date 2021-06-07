<?php
    include "./controller/const.php";  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./template/style.css">
    <title><?= $title ?></title>
</head>

<body>
    <nav>
        <div class="container">
            <a href="index.php"><h1 class="logo">Latihan <label for="">USK</label> </h1></a>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="siswa.php">Siswa</a></li>
                <li><a href="mapel.php">Mapel</a></li>
                <li><a href="absensi.php">Absensi</a></li>
                <li><a href="guru.php">Guru</a></li>
                <li><a href="laporan.php">Laporan</a></li>
            </ul>
        </div>
    </nav>
    <section>

    </section>
    <footer>
        <?= $footer ?>
    </footer>

</body>

</html>