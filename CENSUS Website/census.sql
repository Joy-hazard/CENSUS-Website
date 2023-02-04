-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 09:47 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `census`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`name`, `password`) VALUES
('joy', 'joy2418'),
('pal', 'pal2418');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_Number` int(100) NOT NULL,
  `User_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`First_Name`, `Last_Name`, `Email`, `Mobile_Number`, `User_pass`) VALUES
('Joy', 'Pal', 'joypal.hazard@gmail.com', 1310320385, 'joy123'),
('Ruma', 'Pal', 'ruma@gmail.com', 123456758, 'ruma'),
('Saju', 'Ahmed', 'saju@gmail.com', 147852369, 'saju');

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `identity_no` int(20) NOT NULL,
  `streetaddress` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `city` enum('Barishal','Chattogram','Dhaka','Khulna','Rajshahi','Rangpur','Mymensingh','Sylhet') NOT NULL,
  `country` enum('Afghanistan','Australia','Austria','Bangladesh','Belarus','Belgium','Bhutan','Brazil','Canada','China','Denmark','Egypt','France','India','Japan','Malaysia','Maldives','Nepal','North Korea','Peru','Sweden','Switzerland','Thailand','Zimbabwe') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`identity_no`, `streetaddress`, `postalcode`, `city`, `country`) VALUES
(10101010, 'Puran Dhaka', '1100', 'Dhaka', 'Bangladesh'),
(201002410, 'jhsg', '135', 'Barishal', 'Malaysia'),
(201002412, 'dhaka', '122', 'Barishal', 'Malaysia'),
(201002418, 'Tatibazar', '1100', 'Dhaka', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `userfeedback`
--

CREATE TABLE `userfeedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userfeedback`
--

INSERT INTO `userfeedback` (`name`, `email`, `comment`) VALUES
('ghjg', 'joypal.hazard@gmail.com', ' hdghhhjslkdfhasjd'),
('Joy Pal', 'joypal.hazard@gmail.com', ' Hey There');

-- --------------------------------------------------------

--
-- Table structure for table `userhoushold`
--

CREATE TABLE `userhoushold` (
  `identity_no` int(20) NOT NULL,
  `houshold` enum('own','leaseholder','homeless','rent') NOT NULL,
  `totalland` enum('noland','belowoneacre','oneacre','overoneacre') NOT NULL,
  `electricity` enum('no','yes') NOT NULL,
  `electricitysupply` enum('None','DPDC','DESCO','Pallibiddyot') NOT NULL,
  `sourceofwater` enum('suply','tubewell','others') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userhoushold`
--

INSERT INTO `userhoushold` (`identity_no`, `houshold`, `totalland`, `electricity`, `electricitysupply`, `sourceofwater`) VALUES
(10101010, 'rent', 'noland', 'yes', 'DPDC', 'suply'),
(201002417, 'own', 'noland', 'no', 'None', 'suply'),
(201002418, 'own', 'belowoneacre', 'yes', 'Pallibiddyot', 'tubewell');

-- --------------------------------------------------------

--
-- Table structure for table `userpersonal`
--

CREATE TABLE `userpersonal` (
  `identity_no` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `datemin` date NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userpersonal`
--

INSERT INTO `userpersonal` (`identity_no`, `fullname`, `f_name`, `m_name`, `gender`, `datemin`, `image`) VALUES
(10101010, 'Joy Pal', 'Shapon Pal', 'Mukta Pal', 'Male', '1999-02-10', 0x4a6f79202d205a696120556464616e20436f7665722050686f746f2e6a7067),
(201002417, 'Mursalin Khan', 'Alam Khan', 'Momotaz Begume', 'male', '2000-08-15', 0x726f73322e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`First_Name`);

--
-- Indexes for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD PRIMARY KEY (`identity_no`);

--
-- Indexes for table `userfeedback`
--
ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `userhoushold`
--
ALTER TABLE `userhoushold`
  ADD PRIMARY KEY (`identity_no`);

--
-- Indexes for table `userpersonal`
--
ALTER TABLE `userpersonal`
  ADD PRIMARY KEY (`identity_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
