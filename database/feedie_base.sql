-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 07:35 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedie_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `feed_no` int(6) NOT NULL,
  `st_username` varchar(50) NOT NULL,
  `te_username` varchar(50) NOT NULL,
  `sub_code` varchar(7) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `cover` int(2) DEFAULT NULL,
  `discuss` int(2) DEFAULT NULL,
  `knowledge` int(2) DEFAULT NULL,
  `communicate` int(2) DEFAULT NULL,
  `inspire` int(2) DEFAULT NULL,
  `punctual` int(2) DEFAULT NULL,
  `engage` int(2) DEFAULT NULL,
  `prepare` int(2) DEFAULT NULL,
  `guidance` int(2) DEFAULT NULL,
  `available` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`feed_no`, `st_username`, `te_username`, `sub_code`, `sub_name`, `class`, `cover`, `discuss`, `knowledge`, `communicate`, `inspire`, `punctual`, `engage`, `prepare`, `guidance`, `available`) VALUES
(7, 'Abijith', 'ARUN K', 'CS306', 'Networking', 'CSE-A S6', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(8, 'Adith', 'ARUN K', 'CS306', 'Networking', 'CSE-A S6', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(9, 'Abijith', 'MS.DEEPTHI', 'CS304', 'Compiler Design', 'CSE-A S6', 4, 4, 3, 4, 3, 4, 3, 3, 4, 3),
(10, 'Adith', 'MS.DEEPTHI', 'CS304', 'Compiler Design', 'CSE-A S6', 2, 3, 4, 4, 4, 4, 3, 3, 3, 3),
(11, 'Athira', 'MS.SRUTHY M R', 'CS302', 'Design Algorithm', 'CSE-A S6', 3, 4, 3, 3, 3, 3, 3, 3, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hods`
--

CREATE TABLE `hods` (
  `hod_username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dept` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hods`
--

INSERT INTO `hods` (`hod_username`, `password`, `dept`) VALUES
('master', 'master', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `rollno` varchar(10) NOT NULL,
  `st_username` varchar(10) NOT NULL,
  `class` varchar(8) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `done` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`rollno`, `st_username`, `class`, `password`, `done`) VALUES
('NCE15CS002', 'Abijith', 'CSE-A S6', 'abijith', 0),
('NCE15CS003', 'Adith', 'CSE-A S6', 'adith', 0),
('NCE15CS004', 'Aiswarya', 'CSE-A S6', 'aiswarya', 0),
('NCE15CS005', 'Ajith P G', 'CSE-A S6', 'ajith', 0),
('NCE15CS001', 'Athira', 'CSE-A S6', 'athira', 0),
('NCE15CS042', 'Muvin M', 'CSE-A S6', 'muvin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `te_username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dept` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`te_username`, `password`, `dept`) VALUES
('ARUN K', 'arun', 'CSE'),
('MS.BIJI K P', 'biji', 'CSE'),
('MS.DEEPTHI', 'deepthi', 'CSE'),
('MS.RESHMI H', 'reshmi', 'ECE'),
('MS.SRUTHY M R', 'sruthy', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `teachersinfo`
--

CREATE TABLE `teachersinfo` (
  `info_no` int(6) NOT NULL,
  `te_username` varchar(50) NOT NULL,
  `class` varchar(8) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_code` varchar(7) NOT NULL,
  `dept` varchar(5) NOT NULL,
  `class_strength` int(3) NOT NULL,
  `feed_applied` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachersinfo`
--

INSERT INTO `teachersinfo` (`info_no`, `te_username`, `class`, `sub_name`, `sub_code`, `dept`, `class_strength`, `feed_applied`) VALUES
(1, 'ARUN K', 'CSE-A S6', 'Networking', 'CS306', 'CSE', 5, 0),
(2, 'MS.RESHMI H', 'CSE-A S6', 'Management', 'HS300', 'ECE', 5, 0),
(3, 'MS.SRUTHY M R', 'CSE-A S6', 'Design Algorithm', 'CS302', 'CSE', 5, 0),
(4, 'MS.DEEPTHI', 'CSE-A S6', 'Compiler Design', 'CS304', 'CSE', 5, 0),
(5, 'MS.BIJI K P', 'CSE-A S6', 'Software Engg', 'CS308', 'CSE', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`feed_no`),
  ADD KEY `st_username` (`st_username`),
  ADD KEY `te_username` (`te_username`);

--
-- Indexes for table `hods`
--
ALTER TABLE `hods`
  ADD PRIMARY KEY (`hod_username`),
  ADD KEY `hod_username` (`hod_username`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`st_username`),
  ADD KEY `st_username` (`st_username`),
  ADD KEY `rollno` (`rollno`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`te_username`),
  ADD KEY `te_username` (`te_username`);

--
-- Indexes for table `teachersinfo`
--
ALTER TABLE `teachersinfo`
  ADD UNIQUE KEY `info_no` (`info_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `feed_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachersinfo`
--
ALTER TABLE `teachersinfo`
  MODIFY `info_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
