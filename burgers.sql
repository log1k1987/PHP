-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: burgers
-- ------------------------------------------------------
-- Server version	5.6.41

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` varchar(256) DEFAULT NULL,
  `comment` text,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (43,16,'Koryavya 4 1 5 11','utututu daaaaaaaaaaaaaaaaaaaaaaa'),(44,16,'Koryavya 4 1 5 11','utututu daaaaaaaaaaaaaaaaaaaaaaa'),(45,17,'Novokosinskaia 2 2 2 2','2222222222222222222222222'),(46,18,'Novokosinskaia 2 2 2 2','2222222222222222222222222'),(47,19,'Novokosinskaia 2 2 2 2','2222222222222222222222222'),(48,20,'Марканая 9 22 6 4','ddddddddddd'),(49,20,'Марканая 9 22 6 4','dddddddddddd'),(50,20,'Марканая 9 22 6 4','ssssssssssss'),(51,20,'Марканая 9 22 6 4','dddddddddddd'),(52,20,'Марканая 9 22 6 4','sssssssssssss');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;
