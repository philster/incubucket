/*
SQLyog Ultimate - MySQL GUI v8.21 
MySQL - 5.0.67-community-nt : Database - tricks_cake
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`incubucket` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `incubucket`;

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(10) unsigned default NULL,
  `location_id` int(10) unsigned default NULL,
  `start_datetime` datetime DEFAULT NULL,
  `end_datetime` datetime DEFAULT NULL,
  `exp_date` datetime default NULL,
  `title` varchar(255) default '',
  `theme` varchar(255) DEFAULT '',
  `description` text,
  `url` varchar(255) default '',
  `image_path` varchar(255) default '',
  `video_path` varchar(255) default '',
  `news_url` varchar(255) default '',
  `organizer1_id` int(10) unsigned DEFAULT NULL,
  `organizer2_id` int(10) unsigned DEFAULT NULL,
  `api_set_id` int(10) unsigned DEFAULT NULL,
  `rating` int(4) NOT NULL DEFAULT '0',
  `complete` enum('yes','no') default 'no',
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `locations` */

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` int(10) unsigned default NULL,
  `title` varchar(255) default '',
  `city` varchar(50) default '',
  `state` varchar(2) default '',
  `zip` int(10) unsigned default NULL,
  `address1` varchar(255) default '',
  `address2` varchar(255) default '',
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `organizers` */

DROP TABLE IF EXISTS `organizers`;

CREATE TABLE IF NOT EXISTS `organizers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) default '',
  `title` varchar(255) default '',
  `phone` varchar(20) default '',
  `image_url` varchar(255) default '',
  `linkedin_url` varchar(255) default '',
  `company` varchar(255) default '',
  `skillset` varchar(255) default '',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `apiset` */

DROP TABLE IF EXISTS `apiset`;

CREATE TABLE IF NOT EXISTS `apiset` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` int(10) unsigned NOT NULL,
  `title` varchar(255) DEFAULT '',
  `image_path` varchar(255) DEFAULT '',
  `video_url` varchar(255) DEFAULT '',
  `rating` int(4) unsigned NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `email` varchar(50) default '',
  `pass` varchar(50) default '',
  `enabled` enum('yes','no') default 'yes',
  `activated` enum('yes','no') default 'no',
  `ac_code` varchar(32) default '',
  `role` enum('admin','user') default 'user',
  `created` datetime default NULL,
  `modified` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
