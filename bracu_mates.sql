-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 05:17 PM
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
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `graduation_date` date NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `Name`, `company`, `graduation_date`, `department`, `email`, `linkedin`, `password`) VALUES
(77, 'Shafin Khandaker', 'Google', '2022-04-01', 'CSE', 'shafin@gmail.com', 'Shafin-Linkedin', 'shafin123');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_area_of_expertise`
--

CREATE TABLE `alumni_area_of_expertise` (
  `al_id` int(11) DEFAULT NULL,
  `expertise` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni_area_of_expertise`
--

INSERT INTO `alumni_area_of_expertise` (`al_id`, `expertise`) VALUES
(77, 'Machine Learning'),
(77, 'System Design and Analysis');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni_area_of_expertise`
--
ALTER TABLE `alumni_area_of_expertise`
  ADD KEY `par_ind` (`al_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni_area_of_expertise`
--
ALTER TABLE `alumni_area_of_expertise`
  ADD CONSTRAINT `alumni_area_of_expertise_ibfk_1` FOREIGN KEY (`al_id`) REFERENCES `alumni` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
