-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 06:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `accno` int(11) NOT NULL,
  `psw` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`accno`, `psw`) VALUES
(11111111, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

DROP TABLE IF EXISTS `cheque`;
CREATE TABLE `cheque` (
  `acc` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `detals` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `Phnum` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `books` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cheque`
--

INSERT INTO `cheque` (`acc`, `fname`, `lname`, `detals`, `email`, `Phnum`, `pin`, `size`, `books`, `address`, `pincode`, `city`, `state`, `country`) VALUES
(123456789, 'Dedipya', 'Bollisetti', 'deepu', 'dedipya0506@gmail.com', 2147483647, 5656, '20 pages', 2, 'Gajuwaka', 530026, 'Vishakhapatnam', 'Andhra Pradesh', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

DROP TABLE IF EXISTS `credit`;
CREATE TABLE `credit` (
  `acc` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `detals` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `Phnum` int(10) NOT NULL,
  `pin` int(11) NOT NULL,
  `limit1` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`acc`, `fname`, `lname`, `detals`, `email`, `Phnum`, `pin`, `limit1`, `address`, `pincode`, `city`, `state`, `country`) VALUES
(123456789, 'Dedipya', 'Bollisetti', 'deepu', 'dedipya0506@gmail.com', 2147483647, 5656, 20000, 'Gajuwaka', 530026, 'Vishakhapatnam', 'Andhra Pradesh', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `debit`
--

DROP TABLE IF EXISTS `debit`;
CREATE TABLE `debit` (
  `acc` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `detals` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `Phnum` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `debit`
--

INSERT INTO `debit` (`acc`, `fname`, `lname`, `detals`, `email`, `Phnum`, `pin`, `address`, `pincode`, `city`, `state`, `country`) VALUES
(123456789, 'Dedipya', 'Bollisetti', 'deepu', 'dedipya0506@gmail.com', 2147483647, 5656, 'Gajuwaka', 530026, 'Vishakhapatnam', 'Andhra Pradesh', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE `details` (
  `accno` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` text NOT NULL,
  `psw` varchar(6) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `phn` int(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `branch` text NOT NULL,
  `bal` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`accno`, `name`, `email`, `type`, `psw`, `addr`, `phn`, `dob`, `branch`, `bal`) VALUES
(143, 'ckuk', 'kjvy', 'savings', 'jbaduf', 'address', 7555543, '0000-00-00', 'grtf', 8000),
(436, 'uwrakg ', 'hwegui@jsgh', 'savings', '', '', 0, '0000-00-00', '', 8000),
(54697, 'gy', 'vyuft@fdht', 'joi', 'jhioi', '', NULL, NULL, '', 8000),
(123456, 'dyyt', 'tsyetwedtf@gfiy', 'gfi6fu', '5487g', '', NULL, NULL, '', 8000),
(9876543, 'bhuij   ', 'bhuij@gmail.com', 'savings', 'bhuij', 'IGOU', 98764654, '0000-00-00', 'gwk', 8000),
(123456789, 'Dedipya Bollisetti  ', 'dedipyabqxhu@gmail.com', 'Savings Type Account', '8', 'gfjfj', 56343, '2002-06-05', 'gwk', 8000),
(213456789, 'Ram Konidela   ', 'ram@gmail.com', 'savings', 'ram@rc', 'hyderabad', 2147483647, '1987-03-27', 'Kushaiguda', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

DROP TABLE IF EXISTS `loan`;
CREATE TABLE `loan` (
  `acc` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `detals` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `Phnum` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `ltype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`acc`, `fname`, `lname`, `detals`, `email`, `Phnum`, `pin`, `address`, `pincode`, `city`, `state`, `country`, `ltype`) VALUES
(123456789, 'Dedipya', 'Bollisetti', 'deepu', 'dedipya0506@gmail.com', 2147483647, 5656, 'Study', 0, '530026', 'Vishakhapatnam', 'Andhra Pradesh', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `acc` int(11) NOT NULL,
  `rname` text NOT NULL,
  `racc` int(11) NOT NULL,
  `cnum` int(11) NOT NULL,
  `cvv` int(3) NOT NULL,
  `amount` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` year(4) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`acc`, `rname`, `racc`, `cnum`, `cvv`, `amount`, `month`, `year`, `time`) VALUES
(123456789, 'Ram', 74286876, 365473, 143, 3000, 'Sep', 2025, '2022-06-07 17:49:24'),
(123456789, 'haefh', 38964732, 3275, 123, 20000, 'Jan', 2022, '2022-06-08 03:22:56'),
(123456789, '', 0, 0, 0, 0, '', 0000, '2022-06-08 03:26:05'),
(123456789, 'hwqgr', 7866, 655743, 154, 2000, 'Jan', 2022, '2022-06-08 03:31:12'),
(123456789, 'hwqgr', 7866, 655743, 154, 2000, 'Jan', 2022, '2022-06-08 03:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`accno`);

--
-- Indexes for table `cheque`
--
ALTER TABLE `cheque`
  ADD KEY `acc` (`acc`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD KEY `acc` (`acc`);

--
-- Indexes for table `debit`
--
ALTER TABLE `debit`
  ADD KEY `acc` (`acc`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`accno`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD KEY `acc` (`acc`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD KEY `acc` (`acc`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cheque`
--
ALTER TABLE `cheque`
  ADD CONSTRAINT `cheque_ibfk_1` FOREIGN KEY (`acc`) REFERENCES `details` (`accno`);

--
-- Constraints for table `credit`
--
ALTER TABLE `credit`
  ADD CONSTRAINT `credit_ibfk_1` FOREIGN KEY (`acc`) REFERENCES `details` (`accno`);

--
-- Constraints for table `debit`
--
ALTER TABLE `debit`
  ADD CONSTRAINT `debit_ibfk_1` FOREIGN KEY (`acc`) REFERENCES `details` (`accno`);

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`acc`) REFERENCES `details` (`accno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
