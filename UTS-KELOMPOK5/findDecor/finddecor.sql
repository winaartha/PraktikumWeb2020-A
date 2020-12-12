-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 03:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finddecor`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` decimal(10,0) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `deskripsi_barang`, `vendor_id`, `foto`) VALUES
(2, 'Meja Eufloria', '50000', 'terbaik\r\n', 7, ''),
(12, 'Set Kursi Eufloria', '90000', '', 7, ''),
(14, 'Tenda hias Eufloria', '850000', 'Tenda dengan hiasan terbaik', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_bayar` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `alamat_kirim` varchar(255) NOT NULL,
  `kab_kirim` varchar(100) NOT NULL,
  `kec_kirim` varchar(100) NOT NULL,
  `catatan` text NOT NULL,
  `status_bayar` varchar(50) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `bni` varchar(30) NOT NULL,
  `bri` varchar(30) NOT NULL,
  `bca` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL,
  `deskripsi_vendor` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `notelp`, `nama_vendor`, `alamat`, `kabupaten`, `kecamatan`, `bni`, `bri`, `bca`, `role_id`, `deskripsi_vendor`, `password`) VALUES
(4, 'firdaus', '', 'admin@gmail.com', '081333999839', '', '', '', '', '', '', '', 1, '', '$2y$10$YjleCV9y3oL5qaPdoQS5AOJeHattXmO2gSih49w53TccSbeXJs0hG'),
(5, 'firdas', '', 'zulkarnain@gmail.com', '011111', '', '', '', '', '', '', '', 3, '', '$2y$10$y7m/xkZ2LMhLM1s1SJgmH.h6QLAE6qTICL5yZ3s8Q8buQLXBWdn8W'),
(7, 'firdaus', 'Firdaus Zulkarnain', 'firdauszul@gmail.com', '085678367', 'Eufloria Dekorasi', 'Taman Giri', 'Badung', 'Kuta Selatan', '0789836', '983730203', '03739472', 2, 'Menyediakan Dekorasi Pernikahan Sesuai Dengan Yang Diinginkan ', '$2y$10$cC8aXnRB9F1ffKHJIzYzLua1CCzNjay5D9J6015jdU5Je27j0K5mu'),
(13, 'winaartha', '', 'wina@gmail.com', '0361873892', '', '', '', '', '', '', '', 3, '', '$2y$10$Gv6NjZeFRWDsxZrhXjmE6e5nMKbyIEIuZHNskiD9KuoOUHJM/5kRK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
