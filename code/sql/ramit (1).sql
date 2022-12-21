-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 03:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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

CREATE TABLE `accounts` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pswd` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pstion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `pswd`, `fname`, `mname`, `lname`, `pstion`) VALUES
(1, 'Supervisor@supervisor.apc.edu.ph', '123', 'Admin', 'S.', 'Supervisor', 'supervisor'),
(2, 'itroexample@itro.apc.edu.ph', '321', 'Example', 'E.', 'ITRO', 'it'),
(2020141242, 'ilflores@student.apc.edu.ph', 'wew', 'Ivan', 'L.', 'Flores', 'student'),
(2020141361, 'mezamora@student.apc.edu.ph', 'wews', 'Marc', 'Espina', 'Zamora', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `cbr`
--

CREATE TABLE `cbr` (
  `id` int(11) NOT NULL,
  `queries` varchar(500) NOT NULL,
  `replies` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cbr`
--

INSERT INTO `cbr` (`id`, `queries`, `replies`) VALUES
(1, 'hi | HI | hello | helo | hy | hey', 'Hello there!'),
(2, 'what is your name | what is your name?', 'I don\'t have a name...'),
(3, 'Rock | rock | ROCK | bato | Bato | BATO', 'Paper'),
(4, 'Paper | paper | PAPER | papel | PAPEL | Papel', 'Scissors'),
(5, 'scissors | Scissors | SCISSORS | scissor | Scissor | SCISSOR | gunting | GUNTING | Gunting', 'Rock'),
(6, '1 | one | uno | isa', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a href=\"http://localhost/ramit/tadd.php\"> here... </a>'),
(7, '2 | two | dalawa | pangalawa', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a href=\"http://localhost/ramit/tadd.php\"> here... </a>'),
(8, '3 | three | tatlo | pangatlo', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a href=\"http://localhost/ramit/tadd.php\"> here... </a>');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `tid` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`tid`, `name`, `position`, `msg`) VALUES
(1, 'Admin S. Supervisor', 'supervisor', 'hello'),
(1, 'Marc Espina Zamora', 'student', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tid` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `inquiry` text CHARACTER SET latin1 NOT NULL,
  `stat` varchar(11) CHARACTER SET latin1 NOT NULL,
  `assignid` int(11) NOT NULL,
  `afname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tid`, `iid`, `inquiry`, `stat`, `assignid`, `afname`, `alname`, `dt`) VALUES
(1, 2020141361, 'I need help', 'open', 2, 'ITRO', 'EXAMPLE', '2022-12-20 13:02:55'),
(2, 2020141361, 'i have a problem with my laptop', 'open', 2, 'ITRO', 'EXAMPLE', '2022-12-20 14:46:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cbr`
--
ALTER TABLE `cbr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cbr`
--
ALTER TABLE `cbr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
