-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 05, 2014 at 01:14 AM
-- Server version: 5.5.37
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `www4gsho_4gs`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `address1` varchar(60) NOT NULL,
  `address2` varchar(60) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `billing_add` tinyint(1) NOT NULL DEFAULT '0',
  `delivery_add` tinyint(1) NOT NULL DEFAULT '0',
  `user_add` tinyint(1) NOT NULL DEFAULT '0',
  `phone` varchar(30) DEFAULT NULL,
  `pemail` varchar(60) NOT NULL,
  `uemail` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `entry_time`, `name`, `address1`, `address2`, `city`, `state`, `zip`, `country`, `billing_add`, `delivery_add`, `user_add`, `phone`, `pemail`, `uemail`) VALUES
(17, '2013-09-02 21:16:20', 'rajib', '295 West Rampura', 'ulon road', 'Dhaka', 'Dhaka', '1219', 'Bangladesh', 0, 1, 0, '8322544', 'rajib_2002bd@yahoo.com', 'desparado_2010@yahoo.com'),
(18, '2013-09-15 11:47:49', 'Khan', 'Bahadur', 'Jiko', 'Lio', 'HYU', 'III', 'UUH', 0, 1, 0, 'sjdif', 'abc@hhh.bet', 'HIJI'),
(19, '2013-09-19 11:36:14', 'Rajib', '296', 'west rajib', 'Dhaka', 'Dhaka', '1219', 'Bangladesh', 0, 1, 0, '01776220433', 'rajib_2002bd@yahoo.com', 'rajib_2002bd@yahoo.com'),
(20, '2013-09-24 10:49:35', 'R chowdhury', '295 West Rampura', 'ulon road', 'Dhaka', 'Dhaka', '1219', 'Bangladesh', 0, 1, 0, '8801776220433', 'rajib.brnel@yahoo.co.uk', 'rajib.brnel@yahoo.co.uk'),
(21, '2013-09-24 10:56:28', 'R chowdhury', '295 West Rampura', 'ulon road', 'Dhaka', 'Texas', '1219', 'Bangladesh', 0, 1, 0, '8801776220433', 'rajib.brnel@yahoo.co.uk', 'rajib.brnel@yahoo.co.uk'),
(40, '2013-12-19 08:14:56', 'Rajib', '295', '', 'Dhaka', 'Dhaka', '1219', 'Bangladesh', 0, 1, 0, '01776220433', '', 'rajib.brunel@yahoo.co.uk'),
(41, '2013-12-19 11:40:55', 'Rajib', '295', '', 'Dhaka', 'Dhaka', '1219', 'Bangladesh', 0, 1, 0, '01776220433', 'rajib.brunel@yahoo.co.uk', 'rajib.brunel@yahoo.co.uk'),
(24, '2013-09-24 17:30:44', 'R', '295', 'ulon', 'Dhaka', 'Dhaka', '1219', 'Bangladesh', 0, 1, 0, '8801776220433', 'rajib_2002bd@yahoo.com', 'rajib.brnel@yahoo.co.uk'),
(25, '2013-09-24 17:38:07', 'R', '295', 'ulon', 'Dhaka', 'r', '1219', 'Bangladesh', 0, 1, 0, '8801776220433', 'rajib_1002bd@yahoo.com', 'rajib.brunel@yahoo.co.uk'),
(26, '2013-09-24 17:44:00', 'R', '295', 'ulon', 'Dhaka', '', '1219', 'Bangladesh', 0, 1, 0, '8801776220433', 'rajib_2002bd@yahoo.com', 'rajib.brunel@yahoo.co.uk'),
(27, '2013-09-24 17:49:38', 'R', '295', 'ulon', 'Dhaka', '', '1219', 'Bangladesh', 0, 1, 0, '8801776220433', 'rajib_2002bd@yahoo.com', 'rajib.brunel@yahoo.co.uk'),
(28, '2013-10-01 05:25:47', '', '', '', '', '', '', '', 0, 1, 0, '', 'rajib_2002bd@yahoo.com', ''),
(29, '2013-10-01 07:03:59', '', '', '', '', '', '', '', 0, 1, 0, '', 'rajib_2002bd@yahoo.com', 'sad'),
(42, '2013-12-19 11:43:30', 'Rajib', '295', '', 'Dhaka', 'Dhaka', '1219', 'Bangladesh', 0, 1, 0, '', '', 'rajib.brunel@yahoo.co.uk'),
(31, '2013-12-17 14:45:39', 'R', '295', 'ulon', 'Dhaka', '', '1219', 'Bangladesh', 0, 1, 0, '8801776220433', 'rajib_2002bd@yahoo.com', 'rajib.brnel@yahoo.co.uk'),
(32, '2013-12-19 07:25:28', '', '', '', '', '', '', '', 0, 1, 0, '', 'rajib_2002bd@yahoo.com', ''),
(33, '2013-12-19 07:29:25', 'Raji', '', '', '', '', '', '', 0, 1, 0, '', 'rajib_2002bd@yahoo.com', ''),
(34, '2013-12-19 07:40:20', 'Rajib', '295', '', 'Dhaka', 'Dhaka', '1219', 'Bangladesh', 0, 1, 0, '01776220433', 'rajib.brunel@yahoo.co.uk', 'rajib.brunel@yahoo.co.uk'),
(35, '2013-12-19 07:43:04', 'Rajib', '295', '', 'Dhaka', '', '1219', 'Bangladesh', 0, 1, 0, '', 'rajib.brunel@yahoo.co.uk', 'rajib.brunel@yahoo.co.uk'),
(39, '2013-12-19 08:13:37', 'Rajib', '295', '', 'Dhaka', 'Dhaka', '1219', 'Bangladesh', 0, 1, 0, '', 'rajib_2002bd@yahoo.com', 'rajib.brunel@yahoo.co.uk'),
(43, '2013-12-19 12:04:27', '', '', '', '', '', '', '', 0, 1, 0, '', '', 'rajib.brunel@yahoo.co.uk'),
(44, '2013-12-19 12:06:11', '', '', '', '', '', '', '', 0, 1, 0, '', '', 'rajib.brunel@yahoo.co.uk'),
(45, '2013-12-19 12:06:59', '', '', '', '', '', '', '', 0, 1, 0, '', '', 'rajib.brunel@yahoo.co.uk'),
(46, '2013-12-19 12:08:42', 'Rajib', '295', '', 'Dhaka', '', '', '', 0, 1, 0, '01776220433', '', 'rajib.brunel@yahoo.co.uk'),
(47, '2013-12-19 12:15:55', 'Rajib', '295', '', 'Dhaka', '', '', 'Dhaka', 0, 1, 0, '01776220433', '', 'rajib.brunel@yahoo.co.uk'),
(48, '2013-12-19 12:21:06', 'Rajib', '295', '', 'Dhaka', '', '', 'BGD', 0, 1, 0, '01776220433', '', 'rajib.brunel@yahoo.co.uk'),
(49, '2013-12-19 12:22:21', '', '', '', '', '', '', '', 0, 1, 0, '', 'rajib_2002bd@yahoo.com', ''),
(50, '2013-12-19 17:26:58', 'Rajib', '295', '', 'Dhaka', '', '', 'BGD', 0, 1, 0, '01776220433', 'rajib_2002bd@yahoo.com', 'rajib.brunel@yahoo.co.uk'),
(51, '2013-12-19 17:42:53', 'Rajib', '295', '', 'Dhaka', '', '', 'BGD', 0, 1, 0, '01776220433', '', 'rajib.brunel@yahoo.co.uk'),
(52, '2013-12-19 17:47:41', 'Rajib', '295', '', 'Dhaka', '', '', 'BGD', 0, 1, 0, '01776220433', 'rajib_2002bd@yahoo.com', 'rajib.brunel@yahoo.co.uk'),
(53, '2013-12-19 17:48:43', 'Rajib', '295', '', 'Dhaka', '', '', 'BGD', 0, 1, 0, '01776220433', '', 'rajib.brunel@yahoo.co.uk'),
(54, '2013-12-19 17:49:20', 'Rajib', '295', '', 'Dhaka', '', '', 'BGD', 0, 1, 0, '01776220433', '', 'rajib.brunel@yahoo.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(400) NOT NULL,
  `login` varchar(400) NOT NULL,
  `password` varchar(300) NOT NULL,
  `authority` tinyint(4) NOT NULL DEFAULT '1',
  `token` varchar(400) NOT NULL COMMENT 'security token',
  `email` text NOT NULL,
  `status` int(11) NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'foreign key user',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `login`, `password`, `authority`, `token`, `email`, `status`, `update_time`, `last_login`, `user_id`) VALUES
(1, 'ecom', 'admin', 'c9da474327a845f53a372a556c4b09dd', 6, '', 'mijo.jfwg@gmail.com', 1, '2013-10-01 08:56:43', NULL, NULL),
(2, 'Business Owner', 'admin4', 'f5f8c0b32d0a3e9ce0f256e07c24f178', 5, 'sha', 'info@ecom.com', 1, '2013-10-01 08:56:28', '2013-09-19 20:02:34', NULL),
(3, 'Business Manager', 'admin3', '8a4c6a278bdf3d9cb01ebfeab2e77975', 3, '', 'rar1', 1, '2013-09-19 20:10:01', '2013-09-19 20:10:01', NULL),
(4, 'Crew Member', 'admin2', 'f71fa3eaba7bd2cc5060036d32fc33cb', 2, '', 'sa', 1, '2013-09-19 20:14:07', '2013-09-19 20:13:29', NULL),
(5, 'common user', 'admin1', '0728e219e3536d764c546f9b7be969e9', 1, '', 'sad', 1, '2013-09-19 20:13:07', '2013-09-19 20:12:23', NULL),
(6, 'mila', 'mila', '6866021982dd5cae496eee0fd16e2534', 4, '', '', 1, '2013-10-01 09:17:30', '2013-10-01 09:06:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cat1`
--

CREATE TABLE IF NOT EXISTS `cat1` (
  `cat1_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat1_name` varchar(120) NOT NULL,
  `cat1_details` text NOT NULL,
  `cat1_photo` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_published` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat1_id`),
  UNIQUE KEY `cat1_name` (`cat1_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `cat1`
--

INSERT INTO `cat1` (`cat1_id`, `cat1_name`, `cat1_details`, `cat1_photo`, `status`, `is_published`) VALUES
(27, 'HP original Toner', '" HP Original Laser Toner Cartridge"', 'hp-toner.jpg', 1, '1'),
(26, 'Genius Laser Toner ', 'Genius Laser Toner Cartridge can be used\r\nHP, Canon, Samsung, Brother, Lexmark, Epson\r\nToshiba etc printer as original toner cartridge', 'laser-toner.jpg', 1, '1'),
(28, 'Canon original Toner ', 'ORIGINAL TONER CARTRIDGE', 'canon-toner.jpg', 1, '1'),
(29, 'Canon Copier', 'PRINTER, PHOTOCOPPIER', 'cannon-coppier.jpg', 1, '1'),
(30, 'HP Printer', '', 'hp-printer.jpg', 1, '1'),
(31, 'Toshiba Copier', '', 'toshiba-coppier.jpg', 1, '1'),
(13, 'Security Solution', 'a.	CCTV Camera, \r\nb.	DVR\r\nc.	DVR Card\r\nd.	Access Control\r\ne.	Time Attendance\r\nf.	Metal Detector\r\ng.	Anti-Virus Solution\r\nh.	PABX System\r\n', 'security-solution.jpg', 1, '0'),
(14, 'Power Solution', 'a.	UPS (Online & Offline)\r\nb.	IPS\r\nc.	Voltage Stabilizer\r\nd.	Battery\r\n', 'power.jpg', 1, '0'),
(45, 'Computer & Server', '', 'computer-server.jpg', 1, '0'),
(16, 'Medical Equipments', '', 'medical.jpg', 1, '0'),
(17, 'Notebook & Tablet', '', 'tabletpc.jpg', 1, '0'),
(46, 'Computer Accessories', '', 'computer-accessories.jpg', 1, '0'),
(18, 'Agro Products', '', 'agro.jpg', 1, '0'),
(19, 'Software Solutions', '', 'software-solutions.jpg', 1, '0'),
(20, 'Paper & Printing Solution', '', 'printing-solution.jpg', 1, '0'),
(21, 'Imaging Solution', '', 'imaging-solution.jpg', 1, '0'),
(22, 'Office Stationary Solution', '', 'stationary.jpg', 1, '0'),
(43, 'Accessories', 'Computer, Electrical, Electronics, etc Accessories', 'accessories.jpg', 1, '0'),
(47, 'Notebook & Tablets', '', 'notebook-tablet.jpg', 1, '0'),
(48, 'Printer & Photocopier', '', 'printer-photocopier.jpg', 1, '0'),
(49, 'Toner Cartridges', '', 'toner-cartridges.jpg', 1, '0'),
(50, 'Digital Camera', '', 'digital-camera.jpg', 1, '0'),
(51, 'Antivirus Software', '', 'antivirus-software.jpg', 1, '0'),
(52, 'Security Solution (CCTV)', '', 'security-solutions.jpg', 1, '0'),
(53, 'IPS & UPS', '', 'ips-ups.jpg', 1, '0'),
(54, 'Network Accessories', '', 'network-accessories.jpg', 1, '0'),
(55, 'Scanner & Projector', '', 'scanner-projector.jpg', 1, '0'),
(56, 'Medicals Equipments', '', 'medical.jpg', 1, '0'),
(57, 'Stationery & Office Utensils', '', 'stationeries.jpg', 1, '0'),
(58, 'Paper & Printing Solutions', '', 'paper-printing.jpg', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `cat2`
--

CREATE TABLE IF NOT EXISTS `cat2` (
  `cat2_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat1_id` int(11) NOT NULL,
  `cat2_name` varchar(120) NOT NULL,
  `cat2_details` text NOT NULL,
  `cat2_photo` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_published` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat2_id`),
  UNIQUE KEY `cat1_id` (`cat1_id`,`cat2_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `cat2`
--

INSERT INTO `cat2` (`cat2_id`, `cat1_id`, `cat2_name`, `cat2_details`, `cat2_photo`, `status`, `is_published`) VALUES
(61, 27, 'HP ORIGINAL TONER CARTRIDGE', '"ORIGINAL"', '', 1, '1'),
(60, 26, 'BROTHER', 'Brother Compatible Laser Toner Cartridge', '', 1, '1'),
(57, 26, 'TOSHIBA', 'Toshiba Compatible Laser Toner Cartridge', '', 1, '1'),
(58, 26, 'EPSON', 'Epson Compatible Laser Toner Cartridge', '', 1, '1'),
(59, 26, 'LEXMARK', 'Lexmark Compatible Laser Toner Cartridge', '', 1, '1'),
(54, 26, 'HP', 'HP Compatible Toner Cartridge', '', 1, '1'),
(55, 26, 'CANON', 'Canon Compatible Laser Toner Cartridge', '', 1, '1'),
(56, 26, 'SAMSUNG', 'Samsung Compatible Laser Toner Cartridge', '', 1, '1'),
(66, 28, 'CANON ORIGINAL INK CARTRIDGE', 'Original Cartridge', '', 1, '1'),
(63, 27, 'HP ORIGINAL INK CARTRIDGE', 'Original INK Cartridge', '', 1, '1'),
(65, 28, 'CANON ORIGINAL TONER CARTRIDGE', 'Original Toner Cartridge', '', 1, '1'),
(67, 29, 'PRINTER', 'ALL IN ALL & OTHERS', '', 1, '1'),
(68, 31, 'PRINTER', 'ALL IN ALL ', '', 1, '1'),
(69, 26, 'DELL', '', '', 1, '1'),
(70, 33, 'CCTV Camera', '', '', 1, '1'),
(71, 33, 'DVR', '', '', 1, '0'),
(72, 33, 'DVR Card', '', '', 1, '0'),
(73, 33, 'Access Control & e.	Time Attendance', '', '', 1, '0'),
(74, 33, 'Metal Detector', '', '', 1, '0'),
(75, 33, 'Anti-Virus Solution', '', '', 1, '0'),
(76, 33, 'PABX System', '', '', 1, '0'),
(77, 34, 'UPS (Online & Offline)', '', '', 1, '0'),
(78, 34, 'IPS (Nomal & Combo)', '', '', 1, '0'),
(79, 34, 'Voltage Stabilizer', '', '', 1, '0'),
(80, 34, 'Battery', '', '', 1, '0'),
(81, 37, '7" Genius Tablet PC', '', '', 1, '0'),
(82, 43, 'Pen Drive', 'Different types, size, data store capabilities, etc functionality of Pen Drive', '', 1, '0'),
(83, 58, 'Ash Printer', '', '', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `chk_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `states` varchar(20) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  PRIMARY KEY (`chk_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`chk_id`, `fname`, `lname`, `country`, `states`, `nid`, `phone`, `email`, `address`) VALUES
(1, 'P1', 'Aman', 'Khan', '7 weeks', '12304567', '+12304567', 'sitaro@yahoo.com', '7/1 Testuripara');

-- --------------------------------------------------------

--
-- Table structure for table `datastore`
--

CREATE TABLE IF NOT EXISTS `datastore` (
  `chk_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `states` varchar(20) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  PRIMARY KEY (`chk_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `datastore`
--

INSERT INTO `datastore` (`chk_id`, `fname`, `lname`, `country`, `states`, `nid`, `phone`, `email`, `address`) VALUES
(1, 'P1', 'Aman', 'Khan', '7 weeks', '12304567', '+12304567', 'sitaro@yahoo.com', '7/1 Testuripara');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text,
  `bkash` varchar(20) NOT NULL,
  `other` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `updated_by` varchar(200) NOT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT '1',
  `authority` tinyint(4) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `username`, `email`, `phone`, `address`, `bkash`, `other`, `password`, `created`, `updated`, `updated_by`, `user_type`, `authority`, `status`) VALUES
(1, 'Abc', 'Bca', 'abc', 'abc@gmail.net', '283749', 'Lane ABC', '83945', 'No', 'e99a18c428cb38d5f260853678922e03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 2, 0, 1),
(2, 'Def', 'Dst', 'def', 'def@khijir.cer', '394859', 'GHY', '878', 'uiu', 'e88ebfe1ae982a6da01436e48af6eb74', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'def', 2, 0, 1),
(3, 'Ghi', 'Hyu', 'ghi', 'ghi@wer.ver', '923894', 'iweui', '989', 'sidf', '118e0bfeafaae5544f3f486533cf56db', '2014-06-25 05:58:09', '0000-00-00 00:00:00', 'ghi', 2, 0, 1),
(4, 'queen', 'king', 'queen', 'queen@king.net', '98908', 'hu', '9898', 'nai', '8c350dae42eb7073fc6dae065f5be020', '2014-06-25 06:02:45', '2014-06-25 06:02:45', 'queen', 2, 0, 1),
(5, 'Admin', 'Person', 'admin', 'admin@4gshopping.com', '01192345678', '1/1 Free School Street Road, Dhanmondi, Dhaka-1205, Bangladesh', '5678', 'Private', 'c9da474327a845f53a372a556c4b09dd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'admin', 1, 6, 1),
(17, 'Jamil', 'Khan', 'jamil', 'jamil@ert.cer', '8879', '87987', '9809809', '98970', '1fc101e698e26798e56d1943b07ac0f0', '2014-07-01 03:12:19', '2014-07-01 03:12:19', 'jamil', 2, 0, 1),
(16, 'Arif', 'Hasan', 'hasan', 'arif@abc.com', '1728', '8127', '18273', '81723', 'f690d3b8d4b51c1f189d886b7bab26b7', '2014-07-01 03:07:54', '2014-07-01 03:07:54', 'hasan', 2, 0, 1),
(21, 'Xyz', 'Yzi', 'xyz', 'xyz@def.net', '878979', '878798798', '789798798', '87879898', '613d3b9c91e9445abaeca02f2342e5a6', '2014-07-03 06:57:01', '2014-07-03 06:57:01', 'xyz', 2, 0, 1),
(22, 'Hally', 'Comet', 'hally', 'hally@comet.com', '9898', '87987987', '78789789', '78789', '6b6f67ddcd8439edc7bb076d16c0b8fb', '2014-07-03 07:21:16', '2014-07-03 07:21:16', 'hally', 2, 0, 1),
(23, 'Tahsin', 'Hasan', 'tahsin', 'tahsin@gmail.net', '98908', '98098098', '8980909', '98989', '17fbf402d3143a5729d33bc314fe2eea', '2014-07-03 08:44:15', '2014-07-03 08:44:15', 'tahsin', 2, 0, 1),
(24, 'Afzalur', 'Rashid', 'afzal', 'afzal_01@yahoo.com', '+8801614099336', 'kafrul,dhaka', '01614099336', 'test', 'ac69f452dde0bf7211649df244615d56', '2014-07-03 10:28:10', '2014-07-03 10:28:10', 'afzal', 2, 0, 1),
(32, 'Mohammod', 'Rohman', 'mosaddek', 'mdmkrahman@gmail.com', '878978', '0-787897', '789789', '78798', '8b39b789c52da6b1e4263382665cc2af', '2014-07-24 10:33:32', '2014-07-24 10:33:32', 'mosaddek', 2, 0, 1),
(31, 'Mohammod', 'Mosaddek', 'mdmkrahman', 'mdmkrahman@yahoo.com', '989', '989', '898098', '980', 'bbe5a16148d936fae3ef59f851b9ff5a', '2014-07-24 10:30:06', '2014-07-24 10:30:06', 'mdmkrahman', 2, 0, 1),
(33, 'Mohammod', 'Mosaddek', 'rohman', 'mdmkrahman@hotmail.com', '89789798', '01987897', '78798', '789798', '645805520cb21bd36957edeb7d9c1742', '2014-08-01 11:03:03', '2014-08-01 11:03:03', 'rohman', 2, 0, 0),
(35, 'Rajib', 'Khan', 'rajib', 'rajib1111@gmail.com', '+8801913512650', '900 W Hatirpul+', 'nai-0989087', 'null', 'f516e4576732785a68cb09745ee82ba0', '2014-08-05 08:14:12', '2014-08-05 08:14:12', 'rajib', 2, 0, 1),
(37, 'Web', 'Tech', 'webtech', 'webtechnologybangladesh@gmail.com', '666', '777', '888', '999', '47a0c428e6b66954e75c44e30e657264', '2014-08-05 09:52:36', '2014-08-05 09:52:36', 'webtech', 2, 0, 1),
(38, 'Afzalur', 'Rashid', 'mdafzalur', 'afzal@progoti.com', '+8801614099336', '29A/15, Pallabi R/A', '01614099336', 'test', 'ac69f452dde0bf7211649df244615d56', '2014-08-05 11:25:54', '2014-08-05 11:25:54', 'mdafzalur', 2, 0, 1),
(39, 'abu', 'kawsar', 'litu', 'ak_litu@yahoo.com', '01818078177', '713 W Sherapara', '876', '', '970de1884dd7b2902fac81118d55d718', '2014-08-07 11:58:18', '2014-08-07 11:58:18', 'litu', 2, 0, 0),
(40, 'Moynul', 'Islam', 'mmigbd', 'mmigbd@yahoo.com', '01713290869', 'Solua, Solua Bazar, Chowgacha, Jessore', '01713290869', '', 'b161118ec40276a74aad136a56f16987', '2014-08-12 01:07:03', '2014-08-12 01:07:03', 'mmigbd', 2, 0, 1),
(41, 'Mahmudur', 'Rahman', 'arif', 'mrarif75@gmail.com', '01615621821', 'Dhaka Trade centre', '01819520009', '', 'b161118ec40276a74aad136a56f16987', '2014-08-14 05:52:10', '2014-08-14 05:52:10', 'arif', 2, 0, 1),
(42, 'GM', 'Murad', 'muradmin', 'gmmurad99@gmail.com', '01922334445582923', 'Kwranbazar', '0940382', 'Dhaka', '587a7e599e7c7c1db9fe2d5bcca27072', '2014-08-22 11:18:18', '2014-08-22 11:18:18', 'muradmin', 2, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_link` varchar(20) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_details` varchar(500) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_link`, `menu_name`, `menu_details`) VALUES
(1, 'index.php', 'Home', ''),
(2, 'about.php', 'About Us', ''),
(3, 'product_list.php', 'Products ', ''),
(4, 'gallery.php', 'Gallery ', ''),
(5, 'resources.php', 'Corporate Relation', ''),
(6, 'specials.php', 'Career ', ''),
(7, 'contact.php', 'Contact Us', '');

-- --------------------------------------------------------

--
-- Table structure for table `nletter`
--

CREATE TABLE IF NOT EXISTS `nletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nletter`
--

INSERT INTO `nletter` (`id`, `email`, `time`) VALUES
(1, 'mijo.jfwg@gmail.com', '2013-04-18 16:58:04'),
(2, 'mijo_jfwg@yahoo.com', '2013-04-18 17:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_id` int(11) DEFAULT NULL,
  `uemail` varchar(60) NOT NULL,
  `pal_email` varchar(60) DEFAULT NULL,
  `add_id` int(11) DEFAULT NULL COMMENT 'incase pickup',
  `ord_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ord_tamount` float NOT NULL,
  `vat` float NOT NULL DEFAULT '0',
  `ord_postcost` float NOT NULL,
  `packing` float NOT NULL DEFAULT '0',
  `ord_finalbill` float NOT NULL,
  `post_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=free 1=express 2=other',
  `carrier` varchar(100) DEFAULT NULL,
  `post_tracking_num` varchar(60) NOT NULL,
  `ord_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=pending 1=accepted 2=wait 3=sent 4=collect 5=return 6=refund 7=successfully received 8=successfully stock 9=return to origin',
  `pay_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=incomplete 1=complete 2=partial complete',
  PRIMARY KEY (`ord_id`),
  KEY `pay_id` (`pay_id`,`uemail`),
  KEY `pay_status` (`pay_status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `ord_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `ord_id` int(11) NOT NULL,
  `pay_id` int(11) DEFAULT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ord_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ord_tamount` float NOT NULL,
  `ord_postcost` float NOT NULL,
  `packing` float NOT NULL DEFAULT '0',
  `shipping` float NOT NULL,
  `ord_finalbill` float NOT NULL,
  `post_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=free 1=express 2=other',
  `carrier` varchar(100) DEFAULT NULL,
  `post_tracking_num` varchar(60) NOT NULL,
  `total_price` float NOT NULL,
  `final_bill` float NOT NULL,
  `postage_price` float NOT NULL,
  `ord_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=pending 1=accepted 2=wait 3=sent 4=collect 5=return 6=refund 7=successfully received 8=successfully stock 9=return to origin',
  `pay_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=incomplete 1=complete 2=partial complete',
  PRIMARY KEY (`ord_details_id`),
  KEY `pay_id` (`pay_id`),
  KEY `pay_status` (`pay_status`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=225 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`ord_details_id`, `ord_id`, `pay_id`, `product_name`, `price`, `quantity`, `username`, `email`, `ord_time`, `ord_tamount`, `ord_postcost`, `packing`, `shipping`, `ord_finalbill`, `post_type`, `carrier`, `post_tracking_num`, `total_price`, `final_bill`, `postage_price`, `ord_status`, `pay_status`) VALUES
(98, 63, NULL, 'Canon Original INK ', 800, '24', '', '', '2014-07-04 00:22:37', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(97, 63, NULL, 'Genius HL 2140', 2300, '22', '', '', '2014-07-04 00:22:37', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(96, 62, NULL, 'Canon Original INK ', 800, '333', '', '', '2014-07-03 23:58:57', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(95, 62, NULL, 'Canon Original INK ', 800, '222', '', '', '2014-07-03 23:58:57', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(94, 62, NULL, 'Canon Original INK ', 1200, '111', '', '', '2014-07-03 23:58:57', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(93, 61, NULL, 'Genius TN 3250', 2300, '22', '', '', '2014-07-03 23:36:44', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(92, 61, NULL, 'Genius 1130', 2300, '10', '', '', '2014-07-03 23:36:44', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(89, 60, NULL, 'Genius TN-2060', 2300, '100', '', '', '2014-07-03 23:23:27', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(90, 60, NULL, 'Genius TN 3250', 2300, '200', '', '', '2014-07-03 23:23:27', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(91, 60, NULL, 'Genius HL 2140', 2300, '600', '', '', '2014-07-03 23:23:27', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(99, 63, NULL, 'Canon Original INK ', 1200, '23', '', '', '2014-07-04 00:22:37', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(100, 64, NULL, 'Canon Original INK ', 1600, '200', '', '', '2014-07-04 01:45:24', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(101, 64, NULL, 'Canon Original INK ', 950, '700', '', '', '2014-07-04 01:45:24', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(102, 64, NULL, 'HP LaserJet Toner Cartridge', 5400, '1000', '', '', '2014-07-04 01:45:24', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(103, 65, NULL, 'Genius M 1400', 2300, '1', '', '', '2014-07-04 03:30:26', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(104, 65, NULL, 'Genius 2330', 2300, '1', '', '', '2014-07-04 03:30:26', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(105, 65, NULL, 'Genius M 2010', 2300, '1', '', '', '2014-07-04 03:30:26', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(106, 66, NULL, 'Genius TN 3250', 2300, '21', '', '', '2014-07-23 16:25:04', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(107, 66, NULL, 'Canon Original Toner', 5300, '22', '', '', '2014-07-23 16:25:04', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(108, 66, NULL, 'Canon Original INK ', 800, '23', '', '', '2014-07-23 16:25:04', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(109, 67, NULL, 'Genius TN 3250', 2300, '25', '', '', '2014-07-23 16:40:09', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(110, 67, NULL, 'Canon Original Toner', 5300, '22', '', '', '2014-07-23 16:40:09', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(111, 67, NULL, 'Canon Original INK ', 800, '23', '', '', '2014-07-23 16:40:09', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(112, 68, NULL, 'Genius TN 3250', 2300, '35', '', '', '2014-07-23 16:54:48', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(113, 68, NULL, 'Canon Original Toner', 5300, '20', '', '', '2014-07-23 16:54:48', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(114, 68, NULL, 'Canon Original INK ', 800, '37', '', '', '2014-07-23 16:54:48', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(115, 69, NULL, 'Genius TN 3250', 2300, '11', '', '', '2014-07-23 17:01:01', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(116, 69, NULL, 'Canon Original Toner', 5300, '12', '', '', '2014-07-23 17:01:01', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(117, 69, NULL, 'Canon Original INK ', 800, '13', '', '', '2014-07-23 17:01:01', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(118, 70, NULL, 'Genius TN 3250', 2300, '7', '', '', '2014-07-23 17:09:29', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(119, 70, NULL, 'Canon Original Toner', 5300, '8', '', '', '2014-07-23 17:09:29', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(120, 70, NULL, 'Canon Original INK ', 800, '9', '', '', '2014-07-23 17:09:29', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(121, 71, NULL, 'Genius TN 3250', 2300, '7', '', '', '2014-07-23 17:11:49', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(122, 71, NULL, 'Canon Original Toner', 5300, '8', '', '', '2014-07-23 17:11:49', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(123, 71, NULL, 'Canon Original INK ', 800, '9', '', '', '2014-07-23 17:11:49', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(124, 72, NULL, 'Genius M 1400', 2300, '10', '', '', '2014-07-24 14:53:21', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(125, 72, NULL, 'HP LaserJet Toner Cartridge', 10800, '13', '', '', '2014-07-24 14:53:21', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(126, 73, NULL, 'Genius M 1400', 2300, '10', '', '', '2014-07-24 15:03:16', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(127, 73, NULL, 'HP LaserJet Toner Cartridge', 10800, '13', '', '', '2014-07-24 15:03:16', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(128, 74, NULL, 'Genius M 1400', 2300, '10', '', '', '2014-07-24 15:05:35', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(129, 74, NULL, 'HP LaserJet Toner Cartridge', 10800, '15', '', '', '2014-07-24 15:05:35', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(130, 74, NULL, 'Canon Original INK ', 1200, '25', '', '', '2014-07-24 15:05:35', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(131, 75, NULL, 'Genius M 1400', 2300, '10', '', '', '2014-07-24 15:14:26', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(132, 75, NULL, 'HP LaserJet Toner Cartridge', 10800, '15', '', '', '2014-07-24 15:14:26', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(133, 75, NULL, 'Canon Original INK ', 1200, '25', '', '', '2014-07-24 15:14:26', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(134, 75, NULL, 'Canon Original Toner', 4800, '5', '', '', '2014-07-24 15:14:26', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(135, 76, NULL, 'Canon Original Toner', 4600, '15', '', '', '2014-07-25 00:13:23', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(136, 76, NULL, 'HP Original INK Cartridge', 1400, '10', '', '', '2014-07-25 00:13:23', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(137, 76, NULL, 'Genius TN 3250', 2300, '25', '', '', '2014-07-25 00:13:23', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(138, 77, NULL, 'Canon Original Toner', 4600, '15', '', '', '2014-07-25 00:16:06', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(139, 77, NULL, 'HP Original INK Cartridge', 1400, '10', '', '', '2014-07-25 00:16:06', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(140, 77, NULL, 'Genius TN 3250', 2300, '25', '', '', '2014-07-25 00:16:06', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(141, 78, NULL, 'Canon Original Toner', 4600, '30', '', '', '2014-07-25 00:17:52', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(142, 78, NULL, 'HP Original INK Cartridge', 1400, '10', '', '', '2014-07-25 00:17:52', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(143, 78, NULL, 'Genius TN 3250', 2300, '20', '', '', '2014-07-25 00:17:52', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(144, 79, NULL, 'Canon Original Toner', 4600, '30', '', '', '2014-07-25 00:19:15', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(145, 79, NULL, 'HP Original INK Cartridge', 1400, '70', '', '', '2014-07-25 00:19:15', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(146, 79, NULL, 'Genius TN 3250', 2300, '20', '', '', '2014-07-25 00:19:15', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(147, 80, NULL, 'HP Original INK Cartridge', 1400, '70', '', '', '2014-07-25 00:21:04', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(148, 80, NULL, 'Genius TN 3250', 2300, '20', '', '', '2014-07-25 00:21:04', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(149, 80, NULL, 'Canon Original INK ', 1000, '22', '', '', '2014-07-25 00:21:04', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(150, 81, NULL, 'HP Original INK Cartridge', 1400, '70', '', '', '2014-07-25 00:22:35', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(151, 81, NULL, 'Canon Original INK ', 1000, '22', '', '', '2014-07-25 00:22:35', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(152, 81, NULL, 'Genius 85A', 2300, '42', '', '', '2014-07-25 00:22:35', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(153, 82, NULL, 'HP LaserJet Toner Cartridge', 6700, '11', '', '', '2014-07-25 09:14:22', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(154, 82, NULL, 'Canon Original Toner', 6500, '12', '', '', '2014-07-25 09:14:22', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(155, 82, NULL, 'Canon Original INK ', 850, '13', '', '', '2014-07-25 09:14:22', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(156, 83, NULL, 'Genius M 1400', 2300, '13', '', '', '2014-08-01 16:04:50', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(157, 83, NULL, 'Canon Original INK ', 850, '21', '', '', '2014-08-01 16:04:50', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(158, 83, NULL, 'HP LaserJet Toner Cartridge', 10800, '41', '', '', '2014-08-01 16:04:50', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(159, 84, NULL, 'Genius M 1400', 2300, '11', '', '', '2014-08-01 16:18:10', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(160, 84, NULL, 'Genius M 2010', 2300, '13', '', '', '2014-08-01 16:18:10', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(161, 85, NULL, 'Genius M 1400', 2300, '21', '', '', '2014-08-01 17:14:24', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(162, 85, NULL, 'HP LaserJet Toner Cartridge', 6500, '17', '', '', '2014-08-01 17:14:24', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(163, 85, NULL, 'HP LaserJet Toner Cartridge', 11800, '31', '', '', '2014-08-01 17:14:24', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(164, 86, NULL, 'Genius M 1400', 2300, '21', '', '', '2014-08-01 17:14:54', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(165, 86, NULL, 'HP LaserJet Toner Cartridge', 6500, '17', '', '', '2014-08-01 17:14:54', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(166, 86, NULL, 'HP LaserJet Toner Cartridge', 11800, '31', '', '', '2014-08-01 17:14:54', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(167, 87, NULL, 'Genius M 1400', 2300, '21', '', '', '2014-08-01 17:22:41', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(168, 87, NULL, 'HP LaserJet Toner Cartridge', 6500, '18', '', '', '2014-08-01 17:22:41', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(169, 87, NULL, 'HP LaserJet Toner Cartridge', 11800, '29', '', '', '2014-08-01 17:22:41', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(170, 88, NULL, 'Genius M 1400', 2300, '21', '', '', '2014-08-01 17:24:05', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(171, 88, NULL, 'HP LaserJet Toner Cartridge', 6500, '18', '', '', '2014-08-01 17:24:05', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(172, 88, NULL, 'HP LaserJet Toner Cartridge', 11800, '29', '', '', '2014-08-01 17:24:05', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(173, 89, NULL, 'Genius M 1400', 2300, '24', '', '', '2014-08-01 17:25:59', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(174, 89, NULL, 'HP LaserJet Toner Cartridge', 6500, '18', '', '', '2014-08-01 17:25:59', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(175, 89, NULL, 'HP LaserJet Toner Cartridge', 11800, '39', '', '', '2014-08-01 17:25:59', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(176, 90, NULL, 'HP Original INK Cartridge', 1140, '11', '', '', '2014-08-02 10:19:25', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(177, 90, NULL, 'HP LaserJet Toner Cartridge', 10800, '10', '', '', '2014-08-02 10:19:25', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(178, 91, NULL, 'HP Original INK Cartridge', 1140, '11', '', '', '2014-08-02 10:27:28', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(179, 91, NULL, 'HP LaserJet Toner Cartridge', 10800, '12', '', '', '2014-08-02 10:27:28', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(180, 92, NULL, 'HP Original INK Cartridge', 1140, '11', '', '', '2014-08-02 11:47:48', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(181, 92, NULL, 'HP LaserJet Toner Cartridge', 10800, '12', '', '', '2014-08-02 11:47:48', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(182, 93, NULL, 'HP Original INK Cartridge', 1140, '11', '', '', '2014-08-02 11:48:38', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(183, 93, NULL, 'HP LaserJet Toner Cartridge', 10800, '12', '', '', '2014-08-02 11:48:38', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(184, 94, NULL, 'HP Original INK Cartridge', 1140, '11', '', '', '2014-08-02 12:12:09', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(185, 94, NULL, 'HP LaserJet Toner Cartridge', 10800, '12', '', '', '2014-08-02 12:12:09', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(186, 95, NULL, 'Genius TN 3250', 2300, '19', '', '', '2014-08-02 19:00:45', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(187, 95, NULL, 'Genius HL 2140', 2300, '13', '', '', '2014-08-02 19:00:45', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(188, 95, NULL, 'Genius 2330', 2300, '11', '', '', '2014-08-02 19:00:45', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(189, 96, NULL, 'Genius 1130', 2300, '1', '', '', '2014-08-04 14:44:45', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(190, 97, NULL, 'Genius HL 2140', 2300, '11', '', '', '2014-08-05 13:02:07', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(191, 97, NULL, 'Canon Original INK ', 850, '12', '', '', '2014-08-05 13:02:07', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(192, 97, NULL, 'HP LaserJet Toner Cartridge', 7150, '15', '', '', '2014-08-05 13:02:07', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(193, 98, NULL, 'Genius HL 2140', 2300, '19', '', '', '2014-08-05 13:27:59', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(194, 98, NULL, 'Canon Original INK ', 1300, '10', '', '', '2014-08-05 13:27:59', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(195, 99, NULL, 'Genius HL 2140', 2300, '19', '', '', '2014-08-05 13:36:25', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(196, 99, NULL, 'Canon Original INK ', 1300, '10', '', '', '2014-08-05 13:36:25', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(197, 100, NULL, 'HP LaserJet Toner Cartridge', 5600, '1', '', '', '2014-08-05 16:27:48', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(198, 101, NULL, 'Canon Original INK ', 850, '18', '', '', '2014-08-07 16:58:50', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(199, 101, NULL, 'Genius 1130', 2300, '7', '', '', '2014-08-07 16:58:50', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(200, 102, NULL, 'Genius TN-2060', 2300, '2', '', '', '2014-08-12 06:07:21', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(201, 103, NULL, 'Genius 2330', 2300, '3', '', '', '2014-08-12 13:46:45', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(202, 103, NULL, 'Genius M1200', 2300, '2', '', '', '2014-08-12 13:46:46', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(203, 103, NULL, 'TOSHIBA e-STUDIO COPIER', 420000, '1', '', '', '2014-08-12 13:46:46', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(204, 104, NULL, 'Genius 2330', 2300, '3', '', '', '2014-08-12 13:49:47', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(205, 104, NULL, 'Genius M1200', 2300, '2', '', '', '2014-08-12 13:49:47', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(206, 104, NULL, 'TOSHIBA e-STUDIO COPIER', 420000, '1', '', '', '2014-08-12 13:49:47', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(207, 105, NULL, 'Genius 2330', 2300, '3', '', '', '2014-08-12 14:01:41', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(208, 105, NULL, 'Genius M1200', 2300, '2', '', '', '2014-08-12 14:01:41', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(209, 105, NULL, 'TOSHIBA e-STUDIO COPIER', 420000, '1', '', '', '2014-08-12 14:01:41', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(210, 106, NULL, 'Genius 2330', 2300, '3', '', '', '2014-08-12 14:04:41', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(211, 106, NULL, 'Genius M1200', 2300, '2', '', '', '2014-08-12 14:04:41', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(212, 106, NULL, 'TOSHIBA e-STUDIO COPIER', 420000, '2', '', '', '2014-08-12 14:04:41', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(213, 107, NULL, 'TOSHIBA e-STUDIO COPIER', 420000, '1', '', '', '2014-08-12 14:50:05', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(214, 108, NULL, 'TOSHIBA e-STUDIO COPIER', 420000, '1', '', '', '2014-08-12 14:51:10', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(215, 109, NULL, 'TOSHIBA e-STUDIO COPIER', 420000, '3', '', '', '2014-08-14 12:30:16', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(216, 110, NULL, 'TOSHIBA e-STUDIO COPIER', 420000, '3', '', '', '2014-08-14 12:31:27', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(217, 111, NULL, 'Genius TN 3250', 2300, '14', '', '', '2014-08-15 11:34:06', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(218, 111, NULL, 'Canon Original Toner', 6500, '13', '', '', '2014-08-15 11:34:06', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(219, 112, NULL, 'Genius TN 3250', 2300, '14', '', '', '2014-08-15 11:39:16', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(220, 112, NULL, 'Canon Original Toner', 6500, '13', '', '', '2014-08-15 11:39:16', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(221, 113, NULL, 'HP Original INK Cartridge', 1400, '1', '', '', '2014-08-15 12:15:29', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(222, 114, NULL, 'HP Original INK Cartridge', 1400, '1', '', '', '2014-08-15 12:17:10', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(223, 115, NULL, 'HP Original INK Cartridge', 1400, '1', '', '', '2014-08-15 12:17:31', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0),
(224, 116, NULL, 'HP Original INK Cartridge', 1400, '1', '', '', '2014-08-15 12:17:39', 0, 0, 0, 0, 0, 0, NULL, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE IF NOT EXISTS `order_list` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_id` int(11) DEFAULT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `uemail` varchar(60) NOT NULL,
  `pal_email` varchar(60) DEFAULT NULL,
  `add_id` int(11) DEFAULT NULL COMMENT 'incase pickup',
  `ord_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ord_tamount` float NOT NULL,
  `vat` float NOT NULL DEFAULT '0',
  `ord_postcost` float NOT NULL,
  `packing` float NOT NULL DEFAULT '0',
  `ord_finalbill` float NOT NULL,
  `post_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=free 1=express 2=other',
  `carrier` varchar(100) DEFAULT NULL,
  `post_tracking_num` varchar(60) NOT NULL,
  `total_price` float NOT NULL,
  `final_bill` float NOT NULL,
  `postage_price` float NOT NULL,
  `payment_method` varchar(200) NOT NULL,
  `ord_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=pending 1=accepted 2=wait 3=sent 4=collect 5=return 6=refund 7=successfully received 8=successfully stock 9=return to origin',
  `pay_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=incomplete 1=complete 2=partial complete',
  PRIMARY KEY (`ord_id`),
  KEY `pay_id` (`pay_id`,`uemail`),
  KEY `pay_status` (`pay_status`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`ord_id`, `pay_id`, `product_name`, `price`, `quantity`, `username`, `email`, `uemail`, `pal_email`, `add_id`, `ord_time`, `ord_tamount`, `vat`, `ord_postcost`, `packing`, `ord_finalbill`, `post_type`, `carrier`, `post_tracking_num`, `total_price`, `final_bill`, `postage_price`, `payment_method`, `ord_status`, `pay_status`) VALUES
(63, NULL, '', 0, '', 'hally', '', '', NULL, NULL, '2014-07-04 00:22:37', 0, 0, 0, 0, 0, 0, NULL, '', 97400, 97400, 0, 'bKash', 0, 0),
(62, NULL, '', 0, '', 'xyz', '', '', NULL, NULL, '2014-07-03 23:58:57', 0, 0, 0, 0, 0, 0, NULL, '', 577200, 577200, 0, 'bKash', 0, 0),
(61, NULL, '', 0, '', 'def', '', '', NULL, NULL, '2014-07-03 23:36:44', 0, 0, 0, 0, 0, 0, NULL, '', 73600, 73600, 0, 'bKash', 0, 0),
(60, NULL, '', 0, '', 'abc', '', '', NULL, NULL, '2014-07-03 23:23:27', 0, 0, 0, 0, 0, 0, NULL, '', 2070000, 2070000, 0, 'bKash', 0, 0),
(64, NULL, '', 0, '', 'tahsin', '', '', NULL, NULL, '2014-07-04 01:45:24', 0, 0, 0, 0, 0, 0, NULL, '', 6385000, 6385000, 0, 'bKash', 0, 0),
(65, NULL, '', 0, '', 'afzal', '', '', NULL, NULL, '2014-07-04 03:30:26', 0, 0, 0, 0, 0, 0, NULL, '', 6900, 6900, 0, 'bKash', 0, 0),
(66, NULL, '', 0, '', 'abc', '', '', NULL, NULL, '2014-07-23 16:25:04', 0, 0, 0, 0, 0, 0, NULL, '', 183300, 183300, 0, 'bKash', 0, 0),
(67, NULL, '', 0, '', 'abc', '', '', NULL, NULL, '2014-07-23 16:40:09', 0, 0, 0, 0, 0, 0, NULL, '', 192500, 192500, 0, 'bKash', 0, 0),
(68, NULL, '', 0, '', 'abc', '', '', NULL, NULL, '2014-07-23 16:54:48', 0, 0, 0, 0, 0, 0, NULL, '', 216100, 216100, 0, 'bKash', 0, 0),
(69, NULL, '', 0, '', 'abc', '', '', NULL, NULL, '2014-07-23 17:01:01', 0, 0, 0, 0, 0, 0, NULL, '', 99300, 99300, 0, 'bKash', 0, 0),
(70, NULL, '', 0, '', 'abc', '', '', NULL, NULL, '2014-07-23 17:09:29', 0, 0, 0, 0, 0, 0, NULL, '', 65700, 65700, 0, 'bKash', 0, 0),
(71, NULL, '', 0, '', 'abc', '', '', NULL, NULL, '2014-07-23 17:11:49', 0, 0, 0, 0, 0, 0, NULL, '', 65700, 65700, 0, 'bKash', 0, 0),
(72, NULL, '', 0, '', 'rajib', '', '', NULL, NULL, '2014-07-24 14:53:21', 0, 0, 0, 0, 0, 0, NULL, '', 163400, 163400, 0, 'bKash', 0, 0),
(73, NULL, '', 0, '', 'rajib', '', '', NULL, NULL, '2014-07-24 15:03:16', 0, 0, 0, 0, 0, 0, NULL, '', 163400, 163400, 0, 'bKash', 0, 0),
(74, NULL, '', 0, '', 'rajib', '', '', NULL, NULL, '2014-07-24 15:05:35', 0, 0, 0, 0, 0, 0, NULL, '', 215000, 215000, 0, 'bKash', 0, 0),
(75, NULL, '', 0, '', 'rajib', '', '', NULL, NULL, '2014-07-24 15:14:26', 0, 0, 0, 0, 0, 0, NULL, '', 239000, 239000, 0, 'bKash', 0, 0),
(76, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-07-25 00:13:23', 0, 0, 0, 0, 0, 0, NULL, '', 140500, 140500, 0, 'bKash', 0, 0),
(77, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-07-25 00:16:06', 0, 0, 0, 0, 0, 0, NULL, '', 140500, 140500, 0, 'bKash', 0, 0),
(78, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-07-25 00:17:52', 0, 0, 0, 0, 0, 0, NULL, '', 198000, 198000, 0, 'bKash', 0, 0),
(79, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-07-25 00:19:15', 0, 0, 0, 0, 0, 0, NULL, '', 282000, 282000, 0, 'bKash', 0, 0),
(80, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-07-25 00:21:04', 0, 0, 0, 0, 0, 0, NULL, '', 166000, 166000, 0, 'bKash', 0, 0),
(81, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-07-25 00:22:35', 0, 0, 0, 0, 0, 0, NULL, '', 216600, 216600, 0, 'bKash', 0, 0),
(82, NULL, '', 0, '', 'mdmkrahman', '', '', NULL, NULL, '2014-07-25 09:17:06', 0, 0, 0, 0, 0, 0, NULL, '', 162750, 162750, 0, 'bKash', 1, 0),
(83, NULL, '', 0, '', 'rohman', '', '', NULL, NULL, '2014-08-01 16:04:50', 0, 0, 0, 0, 0, 0, NULL, '', 490550, 490550, 0, 'bKash', 0, 0),
(84, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-08-01 16:18:10', 0, 0, 0, 0, 0, 0, NULL, '', 55200, 55200, 0, 'bKash', 0, 0),
(85, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-08-01 17:14:24', 0, 0, 0, 0, 0, 0, NULL, '', 524600, 524600, 0, 'bKash', 0, 0),
(86, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-08-01 17:14:54', 0, 0, 0, 0, 0, 0, NULL, '', 524600, 524600, 0, 'bKash', 0, 0),
(87, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-08-01 17:22:41', 0, 0, 0, 0, 0, 0, NULL, '', 507500, 507500, 0, 'bKash', 0, 0),
(88, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-08-01 17:24:05', 0, 0, 0, 0, 0, 0, NULL, '', 507500, 507500, 0, 'bKash', 0, 0),
(89, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-08-01 17:25:59', 0, 0, 0, 0, 0, 0, NULL, '', 632400, 632400, 0, 'bKash', 0, 0),
(90, NULL, '', 0, '', 'rohman', '', '', NULL, NULL, '2014-08-02 10:19:25', 0, 0, 0, 0, 0, 0, NULL, '', 120540, 120540, 0, 'bKash', 0, 0),
(91, NULL, '', 0, '', 'rohman', '', '', NULL, NULL, '2014-08-02 10:27:28', 0, 0, 0, 0, 0, 0, NULL, '', 142140, 142140, 0, 'bKash', 0, 0),
(92, NULL, '', 0, '', 'rohman', '', '', NULL, NULL, '2014-08-02 11:47:48', 0, 0, 0, 0, 0, 0, NULL, '', 142140, 142140, 0, 'bKash', 0, 0),
(93, NULL, '', 0, '', 'rohman', '', '', NULL, NULL, '2014-08-02 11:48:38', 0, 0, 0, 0, 0, 0, NULL, '', 142140, 142140, 0, 'bKash', 0, 0),
(94, NULL, '', 0, '', 'rohman', '', '', NULL, NULL, '2014-08-02 12:12:09', 0, 0, 0, 0, 0, 0, NULL, '', 142140, 142140, 0, 'bKash', 0, 0),
(95, NULL, '', 0, '', 'rohman', '', '', NULL, NULL, '2014-08-02 19:00:45', 0, 0, 0, 0, 0, 0, NULL, '', 98900, 98900, 0, 'bKash', 0, 0),
(96, NULL, '', 0, '', 'afzal', '', '', NULL, NULL, '2014-08-04 14:44:45', 0, 0, 0, 0, 0, 0, NULL, '', 2300, 2300, 0, 'bKash', 0, 0),
(97, NULL, '', 0, '', 'rajib', '', '', NULL, NULL, '2014-08-05 13:02:07', 0, 0, 0, 0, 0, 0, NULL, '', 142750, 142750, 0, 'bKash', 0, 0),
(98, NULL, '', 0, '', 'rajib', '', '', NULL, NULL, '2014-08-05 13:27:59', 0, 0, 0, 0, 0, 0, NULL, '', 56700, 56700, 0, 'bKash', 0, 0),
(99, NULL, '', 0, '', 'rajib', '', '', NULL, NULL, '2014-08-05 13:36:25', 0, 0, 0, 0, 0, 0, NULL, '', 56700, 56700, 0, 'bKash', 0, 0),
(100, NULL, '', 0, '', 'mdafzalur', '', '', NULL, NULL, '2014-08-05 16:34:52', 0, 0, 0, 0, 0, 0, NULL, '', 5600, 5600, 0, 'bKash', 7, 0),
(101, NULL, '', 0, '', 'litu', '', '', NULL, NULL, '2014-08-07 17:15:12', 0, 0, 0, 0, 0, 0, NULL, '', 31400, 31400, 0, 'bKash', 6, 0),
(102, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-12 06:07:21', 0, 0, 0, 0, 0, 0, NULL, '', 4600, 4600, 0, 'bKash', 0, 0),
(103, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-12 13:46:45', 0, 0, 0, 0, 0, 0, NULL, '', 431500, 431500, 0, 'bKash', 0, 0),
(104, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-12 13:49:47', 0, 0, 0, 0, 0, 0, NULL, '', 431500, 431500, 0, 'bKash', 0, 0),
(105, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-12 14:01:41', 0, 0, 0, 0, 0, 0, NULL, '', 431500, 431500, 0, 'bKash', 0, 0),
(106, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-12 14:04:41', 0, 0, 0, 0, 0, 0, NULL, '', 851500, 851500, 0, 'bKash', 0, 0),
(107, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-12 14:50:05', 0, 0, 0, 0, 0, 0, NULL, '', 420000, 420000, 0, 'bKash', 0, 0),
(108, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-12 14:51:10', 0, 0, 0, 0, 0, 0, NULL, '', 420000, 420000, 0, 'PayPal', 0, 0),
(109, NULL, '', 0, '', 'arif', '', '', NULL, NULL, '2014-08-14 12:30:16', 0, 0, 0, 0, 0, 0, NULL, '', 1260000, 1260000, 0, 'bKash', 0, 0),
(110, NULL, '', 0, '', 'arif', '', '', NULL, NULL, '2014-08-14 12:31:27', 0, 0, 0, 0, 0, 0, NULL, '', 1260000, 1260000, 0, 'bKash', 0, 0),
(111, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-08-15 11:34:06', 0, 0, 0, 0, 0, 0, NULL, '', 116700, 116700, 0, 'bKash', 0, 0),
(112, NULL, '', 0, '', 'mosaddek', '', '', NULL, NULL, '2014-08-15 11:39:16', 0, 0, 0, 0, 0, 0, NULL, '', 116700, 116700, 0, 'bKash', 0, 0),
(113, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-15 12:15:29', 0, 0, 0, 0, 0, 0, NULL, '', 1400, 1400, 0, 'bKash', 0, 0),
(114, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-15 12:17:10', 0, 0, 0, 0, 0, 0, NULL, '', 1400, 1400, 0, 'bKash', 0, 0),
(115, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-15 12:17:31', 0, 0, 0, 0, 0, 0, NULL, '', 1400, 1400, 0, 'bKash', 0, 0),
(116, NULL, '', 0, '', 'mmigbd', '', '', NULL, NULL, '2014-08-15 12:17:39', 0, 0, 0, 0, 0, 0, NULL, '', 1400, 1400, 0, 'PayPal', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE IF NOT EXISTS `order_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`order_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(17) NOT NULL,
  `p_add_id` int(11) NOT NULL COMMENT 'billing address',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=pending 1=payment received 2=payment sent 3=payment refused 4=partial payment',
  `total_amount` float NOT NULL DEFAULT '0',
  `net_amount` float NOT NULL DEFAULT '0',
  `currency` varchar(5) NOT NULL,
  `p_email` varchar(60) NOT NULL,
  `payment_process` float NOT NULL COMMENT '0=paypal 1=card 2=cheq 3=cash 4=exhange 5=other',
  PRIMARY KEY (`tid`),
  UNIQUE KEY `transaction_id` (`transaction_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `location2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=371 ;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `unique_id`, `location`, `location2`) VALUES
(114, '1381013351', 'product/114.jpg', ''),
(115, '1381013351', 'product/115.jpg', ''),
(116, '1381013351', 'product/116.jpg', ''),
(117, '1381013351', 'product/117.jpg', ''),
(137, '1390555880', 'product/137.jpg', ''),
(138, '1390555880', 'product/139.jpg', ''),
(139, '1390557553', 'product/139.jpg', ''),
(140, '1390557907', 'product/140.jpg', ''),
(144, '1390812499', 'product/141.jpg', ''),
(145, '1390813773', 'product/145.jpg', ''),
(146, '1390814313', 'product/146.jpg', ''),
(148, '1390820395', 'product/147.jpg', ''),
(149, '1390820612', 'product/149.jpg', ''),
(150, '1390822574', 'product/150.jpg', ''),
(151, '1390822699', 'product/151.jpg', ''),
(152, '1390822859', 'product/152.jpg', ''),
(153, '1390823070', 'product/153.jpg', ''),
(154, '1390823290', 'product/154.jpg', ''),
(155, '1390828267', 'product/155.jpg', ''),
(156, '1390828406', 'product/156.jpg', ''),
(157, '1390828966', 'product/157.jpg', ''),
(158, '1390829098', 'product/158.jpg', ''),
(159, '1390829193', 'product/159.jpg', ''),
(160, '1390829662', 'product/160.jpg', ''),
(161, '1390830796', 'product/161.jpg', ''),
(162, '1390831197', 'product/162.jpg', ''),
(163, '1390831610', 'product/163.jpg', ''),
(164, '1390831841', 'product/164.jpg', ''),
(165, '1390832390', 'product/165.jpg', ''),
(166, '1390833326', 'product/166.jpg', ''),
(167, '1390837031', 'product/167.jpg', ''),
(168, '1390883004', 'product/168.jpg', ''),
(169, '1390883605', 'product/169.jpg', ''),
(171, '1391684933', 'product/171.jpg', ''),
(172, '1391685028', 'product/172.jpg', ''),
(173, '1391685129', 'product/174.jpg', ''),
(174, '1391685185', 'product/174.jpg', ''),
(175, '1391685360', 'product/175.jpg', ''),
(176, '1391685564', 'product/176.jpg', ''),
(177, '1391685806', 'product/177.jpg', ''),
(178, '1391685885', 'product/178.jpg', ''),
(179, '1391686488', 'product/179.jpg', ''),
(180, '1391787907', 'product/180.jpg', ''),
(181, '1391788309', 'product/181.jpg', ''),
(182, '1391789966', 'product/182.jpg', ''),
(183, '1391790306', 'product/183.jpg', ''),
(186, '1391790709', 'product/186.jpg', ''),
(187, '1391791248', 'product/187.jpg', ''),
(188, '1391791571', 'product/188.jpg', ''),
(189, '1391791772', 'product/189.jpg', ''),
(190, '1391792007', 'product/190.jpg', ''),
(191, '1391792110', 'product/191.jpg', ''),
(192, '1391792179', 'product/192.jpg', ''),
(193, '1391792284', 'product/193.jpg', ''),
(194, '1391792396', 'product/194.jpg', ''),
(195, '1391792542', 'product/195.JPG', ''),
(196, '1391792896', 'product/196.jpg', ''),
(197, '1391793114', 'product/197.jpg', ''),
(198, '1391795564', 'product/198.jpg', ''),
(199, '1391795703', 'product/199.jpg', ''),
(200, '1391795925', 'product/200.png', ''),
(201, '1391796017', 'product/201.jpg', ''),
(202, '1391796081', 'product/202.jpg', ''),
(203, '1391796156', 'product/203.jpg', ''),
(204, '1391796372', 'product/204.png', ''),
(205, '1391796487', 'product/205.jpg', ''),
(206, '1391796610', 'product/206.jpg', ''),
(207, '1391796670', 'product/207.jpg', ''),
(208, '1391796769', 'product/208.jpg', ''),
(209, '1391796836', 'product/209.jpg', ''),
(210, '1391796907', 'product/210.jpg', ''),
(211, '1391796983', 'product/211.jpg', ''),
(212, '1391797033', 'product/212.jpg', ''),
(213, '1391797080', 'product/213.jpg', ''),
(214, '1391797138', 'product/214.jpg', ''),
(215, '1391797207', 'product/215.jpg', ''),
(216, '1391797272', 'product/216.jpg', ''),
(217, '1391797354', 'product/217.jpg', ''),
(218, '1391829261', 'product/218.jpg', ''),
(219, '1391829339', 'product/219.jpg', ''),
(220, '1391829405', 'product/220.jpg', ''),
(221, '1391829465', 'product/221.jpg', ''),
(222, '1391829514', 'product/222.jpg', ''),
(223, '1391829589', 'product/223.jpg', ''),
(224, '1391829674', 'product/224.jpg', ''),
(225, '1391829732', 'product/225.jpg', ''),
(226, '1391829805', 'product/226.jpg', ''),
(227, '1391829879', 'product/227.jpg', ''),
(228, '1391829942', 'product/228.jpg', ''),
(229, '1391830832', 'product/229.jpg', ''),
(230, '1391830903', 'product/230.jpg', ''),
(231, '1391830981', 'product/231.jpg', ''),
(232, '1391831019', 'product/232.jpg', ''),
(233, '1391831068', 'product/233.jpg', ''),
(234, '1391831110', 'product/234.jpg', ''),
(235, '1391831148', 'product/235.jpg', ''),
(236, '1391831191', 'product/236.jpg', ''),
(237, '1391831233', 'product/237.jpg', ''),
(238, '1391831298', 'product/238.jpg', ''),
(239, '1391831336', 'product/239.jpg', ''),
(240, '1391831394', 'product/240.jpg', ''),
(241, '1391831481', 'product/241.jpg', ''),
(242, '1391831558', 'product/242.jpg', ''),
(243, '1391831640', 'product/243.jpg', ''),
(244, '1391831851', 'product/244.jpg', ''),
(245, '1391831905', 'product/245.jpg', ''),
(246, '1391831957', 'product/246.jpg', ''),
(247, '1391832031', 'product/247.gif', ''),
(248, '1391832123', 'product/248.jpg', ''),
(249, '1391879697', 'product/249.jpg', ''),
(250, '1391879754', 'product/250.jpg', ''),
(251, '1391879852', 'product/251.jpg', ''),
(252, '1391879920', 'product/252.jpg', ''),
(253, '1391879988', 'product/253.jpg', ''),
(254, '1391880070', 'product/254.jpg', ''),
(255, '1391880140', 'product/255.jpg', ''),
(256, '1391880247', 'product/256.jpg', ''),
(257, '1391880366', 'product/257.jpg', ''),
(258, '1391880478', 'product/258.jpg', ''),
(259, '1391880534', 'product/259.jpg', ''),
(260, '1391880613', 'product/260.jpg', ''),
(261, '1391880673', 'product/261.jpg', ''),
(262, '1391880801', 'product/262.jpg', ''),
(263, '1391880902', 'product/263.jpg', ''),
(264, '1391880965', 'product/264.jpg', ''),
(265, '1391881049', 'product/265.jpg', ''),
(266, '1391881109', 'product/266.jpg', ''),
(267, '1391881189', 'product/267.jpg', ''),
(268, '1391881240', 'product/268.jpg', ''),
(269, '1391881297', 'product/269.jpg', ''),
(270, '1391881369', 'product/270.jpg', ''),
(271, '1391881442', 'product/271.gif', ''),
(272, '1391881507', 'product/272.jpg', ''),
(273, '1391881571', 'product/273.jpg', ''),
(274, '1391881633', 'product/274.jpg', ''),
(275, '1391881700', 'product/275.jpg', ''),
(276, '1391881750', 'product/276.jpg', ''),
(277, '1391881799', 'product/277.jpg', ''),
(278, '1391881853', 'product/278.jpg', ''),
(279, '1391881908', 'product/279.jpg', ''),
(280, '1392047475', 'product/280.jpg', ''),
(281, '1392047683', 'product/281.jpg', ''),
(282, '1392047896', 'product/282.jpg', ''),
(283, '1392049699', 'product/283.jpg', ''),
(286, '1392430184', 'product/286.jpg', ''),
(288, '1392613970', 'product/288.jpg', ''),
(289, '1392615235', 'product/289.jpg', ''),
(290, '1392618518', 'product/290.jpg', ''),
(291, '1392618775', 'product/291.jpg', ''),
(292, '1392618876', 'product/292.jpg', ''),
(293, '1392618939', 'product/293.jpg', ''),
(294, '1392619105', 'product/294.jpg', ''),
(295, '1392619575', 'product/295.jpg', ''),
(297, '1392620587', 'product/297.jpg', ''),
(298, '1392620663', 'product/298.jpg', ''),
(299, '1392620491', 'product/299.jpg', ''),
(300, '1392620784', 'product/300.jpg', ''),
(301, '1392620869', 'product/301.jpg', ''),
(302, '1392621072', 'product/302.jpg', ''),
(303, '1392622086', 'product/303.jpg', ''),
(304, '1392622142', 'product/304.jpg', ''),
(305, '1392622212', 'product/305.jpg', ''),
(306, '1392622264', 'product/306.jpg', ''),
(307, '1392622318', 'product/307.jpg', ''),
(308, '1392622405', 'product/308.jpg', ''),
(309, '1392622468', 'product/309.jpg', ''),
(310, '1392622520', 'product/310.jpg', ''),
(311, '1392622572', 'product/311.jpg', ''),
(312, '1392622620', 'product/312.jpg', ''),
(313, '1392622687', 'product/313.jpg', ''),
(314, '1392622766', 'product/314.jpg', ''),
(315, '1392622832', 'product/315.jpg', ''),
(316, '1392622928', 'product/316.jpg', ''),
(317, '1392622989', 'product/317.jpg', ''),
(318, '1392623054', 'product/318.jpg', ''),
(319, '1392623170', 'product/319.jpg', ''),
(320, '1392623245', 'product/320.jpg', ''),
(321, '1392623354', 'product/321.jpg', ''),
(322, '1392623489', 'product/322.jpg', ''),
(323, '1392626742', 'product/323.jpg', ''),
(324, '1392627387', 'product/324.jpg', ''),
(325, '1392627487', 'product/325.jpg', ''),
(326, '1392627558', 'product/326.jpg', ''),
(327, '1392628046', 'product/327.jpg', ''),
(329, '1392628170', 'product/329.jpg', ''),
(330, '1392628206', 'product/330.jpg', ''),
(331, '1392628516', 'product/331.jpg', ''),
(332, '1392628563', 'product/332.jpg', ''),
(333, '1392628596', 'product/333.jpg', ''),
(334, '1392628636', 'product/334.jpg', ''),
(335, '1392629085', 'product/335.jpg', ''),
(336, '1392629139', 'product/336.jpg', ''),
(337, '1392629245', 'product/337.jpg', ''),
(338, '1392629285', 'product/338.jpg', ''),
(339, '1392629375', 'product/339.jpg', ''),
(340, '1392629442', 'product/340.jpg', ''),
(341, '1392629475', 'product/341.jpg', ''),
(342, '1392629522', 'product/342.jpg', ''),
(343, '1392629563', 'product/343.jpg', ''),
(344, '1392629605', 'product/344.jpg', ''),
(345, '1392629647', 'product/345.jpg', ''),
(346, '1392629708', 'product/346.jpg', ''),
(347, '1392629772', 'product/347.jpg', ''),
(348, '1392629816', 'product/348.jpg', ''),
(349, '1392629855', 'product/349.jpg', ''),
(350, '1392629894', 'product/350.jpg', ''),
(351, '1392629937', 'product/351.jpg', ''),
(352, '1392630097', 'product/352.jpg', ''),
(353, '1392630245', 'product/353.jpg', ''),
(354, '1392630288', 'product/354.jpg', ''),
(355, '1392630325', 'product/355.jpg', ''),
(356, '1392630376', 'product/356.jpg', ''),
(357, '1392630420', 'product/357.jpg', ''),
(358, '1392630455', 'product/358.jpg', ''),
(359, '1392630494', 'product/359.jpg', ''),
(360, '1392630533', 'product/360.jpg', ''),
(361, '1392631333', 'product/361.jpg', ''),
(362, '1392631439', 'product/362.jpg', ''),
(363, '1398096220', 'product/363.jpg', ''),
(364, '1406280788', 'product/364.jpg', ''),
(365, '1406280788', 'product/365.jpg', ''),
(366, '1406280788', 'product/366.jpg', ''),
(367, '1406280788', 'product/367.jpg', ''),
(369, '1408100938', 'product/368.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(100) NOT NULL,
  `cat1_id` int(11) NOT NULL DEFAULT '0',
  `cat2_id` int(11) NOT NULL DEFAULT '0',
  `product_name` varchar(500) NOT NULL,
  `product_details` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(500) NOT NULL,
  `supported_printer` varchar(500) NOT NULL,
  `quantity` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `postage_cost` float DEFAULT '0',
  `dis_price` float DEFAULT NULL,
  `weight` varchar(500) NOT NULL,
  `size` varchar(500) NOT NULL,
  `warranty` varchar(500) NOT NULL,
  `status_avail` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1',
  `feature` int(11) NOT NULL DEFAULT '0',
  `uploader_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=336 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `unique_id`, `cat1_id`, `cat2_id`, `product_name`, `product_details`, `model`, `supported_printer`, `quantity`, `date`, `price`, `postage_cost`, `dis_price`, `weight`, `size`, `warranty`, `status_avail`, `status`, `feature`, `uploader_id`) VALUES
(124, '1390812499', 27, 61, 'HP LaserJet Toner Cartridge', '', '05A', '"    » HP LaserJet P2030 Printer series     » HP LaserJet P2035     » HP LaserJet P2050 Printer series     » HP LaserJet P2055"', '200', '20140127024819', 6500, 200, 0, '', '', 'International Warranty', 0, 0, 0, 1),
(125, '1390813773', 27, 61, 'HP LaserJet Toner Cartridge', '', '10A', '» HP LaserJet 2300 Printer series', '200', '20140127030933', 10800, 10000, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(126, '1390814313', 27, 61, 'HP LaserJet Toner Cartridge', '', '11A', '"    » HP LaserJet 2410 Printer series     » HP LaserJet 2420 Printer series     » HP LaserJet 2430 Printer series"', '200', '20140127031833', 11000, 10800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(128, '1390820395', 27, 61, 'HP LaserJet Toner Cartridge', '', '12A', '"    » HP LaserJet 1010 Printer series     » HP LaserJet 1012 Printer series     » HP LaserJet 1015 Printer series     » HP LaserJet 1018 Printer series     » HP LaserJet 1020 Printer series     » HP LaserJet 1022 Printer series     » HP LaserJet 3015 Printer series     » HP LaserJet 3020 Printer series     » HP LaserJet 3030 All-in-One series     » HP LaserJet 3050 All-in-One series     » HP LaserJet 3052 All-in-One series     » HP LaserJet 3055 All-in-One series     » HP LaserJet M1005 MFP ser', '200', '20140127045955', 5300, 5100, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(129, '1390820612', 27, 61, 'HP LaserJet Toner Cartridge', '', '13A', ' » HP LaserJet 1300 Printer series', '200', '20140127050332', 6700, 6500, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(130, '1390822574', 27, 61, 'HP LaserJet Toner Cartridge', '', '15A', '"    HP LaserJet 1000 Printer series     HP LaserJet 1005 Printer series     HP LaserJet 1200 Printer series     HP LaserJet 3300 Printer series     HP LaserJet 1220 All-in-One series     HP LaserJet 3380 All-in-One series"', '200', '20140127053614', 5400, 5300, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(131, '1390822699', 27, 61, 'HP LaserJet Toner Cartridge', '', '16A', '» HP LaserJet 5200 Printer series', '200', '20140127053819', 13800, 13500, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(132, '1390822859', 27, 61, 'HP LaserJet Toner Cartridge', '', ' 35A', '"    » HP LaserJet P1005 Printer series     » HP LaserJet P1006 Printer series"', '200', '20140127054059', 4600, 4400, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(133, '1390823070', 27, 61, 'HP LaserJet Toner Cartridge', '', ' 38A', ' » HP LaserJet 4200 Printer series', '200', '20140127054430', 17000, 16500, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(134, '1390823290', 27, 61, 'HP LaserJet Toner Cartridge', '', '43X', '"       » HP LaserJet 9000 Printer series     » HP LaserJet 9040 Printer series     » HP LaserJet 9050 Printer series     » HP LaserJet 9000 MFP series     » HP LaserJet 9000L MFP series     » HP LaserJet 9040 MFP series     » HP LaserJet 9050 MFP series     » HP LaserJet M9040 MFP series     » HP LaserJet M9050 MFP series"', '200', '20140127054810', 23000, 22000, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(135, '1390828267', 27, 61, 'HP LaserJet Toner Cartridge', '', ' 78A', '"    » HP LaserJet P1606 Printer series     » HP LaserJet Pro M1536 MFP"', '200', '20140127071107', 5700, 5500, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(136, '1390828406', 27, 61, 'HP LaserJet Toner Cartridge', '', ' 85A', '"    » HP LaserJet M1217 Printer series     » HP LaserJet P1102 Printer series     » HP LaserJet Pro M1212 MFP"', '200', '20140127071326', 4800, 4600, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(137, '1390828966', 27, 61, 'HP LaserJet Toner Cartridge', '', '51A', '"    » HP LaserJet P3005 Printer series     » HP LaserJet M3027 MFP series     » HP LaserJet M3035 MFP series"', '200', '20140127072246', 10200, 10000, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(138, '1390829098', 27, 61, 'HP LaserJet Toner Cartridge', '', '53A', '"    » HP LaserJet P2014 Printer series     » HP LaserJet P2015 Printer series     » HP LaserJet M2727 MFP series"', '200', '20140127072458', 6400, 6200, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(139, '1390829193', 27, 61, 'HP LaserJet Toner Cartridge', '', ' 55A', ' » HP LaserJet P3015', '200', '20140127072633', 11700, 11000, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(140, '1390829662', 27, 61, 'HP LaserJet Toner Cartridge', '', ' 64A', '"    » HP LaserJet 4014 Printer series     » HP LaserJet P4014 Printer series     » HP LaserJet P4015 Printer series     » HP LaserJet P4515 Printer series"', '200', '20140127073422', 11800, 11000, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(141, '1390830796', 27, 61, 'HP LaserJet Toner Cartridge', '', '49A', '» HP LaserJet 1160-1320 Printer series', '200', '20140127075316', 6700, 6500, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(142, '1390831197', 27, 61, 'HP LaserJet Toner Cartridge', '', 'Q5942A', '» HP LaserJet 4240, 4250, 4350 Printer series', '200', '20140127075957', 11500, 11100, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(143, '1390831610', 27, 61, 'HP LaserJet Toner Cartridge', '', 'CB436A', '» HP LaserJet  P1505  Printer series', '200', '20140127080650', 5600, 5400, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(144, '1390831841', 27, 61, 'HP LaserJet Toner Cartridge', '', 'C4129X ', '» HP LaserJet   5000, 500LE, 5100 Printer series', '200', '20140127081041', 15500, 15000, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(145, '1390832390', 27, 61, 'HP LaserJet Toner Cartridge', '', '90A', '» HP LaserJet  LJ 602 D Printer series', '200', '20140127081950', 13500, 13000, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(146, '1390833326', 27, 61, 'HP LaserJet Toner Cartridge', '', '80A', '» HP LaserJet    LJ 401 D  Printer series', '200', '20140127083526', 7150, 6800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(147, '1390837031', 27, 63, 'HP Original INK Cartridge', '', 'HP 95 Cartridge Col.', '"    » HP Deskjet 460 Mobile Printer series     » HP Deskjet 5940 Printer series     » HP Deskjet 6500 Printer series     » HP Deskjet 6620 Printer series     » HP Deskjet 6940/6980 Printer series     » HP Deskjet 6988 Printer series     » HP Officejet H470 Mobile Printer series     » HP Officejet 6300 All-in-One series     » HP Photosmart 422/425/428 Portable Photo Studio series     » HP Photosmart 470 Printer series     » HP Photosmart 7800 Printer series     » HP Photosmart 8000 Printer serie', '200', '20140127093711', 1950, 1900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(148, '1390883004', 27, 63, 'HP Original INK Cartridge', '', '74 Black', '"    » HP Deskjet D4200 Printer series     » HP Deskjet D4300 Printer series     » HP Officejet J5700 All-in-One series     » HP Officejet J6400 All-in-One series     » HP Photosmart D5300 Printer series     » HP Photosmart C4200 All-in-One series     » HP Photosmart C4340 All-in-One series     » HP Photosmart C4380 All-in-One series     » HP Photosmart C4400 All-in-One series     » HP Photosmart C4500 All-in-One series     » HP Photosmart C5200 All-in-One series     » HP Photosmart C5500 All-in', '200', '20140127222324', 1300, 1260, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(149, '1390883605', 27, 63, 'HP Original INK Cartridge', '', ' 75 Tri-Color', '"       » HP Deskjet D4200 Printer series     » HP Deskjet D4300 Printer series     » HP Officejet J5700 All-in-One series     » HP Officejet J6400 All-in-One series     » HP Photosmart D5300 Printer series     » HP Photosmart C4200 All-in-One series     » HP Photosmart C4340 All-in-One series     » HP Photosmart C4380 All-in-One series     » HP Photosmart C4400 All-in-One series     » HP Photosmart C4500 All-in-One series     » HP Photosmart C5200 All-in-One series     » HP Photosmart C5500 All', '200', '20140127223325', 1450, 1400, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(151, '1391787907', 27, 63, 'HP Original INK Cartridge', '', ' 21 Black', '"    » HP Deskjet 3910/3920 Printer series     » HP Deskjet 3930/3940 Printer series     » HP Deskjet D1300 Printer series     » HP Deskjet D1360 Printer series     » HP Deskjet D1400 Printer series     » HP Deskjet D1500 Printer series     » HP Deskjet D2300 Printer series     » HP Deskjet D2360 Printer series     » HP Deskjet D2400 Printer series     » HP Deskjet F2100 Printer series     » HP Deskjet F300 Printer series     » HP Deskjet F380 Printer series     » HP Deskjet F4100 Printer series', '100', '20140207094507', 1140, 1100, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(152, '1391788309', 27, 63, 'HP Original INK Cartridge', '', ' 22 Tri-Color', '"    Tri-color Inkjet Print Cartridge (C9352A) 165 standard pages 6.0 ml     Compatible printers (released since July 2005)     » HP Deskjet 3910/3920 Printer series     » HP Deskjet 3930/3940 Printer series     » HP Deskjet D1300 Printer series     » HP Deskjet D1360 Printer series     » HP Deskjet D1400 Printer series     » HP Deskjet D1500 Printer series     » HP Deskjet D2300 Printer series     » HP Deskjet D2360 Printer series     » HP Deskjet D2400 Printer series     » HP Deskjet F2100 Pri', '100', '20140207095149', 1400, 1350, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(156, '1391791248', 28, 66, 'Canon Original INK ', '', '821 (bk)', 'PIXMA iP3680  PIXMA iP4680  PIXMA iP4700  PIXMA iP4760 PIXMA MP545  PIXMA MP558   PIXMA MP568  PIXMA MP628 PIXMA MP638  PIXMA MP648  PIXMA MP988  PIXMA MP996 PIXMA MX868  PIXMA MX876', '100', '20140207104048', 800, 750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(155, '1391790709', 27, 63, 'HP Original INK Cartridge', '', ' 22 Tri-Color', '"    Tri-color Inkjet Print Cartridge (C9352A) 165 standard pages 6.0 ml     Compatible printers (released since July 2005)     » HP Deskjet 3910/3920 Printer series     » HP Deskjet 3930/3940 Printer series     » HP Deskjet D1300 Printer series     » HP Deskjet D1360 Printer series     » HP Deskjet D1400 Printer series     » HP Deskjet D1500 Printer series     » HP Deskjet D2300 Printer series     » HP Deskjet D2360 Printer series     » HP Deskjet D2400 Printer series     » HP Deskjet F2100 Pri', '100', '20140207103149', 1400, 1350, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(157, '1391791571', 28, 66, 'Canon Original INK ', '', '3e Black', 'Canon BJC-3000  Canon MULTIPASS F50  Canon PIXMA MP780 Canon BJC-3010  Canon MultiPASS F60  Canon S400 Canon BJC-6000  Canon MultiPASS F80  Canon S450 Canon BJC-6100  Canon MULTIPASS M60  Canon S455 Canon BJC-6200  Canon MultiPASS MP700  Canon S500 Canon BJC-6500  Canon MultiPASS MP730  Canon S520 Canon i550  Canon MultiPASS MP750  Canon S530 Canon i560  Canon MultiPASS MP760  Canon S530D Canon i850  Canon PIXMA IP3000  Canon S540 Canon i860  Canon PIXMA IP4000  Canon S550 Canon i865  Canon PIXM', '20', '20140207104611', 850, 800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(158, '1391791772', 28, 66, 'Canon Original INK ', '', 'BCI-6BK', 'Canon BJ-F850, BJ-F870, BJ-F870, BJ-S8200, BJC-8200, i860, i865, i900D, i9100, i950, i960, i6500, i9100D, S800, S820, S820D, S830D, S900, S9000', '30', '20140207104932', 800, 750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(159, '1391792007', 28, 66, 'Canon Original INK ', '', 'BCI-15BK', ' Canon i70  Canon PIXMA iP90  Canon PIXMA iP90v  Canon i80', '20', '20140207105327', 1200, 1150, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(160, '1391792110', 28, 66, 'Canon Original INK ', '', 'BCI-15©', ' Canon i70  Canon i80  Canon PIXMA iP90v ', '15', '20140207105510', 1600, 1550, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(161, '1391792179', 28, 66, 'Canon Original INK ', '', 'BCI-16©', 'Canon PIXMA iP90   Canon PIXMA iP90v  Canon SELPHY DS 700 Dock Printer  Canon SELPHY DS810 Dock Printer ', '20', '20140207105619', 1600, 1550, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(162, '1391792284', 28, 66, 'Canon Original INK ', '', 'BCI-24 (B) Twin pack', 'Canon BJC-5200  Canon i470  Canon MultiPASS MP390 Canon BJC-5300  Canon i475D  Canon PIXMA IP1500 Canon BJC-S200  Canon MULTIPASS 320  Canon PIXMA IP2000 Canon i250  Canon MultiPASS F20  Canon PIXMA MP130 Canon i320  Canon MultiPASS MP130  Canon S200 Canon i350  Canon MultiPASS MP360  Canon S300 Canon i450  Canon MultiPASS MP370  Canon S330 Canon i455', '30', '20140207105804', 800, 750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(163, '1391792396', 28, 66, 'Canon Original INK ', '', 'BCI-24 © Twin pack', 'Canon BJC-5200  Canon i470  Canon MultiPASS MP390 Canon BJC-5300  Canon i475D  Canon PIXMA IP1500 Canon BJC-S200  Canon MULTIPASS 320  Canon PIXMA IP2000 Canon i250  Canon MultiPASS F20  Canon PIXMA MP130 Canon i320  Canon MultiPASS MP130  Canon S200 Canon i350  Canon MultiPASS MP360  Canon S300 Canon i450  Canon MultiPASS MP370  Canon S330 Canon i455', '20', '20140207105956', 1300, 1250, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(164, '1391792542', 28, 66, 'Canon Original INK ', '', 'BCI-24 ©', 'Canon BJC-5200  Canon i470  Canon MultiPASS MP390 Canon BJC-5300  Canon i475D  Canon PIXMA IP1500 Canon BJC-S200  Canon MULTIPASS 320  Canon PIXMA IP2000 Canon i250  Canon MultiPASS F20  Canon PIXMA MP130 Canon i320  Canon MultiPASS MP130  Canon S200 Canon i350  Canon MultiPASS MP360  Canon S300 Canon i450  Canon MultiPASS MP370  Canon S330 Canon i455', '20', '20140207110222', 900, 850, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(165, '1391792896', 28, 66, 'Canon Original INK ', '', 'PGI-35 (B) for IP-100', 'Canon PIXMA IP100', '10', '20140207110816', 1200, 1150, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(166, '1391793114', 28, 66, 'Canon Original INK ', '', 'BCI-6 ©', 'Canon BJ-F850, BJ-F870, BJ-F870, BJ-S8200, BJC-8200, i860, i865, i900D, i9100, i950, i960, i6500, i9100D, S800, S820, S820D, S830D, S900, S9000', '10', '20140207111154', 800, 750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(167, '1391795564', 28, 66, 'Canon Original INK ', '', 'CLI-8   (BK)', 'Canon PIXMA iP4200 Canon PIXMA iP4500 Canon PIXMA iP5200R Canon PIXMA MP530 Canon PIXMA MP610 Canon PIXMA MP830  Canon PIXMA MP970 Canon PIXMA iP4200R Canon PIXMA iP4300 Canon PIXMA iP5200 Canon PIXMA MP500 Canon PIXMA MP600  Canon PIXMA MP800 Canon PIXMA MP800R Canon PIXMA MP810 Canon PIXMA MP950 Canon PIXMA MP960 Canon PIXMA MX850', '20', '20140207115244', 950, 900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(168, '1391795703', 28, 0, 'Canon Original INK ', '', 'CLI-8  (M)', 'Canon PIXMA iP4200 Canon PIXMA iP4500 Canon PIXMA iP5200R Canon PIXMA MP530 Canon PIXMA MP610 Canon PIXMA MP830  Canon PIXMA MP970 Canon PIXMA iP4200R Canon PIXMA iP4300 Canon PIXMA iP5200 Canon PIXMA MP500 Canon PIXMA MP600  Canon PIXMA MP800 Canon PIXMA MP800R Canon PIXMA MP810 Canon PIXMA MP950 Canon PIXMA MP960 Canon PIXMA MX850', '20', '20140207115503', 950, 900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(169, '1391795925', 28, 66, 'Canon Original INK ', '', 'PG 810  ASA', 'Canon iP2772, MP245, MP276, MP486, MP 258, MP 287, MP 496, MP 497, MX 328, MX 347, MX 357, MX366, MX416', '20', '20140207115845', 1250, 1200, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(170, '1391796017', 28, 66, 'Canon Original INK ', '', 'CLI-8  (PC)', 'PIXMA Pro9000 Mark II', '20', '20140207120017', 950, 900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(171, '1391796081', 28, 66, 'Canon Original INK ', '', 'CL  811  XL  ASA', 'MP245, MP258, MP276, MP287, MP486, MP496, MP497, MP545, MP628, MP638, MP988, MX328, MX338, MX347, MX357, MX366, MX426, iP2770, iP2680, iP2770, iP2772', '20', '20140207120121', 1700, 1650, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(172, '1391796156', 28, 66, 'Canon Original INK ', '', 'PGI-5  (BK)', 'Pixma MP500,Pixma MP520,Pixma MP530,Pixma MP600,Pixma MP610,Pixma MP800,Pixma MP800R,  Pixma MP810,Pixma MP830,Pixma MP960,Pixma MP970, Pixma MX700, Pixma MX850, Pixma iP3300, Pixma iP3500, Pixma iP4200, Pixma iP4300, Pixma iP4500, Pixma iP5200R, Pixma iP5300.', '20', '20140207120236', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(173, '1391796372', 28, 66, 'Canon Original INK ', '', 'Crtg. 302 (BK)', 'CANON LBP-5960 Canon ImageRunner LBP-5970/5975', '20', '20140207120612', 9000, 8500, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(174, '1391796487', 28, 66, 'Canon Original INK ', '', 'CL- 98', 'Canon Pixma E500 printer.', '20', '20140207120807', 1300, 1250, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(175, '1391796610', 28, 66, 'Canon Original INK ', '', 'CL-41 Color', 'Canon PIXMA IP1300  Canon PIXMA iP6200  Canon Pixma MP180 Canon PIXMA iP1600  Canon Pixma iP6310  Canon Pixma MP190 Canon PIXMA IP1700  Canon Pixma MP140  Canon Pixma MP210 Canon PIXMA IP1800  Canon PIXMA MP150  Canon PIXMA MP460 Canon PIXMA iP2200  Canon Pixma MP160  Canon PIXMA MX300 Canon PIXMA iP2600  Canon Pixma MP170  Canon PIXMA MX310', '20', '20140207121010', 1700, 1650, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(176, '1391796670', 28, 66, 'Canon Original INK ', '', 'CL-741 CL', 'Canon PIXMA MG 2170/ 3170/ 4170/MX517/MX377/MX437', '20', '20140207121110', 1650, 1600, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(177, '1391796769', 28, 66, 'Canon Original INK ', '', 'CLI-8  (PM)', ' PIXMA iP6600D PIXMA iP6700D PIXMA MP950 PIXMA MP960 PIXMA MP970 PIXMA Pro 6000 PIXMA Pro9000 PIXMA Pro9000 Mark II PIXMA 6500', '20', '20140207121249', 950, 900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(178, '1391796836', 28, 66, 'Canon Original INK ', '', 'CLI-8   ©', 'Canon PIXMA iP4200 Canon PIXMA iP4500 Canon PIXMA iP5200R Canon PIXMA MP530 Canon PIXMA MP610 Canon PIXMA MP830  Canon PIXMA MP970 Canon PIXMA iP4200R Canon PIXMA iP4300 Canon PIXMA iP5200 Canon PIXMA MP500 Canon PIXMA MP600  Canon PIXMA MP800 Canon PIXMA MP800R Canon PIXMA MP810 Canon PIXMA MP950 Canon PIXMA MP960 Canon PIXMA MX850', '20', '20140207121356', 950, 900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(179, '1391796907', 28, 66, 'Canon Original INK ', '', 'CLI-726  (BK)', ' printer PIXMA IP4870/IX6560/MG5170/MG5270 ', '20', '20140207121507', 850, 800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(180, '1391796983', 28, 66, 'Canon Original INK ', '', 'CLI-726  (M)', ' printer PIXMA IP4870/IX6560/MG5170/MG5270 ', '20', '20140207121623', 850, 800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(181, '1391797033', 28, 66, 'Canon Original INK ', '', 'CLI-726  ©', ' printer PIXMA IP4870/IX6560/MG5170/MG5270 ', '20', '20140207121713', 850, 800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(182, '1391797080', 28, 66, 'Canon Original INK ', '', 'CLI-726 (GY)', ' printer PIXMA IP4870/IX6560/MG5170/MG5270 ', '20', '20140207121800', 850, 800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(183, '1391797138', 28, 66, 'Canon Original INK ', '', 'CLI-726 (Y)', ' printer PIXMA IP4870/IX6560/MG5170/MG5270 ', '20', '20140207121858', 850, 800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(184, '1391797207', 28, 66, 'Canon Original INK ', '', 'CLI-751  C', '"For Canon® Pixma ip7270 For Canon® Pixma MG5470 For Canon® PIXMA MG6370, MX727,MX927 "', '20', '20140207122007', 1000, 950, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(185, '1391797272', 28, 66, 'Canon Original INK ', '', 'CLI-751 M', '"For Canon® Pixma ip7270 For Canon® Pixma MG5470 For Canon® PIXMA MG6370, MX727,MX927 "', '20', '20140207122112', 1000, 950, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(186, '1391797354', 28, 66, 'Canon Original INK ', '', 'CLI-751 Y', '', '20', '20140207122234', 1000, 950, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(187, '1391829261', 28, 66, 'Canon Original INK ', '', 'CLI-831C', ' iP1180/iP1880/iP1980/iP2580/iP2680  MP145/MP198/MP228/MP476 MX308/MX318 ', '20', '20140207211421', 1500, 1450, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(188, '1391829339', 28, 66, 'Canon Original INK ', '', 'BCI-6  (Y)', '"Canon BJ-F850, BJ-F870, BJ-F870, BJ-S8200, BJC-8200, i860, i865, i900D, i9100, i950, i960, i6500, i9100D, S800, S820, S820D, S830D, S900, S9000"', '20', '20140207211539', 800, 750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(189, '1391829405', 28, 66, 'Canon Original INK ', '', 'Crtg.  302 ©', '"CANON LBP-5960 Canon ImageRunner LBP-5970/5975"', '20', '20140207211645', 9000, 8900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(190, '1391829465', 28, 66, 'Canon Original INK ', '', 'Crtg. 302 (M) ', '"CANON LBP-5960 Canon ImageRunner LBP-5970/5975"', '20', '20140207211745', 9000, 8900, 0, '', '', '', 0, 1, 0, 1),
(191, '1391829514', 28, 66, 'Canon Original INK ', '', 'Crtg. 302 (Y)', '"CANON LBP-5960 Canon ImageRunner LBP-5970/5975"', '20', '20140207211834', 9000, 8900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(192, '1391829589', 28, 66, 'Canon Original INK ', '', 'CLI-821  (M)', '"PIXMA iP3680  PIXMA iP4680  PIXMA iP4700  PIXMA iP4760 PIXMA MP545  PIXMA MP558   PIXMA MP568  PIXMA MP628 PIXMA MP638  PIXMA MP648  PIXMA MP988  PIXMA MP996 PIXMA MX868  PIXMA MX876"', '20', '20140207211949', 800, 750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(193, '1391829674', 28, 66, 'Canon Original INK ', '', 'KP  108  Photo Paper with  ink for selphy printer', '', '20', '20140207212114', 2200, 2150, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(194, '1391829732', 28, 66, 'Canon Original INK ', '', 'BCI-6  (M)', '"Canon BJ-F850, BJ-F870, BJ-F870, BJ-S8200, BJC-8200, i860, i865, i900D, i9100, i950, i960, i6500, i9100D, S800, S820, S820D, S830D, S900, S9000"', '20', '20140207212212', 800, 750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(195, '1391829805', 28, 66, 'Canon Original INK ', '', 'CLI-8  (Y)', '"Canon PIXMA iP4200 Canon PIXMA iP4500 Canon PIXMA iP5200R Canon PIXMA MP530 Canon PIXMA MP610 Canon PIXMA MP830  Canon PIXMA MP970 Canon PIXMA iP4200R Canon PIXMA iP4300 Canon PIXMA iP5200 Canon PIXMA MP500 Canon PIXMA MP600  Canon PIXMA MP800 Canon PIXMA MP800R Canon PIXMA MP810 Canon PIXMA MP950 Canon PIXMA MP960 Canon PIXMA MX850"', '20', '20140207212325', 950, 900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(196, '1391829879', 28, 66, 'Canon Original INK ', '', 'PG -740 BK XL', 'Canon PIXMA MG 2170/ 3170/ 4170/MX517/MX377/MX437', '20', '20140207212439', 1600, 1550, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(197, '1391829942', 28, 66, 'Canon Original INK ', '', 'PG- 740 BK', 'Canon PIXMA MG 2170/ 3170/ 4170/MX517/MX377/MX437', '20', '20140207212542', 1200, 1150, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(198, '1391830832', 28, 66, 'Canon Original INK ', '', 'PG-40 Black', '"Canon FAX JX300  Canon PIXMA iP2600  Canon Pixma MP190 Canon FAX JX510P  Canon PIXMA iP6200  Canon Pixma MP210 Canon PIXMA IP1300  Canon Pixma MP140  Canon PIXMA MP460 Canon PIXMA iP1600  Canon PIXMA MP150  Canon Pixma MP470 Canon PIXMA IP1700  Canon Pixma MP160  Canon PIXMA MX300 Canon PIXMA IP1800  Canon Pixma MP170  Canon PIXMA MX310 Canon PIXMA iP2200  Canon Pixma MP180"', '20', '20140207214032', 1450, 1400, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(199, '1391830903', 28, 66, 'Canon Original INK ', '', 'PG-88', 'Canon Pixma E500 printer.', '20', '20140207214143', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(200, '1391830981', 28, 66, 'Canon Original INK ', '', 'PGI-9  (Green)', 'Canon PIXMA Pro9500, Pro9500 Mark II', '20', '20140207214301', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(201, '1391831019', 28, 66, 'Canon Original INK ', '', 'PGI-9  (Grey)', 'Canon PIXMA Pro9500, Pro9500 Mark II', '20', '20140207214339', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(202, '1391831068', 28, 66, 'Canon Original INK ', '', 'PGI-9  (M)', '"     Canon Pixma iX7000 ink cartridges     Canon Pixma MX7600 ink cartridges     Canon Pixma Pro 9500 ink cartridges     Canon Pixma Pro 9500 Mark II ink cartridges "', '20', '20140207214428', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(203, '1391831110', 28, 66, 'Canon Original INK ', '', 'PGI-9  (MBK)', 'Canon PIXMA Pro9500, Pro9500 Mark II', '20', '20140207214510', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(204, '1391831148', 28, 66, 'Canon Original INK ', '', 'PGI-9  (PBK)', '"     Canon Pixma iX7000 ink cartridges     Canon Pixma MX7600 ink cartridges     Canon Pixma Pro 9500 ink cartridges     Canon Pixma Pro 9500 Mark II ink cartridges "', '20', '20140207214548', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(205, '1391831191', 28, 66, 'Canon Original INK ', '', 'PGI-9  (PM)', 'Canon PIXMA Pro9500, Pro9500 Mark II', '20', '20140207214631', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(206, '1391831233', 28, 66, 'Canon Original INK ', '', 'PGI-9  (Red)', 'Canon PIXMA Pro9500, Pro9500 Mark II', '20', '20140207214713', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(207, '1391831298', 28, 66, 'Canon Original INK ', '', 'PGI-9  (Y)', '"     Canon Pixma iX7000 ink cartridges     Canon Pixma MX7600 ink cartridges     Canon Pixma Pro 9500 ink cartridges     Canon Pixma Pro 9500 Mark II ink cartridges "', '20', '20140207214818', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(208, '1391831336', 28, 66, 'Canon Original INK ', '', 'PGI-9  ©', '"     Canon Pixma iX7000 ink cartridges     Canon Pixma MX7600 ink cartridges     Canon Pixma Pro 9500 ink cartridges     Canon Pixma Pro 9500 Mark II ink cartridges "', '20', '20140207214856', 1100, 1050, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(209, '1391831394', 28, 66, 'Canon Original INK ', '', 'PGI-725(BK)', ' printer PIXMA IP4870/IX6560/MG5170/MG5270 ', '20', '20140207214954', 900, 850, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(210, '1391831481', 28, 66, 'Canon Original INK ', '', 'PGI-750  XL', '"For Canon® Pixma ip7270 For Canon® Pixma MG5470 For Canon® PIXMA MG6370, MX727,MX927 "', '20', '20140207215121', 1400, 1350, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(211, '1391831558', 28, 66, 'Canon Original INK ', '', 'PGI- 820 (B)', '"PIXMA iP3680  PIXMA iP4680  PIXMA iP4700  PIXMA iP4760 PIXMA MP545  PIXMA MP558   PIXMA MP568  PIXMA MP628 PIXMA MP638  PIXMA MP648  PIXMA MP988  PIXMA MP996 PIXMA MX868  PIXMA MX876"', '20', '20140207215238', 850, 800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(212, '1391831640', 28, 66, 'Canon Original INK ', '', 'PGI-830B', '" iP1180/iP1880/iP1980/iP2580/iP2680  MP145/MP198/MP228/MP476 MX308/MX318 "', '20', '20140207215400', 1150, 1100, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(213, '1391831851', 28, 65, 'Canon Original Toner', '', 'Crtg.  307  (BK)', 'canon lbp-5000/5100', '30', '20140207215731', 6500, 6300, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(214, '1391831905', 28, 65, 'Canon Original Toner', '', 'Crtg. 307 (Y)', 'canon lbp-5000/5100', '30', '20140207215825', 6500, 6300, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(215, '1391831957', 28, 65, 'Canon Original Toner', '', 'Crtg.  307  (M)', 'canon lbp-5000/5100', '30', '20140207215917', 6500, 6300, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(216, '1391832031', 28, 65, 'Canon Original Toner', '', 'Crtg. 329  (BK)', ' LBP7010/LBP7018', '30', '20140207220031', 4800, 4700, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(217, '1391832123', 28, 65, 'Canon Original Toner', '', 'Crtg.   308  (LBP-3300)', 'LBP-3300/3360', '20', '20140207220203', 5000, 4850, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(218, '1391879697', 28, 65, 'Canon Original Toner', '', 'Crtg.   309   (LBP-3500)', 'LBP-3500/3900', '20', '20140208111457', 16500, 16300, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(219, '1391879754', 28, 65, 'Canon Original Toner', '', 'Crtg.   310   (LBP-3460)', 'Canon LBP 3460', '20', '20140208111554', 9000, 8900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(220, '1391879852', 28, 65, 'Canon Original Toner', '', 'Crtg.   316 (Y)', '"Canon LBP-5050/5050n Canon Color imageClass MF8050cn Canon i-SENSYS MF8030cn/i-Sensys MF8350"', '20', '20140208111732', 5300, 5200, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(221, '1391879920', 28, 65, 'Canon Original Toner', '', 'Crtg.  316 (M)', '"Canon LBP-5050/5050n Canon Color imageClass MF8050cn Canon i-SENSYS MF8030cn/i-Sensys MF8350"', '20', '20140208111840', 5300, 5200, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(222, '1391879988', 28, 65, 'Canon Original Toner', '', 'Crtg.  316 ©', '"Canon LBP-5050/5050n Canon Color imageClass MF8050cn Canon i-SENSYS MF8030cn/i-Sensys MF8350"', '20', '20140208111948', 5300, 5200, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(223, '1391880070', 28, 65, 'Canon Original Toner', '', 'Crtg. 316  (BK)', '"Canon LBP-5050/5050n Canon Color imageClass MF8050cn Canon i-SENSYS MF8030cn/i-Sensys MF8350"', '20', '20140208112110', 5800, 5750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(224, '1391880140', 28, 65, 'Canon Original Toner', '', 'Crtg.  303  (LBP-3000)', 'Image Class MFLBP 2900/3000', '20', '20140208112220', 5300, 5200, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(225, '1391880247', 28, 65, 'Canon Original Toner', '', 'Crtg.  307  (BK)', 'canon lbp-5000/5100', '20', '20140208112407', 6500, 6300, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(226, '1391880366', 28, 65, 'Canon Original Toner', '', 'Crtg. 307  ©', 'canon lbp-5000/5100', '20', '20140208112606', 6500, 6300, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(227, '1391880478', 28, 65, 'Canon Original Toner', '', 'Crtg.  310   II  (LBP-3460) Economy  Pack', 'Canon LBP 3460', '20', '20140208112758', 14000, 13900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(228, '1391880534', 28, 65, 'Canon Original Toner', '', 'Crtg.  315   (LBP-3310, 3370)', ' canon LBP3310, LBP3370', '20', '20140208112854', 6300, 6200, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(229, '1391880613', 28, 65, 'Canon Original Toner', '', 'Crtg.  319  (LBP-6300dn)', 'canon LBP 6300/6500/6700 ', '20', '20140208113013', 6500, 6400, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(230, '1391880801', 28, 65, 'Canon Original Toner', '', 'Crtg.  328 LBP-MFP ', '"CANONCMF4420/4430/4120/4412/4410  452/4450/4550/4570/4580/D520 "', '20', '20140208113321', 5200, 5150, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(231, '1391880902', 28, 65, 'Canon Original Toner', '', 'Crtg.  329  (M)', ' LBP7010/LBP7018', '20', '20140208113502', 4800, 4750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(232, '1391880965', 28, 65, 'Canon Original Toner', '', 'Crtg.  329  (Y)', ' LBP7010/LBP7018', '20', '20140208113605', 4800, 4750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(233, '1391881049', 28, 65, 'Canon Original Toner', '', 'Crtg.  418(M)', 'LBP-7200/ iC MF8350Cdn ', '20', '20140208113729', 9000, 8900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(234, '1391881109', 28, 65, 'Canon Original Toner', '', 'Crtg.  418©', 'LBP-7200/ iC MF8350Cdn ', '20', '20140208113829', 9000, 8900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(235, '1391881189', 28, 65, 'Canon Original Toner', '', 'Crtg. 324', 'Canon Printer LBP6750DN ', '20', '20140208113949', 10000, 9900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(236, '1391881240', 28, 65, 'Canon Original Toner', '', 'Crtg. 325', 'Canon LBP 6000', '20', '20140208114040', 4500, 4450, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(237, '1391881297', 28, 65, 'Canon Original Toner', '', 'Crtg. 326  (LBP-6200d)', 'Canon LBP6200 LBP6200D MF4570', '20', '20140208114137', 5000, 4900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(238, '1391881369', 28, 65, 'Canon Original Toner', '', 'Crtg. 329   © ', ' LBP7010/LBP7018', '20', '20140208114249', 4800, 4750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(239, '1391881442', 28, 65, 'Canon Original Toner', '', 'Crtg. 329  (BK)', ' LBP7010/LBP7018', '20', '20140208114402', 4800, 4750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(240, '1391881507', 28, 65, 'Canon Original Toner', '', 'Crtg. 418 (Y)', 'LBP-7200/ iC MF8350Cdn ', '20', '20140208114507', 9000, 8900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(241, '1391881571', 28, 65, 'Canon Original Toner', '', 'Crtg. 418(BK)', 'LBP-7200/ iC MF8350Cdn ', '20', '20140208114611', 10000, 9900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(242, '1391881633', 28, 65, 'Canon Original Toner', '', 'Drum 029', ' LBP7010/LBP7018', '20', '20140208114713', 6000, 5900, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(243, '1391881700', 28, 65, 'Canon Original Toner', '', 'EP 25', 'Canon LBP-1210', '20', '20140208114820', 4600, 4550, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(244, '1391881750', 28, 65, 'Canon Original Toner', '', 'EP-22 ', ' Canon LBP 250/350/800/810/1110/1120. ', '20', '20140208114910', 5000, 4950, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(245, '1391881799', 28, 65, 'Canon Original Toner', '', 'EP-26', 'Canon Laser Shot LBP3200', '20', '20140208114959', 4800, 4750, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(246, '1391881853', 28, 65, 'Canon Original Toner', '', 'EP-65', 'Canon LaserShot LBP-2000', '20', '20140208115053', 16000, 15800, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(247, '1391881908', 28, 65, 'Canon Original Toner', '', 'Crtg. 312 ', 'canon LBP 3018/3108/3050/3150/3010/3100', '20', '20140208115148', 4600, 4550, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(248, '1392047475', 31, 68, 'TOSHIBA e-STUDIO COPIER', '<p><strong>TOSHIBA e-STUDIO 2306</strong></p>\r\n\r\n<p><strong>Type: </strong>&nbsp;Desktop</p>\r\n\r\n<p><strong>Country of Origin : Japan</strong></p>\r\n\r\n<p><strong>Country of Assembling : China&nbsp;&nbsp;&nbsp; </strong></p>\r\n\r\n<p><strong>Printing/Copying process:</strong> Indirect electrostatic photographic method</p>\r\n\r\n<p><strong>Paper input capacity</strong> (80g/m2, A4): Standard: 350 sheets (250 x 1 sheets (Drawer) +100 sheets (Bypass))</p>\r\n\r\n<p><strong>Paper size:</strong> A3-B5 (Drawer), A3-A5R (Bypass)</p>\r\n\r\n<p><strong>Paper weight:</strong> Standard: 64-80g/m2 (Drawer), 50-163/m2 (Bypass)</p>\r\n\r\n<p><strong>Memory:</strong> 64MB shared <strong>Warm-up time: </strong>25 seconds</p>\r\n\r\n<p><strong>Power consumption Maximum: </strong>1.6kW (220-240V)</p>\r\n\r\n<p><strong>Dimensions</strong> (W &times; D &times; H): 600mm &times; 643mm &times; 462.5mm</p>\r\n\r\n<p><strong>Weight:</strong> Approx. 31.8kg</p>\r\n\r\n<p><strong>PRINTING FUNCTION PLD:</strong> GDI</p>\r\n\r\n<p><strong>Printing Speed:</strong> 23 ppm (A4)</p>\r\n\r\n<p><strong>Print engine resolution:</strong> 300x300dpi / 600x600 dpi</p>\r\n\r\n<p><strong>Operating System:</strong> Windows&reg;98SE/Me/2000/XP, Windows&reg; 2003Server (except 64bit)/ Vista</p>\r\n\r\n<p><strong>Interface:</strong> USB (High Speed, Max 480/MbpsS)</p>\r\n\r\n<p><strong>COPYING FUNCTIONS</strong></p>\r\n\r\n<p><strong>Acceptable Original:</strong> Sheet, Book, three dimensional objects</p>\r\n\r\n<p><strong>Available Original Size:</strong> Maximum: A3</p>\r\n\r\n<p><strong>Copy Size:</strong>&nbsp; A3, B4, A4,A4R, A5R, FOLIO, OTHER</p>\r\n\r\n<p><strong>Resolution: </strong>&nbsp;2400x600dpi (with smoothing)</p>\r\n\r\n<p><strong>Gradation:</strong>&nbsp; 256 steps <strong>Copying Speed:</strong>&nbsp; 23cpm (A4)</p>\r\n\r\n<p><strong>Original scanning speed:</strong> 23spm (A4)</p>\r\n\r\n<p><strong>First copy time:</strong> 7.6 seconds</p>\r\n\r\n<p><strong>Multiple copying: </strong>&nbsp;Up to 999</p>\r\n\r\n<p><strong>Copy mode:</strong>&nbsp; Text Mode, Text/Photo</p>\r\n\r\n<p><strong>Reproduction ratio Zoom:</strong> 25-200% in 1% increments/decrements</p>\r\n\r\n<p><strong>Exposure control:</strong>&nbsp; Automatic/Manual (7 steps)</p>\r\n\r\n<p><strong>Major Features:</strong>&nbsp; Scan once Copy many, Interrupt, Energy Saver, APS/AMS, Auto Job Start, Access Code,</p>\r\n\r\n<p>Auto Cassette Change, Electronic Sorting (with optional memory &amp; ADF)</p>\r\n\r\n<p><strong>Paper Exit:</strong> Face down/Inner exit</p>\r\n\r\n<p><strong>Counter:</strong> Electrical Counter (indication by LCD Display)</p>\r\n\r\n<p><strong>SCANNING FUNCTIONS</strong></p>\r\n\r\n<p><strong>Resolution:</strong> 300 x 300dpi/ 600 dpi</p>\r\n\r\n<p><strong>Max. Scanning Area: </strong>A3 <strong>Driver:</strong> TWAIN</p>\r\n\r\n<p><strong>Supplies:</strong> We will supply the machine complete with the followings a. One Drum (To be fitted in the machine) b. One Bottle Developer (To be fitted in the machine) c. One Cartridge Toner d. One Ream (500 Sheets) Paper</p>\r\n\r\n<p><strong>Warranty:</strong> All mechanical parts shall be offered free of cost for one year from the date of purchase. No warranties are provided for any electrical &amp; electronic parts.</p>\r\n', 'TOSHIBA e-STUDIO 2505', '', '10', '20140210095115', 70000, 66000, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(249, '1392047683', 31, 68, 'TOSHIBA e-STUDIO COPIER', '<p><strong>Brand: TOSHIBA </strong><strong>E- Studio 256</strong></p>\r\n\r\n<p><strong>Model: </strong><strong>e- Studio 256</strong></p>\r\n\r\n<p><strong>Country of Origin : Japan</strong></p>\r\n\r\n<p><strong>Country of Assembling : China&nbsp;&nbsp;&nbsp; </strong></p>\r\n\r\n<p><strong>Digital Multifunctional Product</strong></p>\r\n\r\n<p><strong>ADU: Belting</strong></p>\r\n\r\n<p><strong>Copying process: </strong>Indirect electrostatic photographic Method</p>\r\n\r\n<p><strong>Type: </strong>Console by High Desk</p>\r\n\r\n<p><strong>Original Scanning method:</strong> CCD Line Sensor</p>\r\n\r\n<p><strong>Resolution: Scanning:</strong> 600 dpi X 600 dpi / Printing: 2,400dpi X600dpi ( with Smoothing)</p>\r\n\r\n<p><strong>Original platen type: </strong>Fixed hard platen</p>\r\n\r\n<p><strong>Available original size: </strong>Maximum A3</p>\r\n\r\n<p><strong>Available copy paper size: </strong>Maximum A3, Minimum A5R</p>\r\n\r\n<p><strong>Paper supply: </strong><strong>2 X 550-</strong>sheet cassette (standard),Stack Feed Bypass:100 sheets</p>\r\n\r\n<p><strong>Available copy paper weight:</strong> 64- 105 gr/m2 (Drawer), 50- 209 gr/m2 (Bypass), 64- 105 gr/m2 (Duplex).</p>\r\n\r\n<p><strong>Copying speed: </strong>25 cpm (A4)</p>\r\n\r\n<p><strong>Paper exit:</strong> Face down/inner exit (Central Output)</p>\r\n\r\n<p><strong>E-Filling:</strong> Built-in</p>\r\n\r\n<p><strong>Electronic Sorter: </strong>Built-in</p>\r\n\r\n<p><strong>Memory:</strong> Main Memory: 1 MB, Shared</p>\r\n\r\n<p><strong>Hard Disk Drive: 8</strong>0GB+ Shared</p>\r\n\r\n<p><strong>Processor: </strong>Power Pc/ 333 MHz Std.</p>\r\n\r\n<p><strong>Multiple copying:</strong> Up to 999 copies</p>\r\n\r\n<p><strong>Reproduction ratio: </strong>Zoom: 25% - 400%</p>\r\n\r\n<p><strong>Warm-up time: </strong>Approx. 25 seconds</p>\r\n\r\n<p><strong>First copy time: </strong>Approx. 5.4 seconds</p>\r\n\r\n<p><strong>Exposure control:</strong> Automatic/Manual ( 11 steps)</p>\r\n\r\n<p><strong>Major Features: </strong></p>\r\n\r\n<p>&bull; Interrupt &bull; Energy Saver &bull; Dual Page Copying</p>\r\n\r\n<p>&bull; Edge Erase &bull; Image Shift&nbsp; Trimming / Masking,</p>\r\n\r\n<p>Departments Code ( 1000 Kinds), Cover Sheets, Sheet Insertion,</p>\r\n\r\n<p>X-Y Zoom, Electronic Sorting, Magazine Sort, Alternation,</p>\r\n\r\n<p>2- in- 1, 4 - in- 1, 8- in-1, Annotation ( Date /Time Print)</p>\r\n\r\n<p>Job Reservation,</p>\r\n\r\n<p>Rotation Copy,</p>\r\n\r\n<p>Thick Paper Mode.</p>\r\n\r\n<p>Toner Recycling Technology</p>\r\n\r\n<p><strong>Supplies: </strong>We will supply the machine complete with the followings</p>\r\n\r\n<p>a. One Drum (To be fitted in the machine)</p>\r\n\r\n<p>b. One Bottle Developer (To be fitted in the machine)</p>\r\n\r\n<p>c. One Cartridge Toner</p>\r\n\r\n<p>d. One Ream (500 Sheets) Paper</p>\r\n\r\n<p><strong>Warranty:</strong> All mechanical parts shall be offered free of cost for one year from the date of purchase of the. No warranties are provided for any electrical &amp; electronic parts.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n', 'TOSHIBA E- Studio 256', '', '10', '20140210095443', 240000, 235000, 0, '', '', '', 0, 1, 0, 1),
(250, '1392047896', 31, 68, 'TOSHIBA e-STUDIO COPIER', '<p><strong>Brand: TOSHIBA </strong>E- Studio 306</p>\r\n\r\n<p><strong>Model:</strong> e- Studio 306</p>\r\n\r\n<p><strong>Country of Origin : Japan</strong></p>\r\n\r\n<p><strong>Country of Assembling : China&nbsp;&nbsp;&nbsp; </strong></p>\r\n\r\n<p>ADU :Built-in&nbsp;&nbsp;</p>\r\n\r\n<p><strong>Copying process: </strong>Indirect electrostatic photographic Method</p>\r\n\r\n<p><strong>Type: </strong>Console by High Desk</p>\r\n\r\n<p><strong>Original Scanning method: </strong>CCD Line Sensor</p>\r\n\r\n<p><strong>Resolution: Scanning : </strong>600 dpi X&nbsp; 600 dpi</p>\r\n\r\n<p><strong>Original platen type:</strong> Fixed hard platen</p>\r\n\r\n<p><strong>Available original size: </strong>Maximum A3</p>\r\n\r\n<p><strong>Available copy paper size: </strong>Maximum A3, Minimum A5R</p>\r\n\r\n<p><strong>Paper supply: </strong>2 X 550-sheet cassette (standard),Stack Feed Bypass:100</p>\r\n\r\n<p><strong>Available copy paper weight:</strong> 64- 105 gr/m2 ( Drawer),50- 209 gr/m2 (Bypass)</p>\r\n\r\n<p><strong>Copying speed: 30</strong> cpm (A4)</p>\r\n\r\n<p><strong>Paper exit:</strong> Face down/inner exit (Central Output)</p>\r\n\r\n<p><strong>Memory: </strong>&nbsp;RAM&nbsp;&nbsp; 1 GB</p>\r\n\r\n<p><strong>Hard Disk Drive: 80</strong>GB+ Shared</p>\r\n\r\n<p><strong>E-Filing: </strong>Built-in</p>\r\n\r\n<p><strong>Processor: </strong>Power PC/333MHZ: Shared</p>\r\n\r\n<p><strong>Multiple copying: </strong>Upto&nbsp; 999 copies</p>\r\n\r\n<p><strong>Electronic Sorter: </strong>Built-in</p>\r\n\r\n<p><strong>Reproduction ratio: </strong>Zoom: 25% - 400% in 1% increments( Platen)</p>\r\n\r\n<p><strong>Warm-up time: </strong>Approx. 20 seconds</p>\r\n\r\n<p><strong>First copy time: </strong>Approx. 5.4 seconds</p>\r\n\r\n<p><strong>Exposure control: </strong>Automatic/Manual ( 11 steps)</p>\r\n\r\n<p>Power supply &amp; consumption: Max. 1.5 kW (220-240V)</p>\r\n\r\n<p><strong>Dimensions (W x D x H): </strong>637 mm X 715 mm X 739 mm</p>\r\n\r\n<p><strong>Weight:</strong>&nbsp; 57 kg</p>\r\n\r\n<p><strong>Major Features:</strong></p>\r\n\r\n<p>&bull; Interrupt&nbsp; &bull; Energy Saver &bull; Dual Page Copying</p>\r\n\r\n<p>&bull; Edge Erase &bull; Image Shift&nbsp; Trimming / Masking,</p>\r\n\r\n<p>Departments Code ( 1000 Kinds), Cover Sheets, Sheet Insertion,</p>\r\n\r\n<p>X-Y Zoom, Electronic Sorting, Alternation,</p>\r\n\r\n<p>2- in- 1, 4 - in- 1,</p>\r\n\r\n<p>Annotation ( Date /Time Print)Job Reservation,</p>\r\n\r\n<p>Rotation Copy, Thick Paper Mode.</p>\r\n\r\n<p>Toner Recycling Technology</p>\r\n\r\n<p><strong>Supplies: </strong>We will supply the machine complete with the followings</p>\r\n\r\n<p>a. One Drum (To be fitted in the machine)</p>\r\n\r\n<p>b. One Bottle Developer (To be fitted in the machine)</p>\r\n\r\n<p>c. One Cartridge Toner</p>\r\n\r\n<p>d. One Ream (500 Sheets) Paper</p>\r\n\r\n<p><strong>Warranty:</strong> All mechanical parts shall be offered free of cost for one year from the date of purchase of the. No warranties are provided for any electrical &amp; electronic parts.</p>\r\n', 'TOSHIBA E- Studio 306', '', '10', '20140210095816', 275000, 270000, 0, '', '', 'International Warranty', 0, 1, 0, 1),
(251, '1392049699', 31, 68, 'TOSHIBA e-STUDIO COPIER', '<p><strong style="line-height:1.6em">Brand: TOSHIBA e- Studio 456</strong></p>\r\n\r\n<p><strong>Model: e- Studio 456</strong></p>\r\n\r\n<p><strong>Country of Origin : Japan</strong></p>\r\n\r\n<p><strong>Country of Assembling : China&nbsp;&nbsp;&nbsp;</strong></p>\r\n\r\n<p><strong>Type:</strong>&nbsp;Console Type</p>\r\n\r\n<p><strong>Printing/Copying process:</strong>&nbsp;Indirect electrostatic photographic method</p>\r\n\r\n<p><strong>Original scanning method:</strong>&nbsp;CCD line sensor</p>\r\n\r\n<p><strong>Paper input capacity:</strong>&nbsp;Standard: 550sheets x 2 (Drawer), 100 sheets (Bypass)</p>\r\n\r\n<p><strong>Paper Size:</strong>&nbsp;Standard: A3-A5R (Drawer), A3-A5R (Bypass), A3-A5R (Duplex)</p>\r\n\r\n<p><strong>Paper weight:</strong>&nbsp;Standard: 64-105g/m2&nbsp; (Drawer), 64-209g/m2 (Bypass), 64-105g/m2 (Duplex)</p>\r\n\r\n<p><strong>ADU (Automatic Duple Xing Unit) :</strong>&nbsp;Standard,</p>\r\n\r\n<p><strong>Processor:</strong>&nbsp; Power PC /400MHz Shared</p>\r\n\r\n<p><strong>Memory:</strong>&nbsp;Main Memory: 256MB Shared/Page Memory: 32MB Shared</p>\r\n\r\n<p><strong>Hard disk drive:</strong>&nbsp;80GB+ Shared</p>\r\n\r\n<p><strong>Warm-up time:</strong>&nbsp;Approx. 20 seconds</p>\r\n\r\n<p><strong>Power consumption:</strong>&nbsp;Max. 1.6kW (220-240V)</p>\r\n\r\n<p><strong>Counter:</strong>&nbsp;Electronic 8-digit counter</p>\r\n\r\n<p><strong>Acceptable originals:</strong>&nbsp;Sheet, book, three dimensional objects</p>\r\n\r\n<p><strong>Original size:</strong>&nbsp;A3-A5R</p>\r\n\r\n<p><strong>Copy size:</strong>&nbsp;A3-A5R</p>\r\n\r\n<p><strong>Resolution:&nbsp;</strong>Scanning: 600dpi x 600dpi</p>\r\n\r\n<p><strong>Printing:</strong>&nbsp;600dpi x 600dpi (with smoothing: 2,400dpi x 600dpi)</p>\r\n\r\n<p><strong>Gradation:</strong>&nbsp;256 steps</p>\r\n\r\n<p><strong>Copying speed:</strong>&nbsp;45cpm (A4)</p>\r\n\r\n<p><strong>Original scanning speed:</strong>&nbsp;45 spm (A4)</p>\r\n\r\n<p><strong>First copy time:</strong>&nbsp;3.9 seconds</p>\r\n\r\n<p><strong>Multiple copying:</strong>&nbsp;Up to 999 copies</p>\r\n\r\n<p><strong>Copy mode:</strong>&nbsp;Text, Text/Photo (Default), Photo, Custom mode</p>\r\n\r\n<p><strong>Reproduction ratio:</strong>&nbsp;Zoom: 25-400% in 1% increments (Platen)</p>\r\n\r\n<p><strong>Exposure control:</strong>&nbsp;Automatic/Manual (11 steps)</p>\r\n\r\n<p><strong>Copy density control:</strong>&nbsp;Automatic toner density method</p>\r\n\r\n<p><strong>Major features:</strong>&nbsp;&bull;Energy Saver &bull;Trimming/Masking &bull;Department Code (1,000 kinds) &bull;Cover Sheet &bull;Sheet Insertion &bull;X-Y Zoom &bull;Electronic Sorting &bull;Magazine Sort &bull;Alternation &bull;2-in-1, 4-in-1, 8-in-1 &bull;Annotation (Date/Time Print) &bull;Job Reservation &bull;Rotation Copy &bull;Thick Paper mode</p>\r\n\r\n<p><strong>Supplies:</strong>&nbsp;We will supply the machine complete with the followings</p>\r\n\r\n<p>a. One Drum (To be fitted in the machine) b. One Bottle Developer (To be fitted in the machine) c. One Cartridge Toner.&nbsp; d. One Ream (500 Sheets) Paper</p>\r\n\r\n<p><strong>Warranty:</strong>&nbsp;All mechanical parts shall be offered free of cost for one year from the date of purchase of the machine. No warranties are provided for any electrical &amp; electronic parts. .</p>\r\n', 'TOSHIBA e- Studio 456', 'TOSHIBA e- Studio 456', '10', '20140210102819', 420000, 410000, 0, '', '', '', 0, 1, 0, 1),
(257, '1392613970', 26, 54, 'Genius 05A', '', '05A', 'Hp2055/2035/', '50', '20140216231250', 2300, 2000, 0, '', '', '', 0, 1, 0, 1),
(263, '1392618939', 26, 54, 'Genius 35A', '', '35A', 'Hp P1005', '10', '20140217003539', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(264, '1392619105', 26, 54, 'Genius 36A', '', '36A', 'HP Laserjet P1505/P1505n/M1120/M1120 MFP/M1522/1522F/M1522N/M1522nf/M1550/ 565 LBP-3250', '10', '20140217003825', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(265, '1392619575', 26, 54, 'Genius 12A', '', '12A', 'HP LaserJet 1010/1012/1015/1020/3015/3020/3030/M1005MFP/M1319MFP', '10', '20140217004615', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(254, '1392430184', 26, 54, 'Genius 53A', '', 'HP Q5949A/7553A', 'HP LaserJet P2015/P2015D/P2015N/M2727nf HP LaserJet 1160/1160LE/1320/1320N/1320TN/1320NW/3392/3390 5', '10', '20140214200944', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(260, '1392618518', 26, 54, 'Genius 12A/FX 9', '', '12A', 'HP LaserJet 1010/1012/1015/1020/3015/3020/3030/M1005MFP/M1319MFP 565 FAX L100 565 I-Sensys MF4150 56', '10', '20140217002838', 2500, 2200, 0, '', '', '', 0, 1, 0, 1),
(259, '1392615235', 26, 54, 'Genius 05A ', '', '05A', 'HP 2035/2055/Pro400', '50', '20140216233355', 2500, 2200, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(261, '1392618775', 26, 54, 'Genius 85A', '', '85A', 'HP Pro P1102', '100', '20140217003255', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(262, '1392618876', 26, 54, 'Genius 78A', '', '78A', 'HP LaserJet M1536 MFP/P1560/P1566/P1606/565 LBP6200D', '10', '20140217003436', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(273, '1392622086', 26, 54, 'Genius 16A', '', '16A', 'HP LaserJet 5200L/5200/5200N/5200TN/5200DTN ', '5', '20140217012806', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(267, '1392620491', 26, 54, 'Genius 49A', '', '49A', 'HP LaserJet 1160/1160LE/1320/1320N/1320TN/1320NW/3392/3390; 565 LBP 3300', '50', '20140217010131', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(268, '1392620587', 26, 54, 'Genius 92A', '', '92A', 'HP LaserJet 1100/1100A/1100I/3200/3200M/3200 SE565 LBP-200/250/350/800/810 565 LBP-1110 seri', '10', '20140217010307', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(269, '1392620663', 26, 54, 'Genius 10A', '', '10A', 'HP LaserJet 2300/2300L/2300N/2300DN/2300DTN', '10', '20140217010423', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(270, '1392620784', 26, 54, 'Genius 51A', '', '51A', 'HP LaserJet P3005/P3005D', '10', '20140217010624', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(271, '1392620869', 26, 54, 'Genius 51xl', '', '51XL', 'HP LaserJet P3005/P3005D', '10', '20140217010749', 3500, 3200, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1);
INSERT INTO `product` (`id`, `unique_id`, `cat1_id`, `cat2_id`, `product_name`, `product_details`, `model`, `supported_printer`, `quantity`, `date`, `price`, `postage_cost`, `dis_price`, `weight`, `size`, `warranty`, `status_avail`, `status`, `feature`, `uploader_id`) VALUES
(272, '1392621072', 26, 54, 'Genius 61A', '', '61A', 'HP LaserJet 4100/4100MFP/4100DTN/4100N/4100TN/4101MFP/4000/4050', '10', '20140217011112', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(274, '1392622142', 26, 54, 'Genius 64A', '', '64A', 'HP laserjet P4014/P4015N/P4015X/P4515N/P4515X', '10', '20140217012902', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(275, '1392622212', 26, 54, 'Genius 13A', '', '13A', 'HP LaserJet 1300/1300N', '50', '20140217013012', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(276, '1392622264', 26, 54, 'Genius 24A', '', '24A', 'HP LaserJet 1150', '10', '20140217013104', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(277, '1392622318', 26, 54, 'Genius 96A', '', '96A', 'HP LaserJet 2000/2100/2100M/2100SE/2100TN/2100XI/2200/ 2200D/2200DN/2200DSE/2200DT/2200DTN', '10', '20140217013158', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(278, '1392622405', 26, 54, 'Genius 29A', '', '29A', 'HP LaserJet 5000/5000N/5000DN/5000GN/5000LE/5100/5100TN/5100DTN/5100LE 565 LBP 62X', '10', '20140217013325', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(279, '1392622468', 26, 54, 'Genius 38A', '', '38A', 'HP LaserJet 4200/4200N/4200TN/4200DTN/4200DTNS/4200DTNSL/ 4300/4300N/4300TN/4300DTN/4300DTNS/4300DTN', '10', '20140217013428', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(280, '1392622520', 26, 54, 'Genius 42A', '', '42A', 'HP LaserJet 4200/4200N/4200TN/4200DTN/4200DTNS/4200DTNSL/ 4300/4300N/4300TN/4300DTN/4300DTNS/4300DTN', '10', '20140217013520', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(281, '1392622572', 26, 54, 'Genius 11A', '', '11A', 'HP LaserJet 2410/2420/2420D/2420DN/2430TN/2430DTN 565 LBP 3460', '10', '20140217013612', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(282, '1392622620', 26, 54, 'Genius 80A', '', '80A', 'HP pro -400/401', '10', '20140217013700', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(283, '1392622687', 26, 54, 'Genius C4127A', '', '4127A', 'HP4000T/4000TN/4050/4050N/ 4050DN/4050T/4050TN/4050SE', '10', '20140217013807', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(284, '1392622766', 26, 54, 'Genius CE255A', '', '255A', 'HP P3010/P3015/P3016 ', '10', '20140217013926', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(285, '1392622832', 26, 54, 'Genius CE390A', '', '390A', 'HP Laserjet  4555/4555/4555dn', '5', '20140217014032', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(286, '1392622928', 26, 55, 'Genius 05A', '', '05A', 'Canon 6300', '50', '20140217014208', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(287, '1392622989', 26, 55, 'Genius 85A', '', '85A', 'Canon LBP 325', '100', '20140217014309', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(288, '1392623054', 26, 55, 'Genius 35A', '', '35A', 'Canon LBP 3150', '10', '20140217014414', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(289, '1392623170', 26, 55, 'Genius 78A', '', '78A', 'LBP6200D', '10', '20140217014610', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(290, '1392623245', 26, 55, 'Genius 36A', '', '36A', 'LBP-3250', '10', '20140217014725', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(291, '1392623354', 26, 55, 'Genius 49A', '', '49A', 'LBP 3300', '10', '20140217014914', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(292, '1392623489', 26, 55, 'Genius 92A', '', '92A', 'LBP-200/250/350/800/810 565 LBP-1110 seri', '10', '20140217015129', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(293, '1392626742', 26, 55, 'Genius 29A', '', '29A', 'LBP 62X', '10', '20140217024542', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(294, '1392627387', 26, 55, 'Genius FX 3', '', 'FX3', '65 FAX L200/240/250/280/300/360/380/388', '10', '20140217025627', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(295, '1392627487', 26, 55, 'Genius Ep -25', '', 'EP25', ' LBP 1210', '10', '20140217025807', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(296, '1392627558', 26, 54, 'Genius Ep -25', '', 'EP25', 'HP LaserJet 1000/1005/1200/1200N/1200SE/1220/1220SE/3300 MFP/3320 MFP/3320N MFP/3330 MFP 565', '10', '20140217025918', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(297, '1392628046', 26, 55, 'Genius Fx 9', '', 'FX 9', 'FAX L100 565 I-Sensys MF4150 565 Image Class MF4150 565 Satera MF4120 565 L140', '10', '20140217030726', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(301, '1392628516', 26, 55, 'Genius 308', '', '308', 'Canon 565 LBP-3300/3360', '10', '20140217031516', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(299, '1392628170', 26, 55, 'Genius Ep 22', '', 'EP 22', 'LBP 200/250/350/800/810/1120/1110 series ...', '10', '20140217030930', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(300, '1392628206', 26, 55, 'Genius 303', '', '303', 'Canon LBP-2900/3000', '10', '20140217031006', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(302, '1392628563', 26, 55, 'Genius 309', '', '309', 'Canon LBP-3500/3900/3950', '10', '20140217031603', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(303, '1392628596', 26, 55, 'Genius 312', '', '312', 'Canon LBP-3050/3150', '10', '20140217031636', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(304, '1392628636', 26, 55, 'Genius 328', '', '328', ' Canon imageCLASS MF4410/MF4420/MF4430/MF4450/MF4550/MF4570/MF4580 Series imageCLASS D520/D550 Satera', '10', '20140217031716', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(305, '1392629085', 26, 59, 'Genius 260', '', '260', 'Lexmark E260/360/460', '10', '20140217032445', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(306, '1392629139', 26, 59, 'Genius E120', '', 'E120', 'Lexmark E120', '10', '20140217032539', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(307, '1392629245', 26, 59, 'Genius 230', '', '230', ' Lexmark E230/ E232/ E330/ E332/ E234/ E240/ E340', '10', '20140217032725', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(308, '1392629285', 26, 59, 'Genius E 250', '', 'E250', 'Lexmark E250/350/352', '10', '20140217032805', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(309, '1392629375', 26, 56, 'Genius ML 2010', '', 'ML 2010', 'Samsung Ml2010/1610/4521', '10', '20140217032935', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(310, '1392629442', 26, 56, 'Genius ML 1053', '', 'ML 1053', 'Samsung ML 2581/ML1911', '10', '20140217033042', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(311, '1392629475', 26, 56, 'Genius ML 108', '', 'ML 108', 'Samsung Ml -1640/ ML-2240', '10', '20140217033115', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(312, '1392629522', 26, 56, 'Genius ML 2850', '', 'ML 2850', 'Samsung 2850D/ ML 2851ND', '10', '20140217033202', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(313, '1392629563', 26, 56, 'Genius ML 3470 B', '', 'ML 3470B', 'Samsung ML-3470D/ML-3471ND/ML-3472NDK', '10', '20140217033243', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(314, '1392629605', 26, 56, 'Genius T 109', '', 'T 109', 'Samsung SCX-4300', '10', '20140217033325', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(315, '1392629647', 26, 56, 'Genius ML 1610', '', 'ML 1610', 'Samsung ML 1610/2010/2510 Samsung SCX 4521F/4321 Dell Laser Printer 1100 .', '10', '20140217033407', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(316, '1392629708', 26, 56, 'Genius ML 205', '', 'ML 205', 'Samsung ML 3310/3312/3710/3712', '10', '20140217033508', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(317, '1392629772', 26, 56, 'Genius ML 101', '', 'ML 101', 'Samsung ML 2165/2164/2161/2162/SCX 3400', '10', '20140217033612', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(318, '1392629816', 26, 56, 'Genius ML 103', '', 'ML 103', 'Samsung ML 2955DW/2950/WD/SCX 4723/SCX 4729', '10', '20140217033656', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(319, '1392629855', 26, 56, 'Genius 4050', '', '4050', 'Samsung 4050', '10', '20140217033735', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(320, '1392629894', 26, 56, 'Genius Ml 4216', '', 'ML 4216', ' SCX-4016/4116/4216F, SF-560/565P/750/755P, SCX-565P/755P', '10', '20140217033814', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(321, '1392629937', 26, 56, 'Genius 1043', '', '1043', 'Samsung 1666/ ML-1866', '10', '20140217033857', 3000, 2600, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(322, '1392630097', 26, 56, 'Genius ML-D3470A', '', 'D3470A', 'Samsung ML-3470D/3470ND/3471ND', '10', '20140217034137', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(323, '1392630245', 26, 55, 'Genius 15A', '', '15A', 'Canon lbp 1000/1210/3310', '10', '20140217034405', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(324, '1392630288', 26, 54, 'Genius 15A', '', '15A', 'HP 1200', '10', '20140217034448', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(325, '1392630325', 26, 56, 'Genius HL 2140', '', '2140', 'HL-2140/2141/2150N/2170W DCP-2822/7030/7040/7045 MFC-7450/7840N/7340/7440N/7320', '10', '20140217034525', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(326, '1392630376', 26, 60, 'Genius TN 3250', '', 'TN 3250', 'Brother HL 5340D/5370D/DCP 8058/MFC 8880', '10', '20140217034616', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(327, '1392630420', 26, 60, 'Genius TN-2060', '', 'TN 2060', 'Brother 2130/7055/2255', '10', '20140217034700', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(328, '1392630455', 26, 58, 'Genius M1200', '', 'M 1200', 'Epson Aculaser M1200', '10', '20140217034735', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(329, '1392630494', 26, 58, 'Genius M 2010', '', 'M 2010', 'Epson Aculaser M2010', '10', '20140217034814', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(330, '1392630533', 26, 58, 'Genius M 1400', '', 'M 1400', 'Epson M1400/ Xerox 3040', '10', '20140217034853', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(331, '1392631333', 26, 69, 'Genius 1130', '', '1130', 'Dell 1130/DELL 1130n/DELL 1133/DELL 1135n', '10', '20140217040213', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1),
(332, '1392631439', 26, 69, 'Genius 2330', '', '2330', 'Dell 2330', '10', '20140217040359', 2300, 2000, 0, '', '', 'REPLACEMENT WARRANTY', 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email_address` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `user_name`, `email_address`, `password`) VALUES
(1, 'Rahim', 'Khan', '', '', ''),
(2, 'Akbar', 'Vi', '', '', ''),
(3, 'Imruz', 'Apel', '', '', ''),
(24, 'a', 'b', 'g', 'c@erf.net', ''),
(25, 'a', 'b', 'g', 'c@erf.net', ''),
(26, 'f', 'g', 'h', 'c@erf.net', ''),
(27, 'f', 'g', 'hgasg', 'c@erf.net', '4266bf8d3dc65bc84fd3badf2edfdbe7');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(500) NOT NULL,
  `slider_location` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_location`, `status`) VALUES
(11, '', 'slider/1.jpg', 1),
(12, '', 'slider/2.jpg', 1),
(13, '', 'slider/3.jpg', 1),
(14, '', 'slider/14.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(21) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `member_type` tinyint(1) NOT NULL DEFAULT '0',
  `f_name` varchar(35) NOT NULL,
  `l_name` varchar(40) NOT NULL,
  `str_add` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `country` smallint(5) unsigned NOT NULL,
  `tel1_c_cod` varchar(9) NOT NULL,
  `tel1_a_cod` varchar(6) NOT NULL,
  `tel1_num` varchar(16) NOT NULL,
  `tel2_c_cod` varchar(9) NOT NULL,
  `tel2_a_cod` varchar(6) NOT NULL,
  `tel2_num` varchar(16) NOT NULL,
  `tel3_c_cod` varchar(9) NOT NULL,
  `tel3_a_cod` varchar(6) NOT NULL,
  `tel3_num` varchar(16) NOT NULL,
  `mob1_c_cod` varchar(9) NOT NULL,
  `mob1_num` varchar(16) NOT NULL,
  `mob2_c_cod` varchar(9) NOT NULL,
  `mob2_num` varchar(16) NOT NULL,
  `fax1` varchar(20) NOT NULL,
  `fax2` varchar(20) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `comp_name` varchar(60) NOT NULL,
  `position` varchar(50) NOT NULL,
  `main_activity` varchar(30) NOT NULL,
  `chal_ans` varchar(60) NOT NULL,
  `e_verify` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `p_verify` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `cell_verify` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `add_verify` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `active`, `member_type`, `f_name`, `l_name`, `str_add`, `city`, `postcode`, `country`, `tel1_c_cod`, `tel1_a_cod`, `tel1_num`, `tel2_c_cod`, `tel2_a_cod`, `tel2_num`, `tel3_c_cod`, `tel3_a_cod`, `tel3_num`, `mob1_c_cod`, `mob1_num`, `mob2_c_cod`, `mob2_num`, `fax1`, `fax2`, `email2`, `comp_name`, `position`, `main_activity`, `chal_ans`, `e_verify`, `p_verify`, `cell_verify`, `add_verify`) VALUES
(25, 'a@yahoo.com', 'zzz', 1, 4, '', '', '', '', '', 31, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ship Owner', '', 0, 0, 0, 0),
(11, 'rajib_2002bd@yahoo.com', 'zzz', 1, 5, 'rajib', 'chowdhury', '295 west rampura ulon road', 'dhaka', 'ub8 2qs', 13, '+881 ', '123', '9182181 1abc', '+882 02', '3', '9182181 2', '+883', '93884', '9182181 312', '     001 ', '01747948033', '+880     ', '017291', '123456', '123456', 'rajib.2002bd@gmail.com', 'Arenna Tech', 'Chief Executive', 'Selling Broker', 'love', 1, 1, 1, 1),
(22, 'desparado2010@yahoo.com', 'zzz', 1, 5, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0),
(23, 'ami@yahoo.com', 'zzz', 1, 0, 'dasdsa', 'sadasd', 'dsaasd dadas', '1219', 'asdads ', 31, '8921', '213', '231', '213', '231', '231231', '213213', '231213', '231213', '231231', '213213', '231231', '231321', '231231', '213231', '231231', '23121 2132', '213231 21332', 'Ship Owner', 'asd sadsadsa sdadsa', 0, 0, 0, 0),
(26, 'ssss@yahoo.com', 'zzz', 0, 0, '', '', '', '', '', 31, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ship Owner', 'sasas', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `md5_id` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `full_name` tinytext COLLATE latin1_general_ci NOT NULL,
  `user_name` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_email` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_level` tinyint(4) NOT NULL DEFAULT '1',
  `pwd` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `address` text COLLATE latin1_general_ci NOT NULL,
  `country` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `tel` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fax` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `website` text COLLATE latin1_general_ci NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `users_ip` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `approved` int(1) NOT NULL DEFAULT '0',
  `activation_code` int(10) NOT NULL DEFAULT '0',
  `banned` int(1) NOT NULL DEFAULT '0',
  `ckey` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ctime` varchar(220) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`user_email`),
  FULLTEXT KEY `idx_search` (`full_name`,`address`,`user_email`,`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=55 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `md5_id`, `full_name`, `user_name`, `user_email`, `user_level`, `pwd`, `address`, `country`, `tel`, `fax`, `website`, `date`, `users_ip`, `approved`, `activation_code`, `banned`, `ckey`, `ctime`) VALUES
(54, '', 'admin', 'admin', 'admin@localhost', 5, '4c09e75fa6fe36038ac240e9e4e0126cedef6d8c85cf0a1ae', 'admin', 'Switzerland', '4433093999', '', '', '2010-05-04', '', 1, 0, 0, 'd4ticg0', '1366871363');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
