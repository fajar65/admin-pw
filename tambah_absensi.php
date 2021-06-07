<?php
include "./controller/const.php";
include "./model/conn.php";
include "./controller/functions.php";

global $conn;
$query_mapel = mysqli_query($conn, "SELECT * FROM tb_mapel");
$query_siswa = mysqli_query($conn, "SELECT * FROM tb_siswa");
$query_absensi = mysqli_query($conn, "SELECT * FROM tb_absensi");

if (isset($_POST['tambah_absensi'])) {
    if (tambah_data_absensi($_POST) > 0) {
        echo "
                <script>
                alert('Data berhasil ditambahkan')
                document.location.href='absensi.php'
                </script>
            ";
    } else {
        echo "
                <script>
                alert('Data gagal ditambahkan')
                document.location.href='absensi.php'
                </script>
            ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./template/style1.css">
    <title><?= $absensi ?></title>
</head>

<body>
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
    <div class="container">
        <center>
            <h2 class="title"><?= $add_absensi ?></h2>
            <section>
                <br>
                <div class="box">
                    <a class="btn-primary" href="absensi.php"><< Kembali</a>
                            <br><br><br>
                            <form action="" method="post">
                                <label class="left" for="">Kode Mapel</label><br>
                                <select class="form-control" name="kode_mapel" id="" required>
                                    <?php foreach ($query_mapel as $m) : ?>
                                        <option value="<?= $m['kode_mapel'] ?>"><?= $m['kode_mapel'] ?>. <?= $m['mapel']; ?></option>
                                    <?php endforeach ?>
                                </select><br><br><br>
                                <!-- <input type="text" name="nama_absensi"><br><br> -->

                                <label class="left" for="">Hari</label><br>
                                <input class="form-control" type="text" name="hari" required><br><br><br>

                                <label class="left" for="">Tanggal</label><br>
                                <input class="form-control" type="date" name="tanggal" required><br><br><br>

                                <label class="left" for="">ID Siswa</label><br><br>
                                <select class="form-control" name="id_siswa" id="" required>
                                    <?php foreach ($query_siswa as $s) : ?>
                                        <option value="<?= $s['id_siswa'] ?>"><?= $s['id_siswa'] ?>. <?= $s['nama_siswa'] ?></option>
                                    <?php endforeach ?>
                                </select><br><br><br>

                                <label class="left" for="">Nama Siswa</label><br>
                                <select class="form-control" name="nama_siswa" id="" required>
                                    <?php foreach ($query_siswa as $s) : ?>
                                        <option value="<?= $s['nama_siswa'] ?>"><?= $s['nama_siswa'] ?></option>
                                    <?php endforeach ?>
                                </select><br><br><br>

                                <label class="left" for="">Kelompok Belajar</label><br>
                                <select class="form-control" name="kelompok_belajar" id="" required>
                                    <?php foreach ($query_absensi as $b) : ?>
                                        <option value="<?= $b['kelompok_belajar'] ?>"><?= $b['kelompok_belajar'] ?></option>
                                    <?php endforeach ?>
                                </select><br><br><br>

                                <label class="left" for="">Nilai</label><br>
                                <input class="form-control" type="number" name="nilai" required><br><br><br>

                                <label class="left" for="">Keterangan</label><br>
                                <input class="form-control" type="text" name="ket" required><br><br><br>

                                <button class="btn-primary-confirm" type="submit" name="tambah_absensi">Tambah absensi</button>

                            </form>
                </div>
        </center>
    </div>

    </section>
    <footer>
        <?= $footer ?>
    </footer>
</body>

</html>