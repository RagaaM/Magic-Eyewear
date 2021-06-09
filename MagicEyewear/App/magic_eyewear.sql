-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 01:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magic_eyewear`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandID` int(11) NOT NULL,
  `BrandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandID`, `BrandName`) VALUES
(1, 'ARMANI EXCHANGE'),
(2, 'Tommy Hilfiger'),
(3, 'POLAROID'),
(4, 'HUGO'),
(5, 'SEVENTH STREET'),
(6, 'Pierre Cardin'),
(7, 'RAY BAN '),
(8, 'Ralph Lauren'),
(9, 'Diva');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `ColorID` int(11) NOT NULL,
  `ColorName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`ColorID`, `ColorName`) VALUES
(1, 'Black'),
(2, 'Gray'),
(3, 'Red'),
(4, 'Blue'),
(5, 'White'),
(6, 'Transparent');

-- --------------------------------------------------------

--
-- Table structure for table `frame`
--

CREATE TABLE `frame` (
  `FrameID` int(11) NOT NULL,
  `FrameCode` varchar(50) NOT NULL,
  `FrameType` int(11) NOT NULL,
  `FrameBrand` int(11) NOT NULL,
  `FrameDescription` text NOT NULL,
  `FrameColor` int(11) NOT NULL,
  `FrameRim` int(11) NOT NULL,
  `FrameMaterial` int(11) NOT NULL,
  `AssignedGender` int(11) NOT NULL,
  `FrameSize` int(11) NOT NULL,
  `FrameImage` blob NOT NULL,
  `FrameShape` int(11) NOT NULL,
  `FramePrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frameshape`
--

CREATE TABLE `frameshape` (
  `FrameShapeID` int(11) NOT NULL,
  `FrameShapeName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frameshape`
--

INSERT INTO `frameshape` (`FrameShapeID`, `FrameShapeName`) VALUES
(1, 'Cat Eye'),
(2, 'Round'),
(3, 'Rectangle'),
(4, 'Square'),
(5, 'Oval'),
(6, 'Geometric'),
(7, 'Browline'),
(8, 'Aviator');

-- --------------------------------------------------------

--
-- Table structure for table `frametype`
--

CREATE TABLE `frametype` (
  `FrameTypeID` int(11) NOT NULL,
  `TypeName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frametype`
--

INSERT INTO `frametype` (`FrameTypeID`, `TypeName`) VALUES
(1, 'Optical'),
(2, 'Sunglasses'),
(3, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `GenderID` int(11) NOT NULL,
  `GenderType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`GenderID`, `GenderType`) VALUES
(1, 'Women'),
(2, 'Men'),
(3, 'Girls'),
(4, 'Boys');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `MaterialID` int(11) NOT NULL,
  `Material` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`MaterialID`, `Material`) VALUES
(1, 'Polycarbonate'),
(2, 'Stainless Steel'),
(3, 'Acetate'),
(4, 'Metal'),
(5, 'Eco Polyamide');

-- --------------------------------------------------------

--
-- Table structure for table `ordercart`
--

CREATE TABLE `ordercart` (
  `OrderID` int(11) NOT NULL,
  `ClientID` int(11) NOT NULL,
  `FrameID` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rim`
--

CREATE TABLE `rim` (
  `RimID` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rim`
--

INSERT INTO `rim` (`RimID`, `Type`) VALUES
(1, 'Full Rim'),
(2, 'Half Rim'),
(3, 'Rimless');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `UserTypeID` int(11) NOT NULL,
  `UserType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`UserTypeID`, `UserType`) VALUES
(1, 'Admin'),
(2, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandID`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`ColorID`);

--
-- Indexes for table `frame`
--
ALTER TABLE `frame`
  ADD PRIMARY KEY (`FrameID`),
  ADD KEY `FrameType` (`FrameType`),
  ADD KEY `FrameBrand` (`FrameBrand`),
  ADD KEY `FrameColor` (`FrameColor`),
  ADD KEY `FrameRim` (`FrameRim`),
  ADD KEY `FrameRim_2` (`FrameRim`),
  ADD KEY `FrameColor_2` (`FrameColor`),
  ADD KEY `FrameBrand_2` (`FrameBrand`),
  ADD KEY `FrameType_2` (`FrameType`),
  ADD KEY `AssignedGender` (`AssignedGender`),
  ADD KEY `FrameMaterial` (`FrameMaterial`),
  ADD KEY `AssignedGender_2` (`AssignedGender`),
  ADD KEY `FrameShape` (`FrameShape`),
  ADD KEY `FrameType_3` (`FrameType`),
  ADD KEY `FrameSize` (`FrameSize`);

--
-- Indexes for table `frameshape`
--
ALTER TABLE `frameshape`
  ADD PRIMARY KEY (`FrameShapeID`);

--
-- Indexes for table `frametype`
--
ALTER TABLE `frametype`
  ADD PRIMARY KEY (`FrameTypeID`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`GenderID`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`MaterialID`);

--
-- Indexes for table `ordercart`
--
ALTER TABLE `ordercart`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `ClientID` (`ClientID`),
  ADD KEY `FrameID` (`FrameID`);

--
-- Indexes for table `rim`
--
ALTER TABLE `rim`
  ADD PRIMARY KEY (`RimID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `UserType` (`UserType`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`UserTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `ColorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `frame`
--
ALTER TABLE `frame`
  MODIFY `FrameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frameshape`
--
ALTER TABLE `frameshape`
  MODIFY `FrameShapeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `frametype`
--
ALTER TABLE `frametype`
  MODIFY `FrameTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `GenderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `MaterialID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ordercart`
--
ALTER TABLE `ordercart`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rim`
--
ALTER TABLE `rim`
  MODIFY `RimID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `UserTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `frame`
--
ALTER TABLE `frame`
  ADD CONSTRAINT `frame_ibfk_1` FOREIGN KEY (`FrameMaterial`) REFERENCES `material` (`MaterialID`),
  ADD CONSTRAINT `frame_ibfk_2` FOREIGN KEY (`AssignedGender`) REFERENCES `gender` (`GenderID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UserType`) REFERENCES `usertype` (`UserTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
