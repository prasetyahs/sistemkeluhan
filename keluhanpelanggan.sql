-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 08:21 PM
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
-- Database: `keluhanpelanggan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jsnkeluhan`
--

CREATE TABLE `tb_jsnkeluhan` (
  `id_jnskeluhan` int(11) NOT NULL,
  `jenis_keluhan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jsnkeluhan`
--

INSERT INTO `tb_jsnkeluhan` (`id_jnskeluhan`, `jenis_keluhan`) VALUES
(1, 'Keluhan Teknik'),
(2, 'Keluhan administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_jnskeluhan` int(11) NOT NULL,
  `keluhan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `pesan` text NOT NULL,
  `nilai_alternatif` float NOT NULL,
  `status` enum('Diterima','Sedang diproses','Dalam pengecekan','Selesai diperbaiki','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id_keluhan`, `id_pelanggan`, `id_jnskeluhan`, `keluhan`, `tanggal`, `pesan`, `nilai_alternatif`, `status`) VALUES
(106, 27, 1, 'Air Bocor', '2021-01-26', 'Tolong segara diperbaiki ', 0, 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhanplgn`
--

CREATE TABLE `tb_keluhanplgn` (
  `id_keluhanplgn` int(11) NOT NULL,
  `jenis_keluhan` int(11) NOT NULL,
  `nama_keluhanplgn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keluhanplgn`
--

INSERT INTO `tb_keluhanplgn` (`id_keluhanplgn`, `jenis_keluhan`, `nama_keluhanplgn`) VALUES
(1, 1, 'Air Bocor/Air Mati'),
(2, 1, 'Laporan Kebocoran'),
(3, 2, 'Pembayaran yang Sangat Mahal'),
(7, 2, 'Selang Bocordasdas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuesioner`
--

CREATE TABLE `tb_kuesioner` (
  `id_kuesioner` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `pertanyaan_satu` varchar(50) NOT NULL,
  `pertanyaan_dua` varchar(50) NOT NULL,
  `pertanyaan_tiga` varchar(50) NOT NULL,
  `pertanyaan_empat` varchar(50) NOT NULL,
  `pertanyaan_lima` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kuesioner`
--

INSERT INTO `tb_kuesioner` (`id_kuesioner`, `id_pelanggan`, `pertanyaan_satu`, `pertanyaan_dua`, `pertanyaan_tiga`, `pertanyaan_empat`, `pertanyaan_lima`, `pesan`) VALUES
(27, 4, 'Sangat Memuaskan', 'Memuaskan', 'Cukup Memuaskan', 'Memuaskan', 'Memuaskan', 'asd'),
(28, 4, 'Sangat Memuaskan', 'Memuaskan', 'Memuaskan', 'Sangat Memuaskan', 'Memuaskan', 'dasdasdas'),
(29, 4, 'Sangat Memuaskan', 'Memuaskan', 'Tidak Memuaskan', 'Cukup Memuaskan', 'Sangat Memuaskan', 'okeoke');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengecekan`
--

CREATE TABLE `tb_pengecekan` (
  `id_cek` int(11) NOT NULL,
  `id_keluhan` int(11) NOT NULL,
  `id_pengawas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `password` varchar(32) NOT NULL,
  `tipe` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username`, `nama`, `alamat`, `no_telp`, `password`, `tipe`) VALUES
(4, 'ai', 'ai tria', 'dasd', '08978232', 'b8f8312b939f00abb38eeafd4fd107f3', 'pelanggan'),
(5, 'admin', 'damin', 'admin', '839248932', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(20, 'google123', 'google', 'dasdas', '3210390129', 'b8f8312b939f00abb38eeafd4fd107f3', 'pengawas'),
(23, 'gema', 'gema ramadhan', 'asdasda', '089506277284', 'f5bb0c8de146c67b44babbf4e6584cc0', 'pelanggan'),
(24, 'dilan', 'dilan', 'jalan kesadaran rt 02 rw 07 Cibitung', '0898989889', 'b8f8312b939f00abb38eeafd4fd107f3', 'pelanggan'),
(25, 'ringgo', 'ringgo putro', 'jl. wisma asri', '089678785656', 'b8f8312b939f00abb38eeafd4fd107f3', 'pelanggan'),
(26, 'phs', 'phs', 'kdlsakdlsakl', '0897771212', 'a855bb9393d543a89708b0918f91d851', 'pelanggan'),
(27, 'genta', 'Genta Prima Syahnur', 'jl kesadaran', '089669123141', '41ad1bd82a8744f040c267fdcafa54e8', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jsnkeluhan`
--
ALTER TABLE `tb_jsnkeluhan`
  ADD PRIMARY KEY (`id_jnskeluhan`);

--
-- Indexes for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `tb_keluhan_ibfk_1` (`id_pelanggan`),
  ADD KEY `id_jnskeluhan` (`id_jnskeluhan`);

--
-- Indexes for table `tb_keluhanplgn`
--
ALTER TABLE `tb_keluhanplgn`
  ADD PRIMARY KEY (`id_keluhanplgn`),
  ADD KEY `jenis_keluhan` (`jenis_keluhan`);

--
-- Indexes for table `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
  ADD PRIMARY KEY (`id_kuesioner`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_pengecekan`
--
ALTER TABLE `tb_pengecekan`
  ADD PRIMARY KEY (`id_cek`),
  ADD KEY `id_keluhan` (`id_keluhan`),
  ADD KEY `id_pengawas` (`id_pengawas`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jsnkeluhan`
--
ALTER TABLE `tb_jsnkeluhan`
  MODIFY `id_jnskeluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tb_keluhanplgn`
--
ALTER TABLE `tb_keluhanplgn`
  MODIFY `id_keluhanplgn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
  MODIFY `id_kuesioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_pengecekan`
--
ALTER TABLE `tb_pengecekan`
  MODIFY `id_cek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD CONSTRAINT `tb_keluhan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_keluhan_ibfk_2` FOREIGN KEY (`id_jnskeluhan`) REFERENCES `tb_jsnkeluhan` (`id_jnskeluhan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_keluhanplgn`
--
ALTER TABLE `tb_keluhanplgn`
  ADD CONSTRAINT `tb_keluhanplgn_ibfk_1` FOREIGN KEY (`jenis_keluhan`) REFERENCES `tb_jsnkeluhan` (`id_jnskeluhan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
  ADD CONSTRAINT `tb_kuesioner_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pengguna` (`id_pengguna`);

--
-- Constraints for table `tb_pengecekan`
--
ALTER TABLE `tb_pengecekan`
  ADD CONSTRAINT `tb_pengecekan_ibfk_1` FOREIGN KEY (`id_keluhan`) REFERENCES `tb_keluhan` (`id_keluhan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pengecekan_ibfk_2` FOREIGN KEY (`id_pengawas`) REFERENCES `tb_pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
