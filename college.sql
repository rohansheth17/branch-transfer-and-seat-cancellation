-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2016 at 12:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_id` int(5) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Contact` int(10) NOT NULL,
  `Logged` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_id`, `Firstname`, `Lastname`, `Contact`, `Logged`) VALUES
(15362, 'Rohan', 'Sheth', 9820960, 1),
(32566, 'Prem', 'Prabhu', 1214555, 0),
(64736, 'Sagar ', 'Prabhu', 2873528, 0),
(75846, 'Yash', 'Shah', 32223525, 0),
(89796, 'Rohit', 'Nahata', 23553536, 0);

-- --------------------------------------------------------

--
-- Table structure for table `studentbranch`
--

CREATE TABLE `studentbranch` (
  `reg_id` int(5) NOT NULL,
  `curryear` int(1) NOT NULL,
  `Branch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentbranch`
--

INSERT INTO `studentbranch` (`reg_id`, `curryear`, `Branch`) VALUES
(15362, 1, 'Computer'),
(32566, 2, 'EXTC'),
(64736, 2, 'Etrx'),
(75846, 3, 'IT'),
(89796, 1, 'Computer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `reg_id` (`reg_id`);

--
-- Indexes for table `studentbranch`
--
ALTER TABLE `studentbranch`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `reg_id` (`reg_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
