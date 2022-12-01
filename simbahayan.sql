-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 02:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simbahayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kra1`
--

CREATE TABLE `kra1` (
  `id` int(11) NOT NULL,
  `kra_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hfa_status` text NOT NULL,
  `hfa_target` text NOT NULL,
  `efa_status` text NOT NULL,
  `efa_target` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_colleges`
--

CREATE TABLE `tbl_colleges` (
  `id` int(11) NOT NULL,
  `college_name` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_colleges`
--

INSERT INTO `tbl_colleges` (`id`, `college_name`, `date_added`) VALUES
(1, 'College of Accountancy', '2022-11-30 00:00:00'),
(2, 'College of Architecture', '2022-11-30 00:00:00'),
(3, 'College of Arts and Letters', '2022-11-30 00:00:00'),
(4, 'College of Commerce and Business Administration', '2022-11-30 00:00:00'),
(5, 'College of Education', '2022-11-30 00:00:00'),
(6, 'College of Fine Arts and Design', '2022-11-30 00:00:00'),
(7, 'College of Information and Computing Sciences', '2022-11-30 00:00:00'),
(8, 'College of Nursing', '2022-11-30 00:00:00'),
(9, 'College of Rehabilataion Sciences', '2022-11-30 00:00:00'),
(10, 'College of Tourism and Hospitality Management', '2022-11-30 00:00:00'),
(11, 'College of Science', '2022-11-30 17:00:35'),
(12, 'Faculty of Engineering', '2022-11-30 17:00:35'),
(13, 'Ecclesiastical Faculties', '2022-11-30 17:00:35'),
(14, 'Graduate School', '2022-11-30 17:00:35'),
(15, 'Junior High School', '2022-11-30 17:00:35'),
(16, 'Faculty Medicine and Surgery', '2022-11-30 17:00:35'),
(17, 'Conservatory of Music', '2022-11-30 17:00:35'),
(18, 'Institute of Physical Education and Athletics', '2022-11-30 17:00:35'),
(19, 'Institute of Religion', '2022-11-30 17:00:35'),
(20, 'Senior High School', '2022-11-30 17:00:35'),
(21, 'NSTP', '2022-11-30 17:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_role` int(11) NOT NULL COMMENT '1-students,2-cd,3-staff',
  `fname` varchar(1000) NOT NULL,
  `lname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `bday` date NOT NULL,
  `gender` int(11) NOT NULL,
  `college` varchar(1000) NOT NULL,
  `id_num` int(11) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `organization` text NOT NULL,
  `position` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_role`, `fname`, `lname`, `email`, `bday`, `gender`, `college`, `id_num`, `contact`, `organization`, `position`, `password`) VALUES
(1, 2, 'joshua', 'cabangal', 'joshuafujiyama.cabangal.cics@ust.edu.ph', '2022-10-24', 1, '1', 2018108174, '09498804821', '', '', 'simbahayan'),
(11, 1, 'Stiffany', 'Madrigal', 'tiff.madrigal95@gmail.com', '2022-11-30', 0, '19', 12312312, '312312', 'asdasdas', 'asdasd', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kra1`
--
ALTER TABLE `kra1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_colleges`
--
ALTER TABLE `tbl_colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kra1`
--
ALTER TABLE `kra1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_colleges`
--
ALTER TABLE `tbl_colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
