-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2021 at 08:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `uname`, `emailid`, `balance`) VALUES
(1, 'ram', 'ram@gmail.com', 8000),
(2, 'Ramu kishor', 'amit@gmail.com', 18000),
(3, 'aman', 'asdasd', 2000),
(4, 'amar', 'amit@gmail.com', 20000),
(5, 'ram1', 'amit@gmail.com', 5000),
(6, 'ram2', 'amit@gmail.com', 5000),
(7, 'ram3', 'amit@gmail.com', 5000),
(8, 'Ramu kishor1', 'amit@gmail.com', 100),
(9, 'Ramu kishor2', 'amit@gmail.com', 100),
(10, 'Ramu kishor3', 'amit@gmail.com', 100),
(11, 'Ramu kishor4', 'amit@gmail.com', 100);

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `from_c` varchar(20) NOT NULL,
  `to_c` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `tdate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`from_c`, `to_c`, `amount`, `tdate`) VALUES
('3', '2', 1000, 'date()'),
('2', '1', 2000, '2021/08/13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
