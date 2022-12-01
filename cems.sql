-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 03:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET TIME_ZONE = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cems`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `EVENTS` (
  `EVENT_ID` INT(11) NOT NULL,
  `EVENT_TITLE` VARCHAR(50) NOT NULL,
  `EVENT_PRICE` INT(11) DEFAULT NULL,
  `PARTICIPENTS` INT(100) DEFAULT 0,
  `IMG_LINK` TEXT DEFAULT NULL,
  `TYPE_ID` INT(11) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `events`
--

INSERT INTO `EVENTS` (
  `EVENT_ID`,
  `EVENT_TITLE`,
  `EVENT_PRICE`,
  `PARTICIPENTS`,
  `IMG_LINK`,
  `TYPE_ID`
) VALUES (
  1,
  'Cryptohunt',
  100,
  0,
  'images/crypto.png',
  1
),
(
  2,
  'Search-it',
  50,
  2,
  'images/cs03.jpg',
  1
),
(
  3,
  'Technical-Quiz',
  50,
  2,
  'images/quiz.png',
  1
),
(
  4,
  'Competitive-Coding',
  50,
  1,
  'images/coding.jpg',
  1
),
(
  5,
  'Pubg',
  50,
  1,
  'images/pubg.jpg',
  2
),
(
  6,
  'Counter-Strike',
  100,
  1,
  'images/counter.jpg\r\n',
  2
),
(
  7,
  'Fashion-Show',
  200,
  1,
  'images/onstage.jpg',
  3
),
(
  8,
  'Dance',
  100,
  0,
  'images/dance.jpg',
  3
),
(
  9,
  'Singing',
  50,
  0,
  'images/sing.jpg',
  3
),
(
  10,
  'Svit-Idol',
  100,
  0,
  'images/idol.jpg',
  3
),
(
  11,
  'Cooking-Without-Fire',
  50,
  0,
  'images/cook.jpg',
  4
),
(
  12,
  'Short-Movie',
  200,
  0,
  'images/offstage.jpg',
  4
),
(
  13,
  'Mehandi',
  100,
  0,
  'image/mehandi.jpg',
  4
),
(
  14,
  'Rangoli',
  50,
  0,
  'images/cs03.jpg',
  4
);

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `EVENT_INFO` (
  `EVENT_ID` INT(10) NOT NULL,
  `DATE` DATE DEFAULT NULL,
  `TIME` VARCHAR(20) NOT NULL,
  `LOCATION` VARCHAR(300) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `event_info`
--

INSERT INTO `EVENT_INFO` (
  `EVENT_ID`,
  `DATE`,
  `TIME`,
  `LOCATION`
) VALUES (
  1,
  '2022-11-16',
  '3.00pm',
  '135 Room'
),
(
  2,
  '2022-11-16',
  '1.00pm',
  '020 Lab'
),
(
  3,
  '2022-11-16',
  '11.00am',
  '136 Room'
),
(
  4,
  '2022-11-16',
  '9.30am',
  '020 Lab'
),
(
  5,
  '2022-10-17',
  '10.00am',
  '121 Lab'
),
(
  6,
  '2022-10-17',
  '11.00am',
  '122 Lab'
),
(
  7,
  '2022-10-17',
  '9.30pm',
  'ON Stage'
),
(
  8,
  '2022-10-17',
  '7.00pm',
  'ON Stage'
),
(
  9,
  '2022-10-17',
  '5.00pm',
  'ON Stage'
),
(
  10,
  '2022-10-17',
  '6.00pm',
  'ON Stage'
),
(
  11,
  '2022-10-16',
  '10.30am',
  '123 Room'
),
(
  12,
  '2022-10-16',
  '10.00am',
  '021 Lab'
),
(
  13,
  '2022-11-12',
  '3pm',
  '021 lab'
),
(
  14,
  '2022-11-13',
  '2.00pm',
  'Quandrangle'
);

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `EVENT_TYPE` (
  `TYPE_ID` INT(10) NOT NULL,
  `TYPE_TITLE` TEXT NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `event_type`
--

INSERT INTO `EVENT_TYPE` (
  `TYPE_ID`,
  `TYPE_TITLE`
) VALUES (
  1,
  'Technical Events'
),
(
  2,
  'Gaming Events'
),
(
  3,
  'On Stage Events'
),
(
  4,
  'Off Stage Events'
);

-- --------------------------------------------------------

--
-- Table structure for table `participent`
--

CREATE TABLE `PARTICIPENT` (
  `USN` VARCHAR(20) NOT NULL,
  `NAME` VARCHAR(100) NOT NULL,
  `BRANCH` VARCHAR(11) NOT NULL,
  `SEM` INT(11) NOT NULL,
  `EMAIL` VARCHAR(300) NOT NULL,
  `PHONE` VARCHAR(12) NOT NULL,
  `COLLEGE` VARCHAR(20) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `participent`
--

INSERT INTO `PARTICIPENT` (
  `USN`,
  `NAME`,
  `BRANCH`,
  `SEM`,
  `EMAIL`,
  `PHONE`,
  `COLLEGE`
) VALUES (
  '1VA17CS005',
  'Anu',
  'CSE',
  5,
  'annapoornaba@gmail.com',
  '8123300011',
  'svit'
),
(
  '1VA17CS012',
  'BHAVANA',
  'cse',
  5,
  'BHAVANA@GMAIL.COM',
  '9934736623',
  'Svit'
),
(
  '1VA17CS022',
  'Kavya',
  'cse',
  5,
  'Kavya@gmail.com',
  '7888387323',
  'svit'
),
(
  '1VA17CS025',
  'Mythri',
  'ISE',
  5,
  'mythri@saividya.ac.in',
  '8998848488',
  'svit'
),
(
  '1VA17CS034',
  'Prajwal',
  'cse',
  5,
  'prajwal@gmail.com',
  '9858787438',
  'svit'
),
(
  '1VA17IS045',
  'Prathiksha',
  'ISE',
  5,
  'prathi@gmail.com',
  '7897854345',
  'svit'
);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `REGISTERED` (
  `RID` INT(11) NOT NULL,
  `USN` VARCHAR(20) DEFAULT NULL,
  `EVENT_ID` INT(11) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=LATIN1;

--
-- Dumping data for table `registered`
--

INSERT INTO `REGISTERED` (
  `RID`,
  `USN`,
  `EVENT_ID`
) VALUES (
  1,
  '1VA17CS005',
  2
),
(
  2,
  '1VA17CS012',
  4
),
(
  3,
  '1VA17CS034',
  2
),
(
  4,
  '1VA17CS005',
  3
),
(
  5,
  '1VA17CS012',
  3
),
(
  6,
  '1VA17CS012',
  5
),
(
  8,
  '1VA17CS005',
  6
),
(
  10,
  '1VA17CS034',
  7
);

--
-- Triggers `registered`
--
DELIMITER $$

CREATE TRIGGER `COUNT` AFTER
  INSERT ON `REGISTERED` FOR EACH ROW
    UPDATE EVENTS SET EVENTS.PARTICIPENTS=EVENTS.PARTICIPENTS+1 WHERE EVENTS.EVENT_ID=NEW.EVENT_ID $$ DELIMITER;
 -- --------------------------------------------------------
 --
 -- Table structure for table `staff_coordinator`
 --
    CREATE TABLE `STAFF_COORDINATOR` ( `STID` INT(11) NOT NULL, `NAME` VARCHAR(100) NOT NULL, `PHONE` VARCHAR(10) DEFAULT NULL, `EVENT_ID` INT(11) DEFAULT NULL ) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
 --
 -- Dumping data for table `staff_coordinator`
 --
      INSERT INTO `STAFF_COORDINATOR` (`STID`, `NAME`, `PHONE`, `EVENT_ID`) VALUES (1, 'Mamatha.s', '9956436610', 1), (2, 'Mamatha', '9956436123', 2), (3, 'Suparna.A', '9956436456', 3), (4, 'Geetha', '9956436789', 4), (5, 'Radha', '9956436101', 5), (6, 'Usha.D.R', '9123436610', 6), (7, 'Deeksha.G', '9456436610', 7), (8, 'Deeksha.Patgar', '9789436610', 8), (9, 'Shubha Naik', '9956412310', 9), (10, 'Sairaj Patgar', '9956445610', 10), (11, 'Reshma Hittalmakhi', '9956473510', 11), (12, 'Annanya.A.G', '9955636610', 12), (13, 'Sushma', '8948476464', 13), (14, 'Bhavya', '9876543210', 14);
 -- --------------------------------------------------------
 --
 -- Table structure for table `student_coordinator`
 --
      CREATE TABLE `STUDENT_COORDINATOR` ( `SID` INT(11) NOT NULL, `ST_NAME` VARCHAR(100) NOT NULL, `PHONE` VARCHAR(10) DEFAULT NULL, `EVENT_ID` INT(11) DEFAULT NULL ) ENGINE=INNODB DEFAULT CHARSET=LATIN1;
 --
 -- Dumping data for table `student_coordinator`
 --
        INSERT INTO `STUDENT_COORDINATOR` (`SID`, `ST_NAME`, `PHONE`, `EVENT_ID`) VALUES (1, 'Prajwal Srinivas', '6956436610', 1), (2, 'Rakesh Mariyappa', '7956436123', 2), (3, 'Arjun.A', '8956436456', 3), (4, 'Sanjana', '6956436789', 4), (5, 'NIkhil Bhat', '7956436101', 5), (6, 'Pruthvi P', '8123436610', 6), (7, 'Anshuman.A.N', '6456436610', 7), (8, 'Abhinandhan.A', '7789436610', 8), (9, 'Suraj Upadhya', '7956412310', 9), (10, 'Imran Khalil Khan', '7956445610', 10), (11, 'Mythri', '6956473510', 11), (12, 'Pratyush Mishra', '8955636610', 12), (13, 'Kavya', '8994874384', 13), (14, 'Rishitha', NULL, 14);
 --
 -- Indexes for dumped tables
 --
 --
 -- Indexes for table `events`
 --
        ALTER TABLE `EVENTS` ADD PRIMARY KEY (`EVENT_ID`);
 --
 -- Indexes for table `event_info`
 --
        ALTER TABLE `EVENT_INFO` ADD PRIMARY KEY (`EVENT_ID`);
 --
 -- Indexes for table `event_type`
 --
        ALTER TABLE `EVENT_TYPE` ADD PRIMARY KEY (`TYPE_ID`);
 --
 -- Indexes for table `participent`
 --
        ALTER TABLE `PARTICIPENT` ADD PRIMARY KEY (`USN`);
 --
 -- Indexes for table `registered`
 --
        ALTER TABLE `REGISTERED` ADD PRIMARY KEY (`RID`);
 --
 -- Indexes for table `staff_coordinator`
 --
        ALTER TABLE `STAFF_COORDINATOR` ADD PRIMARY KEY (`STID`);
 --
 -- Indexes for table `student_coordinator`
 --
        ALTER TABLE `STUDENT_COORDINATOR` ADD PRIMARY KEY (`SID`);
 --
 -- AUTO_INCREMENT for dumped tables
 --
 --
 -- AUTO_INCREMENT for table `event_info`
 --
        ALTER TABLE `EVENT_INFO` MODIFY `EVENT_ID` INT(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
 --
 -- AUTO_INCREMENT for table `registered`
 --
        ALTER TABLE `REGISTERED` MODIFY `RID` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
 --
 -- AUTO_INCREMENT for table `staff_coordinator`
 --
        ALTER TABLE `STAFF_COORDINATOR` MODIFY `STID` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
 --
 -- AUTO_INCREMENT for table `student_coordinator`
 --
        ALTER TABLE `STUDENT_COORDINATOR` MODIFY `SID` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
        COMMIT;
 /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
 /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
 /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;