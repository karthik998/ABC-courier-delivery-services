-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 02:49 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp_da_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Compid` int(10) NOT NULL,
  `CompType` varchar(20) NOT NULL,
  `CompDesc` varchar(100) NOT NULL,
  `Solution` varchar(100) NOT NULL,
  `CompStatus` varchar(20) NOT NULL,
  `Custid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Compid`, `CompType`, `CompDesc`, `Solution`, `CompStatus`, `Custid`) VALUES
(1, 'Mails', 'Not received', 'File a complaint against Courier Company in District Consumer Tribunal for deficiency in service', 'Closed', 'C121'),
(2, 'Parcel', 'Opened', 'The parcel is not packed properly', 'Closed', 'C122'),
(3, 'Mails', 'Not received', '-------------', 'Pending', 'C121'),
(4, 'Parcel', 'Parcels left in unsecure locations', 'The worst thing that can happen once parcels are sent out for delivery to your customers is that the', 'pending', 'C123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Compid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Compid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
