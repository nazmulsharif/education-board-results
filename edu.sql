-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 07:01 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `cell` int(20) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `uname`, `pass`, `cell`, `img`) VALUES
(1, 'Yadab Sutradhar', 'yadab123', '1234567', 1825680902, 'c4076eaa732f61309f7e69cedcea8486.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reg1`
--

CREATE TABLE `reg1` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg1`
--

INSERT INTO `reg1` (`id`, `name`, `email`, `img`, `pass`, `phone`) VALUES
(81, 'Nazmul', 'nazmulict94@gmail.com', '6a3f6e0d22d1032fb2a4b4ecda609654.jpg', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sl` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `inst` varchar(100) NOT NULL,
  `exam` varchar(20) NOT NULL,
  `roll` int(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `board` varchar(100) NOT NULL,
  `yr` int(10) NOT NULL,
  `ba_o` float NOT NULL,
  `ba_g` varchar(20) NOT NULL,
  `ba_gp` float NOT NULL,
  `ma_o` float NOT NULL,
  `ma_g` varchar(10) NOT NULL,
  `ma_gp` float NOT NULL,
  `eng_o` float NOT NULL,
  `eng_g` varchar(10) NOT NULL,
  `eng_gp` float NOT NULL,
  `ss_o` float NOT NULL,
  `ss_g` varchar(10) NOT NULL,
  `ss_gp` float NOT NULL,
  `re_o` float NOT NULL,
  `re_g` varchar(10) NOT NULL,
  `re_gp` float NOT NULL,
  `ph_o` float NOT NULL,
  `ph_g` varchar(10) NOT NULL,
  `ph_gp` float NOT NULL,
  `ch_o` float NOT NULL,
  `ch_g` varchar(10) NOT NULL,
  `ch_gp` float NOT NULL,
  `opt_o` float NOT NULL,
  `opt_g` varchar(10) NOT NULL,
  `opt_gp` float NOT NULL,
  `ict_o` float NOT NULL,
  `ict_g` varchar(10) NOT NULL,
  `ict_gp` float NOT NULL,
  `op_name` varchar(100) NOT NULL,
  `gpa` float NOT NULL,
  `grp` varchar(20) NOT NULL,
  `res` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sl`, `name`, `fname`, `mname`, `type`, `dob`, `inst`, `exam`, `roll`, `img`, `board`, `yr`, `ba_o`, `ba_g`, `ba_gp`, `ma_o`, `ma_g`, `ma_gp`, `eng_o`, `eng_g`, `eng_gp`, `ss_o`, `ss_g`, `ss_gp`, `re_o`, `re_g`, `re_gp`, `ph_o`, `ph_g`, `ph_gp`, `ch_o`, `ch_g`, `ch_gp`, `opt_o`, `opt_g`, `opt_gp`, `ict_o`, `ict_g`, `ict_gp`, `op_name`, `gpa`, `grp`, `res`) VALUES
(15, 'MD RUBEL MIA', 'MD BATCHU MIA', 'KOHINOR AKTER', 'Regular', '1994-10-17', 'RAZAPUR HIGH SCHOOL', 'SSC', 167716, '9150968ccde705ca756e5b68cfef4b37.jpg', 'Cumilla', 2010, 80, 'A+', 5, 80, 'A+', 5, 80, 'A+', 5, 80, 'A+', 5, 80, 'A+', 5, 80, 'A+', 5, 80, 'A+', 5, 80, 'A+', 5, 80, 'A+', 5, 'Higher Mathematics', 5, 'SCIENCE', 'PASSED'),
(16, 'MD.Nazmul Hasan Sharif', 'MD. Nazrul Islam', 'MST. Jharna Akter', 'Regular', '1994-12-20', 'Chandina Pilot High School', 'SSC', 161076, '78bc156bef2396f0a946bca61e7cc133.jpg', 'Cumilla', 2010, 90, 'A+', 5, 90, 'A+', 5, 90, 'A+', 5, 90, 'A+', 5, 90, 'A+', 5, 90, 'A+', 5, 90, 'A+', 5, 100, 'A+', 5, 90, 'A+', 5, 'Higher Mathematics', 5, 'Science', 'PASSED'),
(18, 'NUSRAT JAHAN', 'Nurul Islam', 'Selina Begum', 'Regular', '1994-12-11', 'Kurchap High School', 'SSC', 161122, 'a2cf30ab13349e5eb8f586ecf704e1c4.jpg', 'Cumilla', 2010, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 90, 'A+', 5, 100, 'A+', 5, 'Biology', 5, 'Science', 'PASSED'),
(19, 'Noor Bhai', 'jani na', 'Jani na', 'Regular', '0000-00-00', 'jani na', 'SSC', 12345, '40c2caa85f7b1021031f8c89929a0b6d.jpg', 'Dhaka', 2009, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 'Higher Mathematics', 5, 'SCIENCE', 'PASSED'),
(20, 'Noor Bhai', 'jani na', 'Jani na', 'Regular', '0000-00-00', 'jani na', 'SSC', 12345, '28c0c2f759b7da4eb0db5a584bfd8ee9.jpg', 'Dhaka', 2009, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 'Higher Mathematics', 5, 'SCIENCE', 'PASSED'),
(21, 'NOOR BHAI', 'jani na ', 'Jani na', 'Regular', '1993-12-20', 'jani na', 'HSC', 123456, '95e61528b80c19ea99be3990f88d67fb.jpg', 'DHAKA', 2019, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 100, 'A+', 5, 'Higher Mathematics', 5, 'SCIENCE', 'PASSED'),
(22, 'Azharul Islam', 'Shahidullah', 'Aleya Begum', 'Regular', '1992-02-12', 'Tatuiya Adarasha High School', 'SSC', 112233, '7659883ec318e959adae94c34d755eb1.jpg', 'Cumilla', 2008, 70, 'A', 4, 90, 'A+', 5, 80, 'A+', 5, 70, 'A', 4, 80, 'A+', 5, 80, 'A+', 5, 80, 'A+', 5, 90, 'A+', 5, 100, 'A+', 5, 'Higher Mathematics', 4.8, 'SCIENCE', 'PASSED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg1`
--
ALTER TABLE `reg1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reg1`
--
ALTER TABLE `reg1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
