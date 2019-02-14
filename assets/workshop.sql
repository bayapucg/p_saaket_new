/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.28-MariaDB : Database - psaaket
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`psaaket` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `psaaket`;

/*Table structure for table `workshop_registration` */

DROP TABLE IF EXISTS `workshop_registration`;

CREATE TABLE `workshop_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` bigint(12) DEFAULT NULL,
  `roll_number` varchar(200) DEFAULT NULL,
  `college_name` varchar(200) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `zipcode` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `workshop_registration` */

insert  into `workshop_registration`(`id`,`name`,`email`,`phone`,`roll_number`,`college_name`,`address`,`city`,`state`,`country`,`zipcode`,`created_on`) values (1,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'455566','testing','testing',NULL,'Telangana','India','500055','2019-02-14 08:45:50'),(2,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'455566','testing','testing',NULL,'Telangana','India','500055','2019-02-14 08:47:26'),(3,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'455566','testing','testing',NULL,'Telangana','India','500055','2019-02-14 08:47:43'),(4,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'455566','testing','testing',NULL,'Telangana','India','500055','2019-02-14 08:47:50'),(5,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'455566','testing','testing',NULL,'Telangana','India','500055','2019-02-14 08:48:13'),(6,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'455566','testing','testing',NULL,'Telangana','India','500055','2019-02-14 08:50:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
