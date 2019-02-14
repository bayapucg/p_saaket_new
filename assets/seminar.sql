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

/*Table structure for table `seminar_registration` */

DROP TABLE IF EXISTS `seminar_registration`;

CREATE TABLE `seminar_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` bigint(12) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `zipcode` varchar(100) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `seminar_registration` */

insert  into `seminar_registration`(`id`,`name`,`email`,`phone`,`address`,`city`,`state`,`country`,`zipcode`,`created_on`) values (1,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','1','1','500055',NULL),(2,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','1','2','500055','2019-02-06 06:55:47'),(3,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','1','2','500055','2019-02-06 07:10:52'),(4,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','1','2','500055','2019-02-06 07:11:11'),(5,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','1','2','500055','2019-02-06 07:11:44'),(6,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','1','2','500055','2019-02-06 07:12:00'),(7,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','1','2','500055','2019-02-06 07:39:28'),(8,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','2','2','500055','2019-02-06 07:40:40'),(9,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','3','3','500055','2019-02-06 07:41:17'),(10,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','2','3','500055','2019-02-06 07:42:18'),(11,'Rana Prathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','1','3','500055','2019-02-06 07:42:52'),(12,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','1','2','500055','2019-02-06 07:47:21'),(13,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','2','3','500055','2019-02-06 07:48:44'),(14,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','1','2','500055','2019-02-06 07:52:43'),(15,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','1','500055','2019-02-06 07:53:51'),(16,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','3','3','500055','2019-02-06 07:54:48'),(17,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','3','3','500055','2019-02-06 07:59:30'),(18,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','3','3','500055','2019-02-06 08:02:16'),(19,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','3','3','500055','2019-02-06 08:02:46'),(20,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','3','3','500055','2019-02-06 08:02:53'),(21,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','3','3','500055','2019-02-06 08:03:23'),(22,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','3','3','500055','2019-02-06 08:06:17'),(23,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:08:54'),(24,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:09:23'),(25,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:09:43'),(26,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:12:40'),(27,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:12:50'),(28,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:13:20'),(29,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:13:34'),(30,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:14:53'),(31,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:15:33'),(32,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:15:50'),(33,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:16:25'),(34,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:17:19'),(35,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:21:01'),(36,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:21:43'),(37,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','1','2','3','500055','2019-02-06 08:22:29'),(38,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','1','2','500055','2019-02-06 08:23:44'),(39,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','2','1','2','500055','2019-02-06 08:25:38'),(40,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','4','4','1','500055','2019-02-06 09:58:01'),(41,'RanaPrathap Reddy','kyasaramrana@gmail.com',9676270951,'testing','4','4','1','500055','2019-02-06 09:59:09');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
