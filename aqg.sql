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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'JAVA','Which of the following option leads to the portability and security of Java?','Bytecode is executed by JVM','The applet makes the Java code secure and portable','Use of exception handling','Dynamic binding between objects','Bytecode is executed by JVM','The output of the Java compiler is bytecode, which leads to the security and portability of the Java code. It is a highly developed set of instructions that are designed to be executed by the Java runtime system known as Java Virtual Machine (JVM). The Java programs executed by the JVM that makes the code portable and secure. Because JVM prevents the code from generating its side effects. The Java code is portable, as the same byte code can run on any platform.'),(2,'JAVA','Which of the following is not a Java feature?','Dynamic','Architecture Neutral','Use of pointers','Object-oriented','Use of pointers','The Java language does not support pointers; some of the major reasons are listed below:\r\n\r\nOne of the major factors of not using pointers in Java is security concerns. Due to pointers, most of the users consider C-language very confusing and complex. This is the reason why Green Team (Java Team members) has not introduced pointers in Java.\r\nJava provides an effective layer of abstraction to the developers by not using pointers in Java.\r\nJava is dynamic, architecture-neutral, and object-oriented programming language.'),(3,'JAVA','Which is a valid keyword in java?','Interface','String','Float','Unsigned','Interface','Interface is a valid keyword as String and Float are class in JAVA type and unsigned is a keyword in C/C++'),(4,'JAVA','What is the name of the method used to start a thread execution?','init();','start();','run();','resume();','start();','The start() method causes this thread to begin execution;the Java Virtual Machine calls the run method of this thread.'),(5,'JAVA','Which class does not override the equals() and hashCode() methods,inheriting them directly from class Object?','java.lang.String','java.lang.Double','java.lang.StringBuffer','java.lang.Character','java.lang.StringBuffer','It is the only class that uses the default methods provided by class Object.'),(6,'C','Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?','rem = 3.14 % 2.1;','rem = modf(3.14, 2.1);','rem = fmod(3.14, 2.1);','Remainder cannot be obtain in floating point division.','rem = fmod(3.14, 2.1);','fmod(x,y) - Calculates x modulo y, the remainder of x/y.\n'),(7,'C','What is the 16-bit compiler allowable range for integer constants?','-3.4e38 to 3.4e38','-32767 to 32768','-32668 to 32667','32768 to 32767','-32768 to 32767','In a 16-bit C compiler, we have 2 bytes to store the value.The range for signed integers is -32768 to 32767.The range for unsigned integers is 0 to 65535.The range for unsigned character is 0 to 255.'),(8,'C','What is required in each C program? ','The program must have at least one function.','The program does not require any function.','Input data','Output data','The program must have at least one function.',' Any C program has at least one function, and even the most trivial programs can specify additional functions. A function is a piece of code. In other words, it works like a sub-program.'),(9,'C','Which of the following comment is correct when a macro definition includes arguments?','The opening parenthesis should immediately follow the macro name.','There should be at least one blank between the macro name and the opening parenthesis.','There should be only one blank between the macro name and the opening parenthesis.','All the above comments are correct.','The opening parenthesis should immediately follow the macro name.','None'),(10,'C','What is a lint?','C compiler','Interactive debugger','Analyzing tool','C interpreter','Analyzing tool',' Lint is an analyzing tool that analyzes the source code by suspicious constructions, stylistic errors, bugs, and flag programming errors. Lint is a compiler-like tool in which it parses the source files of C programming. It checks the syntactic accuracy of these files.'),(11,'Python','What is the maximum possible length of an identifier?','16','32','64','None of the above','None of the above','The maximum possible length of an identifier is not defined in the python language. It can be of any number.'),(12,'Python','Who developed the Python language?','Zim Den','Guido van Rossum','Niene Stom','Wick van Rossum','Guido van Rossum',' Python language was developed by Guido van Rossum in the Netherlands'),(13,'Python',' In which year was the Python language developed?','1995','1972','1981','1989','1989','Python language was developed by Guido van Rossum in 1989.'),(14,'Python','In which language is Python written?','English','PHP','C','All of the above','C','Python is written in C programming language, and it is also called CPython.'),(15,'Python','Which one of the following is the correct extension of the Python file?','.py','.python','.p','None of these','.py','\".py\" is the correct extension of the Python file. '),(16,'Mysql','Which program converts binary log files to statements in text form?','mysqldump','mysqllog','mysqlbin','mysqlbinlog','mysqlbinlog','The ‘mysqlbinlog’ program is used to convert the binary log files to statements in text form. This makes it easy to execute. The output from ‘mysqlbinlog’ is used as input to mysql.'),(17,'Mysql','The ‘mysqlbackup’ command to perform a restore operation is _____________','copy-back-and-apply-log',' apply-log-and-copy-back','copy-log-and-apply','apply-back-and-copy-log','copy-back-and-apply-log',' The‘mysqlbackup’ commands to perform a restore operation are ‘copy-back-and-apply-log’ and ‘copy-back’ (for directory backup only). The restoration process requires the database server to be already shut down.'),(18,'Mysql','The metadata log is _______________','error log','ddl log','binary log','relay log','ddl log','The DDL log is also known as the metadata log. The metadata operations performed by the DDL statements. The Relay Log has the data changes received from a replication master server written in it.'),(19,'Mysql','What is the default size of ‘max_binlog_cache_size’ system variable?','1 GB','2 GB','4 GB','8 GB','4 GB','The max_binlog_cache_size system variable can be used to restrict the total size used to cache a multiple-statement transaction. If transaction is larger than this it fails and rolls back.'),(20,'Mysql','Where does MySQL Enterprise Backup record details of each backup?','history_backup','backup_history',' backlog_history','history_backlog','backup_history','The restored data includes the ‘backup_history’ table, where ‘MySQL Enterprise Backup’ records details of each backup. The table allows to perform future incremental backups using ‘–incremental-base=history:last_backup’.'),(21,'JAVA','Which of these is the method which is executed first before execution of any other thing takes place in a program?','main method','finalize method','static method','private method','finalize method','If a static method is present in the program then it will be executed first, then main will be executed.'),(22,'JAVA','What is the process of defining more than one method in a class differentiated by parameters?',' Function overriding','Function overloading','Function doubling','None of the mentioned','Function overloading','Function overloading is a process of defining more than one method in a class with same name differentiated by function signature i:e return type or parameters type and number. Example – int volume(int length, int width) & int volume(int length , int width , int height) can be used to calculate volume.'),(23,'JAVA','Which of these can be used to differentiate two or more methods having the same name?',' Parameters data type','Number of parameters','Return type of method','All of the mentioned','All of the mentioned','None'),(24,'JAVA','Which of these data type can be used for a method having a return statement in it?','void','int','float','both int and float','both int and float','None'),(25,'JAVA','Which of these statement is incorrect?',' Two or more methods with same name can be differentiated on the basis of their parameters data type','Two or more method having same name can be differentiated on basis of number of parameters','Any already defined method in java library can be defined again in the program with different data type of parameters','If a method is returning a value the calling statement must have a variable to store that value','If a method is returning a value the calling statement must have a variable to store that value','Even if a method is returning a value, it is not necessary to store that value.'),(26,'MOCK PLACEMENT','A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?','3.6','7.2','8.4','10','7.2','Speed = 600/ 5 x 60 m/sec. = 2 m/sec. = 2 x 18/5km/hr =7.2 km/hr'),(27,'MOCK PLACEMENT','H.C.F. of 513, 1134 and 1215 is _____________','18','27','33','36','27','We know different methods to calculate H.C.F.\r\nFinding H.C.F. by division method.'),(28,'MOCK PLACEMENT','If one-third of one-fourth of a number is 15, then three-tenth of that number is:','35','36','45','54','54','Let the number be x.\r\nThen,1/3of 1/4of x = 15\r\nx = 15 x 12 = 180.\r\nSo, required number = 3/10 x 180 = 54.'),(29,'MOCK PLACEMENT','A shopkeeper buys a TV at Rs.42000 and sells it a Rs.45000.What is his profit or loss?','RS.2500 ','RS.3000','RS.4500','RS.2000','RS.3000','C.P = Rs.42000 S.P = Rs.45000 As S.P > C.P So he makes profit profit = S.P - C.P = Rs.3000'),(30,'MOCK PLACEMENT','A boat can travel with a speed of 13 km/hr in still water. If the speed of the stream is 4 km/hr, find the time taken by the boat to go 68 km downstream.','2 hours','3 hours','4 hours','5 hours','4 hours','Speed downstream = (13 + 4) km/hr = 17 km/hr.\r\nTime taken to travel 68 km downstream =68/17hrs = 4 hrs.'),(31,'MOCK PLACEMENT','In the following the questions choose the word which best expresses the meaning of the given word.\r\nCORPULENT','Lean','Gaunt','Emaciated','Obese','Obese','None'),(32,'MOCK PLACEMENT','\r\n\r\nIn the following questions choose the word which is the exact OPPOSITE of the given words.\r\nENORMOUS','Soft','Average','Tiny','Weak','Tiny','None'),(33,'MOCK PLACEMENT','\r\n\r\nFind the correctly spelt words.\r\n','Efficient','Treatmeant','Beterment','Employd','Efficient','None'),(34,'MOCK PLACEMENT','Which of the following option leads to the portability and security of Java?','Bytecode is executed by JVM','The applet makes the Java code secure and portable','Use of exception handling','Dynamic binding between objects','Bytecode is executed by JVM','        The output of the Java compiler is bytecode, which leads to the security and portability of the Java code. It is a highly developed set of instructions that are designed to be executed by the Java runtime system known as Java Virtual Machine (JVM). The Java programs executed by the JVM that makes the code portable and secure. Because JVM prevents the code from generating its side effects. The Java code is portable, as the same byte code can run on any platform.'),(35,'MOCK PLACEMENT','Which of the following is not a Java feature?','Dynamic','Architecture Neutral','Use of Pointers','Object-oriented','Use of Pointers','   The Java language does not support pointers; some of the major reasons are listed below:\r\n\r\nOne of the major factors of not using pointers in Java is security concerns. Due to pointers, most of the users consider C-language very confusing and complex. This is the reason why Green Team (Java Team members) has not introduced pointers in Java.\r\nJava provides an effective layer of abstraction to the developers by not using pointers in Java.\r\nJava is dynamic, architecture-neutral, and object-oriented programming language.'),(36,'MOCK PLACEMENT','Which of the following is the correct syntax for including user-defined header files in C++?','#include <userdefined.h>',' #include <userdefined>','#include “userdefined”',' #include [userdefined]','#include “userdefined”','C++ uses double quotes to include a user-defined header file. The correct syntax of including user-defined is #include “userdefinedname”.'),(37,'MOCK PLACEMENT','Which is a valid keyword in java?','Interface','String','Float','Unsigned','Interface','Interface is a valid keyword as String and Float are class in JAVA type and unsigned is a keyword in C/C++'),(38,'MOCK PLACEMENT','What is the name of the method used to start a thread execution?','init();','start();','run();','resume();','start();','The start() method causes this thread to begin execution;the Java Virtual Machine calls the run method of this thread.'),(39,'MOCK PLACEMENT','Which class does not override the equals() and hashCode() methods, inheriting them directly from the class Object?','java.lang.String','java.lang.Double','java.lang.StringBuffer','java.lang.Character','java.lang.StringBuffer','   It is the only class that uses the default methods provided by class Object.'),(40,'MOCK PLACEMENT','Which of the following statements should be used to obtain a remainder after dividing 3.14 by 2.1 ?','rem = 3.14 % 2.1;','rem = modf(3.14, 2.1);','rem = fmod(3.14, 2.1);','Remainder cannot be obtain in floating point division.','rem = fmod(3.14, 2.1);','fmod(x,y) - Calculates x modulo y, the remainder of x/y.'),(41,'MOCK PLACEMENT','What is the 16-bit compiler allowable range for integer constants?','-3.4e38 to 3.4e38','-32768 to 32767','-32668 to 32667','32768 to 32767','-32768 to 32767','In a 16-bit C compiler, we have 2 bytes to store the value. The range for signed integers is -32768 to 32767. The range for unsigned integers is 0 to 65535. The range for an unsigned character is 0 to 255.');
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
INSERT INTO `result` VALUES (33,'MOCK PLACEMENT','GOWTHAM H M','4gh17cs016',4);
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

-- Dump completed on 2021-01-18 16:22:45
