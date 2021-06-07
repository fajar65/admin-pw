<?php
include "./controller/const.php";
include "./model/conn.php";
include "./controller/functions.php";

global $conn;
$id_absensi = $_GET['id_absensi'];

$query_absensi = mysqli_query($conn, "SELECT * FROM tb_absensi WHERE id_absensi = $id_absensi");
$edit = mysqli_fetch_array($query_absensi);

$kode_mapel = $edit['kode_mapel'];
$hari = $edit['hari'];
$tanggal = $edit['tanggal'];
$id_siswa = $edit['id_siswa'];
$nama_siswa = $edit['nama_siswa'];
$kelompok_belajar = $edit['kelompok_belajar'];
$nilai = $edit['nilai'];
$ket = $edit['ket'];

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
    <br>
    <center>
        <section>
            <div class="container">
                <h2 class="title">Tambah <?= $absensi ?></h2>
                <div class="box">
                <a class="btn-primary" href="absensi.php">
                    << Kembali</a>
                        <br><br><br>
                        <form action="" method="post">
                            <label class="left" for="">Kode Mapel</label><br>
                            <!-- <select name="kode_mapel" id="" required>
                            <option value="<?= $kode_mapel ?>"></option>
                        </select><br><br> -->
                            <input class="form-control" type="text" name="kode_mapel" value="<?= $kode_mapel ?>" required><br><br>

                            <label class="left" for="">Hari</label><br>
                            <input class="form-control" type="text" name="hari" value="<?= $hari ?>" required><br><br>

                            <label class="left" for="">Tanggal</label><br>
                            <input class="form-control" type="date" name="tanggal" value="<?= $tanggal ?>" required><br><br>

                            <label class="left" for="">ID Siswa</label><br>
                            <!-- <select name="id_siswa" id="" required>
                            <?php foreach ($query_siswa as $s) : ?>
                                <option value="<?= $s['id_siswa'] ?>"><?= $s['id_siswa'] ?>. <?= $s['nama_siswa'] ?></option>
                            <?php endforeach ?>
                        </select><br><br> -->
                            <input class="form-control" type="text" name="id_siswa" value="<?= $id_siswa ?>" id="" required><br><br>

                            <label class="left" for="">Nama Siswa</label><br>
                            <!-- <select name="nama_siswa" id="" required>
                            <?php foreach ($query_siswa as $s) : ?>
                                <option value="<?= $s['nama_siswa'] ?>"><?= $s['nama_siswa'] ?></option>
                            <?php endforeach ?>
                        </select><br><br> -->

                            <input class="form-control" type="text" name="nama_siswa" value="<?= $nama_siswa ?>" id="" required><br><br>

                            <label class="left" for="">Kelompok Belajar</label><br>
                            <!-- <select name="kelompok_belajar" id="" required>
                            <?php foreach ($query_absensi as $b) : ?>
                                <option value="<?= $b['kelompok_belajar'] ?>"><?= $b['kelompok_belajar'] ?></option>
                            <?php endforeach ?>
                        </select><br><br> -->
                            <input class="form-control" type="text" name="kelompok_belajar" value="<?= $kelompok_belajar ?>" id="" required><br><br>

                            <label class="left" for="">Nilai</label><br>
                            <input class="form-control" type="number" name="nilai" value="<?= $nilai ?>" required><br><br>

                            <label class="left" for="">Keterangan</label><br>
                            <input class="form-control" type="text" name="ket" value="<?= $ket ?>" required><br><br>

                            <button class="btn-primary-confirm" type="submit" name="edit_absensi">Edit</button>
                            <button class="btn-secondary" type="reset" name="reset">Reset</button>

                        </form>
                </div>
    </center>
    </section>
    </div>
    <?php
    $id_absensi = $_GET['id_absensi'];

    if (isset($_POST['edit_absensi'])) {
        $kode_mapel = $_POST['kode_mapel'];
        $hari = $_POST['hari'];
        $tanggal = $_POST['tanggal'];
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelompok_belajar = $_POST['kelompok_belajar'];
        $nilai = $_POST['nilai'];
        $ket = $_POST['ket'];

        $update = mysqli_query($conn, "UPDATE tb_absensi SET 
        kode_mapel = '$kode_mapel',
        hari = '$hari',
        tanggal = '$tanggal',
        id_siswa = '$id_siswa',
        nama_siswa = '$nama_siswa',
        kelompok_belajar = '$kelompok_belajar',
        nilai = '$nilai',
        ket = '$ket'
        WHERE id_absensi='$id_absensi'
        ");

        if ($update) {
            echo "
            <script>
            alert('Data berhasil diedit')
            document.location.href='absensi.php'
            </script>
        ";
        } else {
            echo "
            <script>
            alert('Data gagal diedit')
            document.location.href='absensi.php'
            </script>
        ";
        }
    }

    ?>

    <footer>
        <?= $footer ?>
    </footer>
</body>

</html>