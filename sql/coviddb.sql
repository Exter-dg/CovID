-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2021 at 07:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coviddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `sname` varchar(30) NOT NULL,
  `aadharno` bigint(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rights` varchar(7) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `mname`, `sname`, `aadharno`, `email`, `rights`, `password`) VALUES
('Manoj', '', 'Shah', 111122223333, 'manoj@gmail.com', 'S-7', 'manoj'),
('jash', '', 'maurya', 111122223337, 'j@gmail.com', 'S-7', 'parth'),
('Parth', NULL, 'Kapadia', 123412341234, 'parth@gmail.com', 'I', 'parth');

-- --------------------------------------------------------

--
-- Table structure for table `adminapprove`
--

CREATE TABLE `adminapprove` (
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `sname` varchar(30) NOT NULL,
  `aadharno` bigint(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rights` varchar(7) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminapprove`
--

INSERT INTO `adminapprove` (`fname`, `mname`, `sname`, `aadharno`, `email`, `rights`, `password`) VALUES
('Manoj', '', 'Patel', 111122223335, 'm2@gmai.com', 'S-7', 'parth');

-- --------------------------------------------------------

--
-- Table structure for table `administered`
--

CREATE TABLE `administered` (
  `cid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `dose` enum('1','2') NOT NULL,
  `number` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `centres`
--

CREATE TABLE `centres` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `pincode` int(11) NOT NULL,
  `did` int(30) NOT NULL,
  `sid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centres`
--

INSERT INTO `centres` (`id`, `name`, `pincode`, `did`, `sid`) VALUES
(1, 'Nirma Uni', 382481, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityname` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityname`, `id`, `sid`) VALUES
('Ahmedabad', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `slots` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `did`, `sid`, `vid`, `slots`, `date`) VALUES
(1, 1, 7, 1, 95, '2021-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `statename` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`statename`, `id`) VALUES
('Gujarat', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) DEFAULT NULL,
  `sname` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `mno` bigint(10) NOT NULL,
  `aadharno` bigint(12) NOT NULL,
  `dose` enum('0','1','2') DEFAULT NULL,
  `vaccine` varchar(15) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `mname`, `sname`, `age`, `mno`, `aadharno`, `dose`, `vaccine`, `password`) VALUES
('Jash', '', 'Chauhan', 18, 1234567890, 123412347777, '1', '1', 'jash');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `id` int(11) NOT NULL,
  `vaccine` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `vaccine`) VALUES
(1, 'Covishield');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aadharno`);

--
-- Indexes for table `adminapprove`
--
ALTER TABLE `adminapprove`
  ADD PRIMARY KEY (`aadharno`);

--
-- Indexes for table `centres`
--
ALTER TABLE `centres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`aadharno`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
