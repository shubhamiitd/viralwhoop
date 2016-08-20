SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `clicks` (
  `post_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `sessions` varchar(256) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `amount` varchar(256) COLLATE utf8_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;