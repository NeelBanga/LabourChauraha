-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 01:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labourchauraha`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `name` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`name`, `aadhar`, `location`, `phone`) VALUES
('aryan', '5545455', 'a', '1143');

-- --------------------------------------------------------

--
-- Table structure for table `labourers`
--

CREATE TABLE `labourers` (
  `name` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `skills` varchar(30) NOT NULL,
  `money` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labourers`
--

INSERT INTO `labourers` (`name`, `aadhar`, `location`, `phone`, `sdate`, `edate`, `skills`, `money`) VALUES
('vibhor', '2', 'allahabad', '2121212', '2020-09-17', '2020-09-18', 'shots', 0),
('asdds new', '333', 'a', '213455', '2020-10-08', '2020-10-10', 'none', 200),
('shail', '666', 'velore', '213455', '2020-09-17', '2020-09-19', 'strong', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `labourers`
--
ALTER TABLE `labourers`
  ADD PRIMARY KEY (`aadhar`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
