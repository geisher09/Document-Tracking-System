-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2017 at 06:02 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(201, 'Dean''s Office', 2),
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
  `tracking_no` varchar(30) NOT NULL,
  `document_title` varchar(30) NOT NULL,
  `document_desc` varchar(30) NOT NULL,
  `document_file` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `tracking_no`, `document_title`, `document_desc`, `document_file`, `date_created`) VALUES
(1, '', 'Ancheta', 'Dummy Data ni Ancheta', 'new', '2017-09-28 00:00:00'),
(2, '', 'Christian', 'Pangalawang Dummy ni Ancheta', 'R1 = 1  1 -5 |3\r\nR2 = 1  0 -2 |1   \r\nR3 = 2 -1 -1 ', '2017-09-28 00:00:00'),
(3, '', 'Dummy', 'Dummy', './uploads/1408559e0cec705379.pdf', '0000-00-00 00:00:00'),
(4, '171014-QMSUL-4', 'try', 'try', './uploads/69959e1ca20b4300.pdf', '2017-10-10 21:05:52'),
(5, '171014-LWMTG-5', '2nd Try', '2nd Try Gei', './uploads/589859e1cc31acc3b.pdf', '2017-10-14 16:34:57'),
(6, '171014-GNIJU-6', '3rd test', '3rd test', './uploads/206959e1e796eaeb8.pdf', '2017-10-14 18:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `documentation_id` int(6) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `document_id` int(3) NOT NULL,
  `action` varchar(10) NOT NULL,
  `date_of_action` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `signatory` int(2) NOT NULL,
  `approved` int(2) NOT NULL,
  `rejected` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`documentation_id`, `employee_id`, `document_id`, `action`, `date_of_action`, `signatory`, `approved`, `rejected`) VALUES
(2, '15-202-002', 2, 'Rejected', '2017-10-15 11:53:13', 3, 2, 1),
(3, '15-202-002', 1, 'Pending', '2017-09-28 00:00:00', 2, 0, 0),
(4, '17-101-6', 3, 'pending', '2017-10-13 00:00:00', 2, 0, 0),
(5, '17-101-6', 4, 'Rejected', '2017-10-15 11:50:19', 2, 1, 1),
(6, '17-104-7', 5, 'Pending', '2017-10-14 16:34:58', 2, 0, 0),
(7, '17-104-7', 6, 'Approved', '2017-10-15 11:54:14', 2, 2, 0);

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
('15-101-001', 101, 'Ancheta29', 'Professor', 'Ancheta', 'Christian Daniel', 'Mozo', 'm', '25d55ad283aa400af464c76d713c07ad'),
('15-101-002', 101, 'DummyMo', 'Professor', 'Dummy', 'Employee', 'Entry', 'f', '25d55ad283aa400af464c76d713c07ad'),
('15-201-005', 201, 'Mozo', 'Head', 'Mozo', 'Daniella', 'Gagote', 'f', '25d55ad283aa400af464c76d713c07ad'),
('15-202-001', 102, 'Dummy', 'Professor', 'Dummy', 'Dummy', 'Dummy', 'f', '25d55ad283aa400af464c76d713c07ad'),
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
(2, 2, 'Rejected', '17-104-7', 'None', '2017-10-15 11:52:09'),
(3, 2, 'Approved', '15-101-001', 'None', '2017-10-15 11:51:09'),
(4, 1, 'Pending', '15-201-005', 'none', '2017-10-09 09:40:52'),
(5, 3, 'Pending', '17-104-7', 'none', '2017-10-13 10:37:10'),
(6, 2, 'Approved', '15-201-005', 'None', '2017-10-15 11:53:13'),
(7, 3, 'Pending', '15-101-001', 'none', '2017-10-14 03:37:44'),
(8, 4, 'Rejected', '15-101-001', 'None', '2017-10-15 11:50:19'),
(9, 4, 'Approved', '17-104-7', 'Good job!!', '2017-10-14 10:32:54'),
(10, 5, 'Pending', '15-202-001', 'none', '2017-10-14 04:35:56'),
(11, 5, 'Pending', '15-202-002', 'none', '2017-10-14 06:22:10'),
(12, 6, 'Approved', '15-101-001', 'None', '2017-10-15 12:18:38'),
(13, 6, 'Approved', '17-101-6', 'None', '2017-10-15 11:54:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

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
  ADD KEY `signatories` (`signatory`),
  ADD KEY `approved` (`approved`),
  ADD KEY `rejected` (`rejected`),
  ADD KEY `approved_2` (`approved`);

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
  MODIFY `documentation_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `signatory`
--
ALTER TABLE `signatory`
  MODIFY `signatory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
