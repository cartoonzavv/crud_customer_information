-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 12:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `name`, `surname`, `email`, `created_date`, `update_date`) VALUES
(1, 'fluke', 'fluke1234', 'fluke1', 'fluke1', 'fluke@gmail.com', '2022-11-01 06:03:55', '2022-11-01 07:10:07'),
(2, 'bell', 'bell1234', 'bell', 'brll', 'bell@gmail.com', '2022-11-01 07:00:34', '2022-11-01 07:00:34'),
(3, 'bek', 'bekbek1234', 'bek', 'bek', 'bekk@gmail.com', '2022-11-01 07:01:18', '2022-11-01 07:01:18'),
(4, 'point', 'point1234', 'point', 'point', 'point@gmail.com', '2022-11-01 07:01:38', '2022-11-01 07:01:38'),
(5, 'rom', 'romrom1234', 'rom', 'rom', 'rom@gmail.com', '2022-11-01 07:01:54', '2022-11-01 07:01:54'),
(6, 'ford', 'ford1234', 'ford', 'ford', 'frod@gmail.com', '2022-11-01 07:02:12', '2022-11-01 07:02:12'),
(7, 'rom', 'romrom1234', 'rom', 'rom', 'rom@gmail.com', '2022-11-01 07:23:05', '2022-11-01 07:23:05'),
(8, 'rom', 'romrom1234', 'rom', 'rom', 'rom@gmail.com', '2022-11-01 07:23:22', '2022-11-01 07:23:22'),
(13, 'ford', 'ford1234', 'ford', 'ford', 'frod@gmail.com', '2022-11-01 08:16:48', '2022-11-01 08:16:48'),
(14, 'ford', '2394y9hfiushfpshfps', 'ford', 'ford', 'ford@gmail.com', '2022-11-01 08:17:53', '2022-11-01 08:17:53'),
(15, 'ford', 'sadada', 'ford', 'ford', 'frod@gmail.com', '2022-11-01 08:18:49', '2022-11-01 08:18:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
