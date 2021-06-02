-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 02:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `cid` int(5) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`cid`, `cname`, `type`) VALUES
(101, 'cricket', 'sports'),
(102, 'web', 'academic');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `deptno` int(5) NOT NULL,
  `deptname` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`deptno`, `deptname`, `location`) VALUES
(101, 'Computer', 'Pune'),
(102, 'Marketing', 'Mumbai'),
(103, 'Sales', 'Banglore');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empno` int(5) NOT NULL,
  `empname` varchar(20) NOT NULL,
  `empaddress` varchar(20) NOT NULL,
  `sal` int(10) NOT NULL,
  `deptno` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empno`, `empname`, `empaddress`, `sal`, `deptno`) VALUES
(1, 'Nikita', 'Gujrat', 100000, 101),
(2, 'Vaishnavi', 'Pune', 90000, 102),
(3, 'Aditi', 'Pune', 65000, 103),
(4, 'Shefali', 'Mumbai', 60000, 101),
(5, 'Riya', 'Nagpur', 75000, 101),
(6, 'Anjali', 'Pune', 40000, 103);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('admin1', 'admin1'),
('swayambhu', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `login1`
--

CREATE TABLE `login1` (
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login1`
--

INSERT INTO `login1` (`uid`, `pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `sid` int(5) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`sid`, `sname`, `class`) VALUES
(1, 'swayambhu', 'tybca'),
(2, 'dominic', 'tybca'),
(3, 'aditi', 'tybca');

-- --------------------------------------------------------

--
-- Table structure for table `stud_com`
--

CREATE TABLE `stud_com` (
  `sid` int(5) NOT NULL,
  `cid` int(5) NOT NULL,
  `rank` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_com`
--

INSERT INTO `stud_com` (`sid`, `cid`, `rank`) VALUES
(3, 102, 1),
(2, 101, 1),
(1, 101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher1`
--

CREATE TABLE `teacher1` (
  `tid` int(5) DEFAULT NULL,
  `tname` varchar(20) DEFAULT NULL,
  `addr` varchar(20) DEFAULT NULL,
  `sub` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cname` (`cname`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`deptno`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empno`),
  ADD KEY `deptno` (`deptno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `sname` (`sname`),
  ADD KEY `class` (`class`);

--
-- Indexes for table `stud_com`
--
ALTER TABLE `stud_com`
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `emp_ibfk_1` FOREIGN KEY (`deptno`) REFERENCES `dept` (`deptno`);

--
-- Constraints for table `stud_com`
--
ALTER TABLE `stud_com`
  ADD CONSTRAINT `stud_com_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `stud` (`sid`),
  ADD CONSTRAINT `stud_com_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `comp` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
