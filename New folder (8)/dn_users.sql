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
-- โครงสร้างตาราง `dn_users`
-- 

CREATE TABLE `dn_users` (
  `id` int(6) NOT NULL auto_increment,
  `username` varchar(100) collate utf8_unicode_ci NOT NULL,
  `password` varchar(100) collate utf8_unicode_ci NOT NULL,
  `role` int(5) NOT NULL,
  `role_type` varchar(20) collate utf8_unicode_ci NOT NULL,
  `company_id` int(6) NOT NULL,
  `firstname` varchar(100) collate utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(20) collate utf8_unicode_ci NOT NULL,
  `phone2` varchar(20) collate utf8_unicode_ci NOT NULL,
  `phonecode` varchar(10) collate utf8_unicode_ci NOT NULL,
  `email` varchar(40) collate utf8_unicode_ci NOT NULL,
  `email2` varchar(40) collate utf8_unicode_ci NOT NULL,
  `post_date` text collate utf8_unicode_ci NOT NULL,
  `address` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `dn_users`
-- 

INSERT INTO `dn_users` VALUES (1, 'ozaman', 'ozaman', 1, '', 0, 'ozaman', 'hama', '0872934571', '', '', 'ozaclever@gmail.com', '', '1496126731', '');
INSERT INTO `dn_users` VALUES (3, 'admin', 'admin', 2, '', 0, 'admin', 'admin', '878819575', '', '66', 'admin@gmail.com', '', '', '11122');
