-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 11:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happymoment`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `message` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `message`, `price`) VALUES
(1, 'Kia', 19),
(2, 'frari', 20),
(3, 'Gelly', 300),
(4, 'Ford', 200),
(5, 'OPel', 300);

-- --------------------------------------------------------

--
-- Table structure for table `make-up artist`
--

CREATE TABLE `make-up artist` (
  `id` int(11) NOT NULL,
  `message` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make-up artist`
--

INSERT INTO `make-up artist` (`id`, `message`, `price`) VALUES
(1, 'Haidy', 19),
(2, 'Ahmed', 20);

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `id` int(11) NOT NULL,
  `message` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`id`, `message`, `price`) VALUES
(1, 'Ahmed', 19),
(2, 'Ali', 20);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `type1` varchar(20) NOT NULL,
  `noofguests` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `additionalneeds` varchar(50) NOT NULL,
  `place` varchar(20) NOT NULL,
  `styl` varchar(20) NOT NULL,
  `service` varchar(20) NOT NULL,
  `childreen` varchar(10) NOT NULL,
  `cardname` varchar(20) NOT NULL,
  `cardno` int(20) NOT NULL,
  `expmonth` varchar(20) NOT NULL,
  `expyear` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `agree` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wedding halls`
--

CREATE TABLE `wedding halls` (
  `message` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding halls`
--

INSERT INTO `wedding halls` (`message`, `location`, `capacity`, `price`, `id`) VALUES
('loaloa', 'Alex', 100, 1900, 1),
('safir', 'Alex', 80, 2000, 3),
('saraya', 'Alex', 100, 2000, 4),
('moments', 'alex', 300, 3000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `wedding planners`
--

CREATE TABLE `wedding planners` (
  `id` int(11) NOT NULL,
  `message` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wedding planners`
--

INSERT INTO `wedding planners` (`id`, `message`, `price`) VALUES
(1, 'Loa', 19),
(2, 'Ali', 20),
(3, 'Fatma', 300),
(4, 'Lila', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make-up artist`
--
ALTER TABLE `make-up artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wedding halls`
--
ALTER TABLE `wedding halls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding planners`
--
ALTER TABLE `wedding planners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `make-up artist`
--
ALTER TABLE `make-up artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wedding halls`
--
ALTER TABLE `wedding halls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wedding planners`
--
ALTER TABLE `wedding planners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
