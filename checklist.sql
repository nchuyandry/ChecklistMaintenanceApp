/*
SQLyog Enterprise v13.1.1 (64 bit)
MySQL - 10.4.11-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `checklist` (
	`tgl` datetime ,
	`namadepo` varchar (300),
	`namauser` varchar (300),
	`ruangan` varchar (300),
	`jenis` varchar (150),
	`processor` varchar (600),
	`mainboard` varchar (600),
	`memory` varchar (600),
	`harddisk` varchar (600),
	`monitor` varchar (600),
	`mousekey` varchar (600),
	`psu` varchar (600),
	`printer` varchar (600),
	`printermodel` varchar (600),
	`scanner` varchar (600),
	`os` varchar (600),
	`domaintvip` varchar (600),
	`browser` varchar (600),
	`msoffice` varchar (600),
	`antivirus` varchar (600),
	`pdf` varchar (600),
	`compressed` varchar (600),
	`vnc` varchar (600),
	`wallpaper` varchar (600),
	`lokasi` varchar (300),
	`addsoftware` varchar (600),
	`PIC` varchar (300),
	`image` varchar (300),
	`catatan` text 
); 
