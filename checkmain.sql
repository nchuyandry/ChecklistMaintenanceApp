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

/*Table structure for table `checklist` */

DROP TABLE IF EXISTS `checklist`;

CREATE TABLE `checklist` (
  `tgl` datetime DEFAULT NULL,
  `namadepo` varchar(100) DEFAULT NULL,
  `namauser` varchar(100) DEFAULT NULL,
  `ruangan` varchar(100) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `processor` varchar(20) DEFAULT NULL,
  `mainboard` varchar(20) DEFAULT NULL,
  `memory` varchar(20) DEFAULT NULL,
  `harddisk` varchar(20) DEFAULT NULL,
  `monitor` varchar(20) DEFAULT NULL,
  `mousekey` varchar(20) DEFAULT NULL,
  `psu` varchar(20) DEFAULT NULL,
  `printer` varchar(20) DEFAULT NULL,
  `printermodel` varchar(50) DEFAULT NULL,
  `scanner` varchar(20) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  `domaintvip` varchar(20) DEFAULT NULL,
  `browser` varchar(20) DEFAULT NULL,
  `msoffice` varchar(20) DEFAULT NULL,
  `antivirus` varchar(20) DEFAULT NULL,
  `pdf` varchar(20) DEFAULT NULL,
  `compressed` varchar(20) DEFAULT NULL,
  `vnc` varchar(20) DEFAULT NULL,
  `wallpaper` varchar(20) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `addsoftware` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `checklist` */

insert  into `checklist`(`tgl`,`namadepo`,`namauser`,`ruangan`,`jenis`,`processor`,`mainboard`,`memory`,`harddisk`,`monitor`,`mousekey`,`psu`,`printer`,`printermodel`,`scanner`,`os`,`domaintvip`,`browser`,`msoffice`,`antivirus`,`pdf`,`compressed`,`vnc`,`wallpaper`,`lokasi`,`addsoftware`) values 
('2021-07-22 20:14:30','Cikokol','CKLCHECKER','Pos Checker','Komputer','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Dotmatrix-Sesuai','LX-300','ada-Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','-6.2173941 106.6400134',NULL),
('2021-07-22 20:38:42','Cikokol','BMCKL','Preseller ','Laptop','Sesuai',NULL,'Sesuai','Sesuai',NULL,NULL,NULL,NULL,NULL,NULL,'Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai',NULL,'-6.2173507 106.6400029',NULL),
('2021-07-22 21:25:05','Cikokol','CKLADMINGUDANG','Admin','Komputer','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Dotmatrix-Sesuai','LX300+II','Tidak Ada-','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','-6.217389 106.6400087',NULL),
('2021-07-23 15:18:08','Cikokol','CKLKASIR','Ruang Kasir','Komputer','Sesuai-','Sesuai-','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Tidak Ada--',NULL,'Tidak Ada-','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','-6.217418899999999 106.63997049999999',NULL),
('2021-07-23 17:56:51','Cikokol','CKLENTRY','ADMIN','Komputer','Sesuai-','Sesuai-','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Dotmatrix-LQ-2190-Se','LQ-2190','Tidak Ada-','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','Sesuai','-6.217416699999999 106.6399797',NULL);

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
