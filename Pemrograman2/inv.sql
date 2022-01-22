-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 05:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga`, `satuan`, `stok`) VALUES
('A0001', 'BAJU', 2000000, 'UNIT', 30),
('A0002', 'BUKU', 50000, 'BOX', 5),
('A0003', 'kURSI', 100000, 'UNIT', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `KodeCustomer` varchar(10) NOT NULL,
  `NamaCustomer` varchar(50) NOT NULL,
  `AlamatCustomer` varchar(100) NOT NULL,
  `NoTelepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`KodeCustomer`, `NamaCustomer`, `AlamatCustomer`, `NoTelepon`) VALUES
('C0001', 'PT. JAYA MAKMUR', 'JAKARTA SELATAN', '12345656'),
('rqewrqew', 'adsfffff', 'adfadf', '234234');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `agama`, `jurusan`, `alamat`, `email`, `telp`) VALUES
('17171065027', 'LATIF AGUS SANTOSO', 'Ponorogo', '2021-08-02', 'Hindu', 'Sistem Informasi', 'DKI JAKARTA', 'latifagussantotoso@gmail.com', '08122334445');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `noid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`noid`, `name`, `userName`, `email`, `password`) VALUES
(5, 'dahil', 'dahil', 'dahil.irlon@gmail.com', '$2y$10$oWiA6P6nu2UW1IeLJlmcgOjbFgulf7A0LRE8u2bByAC/nx2wMCLcC'),
(6, 'dd', 'budi', 'dahil.irlon@gmail.com', '$2y$10$MVwAIS8sdnXuh8jVFslWz.tdvs9w/DWgLz7HxAvqE0XTbum8CoH6q'),
(7, 'eko', 'eko', 'dahil.irlon@gmail.com', '$2y$10$Azjk2AG/iQWi/noznIoSQep08h3P/I.xePixzguf4V.UNsKMPY7.K'),
(8, 'skpi', 'skpi', 'skpi@gmail.com', '$2y$10$o1qJY.6A0NlQN/vlpoqAXuLbrq/NIDMsR7hJ7fP8PFG.vOjlt95OS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`KodeCustomer`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`noid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `noid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
