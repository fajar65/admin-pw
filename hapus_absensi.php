<?php
    include "./model/conn.php";

    $id_absensi = $_GET['id_absensi'];
    $hapus = mysqli_query($conn, "DELETE FROM tb_absensi WHERE id_absensi=$id_absensi");

    if ($hapus) {
        echo"<script>
        alert('Data berhasil dihapus')
        window.location.href='absensi.php'
        </script>";
    }else{
        echo"<script>
        alert('Data Gagal dihapus')
        window.location.href='absensi.php'
        </script>";
    }
