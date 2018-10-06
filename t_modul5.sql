-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2018 at 09:29 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_modul5`
--

CREATE TABLE IF NOT EXISTS `t_modul5` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` text NOT NULL,
  `prg_studi` text NOT NULL,
  `fakultas` text NOT NULL,
  `komentar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_modul5`
--

INSERT INTO `t_modul5` (`nim`, `nama`, `email`, `tgl_lahir`, `jns_kelamin`, `prg_studi`, `fakultas`, `komentar`) VALUES
('999', 'fadhil', 'fadhil@gmail.com', '2018-10-28', 'laki-laki', 'teknik telekomunikasi', 'FIK', 'halo saya mahasiswa telkom university'),
('6701174096', 'm.a. fadhillah', 'muhammadfadhil2199@gmail.com', '2018-09-21', 'laki-laki', 'manajemen informatika', 'FIT', 'asle luyuh muntung temakan nasgor nang disubarang tu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
