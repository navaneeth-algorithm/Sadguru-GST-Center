/*
SQLyog Community v13.1.4  (64 bit)
MySQL - 5.5.51-38.1-log : Database - Society
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`Society` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `Society`;

/*Table structure for table `Home` */

DROP TABLE IF EXISTS `Home`;

CREATE TABLE `Home` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `LanguageId` bigint(20) DEFAULT NULL,
  `Para1` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKLanguageId` (`LanguageId`),
  CONSTRAINT `FKLanguageId` FOREIGN KEY (`LanguageId`) REFERENCES `Laguage` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `Home` */

insert  into `Home`(`id`,`LanguageId`,`Para1`) values 
(1,1,'Testing');

/*Table structure for table `Laguage` */

DROP TABLE IF EXISTS `Laguage`;

CREATE TABLE `Laguage` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` bigint(20) DEFAULT NULL,
  `Language` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `Laguage` */

insert  into `Laguage`(`id`,`Code`,`Language`) values 
(1,1,'English');

/*Table structure for table `News` */

DROP TABLE IF EXISTS `News`;

CREATE TABLE `News` (
  `id` bigint(255) NOT NULL,
  `Head` varchar(255) DEFAULT NULL,
  `Content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `News` */

insert  into `News`(`id`,`Head`,`Content`) values 
(1,'HTML / CSS3 ONLY CONTENT SLIDER EXAMPLE','Etiam porttitor lectus in iaculis egestas. Pellentesque in neque sollicitudin, tempor quam vel, rhoncus felis. Integer bibendum posuere mauris id ultricies.'),
(2,'FACEBOOK','Etiam porttitor lectus in iaculis egestas. Pellentesque in neque sollicitudin, tempor quam vel, rhoncus felis. Integer bibendum posuere mauris id ultricies.'),
(3,'GOOGLE PLUS','Etiam porttitor lectus in iaculis egestas. Pellentesque in neque sollicitudin, tempor quam vel, rhoncus felis. Integer bibendum posuere mauris id ultricies'),
(4,'TWITTER','Etiam porttitor lectus in iaculis egestas. Pellentesque in neque sollicitudin, tempor quam vel, rhoncus felis. Integer bibendum posuere mauris id ultricies.');

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `LanguageId` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LanguageId` (`LanguageId`),
  CONSTRAINT `LanguageId` FOREIGN KEY (`LanguageId`) REFERENCES `Laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `about` */

insert  into `about`(`id`,`Title`,`Content`,`LanguageId`) values 
(1,'About','Sadhguru Souharda Sahakari Ltd is multipurpose Co-operative Society established in the year 2016 by a group of dynamic like-minded educated people from Udupi, coastal district of Karnatka., who have concern about our Socio-Economical Development of the society. The main objective of the society is Socio-Economical goals with national interest. The Sadhguru Souharda Sahakari Ltd is registered under Karnakata Souharda Co-operative Act 1997, 2015.RegNo 4141. The Society Would Like To Address The Needs Of The Middle Income Community. The society is aiming towards to provide multiple services apart from financials support to the community. It has wide range of Service programs in the field of Health Care, Medical Services, Education, Social Responsibility projects and other communities upbringing projects etc. The society is working on the principle of Ehics, honesty, sincerity and dedication with long term vision and wide range of aims and objectives.',1),
(2,'Mission','To create the values for all its member Customers, employees & society at large. ',1),
(3,'Vision','Under Progress ',1),
(4,'Quality of Policy','We believes in high level of honesty & sense of responsibility. ',1),
(5,'Area of Policy','Our Area of operation is Udupi district except Madur Village of Kundapura Taluk . From PRESIDENT DESK We are very proud to say Sadhguu Souharda Sahakari Ltd is a Co-operative Institute born with Ethics , Principles and human Values. We provides financial services like, members Savings Account , current accounts, Deposits and loans like other societies , but sahakari activities are not limited to financial matter and extended to trading and health care services. We pride ourselves on our member participation,Co-operation,service and satisfaction; We are always working to reach our members with best services.We are committed to leading the way on ethical, environmental and community members welfare issues. Our Sahakari has a unique ethical policy setting out the way we do business which we\'ve developed in full consultation with our members. Our Sahakari website contains more details about our services, our purpose, our objectives and services. You can also find more detail about our health and medical care service busssines through our PMJK Centres. \r\nDr.B.N.Shanthapriya \r\nPresident ',1);

/*Table structure for table `banner` */

DROP TABLE IF EXISTS `banner`;

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `banner` */

insert  into `banner`(`id`,`path`) values 
(1,'1437241669644.jpg'),
(2,'DSC_1592%20-%20Copy.JPG'),
(3,'DSC_7958.JPG');

/*Table structure for table `boarddirector` */

DROP TABLE IF EXISTS `boarddirector`;

CREATE TABLE `boarddirector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Designation` int(255) NOT NULL,
  `LanguageId` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LaguageId` (`LanguageId`),
  CONSTRAINT `LaguageId` FOREIGN KEY (`LanguageId`) REFERENCES `Laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `boarddirector` */

insert  into `boarddirector`(`id`,`Name`,`Designation`,`LanguageId`) values 
(1,'Dr.B.N.Shanthapriya',1,1),
(2,'J.Ragupathi Tantri ',2,1),
(3,'Prasanna Bhat',3,1),
(4,'U.L.Bhat',3,1),
(5,'U.L.Upadhya',3,1),
(6,'Kamalakshi',3,1),
(7,'Ambhika',3,1),
(8,'Venkatesh',3,1),
(9,'Narashima Swamy',3,1);

/*Table structure for table `deposits` */

DROP TABLE IF EXISTS `deposits`;

CREATE TABLE `deposits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Left Content` text NOT NULL,
  `Right Content` text NOT NULL,
  `LaguageId` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`LaguageId`),
  CONSTRAINT `id` FOREIGN KEY (`LaguageId`) REFERENCES `Laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `deposits` */

insert  into `deposits`(`id`,`Left Content`,`Right Content`,`LaguageId`) values 
(1,'Samucchaya -Recurring Deposit Scheme[RD]','Recurring Deposit Scheme is unique scheme, Suitable to those who are having regular monthly income. Under this scheme the account holder have to regularly deposit fixed sum of money by way of monthly instalments over a period stipulated period. ',1),
(2,'FD','11% ',1),
(3,'Monthly','2,000.00 ',1),
(4,'Sadhguru cash Certificate(SCC)','Sahguru Cash Certificate is unique scheme where members can invest a specific amount for 74 months and double lump sum amount (Deposited Amount+Investment) on maturity. ',1),
(5,'Sadhguru Dashama Cash Certificate(SDCS)','Sadhguru Dashama Cash Certificate is unique scheme where members can invest a specific amount of 10 Years; and lump sum amount (Deposited Amount + Interest) on maturity. It is an ideal scheme for the members who are interested to invest on long term savings ',1),
(6,'Sadhguru Lakshadhipathi Scheme','Sadhguru Lakshadhipathi is unique scheme where members can invest a specific amount for 74 months;and Double lumb sum amount (Deposited Amount+Interest)on maturuity.',1);

/*Table structure for table `designation` */

DROP TABLE IF EXISTS `designation`;

CREATE TABLE `designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `LaguageId` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `desgid` (`LaguageId`),
  CONSTRAINT `desgid` FOREIGN KEY (`LaguageId`) REFERENCES `Laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `designation` */

insert  into `designation`(`id`,`Name`,`LaguageId`) values 
(1,'President',1),
(2,'Vice President',1),
(3,'Directors',1);

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `LanguageId` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LanguageId` (`LanguageId`),
  CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`LanguageId`) REFERENCES `Laguage` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

insert  into `gallery`(`id`,`title`,`path`,`LanguageId`) values 
(1,'Beijing','beijing.jpg',1),
(2,'CapeTown','capetown.jpg',1),
(3,'london','london.jpg',1),
(4,'New York','newyork.jpg',1),
(5,'Paris','paris.jpg',1),
(6,'San Fransico','sanfransisco.jpg',1),
(7,'images17','images17.jpg',1),
(8,'ganapathi','ganapathi.jpg',1);

/*Table structure for table `loan` */

DROP TABLE IF EXISTS `loan`;

CREATE TABLE `loan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `left content` text CHARACTER SET latin1 NOT NULL,
  `right content` text CHARACTER SET latin1 NOT NULL,
  `LanguageId` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LanguageId` (`LanguageId`),
  CONSTRAINT `loanid` FOREIGN KEY (`LanguageId`) REFERENCES `Laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `loan` */

insert  into `loan`(`id`,`left content`,`right content`,`LanguageId`) values 
(1,'Monthly Installment Scheme','Interest will be reduced every single month',1);

/*Table structure for table `parameter` */

DROP TABLE IF EXISTS `parameter`;

CREATE TABLE `parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` bigint(20) NOT NULL,
  `Address` text NOT NULL,
  `Languageid` bigint(20) DEFAULT NULL,
  `RegisteredNumber` bigint(20) DEFAULT NULL,
  `WeeklyHoliday` varchar(255) DEFAULT NULL,
  `EstablishedIn` bigint(20) DEFAULT NULL,
  `LandLine` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LaugageId` (`Languageid`),
  CONSTRAINT `LaugageId` FOREIGN KEY (`Languageid`) REFERENCES `Laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `parameter` */

insert  into `parameter`(`id`,`Name`,`Email`,`PhoneNumber`,`Address`,`Languageid`,`RegisteredNumber`,`WeeklyHoliday`,`EstablishedIn`,`LandLine`) values 
(1,'Dr B N Shanthapriya','sadhguruudupi@gmail.com',9448327884,'Sadhguru Skill Devlopment Centre, Kinnimulki, Udupi \r\n 576101',1,4141,'SUNDAY',2016,'0820 -2530009'),
(2,'img','',0,'',1,NULL,NULL,NULL,NULL),
(3,'Sadhguru Souharda Sahakari Limited','sadhguruudupi@gmail.com',9448327884,'',1,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
