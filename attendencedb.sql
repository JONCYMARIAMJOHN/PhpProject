-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 01:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendencedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `id` int(11) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `id` int(11) NOT NULL,
  `Assmnt_name` varchar(20) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Batch` varchar(10) NOT NULL,
  `Sub1` float NOT NULL,
  `Sub2` float NOT NULL,
  `Sub3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`id`, `Assmnt_name`, `Sid`, `Name`, `Batch`, `Sub1`, `Sub2`, `Sub3`) VALUES
(2, '2', 1, 'Joncy Mariam John', 'JSD2', 19, 12, 15),
(3, '1', 2, 'Jeseena L', 'JSD2', 12, 14, 17);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Sid` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Batch` varchar(20) NOT NULL,
  `Status_h1` varchar(10) DEFAULT NULL,
  `Status_h2` varchar(10) DEFAULT NULL,
  `Status_h3` varchar(10) DEFAULT NULL,
  `Status_h4` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `Date`, `Sid`, `Name`, `Batch`, `Status_h1`, `Status_h2`, `Status_h3`, `Status_h4`) VALUES
(1, '2020-01-01', 1, 'Joncy Mariam John', 'JSD2', 'present', 'present', 'present', 'present'),
(2, '2020-01-17', 1, 'Joncy Mariam John', 'JSD2', 'present', 'present', 'present', 'present'),
(3, '2020-01-17', 2, 'Jeseena L', 'JSD2', 'present', 'present', 'present', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Fid` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Qualification` varchar(20) DEFAULT NULL,
  `Mobileno` bigint(20) DEFAULT NULL,
  `BatchInCharge` varchar(20) DEFAULT NULL,
  `Emailid` varchar(30) DEFAULT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Fid`, `Name`, `Address`, `Gender`, `Qualification`, `Mobileno`, `BatchInCharge`, `Emailid`, `Username`, `Password`) VALUES
(1, 'Amitha G', 'Kollam', 'Female', 'MCA', 9764098712, 'JSD2', 'amithag@gmail.com', 'amitha', 'amitha'),
(2, 'Gana', 'Trissur', 'Female', 'BTech', 9426123451, 'JSD1', 'gana@gmail.com', 'gana', 'gana');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `Sid` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Batch` varchar(10) NOT NULL,
  `Fromdate` date NOT NULL,
  `Todate` date NOT NULL,
  `Reason` varchar(50) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `Sid`, `Name`, `Batch`, `Fromdate`, `Todate`, `Reason`, `Status`) VALUES
(1, 1, 'Joncy Mariam John', 'JSD2', '2020-01-01', '2020-01-03', '', 'Approved'),
(2, 1, 'Joncy Mariam John', 'JSD2', '2020-01-07', '2020-01-08', 'Fever', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Sid` int(11) NOT NULL,
  `AdmissionNo` varchar(10) DEFAULT NULL,
  `AdmissionDate` date DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `MobileNo` bigint(20) DEFAULT NULL,
  `Guardian` varchar(20) DEFAULT NULL,
  `Batch` varchar(10) DEFAULT NULL,
  `Emailid` varchar(30) DEFAULT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sid`, `AdmissionNo`, `AdmissionDate`, `Name`, `Address`, `Dob`, `Gender`, `MobileNo`, `Guardian`, `Batch`, `Emailid`, `Username`, `Password`) VALUES
(1, '112', '2019-10-10', 'Joncy Mariam John', 'Valakom', '1995-12-08', 'Female', 9645924853, 'Daisy John', 'JSD2', 'joncymariam@gmail.com', 'joncy', 'joncy'),
(2, '113', '2019-10-10', 'Jeseena L', 'Kollam', '1995-08-08', 'Female', 9734120935, 'L', 'JSD2', 'jeseena@gmail.com', 'jeseena', 'jeseena'),
(4, '114', '2019-02-01', 'Geethu Ram', 'Kozhikode', '1997-09-09', 'Female', 93201984328, 'Ram', 'JSD1', 'geethu@gmail.com', 'geethu', 'geethu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Fid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintbl`
--
ALTER TABLE `admintbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
