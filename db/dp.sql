-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 08:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fybm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(8) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `AL_ID` int(8) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Company_name` varchar(40) DEFAULT NULL,
  `Graduation_year` date DEFAULT NULL,
  `University_department` varchar(70) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Linkedin` varchar(50) DEFAULT NULL,
  `A_ID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alumni_area_of_expertise`
--

CREATE TABLE `alumni_area_of_expertise` (
  `AL_ID` int(8) DEFAULT NULL,
  `Area_of_expertise` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `D_ID` int(8) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Blood_group` varchar(10) DEFAULT NULL,
  `Last_donation` date DEFAULT NULL,
  `Weight` int(3) DEFAULT NULL,
  `A_ID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_available_locations`
--

CREATE TABLE `donor_available_locations` (
  `D_ID` int(8) NOT NULL,
  `Available_locations` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_donates_alumni`
--

CREATE TABLE `donor_donates_alumni` (
  `D_ID` int(8) DEFAULT NULL,
  `AL_ID` int(8) DEFAULT NULL,
  `Donation_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_donates_student`
--

CREATE TABLE `donor_donates_student` (
  `D_ID` int(8) DEFAULT NULL,
  `S_ID` int(8) DEFAULT NULL,
  `Donation_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor_health_condition`
--

CREATE TABLE `donor_health_condition` (
  `D_ID` int(8) NOT NULL,
  `Health_condition` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `F_ID` int(8) NOT NULL,
  `Question` varchar(1000) DEFAULT NULL,
  `Answer` varchar(1000) DEFAULT NULL,
  `A_ID` int(8) DEFAULT NULL,
  `S_ID` int(8) DEFAULT NULL,
  `AL_ID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lost_and_found`
--

CREATE TABLE `lost_and_found` (
  `LOF_ID` int(8) NOT NULL,
  `Gsuit` varchar(50) DEFAULT NULL,
  `Item_name` varchar(40) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Place` varchar(70) DEFAULT NULL,
  `Found_or_not` tinyint(1) DEFAULT NULL,
  `S_ID` int(8) DEFAULT NULL,
  `A_ID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `S_ID_first` int(8) DEFAULT NULL,
  `S_ID_second` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `S_ID` int(8) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `School` varchar(100) DEFAULT NULL,
  `College` varchar(100) DEFAULT NULL,
  `Hometown` varchar(20) DEFAULT NULL,
  `Blood Group` varchar(10) DEFAULT NULL,
  `Linkedin` varchar(50) DEFAULT NULL,
  `Gsuit` varchar(50) DEFAULT NULL,
  `Department` varchar(70) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Area` varchar(20) DEFAULT NULL,
  `Credits_completed` int(3) DEFAULT NULL,
  `A_ID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_clubs`
--

CREATE TABLE `student_clubs` (
  `S_ID` int(8) DEFAULT NULL,
  `Clubs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `S_ID` int(8) DEFAULT NULL,
  `Department` varchar(70) NOT NULL,
  `Course_name` varchar(40) NOT NULL,
  `Course_section` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_field_of_interest`
--

CREATE TABLE `student_field_of_interest` (
  `S_ID` int(8) DEFAULT NULL,
  `Field_of_interest` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_hobbies`
--

CREATE TABLE `student_hobbies` (
  `S_ID` int(8) DEFAULT NULL,
  `Hobbies` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`AL_ID`),
  ADD KEY `A_ID_alumni_fr` (`A_ID`);

--
-- Indexes for table `alumni_area_of_expertise`
--
ALTER TABLE `alumni_area_of_expertise`
  ADD PRIMARY KEY (`Area_of_expertise`),
  ADD KEY `AL_ID_expertise_fr` (`AL_ID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`D_ID`),
  ADD KEY `A_ID_donor_fr` (`A_ID`);

--
-- Indexes for table `donor_available_locations`
--
ALTER TABLE `donor_available_locations`
  ADD PRIMARY KEY (`Available_locations`),
  ADD KEY `D_ID_locations_fr` (`D_ID`);

--
-- Indexes for table `donor_donates_alumni`
--
ALTER TABLE `donor_donates_alumni`
  ADD PRIMARY KEY (`Donation_id`),
  ADD KEY `Donor_donates_alumni_D_ID` (`D_ID`),
  ADD KEY `Donor_donates_alumni_AL_ID` (`AL_ID`);

--
-- Indexes for table `donor_donates_student`
--
ALTER TABLE `donor_donates_student`
  ADD PRIMARY KEY (`Donation_id`),
  ADD KEY `Donor_donates_student_D_ID` (`D_ID`),
  ADD KEY `Donor_donates_student_S_ID` (`S_ID`);

--
-- Indexes for table `donor_health_condition`
--
ALTER TABLE `donor_health_condition`
  ADD PRIMARY KEY (`Health_condition`),
  ADD KEY `D_ID_health_fr` (`D_ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`F_ID`),
  ADD KEY `A_ID_faq_fr` (`A_ID`),
  ADD KEY `S_ID_faq_fr` (`S_ID`),
  ADD KEY `AL_ID_faq_fr` (`AL_ID`);

--
-- Indexes for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  ADD PRIMARY KEY (`LOF_ID`),
  ADD KEY `S_ID_lof_fr` (`S_ID`),
  ADD KEY `A_ID_lof_fr` (`A_ID`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD KEY `S_ID_first_fr` (`S_ID_first`),
  ADD KEY `S_ID_second_fr` (`S_ID_second`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`S_ID`),
  ADD KEY `A_ID_student_fr` (`A_ID`);

--
-- Indexes for table `student_clubs`
--
ALTER TABLE `student_clubs`
  ADD PRIMARY KEY (`Clubs`),
  ADD KEY `S_ID_clubs_fr` (`S_ID`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`Department`,`Course_name`,`Course_section`),
  ADD KEY `S_ID_fr` (`S_ID`);

--
-- Indexes for table `student_field_of_interest`
--
ALTER TABLE `student_field_of_interest`
  ADD PRIMARY KEY (`Field_of_interest`),
  ADD KEY `S_ID_interest_fr` (`S_ID`);

--
-- Indexes for table `student_hobbies`
--
ALTER TABLE `student_hobbies`
  ADD PRIMARY KEY (`Hobbies`),
  ADD KEY `S_ID_hobbies_fr` (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `D_ID` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_donates_alumni`
--
ALTER TABLE `donor_donates_alumni`
  MODIFY `Donation_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_donates_student`
--
ALTER TABLE `donor_donates_student`
  MODIFY `Donation_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `A_ID_alumni_fr` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`A_ID`);

--
-- Constraints for table `alumni_area_of_expertise`
--
ALTER TABLE `alumni_area_of_expertise`
  ADD CONSTRAINT `AL_ID_expertise_fr` FOREIGN KEY (`AL_ID`) REFERENCES `alumni` (`AL_ID`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `A_ID_donor_fr` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`A_ID`);

--
-- Constraints for table `donor_available_locations`
--
ALTER TABLE `donor_available_locations`
  ADD CONSTRAINT `D_ID_locations_fr` FOREIGN KEY (`D_ID`) REFERENCES `donor` (`D_ID`);

--
-- Constraints for table `donor_donates_alumni`
--
ALTER TABLE `donor_donates_alumni`
  ADD CONSTRAINT `Donor_donates_alumni_AL_ID` FOREIGN KEY (`AL_ID`) REFERENCES `alumni` (`AL_ID`),
  ADD CONSTRAINT `Donor_donates_alumni_D_ID` FOREIGN KEY (`D_ID`) REFERENCES `donor` (`D_ID`);

--
-- Constraints for table `donor_donates_student`
--
ALTER TABLE `donor_donates_student`
  ADD CONSTRAINT `Donor_donates_student_D_ID` FOREIGN KEY (`D_ID`) REFERENCES `donor` (`D_ID`),
  ADD CONSTRAINT `Donor_donates_student_S_ID` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`);

--
-- Constraints for table `donor_health_condition`
--
ALTER TABLE `donor_health_condition`
  ADD CONSTRAINT `D_ID_health_fr` FOREIGN KEY (`D_ID`) REFERENCES `donor` (`D_ID`);

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `AL_ID_faq_fr` FOREIGN KEY (`AL_ID`) REFERENCES `alumni` (`AL_ID`);

--
-- Constraints for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  ADD CONSTRAINT `A_ID_lof_fr` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`A_ID`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `S_ID_first_fr` FOREIGN KEY (`S_ID_first`) REFERENCES `student` (`S_ID`),
  ADD CONSTRAINT `S_ID_second_fr` FOREIGN KEY (`S_ID_second`) REFERENCES `student` (`S_ID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `A_ID_student_fr` FOREIGN KEY (`A_ID`) REFERENCES `admin` (`A_ID`);

--
-- Constraints for table `student_clubs`
--
ALTER TABLE `student_clubs`
  ADD CONSTRAINT `S_ID_clubs_fr` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`);

--
-- Constraints for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD CONSTRAINT `S_ID_fr` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`);

--
-- Constraints for table `student_field_of_interest`
--
ALTER TABLE `student_field_of_interest`
  ADD CONSTRAINT `S_ID_interest_fr` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`);

--
-- Constraints for table `student_hobbies`
--
ALTER TABLE `student_hobbies`
  ADD CONSTRAINT `S_ID_hobbies_fr` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
