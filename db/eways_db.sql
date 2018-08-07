-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2018 at 03:39 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eways_db`
--
CREATE DATABASE IF NOT EXISTS `eways_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eways_db`;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_answer`
--

DROP TABLE IF EXISTS `feedback_answer`;
CREATE TABLE IF NOT EXISTS `feedback_answer` (
  `feedbackID` int(11) NOT NULL AUTO_INCREMENT,
  `studentID` int(11) NOT NULL,
  `topicID` int(11) NOT NULL,
  `comment` longtext,
  `date` date NOT NULL,
  `Q1` longtext NOT NULL,
  `Q2` longtext NOT NULL,
  `Q3` longtext,
  `Q4` longtext,
  `Q5` longtext,
  `Q6` longtext,
  `deleted` varchar(3) DEFAULT 'No',
  PRIMARY KEY (`feedbackID`),
  KEY `studentID_idx` (`studentID`),
  KEY `topicID_idx` (`topicID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_answer`
--

INSERT INTO `feedback_answer` (`feedbackID`, `studentID`, `topicID`, `comment`, `date`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `deleted`) VALUES
(8, 1, 1, 'Good morning ', '2018-04-13', 'Yes', '5', 'Inconsistent', '3', 'Somehow', 'Somehow', 'No'),
(10, 1, 1, 'Yeah ', '2018-04-13', 'Yes', '3', 'Consistent', '3', 'Somehow', 'Somehow', 'No'),
(11, 1, 1, 'Jojo', '2018-04-13', 'No', '5', 'Very Consistent', '3', 'Not At All', 'Not At All', 'No'),
(12, 1, 1, 'Kick', '2018-04-13', 'Yes', '4', 'Inconsistent', '3', 'Not At All', 'Yes', 'No'),
(13, 1, 1, 'JESUS', '2018-04-13', 'Yes', '4', 'Very Consistent', '2', 'Somehow', 'Yes', 'No'),
(14, 1, 1, 'Good course', '2018-04-13', 'Yes', '4', 'Consistent', '5', 'Yes', 'Somehow', 'No'),
(15, 1, 1, 'dmngs,mfsd', '2018-04-16', 'Yes', '1', 'Consistent', '3', 'Yes', 'Yes', 'No'),
(16, 1, 2, 'edtiktdgh', '2018-04-16', 'Somehow', '3', 'Inconsistent', '2', 'Not At All', 'Not At All', 'No'),
(17, 1, 2, 'SM', '2018-04-16', 'Yes', '1', 'Consistent', '2', 'Somehow', 'Somehow', 'No'),
(18, 1, 1, 'HELLO WORLD!', '2018-04-17', 'Yes', '4', 'Consistent', '4', 'Somehow', 'Not At All', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_questions`
--

DROP TABLE IF EXISTS `feedback_questions`;
CREATE TABLE IF NOT EXISTS `feedback_questions` (
  `questions_ID` int(11) NOT NULL,
  `topicID` int(11) NOT NULL,
  `Q1` varchar(255) DEFAULT NULL,
  `Q2` varchar(255) DEFAULT NULL,
  `Q3` varchar(255) DEFAULT NULL,
  `Q4` varchar(255) DEFAULT NULL,
  `Q5` varchar(255) DEFAULT NULL,
  `Q6` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`questions_ID`),
  KEY `topicID_idx` (`topicID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_questions`
--

INSERT INTO `feedback_questions` (`questions_ID`, `topicID`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`) VALUES
(1, 1, 'Topic 1', 'Q2 Topic 1', 'Q3 Topic 1', 'Q4 Topic 1', 'Q5 Topic 1', 'Q2 Topic 1'),
(2, 2, 'Topic 2', 'Q2 Topic 2', 'Q3 Topic 2', 'Q4 Topic 2', 'Q5 Topic 2', 'Q6 Topic 2'),
(3, 3, 'Topic 3', 'Q2 Topic 3', 'Q3 Topic 3', 'Q4 Topic 3', 'Q5 Topic 3', 'Q6 Topic 3'),
(4, 4, 'Topic 4', 'Q2 Topic 4', 'Q3 Topic 4', 'Q4 Topic 4', 'Q5 Topic 4', 'Q6 Topic 4'),
(5, 5, 'Topic 5', 'Q2 Topic 5', 'Q3 Topic 5', 'Q4 Topic 5', 'Q5 Topic 5', 'Q6 Topic 5');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `resourceID` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(45) NOT NULL,
  `topicID` int(11) NOT NULL,
  PRIMARY KEY (`resourceID`),
  KEY `topic_ID_idx` (`topicID`),
  KEY `topicID_idx` (`topicID`),
  KEY `topicID_ID_idx` (`topicID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resourceID`, `path`, `topicID`) VALUES
(1, '5', 1),
(2, '2', 2),
(3, '6', 3),
(4, '7', 4),
(5, '10', 5);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffID` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `cellphone` varchar(10) NOT NULL,
  PRIMARY KEY (`staffID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `firstName`, `lastName`, `cellphone`) VALUES
(1, 'Ali', 'Mohammed ', '0632662014'),
(2, 'Siyabonga', 'Jali', '0815247968'),
(3, 'Mandla', 'Graham', '0823652122'),
(4, 'Queeny', 'Qinga', '0621542563'),
(5, 'Jack', 'Mabaso', '1412125658');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `studentID` int(11) NOT NULL AUTO_INCREMENT,
  `studentNo` varchar(10) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `studyArea` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `studentNo`, `firstName`, `lastName`, `studyArea`, `faculty`, `email`, `password`) VALUES
(1, '214658924', 'Elizabeth', 'Sikhwamba', 'Business Economics', 'Business Management', '', ''),
(2, '215101847', 'Fuma', 'Abongile', 'Natural Resource Management', 'Science', '', ''),
(3, '216726778', 'Poswa', 'Khanyisa', 'Law Interdept', 'Law', '', ''),
(4, '217584624', 'Mtiya', 'Anda', 'Public Relations & Com Studies', 'Arts ', '', ''),
(5, '215025571', 'Matiso', 'Nolutando', 'IT', 'Engineering Built Environ & It', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_topic`
--

DROP TABLE IF EXISTS `student_topic`;
CREATE TABLE IF NOT EXISTS `student_topic` (
  `student_topic_ID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `topicID` int(11) NOT NULL,
  PRIMARY KEY (`student_topic_ID`),
  KEY `student_ID_idx` (`studentID`),
  KEY `topicID_topic_idx` (`topicID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_topic`
--

INSERT INTO `student_topic` (`student_topic_ID`, `studentID`, `topicID`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `topicID` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext NOT NULL,
  PRIMARY KEY (`topicID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topicID`, `title`) VALUES
(1, 'Goals Setting'),
(2, 'Stress Management '),
(3, 'Relationships'),
(4, 'Growth'),
(5, 'Academics');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback_answer`
--
ALTER TABLE `feedback_answer`
  ADD CONSTRAINT `studentID` FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `topicID` FOREIGN KEY (`topicID`) REFERENCES `topics` (`topicID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback_questions`
--
ALTER TABLE `feedback_questions`
  ADD CONSTRAINT `topic_ID` FOREIGN KEY (`topicID`) REFERENCES `topics` (`topicID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `topicID_ID` FOREIGN KEY (`topicID`) REFERENCES `topics` (`topicID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_topic`
--
ALTER TABLE `student_topic`
  ADD CONSTRAINT `student_ID` FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `topicID_topic` FOREIGN KEY (`topicID`) REFERENCES `topics` (`topicID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
