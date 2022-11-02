-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 06:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
  `password` text NOT NULL,
  `confirm_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_role`, `fname`, `lname`, `email`, `bday`, `gender`, `college`, `id_num`, `contact`, `password`, `confirm_pass`) VALUES
(1, 2, 'joshua', 'cabangal', 'joshuafujiyama.cabangal.cics@ust.edu.ph', '2022-10-24', 1, 'CICS', 2018108174, '09498804821', 'simbahayan', 'simbahayan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
