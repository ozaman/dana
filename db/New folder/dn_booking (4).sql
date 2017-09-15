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
  `company_id` int(6) NOT NULL,
  `fname` varchar(100) collate utf8_unicode_ci NOT NULL,
  `lname` varchar(100) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(20) collate utf8_unicode_ci NOT NULL,
  `room_number` varchar(10) collate utf8_unicode_ci NOT NULL,
  `province` varchar(50) collate utf8_unicode_ci NOT NULL,
  `province_id` int(6) NOT NULL,
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
  `total_price` float NOT NULL,
  `adult_price` float NOT NULL,
  `child_price` float NOT NULL,
  `type` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=72 ;

-- 
-- dump ตาราง `dn_booking`
-- 

INSERT INTO `dn_booking` VALUES (71, '130620170003', '', '', '', 5, 5, 0, '1497292734', 1, 3, '', 1, '', 0, '', '', '872934571', '', '', 0, '66', 0, 'rawai', 'kata', '', 'ozaclever@gmail.com', '', 0, 0, '17/06/2017', '06:00', 'ozaman hama', '13/06/2017 02:38:54', 1, 'ozaman', 'Similan Island  One Day Trip', 'ozaman', 11000, 2200, 2000, 'Tour');
INSERT INTO `dn_booking` VALUES (70, '130620170002', '', '', '', 2, 2, 0, '1497292632', 3, 1, '', 2, '', 0, '', '', '0879935471', '', '', 0, '66', 0, 'kathu', 'patong', '', 'ozaclever@gmail.com', '', 0, 0, '28/06/2017', '07:00', 'non mon', '13/06/2017 02:37:12', 1, 'ozaman', 'Phi Phi and Maya Bay and Khai', 'non', 3600, 1800, 1500, 'Tour');
INSERT INTO `dn_booking` VALUES (69, '130620170001', '', '', '', 9, 8, 1, '1497292452', 1, 7, '', 0, '', 0, '', '', '872934571', '', '', 0, '66', 0, 'patomg', 'rawai', '', 'ozaclever@gmail.com', '', 0, 0, '23/06/2017', '08:00', 'ozaman hama', '13/06/2017 02:34:12', 1, 'ozaman', 'Raya Island One Day Trip', 'ozaman', 10600, 1200, 1000, 'Tour');
