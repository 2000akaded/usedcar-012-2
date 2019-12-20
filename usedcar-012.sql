-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2019 at 01:54 AM
-- Server version: 8.0.17
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
-- Database: `usedcar-012`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(80) NOT NULL,
  `color` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `province` varchar(30) NOT NULL,
  `modelYear` varchar(4) NOT NULL,
  `price` int(11) NOT NULL,
  `postedBy` int(11) NOT NULL,
  `carpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `brand`, `model`, `color`, `license`, `province`, `modelYear`, `price`, `postedBy`, `carpic`) VALUES
(1, 'BMW', 'aaa', 'rad', 'ฑม263', 'นครปฐม', '1993', 800000, 1, 'a1.jpg'),
(2, 'asds', 'ttt', 'back', 'ธท9864', 'กรุงเทพ', '2001', 100956, 2, 'a1.jpg'),
(3, 'ooo', 'O', 'whlai', 'นอน8888', 'นครปฐม', '1997', 1500000, 3, 'a1.jpg'),
(4, 'asd', 'aaa', 'rad', 'ฑม150', 'นครปฐม', '1993', 800500, 1, 'b1.jpg'),
(5, 'asds', 'ttt', 'back', 'ธท1560', 'กรุงเทพ', '2012', 1550000, 2, 'b1.jpg'),
(6, 'ooo', 'O', 'whlai', 'นอน9999', 'นครปฐม', '1997', 1200000, 3, 'b1.jpg'),
(7, 'asd', 'aaa', 'rad', 'ฑม263', 'นครปฐม', '1993', 800000, 1, 'c1.jpg'),
(8, 'asds', 'ttt', 'back', 'ธท1515', 'กรุงเทพ', '2000', 1000000, 2, 'c1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`) VALUES
(1, 'akaded', '25d55ad283aa400af464c76d713c07ad', 'asdf', 'asdfaasdf', 'akaded@gmail.com', 0),
(2, 'www', '827ccb0eea8a706c4c34a16891f84e7b', 'aaa', 'aaaa', 'aaaa@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `customers` ADD FULLTEXT KEY `username` (`username`);
ALTER TABLE `customers` ADD FULLTEXT KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
