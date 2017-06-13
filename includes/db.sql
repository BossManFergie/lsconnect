-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 09:20 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lsconnec_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `ads_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `place` varchar(32) NOT NULL,
  `code` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `affiliates_payments`
--

CREATE TABLE IF NOT EXISTS `affiliates_payments` (
  `payment_id` int(10) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `email` varchar(64) NOT NULL,
  `amount` varchar(32) NOT NULL,
  `method` varchar(64) NOT NULL,
  `time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `announcement_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(32) NOT NULL,
  `code` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcement_id`, `name`, `title`, `type`, `code`, `start_date`, `end_date`) VALUES
(1, 'Beta Info', 'LS Connect Beta Information', 'info', 'Please note: We are currently in BETA. As a BETA tester, you are NOT allowed to share any information/screenshots regarding LS Connect. This is a CLOSED BETA. If you share any information or leak any images, your account will be banned.', '2017-06-06 18:22:00', '2018-02-28 18:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `announcements_users`
--

CREATE TABLE IF NOT EXISTS `announcements_users` (
  `announcement_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcements_users`
--

INSERT INTO `announcements_users` (`announcement_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `banned_ips`
--

CREATE TABLE IF NOT EXISTS `banned_ips` (
  `ip_id` int(10) unsigned NOT NULL,
  `ip` varchar(64) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE IF NOT EXISTS `conversations` (
  `conversation_id` int(10) unsigned NOT NULL,
  `last_message_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `conversations_messages`
--

CREATE TABLE IF NOT EXISTS `conversations_messages` (
  `message_id` int(10) unsigned NOT NULL,
  `conversation_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `message` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `conversations_users`
--

CREATE TABLE IF NOT EXISTS `conversations_users` (
  `conversation_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0',
  `deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

CREATE TABLE IF NOT EXISTS `custom_fields` (
  `field_id` int(10) unsigned NOT NULL,
  `type` varchar(32) NOT NULL,
  `select_options` text NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `place` varchar(32) NOT NULL,
  `length` int(10) NOT NULL DEFAULT '32',
  `mandatory` enum('0','1') NOT NULL DEFAULT '0',
  `in_registration` enum('0','1') NOT NULL DEFAULT '0',
  `in_profile` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `followings`
--

CREATE TABLE IF NOT EXISTS `followings` (
  `user_id` int(10) unsigned NOT NULL,
  `following_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Dumping data for table `followings`
--

INSERT INTO `followings` (`user_id`, `following_id`) VALUES
(1, 2),
(1, 4),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(10) unsigned NOT NULL,
  `user_one_id` int(10) unsigned NOT NULL,
  `user_two_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_one_id`, `user_two_id`, `status`) VALUES
(1, 2, 1, 1),
(2, 3, 1, 0),
(3, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `game_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `source` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(10) unsigned NOT NULL,
  `group_admin` int(10) unsigned NOT NULL,
  `group_name` varchar(64) NOT NULL,
  `group_title` varchar(255) NOT NULL,
  `group_picture` varchar(255) DEFAULT NULL,
  `group_picture_id` int(10) unsigned DEFAULT NULL,
  `group_cover` varchar(255) DEFAULT NULL,
  `group_cover_id` int(10) unsigned DEFAULT NULL,
  `group_album_pictures` int(10) DEFAULT NULL,
  `group_album_covers` int(10) DEFAULT NULL,
  `group_album_timeline` int(10) DEFAULT NULL,
  `group_pinned_post` int(10) DEFAULT NULL,
  `group_description` text NOT NULL,
  `group_members` int(10) unsigned NOT NULL DEFAULT '0',
  `group_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_admin`, `group_name`, `group_title`, `group_picture`, `group_picture_id`, `group_cover`, `group_cover_id`, `group_album_pictures`, `group_album_covers`, `group_album_timeline`, `group_pinned_post`, `group_description`, `group_members`, `group_date`) VALUES
(1, 1, 'Support', 'LS Connect Support', 'photos/2017/06/sngine_e68278601acc4c70e652d39cbaa4530d.png', 3, 'photos/2017/06/sngine_a0767d43cd17545650fb70229242fbd7.jpg', 4, 3, 4, NULL, NULL, 'Do you need help using LS Connect? Feel free to join this group and ask both the LS Connect Community &amp; Staff team. ', 2, '2017-06-06 22:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `groups_members`
--

CREATE TABLE IF NOT EXISTS `groups_members` (
  `group_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Dumping data for table `groups_members`
--

INSERT INTO `groups_members` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `market_categories`
--

CREATE TABLE IF NOT EXISTS `market_categories` (
  `category_id` int(10) unsigned NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `market_categories`
--

INSERT INTO `market_categories` (`category_id`, `category_name`) VALUES
(1, 'Apparel &amp; Accessories'),
(2, 'Autos &amp; Vehicles'),
(3, 'Baby &amp; Children&#039;s Products'),
(4, 'Beauty Products &amp; Services'),
(5, 'Computers &amp; Peripherals'),
(6, 'Consumer Electronics'),
(7, 'Dating Services'),
(8, 'Financial Services'),
(9, 'Gifts &amp; Occasions'),
(10, 'Home &amp; Garden'),
(11, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `notification_id` int(10) unsigned NOT NULL,
  `to_user_id` int(10) unsigned NOT NULL,
  `from_user_id` int(10) unsigned NOT NULL,
  `action` varchar(32) NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `node_url` varchar(255) NOT NULL,
  `time` datetime DEFAULT NULL,
  `seen` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `to_user_id`, `from_user_id`, `action`, `node_type`, `node_url`, `time`, `seen`) VALUES
(1, 1, 2, 'follow', '', '', '2017-06-06 22:47:54', '1'),
(2, 2, 1, 'friend', '', '', '2017-06-06 22:49:29', '1'),
(3, 2, 1, 'follow', '', '', '2017-06-06 22:49:29', '1'),
(4, 1, 3, 'follow', '', '', '2017-06-10 20:25:27', '1'),
(5, 1, 4, 'comment', 'post', '1', '2017-06-10 20:55:00', '1'),
(6, 1, 4, 'follow', '', '', '2017-06-13 02:14:43', '1'),
(7, 4, 1, 'friend', '', '', '2017-06-13 02:14:50', '1'),
(8, 4, 1, 'follow', '', '', '2017-06-13 02:14:50', '1'),
(9, 1, 4, 'like', 'post', '12', '2017-06-13 02:15:06', '1'),
(10, 4, 1, 'like', 'post', '17', '2017-06-13 02:15:08', '1'),
(11, 1, 4, 'wall', 'post', '18', '2017-06-13 02:15:31', '1'),
(12, 4, 1, 'comment', 'post', '19', '2017-06-13 02:19:33', '0'),
(13, 4, 1, 'like', 'post', '19', '2017-06-13 02:19:40', '0');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `package_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(32) NOT NULL,
  `period_num` int(10) unsigned NOT NULL,
  `period` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `boost_posts_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `boost_posts` int(10) unsigned NOT NULL,
  `boost_pages_enabled` enum('0','1') NOT NULL DEFAULT '0',
  `boost_pages` int(10) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `packages_payments`
--

CREATE TABLE IF NOT EXISTS `packages_payments` (
  `payment_id` int(10) NOT NULL,
  `payment_date` datetime NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(10) unsigned NOT NULL,
  `page_admin` int(10) unsigned NOT NULL,
  `page_category` int(10) unsigned NOT NULL,
  `page_name` varchar(64) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_description` text NOT NULL,
  `page_picture` varchar(255) DEFAULT NULL,
  `page_picture_id` int(10) unsigned DEFAULT NULL,
  `page_cover` varchar(255) DEFAULT NULL,
  `page_cover_id` int(10) unsigned DEFAULT NULL,
  `page_album_pictures` int(10) unsigned DEFAULT NULL,
  `page_album_covers` int(10) unsigned DEFAULT NULL,
  `page_album_timeline` int(10) unsigned DEFAULT NULL,
  `page_pinned_post` int(10) unsigned DEFAULT NULL,
  `page_verified` enum('0','1') NOT NULL DEFAULT '0',
  `page_boosted` enum('0','1') NOT NULL DEFAULT '0',
  `page_likes` int(10) unsigned NOT NULL DEFAULT '0',
  `page_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_admin`, `page_category`, `page_name`, `page_title`, `page_description`, `page_picture`, `page_picture_id`, `page_cover`, `page_cover_id`, `page_album_pictures`, `page_album_covers`, `page_album_timeline`, `page_pinned_post`, `page_verified`, `page_boosted`, `page_likes`, `page_date`) VALUES
(1, 1, 4, 'LSConnect', 'LS Connect', 'Founded in 2017, LS Connect&#039;s  mission is to give people the power to share and make Los Santos and the surrounding areas more open and connected. People use LS Connect to stay connected with friends and family, to discover what&rsquo;s going on in the community, and to share and express what matters to them.', 'photos/2017/06/sngine_c2fc1e1c3c184e3d6d88b9f9c40fd204.png', 5, 'photos/2017/06/sngine_a75845518af3d9fadffc76bb3274978f.jpg', 8, 5, 6, NULL, NULL, '1', '1', 1, '2017-06-06 22:26:02'),
(2, 3, 4, 'superleetauto', 'Super l33t auto sales', 'We sell the best mofukin cars.', NULL, NULL, 'photos/2017/06/sngine_eb15bc2ac67d5e7e8cd4802109ca8f92.jpg', 10, NULL, 7, NULL, NULL, '0', '0', 0, '2017-06-10 20:33:10'),
(3, 4, 1, 'test', 'Test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', 0, '2017-06-10 21:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `pages_categories`
--

CREATE TABLE IF NOT EXISTS `pages_categories` (
  `category_id` int(10) unsigned NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages_categories`
--

INSERT INTO `pages_categories` (`category_id`, `category_name`) VALUES
(1, 'Service'),
(2, 'Musician/Band'),
(3, 'Brand or Product'),
(4, 'Company, Organization or Institution'),
(5, 'Artist, Public figure'),
(6, 'Entertainment'),
(7, 'Cause or Community');

-- --------------------------------------------------------

--
-- Table structure for table `pages_likes`
--

CREATE TABLE IF NOT EXISTS `pages_likes` (
  `page_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- Dumping data for table `pages_likes`
--

INSERT INTO `pages_likes` (`page_id`, `user_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` enum('user','page') NOT NULL,
  `in_group` enum('0','1') NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned DEFAULT NULL,
  `in_wall` enum('0','1') NOT NULL DEFAULT '0',
  `wall_id` int(10) unsigned DEFAULT NULL,
  `post_type` varchar(32) NOT NULL,
  `origin_id` int(10) unsigned DEFAULT NULL,
  `time` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `privacy` varchar(32) NOT NULL,
  `text` longtext,
  `feeling_action` varchar(32) DEFAULT NULL,
  `feeling_value` varchar(255) DEFAULT NULL,
  `boosted` enum('0','1') NOT NULL DEFAULT '0',
  `likes` int(10) unsigned NOT NULL DEFAULT '0',
  `comments` int(10) unsigned NOT NULL DEFAULT '0',
  `shares` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `user_type`, `in_group`, `group_id`, `in_wall`, `wall_id`, `post_type`, `origin_id`, `time`, `location`, `privacy`, `text`, `feeling_action`, `feeling_value`, `boosted`, `likes`, `comments`, `shares`) VALUES
(1, 1, 'user', '0', NULL, '0', NULL, 'profile_picture', NULL, '2017-06-06 21:54:11', NULL, 'public', NULL, NULL, NULL, '0', 0, 1, 0),
(2, 1, 'user', '0', NULL, '0', NULL, 'profile_cover', NULL, '2017-06-06 21:56:54', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(3, 1, 'user', '1', 1, '0', NULL, 'group_picture', NULL, '2017-06-06 22:24:44', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(4, 1, 'user', '1', 1, '0', NULL, 'group_cover', NULL, '2017-06-06 22:24:48', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(5, 1, 'page', '0', NULL, '0', NULL, 'page_picture', NULL, '2017-06-06 22:26:08', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(9, 1, 'user', '0', 0, '0', 0, '', NULL, '2017-06-06 22:59:29', '', 'public', 'The official first post of LS Connect! &lt;3 #yus', '', '', '0', 0, 0, 0),
(8, 1, 'page', '0', NULL, '0', NULL, 'page_cover', NULL, '2017-06-06 22:27:44', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(12, 1, 'user', '0', 0, '0', 0, 'product', NULL, '2017-06-10 20:08:24', '', 'public', 'First market test post. ', '', '', '0', 1, 0, 0),
(14, 2, 'page', '0', NULL, '0', NULL, 'page_cover', NULL, '2017-06-10 20:33:18', NULL, 'public', NULL, NULL, NULL, '0', 0, 0, 0),
(15, 2, 'page', '0', 0, '0', 0, 'product', NULL, '2017-06-10 20:33:45', '', 'public', 'Check this tampa, yo.', '', '', '0', 1, 1, 0),
(17, 4, 'user', '0', 0, '0', 0, 'product', NULL, '2017-06-10 20:53:35', '', 'public', 'Buy this amazing mansion! Only $5,000,000. 10 bedrooms, 5 bathrooms, 5 car garage and a pool! ', '', '', '1', 2, 0, 0),
(18, 4, 'user', '0', 0, '1', 1, '', NULL, '2017-06-13 02:15:31', '', 'friends', 'sexbae\n', '', '', '0', 0, 0, 0),
(19, 4, 'user', '1', 1, '0', 0, '', NULL, '2017-06-13 02:19:21', '', 'public', 'How do I tie my shoes?', '', '', '0', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts_audios`
--

CREATE TABLE IF NOT EXISTS `posts_audios` (
  `audio_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `posts_comments`
--

CREATE TABLE IF NOT EXISTS `posts_comments` (
  `comment_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` enum('post','photo') NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` enum('user','page') NOT NULL,
  `text` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `time` datetime NOT NULL,
  `likes` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts_comments`
--

INSERT INTO `posts_comments` (`comment_id`, `node_id`, `node_type`, `user_id`, `user_type`, `text`, `image`, `time`, `likes`) VALUES
(1, 1, 'post', 4, 'user', 'Damn bae. u hot', '', '2017-06-10 20:55:00', 0),
(2, 15, 'post', 4, 'user', 'sexxx', '', '2017-06-13 02:14:29', 0),
(3, 19, 'post', 1, 'user', 'You eat pigs.', '', '2017-06-13 02:19:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts_comments_likes`
--

CREATE TABLE IF NOT EXISTS `posts_comments_likes` (
  `user_id` int(10) unsigned NOT NULL,
  `comment_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `posts_files`
--

CREATE TABLE IF NOT EXISTS `posts_files` (
  `file_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `posts_hidden`
--

CREATE TABLE IF NOT EXISTS `posts_hidden` (
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `posts_likes`
--

CREATE TABLE IF NOT EXISTS `posts_likes` (
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts_likes`
--

INSERT INTO `posts_likes` (`user_id`, `post_id`) VALUES
(4, 12),
(4, 15),
(1, 17),
(4, 17),
(1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `posts_links`
--

CREATE TABLE IF NOT EXISTS `posts_links` (
  `link_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `source_url` tinytext NOT NULL,
  `source_host` varchar(255) NOT NULL,
  `source_title` varchar(255) NOT NULL,
  `source_text` text NOT NULL,
  `source_thumbnail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts_media`
--

CREATE TABLE IF NOT EXISTS `posts_media` (
  `media_id` int(10) unsigned NOT NULL,
  `post_id` int(10) NOT NULL,
  `source_url` text NOT NULL,
  `source_provider` varchar(255) NOT NULL,
  `source_type` varchar(255) NOT NULL,
  `source_title` varchar(255) DEFAULT NULL,
  `source_text` text,
  `source_html` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts_photos`
--

CREATE TABLE IF NOT EXISTS `posts_photos` (
  `photo_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `album_id` int(10) unsigned DEFAULT NULL,
  `source` varchar(255) NOT NULL,
  `likes` int(10) unsigned NOT NULL DEFAULT '0',
  `comments` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts_photos`
--

INSERT INTO `posts_photos` (`photo_id`, `post_id`, `album_id`, `source`, `likes`, `comments`) VALUES
(1, 1, 1, 'photos/2017/06/sngine_b38b5d1d9a7ada67babc8dc9f15d29b2.jpg', 0, 0),
(2, 2, 2, 'photos/2017/06/sngine_3e7847a86d2f20a75d1d07cf04f49681.jpg', 0, 0),
(3, 3, 3, 'photos/2017/06/sngine_e68278601acc4c70e652d39cbaa4530d.png', 0, 0),
(4, 4, 4, 'photos/2017/06/sngine_a0767d43cd17545650fb70229242fbd7.jpg', 0, 0),
(5, 5, 5, 'photos/2017/06/sngine_c2fc1e1c3c184e3d6d88b9f9c40fd204.png', 0, 0),
(6, 6, 6, 'photos/2017/06/sngine_84169500f23b01dffcaa9f844689fe2d.jpg', 0, 0),
(7, 7, 6, 'photos/2017/06/sngine_b69fbeb7208a4ad7b1d0d55237bf0ecf.png', 0, 0),
(8, 8, 6, 'photos/2017/06/sngine_a75845518af3d9fadffc76bb3274978f.jpg', 0, 0),
(9, 12, NULL, 'photos/2017/06/sngine_b4da0149b43ce8295f9b4cfca2ca0d16.jpg', 0, 0),
(10, 14, 7, 'photos/2017/06/sngine_eb15bc2ac67d5e7e8cd4802109ca8f92.jpg', 0, 0),
(11, 15, NULL, 'photos/2017/06/sngine_df95131927929d94c20398b0cce26f22.jpg', 0, 0),
(12, 17, NULL, 'photos/2017/06/sngine_8a8a141360006e1996dcf964c2e9fa96.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts_photos_albums`
--

CREATE TABLE IF NOT EXISTS `posts_photos_albums` (
  `album_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_type` enum('user','page') CHARACTER SET latin1 NOT NULL,
  `in_group` enum('0','1') CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `group_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `privacy` enum('me','friends','public') CHARACTER SET latin1 NOT NULL DEFAULT 'public'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts_photos_albums`
--

INSERT INTO `posts_photos_albums` (`album_id`, `user_id`, `user_type`, `in_group`, `group_id`, `title`, `privacy`) VALUES
(1, 1, 'user', '0', NULL, 'Profile Pictures', 'public'),
(2, 1, 'user', '0', NULL, 'Cover Photos', 'public'),
(3, 1, 'user', '1', 1, 'Profile Pictures', 'public'),
(4, 1, 'user', '1', 1, 'Cover Photos', 'public'),
(5, 1, 'page', '0', NULL, 'Profile Pictures', 'public'),
(6, 1, 'page', '0', NULL, 'Cover Photos', 'public'),
(7, 2, 'page', '0', NULL, 'Cover Photos', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `posts_photos_likes`
--

CREATE TABLE IF NOT EXISTS `posts_photos_likes` (
  `user_id` int(10) unsigned NOT NULL,
  `photo_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `posts_polls`
--

CREATE TABLE IF NOT EXISTS `posts_polls` (
  `poll_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `votes` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `posts_polls_options`
--

CREATE TABLE IF NOT EXISTS `posts_polls_options` (
  `option_id` int(10) unsigned NOT NULL,
  `poll_id` int(10) unsigned NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `posts_products`
--

CREATE TABLE IF NOT EXISTS `posts_products` (
  `product_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(32) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `location` varchar(255) NOT NULL,
  `available` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `posts_products`
--

INSERT INTO `posts_products` (`product_id`, `post_id`, `name`, `price`, `category_id`, `location`, `available`) VALUES
(1, 12, 'Tampa', '35000', 2, 'Super Cool Auto Shop', '1'),
(2, 13, 'Tampa', '30000', 2, '', '1'),
(3, 15, 'Dope ass tampa', '30000', 2, '', '1'),
(4, 16, 'Vinewood Hills Mansion', '5000000', 10, '', '1'),
(5, 17, 'Vinewood Hills Mansion', '5000000', 11, '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `posts_saved`
--

CREATE TABLE IF NOT EXISTS `posts_saved` (
  `post_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts_videos`
--

CREATE TABLE IF NOT EXISTS `posts_videos` (
  `video_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `posts_videos`
--

INSERT INTO `posts_videos` (`video_id`, `post_id`, `source`) VALUES
(1, 12, ''),
(2, 13, ''),
(3, 15, ''),
(4, 16, ''),
(5, 17, '');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE IF NOT EXISTS `static_pages` (
  `page_id` int(10) NOT NULL,
  `page_url` varchar(64) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_text` text NOT NULL,
  `in_footer` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `static_pages`
--

INSERT INTO `static_pages` (`page_id`, `page_url`, `page_title`, `page_text`, `in_footer`) VALUES
(4, 'boostpost', 'Boost Your Post!', '&lt;h1&gt;Boosted Post Information&lt;/h1&gt;\r\n&lt;p&gt;So, you want more people to see a post your or your business made on LS Connect, huh? Then you use the LS Connect Boost Post feature!&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h2&gt;How does it work?&lt;/h2&gt;\r\n&lt;p&gt;For a one-time payment of $2,000, you can have your LS Connect post or product boosted for a week. When a post is boosted, your post or market product will be receive more views from the LS Connect community, ensuring you have a higher chance at getting your post seen or your product sold!&lt;/p&gt;\r\n&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;http://i.imgur.com/x1hmPgN.jpg&quot; alt=&quot;&quot; width=&quot;244&quot; height=&quot;494&quot; /&gt;&lt;/p&gt;\r\n&lt;h2&gt;How do I pay for a boosted post?&lt;/h2&gt;\r\n&lt;p&gt;Please send an email to our support team by clicking &lt;strong&gt;&lt;a href=&quot;https://forum.fiverp.net/members/fergie.2623/&quot;&gt;HERE&lt;/a&gt;&lt;/strong&gt;. Be sure to use the below subject line and provide the requested information:&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Subject Line: LS Connect Boost Request&lt;br /&gt;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Please provide the following information:&lt;/p&gt;\r\n&lt;ol&gt;\r\n&lt;li&gt;A link to the post you would like boosted&lt;/li&gt;\r\n&lt;li&gt;How long you would like it boosted (Weeks)&lt;/li&gt;\r\n&lt;li&gt;Your name and phone number&lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;p&gt;Our team will reach out to you to arrange a time to make your payment.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;em&gt;PLEASE NOTE: We will not boost any posts that contain pornogrophy or any illegal content.&lt;/em&gt;&lt;/p&gt;', '1'),
(5, 'verifynow', 'GET VERIFIED! BE FAMOUS!', '&lt;h1&gt;Account Verification Information&lt;/h1&gt;\r\n&lt;p&gt;So, you want people to know you&#039;re super important? Maybe you want them to value your business over the competition? Then you need to get LS Connect Verified!&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h2&gt;How does it work?&lt;/h2&gt;\r\n&lt;p&gt;Verified accounts get a blue check mark next to their name, as well as they get discounted post boosts. Not only is the infamous blue checkmark a status symbol, it also draws attention to your profile or business, resulting in more followers and more views of your posts.&lt;/p&gt;\r\n&lt;p&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; src=&quot;http://i.imgur.com/aDG2DjK.jpg&quot; alt=&quot;&quot; width=&quot;504&quot; height=&quot;251&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;An account may be verified if it is determined to be an account of public interest. Typically this includes accounts maintained by users in music, acting, fashion, government, politics, religion, journalism, media, sports, business, and other key interest areas.&lt;/p&gt;\r\n&lt;p&gt;&lt;br /&gt;Accounts that don&amp;rsquo;t have the badge next to their name but that display it somewhere else, for example in the profile photo, header photo, or bio, are not verified accounts.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;h2&gt;How do I get my account verified&lt;/h2&gt;\r\n&lt;p&gt;First off, you need to submit a verification request via your account or page info settings.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Once done, please send an email to our support team by clicking &lt;strong&gt;&lt;a href=&quot;https://forum.fiverp.net/members/fergie.2623/&quot;&gt;HERE&lt;/a&gt;&lt;/strong&gt;. Be sure to use the below subject line and provide the requested information:&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Subject Line: LS Connect Verified Request&lt;br /&gt;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Please provide the following information:&lt;/p&gt;\r\n&lt;ol&gt;\r\n&lt;li&gt;A link to your account/business you are requesting verification for&lt;/li&gt;\r\n&lt;li&gt;Why you should be verified&lt;/li&gt;\r\n&lt;li&gt;You phone number&lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;p&gt;There are currently two different costs for account verification vs. page/business verification&lt;/p&gt;\r\n&lt;p&gt;Page Verification: $20.000 one-time fee&lt;/p&gt;\r\n&lt;p&gt;Personal Account Verification: $10,000 one-time fee&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;EXCEPTIONS:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Public service department pages are able to be verified for free. (FD, PD, DoC, GoV, etc)&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Note: &lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;In order for your account or page to be verified, you must meet certain requirements and a certain level of popularity. These are not set requirements and may change based on the amount of verified requests we receive. The amount of likes a page has or the amount of followers an individual has will also play a factor as to whether an account will or will not be verified. &lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '1');

-- --------------------------------------------------------

--
-- Table structure for table `system_languages`
--

CREATE TABLE IF NOT EXISTS `system_languages` (
  `language_id` int(10) unsigned NOT NULL,
  `code` varchar(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `flag_icon` varchar(32) NOT NULL,
  `dir` enum('LTR','RTL') NOT NULL,
  `default` enum('0','1') NOT NULL,
  `enabled` enum('0','1') NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_languages`
--

INSERT INTO `system_languages` (`language_id`, `code`, `title`, `flag_icon`, `dir`, `default`, `enabled`) VALUES
(1, 'en_us', 'English', 'us', 'LTR', '1', '1'),
(2, 'ar_sa', 'Arabic', 'sa', 'RTL', '0', '1'),
(3, 'fr_fr', 'Fran&ccedil;ais', 'fr', 'LTR', '0', '1'),
(4, 'es_es', 'Espa&ntilde;ol', 'es', 'LTR', '0', '1'),
(5, 'pt_pt', 'Portugu&ecirc;s', 'pt', 'LTR', '0', '1'),
(6, 'de_de', 'Deutsch', 'de', 'LTR', '0', '1'),
(7, 'tr_tr', 'T&uuml;rk&ccedil;e', 'tr', 'LTR', '0', '1'),
(8, 'nl_nl', 'Dutch', 'nl', 'LTR', '0', '1'),
(9, 'it_it', 'Italiano', 'it', 'LTR', '0', '1'),
(10, 'ru_ru', 'Russian', 'ru', 'LTR', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `system_options`
--

CREATE TABLE IF NOT EXISTS `system_options` (
  `ID` int(10) unsigned NOT NULL,
  `system_live` enum('1','0') NOT NULL DEFAULT '1',
  `system_message` text NOT NULL,
  `system_title` varchar(255) NOT NULL DEFAULT 'Sngine',
  `system_description` text NOT NULL,
  `system_keywords` text NOT NULL,
  `system_email` varchar(255) DEFAULT NULL,
  `system_public` enum('1','0') NOT NULL DEFAULT '1',
  `directory_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `market_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `pages_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `groups_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `games_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `contact_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `verification_requests` enum('1','0') NOT NULL DEFAULT '1',
  `profile_notification_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `wall_posts_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `advanced_scraper` enum('1','0') NOT NULL DEFAULT '0',
  `geolocation_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `geolocation_key` varchar(255) DEFAULT NULL,
  `registration_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `registration_type` enum('free','paid') NOT NULL DEFAULT 'free',
  `packages_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `activation_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `activation_type` enum('email','sms') NOT NULL DEFAULT 'email',
  `age_restriction` enum('1','0') NOT NULL DEFAULT '0',
  `minimum_age` tinyint(1) unsigned DEFAULT NULL,
  `getting_started` enum('1','0') NOT NULL DEFAULT '1',
  `delete_accounts_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `max_accounts` int(10) unsigned NOT NULL DEFAULT '0',
  `social_login_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `facebook_login_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `facebook_appid` varchar(255) DEFAULT NULL,
  `facebook_secret` varchar(255) DEFAULT NULL,
  `twitter_login_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `twitter_appid` varchar(255) DEFAULT NULL,
  `twitter_secret` varchar(255) DEFAULT NULL,
  `google_login_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `google_appid` varchar(255) DEFAULT NULL,
  `google_secret` varchar(255) DEFAULT NULL,
  `instagram_login_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `instagram_appid` varchar(255) DEFAULT NULL,
  `instagram_secret` varchar(255) DEFAULT NULL,
  `linkedin_login_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `linkedin_appid` varchar(255) DEFAULT NULL,
  `linkedin_secret` varchar(255) DEFAULT NULL,
  `vkontakte_login_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `vkontakte_appid` varchar(255) DEFAULT NULL,
  `vkontakte_secret` varchar(255) DEFAULT NULL,
  `email_smtp_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `email_smtp_authentication` enum('1','0') NOT NULL DEFAULT '1',
  `email_smtp_ssl` enum('1','0') NOT NULL DEFAULT '0',
  `email_smtp_server` varchar(255) DEFAULT NULL,
  `email_smtp_port` varchar(255) DEFAULT NULL,
  `email_smtp_username` varchar(255) DEFAULT NULL,
  `email_smtp_password` varchar(255) DEFAULT NULL,
  `email_smtp_setfrom` varchar(255) DEFAULT NULL,
  `email_notifications` enum('1','0') NOT NULL DEFAULT '1',
  `email_post_likes` enum('1','0') NOT NULL DEFAULT '1',
  `email_post_comments` enum('1','0') NOT NULL DEFAULT '1',
  `email_post_shares` enum('1','0') NOT NULL DEFAULT '1',
  `email_wall_posts` enum('1','0') NOT NULL DEFAULT '1',
  `email_mentions` enum('1','0') NOT NULL DEFAULT '1',
  `email_profile_visits` enum('1','0') NOT NULL DEFAULT '1',
  `email_friend_requests` enum('1','0') NOT NULL DEFAULT '1',
  `twilio_sid` varchar(255) DEFAULT NULL,
  `twilio_token` varchar(255) DEFAULT NULL,
  `twilio_phone` varchar(255) DEFAULT NULL,
  `system_phone` varchar(255) DEFAULT NULL,
  `chat_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `chat_status_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `s3_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `s3_bucket` varchar(255) DEFAULT NULL,
  `s3_region` varchar(255) DEFAULT NULL,
  `s3_key` varchar(255) DEFAULT NULL,
  `s3_secret` varchar(255) DEFAULT NULL,
  `uploads_directory` varchar(255) NOT NULL DEFAULT 'content/uploads',
  `uploads_prefix` varchar(255) DEFAULT 'sngine',
  `max_avatar_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `max_cover_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `photos_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `max_photo_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `videos_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `max_video_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `video_extensions` text NOT NULL,
  `audio_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `max_audio_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `audio_extensions` text NOT NULL,
  `file_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `max_file_size` int(10) unsigned NOT NULL DEFAULT '5120',
  `file_extensions` text NOT NULL,
  `censored_words_enabled` enum('1','0') NOT NULL DEFAULT '1',
  `censored_words` text NOT NULL,
  `reCAPTCHA_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `reCAPTCHA_site_key` varchar(255) DEFAULT NULL,
  `reCAPTCHA_secret_key` varchar(255) DEFAULT NULL,
  `session_hash` varchar(255) NOT NULL,
  `paypal_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `paypal_mode` enum('live','sandbox') NOT NULL DEFAULT 'sandbox',
  `paypal_id` varchar(255) DEFAULT NULL,
  `paypal_secret` varchar(255) DEFAULT NULL,
  `creditcard_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `alipay_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `bitcoin_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `stripe_mode` enum('live','test') NOT NULL DEFAULT 'test',
  `stripe_test_secret` varchar(255) DEFAULT NULL,
  `stripe_test_publishable` varchar(255) DEFAULT NULL,
  `stripe_live_secret` varchar(255) DEFAULT NULL,
  `stripe_live_publishable` varchar(255) DEFAULT NULL,
  `system_currency` varchar(64) DEFAULT 'USD',
  `data_heartbeat` int(10) unsigned NOT NULL DEFAULT '5',
  `chat_heartbeat` int(10) unsigned NOT NULL DEFAULT '5',
  `offline_time` int(10) unsigned NOT NULL DEFAULT '10',
  `min_results` int(10) unsigned NOT NULL DEFAULT '5',
  `max_results` int(10) unsigned NOT NULL DEFAULT '10',
  `min_results_even` int(10) unsigned NOT NULL DEFAULT '6',
  `max_results_even` int(10) unsigned NOT NULL DEFAULT '12',
  `analytics_code` text NOT NULL,
  `system_logo` varchar(255) DEFAULT NULL,
  `system_wallpaper_default` enum('1','0') NOT NULL DEFAULT '1',
  `system_wallpaper` varchar(255) DEFAULT NULL,
  `system_favicon_default` enum('1','0') NOT NULL DEFAULT '1',
  `system_favicon` varchar(255) DEFAULT NULL,
  `system_ogimage_default` enum('1','0') NOT NULL DEFAULT '1',
  `system_ogimage` varchar(255) DEFAULT NULL,
  `css_customized` enum('1','0') NOT NULL DEFAULT '0',
  `css_background` varchar(32) DEFAULT NULL,
  `css_link_color` varchar(32) DEFAULT NULL,
  `css_header` varchar(32) DEFAULT NULL,
  `css_header_search` varchar(32) DEFAULT NULL,
  `css_header_search_color` varchar(32) DEFAULT NULL,
  `css_btn_primary` varchar(32) DEFAULT NULL,
  `css_menu_background` varchar(32) DEFAULT NULL,
  `css_custome_css` text NOT NULL,
  `affiliates_enabled` enum('1','0') NOT NULL DEFAULT '0',
  `affiliate_type` enum('registration','packages') NOT NULL DEFAULT 'registration',
  `affiliate_payment_method` enum('paypal','skrill','both') NOT NULL DEFAULT 'both',
  `affiliates_min_withdrawal` int(10) unsigned NOT NULL DEFAULT '50',
  `affiliates_per_user` varchar(32) NOT NULL DEFAULT '0.1'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `system_options`
--

INSERT INTO `system_options` (`ID`, `system_live`, `system_message`, `system_title`, `system_description`, `system_keywords`, `system_email`, `system_public`, `directory_enabled`, `market_enabled`, `pages_enabled`, `groups_enabled`, `games_enabled`, `contact_enabled`, `verification_requests`, `profile_notification_enabled`, `wall_posts_enabled`, `advanced_scraper`, `geolocation_enabled`, `geolocation_key`, `registration_enabled`, `registration_type`, `packages_enabled`, `activation_enabled`, `activation_type`, `age_restriction`, `minimum_age`, `getting_started`, `delete_accounts_enabled`, `max_accounts`, `social_login_enabled`, `facebook_login_enabled`, `facebook_appid`, `facebook_secret`, `twitter_login_enabled`, `twitter_appid`, `twitter_secret`, `google_login_enabled`, `google_appid`, `google_secret`, `instagram_login_enabled`, `instagram_appid`, `instagram_secret`, `linkedin_login_enabled`, `linkedin_appid`, `linkedin_secret`, `vkontakte_login_enabled`, `vkontakte_appid`, `vkontakte_secret`, `email_smtp_enabled`, `email_smtp_authentication`, `email_smtp_ssl`, `email_smtp_server`, `email_smtp_port`, `email_smtp_username`, `email_smtp_password`, `email_smtp_setfrom`, `email_notifications`, `email_post_likes`, `email_post_comments`, `email_post_shares`, `email_wall_posts`, `email_mentions`, `email_profile_visits`, `email_friend_requests`, `twilio_sid`, `twilio_token`, `twilio_phone`, `system_phone`, `chat_enabled`, `chat_status_enabled`, `s3_enabled`, `s3_bucket`, `s3_region`, `s3_key`, `s3_secret`, `uploads_directory`, `uploads_prefix`, `max_avatar_size`, `max_cover_size`, `photos_enabled`, `max_photo_size`, `videos_enabled`, `max_video_size`, `video_extensions`, `audio_enabled`, `max_audio_size`, `audio_extensions`, `file_enabled`, `max_file_size`, `file_extensions`, `censored_words_enabled`, `censored_words`, `reCAPTCHA_enabled`, `reCAPTCHA_site_key`, `reCAPTCHA_secret_key`, `session_hash`, `paypal_enabled`, `paypal_mode`, `paypal_id`, `paypal_secret`, `creditcard_enabled`, `alipay_enabled`, `bitcoin_enabled`, `stripe_mode`, `stripe_test_secret`, `stripe_test_publishable`, `stripe_live_secret`, `stripe_live_publishable`, `system_currency`, `data_heartbeat`, `chat_heartbeat`, `offline_time`, `min_results`, `max_results`, `min_results_even`, `max_results_even`, `analytics_code`, `system_logo`, `system_wallpaper_default`, `system_wallpaper`, `system_favicon_default`, `system_favicon`, `system_ogimage_default`, `system_ogimage`, `css_customized`, `css_background`, `css_link_color`, `css_header`, `css_header_search`, `css_header_search_color`, `css_btn_primary`, `css_menu_background`, `css_custome_css`, `affiliates_enabled`, `affiliate_type`, `affiliate_payment_method`, `affiliates_min_withdrawal`, `affiliates_per_user`) VALUES
(1, '1', 'LS Connect is currently under development. Check back later.', 'LS Connect', '', '', '', '1', '1', '1', '1', '1', '0', '0', '1', '0', '1', '1', '0', '', '1', 'free', '0', '0', 'email', '0', 13, '1', '0', 0, '0', '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', NULL, NULL, '0', '1', '0', NULL, NULL, NULL, NULL, NULL, '1', '1', '1', '1', '1', '1', '0', '1', NULL, NULL, NULL, NULL, '1', '1', '0', NULL, NULL, NULL, NULL, 'content/uploads', 'sngine', 5120, 5120, '1', 5120, '1', 5120, 'mp4, mov', '1', 512000, 'mp3, wav', '1', 5120, 'txt, zip', '1', '', '0', '', '', '', '0', 'sandbox', '', '', '0', '0', '0', 'test', NULL, NULL, NULL, NULL, 'USD', 5, 5, 10, 5, 10, 6, 12, '', 'photos/2017/06/sngine_766fd1445fcb7fba95913601703ce203.png', '1', 'photos/2017/06/sngine_4fce2f63aced74d421e2d80a4950aa8b.jpg', '0', 'photos/2017/06/sngine_8263a005641c7feceda4c75ed017e46f.png', '0', '', '1', '#eff3f6', '#9fa9ba', '#3f474d', '#e1e1e1', '#9fa9ba', '#34abd2', '#34abd2', '', '1', 'registration', 'both', 50, '0.10');

-- --------------------------------------------------------

--
-- Table structure for table `system_themes`
--

CREATE TABLE IF NOT EXISTS `system_themes` (
  `theme_id` int(10) unsigned NOT NULL,
  `name` varchar(64) NOT NULL,
  `default` enum('0','1') NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `system_themes`
--

INSERT INTO `system_themes` (`theme_id`, `name`, `default`) VALUES
(1, 'default', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL,
  `user_group` tinyint(10) unsigned NOT NULL DEFAULT '3',
  `user_name` varchar(64) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_phone` varchar(64) DEFAULT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_activated` enum('0','1') NOT NULL DEFAULT '0',
  `user_activation_key` varchar(64) DEFAULT NULL,
  `user_reseted` enum('0','1') NOT NULL DEFAULT '0',
  `user_reset_key` varchar(64) DEFAULT NULL,
  `user_subscribed` enum('0','1') NOT NULL DEFAULT '0',
  `user_package` int(10) unsigned DEFAULT NULL,
  `user_subscription_date` datetime DEFAULT NULL,
  `user_boosted_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `user_boosted_pages` int(10) unsigned NOT NULL DEFAULT '0',
  `user_started` enum('0','1') NOT NULL DEFAULT '0',
  `user_verified` enum('0','1') NOT NULL DEFAULT '0',
  `user_banned` enum('0','1') NOT NULL DEFAULT '0',
  `user_live_requests_counter` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_requests_lastid` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_messages_counter` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_messages_lastid` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_notifications_counter` int(10) unsigned NOT NULL DEFAULT '0',
  `user_live_notifications_lastid` int(10) unsigned NOT NULL DEFAULT '0',
  `user_fullname` varchar(255) NOT NULL,
  `user_gender` enum('male','female') NOT NULL,
  `user_picture` varchar(255) DEFAULT NULL,
  `user_picture_id` int(10) unsigned DEFAULT NULL,
  `user_cover` varchar(255) DEFAULT NULL,
  `user_cover_id` int(10) unsigned DEFAULT NULL,
  `user_album_pictures` int(10) unsigned DEFAULT NULL,
  `user_album_covers` int(10) unsigned DEFAULT NULL,
  `user_album_timeline` int(10) unsigned DEFAULT NULL,
  `user_pinned_post` int(10) unsigned DEFAULT NULL,
  `user_registered` datetime DEFAULT NULL,
  `user_last_login` datetime DEFAULT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_relationship` varchar(255) DEFAULT NULL,
  `user_biography` text,
  `user_website` varchar(255) DEFAULT NULL,
  `user_work_title` varchar(255) DEFAULT NULL,
  `user_work_place` varchar(255) DEFAULT NULL,
  `user_current_city` varchar(255) DEFAULT NULL,
  `user_hometown` varchar(255) DEFAULT NULL,
  `user_edu_major` varchar(255) DEFAULT NULL,
  `user_edu_school` varchar(255) DEFAULT NULL,
  `user_edu_class` varchar(255) DEFAULT NULL,
  `user_social_facebook` varchar(255) DEFAULT NULL,
  `user_social_twitter` varchar(255) DEFAULT NULL,
  `user_social_google` varchar(255) DEFAULT NULL,
  `user_social_youtube` varchar(255) DEFAULT NULL,
  `user_social_instagram` varchar(255) DEFAULT NULL,
  `user_social_linkedin` varchar(255) DEFAULT NULL,
  `user_social_vkontakte` varchar(255) DEFAULT NULL,
  `user_chat_enabled` enum('0','1') NOT NULL DEFAULT '1',
  `user_privacy_wall` enum('me','friends','public') NOT NULL DEFAULT 'friends',
  `user_privacy_birthdate` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_relationship` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_basic` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_work` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_location` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_education` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_other` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_friends` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_photos` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_pages` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `user_privacy_groups` enum('me','friends','public') NOT NULL DEFAULT 'public',
  `email_post_likes` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_comments` enum('0','1') NOT NULL DEFAULT '1',
  `email_post_shares` enum('0','1') NOT NULL DEFAULT '1',
  `email_wall_posts` enum('0','1') NOT NULL DEFAULT '1',
  `email_mentions` enum('0','1') NOT NULL DEFAULT '1',
  `email_profile_visits` enum('0','1') NOT NULL DEFAULT '1',
  `email_friend_requests` enum('0','1') NOT NULL DEFAULT '1',
  `facebook_connected` enum('0','1') NOT NULL DEFAULT '0',
  `facebook_id` varchar(255) DEFAULT NULL,
  `twitter_connected` enum('0','1') NOT NULL DEFAULT '0',
  `twitter_id` varchar(255) DEFAULT NULL,
  `google_connected` enum('0','1') NOT NULL DEFAULT '0',
  `google_id` varchar(255) DEFAULT NULL,
  `instagram_connected` enum('0','1') NOT NULL DEFAULT '0',
  `instagram_id` varchar(255) DEFAULT NULL,
  `linkedin_connected` enum('0','1') NOT NULL DEFAULT '0',
  `linkedin_id` varchar(255) DEFAULT NULL,
  `vkontakte_connected` enum('0','1') NOT NULL DEFAULT '0',
  `vkontakte_id` varchar(255) DEFAULT NULL,
  `user_referrer_id` int(10) DEFAULT NULL,
  `user_affiliate_balance` varchar(64) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_group`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_activated`, `user_activation_key`, `user_reseted`, `user_reset_key`, `user_subscribed`, `user_package`, `user_subscription_date`, `user_boosted_posts`, `user_boosted_pages`, `user_started`, `user_verified`, `user_banned`, `user_live_requests_counter`, `user_live_requests_lastid`, `user_live_messages_counter`, `user_live_messages_lastid`, `user_live_notifications_counter`, `user_live_notifications_lastid`, `user_fullname`, `user_gender`, `user_picture`, `user_picture_id`, `user_cover`, `user_cover_id`, `user_album_pictures`, `user_album_covers`, `user_album_timeline`, `user_pinned_post`, `user_registered`, `user_last_login`, `user_birthdate`, `user_relationship`, `user_biography`, `user_website`, `user_work_title`, `user_work_place`, `user_current_city`, `user_hometown`, `user_edu_major`, `user_edu_school`, `user_edu_class`, `user_social_facebook`, `user_social_twitter`, `user_social_google`, `user_social_youtube`, `user_social_instagram`, `user_social_linkedin`, `user_social_vkontakte`, `user_chat_enabled`, `user_privacy_wall`, `user_privacy_birthdate`, `user_privacy_relationship`, `user_privacy_basic`, `user_privacy_work`, `user_privacy_location`, `user_privacy_education`, `user_privacy_other`, `user_privacy_friends`, `user_privacy_photos`, `user_privacy_pages`, `user_privacy_groups`, `email_post_likes`, `email_post_comments`, `email_post_shares`, `email_wall_posts`, `email_mentions`, `email_profile_visits`, `email_friend_requests`, `facebook_connected`, `facebook_id`, `twitter_connected`, `twitter_id`, `google_connected`, `google_id`, `instagram_connected`, `instagram_id`, `linkedin_connected`, `linkedin_id`, `vkontakte_connected`, `vkontakte_id`, `user_referrer_id`, `user_affiliate_balance`) VALUES
(1, 1, 'Fergie', 'hello@tonyromanelli.com', NULL, 'e32c6f00eaca496e30a37fe8a7c25169', '0', 'e40896a311a69a60bfb76f02f09bfc37', '0', NULL, '0', NULL, NULL, 1, 1, '1', '1', '0', 0, 0, 0, 0, 0, 0, 'Adam Ferguson', 'male', 'photos/2017/06/sngine_b38b5d1d9a7ada67babc8dc9f15d29b2.jpg', 1, 'photos/2017/06/sngine_3e7847a86d2f20a75d1d07cf04f49681.jpg', 2, 1, 2, NULL, NULL, '2017-06-06 21:54:04', '2017-06-13 02:05:15', NULL, 'single', '', NULL, 'Founder, CEO', 'LS Connect', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'friends', 'me', 'public', 'public', 'public', 'me', 'public', 'public', 'public', 'public', 'public', 'public', '1', '1', '1', '1', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, '0'),
(4, 3, 'jbernath', 'notarealemail@fergierox.ls', NULL, 'e32c6f00eaca496e30a37fe8a7c25169', '0', '79a5caaa58ea70c8605bf07f73a699ad', '0', NULL, '0', NULL, NULL, 0, 0, '1', '0', '0', 0, 0, 0, 0, 2, 0, 'Jessica Bernath', 'female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-10 20:49:54', '2017-06-13 02:19:32', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'friends', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', 'public', '1', '1', '1', '1', '1', '1', '1', '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, '0', NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_blocks`
--

CREATE TABLE IF NOT EXISTS `users_blocks` (
  `user_id` int(10) unsigned NOT NULL,
  `blocked_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `users_custom_fields`
--

CREATE TABLE IF NOT EXISTS `users_custom_fields` (
  `user_id` int(10) unsigned NOT NULL,
  `field_id` int(10) unsigned NOT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE IF NOT EXISTS `users_online` (
  `user_id` int(10) unsigned NOT NULL,
  `last_seen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`user_id`, `last_seen`) VALUES
(1, '2017-06-13 02:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `users_polls_options`
--

CREATE TABLE IF NOT EXISTS `users_polls_options` (
  `user_id` int(10) unsigned NOT NULL,
  `poll_id` int(10) unsigned NOT NULL,
  `option_id` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Table structure for table `users_sessions`
--

CREATE TABLE IF NOT EXISTS `users_sessions` (
  `session_id` int(10) unsigned NOT NULL,
  `session_token` varchar(64) NOT NULL,
  `session_date` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `user_browser` varchar(64) NOT NULL,
  `user_os` varchar(64) NOT NULL,
  `user_ip` varchar(64) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users_sessions`
--

INSERT INTO `users_sessions` (`session_id`, `session_token`, `session_date`, `user_id`, `user_browser`, `user_os`, `user_ip`) VALUES
(6, '04211dd18e7636a4ee6ee038e459974e', '2017-06-07 13:40:57', 1, 'Firefox', 'Windows 10', '107.15.210.175'),
(3, 'e5b8d97885c579db2bcde5e67adebdd5', '2017-06-06 22:47:48', 2, 'Firefox', 'Windows 10', '107.15.210.175'),
(9, '942b3b44a4a93e2300709f3977de0171', '2017-06-07 23:52:18', 1, 'Firefox', 'Windows 10', '107.15.210.175'),
(12, 'a47fc327cc5cf2571c4e1790119297bd', '2017-06-10 20:25:16', 3, 'Edge', 'Windows 10', '107.15.210.175'),
(18, '5b8d49f05bcb49a5ceeee7b3ec97b817', '2017-06-10 21:02:08', 1, 'Firefox', 'Windows 10', '107.15.210.175'),
(19, 'b09a7902094e71f4f01a2af155f2e8cb', '2017-06-10 21:38:11', 4, 'Firefox', 'Windows 10', '107.15.210.175'),
(20, 'af4356c49bffdefa1eb9e0028893c484', '2017-06-13 02:05:15', 1, 'Firefox', 'Windows 10', '107.15.210.175'),
(21, '06fc94a968eb334b9df7e78fc874f647', '2017-06-13 02:13:22', 4, 'Firefox', 'Windows 10', '107.15.210.175');

-- --------------------------------------------------------

--
-- Table structure for table `verification_requests`
--

CREATE TABLE IF NOT EXISTS `verification_requests` (
  `request_id` int(10) unsigned NOT NULL,
  `node_id` int(10) unsigned NOT NULL,
  `node_type` varchar(32) NOT NULL,
  `time` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `widget_id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `place` varchar(32) NOT NULL,
  `code` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `affiliates_payments`
--
ALTER TABLE `affiliates_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `announcements_users`
--
ALTER TABLE `announcements_users`
  ADD UNIQUE KEY `announcement_id_user_id` (`announcement_id`,`user_id`);

--
-- Indexes for table `banned_ips`
--
ALTER TABLE `banned_ips`
  ADD PRIMARY KEY (`ip_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `conversations_messages`
--
ALTER TABLE `conversations_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `conversations_users`
--
ALTER TABLE `conversations_users`
  ADD UNIQUE KEY `conversation_id_user_id` (`conversation_id`,`user_id`);

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `followings`
--
ALTER TABLE `followings`
  ADD UNIQUE KEY `user_id_following_id` (`user_id`,`following_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_one_id_user_two_id` (`user_one_id`,`user_two_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`), ADD UNIQUE KEY `username` (`group_name`);

--
-- Indexes for table `groups_members`
--
ALTER TABLE `groups_members`
  ADD UNIQUE KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `market_categories`
--
ALTER TABLE `market_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `packages_payments`
--
ALTER TABLE `packages_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`), ADD UNIQUE KEY `username` (`page_name`);

--
-- Indexes for table `pages_categories`
--
ALTER TABLE `pages_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `pages_likes`
--
ALTER TABLE `pages_likes`
  ADD UNIQUE KEY `page_id_user_id` (`page_id`,`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `posts_audios`
--
ALTER TABLE `posts_audios`
  ADD PRIMARY KEY (`audio_id`);

--
-- Indexes for table `posts_comments`
--
ALTER TABLE `posts_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts_comments_likes`
--
ALTER TABLE `posts_comments_likes`
  ADD UNIQUE KEY `comment_id_user_id` (`comment_id`,`user_id`);

--
-- Indexes for table `posts_files`
--
ALTER TABLE `posts_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `posts_hidden`
--
ALTER TABLE `posts_hidden`
  ADD UNIQUE KEY `post_id_user_id` (`post_id`,`user_id`);

--
-- Indexes for table `posts_likes`
--
ALTER TABLE `posts_likes`
  ADD UNIQUE KEY `post_id_user_id` (`post_id`,`user_id`);

--
-- Indexes for table `posts_links`
--
ALTER TABLE `posts_links`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `posts_media`
--
ALTER TABLE `posts_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `posts_photos`
--
ALTER TABLE `posts_photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `posts_photos_albums`
--
ALTER TABLE `posts_photos_albums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `posts_photos_likes`
--
ALTER TABLE `posts_photos_likes`
  ADD UNIQUE KEY `user_id_photo_id` (`user_id`,`photo_id`);

--
-- Indexes for table `posts_polls`
--
ALTER TABLE `posts_polls`
  ADD PRIMARY KEY (`poll_id`);

--
-- Indexes for table `posts_polls_options`
--
ALTER TABLE `posts_polls_options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `posts_products`
--
ALTER TABLE `posts_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `posts_saved`
--
ALTER TABLE `posts_saved`
  ADD UNIQUE KEY `post_id_user_id` (`post_id`,`user_id`);

--
-- Indexes for table `posts_videos`
--
ALTER TABLE `posts_videos`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`page_id`), ADD UNIQUE KEY `page_url` (`page_url`);

--
-- Indexes for table `system_languages`
--
ALTER TABLE `system_languages`
  ADD PRIMARY KEY (`language_id`), ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `system_options`
--
ALTER TABLE `system_options`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `system_themes`
--
ALTER TABLE `system_themes`
  ADD PRIMARY KEY (`theme_id`), ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`user_name`), ADD UNIQUE KEY `user_email` (`user_email`), ADD UNIQUE KEY `facebook_id` (`facebook_id`), ADD UNIQUE KEY `twitter_id` (`twitter_id`), ADD UNIQUE KEY `google_id` (`google_id`), ADD UNIQUE KEY `linkedin_id` (`linkedin_id`), ADD UNIQUE KEY `vkontakte_id` (`vkontakte_id`), ADD UNIQUE KEY `instagram_id` (`instagram_id`), ADD UNIQUE KEY `user_phone` (`user_phone`);

--
-- Indexes for table `users_blocks`
--
ALTER TABLE `users_blocks`
  ADD UNIQUE KEY `user_id_blocked_id` (`user_id`,`blocked_id`);

--
-- Indexes for table `users_custom_fields`
--
ALTER TABLE `users_custom_fields`
  ADD UNIQUE KEY `user_id_field_id` (`user_id`,`field_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD UNIQUE KEY `UserID` (`user_id`);

--
-- Indexes for table `users_polls_options`
--
ALTER TABLE `users_polls_options`
  ADD UNIQUE KEY `user_id_poll_id` (`user_id`,`poll_id`);

--
-- Indexes for table `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD PRIMARY KEY (`session_id`), ADD UNIQUE KEY `session_token` (`session_token`), ADD KEY `user_ip` (`user_ip`);

--
-- Indexes for table `verification_requests`
--
ALTER TABLE `verification_requests`
  ADD PRIMARY KEY (`request_id`), ADD UNIQUE KEY `node_id_node_type` (`node_id`,`node_type`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`widget_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `affiliates_payments`
--
ALTER TABLE `affiliates_payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banned_ips`
--
ALTER TABLE `banned_ips`
  MODIFY `ip_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `conversations_messages`
--
ALTER TABLE `conversations_messages`
  MODIFY `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `custom_fields`
--
ALTER TABLE `custom_fields`
  MODIFY `field_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `market_categories`
--
ALTER TABLE `market_categories`
  MODIFY `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `packages_payments`
--
ALTER TABLE `packages_payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages_categories`
--
ALTER TABLE `pages_categories`
  MODIFY `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `posts_audios`
--
ALTER TABLE `posts_audios`
  MODIFY `audio_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts_comments`
--
ALTER TABLE `posts_comments`
  MODIFY `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts_files`
--
ALTER TABLE `posts_files`
  MODIFY `file_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts_links`
--
ALTER TABLE `posts_links`
  MODIFY `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts_media`
--
ALTER TABLE `posts_media`
  MODIFY `media_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts_photos`
--
ALTER TABLE `posts_photos`
  MODIFY `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `posts_photos_albums`
--
ALTER TABLE `posts_photos_albums`
  MODIFY `album_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posts_polls`
--
ALTER TABLE `posts_polls`
  MODIFY `poll_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts_polls_options`
--
ALTER TABLE `posts_polls_options`
  MODIFY `option_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts_products`
--
ALTER TABLE `posts_products`
  MODIFY `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts_videos`
--
ALTER TABLE `posts_videos`
  MODIFY `video_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `page_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `system_languages`
--
ALTER TABLE `system_languages`
  MODIFY `language_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `system_options`
--
ALTER TABLE `system_options`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `system_themes`
--
ALTER TABLE `system_themes`
  MODIFY `theme_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users_sessions`
--
ALTER TABLE `users_sessions`
  MODIFY `session_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `verification_requests`
--
ALTER TABLE `verification_requests`
  MODIFY `request_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `widget_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
