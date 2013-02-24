/*
SQLyog Community Edition- MySQL GUI v6.07
Host - 5.0.51b-community-nt : Database - cricketgali
*********************************************************************
Server version : 5.0.51b-community-nt
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;




/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `tbl_cities` */

DROP TABLE IF EXISTS `tbl_cities`;

CREATE TABLE `tbl_cities` (
  `city_id` int(11) NOT NULL auto_increment,
  `state_id` int(11) default NULL,
  `city_name` varchar(255) default NULL,
  `city_uri` varchar(255) default NULL,
  `add_date` datetime default NULL,
  `update_date` datetime default NULL,
  PRIMARY KEY  (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_cities` */

insert  into `tbl_cities`(`city_id`,`state_id`,`city_name`,`city_uri`,`add_date`,`update_date`) values (1,1,'Shouth Delhi','south_delhi',NULL,NULL),(2,2,'Bareilly','bareilly',NULL,NULL);

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
  `type` varchar(255) default NULL,
  `status` int(1) default NULL,
  `add_date` datetime default NULL,
  `update_date` datetime default NULL,
  PRIMARY KEY  (`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pages` */

insert  into `tbl_pages`(`page_id`,`title`,`content`,`uri`,`meta_title`,`meta_keyword`,`meta_description`,`type`,`status`,`add_date`,`update_date`) values (1,'About Us','this is  desc','about_us','About Us','About Us','About Us','page',1,'2012-02-23 14:17:33','2012-02-23 14:17:33'),(2,'Contact Us','this is contact us page','contact_us','Contact Us','Contact Us','Contact UsContact UsContact UsContact Us','page',1,'2012-02-24 13:29:57','2012-02-24 13:29:57'),(3,'Help','this is help text','help','Help','Help','Help Help Help','page',1,'2012-02-24 13:31:09','2012-02-24 13:31:09'),(4,'Cricket Club In #rep#','You can easily find cricket clubs in #rep#','cricket_club_in_#rep#','Cricket Club In #rep#','Cricket Club In #rep#','Cricket Club In #rep#','clubs',1,'2012-02-26 03:50:16','2012-02-26 14:40:55'),(5,'Teams in #rep#','You can easily find cricket teams in #rep#','teams_in_#rep#','Teams in #rep#','Teams in #rep#','Teams in #rep#','teams',1,'2012-02-26 07:39:22','2012-02-26 14:41:00'),(6,'Cricketer\'s Profile in #rep#','You can easily find cricketer profile teams in #rep#','criketrs_in_#rep#','Cricketers in #rep#','Cricketers in #rep#','Cricketers in #rep#','cricketers',1,'2012-02-26 07:39:22','2012-02-26 14:42:40');

/*Table structure for table `tbl_profile` */

DROP TABLE IF EXISTS `tbl_profile`;

CREATE TABLE `tbl_profile` (
  `profile_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `date_of_birth` datetime default NULL,
  `gender` int(1) default NULL,
  `state` int(11) default NULL,
  `city` int(11) default NULL,
  `address` varchar(255) default NULL,
  `add_date` datetime default NULL,
  `update_date` datetime default NULL,
  PRIMARY KEY  (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_profile` */

insert  into `tbl_profile`(`profile_id`,`user_id`,`date_of_birth`,`gender`,`state`,`city`,`address`,`add_date`,`update_date`) values (1,2,'2012-02-14 00:00:00',1,2,2,'E-206/4, jamia Nagara\r\nOkhla\r\nNew Delhi',NULL,'2012-02-28 15:18:57');

/*Table structure for table `tbl_states` */

DROP TABLE IF EXISTS `tbl_states`;

CREATE TABLE `tbl_states` (
  `state_id` int(11) NOT NULL auto_increment,
  `state_name` varchar(255) default NULL,
  `state_uri` varchar(255) default NULL,
  `add_date` datetime default NULL,
  `update_date` datetime default NULL,
  PRIMARY KEY  (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_states` */

insert  into `tbl_states`(`state_id`,`state_name`,`state_uri`,`add_date`,`update_date`) values (1,'Delhi','delhi','2012-02-27 12:55:04','2012-02-27 12:55:04'),(2,'Uttar Pradesh','uttar_pradesh','2012-02-27 12:55:04','2012-02-27 12:55:04'),(3,'Andaman and Nicobar Islands ','andaman_and_nicobar_islands ','2012-02-27 12:55:04','2012-02-27 12:55:04'),(4,'Andhra Pradesh ','andhra_pradesh ','2012-02-27 12:55:04','2012-02-27 12:55:04'),(5,'Arunachal Pradesh ','arunachal_pradesh ','2012-02-27 12:55:04','2012-02-27 12:55:04'),(6,'Assam ','assam ','2012-02-27 12:55:04','2012-02-27 12:55:04'),(7,'Bihar ','bihar ','2012-02-27 12:55:04','2012-02-27 12:55:04'),(8,'Chandigarh ','chandigarh ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(9,'Chhattisgarh ','chhattisgarh ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(10,'Dadra and Nagar Haveli ','dadra_and_nagar_haveli ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(11,'Daman and Diu ','daman_and_diu ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(12,'Goa ','goa ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(13,'Gujarat ','gujarat ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(14,'Haryana ','haryana ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(15,'Himachal Pradesh ','himachal_pradesh ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(16,'Jammu and Kashmir ','jammu_and_kashmir ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(17,'Jharkhand ','jharkhand ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(18,'Karnataka ','karnataka ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(19,'Kerala ','kerala ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(20,'Lakshadweep ','lakshadweep ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(21,'Madhya Pradesh ','madhya_pradesh ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(22,'Maharashtra ','maharashtra ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(23,'Manipur ','manipur ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(24,'Meghalaya ','meghalaya ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(25,'Mizoram ','mizoram ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(26,'Nagaland ','nagaland ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(27,'Orissa ','orissa ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(28,'Pondicherry ','pondicherry ','2012-02-27 12:55:05','2012-02-27 12:55:05'),(29,'Punjab ','punjab ','2012-02-27 12:55:06','2012-02-27 12:55:06'),(30,'Rajasthan ','rajasthan ','2012-02-27 12:55:06','2012-02-27 12:55:06'),(31,'SikkimTamil ','sikkimtamil ','2012-02-27 12:55:06','2012-02-27 12:55:06'),(32,'Nadu ','nadu ','2012-02-27 12:55:06','2012-02-27 12:55:06'),(33,'Tripura ','tripura ','2012-02-27 12:55:06','2012-02-27 12:55:06'),(34,'Uttarakhand ','uttarakhand ','2012-02-27 12:55:06','2012-02-27 12:55:06'),(35,'West Bengal','west_bengal','2012-02-27 12:55:06','2012-02-27 12:55:06');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`user_id`,`first_name`,`last_name`,`email`,`password`,`role`,`status`,`add_date`,`update_date`) values (1,'Akhlaq','Ahmad','amu.akhlaq@gmail.com','123456','1',1,NULL,NULL),(2,'Akhlaq1','Ahmad','akhlaq.1219@gmail.com','123456','3',1,'2012-02-25 23:08:47','2012-02-28 15:18:57');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
