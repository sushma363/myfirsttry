-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2015 at 12:19 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asian`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` varchar(10000) NOT NULL,
  `Answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Message`, `Answer`) VALUES
('neeta ', 'neeta.rana@gmail.com', 'asahdkajshdksajhaskjdhakjdhsakjh', 12),
('subarna', 'subarna.tuladhar7@gmail.com', 'My son is reading here. It is a nice college', 12),
('shiva', 'shiva@gmail.com', 'kjshdakjsgdkjasdhajsh', 12),
('surya', 'surya@gmail.com', 'agsjaksgdhjgsaksaj', 12);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
`ID` int(11) NOT NULL,
  `Pathimg` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`ID`, `Pathimg`) VALUES
(1, 'C:xampp\\htdocs\\Asian\\images\\anil.jpg'),
(2, 'C:\\xampp\\htdocs\\Asian\\images\\chairman.jpg'),
(3, 'C:\\xampp\\htdocs\\Asian\\images\\deepak.jpg'),
(4, 'C:\\xampp\\htdocs\\Asian\\images\\dhurba.jpg'),
(5, 'C:\\xampp\\htdocs\\Asian\\images\\fatta.jpg'),
(6, 'C:\\xampp\\htdocs\\Asian\\images\\jitendra.jpg'),
(7, 'C:\\xampp\\htdocs\\Asian\\images\\kamal.jpg'),
(8, 'C:\\xampp\\htdocs\\Asian\\images\\shankar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`MID` int(11) NOT NULL,
  `Message` varchar(20000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MID`, `Message`) VALUES
(2, '<p><strong>sashaksjdhaskjdhas</strong></p>'),
(3, '<h1><em><span style="text-decoration: underline;">sabin</span></em></h1>'),
(4, '<p><em><span style="text-decoration: underline;"><strong>qjgshaja</strong></span></em>s</p>'),
(5, '<p><span style="color: #800000;">kdsakdjaksdjaslkdjasd</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Conpassword` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `Username`, `Email`, `Password`, `Conpassword`) VALUES
(1, 'Sujan', 'sujan.tuladhar2013@gmail.com', 'sujanmt', 'sujanmt'),
(2, 'Sabin', 'sabin123@gmail.com', 'smt1234', 'smt1234'),
(4, 'devik12', 'devikbalami12@gmail.com', 'qweqweqwe', 'qweqweqwe'),
(5, 'kapil', 'kapil2313@gmail.com', 'kapil', 'kapil'),
(6, 'subarna', 'subarna2013@gmail.com', 'tuladhar', 'tuladhar'),
(7, 'neeta', 'neeta.rana@gmail.com', 'neeta', 'neeta'),
(8, 'amitratgainya', 'ratgainya87@gmail.com', 'amit', 'amit'),
(9, 'surya', 'surya@gmail.com', 'surya', 'surya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
