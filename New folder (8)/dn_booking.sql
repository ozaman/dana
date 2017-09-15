-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `db_danatours`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `dn_booking`
-- 

CREATE TABLE `dn_booking` (
  `id` int(10) NOT NULL auto_increment,
  `invoice` varchar(20) collate utf8_unicode_ci NOT NULL,
  `room` varchar(20) collate utf8_unicode_ci NOT NULL,
  `checkin` varchar(20) collate utf8_unicode_ci NOT NULL,
  `checkout` varchar(20) collate utf8_unicode_ci NOT NULL,
  `total` int(5) NOT NULL,
  `adult` int(5) NOT NULL,
  `child` int(5) NOT NULL,
  `post_date` text collate utf8_unicode_ci NOT NULL,
  `agent_id` int(6) NOT NULL,
  `program` int(6) NOT NULL,
  `remark` text collate utf8_unicode_ci NOT NULL,
  `status` int(5) NOT NULL,
  `company` varchar(100) collate utf8_unicode_ci NOT NULL,
  `fname` varchar(100) collate utf8_unicode_ci NOT NULL,
  `lname` varchar(100) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(20) collate utf8_unicode_ci NOT NULL,
  `phonecode` varchar(10) collate utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `pickup_place` varchar(100) collate utf8_unicode_ci NOT NULL,
  `to_place` varchar(100) collate utf8_unicode_ci NOT NULL,
  `gaden` varchar(20) collate utf8_unicode_ci NOT NULL,
  `email` varchar(40) collate utf8_unicode_ci NOT NULL,
  `pickup_time` varchar(10) collate utf8_unicode_ci NOT NULL,
  `booking_inv` int(6) NOT NULL,
  `transfer_price` float NOT NULL,
  `ondate` varchar(20) collate utf8_unicode_ci NOT NULL,
  `ontime` varchar(20) collate utf8_unicode_ci NOT NULL,
  `name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `booking_date` text collate utf8_unicode_ci NOT NULL,
  `user_id` int(6) NOT NULL,
  `user_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `package_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `agent_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `cost` int(8) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=67 ;

-- 
-- dump ตาราง `dn_booking`
-- 

INSERT INTO `dn_booking` VALUES (66, '090620170003', '', '', '', 7, 5, 2, '1496995734', 1, 1, '', 1, '', '', '', '872934571', '', 0, 'patong', 'kathu', '', '', '', 0, 140, '14/06/2017', '23:59', 'john smit', '09/06/2017 16:08:54', 1, 'ozaman', 'Phi Phi and Maya Bay and Khai', 'ozaman', 3600);
INSERT INTO `dn_booking` VALUES (65, '090620170002', '', '', '', 8, 8, 0, '1496995653', 1, 1, '', 1, '', '', '', '872934571', '66', 0, 'karon', 'kathu', '', '', '', 0, 150, '28/06/2017', '18:00', 'ozaman hama', '09/06/2017 16:07:33', 1, 'ozaman', 'Phi Phi and Maya Bay and Khai', 'ozaman', 3600);
INSERT INTO `dn_booking` VALUES (64, '090620170001', '', '', '', 5, 4, 1, '1496995577', 1, 1, '', 2, '', '', '', '872934571', '66', 0, 'potong', 'talang', '', '', '', 0, 200, '23/06/2017', '05:00', 'ozaman hama', '09/06/2017 16:06:17', 1, 'ozaman', 'Phi Phi and Maya Bay and Khai', 'ozaman', 3600);
