<?php

include "./controller/const.php";
include "./model/conn.php";

if (isset($_GET['id_siswa'])) {
    $id_siswa = $_GET['id_siswa'];
} else {
    header("Location: laporan.php");
}

$no = 1;
$query_laporan = mysqli_query($conn, "SELECT * FROM q_nilai WHERE id_siswa = $id_siswa");

$data = mysqli_fetch_array($query_laporan);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./template/style1.css">
    <title><?= $title ?></title>
</head>

<body>
    <!-- Header -->
    <nav>
        <div class="container">
            <a href="index.php">
                <h1 class="logo">Latihan <label for="">USK</label> </h1>
            </a>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="siswa.php">Siswa</a></li>
                <li><a href="mapel.php">Mapel</a></li>
                <li><a href="absensi.php">Absensi</a></li>
                <li><a href="guru.php">Guru</a></li>
                <li><a class="active" href="laporan.php">Laporan</a></li>
            </ul>
        </div>
    </nav>

    <center>
        <h2 class="title"><?= $laporan; ?></h2>
    </center>
    <section>
        <div class="container">
            <center>
            <div class="box">
                <a class="btn-primary" href="laporan.php">
                    << Kembali</a>
                        <br>
                        <br><br>
                        <!-- </center> -->
                        <section class="start">
                            <h3>IDENTITAS PESERTA</h3>
                            <span>Nama : <span class="span-bold"><?= $data['nama_siswa'] ?></span></span><br>
                            <span>Asal Sekolah : <span class="span-bold"><?= $data['asal_sekolah'] ?></span></span><br><br>
                        </section>
                        <!-- <center> -->
                            <table class="table-hover" border="1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Guru</th>
                                        <th>ID Siswa</th>
                                        <th>Nama Siswa</th>
                                        <th>Asal Sekolah</th>
                                        <th>Kelompok Belajar</th>
                                        <th>Nilai</th>
                                        <th>Mapel</th>
                                        <th>Ket </th>
                                    </tr>
                                </thead>
                                <?php
                                foreach ($query_laporan as $l) :
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $l['nama_guru'] ?></td>
                                            <td><?= $l['id_siswa'] ?></td>
                                            <td><?= $l['nama_siswa'] ?></td>
                                            <td><?= $l['asal_sekolah'] ?></td>
                                            <td><?= $l['kelompok_belajar'] ?></td>
                                            <td><?= $l['nilai'] ?></td>
                                            <td><?= $l['mapel'] ?></td>
                                            <td><?= $l['ket'] ?></td>
                                        </tr>
                                    </tbody>
                                <?php endforeach; ?>
                            </table>
            </div>
            </center>
        </div>
    </section>
</body>

</html>