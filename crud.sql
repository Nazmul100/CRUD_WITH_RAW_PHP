-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2021 at 01:06 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `user_photo` varchar(500) DEFAULT NULL,
  `user_bio` text,
  `user_skill` varchar(255) DEFAULT NULL,
  `user_project` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `nickname`, `user_photo`, `user_bio`, `user_skill`, `user_project`, `user_address`) VALUES
(19, 'gggg', '', 'gggg', 'php', 'ggg', 'ggg'),
(21, 'fcdf', '', '', 'php', '', 'ddtfghngyjn'),
(22, 'khkjnkh', '', '', 'php', '', ''),
(23, 'kuhj', '', '', 'php', '', ''),
(26, 'dxxdxdxd', '1094297716.jpg', '', 'php', '', ''),
(27, 'aa', '1769531683.jpg', 'aa', 'php', 'aa', 'aa'),
(29, 'vvv', '851745650.jpg', 'vvv', 'php', 'vvv', 'vvv'),
(30, 'fcdf', '795442897.jpg', 'sfv', 'php', 'afv', ''),
(31, 'weg', '95836130.jpg', 'wrg', 'php', 'weg', 'weg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
