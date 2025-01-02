-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 05:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mood`
--

-- --------------------------------------------------------

--
-- Table structure for table `analysisdata`
--

CREATE TABLE `analysisdata` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `analysisdata`
--

INSERT INTO `analysisdata` (`id`, `value`) VALUES
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `date`, `time`) VALUES
(1, '0000-00-00', '00:00:00'),
(2, '0000-00-00', '00:00:00'),
(3, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_t`
--

CREATE TABLE `doctor_t` (
  `dname` varchar(40) NOT NULL,
  `Designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_t`
--

INSERT INTO `doctor_t` (`dname`, `Designation`) VALUES
('Emon Mahmud', 'mbbs'),
('Emon Mahmud', 'mbbs'),
('Emon', 'mbbs, bsc'),
('mithun', 'mbbs'),
('mr', 'mbbs'),
('ms. sabrina', 'mbbs'),
('mr. tanvir', 'mbbs bcs'),
('jhahidul', 'mbbs'),
('jahedul ', 'fcps'),
('ddddd', 'ddfffff'),
('ghhfht', 'hgjhgjgjk'),
('Tawhid', 'MBBS, MCPS, MPHIL (Psychiatry), MMEd, Fellow Child Psychiatry (Pakistan), MACP (USA), FRCP (UK)'),
('mithun', 'mbbs bcs'),
('mr', 'mbbs bcs'),
('mr. xyz', 'mbbs bcs');

-- --------------------------------------------------------

--
-- Table structure for table `login_t`
--

CREATE TABLE `login_t` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_t`
--

INSERT INTO `login_t` (`id`, `email`, `pass`, `type`) VALUES
(1, 'emon@gmail.com', '12345', 'student'),
(2, 'admin@gamil.com', '1234567', 'admin'),
(3, 'st@gamil.com', '123', 'student'),
(4, 'doctor@gmail.com', '1234', 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analysisdata`
--
ALTER TABLE `analysisdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_t`
--
ALTER TABLE `login_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analysisdata`
--
ALTER TABLE `analysisdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_t`
--
ALTER TABLE `login_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
