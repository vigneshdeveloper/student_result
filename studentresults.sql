-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 07:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentresults`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `totalmark` int(11) NOT NULL,
  `markobtain` int(11) NOT NULL,
  `result` tinyint(1) NOT NULL,
  `grade` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `rollno`, `subject`, `totalmark`, `markobtain`, `result`, `grade`) VALUES
(2, 1, 'computerscience', 0, 90, 1, 'S'),
(3, 2, 'Bakery', 0, 85, 1, 'A+'),
(4, 3, 'chemistry', 0, 74, 1, 'A'),
(5, 4, 'microbiology', 80, 80, 1, 'A+'),
(6, 5, 'computer', 60, 60, 1, 'B'),
(7, 6, 'physics', 60, 60, 1, 'B'),
(8, 7, 'electronics', 72, 72, 1, 'A'),
(9, 8, 'botany', 35, 35, 0, 'F'),
(10, 9, 'computerscience', 45, 45, 0, 'F'),
(11, 10, 'computerscience', 65, 65, 1, 'B'),
(12, 11, 'computerscience', 28, 28, 0, 'F'),
(13, 12, 'computerscience', 55, 55, 1, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `rollno` int(6) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `dept` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `email`, `mobile`, `dept`) VALUES
(2, 1, 'vignesh', 'vikkimani48@gmail.com', '9787226742', 'MCA'),
(3, 2, 'ajith', 'ajith@gmail.com', '9487826742', 'Hotel'),
(4, 3, 'nandhini', 'nandhini@gmail.com', '7868068473', 'Bsc'),
(5, 4, 'meha', 'meha@gmail.com', '9787226742', 'biology'),
(6, 5, 'logith bala', 'logi@gmail.com', '9856856485', 'commerce'),
(7, 6, 'kavin', 'kavin@gmail.com', '9877899875', 'physics'),
(8, 7, 'ravi', 'ravi@gmail.com', '9878787878', 'electronicd'),
(9, 8, 'raju', 'raju@gmail.com', '8785478521', 'botany'),
(10, 9, 'vengat', 'vengat@gmail.com', '9624587452', 'MCA'),
(11, 10, 'praveen', 'praveen@gmail.com', '8587954687', 'MCA'),
(12, 11, 'john', 'john@gmail.com', '685487575', 'MCA'),
(13, 12, 'ganesh', 'ganesh@gmail.com', '9878787878', 'MCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
