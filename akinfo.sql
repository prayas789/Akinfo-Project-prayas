-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 12:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `notice_img` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `notice_img`, `department`, `password`) VALUES
(789, 'Admin', '', 'CSE', '789');

-- --------------------------------------------------------

--
-- Table structure for table `assig`
--

CREATE TABLE `assig` (
  `sno` int(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `val1` date NOT NULL,
  `val2` date NOT NULL,
  `deadline` date NOT NULL,
  `branch` varchar(200) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `section` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assig`
--

INSERT INTO `assig` (`sno`, `image`, `text`, `val1`, `val2`, `deadline`, `branch`, `sem`, `section`) VALUES
(9, 'q4.jpg', 'Assigment', '2019-05-25', '2019-05-31', '2019-05-31', 'CSE', 'VIII', 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `name` varchar(20) NOT NULL,
  `id` int(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `id`, `course`, `branch`, `email`, `password`) VALUES
('Ajay Kumar', 123, 'B.tech', 'CSE', 'ajay@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `val1` date NOT NULL,
  `val2` date NOT NULL,
  `deadline` date NOT NULL,
  `imp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `text`, `val1`, `val2`, `deadline`, `imp`) VALUES
(43, 'notice.jpg', 'notices', '2019-05-25', '2019-05-30', '2019-05-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(20) NOT NULL,
  `roll_no` int(20) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `sem` varchar(20) NOT NULL,
  `section` int(20) NOT NULL,
  `message` varchar(300) NOT NULL,
  `t_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `roll_no`, `student_id`, `email`, `course`, `branch`, `sem`, `section`, `message`, `t_name`, `password`) VALUES
('Qwerty', 12345, '12345', 'aaa@gmail.cim', 'B.Tech', 'CSE', 'II', 3, '', '', '12345'),
('Prayas Singh', 1602710905, '1610006D', 'prayas789@gmail.com', 'b.tech', 'CSE', 'VIII', 2, 'hi prayas singh you are too good', 'Ajay Kumar', 'prayas12345'),
('Ravi ', 1602710909, '1610009D', 'ravi@gmail.com', 'B.Tech', 'CSE', 'VIII', 2, 'HI there', 'Ajay Kumar', 'ravi12345');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll_no` int(20) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id` (`id_admin`);

--
-- Indexes for table `assig`
--
ALTER TABLE `assig`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_2` (`id`) USING BTREE,
  ADD KEY `id` (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`roll_no`),
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assig`
--
ALTER TABLE `assig`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
