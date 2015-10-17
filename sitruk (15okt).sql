-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2015 at 03:27 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NAMA`, `USERNAME`, `PASSWORD`, `PRIVILEGE`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'Riska', 'riska', 'riska', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ban`
--

CREATE TABLE IF NOT EXISTS `ban` (
`ID_BAN` int(11) NOT NULL,
  `ID_POSISI` int(11) NOT NULL,
  `NOMOR_SERI` varchar(20) NOT NULL,
  `MERK` varchar(20) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `JUMLAH` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ban`
--

INSERT INTO `ban` (`ID_BAN`, `ID_POSISI`, `NOMOR_SERI`, `MERK`, `HARGA`, `JUMLAH`) VALUES
(1, 1, '12334534', 'DUNLOP', 1500000, 6),
(2, 2, '12334535', 'Maspion', 210000, 14);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
`ID_KARYAWAN` int(11) NOT NULL,
  `ID_PRIVILEGE` int(11) NOT NULL,
  `NAMA` varchar(25) NOT NULL,
  `NO_HP` varchar(15) DEFAULT NULL,
  `ALAMAT` varchar(30) DEFAULT NULL,
  `TGL_MASUK_KERJA` date DEFAULT NULL,
  `PENEMPATAN` varchar(25) DEFAULT NULL,
  `STATUS` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`ID_KARYAWAN`, `ID_PRIVILEGE`, `NAMA`, `NO_HP`, `ALAMAT`, `TGL_MASUK_KERJA`, `PENEMPATAN`, `STATUS`) VALUES
(1, 3, 'Badrun', '081232119087', 'Jl. Wonorejo 2, Surabaya', '2015-08-05', 'Lapangan', 'Supir'),
(3, 3, 'Budi', '08124292102', 'Jl Kertajaya', '2013-04-02', 'Mekanik', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
`ID_KENDARAAN` int(11) NOT NULL,
  `ID_KARYAWAN` int(11) NOT NULL,
  `NOPOL` varchar(10) NOT NULL,
  `STATUS_SOPIR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`ID_KENDARAAN`, `ID_KARYAWAN`, `NOPOL`, `STATUS_SOPIR`) VALUES
(1, 1, 'L 1234 NN', 'Sopir');

-- --------------------------------------------------------

--
-- Table structure for table `ongkos`
--

CREATE TABLE IF NOT EXISTS `ongkos` (
`ID_ONGKOS` int(11) NOT NULL,
  `ID_SATUAN` int(11) NOT NULL,
  `JENIS_ONGKOS` int(11) NOT NULL,
  `TUJUAN` varchar(25) NOT NULL,
  `HARGA` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkos`
--

INSERT INTO `ongkos` (`ID_ONGKOS`, `ID_SATUAN`, `JENIS_ONGKOS`, `TUJUAN`, `HARGA`) VALUES
(1, 1, 0, 'Pasir Ketapang', 2500),
(2, 1, 0, 'Pasir Klampis', 2000),
(3, 1, 1, 'FAT', 190),
(4, 1, 1, 'Operasional', 70),
(5, 1, 0, 'Pasir Suramadu', 600);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
`ID_PENERBIT` int(11) NOT NULL,
  `NAMA_PENERBIT` varchar(25) NOT NULL,
  `NO_TLP` varchar(15) DEFAULT NULL,
  `ALAMAT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`ID_PENERBIT`, `NAMA_PENERBIT`, `NO_TLP`, `ALAMAT`) VALUES
(1, 'PT. Maju Mundur', '0812415123421', 'Jalan kebenaran'),
(2, 'PT ASem Pol', '0812415123421', 'JL adem ayem'),
(3, 'PT Suka maju', '082424123151', 'Jl. Biliton'),
(4, 'PT Sinar Jaya', '085656603212', 'Jl. Raya Darmo 16'),
(5, 'PT ELPE2', '0987654321', 'tc its');

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan`
--

CREATE TABLE IF NOT EXISTS `pengadaan` (
`ID_PENGADAAN` int(11) NOT NULL,
  `NO_PO` varchar(25) NOT NULL,
  `TGL_PENGADAAN` date DEFAULT NULL,
  `PERMINTAAN` varchar(250) DEFAULT NULL,
  `HARGA_TOTAL` int(11) DEFAULT NULL,
  `NAMA_TOKO` varchar(100) DEFAULT NULL,
  `NO_TLP` varchar(15) DEFAULT NULL,
  `STATUS` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengadaan`
--

INSERT INTO `pengadaan` (`ID_PENGADAAN`, `NO_PO`, `TGL_PENGADAAN`, `PERMINTAAN`, `HARGA_TOTAL`, `NAMA_TOKO`, `NO_TLP`, `STATUS`) VALUES
(1, 'PO 001', '2015-09-13', 'Penambahan stok ban', 1400000, 'UD. Ban Jaya', '081232120291', 'DISETUJUI KEUANGAN'),
(2, 'PO 001', '2015-09-13', 'Penambahan stok ban', 3500000, 'UD. Ban Jaya', '081232120291', 'DISETUJUI KEUANGAN'),
(3, 'PO 005', '2015-09-15', 'Karburator', 1400000, 'Sulijep', '0124215125615', 'DISETUJUI KEUANGAN'),
(4, 'PO 006', '2015-09-15', 'Oli mesin', 900000, 'UD. Ban Jaya', '081242125151', 'DISETUJUI KEUANGAN'),
(5, 'PO 007', '2015-09-16', 'Oli gear', 14375000, 'UD. Ban Jaya', '081232120291', 'DISETUJUI KEUANGAN'),
(6, 'PO 008', '2015-09-16', 'asasdas', 2175000, 'asdawaw', '234234', 'DISETUJUI KEUANGAN'),
(7, 'PO 010', '2015-09-16', 'Pengadaan perkakas bengke', 300000, 'UD. Ban Jaya', '081232120291', 'DISETUJUI KEUANGAN'),
(8, 'PO 011', '2015-09-25', 'Permintaan perkakas bengk', 250000, 'UD. Ban Jaya', '081232120291', 'DISETUJUI KEUANGAN'),
(9, 'PO 012', '2015-09-25', 'afvas', 100000, 'asa', '012821', 'DISETUJUI KEUANGAN'),
(10, 'PO 006', '2015-10-14', 'Stir baru', 350000, 'Toko sinar terang', '04112019210', 'DISETUJUI KEUANGAN'),
(11, 'PO 009', '2015-10-15', 'Stir tipe 1 ', 525000, 'Toko sinar terang', '0812024212121', 'DISETUJUI KEUANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE IF NOT EXISTS `perbaikan` (
`ID_PERBAIKAN` int(11) NOT NULL,
  `ID_KENDARAAN` int(11) NOT NULL,
  `TGL_PERBAIKAN` date DEFAULT NULL,
  `KERUSAKAN` varchar(50) DEFAULT NULL,
  `ESTIMASI_WAKTU_PERBAIKAN` int(11) DEFAULT NULL,
  `JENIS_PERBAIKAN` varchar(50) NOT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `PJ_MEKANIK` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbaikan`
--

INSERT INTO `perbaikan` (`ID_PERBAIKAN`, `ID_KENDARAAN`, `TGL_PERBAIKAN`, `KERUSAKAN`, `ESTIMASI_WAKTU_PERBAIKAN`, `JENIS_PERBAIKAN`, `STATUS`, `PJ_MEKANIK`) VALUES
(3, 1, '2015-09-14', 'kerusakan pada as ban', 2, '0', '', 1),
(4, 1, '2015-09-14', 'kerusakan pada as ban', 3, '0', 'Ke Mekanik', 1),
(5, 1, '2015-09-16', 'Penggantian velg ban', 1, '1', 'SELESAI', 1),
(6, 1, '2015-10-15', 'Sembarang', 1, '2', 'Ke Mekanik dan Ganti Sparepart', NULL),
(7, 1, '2015-10-15', 'Sembarang', 1, '2', 'Ke Mekanik dan Ganti Sparepart', NULL),
(8, 1, '2015-10-15', 'Sembarang wes', 3, '2', 'SELESAI', NULL),
(9, 1, '2015-10-17', 'kerusakan pada as ban', 3, '2', 'SELESAI', NULL);

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
  `RITASE` int(25) DEFAULT NULL,
  `TITIPAN_AWAL` int(11) DEFAULT NULL,
  `TAMBAHAN` int(11) DEFAULT NULL,
  `SISA` int(11) DEFAULT NULL,
  `UANG_DIBERIKAN` int(11) DEFAULT NULL,
  `UANG_DIBAWA` int(11) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perjalanan`
--

INSERT INTO `perjalanan` (`ID_PERJALANAN`, `ID_PENERBIT`, `ID_ONGKOS`, `ID_KENDARAAN`, `TGL_PERJALANAN`, `NO_SURAT_PO`, `JENIS_PERINTAH`, `RITASE`, `TITIPAN_AWAL`, `TAMBAHAN`, `SISA`, `UANG_DIBERIKAN`, `UANG_DIBAWA`, `STATUS`) VALUES
(4, 1, 0, 1, '2015-08-31', 'PO 001', 'Langsung', 2600, NULL, NULL, NULL, NULL, NULL, 'SELESAI'),
(5, 1, 0, 1, '2015-09-08', 'PO 002', 'Langsung', NULL, NULL, NULL, NULL, NULL, NULL, 'BARU'),
(6, 1, 0, 1, '2015-09-11', 'PO 0023', 'Langsung', 0, NULL, NULL, NULL, NULL, NULL, 'TUJUAN TERISI'),
(7, 1, 0, 1, '2015-10-15', 'PO 003', 'Cepat kirimkan', 600, 2000, NULL, 1400, 250, 1650, 'SELESAI'),
(8, 2, 0, 1, '2015-09-16', 'PO 010', 'Langsung', 2600, NULL, NULL, NULL, NULL, NULL, 'TUJUAN TERISI'),
(9, 3, 0, 1, '2015-09-28', 'PO 006', 'Langsung', 4800, 7000, 70, 2130, 500, 2630, 'SELESAI'),
(10, 4, 0, 1, '2015-10-02', 'PO 009', 'Langsung', 3100, 4000, 190, 710, 1290, 2000, 'SELESAI'),
(11, 5, 0, 1, '2015-10-15', 'PO012', 'Biasa wae', 4500, 2000, 260, -2760, 3000, 240, 'SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `posisi_ban`
--

CREATE TABLE IF NOT EXISTS `posisi_ban` (
`ID_POSISI` int(11) NOT NULL,
  `POSISI` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi_ban`
--

INSERT INTO `posisi_ban` (`ID_POSISI`, `POSISI`) VALUES
(1, 'DEPAN KANAN LUAR'),
(2, 'DEPAN KANAN DALAM'),
(3, 'DEPAN KIRI LUAR'),
(4, 'DEPAN KIRI DALAM'),
(5, 'BELAKANG KANAN LUAR'),
(6, 'BELAKANG KANAN DALAM'),
(7, 'BELAKANG KIRI LUAR'),
(8, 'BELAKANG KIRI DALAM');

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
`ID_PRIVILEGE` int(11) NOT NULL,
  `NAMA_PRIVILEGE` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`ID_PRIVILEGE`, `NAMA_PRIVILEGE`) VALUES
(1, 'Karyawan Tetap'),
(2, 'Karyawan Tidak Tetap'),
(3, 'Mekanik');

-- --------------------------------------------------------

--
-- Table structure for table `relasi_pb`
--

CREATE TABLE IF NOT EXISTS `relasi_pb` (
`ID_RELASI_PB` int(11) NOT NULL,
  `ID_PERBAIKAN` int(11) NOT NULL,
  `ID_BAN` int(11) NOT NULL,
  `JUMLAH` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_pb`
--

INSERT INTO `relasi_pb` (`ID_RELASI_PB`, `ID_PERBAIKAN`, `ID_BAN`, `JUMLAH`) VALUES
(6, 5, 1, 2),
(7, 5, 2, 2),
(8, 8, 1, 1),
(9, 9, 1, 1),
(10, 9, 2, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_pengadaan_sparepart`
--

INSERT INTO `relasi_pengadaan_sparepart` (`ID_RELASI`, `ID_PENGADAAN`, `ID_SPAREPART`, `ID_SATUAN`, `JUMLAH`, `HARGA_SEMENTARA`) VALUES
(2, 2, 1, 0, 5, 3500000),
(3, 1, 1, 0, 2, 1400000),
(4, 3, 1, 0, 2, 1400000),
(5, 5, 1, 0, 10, 7000000),
(6, 6, 2, 0, 1, 75000),
(7, 6, 1, 0, 3, 2100000),
(8, 5, 2, 0, 5, 375000),
(9, 7, 3, 0, 2, 300000),
(10, 8, 4, 0, 10, 50000),
(11, 8, 2, 0, 2, 150000),
(12, 10, 5, 0, 2, 350000),
(13, 9, 4, 0, 20, 100000),
(14, 4, 2, 0, 12, 900000),
(15, 11, 5, 0, 3, 525000);

-- --------------------------------------------------------

--
-- Table structure for table `relasi_po`
--

CREATE TABLE IF NOT EXISTS `relasi_po` (
`ID_RELASI_PO` int(11) NOT NULL,
  `ID_PERJALANAN` int(11) NOT NULL,
  `ID_ONGKOS` int(11) NOT NULL,
  `KETERANGAN` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi_po`
--

INSERT INTO `relasi_po` (`ID_RELASI_PO`, `ID_PERJALANAN`, `ID_ONGKOS`, `KETERANGAN`) VALUES
(2, 5, 1, '0'),
(3, 5, 2, '0'),
(6, 4, 1, '0'),
(7, 8, 1, '0'),
(8, 9, 1, '0'),
(9, 9, 2, '0'),
(13, 10, 1, '0'),
(14, 10, 5, '0'),
(19, 10, 3, ''),
(20, 7, 5, ''),
(21, 6, 1, ''),
(22, 6, 2, ''),
(23, 11, 1, ''),
(24, 11, 2, ''),
(25, 11, 4, ''),
(26, 11, 3, ''),
(27, 9, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE IF NOT EXISTS `satuan` (
`ID_SATUAN` int(11) NOT NULL,
  `SATUAN` varchar(20) NOT NULL,
  `JENIS_SATUAN` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`ID_SATUAN`, `SATUAN`, `JENIS_SATUAN`) VALUES
(1, 'bh', 'buah');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE IF NOT EXISTS `sparepart` (
`ID_SPAREPART` int(11) NOT NULL,
  `NAMA_BARANG` varchar(25) NOT NULL,
  `HARGA_SATUAN` int(11) DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL,
  `TGL_PENGADAAN` date DEFAULT NULL,
  `JML_PENGADAAN` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`ID_SPAREPART`, `NAMA_BARANG`, `HARGA_SATUAN`, `STOK`, `TGL_PENGADAAN`, `JML_PENGADAAN`) VALUES
(1, 'Ban Luar Truk Tipe 1', 700000, 13, '2015-10-15', 3),
(2, 'Oli Mesin', 75000, 20, '2015-10-14', 10),
(3, 'Perkakas bengkel', 150000, 2, '2015-10-14', 2),
(4, 'Obeng', 5000, 30, '2015-10-14', 30),
(5, 'Stir tipe 1', 175000, 5, '2015-10-15', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `ban`
--
ALTER TABLE `ban`
 ADD PRIMARY KEY (`ID_BAN`), ADD KEY `ID_POSISI` (`ID_POSISI`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`ID_KARYAWAN`), ADD KEY `ID_PRIVILEGE` (`ID_PRIVILEGE`);

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
 ADD PRIMARY KEY (`ID_PERBAIKAN`), ADD KEY `ID_KENDARAAN` (`ID_KENDARAAN`), ADD KEY `PJ_MEKANIK` (`PJ_MEKANIK`);

--
-- Indexes for table `perjalanan`
--
ALTER TABLE `perjalanan`
 ADD PRIMARY KEY (`ID_PERJALANAN`), ADD KEY `ID_PENERBIT` (`ID_PENERBIT`), ADD KEY `ID_ONGKOS` (`ID_ONGKOS`), ADD KEY `ID_KENDARAAN` (`ID_KENDARAAN`);

--
-- Indexes for table `posisi_ban`
--
ALTER TABLE `posisi_ban`
 ADD PRIMARY KEY (`ID_POSISI`);

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
 ADD PRIMARY KEY (`ID_PRIVILEGE`);

--
-- Indexes for table `relasi_pb`
--
ALTER TABLE `relasi_pb`
 ADD PRIMARY KEY (`ID_RELASI_PB`), ADD KEY `ID_PERBAIKAN` (`ID_PERBAIKAN`), ADD KEY `ID_BAN` (`ID_BAN`);

--
-- Indexes for table `relasi_pengadaan_sparepart`
--
ALTER TABLE `relasi_pengadaan_sparepart`
 ADD PRIMARY KEY (`ID_RELASI`), ADD KEY `ID_PENGADAAN` (`ID_PENGADAAN`), ADD KEY `ID_SPAREPART` (`ID_SPAREPART`), ADD KEY `ID_SATUAN` (`ID_SATUAN`);

--
-- Indexes for table `relasi_po`
--
ALTER TABLE `relasi_po`
 ADD PRIMARY KEY (`ID_RELASI_PO`), ADD KEY `ID_PERJALANAN` (`ID_PERJALANAN`), ADD KEY `ID_ONGKOS` (`ID_ONGKOS`);

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
MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ban`
--
ALTER TABLE `ban`
MODIFY `ID_BAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
MODIFY `ID_KARYAWAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
MODIFY `ID_KENDARAAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ongkos`
--
ALTER TABLE `ongkos`
MODIFY `ID_ONGKOS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
MODIFY `ID_PENERBIT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengadaan`
--
ALTER TABLE `pengadaan`
MODIFY `ID_PENGADAAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `perbaikan`
--
ALTER TABLE `perbaikan`
MODIFY `ID_PERBAIKAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `perjalanan`
--
ALTER TABLE `perjalanan`
MODIFY `ID_PERJALANAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `posisi_ban`
--
ALTER TABLE `posisi_ban`
MODIFY `ID_POSISI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
MODIFY `ID_PRIVILEGE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `relasi_pb`
--
ALTER TABLE `relasi_pb`
MODIFY `ID_RELASI_PB` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `relasi_pengadaan_sparepart`
--
ALTER TABLE `relasi_pengadaan_sparepart`
MODIFY `ID_RELASI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `relasi_po`
--
ALTER TABLE `relasi_po`
MODIFY `ID_RELASI_PO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
MODIFY `ID_SATUAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
MODIFY `ID_SPAREPART` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ban`
--
ALTER TABLE `ban`
ADD CONSTRAINT `ban_ibfk_1` FOREIGN KEY (`ID_POSISI`) REFERENCES `posisi_ban` (`ID_POSISI`);

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`ID_PRIVILEGE`) REFERENCES `privilege` (`ID_PRIVILEGE`);

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
ADD CONSTRAINT `perbaikan_ibfk_1` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`),
ADD CONSTRAINT `perbaikan_ibfk_2` FOREIGN KEY (`PJ_MEKANIK`) REFERENCES `karyawan` (`ID_KARYAWAN`);

--
-- Constraints for table `perjalanan`
--
ALTER TABLE `perjalanan`
ADD CONSTRAINT `perjalanan_ibfk_1` FOREIGN KEY (`ID_PENERBIT`) REFERENCES `penerbit` (`ID_PENERBIT`),
ADD CONSTRAINT `perjalanan_ibfk_3` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`);

--
-- Constraints for table `relasi_pb`
--
ALTER TABLE `relasi_pb`
ADD CONSTRAINT `relasi_pb_ibfk_1` FOREIGN KEY (`ID_PERBAIKAN`) REFERENCES `perbaikan` (`ID_PERBAIKAN`),
ADD CONSTRAINT `relasi_pb_ibfk_2` FOREIGN KEY (`ID_BAN`) REFERENCES `ban` (`ID_BAN`);

--
-- Constraints for table `relasi_pengadaan_sparepart`
--
ALTER TABLE `relasi_pengadaan_sparepart`
ADD CONSTRAINT `relasi_pengadaan_sparepart_ibfk_1` FOREIGN KEY (`ID_PENGADAAN`) REFERENCES `pengadaan` (`ID_PENGADAAN`),
ADD CONSTRAINT `relasi_pengadaan_sparepart_ibfk_2` FOREIGN KEY (`ID_SPAREPART`) REFERENCES `sparepart` (`ID_SPAREPART`);

--
-- Constraints for table `relasi_po`
--
ALTER TABLE `relasi_po`
ADD CONSTRAINT `relasi_po_ibfk_1` FOREIGN KEY (`ID_PERJALANAN`) REFERENCES `perjalanan` (`ID_PERJALANAN`),
ADD CONSTRAINT `relasi_po_ibfk_2` FOREIGN KEY (`ID_ONGKOS`) REFERENCES `ongkos` (`ID_ONGKOS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
