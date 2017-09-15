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
-- โครงสร้างตาราง `dn_package`
-- 

CREATE TABLE `dn_package` (
  `id` int(6) NOT NULL auto_increment,
  `name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `detail` text collate utf8_unicode_ci NOT NULL,
  `program` text collate utf8_unicode_ci NOT NULL,
  `include` text collate utf8_unicode_ci NOT NULL,
  `contact` varchar(2000) collate utf8_unicode_ci NOT NULL,
  `class` varchar(20) collate utf8_unicode_ci NOT NULL,
  `conditions` text collate utf8_unicode_ci NOT NULL,
  `description` varchar(300) collate utf8_unicode_ci NOT NULL,
  `company_id` int(6) NOT NULL,
  `note` text collate utf8_unicode_ci NOT NULL,
  `icon` varchar(20) collate utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `show_re` tinyint(1) NOT NULL,
  `show_top` tinyint(1) NOT NULL,
  `type` varchar(20) collate utf8_unicode_ci NOT NULL,
  `cost` int(6) NOT NULL,
  `city` varchar(50) collate utf8_unicode_ci NOT NULL,
  `company_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `post_date` text collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `dn_package`
-- 

INSERT INTO `dn_package` VALUES (1, 'Phi Phi and Maya Bay and Khai', 'Koh Phi Phi pronounced Koh PhiPhi,  welcomes you to breathtaking beaches, stunning rock formations and tranquil turquoise waters teeming with colourful marine life. A vibrant night life, rock climbing, world-class diving and just the sheer beauty of Phi Phi is enough to tickle everyone''s fancy!\n\nPhi Phi Islands are a main attraction to Krabi and Phuket Island, and are widely considered to be amongst the most beautiful islands in the world, recently rocking to fame with the filming of the movie "The Beach" on Maya Bay.  Despite the high number of visitors here, the island is still quite stunning, and the surrounding ocean and islands are still spectacular, although Maya Bay does get abit overcrowded during Peak Season.', '08.00	Pick up from hotel by air-conditioned van of Nonthasak Marine Co., Ltd.\n09.00	Depart from Nonthasak Port (Sirae) to Khai Island.\n09.20	Arrive Khai Island, relax and enjoy your time. You can choose swimming in the sea or enjoy snorkeling or feeding fish at the beach. We offer special option for Diving.\n11.30	Enjoy buffet lunch at Nonthask Restaurant on Khai Island\n12.30	Depart Khai Island to Phi Phi Don Island. Visit, feed and take photos with crab-eating monkeys at Monkey Bay. Enjoy discovering coral reefs and beautiful fish at the wonderful diving place.                Depart Phi Phi Don Island for Phi Phi Lae Island, pass by Viking Cave, a place for swallowâ€™s nest concession. Visit Pileh Cove that you will be wondered and take photo shots of Loh Samah Bay that Iooks Iike a gate, Visit Maya Bay where â€œThe Beachâ€ was filmed, Take photo shots, watch the superb view and enjoy your relaxing time before departing for Phuket.\n16.30	Arrive Nonthasak Port and transfer back to hotel by impressive trip.', '-	Transfer Round trip from hotel to Sirey port \n-	Lunch Buffet \n-	Season Fruit \n-	Coffee Tea and Drinking water \n-	Insurance\n-	Experience Guide \n-	Life jacket \n-	Snorkeling \n-	Beach chair \n-       Buffet lunch menu at Khai Nok Island:\n-	Mixed Vegetable Salad \n-	Deep Fried Chicken \n-	Spaghetti with tomato Sauce \n-	Crispy \n-	Tom Yum Seafood \n-	Fried Fish with Sweet & Sour Sauce\n-	Fried Rice \n-	Steam Rice \n-	Season Fruits \n-	Coca Cola & Water', '- Khun 0872934571\n ( Sale & Marketing )', 'Premium Class', '-	Additional  Charge : for fin 150/person (  If fin  or snorkel damage of lost THB 1,500 /set will be charged )\n-	Package Phi Phi + Khai Nok Island included  charge  Nation Park   adult 400 bath / 200 bath', 'Phi Phi Island & Maya Island & Khai Nok Island is the most popular package in andaman ocean.', 0, '-Prices include value added tax.', '1.png', 0, 1, 0, 'Tour', 3600, 'Phang nga', '', '');
INSERT INTO `dn_package` VALUES (3, 'Similan Island  One Day Trip', 'â€œSimilanâ€ is derived from the Malay sembilan, and means â€œnineâ€. Each of the Similan Islands has a number as well as a name. These are, running from north to south: Koh Ba Ngu (No. 9), Similan (No. 8), Payu (No. 7), Miang (No. 4, No. 5 and, in some opinion, No. 6), Payan (No. 3), Payang (No. 2), and Hu Yong (No. 1). Hin Pousar, or â€œElephant Head Rockâ€, is alternatively designated No. 6 by some. Koh Bon, lying 17 nautical miles north of Ba Ngu, is part of the Similan National Park and may be granted honorary status as No. 10.', '06.30 am 	Pick up from hotel. Transfer to Sarasin pier at Thanoon Seafood.\n07.30 am 	Welcome to Sarasin pier. Enjoy coffee and tea.\n09:20 am 	Deparure from Sarain pier at Thanoon Seafood.\n10.00 am 	Arrive Koh 9 (Ba Ngu) Snorking and Sightseeing.\n11.00 am 	Enjoy your lunch Buffet at Koh 8 and Explore climbing to Sail Rock.\n01.00 pm 	Relex on amazing beach at Koh 4 (Miang Island)\n02.20 pm 	Arrive Koh 5 or Koh 6. Emjoy Snokerling and Swimming.\n03.30 pm 	Return to Sarasin pier at Thanoon Seafood.', 'sadsad', '- Khun Ah 081-5696777', 'Standard Class', '- Additional  Charge : for fin 150/person ( If fin or snorkel damage of lost THB 1,500 /set will be charged )', 'Similan island a second most beatiful island in the world.Thailand and are composed of nine granite islands washed by a clear blue tropical ocean and blessed with some of the worldâ€™s finest beaches.', 0, '- Prices do not include value added tax.', '3.png', 0, 1, 0, 'Tour', 1500, 'Phang nga', '', '');
