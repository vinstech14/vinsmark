-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 04:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pao`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `usertype` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `usertype`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123', 'Attorney'),
(2, 'user', 'user@gmail.com', 'user123', 'Staff'),
(3, 'client', 'client@gmail.com', 'client123', 'Client'),
(11, 'Ryl', 'ryl@gmail.com', 'rylryl', 'Client'),
(12, 'daryl', 'darylcerina1@gmail.com', 'darealme#2', 'Client'),
(13, 'daryltest', 'darylcerina@gmail.com', 'darealme#2', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `archived`
--

CREATE TABLE `archived` (
  `id` int(11) NOT NULL,
  `controlnum` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  `category` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archived`
--

INSERT INTO `archived` (`id`, `controlnum`, `ref`, `category`) VALUES
(1, 12312, 989329, 'Case');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `itemnumber` int(11) NOT NULL,
  `controlnumber` varchar(999) NOT NULL,
  `partyrepresented` varchar(99) NOT NULL,
  `gender` varchar(99) NOT NULL,
  `casetitle` varchar(99) NOT NULL,
  `court` varchar(99) NOT NULL,
  `casenumber` varchar(99) NOT NULL,
  `causeofaction` varchar(99) NOT NULL,
  `casestatus` varchar(99) NOT NULL,
  `lastactiontaken` varchar(99) NOT NULL,
  `causeoftermination` varchar(99) NOT NULL,
  `casedate` date DEFAULT NULL,
  `casetype` varchar(99) NOT NULL,
  `startdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `itemnumber`, `controlnumber`, `partyrepresented`, `gender`, `casetitle`, `court`, `casenumber`, `causeofaction`, `casestatus`, `lastactiontaken`, `causeoftermination`, `casedate`, `casetype`, `startdate`) VALUES
(2, 1, 'XI-PC2024-1107', 'Accused', 'Female', 'PP. vs Daryl Cerina', 'RTC 34', '000-001', 'Violation of sec.5 RA 9165', 'Pending', '', '', '0000-00-00', 'Administrative', '2024-05-01'),
(3, 2, 'X0923-123213', 'PARTY.X', 'Male', 'Pedro vs Penduko', 'RTC 4', '09039201', 'test', 'Terminated', 'tekken', 'Testmination', '2024-05-03', 'Criminal', '2024-05-02'),
(12, 344, '1231', 'TEST', 'Female', 'TEST', 'RTC 3', '2319129', 'TEST', 'Applied to Probation', 'TEST', 'TEST', '2024-05-02', 'Civil', '2024-05-01'),
(13, 3, '123132', 'TEST2', 'Male', 'TEST2', 'TEST2', '2319129', 'TEST', 'Pending', 'TEST', '', '0000-00-00', 'Criminal', '2024-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `middlename` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(99) NOT NULL,
  `religion` varchar(99) NOT NULL,
  `citizenship` varchar(99) NOT NULL,
  `civilstatus` varchar(99) NOT NULL,
  `address` varchar(99) NOT NULL,
  `region` varchar(99) NOT NULL,
  `mobilenumber` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `firstname`, `middlename`, `lastname`, `birthdate`, `age`, `gender`, `religion`, `citizenship`, `civilstatus`, `address`, `region`, `mobilenumber`, `email`) VALUES
(5, 'Daryl', 'Ibut', 'Cerina', '1999-11-05', 24, 'Male', 'Born Again', 'Filipino', 'Single', 'Lot 30 Block 34 Phase 1 San Lorenzo Puan Davao City', 'Region XI', '09610721432', 'darylcerina38@gmail.com'),
(6, 'Ammie Jane ', 'M.', 'Encinares', '2024-04-30', 23, 'Female', 'Born Again', 'Filipino', 'Single', 'Lot 30 Block 34 Phase 1 San Lorenzo Puan Davao City', 'Region XI', ' 0923281382', 'ammy@gmail.com'),
(9, 'Rick', 'Z.', 'Grymes', '2024-04-30', 24, 'Female', 'Born Again', 'Filipino', 'Single', 'Lot 30 Block 34 Phase 1 San Lorenzo Puan Davao City', 'Region XI', '09610721432', 'rick@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `kra` varchar(99) NOT NULL,
  `kip` varchar(99) NOT NULL,
  `total` int(11) NOT NULL,
  `cr` varchar(99) NOT NULL,
  `cv` varchar(99) NOT NULL,
  `adm1` varchar(99) NOT NULL,
  `adm2` varchar(99) NOT NULL,
  `adm3` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `kra`, `kip`, `total`, `cr`, `cv`, `adm1`, `adm2`, `adm3`) VALUES
(1, 'test', 'test', 101, 'test', 'test', 'test', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archived`
--
ALTER TABLE `archived`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `archived`
--
ALTER TABLE `archived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
