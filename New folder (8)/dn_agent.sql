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
-- โครงสร้างตาราง `dn_agent`
-- 

CREATE TABLE `dn_agent` (
  `id` int(6) NOT NULL auto_increment,
  `fname` varchar(40) collate utf8_unicode_ci NOT NULL,
  `lname` varchar(40) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(20) collate utf8_unicode_ci NOT NULL,
  `phone2` varchar(20) collate utf8_unicode_ci NOT NULL,
  `phonecode` varchar(10) collate utf8_unicode_ci NOT NULL,
  `phonecode2` varchar(10) collate utf8_unicode_ci NOT NULL,
  `email` varchar(40) collate utf8_unicode_ci NOT NULL,
  `company` text collate utf8_unicode_ci NOT NULL,
  `address` varchar(100) collate utf8_unicode_ci NOT NULL,
  `post_date` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `dn_agent`
-- 

INSERT INTO `dn_agent` VALUES (1, 'ozaman', 'hama', '872934571', '', '66', '', 'ozaclever@gmail.com', 'Phuket ozamanProject Co., Ltd.', '119/5', '1496518007');
