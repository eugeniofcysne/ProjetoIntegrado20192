-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 01:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofuscadb`
--
CREATE DATABASE IF NOT EXISTS `ofuscadb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ofuscadb`;

-- --------------------------------------------------------

--
-- Table structure for table `percent`
--

CREATE TABLE `percent` (
  `id` int(11) NOT NULL,
  `valor` varchar(4) NOT NULL,
  `chave` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `percent`
--

INSERT INTO `percent` (`id`, `valor`, `chave`) VALUES
(1, ' ', '%20'),
(2, '!', '%21'),
(3, '\"', '%22'),
(4, '#', '%23'),
(5, '\\$', '%24'),
(6, '%', '%25'),
(7, '&', '%26'),
(8, '\'', '%27'),
(9, '(', '%28'),
(10, ')', '%29'),
(11, '*', '%2a'),
(12, '+', '%2b'),
(13, ',', '%2c'),
(14, '~', '%2d'),
(15, '.', '%2e'),
(16, '/', '%2f'),
(17, '0', '%30'),
(18, '1', '%31'),
(19, '2', '%32'),
(20, '3', '%33'),
(21, '4', '%34'),
(22, '5', '%35'),
(23, '6', '%36'),
(24, '7', '%37'),
(25, '8', '%38'),
(26, '9', '%39'),
(27, ':', '%3a'),
(28, ';', '%3b'),
(29, '<', '%3c'),
(30, '=', '%3d'),
(31, '>', '%3e'),
(32, '?', '%3f'),
(33, '@', '%40'),
(34, 'A', '%41'),
(35, 'B', '%42'),
(36, 'C', '%43'),
(37, 'D', '%44'),
(38, 'E', '%45'),
(39, 'F', '%46'),
(40, 'G', '%47'),
(41, 'H', '%48'),
(42, 'I', '%49'),
(43, 'J', '%4a'),
(44, 'K', '%4b'),
(45, 'L', '%4c'),
(46, 'M', '%4d'),
(47, 'N', '%4e'),
(48, 'O', '%4f'),
(49, 'P', '%50'),
(50, 'Q', '%51'),
(51, 'R', '%52'),
(52, 'S', '%53'),
(53, 'T', '%54'),
(54, 'U', '%55'),
(55, 'V', '%56'),
(56, 'W', '%57'),
(57, 'X', '%58'),
(58, 'Y', '%59'),
(59, 'Z', '%5a'),
(60, '[', '%5b'),
(61, '\\\\', '%5c'),
(62, ']', '%5d'),
(63, '^', '%5e'),
(64, '_', '%5f'),
(65, '`', '%60'),
(66, 'a', '%61'),
(67, 'b', '%62'),
(68, 'c', '%63'),
(69, 'd', '%64'),
(70, 'e', '%65'),
(71, 'f', '%66'),
(72, 'g', '%67'),
(73, 'h', '%68'),
(74, 'i', '%69'),
(75, 'j', '%6a'),
(76, 'k', '%6b'),
(77, 'l', '%6c'),
(78, 'm', '%6d'),
(79, 'n', '%6e'),
(80, 'o', '%6f'),
(81, 'p', '%70'),
(82, 'q', '%71'),
(83, 'r', '%72'),
(84, 's', '%73'),
(85, 't', '%74'),
(86, 'u', '%75'),
(87, 'v', '%76'),
(88, 'w', '%77'),
(89, 'x', '%78'),
(90, 'y', '%79'),
(91, 'z', '%7a'),
(92, '{', '%7b'),
(93, '|', '%7c'),
(94, '}', '%7d'),
(95, '~', '%7e');

-- --------------------------------------------------------

--
-- Table structure for table `tabela_char`
--

CREATE TABLE `tabela_char` (
  `id` int(11) NOT NULL,
  `valor` int(4) NOT NULL,
  `chave` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabela_char`
--

INSERT INTO `tabela_char` (`id`, `valor`, `chave`) VALUES
(1, 0, 0),
(2, 0, 0),
(3, 0, 0),
(4, 0, 0),
(5, 0, 0),
(6, 0, 0),
(7, 0, 0),
(8, 0, 0),
(9, 0, 0),
(10, 0, 0),
(11, 0, 0),
(12, 0, 0),
(13, 0, 0),
(14, 0, 0),
(15, 0, 0),
(16, 0, 0),
(17, 0, 0),
(18, 1, 0),
(19, 2, 0),
(20, 3, 0),
(21, 4, 0),
(22, 5, 0),
(23, 6, 0),
(24, 7, 0),
(25, 8, 0),
(26, 9, 0),
(27, 0, 0),
(28, 0, 0),
(29, 0, 0),
(30, 0, 0),
(31, 0, 0),
(32, 0, 0),
(33, 0, 0),
(34, 0, 0),
(35, 0, 0),
(36, 0, 0),
(37, 0, 0),
(38, 0, 0),
(39, 0, 0),
(40, 0, 0),
(41, 0, 0),
(42, 0, 0),
(43, 0, 0),
(44, 0, 0),
(45, 0, 0),
(46, 0, 0),
(47, 0, 0),
(48, 0, 0),
(49, 0, 0),
(50, 0, 0),
(51, 0, 0),
(52, 0, 0),
(53, 0, 0),
(54, 0, 0),
(55, 0, 0),
(56, 0, 0),
(57, 0, 0),
(58, 0, 0),
(59, 0, 0),
(60, 0, 0),
(61, 0, 0),
(62, 0, 0),
(63, 0, 0),
(64, 0, 0),
(65, 0, 0),
(66, 0, 0),
(67, 0, 0),
(68, 0, 0),
(69, 0, 0),
(70, 0, 0),
(71, 0, 0),
(72, 0, 0),
(73, 0, 0),
(74, 0, 0),
(75, 0, 0),
(76, 0, 0),
(77, 0, 0),
(78, 0, 0),
(79, 0, 0),
(80, 0, 0),
(81, 0, 0),
(82, 0, 0),
(83, 0, 0),
(84, 0, 0),
(85, 0, 0),
(86, 0, 0),
(87, 0, 0),
(88, 0, 0),
(89, 0, 0),
(90, 0, 0),
(91, 0, 0),
(92, 0, 0),
(93, 0, 0),
(94, 0, 0),
(95, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `percent`
--
ALTER TABLE `percent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabela_char`
--
ALTER TABLE `tabela_char`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `percent`
--
ALTER TABLE `percent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tabela_char`
--
ALTER TABLE `tabela_char`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
