-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 05:10 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_no`) VALUES
('cse 701'),
('cse 702'),
('cse 703'),
('cse 704'),
('cse 705'),
('cse 706'),
('cse 801'),
('cse 802'),
('cse 804');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL,
  `f_name` varchar(40) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `address` varchar(400) NOT NULL,
  `dept` varchar(40) NOT NULL,
  `series` text NOT NULL,
  `bdate` date NOT NULL,
  `rol_no` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `p_decrp` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `f_name`, `s_name`, `emailid`, `address`, `dept`, `series`, `bdate`, `rol_no`, `gender`, `p_name`, `p_decrp`) VALUES
(1, 'Arindom', 'kundu', 'arindom18.ak@gmail.com', '151/kanaikhali,natore', '', '2013', '1994-09-10', '133038', 'male', 'IT form', 'it contains al the realte information.'),
(2, 'sreemaye', 'Chakrabortty', 'sree@gmail.com', 'nai', '', '2013', '2016-09-20', '133114', 'female', 'facebook', 'naui'),
(3, 'Nahid', 'sojib', 'nahidpok@hotmail.com', 'rajshahi', '', '2013', '1996-01-06', '133060', 'male', 'blood bnak management', 'yap');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(10) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` text NOT NULL,
  `birthdate` date NOT NULL,
  `department` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=481 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `birthdate`, `department`, `country`) VALUES
(466, 'joy', 'kundu', 'joykundu18@gmail.com', '123456', 'male', '2016-09-14', 'CSE', 'Bangladesh'),
(467, 'arindom', 'kundu', 'arokundu18@gmail.com', 'a12345', 'male', '2016-09-12', 'CSE', 'Canada'),
(469, 'mursalin', 'araf', 'mursalin8@gmail.com', '123456', 'female', '2016-09-30', 'EEE', 'Australia'),
(470, 'ankur', 'islam', 'anku@gmail.com', 'an122345', 'male', '2016-09-29', 'CSE', 'Bangladesh'),
(472, 'ankur', 'mahmud', 'joykundu18@yahoo.com', '123456', 'male', '2016-09-05', 'ME', 'Bangladesh'),
(473, 'joy', 'kundu', 'joykun18@gmail.com', '123456', 'male', '2016-09-03', 'EEE', 'Australia'),
(474, 'aa', 'aa', 'joykunduaa18@gmail.com', '123456', 'male', '0000-00-00', 'EEE', 'aaa'),
(475, 'arindom', 'kundu', 'arindomkundu18@gmail.com', 'hello', 'male', '2016-04-06', 'CSE', 'Bangladesh'),
(476, 'sreetoma', 'kundu', 'sreetoma@hotmail.com', 'sree1234', 'female', '2016-09-19', 'ETE', 'Bangladesh'),
(477, 'raihanul', 'raihan', 'raihan13@gmail.com', 'raihan1234', 'male', '2016-09-20', 'CSE', 'Bangladesh'),
(478, 'sreemaye', 'chakrabortty', 'sreetoma18@gmail.com', 'sree1234', 'female', '1994-06-06', 'CSE', 'Syberia'),
(479, 'uttara', 'kundu', 'uttarak@gmail.com', 'uttara123', 'female', '1994-08-31', 'EEE', 'Bangladesh'),
(480, 'Sreemaye', 'chakrabortty', 'sree@gmail.com', '123456789', 'female', '2016-09-06', 'CSE', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `teacher_name` varchar(100) NOT NULL,
  `designation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`teacher_name`, `designation`) VALUES
('julia rahman', 'assist Prof,CSE dept,Ruet,Rajs'),
('sakifha moni', 'Lecturer,CSE dept,Ruet,Rajshah'),
('Dr. Boshir ahmed', 'Prof,CSE dept,Ruet,Rajshahi 62'),
('Dr. Robiul Ishlam', 'Prof,CSE dept,Ruet,Rajshahi 62'),
('Biprodip pal', 'Assist.Prof,CSE dept,Ruet,Rajs'),
('Shyla Afroge', 'Assist. Prof,CSE dept,Ruet,Raj'),
('Abu sayed', 'Lecturer,CSE dept,Ruet,Rajshah');

-- --------------------------------------------------------

--
-- Table structure for table `t_info`
--

CREATE TABLE IF NOT EXISTS `t_info` (
  `serial1` int(10) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_info`
--

INSERT INTO `t_info` (`serial1`, `Name`) VALUES
(1, 'Professor Dr. Shahid Uz Zaman Rajshahi-6204,Bangladesh'),
(2, 'Professor Dr. Md. Nazrul Islam Mondal Head, Dept. of CSE  Rajshahi-6204,Bangladesh'),
(3, 'Professor Dr. Md. Rabiul Islam Head, Dept. of ETE Rajshahi-6204,Bangladesh'),
(4, 'Professor Dr. Boshir Ahmed Rajshahi-6204,Bangladesh'),
(5, 'Assosiate Professor Dr. Md. Al Mamun Rajshahi-6204,Bangladesh'),
(6, 'Assistant Professor Abul Ahsan Md. Mahmudul Haque Rajshahi-6204,Bangladesh'),
(7, 'Assistant Professor A. H. M. Sarowar Sattar Rajshahi-6204,Bangladesh'),
(8, 'Assistant Professor Md. Murad Hossain Rajshahi-6204,Bangladesh'),
(9, 'Assistant Professor Mir. Md. Jahangir Kabir Rajshahi-6204,Bangladesh'),
(10, 'Assistant Professor Md. Al Mehedi hasan Rajshahi-6204,Bangladesh'),
(11, 'Assistant Professor Sayed Tauhid Zuhori Rajshahi-6204,Bangladesh'),
(12, 'Assistant Professor Md. Arafat Hossain Leave for higher study Rajshahi-6204,Bangladesh'),
(13, 'Assistant Professor Md. Murad Hossain Rajshahi-6204,Bangladesh'),
(14, 'Assistant Professor Firoz Mahmud Rajshahi-6204,Bangladesh'),
(15, 'Assistant Professor Rizwan Toufiq Rajshahi-6204,Bangladesh'),
(16, 'Assistant Professor Biprodip Pal Rajshahi-6204,Bangladesh'),
(17, 'Assistant Professor Julia Rahman Rajshahi-6204,Bangladesh'),
(18, 'Assistant Professor Shyla Afroz Rajshahi-6204,Bangladesh'),
(19, 'Assistant Professor Ashek Ahmed Rajshahi-6204,Bangladesh'),
(20, 'Assistant Professor Dr. Md. Ali Hossain Rajshahi-6204,Bangladesh'),
(21, 'Lecturer Shubhashis Kumar Shil, Rajshahi-6204,Bangladesh'),
(22, 'Lecturer Md. Hedayetul Islam ,Rajshahi-6204,Bangladesh'),
(23, 'Lecturer Emrana Kabir Hashi,Rajshahi-6204,Bangladesh'),
(24, 'Lecturer Mumu Aktar,Rajshahi-6204,Bangladesh'),
(25, 'Lecturer Barshon Sen,Rajshahi-6204,Bangladesh'),
(26, 'Lecturer Shafika Showkat Moni,Rajshahi-6204,Bangladesh'),
(27, 'Lecturer Sadia Zaman Mishu,Rajshahi-6204,Bangladesh'),
(28, 'Lecturer Abu Sayeed,Rajshahi-6204,Bangladesh'),
(29, 'Chairman'),
(30, 'Member'),
(31, 'External-Member'),
(32, 'Professor Dr. Md. Nazrul Islam Mondal Head,<br> Dept. of CSE  Rajshahi-6204,Bangladesh'),
(33, 'Assistant Professor Md. Arafat Hossain <br>Leave for higher study Rajshahi-6204,Bangladesh'),
(34, 'Professor Dr. Shahid Uz Zaman Rajshahi-6204,Bangladesh'),
(35, 'Professor Dr. Md. Nazrul Islam Mondal Head, Dept. of CSE  Rajshahi-6204,Bangladesh'),
(36, 'Professor Dr. Md. Rabiul Islam Head, Dept. of ETE Rajshahi-6204,Bangladesh'),
(37, 'Professor Dr. Boshir Ahmed Rajshahi-6204,Bangladesh'),
(38, 'Assosiate Professor Dr. Md. Al Mamun Rajshahi-6204,Bangladesh'),
(39, 'Assistant Professor Abul Ahsan Md. Mahmudul Haque Rajshahi-6204,Bangladesh'),
(40, 'Assistant Professor A. H. M. Sarowar Sattar Rajshahi-6204,Bangladesh'),
(41, 'Assistant Professor Md. Murad Hossain Rajshahi-6204,Bangladesh'),
(42, 'Assistant Professor Mir. Md. Jahangir Kabir Rajshahi-6204,Bangladesh'),
(43, 'Assistant Professor Md. Al Mehedi hasan Rajshahi-6204,Bangladesh'),
(44, 'Assistant Professor Sayed Tauhid Zuhori Rajshahi-6204,Bangladesh'),
(45, 'Assistant Professor Md. Arafat Hossain Leave for higher study Rajshahi-6204,Bangladesh'),
(46, 'Assistant Professor Md. Murad Hossain Rajshahi-6204,Bangladesh'),
(47, 'Assistant Professor Firoz Mahmud Rajshahi-6204,Bangladesh'),
(48, 'Assistant Professor Rizwan Toufiq Rajshahi-6204,Bangladesh'),
(49, 'Assistant Professor Biprodip Pal Rajshahi-6204,Bangladesh'),
(50, 'Assistant Professor Julia Rahman Rajshahi-6204,Bangladesh'),
(51, 'Assistant Professor Shyla Afroz Rajshahi-6204,Bangladesh'),
(52, 'Assistant Professor Ashek Ahmed Rajshahi-6204,Bangladesh'),
(53, 'Assistant Professor Dr. Md. Ali Hossain Rajshahi-6204,Bangladesh'),
(54, 'Lecturer Shubhashis Kumar Shil, Rajshahi-6204,Bangladesh'),
(55, 'Lecturer Md. Hedayetul Islam ,Rajshahi-6204,Bangladesh'),
(56, 'Lecturer Emrana Kabir Hashi,Rajshahi-6204,Bangladesh'),
(57, 'Lecturer Mumu Aktar,Rajshahi-6204,Bangladesh'),
(58, 'Lecturer Barshon Sen,Rajshahi-6204,Bangladesh'),
(59, 'Lecturer Shafika Showkat Moni,Rajshahi-6204,Bangladesh'),
(60, 'Lecturer Sadia Zaman Mishu,Rajshahi-6204,Bangladesh'),
(61, 'Lecturer Abu Sayeed,Rajshahi-6204,Bangladesh'),
(62, 'Chairman'),
(63, 'Member'),
(64, 'External-Member'),
(65, 'Professor Dr. Md. Nazrul Islam Mondal Head,<br> Dept. of CSE  Rajshahi-6204,Bangladesh'),
(66, 'Assistant Professor Md. Arafat Hossain <br>Leave for higher study Rajshahi-6204,Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_info`
--
ALTER TABLE `t_info`
  ADD PRIMARY KEY (`serial1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=481;
--
-- AUTO_INCREMENT for table `t_info`
--
ALTER TABLE `t_info`
  MODIFY `serial1` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
