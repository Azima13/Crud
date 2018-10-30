-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 12:00 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_crud`
--

CREATE TABLE `data_crud` (
  `no_surat` int(11) NOT NULL,
  `tgi_surat` date DEFAULT NULL,
  `asal` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `dasar_surat` varchar(100) NOT NULL,
  `no_spd1` int(50) NOT NULL,
  `nama1` varchar(100) NOT NULL,
  `no_spd2` int(20) NOT NULL,
  `nama2` varchar(50) NOT NULL,
  `no_spd3` int(20) NOT NULL,
  `nama3` varchar(50) NOT NULL,
  `no_spd4` int(20) NOT NULL,
  `nama4` varchar(40) NOT NULL,
  `no_spd5` int(20) NOT NULL,
  `nama5` varchar(50) NOT NULL,
  `no_spd6` int(20) NOT NULL,
  `nama6` varchar(50) NOT NULL,
  `penugasan` text,
  `tgl_berangkat` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `durasi` int(20) NOT NULL,
  `jangka_waktu` varchar(50) NOT NULL,
  `berangkat_dari` varchar(50) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `kendaraan` varchar(50) NOT NULL,
  `penandatangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_crud`
--

INSERT INTO `data_crud` (`no_surat`, `tgi_surat`, `asal`, `tanggal_surat`, `dasar_surat`, `no_spd1`, `nama1`, `no_spd2`, `nama2`, `no_spd3`, `nama3`, `no_spd4`, `nama4`, `no_spd5`, `nama5`, `no_spd6`, `nama6`, `penugasan`, `tgl_berangkat`, `tanggal_selesai`, `durasi`, `jangka_waktu`, `berangkat_dari`, `tujuan`, `kendaraan`, `penandatangan`) VALUES
(9, '2018-08-17', 'Lombok', '2018-08-17', 'Dinas', 1, 'Panji', 2, 'Azima', 3, 'Putut', 4, 'Bayu', 5, 'Azima', 6, 'Widianto', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2018-09-01', '2018-09-30', 30, '1-30', 'Kediri', 'Lombok', 'Umum', 'Deon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_crud`
--
ALTER TABLE `data_crud`
  ADD PRIMARY KEY (`no_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_crud`
--
ALTER TABLE `data_crud`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
