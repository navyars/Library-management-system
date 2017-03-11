-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2016 at 02:21 PM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE IF NOT EXISTS `Books` (
`Book_ID` int(11) NOT NULL,
  `Book_Name` varchar(50) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Topic` varchar(50) NOT NULL,
  `Frequency` int(11) NOT NULL,
  `Number_Total` int(11) NOT NULL DEFAULT '0',
  `Number_Available` int(11) NOT NULL DEFAULT '0',
  `Number_Issued` int(11) NOT NULL DEFAULT '0',
  `Number_Requested` int(11) NOT NULL DEFAULT '0',
  `Avg_Rating` double NOT NULL,
  `nRated` int(11) NOT NULL,
  `Author_Name` varchar(30) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `imglink` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`Book_ID`, `Book_Name`, `Department`, `Topic`, `Frequency`, `Number_Total`, `Number_Available`, `Number_Issued`, `Number_Requested`, `Avg_Rating`, `nRated`, `Author_Name`, `Description`, `imglink`) VALUES
(1, 'Modern Physics', 'Physics', 'Modern Physics', 10, 8, 2, 0, 5, 9, 3, 'Kenneth Krane', 'This is a much awaited revision of a modern classic that covers all the major topics in modern physics, including relativity, quantum physics, and their applications. Krane provides a balanced presentation of both the historical development of all major modern physics concepts and the experimental evidence supporting the theory.', 'http://pxhst.co/avaxhome/d1/ba/002ebad1_medium.jpeg'),
(2, 'Concepts of Physics', 'Physics', 'Concepts of Physics', 5, 6, 4, 3, 3, 7, 3, 'HC Verma', 'H C Verma s Concepts Of Physics is an all-inclusive book, which serves to detail out the ABC of physics in an intricate manner making it an ideal book for not only the higher secondary students, but also for those who are preparing for their competitive examinations.', 'https://images-na.ssl-images-amazon.com/images/I/41nz2bjLk7L._AC_UL320_SR248,320_.jpg'),
(3, 'Organic Chemistry', 'Chemistry', 'Organic Chemistry', 14, 1, 4, 0, 5, 4, 2, 'O P Tandon', 'A really good book for organic chemistry', 'http://budaniyabookshop.com/product_img/16_OPT.jpg'),
(4, 'Dana''s Textbook of Minerology', 'Mining', 'Minerology', 3, 1, 1, 0, 0, 4, 1, 'Ford W E', 'Reference book', 'http://ecx.images-amazon.com/images/I/51nkqVUNFtL._SX373_BO1,204,203,200_.jpg'),
(8, 'Mathematics for IIT-JEE', 'Mathematics', 'Trigonometry', 8, 5, 4, 0, 1, 0, 0, 'G S N Murthi', 'It is a very helpful book for aspirants of IIT-JEE. The concepts of Trigonometry, Vector Algebra, Probablity are explained beautifully', 'http://img8.flixcart.com/image/book/8/3/8/mathematics-for-iit-jee-trigonometry-vector-algebra-probability-vol-2-275x275-imadcykz5fumpghj.jpeg'),
(9, 'Data Communication and Networking', 'Computer', 'Computer Networking', 17, 7, 7, 0, 0, 0, 0, 'B A Forouzan', 'One of the best guide to Computer networks', 'http://www.mhhe.com/engcs/compsci/forouzan/Forouzan4e07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Book_History`
--

CREATE TABLE IF NOT EXISTS `Book_History` (
  `Book_ID` int(11) NOT NULL,
  `Copy_ID` int(11) NOT NULL,
  `Account_ID` int(11) NOT NULL,
  `Issue_Date` date NOT NULL,
  `Return_Date` date NOT NULL,
  `Fine_incurred` double NOT NULL DEFAULT '0',
  `Fine_Paid` double NOT NULL,
  `Fine_Due` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Copies`
--

CREATE TABLE IF NOT EXISTS `Copies` (
  `Book_ID` int(11) NOT NULL,
`Copy_ID` int(11) NOT NULL,
  `Account_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=302 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Copies`
--

INSERT INTO `Copies` (`Book_ID`, `Copy_ID`, `Account_ID`) VALUES
(1, 101, 1),
(2, 201, 6),
(3, 301, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Copy`
--

CREATE TABLE IF NOT EXISTS `Copy` (
  `Book_ID` int(11) NOT NULL,
`Copy_ID` int(11) NOT NULL,
  `Account_ID` int(11) NOT NULL,
  `Issue_Date` date NOT NULL,
  `Due_Date` date NOT NULL,
  `Fine` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Copy`
--

INSERT INTO `Copy` (`Book_ID`, `Copy_ID`, `Account_ID`, `Issue_Date`, `Due_Date`, `Fine`) VALUES
(2, 4, 6, '2016-10-28', '2016-11-16', 0),
(1, 9, 2, '2016-10-05', '2016-11-01', 6),
(2, 10, 8, '2016-11-01', '2016-11-03', 4),
(2, 12, 1, '2016-10-15', '2016-11-03', 4),
(2, 13, 5, '2016-09-07', '2016-11-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Ratings`
--

CREATE TABLE IF NOT EXISTS `Ratings` (
  `Book_ID` int(11) NOT NULL,
  `Account_ID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ratings`
--

INSERT INTO `Ratings` (`Book_ID`, `Account_ID`, `Rating`, `Comments`) VALUES
(1, 1, 4, ''),
(2, 2, 3, ''),
(3, 6, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `Recommendations`
--

CREATE TABLE IF NOT EXISTS `Recommendations` (
  `Account_ID` int(11) NOT NULL,
  `R_Book_Name` varchar(50) NOT NULL,
  `R_Book_Author` varchar(50) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Topic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Recommendations`
--

INSERT INTO `Recommendations` (`Account_ID`, `R_Book_Name`, `R_Book_Author`, `Department`, `Topic`) VALUES
(1, 'Engineering Mathematics', 'Maneesh Goel', 'Mathematics', 'Mathematics'),
(2, 'Fluid Mechanics', 'D C Pandey', 'Physics', 'Fluid Mechanics'),
(6, 'Data Communication', 'Forouzan', 'Computer Science', 'Computer Networks');

-- --------------------------------------------------------

--
-- Table structure for table `Requests`
--

CREATE TABLE IF NOT EXISTS `Requests` (
`Primary_ID` int(11) NOT NULL,
  `Account_ID` int(11) NOT NULL,
  `Book_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Requests`
--

INSERT INTO `Requests` (`Primary_ID`, `Account_ID`, `Book_ID`) VALUES
(4, 6, 2),
(6, 1, 2),
(7, 1, 1),
(11, 5, 3),
(12, 5, 1),
(13, 2, 3),
(14, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
`Account_ID` int(11) NOT NULL,
  `College_ID` varchar(10) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Middle_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Phone_Number` char(10) NOT NULL,
  `Account_Type` char(1) NOT NULL,
  `Number_Issued` int(11) NOT NULL DEFAULT '0',
  `Number_Requested` int(11) NOT NULL DEFAULT '0',
  `DOB` date NOT NULL,
  `Fine_Total` double NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`Account_ID`, `College_ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Phone_Number`, `Account_Type`, `Number_Issued`, `Number_Requested`, `DOB`, `Fine_Total`, `Email`, `Password`, `Time`) VALUES
(1, '1001', 'Admin', NULL, '', '', 'A', 0, 114, '1980-09-07', 0, 'libraryadmin@gmail.com', 'library', '2016-09-21 06:48:02'),
(2, '', 'Ram', NULL, '', '', 'T', 0, 3, '1985-10-12', 0, 'ram@gmail.com', 'ram', '2016-09-25 04:59:16'),
(5, '14CO142', 'Sheetal', '', 'Shalini', '8970832326', 'S', 0, 6, '1996-09-12', 0, 'abc@gmail.com', 'abcABC123', '2016-10-02 13:00:28'),
(6, '14CO192', 'Jon', '', 'A', '9876546543', 'T', 0, 13, '1996-07-12', 0, 't1@gmail.com', 't2', '2016-10-03 05:28:12'),
(7, '14co126', 'Navya', '', 'S', '8762317650', 'S', 0, 0, '1996-08-02', 0, 'navy8296@gmail.com', 'navya', '2016-10-03 10:52:22'),
(12, '14CO204', 'Paggu', '', 'Paggi', '9875643219', 'S', 0, 0, '0000-00-00', 0, 'paggupagga@gmail.com', 'isha', '2016-11-05 13:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `User_Security`
--

CREATE TABLE IF NOT EXISTS `User_Security` (
  `Account_ID` int(11) NOT NULL,
  `Email_ID` varchar(30) NOT NULL,
  `Current_Password` varchar(30) NOT NULL,
  `Ques1` varchar(100) NOT NULL,
  `Ques2` varchar(100) NOT NULL,
  `Ques3` varchar(100) NOT NULL,
  `Ans1` varchar(100) NOT NULL,
  `Ans2` varchar(100) NOT NULL,
  `Ans3` varchar(100) NOT NULL,
  `Random_Password` varchar(30) NOT NULL,
  `Last_Update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Security`
--

INSERT INTO `User_Security` (`Account_ID`, `Email_ID`, `Current_Password`, `Ques1`, `Ques2`, `Ques3`, `Ans1`, `Ans2`, `Ans3`, `Random_Password`, `Last_Update`) VALUES
(2, 'ram@gmail.com', 'ram', 'Fav Book', 'Fav Author', 'Pet', 'red', 'dog', 'gulmohar', 'A45opG41Rt', '2016-09-06'),
(5, 'abc@gmail.com', 'bleh', 'Fav Book', 'Fav Author', 'Pet', 'Violet', 'cat', 'coconut', 'abcABC123', '2016-10-03'),
(6, 't1@gmail.com', 't2', 'Fav Book', 'Fav Author', 'Pet', 'Secret Seven', 'Enid Blyton', 'Cat', '1234abc', '2016-11-07'),
(7, 'navy8296@gmail.com', 'navya', 'Fav book', 'Fav Author', 'Pet', 'HP', 'JKR', 'Dog', '123abc', '2016-11-01'),
(12, 'paggupagga@gmail.com', 'isha', 'Fav Book', 'Fav Author', 'Pet', 'Graph Theory', 'John Stefens', 'Elephant', 'tarte', '2016-11-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
 ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `Book_History`
--
ALTER TABLE `Book_History`
 ADD UNIQUE KEY `Book_ID` (`Book_ID`), ADD UNIQUE KEY `Copy_ID` (`Copy_ID`), ADD UNIQUE KEY `Account_ID` (`Account_ID`);

--
-- Indexes for table `Copies`
--
ALTER TABLE `Copies`
 ADD PRIMARY KEY (`Copy_ID`), ADD UNIQUE KEY `Account_ID` (`Account_ID`), ADD KEY `Book_ID_2` (`Book_ID`);

--
-- Indexes for table `Copy`
--
ALTER TABLE `Copy`
 ADD PRIMARY KEY (`Copy_ID`);

--
-- Indexes for table `Ratings`
--
ALTER TABLE `Ratings`
 ADD PRIMARY KEY (`Book_ID`,`Account_ID`), ADD UNIQUE KEY `Book_ID` (`Book_ID`) USING BTREE, ADD UNIQUE KEY `Account_ID` (`Account_ID`);

--
-- Indexes for table `Recommendations`
--
ALTER TABLE `Recommendations`
 ADD UNIQUE KEY `Account_ID` (`Account_ID`);

--
-- Indexes for table `Requests`
--
ALTER TABLE `Requests`
 ADD PRIMARY KEY (`Primary_ID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`Account_ID`), ADD UNIQUE KEY `College_ID` (`College_ID`), ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `User_Security`
--
ALTER TABLE `User_Security`
 ADD PRIMARY KEY (`Account_ID`), ADD UNIQUE KEY `Email_ID` (`Email_ID`), ADD UNIQUE KEY `Account_ID` (`Account_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `Copies`
--
ALTER TABLE `Copies`
MODIFY `Copy_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=302;
--
-- AUTO_INCREMENT for table `Copy`
--
ALTER TABLE `Copy`
MODIFY `Copy_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `Requests`
--
ALTER TABLE `Requests`
MODIFY `Primary_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
MODIFY `Account_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Book_History`
--
ALTER TABLE `Book_History`
ADD CONSTRAINT `FK_AccountID4` FOREIGN KEY (`Account_ID`) REFERENCES `User` (`Account_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `FK_BookID1` FOREIGN KEY (`Book_ID`) REFERENCES `Books` (`Book_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `FK_CopyID1` FOREIGN KEY (`Copy_ID`) REFERENCES `Copies` (`Copy_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `Copies`
--
ALTER TABLE `Copies`
ADD CONSTRAINT `FK_Account` FOREIGN KEY (`Account_ID`) REFERENCES `User` (`Account_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `FK_Books` FOREIGN KEY (`Book_ID`) REFERENCES `Books` (`Book_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Ratings`
--
ALTER TABLE `Ratings`
ADD CONSTRAINT `FK_Account1` FOREIGN KEY (`Account_ID`) REFERENCES `User` (`Account_ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
ADD CONSTRAINT `FK_Books1` FOREIGN KEY (`Book_ID`) REFERENCES `Books` (`Book_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Recommendations`
--
ALTER TABLE `Recommendations`
ADD CONSTRAINT `FK_AccountID3` FOREIGN KEY (`Account_ID`) REFERENCES `User` (`Account_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `User_Security`
--
ALTER TABLE `User_Security`
ADD CONSTRAINT `FK_AccountID5` FOREIGN KEY (`Account_ID`) REFERENCES `User` (`Account_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_EmailID` FOREIGN KEY (`Email_ID`) REFERENCES `User` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
