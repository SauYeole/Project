-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 01:04 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngoms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_beni`
--

CREATE TABLE `add_beni` (
  `don_id` int(11) NOT NULL,
  `don_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `don_addr` text COLLATE utf8_unicode_ci NOT NULL,
  `don_mob` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `don_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `don_dob` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `dona_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dona_amt` int(5) NOT NULL,
  `dona_date` varchar(14) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_beni`
--

INSERT INTO `add_beni` (`don_id`, `don_name`, `don_addr`, `don_mob`, `don_email`, `don_dob`, `dona_type`, `dona_amt`, `dona_date`) VALUES
(3, 'Chetan Badhe', 'Makwana Brothers, Patil Darwaja, chopda', '08600276152', 'chetanybadhe2121@gmail.com', '1980-11-01', 'Cash', 0, '2019-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `add_donar`
--

CREATE TABLE `add_donar` (
  `don_id` int(11) NOT NULL,
  `don_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `don_addr` text COLLATE utf8_unicode_ci NOT NULL,
  `don_mob` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `don_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `don_dob` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `dona_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dona_amt` int(5) NOT NULL,
  `dona_date` varchar(14) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_donar`
--

INSERT INTO `add_donar` (`don_id`, `don_name`, `don_addr`, `don_mob`, `don_email`, `don_dob`, `dona_type`, `dona_amt`, `dona_date`) VALUES
(2, 'Lalitkumar Yadnik', '66,SUVISHWA, BOROLE NAGAR 1, NEAR VISHWANATH MAHADEV TEMPLE, YAWAL ROAD, CHOPDA', '08446759127', 'yadnikchetan@gmail.com', '1980-11-01', 'Cash', 100, '2019-11-01'),
(3, 'Chetan Badhe', 'Makwana Brothers, Patil Darwaja, chopda', '08600276152', 'chetanybadhe2121@gmail.com', '1980-11-01', 'Cash', 100, '2019-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `add_emp`
--

CREATE TABLE `add_emp` (
  `emp_id` int(5) NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_addr` text COLLATE utf8_unicode_ci NOT NULL,
  `emp_mob` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `emp_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_dob` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `emp_desi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `emp_sal` int(5) NOT NULL,
  `emp_doj` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_emp`
--

INSERT INTO `add_emp` (`emp_id`, `full_name`, `emp_addr`, `emp_mob`, `emp_email`, `emp_dob`, `emp_desi`, `emp_sal`, `emp_doj`) VALUES
(4, 'Chetan Yadnik', 'Adgaon', '7798000791', 'yadnikchetan@gmail.com', '1994-09-23', 'Programer', 10000, '2018-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `add_eve`
--

CREATE TABLE `add_eve` (
  `eve_id` int(11) NOT NULL,
  `event_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `evnt_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `event_coord` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `coord_mob` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `evnt_addre` text COLLATE utf8_unicode_ci NOT NULL,
  `evnt_fund` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `evnt_day` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `evnt_mnth` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `evnt_yr` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_eve`
--

INSERT INTO `add_eve` (`eve_id`, `event_name`, `evnt_desc`, `event_coord`, `coord_mob`, `evnt_addre`, `evnt_fund`, `evnt_day`, `evnt_mnth`, `evnt_yr`) VALUES
(2, 'chetan', 'asas', 'chetan yadnik', '7798000791', 'chopda', '500', '02', '03', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `add_vol`
--

CREATE TABLE `add_vol` (
  `vol_id` int(5) NOT NULL,
  `vol_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vol_add` text COLLATE utf8_unicode_ci NOT NULL,
  `vol_contact` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `vol_occu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `vol_intr_wrk` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `doj_day` int(2) NOT NULL,
  `doj_month` int(2) NOT NULL,
  `doj_yr` int(4) NOT NULL,
  `dob_day` int(2) NOT NULL,
  `dob_month` int(2) NOT NULL,
  `dob_yr` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_vol`
--

INSERT INTO `add_vol` (`vol_id`, `vol_name`, `vol_add`, `vol_contact`, `vol_occu`, `vol_intr_wrk`, `doj_day`, `doj_month`, `doj_yr`, `dob_day`, `dob_month`, `dob_yr`) VALUES
(4, 'Entwine Web matrix', 'gnv', '4', '4fdg', '4', 1, 1, 2017, 1, 1, 1990);

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `exp_id` int(4) NOT NULL,
  `exp_for` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `exp_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `exp_by` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `exp_amt` int(12) NOT NULL,
  `exp_date` varchar(14) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(5) NOT NULL,
  `feed_name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `feed_date` varchar(14) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_name`, `feedback`, `feed_date`) VALUES
(2, 'Lalitkumar Yadnik', 'sd', '1980-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_beni`
--
ALTER TABLE `add_beni`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `add_donar`
--
ALTER TABLE `add_donar`
  ADD PRIMARY KEY (`don_id`);

--
-- Indexes for table `add_emp`
--
ALTER TABLE `add_emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `add_eve`
--
ALTER TABLE `add_eve`
  ADD PRIMARY KEY (`eve_id`);

--
-- Indexes for table `add_vol`
--
ALTER TABLE `add_vol`
  ADD PRIMARY KEY (`vol_id`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_beni`
--
ALTER TABLE `add_beni`
  MODIFY `don_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_donar`
--
ALTER TABLE `add_donar`
  MODIFY `don_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_emp`
--
ALTER TABLE `add_emp`
  MODIFY `emp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_eve`
--
ALTER TABLE `add_eve`
  MODIFY `eve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_vol`
--
ALTER TABLE `add_vol`
  MODIFY `vol_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `exp_id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
