-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 07:49 PM
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
  `pstion` varchar(25) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, '1 | one | uno | isa', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a class = \"link\" href=\"http://localhost/ramit/tadd.php\"> here... </a>'),
(7, '2 | two | dalawa | pangalawa', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a class = \"link\" href=\"http://localhost/ramit/tadd.php\"> here... </a>'),
(8, '3 | three | tatlo | pangatlo', 'Sorry at the moment the database is in working progress would you mind go to the ticketing system. So that your problem will be added to our database and increase my knowledge to answer everyone who has a problem with the subject. <a class = \"link\" href=\"http://localhost/ramit/tadd.php\"> here... </a>');

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
(1, 'Admin S. Supervisor', 'supervisor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non elit sit amet velit blandit sodales. Etiam laoreet volutpat metus, eu egestas felis interdum et. Donec luctus lorem non mauris tempor, vel ultricies massa luctus. Nullam iaculis sagittis nisl non posuere. Nunc mollis consequat ex hendrerit dapibus. Donec sed magna venenatis, porta eros eget, commodo neque. Vivamus ut placerat lacus. Donec pellentesque diam sit amet libero convallis, et sollicitudin dui pretium.  Duis aliquam tortor sed dolor commodo cursus. Duis quis dapibus metus. Morbi at elementum turpis. Curabitur nibh urna, venenatis a eleifend scelerisque, viverra in nibh. Curabitur aliquet justo leo, quis viverra ipsum efficitur sit amet. In sed efficitur magna. Sed dictum ante at convallis pharetra. In viverra at justo vitae pulvinar. Integer rutrum elementum sem, non auctor ipsum scelerisque vel. Vestibulum pharetra fermentum lobortis. Sed non condimentum diam, ac fermentum nisi. Nullam fringilla quam vitae erat pulvinar facilisis. Fus'),
(1, 'Example E. ITRO', 'it', 'hello'),
(2, 'Admin S. Supervisor', 'supervisor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non elit sit amet velit blandit sodales. Etiam laoreet volutpat metus, eu egestas felis interdum et. Donec luctus lorem non mauris tempor, vel ultricies massa luctus. Nullam iaculis sagittis nisl non posuere. Nunc mollis consequat ex hendrerit dapibus. Donec sed magna venenatis, porta eros eget, commodo neque. Vivamus ut placerat lacus. Donec pellentesque diam sit amet libero convallis, et sollicitudin dui pretium.  Duis aliquam tortor sed dolor commodo cursus. Duis quis dapibus metus. Morbi at elementum turpis. Curabitur nibh urna, venenatis a eleifend scelerisque, viverra in nibh. Curabitur aliquet justo leo, quis viverra ipsum efficitur sit amet. In sed efficitur magna. Sed dictum ante at convallis pharetra. In viverra at justo vitae pulvinar. Integer rutrum elementum sem, non auctor ipsum scelerisque vel. Vestibulum pharetra fermentum lobortis. Sed non condimentum diam, ac fermentum nisi. Nullam fringilla quam vitae erat pulvinar facilisis. Fus'),
(2, 'Example E. ITRO', 'it', 'hello'),
(3, 'Admin S. Supervisor', 'supervisor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non elit sit amet velit blandit sodales. Etiam laoreet volutpat metus, eu egestas felis interdum et. Donec luctus lorem non mauris tempor, vel ultricies massa luctus. Nullam iaculis sagittis nisl non posuere. Nunc mollis consequat ex hendrerit dapibus. Donec sed magna venenatis, porta eros eget, commodo neque. Vivamus ut placerat lacus. Donec pellentesque diam sit amet libero convallis, et sollicitudin dui pretium.  Duis aliquam tortor sed dolor commodo cursus. Duis quis dapibus metus. Morbi at elementum turpis. Curabitur nibh urna, venenatis a eleifend scelerisque, viverra in nibh. Curabitur aliquet justo leo, quis viverra ipsum efficitur sit amet. In sed efficitur magna. Sed dictum ante at convallis pharetra. In viverra at justo vitae pulvinar. Integer rutrum elementum sem, non auctor ipsum scelerisque vel. Vestibulum pharetra fermentum lobortis. Sed non condimentum diam, ac fermentum nisi. Nullam fringilla quam vitae erat pulvinar facilisis. Fus'),
(3, 'Admin S. Supervisor', 'supervisor', 'hello'),
(3, 'Example E. ITRO', 'it', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non elit sit amet velit blandit sodales. Etiam laoreet volutpat metus, eu egestas felis interdum et. Donec luctus lorem non mauris tempor, vel ultricies massa luctus. Nullam iaculis sagittis nisl non posuere. Nunc mollis consequat ex hendrerit dapibus. Donec sed magna venenatis, porta eros eget, commodo neque. Vivamus ut placerat lacus. Donec pellentesque diam sit amet libero convallis, et sollicitudin dui pretium.  Duis aliquam tortor sed dolor commodo cursus. Duis quis dapibus metus. Morbi at elementum turpis. Curabitur nibh urna, venenatis a eleifend scelerisque, viverra in nibh. Curabitur aliquet justo leo, quis viverra ipsum efficitur sit amet. In sed efficitur magna. Sed dictum ante at convallis pharetra. In viverra at justo vitae pulvinar. Integer rutrum elementum sem, non auctor ipsum scelerisque vel. Vestibulum pharetra fermentum lobortis. Sed non condimentum diam, ac fermentum nisi. Nullam fringilla quam vitae erat pulvinar facilisis. Fus'),
(1, 'Marc Espina Zamora', 'student', 'The ticket is now open'),
(1, 'Admin S. Supervisor', 'supervisor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non elit sit amet velit blandit sodales. Etiam laoreet volutpat metus, eu egestas felis interdum et. Donec luctus lorem non mauris tempor, vel ultricies massa luctus. Nullam iaculis sagittis nisl non posuere. Nunc mollis consequat ex hendrerit dapibus. Donec sed magna venenatis, porta eros eget, commodo neque. Vivamus ut placerat lacus. Donec pellentesque diam sit amet libero convallis, et sollicitudin dui pretium.  Duis aliquam tortor sed dolor commodo cursus. Duis quis dapibus metus. Morbi at elementum turpis. Curabitur nibh urna, venenatis a eleifend scelerisque, viverra in nibh. Curabitur aliquet justo leo, quis viverra ipsum efficitur sit amet. In sed efficitur magna. Sed dictum ante at convallis pharetra. In viverra at justo vitae pulvinar. Integer rutrum elementum sem, non auctor ipsum scelerisque vel. Vestibulum pharetra fermentum lobortis. Sed non condimentum diam, ac fermentum nisi. Nullam fringilla quam vitae erat pulvinar facilisis. Fus'),
(4, 'Admin S. Supervisor', 'supervisor', 'wewww'),
(23, 'Example E. ITRO', 'it', 'wewww'),
(23, 'Example E. ITRO', 'it', 'wewww'),
(28, 'Admin S. Supervisor', 'supervisor', 'wewww'),
(28, 'Example E. ITRO', 'it', 'wewww');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tid` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `inquiry` text CHARACTER SET latin1 NOT NULL,
  `itype` varchar(50) NOT NULL,
  `fdes` text NOT NULL,
  `stat` varchar(11) CHARACTER SET latin1 NOT NULL,
  `priority` int(1) NOT NULL,
  `severity` int(1) NOT NULL,
  `filename` varchar(225) CHARACTER SET latin1 NOT NULL,
  `assignid` int(11) NOT NULL,
  `afname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `alname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dt` datetime NOT NULL,
  `dta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tid`, `iid`, `email`, `img`, `inquiry`, `itype`, `fdes`, `stat`, `priority`, `severity`, `filename`, `assignid`, `afname`, `alname`, `dt`, `dta`) VALUES
(1, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'hardware', 'wew', 'pending', 4, 0, 'WIN_20221219_17_20_07_Pro.jpg', 0, '', '', '2023-01-17 19:28:21', '0000-00-00 00:00:00'),
(2, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:16', '0000-00-00 00:00:00'),
(3, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:22', '0000-00-00 00:00:00'),
(4, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:23', '0000-00-00 00:00:00'),
(5, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:24', '0000-00-00 00:00:00'),
(6, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:24', '0000-00-00 00:00:00'),
(7, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:25', '0000-00-00 00:00:00'),
(8, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:25', '0000-00-00 00:00:00'),
(9, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:26', '0000-00-00 00:00:00'),
(10, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:27', '0000-00-00 00:00:00'),
(11, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:28', '0000-00-00 00:00:00'),
(12, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:29', '0000-00-00 00:00:00'),
(13, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:29', '0000-00-00 00:00:00'),
(14, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:30', '0000-00-00 00:00:00'),
(15, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:31', '0000-00-00 00:00:00'),
(16, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:31', '0000-00-00 00:00:00'),
(17, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:32', '0000-00-00 00:00:00'),
(18, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:32', '0000-00-00 00:00:00'),
(19, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:33', '0000-00-00 00:00:00'),
(20, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:34', '0000-00-00 00:00:00'),
(21, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:34', '0000-00-00 00:00:00'),
(22, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:35', '0000-00-00 00:00:00'),
(23, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'open', 2, 0, '', 2, 'Example', 'ITRO', '2023-01-17 21:14:35', '2023-01-18 00:13:20'),
(24, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:36', '0000-00-00 00:00:00'),
(25, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-17 21:14:37', '0000-00-00 00:00:00'),
(26, 2020141242, 'ilflores@student.apc.edu.ph', 'download.png\r\n', 'wew', 'others', 'wew', 'pending', 3, 0, '', 0, '', '', '2023-01-17 23:19:59', '0000-00-00 00:00:00'),
(27, 2020141242, 'ilflores@student.apc.edu.ph', 'download.png\r\n', 'wew', 'account', 'wew', 'pending', 2, 0, '', 0, '', '', '2023-01-18 00:12:09', '0000-00-00 00:00:00'),
(28, 2020141361, 'mezamora@student.apc.edu.ph', 'download.png', 'I have broken laptop of APC that i borrowed from itro', 'hardware', '', 'open', 2, 0, 'images.jfif', 2, 'Example', 'ITRO', '2023-01-18 13:45:54', '2023-01-18 13:50:35');

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
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
