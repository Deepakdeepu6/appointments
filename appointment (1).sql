-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 07:48 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) DEFAULT 'admin',
  `password` varchar(255) DEFAULT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `day` varchar(255) NOT NULL,
  `date1` date NOT NULL,
  `text` text NOT NULL,
  `announce_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`day`, `date1`, `text`, `announce_id`) VALUES
('Thursday', '2020-09-03', 'ht', 1),
('Thursday', '2020-09-03', 'what', 2),
('Thursday', '2020-09-03', 'what', 3),
('Thursday', '2020-09-03', 'what', 4),
('Thursday', '2020-09-03', 'what', 5),
('Thursday', '2020-09-03', 'ff', 6),
('Thursday', '2020-09-03', 'ghth', 7),
('Thursday', '2020-09-03', 'ghth', 8),
('Thursday', '2020-09-03', '', 9),
('Thursday', '2020-09-03', 'gtt', 10),
('Thursday', '2020-09-03', 'gtt', 11),
('Thursday', '2020-09-03', 'gtt', 12),
('Thursday', '2020-09-03', 'gtt', 13),
('Sunday', '2020-09-06', 'checking the main page', 14);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `slot` time(6) NOT NULL,
  `doctor_id` int(255) DEFAULT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `total` int(255) DEFAULT NULL,
  `appointments_category` varchar(255) DEFAULT NULL,
  `patient_id` int(255) DEFAULT NULL,
  `doctor_email` varchar(255) DEFAULT NULL,
  `patient_email` varchar(255) DEFAULT NULL,
  `doctor_number` int(255) DEFAULT NULL,
  `patient_number` int(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `a_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `number` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`name`, `address`, `number`, `email`, `password`, `category`, `id`) VALUES
('deepak', '1111', 111112243, 'cdeepakdeepu6@gmail.com', '12', 'heart', 1),
('shashank', '3333', 12345677, 'cdeepakdeepu0@gmail.com', '12', 'bone', 2),
('vignesh', '444', 123455, 'cdeepakdeepu@gmail.com', '12', 'dentist', 3),
('deepali', '1111', 1234555, 'infopedia.org4@gmail.com', '12', 'surgery', 4),
('moni', '111', 1111, 'cKarthik@gmail.com', '12', 'mental Health', 5),
('sorry', '12', 123, 'cdeepakdeepu6@gmail.com3211234567', '12', 'surgery', 6);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `number` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `address`, `number`, `email`, `password`, `blood`, `id`) VALUES
('deepak', '11111', 121, 'cdeepakdeepu6@gmail.com', '12', '0+', 1),
('admin', '1111', 111, 'cdeeee@gmail.com', '12', 'a+', 2),
('shashank', '11111', 1111, 'cdeepa11kdeepu6@gmail.com', '12', 'b+', 3),
('diksha', '123', 2147483647, 'cdeepak5166@gmail.com', '12', 'a-', 4),
('manjesh', 'dghehthth', 1234567887, 'cdeepakdeepu6456654@gmail.com', '12', 'ab+', 6);

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `time` date NOT NULL,
  `patient_id` int(255) DEFAULT NULL,
  `doctor_id` int(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description1` varchar(255) DEFAULT NULL,
  `patient_demail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`time`, `patient_id`, `doctor_id`, `category`, `description1`, `patient_demail`) VALUES
('2020-09-03', 1, 2, 'bone', NULL, NULL),
('2020-09-03', 1, 1, 'heart', NULL, NULL),
('2020-09-03', 1, 5, 'mental Health', NULL, NULL),
('2020-09-03', 1, 4, 'surgery', NULL, NULL),
('2020-09-03', 3, 0, 'mental Health', NULL, 'bhuvanbhuvism@gmail.com1221212121'),
('2020-09-03', 3, 6, 'surgery', 'so', 'cdeepakdeepu6@gmail.com3211234567'),
('2020-09-03', 3, 5, 'mental Health', NULL, 'cKarthik@gmail.com'),
('2020-09-03', 3, 1, 'heart', NULL, 'cdeepakdeepu6@gmail.com'),
('2020-09-04', 1, 5, 'mental Health', 'dolo 50mg', 'cKarthik@gmail.com'),
('2020-09-04', 1, 2, 'bone', 'don\'t know', 'cdeepakdeepu0@gmail.com'),
('2020-09-04', 1, 5, 'mental Health', 'dolo 50mg', 'cKarthik@gmail.com'),
('2020-09-04', 1, 1, 'heart', NULL, 'cdeepakdeepu6@gmail.com'),
('2020-09-04', 1, 2, 'bone', NULL, 'cdeepakdeepu0@gmail.com'),
('2020-09-04', 1, 3, 'dentist', NULL, 'cdeepakdeepu@gmail.com'),
('2020-09-04', 1, 5, 'mental Health', NULL, 'cKarthik@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

CREATE TABLE `timings` (
  `id` int(255) NOT NULL,
  `at` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`id`, `at`) VALUES
(1, '10:00:00.000000'),
(2, '10:30:00.000000'),
(3, '11:00:00.000000'),
(4, '11:30:00.000000'),
(5, '12:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announce_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `appointments` (`patient_id`),
  ADD KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `timings`
--
ALTER TABLE `timings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announce_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timings`
--
ALTER TABLE `timings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
