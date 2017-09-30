-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 07:08 AM
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
(201, 'Dean''s Office', 2),
(202, 'Math Department', 2),
(203, 'Physics Department', 2),
(204, 'Chemistry Department', 2);

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
(123, 'Hays', 'Hayss', 0x2e2f75706c6f6164732f3130313839353963653030396530323735662e706466, '0000-00-00');

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
(2, '15-101-001', 1, 'Pending', 'sent', '2017-09-28', '15-201-001'),
(3, '15-202-001', 2, 'Approved', 'received', '2017-09-28', '15-201-001'),
(4, '15-202-001', 2, 'Approved', 'received', '2017-09-28', '15-201-002');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` varchar(15) NOT NULL,
  `department_id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `position` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `department_id`, `username`, `position`, `lname`, `fname`, `mname`, `sex`, `password`) VALUES
('17-101-10', 101, 'kimberly19', 'Professor', 'Bernabe', 'Kim', 'Gonzalo', 'f', '$2y$10$QsvTgfhjqlBu7lv7ztglBOChUoInxk7MyexicFs/j7JGRbKD6ChmW'),
('17-101-7', 101, 'sheiraman', 'Professor', 'Man-awit', 'Sheira', 'Custodio', 'f', '$2y$10$GGMGpgQg6XKJWGLD247CEOOYY'),
('17-101-8', 101, 'juliamiano', 'Professor', 'Miano', 'Julia', 'Consultado', 'f', '$2y$10$LxM3IZV60sNv/T/qwXrttuKWh'),
('17-101-9', 101, 'sample_acc', 'sample_acc', 'sample_acc', 'sample_acc', 'sample_acc', 'f', '$2y$10$z60op6/mzVGK7b.nruXPs.08V1zCALG8o.lQEvoWg5yvjqnAnMccy'),
('17-102-2', 102, 'geisher08', 'Professor', 'Bernabe', 'Geisher', 'Gonzalo', 'f', '266ffde4e65cd3dd250bf87d88634d85'),
('17-103-11', 103, 'audreywaje', 'Dean', 'Waje', 'Audrey', 'Pabillaran', 'f', '$2y$10$dL5Xz/trFplHi9SQwCpbIeRFMZvmmpOPKF012p.FoCnQV4ilaUmF2'),
('17-103-6', 103, 'glenwin21', 'Professor', 'Bernabe', 'Glenwin', 'Gonzalo', 'm', '8e69db0089bc6f5ba2bc4a3d62bafd60'),
('17-104-5', 104, 'glenwin20', 'Professor', 'Bernabe', 'Glenwin', 'Gonzalo', 'm', '8e69db0089bc6f5ba2bc4a3d62bafd60'),
('17-202-1', 202, 'geisher09', 'Professor', 'Bernabe', 'Geisher', 'Bernabe', 'f', 'd06554a84241e1cfaadc84cea0a1d43f'),
('17-203-4', 203, 'glenwin19', 'Professor', 'Bernabe', 'Glenwin', 'Gonzalo', 'm', '8e69db0089bc6f5ba2bc4a3d62bafd60'),
('17-204-3', 204, 'glenwin18', 'Professor', 'Bernabe', 'Glenwin', 'Gonzalo', 'm', '8e69db0089bc6f5ba2bc4a3d62bafd60');

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
(4, 'Office of the University Research and development Services');

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
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `office_id` (`office_id`);

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
--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `office` (`office_id`) ON UPDATE CASCADE;

--
-- Constraints for table `documentation`
--
ALTER TABLE `documentation`
  ADD CONSTRAINT `documentation_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `documentation_ibfk_2` FOREIGN KEY (`document_id`) REFERENCES `document` (`document_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `documentation_ibfk_3` FOREIGN KEY (`signatory`) REFERENCES `employee` (`employee_id`) ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
