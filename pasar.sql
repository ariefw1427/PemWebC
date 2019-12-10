-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2019 at 03:55 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buah`
--

CREATE TABLE IF NOT EXISTS `tb_buah` (
  `nama_buah` varchar(20) DEFAULT NULL,
  `jenis_buah` varchar(20) DEFAULT NULL,
  `stok_buah` int(3) DEFAULT NULL,
  `harga_buah` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buah`
--

INSERT INTO `tb_buah` (`nama_buah`, `jenis_buah`, `stok_buah`, `harga_buah`) VALUES
('apel', 'buah rumahan', 40, 5000),
('', '', 0, 0),
('', '', 0, 0),
('apel', 'buah rumahan', 40, 5000),
('', '', 0, 0),
('apel', 'buah rumahan', 40, 5000),
('apel', 'buah rumahan', 40, 5000),
('apel', 'buah rumahan', 40, 5000),
('apel', 'buah rumahan', 40, 5000),
('apel', 'buah rumahan', 40, 5000),
('apel', 'buah rumahan', 40, 5000),
('jeruk', 'buah mewah', 100, 100000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
