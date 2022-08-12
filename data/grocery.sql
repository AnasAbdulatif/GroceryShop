-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 10:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productID` int(11) NOT NULL,
  `clientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productID`, `clientID`) VALUES
(1, 10),
(2, 11),
(3, 10),
(4, 11),
(5, 103),
(6, 104),
(7, 105),
(8, 106),
(9, 178),
(10, 213),
(12, 2),
(3, 2),
(4, 2),
(2, 2),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkoutID` int(10) UNSIGNED NOT NULL,
  `nameOnCard` varchar(50) NOT NULL,
  `customerEmail` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(40) NOT NULL,
  `ZIP` int(6) NOT NULL,
  `cardNumber` int(16) NOT NULL,
  `expDate` varchar(10) NOT NULL,
  `CVV` int(10) NOT NULL,
  `PromoCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkoutID`, `nameOnCard`, `customerEmail`, `Address`, `City`, `ZIP`, `cardNumber`, `expDate`, `CVV`, `PromoCode`) VALUES
(54, 'Zyad Mohamed', '123@adda.dad', 'dadad', 'dadad', 121, 121212312, 'sdadad', 213, 's211'),
(56, 'Let', 'let@sdasd.dada', 'adadsa', 'dadad', 23123, 2147483647, '09/2022', 232, '313131'),
(59, 'Moha', 'moha@moha.sd', 'adsad', 'dadsad', 2132, 12318391, '32133', 2312, 'sadad'),
(60, 'abolo', 'anol@sa.s', 'adasw', 'asds', 21321, 120831203, '210212', 123, '213'),
(61, 'azolo', 'sals@ad.da', 'place', 'asda', 21312, 2147483647, '21102', 213, 'v3'),
(63, 'local', 'local@local.local', 'local', 'local', 20202020, 2147483647, '02/24', 290, 'K2'),
(68, '', '', '', '', 0, 0, '', 0, ''),
(69, 'Ramy', 'ramy@ramy.ramy', 'ramy', 'ramy', 9203, 2147483647, '02/22', 391, '21k'),
(70, '', '', '', '', 0, 0, '', 0, ''),
(71, 'Nada', 'Nada@Nada.com', 'dod', 'dod', 20193, 2147483647, '', 0, '212'),
(73, 'Medo', '', 'Kalala', 'alalall', 20183, 2147483647, '', 0, '1231'),
(75, 'Latif', 'Latif@Latif.com', 'Latafa', 'Latafa', 21381, 2147483647, '', 492, 'Ksa'),
(76, '', '', '', '', 0, 0, '', 0, ''),
(77, 'anas', 'anas@hotmail.com', 'New Cairo', 'Madinaty', 281391, 2147483647, '02/25', 413, 'KL1242'),
(78, '', 'assaa@adad.das', 'adada', '1231312', 31313141, 2147483647, '04/24', 313, '321'),
(79, '', '', '', '', 0, 0, '', 0, ''),
(80, '', 'asda@adad.adadad', 'dadada', 'adadad', 313131, 0, '02/23', 0, ''),
(100, 'anas', 'anas99anas@gmail.com', 'cairo', 'tambasda', 333345, 2147483647, '34/34', 234, 'dasfadsf'),
(101, '', '', '', '', 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(45) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Message` varchar(45) NOT NULL,
  `contactId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Phone`, `Message`, `contactId`) VALUES
('adhamshokry', 'adhamshokry@yahoo.com', 2147483647, 'site is really good', 1),
('hazzemhisham', 'hazzemhisham51@yahoo.com', 2147483647, 'nice site tbh', 2),
('hossamazmy', 'hossamazmy21@yahoo.com', 2147483647, 'good job', 3),
('loayelnory', 'loayelnory31@yahoo.com', 2147483647, 'items not really good', 4),
('majedelmasry', 'majedelmasry22@yahoo.com', 2147483647, 'qdhsiqjcscsaisjd', 5),
('mohamedkhaled', 'mohamedkhaled@yahoo.com', 2147483647, 'qdhsivdasdasd', 6),
('nadahosny', 'nadahosny44@yahoo.com', 2147483647, 'qdhsidcdqisjd', 7),
('yaasermohamed', 'yaasermohamed@yahoo.com', 2147483647, 'qdhsiqdassd', 8),
('yousefmurad', 'yousefmurad21@yahoo21@yahoo.com', 2147483647, 'qdhsiqsdsdsjd', 9),
('zeyadehab', 'zeyadehab@yahoo.com', 2147483647, 'qdhsiqcsdwsisjd', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusId` int(99) UNSIGNED NOT NULL,
  `cusName` varchar(20) NOT NULL,
  `cusEmail` varchar(99) NOT NULL,
  `cusPassword` varchar(50) NOT NULL,
  `cusPhone` varchar(11) NOT NULL,
  `cusAddress` varchar(99) NOT NULL,
  `cusGender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusId`, `cusName`, `cusEmail`, `cusPassword`, `cusPhone`, `cusAddress`, `cusGender`) VALUES
(1, 'Anas', 'Anas189605@bue.edu.eg', 'aa', '01060072052', 'Cairo', ''),
(2, 'maz', 'maszz@', 'aa', '103120', '', ''),
(3, 'a', 'asdasd@sadasd', 'zzxxccZ1', '33242343', '', ''),
(12, 'anas', 'anas00anas@sadas', 'zzxxccZ1', '23423432', '', 'Female'),
(14, 'ahmedd', 'ahmed@bue.edu.eg', 'zzxxccZ12', '01024440814', '', 'Male'),
(16, 'hamasa', 'asdasd@sadasdsss', 'zzxxccZ1', '012065403', '', 'Male'),
(21, 'asd', 'sdasd@asd', 'zzxxccZ1', '132123123', 'nasr city', 'Male'),
(24, 'anassdad', 'anas99@asdas', 'zzxxccZ1', '1312414324', 'nasr city', 'Female'),
(25, 'hamasass', 'asdasd@sadasd', 'zzxxccX1', '01223123123', 'alshrouk', 'Female'),
(37, 'anas99', 'anasas@adasdd', 'zzxxccZ1', '01023123423', 'madity', 'Male'),
(55, 'anasdf5', 'anoass@hmail.com', 'xxccvvX1', '0102324343', 'alshrouk', 'Male'),
(57, 'belal', 'bela@gmail.com', 'qqwweeQ1', '0102324355', 'alshrouk', 'Male'),
(59, 'bolbol', 'belal@gmail.com', 'bolbolA1', '01045353444', 'nasr city', 'Male'),
(60, 'banna', 'banna@gnail.com', 'qqqqqqQ1', '0102131254', 'alshrouk', 'Male'),
(93, 'anasil', 'anas@gmail.com', 'eeeeeeE1', '010324235', 'nasr city', 'Male'),
(95, 'anas99anas', 'anas99anas@gmail.com', 'aaaaaaA1', '01045435', 'madity', 'Male'),
(112, 'hayaa', 'hayaa@gmail.com', 'eeeeeeE1', '01206540335', '', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empId` int(99) UNSIGNED NOT NULL,
  `empName` varchar(20) NOT NULL,
  `empEmail` varchar(30) NOT NULL,
  `empPassword` varchar(30) NOT NULL,
  `empPhone` varchar(30) NOT NULL,
  `empAddress` varchar(30) NOT NULL,
  `empGender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empId`, `empName`, `empEmail`, `empPassword`, `empPhone`, `empAddress`, `empGender`) VALUES
(1, 'anAs', 'asdasd@dakaskl.com', 'aa', '010323423', 'cairo', 'male'),
(2, 'empanas', 'asnasd@gmail.com', 'asdasdffasfas', '0102342353245', 'cairo', 'male'),
(3, 'empanassd', 'asnasssd@gmail.com', 'aasdasdasddasd', '01032342344234', 'cairo', 'male'),
(4, 'empanasasdx', 'asnasadsd@gmail.com', 'asdasdasdasd', '010231231232', 'cairo', 'male'),
(5, 'empanassdgf', 'asnasd@gmail.com', 'asdasfdasccxv', '010023423', 'dahb', 'male'),
(6, 'empanastg', 'asnerasd@gmail.com', 'zxcxvbcvbcvcvn', '010234234234534', 'elshrouk', 'male'),
(7, 'empanasasda', 'asnasd@gmail.com', 'asdasd4534', '0102342343343', 'cairo', 'male'),
(8, 'empanassde', 'anos@gmail.com', 'ewrwebfvd', '0102342355624', 'cairo', 'male'),
(9, 'emprana', 'rana@gmail.com', 'rasdasdascas', '010234234234', 'cairo', 'female'),
(10, 'empmai', 'mai@gmail.com', 'mailolo', '01032423434', 'madinty', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `productID` int(11) NOT NULL,
  `productName` varchar(30) NOT NULL,
  `productCategory` varchar(30) DEFAULT NULL,
  `productDesc` varchar(300) NOT NULL,
  `productAmount` int(11) DEFAULT NULL,
  `productExpire` int(11) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`productID`, `productName`, `productCategory`, `productDesc`, `productAmount`, `productExpire`, `productPrice`) VALUES
(1, 'Green Apple', 'Fruits', 'small green apples', 40, 15, 6),
(2, 'Tomato', 'Vegetables', 'red organic tomatoes', 50, 7, 4),
(3, 'Pepsi', 'Drinks', 'Pepsi drink', 100, 365, 2),
(4, 'Coca Cola', 'Drinks', 'Coca Cola drink', 155, 365, 2),
(5, 'Toast Bread', 'Baked', 'Bread toast', 40, 3, 20),
(6, 'Baladi Bread', 'Baked', 'small green apples', 40, 5, 2),
(7, 'Disenfector', 'Tools', 'small green apples', 60, 365, 15),
(8, 'Banana', 'Fruits', 'small green apples', 70, 7, 8),
(9, 'French Bread', 'Baked', 'small green apples', 100, 3, 30),
(10, 'Orange', 'Fruits', 'small green apples', 800, 5, 17),
(11, 'Green Applee', 'Fruits', 'small green apples', 40, 15, 6),
(12, 'Tomatoo', 'Vegetables', 'red organic tomatoes', 50, 7, 4),
(13, 'Pepsii', 'Drinks', 'Pepsi drink', 100, 365, 2),
(14, 'Coca Colaa', 'Drinks', 'Coca Cola drink', 155, 365, 2),
(15, 'Toast Breadd', 'Baked', 'Bread toast', 40, 3, 20),
(16, 'Baladi Breadd', 'Baked', 'small green apples', 40, 5, 2),
(17, 'Disenfectorr', 'Tools', 'small green apples', 60, 365, 15),
(18, 'Bananaa', 'Fruits', 'small green apples', 70, 7, 8),
(19, 'French Breadd', 'Baked', 'small green apples', 100, 3, 30),
(20, 'Orangee', 'Fruits', 'small green apples', 800, 5, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `item_fk` (`productID`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkoutID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empId`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkoutID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cusId` int(99) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empId` int(99) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234234325;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `item_fk` FOREIGN KEY (`productID`) REFERENCES `items` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
