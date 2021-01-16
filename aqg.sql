-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: aqg
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
-- Table structure for table `admin_registration`
--

DROP TABLE IF EXISTS `admin_registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_registration` (
  `sl_no` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_registration`
--

LOCK TABLES `admin_registration` WRITE;
/*!40000 ALTER TABLE `admin_registration` DISABLE KEYS */;
INSERT INTO `admin_registration` VALUES (1,'Gowtham','H M','9483621844','gowthamhm001@gmail.com','Gowthamhm001@','Male'),(2,'Gowtham ','H M','9483621844','gowthamhm001@gmail.com','Gowthamhm001@','Male'),(3,'Gowtham ','H M','9483621844','gowthamhm001@gmail.com','Gowthamhm001@','Male'),(4,'Gowtham ','H M','9483621844','gowthamhm001@gmail.com','a','Male'),(5,'impana','gowda','7894561230','impuleela@gmail.com','impana','Female'),(6,'impana','gowda','7894561230','impuleela@gmail.com','impu',''),(7,'impana','gowda','7894561230','impuleela@gmail.com','imp',''),(8,'Gowtham H M','H M','-1','gowthamhm001@gmail.com','g','Male');
/*!40000 ALTER TABLE `admin_registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `sl_no` int NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) DEFAULT NULL,
  `event_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (9,'ISTE','MOCK PLACEMENT');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `sl_no` int NOT NULL AUTO_INCREMENT,
  `topic` varchar(200) DEFAULT NULL,
  `question` varchar(1000) DEFAULT NULL,
  `option1` varchar(200) DEFAULT NULL,
  `option2` varchar(200) DEFAULT NULL,
  `option3` varchar(200) DEFAULT NULL,
  `option4` varchar(200) DEFAULT NULL,
  `answer` varchar(200) DEFAULT NULL,
  `explanation` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'JAVA','Which of the following option leads to the portability and security of Java?','Bytecode is executed by JVM','The applet makes the Java code secure and portable','Use of exception handling','Dynamic binding between objects','Bytecode is executed by JVM','        The output of the Java compiler is bytecode, which leads to the security and portability of the Java code. It is a highly developed set of instructions that are designed to be executed by the Java runtime system known as Java Virtual Machine (JVM). The Java programs executed by the JVM that makes the code portable and secure. Because JVM prevents the code from generating its side effects. The Java code is portable, as the same byte code can run on any platform.'),(2,'JAVA','Which of the following is not a Java feature?','Dynamic','Architecture Neutral','Use of Pointers','Object-oriented','Use of Pointers','   The Java language does not support pointers; some of the major reasons are listed below:\r\n\r\nOne of the major factors of not using pointers in Java is security concerns. Due to pointers, most of the users consider C-language very confusing and complex. This is the reason why Green Team (Java Team members) has not introduced pointers in Java.\r\nJava provides an effective layer of abstraction to the developers by not using pointers in Java.\r\nJava is dynamic, architecture-neutral, and object-oriented programming language.'),(3,'C++','Which of the following is the correct syntax for including user-defined header files in C++?','#include <userdefined.h>',' #include <userdefined>','#include “userdefined”',' #include [userdefined]','#include “userdefined”','C++ uses double quotes to include a user-defined header file. The correct syntax of including user-defined is #include “userdefinedname”.'),(4,'JAVA','Which is a valid keyword in java?','Interface','String','Float','Unsigned','Interface','Interface is a valid keyword as String and Float are class in JAVA type and unsigned is a keyword in C/C++'),(5,'JAVA','What is the name of the method used to start a thread execution?','init();','start();','run();','resume();','start();','The start() method causes this thread to begin execution;the Java Virtual Machine calls the run method of this thread.'),(6,'JAVA','Which class does not override the equals() and hashCode() methods, inheriting them directly from the class Object?','java.lang.String','java.lang.Double','java.lang.StringBuffer','java.lang.Character','java.lang.StringBuffer','   It is the only class that uses the default methods provided by class Object.'),(8,'C','Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?','rem = 3.14 % 2.1;','rem = modf(3.14, 2.1);','rem = fmod(3.14, 2.1);','Remainder cannot be obtain in floating point division.','rem = fmod(3.14, 2.1);','fmod(x,y) - Calculates x modulo y, the remainder of x/y.'),(9,'C','What is the 16-bit compiler allowable range for integer constants?','-3.4e38 to 3.4e38','-32768 to 32767','-32668 to 32667','32768 to 32767','-32768 to 32767','In a 16-bit C compiler, we have 2 bytes to store the value. The range for signed integers is -32768 to 32767. The range for unsigned integers is 0 to 65535. The range for an unsigned character is 0 to 255.');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `result` (
  `sl_no` int NOT NULL AUTO_INCREMENT,
  `event_name` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `usn` varchar(20) DEFAULT NULL,
  `result` int DEFAULT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
INSERT INTO `result` VALUES (1,'MOCK PLACEMENT','GOWTHAM H M','4gh17cs016',NULL),(2,'MOCK PLACEMENT','GOWTHAM H M','4gh17cs016',NULL),(3,'MOCK PLACEMENT','GOWTHAM H M','4gh17cs016',NULL);
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `topic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `topic` varchar(300) DEFAULT NULL,
  `topicfilename` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (1,'JAVA','java.png'),(2,'Python','python.jpeg'),(3,'Mysql','mysql.png'),(4,'C','c.jpg'),(5,'C++','cpp.png'),(9,'MOCK PLACEMENT','a.jpg');
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-16 15:10:49
