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
-- โครงสร้างตาราง `dn_logbooking`
-- 

CREATE TABLE `dn_logbooking` (
  `id` int(8) NOT NULL auto_increment,
  `package_name` varchar(200) NOT NULL,
  `confirmby` varchar(50) NOT NULL,
  `cancelby` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `status` int(5) NOT NULL,
  `post_date` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `dn_logbooking`
-- 

INSERT INTO `dn_logbooking` VALUES (1, 'Phi Phi and Maya Bay and Khai', 'ozaman', '', 'Premium Class', 1, '1497068645');
