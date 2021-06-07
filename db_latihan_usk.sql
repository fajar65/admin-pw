-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 05:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_usk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id_absensi` int(3) NOT NULL,
  `kode_mapel` int(3) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_siswa` int(3) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `kelompok_belajar` varchar(30) DEFAULT NULL,
  `nilai` int(3) DEFAULT NULL,
  `ket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id_absensi`, `kode_mapel`, `hari`, `tanggal`, `id_siswa`, `nama_siswa`, `kelompok_belajar`, `nilai`, `ket`) VALUES
(1, 1, 'Selasa', '2021-04-02', 1, 'Fajar', 'Praktik', 90, 'LULUS'),
(2, 1, 'Jumat', '2021-04-02', 4, 'Ardi', 'Tulis', 80, 'LULUS'),
(5, 1, 'Rabu', '2021-04-07', 4, 'Ardi', 'Tulis', 85, 'LULUS'),
(6, 2, 'Selasa', '2021-04-06', 5, 'Caca', 'Praktik', 85, 'LULUS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `kode_guru` int(3) NOT NULL,
  `nama_guru` varchar(50) DEFAULT NULL,
  `alamat_guru` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`kode_guru`, `nama_guru`, `alamat_guru`) VALUES
(1, 'Budi', 'Bogor'),
(2, 'Asep', 'Cihideung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `kode_mapel` int(3) NOT NULL,
  `mapel` varchar(30) DEFAULT NULL,
  `kode_guru` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`kode_mapel`, `mapel`, `kode_guru`) VALUES
(1, 'Matematika', 1),
(2, 'SIMDIG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(3) NOT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `alamat_siswa` text DEFAULT NULL,
  `kelas` varchar(30) DEFAULT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `alamat_siswa`, `kelas`, `asal_sekolah`) VALUES
(1, 'Fajar', 'Bogor\r\n                        ', 'XII RPL 1', 'SMPN 2 Cibungbulang'),
(4, 'Ardi', 'Bali\r\n                        ', 'X TB 1', 'SMPN 1 Leuwiliang'),
(5, 'Caca', 'Bojeng\r\n                        ', 'XII RPL 2', 'CIMANDE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`kode_mapel`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id_absensi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `kode_guru` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `kode_mapel` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `tb_absensi_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `tb_mapel` (`kode_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_absensi_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `tb_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD CONSTRAINT `tb_mapel_ibfk_1` FOREIGN KEY (`kode_guru`) REFERENCES `tb_guru` (`kode_guru`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
