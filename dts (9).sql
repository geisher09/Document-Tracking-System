-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 10:56 AM
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
(2, 'Christian', 'Pangalawang Dummy ni Ancheta', 0x5231203d2031202031202d35207c330d0a5232203d2031202030202d32207c312020200d0a5233203d2032202d31202d31207c302020200d0a0d0a52312b2d315232203d2052320d0a2d3152323d2d3128312030202d322031293d202d312030202032202d310d0a090920202020312031202d352020330d0a2020202020202020202020202020202020202020302031202d32202d3220202d3e205231203d2031202031202d352020330d0a202020202020202020202020202020202020202020202020202020202020202020205232203d2030202031202d32202d320d0a202020202020202020202020202020202020202020202020202020202020202020205233203d2032202d31202d312020300d0a20200909090920200d0a200d0a0d0a0d0a200d0a, '2017-09-28'),
(3, 'New', 'Entry', 0x2e2f75706c6f6164732f3233373537353964663733343963333736322e747874, '2017-10-12'),
(5, 'title', 'desc', 0x2e2f75706c6f6164732f36343631353964666239376431333838322e747874, '2017-10-13'),
(18, '18 pdf', 'seen', 0x2e2f75706c6f6164732f4645416e63686574615f322e706466, '2017-10-13'),
(91, 'Download Dummy', 'Downloaded', 0x2e2f75706c6f6164732f547261636b2e747874, '2017-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `documentation_id` int(6) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `document_id` int(3) NOT NULL,
  `action` varchar(10) NOT NULL,
  `approved` int(100) DEFAULT NULL,
  `rejected` int(100) DEFAULT NULL,
  `document_status` varchar(10) NOT NULL,
  `date_of_action` date NOT NULL,
  `signatory` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`documentation_id`, `employee_id`, `document_id`, `action`, `approved`, `rejected`, `document_status`, `date_of_action`, `signatory`) VALUES
(2, '15-202-002', 2, 'Pending', NULL, NULL, 'sent', '2017-09-28', 2),
(3, '15-202-002', 1, 'Pending', NULL, NULL, 'sent', '2017-09-28', 2),
(4, '17-104-7', 3, 'Approved', NULL, NULL, 'sent', '2017-10-23', 4),
(5, '17-104-7', 91, 'Approved', NULL, NULL, 'sent', '2017-10-13', 6),
(6, '17-101-6', 18, 'Pending', NULL, NULL, 'sent', '2017-10-13', 7);

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
('15-201-005', 201, 'Mozo', 'Head', 'Mozo', 'Daniella', 'Gagote', 'f', 'part'),
('15-202-001', 102, 'Dummy', 'Professor', 'Dummy', 'Dummy', 'Dummy', 'f', 'full'),
('15-202-002', 202, 'Jung', 'Professor', 'Jungkook', 'BTS', 'kpop', 'm', '25d55ad283aa400af464c76d713c07ad'),
('17-101-6', 101, 'Lenovo', 'Intern', 'Lenovo', 'Daniel', 'Asus', 'm', '25d55ad283aa400af464c76d713c07ad'),
('17-104-7', 104, 'geisher09', 'Dean', 'Bernabe', 'Geisher', 'Gonzalo', 'f', '56ad349e35056b1b289fae48e8e03830');

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

-- --------------------------------------------------------

--
-- Table structure for table `signatory`
--

CREATE TABLE `signatory` (
  `signatory_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `response` varchar(10) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date_responded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signatory`
--

INSERT INTO `signatory` (`signatory_id`, `document_id`, `response`, `employee_id`, `comment`, `date_responded`) VALUES
(1, 1, 'Pending', '15-101-001', 'none', '2017-10-08 11:29:58'),
(2, 2, 'Pending', '17-104-7', 'none', '2017-10-08 11:30:51'),
(3, 2, 'Pending', '15-101-001', 'none', '2017-10-08 11:30:58'),
(4, 1, 'Pending', '15-201-005', 'none', '2017-10-09 09:40:52'),
(5, 3, 'Approved', '17-104-7', 'none', '2017-10-13 13:42:00'),
(6, 91, 'Pending', '17-104-7', 'none', '2017-10-13 09:24:16'),
(7, 18, 'Approved', '17-101-6', 'none', '2017-10-13 10:16:00');

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
-- Indexes for table `signatory`
--
ALTER TABLE `signatory`
  ADD PRIMARY KEY (`signatory_id`),
  ADD KEY `document_id` (`document_id`),
  ADD KEY `response` (`response`),
  ADD KEY `response_2` (`response`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documentation`
--
ALTER TABLE `documentation`
  MODIFY `documentation_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `signatory`
--
ALTER TABLE `signatory`
  MODIFY `signatory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
