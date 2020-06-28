-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 04:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username_admin` varchar(32) NOT NULL,
  `password_admin` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kostumer`
--

CREATE TABLE `kostumer` (
  `id_kostumer` int(2) NOT NULL,
  `nama_kostuner` varchar(30) NOT NULL,
  `alamat_kostumer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(2) NOT NULL,
  `merk_mobil` varchar(30) NOT NULL,
  `plat_mobil` varchar(12) NOT NULL,
  `warna_mobil` varchar(6) NOT NULL,
  `tahun_mobil` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `merk_mobil`, `plat_mobil`, `warna_mobil`, `tahun_mobil`, `created_at`, `updated_at`) VALUES
(1, 'avanza', 'DK 1234 PP', 'hitam', 2005, NULL, '2020-04-09 08:36:57'),
(2, 'inova', 'DK 2345 PU', 'hitam', 2005, NULL, NULL),
(4, 'jazz', 'Dk 8675 ZF', 'putih', 2015, '2020-04-09 08:21:38', '2020-04-09 08:21:38'),
(5, 'senia', 'DK 7659 RSD', 'silver', 2010, '2020-04-09 08:36:04', '2020-04-09 08:49:56'),
(6, 'jazz', 'P 7654 ZR', 'merah', 2011, '2020-04-09 08:48:24', '2020-04-09 08:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(2) NOT NULL,
  `id_admin` int(2) NOT NULL,
  `id_kostuner` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kostumer`
--
ALTER TABLE `kostumer`
  ADD PRIMARY KEY (`id_kostumer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kostumer`
--
ALTER TABLE `kostumer`
  MODIFY `id_kostumer` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
