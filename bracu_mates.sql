-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 12:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bracu_mates`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hometown` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `current_location` varchar(100) NOT NULL,
  `credits_completed` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `school`, `college`, `email`, `hometown`, `blood_group`, `linkedin`, `department`, `dob`, `current_location`, `credits_completed`, `password`) VALUES
(1, 'asdasd', 'dasda', 'das', 'dasdas', 'das', '', 'dasdas', 'dasdas', '2022-04-07', 'das', 1212, 'dasda'),
(2, 'Maidul Islam', 'dasdas', 'sdasda', 'dasdasafgeref', 'asdas', '', 'asdas', 'dad', '2022-04-08', 'dasdas', 1212, 'dasda'),
(3, 'Maidul Islam', 'dasdas aasda', 'sdasda sadasd', 'asidnis7bd', 'asdas', '', 'asdas', 'dad', '2022-04-08', 'dasdas', 1212, 'dsaa'),
(4, 'Maidul Islam', 'Pabna Zilla School', 'Pabna Govt. Edward University College', 'maidul@gmail.com', 'Pabna', 'AB+', 'https://www.linkedin.com/in/showmick-kar/', 'CSE', '2022-03-30', 'Mohakhali', 54, '2121');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
