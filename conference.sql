-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 08:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conference`
--

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `dept` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`dept`, `date`) VALUES
('CSE', '2017-09-21'),
('ECE', '0000-00-00'),
('EEE', '2017-09-22'),
('EIE', '0000-00-00'),
('IT', '2017-11-19'),
('ME', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `email` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`email`, `firstname`, `lastname`, `college`, `pass`, `sem`, `dept`, `phone`) VALUES
('', '', '', '', '', '', '', ''),
('amarnath.r.dave@gmail.com', 'amarnath', 'dave', 'rmkec', 'sairamji', '5', 'CSE', '5'),
('as@gmail.com', 'as', 'asa', 'as', 'as', '1', 'ME', '1'),
('asa', '', '', '', '', '', '', ''),
('davey.sai@gmail.com', 'dave', 'dave', 'rmk', '121', '1', 'it', '1'),
('sas.as@gmail.com', 'aa', 'asa', 'asa', 'sa', '1', 'ME', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`dept`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
