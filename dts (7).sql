-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 07:45 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(3) NOT NULL,
  `department_desc` varchar(200) NOT NULL,
  `office_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_desc`, `office_id`) VALUES
(101, 'Audio Visual Department', 1),
(102, 'Computer Department', 1),
(103, 'Construction Engineering and Management Department', 1),
(104, 'Electrical Department', 1),
(105, 'sssss', 1),
(106, 'efdfdsfsdf', 1),
(201, 'Dean\'s Office', 2),
(202, 'Math Department', 2),
(203, 'Physics Department', 2),
(204, 'Chemistry Department', 2),
(301, 'New', 3),
(302, 'Ancheta', 3),
(303, 'Entry', 3),
(304, 'Yo', 3),
(305, 'Hello', 3),
(401, 'Another Dummy Department', 4),
(402, 'Name', 4),
(403, 'Last na to', 4),
(404, 'ABC', 4),
(405, 'Dummy Department', 4);

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(3) NOT NULL,
  `document_title` varchar(30) NOT NULL,
  `document_desc` varchar(30) NOT NULL,
  `document_file` longblob NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `document_title`, `document_desc`, `document_file`, `date_created`) VALUES
(1, 'Ancheta', 'Dummy Data ni Ancheta', 0x6e6577, '2017-09-28'),
(2, 'Christian', 'Pangalawang Dummy ni Ancheta', 0x5231203d2031202031202d35207c330d0a5232203d2031202030202d32207c312020200d0a5233203d2032202d31202d31207c302020200d0a0d0a52312b2d315232203d2052320d0a2d3152323d2d3128312030202d322031293d202d312030202032202d310d0a090920202020312031202d352020330d0a2020202020202020202020202020202020202020302031202d32202d3220202d3e205231203d2031202031202d352020330d0a202020202020202020202020202020202020202020202020202020202020202020205232203d2030202031202d32202d320d0a202020202020202020202020202020202020202020202020202020202020202020205233203d2032202d31202d312020300d0a20200909090920200d0a200d0a0d0a0d0a200d0a, '2017-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `documentation_id` int(6) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `document_id` int(3) NOT NULL,
  `action` varchar(10) NOT NULL,
  `document_status` varchar(10) NOT NULL,
  `date_of_action` date NOT NULL,
  `signatory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`documentation_id`, `employee_id`, `document_id`, `action`, `document_status`, `date_of_action`, `signatory`) VALUES
(1, '15-101-001', 1, 'Pending', 'sent', '2017-09-28', '15-101-002'),
(2, '15-101-001', 1, 'Pending', 'sent', '2017-09-28', '15-201-005'),
(3, '15-202-001', 2, 'Approved', 'received', '2017-09-28', '15-201-005'),
(4, '15-202-001', 2, 'Approved', 'received', '2017-09-28', '15-201-002');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` varchar(15) NOT NULL,
  `department_id` int(3) NOT NULL,
  `username` varchar(60) NOT NULL,
  `position` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `department_id`, `username`, `position`, `lname`, `fname`, `mname`, `sex`, `password`) VALUES
('15-101-001', 101, 'Ancheta29', 'Professor', 'Ancheta', 'Christian Daniel', 'Mozo', 'm', 'mozo'),
('15-101-002', 101, 'DummyMo', 'Professor', 'Dummy', 'Employee', 'Entry', 'f', 'dummy'),
('15-201-002', 102, 'Jung', 'Professor', 'Jungkook', 'BTS', 'kpop', 'm', 'pop'),
('15-201-005', 201, 'Mozo', 'Head', 'Mozo', 'Daniella', 'Gagote', 'f', 'part'),
('15-202-001', 102, 'Dummy', 'Professor', 'Dummy', 'Dummy', 'Dummy', 'f', 'full'),
('17-101-6', 101, 'Lenovo', 'Intern', 'Lenovo', 'Daniel', 'Asus', 'm', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `office_id` int(3) NOT NULL,
  `office_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`office_id`, `office_desc`) VALUES
(1, 'Integrated Research and Training Center'),
(2, 'College of Science'),
(3, 'Office of the Vice President for Research and Extension'),
(4, 'Office of the University Research and development Services'),
(5, 'Dummy Office');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `documentation`
--
ALTER TABLE `documentation`
  ADD PRIMARY KEY (`documentation_id`),
  ADD KEY `employee_id` (`employee_id`,`document_id`,`signatory`),
  ADD KEY `document_id` (`document_id`),
  ADD KEY `signatories` (`signatory`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `department_id` (`department_id`) USING BTREE;

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`office_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documentation`
--
ALTER TABLE `documentation`
  MODIFY `documentation_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
