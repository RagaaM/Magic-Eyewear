-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 07:15 AM
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
-- Database: `magiceyewear`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `FrameID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frame`
--

CREATE TABLE `frame` (
  `FrameID` int(11) NOT NULL,
  `FrameCode` varchar(50) NOT NULL,
  `BrandName` varchar(50) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `Rim` varchar(50) NOT NULL,
  `Feature` varchar(50) NOT NULL,
  `Material` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frametype`
--

CREATE TABLE `frametype` (
  `id` int(11) NOT NULL,
  `FrameCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frametype`
--

INSERT INTO `frametype` (`id`, `FrameCode`) VALUES
(1, 'E'),
(2, 'S'),
(3, 'SP');

-- --------------------------------------------------------

--
-- Table structure for table `reservationdetails`
--

CREATE TABLE `reservationdetails` (
  `ReservationID` int(11) NOT NULL,
  `ClientID` int(50) NOT NULL,
  `FrameID` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `NumberOfItems` int(11) NOT NULL,
  `ReservationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` int(11) NOT NULL,
  `MobileNumber` varchar(50) NOT NULL,
  `Wishlist` varchar(50) NOT NULL,
  `UserType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `UserType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `UserType`) VALUES
(1, 'Admin'),
(2, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BrandName` (`BrandName`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Quantity` (`Quantity`),
  ADD KEY `TotalPrice` (`TotalPrice`);

--
-- Indexes for table `frame`
--
ALTER TABLE `frame`
  ADD PRIMARY KEY (`FrameID`),
  ADD KEY `Brand` (`BrandName`),
  ADD KEY `Category` (`Category`),
  ADD KEY `FrameCode` (`FrameCode`);

--
-- Indexes for table `frametype`
--
ALTER TABLE `frametype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `FrameCode` (`FrameCode`);

--
-- Indexes for table `reservationdetails`
--
ALTER TABLE `reservationdetails`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `ProductCode` (`FrameID`),
  ADD KEY `TotalPrice` (`TotalPrice`),
  ADD KEY `NumberOfItems` (`NumberOfItems`),
  ADD KEY `ClientID` (`ClientID`),
  ADD KEY `FrameID` (`FrameID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD KEY `UserType` (`UserType`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserType` (`UserType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frame`
--
ALTER TABLE `frame`
  MODIFY `FrameID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frametype`
--
ALTER TABLE `frametype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`FrameID`) REFERENCES `frame` (`FrameID`);

--
-- Constraints for table `frame`
--
ALTER TABLE `frame`
  ADD CONSTRAINT `frame_ibfk_1` FOREIGN KEY (`FrameCode`) REFERENCES `frametype` (`FrameCode`),
  ADD CONSTRAINT `frame_ibfk_2` FOREIGN KEY (`BrandName`) REFERENCES `brand` (`BrandName`);

--
-- Constraints for table `reservationdetails`
--
ALTER TABLE `reservationdetails`
  ADD CONSTRAINT `reservationdetails_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reservationdetails_ibfk_2` FOREIGN KEY (`NumberOfItems`) REFERENCES `cart` (`Quantity`),
  ADD CONSTRAINT `reservationdetails_ibfk_3` FOREIGN KEY (`TotalPrice`) REFERENCES `cart` (`TotalPrice`),
  ADD CONSTRAINT `reservationdetails_ibfk_4` FOREIGN KEY (`FrameID`) REFERENCES `cart` (`FrameID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UserType`) REFERENCES `usertype` (`UserType`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
