<?php

include "./controller/const.php";
include "./model/conn.php";

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
                <li><a class="active" href="absensi.php">Absensi</a></li>
                <li><a href="guru.php">Guru</a></li>
                <li><a href="laporan.php">Laporan</a></li>
            </ul>
        </div>
    </nav>
    <!-- Table -->
    <center>
        <h2 class="title"><?= $absensi; ?></h2>
        <section>
            <br>
            <div class="container">
                <div class="box">
                    <a class="btn-primary" href="tambah_absensi.php">Tambah absensi</a>
                <br>
                    <br><br>
                    <table class="table-hover" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Mapel</th>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>ID Siswa</th>
                                <th>Nama Siswa</th>
                                <th>Kelompok Belajar</th>
                                <th>Nilai</th>
                                <th>Ket</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        $absensi = mysqli_query($conn, "SELECT * FROM tb_absensi");
                        $no = 1;
                        while ($data = mysqli_fetch_array($absensi)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['kode_mapel']; ?></td>
                                    <td><?= $data['hari']; ?></td>
                                    <td><?= $data['tanggal']; ?></td>
                                    <td><?= $data['id_siswa']; ?></td>
                                    <td><?= $data['nama_siswa']; ?></td>
                                    <td><?= $data['kelompok_belajar']; ?></td>
                                    <td><?= $data['nilai']; ?></td>
                                    <td><?= $data['ket']; ?></td>
                                    <td>
                                        <a href="edit_absensi.php?id_absensi=<?= $data['id_absensi'] ?>">Edit</a>
                                        <a href="hapus_absensi.php?id_absensi=<?= $data['id_absensi'] ?>"
                                         onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                    </table>
                </div>
    </center>
    </div>
    </section>
        
    <footer class="box-footer">
        <?= $footer ?>
    </footer>


</body>

</html>