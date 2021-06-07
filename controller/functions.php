<?php
    include "./model/conn.php";
    // include "./edit_absensi.php";
    
    // input data siswa
    function tambah_data_siswa($data){
        global $conn;

        $nama_siswa = $_POST['nama_siswa'];
        $alamat_siswa = $_POST['alamat_siswa'];
        $kelas = $_POST['kelas'];
        $asal_sekolah = $_POST['asal_sekolah'];

        $insert_siswa = "INSERT INTO tb_siswa VALUES ('','$nama_siswa','$alamat_siswa','$kelas','$asal_sekolah')";

        mysqli_query($conn,$insert_siswa);
        return mysqli_affected_rows($conn);
    }

    //input data absensi
    function tambah_data_absensi($data){
        global $conn;

        $kode_mapel = $_POST['kode_mapel'];
        $hari = $_POST['hari'];
        $tanggal = $_POST['tanggal'];
        $id_siswa = $_POST['id_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $kelompok_belajar = $_POST['kelompok_belajar'];
        $nilai = $_POST['nilai'];
        $ket = $_POST['ket'];

        $insert_absensi = "INSERT INTO tb_absensi VALUES (
            '',
            '$kode_mapel',
            '$hari',
            '$tanggal',
            '$id_siswa',
            '$nama_siswa',
            '$kelompok_belajar',
            '$nilai',
            '$ket'
            )";
        mysqli_query($conn,$insert_absensi);
        return mysqli_affected_rows($conn);
    } 

    // edit data absensi
    function edit_data_absensi($data){
        global $conn;
        global $edit;
        global $id_absensi;
        
        $kode_mapel = $edit['kode_mapel'];
        $hari = $edit['hari'];
        $tanggal = $edit['tanggal'];
        $id_siswa = $edit['id_siswa'];
        $nama_siswa = $edit['nama_siswa'];
        $kelompok_belajar = $edit['kelompok_belajar'];
        $nilai = $edit['nilai'];
        $ket = $edit['ket'];

        $update = "UPDATE tb_absensi SET 
            kode_mapel = '$kode_mapel',
            hari = '$hari',
            tanggal = '$tanggal',
            id_siswa = '$id_siswa',
            nama_siswa = '$nama_siswa',
            kelompok_belajar = '$kelompok_belajar',
            nilai = '$nilai',
            ket = '$ket'
            WHERE id_absensi='$id_absensi'";

        mysqli_query($conn,$update);
        return mysqli_affected_rows($conn);
    }
