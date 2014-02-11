-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2013 at 03:06 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book`
--
CREATE DATABASE IF NOT EXISTS `book` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `book`;

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

DROP TABLE IF EXISTS `booktable`;
CREATE TABLE IF NOT EXISTS `booktable` (
  `ISBN` varchar(20) DEFAULT NULL,
  `BookTitle` varchar(20) DEFAULT NULL,
  `Author` varchar(20) DEFAULT NULL,
  `Edition` int(11) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `Resererved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`ISBN`, `BookTitle`, `Author`, `Edition`, `Year`, `Category`, `Resererved`) VALUES
('093-403992', 'Computers in Busines', 'Alicia O''Neill', 3, 1997, '003', 0),
('23472-8729', 'Exploring Peru', 'Stephanie Birch', 4, 2005, '005', 0),
('237-34823', 'Business Strategy', 'Joe Peppard', 2, 2002, '002', 0),
('23u8-923849', 'A Guide to Nutrition', 'John Thorpe', 2, 1997, '001', 0),
('2983-3494', 'Cooking For Children', 'Anabelle Sharpe', 1, 2003, '007', 0),
('82n8-308', 'Computers For Idiots', 'Susan O''Neill', 5, 1998, '004', 0),
('9823-23984', 'My Life in Picture', 'Kevin Graham', 8, 2004, '001', 0),
('9823-2403-0', 'Da Vinci Code', 'Dan Brown', 1, 2003, '008', 0),
('98234-029384', 'My Ranch in Texas', 'George Bush', 1, 2005, '001', 1),
('9823-98345', 'How to Cook Italian ', 'Jamie Oliver', 2, 2005, '007', 0),
('9823-98487', 'Optimizing Your Busi', 'Cleo BLair', 1, 2001, '002', 0),
('988745-234', 'Tara Road', 'Maeve Binchy', 4, 2002, '008', 0),
('993-004-00', 'My Life in Bits', 'John Smith', 1, 2001, '008', 0),
('9987-0039882', 'Shooting History', 'John Snow', 1, 2003, '001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `CategoryID` text NOT NULL,
  `CategoryDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryDescription`) VALUES
('001', 'Health'),
('002', 'Business'),
('003', 'Biography'),
('004', 'Technology'),
('005', 'Travel'),
('006', 'Self-Help'),
('007', 'Cookery'),
('008', 'Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `ISBN` text NOT NULL,
  `Username` text NOT NULL,
  `Reserve Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`ISBN`, `Username`, `Reserve Date`) VALUES
('98234-029384', 'joecrotty', '2008-11-10'),
('9823-029384', 'tommy100', '2008-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(6) DEFAULT NULL,
  `FirstName` varchar(15) DEFAULT NULL,
  `Surname` varchar(15) DEFAULT NULL,
  `AddressLine1` varchar(25) DEFAULT NULL,
  `AddressLine2` varchar(25) DEFAULT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Telephone` varchar(10) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `FirstName`, `Surname`, `AddressLine1`, `AddressLine2`, `City`, `Telephone`, `Mobile`) VALUES
('alanjmckenna', 't1234s', 'Alan', 'Mckenna', '38 cranely road', 'Fairview', 'Dublin', '9998377', '2147483647'),
('JoeCrotty', 'kj7899', 'Joseph', 'Crotty', 'Apt 5 clyde Road', 'Donnybrook', 'Dublin', '8887889', '876654456'),
('tommy100', '123456', 'tom', 'behan', '14 hyde road', 'dalkey', 'Dublin', '9983747', '876738782'),
('aidan', '111111', 'Aidan', 'Walsh', '8 Victoria Street', 'South Circular Road', 'Dublin 8', '3538794436', '3538794436');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
