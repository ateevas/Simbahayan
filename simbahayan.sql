-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 12:11 PM
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
  `college_id` int(11) NOT NULL,
  `kra_sub_id` int(11) NOT NULL,
  `kra_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hs_arr` text NOT NULL,
  `ht_arr` text NOT NULL,
  `es_arr` text NOT NULL,
  `et_arr` text NOT NULL,
  `ggs_arr` text NOT NULL,
  `ggt_arr` text NOT NULL,
  `ejs_arr` text NOT NULL,
  `ejt_arr` text NOT NULL,
  `cls_arr` text NOT NULL,
  `clt_arr` text NOT NULL,
  `efas_arr` text NOT NULL,
  `efat_arr` text NOT NULL,
  `ceras_arr` text NOT NULL,
  `cerat_arr` text NOT NULL,
  `sfas_arr` text NOT NULL,
  `sfat_arr` text NOT NULL,
  `ejas_arr` text NOT NULL,
  `ejat_arr` text NOT NULL,
  `hlas_arr` text NOT NULL,
  `hlat_arr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra1`
--

INSERT INTO `kra1` (`id`, `college_id`, `kra_sub_id`, `kra_status`, `user_id`, `hs_arr`, `ht_arr`, `es_arr`, `et_arr`, `ggs_arr`, `ggt_arr`, `ejs_arr`, `ejt_arr`, `cls_arr`, `clt_arr`, `efas_arr`, `efat_arr`, `ceras_arr`, `cerat_arr`, `sfas_arr`, `sfat_arr`, `ejas_arr`, `ejat_arr`, `hlas_arr`, `hlat_arr`) VALUES
(7, 0, 5, 1, 11, '1,2,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '', '11,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,2,1'),
(8, 19, 6, 1, 20, '1,1,1', '2,2,2', '2,2,2', '2,2,2', '2,2,2', '2,2,2', '2,2,2', '2,2,2', '2,2,2', '2,2,2', '2,2,2', '', '2,2,2', '2,2,2', '2,2,2', '2,2,2', '2,2,2', '3,3,3', '2,2,2', '3,3,3'),
(9, 19, 7, 1, 22, '2,3,2', '1,1,1', '2,2,2', '1,1,1', '2,2,2', '1,1,1', '2,2,2', '1,1,1', '2,2,2', '1,1,1', '2,2,2', '', '2,2,2', '1,1,1', '2,2,2', '1,1,1', '2,2,2', '1,1,1', '2,2,2', '1,1,1');

-- --------------------------------------------------------

--
-- Table structure for table `kra2`
--

CREATE TABLE `kra2` (
  `id` int(11) NOT NULL,
  `kra_sub_id` int(11) NOT NULL,
  `kra_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `npus_arr` varchar(255) NOT NULL,
  `nput_arr` varchar(255) NOT NULL,
  `nppus_arr` varchar(255) NOT NULL,
  `npput_arr` varchar(255) NOT NULL,
  `nrpfcs_arr` varchar(255) NOT NULL,
  `nrpfct_arr` varchar(255) NOT NULL,
  `nps_arr` varchar(255) NOT NULL,
  `npt_arr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra2`
--

INSERT INTO `kra2` (`id`, `kra_sub_id`, `kra_status`, `user_id`, `npus_arr`, `nput_arr`, `nppus_arr`, `npput_arr`, `nrpfcs_arr`, `nrpfct_arr`, `nps_arr`, `npt_arr`) VALUES
(1, 5, 1, 11, '1,1,1,1', '1,2,2,2', '1,1,1,1,1,1', '2,2,1,1,1,2', '1,1', '2,2', '1,1', '2,2'),
(2, 6, 1, 20, '2,2,2,2', '2,2,3,3', '2,2,2,2,2,2', '3,3,3,3,3,3', '2,2', '3,3', '2,2', '3,3'),
(3, 7, 1, 22, '2,2,2,2', '1,1,1,10', '2,2,2,2,2,2', '1,1,1,1,1,1', '2,2', '1,1', '2,2', '1,1');

-- --------------------------------------------------------

--
-- Table structure for table `kra3`
--

CREATE TABLE `kra3` (
  `id` int(11) NOT NULL,
  `kra_sub_id` int(11) NOT NULL,
  `kra_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nmoas_arr` varchar(255) NOT NULL,
  `nmoat_arr` varchar(255) NOT NULL,
  `ncdaas_arr` varchar(255) NOT NULL,
  `ncdaat_arr` varchar(255) NOT NULL,
  `arr_ntco_stat` varchar(255) NOT NULL,
  `arr_ntco_targ` varchar(255) NOT NULL,
  `arr_nptco_stat` varchar(255) NOT NULL,
  `arr_nptco_targ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra3`
--

INSERT INTO `kra3` (`id`, `kra_sub_id`, `kra_status`, `user_id`, `nmoas_arr`, `nmoat_arr`, `ncdaas_arr`, `ncdaat_arr`, `arr_ntco_stat`, `arr_ntco_targ`, `arr_nptco_stat`, `arr_nptco_targ`) VALUES
(11, 5, 1, 11, '1,1,1,1,1,1,1,1', '2,2,2,2,2,2,2,2', '1,1,1,1,1,1,1,10', '2,2,2,2,2,2,2,2', '2', '2', '2', '2'),
(12, 6, 1, 20, '2,2,2,2,2,2,2,2', '3,3,3,3,3,3,3,3', '2,2,2,2,2,2,2,2', '3,3,3,3,3,3,3,3', '3', '3', '3', '3'),
(13, 7, 1, 22, '2,2,2,2,2,2,2,2', '1,1,1,1,1,1,1,1', '2,2,2,2,2,2,2,2', '1,1,1,1,1,1,1,1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_colleges`
--

CREATE TABLE `tbl_colleges` (
  `id` int(11) NOT NULL,
  `college_name` text NOT NULL,
  `college_acronym` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_colleges`
--

INSERT INTO `tbl_colleges` (`id`, `college_name`, `college_acronym`, `date_added`) VALUES
(1, 'College of Accountancy', 'AMV-CA', '2022-11-30 00:00:00'),
(2, 'College of Architecture', 'ARCHI', '2022-11-30 00:00:00'),
(3, 'College of Arts and Letters', 'AB', '2022-11-30 00:00:00'),
(4, 'College of Commerce and Business Administration', 'COMM', '2022-11-30 00:00:00'),
(5, 'College of Education', 'EDUC', '2022-11-30 00:00:00'),
(6, 'College of Fine Arts and Design', 'CFAD', '2022-11-30 00:00:00'),
(7, 'College of Information and Computing Sciences', 'CICS', '2022-11-30 00:00:00'),
(8, 'College of Nursing', 'NUR', '2022-11-30 00:00:00'),
(9, 'College of Rehabilataion Sciences', 'CRS', '2022-11-30 00:00:00'),
(10, 'College of Tourism and Hospitality Management', 'CTHM', '2022-11-30 00:00:00'),
(11, 'College of Science', 'SCI', '2022-11-30 17:00:35'),
(12, 'Faculty of Engineering', 'ENG', '2022-11-30 17:00:35'),
(13, 'Ecclesiastical Faculties', 'ECCLE', '2022-11-30 17:00:35'),
(14, 'Graduate School', 'GRAD', '2022-11-30 17:00:35'),
(15, 'Junior High School', 'JHS', '2022-11-30 17:00:35'),
(16, 'Faculty Medicine and Surgery', 'MED', '2022-11-30 17:00:35'),
(17, 'Conservatory of Music', 'MUSIC', '2022-11-30 17:00:35'),
(18, 'Institute of Physical Education and Athletics', 'IPEA', '2022-11-30 17:00:35'),
(19, 'Institute of Religion', 'IR', '2022-11-30 17:00:35'),
(20, 'Senior High School', 'SHS', '2022-11-30 17:00:35'),
(21, 'NSTP', 'NSTP', '2022-11-30 17:00:35'),
(22, 'University Wide Student Organization', 'UWSO', '2022-12-27 22:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kratargetcount`
--

CREATE TABLE `tbl_kratargetcount` (
  `id` int(11) NOT NULL,
  `target_hit` int(11) NOT NULL,
  `current_target` int(11) NOT NULL,
  `current_target3` int(11) NOT NULL,
  `kra1_target` int(11) NOT NULL,
  `kra2_target` int(11) NOT NULL,
  `kra3_target` int(11) NOT NULL,
  `simb_id` int(11) NOT NULL,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kratargetcount`
--

INSERT INTO `tbl_kratargetcount` (`id`, `target_hit`, `current_target`, `current_target3`, `kra1_target`, `kra2_target`, `kra3_target`, `simb_id`, `date_modified`) VALUES
(1, 80, 50, 70, 70, 25, 345, 12, '2022-12-10 12:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kra_submission`
--

CREATE TABLE `tbl_kra_submission` (
  `id` int(11) NOT NULL,
  `kra_status` int(11) NOT NULL COMMENT '0 - newly added\r\n1 - submitted\r\n2 - approved by the coordinator\r\n3 - approved by the simbahayan',
  `user_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `coor_id` int(11) NOT NULL DEFAULT 0,
  `simb_id` int(11) NOT NULL,
  `kra1_sub` int(11) NOT NULL DEFAULT 0,
  `kra2_sub` int(11) NOT NULL DEFAULT 0,
  `kra3_sub` int(11) NOT NULL DEFAULT 0,
  `school_year` varchar(255) NOT NULL,
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kra_submission`
--

INSERT INTO `tbl_kra_submission` (`id`, `kra_status`, `user_id`, `college_id`, `coor_id`, `simb_id`, `kra1_sub`, `kra2_sub`, `kra3_sub`, `school_year`, `date_submitted`) VALUES
(5, 2, 11, 19, 1, 0, 2, 2, 2, '2022', '2022-12-31 19:00:57'),
(6, 2, 20, 20, 21, 0, 2, 2, 2, '2022', '2023-01-01 17:39:00'),
(7, 2, 22, 19, 1, 0, 2, 2, 2, '2022', '2023-01-01 18:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_role` int(11) NOT NULL COMMENT '1-students,2-cd,3-simbahayan,4-admin\r\n',
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
  `password` text NOT NULL,
  `user_status` int(11) NOT NULL COMMENT '0-inactive, 1-active',
  `verification_status` int(11) NOT NULL COMMENT '0-unverified, 1-verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_role`, `fname`, `lname`, `email`, `bday`, `gender`, `college`, `id_num`, `contact`, `organization`, `position`, `password`, `user_status`, `verification_status`) VALUES
(1, 2, 'joshua', 'cabangal', 'joshuafujiyama.cabangal.cics@ust.edu.ph', '2022-10-24', 1, '19', 2018108175, '09498804821', '', '', 'asdasd', 1, 1),
(11, 1, 'Stiffany', 'Madrigal', 'tiff.madrigal95@gmail.com', '2022-11-30', 0, '19', 12312312, '312312', 'Rotaract', 'asdasd', 'asdasd', 1, 1),
(12, 3, 'Renz', 'Madrigal', 'renz@gmail.com', '2022-12-08', 1, '0', 1223123123, '12312332312', 'aaaaaa', 'aaaaa', 'asdasd', 0, 0),
(18, 4, 'Admin', 'Admin', 'admin@admin.com', '2022-12-10', 1, '', 0, '', '', '', 'admin', 0, 0),
(19, 1, 'Rocky', 'Balboa', 'rocky@gmail.com', '2022-12-27', 1, '14', 123123, '123123', 'asdasd', 'asdasd', 'asdasd', 0, 0),
(20, 1, 'Glazer', 'Yorecca', 'glazer@gmail.com', '2022-11-30', 0, '20', 12312312, '312312', 'Rotaract', 'asdasd', 'asdasd', 1, 1),
(21, 2, 'Jin', 'Kazama', 'coordinator@gmail.com', '2022-10-24', 1, '20', 2018108175, '09498804821', '', '', 'asdasd', 1, 1),
(22, 1, 'jepoy', 'dizon', 'jepoy@gmail.com', '2022-11-30', 0, '19', 12312312, '312312', 'Rotaract', 'asdasd', 'asdasd', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kra1`
--
ALTER TABLE `kra1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kra2`
--
ALTER TABLE `kra2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kra3`
--
ALTER TABLE `kra3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_colleges`
--
ALTER TABLE `tbl_colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kratargetcount`
--
ALTER TABLE `tbl_kratargetcount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kra_submission`
--
ALTER TABLE `tbl_kra_submission`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kra2`
--
ALTER TABLE `kra2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kra3`
--
ALTER TABLE `kra3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_colleges`
--
ALTER TABLE `tbl_colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_kratargetcount`
--
ALTER TABLE `tbl_kratargetcount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kra_submission`
--
ALTER TABLE `tbl_kra_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
