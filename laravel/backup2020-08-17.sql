-- MySQL dump 10.13  Distrib 8.0.20, for Linux (x86_64)
--
-- Host: localhost    Database: homestead
-- ------------------------------------------------------
-- Server version	8.0.20-0ubuntu0.20.04.1

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
-- Table structure for table `abilities`
--

DROP TABLE IF EXISTS `abilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abilities` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity_id` int unsigned DEFAULT NULL,
  `entity_type` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `only_owned` tinyint(1) NOT NULL DEFAULT '0',
  `scope` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `abilities_unique_index` (`name`,`entity_id`,`entity_type`,`only_owned`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abilities`
--

LOCK TABLES `abilities` WRITE;
/*!40000 ALTER TABLE `abilities` DISABLE KEYS */;
INSERT INTO `abilities` VALUES (1,'manage users',NULL,NULL,NULL,0,NULL,'2017-11-11 14:34:21','2017-11-20 03:50:21'),(2,'manage sites',NULL,NULL,NULL,0,NULL,'2017-11-20 03:50:30','2017-11-20 03:50:30'),(3,'view data analytics',NULL,NULL,NULL,0,NULL,'2017-11-20 03:50:37','2017-11-20 03:50:37'),(4,'view dashboard',NULL,NULL,NULL,0,NULL,'2017-11-20 03:50:43','2017-11-20 03:50:43'),(5,'view call records',NULL,NULL,NULL,0,NULL,'2017-11-20 03:51:02','2018-06-20 08:15:20'),(6,'manage site',NULL,NULL,NULL,0,NULL,'2017-11-20 03:51:11','2017-11-20 03:51:11'),(7,'view deleted files',NULL,NULL,NULL,0,NULL,'2017-12-02 17:24:13','2017-12-02 17:24:13'),(8,'administrate users','Administrate users',NULL,NULL,0,NULL,'2018-04-04 15:30:02','2018-04-04 15:30:02'),(9,'administrate sites','Administrate sites',NULL,NULL,0,NULL,'2018-04-04 15:30:13','2018-04-04 15:30:13'),(10,'create call files','Create call files',NULL,NULL,0,NULL,'2018-06-20 08:16:15','2018-06-20 08:16:15'),(11,'add call records','Create call records',NULL,NULL,0,NULL,'2018-06-20 08:18:05','2018-06-20 08:20:00'),(12,'add call notes','Create call notes',NULL,NULL,0,NULL,'2018-06-20 08:18:14','2018-06-20 08:20:08'),(13,'manage incidents','Manage incidents',NULL,NULL,0,NULL,'2018-06-24 03:33:24','2018-06-24 03:33:24'),(14,'manage templates','Manage templates',NULL,NULL,0,NULL,'2018-07-07 08:42:42','2018-07-07 08:42:42');
/*!40000 ALTER TABLE `abilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assigned_roles`
--

DROP TABLE IF EXISTS `assigned_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assigned_roles` (
  `role_id` int unsigned NOT NULL,
  `entity_id` int unsigned NOT NULL,
  `entity_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope` int DEFAULT NULL,
  KEY `assigned_roles_entity_id_entity_type_index` (`entity_id`,`entity_type`),
  KEY `assigned_roles_role_id_index` (`role_id`),
  CONSTRAINT `assigned_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assigned_roles`
--

LOCK TABLES `assigned_roles` WRITE;
/*!40000 ALTER TABLE `assigned_roles` DISABLE KEYS */;
INSERT INTO `assigned_roles` VALUES (3,7,'App\\User',NULL),(3,9,'App\\User',NULL),(1,4,'App\\User',NULL),(3,4,'App\\User',NULL),(1,1,'App\\User',NULL),(2,2,'App\\User',NULL),(3,3,'App\\User',NULL),(4,5,'App\\User',NULL),(3,6,'App\\User',NULL),(3,13,'App\\User',NULL),(3,14,'App\\User',NULL),(3,17,'App\\User',NULL),(3,19,'App\\User',NULL),(5,19,'App\\User',NULL),(3,25,'App\\User',NULL),(5,25,'App\\User',NULL),(1,30,'App\\User',NULL),(2,33,'App\\User',NULL),(3,33,'App\\User',NULL),(5,33,'App\\User',NULL),(3,39,'App\\User',NULL),(3,40,'App\\User',NULL),(3,41,'App\\User',NULL),(3,42,'App\\User',NULL),(3,43,'App\\User',NULL),(3,44,'App\\User',NULL),(3,45,'App\\User',NULL),(3,46,'App\\User',NULL),(3,47,'App\\User',NULL),(3,48,'App\\User',NULL),(3,49,'App\\User',NULL),(5,49,'App\\User',NULL),(4,50,'App\\User',NULL),(4,51,'App\\User',NULL),(5,51,'App\\User',NULL),(2,8,'App\\User',NULL),(3,8,'App\\User',NULL),(5,8,'App\\User',NULL),(2,52,'App\\User',NULL),(3,52,'App\\User',NULL),(5,52,'App\\User',NULL),(2,53,'App\\User',NULL),(3,53,'App\\User',NULL),(5,53,'App\\User',NULL),(2,54,'App\\User',NULL),(3,54,'App\\User',NULL),(5,54,'App\\User',NULL),(2,55,'App\\User',NULL),(3,55,'App\\User',NULL),(5,55,'App\\User',NULL),(2,56,'App\\User',NULL),(3,56,'App\\User',NULL),(5,56,'App\\User',NULL),(2,57,'App\\User',NULL),(3,57,'App\\User',NULL),(5,57,'App\\User',NULL),(2,58,'App\\User',NULL),(3,58,'App\\User',NULL),(5,58,'App\\User',NULL),(1,18,'App\\User',NULL),(3,18,'App\\User',NULL),(5,18,'App\\User',NULL);
/*!40000 ALTER TABLE `assigned_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_sets`
--

DROP TABLE IF EXISTS `data_sets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_sets` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_sets`
--

LOCK TABLES `data_sets` WRITE;
/*!40000 ALTER TABLE `data_sets` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_sets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meta`
--

DROP TABLE IF EXISTS `meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meta` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `metable_id` int unsigned NOT NULL,
  `metable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `meta_metable_id_index` (`metable_id`),
  KEY `meta_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meta`
--

LOCK TABLES `meta` WRITE;
/*!40000 ALTER TABLE `meta` DISABLE KEYS */;
INSERT INTO `meta` VALUES (4,1,'App\\TblSite','print-format','user-selectable'),(5,1,'App\\TblSite','site-name','Test Site Name'),(6,4,'App\\User','print-format','medical'),(7,1,'App\\TblSite','logo','sites/1/logo_5c262a6361340.png'),(8,18,'App\\User','print-format','medical'),(9,21,'App\\User','print-format','standard'),(10,20,'App\\User','print-format','standard'),(11,22,'App\\User','print-format','standard'),(12,16,'App\\User','print-format','standard'),(13,4,'App\\TblSite','print-format','user-selectable'),(14,31,'App\\User','print-format','standard'),(15,17,'App\\User','print-format','medical'),(16,13,'App\\User','print-format','standard'),(17,5,'App\\TblSite','print-format','user-selectable'),(18,8,'App\\User','print-format','standard'),(19,5,'App\\TblSite','logo','sites/5/logo_5c5e8d3981a1a.png'),(20,28,'App\\User','print-format','standard'),(21,10,'App\\User','print-format','standard'),(22,30,'App\\User','theme','ocean'),(23,18,'App\\User','theme','bootstrap'),(24,17,'App\\User','theme','magenta'),(25,1,'App\\User','print-format','standard'),(26,1,'App\\User','theme','bootstrap'),(27,9,'App\\User','print-format','standard'),(28,9,'App\\User','theme','bootstrap'),(29,20,'App\\User','theme','bootstrap'),(30,29,'App\\User','print-format','standard'),(31,29,'App\\User','theme','bootstrap'),(32,31,'App\\User','theme','bootstrap'),(33,37,'App\\User','print-format','standard'),(34,37,'App\\User','theme','bootstrap'),(35,13,'App\\User','theme','bootstrap'),(36,14,'App\\User','print-format','standard'),(37,14,'App\\User','theme','bootstrap'),(38,19,'App\\User','print-format','standard'),(39,19,'App\\User','theme','bootstrap'),(40,25,'App\\User','print-format','standard'),(41,25,'App\\User','theme','bootstrap'),(42,33,'App\\User','print-format','standard'),(43,33,'App\\User','theme','bootstrap'),(44,4,'App\\User','theme','bootstrap'),(45,3,'App\\User','print-format','standard'),(46,3,'App\\User','theme','bootstrap'),(47,2,'App\\User','print-format','standard'),(48,2,'App\\User','theme','bootstrap'),(49,5,'App\\User','print-format','standard'),(50,5,'App\\User','theme','bootstrap'),(51,49,'App\\User','theme','bootstrap'),(52,8,'App\\TblSite','print-format','user-selectable'),(53,7,'App\\TblSite','print-format','user-selectable'),(54,7,'App\\TblSite','logo','sites/7/logo_5c262a85ea98a.png'),(55,8,'App\\TblSite','logo','sites/8/logo_5c26284ff21d4.png'),(56,8,'App\\TblSite','logo-jpg','sites/8/logo_5c26284ff21d4.jpg'),(57,1,'App\\TblSite','logo-jpg','sites/1/logo_5c262a6361340.jpg'),(58,7,'App\\TblSite','logo-jpg','sites/7/logo_5c262a85ea98a.jpg'),(59,26,'App\\User','theme','bootstrap'),(60,30,'App\\User','print-format','standard'),(61,39,'App\\User','print-format','standard'),(62,39,'App\\User','theme','bootstrap'),(63,40,'App\\User','print-format','standard'),(64,40,'App\\User','theme','bootstrap'),(65,41,'App\\User','print-format','standard'),(66,41,'App\\User','theme','bootstrap'),(67,42,'App\\User','print-format','standard'),(68,42,'App\\User','theme','bootstrap'),(69,43,'App\\User','print-format','standard'),(70,43,'App\\User','theme','bootstrap'),(71,44,'App\\User','print-format','standard'),(72,44,'App\\User','theme','bootstrap'),(73,45,'App\\User','print-format','standard'),(74,45,'App\\User','theme','bootstrap'),(75,46,'App\\User','print-format','standard'),(76,46,'App\\User','theme','bootstrap'),(77,47,'App\\User','print-format','standard'),(78,47,'App\\User','theme','bootstrap'),(79,48,'App\\User','print-format','standard'),(80,48,'App\\User','theme','bootstrap'),(81,49,'App\\User','print-format','standard'),(82,50,'App\\User','theme','bootstrap'),(83,8,'App\\User','theme','bootstrap'),(84,10,'App\\TblSite','logo','sites/10/logo_5c4fbf13ebca0.png'),(85,10,'App\\TblSite','logo-jpg','sites/10/logo_5c4fbf13ebca0.jpg'),(86,52,'App\\User','theme','bootstrap'),(87,5,'App\\TblSite','logo-jpg','sites/5/logo_5c5e8d3981a1a.jpg');
/*!40000 ALTER TABLE `meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_07_13_082418_create_bouncer_tables',1),(4,'2017_11_12_201900_enable_soft_deletes',2),(5,'2015_08_25_172600_create_settings_table',3),(6,'2014_08_15_180252_create_meta_table',4),(7,'2020_08_14_084426_create_abilities_table',0),(8,'2020_08_14_084426_create_assigned_roles_table',0),(9,'2020_08_14_084426_create_meta_table',0),(10,'2020_08_14_084426_create_password_resets_table',0),(11,'2020_08_14_084426_create_permissions_table',0),(12,'2020_08_14_084426_create_roles_table',0),(13,'2020_08_14_084426_create_tblISOtoCountry_table',0),(14,'2020_08_14_084426_create_tblOrganisation_table',0),(15,'2020_08_14_084426_create_tblSite_table',0),(16,'2020_08_14_084426_create_tblUser_table',0),(17,'2020_08_14_084426_create_users_table',0),(18,'2020_08_14_084427_add_foreign_keys_to_assigned_roles_table',0),(19,'2020_08_14_084427_add_foreign_keys_to_permissions_table',0),(20,'2020_08_14_084427_add_foreign_keys_to_tblOrganisation_table',0),(21,'2020_08_14_084427_add_foreign_keys_to_tblSite_table',0),(22,'2020_08_14_084427_add_foreign_keys_to_tblUser_table',0),(23,'2020_07_18_065520_create_tblISOtoCountry_table',5),(24,'2020_07_19_043233_create_tblAgentReference_table',5),(25,'2020_07_19_044007_create_tblOrganisation_table',6),(26,'2020_07_19_044008_add_foreign_keys_to_tblOrganisation_table',7),(27,'2020_07_19_044027_create_tblSite_table',8),(28,'2020_07_19_044027_create_tblUser_table',8),(29,'2020_07_19_044028_add_foreign_keys_to_tblUser_table',8),(30,'2020_07_19_044421_add_foreign_keys_to_tblSite_table',8),(31,'2020_07_19_065520_create_tblSpecialistsAvail_table',8),(32,'2020_07_19_065522_add_foreign_keys_to_tblSpecialistsAvail_table',8),(33,'2020_07_21_065922_create_tblDashboardItem_table',8),(34,'2020_07_21_065923_add_foreign_keys_to_tblDashboardItem_table',8),(35,'2020_08_14_084508_teams',8),(36,'2020_08_04_000026_create_qa_topics_table',9),(37,'2020_08_04_000027_create_qa_messages_table',9),(38,'2020_08_04_081423_create_media_table',9),(39,'2020_08_14_090021_data_sets',9),(40,'2020_08_14_090035_subscriptions',9),(41,'2020_08_15_073544_update-users',10),(42,'2020_08_15_075112_create_organisation',11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organisations`
--

DROP TABLE IF EXISTS `organisations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organisations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `organisation_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organisation_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation_street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation_street_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisation_postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organisations`
--

LOCK TABLES `organisations` WRITE;
/*!40000 ALTER TABLE `organisations` DISABLE KEYS */;
/*!40000 ALTER TABLE `organisations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` int DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qa_messages`
--

DROP TABLE IF EXISTS `qa_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `qa_messages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` int unsigned NOT NULL,
  `sender_id` int unsigned NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `qa_messages_topic_id_foreign` (`topic_id`),
  KEY `qa_messages_sender_id_foreign` (`sender_id`),
  CONSTRAINT `qa_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `qa_messages_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `qa_topics` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qa_messages`
--

LOCK TABLES `qa_messages` WRITE;
/*!40000 ALTER TABLE `qa_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `qa_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qa_topics`
--

DROP TABLE IF EXISTS `qa_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `qa_topics` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` int unsigned NOT NULL,
  `receiver_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `qa_topics_creator_id_foreign` (`creator_id`),
  KEY `qa_topics_receiver_id_foreign` (`receiver_id`),
  CONSTRAINT `qa_topics_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `qa_topics_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qa_topics`
--

LOCK TABLES `qa_topics` WRITE;
/*!40000 ALTER TABLE `qa_topics` DISABLE KEYS */;
/*!40000 ALTER TABLE `qa_topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int unsigned DEFAULT NULL,
  `scope` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrator',NULL,NULL,NULL,'2017-11-11 14:34:21','2017-11-11 14:34:21'),(2,'site_administrator',NULL,NULL,NULL,'2017-11-11 14:34:21','2017-11-11 14:34:21'),(3,'user',NULL,NULL,NULL,'2017-11-11 14:34:21','2017-11-11 14:34:21'),(4,'specialist',NULL,NULL,NULL,'2017-11-20 03:52:28','2017-11-20 03:52:28'),(5,'researcher',NULL,NULL,NULL,'2017-11-20 03:52:37','2017-11-20 03:52:37');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `subscription_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_start` date NOT NULL,
  `duration` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblAgentReference`
--

DROP TABLE IF EXISTS `tblAgentReference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblAgentReference` (
  `idtblAgentReference` int NOT NULL AUTO_INCREMENT,
  `tblAgentCategory_idtblAgentCategory` int DEFAULT NULL,
  `AgentReferenceName` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AgentReferenceUrl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AgentReferenceSource` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idtblAgentReference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblAgentReference`
--

LOCK TABLES `tblAgentReference` WRITE;
/*!40000 ALTER TABLE `tblAgentReference` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblAgentReference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblDashboardItem`
--

DROP TABLE IF EXISTS `tblDashboardItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblDashboardItem` (
  `idDashboardItem` int NOT NULL,
  `id_Site` int NOT NULL,
  `loc_x` int DEFAULT NULL,
  `loc_y` int DEFAULT NULL,
  `width` int DEFAULT NULL,
  `height` int DEFAULT NULL,
  `QueryName` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idDashboardItem`),
  KEY `fk_tblDashboardItem_tblSite1_idx1` (`id_Site`),
  CONSTRAINT `fk_tblDashboardItem_tblSite1` FOREIGN KEY (`id_Site`) REFERENCES `tblSite` (`idtblSite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblDashboardItem`
--

LOCK TABLES `tblDashboardItem` WRITE;
/*!40000 ALTER TABLE `tblDashboardItem` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblDashboardItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblISOtoCountry`
--

DROP TABLE IF EXISTS `tblISOtoCountry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblISOtoCountry` (
  `CountryName` varchar(64) DEFAULT NULL,
  `ISOAlpha2` varchar(2) NOT NULL,
  `ISOAlpha3` varchar(3) DEFAULT NULL,
  `ISO_UN_M49` int DEFAULT NULL,
  PRIMARY KEY (`ISOAlpha2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblISOtoCountry`
--

LOCK TABLES `tblISOtoCountry` WRITE;
/*!40000 ALTER TABLE `tblISOtoCountry` DISABLE KEYS */;
INSERT INTO `tblISOtoCountry` VALUES ('Andorra','AD','AND',20),('United Arab Emirates','AE','ARE',784),('Afghanistan','AF','AFG',4),('Antigua and Barbuda','AG','ATG',28),('Anguilla','AI','AIA',660),('Albania','AL','ALB',8),('Armenia','AM','ARM',51),('Netherlands Antilles','AN','ANT',530),('Angola','AO','AGO',24),('Antarctica','AQ','ATA',10),('Argentina','AR','ARG',32),('American Samoa','AS','ASM',16),('Austria','AT','AUT',40),('Australia','AU','AUS',36),('Aruba','AW','ABW',533),('Aland Islands','AX','ALA',248),('Azerbaijan','AZ','AZE',31),('Bosnia and Herzegovina','BA','BIH',70),('Barbados','BB','BRB',52),('Bangladesh','BD','BGD',50),('Belgium','BE','BEL',56),('Burkina Faso','BF','BFA',854),('Bulgaria','BG','BGR',100),('Bahrain','BH','BHR',48),('Burundi','BI','BDI',108),('Benin','BJ','BEN',204),('Saint-Barthélemy','BL','BLM',652),('Bermuda','BM','BMU',60),('Brunei Darussalam','BN','BRN',96),('Bolivia','BO','BOL',68),('Brazil','BR','BRA',76),('Bahamas','BS','BHS',44),('Bhutan','BT','BTN',64),('Bouvet Island','BV','BVT',74),('Botswana','BW','BWA',72),('Belarus','BY','BLR',112),('Belize','BZ','BLZ',84),('Canada','CA','CAN',124),('Cocos (Keeling) Islands','CC','CCK',166),('Congo, (Kinshasa)','CD','COD',180),('Central African Republic','CF','CAF',140),('Congo (Brazzaville)','CG','COG',178),('Switzerland','CH','CHE',756),('Côte d\'Ivoire','CI','CIV',384),('Cook Islands','CK','COK',184),('Chile','CL','CHL',152),('Cameroon','CM','CMR',120),('China','CN','CHN',156),('Colombia','CO','COL',170),('Costa Rica','CR','CRI',188),('Cuba','CU','CUB',192),('Cape Verde','CV','CPV',132),('Christmas Island','CX','CXR',162),('Cyprus','CY','CYP',196),('Czech Republic','CZ','CZE',203),('Germany','DE','DEU',276),('Djibouti','DJ','DJI',262),('Denmark','DK','DNK',208),('Dominica','DM','DMA',212),('Dominican Republic','DO','DOM',214),('Algeria','DZ','DZA',12),('Ecuador','EC','ECU',218),('Estonia','EE','EST',233),('Egypt','EG','EGY',818),('Western Sahara','EH','ESH',732),('Eritrea','ER','ERI',232),('Spain','ES','ESP',724),('Ethiopia','ET','ETH',231),('Finland','FI','FIN',246),('Fiji','FJ','FJI',242),('Falkland Islands (Malvinas)','FK','FLK',238),('Micronesia, Federated States of','FM','FSM',583),('Faroe Islands','FO','FRO',234),('France','FR','FRA',250),('Gabon','GA','GAB',266),('United Kingdom','GB','GBR',826),('Grenada','GD','GRD',308),('Georgia','GE','GEO',268),('French Guiana','GF','GUF',254),('Guernsey','GG','GGY',831),('Ghana','GH','GHA',288),('Gibraltar','GI','GIB',292),('Greenland','GL','GRL',304),('Gambia','GM','GMB',270),('Guinea','GN','GIN',324),('Guadeloupe','GP','GLP',312),('Equatorial Guinea','GQ','GNQ',226),('Greece','GR','GRC',300),('South Georgia and the South Sandwich Islands','GS','SGS',239),('Guatemala','GT','GTM',320),('Guam','GU','GUM',316),('Guinea-Bissau','GW','GNB',624),('Guyana','GY','GUY',328),('Hong Kong, SAR China','HK','HKG',344),('Heard and Mcdonald Islands','HM','HMD',334),('Honduras','HN','HND',340),('Croatia','HR','HRV',191),('Haiti','HT','HTI',332),('Hungary','HU','HUN',348),('Indonesia','ID','IDN',360),('Ireland','IE','IRL',372),('Israel','IL','ISR',376),('Isle of Man','IM','IMN',833),('India','IN','IND',356),('British Indian Ocean Territory','IO','IOT',86),('Iraq','IQ','IRQ',368),('Iran, Islamic Republic of','IR','IRN',364),('Iceland','IS','ISL',352),('Italy','IT','ITA',380),('Jersey','JE','JEY',832),('Jamaica','JM','JAM',388),('Jordan','JO','JOR',400),('Japan','JP','JPN',392),('Kenya','KE','KEN',404),('Kyrgyzstan','KG','KGZ',417),('Cambodia','KH','KHM',116),('Kiribati','KI','KIR',296),('Comoros','KM','COM',174),('Saint Kitts and Nevis','KN','KNA',659),('Korea (North)','KP','PRK',408),('Korea (South)','KR','KOR',410),('Kuwait','KW','KWT',414),('Cayman Islands','KY','CYM',136),('Kazakhstan','KZ','KAZ',398),('Lao PDR','LA','LAO',418),('Lebanon','LB','LBN',422),('Saint Lucia','LC','LCA',662),('Liechtenstein','LI','LIE',438),('Sri Lanka','LK','LKA',144),('Liberia','LR','LBR',430),('Lesotho','LS','LSO',426),('Lithuania','LT','LTU',440),('Luxembourg','LU','LUX',442),('Latvia','LV','LVA',428),('Libya','LY','LBY',434),('Morocco','MA','MAR',504),('Monaco','MC','MCO',492),('Moldova','MD','MDA',498),('Montenegro','ME','MNE',499),('Saint-Martin (French part)','MF','MAF',663),('Madagascar','MG','MDG',450),('Marshall Islands','MH','MHL',584),('Macedonia, Republic of','MK','MKD',807),('Mali','ML','MLI',466),('Myanmar','MM','MMR',104),('Mongolia','MN','MNG',496),('Macao, SAR China','MO','MAC',446),('Northern Mariana Islands','MP','MNP',580),('Martinique','MQ','MTQ',474),('Mauritania','MR','MRT',478),('Montserrat','MS','MSR',500),('Malta','MT','MLT',470),('Mauritius','MU','MUS',480),('Maldives','MV','MDV',462),('Malawi','MW','MWI',454),('Mexico','MX','MEX',484),('Malaysia','MY','MYS',458),('Mozambique','MZ','MOZ',508),('Namibia','NA','NAM',516),('New Caledonia','NC','NCL',540),('Niger','NE','NER',562),('Norfolk Island','NF','NFK',574),('Nigeria','NG','NGA',566),('Nicaragua','NI','NIC',558),('Netherlands','NL','NLD',528),('Norway','NO','NOR',578),('Nepal','NP','NPL',524),('Nauru','NR','NRU',520),('Niue','NU','NIU',570),('New Zealand','NZ','NZL',554),('Oman','OM','OMN',512),('Panama','PA','PAN',591),('Peru','PE','PER',604),('French Polynesia','PF','PYF',258),('Papua New Guinea','PG','PNG',598),('Philippines','PH','PHL',608),('Pakistan','PK','PAK',586),('Poland','PL','POL',616),('Saint Pierre and Miquelon','PM','SPM',666),('Pitcairn','PN','PCN',612),('Puerto Rico','PR','PRI',630),('Palestinian Territory','PS','PSE',275),('Portugal','PT','PRT',620),('Palau','PW','PLW',585),('Paraguay','PY','PRY',600),('Qatar','QA','QAT',634),('Réunion','RE','REU',638),('Romania','RO','ROU',642),('Serbia','RS','SRB',688),('Russian Federation','RU','RUS',643),('Rwanda','RW','RWA',646),('Saudi Arabia','SA','SAU',682),('Solomon Islands','SB','SLB',90),('Seychelles','SC','SYC',690),('Sudan','SD','SDN',736),('Sweden','SE','SWE',752),('Singapore','SG','SGP',702),('Saint Helena','SH','SHN',654),('Slovenia','SI','SVN',705),('Svalbard and Jan Mayen Islands','SJ','SJM',744),('Slovakia','SK','SVK',703),('Sierra Leone','SL','SLE',694),('San Marino','SM','SMR',674),('Senegal','SN','SEN',686),('Somalia','SO','SOM',706),('Suriname','SR','SUR',740),('South Sudan','SS','SSD',728),('Sao Tome and Principe','ST','STP',678),('El Salvador','SV','SLV',222),('Syrian Arab Republic (Syria)','SY','SYR',760),('Swaziland','SZ','SWZ',748),('Turks and Caicos Islands','TC','TCA',796),('Chad','TD','TCD',148),('French Southern Territories','TF','ATF',260),('Togo','TG','TGO',768),('Thailand','TH','THA',764),('Tajikistan','TJ','TJK',762),('Tokelau','TK','TKL',772),('Timor-Leste','TL','TLS',626),('Turkmenistan','TM','TKM',795),('Tunisia','TN','TUN',788),('Tonga','TO','TON',776),('Turkey','TR','TUR',792),('Trinidad and Tobago','TT','TTO',780),('Tuvalu','TV','TUV',798),('Taiwan, Republic of China','TW','TWN',158),('Tanzania, United Republic of','TZ','TZA',834),('Ukraine','UA','UKR',804),('Uganda','UG','UGA',800),('US Minor Outlying Islands','UM','UMI',581),('United States of America','US','USA',840),('Uruguay','UY','URY',858),('Uzbekistan','UZ','UZB',860),('Holy See (Vatican City State)','VA','VAT',336),('Saint Vincent and Grenadines','VC','VCT',670),('Venezuela (Bolivarian Republic)','VE','VEN',862),('British Virgin Islands','VG','VGB',92),('Virgin Islands, US','VI','VIR',850),('Viet Nam','VN','VNM',704),('Vanuatu','VU','VUT',548),('Wallis and Futuna Islands','WF','WLF',876),('Samoa','WS','WSM',882),('Yemen','YE','YEM',887),('Mayotte','YT','MYT',175),('South Africa','ZA','ZAF',710),('Zambia','ZM','ZMB',894),('Zimbabwe','ZW','ZWE',716);
/*!40000 ALTER TABLE `tblISOtoCountry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblOrganisation`
--

DROP TABLE IF EXISTS `tblOrganisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblOrganisation` (
  `idtblOrganisation` int NOT NULL AUTO_INCREMENT,
  `tblISOtoCountry_ISOAlpha2` varchar(2) NOT NULL,
  `OrganisationName` varchar(128) DEFAULT NULL,
  `OrganisationState` varchar(45) DEFAULT NULL,
  `OrganisationStreet` varchar(128) DEFAULT NULL,
  `OrganisationStreet2` varchar(128) DEFAULT NULL,
  `OrganisationSuburb` varchar(45) DEFAULT NULL,
  `OrganisationPostcode` varchar(12) DEFAULT NULL,
  `OrganisationLatitude` decimal(10,8) DEFAULT NULL,
  `OrganisationLongitude` decimal(11,8) DEFAULT NULL,
  `GooglePlaceId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtblOrganisation`),
  KEY `fk_tblOrganisation_tblISOtoCountry1_idx` (`tblISOtoCountry_ISOAlpha2`),
  CONSTRAINT `fk_tblOrganisation_tblISOtoCountry1` FOREIGN KEY (`tblISOtoCountry_ISOAlpha2`) REFERENCES `tblISOtoCountry` (`ISOAlpha2`)
) ENGINE=InnoDB AUTO_INCREMENT=26718 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblOrganisation`
--

LOCK TABLES `tblOrganisation` WRITE;
/*!40000 ALTER TABLE `tblOrganisation` DISABLE KEYS */;
INSERT INTO `tblOrganisation` VALUES (1,'AU','WA Poisons Information Centre','WA','Hospital Ave',NULL,'Nedlands','6009',NULL,NULL,NULL),(3,'AU','Demo Site',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22973,'AU','Global PIC',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23232,'AU','Global PIC',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26670,'AU','WA Poisons Information Centre',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26674,'AU','Global PIC',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26687,'JM','CARPIN',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26700,'JM','Dev Site',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26713,'AU','Demo Site',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26714,'AU',NULL,NULL,NULL,NULL,NULL,NULL,-25.27439800,133.77513600,'ChIJ38WHZwf9KysRUhNblaFnglM'),(26715,'JM',NULL,'St. Andrew Parish',NULL,NULL,NULL,NULL,18.01787430,-76.80990410,'ChIJodLehJc_244RQK-3q78h8yQ'),(26716,'SA',NULL,'Riyadh Province',NULL,NULL,NULL,NULL,24.71355170,46.67529570,'ChIJmZNIDYkDLz4R1Z_nmBxNl7o'),(26717,'IT',NULL,'Lazio',NULL,NULL,NULL,NULL,41.90278350,12.49636550,'ChIJu46S-ZZhLxMROG5lkwZ3D7k');
/*!40000 ALTER TABLE `tblOrganisation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblSite`
--

DROP TABLE IF EXISTS `tblSite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblSite` (
  `idtblSite` int NOT NULL AUTO_INCREMENT,
  `SiteName` varchar(45) DEFAULT NULL,
  `tblOrganisation_idtblOrganisation` int NOT NULL,
  `tblISOtoCountry_ISOAlpha2` varchar(2) NOT NULL,
  `SiteDefaultTimeZone` int DEFAULT NULL,
  `Shortcode` varchar(32) NOT NULL,
  PRIMARY KEY (`idtblSite`),
  UNIQUE KEY `Shortcode_UNIQUE` (`Shortcode`),
  KEY `fk_tblSite_tblOrganisation1_idx` (`tblOrganisation_idtblOrganisation`),
  KEY `fk_tblSite_tblISOtoCountry1_idx` (`tblISOtoCountry_ISOAlpha2`),
  CONSTRAINT `fk_tblSite_tblISOtoCountry1` FOREIGN KEY (`tblISOtoCountry_ISOAlpha2`) REFERENCES `tblISOtoCountry` (`ISOAlpha2`),
  CONSTRAINT `fk_tblSite_tblOrganisation1` FOREIGN KEY (`tblOrganisation_idtblOrganisation`) REFERENCES `tblOrganisation` (`idtblOrganisation`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblSite`
--

LOCK TABLES `tblSite` WRITE;
/*!40000 ALTER TABLE `tblSite` DISABLE KEYS */;
INSERT INTO `tblSite` VALUES (1,'WA PIC',26670,'AU',800,'WAPIC'),(2,'Global PIC',22973,'AU',800,'GLOBAL'),(3,'VPIC',23232,'AU',1000,'VPIC'),(4,'NPICDublin',26674,'IE',0,'DUBLIN'),(5,'Demo site',26716,'SA',100,'DEMO'),(6,'Dublin NPIC',3,'AU',0,'DUBLIN2'),(7,'Jamaica',26715,'JM',-500,'JM'),(8,'Dev Site',26714,'AU',800,'DEV'),(9,'WA Toxicology Service',26713,'AU',800,'WATOX'),(10,'King Fahad Medical City',26716,'SA',300,'KFMCPCC');
/*!40000 ALTER TABLE `tblSite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblSpecialistsAvail`
--

DROP TABLE IF EXISTS `tblSpecialistsAvail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblSpecialistsAvail` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `bool_user_in_system` tinyint(1) DEFAULT '0',
  `SpecialistName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Specialty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `Site_id` int NOT NULL,
  `user_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tblSpecialistsAvail_tblSite1_idx` (`Site_id`),
  KEY `fk_tblSpecialistsAvail_users1_idx` (`user_id`),
  CONSTRAINT `fk_tblSpecialistsAvail_tblSite1` FOREIGN KEY (`Site_id`) REFERENCES `tblSite` (`idtblSite`),
  CONSTRAINT `fk_tblSpecialistsAvail_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblSpecialistsAvail`
--

LOCK TABLES `tblSpecialistsAvail` WRITE;
/*!40000 ALTER TABLE `tblSpecialistsAvail` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblSpecialistsAvail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblUser`
--

DROP TABLE IF EXISTS `tblUser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblUser` (
  `idtblUser` int NOT NULL AUTO_INCREMENT,
  `tblSite_idtblSite` int NOT NULL,
  `UserLoggedinState` tinyint(1) DEFAULT NULL,
  `UserLoginTime` datetime DEFAULT NULL,
  `UserLoginHash` varchar(256) DEFAULT NULL,
  `UserLogOutTime` datetime DEFAULT NULL,
  `UserPhone` varchar(45) DEFAULT NULL,
  `UserJob` varchar(45) DEFAULT NULL,
  `userId` int unsigned DEFAULT NULL,
  PRIMARY KEY (`idtblUser`),
  UNIQUE KEY `fk_tblUser_users_idx` (`userId`),
  KEY `fk_tblUser_tblSite1_idx` (`tblSite_idtblSite`),
  CONSTRAINT `fk_tblUser_tblSite1` FOREIGN KEY (`tblSite_idtblSite`) REFERENCES `tblSite` (`idtblSite`),
  CONSTRAINT `fk_tblUser_users` FOREIGN KEY (`userId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblUser`
--

LOCK TABLES `tblUser` WRITE;
/*!40000 ALTER TABLE `tblUser` DISABLE KEYS */;
INSERT INTO `tblUser` VALUES (2,2,NULL,NULL,NULL,NULL,'999','spi',2),(3,2,NULL,NULL,NULL,NULL,'999','spi',3),(4,2,NULL,NULL,NULL,NULL,'123456789','spi',4),(7,2,NULL,NULL,NULL,NULL,'999','spi',1),(10,2,NULL,NULL,NULL,NULL,'99','spi',5),(11,1,NULL,NULL,NULL,NULL,'admin@local',NULL,6),(12,1,NULL,NULL,NULL,NULL,'999',NULL,7),(13,7,NULL,NULL,NULL,NULL,'123456','spi',8),(14,5,NULL,NULL,NULL,NULL,'999','spi',9),(15,1,NULL,NULL,NULL,NULL,'999','spi',10),(16,1,NULL,NULL,NULL,NULL,'999',NULL,11),(17,1,NULL,NULL,NULL,NULL,'999',NULL,12),(20,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',13),(21,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',14),(22,1,NULL,NULL,NULL,NULL,'+64 3 479 7227',NULL,15),(23,3,NULL,NULL,NULL,NULL,'bret@health.archi','spi',16),(24,8,NULL,NULL,NULL,NULL,'0123456789','admin',17),(25,5,NULL,NULL,NULL,NULL,'bret@health.archi','admin',18),(26,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',19),(27,5,NULL,NULL,NULL,NULL,'bret@health.archi','spi',20),(28,1,NULL,NULL,NULL,NULL,'+968 9199 1554',NULL,21),(29,1,NULL,NULL,NULL,NULL,'bret@health.archi',NULL,22),(30,1,NULL,NULL,NULL,NULL,'19234',NULL,23),(31,1,NULL,NULL,NULL,NULL,'+968 9550 7717',NULL,24),(32,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',25),(33,8,NULL,NULL,NULL,NULL,'12345','spi',26),(34,4,NULL,NULL,NULL,NULL,'bret@health.archi','spi',27),(35,4,NULL,NULL,NULL,NULL,'123456','spi',28),(36,5,NULL,NULL,NULL,NULL,'+249 92 342 9551','spi',29),(37,8,NULL,NULL,NULL,NULL,'0123456789','spi',30),(38,5,NULL,NULL,NULL,NULL,'bret@health.archi','spi',31),(39,1,NULL,NULL,NULL,NULL,'123456',NULL,32),(40,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',33),(41,3,NULL,NULL,NULL,NULL,'(+613) 9496 4410','spi',34),(42,7,NULL,NULL,NULL,NULL,'1234567','spi',35),(43,1,NULL,NULL,NULL,NULL,'983472039887','spi',36),(44,5,NULL,NULL,NULL,NULL,'000','spi',37),(45,1,NULL,NULL,NULL,NULL,'000','spi',38),(46,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',39),(47,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',40),(48,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',41),(49,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',42),(50,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',43),(51,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',44),(52,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',45),(53,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',46),(54,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',47),(55,1,NULL,NULL,NULL,NULL,'(08) 6457 1383','spi',48),(56,8,NULL,NULL,NULL,NULL,'999','spi',49),(57,9,NULL,NULL,NULL,NULL,'bret@health.archi','spi',50),(58,7,NULL,NULL,NULL,NULL,'123456','specialist',51),(59,5,NULL,NULL,NULL,NULL,'00966559797306','spi',52),(60,5,NULL,NULL,NULL,NULL,'12345','spi',53),(61,5,NULL,NULL,NULL,NULL,'12345','spi',54),(62,5,NULL,NULL,NULL,NULL,'12345','spi',55),(63,5,NULL,NULL,NULL,NULL,'12345','spi',56),(64,5,NULL,NULL,NULL,NULL,'12345','spi',57),(65,5,NULL,NULL,NULL,NULL,'123456','spi',58);
/*!40000 ALTER TABLE `tblUser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` int DEFAULT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'WA PIC','WAPIC',800,NULL,'2020-08-14 09:10:53',NULL,NULL),(2,'Global PIC','GLOBAL',800,NULL,'2020-08-14 09:10:53',NULL,NULL),(3,'VPIC','VPIC',1000,NULL,'2020-08-14 09:10:53',NULL,NULL),(4,'NPICDublin','DUBLIN',0,NULL,'2020-08-14 09:10:53',NULL,NULL),(5,'Demo site','DEMO',100,NULL,'2020-08-14 09:10:53',NULL,NULL),(6,'Dublin NPIC','DUBLIN2',0,NULL,'2020-08-14 09:10:53',NULL,NULL),(7,'Jamaica','JM',-500,NULL,'2020-08-14 09:10:53',NULL,NULL),(8,'Dev Site','DEV',800,NULL,'2020-08-14 09:10:53',NULL,NULL),(9,'WA Toxicology Service','WATOX',800,NULL,'2020-08-14 09:10:53',NULL,NULL),(10,'King Fahad Medical City','KFMCPCC',300,NULL,'2020-08-14 09:10:53',NULL,NULL);
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `ticketit_admin` tinyint(1) NOT NULL DEFAULT '0',
  `ticketit_agent` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` datetime DEFAULT NULL,
  `user_loggedin_state` varchar(191) DEFAULT NULL,
  `user_login_time` datetime DEFAULT NULL,
  `user_login_hash` varchar(191) DEFAULT NULL,
  `user_log_out_time` datetime DEFAULT NULL,
  `user_phone` varchar(191) DEFAULT NULL,
  `user_job` varchar(191) DEFAULT NULL,
  `team_id` int unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `team_fk_1927831` (`team_id`),
  CONSTRAINT `team_fk_1927831` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Eric Fung','efung@pyres.org','$2y$10$glm7SNvbEMO.HRSMtjuTYOcVaAErPkROepjx7bVf9hX.45OP8IiC6',NULL,'2017-11-12 17:08:45','2017-11-12 17:08:45',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'Site Admin','site_admin@picsi.co','$2y$10$ZJO5VW04TsuNrf50ryjOGukA5aOGQUcDB2srx9vcYnwT8fLMkysM.',NULL,'2017-11-12 18:40:28','2018-12-15 04:36:53',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'User','user@picsi.co','$2y$10$d3/I4rV9k6O79GXs.JtWh.38Lt7Nm1UJATFcTeAJPwaZ6kymmuJNW',NULL,'2017-11-12 18:40:29','2018-12-15 04:36:24',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Admin','admin@local.test','$2y$10$LlQhbQAXKVaHYN6GawyItOGht251RVmUYrqzo9gpbsHofrVMQf/g.',NULL,'2017-11-12 18:42:34','2018-03-03 12:47:22',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Specialist','specialist@picsi.co','$2y$10$2.dSDM/KcOgauSMjxtdHGuoZW6p6dtK/0Q8VwbXWyjiYq/qEvaxya',NULL,'2017-11-13 13:59:08','2018-12-15 04:37:17',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'Dr Verrol Simmons','verrol.simmons@sta.uwi.edu','$2y$10$YCsvFxIrCL/7oOBh0QPkf.m9n81IkBGZzPZD3/YE8U72.Hq/lrRl6',NULL,'2017-11-23 07:03:44','2018-02-12 08:11:28','2018-02-12 08:11:28',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'Dr Sandeep Maharaj','sandeep.maharaj@sta.uwi.edu','$2y$10$MYSt/uk.st66pErV2xmpv.HfU4zP8btiR6gG4QQo8s9WSYOCj3Je6',NULL,'2017-11-23 07:05:19','2018-02-12 08:11:33','2018-02-12 08:11:33',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'Sherika Whitelocke-Ballingsingh','carpin@utech.edu.jm','$2y$10$3WCgY2hxcHRffqsG2wCWz.IiS5pNZHcSKmpZdRvbo4yViqgTA.6qy',NULL,'2017-11-23 07:06:26','2019-01-29 02:07:54',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'Cindy Stephen','cindy.stephen@uct.ac.za','$2y$10$Dmma0O.1JKR9KVJJykjPBOELWCx2E9TfpIN9lD8sFKAyUFRjCGWPG',NULL,'2017-11-23 07:09:37','2017-11-23 07:09:37',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'Elaine','npicdublin@beaumont.ie','$2y$10$vT2P4C3OYEWkcSS7n7ZwyuwN/WAkKDjpeWXrKEE370L8J57M9SBFa',NULL,'2017-11-23 07:11:59','2018-12-03 11:39:30','2018-12-03 11:39:30',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'Nyadedzor Caesar','cnyadedzor@yahoo.com','$2y$10$2QHylfF3CBDgZRccrrpb2uCJWDm91dkaSEiXYNmYBfK.P31Uzy/dO',NULL,'2017-11-23 07:19:38','2018-02-19 01:38:29','2018-02-19 01:38:29',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'Maude St-Onge','maude.st-onge.ciussscn@ssss.gouv.qc.ca','$2y$10$dOF5hyqS/dWqmToRT6sGMOFsqwkS027RRl2K4o1wUpg2krMQC4mX6',NULL,'2017-11-23 07:21:31','2018-02-19 01:38:23','2018-02-19 01:38:23',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'Kas Ahmadi','Kas.Ahmadi@health.wa.gov.au','$2y$10$N7ggOjPKKVqKOxJoQYqWYOnIu1xCWn2r0g5DWgEwgpDO6.vFtocee',NULL,'2017-12-22 04:11:28','2018-07-07 15:07:09',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'Dale Beecham','dale.beecham@health.wa.gov.au','$2y$10$hdDGfDe/ez7ApaDgmDcQeO1xi4omlnnur29N67w.XD1gl7YsXefO2',NULL,'2017-12-22 04:12:03','2018-12-30 01:25:47',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'Lucy Shieffelbien','lucy@poisons.co.nz','$2y$10$lRFh2hjDyCzxueGMAN2En.Jv2k1XqMAA8QmzgeOHATE0fZfjguPK6',NULL,'2018-02-19 01:38:11','2018-08-03 12:25:46','2018-08-03 12:25:46',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'VPIC SPI','VPIC@health.archi','$2y$10$q1PSgvBDNphWG1FjGrgjMu5oTRWdJL1VOD1Wy17shmJfuTORctlpK',NULL,'2018-02-21 03:58:09','2018-12-03 11:38:16','2018-12-03 11:38:16',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'Michele Ong','mongps@gmail.com','$2y$10$cG2KWVUHprubY2Cs6Wn4Z.VTZW6dNryRk1BGWVS/oB2Y5iA0tuNi2',NULL,'2018-03-03 12:53:21','2018-12-28 12:41:04',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,'Bret Watson','bret@health.archi','$2y$10$zoKkItdwfp07SfATgd56wOGya2WbyrtBXtMNDKgY4XYdmyHmX9nuG',NULL,'2018-03-03 14:12:45','2019-02-15 07:29:57',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'Elizabeth Lim','elizabeth.lim@health.wa.gov.au','$2y$10$QQCNyC.hO1qg5zBTi/tzEulbIyBGF3oWRqfKD/5nsM5sWPo9ooM36',NULL,'2018-03-16 05:28:43','2018-03-16 05:28:43',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,'Bagdad Poison Centre','raghadjamal78@gmail.com','$2y$10$uVwjA3DrA9YbgeWeLTtsbOVboYX/MzUYxjkpqPxbbNj2Aww1H3Keu',NULL,'2018-03-21 08:11:31','2018-03-24 08:33:11',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,'Dr Entisar - Oman/Sudan','rdrentisae2017@gmail.com','$2y$10$jIWnXHw3YUZ2yDZeQc4zrOltGkrbCSzYn4j.wsQll7Q/c44LGGxcK',NULL,'2018-03-24 08:16:22','2018-12-03 11:38:26','2018-12-03 11:38:26',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,'Amal Al-Najjar - Riyadh, Saudi Arabia','aalnajjar66@gmail.com','$2y$10$XHDBGDOpVo8QeKPl15JsDu6X.XZP7SIqGrqbCHA5ODDY3ePPbVCh6',NULL,'2018-03-24 08:34:24','2018-12-03 11:38:09','2018-12-03 11:38:09',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'Qatar PIC','lamine@sidra.org','$2y$10$loHxFlJyF2nSrJX2OIyVPeJsVxZeXALS9FS3kHxxKFXOR8hW68RnW',NULL,'2018-03-24 12:18:16','2018-12-03 11:38:35','2018-12-03 11:38:35',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'Nadia - Oman','nadiaalhajri@yahoo.com','$2y$10$D/kpXXXgJMxwJzw8/bBTzeG6QUO5s3crWXFTTC5wMMPyjIp7KkeVG',NULL,'2018-03-25 01:01:06','2018-08-03 12:25:46','2018-08-03 12:25:46',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,'Nick Merwood','Nick.Merwood@health.wa.gov.au','$2y$10$glJiuNAAvtm0HU1iXbDIYuna7ruWfSf484kDnXWzORDsxdr1EpRbe',NULL,'2018-04-09 05:05:19','2019-01-29 08:36:22',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'demo-user','demo@ticm.com','$2y$10$pbyM8mE.cRXYXKOWKJofmev60bynjusFYdCzun13pBVEyR1o7eisK',NULL,'2018-04-12 00:59:53','2019-01-09 00:54:32',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,'Elaine Donohoe','ElaineDonohoe@beaumont.ie','$2y$10$6mEQPeeOc5tqIJSVZl3jN.1xL8UNOybFI1DukkkJ4zeiqk7.93P6q',NULL,'2018-04-12 10:27:47','2018-12-03 11:39:36','2018-12-03 11:39:36',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'Patricia Casey','patriciacasey@beaumont.ie','$2y$10$vOUNIeU.dhZXHDTW7BjXme8WtSWka7ullms2J97qlz/bNOo2gN5cG',NULL,'2018-04-12 10:30:47','2018-12-03 11:39:41','2018-12-03 11:39:41',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,'Azza Fadl Ahmed','azzafadlahmed@yahoo.com','$2y$10$Mp5/Ruhy7XJ4Pj7cWAIaCOPRsGuQVYLeF7cLHR5fL6LbXsf0Oq7y.',NULL,'2018-04-24 10:58:43','2018-04-24 10:58:43',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,'Michele Site B','nekopan@gmail.com','$2y$10$3dRBcodi5llRnqwamdhsRef5LMn/zxytPJLogjlqIx3XQmdgc.P7a',NULL,'2018-05-05 16:32:08','2018-12-17 15:36:12',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,'Gulmira Toibaeva','tgm7777@mail.ru','$2y$10$KbOTL.xh8K7xYRyZ4ft7aOiCVWSXUb2.IYVXxKCmxEutnERE0J6Fa',NULL,'2018-05-08 05:38:46','2018-05-11 06:03:56',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'HISP Vietnam','johnlewis.hisp@gmail.com','$2y$10$LP14sllO/2Ij3aSp0Pio3OBTet9UGGIoUiZYZ.8W1fP.XqxDEpQt6',NULL,'2018-05-25 02:55:59','2018-12-03 11:38:57','2018-12-03 11:38:57',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,'Ann-Maree Lynch','ann-maree.lynch@health.wa.gov.au','$2y$10$JqdJ.e5LdCXR3EgnqQMtG.thBYuf4piY8AmoS3vQrEjWVFEydvbjW',NULL,'2018-08-03 12:27:50','2018-08-03 12:27:50',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,'Jeff Robinson','jeff.robinson@austin.org.au','$2y$10$GY1CnyOliffChO8HwkeeV.k8xQptV8rWvSX25wP4q2U9Vthz3ZWP6',NULL,'2018-08-13 12:52:31','2018-12-03 11:39:18','2018-12-03 11:39:18',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,'Dr. Nicole Dawkins-Wright','wrightNC@moh.gov.jm','$2y$10$JQFaYSgr6TzvrT/aeJ9F3uXD1ffTKL7.bPwd3t2t.hAmEGhh/bEoy',NULL,'2018-08-16 11:46:42','2018-12-03 11:39:57','2018-12-03 11:39:57',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'Jason Brown','jasonbrwn0@gmail.com','$2y$10$uBOIlcKLB8olGuYWf8fPbe3HD0nN/pVJhiYolvwVkFcylZ2sJEbGC',NULL,'2018-09-11 10:19:36','2018-12-03 11:39:06','2018-12-03 11:39:06',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,'dummy user','user@example.com','$2y$10$cEPuNIRQkcfAOZStMK60L.2PsgakY92EY.SnyC5R3W/.h942v29Um',NULL,'2018-10-18 00:50:34','2018-10-18 00:50:34',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,'raghuram-dev','raghuram8892@gmail.com','$2y$10$eeWxAIa0hzZoIwg2Nvt4EOrWYPO9pt2y7AOO3GzVROD9WeckhDK8a',NULL,'2018-10-23 06:41:18','2018-12-03 11:39:11','2018-12-03 11:39:11',0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,'Klaus Kurt Auert','Klaus.Auert@health.wa.gov.au','$2y$10$1DqTLq/Y/uMSwqL.bnUqy.5DZNB8asHx2rr9OB.EKsGnLxa4XMQA.',NULL,'2018-12-10 03:41:35','2018-12-10 03:41:35',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,'Michael Cao','Michael.Cao@health.wa.gov.au','$2y$10$zeELwtCx3oCgq1a0bwrlReF83u4FwuH0fyLVZ1ZEPj2ks5Kc1JXhO',NULL,'2018-12-10 03:42:09','2018-12-10 03:42:09',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,'Sandra Cheng','Sandra.Cheng@health.wa.gov.au','$2y$10$26esi3ZNMHpJk5LoxlmpPOpCYuQfNFXDdiXSisXXjZfcd48aRSM3G',NULL,'2018-12-10 03:43:17','2018-12-10 03:43:17',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(42,'Louise Edwards','Louise.Edwards@health.wa.gov.au','$2y$10$TYjfXc9GpZfYW81BJWWg5uqFPpZnmOXx/lq04TMpKCeVAG4ElOaz6',NULL,'2018-12-10 03:43:46','2018-12-10 03:43:46',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43,'Mechaiel Farag','Mechaiel.Farag@health.wa.gov.au','$2y$10$HLIVCQZWcz./IEVGn5jTZuB7iLLFruIdIAeTRsOfY8NYjaOrcjbMC',NULL,'2018-12-10 03:44:14','2018-12-10 03:44:14',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(44,'Tricia Filippin','Patricia.Filippin@health.wa.gov.au','$2y$10$u8NA2SujYHaZ5IauOVr1N.NSRmatKdos3uq6HOBI8ZcoOQslCcqby',NULL,'2018-12-10 03:44:42','2018-12-10 03:44:42',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(45,'Katie Beech','beech_katie@hotmail.com','$2y$10$KsO/f9RQzzanPGznaIcHt.cjh3frjM2WRjs2MNib2/gII8YBU02B.',NULL,'2018-12-10 03:45:11','2018-12-10 03:45:11',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(46,'Bridgett McKay','Bridgett.McKay@health.wa.gov.au','$2y$10$3U9dTWR8vLRKSw8ayw5MweOiUFjy7w0wqxNjleaMIjTZGXW5BExWW',NULL,'2018-12-10 03:45:37','2018-12-10 03:45:37',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(47,'Carla Payne','Carla.Payne@health.wa.gov.au','$2y$10$d6qLufpPJbLJ1jHVFqDQ.OhnqunlXTGOxDmb7xFY9oR0fvnqXpR/i',NULL,'2018-12-10 03:46:08','2018-12-10 03:46:08',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(48,'Yumi Tan','Yumi.Tan@health.wa.gov.au','$2y$10$x5EcqnWgTZ765ArMA6lGL.msy.0QbHo3/oK8i9ln8mID3JKL8aaNO',NULL,'2018-12-10 03:46:34','2018-12-10 03:46:34',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(49,'Jonas Fu','sky930320@gmail.com','$2y$10$faDWPox1g6iyZD0X7W77DO14HDcvXgVEdFBtkOjhIvUMkrwrCLUGy',NULL,'2018-12-12 03:55:00','2018-12-12 03:55:00',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(50,'Jason Armstrong','Jason.Armstrong@health.wa.gov.au','$2y$10$9zSzASUqf0FbCoeFK1ISoeaJWB9r0rbC38dLwmTqW1LUmies3/fMC',NULL,'2018-12-30 02:43:59','2018-12-30 02:43:59',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(51,'Dr. Jean Williams-Johnson','jeanwilliamsjohnson@gmail.com','$2y$10$i8DCVP8J3O7f1Q2q7Ra54OMMsUPJaNfWQbVaEThe3OhskIVL4yyE6',NULL,'2019-01-29 02:07:42','2019-01-29 02:07:42',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(52,'Dr Najla M. Khojah','nkhojah@kfmc.med.sa','$2y$10$SqWs09VMF2OT52obLOws1eg1KM9nS78l.Rv4m1Sxzwqd3R1ACNnU6',NULL,'2019-01-29 02:50:46','2019-01-29 02:50:46',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(53,'Davide Lonati','davide.lonati@icsmaugeri.it','$2y$10$xEszRVMOVsR7cJk11H0YQOeJs.hz5aBbocyZ2pvN.L6t/mBO7P0ee',NULL,'2019-02-04 07:10:32','2019-02-04 07:10:32',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(54,'Mark Zammit','mark.zammit@um.edu.mt','$2y$10$TdwMi5mLvu.Dyxho4V2vEer8DiJzWNM/W5JGW28YwPXy/ecrTInG2',NULL,'2019-02-04 07:11:17','2019-02-04 07:11:17',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(55,'Ziad Kazzi','zkazzi@emory.edu','$2y$10$by0yd2xhqin0hLw7kgyHyuGTtBbxarOQP1blRalv0qswMBSUpqQde',NULL,'2019-02-04 07:16:37','2019-02-04 07:16:37',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(56,'Nadeem Alduaij','nadeem.alduaij@gmail.com','$2y$10$wFcSU6PAoy6ADC9vBoGNguaivyYrmfUITwC5gz/FZYc/jTBFkueuS',NULL,'2019-02-04 07:17:22','2019-02-04 07:17:22',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(57,'Robert Geller','RGELLER@georgiapoisoncenter.org','$2y$10$9vyTfGdSsVi12tJiUFUo0.J2IcT7ONhyC4C6.1X2PQ6DUgudln3Cm',NULL,'2019-02-04 07:18:35','2019-02-04 07:18:35',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(58,'Gaylord Lopez','GLOPEZ@georgiapoisoncenter.org','$2y$10$YdMOUttX4h5QOWp5qUmjgODxel8kNOyEM9EAaYQDjEPusQmIOEQX.',NULL,'2019-02-04 07:19:11','2019-02-04 07:19:11',NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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

-- Dump completed on 2020-08-17  6:03:21
