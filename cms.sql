-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: cms
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `c_name` varchar(20) DEFAULT NULL,
  `u_name` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`u_name`),
  KEY `c_name` (`c_name`),
  CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`c_name`) REFERENCES `club` (`c_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('ISTE','admin','admin'),('ROTARACT','admin2','admin'),('GEON','admin4','admin'),('GLUE','admin5','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `club` (
  `c_name` varchar(20) NOT NULL,
  `c_id` int DEFAULT NULL,
  `room_no` int DEFAULT NULL,
  PRIMARY KEY (`c_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `club`
--

LOCK TABLES `club` WRITE;
/*!40000 ALTER TABLE `club` DISABLE KEYS */;
INSERT INTO `club` VALUES ('GEON',5,354),('GLUE',6,311),('ISTE',1,339),('ROTARACT',3,349);
/*!40000 ALTER TABLE `club` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `c_name` varchar(20) DEFAULT NULL,
  `event_name` varchar(20) NOT NULL,
  PRIMARY KEY (`event_name`),
  KEY `c_name` (`c_name`),
  CONSTRAINT `event_ibfk_1` FOREIGN KEY (`c_name`) REFERENCES `club` (`c_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES ('GLUE','QRBit'),('ISTE','dsx'),('ISTE','Guess it out'),('ISTE','hjbk'),('ISTE','hshbfjs'),('ISTE','hu'),('ISTE','MOCK PLACEMENT'),('ISTE','MYSTERY SOLVING'),('ROTARACT','UPDOWN JUNK');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_detail`
--

DROP TABLE IF EXISTS `event_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_detail` (
  `event_name` varchar(20) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `number` varchar(30) DEFAULT NULL,
  `part_no` int DEFAULT NULL,
  KEY `event_name` (`event_name`),
  CONSTRAINT `event_detail_ibfk_1` FOREIGN KEY (`event_name`) REFERENCES `event` (`event_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_detail`
--

LOCK TABLES `event_detail` WRITE;
/*!40000 ALTER TABLE `event_detail` DISABLE KEYS */;
INSERT INTO `event_detail` VALUES ('UPDOWN JUNK','01:30:00','2019-09-13','Open Auditorium','All you got to do is gather up the useless/waste products available and turn them into useful models using your engineering skills. Points to note: You can participate as an individual candidate or you can come up with a team not exceeding 4 members per team. You are supposed to get all the necessary materials required to prepare the model.You will be given exact 1hr time to prepare your model from the time you get registered','Class Coordinator','8095642061',4),('MOCK PLACEMENT','01:00:00','2019-09-06','Respective Class Room','This event involves 2 rounds and is conducted for 3rd and 4th year students irrespective of branch.Round 1: General Aptitude and Technical Aptitude.Round 2:Group Discussion  and HR Interview  ','Class Coordinator','9483621844',2),('MYSTERY SOLVING','05:00:00','2019-04-13','OPEN AUDITORIUM','Last time you have helped us to identify a murderer. This time its different, some very sensitive data has been stolen and we want your skills to help us solve the mystery. Join us and bring that one gadget which is closest to you. In this event you come across a tough situation where you have to resolve the crime. Registration starts from 4.30pm onwards.NOTE:*Each team includes 4 members','Class Coordinator','8197370511',3),('Guess it out','12:00:00','2019-04-02','College Entrance','In this event ,questions will be displayed in the main entrance and participants have to answer that questions and drop it on the box which is kept in the entrance. Questions will be displayed everyday at 12pm to 4pm from 2/4/2019 up to  10/4/2019 .','Class Coordinator','6366309260',2),('QRBit','01:30:00','2019-09-13','Room No 305','On account of Engineer\'s Day ,we are conducting an event named QRBIT. That is going to be conducted irrespective of branches,semesters. Everyone are welcome RULES :1.A mathematical problem is to be solved. 2.The quicker you solve ..The faster you grab the QR Code. Come on.... Rush to be the winner!!!!! Please do participate with so much of curiosity and enthusiasm','Sujan','6366309260',3),('hjbk','01:00:23','2019-02-12','hbijn','hjnkmlhui','fghkjn','845613649',0),('dsx','23:52:55','2020-09-26','fdhgg','fdh','djgslknv','54214547',0),('hshbfjs','23:59:59','2021-12-31','hvhjvhj','hhjhjv','sdhbfgew','15645454',0),('hu','23:59:59','2021-12-31','bcdhsbvfj','dbshfbdsbgk','sdbjgbj','5454785',1);
/*!40000 ALTER TABLE `event_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_details`
--

DROP TABLE IF EXISTS `event_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_details` (
  `event_name` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  KEY `event_name` (`event_name`),
  CONSTRAINT `event_details_ibfk_1` FOREIGN KEY (`event_name`) REFERENCES `event` (`event_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_details`
--

LOCK TABLES `event_details` WRITE;
/*!40000 ALTER TABLE `event_details` DISABLE KEYS */;
INSERT INTO `event_details` VALUES ('QRbit','2019-09-13','02:00:00','321');
/*!40000 ALTER TABLE `event_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_reg`
--

DROP TABLE IF EXISTS `event_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_reg` (
  `event_name` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `usn` varchar(15) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `sem` int DEFAULT NULL,
  `c_name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  KEY `event_name` (`event_name`),
  KEY `c_name` (`c_name`),
  CONSTRAINT `event_reg_ibfk_1` FOREIGN KEY (`event_name`) REFERENCES `event` (`event_name`),
  CONSTRAINT `event_reg_ibfk_2` FOREIGN KEY (`c_name`) REFERENCES `club` (`c_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_reg`
--

LOCK TABLES `event_reg` WRITE;
/*!40000 ALTER TABLE `event_reg` DISABLE KEYS */;
INSERT INTO `event_reg` VALUES ('QRBit ','GOWTHAM H M','4gh17cs016','male','cs&e',5,'GLUE','gowthamhm001@gmail.com','9483621844'),('Guess it out ','GOWTHAM H M','4gh17cs016','male','cs&e',5,'ISTE','gowthamhm001@gmail.com','9483621844'),('MOCK PLACEMENT','GOWTHAM H M','4gh17cs016','male','cs&e',5,'ISTE','lionmonkey001@gmail.com','9483621844'),('MYSTERY SOLVING','Abhiram B J','4gh17cs001','male','cse',5,'ISTE','admin@admin.com','9986899198'),('MYSTERY SOLVING','meghana h m','4gh17cs026','female','cse',5,'ISTE','meghanahm01@gmail.com','2035446589'),('MYSTERY SOLVING','Aishwarya Jain','4gh17cs003','female','cs&e',5,'ISTE','aish@gmail.com','8035669643'),('UPDOWN JUNK','Impana Gowda','4gh17cs018','female','cs&e',5,'ROTARACT','impuleela@gmail.com','9480440659'),('UPDOWN JUNK','rachana s v','gh17cs032','female','cse',5,'ROTARACT','vrachana@gmail.com','7894561235'),('Guess it out','Manoj','4gh16cs028','male','cse',5,'ISTE','manoj@gmail.com','7564123892'),('QRBit','Abhiram B J','4gh17cs001','male','cse',5,'GLUE','abhiram.bj@gmail.com','7789456123'),('MOCK PLACEMENT','Abhiram B J','4gh17cs001','male','cse',5,'ISTE','abhiram.bj@gmail.com','7789456123'),('UPDOWN JUNK','Abhiram B J','4gh17cs001','male','cse',5,'ROTARACT','abhiram.bj@gmail.com','7789456123'),('UPDOWN JUNK','rachana','4gh17cs036','female','cs&e',5,'ROTARACT','vrachana@gmail.com','8296005580'),('QRBit','GOWTHAM H M','4gh17cs16','male','cs&e',5,'GLUE','lionmonkey001@gmail.com','9483621844'),('hu','Gowtham ','4ghj17cs017','male','cse',5,'ISTE','gowthamhm001@gmail.com','1');
/*!40000 ALTER TABLE `event_reg` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `set_part` AFTER INSERT ON `event_reg` FOR EACH ROW UPDATE event_detail ed SET part_no=(select count(*) from event_reg er WHERE er.event_name=ed.event_name) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meeting` (
  `c_name` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `attendence` int DEFAULT NULL,
  `time` time DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  KEY `c_name` (`c_name`),
  CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`c_name`) REFERENCES `club` (`c_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting`
--

LOCK TABLES `meeting` WRITE;
/*!40000 ALTER TABLE `meeting` DISABLE KEYS */;
INSERT INTO `meeting` VALUES ('GLUE','2019-09-13',NULL,'12:00:00','Room No 305'),('GLUE','2019-08-03',NULL,'01:00:00','Room No 313'),('GLUE','2019-08-10',NULL,'01:00:00','Room No 313'),('ISTE','2019-08-10',NULL,'01:00:00','room no 325'),('ISTE','2019-09-19',NULL,'01:00:00','ROOM NO 325'),('ISTE','2019-09-10',NULL,'01:00:00','Room NO 325'),('ROTARACT','2019-09-13',NULL,'01:00:00','Room no 333'),('ROTARACT','2019-09-13',NULL,'01:00:00','Room no 333'),('ISTE','2019-02-12',NULL,'01:00:00','sddgh'),('ISTE','2019-01-12',NULL,'01:00:00','gfh');
/*!40000 ALTER TABLE `meeting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `c_name` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `usn` varchar(15) NOT NULL,
  `sem` int DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  KEY `c_name` (`c_name`),
  CONSTRAINT `members_ibfk_1` FOREIGN KEY (`c_name`) REFERENCES `club` (`c_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES ('ISTE','Aishwarya Jain','4gh17cs003',5,'cs&e','female','ishvaryamahaveerjain@gmail.com','8310739585'),('ISTE','Impana Gowda','4gh17cs018',5,'cs&e','female','impuleela@gmail.com','6366309260'),('ISTE','Gowtham H M','4gh17cs016',5,'cse','male','gowthamhm001@gmail.com','9483621844'),('ISTE','Meghana H M','4gh17cs026',5,'cs&e','female','meghanamuralidharhm01@gmail.com','7337835915'),('ISTE','Rachana S V','4gh17cs032',5,'cs&e','female','vrachana71@gmail.com','8296005580'),('GLUE','Gowtham H M','4gh17cs016',5,'cs&e','male','gowthamhm001@gmail.com','9483621844'),('GLUE','Abhiram BJ','4GH17CS001',5,'cs&e','male','abhiram.bj@gmail.com','9986899198'),('GLUE','Vidya A P S','4GH17CS052',5,'cs&e','female','vvidya573@gmail.com','8277139049'),('GEON','Janavi Raj','4gh17ec013',5,'e&c','female','janaviraj99@gmail.com','8217324002'),('GEON','Bharath B N','4GH17EC006',5,'e&c','male','bharathbnm@gmail.com','9591100317'),('GEON','Likhitha K','4GH17EC018',5,'e&c','female','likhithak1999@gmail.com','8197063264'),('GEON','Rachana R','4gh17ec030',5,'e&c','female','rachururu@gmail.com','9632744258'),('ROTARACT','Meghana H M','4gh17cs026',5,'cs&e','female','meghanamuralidharhm01@gmail.com','7337835915'),('ROTARACT','Abhiram BJ','4GH17CS001',5,'cs&e','male','abhiram.bj@gmail.com','9986899198'),('ISTE','Abhiram BJ','4GH17CS001',5,'cs&e','male','abhiram.bj@gmail.com','9986899198'),('ROTARACT','Gowtham H M','4gh17cs016',5,'cs&e','male','gowthamhm001@gmail.com','9483621844'),('ROTARACT','Aishwarya Jain','4GH17CS003',5,'cs&e','female','Ishvaryamahaveerjain@gmail.com','8310739585'),('ROTARACT','Rachana S V','4gh17cs032',5,'cs&e','female','vrachana71@gmail.com','8296005580'),('ROTARACT','Impana Gowda','4gh17cs018',5,'cs&e','female','impuleela@gmail.com','6366309260'),('ROTARACT','GOWTHAM H M','4gh17cs016',5,'cs&e','male','gowthamhm01@gmail.com','9483621844'),('GEON','Gowtham ','4ghj17cs017',5,'cse','male','dj@njn.xink','454');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-18 16:17:37
