-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: carparts
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `issue_years`
--

DROP TABLE IF EXISTS `issue_years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issue_years` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `sub_model_id` int unsigned NOT NULL,
  `from_year` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_year` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `master_data` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_by` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `issue_years_sub_model_id_foreign` (`sub_model_id`),
  CONSTRAINT `issue_years_sub_model_id_foreign` FOREIGN KEY (`sub_model_id`) REFERENCES `sub_models` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue_years`
--

LOCK TABLES `issue_years` WRITE;
/*!40000 ALTER TABLE `issue_years` DISABLE KEYS */;
INSERT INTO `issue_years` VALUES (1,1,'2003','2003','Thai data',1,'oan','oan','2022-06-30 17:39:03','2022-06-30 17:39:03'),(2,2,'2003','2003','Thai data',1,'oan','oan','2022-06-30 17:39:03','2022-06-30 17:39:03'),(3,3,'2007','2007','Thai data',1,'oan','oan','2022-06-30 17:39:03','2022-06-30 17:39:03'),(4,4,'2009','2009','Thai data',1,'oan','oan','2022-06-30 17:39:03','2022-06-30 17:39:03'),(5,5,'2004','2004','Thai data',1,'oan','oan','2022-06-30 17:39:03','2022-06-30 17:39:03'),(6,6,'2010','2010','Thai data',1,'oan','oan','2022-06-30 17:39:03','2022-06-30 17:39:03'),(7,7,'2004','2004','Thai data',1,'oan','oan','2022-06-30 17:39:03','2022-06-30 17:39:03'),(8,8,'2010','2010','Thai data',1,'oan','oan','2022-06-30 17:39:03','2022-06-30 17:39:03');
/*!40000 ALTER TABLE `issue_years` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-01  2:49:49
