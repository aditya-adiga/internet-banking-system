-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 11:10 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac`
--

CREATE DATABASE `oopbank`;
USE `oopbank`;

CREATE TABLE `ac` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac`
--

INSERT INTO `ac` (`id`, `name`) VALUES
(00001, 'Ashwin'),
(00002, 'Kohli'),
(00003, 'Pujara'),
(00004, 'Pant'),
(00005, 'Aditya'),
(00006, 'Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Account_number` varchar(15) DEFAULT NULL,
  `Branch_name` varchar(30) DEFAULT NULL,
  `Balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Account_number`, `Branch_name`, `Balance`) VALUES
('AC-00001', 'Jublee Road', 1500),
('AC-00002', 'Karwan Bazar', 1000),
('AC-00003', 'Central Road', 500),
('AC-00004', 'Progoti Shoroni', 500),
('AC-00005', 'Progoti Shoroni', 500);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('asifsamy@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `Customer_name` varchar(50) DEFAULT NULL,
  `Loan_number` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Branch_name` varchar(30) DEFAULT NULL,
  `Branch_city` varchar(30) DEFAULT NULL,
  `Assets` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Branch_name`, `Branch_city`, `Assets`) VALUES
('K R Puram', 'Bengaluru', 10000001),
('R M Nagar', 'Bengaluru', 10000002),
('M G Road', 'Mysuru', 10000003),
('Devraj Urs Road', 'Mysuru', 10000004),
('Vijayanagar', 'Mysuru', 10000005),
('SahakarNagar', 'Bengaluru', 10000006);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_name` varchar(30) DEFAULT NULL,
  `Customer_street` varchar(30) DEFAULT NULL,
  `Customer_city` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_name`, `Customer_street`, `Customer_city`) VALUES
('Samy', 'Jublee Road', 'Chittagong'),
('Asif', 'Beily Road', 'Dhaka'),
('Sanjida', 'Pakapara', 'Rangpur'),
('Bokkor', 'DIT Road', 'Dhaka'),
('Shohag', 'DIT Road', 'Dhaka'),
('vdszx', 'vzxzxzxzxzx', 'vzdx');

-- --------------------------------------------------------

--
-- Table structure for table `depositor`
--

CREATE TABLE `depositor` (
  `Customer_name` varchar(30) DEFAULT NULL,
  `Account_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depositor`
--

INSERT INTO `depositor` (`Customer_name`, `Account_number`) VALUES
('Samy', 'AC-00001'),
('Asif', 'AC-00002'),
('Sanjida', 'AC-00003'),
('Bokkor', 'AC-00004'),
('Shohag', 'AC-00005');

-- --------------------------------------------------------

--
-- Table structure for table `lc`
--

CREATE TABLE `lc` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `Loan_number` varchar(15) DEFAULT NULL,
  `Branch_name` varchar(30) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(30) NOT NULL,
  `custID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- DROP TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `custID`, `Password`) VALUES
('Asif', '123456', 'pass123'),
('Samy', '123457', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac`
--
ALTER TABLE `ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac`
--
ALTER TABLE `ac`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
