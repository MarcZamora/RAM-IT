-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 04, 2023 at 04:09 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramit`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pstion` varchar(25) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `pswd`, `fname`, `mname`, `lname`, `pstion`, `filename`) VALUES
(1, 'Supervisor@supervisor.apc.edu.ph', '123', 'Admin', 'S.', 'Supervisor', 'supervisor', '1.png\r\n'),
(2, 'itroexample1@itro.apc.edu.ph', '321', 'Example', 'E.', 'ITRO', 'it', '2.png\r\n'),
(3, 'itroexample2@itro.apc.edu.ph', '321', 'ITRO2', 'E.', 'EXAMPLE', 'it', '3.png'),
(2020141242, 'ilflores@student.apc.edu.ph', 'wew', 'Ivan', 'L.', 'Flores', 'student', '2020141242.png\r\n'),
(2020141361, 'mezamora@student.apc.edu.ph', 'wews', 'Marc', 'Espina', 'Zamora', 'student', '2020141361.png');

-- --------------------------------------------------------

--
-- Table structure for table `cbr`
--

DROP TABLE IF EXISTS `cbr`;
CREATE TABLE IF NOT EXISTS `cbr` (
  `id` int NOT NULL AUTO_INCREMENT,
  `queries` varchar(500) NOT NULL,
  `replies` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cbr`
--

INSERT INTO `cbr` (`id`, `queries`, `replies`) VALUES
(1, 'hi | HI | hello | helo | hy | hey', 'Hello there!'),
(2, 'what is your name | what is your name?', 'I don\'t have a name...'),
(3, 'Rock | rock | ROCK | bato | Bato | BATO', 'Paper'),
(4, 'Paper | paper | PAPER | papel | PAPEL | Papel', 'Scissors'),
(5, 'scissors | Scissors | SCISSORS | scissor | Scissor | SCISSOR | gunting | GUNTING | Gunting', 'Rock'),
(6, '1 | one | uno | isa', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a class = \"link\" href=\"http://localhost/ram-it/tadd.php\"> here... </a>'),
(7, '2 | two | dalawa | pangalawa', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a class = \"link\" href=\"http://localhost/ramit/tadd.php\"> here... </a>'),
(8, '3 | three | tatlo | pangatlo', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a class = \"link\" href=\"http://localhost/ramit/tadd.php\"> here... </a>'),
(9, '4 | apat | pangapat | pang-apat', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a class = \"link\" href=\"http://localhost/ramit/tadd.php\"> here... </a>'),
(10, 'goodbye | bye bye | bye', 'Goodbye and Thank you.\r\nHave a nice day!');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `tid` int NOT NULL,
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `dtm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`tid`, `id`, `name`, `position`, `msg`, `dtm`) VALUES
(1, 1, 'Admin Supervisor', 'supervisor', 'hello', '2023-03-05 00:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `tid` int NOT NULL AUTO_INCREMENT,
  `iid` int NOT NULL,
  `iname` varchar(100) NOT NULL,
  `ipstion` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `inquiry` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `itype` varchar(50) NOT NULL,
  `fdes` text NOT NULL,
  `stat` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `priority` int NOT NULL,
  `severity` int NOT NULL,
  `filename` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `assignid` int NOT NULL,
  `aemail` varchar(255) NOT NULL,
  `aname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `apstion` varchar(10) NOT NULL,
  `dt` datetime NOT NULL,
  `dta` datetime NOT NULL,
  `notifstus` int NOT NULL,
  `notifstum` text NOT NULL,
  `notifits` int NOT NULL,
  `notifitm` text NOT NULL,
  `notifdts` datetime NOT NULL,
  `notifdti` datetime NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tid`, `iid`, `iname`, `ipstion`, `email`, `img`, `inquiry`, `itype`, `fdes`, `stat`, `priority`, `severity`, `filename`, `assignid`, `aemail`, `aname`, `apstion`, `dt`, `dta`, `notifstus`, `notifstum`, `notifits`, `notifitm`, `notifdts`, `notifdti`) VALUES
(1, 2, 'Example E. ITRO', 'it', 'itroexample@itro.apc.edu.ph', '2.png\r\n', 'I have with a problem with the camera i borrowed.', 'hardware', 'The camera has a broken led', 'open', 1, 0, '', 3, 'itroexample2@itro.apc.edu.ph', 'ITRO2 E. EXAMPLE', 'it', '2023-03-04 23:51:33', '2023-03-04 23:54:58', 0, 'Admin messaged in ticket# 1', 0, 'You are assigned to the ticket# 1', '2023-03-05 00:06:16', '2023-03-05 00:06:16'),
(2, 1, 'Admin S. Supervisor', 'supervisor', 'supervisor@supervisor.apc.edu.ph', '1.png\r\n', 'Laptop room 214', 'hardware', 'Projector not working', 'open', 5, 0, '', 2, 'itroexample1@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-03-04 23:59:23', '2023-03-05 00:00:16', 0, 'The ticket# 2 has a new ITRO specialist assigned', 0, 'You are assigned to the ticket# 2', '2023-03-05 00:00:16', '2023-03-05 00:00:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
