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
-- Table structure for table `sub_models`
--

DROP TABLE IF EXISTS `sub_models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sub_models` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int unsigned NOT NULL,
  `model_id` int unsigned NOT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_th` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_by` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sub_model_brand_id_foreign` (`brand_id`),
  KEY `sub_model_model_id_foreign` (`model_id`),
  CONSTRAINT `sub_model_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sub_model_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_models`
--

LOCK TABLES `sub_models` WRITE;
/*!40000 ALTER TABLE `sub_models` DISABLE KEYS */;
INSERT INTO `sub_models` VALUES (1,1,2,'147','Hatchback 2 Doors  2.0','Hatchback 2 Doors  2.0',NULL,1,'oan','oan','2022-06-30 17:39:09','2022-06-30 17:39:09'),(2,2,2,'147','Hatchback 4 Doors  2.0','Hatchback 4 Doors  2.0',NULL,1,'oan','oan','2022-06-30 17:39:09','2022-06-30 17:39:09'),(3,3,2,'156','Sedan 4 Doors  2.0','Sedan 4 Doors  2.0',NULL,1,'oan','oan','2022-06-30 17:39:09','2022-06-30 17:39:09'),(4,4,2,'156','Sedan 4 Doors Platino 2.0','Sedan 4 Doors Platino 2.0',NULL,1,'oan','oan','2022-06-30 17:39:09','2022-06-30 17:39:09'),(5,5,2,'156','Sedan 4 Doors Speciale I 2.0','Sedan 4 Doors Speciale I 2.0',NULL,1,'oan','oan','2022-06-30 17:39:09','2022-06-30 17:39:09'),(6,6,2,'156','Sedan 4 Doors Speciale II 2.0','Sedan 4 Doors Speciale II 2.0',NULL,1,'oan','oan','2022-06-30 17:39:09','2022-06-30 17:39:09'),(7,7,2,'156','Wagon 4 Doors Sport 2.0','Wagon 4 Doors Sport 2.0',NULL,1,'oan','oan','2022-06-30 17:39:09','2022-06-30 17:39:09'),(8,8,2,'159','Sedan 4 Doors  2.2','Sedan 4 Doors  2.2',NULL,1,'oan','oan','2022-06-30 17:39:09','2022-06-30 17:39:09');
/*!40000 ALTER TABLE `sub_models` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-01  2:49:48
