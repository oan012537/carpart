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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
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
  UNIQUE KEY `brand_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'B1','ABARTH','ABARTH','ABARTH.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(2,'B2','ALFA ROMEO','ALFA ROMEO','ALFA ROMEO.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(3,'B3','ASTON MARTIN','ASTON MARTIN','ASTON MARTIN.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(4,'B4','AUDI','AUDI','AUDI.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(5,'B5','BENTLEY','BENTLEY','BENTLEY.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(6,'B6','BMW','BMW','BMW.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(7,'B7','BYD','BYD','BYD.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(8,'B8','CHANGAN','CHANGAN','CHANGAN.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(9,'B9','CHERY','CHERY','CHERY.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(10,'B10','CHEVROLET','CHEVROLET','CHEVROLET.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(11,'B11','CHRYSLER','CHRYSLER','CHRYSLER.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(12,'B12','CITROEN','CITROEN','CITROEN.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(13,'B13','DAEWOO','DAEWOO','DAEWOO.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(14,'B14','DAIHATSU','DAIHATSU','DAIHATSU.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(15,'B15','DFM','DFM','DFM.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(16,'B16','DODGE','DODGE','DODGE.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(17,'B17','DONGFENG','DONGFENG','DONGFENG.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(18,'B18','FERRARI','FERRARI','FERRARI.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(19,'B19','FIAT','FIAT','FIAT.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(20,'B20','FOMM','FOMM','FOMM.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(21,'B21','FORD','FORD','FORD.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(22,'B22','FOTON','FOTON','FOTON.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(23,'B23','FAW','FAW','FAW.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(24,'B24','GMC','GMC','GMC.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(25,'B25','HINO','HINO','HINO.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(26,'B26','HOLDEN','HOLDEN','HOLDEN.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(27,'B27','HONDA','HONDA','HONDA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(28,'B28','HUMMER','HUMMER','HUMMER.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(29,'B29','HYUNDAI','HYUNDAI','HYUNDAI.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(30,'B30','Infiniti','Infiniti','Infiniti.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(31,'B31','ISUZU','ISUZU','ISUZU.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(32,'B32','JAC','JAC','JAC.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(33,'B33','JAGUAR','JAGUAR','JAGUAR.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(34,'B34','JEEP','JEEP','JEEP.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(35,'B35','KIA','KIA','KIA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(36,'B36','LAMBORGHINI','LAMBORGHINI','LAMBORGHINI.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(37,'B37','LAND ROVER','LAND ROVER','LAND ROVER.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(38,'B38','LEXUS','LEXUS','LEXUS.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(39,'B39','LOTUS','LOTUS','LOTUS.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(40,'B40','MAN','MAN','MAN.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(41,'B41','MASERATI','MASERATI','MASERATI.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(42,'B42','Maxus','Maxus','Maxus.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(43,'B43','MAZDA','MAZDA','MAZDA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(44,'B44','MCLAREN','MCLAREN','MCLAREN.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(45,'B45','MERCEDES-BENZ','MERCEDES-BENZ','MERCEDES-BENZ.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(46,'B46','Mercedes-Maybach','Mercedes-Maybach','Mercedes-Maybach.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(47,'B47','MG','MG','MG.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(48,'B48','MINI','MINI','MINI.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(49,'B49','MITSUBISHI','MITSUBISHI','MITSUBISHI.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(50,'B50','MITSUOKA','MITSUOKA','MITSUOKA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(51,'B51','MOKE','MOKE','MOKE.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(52,'B52','NAZA','NAZA','NAZA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(53,'B53','NISSAN','NISSAN','NISSAN.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(54,'B54','OPEL','OPEL','OPEL.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(55,'B55','PERODUA','PERODUA','PERODUA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(56,'B56','PEUGEOT','PEUGEOT','PEUGEOT.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(57,'B57','PORSCHE','PORSCHE','PORSCHE.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(58,'B58','PROTON','PROTON','PROTON.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(59,'B59','RANGE ROVER','RANGE ROVER','RANGE ROVER.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(60,'B60','RENAULT','RENAULT','RENAULT.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(61,'B61','ROLLS-ROYCE','ROLLS-ROYCE','ROLLS-ROYCE.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(62,'B62','ROVER','ROVER','ROVER.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(63,'B63','SAAB','SAAB','SAAB.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(64,'B64','SCANIA','SCANIA','SCANIA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(65,'B65','SEAT','SEAT','SEAT.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(66,'B66','SHINERY','SHINERY','SHINERY.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(67,'B67','SKODA','SKODA','SKODA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(68,'B68','SMART','SMART','SMART.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(69,'B69','SPYKER','SPYKER','SPYKER.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(70,'B70','SSANGYONG','SSANGYONG','SSANGYONG.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(71,'B71','STEYR','STEYR','STEYR.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(72,'B72','SUBARU','SUBARU','SUBARU.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(73,'B73','SUZUKI','SUZUKI','SUZUKI.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(74,'B74','TATA','TATA','TATA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(75,'B75','Thairung','Thairung','Thairung .png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(76,'B76','TESLA','TESLA','TESLA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(77,'B77','TOYOTA','TOYOTA','TOYOTA.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(78,'B78','UD TRUCK','UD TRUCK','UD TRUCK.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(79,'B79','VOLKSWAGEN','VOLKSWAGEN','VOLKSWAGEN.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(80,'B80','VOLVO','VOLVO','VOLVO.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05'),(81,'B81','Wuling','Wuling','Wuling.png.png',1,'oan','oan','2022-06-30 17:39:18','2022-06-30 20:48:05');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-01  9:40:13
