-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2020 at 10:11 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `abd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `business_listing`
--

CREATE TABLE `business_listing` (
  `id` int(100) NOT NULL auto_increment,
  `bcid` varchar(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `bdesc` varchar(100) NOT NULL,
  `bimage` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `li` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `ptype` varchar(100) NOT NULL,
  `pamount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `business_listing`
--

INSERT INTO `business_listing` (`id`, `bcid`, `bname`, `bdesc`, `bimage`, `address`, `email`, `phone`, `fb`, `li`, `tw`, `uid`, `uname`, `ptype`, `pamount`, `status`) VALUES
(5, '1', 'zxx', 'xzzx', 'images/10.png', 'sdfdf', 'skyb50048@gmail.com', '86699311697', 'Z', 'Z', 'zz', 'admin', 'admin', 'paid', '30', ''),
(7, '4', 'zxx', 'xzzx', 'images/gy.jpg', 'cvxc', 'q1', '86699311697', 'z', 'Z', 'zz', 'admin', 'admin', 'paid', '30', ''),
(8, '4', 'zxx', 'xzzx', 'images/zljbq.jpg', 'cvxc', 'q1', '86699311697', 'z', 'Z', 'zz', 'admin', 'admin', 'paid', '30', ''),
(9, '5', 'zxx', 'xzzx', 'images/sczde.jpg', 'cvxc', 'q1', '86699311697', 'z', 'Z', 'zz', 'admin', 'admin', 'paid', '30', ''),
(10, '6', 'zxx', 'xzzx', 'images/9.jpg', 'cvxc', 'skyb50048@gmail.com', '86699311697', 'z', 'Z', 'zz', 'admin', 'admin', 'paid', '30', ''),
(11, '7', 'zxx', 'xzzx', 'images/wfyqc.jpg', 'cvxc', 'skyb50048@gmail.com', '86699311697', 'z', 'Z', 'zz', 'admin', 'admin', 'paid', '30', ''),
(12, '1', 'zxx', 'xzzx', 'images/nyuxb.png', 'cvxc', 'admin', '86699311697', 'z', 'Z', 'zz', 'admin', 'admin', 'paid', '30', ''),
(14, '5', 'himanck', 'dcncmbsks', 'images/1.jpg', 'xjscnscjiw', 'admin@gmail.com', '0123456789', 'z', 'Z', 'zz', 'admin', 'admin', 'paid', '30', ''),
(15, '7', 'zxx', 'xzzx', 'images/wnkfw.png', 'cvxc', 'skyb50048@gmail.com', '0123456789', 'z', 'Z', 'zz', '4', 'sai', 'paid', '30', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(50) NOT NULL auto_increment,
  `cat_id` int(50) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_path` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_id`, `cat_name`, `cat_path`) VALUES
(3, 1, 'Food & Drink', 'images/cat-1.png'),
(4, 4, 'Restaurant', 'images/cat-2.png'),
(5, 5, 'Hotels', 'images/cat-3.png'),
(6, 6, 'Beauty & Spa', 'images/cat-4.png'),
(7, 7, 'Shopping', 'images/cat-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment_process`
--

CREATE TABLE `payment_process` (
  `id` int(100) NOT NULL auto_increment,
  `bcid` int(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `paymentid` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `payerid` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `pdate` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payment_process`
--

INSERT INTO `payment_process` (`id`, `bcid`, `bname`, `uid`, `uname`, `paymentid`, `token`, `payerid`, `amount`, `pdate`) VALUES
(2, 1, 'zxx', 'admin', 'admin', 'PAYID-L5ZCMTY0FR89571FG932180U', 'EC-5RT37900SM632744J', 'VDS4M434MTDHA', '30', '2020-09-28'),
(3, 2, 'himanck', '4', 'sai', 'PAYID-L5ZETJI7M24633427240742J', 'EC-4JS55986XA498734N', 'VDS4M434MTDHA', '30', '2020-09-28'),
(4, 2, 'zxx', '4', 'sai', 'PAYID-L5ZE7EA8VC84412J05360233', 'EC-0GJ03485VC216853K', 'VDS4M434MTDHA', '30', '2020-09-28'),
(5, 2, 'zxx', '4', 'sai', 'PAYID-L5ZE7EA8VC84412J05360233', 'EC-0GJ03485VC216853K', 'VDS4M434MTDHA', '30', '2020-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `fullname` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `category_id` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact` varchar(150) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `gender`, `category_id`, `username`, `pass`, `email`, `contact`) VALUES
(4, 'sai', 'Male', 'Restaurant', 'sai', '12345', 'sai@gmail.com', 'sai');
