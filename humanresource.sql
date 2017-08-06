/*
SQLyog Community v8.63 
MySQL - 5.6.16 : Database - humanresource
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`humanresource` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `humanresource`;

/*Table structure for table `candidate` */

DROP TABLE IF EXISTS `candidate`;

CREATE TABLE `candidate` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) DEFAULT NULL,
  `nick_name` varchar(50) DEFAULT NULL,
  `permanent_address` varchar(200) DEFAULT NULL,
  `current_address` varchar(200) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `number` int(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `salary` int(100) DEFAULT NULL,
  `transport` varchar(100) DEFAULT NULL,
  `employer` varchar(100) DEFAULT NULL,
  `current_job` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `transfer` varchar(50) DEFAULT NULL,
  `working` varchar(50) DEFAULT NULL,
  `weekend` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `candidate` */

insert  into `candidate`(`id`,`full_name`,`nick_name`,`permanent_address`,`current_address`,`status`,`dob`,`number`,`email`,`position`,`salary`,`transport`,`employer`,`current_job`,`date`,`transfer`,`working`,`weekend`) values (1,'asd','asdas','asdsda','asdasd','single','123324',123123,'asda@asdas.nyu','wqeqwe',1234,'sdfdsfs','asdsadas','asdsadas','123213','yes','no','no'),(2,'egeg','dgdsg','dfdg','dgdsf','dfsfs','1412',2342,'sadiuh12u','uheuri',12321,'uhiuhi','ihiuh','kihiu','2131','yes','no','no'),(5,'rteste','tetsdf','gdsgs','gfgdfg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'chubs','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'ettea','dfdsf','dsfs','dfsfs','dsfsd','1231',3222,'sdfsdfs','dfsdf',2323,'fsdfs','dsfsd','gdfgd','23213','Yes','Yes','Yes'),(12,'1err','1fdf','1','1wew','1','1',1,'1','1',1,'1','1','1','1','Yes','Yes','Yes');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
