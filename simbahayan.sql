-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 03:09 PM
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
  `cahds_arr` text NOT NULL,
  `cahdt_arr` text NOT NULL,
  `sds_arr` text NOT NULL,
  `sdt_arr` text NOT NULL,
  `drrms_arr` text NOT NULL,
  `drrmt_arr` text NOT NULL,
  `fhds_arr` text NOT NULL,
  `fhdt_arr` text NOT NULL,
  `cofs_arr` text NOT NULL,
  `coft_arr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra1`
--

INSERT INTO `kra1` (`id`, `kra_status`, `user_id`, `hs_arr`, `ht_arr`, `es_arr`, `et_arr`, `ggs_arr`, `ggt_arr`, `ejs_arr`, `ejt_arr`, `cls_arr`, `clt_arr`, `cahds_arr`, `cahdt_arr`, `sds_arr`, `sdt_arr`, `drrms_arr`, `drrmt_arr`, `fhds_arr`, `fhdt_arr`, `cofs_arr`, `coft_arr`) VALUES
(6, 1, 11, '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', ',,', ',,', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1', '1,1,1');

-- --------------------------------------------------------

--
-- Table structure for table `kra2`
--

CREATE TABLE `kra2` (
  `id` int(11) NOT NULL,
  `kra_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `s_puidcd_arr` text NOT NULL,
  `t_puidcd_arr` text NOT NULL,
  `s_psaa_arr` text NOT NULL,
  `t_psaa_arr` text NOT NULL,
  `s_pucer_arr` text NOT NULL,
  `t_pucer_arr` text NOT NULL,
  `s_pul_arr` text NOT NULL,
  `t_pul_arr` text NOT NULL,
  `udcps_arr` text NOT NULL,
  `udcpt_arr` text NOT NULL,
  `fcs_arr` text NOT NULL,
  `fct_arr` text NOT NULL,
  `ps_arr` text NOT NULL,
  `pt_arr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra2`
--

INSERT INTO `kra2` (`id`, `kra_status`, `user_id`, `s_puidcd_arr`, `t_puidcd_arr`, `s_psaa_arr`, `t_psaa_arr`, `s_pucer_arr`, `t_pucer_arr`, `s_pul_arr`, `t_pul_arr`, `udcps_arr`, `udcpt_arr`, `fcs_arr`, `fct_arr`, `ps_arr`, `pt_arr`) VALUES
(13, 1, 11, '1', '1', '1', '1', '1', '1', '1', '1', '1,1,1,1,1,1', '1,1,1,1,1,1', '1,1', '1,1', '1,1', '1,1');

-- --------------------------------------------------------

--
-- Table structure for table `kra3`
--

CREATE TABLE `kra3` (
  `id` int(11) NOT NULL,
  `kra_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pos_arr` text NOT NULL,
  `pot_arr` text NOT NULL,
  `gas_arr` text NOT NULL,
  `gat_arr` text NOT NULL,
  `ngos_arr` text NOT NULL,
  `ngot_arr` text NOT NULL,
  `beis_arr` text NOT NULL,
  `beit_arr` text NOT NULL,
  `lheis_arr` text NOT NULL,
  `lheit_arr` text NOT NULL,
  `iheis_arr` text NOT NULL,
  `iheit_arr` text NOT NULL,
  `cbos_arr` text NOT NULL,
  `cbot_arr` text NOT NULL,
  `pbos_arr` text NOT NULL,
  `pbot_arr` text NOT NULL,
  `tccs_arr` text NOT NULL,
  `tcct_arr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kra3`
--

INSERT INTO `kra3` (`id`, `kra_status`, `user_id`, `pos_arr`, `pot_arr`, `gas_arr`, `gat_arr`, `ngos_arr`, `ngot_arr`, `beis_arr`, `beit_arr`, `lheis_arr`, `lheit_arr`, `iheis_arr`, `iheit_arr`, `cbos_arr`, `cbot_arr`, `pbos_arr`, `pbot_arr`, `tccs_arr`, `tcct_arr`) VALUES
(10, 1, 11, '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1', '1,1');

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
-- Table structure for table `tbl_kra_submission`
--

CREATE TABLE `tbl_kra_submission` (
  `id` int(11) NOT NULL,
  `kra_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coor_id` int(11) NOT NULL DEFAULT 0,
  `kra1_sub` varchar(255) NOT NULL,
  `kra2_sub` varchar(255) NOT NULL,
  `kra3_sub` varchar(255) NOT NULL,
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kra_submission`
--

INSERT INTO `tbl_kra_submission` (`id`, `kra_status`, `user_id`, `coor_id`, `kra1_sub`, `kra2_sub`, `kra3_sub`, `date_submitted`) VALUES
(4, 2, 11, 1, '2', '2', '2', '2022-12-08 16:20:58');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kra2`
--
ALTER TABLE `kra2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kra3`
--
ALTER TABLE `kra3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_colleges`
--
ALTER TABLE `tbl_colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_kra_submission`
--
ALTER TABLE `tbl_kra_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
