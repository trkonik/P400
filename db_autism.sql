-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 09:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_autism`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `A_id` int(255) NOT NULL,
  `District_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case-history`
--

CREATE TABLE `tbl_case-history` (
  `Patient_id` int(255) NOT NULL,
  `CH_Date` date NOT NULL,
  `History` varchar(255) NOT NULL,
  `Weight` int(255) NOT NULL,
  `Bp_sys` varchar(255) NOT NULL,
  `Bp_dys` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donation`
--

CREATE TABLE `tbl_donation` (
  `D_id` int(255) NOT NULL,
  `D_date` date NOT NULL,
  `D_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `E_id` int(255) NOT NULL,
  `E_name` varchar(255) NOT NULL,
  `E_Date` date NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_monitoring`
--

CREATE TABLE `tbl_monitoring` (
  `M_id` int(255) NOT NULL,
  `Patient_id` int(255) NOT NULL,
  `M_date` date NOT NULL,
  `Source` varchar(255) NOT NULL,
  `Notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `C_password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Fathers_name` varchar(255) NOT NULL,
  `Mothers_name` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `District_id` int(255) NOT NULL,
  `Capability` varchar(255) NOT NULL,
  `Family_oriented` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `Name`, `Email`, `Password`, `C_password`, `Address`, `Gender`, `Status`, `Fathers_name`, `Mothers_name`, `Mobile`, `District_id`, `Capability`, `Family_oriented`, `Type`) VALUES
(2, 'adil', 'adil@gmail.com', '12345678', '12345678', 'sylhet', 'male', '1', 'abdul', 'farhana', '01796045377', 0, 'own', 'yes', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`E_id`);

--
-- Indexes for table `tbl_monitoring`
--
ALTER TABLE `tbl_monitoring`
  ADD PRIMARY KEY (`M_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `A_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  MODIFY `D_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `E_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_monitoring`
--
ALTER TABLE `tbl_monitoring`
  MODIFY `M_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
