/*
SQLyog Enterprise v13.1.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - checkmain
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`checkmain` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `checkmain`;

/*Table structure for table `depo` */

DROP TABLE IF EXISTS `depo`;

CREATE TABLE `depo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `namadepo` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `depo` */

insert  into `depo`(`id`,`namadepo`) values 
(1,'Alam Sutera'),
(2,'Bintaro'),
(3,'Balaraja'),
(4,'Cikokol'),
(5,'Cinangka'),
(6,'Cikuda'),
(7,'Cirendeu'),
(8,'Daan Mogot'),
(9,'Depok'),
(10,'Kalibata'),
(11,'Kedoya'),
(12,'Lenteng Agung'),
(13,'Manis'),
(14,'Pluit'),
(15,'Lodan'),
(16,'Serang');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
