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
-- โครงสร้างตาราง `dn_company`
-- 

CREATE TABLE `dn_company` (
  `id` int(11) NOT NULL auto_increment,
  `company_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `detail` varchar(200) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(20) collate utf8_unicode_ci NOT NULL,
  `phone2` varchar(20) collate utf8_unicode_ci NOT NULL,
  `email` varchar(40) collate utf8_unicode_ci NOT NULL,
  `tat_nambers` varchar(40) collate utf8_unicode_ci NOT NULL,
  `fax` varchar(40) collate utf8_unicode_ci NOT NULL,
  `city` varchar(20) collate utf8_unicode_ci NOT NULL,
  `operation` text collate utf8_unicode_ci NOT NULL,
  `website` text collate utf8_unicode_ci NOT NULL,
  `address` text collate utf8_unicode_ci NOT NULL,
  `phonecode` varchar(10) collate utf8_unicode_ci NOT NULL,
  `post_date` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `dn_company`
-- 

INSERT INTO `dn_company` VALUES (1, 'Dana  tour asia', 'tours', '897564125', '', 'admin@gmail.com', '', '0254873642', 'Phuket', '09.00-18.00 Am', 'http://www.danatours.com', '125/44', '66', '1496554194');
