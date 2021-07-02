-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2020 at 06:10 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

DROP TABLE IF EXISTS `admin_registration`;
CREATE TABLE IF NOT EXISTS `admin_registration` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `MobileNo` varchar(13) NOT NULL,
  `Emailid` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`Id`, `Name`, `MobileNo`, `Emailid`, `Username`, `Password`) VALUES
(3, 'Harshada Kamble', '7710803202', 'k.harshada203@gmail.com', 'harshada', 'harshada'),
(4, 'sanket bhoir', '1234567890', 'sanket@gmail.com', 'sanket', 'sanket'),
(5, 'CHIRAG SHAH', '8652785389', 'Chiragsha807@gmail.com', 'Chirag', '786'),
(6, 'Nidhi Singh', '0987654321', 'nidhi@gmail.com', 'nidhi', 'nidhi'),
(7, 'Chintan', '9834536787', 'chintan@gmail.com', 'chintan', 'chintan');

-- --------------------------------------------------------

--
-- Table structure for table `customer_form`
--

DROP TABLE IF EXISTS `customer_form`;
CREATE TABLE IF NOT EXISTS `customer_form` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Roomno` varchar(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile` varchar(13) NOT NULL,
  `Nation` varchar(30) NOT NULL,
  `Aadhar` varchar(12) NOT NULL,
  `People` varchar(11) NOT NULL,
  `Roomtype` varchar(8) NOT NULL,
  `CheckInDate` varchar(20) NOT NULL,
  `CheckinTime` varchar(20) NOT NULL,
  `CheckoutDate` varchar(20) NOT NULL,
  `CheckoutTime` varchar(20) NOT NULL,
  `Price` varchar(8) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_form`
--

INSERT INTO `customer_form` (`Id`, `Roomno`, `Name`, `Mobile`, `Nation`, `Aadhar`, `People`, `Roomtype`, `CheckInDate`, `CheckinTime`, `CheckoutDate`, `CheckoutTime`, `Price`) VALUES
(1, '', 'Nidhi Thakur', '9978854456', 'Indian', '789543673213', '2', '4Bed', '10-11-2019', '8:00am', '11-11-2019', '8:00pm', ''),
(2, '3', 'Chintan', '8943556677', 'Indai', '445599001125', '4', '4Bed', '10-11-2019', '10:00am', '11-11-2019', '10:am', ''),
(4, '102', 'hlkwdjl', '7564758907', 'hfuhf', '675463746532', '2', '4Bed', '2019-11-10', '12:00', '2019-11-11', '12:00', '2000'),
(6, '103', 'uhk', '6789098765', 'bvbjgj', '7687654432', '7', '4Bed', '2019-11-10', '12:00', '2019-11-11', '03:00', '2000'),
(7, '103', 'hlkwdjl', '657464534', 'bvbjgj', '768909876543', '2', '2Bed', '2019-11-10', '12:00', '2019-11-10', '12:00', '1000'),
(20, '104', 'Harshada', '7710803203', 'Indian', '123456543212', '2', '2Bed', '2019-11-12', '12:00', '2019-11-13', '12:00', '1000'),
(21, '101', 'sanket', '95647354678', 'Indian', '546890976543', '4', '4Bed', '2019-11-13', '12:00', '2019-11-14', '12:00', '2000'),
(22, '101', 'Ranjana', '9768808806', 'Indian', '456374321345', '2', '2Bed', '2019-11-10', '12:00', '2019-11-11', '12:00', '1000'),
(23, '102', 'chintan', '9843567890', 'Indian', '657898765432', '4', '4Bed', '2019-11-21', '08:00', '2019-11-22', '08:00', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Room` varchar(8) NOT NULL,
  `Price` varchar(8) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Id`, `Room`, `Price`) VALUES
(1, '2Bed', '1000'),
(2, '4Bed', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `staff_form`
--

DROP TABLE IF EXISTS `staff_form`;
CREATE TABLE IF NOT EXISTS `staff_form` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Mobile` varchar(13) NOT NULL,
  `Aadhar` varchar(12) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Age` varchar(2) NOT NULL,
  `Work` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff_form`
--

INSERT INTO `staff_form` (`Id`, `Name`, `Mobile`, `Aadhar`, `Gender`, `Address`, `Age`, `Work`) VALUES
(1, 'Sanket Bhoir', '5678906543', '123456789087', 'Male', 'Vasai', '21', 'Chef'),
(2, 'Nidhi Singh', '6789543215', '567453241567', 'Female', 'Virar', '20', 'Reciption'),
(3, 'Hemangi Kamble', '8905467321', '645327819034', 'Female', 'Nallasopara', '25', 'Helper'),
(4, 'Ranjana Shivdas', '9768808806', '890543251678', 'Female', 'Bandra', '30', 'Chef'),
(5, 'Chintan Pandya', '8945087632', '804332890756', 'Male', 'Palghar', '35', 'Servant'),
(6, 'Sanket Bhoir', '7765643213', '789087654432', 'Male', 'Virar', '21', 'Chef');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
