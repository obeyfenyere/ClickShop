-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2018 at 08:03 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_fname` varchar(100) NOT NULL,
  `a_lname` varchar(100) NOT NULL,
  `a_pno` varchar(50) NOT NULL,
  `a_gender` text NOT NULL,
  `a_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_fname`, `a_lname`, `a_pno`, `a_gender`, `a_pass`) VALUES
(1, 'Salome', 'Ngonde', '2929292929', 'female', '123'),
(2, 'Joseph', 'Mhecha', '0783445577', 'male', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bursar`
--

CREATE TABLE `bursar` (
  `b_id` int(10) NOT NULL,
  `b_fname` varchar(100) NOT NULL,
  `b_lname` varchar(100) NOT NULL,
  `b_pno` varchar(50) NOT NULL,
  `b_gender` text NOT NULL,
  `b_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bursar`
--

INSERT INTO `bursar` (`b_id`, `b_fname`, `b_lname`, `b_pno`, `b_gender`, `b_pass`) VALUES
(13, 'Mary', 'Kainyingi', '789547895', 'Female', '123'),
(11, 'Joseph', 'Mhecha', '0765102244', 'Male', '123'),
(12, 'Anton', 'Nyoni', '098765543', 'Male', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `reg_no` int(11) NOT NULL,
  `d_fname` varchar(50) NOT NULL,
  `d_lname` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `office_tel` varchar(100) NOT NULL,
  `email_fax` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `vin` varchar(50) NOT NULL,
  `work_carry` varchar(250) NOT NULL,
  `demage_found` varchar(250) NOT NULL,
  `accessories` varchar(250) NOT NULL,
  `car_received` varchar(100) NOT NULL,
  `mileage_covered` varchar(50) NOT NULL,
  `date_received` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`reg_no`, `d_fname`, `d_lname`, `customer_name`, `mobile`, `office_tel`, `email_fax`, `model`, `engine`, `vin`, `work_carry`, `demage_found`, `accessories`, `car_received`, `mileage_covered`, `date_received`) VALUES
(70, 'Tadiwa', 'Katso', 'Tadiwa Katso', '0772134555', '+2634665777', 'katso@gmail.com', 'Mercedes Benz', 'V8', '1234', 'Fodya', 'nill', 'nill', 'Diego', '12333', '2018-06-17 15:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `i_id` int(10) NOT NULL,
  `reg_no` int(10) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`i_id`, `reg_no`, `cost`) VALUES
(9, 6, '5000000'),
(6, 67, '20000000'),
(10, 12, '100000');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `p_id` int(10) NOT NULL,
  `p_fname` varchar(100) NOT NULL,
  `p_lname` varchar(100) NOT NULL,
  `p_pno` varchar(50) NOT NULL,
  `p_gender` text NOT NULL,
  `p_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`p_id`, `p_fname`, `p_lname`, `p_pno`, `p_gender`, `p_pass`) VALUES
(3, 'Tinlee', 'Diego', '7895478954', 'Male', '123'),
(5, 'Chibaba', 'JahLove', '0775132432', 'Male', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `r_id` int(10) NOT NULL,
  `r_fname` varchar(100) NOT NULL,
  `r_lname` varchar(100) NOT NULL,
  `r_pno` varchar(50) NOT NULL,
  `r_gender` text NOT NULL,
  `r_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`r_id`, `r_fname`, `r_lname`, `r_pno`, `r_gender`, `r_pass`) VALUES
(1, 'HAMISI', 'JUMA', '', 'MALE', '123'),
(2, 'JOSEPH', 'MHECHA', '', 'MALE', '123'),
(3, 'Amos', 'Lingowe', '6546583469', 'Male', '123');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `s_id` int(10) NOT NULL,
  `s_fname` varchar(100) NOT NULL,
  `s_lname` varchar(100) NOT NULL,
  `s_pno` varchar(50) NOT NULL,
  `s_gender` text NOT NULL,
  `s_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`s_id`, `s_fname`, `s_lname`, `s_pno`, `s_gender`, `s_pass`) VALUES
(1, 'EMMANUEL', 'DALLU', '0786223344', 'MALE', '123'),
(2, 'ELIZABETH', 'MHECHA', '089756563', 'FEMALE', '123'),
(3, 'Erick', 'Mhecha', '`76767767676', 'Male', '123'),
(4, 'Neema', 'Mhecha', '232323232', 'Female', '123'),
(5, 'Erick', 'Mhecha', '232323232', 'Male', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bursar`
--
ALTER TABLE `bursar`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bursar`
--
ALTER TABLE `bursar`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `reg_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
