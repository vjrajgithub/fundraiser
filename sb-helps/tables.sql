CREATE TABLE IF NOT EXISTS `sb_users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `address` varchar(512) DEFAULT NULL,
  `role` enum('member', 'admin') NOT NULL DEFAULT 'member',
  `status` char(8) NOT NULL DEFAULT 'active',
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `gender` enum('m','f') DEFAULT NULL,
  `photo` varchar(128) DEFAULT NULL,
  `last_active` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;