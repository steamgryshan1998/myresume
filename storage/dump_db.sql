-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: my_db
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

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
-- Table structure for table `resume_data`
--

DROP TABLE IF EXISTS `resume_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `resume_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone number` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `personal website` varchar(60) NOT NULL,
  `education` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resume_data`
--

LOCK TABLES `resume_data` WRITE;
/*!40000 ALTER TABLE `resume_data` DISABLE KEYS */;
INSERT INTO `resume_data` VALUES (42,'default','380677084239','steamgryshan@gmail.com','Zaporishia, Ukraine','www.github.com','                     NTU PTU                                                   ','                    PHP\r\nHTML\r\nCSS                                                    '),(73,'editable','380677084239','steamgryshan@gmail.com','KH','WWW.GOOGLE.COM','                       123123                                                 ','                      21312 213213 213123                                                  ');
/*!40000 ALTER TABLE `resume_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'YevhenHryshko','steamgryshan@gmail.com','202cb962ac59075b964b07152d234b70'),(4,'CR7','asd@mail.ru','202cb962ac59075b964b07152d234b70'),(5,'CR7','asd@mail.ru','202cb962ac59075b964b07152d234b70'),(6,'YevhenJon','asd@mail.ua','43cca4b3de2097b9558efefd0ecc3588'),(7,'JonJones','jon@mail','202cb962ac59075b964b07152d234b70'),(8,'LeoJones','jonleo@mail','202cb962ac59075b964b07152d234b70'),(9,'AsdAsd','asd@m','202cb962ac59075b964b07152d234b70'),(10,'JonJones','steamgrysha1n@gmail.com','202cb962ac59075b964b07152d234b70'),(11,'LeoRonaldo','moxoronb@mail.ua','46f94c8de14fb36680850768ff1b7f2a'),(12,'YevhenHryshko','steamgryshan@gmail.com','76d80224611fc919a5d54f0ff9fba446'),(13,'AsdHryshko','asd@qwe','cffbad68bb97a6c3f943538f119c992c'),(14,'JonJones','asd@qwe','efe6398127928f1b2e9ef3207fb82663'),(15,'YevhenHryshko','asd@mail.ua','5fa72358f0b4fb4f2c5d7de8c9a41846'),(16,'AlexSinple','example@example.com','76d80224611fc919a5d54f0ff9fba446'),(17,'Asd12','gryshan@gmail.com','7815696ecbf1c96e6894b779456d330e'),(18,'JonJon','steamgrysha1n@gmail.com','0f98df87c7440c045496f705c7295344'),(19,'Leo12','asd@qwe','4297f44b13955235245b2497399d7a93'),(20,'AsdJon','steamgrysha1n@gmail.com','5fa72358f0b4fb4f2c5d7de8c9a41846'),(21,'Asd7','asd@qwe','202cb962ac59075b964b07152d234b70'),(22,'AsdJones','asd@mail.ua','76d80224611fc919a5d54f0ff9fba446'),(23,'Yevhen7','asd@qwe','202cb962ac59075b964b07152d234b70'),(24,'YevhenHryshko','asd@mail.ua','0f98df87c7440c045496f705c7295344'),(25,'','','d41d8cd98f00b204e9800998ecf8427e'),(26,'Asd12','asd@mail.ua','24113791d2218cb84c9f0462e91596ef'),(27,'LeoAsd','asd@mail.ru','24113791d2218cb84c9f0462e91596ef'),(28,'CRAsd','steamgryshan@gmail.com','24113791d2218cb84c9f0462e91596ef'),(29,'Yevhen7','asd@mail.ua','2e1b53afa9ae8b6c43ebd0cd36b5c616');
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

-- Dump completed on 2021-06-09 16:03:02
