-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 11:51 AM
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
(10, 'donatur', 'kami', 'donatur@gmail.com', 'Perorangan', '081586043983', '081586043983', 'Jakarta', '14/06/2000', 'DKI Jakarta', 'Sabang', 'melwai', 'Petojo Utara', 1, '121', '0', '', '', '4', 'topper.png', 'Donatur', 'pembangunan 3', '', 'donatur', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'pengadopsi', 'bebek', 'pengadopsi@gmail.com', 'Perorangan', '08127183191', '0817317429', 'jakarta', '29/02/1996', 'jakarta', 'jakarta pusat', 'Gambir', 'badui dalam', 2, '', '500.000', '', '13131', '13141', 'topper.png', 'adasafafsafa', 'pembangunan 3', '', 'pengadopsi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'mitra', 'dagang', 'mitra@gmail.com', 'Perorangan', '08127183191', '0817317429', 'jakarta', '13/07/2001', 'jakarta', 'jakarta pusat', 'badui', 'badui dalam', 3, '11', '', '', '', '2', 'topper.png', 'adasfsgrhfhfesagdsfagsrd', 'pembangunan', '', 'mitra', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'lorde', 'ella', 'lorde@gmail.com', 'Perorangan', '0812137171', '08173173', 'auckland', '07/11/1996', 'Auckland', 'Takapuna', 'gatau', 'gatau', 3, '1212', '', '', '', '', 'topper.png', 'its lorde with an e', 'gatau', '', '$2y$10$jjwkHceox3Fq2mBPs.3H9e80LqECVrOepenOCf8SZh52nfbx4vPK2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'rezky', 'adhitya', 'rezky@gmail.com', 'Perorangan', '0812137171', '081586043983', 'ntt', '07/11/1996', 'Aceh', 'Banten', 'gatau', 'gatau', 3, '13141', '', '', '', '', 'topper.png', 'rezky nie', 'melawai utara', '', '$2y$10$TQL1Mt2FJoRNN1A.xfGbkeYERH9MCfHH8pAgRtI/ipu2gcIV7TGWG', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
