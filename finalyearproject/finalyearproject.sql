-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 01:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2`
--

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `deliveryman` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `staff` varchar(100) NOT NULL,
  `other2` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `time`, `deliveryman`, `type`, `total`, `staff`, `other2`) VALUES
(2, '2023-01-22 02:37:55', 'ISSOL', 'JNT', 10, 'KIKIN', 'APA MAHU?'),
(3, '2023-01-22 17:25:34', 'YUSUFF', 'NINJA VAN', 15, 'WAK', 'SAYA INGIN MENYATAKAN HASRAT UNTUK SENTIASA JUJUR DALAM PEKERJAAN SAYA, SEKIAN TERIMA KASIH.'),
(5, '2023-01-24 01:11:42', 'AMIRTULDIN', 'POS LAJU', 10, 'KIKIN', ''),
(6, '2023-01-24 01:12:06', 'AMIRTULDIN', 'POS LAJU', 10, 'KIKIN', ''),
(7, '2023-01-24 01:12:57', 'ISSOL', 'POS LMBAT', 15, 'WAKKUN', ''),
(8, '2023-01-24 20:00:49', 'kun', 'NINJA VAN', 3, 'KIKIN', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'IMG_20211021_141552-removebg-preview.png', '2023-01-21 00:23:31', '1'),
(2, 'photo_2022-12-07_12-01-06.jpg', '2023-01-21 00:25:45', '1'),
(3, 'oting.jpeg', '2023-01-21 00:33:06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(11) NOT NULL,
  `tracking` varchar(110) NOT NULL,
  `name` varchar(110) NOT NULL,
  `no` varchar(15) NOT NULL,
  `courier` varchar(110) NOT NULL,
  `category` varchar(110) NOT NULL,
  `color` varchar(110) NOT NULL,
  `other` varchar(11000) NOT NULL,
  `noic` varchar(110) NOT NULL,
  `time` datetime NOT NULL,
  `status` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `tracking`, `name`, `no`, `courier`, `category`, `color`, `other`, `noic`, `time`, `status`) VALUES
(1, 'SXC12345M456', 'Mohammad Yusuf Bin Sumardi', '0107971841', 'JNT', 'Kotak Besar', 'BLACK', 'APA MAHU?', '1234567890', '2023-01-24 00:56:22', 'Already'),
(11, '600503200495', 'Mohammad Yusuf Bin Sumardi', '0137013122', 'POS LAJU', 'Kotak Besar', 'PUTIH', 'NDADA', '12234545', '2023-01-24 01:03:05', 'Already'),
(13, '0987654321', 'Mohd Izzul Ikhwan Bin Mohd Yusof', '011079718417', 'POS LAJU', 'Kotak Kecil', 'HITAM', 'APA MAHU? TiADA', '', '0000-00-00 00:00:00', ''),
(14, '786202589632', 'MOHD. DZULKIFLI BIN JAIMIN', '1359846257', 'NINJA VAN', 'Kotak Besar', 'BLACK WHITE', '', '', '0000-00-00 00:00:00', ''),
(15, '70.36841252', 'Mohd Izzul Ikhwan Bin Mohd Yusof', '011079718417', 'POS LAJU', 'Kotak Besar', 'HITAM', '', '', '0000-00-00 00:00:00', ''),
(16, '1452078963', 'Mohammad Yusuf Bin Sumardi', '0107971841', 'NINJA VAN', 'Kotak Kecil', 'GRAY', '', '', '0000-00-00 00:00:00', ''),
(17, '7862014563', 'Mohd Izzul Ikhwan Bin Mohd Yusof', '0123456789', 'POS LAJU', 'Kotak Besar', 'PUTIH', 'TIADA', '', '0000-00-00 00:00:00', ''),
(18, '12345', 'wak', '0137013122', 'NINJA VAN', 'Parcel Kecil', 'GRAY', '', '01010101', '2023-01-24 20:01:21', 'Already pickup');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `date_birth` date NOT NULL,
  `education_level` varchar(100) NOT NULL,
  `sem` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nophone` varchar(20) NOT NULL,
  `p_address` varchar(100) NOT NULL,
  `p_postcode` int(20) NOT NULL,
  `p_city` varchar(100) NOT NULL,
  `p_state` varchar(100) NOT NULL,
  `t_address` varchar(100) NOT NULL,
  `t_postcode` int(20) NOT NULL,
  `t_city` varchar(100) NOT NULL,
  `t_state` varchar(100) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `father_name`, `mother_name`, `gender`, `date_birth`, `education_level`, `sem`, `email`, `nophone`, `p_address`, `p_postcode`, `p_city`, `p_state`, `t_address`, `t_postcode`, `t_city`, `t_state`, `file_name`, `uploaded_on`, `status`) VALUES
(14, 'MOHAMMAD YUSUF', 'SUMARDI BIN ARMAN', 'HAPSAWAN BINTI SADDU', 'Male', '2000-12-31', 'Diploma', 5, 'mhd508761@gmail.com', '0107971841', 'BATU 2 JALAN APAS LORONG MAT SALLEH', 91000, 'TAWAU', 'SABAH', 'BATU 2 JALAN APAS LORONG MAT SALLEH', 91000, 'TAWAU', 'SABAH', 'yusuf.jpg', '2023-01-17 03:58:57', '1'),
(15, 'RORONOA ZORO', 'ASYURA RORONOA', 'HILANG', 'Male', '1993-12-16', 'Master', 8, 'izzul@gmail.com', '0123456789', 'WANO KUNI', 77710, 'ONE PECE', 'WANO', 'WANO KUNI', 77710, 'ONE PIEACE', 'WANO', '5c9a9e2f9f86056af10fd277f5490e2e.jpg', '2023-01-17 12:11:59', '1'),
(16, 'MOHD IZZUL', 'MOHD YUSOF', 'PASNAWATI', 'Male', '2001-01-15', 'Degree', 5, 'izzul@gmail.com', '0123456789', 'BATU 22 JALAN APAS LORONG MAT SALLEH', 91200, 'TAWAU', 'SABAH', 'BATU 22 JALAN APAS LORONG MAT SALLEH', 91200, 'TAWAU', 'SABAH', 'IMG_20211021_141552-removebg-preview.png', '2023-01-17 12:38:00', '1'),
(17, 'OTING', 'MOHD', 'PASA', 'Male', '2023-01-17', 'Diploma', 5, 'goting@gmail.com', '0107971841', 'BATU 2 JALAN APAS', 91200, 'TAWAU', 'SABAH', 'BATU 2 JALAN APAS', 91200, 'TAWAU', 'SABAH', 'oting.jpeg', '2023-01-17 12:45:28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Mohammad Yusuf ', 'yusuf', '12345'),
(2, 'Green Solution Enterprice', 'green.solution', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
