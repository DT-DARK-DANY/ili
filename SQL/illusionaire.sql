-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 02:49 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `illusionaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`username`, `password`) VALUES
('X.damo_dany.X', 'qweasd123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `full_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`full_name`, `Email`, `Message`) VALUES
('rana ehab', 'ranaehab311@gmail.com', 'جاضض'),
('mohamed alaa', 'mohamed.almarakmy@gmail.com', 'mohamed alaa is a good person'),
('moamed zaki', 'omom20102000@gmail.com', 'نووو بوليييتووو'),
('waheed', 'm7mdw7ed2500@gmail.com', 'صلح لابك يا داني بطل علوقية');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ID` int(11) NOT NULL,
  `EVENT_NAME` varchar(255) NOT NULL,
  `Comapny_NAME` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `multimedia` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ID`, `EVENT_NAME`, `Comapny_NAME`, `description`, `multimedia`) VALUES
(1, 'IEEE', 'MSA University', 'The Institute of Electrical and Electronics Engineers is a 501 professional association for electronic engineering and electrical engineering with its corporate office in New York City and its operations center in Piscataway, New Jersey', 'party media/1IEEE/IEEE.png'),
(2, 'ICPC', 'Huawei', 'The International Collegiate Programming Contest is an algorithmic programming contest for college students. Teams of three, representing their university, work to solve the most real-world problems, fostering collaboration, creativity, innovation, and the ability to perform under pressure. Through training and competition, teams challenge each other to raise the bar on the possible.', 'party media\\2ICPC\\ICPC.png'),
(3, 'HACKATHON HELWAN', 'Helwan University', 'Helwan University Hackathon Together Against COVID-19 Helwan University Hackathon is a scientific event which aims to bring all minds together with different skill sets from different disciplines to collaborate for developing innovative and applied solutions/concepts that target specific COVID-19 associated problems/challenges', 'party media\\3HACKATHON HELWAN\\Hackathon_helwan.png'),
(4, 'UGRF', 'Nile University', 'The forum includes the provision of scientific research from the students for evaluation and publishing, in addition to research projects for students of different academic years and graduation projects for final year students. A Journey Starts From 5 Years, let\'s go back with memory to 10 Editions of \"UGRF\". Watch on.', 'party media\\4UGRF\\NU_Research.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`Email`) VALUES
('ranaehab311@gmail.com'),
('mohamed.almarakmy@gmail.com'),
('omom20102000@gmail.com'),
('m7mdw7ed2500@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
