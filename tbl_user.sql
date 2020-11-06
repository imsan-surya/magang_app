-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 11:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institusi` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `no_whatsapp` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(15) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `bantuan` varchar(30) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `total` varchar(30) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `institusi`, `no_hp`, `no_whatsapp`, `tempat_lahir`, `tanggal_lahir`, `provinsi`, `kab_kota`, `kecamatan`, `kelurahan`, `level`, `bantuan`, `paket`, `harga`, `jumlah`, `total`, `bukti`, `catatan`, `alamat`, `foto_user`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Imsan', 'imsans@gmail.com', '081586043983', 'imsan', '3', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Citra', 'citra@gmail.com', '08127138193', 'citra', '1', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Ahmad', 'ahmad@gmail.com', '087216318128', 'ahmad', '2', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'pengadopsi', 'bibit', 'pengadopsi@app.com', 'Perorangan', '081586043983', '0817317429', 'padang', '13/07/2001', 'sumbar', 'melawai', 'melawai', 'melawai', 2, '13141', '5.000.000', '', '4', '6', 'topper.png', 'adadadas', 'melawai utara', '', '$2y$10$WLDeRuxKHocbMfK0Wtswi.CXnDemXIYyauisoo4vb5QyAjtDFE3Gu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'indah', 'sari', 'indah@gmail.com', 'Perorangan', '0088319320', '0817317429', 'padang', '13/07/2001', 'jakarta', 'melawai', 'badui', 'badui dalam', 2, '13141', '500.000', '', '8', '4', 'topper.png', 'isamidada', 'pembangunan', '', 'indah', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'admin1', 'sari', 'admin1@gmail.com', 'Perorangan', '0088319320', '081586043983', 'Jakarta', '14/06/2000', 'DKI Jakarta', 'Jakarta Pusat', 'Gambir', 'Petojo Utara', 1, '131', '5.000.000', '', '4', '2', 'topper.png', 'ada', 'pembangunan 3', '', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
