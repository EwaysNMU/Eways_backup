CREATE TABLE IF NOT EXISTS `feeds` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `deleted` varchar(3) DEFAULT 'No',
  `title` varchar(255) DEFAULT 'No Title',
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(255) DEFAULT 'No Description',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `shortDescription` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `feeds` (`feed_id`, `deleted`, `title`, `updated`, `description`, `created`, `shortDescription`, `link`) VALUES
	(3, 'No', 'Register Quickly', '2018-11-10 13:35:22', 'No Description', '2018-08-10 12:03:19', 'Ticket for Friday events are ready.', 'https://www.google.com'),
	(4, 'No', 'Book Now!!', '2018-11-10 13:35:25', 'Graduation Party', '2018-11-10 13:20:54', 'Ticket will be sold at the door', 'https://www.google.com');
