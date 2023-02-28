-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 28, 2023 at 03:32 PM
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
(1, 'Supervisor@supervisor.apc.edu.ph', '123', 'Admin', 'S.', 'Supervisor', 'supervisor', 'download.png\r\n'),
(2, 'itroexample@itro.apc.edu.ph', '321', 'Example', 'E.', 'ITRO', 'it', 'download.png\r\n'),
(2020141242, 'ilflores@student.apc.edu.ph', 'wew', 'Ivan', 'L.', 'Flores', 'student', 'download.png\r\n'),
(2020141361, 'mezamora@student.apc.edu.ph', 'wews', 'Marc', 'Espina', 'Zamora', 'student', 'download.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(8, '3 | three | tatlo | pangatlo', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a class = \"link\" href=\"http://localhost/ramit/tadd.php\"> here... </a>');

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
(2, 2, 'Example ITRO', 'it', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non elit sit amet velit blandit sodales. Etiam laoreet volutpat metus, eu egestas felis interdum et. Donec luctus lorem non mauris tempor, vel ultricies massa luctus. Nullam iaculis sagittis nisl non posuere. Nunc mollis consequat ex hendrerit dapibus. Donec sed magna venenatis, porta eros eget, commodo neque. Vivamus ut placerat lacus. Donec pellentesque diam sit amet libero convallis, et sollicitudin dui pretium.  Duis aliquam tortor sed dolor commodo cursus. Duis quis dapibus metus. Morbi at elementum turpis. Curabitur nibh urna, venenatis a eleifend scelerisque, viverra in nibh. Curabitur aliquet justo leo, quis viverra ipsum efficitur sit amet. In sed efficitur magna. Sed dictum ante at convallis pharetra. In viverra at justo vitae pulvinar. Integer rutrum elementum sem, non auctor ipsum scelerisque vel. Vestibulum pharetra fermentum lobortis. Sed non condimentum diam, ac fermentum nisi. Nullam fringilla quam vitae erat pulvinar facilisis. Fus', '2023-02-28 23:21:42');

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
(1, 2020141361, 'Marc Espina Zamora', 'student', 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'others', 'wewew', 'open', 2, 0, 'received_567813555149542.jpg', 2, 'itroexample@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-02-28 23:16:07', '2023-02-28 23:16:57', 0, 'The ticket# 1 has a new ITRO specialist assigned', 0, 'You are assigned to the ticket# 1', '2023-02-28 23:16:57', '2023-02-28 23:16:57'),
(2, 1, 'Admin S. Supervisor', 'supervisor', 'supervisor@supervisor.apc.edu.ph', 'download.png\r\n', 'wewe', 'hardware', 'wewewew', 'open', 1, 0, '', 2, 'itroexample@itro.apc.edu.ph', 'Example E. ITRO', 'it', '2023-02-28 23:19:03', '2023-02-28 23:19:23', 0, 'New message in ticket# 2', 1, 'You are assigned to the ticket# 2', '2023-02-28 23:21:42', '2023-02-28 23:21:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
