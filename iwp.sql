-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2021 at 12:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aname`, `password`, `empid`, `aid`) VALUES
('RD', '123', '123', 1),
('DJ', '123', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

DROP TABLE IF EXISTS `balance`;
CREATE TABLE IF NOT EXISTS `balance` (
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`balance`) VALUES
(10138040);

-- --------------------------------------------------------

--
-- Table structure for table `booked_hist`
--

DROP TABLE IF EXISTS `booked_hist`;
CREATE TABLE IF NOT EXISTS `booked_hist` (
  `phone` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Booked',
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_hist`
--

INSERT INTO `booked_hist` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `Status`, `price`, `book_id`, `id`) VALUES
('9429633794', 'Rushabh', '123', 'Four bed', '2021-04-14', '2021-05-06', 22, 'false', 'true', 'true', 'false', 'false', 'false', 'Booked', 75900, 22, 1),
('9537782241', 'Sanket', '12', 'Single bed', '2021-04-23', '2021-05-09', 16, 'false', 'false', 'true', 'false', 'false', 'false', 'Booked', 20800, 24, 3),
('9876543210', 'Nirmit', '1213', 'Double bed', '2021-04-06', '2021-04-17', 11, 'false', 'false', 'false', 'false', 'false', 'false', 'Booked', 19800, 38, 4),
('9429633794', 'Rushabh', '1', 'Double bed', '2021-04-24', '2021-04-25', 1, 'true', 'true', 'true', 'true', 'true', 'true', 'Booked', 3220, 46, 5),
('9537782241', 'Sanket', '2', 'Four bed', '2021-04-30', '2021-05-08', 8, 'false', 'false', 'false', 'false', 'false', 'false', 'Booked', 24000, 47, 6),
('9429633794', 'Rushabh', '1', 'Four bed', '2021-04-23', '2021-04-24', 1, 'false', 'false', 'false', 'false', 'false', 'false', 'Booked', 3000, 50, 5),
('9537782241', 'Sanket', '2', 'Four bed', '2021-04-23', '2021-04-24', 1, 'false', 'false', 'false', 'true', 'true', 'false', 'Booked', 3370, 51, 6),
('9537782241', 'Sanket', '2', 'Double bed', '2021-05-01', '2021-05-09', 8, 'false', 'false', 'false', 'false', 'false', 'false', 'Booked', 14400, 52, 6),
('9429633794', 'Rushabh', '1', 'Four bed', '2021-05-06', '2021-05-07', 1, 'false', 'false', 'false', 'false', 'false', 'false', 'Booked', 3000, 54, 5),
('9429633794', 'Rushabh', '1', 'Single bed', '2021-05-01', '2021-05-02', 1, 'false', 'false', 'false', 'false', 'false', 'false', 'Booked', 1000, 62, 5),
('9537782241', 'Sanket', '2', 'Executive', '2021-04-16', '2021-04-24', 8, 'false', 'false', 'false', 'true', 'false', 'false', 'Booked', 15360, 66, 6),
('9537782241', 'Sanket', '2', 'Executive', '2021-04-15', '2021-04-24', 9, 'false', 'false', 'false', 'false', 'false', 'false', 'Booked', 16200, 67, 6),
('9537782241', 'Sanket', '2', 'Delux', '2021-04-29', '2021-04-30', 1, 'false', 'false', 'false', 'false', 'false', 'false', 'Booked', 1000, 68, 6),
('9537782241', 'Sanket', '2', 'Standard', '2021-04-24', '2021-05-02', 8, 'false', 'false', 'false', 'false', 'false', 'false', 'Booked', 24000, 69, 6);

-- --------------------------------------------------------

--
-- Table structure for table `book_id`
--

DROP TABLE IF EXISTS `book_id`;
CREATE TABLE IF NOT EXISTS `book_id` (
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_id`
--

INSERT INTO `book_id` (`book_id`) VALUES
(79);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_booking`
--

DROP TABLE IF EXISTS `confirmed_booking`;
CREATE TABLE IF NOT EXISTS `confirmed_booking` (
  `phone` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Confirmed',
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmed_booking`
--

INSERT INTO `confirmed_booking` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `status`, `price`, `book_id`, `id`) VALUES
('9429633794', 'Rushabh', '1', 'Standard', '2021-04-23', '2021-05-02', 9, 'false', 'false', 'false', 'false', 'false', 'false', 'Confirmed', 27000, 77, 5);

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

DROP TABLE IF EXISTS `poll`;
CREATE TABLE IF NOT EXISTS `poll` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `feedback` text NOT NULL,
  `suggestions` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`name`, `phone`, `email`, `feedback`, `suggestions`, `id`) VALUES
('', '', '', 'good', 'dcddsvsvsv', 5),
('', '', '', 'neutral', 'efwfeqwfwfw', 6),
('', '', '', 'good', 'fafafas', 6);

-- --------------------------------------------------------

--
-- Table structure for table `rooms_count`
--

DROP TABLE IF EXISTS `rooms_count`;
CREATE TABLE IF NOT EXISTS `rooms_count` (
  `room_type` varchar(20) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `occupied_rooms` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_count`
--

INSERT INTO `rooms_count` (`room_type`, `available_rooms`, `occupied_rooms`, `price`) VALUES
('Delux', 8, 2, 1000),
('Executive', 23, 7, 1800),
('Standard', 0, 5, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

DROP TABLE IF EXISTS `temp`;
CREATE TABLE IF NOT EXISTS `temp` (
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_book_id_`
--

DROP TABLE IF EXISTS `temp_book_id_`;
CREATE TABLE IF NOT EXISTS `temp_book_id_` (
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_room`
--

DROP TABLE IF EXISTS `temp_room`;
CREATE TABLE IF NOT EXISTS `temp_room` (
  `phone` int(11) NOT NULL,
  `idproof` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE IF NOT EXISTS `user_login` (
  `phone` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` int(10) NOT NULL,
  `dob` date NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`phone`, `password`, `name`, `email`, `idproof`, `dob`, `id`) VALUES
('9537782241', '123', 'Sanket', 'oza@gmail.com', 2, '2021-02-11', 6),
('9429633794', '123', 'Rushabh', 'rushabhdonda09@gmail.com', 1, '2021-04-23', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_room_book`
--

DROP TABLE IF EXISTS `user_room_book`;
CREATE TABLE IF NOT EXISTS `user_room_book` (
  `phone` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `ac` varchar(5) NOT NULL,
  `breakfast` varchar(5) NOT NULL,
  `lunch` varchar(5) NOT NULL,
  `snacks` varchar(5) NOT NULL,
  `dinner` varchar(5) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_room_book`
--

INSERT INTO `user_room_book` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `ac`, `breakfast`, `lunch`, `snacks`, `dinner`, `swimming`, `status`, `price`, `book_id`, `id`) VALUES
('9429633794', 'Rushabh', '1', 'Delux', '2021-04-16', '2021-05-01', 15, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 15000, 75, 5),
('9537782241', 'Sanket', '2', 'Standard', '2021-04-10', '2021-04-25', 15, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 45000, 70, 6),
('9429633794', 'Rushabh', '1', 'Standard', '2021-04-23', '2021-05-02', 9, 'false', 'false', 'false', 'false', 'false', 'false', 'Confirmed', 27000, 77, 5),
('9429633794', 'Rushabh', '1', 'Executive', '2021-04-30', '2021-05-08', 8, 'false', 'false', 'false', 'false', 'false', 'false', 'Waiting', 14400, 78, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
