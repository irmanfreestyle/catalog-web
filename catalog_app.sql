-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2019 at 05:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `foto_produk`
--

CREATE TABLE `foto_produk` (
  `id_foto` int(11) NOT NULL,
  `id_produk` varchar(200) NOT NULL,
  `nama_foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_produk`
--

INSERT INTO `foto_produk` (`id_foto`, `id_produk`, `nama_foto`) VALUES
(27, '5d67ed79a52dc', 'eb8aea40acdcc7415fc81766b7ebcf4e.png'),
(28, '5d67fbc35340f', '4a667185d99e2f97d4ffa06fe0c7f786.png'),
(29, '5d67fbc35340f', '98ad0acb21ff9da2ee80909a81ce1354.jpg'),
(30, '5d67fbc35340f', '54e5ed7346a52311422c57b05d61b247.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'tas'),
(3, 'outdoor'),
(4, 'pakaian pria'),
(7, 'gadget');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `kategori`, `deskripsi`, `tgl_upload`) VALUES
('5d67ed79a52dc', 'Buku Tulis Bergaris Murah Banget', 100000, 20, 'pakaian pria', 'Buku Tulis Bergaris Murah Banget', '2019-08-30'),
('5d67fbc35340f', 'Tas Gunung Profesional Banget Wow', 500000, 23, 'outdoor', 'This is description', '2019-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `socmed`
--

CREATE TABLE `socmed` (
  `id` int(11) NOT NULL,
  `nama_socmed` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL,
  `tampilkan` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socmed`
--

INSERT INTO `socmed` (`id`, `nama_socmed`, `link`, `tampilkan`) VALUES
(1, 'instagram', 'instagram.com/namaig', 1),
(2, 'facebook', 'fb.com/namafb', 0),
(3, 'twitter', 'twitter.com/namatwitter', 0),
(9, 'tokped', 'tokped.com', 1),
(10, 'shopee', 'shopee.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_produk`
--
ALTER TABLE `foto_produk`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `foto_produk_ibfk_1` (`id_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `socmed`
--
ALTER TABLE `socmed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto_produk`
--
ALTER TABLE `foto_produk`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `socmed`
--
ALTER TABLE `socmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto_produk`
--
ALTER TABLE `foto_produk`
  ADD CONSTRAINT `foto_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
