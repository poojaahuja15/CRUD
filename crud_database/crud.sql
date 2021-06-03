-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 25, 2021 at 07:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
-- Table structure for table `crud_data`
--

CREATE TABLE `crud_data` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `state` int(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud_data`
--

INSERT INTO `crud_data` (`id`, `name`, `email`, `mobile`, `state`, `city`, `address`) VALUES
(1, 'Yash', 'yash@gmail.com', 2045221578, 1, 'Rajkot', 'M.G Road'),
(2, 'Raj', 'raj@gmail.com', 2098743311, 2, 'Jaipur', 'S.G Road'),
(3, 'Akash', 'akash@gmail.com', 2045457812, 3, 'Mumbai', 'M.K Road'),
(4, 'Jalay', 'jalay@gmail.com', 2012558834, 4, 'Chandigarh', 'S.K Road'),
(5, 'Darshan', 'darshan@gmail.com', 2011557388, 1, 'Rajkot', 'R.K Road');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(10) NOT NULL,
  `statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `statename`) VALUES
(1, 'Gujarat'),
(2, 'Rajasthan'),
(3, 'Maharashtra'),
(4, 'Punjab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_data`
--
ALTER TABLE `crud_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_data`
--
ALTER TABLE `crud_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
