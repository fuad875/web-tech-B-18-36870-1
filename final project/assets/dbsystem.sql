-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 04:35 PM
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
-- Database: `dbsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_gender` varchar(255) NOT NULL,
  `a_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_password`, `a_username`, `a_email`, `a_gender`, `a_dob`) VALUES
(1, 'smith al', '111', 'smith', 'mh@gmail.com', 'Male', '1999-01-05'),
(7, 'rafi ss', '222', 'adil22', 'abc@gmail.com', 'Male', '2017-02-15'),
(10, 'karim jak', '123', 'sd', 'justit@gmail.com', 'Male', '2021-04-14'),
(11, 'merina shithi', '12345', 'shithi', 'justdoit@gmail.com', 'Female', '2021-04-14'),
(12, 'hasan khan', '896', 'khan', 'gh@gmail.com', 'Male', '2021-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `c_username` varchar(30) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_gender` varchar(10) NOT NULL,
  `c_dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`c_id`, `c_name`, `c_password`, `c_username`, `c_email`, `c_gender`, `c_dob`) VALUES
(11, 'karim alam', '123', 'karm', 'karm@gmail.com', 'Male', '2020-12-15'),
(12, 'devid lam', '123', 'devid147', 'devid@gmail.com', 'Male', '2021-01-04'),
(14, 'ami kk', '78', 'yu', 'justdoit@gmail.com', 'Male', '2021-04-14'),
(15, 'rksk kkdsa', '456', 'dj', 'justdoit@gmail.com', 'Male', '2021-04-22'),
(16, 'asdgs hshsgsgasg', '963', 'fg', 'justdoit@gmail.com', 'Male', '2021-04-14'),
(17, 'rest sdd', '453', 'sdd', 'jit@gmail.com', 'Male', '2021-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `user_type`) VALUES
('dj', '456', 'Client'),
('fg', '963', 'Client'),
('khan', '896', 'Admin'),
('rakib', '1234', 'Client'),
('sd', '123', 'Admin'),
('sdd', '453', 'Client'),
('shithi', '12345', 'Admin'),
('sk', '45', 'Client'),
('yu', '78', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `n_id` int(11) NOT NULL,
  `n_name` varchar(255) NOT NULL,
  `n_date` date NOT NULL,
  `n_startTime` time NOT NULL,
  `n_endTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`n_id`, `n_name`, `n_date`, `n_startTime`, `n_endTime`) VALUES
(3, 'super offer', '2021-02-06', '13:13:00', '13:14:00'),
(5, 'great deal', '2021-01-04', '04:37:00', '03:37:00'),
(6, 'sddf', '2021-04-08', '05:03:00', '17:03:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`n_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
