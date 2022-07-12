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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int unsigned NOT NULL,
  `model_id` int unsigned NOT NULL,
  `sub_model_id` int unsigned NOT NULL,
  `issue_year_id` int unsigned NOT NULL,
  `category_id` int unsigned NOT NULL,
  `sub_category_id` int unsigned NOT NULL,
  `sub_sub_category_id` int unsigned NOT NULL,
  `product_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_th` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trading_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maker` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_original_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vin_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_model_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_model_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trim` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_warranty` tinyint(1) DEFAULT NULL,
  `term_and_condition` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` decimal(12,2) NOT NULL,
  `commission` decimal(12,2) DEFAULT NULL,
  `revenue` decimal(12,2) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `status_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salesman_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_by` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_product_code_unique` (`product_code`),
  KEY `products_brand_id_foreign` (`brand_id`),
  KEY `products_model_id_foreign` (`model_id`),
  KEY `products_sub_model_id_foreign` (`sub_model_id`),
  KEY `products_issue_year_id_foreign` (`issue_year_id`),
  KEY `products_category_id_foreign` (`category_id`),
  KEY `products_sub_category_id_foreign` (`sub_category_id`),
  KEY `products_sub_sub_category_id_foreign` (`sub_sub_category_id`),
  CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_issue_year_id_foreign` FOREIGN KEY (`issue_year_id`) REFERENCES `issue_years` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_sub_model_id_foreign` FOREIGN KEY (`sub_model_id`) REFERENCES `sub_models` (`id`) ON DELETE CASCADE,
  CONSTRAINT `products_sub_sub_category_id_foreign` FOREIGN KEY (`sub_sub_category_id`) REFERENCES `sub_sub_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,2,2,2,2,1,1,1,'1','second','apple',NULL,'apl','Genuine',NULL,'apl-0001','Good','ap-0001','234','567','789','gray','white',1,'xxxxxxxxxxxxxxx',10002.00,NULL,NULL,NULL,NULL,NULL,NULL,'night','night','2022-07-03 11:24:45','2022-07-03 11:24:45'),(2,2,2,2,2,1,1,1,'2','second','orange','orange','org','Genuine',NULL,'org-0001','Fair','or-0001','235','568','780','white','blue',1,'xxxxxxxxxxxxxxxxxxxx',10001.00,NULL,NULL,NULL,NULL,NULL,NULL,'night','night','2022-07-03 11:40:10','2022-07-03 11:40:10'),(4,2,2,2,2,1,1,3,'3','second','banana','banana','bana','Genuine',NULL,'ban-0001','Poor','ba-0001','236','569','791','white','red',1,'xxxxxxxxxxx',13000.00,NULL,NULL,NULL,NULL,NULL,NULL,'night','night','2022-07-03 11:45:28','2022-07-03 11:45:28'),(5,2,2,2,2,1,1,4,'4','second','mango','mango','man','Genuine',NULL,'man-0001','Excellent','ma-0001','244','577','799','green','yellow',1,'xxxxxxxxxxxxxx',5000.00,NULL,NULL,NULL,NULL,NULL,NULL,'night','night','2022-07-03 11:48:22','2022-07-03 11:48:22'),(6,2,2,2,2,1,1,5,'5','second','coconut','coconut','coco','OEM',NULL,'coco-0001','Poor','co-0001','334','667','889','white','green',1,'xxxxxxxxx',4001.00,NULL,NULL,NULL,NULL,NULL,NULL,'night','night','2022-07-03 11:53:46','2022-07-03 11:53:46'),(7,2,2,2,2,1,1,5,'6','second','watermelon','watermelon','atm','Genuine',NULL,'wtm-0001','Excellent','wt-0001','234','567','789','gray','white',1,'xxxxxxxxx',10002.00,NULL,NULL,NULL,NULL,NULL,1,'night','night','2022-07-03 12:20:39','2022-07-03 12:20:39'),(8,2,2,2,2,1,1,5,'7','second','pineapple','pineapple','pin','Genuine',NULL,'pin-0001','Good','pin-0001','234',NULL,'789','gray','white',1,'xxxxxxxxxxxxxxxx',10000.00,NULL,NULL,NULL,NULL,NULL,1,'night','night','2022-07-03 12:27:31','2022-07-03 12:27:31'),(9,2,2,2,2,1,1,7,'932558','second','CANTALOUPE','CANTALOUPE','can','Genuine',NULL,'can-0001','Excellent','ca-0001','234','567','789','gray','white',1,'xxxxxxxxxxxxxxxx',10000.00,NULL,NULL,NULL,NULL,NULL,1,'night','night','2022-07-03 13:14:17','2022-07-03 13:14:17'),(10,2,2,2,2,1,1,6,'087512','second','apple','apple','apl','Genuine',NULL,'apl-0001','Fair','ap-0001','234','567','789','gray','white',1,'term and condition',10000.00,NULL,NULL,NULL,NULL,NULL,1,'night','night','2022-07-07 06:42:25','2022-07-07 06:42:25');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-08 12:37:02