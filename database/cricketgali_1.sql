/*
SQLyog Community Edition- MySQL GUI v6.07
Host - 5.0.51b-community-nt : Database - cricketgali
*********************************************************************
Server version : 5.0.51b-community-nt
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `cricketgali`;

USE `cricketgali`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `tbl_pages` */

DROP TABLE IF EXISTS `tbl_pages`;

CREATE TABLE `tbl_pages` (
  `page_id` int(11) NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `content` text,
  `uri` varchar(255) default NULL,
  `meta_title` varchar(255) default NULL,
  `meta_keyword` varchar(255) default NULL,
  `meta_description` varchar(255) default NULL,
  `status` int(1) default NULL,
  `add_date` datetime default NULL,
  `update_date` datetime default NULL,
  PRIMARY KEY  (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pages` */

insert  into `tbl_pages`(`page_id`,`title`,`content`,`uri`,`meta_title`,`meta_keyword`,`meta_description`,`status`,`add_date`,`update_date`) values (1,'About Us','this is  desc','about_us','About Us','About Us','About Us',1,'2012-02-23 14:17:33','2012-02-23 14:17:33'),(2,'Contact Us','this is contact us page','contact_us','Contact Us','Contact Us','Contact UsContact UsContact UsContact Us',1,'2012-02-24 13:29:57','2012-02-24 13:29:57'),(3,'Help','this is help text','help','Help','Help','Help Help Help',1,'2012-02-24 13:31:09','2012-02-24 13:31:09');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `first_name` varchar(255) default NULL,
  `last_name` varchar(255) default NULL,
  `email` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  `role` varchar(255) default NULL,
  `status` int(1) default NULL,
  `add_date` datetime default NULL,
  `update_date` datetime default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`user_id`,`first_name`,`last_name`,`email`,`password`,`role`,`status`,`add_date`,`update_date`) values (1,'Akhlaq','Ahmad','amu.akhlaq@gmail.com','123456','1',1,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
