-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 02:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_phpcrud`
--
DROP DATABASE IF EXISTS `db_phpcrud`;
CREATE DATABASE IF NOT EXISTS `db_phpcrud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_phpcrud`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--
-- Creation: Jun 18, 2021 at 07:53 AM
-- Last update: Jun 19, 2021 at 08:13 AM
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kdbarang` varchar(255) NOT NULL,
  `nmbarang` varchar(255) NOT NULL,
  `spesifikasi` varchar(255) NOT NULL,
  `noseri` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kdbarang`, `nmbarang`, `spesifikasi`, `noseri`, `lokasi`, `kondisi`) VALUES
(1, 'AP.001.BL', 'Router', 'TP-Link WiFi0950N', '217G067014332', 'LAB ICT', 'ON, masih berfungsi'),
(2, 'AP.002.BL', 'Access Point', 'TP-Link WiFi0940N', '217G067014333', 'LAB ICT', 'ON, masih berfungsi'),
(12, 'AP.005.BL', 'Router', 'TP-Link WiFi0950N', '217G067014339', 'Unit 2 Lt. 1', 'ON, masih berfungsi'),
(14, 'AP.006.BL', 'Access Point', 'TP-Link WiFi0940N', '217G067014338', 'Unit 2 Lt. 2', 'ON, masih berfungsi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kdbarang` (`kdbarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
