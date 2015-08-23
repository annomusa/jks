-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2015 at 08:19 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sitruk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`ID_ADMIN` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `PRIVILEGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
`ID_KARYAWAN` int(11) NOT NULL,
  `NAMA` varchar(25) NOT NULL,
  `NO_HP` varchar(15) DEFAULT NULL,
  `ALAMAT` varchar(30) DEFAULT NULL,
  `TGL_MASUK_KERJA` date DEFAULT NULL,
  `PENEMPATAN` varchar(25) DEFAULT NULL,
  `STATUS` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
`ID_KENDARAAN` int(11) NOT NULL,
  `ID_KARYAWAN` int(11) NOT NULL,
  `NOPOL` varchar(10) NOT NULL,
  `STATUS_SOPIR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ongkos`
--

CREATE TABLE IF NOT EXISTS `ongkos` (
`ID_ONGKOS` int(11) NOT NULL,
  `ID_SATUAN` int(11) NOT NULL,
  `TUJUAN` varchar(25) NOT NULL,
  `HARGA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
`ID_PENERBIT` int(11) NOT NULL,
  `NAMA_PENERBIT` varchar(25) NOT NULL,
  `NO_TLP` varchar(15) DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE IF NOT EXISTS `pengadaan` (
`ID_PENGADAAN` int(11) NOT NULL,
  `NO_PO` varchar(25) NOT NULL,
  `TGL_PENGADAAN` date DEFAULT NULL,
  `PERMINTAAN` varchar(25) DEFAULT NULL,
  `HARGA_TOTAL` int(11) DEFAULT NULL,
  `NAMA_TOKO` varchar(25) DEFAULT NULL,
  `NO_TLP` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE IF NOT EXISTS `perbaikan` (
`ID_PERBAIKAN` int(11) NOT NULL,
  `ID_KENDARAAN` int(11) NOT NULL,
  `TGL_PERBAIKAN` date DEFAULT NULL,
  `KERUSAKAN` varchar(50) DEFAULT NULL,
  `ESTIMASI_WAKTU_PERBAIKAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan`
--

CREATE TABLE IF NOT EXISTS `perjalanan` (
`ID_PERJALANAN` int(11) NOT NULL,
  `ID_PENERBIT` int(11) NOT NULL,
  `ID_ONGKOS` int(11) NOT NULL,
  `ID_KENDARAAN` int(11) NOT NULL,
  `TGL_PERJALANAN` date NOT NULL,
  `NO_SURAT_PO` varchar(20) NOT NULL,
  `JENIS_PERINTAH` varchar(20) DEFAULT NULL,
  `RITASE` varchar(25) DEFAULT NULL,
  `TITIPAN_AWAL` int(11) DEFAULT NULL,
  `LEBIH` int(11) DEFAULT NULL,
  `KURANG` int(11) DEFAULT NULL,
  `AKHIR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `relasi_pengadaan_sparepart`
--

CREATE TABLE IF NOT EXISTS `relasi_pengadaan_sparepart` (
`ID_RELASI` int(11) NOT NULL,
  `ID_PENGADAAN` int(11) NOT NULL,
  `ID_SPAREPART` int(11) NOT NULL,
  `ID_SATUAN` int(11) NOT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `HARGA_SEMENTARA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE IF NOT EXISTS `satuan` (
`ID_SATUAN` int(11) NOT NULL,
  `SATUAN` varchar(20) NOT NULL,
  `JENIS_SATUAN` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE IF NOT EXISTS `sparepart` (
`ID_SPAREPART` int(11) NOT NULL,
  `NAMA_BARANG` varchar(25) NOT NULL,
  `HARGA_SATUAN` int(11) DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`ID_KARYAWAN`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
 ADD PRIMARY KEY (`ID_KENDARAAN`), ADD KEY `ID_KARYAWAN` (`ID_KARYAWAN`);

--
-- Indexes for table `ongkos`
--
ALTER TABLE `ongkos`
 ADD PRIMARY KEY (`ID_ONGKOS`), ADD KEY `ID_SATUAN` (`ID_SATUAN`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
 ADD PRIMARY KEY (`ID_PENERBIT`);

--
-- Indexes for table `pengadaan`
--
ALTER TABLE `pengadaan`
 ADD PRIMARY KEY (`ID_PENGADAAN`);

--
-- Indexes for table `perbaikan`
--
ALTER TABLE `perbaikan`
 ADD PRIMARY KEY (`ID_PERBAIKAN`), ADD KEY `ID_KENDARAAN` (`ID_KENDARAAN`);

--
-- Indexes for table `perjalanan`
--
ALTER TABLE `perjalanan`
 ADD PRIMARY KEY (`ID_PERJALANAN`), ADD KEY `ID_PENERBIT` (`ID_PENERBIT`), ADD KEY `ID_ONGKOS` (`ID_ONGKOS`), ADD KEY `ID_KENDARAAN` (`ID_KENDARAAN`);

--
-- Indexes for table `relasi_pengadaan_sparepart`
--
ALTER TABLE `relasi_pengadaan_sparepart`
 ADD PRIMARY KEY (`ID_RELASI`), ADD KEY `ID_PENGADAAN` (`ID_PENGADAAN`), ADD KEY `ID_SPAREPART` (`ID_SPAREPART`), ADD KEY `ID_SATUAN` (`ID_SATUAN`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
 ADD PRIMARY KEY (`ID_SATUAN`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
 ADD PRIMARY KEY (`ID_SPAREPART`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
MODIFY `ID_KARYAWAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
MODIFY `ID_KENDARAAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ongkos`
--
ALTER TABLE `ongkos`
MODIFY `ID_ONGKOS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
MODIFY `ID_PENERBIT` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengadaan`
--
ALTER TABLE `pengadaan`
MODIFY `ID_PENGADAAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perbaikan`
--
ALTER TABLE `perbaikan`
MODIFY `ID_PERBAIKAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perjalanan`
--
ALTER TABLE `perjalanan`
MODIFY `ID_PERJALANAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `relasi_pengadaan_sparepart`
--
ALTER TABLE `relasi_pengadaan_sparepart`
MODIFY `ID_RELASI` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
MODIFY `ID_SATUAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
MODIFY `ID_SPAREPART` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`ID_KARYAWAN`) REFERENCES `karyawan` (`ID_KARYAWAN`);

--
-- Constraints for table `ongkos`
--
ALTER TABLE `ongkos`
ADD CONSTRAINT `ongkos_ibfk_1` FOREIGN KEY (`ID_SATUAN`) REFERENCES `satuan` (`ID_SATUAN`);

--
-- Constraints for table `perbaikan`
--
ALTER TABLE `perbaikan`
ADD CONSTRAINT `perbaikan_ibfk_1` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`);

--
-- Constraints for table `perjalanan`
--
ALTER TABLE `perjalanan`
ADD CONSTRAINT `perjalanan_ibfk_1` FOREIGN KEY (`ID_PENERBIT`) REFERENCES `penerbit` (`ID_PENERBIT`),
ADD CONSTRAINT `perjalanan_ibfk_2` FOREIGN KEY (`ID_ONGKOS`) REFERENCES `ongkos` (`ID_ONGKOS`),
ADD CONSTRAINT `perjalanan_ibfk_3` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`);

--
-- Constraints for table `relasi_pengadaan_sparepart`
--
ALTER TABLE `relasi_pengadaan_sparepart`
ADD CONSTRAINT `relasi_pengadaan_sparepart_ibfk_1` FOREIGN KEY (`ID_PENGADAAN`) REFERENCES `pengadaan` (`ID_PENGADAAN`),
ADD CONSTRAINT `relasi_pengadaan_sparepart_ibfk_2` FOREIGN KEY (`ID_SPAREPART`) REFERENCES `sparepart` (`ID_SPAREPART`),
ADD CONSTRAINT `relasi_pengadaan_sparepart_ibfk_3` FOREIGN KEY (`ID_SATUAN`) REFERENCES `satuan` (`ID_SATUAN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
