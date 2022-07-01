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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
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
  UNIQUE KEY `categories_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'A1','อะไหล่ตัวถังและชิ้นส่วนภายนอก','Body parts and Exterior parts',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(2,'A2','อะไหล่ภายในรถยนต์','Car interior parts',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(3,'A3','ช่วงล่างรถยนต์','Car suspension',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(4,'A4','ระบบเครื่องยนต์และอะไหล่รอบเครื่องยนต์','Engine system&engine cycle parts',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(5,'A5','ระบบเกียร์,คลัตช์และระบบส่งกำลัง','Gears,Clutch and Transmission system',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(6,'A6','ระบบเบรค','Brake System',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(7,'A7','ระบบความเย็นและความร้อน','Cooling and Heating system',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(8,'A8','ระบบไฟฟ้าและอุปกรณ์ส่องสว่าง','Electrical systems and lighting equipment',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(9,'A9','ล้อและยางรถยนต์','Wheels and tires',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(10,'A10','แบริ่ง-ลูกปืน-ตลับลูกปืน','Bearings - Ball bearings - Ball bearings',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57'),(11,'A11','ไส้กรอง','Filter',NULL,1,'oan','oan','2022-06-30 17:38:57','2022-06-30 17:38:57');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
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
