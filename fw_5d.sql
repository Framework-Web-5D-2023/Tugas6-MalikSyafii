-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 04:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fw_5d`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `minat` varchar(255) DEFAULT NULL,
  `domisili` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `prodi`, `minat`, `domisili`, `jenis_kelamin`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'admin@gmail.com', '123', 'INFORMATIKA', NULL, NULL, NULL, NULL, '2023-10-25', '2023-10-25', NULL),
(20, 'VITO', '12', 'Informatika', 'Web Developer', NULL, 'L', NULL, '2023-10-27', '2023-10-27', NULL),
(21, 'VITO', '2010631170044', 'Informatika', 'Web Developer', NULL, 'L', NULL, '2023-11-01', '2023-11-01', NULL),
(22, 'Malik', '21312312', 'Informatika', 'Web Developer', 'Cikarang', 'L', NULL, '2023-11-01', '2023-11-01', NULL),
(23, 'shopia', '123123121111', 'Informatika', 'Web Developer', 'PWK', 'P', NULL, '2023-11-01', '2023-11-01', NULL),
(24, 'bahar', '21312131213', 'Informatika', 'Web Developer', 'Tangerang', 'L', NULL, '2023-11-01', '2023-11-01', NULL),
(25, 'Alfian Vit', '122121212131', 'Informatika', 'Web Developer', 'Tangerang', 'L', NULL, '2023-11-01', '2023-11-01', NULL),
(32, 'radit', '12122222', 'Informatika', 'Web Developer', 'Tangerang', 'L', NULL, '2023-11-01', '2023-11-01', NULL),
(33, 'Rina', '201063117004411', 'Informatika', 'Web Developer', 'PWK', 'P', NULL, '2023-11-01', '2023-11-01', NULL),
(35, 'Alfian Vit', '21312312111', 'Informatika', 'Web Developer', NULL, 'L', NULL, '2023-11-01', '2023-11-01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
