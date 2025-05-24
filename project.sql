-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2025 at 03:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nama_panggilan` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `no_hp_ayah` varchar(20) DEFAULT NULL,
  `no_hp_ibu` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` enum('Belum Diverifikasi','Diterima','Ditolak') DEFAULT 'Belum Diverifikasi',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama_lengkap`, `nama_panggilan`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `no_hp_ayah`, `no_hp_ibu`, `email`, `status`, `created_at`) VALUES
(1, 'cuindywh', 'bnas', 'fwtdghbjan', 'jeme', '2025-04-09', 'P', 'qaSXZ', 'WASDX', '09876', '1234567', 'cindysuccessart@gmail.com', 'Belum Diverifikasi', '2025-04-29 01:30:59'),
(2, 'cuindywh', 'bnas', 'JEMNER', 'jeme', '2025-04-08', 'L', 'qaSXZ', 'WASDX', '09876', '1234567', 'cindysuccessart@gmail.com', 'Belum Diverifikasi', '2025-04-29 01:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_ortu`
--

CREATE TABLE `pesan_ortu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomor` varchar(20) DEFAULT NULL,
  `surel` varchar(100) DEFAULT NULL,
  `pesan` text NOT NULL,
  `tanggal_kirim` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan_ortu`
--

INSERT INTO `pesan_ortu` (`id`, `nama`, `nomor`, `surel`, `pesan`, `tanggal_kirim`) VALUES
(1, 'cindy', '32456789', 'cindy@gmail.com', 'ghj', '2025-04-22 09:01:05'),
(2, 'cindy', '32456789', 'cindy@gmail.com', 'ghj', '2025-04-22 09:21:29'),
(3, 'cindy', '32456789', 'cindy@gmail.com', 'ghj', '2025-04-22 11:50:22'),
(4, 'indah', '08888', 'indah@gmail.com', 'alhamdulillah', '2025-04-23 14:24:52'),
(5, 'ardan', '0822', 'indah123@gmail.com', 'miss uu', '2025-04-23 14:36:14'),
(6, 'indahh', '08123', 'indh@gmail.com', 'a', '2025-04-23 14:48:24'),
(7, 'indah', '08888', 'indah@gmail.com', 'alhamdulillah', '2025-04-23 14:51:14'),
(8, 'indah', '08888', 'indah@gmail.com', 'alhamdulillah', '2025-04-23 14:54:43'),
(9, 'cindy', '0822', 'cindy@gmail.com', 'sqax', '2025-04-23 14:55:21'),
(10, 'cindy', '0822', 'indah123@gmail.com', 'saxz', '2025-04-23 14:56:14'),
(11, 'cindy', '0822', 'indah123@gmail.com', 'saxz', '2025-04-23 14:56:48'),
(22, 'cindy', '32456789', 'indah@gmail.com', 'ax', '2025-05-18 19:26:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_ortu`
--
ALTER TABLE `pesan_ortu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan_ortu`
--
ALTER TABLE `pesan_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
