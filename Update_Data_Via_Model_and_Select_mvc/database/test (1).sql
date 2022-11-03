-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 06:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `Id` int(111) NOT NULL,
  `Name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`Id`, `Name`) VALUES
(1, 'Desg1'),
(2, 'Desg2'),
(3, 'Desg3'),
(4, 'Desg4'),
(5, 'Desg5'),
(6, 'Desg6'),
(7, 'Desg7');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `Id` int(111) NOT NULL,
  `Name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`Id`, `Name`) VALUES
(1, 'Div1'),
(2, 'Div2'),
(3, 'Div3'),
(4, 'Div4'),
(5, 'Div5'),
(6, 'Div6'),
(7, 'Div7');

-- --------------------------------------------------------

--
-- Table structure for table `employeechild`
--

CREATE TABLE `employeechild` (
  `Id` int(111) NOT NULL,
  `EmpId` int(22) NOT NULL,
  `Address1` varchar(43) NOT NULL,
  `Address2` varchar(343) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeechild`
--

INSERT INTO `employeechild` (`Id`, `EmpId`, `Address1`, `Address2`) VALUES
(1, 3, 'aaa', ''),
(2, 3, 'bbb', ''),
(3, 1, 'ccc', ''),
(4, 2, 'ddd', ''),
(5, 4, 'eee', ''),
(6, 3, 'fff', ''),
(7, 2, 'ggg', ''),
(8, 9, 'hhh', ''),
(9, 9, 'iii', ''),
(10, 4, 'jjj', '');

-- --------------------------------------------------------

--
-- Table structure for table `employeemaster`
--

CREATE TABLE `employeemaster` (
  `Id` int(110) NOT NULL,
  `FirstName` varchar(33) NOT NULL,
  `LastName` int(111) NOT NULL,
  `OrgId` int(33) NOT NULL,
  `Division` int(111) NOT NULL,
  `Designation` int(111) NOT NULL,
  `Location` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeemaster`
--

INSERT INTO `employeemaster` (`Id`, `FirstName`, `LastName`, `OrgId`, `Division`, `Designation`, `Location`) VALUES
(1, 'A', 1, 10, 2, 5, 4),
(2, 'B', 2, 11, 1, 4, 4),
(3, 'C', 3, 12, 1, 7, 5),
(4, 'D', 4, 10, 4, 1, 1),
(5, 'E', 5, 15, 5, 2, 1),
(6, 'F', 6, 22, 2, 3, 1),
(7, 'G', 7, 11, 2, 4, 2),
(8, 'H', 8, 10, 3, 5, 3),
(9, 'I', 9, 15, 3, 1, 4),
(10, 'J', 10, 15, 4, 1, 5),
(11, 'k', 11, 15, 5, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Id` int(111) NOT NULL,
  `Name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Id`, `Name`) VALUES
(1, 'Location1'),
(2, 'Location2'),
(3, 'Location3'),
(4, 'Location4'),
(5, 'Location5'),
(6, 'Location6'),
(7, 'Location7');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `fullname`) VALUES
(4, 'himanshu', 'chauhan', 'chauhan'),
(5, 'babur', 'chauhan', 'chauhan'),
(6, 'amit', 'pal', 'pal'),
(7, 'hero', 'yadav', 'yadav');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employeechild`
--
ALTER TABLE `employeechild`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employeemaster`
--
ALTER TABLE `employeemaster`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employeechild`
--
ALTER TABLE `employeechild`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employeemaster`
--
ALTER TABLE `employeemaster`
  MODIFY `Id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `Id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
