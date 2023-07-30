-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 11:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk4_week9_team4`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `IdBarang` int(11) NOT NULL,
  `NamaBarang` varchar(255) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Satuan` varchar(25) DEFAULT NULL,
  `IdPengguna` int(11) DEFAULT NULL,
  `HargaBarang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`IdBarang`, `NamaBarang`, `Keterangan`, `Satuan`, `IdPengguna`, `HargaBarang`) VALUES
(11, 'Buku', 'ATK', 'Piece', NULL, '5000'),
(12, 'Pensil', 'ATK', 'Piece', NULL, '3000'),
(15, 'Baju', 'Pakaian', 'Piece', NULL, '5000');

-- --------------------------------------------------------

--
-- Table structure for table `hakakses`
--

CREATE TABLE `hakakses` (
  `IdAkses` int(11) NOT NULL,
  `NamaAkses` varchar(255) NOT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hakakses`
--

INSERT INTO `hakakses` (`IdAkses`, `NamaAkses`, `Keterangan`) VALUES
(4, 'Penjual_Master', 'Penjual Buku'),
(9, 'Penjual_Soto', 'Penjual Soto');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `IdPelanggan` int(11) NOT NULL,
  `NamaPelanggan` varchar(255) NOT NULL,
  `NoTelp` varchar(255) NOT NULL,
  `AlamatPelanggan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`IdPelanggan`, `NamaPelanggan`, `NoTelp`, `AlamatPelanggan`) VALUES
(3, 'Refor', '0975233', 'Medan'),
(7, 'Kasman', '79787790', 'Jogja');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `IdPembelian` int(11) NOT NULL,
  `JumlahPembelian` int(11) DEFAULT NULL,
  `HargaBeli` int(11) DEFAULT NULL,
  `IdPengguna` int(11) DEFAULT NULL,
  `TransactionDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`IdPembelian`, `JumlahPembelian`, `HargaBeli`, `IdPengguna`, `TransactionDate`) VALUES
(5, 1, 500, NULL, '2023-07-29'),
(6, 2, 200, NULL, '2023-07-29'),
(7, 3, 400, NULL, '2023-07-29'),
(8, 2, 400, NULL, '2023-07-29'),
(9, 4, 700, NULL, '2023-07-29'),
(10, 3, 750, NULL, '2023-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `IdPengguna` int(11) NOT NULL,
  `NamaPengguna` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `NamaDepan` varchar(255) NOT NULL,
  `NamaBelakang` varchar(255) NOT NULL,
  `NoHp` int(11) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `IdAkses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`IdPengguna`, `NamaPengguna`, `Password`, `NamaDepan`, `NamaBelakang`, `NoHp`, `Alamat`, `IdAkses`) VALUES
(1, 'Refor', NULL, 'Refornia', 'Harahap', 12345, 'Medan', NULL),
(3, 'Bayyu', NULL, 'Bayyu', 'Putra', 392, 'Madiun Kota', NULL),
(5, 'Eko', NULL, 'Eko', 'Prasojo', 98654378, 'Salatiga', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `IdPenjualan` int(11) NOT NULL,
  `JumlahPenjualan` int(11) DEFAULT NULL,
  `HargaJual` int(11) DEFAULT NULL,
  `IdPengguna` int(11) DEFAULT NULL,
  `TransactionDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`IdPenjualan`, `JumlahPenjualan`, `HargaJual`, `IdPengguna`, `TransactionDate`) VALUES
(22, 2, 400, NULL, '2023-07-29'),
(23, 3, 500, NULL, '2023-07-29'),
(24, 5, 150, NULL, '2023-07-29'),
(25, 1, 10000, NULL, '2023-07-29'),
(26, 2, 9000, NULL, '2023-07-29'),
(27, 5, 8000, NULL, '2023-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `IdSuplier` int(11) NOT NULL,
  `NamaSuplier` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `IdPengguna` int(11) DEFAULT NULL,
  `NoTelp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`IdSuplier`, `NamaSuplier`, `Alamat`, `IdPengguna`, `NoTelp`) VALUES
(2, 'Supri', 'Jakarta', NULL, '081234567890'),
(3, 'Joko', 'Solo', NULL, '08123'),
(4, 'Eni', 'Semarang', NULL, '032309232');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_transaction`
-- (See below for the actual view)
--
CREATE TABLE `vw_transaction` (
`TransactionDate` varchar(255)
,`totalUnitPembelian` decimal(32,0)
,`TotalBiayaPembelian` decimal(32,0)
,`totalUnitJual` decimal(32,0)
,`TotalBiayaJual` decimal(32,0)
,`Hasil` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_transaction`
--
DROP TABLE IF EXISTS `vw_transaction`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_transaction`  AS SELECT DISTINCT `a`.`TransactionDate` AS `TransactionDate`, sum(`a`.`JumlahPembelian`) AS `totalUnitPembelian`, sum(`a`.`HargaBeli`) AS `TotalBiayaPembelian`, sum(`b`.`JumlahPenjualan`) AS `totalUnitJual`, sum(`b`.`HargaJual`) AS `TotalBiayaJual`, sum(`b`.`HargaJual`) - sum(`a`.`JumlahPembelian`) AS `Hasil` FROM (`pembelian` `a` join `penjualan` `b` on(`a`.`TransactionDate` = `b`.`TransactionDate`)) GROUP BY `a`.`TransactionDate` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`IdBarang`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `hakakses`
--
ALTER TABLE `hakakses`
  ADD PRIMARY KEY (`IdAkses`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`IdPelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`IdPembelian`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`IdPengguna`),
  ADD KEY `IdAkses` (`IdAkses`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`IdPenjualan`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`IdSuplier`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `IdBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hakakses`
--
ALTER TABLE `hakakses`
  MODIFY `IdAkses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `IdPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `IdPembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `IdPengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `IdPenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `IdSuplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
