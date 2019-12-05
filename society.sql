/*
SQLyog Community v13.1.4  (64 bit)
MySQL - 10.4.8-MariaDB : Database - society
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`Society` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `Society`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `About` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `LanguageId` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LanguageId` (`LanguageId`),
  CONSTRAINT `LanguageId` FOREIGN KEY (`LanguageId`) REFERENCES `laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `about` */

insert  into `About`(`id`,`Title`,`Content`,`LanguageId`) values 
(1,'About','Sadhguru Souharda Sahakari Ltd is multipurpose Co-operative Society established in the year 2016 by a group of dynamic like-minded educated people from Udupi, coastal district of Karnatka., who have concern about our Socio-Economical Development of the society. The main objective of the society is Socio-Economical goals with national interest. The Sadhguru Souharda Sahakari Ltd is registered under Karnakata Souharda Co-operative Act 1997, 2015.RegNo 4141. The Society Would Like To Address The Needs Of The Middle Income Community. The society is aiming towards to provide multiple services apart from financials support to the community. It has wide range of Service programs in the field of Health Care, Medical Services, Education, Social Responsibility projects and other communities upbringing projects etc. The society is working on the principle of Ehics, honesty, sincerity and dedication with long term vision and wide range of aims and objectives.',1),
(2,'Vision','Under Progress ',1),
(3,'Mission','To create the values for all its member Customers, employees & society at large. ',1),
(4,'Quality Statement','We believes in high level of honesty & sense of responsibility. ',1);

/*Table structure for table `banner` */

DROP TABLE IF EXISTS `Banner`;

CREATE TABLE `Banner` (
  `id` int(11) NOT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `banner` */

insert  into `Banner`(`id`,`path`) values 
(1,'1437241669644.jpg'),
(2,'DSC_1592%20-%20Copy.JPG'),
(3,'DSC_7958.JPG');

/*Table structure for table `boardofdirectors` */

DROP TABLE IF EXISTS `BoardOfDirectors`;

CREATE TABLE `BoardOfDirectors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Designation` int(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `LanguageId` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LaguageId` (`LanguageId`),
  CONSTRAINT `LaguageId` FOREIGN KEY (`LanguageId`) REFERENCES `laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `boardofdirectors` */

insert  into `BoardOfDirectors`(`id`,`Name`,`Designation`,`Description`,`Image`,`LanguageId`) values 
(1,'Dr.B.N.Shanthapriya',1,NULL,'PresidentPHOTO.jpg',1),
(2,'J.Ragupathi Tantri ',2,NULL,'vICEPRSIDENT.jpg',1),
(3,'Prasanna Bhat',3,NULL,'prasannabhat .jpg',1),
(4,'U.L.Bhat',3,NULL,'ulbHAT.jpg',1),
(5,'U.L.Upadhya',3,NULL,'ulUPADYAA.jpg',1),
(6,'Kamalakshi',3,NULL,'MsKamalakshi.jpg',1),
(7,'Ambhika',3,NULL,'Ambhika.jpg',1),
(8,'Venkatesh',3,NULL,'venkatesh.jpg',1),
(9,'Vinaya Kumar',3,NULL,'vinayakumar.jpg',1),
(12,'Narasimha Swamy',3,NULL,'Narashimhaswamy.jpg',NULL);

/*Table structure for table `branch` */

DROP TABLE IF EXISTS `Branch`;

CREATE TABLE `Branch` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(255) DEFAULT NULL,
  `EmailId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `branch` */

/*Table structure for table `businessstatistics` */

DROP TABLE IF EXISTS `BusinessStatistics`;

CREATE TABLE `BusinessStatistics` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `businessstatistics` */

insert  into `BusinessStatistics`(`Id`,`Name`) values 
(1,'MemberShip'),
(2,'ShareCapital'),
(3,'Deposits'),
(4,'Loans'),
(5,'WorkingCapital'),
(6,'Profit'),
(7,'Dividend');

/*Table structure for table `businessstatisticsdata` */

DROP TABLE IF EXISTS `BusinessStatisticsData`;

CREATE TABLE `BusinessStatisticsData` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `NameId` int(255) DEFAULT NULL,
  `YearId` int(255) DEFAULT NULL,
  `Data` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FKBSNameId` (`NameId`),
  KEY `FKBSYearId` (`YearId`),
  CONSTRAINT `FKBSNameId` FOREIGN KEY (`NameId`) REFERENCES `businessstatistics` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FKBSYearId` FOREIGN KEY (`YearId`) REFERENCES `businessstatisticsyear` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*Data for the table `businessstatisticsdata` */

insert  into `BusinessStatisticsData`(`Id`,`NameId`,`YearId`,`Data`) values 
(1,1,1,2016456),
(2,1,2,1985801),
(3,1,3,1755904),
(4,1,4,1847291),
(5,1,5,1733430),
(6,2,1,49505),
(7,2,2,31917),
(8,2,3,25972),
(9,2,4,23337),
(10,2,5,16086),
(11,3,1,896590),
(12,3,2,882981),
(13,3,3,920979),
(14,3,4,987697),
(15,3,5,1013689),
(16,4,1,806425),
(17,4,2,806208),
(18,4,3,798856),
(19,4,4,806968),
(20,4,5,790204),
(21,5,1,247510),
(22,5,2,254831),
(23,5,3,273445),
(24,5,4,260203),
(25,5,5,319355),
(26,6,1,612),
(27,6,2,864),
(28,6,3,891),
(29,6,4,1212),
(30,6,5,1818),
(31,7,1,312),
(32,7,2,321),
(33,7,3,321),
(34,7,4,122),
(35,7,5,645);

/*Table structure for table `businessstatisticsyear` */

DROP TABLE IF EXISTS `BusinessStatisticsYear`;

CREATE TABLE `BusinessStatisticsYear` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Year` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `businessstatisticsyear` */

insert  into `BusinessStatisticsYear`(`Id`,`Year`) values 
(1,'2015'),
(2,'2016'),
(3,'2017'),
(4,'2018'),
(5,'2019');

/*Table structure for table `deposits` */

DROP TABLE IF EXISTS `Deposits`;

CREATE TABLE `Deposits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `LaguageId` bigint(20) DEFAULT NULL,
  `shortName` varchar(255) DEFAULT NULL,
  `shortNameContent` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`LaguageId`),
  CONSTRAINT `id` FOREIGN KEY (`LaguageId`) REFERENCES `laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `deposits` */

insert  into `Deposits`(`id`,`Title`,`Description`,`LaguageId`,`shortName`,`shortNameContent`) values 
(1,'Samucchaya -Recurring Deposit Scheme[RD]','Recurring Deposit Scheme is unique scheme, Suitable to those who are having regular monthly income. Under this scheme the account holder have to regularly deposit fixed sum of money by way of monthly instalments over a period stipulated period. ',1,'recurringDeposits','recurringDepositsContent'),
(2,'FD','11% ',1,'fixedDeposits','fixedDepositsContent'),
(3,'Monthly','2,000.00 ',1,'monthlyIncomeScheme','monthlyIncomeSchemeContent'),
(4,'Sadhguru cash Certificate(SCC)','Sahguru Cash Certificate is unique scheme where members can invest a specific amount for 74 months and double lump sum amount (Deposited Amount+Investment) on maturity. ',1,'sadhguruCashCertificate','sadhguruCashCertificateContent'),
(5,'Sadhguru Dashama Cash Certificate(SDCS)','Sadhguru Dashama Cash Certificate is unique scheme where members can invest a specific amount of 10 Years; and lump sum amount (Deposited Amount + Interest) on maturity. It is an ideal scheme for the members who are interested to invest on long term savings ',1,'sadhguruDashamaCashCertificate','sadhguruDashamaCashCertificateContent'),
(6,'Sadhguru Lakshadhipathi Scheme','Sadhguru Lakshadhipathi is unique scheme where members can invest a specific amount for 74 months;and Double lumb sum amount (Deposited Amount+Interest)on maturuity.',1,'sadhguruLakshadhipathiScheme','sadhguruLakshadhipathiSchemeContent');

/*Table structure for table `designation` */

DROP TABLE IF EXISTS `Designation`;

CREATE TABLE `Designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `LaguageId` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `desgid` (`LaguageId`),
  CONSTRAINT `desgid` FOREIGN KEY (`LaguageId`) REFERENCES `laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `designation` */

insert  into `Designation`(`id`,`Name`,`LaguageId`) values 
(1,'President',1),
(2,'Vice President',1),
(3,'Directors',1);

/*Table structure for table `download` */

DROP TABLE IF EXISTS `Download`;

CREATE TABLE `Download` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Head` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `download` */

insert  into `Download`(`id`,`Head`,`path`,`Content`) values 
(4,'Excel File','.xlsx','<p>File Uploaded Excel</p>\r\n'),
(5,'sdfsdsdf','4.jpg','<p>JPeg File</p>\r\n');

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `Gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `LanguageId` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LanguageId` (`LanguageId`),
  CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`LanguageId`) REFERENCES `laguage` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

insert  into `Gallery`(`id`,`title`,`path`,`LanguageId`) values 
(1,'','1.jpg',1),
(2,'','2.jpg',1),
(3,'','3.jpg',1),
(4,'','4.jpg',1),
(5,'','5.jpg',1),
(6,'','6.jpg',1),
(7,'','7.jpg',1),
(8,'','8.jpg',1),
(9,'','9.jpg',NULL),
(10,'','10.jpg',NULL),
(11,'','11.jpg',NULL),
(12,'','12.jpg',NULL),
(13,'','13.jpg',NULL),
(14,'','14.jpg',NULL),
(15,'','15.jpg',NULL),
(16,'','16.jpg',NULL),
(17,'','17.jpg',NULL),
(18,'','18.jpg',NULL),
(19,'','19.jpg',NULL),
(20,'','20.jpg',NULL),
(21,'','21.jpg',NULL),
(22,'','22.jpg',NULL),
(23,'','23.jpg',NULL),
(24,'','24.jpg',NULL),
(25,'','25.jpg',NULL),
(26,'','26.jpg',NULL),
(27,'','27.jpg',NULL);

/*Table structure for table `home` */

DROP TABLE IF EXISTS `Home`;

CREATE TABLE `Home` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `LanguageId` bigint(20) DEFAULT NULL,
  `Head` varchar(2000) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKLanguageId` (`LanguageId`),
  CONSTRAINT `FKLanguageId` FOREIGN KEY (`LanguageId`) REFERENCES `laguage` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `home` */

insert  into `Home`(`id`,`LanguageId`,`Head`,`Content`) values 
(1,1,'Area of Operation','Our Area of operation is Udupi district except Madur Village of Kundapura Taluk . ');

/*Table structure for table `laguage` */

DROP TABLE IF EXISTS `laguage`;

CREATE TABLE `laguage` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Code` bigint(20) DEFAULT NULL,
  `Language` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `laguage` */

insert  into `laguage`(`id`,`Code`,`Language`) values 
(1,1,'English');

/*Table structure for table `links` */

DROP TABLE IF EXISTS `Links`;

CREATE TABLE `Links` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Head` text DEFAULT NULL,
  `Content` text DEFAULT NULL,
  `Link` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `links` */

/*Table structure for table `loan` */

DROP TABLE IF EXISTS `Loan`;

CREATE TABLE `Loan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text CHARACTER SET latin1 NOT NULL,
  `Description` text CHARACTER SET latin1 NOT NULL,
  `LanguageId` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LanguageId` (`LanguageId`),
  CONSTRAINT `loanid` FOREIGN KEY (`LanguageId`) REFERENCES `laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `loan` */

insert  into `Loan`(`id`,`Title`,`Description`,`LanguageId`) values 
(1,'Monthly Installment Scheme','<p>dsa</p>\r\n',1),
(2,'Personal Loan','<p>Loan for Personal</p>\r\n',NULL),
(3,'Pigmy based Personal loan','<p>rfrfrfr</p>\r\n',NULL),
(4,'Vehicle Loan','<p>Hello</p>\r\n',NULL),
(5,'Business development Loan','good Development Plan',NULL),
(6,'Educational Loan','<p>Loan for Education</p>\r\n',NULL);

/*Table structure for table `map` */

DROP TABLE IF EXISTS `Map`;

CREATE TABLE `Map` (
  `id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `map` */

insert  into `Map`(`id`,`location`,`latitude`,`longitude`) values 
(1,'Sadhguru','13.327147999413995','74.7416275291908');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `News`;

CREATE TABLE `News` (
  `id` bigint(255) NOT NULL,
  `Head` varchar(255) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `news` */

insert  into `News`(`id`,`Head`,`Content`) values 
(1,'Linkindn','Coming Soon'),
(3,'GOOGLE PLUS','Coming Soon'),
(4,'TWITTER','<p>Coming Soon Twitter</p>\r\n');

/*Table structure for table `noticeboard` */

DROP TABLE IF EXISTS `NoticeBoard`;

CREATE TABLE `NoticeBoard` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Head` varchar(255) DEFAULT NULL,
  `Content` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `noticeboard` */

/*Table structure for table `parameter` */

DROP TABLE IF EXISTS `Parameter`;

CREATE TABLE `Parameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(255) DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `PhoneNumber` bigint(20) NOT NULL,
  `Address1` text NOT NULL,
  `Address2` text DEFAULT NULL,
  `Address3` text DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Pincode` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Languageid` bigint(20) DEFAULT NULL,
  `RegisteredNumber` bigint(20) DEFAULT NULL,
  `WorkingHours` varchar(255) DEFAULT NULL,
  `WeeklyHoliday` varchar(255) DEFAULT NULL,
  `EstablishedIn` bigint(20) DEFAULT NULL,
  `LandLine` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `DateOfRegistration` varchar(255) DEFAULT NULL,
  `DomainName` varchar(255) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Images` varchar(255) DEFAULT NULL,
  `GalleryImages` varchar(255) DEFAULT NULL,
  `DirectorImages` varchar(255) DEFAULT NULL,
  `Report` varchar(255) DEFAULT NULL,
  `Download` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `LaugageId` (`Languageid`),
  CONSTRAINT `LaugageId` FOREIGN KEY (`Languageid`) REFERENCES `laguage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `parameter` */

insert  into `Parameter`(`id`,`CompanyName`,`Name`,`Email`,`Password`,`PhoneNumber`,`Address1`,`Address2`,`Address3`,`City`,`Pincode`,`State`,`Languageid`,`RegisteredNumber`,`WorkingHours`,`WeeklyHoliday`,`EstablishedIn`,`LandLine`,`Type`,`DateOfRegistration`,`DomainName`,`Message`,`Images`,`GalleryImages`,`DirectorImages`,`Report`,`Download`) values 
(1,'Sadhguru Souharda Sahakari Limited','Dr B N Shanthapriya','sadhguruudupi@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997',9448327884,'Sadhguru Skill Devlopment Centre',' Kinnimulki Udupi ',' Kinnimulki Udupi','Udupi','574118','Karnataka',1,4141,'9.30 AM TO 5:30 PM','SUNDAY',2016,'0820 -2530009','Multipurpose Co-operative Society','2/02/2019','Sadhguruskilldevelopment.com','<p><strong>From</strong> PRESIDENT DESK We are very proud to say Sadhguu Souharda Sahakari Ltd is a Co-operative Institute born with Ethics , Principles and human Values. We provides financial services like, members Savings Account , current accounts, Deposits and loans like other societies , but sahakari activities are not limited to financial matter and extended to trading and health care services. We pride ourselves on our member participation,Co-operation,service and satisfaction; We are always working to reach our members with best services.We are committed to leading the way on ethical, environmental and community members welfare issues. Our Sahakari has a unique ethical policy setting out the way we do business which we&#39;ve developed in full consultation with our members. Our Sahakari website contains more details about our services, our purpose, our objectives and services. You can also find more detail about our health and medical care service busssines through our PMJK Centres. Dr.B.N.Shanthapriya President</p>\r\n','Images','GalleryImages','DirectorsImages','Report','DownloadForm');

/*Table structure for table `report` */

DROP TABLE IF EXISTS `Report`;

CREATE TABLE `Report` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Head` varchar(255) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `report` */

insert  into `Report`(`id`,`Head`,`Content`,`path`) values 
(35,'wwwEnergy','<p>ssEnergic</p>\r\n','.pdf'),
(36,'Good Services','<p>Text File</p>\r\n','35.pdf');

/*Table structure for table `rollingtext` */

DROP TABLE IF EXISTS `RollingText`;

CREATE TABLE `RollingText` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rollingtext` */

insert  into `RollingText`(`Id`,`Content`) values 
(2,'Good Services');

/*Table structure for table `services` */

DROP TABLE IF EXISTS `Services`;

CREATE TABLE `Services` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Head` varchar(255) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `services` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
