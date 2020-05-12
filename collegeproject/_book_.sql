-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2018 at 09:32 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookid`
--

CREATE TABLE IF NOT EXISTS `bookid` (
  `book_id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bookid`
--

INSERT INTO `bookid` (`book_id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `year` varchar(6) NOT NULL,
  `sem` varchar(6) NOT NULL,
  `book_title` varchar(60) NOT NULL,
  `book_author` varchar(60) NOT NULL,
  `book_image` varchar(60) NOT NULL,
  `book_descr` text NOT NULL,
  `book_price` decimal(6,2) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `year`, `sem`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `publisher`, `dob`, `uname`) VALUES
(24, '3rd', '5th SE', 'mathematics', 'das pal', '25372-Screenshot_20180501-132448.png', '', '100.00', 'otg', '02/12/2018', 'tuku');

-- --------------------------------------------------------

--
-- Table structure for table `publisherid`
--

CREATE TABLE IF NOT EXISTS `publisherid` (
  `publisherid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `publisher_name` varchar(60) NOT NULL,
  PRIMARY KEY (`publisherid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `publisherid`
--

INSERT INTO `publisherid` (`publisherid`, `publisher_name`) VALUES
(1, 'uyyythg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `user` varchar(15) NOT NULL,
  `roll` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `cpass` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Name`, `user`, `roll`, `dob`, `pass`, `cpass`) VALUES
(3, 'abc', '123', '15', '03/29/2018', '123', '123'),
(4, 'tuku', 'tuku', '46', '02/12/2018', 'tuku', 'tuku'),
(5, 'shailza', 'shailzak3', '15', '08/16/1998', 'shailu', 'shailu'),
(6, 'rina', 'rina123', '1', '12/10/1996', 'rina0000', 'rina0000'),
(8, 'Nitish', 'nk1234', '1234', '04/06/2018', '1234', '1234'),
(9, 'rajib', 'rs2018', 'cse01', '01/01/1982', 'cse01', 'cse01'),
(10, 'Kushal Baidya', '18111997', 'cse2016035', '18/11/1997', 'kushalb97', 'kushalb97');
