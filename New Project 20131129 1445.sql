-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.27


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema davalert
--

CREATE DATABASE IF NOT EXISTS davalert;
USE davalert;

--
-- Definition of table `advisories`
--

DROP TABLE IF EXISTS `advisories`;
CREATE TABLE `advisories` (
  `adv_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `type` int(1) unsigned NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `from` datetime NOT NULL,
  `to` datetime NOT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisories`
--

/*!40000 ALTER TABLE `advisories` DISABLE KEYS */;
INSERT INTO `advisories` (`adv_id`,`description`,`type`,`timestamp`,`from`,`to`) VALUES 
 (1,'Road Closed',1,'2013-11-29 13:27:51','2013-11-28 10:30:00','2013-11-30 00:00:00'),
 (2,'Road Closed dria na side',1,'2013-11-29 13:30:44','2013-11-28 10:30:00','2013-11-30 00:00:00');
/*!40000 ALTER TABLE `advisories` ENABLE KEYS */;


--
-- Definition of table `advisories_h`
--

DROP TABLE IF EXISTS `advisories_h`;
CREATE TABLE `advisories_h` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `type` int(1) unsigned NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `longitude` varchar(45) NOT NULL,
  `latitude` varchar(45) NOT NULL,
  `from` datetime NOT NULL,
  `to` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisories_h`
--

/*!40000 ALTER TABLE `advisories_h` DISABLE KEYS */;
INSERT INTO `advisories_h` (`id`,`description`,`type`,`timestamp`,`longitude`,`latitude`,`from`,`to`) VALUES 
 (1,'This is the University of the Immaculate Conception.',1,'2013-11-28 15:03:34','7.070341','125.600349','2013-11-28 10:30:00','2013-11-30 00:00:00'),
 (2,'This is the house of Karla Librero',1,'2013-11-28 15:03:32','7.113269','125.637685','2013-11-28 10:30:00','2013-11-30 00:00:00');
/*!40000 ALTER TABLE `advisories_h` ENABLE KEYS */;


--
-- Definition of table `coordinates`
--

DROP TABLE IF EXISTS `coordinates`;
CREATE TABLE `coordinates` (
  `c_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adv_id` int(10) unsigned NOT NULL,
  `longitude` varchar(45) NOT NULL,
  `latitude` varchar(45) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinates`
--

/*!40000 ALTER TABLE `coordinates` DISABLE KEYS */;
INSERT INTO `coordinates` (`c_id`,`adv_id`,`longitude`,`latitude`) VALUES 
 (1,1,'7.083196','125.624499'),
 (2,2,'7.070341','125.600349'),
 (3,2,'7.070352','125.600349');
/*!40000 ALTER TABLE `coordinates` ENABLE KEYS */;


--
-- Definition of table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `gender` tinyint(3) unsigned NOT NULL,
  `type` int(1) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`email`,`password`,`fname`,`lname`,`mi`,`gender`,`type`) VALUES 
 (1,'karla@karla.com','202cb962ac59075b964b07152d234b70','Karla','Librero','M',0,1),
 (2,'carlo@carlo.com','202cb962ac59075b964b07152d234b70','Carlo','Lee','M',1,2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
