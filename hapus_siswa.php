<?php
    include "./model/conn.php";

    $id_siswa = $_GET['id_siswa'];
    $hapus = mysqli_query($conn, "DELETE FROM tb_siswa WHERE id_siswa=$id_siswa");

    if ($hapus) {
        echo"<script>
        alert('Data berhasil dihapus')
        window.location.href='siswa.php'
        </script>";
    }else{
        echo"<script>
        alert('Data Gagal dihapus')
        window.location.href='siswa.php'
        </script>";
    }
