-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: calendar
-- ------------------------------------------------------
-- Server version	5.1.41-3ubuntu12.10-log

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
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule` (
  `user` varchar(16) COLLATE latin1_general_ci DEFAULT NULL,
  `idschedule` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_name` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `time_start` time DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `time_end` time DEFAULT NULL,
  `allday` varchar(5) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idschedule`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` VALUES ('alex',1,'Test Schedule','2011-01-17','08:00:00','2011-01-17','09:00:00','false'),('reddit',2,'Test Schedule 2','2011-01-17','10:00:00','2011-01-17','11:00:00','false'),('gustavo',3,'Test Schedule 3','2011-01-18','10:00:00','2011-01-18','11:00:00','false'),('hazel',4,'Test Schedule 4','2011-01-18','10:00:00','2011-01-18','11:00:00','false'),('alex',5,'Test Schedule 5','2011-01-18','10:00:00','2011-01-18','11:00:00','false'),('reddit',6,'Test Schedule 6','2011-01-18','10:00:00','2011-01-18','11:00:00','false'),('hazel',7,'Test Schedule 7','2011-01-19','19:00:00','2011-01-19','20:00:00','false'),('gustavo',8,'Test Schedule 8','2011-01-19','19:00:00','2011-01-19','20:00:00','false'),('hazel',9,'random','2011-01-04','08:00:00','2011-01-05','09:00:00','false'),('alex',10,'/dev/null','2011-01-06','08:00:00','2011-01-09','09:00:00','false'),('alex',12,'Test Schedule','2011-10-17','08:00:00','2011-10-17','09:00:00','false'),('reddit',13,'Test Schedule 2','2011-10-17','10:00:00','2011-10-17','11:00:00','false'),('gustavo',14,'Test Schedule 3','2011-10-18','10:00:00','2011-10-18','11:00:00','false'),('hazel',15,'Test Schedule 4','2011-10-18','10:00:00','2011-10-18','11:00:00','false'),('alex',16,'Test Schedule 5','2011-10-18','10:00:00','2011-10-18','11:00:00','false'),('reddit',17,'Test Schedule 6','2011-10-18','10:00:00','2011-10-18','11:00:00','false'),('hazel',18,'herrow','2011-10-19','19:00:00','2011-10-19','20:00:00','false'),('gustavo',19,'hellow','2011-10-19','19:00:00','2011-10-19','20:00:00','false'),('reddit',20,'random','2011-10-04','08:00:00','2011-10-05','09:00:00','false'),('alex',21,'/dev/null','2011-10-06','08:00:00','2011-10-09','09:00:00','false');
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(16) DEFAULT NULL,
  `color` varchar(20) NOT NULL,
  `text_color` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'alex','blue','white'),(2,'reddit','yellow','black'),(3,'gustavo','black','green'),(4,'hazel','green','white');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-10-04 20:22:30
