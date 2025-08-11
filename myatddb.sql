-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 09:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myatddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_login`
--

CREATE TABLE `a_login` (
  `Admin_name` varchar(20) NOT NULL,
  `Admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `a_login`
--

INSERT INTO `a_login` (`Admin_name`, `Admin_password`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `qatd`
--

CREATE TABLE `qatd` (
  `date` date NOT NULL,
  `id` varchar(20) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `in_tm` time NOT NULL,
  `ot_tm` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `qatd`
--

INSERT INTO `qatd` (`date`, `id`, `e_name`, `in_tm`, `ot_tm`) VALUES
('2024-04-14', '12', 'Sumit', '13:59:00', '19:01:00'),
('2024-09-30', '2', 'Sumit', '11:38:00', '15:38:00'),
('2024-11-17', '2', 'Sumit', '13:55:00', '18:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `u_login`
--

CREATE TABLE `u_login` (
  `Employee_id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `u_login`
--

INSERT INTO `u_login` (`Employee_id`, `Password`, `Name`) VALUES
('2', '654321', 'Sumit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `u_login`
--
ALTER TABLE `u_login`
  ADD UNIQUE KEY `Employee_id` (`Employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
