/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `deleted` varchar(3) DEFAULT 'No',
  `title` varchar(255) DEFAULT 'No Title',
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(255) DEFAULT 'No Description',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `topicName` varchar(255) DEFAULT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`event_id`, `deleted`, `title`, `updated`, `description`, `created`, `topicName`, `startDate`, `endDate`, `startTime`, `endTime`) VALUES
	(1, 'No', 'Tesla', '2018-11-23 02:55:13', 'No Here\'s Why the Tesla Model 3 Is the Coolest Car of 2017', '2018-11-10 11:32:51', 'Here\'s Why the Tesla Model 3 Is the Coolest Car of 2017', '2018-12-10', '2018-12-10', '13:00:00', '15:00:00'),
	(2, 'No', 'Google', '2018-11-23 02:55:27', 'Display RSS Feed on a Web Page with Google Feed', '2018-11-10 11:33:18', 'You can use the Google Feeds API to fetch and display the content of any RSS feed on a web page.', '2019-01-10', '2019-01-10', '16:00:00', '18:00:00');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
