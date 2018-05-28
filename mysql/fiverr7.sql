-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 03:37 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiverr7`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `dog_quantity` int(5) NOT NULL,
  `dogname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `breed` varchar(20) NOT NULL,
  `allergies` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `uname`, `password`, `dog_quantity`, `dogname`, `dob`, `breed`, `allergies`, `comment`) VALUES
(1, 'sdf', 'sdfa', 'sdfa', 'dsfa', 4, 'sdfa', '2018-05-02', 'sdf', 'sddfa', 'sdfa'),
(2, 'zxczxZXCXZV', 'sdfsdfa', 'dsfasfa', '12345678', 1, 'fdfdf', '2018-05-19', '1', 'sdf', 'sdf'),
(3, 'falak', 'sher', 'falak', '12345678', 4, 'tomy', '2018-05-08', '4', 'no', 'goog'),
(4, 'sdfsdfs', 'sdfa', 'sdfa', '11111111', 1, 'sdfa', '2018-05-18', '1', 'fsaf', 'dfa'),
(5, 'dsfadf', 'dfas', 'dsfaf', '12345678', 1, 'dsfa', '2018-05-26', '1', 'f', 'sdf'),
(6, 'aaaaaaa', 'sssssssss', 'ddddddd', '12345678', 1, 'fdadf', '2018-05-26', '1', 'era', 'sdf'),
(7, 'aliadsfa', 'sadfa', 'sdfada', '11111111', 5, 'sdfa', '2018-06-01', '4', 'dfa', 'sdfasdfasdfasfdasdfasdfasf\r\nas\r\ndf\r\nsad\r\nf\r\nasd\r\nfa'),
(8, 'fasdfa', 'sdfaadf', 'faaa', '11111111', 7, 'pito', '2018-05-19', '6', 'No', 'Hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
