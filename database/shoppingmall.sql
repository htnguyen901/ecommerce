-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 02:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccount`
--

CREATE TABLE `adminaccount` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` varchar(10) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` varchar(10) NOT NULL,
  `cusName` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cusEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `detailID` varchar(10) NOT NULL,
  `orderID` varchar(10) NOT NULL,
  `productID` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `detailPrice` float NOT NULL,
  `detailName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordertotal`
--

CREATE TABLE `ordertotal` (
  `orderID` varchar(10) NOT NULL,
  `customerId` varchar(10) NOT NULL,
  `shippingAddress` varchar(100) NOT NULL,
  `totalAmount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prodct`
--

CREATE TABLE `prodct` (
  `productID` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `subtype` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `quantityInStock` int(11) NOT NULL,
  `price` float NOT NULL,
  `categoryid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `user_name` varchar(30) NOT NULL,
  `pass_word` varchar(30) NOT NULL,
  `customerID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `cusEmail` (`cusEmail`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderID`,`productID`,`detailID`),
  ADD KEY `FK_orderdetail_proID` (`productID`);

--
-- Indexes for table `ordertotal`
--
ALTER TABLE `ordertotal`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_ordertotal_cusID` (`customerId`);

--
-- Indexes for table `prodct`
--
ALTER TABLE `prodct`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `Foreign_Key` (`categoryid`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_orderdetail_ordID` FOREIGN KEY (`orderID`) REFERENCES `ordertotal` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orderdetail_proID` FOREIGN KEY (`productID`) REFERENCES `prodct` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordertotal`
--
ALTER TABLE `ordertotal`
  ADD CONSTRAINT `FK_ordertotal_cusID` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodct`
--
ALTER TABLE `prodct`
  ADD CONSTRAINT `Foreign_Key` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
