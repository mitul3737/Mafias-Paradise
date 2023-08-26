-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 04:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `patient_email` varchar(30) NOT NULL,
  `room_number` varchar(10) DEFAULT NULL,
  `admission_date` date NOT NULL,
  `release_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `patient_email` varchar(30) NOT NULL,
  `doctor_email` varchar(30) NOT NULL,
  `prescription` varchar(500) DEFAULT NULL,
  `slot_number` int(11) NOT NULL,
  `appointment_type` varchar(20) DEFAULT NULL,
  `appointment_date` date NOT NULL,
  `appointment_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`patient_email`, `doctor_email`, `prescription`, `slot_number`, `appointment_type`, `appointment_date`, `appointment_status`) VALUES
('shakib', 'mahmud', 'prescribed', 9, 'Regular', '2023-08-16', 'completed'),
('shakib', 'mahmud', 'pending', 1, 'Regular', '2023-08-22', 'pending'),
('shakib', 'mash', 'pending', 3, 'Regular', '2023-08-23', 'pending'),
('shakib', 'mash', 'pending', 6, 'Regular', '2023-08-23', 'pending'),
('shakib', 'mahmud', 'prescribed', 2, 'Regular', '2023-08-30', 'completed'),
('shakib', 'mahmud', 'prescribed', 5, 'Regular', '2023-08-30', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `booked_tests`
--

CREATE TABLE `booked_tests` (
  `test_id` int(11) NOT NULL,
  `patient_email` varchar(30) NOT NULL,
  `slot_number` int(11) NOT NULL,
  `booked_date` date NOT NULL,
  `test_report` varchar(30) DEFAULT NULL,
  `test_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked_tests`
--

INSERT INTO `booked_tests` (`test_id`, `patient_email`, `slot_number`, `booked_date`, `test_report`, `test_status`) VALUES
(1, 'shakib', 1, '2023-08-25', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `specialization` varchar(30) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `room_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`name`, `email`, `password`, `gender`, `address`, `phone_number`, `specialization`, `designation`, `department`, `room_no`) VALUES
('Mahmudullah', 'mahmud', 'vayra', 'Male', 'Chittagong', '2345', 'Blood', 'Head of Department', 'Blood', 'UB80206'),
('Mashrafee', 'mash', 'express', 'Male', 'Norail', '123456', 'tuiparbi', 'Head', 'Motivation', 'Ub0000'),
('Tamim', 'tamim', 'dotdot', 'Male', 'Chittagong', '123', 'Dot', 'Dot', 'Dot', 'UB80235');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_admins`
--

CREATE TABLE `hospital_admins` (
  `admin_id` varchar(15) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `blood_group` varchar(6) DEFAULT NULL,
  `blood_pressure` varchar(25) DEFAULT NULL,
  `height` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`name`, `email`, `password`, `gender`, `address`, `phone_number`, `weight`, `blood_group`, `blood_pressure`, `height`) VALUES
('Hridoy', 'hridoy', 'hridoy', 'Male', 'Bogura', NULL, NULL, NULL, NULL, NULL),
('Mushfiqur', 'mushy', 'mitu', 'Male', 'Bogura', '234', 50, '634', '56', 456),
('Shakib', 'shakib', 'moyna', 'Male', 'Khulna', '123', 80, 'B+', '156', 180);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_number` varchar(10) NOT NULL,
  `room_type` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_type` varchar(20) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_type`, `test_name`) VALUES
(1, 'Blood', 'CBC'),
(2, 'Blood', 'WBC'),
(3, 'Xray', 'X ray');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`patient_email`,`admission_date`),
  ADD KEY `room_number` (`room_number`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`patient_email`,`appointment_date`,`slot_number`),
  ADD KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `booked_tests`
--
ALTER TABLE `booked_tests`
  ADD PRIMARY KEY (`patient_email`,`slot_number`,`booked_date`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `hospital_admins`
--
ALTER TABLE `hospital_admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_number`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admissions`
--
ALTER TABLE `admissions`
  ADD CONSTRAINT `admissions_ibfk_1` FOREIGN KEY (`patient_email`) REFERENCES `patients` (`email`),
  ADD CONSTRAINT `admissions_ibfk_2` FOREIGN KEY (`room_number`) REFERENCES `rooms` (`room_number`);

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`patient_email`) REFERENCES `patients` (`email`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`doctor_email`) REFERENCES `doctors` (`email`);

--
-- Constraints for table `booked_tests`
--
ALTER TABLE `booked_tests`
  ADD CONSTRAINT `booked_tests_ibfk_1` FOREIGN KEY (`patient_email`) REFERENCES `patients` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
