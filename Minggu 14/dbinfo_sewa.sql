-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 10:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbinfo_sewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_hunian`
--

CREATE TABLE `tb_hunian` (
  `id_hunian` int(11) NOT NULL,
  `nama_hunian` varchar(30) NOT NULL,
  `ket_lokasi` varchar(55) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `deskripsi` varchar(550) NOT NULL,
  `harga` int(11) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hunian`
--

INSERT INTO `tb_hunian` (`id_hunian`, `nama_hunian`, `ket_lokasi`, `alamat`, `kategori`, `deskripsi`, `harga`, `no_hp`, `gambar`) VALUES
(1, 'Kost Nirwana', 'Gajahmungkur, Semarang', 'JL Duniawi No. 001', 'Kost', '10 Kamar Kost, Kasur 1, Kamar Mandi Dalam, AC, TV, Lemari, Meja. Garasi muat untuk 4 mobil  dan 10 motor', 1200000, '082123123123', 'kost_1.jpg'),
(2, 'Kontrakan Mulia', 'Tembalang, Semarang', 'Sesame Street No. 001', 'Kontrakan', 'Kamar Tidur 4, Kamar Mandi 2, AC, TV. Garasi muat 1 mobil dan 4 motor', 35000000, '082321321321', 'kontrakan_2.jpg'),
(3, 'Apartemen Gofar', 'Simpang Lima, Semarang', 'Jl. Gajahmada', 'Apartemen', '1 Kamar Tidur Besar, Kamar Mandi, TV, AC, Ruang Merokok', 2750000, '081234321234', 'apartemen_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin1', 'admin1', '123', 1),
(2, 'user1', 'user1', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hunian`
--
ALTER TABLE `tb_hunian`
  ADD PRIMARY KEY (`id_hunian`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hunian`
--
ALTER TABLE `tb_hunian`
  MODIFY `id_hunian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
