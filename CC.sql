-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 11:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cancercare`
--
CREATE DATABASE IF NOT EXISTS `cancercare` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cancercare`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `role`) VALUES
(1, 'Siddharth', 'sid@123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `MobileNo` varchar(100) NOT NULL,
  `pAddress` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `stage` varchar(100) NOT NULL,
  `kta` varchar(100) NOT NULL,
  `treat` varchar(100) NOT NULL,
  `medupload` longblob NOT NULL,
  `tax` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`id`, `Name`, `Address`, `MobileNo`, `pAddress`, `email`, `type`, `stage`, `kta`, `treat`, `medupload`, `tax`) VALUES
(4, 'HIMANSHI', 'chinchani', '09158772800', 'chinchani', 'himanshibari1997@gmail.com', 'gjh', 'last', 'chinchani', 'jjhhgh', '', ''),
(10, 'sim', 'goregaon', '1234567890', 'goregaon', 'run@g.com', 'fff', 'dd', 'gjgjgj', 'sddk', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `MobileNo` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `R_Password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Name`, `Address`, `MobileNo`, `Email_ID`, `UserName`, `Password`, `R_Password`, `role`) VALUES
(1, 'ddddddd', 'boisar', '3698521470', 'dffbdfd@dd.com', '2015016400799547', 'sdsds', 'fsdfd', 'customer'),
(2, 'siddharth', 'boisar', '9637074948', 'sid@g.com', 'Sid', 'Sid', 'Sid', 'customer'),
(3, 'rgre', 'grgreg', '09158772800', 'himanshibari1997@gmail.com', '2015016400799547', '12345', '12345', 'customer'),
(4, 'simran', 'goregoan', '1234567890', 'Sim@gmail.c', 'Simrun', 'Simrumm', 'Simrun', 'customer'),
(5, 'dubey', 'goregoan', '1234567890', 'Sim@gmail.c', 'Simrun', '12345', '12345', 'customer'),
(6, 'abc', 'goregoan', '1234567890', 'abc@gmail.com', 'abc', 'abc', 'abc', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
