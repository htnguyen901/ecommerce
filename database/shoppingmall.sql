-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 05:46 PM
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

--
-- Dumping data for table `adminaccount`
--

INSERT INTO `adminaccount` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` varchar(10) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`, `description`) VALUES
('CAT008', 'BRACLET', 'Test edit in category'),
('CAT004', 'NECKLACE', 'Necklaces'),
('CAT001', 'WATCH', 'Watches');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `cusName` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `shipping_add` varchar(100) NOT NULL,
  `cusEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `cusName`, `phone`, `shipping_add`, `cusEmail`) VALUES
(2, 'Ha Nguyen', '9014970202', '3928 Clayhill', 'hanguyen220897@gmail.com'),
(3, 'Peter Pan', '18243083', '566 No Trang Long', 'peterpan@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `detailID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `detailPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`detailID`, `orderID`, `productID`, `quantity`, `detailPrice`) VALUES
(54, 31, 'BOU002', 1, 5100000),
(55, 31, 'LAN002', 1, 3800000),
(56, 31, 'LEX001', 1, 3000000),
(57, 31, 'SAM001', 1, 5200000),
(58, 32, 'AVE001', 1, 3900000),
(59, 32, 'BOU002', 2, 10200000),
(60, 32, 'LEN001', 1, 4500000),
(61, 32, 'LEX001', 1, 3000000),
(62, 32, 'LEX002', 1, 3500000);

-- --------------------------------------------------------

--
-- Table structure for table `ordertotal`
--

CREATE TABLE `ordertotal` (
  `orderID` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `shippingAddress` varchar(100) NOT NULL,
  `totalAmount` float NOT NULL,
  `total_item` int(11) NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertotal`
--

INSERT INTO `ordertotal` (`orderID`, `customerId`, `shippingAddress`, `totalAmount`, `total_item`, `order_status`) VALUES
(31, 2, '3928 Clayhill', 17100000, 4, 2),
(32, 3, '566 No Trang Long', 25100000, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `prodct`
--

CREATE TABLE `prodct` (
  `productID` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `product_detail` varchar(200) NOT NULL,
  `quantityInStock` int(11) NOT NULL,
  `price` float NOT NULL,
  `categoryNAME` varchar(50) NOT NULL,
  `product_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodct`
--

INSERT INTO `prodct` (`productID`, `name`, `brand`, `gender`, `product_detail`, `quantityInStock`, `price`, `categoryNAME`, `product_img`) VALUES
('AVE001', 'Avenue', 'MAM', 'Women', 'Mr. AvenuePlace of Origin: Guangdong, ChinaModel Number: K-8410Type: Charm, Fashion, limited edition, Luxury, Other, QuartzFeature: Auto Date, Chronograph, Complete Calendar', 16, 3900000, 'WATCH', 'women005.jpg'),
('AVE002', 'Avenue', 'MVMT', 'Men', 'Powerful madness', 50, 3500000, 'WATCH', 'men010.jpg'),
('BOU002', 'Boulevard', 'Lacoste', 'Men', 'A watch is something personal. Everyone has their own taste in design and style. Therefore, we do not want to say what a good or bad watch is, but what the signs of a quality watch are in general. And', 15, 5100000, 'WATCH', 'men005.jfif'),
('CRO001', 'Crown Cuff', 'MVMT', 'Women', 'Will you rescue me?', 25, 1520000, 'BRACLET', 'bra5.jpg'),
('CRY001', 'Crystal Minimal', 'MVMT', 'Women', 'Soundcloud is life', 31, 1290000, 'BRACLET', 'bra2.jpg'),
('CRY002', 'Crystal Crown', 'MVMT', 'Women', 'Crown on you!', 22, 2000000, 'BRACLET', 'bra4.jpg'),
('ELL001', 'Ellipse Bangle', 'MVMT', 'Women', 'Elly is your grandchild', 21, 1100000, 'BRACLET', 'bra3.jpg'),
('HEX001', 'Hex', 'MVMT', 'Men', 'Hold me up tight me down!', 50, 1400000, 'NECKLACE', 'necmen1.jpg'),
('KIN001', 'Kingsman', 'Lacoste', 'Men', 'Mr. Spy a History!\r\nPlace of Origin: Guangdong, China\r\nModel Number: K-8410\r\nType: Charm, Fashion, limited edition, Luxury, Other, Quartz\r\nFeature: Auto Date, Chronograph, Complete Calendar', 30, 4600000, 'WATCH', 'men004.jfif'),
('KNO001', 'Knott Cuff', 'MVMT', 'Women', 'Elegant cuff for everyday lifestyle', 50, 1400000, 'BRACLET', 'bra1.jpg'),
('LAN001', 'Lancome', 'MAM', 'Men', 'A watch is something personal. Everyone has their own taste in design and style. Therefore, we do not want to say what a good or bad watch is, but what the signs of a quality watch are in general. And', 31, 3700000, 'WATCH', 'men007.jfif'),
('LAN002', 'Lancome', 'Tommy Hilfiger', 'Women', 'A watch is something personal. Everyone has their own taste in design and style. Therefore, we do not want to say what a good or bad watch is, but what the signs of a quality watch are in general. And', 30, 3800000, 'WATCH', 'women003.webp'),
('LAY001', 'Laylac', 'Lacoste', 'Men', 'Laylac is the worldwide king', 23, 5700000, 'WATCH', 'men009.jfif'),
('LEN001', 'Lenon', 'MVMT', 'Men', 'A watch is something personal. Everyone has their own taste in design and style. Therefore, we do not want to say what a good or bad watch is, but what the signs of a quality watch are in general. And', 20, 4500000, 'WATCH', 'men008.jpeg'),
('LEN002', 'Lenon', 'Longines', 'Women', 'A watch is something personal. Everyone has their own taste in design and style. Therefore, we do not want to say what a good or bad watch is, but what the signs of a quality watch are in general. And', 22, 4500000, 'WATCH', 'women002.jfif'),
('LEX001', 'Lexington', 'MAM', 'Men', 'Customized\r\nPlace of Origin: Guangdong, China\r\nModel Number: K-8410\r\nType: Charm, Fashion, limited edition, Luxury, Other, Quartz\r\nFeature: Auto Date, Chronograph, Complete Calendar', 20, 3000000, 'WATCH', 'men001.jpg'),
('LEX002', 'Lexington', 'MVMT', 'Women', 'A watch is something personal. Everyone has their own taste in design and style. Therefore, we do not want to say what a good or bad watch is, but what the signs of a quality watch are in general. And', 20, 3500000, 'WATCH', 'women001.jpg'),
('MIN001', 'Minimal Flat', 'MVMT', 'Men', 'We are never ever going home!', 29, 1600000, 'BRACLET', 'bramen1.jpg'),
('PEN001', 'Pendant Lyff', 'MVMT', 'Women', 'Do not try because you will end up losing it', 51, 1300000, 'NECKLACE', 'nec1.jpg'),
('SAM001', 'Sampson', 'MVMT', 'Men', 'Customized\r\nPlace of Origin: Guangdong, China\r\nModel Number: K-8410\r\nType: Charm, Fashion, limited edition, Luxury, Other, Quartz\r\nFeature: Auto Date, Chronograph, Complete Calendar', 19, 5200000, 'WATCH', 'men003.jfif'),
('SYN001', 'Sphynx', 'Longines', 'Men', 'A watch is something personal. Everyone has their own taste in design and style. Therefore, we do not want to say what a good or bad watch is, but what the signs of a quality watch are in general. And', 22, 2500000, 'WATCH', 'men006.jpg'),
('SYN002', 'Sphynx', 'Lacoste', 'Women', 'A watch is something personal. Everyone has their own taste in design and style. Therefore, we do not want to say what a good or bad watch is, but what the signs of a quality watch are in general. And', 15, 5100000, 'WATCH', 'women004.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `user_name` varchar(30) NOT NULL,
  `pass_word` varchar(30) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`user_name`, `pass_word`, `customerID`) VALUES
('hanguyen123', '123', 2),
('peterpan', 'p123', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccount`
--
ALTER TABLE `adminaccount`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryName`);

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
  ADD PRIMARY KEY (`detailID`,`orderID`,`productID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `productID` (`productID`);

--
-- Indexes for table `ordertotal`
--
ALTER TABLE `ordertotal`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `FK_order` (`customerId`);

--
-- Indexes for table `prodct`
--
ALTER TABLE `prodct`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `FK_catname` (`categoryNAME`) USING BTREE;

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`user_name`),
  ADD KEY `FK_acc` (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `detailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `ordertotal`
--
ALTER TABLE `ordertotal`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_orderdetail_ordID` FOREIGN KEY (`orderID`) REFERENCES `ordertotal` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orderdetail_proID` FOREIGN KEY (`productID`) REFERENCES `prodct` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `ordertotal` (`orderID`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `prodct` (`productID`);

--
-- Constraints for table `ordertotal`
--
ALTER TABLE `ordertotal`
  ADD CONSTRAINT `FK_order` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prodct`
--
ALTER TABLE `prodct`
  ADD CONSTRAINT `FK_catname` FOREIGN KEY (`categoryNAME`) REFERENCES `category` (`categoryName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `FK_acc` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
