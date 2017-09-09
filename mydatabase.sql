-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `skilltestquiz`
--

DROP TABLE IF EXISTS `skilltestquiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skilltestquiz` (
  `quizID` int(255) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `choice1` varchar(255) NOT NULL,
  `choice2` varchar(255) NOT NULL,
  `choice3` varchar(255) NOT NULL,
  PRIMARY KEY (`quizID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skilltestquiz`
--

LOCK TABLES `skilltestquiz` WRITE;
/*!40000 ALTER TABLE `skilltestquiz` DISABLE KEYS */;
INSERT INTO `skilltestquiz` VALUES (1,'Who is greatest of all time in NBA history','Michael Jordan','Kobe Bryant','Lebron James','Dwayne Wade'),(2,'How old kobe right now?','38','39','40','42'),(3,'Who is the person has a nickname of KING in NBA','James Lebron','Kobe Bryant','Dwayne Wade','Stephen Curry'),(4,'What is the most populated country','china','Philippines','United State','England'),(5,'What is the meaning of WBO in boxing','World Boxing Organization','World Boxing Organize','World Boom Ohh','WBO'),(6,'What is the most populated country','china','Philippines','United State','England'),(7,'What is the most populated country','china','Philippines','United State','England'),(8,'What is the most populated country','china','Philippines','United State','England'),(9,'What is the most populated country','china','Philippines','United State','England'),(10,'What is the most populated country','china','Philippines','United State','England');
/*!40000 ALTER TABLE `skilltestquiz` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-14  6:00:45
