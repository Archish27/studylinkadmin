-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2015 at 02:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studylinkadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cheque_status`
--

CREATE TABLE IF NOT EXISTS `cheque_status` (
  `invoice_number` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `enq_id` int(11) NOT NULL,
  `stud_name` text NOT NULL,
  `stud_address` text NOT NULL,
  `stud_mob` int(10) NOT NULL,
  `resi_num` int(10) NOT NULL,
  `email_id` text NOT NULL,
  `college` text NOT NULL,
  `perc_in_prev_exam` text NOT NULL,
  `branch` text NOT NULL,
  `sem` int(2) NOT NULL,
  `reference` text NOT NULL,
  `date_of_enquiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE IF NOT EXISTS `enrolls` (
  `enroll_id` int(11) NOT NULL,
  `subject_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolls`
--

INSERT INTO `enrolls` (`enroll_id`, `subject_name`) VALUES
(1, 'Basic Electronics'),
(1, 'Applied Maths'),
(1, 'C Programming'),
(1, 'Applied Chemistry'),
(2, 'Applied Maths 3'),
(2, 'Data Structure'),
(2, 'Electrical Technology'),
(2, 'Digital Techniques');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `enroll_id` int(11) NOT NULL,
  `total_fees` text NOT NULL,
  `date_of_admission` date NOT NULL,
  `discount` text NOT NULL,
  `discount_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`enroll_id`, `total_fees`, `date_of_admission`, `discount`, `discount_description`) VALUES
(1, '16200', '2015-06-19', '1620', ' '),
(2, '16700', '2015-06-23', '1000', 'referal discount ');

-- --------------------------------------------------------

--
-- Table structure for table `ipccgroup1`
--

CREATE TABLE IF NOT EXISTS `ipccgroup1` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipccgroup1`
--

INSERT INTO `ipccgroup1` (`Subject_Name`, `Subject_Fees`) VALUES
('Accounting', '5000'),
('CAFM', '5000'),
('Tax', '4500');

-- --------------------------------------------------------

--
-- Table structure for table `ipccgroup1testseries`
--

CREATE TABLE IF NOT EXISTS `ipccgroup1testseries` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipccgroup1testseries`
--

INSERT INTO `ipccgroup1testseries` (`Subject_Name`, `Subject_Fees`) VALUES
('Accounting', '1100'),
('CAFM', '1100'),
('Law, Ethics and Communication', '1100'),
('Tax', '1100');

-- --------------------------------------------------------

--
-- Table structure for table `ipccgroup2`
--

CREATE TABLE IF NOT EXISTS `ipccgroup2` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipccgroup2`
--

INSERT INTO `ipccgroup2` (`Subject_Name`, `Subject_Fees`) VALUES
('Advanced Accounting', '4500'),
('Information Technology', '3000'),
('Strategic Management', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `ipccgroup2testseries`
--

CREATE TABLE IF NOT EXISTS `ipccgroup2testseries` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipccgroup2testseries`
--

INSERT INTO `ipccgroup2testseries` (`Subject_Name`, `Subject_Fees`) VALUES
('Advanced Accounting', '1100'),
('Auditing', '1100'),
('IT and SM', '1100');

-- --------------------------------------------------------

--
-- Table structure for table `ipccregular`
--

CREATE TABLE IF NOT EXISTS `ipccregular` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipccregular`
--

INSERT INTO `ipccregular` (`Subject_Name`, `Subject_Fees`) VALUES
('CA IPCC May - 15 Regular Batch', '33708');

-- --------------------------------------------------------

--
-- Table structure for table `ipcctestseries`
--

CREATE TABLE IF NOT EXISTS `ipcctestseries` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcctestseries`
--

INSERT INTO `ipcctestseries` (`Subject_Name`, `Subject_Fees`) VALUES
('Accounting', '1236'),
('CAFM', '1236'),
('Law, Ethics and Communication', '1236'),
('Tax', '1236'),
('Advance Accounting', '1236'),
('Auditing', '1236'),
('IT and SM', '1236');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(128) NOT NULL,
  `salt` char(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `salt`) VALUES
(1, 'Rahul', 'rahul@studylinkclasses.com', '0a929f524dc6f7b5c3c3b2ce65943ed05f12e6df14c23e30baf2aca5a85b5ed8a431b0213110d670c8582527bead2254336c3fdf81b14f6c6689a8d8918a5681', 'a8468bd5f4a878d78788ebdc731122f867558e15d5ebe03655223dbb0a651227f3ef5057010e71a748cd2cfad05ae1197d16eafff815b0703185d250fc238f33');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `invoice_num` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `enroll_id` int(11) NOT NULL,
  `payment_amount` text NOT NULL,
  `mode` text NOT NULL,
  `bank` text NOT NULL,
  `bank_br` text NOT NULL,
  `cheque_number` text NOT NULL,
  `cheque_date` date NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE IF NOT EXISTS `sem1` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`Subject_Name`, `Subject_Fees`) VALUES
('Basic Physics', '2500'),
('Basic Chemistry', '2500'),
('Basic Maths 1', '4600');

-- --------------------------------------------------------

--
-- Table structure for table `sem2comps`
--

CREATE TABLE IF NOT EXISTS `sem2comps` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem2comps`
--

INSERT INTO `sem2comps` (`Subject_Name`, `Subject_Fees`) VALUES
('Basic Electronics', '4600'),
('Applied Maths', '4600'),
('C Programming', '4600'),
('Applied Physics', '2400'),
('Applied Chemistry', '2400');

-- --------------------------------------------------------

--
-- Table structure for table `sem2elec`
--

CREATE TABLE IF NOT EXISTS `sem2elec` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem2elec`
--

INSERT INTO `sem2elec` (`Subject_Name`, `Subject_Fees`) VALUES
('Applied Maths 2', '4600'),
('Applied Physics', '2400'),
('Applied Chemistry', '2400'),
('Elements of Electronics', '4600');

-- --------------------------------------------------------

--
-- Table structure for table `sem3comps`
--

CREATE TABLE IF NOT EXISTS `sem3comps` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem3comps`
--

INSERT INTO `sem3comps` (`Subject_Name`, `Subject_Fees`) VALUES
('Applied Maths 3', '4300'),
('Data Structure', '3800'),
('Relational Database Management System', '4300'),
('Electrical Technology', '4300'),
('Digital Techniques', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `sem3elec`
--

CREATE TABLE IF NOT EXISTS `sem3elec` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem3elec`
--

INSERT INTO `sem3elec` (`Subject_Name`, `Subject_Fees`) VALUES
('Applied Maths 3', '4300'),
('Electrical Engineering', '4300'),
('Electronics Devices and Circuits', '4300'),
('Principle of Digital Techniques', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `sem4comps`
--

CREATE TABLE IF NOT EXISTS `sem4comps` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem4comps`
--

INSERT INTO `sem4comps` (`Subject_Name`, `Subject_Fees`) VALUES
('Microprocessor and Programming', '4300'),
('Object Oriented Programming', '3800'),
('Computer Hardware and Maintenance', '4300'),
('Computer Networks', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `sem4elec`
--

CREATE TABLE IF NOT EXISTS `sem4elec` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem4elec`
--

INSERT INTO `sem4elec` (`Subject_Name`, `Subject_Fees`) VALUES
('Linear Integrated and Circuits', '4300'),
('Analog Communication', '4300'),
('Power Electronics', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `sem4it`
--

CREATE TABLE IF NOT EXISTS `sem4it` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem4it`
--

INSERT INTO `sem4it` (`Subject_Name`, `Subject_Fees`) VALUES
('Microprocessor and Programming', '4300'),
('Object Oriented Programming', '3800'),
('Computer Hardware and Maintenance', '4300'),
('Computer Network', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `sem5cm`
--

CREATE TABLE IF NOT EXISTS `sem5cm` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem5cm`
--

INSERT INTO `sem5cm` (`Subject_Name`, `Subject_Fees`) VALUES
('Java Programming', '4500'),
('Operating System', '4500'),
('Computer Security', '4000'),
('Software Engineering', '4000'),
('System Programming', '4500');

-- --------------------------------------------------------

--
-- Table structure for table `sem5co`
--

CREATE TABLE IF NOT EXISTS `sem5co` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem5co`
--

INSERT INTO `sem5co` (`Subject_Name`, `Subject_Fees`) VALUES
('Java Programming', '4500'),
('Operating System', '4500'),
('Computer Security', '4000'),
('Software Engineering', '4000'),
('Windows Programming', '4500');

-- --------------------------------------------------------

--
-- Table structure for table `sem5elec`
--

CREATE TABLE IF NOT EXISTS `sem5elec` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem5elec`
--

INSERT INTO `sem5elec` (`Subject_Name`, `Subject_Fees`) VALUES
('Computer Hardware and Networking', '4000'),
('Microcontroller', '4500'),
('Audio Video Engineering', '4500'),
('Control System and PLC', '4000'),
('Digital Communication', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `sem5it`
--

CREATE TABLE IF NOT EXISTS `sem5it` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem5it`
--

INSERT INTO `sem5it` (`Subject_Name`, `Subject_Fees`) VALUES
('Java Programming', '4500'),
('Operating System', '4500'),
('Information Security', '4000'),
('Software Engineering', '4000'),
('Communication Technology', '4500');

-- --------------------------------------------------------

--
-- Table structure for table `sem6cm`
--

CREATE TABLE IF NOT EXISTS `sem6cm` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem6cm`
--

INSERT INTO `sem6cm` (`Subject_Name`, `Subject_Fees`) VALUES
('Advance Java', '4800'),
('Software Testing', '3800'),
('Object Oriented Modeling and Design', '4300'),
('Mobile Computing', '4300'),
('Advance MUP', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `sem6co`
--

CREATE TABLE IF NOT EXISTS `sem6co` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem6co`
--

INSERT INTO `sem6co` (`Subject_Name`, `Subject_Fees`) VALUES
('Advance Java', '4800'),
('Software Testing', '3800'),
('Advanced Microprocessor', '4300'),
('OOMD', '4300'),
('Mobile Computing', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `sem6elec`
--

CREATE TABLE IF NOT EXISTS `sem6elec` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem6elec`
--

INSERT INTO `sem6elec` (`Subject_Name`, `Subject_Fees`) VALUES
('Embedded System', '4300'),
('VLSI', '4300'),
('Mobile Communication', '4300'),
('Advance Communication System', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `sem6it`
--

CREATE TABLE IF NOT EXISTS `sem6it` (
  `Subject_Name` text NOT NULL,
  `Subject_Fees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem6it`
--

INSERT INTO `sem6it` (`Subject_Name`, `Subject_Fees`) VALUES
('Advance Java', '4800'),
('Mobile Computing', '4300'),
('Software Testing', '3800'),
('Object Oriented Modeling and Design', '4300'),
('Advance MUP', '4300');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `enroll_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `sem` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`enroll_id`, `sid`, `sem`) VALUES
(1, 2, 2),
(2, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `sid` int(11) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `phno` text NOT NULL,
  `emailid` text NOT NULL,
  `fathername` text NOT NULL,
  `fathernum` text NOT NULL,
  `fatheremail` text NOT NULL,
  `mothername` text NOT NULL,
  `mothernum` text NOT NULL,
  `motheremail` text NOT NULL,
  `branch` text NOT NULL,
  `college` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `name`, `dob`, `address`, `phno`, `emailid`, `fathername`, `fathernum`, `fatheremail`, `mothername`, `mothernum`, `motheremail`, `branch`, `college`) VALUES
(2, 'Jinal Shah', '2012-02-15', 'Block no 3, Parijat Building, Goushala Road', '9930186585', 'jinal@studylinkclasses.com', 'Hasmin', '9820098200', 'hasmin@studylinkclasses.com', 'sona', '9879987988', 'sona@studylinkclasses.com', 'IF', 'Shreeram'),
(3, 'Mihir Manek', '2015-06-23', ' ', '9820098200', '', '', '', '', '', '', '', 'CO', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
