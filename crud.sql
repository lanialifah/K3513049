-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2015 at 04:37 AM
-- Server version: 5.6.21-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE IF NOT EXISTS `coba` (
  `nama` varchar(50) NOT NULL,
`id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `hoby` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`nama`, `id`, `nim`, `jk`, `tempat`, `tanggal`, `hoby`, `agama`, `alamat`) VALUES
('Ibrahim', 10, 'K3513021', 'Laki-Laki', 'Sukoharjo', '1995-03-15', 'Olahraga', 'Islam', 'JL. PROF. DR SUHARSO NO 16 JAJAR LAWEYAN SURAKARTA'),
('Nurul', 12, 'K3513049', 'Perempuan', 'Bogor', '1995-05-01', 'Bernyanyi', 'Islam', 'Bogor'),
('Basyir', 14, 'K3513000', 'Laki-Laki', 'Jepara', '1995-03-11', 'Olahraga,Bernyanyi,Modifikasi Komputer', 'Islam', 'Solo');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE IF NOT EXISTS `username` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
