-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 07:17 PM
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
-- Database: `mtmhss`
--

-- --------------------------------------------------------

--
-- Table structure for table `12_abmark`
--

CREATE TABLE `12_abmark` (
  `id` int(11) NOT NULL,
  `rollno` varchar(250) NOT NULL,
  `tamil` int(5) NOT NULL,
  `english` int(5) NOT NULL,
  `maths` int(5) NOT NULL,
  `physics` int(5) NOT NULL,
  `chemistry` int(5) NOT NULL,
  `biology` int(5) DEFAULT NULL,
  `computerscience` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `12_abmark`
--

INSERT INTO `12_abmark` (`id`, `rollno`, `tamil`, `english`, `maths`, `physics`, `chemistry`, `biology`, `computerscience`) VALUES
(1, '2021mtmhss001', 91, 81, 71, 61, 51, 99, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `12_cdmark`
--

CREATE TABLE `12_cdmark` (
  `id` int(11) NOT NULL,
  `rollno` varchar(250) NOT NULL,
  `tamil` int(5) NOT NULL,
  `english` int(5) NOT NULL,
  `commerce` int(5) NOT NULL,
  `accounce` int(5) NOT NULL,
  `bussinessmaths` int(5) DEFAULT NULL,
  `computerapplication` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `12_cdmark`
--

INSERT INTO `12_cdmark` (`id`, `rollno`, `tamil`, `english`, `commerce`, `accounce`, `bussinessmaths`, `computerapplication`) VALUES
(1, '2021mtmhss002', 91, 91, 99, 66, NULL, 78);

-- --------------------------------------------------------

--
-- Table structure for table `12_std`
--

CREATE TABLE `12_std` (
  `id` int(11) NOT NULL,
  `rollno` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `std` int(20) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `groupname` varchar(150) NOT NULL,
  `fees` varchar(50) NOT NULL,
  `attendance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `12_std`
--

INSERT INTO `12_std` (`id`, `rollno`, `name`, `dob`, `std`, `sec`, `groupname`, `fees`, `attendance`) VALUES
(1, '2021mtmhss001', 'vinoth s', '11/08/2003', 12, 'b', 'biology', 'paid', 'present'),
(2, '2021mtmhss002', 'bharathi', '25/05/2002', 12, 'd', 'computer application', 'paid', 'present');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `12_abmark`
--
ALTER TABLE `12_abmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `12_cdmark`
--
ALTER TABLE `12_cdmark`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- Indexes for table `12_std`
--
ALTER TABLE `12_std`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rollno` (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `12_abmark`
--
ALTER TABLE `12_abmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `12_cdmark`
--
ALTER TABLE `12_cdmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `12_std`
--
ALTER TABLE `12_std`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
