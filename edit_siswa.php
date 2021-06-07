<?php
    include "./controller/const.php";
    include "./model/conn.php";
    include "./controller/functions.php";

    if (isset($_POST['tambah_siswa'])) {
        if(tambah_data_siswa($_POST) > 0){
            echo "
                <script>
                alert('Data berhasil ditambahkan')
                document.location.href='siswa.php'
                </script>
            ";
        }else{
            echo "
                <script>
                alert('Data berhasil ditambahkan')
                document.location.href='siswa.php'
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
    <link rel="stylesheet" href="./template/style.css">
    <title><?= $siswa ?></title>
</head>

<body>
    <nav>
        <div class="container">
            <h1 class="logo">Latihan <label for="">USK</label> </h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="siswa.php">Siswa</a></li>
                <li><a href="#">Mapel</a></li>
                <li><a href="#">Absensi</a></li>
                <li><a href="#">Guru</a></li>
                <li><a href="#">Laporan</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <br>
        <center>
            <h2>Tambah <?= $siswa ?></h2>
            <a class="btn-primary" href="siswa.php">
                << Kembali</a>
                <br><br>
                    <form action="" method="post">
                        <label for="">Nama Siswa</label><br>
                        <input type="text" name="nama_siswa"><br><br>

                        <label for="">Alamat Siswa</label><br>
                        <textarea name="alamat_siswa" id="" cols="30" rows="10">

                        </textarea><br><br>

                        <label for="">Kelas</label><br>
                        <input type="text" name="kelas"><br><br>

                        <label for="">Asal Sekolah</label><br>
                        <input type="text" name="asal_sekolah"><br><br>

                        <button class="btn-primary-confirm" type="submit" name="tambah_siswa">Tambah Siswa</button>

                    </form>
        </center>
    </div>

</body>

</html>