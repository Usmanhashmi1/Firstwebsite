-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2018 at 05:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobilespecs`
--

CREATE TABLE `mobilespecs` (
  `id` int(100) NOT NULL,
  `display` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `frontcam` varchar(100) NOT NULL,
  `resolution` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `osversion` varchar(100) NOT NULL,
  `storage` varchar(100) NOT NULL,
  `rearcam` varchar(100) NOT NULL,
  `battery` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobilespecs`
--

INSERT INTO `mobilespecs` (`id`, `display`, `processor`, `frontcam`, `resolution`, `ram`, `osversion`, `storage`, `rearcam`, `battery`, `image`, `title`) VALUES
(1, '5.0', '1.2', '5', '720x1280', '3', '7.0', '32', '12', '3200', 'sony.jpg', 'Sony'),
(2, '5.5', '2.5', '5', '1080', '4', '8.0', '64', '18', '4200', 'oppo.jpg', 'Oppo'),
(3, '5.9', '3.0', '10', '1440', '6', '8.0', '128', '20', '5000', 'iphone.jpg', 'iPhone'),
(4, '4.0', '2.0', '4', '1080', '4', '5.0.1', '16', '8', '2500', 'htc.jpg', 'HTC'),
(5, '3.0', '5.0', '12', '2440', '8', '8.0.1', '256', '20', '5000', 'samsung.jpg', 'Samsung'),
(6, '2.0', '2.3', '2', '720', '2', '4.0', '8', '4', '2200', 'Nokia.jpg', 'Nokia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobilespecs`
--
ALTER TABLE `mobilespecs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobilespecs`
--
ALTER TABLE `mobilespecs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
