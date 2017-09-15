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
-- โครงสร้างตาราง `dn_product`
-- 

CREATE TABLE `dn_product` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `company_id` int(6) NOT NULL,
  `company_name` varchar(200) collate utf8_unicode_ci NOT NULL,
  `person` int(6) NOT NULL,
  `price` int(6) NOT NULL,
  `air_in` int(2) NOT NULL,
  `air_out` int(2) NOT NULL,
  `province` varchar(50) collate utf8_unicode_ci NOT NULL,
  `pro_id` int(6) NOT NULL,
  `flight` varchar(20) collate utf8_unicode_ci NOT NULL,
  `status` int(5) NOT NULL,
  `post_date` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `dn_product`
-- 

INSERT INTO `dn_product` VALUES (2, 'Phuket Airport-Phuket Hotel All Area', 1, 'Dana  tour asia', 8, 550, 0, 0, 'Phuket', 1, 'In', 0, '1497283012');
INSERT INTO `dn_product` VALUES (3, 'Phuket Hotel All Area-Phuket Airport', 1, 'Dana  tour asia', 8, 550, 0, 0, 'Phuket', 1, 'Out', 0, '1497283154');
