-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 06:05 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `department` varchar(8) DEFAULT NULL,
  `intake` int(3) DEFAULT NULL,
  `section` int(2) DEFAULT NULL,
  `day` varchar(10) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `course` varchar(10) DEFAULT NULL,
  `faculty` varchar(10) DEFAULT NULL,
  `room` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_routine`
--

INSERT INTO `class_routine` (`department`, `intake`, `section`, `day`, `time`, `course`, `faculty`, `room`) VALUES
('CSE', 29, 4, 'Tuesday', '2:20-3:20', 'CSE 453', 'AAG', 910),
('EEE', 32, 2, 'Saturday', '8:30-9:30', '`CSE 555', 'ABB', 211),
('EEE', 32, 1, 'Saturday', '8:30-9:30', 'CSE 453', 'ADC', 212),
('CSE', 29, 4, 'Sunday', '2:20-3:20', 'CSE 457', 'AAG', 908),
('CSE', 29, 4, 'Sunday', '3:25-4:25', 'CSE 407', 'AAG', 908),
('CSE', 29, 4, 'Tuesday', '3:25-4:25', 'CSE 407', 'AAG', 217),
('CSE', 29, 4, 'Tuesday', '4:30-5:30', 'CSE 457', 'AAG', 319),
('CSE', 29, 4, 'Wednesday', '2:20-3:20', 'CSE 407', 'AAG', 219),
('CSE', 29, 4, 'Wednesday', '3:25-4:25', 'CSE 453', 'AAG', 219),
('CSE', 29, 4, 'Monday', '2:20-3:20', 'CSE 458', 'AAG', 419),
('CSE', 29, 4, 'Monday', '3:25-4:25', 'CSE 458', 'AAG', 419),
('CSE', 29, 4, 'Monday', '4:30-5:30', 'CSE 458', 'AAG', 419);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_routine`
--

CREATE TABLE `faculty_routine` (
  `faculty_code` varchar(8) DEFAULT NULL,
  `course_code` varchar(10) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL,
  `intake` int(3) DEFAULT NULL,
  `section` int(2) DEFAULT NULL,
  `day` varchar(15) NOT NULL,
  `time` varchar(30) NOT NULL,
  `room` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_routine`
--

INSERT INTO `faculty_routine` (`faculty_code`, `course_code`, `department`, `intake`, `section`, `day`, `time`, `room`) VALUES
('AAG', 'CSE 458', 'CSE', 29, 4, 'Monday', '2:20-5:30', 416),
('MMD', 'CSE 213', 'CSE', 35, 6, 'Saturday', '10:40-11:40', 910),
('AAG', 'CSE 407', 'CSE', 29, 4, 'Sunday', '3:25-4:25', 908),
('AAG', 'CSE 453', 'CSE', 29, 4, 'Sunday', '4:30-5:30', 908),
('MBW', 'CSE 400', 'CSE', 29, 1, 'Thursday', '1:15-3:20', 418),
('AAG', 'CSE 457', 'CSE', 29, 4, 'Tuesday', '10:40-11:40', 310),
('AAG', 'CSE 407', 'CSE', 29, 4, 'Tuesday', '3:25-4:25', 209);

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`) VALUES
('admin', '67890');

-- --------------------------------------------------------

--
-- Table structure for table `reg_student`
--

CREATE TABLE `reg_student` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL,
  `intake` int(3) DEFAULT NULL,
  `section` int(2) DEFAULT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_student`
--

INSERT INTO `reg_student` (`id`, `name`, `department`, `intake`, `section`, `PASSWORD`) VALUES
('14152103025', 'Abdullah Zaki', 'CSE', 29, 1, 'abc'),
('152103028', 'Sakib', 'English', 25, 1, 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `reg_teacher`
--

CREATE TABLE `reg_teacher` (
  `name` varchar(20) DEFAULT NULL,
  `code_name` varchar(10) NOT NULL,
  `department` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_teacher`
--

INSERT INTO `reg_teacher` (`name`, `code_name`, `department`, `email`, `PASSWORD`) VALUES
('Azgor Ali', 'AZA', 'CSE', 'azgorali@gmail.com', '222'),
('Musa Abdullah ', 'MA', 'EEE', 'musa@gmail.com', 'musa'),
('Milon Biswas', 'MBW', 'CSE', 'milon@yahoo.com', 'milon');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_info`
--

CREATE TABLE `teachers_info` (
  `Name` varchar(30) DEFAULT NULL,
  `Codename` varchar(10) NOT NULL,
  `Designation` varchar(20) DEFAULT NULL,
  `Room` int(4) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Department` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_info`
--

INSERT INTO `teachers_info` (`Name`, `Codename`, `Designation`, `Room`, `Email`, `Department`) VALUES
('Ali Azgor', 'AAG', 'Lecturer', 202, 'azgorali@gmail.com', 'CSE'),
('Mahmud Alam', 'MA', 'Lecturer', 110, 'malam@arc.com', 'Architectu'),
('MD. Shahiduzzaman', 'MSZ', 'Assistant Professor', 321, 'msz@bubt.edu', 'CSE'),
('Nahid Newaz', 'NN', 'Lecturer', 201, 'nnewaz@bubt.edu', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_routine`
--
ALTER TABLE `faculty_routine`
  ADD PRIMARY KEY (`day`,`time`,`room`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `reg_student`
--
ALTER TABLE `reg_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_teacher`
--
ALTER TABLE `reg_teacher`
  ADD PRIMARY KEY (`code_name`);

--
-- Indexes for table `teachers_info`
--
ALTER TABLE `teachers_info`
  ADD PRIMARY KEY (`Codename`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
