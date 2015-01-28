-- phpMyAdmin SQL Dump
-- version 4.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2014 at 12:44 PM
-- Server version: 5.5.38-0ubuntu0.12.04.1
-- PHP Version: 5.3.10-1ubuntu3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pokelect`
--

-- --------------------------------------------------------

--
-- Table structure for table `pccms_categories`
--

CREATE TABLE IF NOT EXISTS `pccms_categories` (
`category_id` int(11) NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pccms_categories`
--

INSERT INTO `pccms_categories` (`category_id`, `category_title`, `category_slug`) VALUES
(1, 'News', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `pccms_pokelect_session`
--

CREATE TABLE IF NOT EXISTS `pccms_pokelect_session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pccms_pokelect_session`
--

INSERT INTO `pccms_pokelect_session` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('01608e4cd9035ed227bf5357dd7984f0', '66.249.78.218', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1407171911, ''),
('1379c9fdbc3297af398a1b6f2f4e7ae3', '66.249.69.147', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1407224654, ''),
('1da00f900eed2fa7c239811af94fed23', '66.249.69.6', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1407175642, ''),
('26f774212a2ec143db03823ae3ec53e4', '157.55.39.209', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1407180931, ''),
('3fe244cfbd932674ea62c0347a7a60de', '157.55.39.209', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1407202753, ''),
('5407170bd44a4bba815d62bbd5cd77a1', '66.249.78.218', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1407168442, ''),
('6e256760df86e000b28a4c30e1fdd93b', '146.148.37.16', 'NerdyBot', 1407164254, ''),
('7391515a0f106a43b9fdb83918e4b26e', '66.249.78.218', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1407164857, ''),
('8225ee85fb2fe72f5859456ae327f67c', '66.249.69.6', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e', 1407229080, ''),
('86df63c911dc89413a5e665e6b7e01d7', '213.131.188.212', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:31.0) Gecko/20100101 Firefox/31.0', 1407161499, 'a:3:{s:9:"user_data";s:0:"";s:13:"email_address";s:19:"p.chater@icloud.com";s:12:"is_logged_in";b:1;}'),
('a155b711aee1801d697296a637bc8816', '86.20.138.228', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36', 1407202860, ''),
('a39631a26d959c56a44997db16cf32af', '213.131.188.212', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:31.0) Gecko/20100101 Firefox/31.0', 1407161477, ''),
('abb4c9649609de2b884580dadeca5ed1', '66.249.69.6', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e', 1407215171, ''),
('c2eddb04b2fb1050bf0a18dc7d646288', '157.55.39.209', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1407161442, ''),
('d4a87c44e0bbb3791ff6774b8c6d36f8', '157.55.39.209', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1407222879, ''),
('e581d5fca398ce7030f539482cd893ef', '66.249.69.131', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1407238623, ''),
('f8fba9d672e17a905a8b32d584385cc7', '192.99.147.201', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)', 1407238424, ''),
('f9b2862f5f1ea91aa7de22d6ff3cfb62', '66.249.78.218', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1407161544, '');

-- --------------------------------------------------------

--
-- Table structure for table `pccms_posts`
--

CREATE TABLE IF NOT EXISTS `pccms_posts` (
`post_id` int(15) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_author` int(12) DEFAULT NULL,
  `post_time_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_category_id` varchar(15) DEFAULT NULL,
  `post_slug` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pccms_posts`
--

INSERT INTO `pccms_posts` (`post_id`, `post_title`, `post_description`, `post_author`, `post_time_posted`, `post_category_id`, `post_slug`) VALUES
(1, 'Some Post', 'kopkopkpkop', 0, '2014-04-27 20:24:15', '1', 'testing-posts'),
(4, 'This is an awesome test', 'Hello world!\r\n\r\nWelcome to Pokelect the most awesome fucking website ever where you guys can trade your stupid cards for stupid amounts of fucking money!\r\n\r\nP.s. Heather says &quot;Language&quot;\r\nP.p.s Paul says &quot;Fuck my language!&quot;', 0, '2014-04-27 20:30:01', '1', 'testing-posts');

-- --------------------------------------------------------

--
-- Table structure for table `pccms_products`
--

CREATE TABLE IF NOT EXISTS `pccms_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `product_description` text NOT NULL,
  `product_set` varchar(11) NOT NULL,
  `product_set_number` varchar(11) DEFAULT NULL,
  `product_cost` decimal(10,0) DEFAULT NULL,
  `product_image` text,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pccms_products`
--

INSERT INTO `pccms_products` (`product_id`, `product_name`, `product_description`, `product_set`, `product_set_number`, `product_cost`, `product_image`, `date_added`) VALUES
(1, 'Xerneas-EX', 'Xerneas EX FA', '1', '1/125', 25, 'res/img/sets/no-card.png', '2014-04-25 16:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `pccms_sets`
--

CREATE TABLE IF NOT EXISTS `pccms_sets` (
`set_id` int(15) NOT NULL,
  `set_title` varchar(255) NOT NULL,
  `set_description` text,
  `set_amount` varchar(255) DEFAULT NULL,
  `set_image` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pccms_sets`
--

INSERT INTO `pccms_sets` (`set_id`, `set_title`, `set_description`, `set_amount`, `set_image`) VALUES
(1, 'X & Y Base Set', 'Base set for Pokemon X and Y', '150', 'res/img/set/no-set-img.jpg'),
(2, 'X & Y Flash Fire', 'The second instalment of the new X and Y set - Flash Fire! Introducing Mega Charizard-Ex. Released in May 2014', '170', 'res/img/set/no-set-img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pccms_users`
--

CREATE TABLE IF NOT EXISTS `pccms_users` (
`id` int(18) NOT NULL,
  `username` varchar(35) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(52) NOT NULL,
  `first_name` varchar(35) DEFAULT NULL,
  `last_name` varchar(35) DEFAULT NULL,
  `popid` decimal(12,0) NOT NULL,
  `registered_on` datetime NOT NULL,
  `ip_address` varchar(35) NOT NULL,
  `access` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pccms_users`
--

INSERT INTO `pccms_users` (`id`, `username`, `email_address`, `password`, `first_name`, `last_name`, `popid`, `registered_on`, `ip_address`, `access`) VALUES
(1, 'pchater', 'p.chater@icloud.com', 'e6051083c5854c172014cd700d1b1a9a327b8a02', 'Paul', 'Chater', 1078119, '2014-04-27 19:49:20', '127.0.0.1', 1),
(2, 'amarinimo', 'paranoid.oddish@gmail.com', '0ae175ce1fba4a0ec4c730081ef8cf14ec9b58a4', 'Becca', 'Mander', 631466, '2014-05-07 20:55:25', '86.179.218.173', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pccms_categories`
--
ALTER TABLE `pccms_categories`
 ADD PRIMARY KEY (`category_id`), ADD UNIQUE KEY `category_title` (`category_title`), ADD UNIQUE KEY `category_slug` (`category_slug`);

--
-- Indexes for table `pccms_pokelect_session`
--
ALTER TABLE `pccms_pokelect_session`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `pccms_posts`
--
ALTER TABLE `pccms_posts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `pccms_products`
--
ALTER TABLE `pccms_products`
 ADD PRIMARY KEY (`product_id`), ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `pccms_sets`
--
ALTER TABLE `pccms_sets`
 ADD PRIMARY KEY (`set_id`), ADD UNIQUE KEY `set_title` (`set_title`);

--
-- Indexes for table `pccms_users`
--
ALTER TABLE `pccms_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email_address` (`email_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pccms_categories`
--
ALTER TABLE `pccms_categories`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pccms_posts`
--
ALTER TABLE `pccms_posts`
MODIFY `post_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pccms_sets`
--
ALTER TABLE `pccms_sets`
MODIFY `set_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pccms_users`
--
ALTER TABLE `pccms_users`
MODIFY `id` int(18) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
