-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 10:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `draft`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE `draft` (
  `project_id` int(3) NOT NULL,
  `project_title` varchar(30) NOT NULL,
  `project_description` varchar(100) NOT NULL,
  `subtask1` varchar(20) NOT NULL,
  `subtask1_description` varchar(50) NOT NULL,
  `subtask1_actions` varchar(50) NOT NULL,
  `subtask2` varchar(20) NOT NULL,
  `subtask2_description` varchar(50) NOT NULL,
  `subtask2_actions` varchar(50) NOT NULL,
  `subtask3` varchar(20) NOT NULL,
  `subtask3_description` varchar(50) NOT NULL,
  `subtask3_actions` varchar(50) NOT NULL,
  `subtask4` varchar(20) NOT NULL,
  `subtask4_description` varchar(50) NOT NULL,
  `subtask4_actions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`project_id`, `project_title`, `project_description`, `subtask1`, `subtask1_description`, `subtask1_actions`, `subtask2`, `subtask2_description`, `subtask2_actions`, `subtask3`, `subtask3_description`, `subtask3_actions`, `subtask4`, `subtask4_description`, `subtask4_actions`) VALUES
(120, 'how', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(121, 'Construction 001', 'this is a project that mainly deals with anything to do with bulding ', 'sub', 'vowel 3', 'action 1', 'seb', 'vowel 2', 'action 2', 'sib', 'vowel 3', 'action 3', 'sob', 'vowel 4', 'action 4'),
(122, 'Construction 001', 'this is a project that mainly deals with anything to do with bulding ', 'sub', 'vowel 3', 'action 1', 'seb', 'vowel 2', 'action 2', 'sib', 'vowel 3', 'action 3', 'sob', 'vowel 4', 'action 4'),
(123, 'EVANS KIRUI', 'An IT student in the Technical University of Kenya', 'web dev', 'design', 'coding websites', 'net config', 'ngugi', 'creating networks', 'net design', 'mr elizabeth', 'designing networks', 'digital electronics', 'mr owira', 'making integrated circuits'),
(124, 'AFTERPARTY', 'A Group made for pure practise of info.tech concepts', 'iot', 'connecting devices via the internet', 'make sensors and actuators communicate', 'cybersec', 'ethical and unethical hacking', 'act as security or as a threat to organisational d', 'android', 'mobile app development', 'designing apps', 'web dev', 'web app development', 'making web interfaces and databases'),
(125, 'title', 'project version 2 enables users to be able to know how people can use their time properly without fa', 'NAMOO', 'a very good subtask', 'go to the room', 'subta', 'tangible things like cars and buildings', 'give your view about normal artificial things ', 'sib', 'mr elizabeth', 'give your view about human emotions', 'sob', 'vowel 4', 'making web interfaces and databases');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `draft`
--
ALTER TABLE `draft`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `draft`
--
ALTER TABLE `draft`
  MODIFY `project_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
