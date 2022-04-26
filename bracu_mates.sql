-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 03:53 AM
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
(77, 'Shafin Khandaker', 'Google', '2022-04-01', 'CSE', 'shafin@gmail.com', 'Shafin-Linkedin', 'shafin123'),
(79, 'dasdas', 'dada', '2022-04-07', 'cas', 'dasasfqwff', 'das', 'ss'),
(80, 'dasdas', 'dada', '2022-04-07', 'cas', 'dasasfqwwwdff', 'das', 'dasdas');

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
(77, 'System Design and Analysis'),
(79, 'Machine Learning'),
(79, 'Frontend Engineering'),
(80, 'Machine Learning'),
(80, 'Frontend Engineering'),
(80, 'Backend Engineering'),
(80, 'System Design and Analysis');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `last_donation` date NOT NULL,
  `weight` decimal(10,0) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `phone`, `email`, `dob`, `blood_group`, `last_donation`, `weight`, `password`) VALUES
(2, 'Showmick Kar', '013424234', 'showmick12@gmail.com', '2022-04-04', 'AB+', '2022-04-21', '45', '2121'),
(3, 'Showmick Kar', '+8801776365131', 'showmick.kar@g.bracu.ac.bd', '2022-04-07', 'AB+', '2022-04-06', '45', '1111'),
(4, 'Ifty', '931321', 'dasdasd@', '1966-10-14', 'adas', '2022-04-21', '53', '2121'),
(5, 'Ifty', '931321', 'dasdasd@dasda', '1966-10-14', 'adas', '2022-04-21', '53', '2121');

-- --------------------------------------------------------

--
-- Table structure for table `donor_available_location`
--

CREATE TABLE `donor_available_location` (
  `d_id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_available_location`
--

INSERT INTO `donor_available_location` (`d_id`, `location`) VALUES
(3, 'Mohakhali'),
(3, 'Dhanmondi'),
(4, 'Mohakhali'),
(4, 'Mohammadpur'),
(5, 'Mohakhali'),
(5, 'Mohammadpur');

-- --------------------------------------------------------

--
-- Table structure for table `donor_health_condition`
--

CREATE TABLE `donor_health_condition` (
  `d_id` int(11) NOT NULL,
  `health_condition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_health_condition`
--

INSERT INTO `donor_health_condition` (`d_id`, `health_condition`) VALUES
(2, 'Heart Diseases'),
(2, 'Kidney Diseases'),
(3, 'Kidney Diseases'),
(3, 'Covid Vaccinated'),
(4, 'Heart Diseases'),
(4, 'Kidney Diseases'),
(5, 'Heart Diseases'),
(5, 'Kidney Diseases');

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
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(44, 'Where to collect my ID card?', 'UB70405'),
(45, 'Where is the Library?', 'UB20402'),
(46, 'What is a dog?', 'an animal'),
(47, 'What is a dog?', '-');

-- --------------------------------------------------------

--
-- Table structure for table `lost_and_found`
--

CREATE TABLE `lost_and_found` (
  `id` int(11) NOT NULL,
  `reporter_email` varchar(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `report_date` date NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lost_and_found`
--

INSERT INTO `lost_and_found` (`id`, `reporter_email`, `item_name`, `report_date`, `place`) VALUES
(1, 'shaodhao@mjosad', 'paper', '2022-04-19', 'cumila'),
(2, 'dasndi@', 'dasdas', '2022-04-19', 'dasdas'),
(3, '2022-04-18', 'Pen', '0000-00-00', '2022-04-18'),
(4, '2022-04-25', 'Paper', '0000-00-00', '2022-04-25');

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
(4, 'Maidul Islam', 'Pabna Zilla School', 'Pabna Govt. Edward University College', 'maidul@gmail.com', 'Pabna', 'AB+', 'https://www.linkedin.com/in/showmick-kar/', 'CSE', '2022-03-30', 'Mohakhali', 54, '2121'),
(20301177, 'Shupta', 'dadas', 'fafas', 'asdfasd2378rh', 'das', 'AB+', 'dad', 'dad', '2022-04-05', 'dasdas', 1212, '2121');

-- --------------------------------------------------------

--
-- Table structure for table `student_club`
--

CREATE TABLE `student_club` (
  `s_id` int(11) NOT NULL,
  `club` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_club`
--

INSERT INTO `student_club` (`s_id`, `club`) VALUES
(1, 'BRAC University Cultural Club'),
(1, 'Robotics Club Of BRAC University'),
(2, 'BRAC University Cultural Club'),
(2, 'Robotics Club Of BRAC University'),
(3, 'BRAC University Cultural Club'),
(3, 'Robotics Club Of BRAC University'),
(4, 'Robotics Club Of BRAC University'),
(20301177, 'BRAC University Cultural Club'),
(20301177, 'Robotics Club Of BRAC University');

-- --------------------------------------------------------

--
-- Table structure for table `student_field_of_interest`
--

CREATE TABLE `student_field_of_interest` (
  `s_id` int(11) NOT NULL,
  `field_of_interest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_field_of_interest`
--

INSERT INTO `student_field_of_interest` (`s_id`, `field_of_interest`) VALUES
(1, 'Machine Learning'),
(1, 'Backend Engineering'),
(2, 'Machine Learning'),
(2, 'Frontend Engineering'),
(3, 'Machine Learning'),
(3, 'Frontend Engineering'),
(4, 'Machine Learning'),
(4, 'Backend Engineering'),
(20301177, 'Machine Learning'),
(20301177, 'Frontend Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `student_hobby`
--

CREATE TABLE `student_hobby` (
  `s_id` int(11) NOT NULL,
  `hobby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_hobby`
--

INSERT INTO `student_hobby` (`s_id`, `hobby`) VALUES
(1, 'Music'),
(1, 'Gardening'),
(1, 'Post-card Collection'),
(2, 'Music'),
(2, 'Coin Collection'),
(3, 'Music'),
(3, 'Coin Collection'),
(4, 'Music'),
(4, 'Photography'),
(20301177, 'Music'),
(20301177, 'Gardening');

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
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_available_location`
--
ALTER TABLE `donor_available_location`
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `donor_health_condition`
--
ALTER TABLE `donor_health_condition`
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_club`
--
ALTER TABLE `student_club`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `student_field_of_interest`
--
ALTER TABLE `student_field_of_interest`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `student_hobby`
--
ALTER TABLE `student_hobby`
  ADD KEY `s_id` (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni_area_of_expertise`
--
ALTER TABLE `alumni_area_of_expertise`
  ADD CONSTRAINT `alumni_area_of_expertise_ibfk_1` FOREIGN KEY (`al_id`) REFERENCES `alumni` (`id`);

--
-- Constraints for table `donor_available_location`
--
ALTER TABLE `donor_available_location`
  ADD CONSTRAINT `donor_available_location_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `donor` (`id`);

--
-- Constraints for table `donor_health_condition`
--
ALTER TABLE `donor_health_condition`
  ADD CONSTRAINT `donor_health_condition_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `donor` (`id`);

--
-- Constraints for table `student_club`
--
ALTER TABLE `student_club`
  ADD CONSTRAINT `student_club_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `student_field_of_interest`
--
ALTER TABLE `student_field_of_interest`
  ADD CONSTRAINT `student_field_of_interest_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `student_hobby`
--
ALTER TABLE `student_hobby`
  ADD CONSTRAINT `student_hobby_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
