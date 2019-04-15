-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 04:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) NOT NULL,
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='this saves the location of the place given by the user';

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `email`, `address`, `latitude`, `longitude`) VALUES
(1, 'rad', 'rad@gmail.com', 'xdtfcgvhbjnlkm', '', ''),
(2, 'shams', 'shams@gmail.com', 'kengeri mori', '', ''),
(3, 'megha', 'megha@gmail.com', 'rajajinagara ', '', ''),
(4, 'shambhavi', 'shambhavi@gmail.com', 'kengeri mori', '', ''),
(5, '', '', '', '', ''),
(6, 'radhika s', 'rsanjeevi.rs@gmail.com', '#4 Rudramariyappa Nilaya 5th Main 1 st Cross\r\nKothnur Krishnanagar Jp Nagar 8th Phase', '', ''),
(7, 'radhika s', 'rsanjeevi.rs@gmail.com', '#4 Rudramariyappa Nilaya 5th Main 1 st Cross\r\nKothnur Krishnanagar Jp Nagar 8th Phase', '', ''),
(8, 'radhika s', 'rsanjeevi.rs@gmail.com', '#4 Rudramariyappa Nilaya 5th Main 1 st Cross\r\nKothnur Krishnanagar Jp Nagar 8th Phase', '', ''),
(9, 'shilpa', 'shilpa@gmail.com', '', '', ''),
(10, 'shilpa', 'shilpa@gmail.com', 'sarakki market', '', ''),
(11, 'ramya', 'ramya@gmail.com', 'narayana school', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'radhe', 'gma@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710'),
(0, 'charan', 'sj@gmail.com', 'b5bf27b2555de44e3df2230080db5a1d'),
(0, 'megha', 'megha@gmail.com', '56cd07000362b73cbfc6973dcd3aa275'),
(0, 'rad', 'r@gmail.com', 'c12e01f2a13ff5587e1e9e4aedb8242d'),
(0, 'sukanya s', 'dhakshayinisanjeevi@gmail.com', '0e3cad4f690964263c78b7b83d7a44f4'),
(0, 'Radhe', 'rsanjeevi.rs@gmail.com', '49f68a5c8493ec2c0bf489821c21fc3b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
