-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 02:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_sembako`
--

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan`
--

CREATE TABLE `perhitungan` (
  `id` bigint(20) NOT NULL,
  `nama_barang` varchar(250) DEFAULT NULL,
  `stock` int(20) DEFAULT NULL,
  `jumlah_terjual` int(20) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `jenis_barang` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perhitungan`
--

INSERT INTO `perhitungan` (`id`, `nama_barang`, `stock`, `jumlah_terjual`, `tanggal_transaksi`, `jenis_barang`, `created_at`, `updated_at`) VALUES
(2, 'Kopi', 100, 10, '2024-08-01', 'Konsumsi', '2024-08-23 05:09:32', '2024-08-23 05:19:00'),
(3, 'Teh', 100, 19, '2024-08-05', 'Konsumsi', '2024-08-23 05:14:57', '2024-08-23 05:19:09'),
(4, 'Kopi', 90, 15, '2024-08-11', 'Konsumsi', '2024-08-23 05:17:02', '2024-08-23 05:17:02'),
(5, 'Pasta Gigi', 100, 20, '2024-08-11', 'Pembersih', '2024-08-23 05:17:27', '2024-08-23 05:17:27'),
(6, 'Sabun Mandi', 100, 30, '2024-08-11', 'Pembersih', '2024-08-23 05:17:50', '2024-08-23 05:17:50'),
(7, 'Sampo', 100, 25, '2024-08-12', 'Pembersih', '2024-08-23 05:18:17', '2024-08-23 05:18:17'),
(8, 'Teh', 81, 5, '2024-08-12', 'Konsumsi', '2024-08-23 05:18:38', '2024-08-23 05:18:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perhitungan`
--
ALTER TABLE `perhitungan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perhitungan`
--
ALTER TABLE `perhitungan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
