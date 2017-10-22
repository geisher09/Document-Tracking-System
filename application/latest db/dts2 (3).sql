-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 10:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts2`
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
(1, '171022-KMZCX-1', 'New dummy', 'New dummy', './uploads/99259ec3c1424946.pdf', '2017-10-22 14:35:00'),
(2, '171022-XESKJ-2', '2nd Dummy', '2nd Dummy', './uploads/1392559ec54b053bb1.pdf', '2017-10-22 16:20:00'),
(3, '171022-HFLNS-3', 'For Junie', 'For Junie', './uploads/1674159ec652e9a5b3.pdf', '2017-10-22 17:30:22'),
(4, '171022-KEBMV-4', 'For Ancheta', 'For Ancheta', './uploads/2376459eca0170533b.pdf', '2017-10-22 21:41:43'),
(5, '171023-TFSCA-5', 'try for date', 'try for date', './uploads/664259ecc20cc7414.pdf', '2017-10-23 00:06:36'),
(6, '171023-AWTVL-6', 'try uli', 'try', './uploads/1569159ecc252ac24d.pdf', '2017-10-23 00:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `documentation_id` int(6) NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `document_id` int(3) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_of_action` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `recipient` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentation`
--

INSERT INTO `documentation` (`documentation_id`, `employee_id`, `document_id`, `status`, `date_of_action`, `recipient`) VALUES
(23, '15-202-002', 1, 'Returned', '2017-10-23 01:12:21', '15-202-002'),
(24, '15-202-002', 2, 'Returned', '2017-10-23 01:04:32', '15-202-002'),
(25, '17-104-7', 3, 'Returned', '2017-10-23 01:10:11', '17-104-7'),
(26, '17-102-8', 4, 'Returned', '2017-10-23 00:58:02', '17-102-8'),
(27, '17-104-7', 5, 'For Approval', '2017-10-23 00:06:37', '15-101-001'),
(28, '17-104-7', 6, 'For Approval', '2017-10-23 00:07:46', '15-101-001');

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
  `password` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `isAdmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `department_id`, `username`, `position`, `lname`, `fname`, `mname`, `sex`, `password`, `image`, `isAdmin`) VALUES
('15-101-001', 101, 'Ancheta29', 'Professor', 'Ancheta', 'Christian Daniel', 'Mozo', 'm', '25d55ad283aa400af464c76d713c07ad', './images/male.png', 0),
('15-101-002', 101, 'DummyMo', 'Professor', 'Dummy', 'Employee', 'Entry', 'f', '25d55ad283aa400af464c76d713c07ad', './images/female.png', 0),
('15-201-005', 201, 'Mozo', 'Head', 'Mozo', 'Daniella', 'Gagote', 'f', '25d55ad283aa400af464c76d713c07ad', './images/female.png', 0),
('15-202-001', 102, 'Dummy', 'Professor', 'Dummy', 'Dummy', 'Dummy', 'f', '25d55ad283aa400af464c76d713c07ad', './images/male.png', 0),
('15-202-002', 202, 'Jungie', 'Professor', 'Jungkook', 'Junnie boy', 'kpop', 'm', '25d55ad283aa400af464c76d713c07ad', './images/male.png', 0),
('17-101-6', 101, 'Lenovo', 'Intern', 'Lenovo', 'Daniel', 'Asus', 'm', 'e389a212c2b3beb2a9a00ad2f13b8c2b', './images/male.png', 0),
('17-101-9', 101, 'mercado', 'Professor', 'Mercado', 'Nina', 'Waway', 'f', '25d55ad283aa400af464c76d713c07ad', './images/female.png', 0),
('17-102-8', 102, 'audreywaje', 'Dean', 'Waje', 'Audrey Noelle', 'Pabillaran', 'f', '25d55ad283aa400af464c76d713c07ad', './images/female.png', 0),
('17-104-7', 104, 'geisher09', 'Dean', 'Bernabe', 'Geisher', 'Gonzalo', 'f', '25d55ad283aa400af464c76d713c07ad', './images/873559eb646184827.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_no` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `response` varchar(20) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date_responded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_no`, `document_id`, `response`, `employee_id`, `comment`, `date_responded`, `sender`) VALUES
(29, 1, 'For Approval', '17-104-7', 'none', '2017-10-22 02:35:00', '15-202-002'),
(30, 1, 'For Review', '17-104-7', 'none', '2017-10-22 02:35:00', '15-202-002'),
(31, 2, 'For Approval', '17-104-7', 'none', '2017-10-22 04:20:01', '15-202-002'),
(32, 1, 'Approved', '17-104-7', 'Approved File!', '2017-10-22 02:35:00', '15-202-002'),
(33, 3, 'For Approval', '15-101-001', 'none', '2017-10-22 05:30:23', '17-104-7'),
(34, 3, 'For Numbering', '15-101-001', 'none', '2017-10-22 05:30:23', '17-104-7'),
(35, 3, 'Approved', '15-101-001', 'none', '2017-10-22 05:30:23', '17-104-7'),
(36, 3, 'For Approval', '17-102-8', 'none', '2017-10-22 05:30:23', '15-101-001'),
(37, 4, 'For Approval', '15-101-001', 'none', '2017-10-22 09:41:43', '17-102-8'),
(38, 3, 'Approved2', '15-101-001', 'none', '2017-10-22 05:30:23', '17-104-7'),
(39, 2, 'Cancelled', '17-104-7', 'wrong file data', '2017-10-22 23:38:49', '15-202-002'),
(40, 1, 'For Review', '17-104-7', 'review', '2017-10-22 23:44:02', '15-202-002'),
(41, 2, 'For Review', '17-104-7', 'revvvvv', '2017-10-22 23:46:00', '15-202-002'),
(42, 2, 'Cancelled', '17-104-7', 'none', '2017-10-22 11:49:15', '15-202-002'),
(43, 2, 'For Review', '17-104-7', 'none', '2017-10-22 11:51:38', '15-202-002'),
(44, 1, 'For Review', '17-104-7', 'none', '2017-10-22 11:53:28', '15-202-002'),
(45, 1, 'For Review', '17-104-7', 'none', '0000-00-00 00:00:00', '15-202-002'),
(46, 1, 'For Review', '17-104-7', 'none', '2017-10-22 23:57:35', '15-202-002'),
(47, 1, 'For Review', '17-104-7', 'none', '2017-10-23 00:01:05', '15-202-002'),
(48, 1, 'For Review', '17-104-7', 'none', '2017-10-23 00:02:12', '15-202-002'),
(49, 1, 'For Review', '17-104-7', 'none', '2017-10-23 00:03:49', '15-202-002'),
(50, 1, 'For Review', '17-104-7', 'none', '2017-10-23 00:04:26', '15-202-002'),
(51, 1, 'For Review', '17-104-7', 'none', '2017-10-23 00:04:39', '15-202-002'),
(52, 1, 'For Review', '17-104-7', 'none', '2017-10-23 00:04:48', '15-202-002'),
(53, 1, 'For Review', '17-104-7', 'none', '2017-10-23 00:05:45', '15-202-002'),
(54, 5, 'For Approval', '15-101-001', 'none', '0000-00-00 00:00:00', '17-104-7'),
(55, 6, 'For Approval', '15-101-001', 'none', '2017-10-23 00:07:47', '17-104-7'),
(56, 4, 'For Approval', '17-104-7', 'none', '2017-10-23 00:25:25', '15-101-001'),
(57, 4, 'Returned', '17-102-8', 'DON''T LIKE THIS FILE!', '2017-10-23 00:58:01', '17-104-7'),
(58, 1, 'Returned', '15-202-002', 'ULIT', '2017-10-23 01:01:20', '17-104-7'),
(59, 2, 'Returned', '15-202-002', 'try', '2017-10-23 01:04:30', '17-104-7'),
(60, 1, 'For Approval', '15-101-001', 'none', '2017-10-23 01:07:14', '15-202-002'),
(61, 3, 'For Review', '15-101-001', 'none', '2017-10-23 01:09:52', '17-104-7'),
(62, 3, 'Returned', '17-104-7', 'Mali', '2017-10-23 01:10:10', '15-101-001'),
(63, 1, 'For Approval', '17-101-6', 'none', '2017-10-23 01:11:01', '15-101-001'),
(64, 1, 'For Review', '17-101-6', 'none', '2017-10-23 01:11:27', '15-101-001'),
(65, 1, 'For Approval', '17-102-8', 'none', '2017-10-23 01:11:55', '17-101-6'),
(66, 1, 'Returned', '15-202-002', 'balik ko', '2017-10-23 01:12:20', '17-102-8');

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
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_desc` varchar(25) NOT NULL,
  `allowForward` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_desc`, `allowForward`) VALUES
(1, 'For Review', 1),
(2, 'Cancelled', 0);

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
  ADD KEY `employee_id` (`employee_id`,`document_id`,`recipient`),
  ADD KEY `document_id` (`document_id`),
  ADD KEY `signatories` (`recipient`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `department_id` (`department_id`) USING BTREE;

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_no`),
  ADD KEY `document_id` (`document_id`),
  ADD KEY `response` (`response`),
  ADD KEY `response_2` (`response`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documentation`
--
ALTER TABLE `documentation`
  MODIFY `documentation_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
