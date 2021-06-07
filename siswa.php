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
                <li><a class="active" href="siswa.php">Siswa</a></li>
                <li><a href="mapel.php">Mapel</a></li>
                <li><a href="absensi.php">Absensi</a></li>
                <li><a href="guru.php">Guru</a></li>
                <li><a href="laporan.php">Laporan</a></li>
            </ul>
        </div>
    </nav>
    <!-- Table -->
    <div class="container">
        <center>
            <h2 class="title"><?= $siswa; ?></h2>
            <section>
                <br>
                <div class="box">
                    <a class="btn-primary" href="tambah_siswa.php">Tambah siswa</a>
                    <br>
                    <br><br>
                    <table class="table-hover" border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Alamat Siswa</th>
                                <th>Kelas</th>
                                <th>Asal Sekolah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        $siswa = mysqli_query($conn, "SELECT * FROM tb_siswa");
                        $no = 1;
                        while ($data = mysqli_fetch_array($siswa)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['nama_siswa']; ?></td>
                                    <td><?= $data['alamat_siswa']; ?></td>
                                    <td><?= $data['kelas']; ?></td>
                                    <td><?= $data['asal_sekolah']; ?></td>
                                    <td>
                                        <a href="edit_siswa?id_siswa=<?= $data['id_siswa'] ?>">Edit</a>
                                        <a href="hapus_siswa.php?id_siswa=<?= $data['id_siswa'] ?>" 
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

    <footer>
        <?= $footer ?>
    </footer>


</body>

</html>