CREATE DATABASE  IF NOT EXISTS `practice_osas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `practice_osas`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: practice_osas
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `accepted_lists`
--

DROP TABLE IF EXISTS `accepted_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accepted_lists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `StatusID` bigint unsigned NOT NULL,
  `Feedback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accepted_lists_statusid_foreign_idx` (`StatusID`),
  CONSTRAINT `accepted_lists_statusid_foreign` FOREIGN KEY (`StatusID`) REFERENCES `application_status_lists` (`StatusID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accepted_lists`
--

LOCK TABLES `accepted_lists` WRITE;
/*!40000 ALTER TABLE `accepted_lists` DISABLE KEYS */;
INSERT INTO `accepted_lists` VALUES (13,1430,NULL,'2024-10-28 23:46:52','2024-10-28 23:46:52');
/*!40000 ALTER TABLE `accepted_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application_check_lists`
--

DROP TABLE IF EXISTS `application_check_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `application_check_lists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ApplicationID` bigint unsigned NOT NULL,
  `ChecklistID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `application_checklists_applicationid_foreign` (`ApplicationID`),
  CONSTRAINT `application_checklists_applicationid_foreign` FOREIGN KEY (`ApplicationID`) REFERENCES `application_infos` (`ApplicationID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=608 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_check_lists`
--

LOCK TABLES `application_check_lists` WRITE;
/*!40000 ALTER TABLE `application_check_lists` DISABLE KEYS */;
INSERT INTO `application_check_lists` VALUES (340,238,'Accomplished Application Form','2024-10-28 22:19:10','2024-10-28 22:19:10'),(341,238,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-10-28 22:19:10','2024-10-28 22:19:10'),(342,238,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-10-28 22:19:10','2024-10-28 22:19:10'),(343,238,'Information Sheet of Student Organization Officer','2024-10-28 22:19:10','2024-10-28 22:19:10'),(344,238,'List of Organization Members','2024-10-28 22:19:10','2024-10-28 22:19:10'),(345,238,'Student Organization Constitution and Bylaws','2024-10-28 22:19:10','2024-10-28 22:19:10'),(346,238,'Mission and Vision Statement','2024-10-28 22:19:10','2024-10-28 22:19:10'),(347,238,'Resolution','2024-10-28 22:19:10','2024-10-28 22:19:10'),(348,238,'Student Organization Official Logo','2024-10-28 22:19:10','2024-10-28 22:19:10'),(349,238,'Action and Financial Plan','2024-10-28 22:19:10','2024-10-28 22:19:10'),(350,239,'Accomplished Application Form','2024-10-28 22:32:38','2024-10-28 22:32:38'),(351,239,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-10-28 22:32:38','2024-10-28 22:32:38'),(352,239,'Certificate of Involvement/Commitment/ Acceptance of the President of Student Organizations','2024-10-28 22:32:38','2024-10-28 22:32:38'),(353,239,'Accomplishment Report','2024-10-28 22:32:38','2024-10-28 22:32:38'),(354,239,'Financial Report','2024-10-28 22:32:38','2024-10-28 22:32:38'),(355,239,'Action Plan and Financial Plan','2024-10-28 22:32:38','2024-10-28 22:32:38'),(360,241,'Accomplished Application Form','2024-10-29 00:10:37','2024-10-29 00:10:37'),(361,241,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-10-29 00:10:37','2024-10-29 00:10:37'),(362,241,'Certificate of Involvement/Commitment/ Acceptance of the President of Student Organizations','2024-10-29 00:10:37','2024-10-29 00:10:37'),(363,243,'Accomplished Application Form','2024-12-04 09:10:01','2024-12-04 09:10:01'),(364,243,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-04 09:10:01','2024-12-04 09:10:01'),(365,243,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-04 09:10:01','2024-12-04 09:10:01'),(366,243,'Information Sheet of Student Organization Officer','2024-12-04 09:10:01','2024-12-04 09:10:01'),(367,243,'List of Organization Members','2024-12-04 09:10:01','2024-12-04 09:10:01'),(368,243,'Student Organization Constitution and Bylaws','2024-12-04 09:10:01','2024-12-04 09:10:01'),(369,243,'Mission and Vision Statement','2024-12-04 09:10:01','2024-12-04 09:10:01'),(370,243,'Resolution','2024-12-04 09:10:01','2024-12-04 09:10:01'),(371,243,'Student Organization Official Logo','2024-12-04 09:10:01','2024-12-04 09:10:01'),(372,243,'Action and Financial Plan','2024-12-04 09:10:01','2024-12-04 09:10:01'),(373,248,'Accomplished Application Form','2024-12-08 04:52:49','2024-12-08 04:52:49'),(374,248,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 04:52:49','2024-12-08 04:52:49'),(375,248,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 04:52:49','2024-12-08 04:52:49'),(376,249,'Accomplished Application Form','2024-12-08 04:54:22','2024-12-08 04:54:22'),(377,249,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 04:54:22','2024-12-08 04:54:22'),(378,249,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 04:54:22','2024-12-08 04:54:22'),(379,250,'Accomplished Application Form','2024-12-08 04:55:25','2024-12-08 04:55:25'),(380,250,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 04:55:25','2024-12-08 04:55:25'),(381,251,'Accomplished Application Form','2024-12-08 04:57:00','2024-12-08 04:57:00'),(382,251,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 04:57:00','2024-12-08 04:57:00'),(383,251,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 04:57:00','2024-12-08 04:57:00'),(384,252,'Accomplished Application Form','2024-12-08 04:58:50','2024-12-08 04:58:50'),(385,252,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 04:58:50','2024-12-08 04:58:50'),(386,252,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 04:58:50','2024-12-08 04:58:50'),(387,253,'Accomplished Application Form','2024-12-08 05:02:46','2024-12-08 05:02:46'),(388,254,'Accomplished Application Form','2024-12-08 05:04:38','2024-12-08 05:04:38'),(389,254,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 05:04:38','2024-12-08 05:04:38'),(390,254,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 05:04:38','2024-12-08 05:04:38'),(391,254,'Information Sheet of Student Organization Officer','2024-12-08 05:04:38','2024-12-08 05:04:38'),(392,255,'Accomplished Application Form','2024-12-08 05:05:19','2024-12-08 05:05:19'),(393,255,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 05:05:19','2024-12-08 05:05:19'),(394,255,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 05:05:19','2024-12-08 05:05:19'),(395,256,'Accomplished Application Form','2024-12-08 05:09:39','2024-12-08 05:09:39'),(396,256,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 05:09:39','2024-12-08 05:09:39'),(397,257,'Accomplished Application Form','2024-12-08 05:14:28','2024-12-08 05:14:28'),(398,257,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 05:14:28','2024-12-08 05:14:28'),(399,257,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 05:14:28','2024-12-08 05:14:28'),(400,258,'Accomplished Application Form','2024-12-08 05:35:33','2024-12-08 05:35:33'),(401,258,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 05:35:33','2024-12-08 05:35:33'),(402,259,'Accomplished Application Form','2024-12-08 05:36:30','2024-12-08 05:36:30'),(403,259,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 05:36:30','2024-12-08 05:36:30'),(404,259,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 05:36:30','2024-12-08 05:36:30'),(405,260,'Accomplished Application Form','2024-12-08 05:37:03','2024-12-08 05:37:03'),(406,260,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 05:37:03','2024-12-08 05:37:03'),(407,260,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 05:37:03','2024-12-08 05:37:03'),(408,260,'Information Sheet of Student Organization Officer','2024-12-08 05:37:03','2024-12-08 05:37:03'),(409,261,'Accomplished Application Form','2024-12-08 05:37:03','2024-12-08 05:37:03'),(410,261,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 05:37:03','2024-12-08 05:37:03'),(411,261,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 05:37:03','2024-12-08 05:37:03'),(412,261,'Information Sheet of Student Organization Officer','2024-12-08 05:37:03','2024-12-08 05:37:03'),(413,262,'Action and Financial Plan','2024-12-08 05:38:43','2024-12-08 05:38:43'),(414,262,'Resolution','2024-12-08 05:38:43','2024-12-08 05:38:43'),(415,263,'Action and Financial Plan','2024-12-08 05:38:43','2024-12-08 05:38:43'),(416,263,'Resolution','2024-12-08 05:38:43','2024-12-08 05:38:43'),(417,264,'Accomplished Application Form','2024-12-08 06:44:04','2024-12-08 06:44:04'),(418,264,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:44:04','2024-12-08 06:44:04'),(419,265,'Accomplished Application Form','2024-12-08 06:44:04','2024-12-08 06:44:04'),(420,265,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:44:04','2024-12-08 06:44:04'),(421,266,'Accomplished Application Form','2024-12-08 06:44:52','2024-12-08 06:44:52'),(422,266,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:44:52','2024-12-08 06:44:52'),(423,267,'Accomplished Application Form','2024-12-08 06:44:52','2024-12-08 06:44:52'),(424,267,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:44:52','2024-12-08 06:44:52'),(425,268,'Accomplished Application Form','2024-12-08 06:45:29','2024-12-08 06:45:29'),(426,269,'Accomplished Application Form','2024-12-08 06:45:29','2024-12-08 06:45:29'),(427,270,'Accomplished Application Form','2024-12-08 06:46:30','2024-12-08 06:46:30'),(428,271,'Accomplished Application Form','2024-12-08 06:46:30','2024-12-08 06:46:30'),(429,272,'Accomplished Application Form','2024-12-08 06:48:07','2024-12-08 06:48:07'),(430,272,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:48:07','2024-12-08 06:48:07'),(431,272,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 06:48:07','2024-12-08 06:48:07'),(432,273,'Accomplished Application Form','2024-12-08 06:48:07','2024-12-08 06:48:07'),(433,273,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:48:07','2024-12-08 06:48:07'),(434,273,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 06:48:07','2024-12-08 06:48:07'),(435,274,'Accomplished Application Form','2024-12-08 06:48:11','2024-12-08 06:48:11'),(436,274,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:48:11','2024-12-08 06:48:11'),(437,274,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 06:48:11','2024-12-08 06:48:11'),(438,275,'Accomplished Application Form','2024-12-08 06:48:13','2024-12-08 06:48:13'),(439,275,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:48:13','2024-12-08 06:48:13'),(440,275,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 06:48:13','2024-12-08 06:48:13'),(441,276,'Accomplished Application Form','2024-12-08 06:49:42','2024-12-08 06:49:42'),(442,277,'Accomplished Application Form','2024-12-08 06:49:42','2024-12-08 06:49:42'),(443,278,'Accomplished Application Form','2024-12-08 06:49:43','2024-12-08 06:49:43'),(444,279,'Accomplished Application Form','2024-12-08 06:49:44','2024-12-08 06:49:44'),(445,280,'Accomplished Application Form','2024-12-08 06:49:45','2024-12-08 06:49:45'),(446,281,'Accomplished Application Form','2024-12-08 06:49:45','2024-12-08 06:49:45'),(447,282,'Accomplished Application Form','2024-12-08 06:49:46','2024-12-08 06:49:46'),(448,283,'Accomplished Application Form','2024-12-08 06:49:46','2024-12-08 06:49:46'),(449,284,'Accomplished Application Form','2024-12-08 06:50:00','2024-12-08 06:50:00'),(450,285,'Mission and Vision Statement','2024-12-08 06:54:51','2024-12-08 06:54:51'),(451,286,'Mission and Vision Statement','2024-12-08 06:54:51','2024-12-08 06:54:51'),(452,287,'List of Organization Members','2024-12-08 06:56:05','2024-12-08 06:56:05'),(453,288,'List of Organization Members','2024-12-08 06:56:05','2024-12-08 06:56:05'),(454,289,'Accomplished Application Form','2024-12-08 06:56:57','2024-12-08 06:56:57'),(455,289,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:56:57','2024-12-08 06:56:57'),(456,289,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 06:56:57','2024-12-08 06:56:57'),(457,290,'Accomplished Application Form','2024-12-08 06:56:57','2024-12-08 06:56:57'),(458,290,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-08 06:56:57','2024-12-08 06:56:57'),(459,290,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-08 06:56:57','2024-12-08 06:56:57'),(460,293,'Accomplished Application Form ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(461,293,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(462,293,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(463,293,'Accomplishment Report ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(464,293,'Financial Report ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(465,293,'Action Plan and Financial Plan ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(466,294,'Accomplished Application Form ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(467,294,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(468,294,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(469,294,'Accomplishment Report ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(470,294,'Financial Report ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(471,294,'Action Plan and Financial Plan ','2024-12-08 08:19:04','2024-12-08 08:19:04'),(472,295,'Financial Report ','2024-12-08 08:43:16','2024-12-08 08:43:16'),(473,296,'Financial Report ','2024-12-08 08:43:16','2024-12-08 08:43:16'),(474,297,'Financial Report ','2024-12-08 08:49:36','2024-12-08 08:49:36'),(475,298,'Financial Report ','2024-12-08 08:49:36','2024-12-08 08:49:36'),(505,240,'Accomplished Application Form','2024-12-10 08:48:31','2024-12-10 08:48:31'),(506,240,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-10 08:48:31','2024-12-10 08:48:31'),(507,240,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-10 08:48:31','2024-12-10 08:48:31'),(508,240,'List of Organization Members','2024-12-10 08:48:31','2024-12-10 08:48:31'),(509,240,'Student Organization Constitution and Bylaws','2024-12-10 08:48:31','2024-12-10 08:48:31'),(510,240,'Mission and Vision Statement','2024-12-10 08:48:31','2024-12-10 08:48:31'),(511,240,'Resolution','2024-12-10 08:48:31','2024-12-10 08:48:31'),(512,240,'Student Organization Official Logo','2024-12-10 08:48:31','2024-12-10 08:48:31'),(513,240,'Action and Financial Plan','2024-12-10 08:48:31','2024-12-10 08:48:31'),(514,240,'Information Sheet of Student Organization Officer','2024-12-10 08:48:31','2024-12-10 08:48:31'),(515,299,'Accomplished Application Form ','2024-12-10 09:20:50','2024-12-10 09:20:50'),(527,301,'Resolution','2024-12-10 09:32:32','2024-12-10 09:32:32'),(528,302,'Resolution','2024-12-10 09:32:32','2024-12-10 09:32:32'),(539,300,'Accomplished Application Form ','2024-12-10 09:39:14','2024-12-10 09:39:14'),(540,300,'Accomplishment Report','2024-12-10 09:39:14','2024-12-10 09:39:14'),(541,300,'Financial Report','2024-12-10 09:39:14','2024-12-10 09:39:14'),(542,300,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-10 09:39:14','2024-12-10 09:39:14'),(543,303,'Action Plan and Financial Plan ','2024-12-10 09:41:28','2024-12-10 09:41:28'),(544,304,'Action Plan and Financial Plan ','2024-12-10 09:41:28','2024-12-10 09:41:28'),(545,309,'Accomplished Application Form ','2024-12-10 09:55:39','2024-12-10 09:55:39'),(546,310,'Accomplished Application Form ','2024-12-10 09:55:39','2024-12-10 09:55:39'),(547,311,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations ','2024-12-10 09:56:25','2024-12-10 09:56:25'),(551,312,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations ','2024-12-10 10:13:30','2024-12-10 10:13:30'),(552,313,'Accomplishment Report','2024-12-10 10:18:40','2024-12-10 10:18:40'),(554,315,'Accomplished Application Form','2024-12-10 10:43:51','2024-12-10 10:43:51'),(555,315,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-10 10:43:51','2024-12-10 10:43:51'),(556,315,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-10 10:43:51','2024-12-10 10:43:51'),(557,315,'Accomplishment Report','2024-12-10 10:43:51','2024-12-10 10:43:51'),(558,315,'Financial Report','2024-12-10 10:43:51','2024-12-10 10:43:51'),(559,315,'Action Plan and Financial Plan','2024-12-10 10:43:51','2024-12-10 10:43:51'),(560,316,'Accomplished Application Form','2024-12-10 10:43:51','2024-12-10 10:43:51'),(561,316,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-10 10:43:51','2024-12-10 10:43:51'),(562,316,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-10 10:43:51','2024-12-10 10:43:51'),(563,316,'Accomplishment Report','2024-12-10 10:43:51','2024-12-10 10:43:51'),(564,316,'Financial Report','2024-12-10 10:43:51','2024-12-10 10:43:51'),(565,316,'Action Plan and Financial Plan','2024-12-10 10:43:51','2024-12-10 10:43:51'),(566,317,'Accomplished Application Form','2024-12-10 10:45:00','2024-12-10 10:45:00'),(567,317,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-10 10:45:00','2024-12-10 10:45:00'),(568,317,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-10 10:45:00','2024-12-10 10:45:00'),(569,317,'Accomplishment Report','2024-12-10 10:45:00','2024-12-10 10:45:00'),(570,317,'Financial Report','2024-12-10 10:45:00','2024-12-10 10:45:00'),(571,318,'Accomplished Application Form','2024-12-10 10:45:00','2024-12-10 10:45:00'),(572,318,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-10 10:45:00','2024-12-10 10:45:00'),(573,318,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-10 10:45:00','2024-12-10 10:45:00'),(574,318,'Accomplishment Report','2024-12-10 10:45:00','2024-12-10 10:45:00'),(575,318,'Financial Report','2024-12-10 10:45:00','2024-12-10 10:45:00'),(576,319,'Accomplished Application Form','2024-12-11 09:51:02','2024-12-11 09:51:02'),(577,319,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-11 09:51:02','2024-12-11 09:51:02'),(578,319,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-11 09:51:02','2024-12-11 09:51:02'),(579,319,'Information Sheet of Student Organization Officer','2024-12-11 09:51:02','2024-12-11 09:51:02'),(580,319,'List of Organization Members','2024-12-11 09:51:02','2024-12-11 09:51:02'),(581,319,'Student Organization Constitution and Bylaws','2024-12-11 09:51:02','2024-12-11 09:51:02'),(582,319,'Mission and Vision Statement','2024-12-11 09:51:02','2024-12-11 09:51:02'),(583,319,'Resolution','2024-12-11 09:51:02','2024-12-11 09:51:02'),(584,319,'Student Organization Official Logo','2024-12-11 09:51:02','2024-12-11 09:51:02'),(585,319,'Action and Financial Plan','2024-12-11 09:51:02','2024-12-11 09:51:02'),(586,320,'Accomplished Application Form','2024-12-11 09:51:02','2024-12-11 09:51:02'),(587,320,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-11 09:51:02','2024-12-11 09:51:02'),(588,320,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-11 09:51:02','2024-12-11 09:51:02'),(589,320,'Information Sheet of Student Organization Officer','2024-12-11 09:51:02','2024-12-11 09:51:02'),(590,320,'List of Organization Members','2024-12-11 09:51:02','2024-12-11 09:51:02'),(591,320,'Student Organization Constitution and Bylaws','2024-12-11 09:51:02','2024-12-11 09:51:02'),(592,320,'Mission and Vision Statement','2024-12-11 09:51:02','2024-12-11 09:51:02'),(593,320,'Resolution','2024-12-11 09:51:02','2024-12-11 09:51:02'),(594,320,'Student Organization Official Logo','2024-12-11 09:51:02','2024-12-11 09:51:02'),(595,320,'Action and Financial Plan','2024-12-11 09:51:02','2024-12-11 09:51:02'),(596,321,'Accomplished Application Form','2024-12-11 09:52:42','2024-12-11 09:52:42'),(597,321,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-11 09:52:42','2024-12-11 09:52:42'),(598,321,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-11 09:52:42','2024-12-11 09:52:42'),(599,321,'Accomplishment Report','2024-12-11 09:52:42','2024-12-11 09:52:42'),(600,321,'Financial Report','2024-12-11 09:52:42','2024-12-11 09:52:42'),(601,321,'Action Plan and Financial Plan','2024-12-11 09:52:42','2024-12-11 09:52:42'),(602,322,'Accomplished Application Form','2024-12-11 09:52:42','2024-12-11 09:52:42'),(603,322,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-11 09:52:42','2024-12-11 09:52:42'),(604,322,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-11 09:52:42','2024-12-11 09:52:42'),(605,322,'Accomplishment Report','2024-12-11 09:52:42','2024-12-11 09:52:42'),(606,322,'Financial Report','2024-12-11 09:52:42','2024-12-11 09:52:42'),(607,322,'Action Plan and Financial Plan','2024-12-11 09:52:42','2024-12-11 09:52:42');
/*!40000 ALTER TABLE `application_check_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application_infos`
--

DROP TABLE IF EXISTS `application_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `application_infos` (
  `ApplicationID` bigint unsigned NOT NULL AUTO_INCREMENT,
  `OrganizationName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrganizationDescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `OrganizationID` bigint unsigned NOT NULL DEFAULT '0',
  `Type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `representativeName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `representativeEmail` varchar(450) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactNumber` bigint DEFAULT NULL,
  PRIMARY KEY (`ApplicationID`)
) ENGINE=InnoDB AUTO_INCREMENT=323 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_infos`
--

LOCK TABLES `application_infos` WRITE;
/*!40000 ALTER TABLE `application_infos` DISABLE KEYS */;
INSERT INTO `application_infos` VALUES (238,'OJT','Die with a smile',0,'recognition','2024-10-28 22:19:10','2024-10-28 22:19:10','junboy','junfeldalumpines@gmail.com',9129094503),(239,'OJT','yayayayayyaa',0,'reaccreditation','2024-10-28 22:32:38','2024-10-28 22:32:38','Arz Gwapo','junfeldalumpines@gmail.com',9129094503),(240,'AFC','dawd nklawdalkwhd law',0,'recognition','2024-10-28 23:44:55','2024-10-28 23:44:55','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(241,'YFC - Youth For Christ','fjklesfkjagfkef aelsjkf',0,'reaccreditation','2024-10-29 00:10:37','2024-10-29 00:10:37','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(242,'drgr','drgdrg',0,'reaccreditation','2024-11-24 11:07:50','2024-11-24 11:07:50','rgdrgd','arzkirigaya@gmail.com',9102699240),(243,'Samahan ng mga gwapo','awdawda',0,'recognition','2024-12-04 09:10:01','2024-12-04 09:10:01','Juniboi','juniboi@gmail.com',9102699240),(244,'Samahan ng mga gwapo','asdawdawd',0,'Accreditation','2024-12-08 04:50:18','2024-12-08 04:50:18','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(245,'Samahan ng mga gwapo','awdawdawd',0,'Accreditation','2024-12-08 04:51:12','2024-12-08 04:51:12','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9102699240),(246,'Samahan ng mga gwapo','casdawD',0,'Accreditation','2024-12-08 04:51:48','2024-12-08 04:51:48','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9102699240),(247,'Samahan ng mga gwapo','awdawdawd',0,'Accreditation','2024-12-08 04:52:34','2024-12-08 04:52:34','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(248,'Samahan ng mga gwapo','wdadawd',0,'Accreditation','2024-12-08 04:52:49','2024-12-08 04:52:49','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9102699240),(249,'YFC - Youth For Christ','asdawdawda',0,'Accreditation','2024-12-08 04:54:22','2024-12-08 04:54:22','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9102699240),(250,'AITS - Association of ','wdawdad',0,'Accreditation','2024-12-08 04:55:25','2024-12-08 04:55:25','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9102699240),(251,'Samahan ng mga gwapo','adwawda',0,'Accreditation','2024-12-08 04:57:00','2024-12-08 04:57:00','Juniboi','arzkirigaya@gmail.com',9102699240),(252,'qqq','awdawda',0,'Accreditation','2024-12-08 04:58:50','2024-12-08 04:58:50','Juniboi','arzkirigaya@gmail.com',9102699240),(253,'asdaw','awdawda',0,'Accreditation','2024-12-08 05:02:46','2024-12-08 05:02:46','Juniboi','juniboi@gmail.com',9102699240),(254,'asdwdawd','awawd',0,'Accreditation','2024-12-08 05:04:38','2024-12-08 05:04:38','awdaw','juniboi@gmail.com',9102699240),(255,'qqq','adwawda',0,'Accreditation','2024-12-08 05:05:19','2024-12-08 05:05:19','Juniboi','juniboi@gmail.com',9102699240),(256,'ghftgsh','awdawdawd',0,'recognition','2024-12-08 05:09:39','2024-12-08 05:09:39','Juniboi','juniboi@gmail.com',9102699240),(257,'awawda','awdawdaw',0,'recognition','2024-12-08 05:14:28','2024-12-08 05:14:28','Juniboi','juniboi@gmail.com',9102699240),(258,'Samahan ng mga gwapo','adwadawda',0,'Accreditation','2024-12-08 05:35:33','2024-12-08 05:35:33','Juniboi','juniboi@gmail.com',9102699240),(259,'Samahan ng mga gwapo','awdawdawda',0,'Accreditation','2024-12-08 05:36:30','2024-12-08 05:36:30','Juniboi','juniboi@gmail.com',9102699240),(260,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 05:37:03','2024-12-08 05:37:03','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9102699240),(261,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 05:37:03','2024-12-08 05:37:03','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9102699240),(262,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 05:38:43','2024-12-08 05:38:43','Juniboi','arzkirigaya@gmail.com',9102699240),(263,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 05:38:43','2024-12-08 05:38:43','Juniboi','arzkirigaya@gmail.com',9102699240),(264,'www','awdawdawdaw',0,'Accreditation','2024-12-08 06:44:04','2024-12-08 06:44:04','Juniboi','arzkirigaya@gmail.com',9102699240),(265,'www','awdawdawdaw',0,'Accreditation','2024-12-08 06:44:04','2024-12-08 06:44:04','Juniboi','arzkirigaya@gmail.com',9102699240),(266,'Samahan ng mga gwapo','Axsas',0,'Accreditation','2024-12-08 06:44:52','2024-12-08 06:44:52','Juniboi','juniboi@gmail.com',9102699240),(267,'Samahan ng mga gwapo','Axsas',0,'Accreditation','2024-12-08 06:44:52','2024-12-08 06:44:52','Juniboi','juniboi@gmail.com',9102699240),(268,'sawa','awdawd',0,'Accreditation','2024-12-08 06:45:29','2024-12-08 06:45:29','Juniboi','jie@gmail.com',9102699240),(269,'sawa','awdawd',0,'Accreditation','2024-12-08 06:45:29','2024-12-08 06:45:29','Juniboi','jie@gmail.com',9102699240),(270,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:46:30','2024-12-08 06:46:30','Juniboi','arzkirigaya@gmail.com',9102699240),(271,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:46:30','2024-12-08 06:46:30','Juniboi','arzkirigaya@gmail.com',9102699240),(272,'Samahan ng mga gwapo','wdawda',0,'Accreditation','2024-12-08 06:48:07','2024-12-08 06:48:07','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(273,'Samahan ng mga gwapo','wdawda',0,'Accreditation','2024-12-08 06:48:07','2024-12-08 06:48:07','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(274,'Samahan ng mga gwapo','wdawda',0,'Accreditation','2024-12-08 06:48:11','2024-12-08 06:48:11','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(275,'Samahan ng mga gwapo','wdawda',0,'Accreditation','2024-12-08 06:48:13','2024-12-08 06:48:13','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(276,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:49:42','2024-12-08 06:49:42','Juniboi','arzkirigaya@gmail.com',9102699240),(277,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:49:42','2024-12-08 06:49:42','Juniboi','arzkirigaya@gmail.com',9102699240),(278,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:49:43','2024-12-08 06:49:43','Juniboi','arzkirigaya@gmail.com',9102699240),(279,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:49:44','2024-12-08 06:49:44','Juniboi','arzkirigaya@gmail.com',9102699240),(280,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:49:45','2024-12-08 06:49:45','Juniboi','arzkirigaya@gmail.com',9102699240),(281,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:49:45','2024-12-08 06:49:45','Juniboi','arzkirigaya@gmail.com',9102699240),(282,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:49:46','2024-12-08 06:49:46','Juniboi','arzkirigaya@gmail.com',9102699240),(283,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:49:46','2024-12-08 06:49:46','Juniboi','arzkirigaya@gmail.com',9102699240),(284,'Samahan ng mga gwapo','awdawda',0,'Accreditation','2024-12-08 06:50:00','2024-12-08 06:50:00','Juniboi','arzkirigaya@gmail.com',9102699240),(285,'Samahan ng mga gwapo','awdawdawd',0,'Accreditation','2024-12-08 06:54:51','2024-12-08 06:54:51','Juniboi','jie@gmail.com',9102699240),(286,'Samahan ng mga gwapo','awdawdawd',0,'Accreditation','2024-12-08 06:54:51','2024-12-08 06:54:51','Juniboi','jie@gmail.com',9102699240),(287,'Samahan ng mga gwapo','awdawdaw',0,'Accreditation','2024-12-08 06:56:05','2024-12-08 06:56:05','Juniboi','arzkirigaya@gmail.com',9102699240),(288,'Samahan ng mga gwapo','awdawdaw',0,'Accreditation','2024-12-08 06:56:05','2024-12-08 06:56:05','Juniboi','arzkirigaya@gmail.com',9102699240),(289,'Samahan ng mga gwapo','awdawdaw',0,'Accreditation','2024-12-08 06:56:57','2024-12-08 06:56:57','Juniboi','arzkirigaya@gmail.com',9102699240),(290,'Samahan ng mga gwapo','awdawdaw',0,'Accreditation','2024-12-08 06:56:57','2024-12-08 06:56:57','Juniboi','arzkirigaya@gmail.com',9102699240),(291,'Samahan ng mga gwapo','awdawdaw',0,'Accreditation','2024-12-08 07:02:39','2024-12-08 07:02:39','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9102699240),(292,'Samahan ng mga gwapo','awdawdaw',0,'Accreditation','2024-12-08 07:02:39','2024-12-08 07:02:39','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9102699240),(293,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-08 08:19:04','2024-12-08 08:19:04','Juniboi','bec@gmail.com',9102699240),(294,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-08 08:19:04','2024-12-08 08:19:04','Juniboi','bec@gmail.com',9102699240),(295,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-08 08:43:16','2024-12-08 08:43:16','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(296,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-08 08:43:16','2024-12-08 08:43:16','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(297,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-08 08:49:36','2024-12-08 08:49:36','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(298,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-08 08:49:36','2024-12-08 08:49:36','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(299,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 09:20:50','2024-12-10 09:20:50','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(300,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 09:20:50','2024-12-10 09:20:50','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(301,'wati','awdawdawdawd',0,'Accreditation','2024-12-10 09:32:32','2024-12-10 09:32:32','Juniboi','arzkirigaya@gmail.com',9102699240),(302,'wati','awdawdawdawd',0,'Accreditation','2024-12-10 09:32:32','2024-12-10 09:32:32','Juniboi','arzkirigaya@gmail.com',9102699240),(303,'CFD - Catholic Faith Defenders',NULL,2030,'Reaccreditation','2024-12-10 09:41:28','2024-12-10 09:41:28','Juniboi','cfd@gmail.com',9102699240),(304,'CFD - Catholic Faith Defenders',NULL,2030,'Reaccreditation','2024-12-10 09:41:28','2024-12-10 09:41:28','Juniboi','cfd@gmail.com',9102699240),(305,'waw','awdawdawd',0,'Accreditation','2024-12-10 09:54:38','2024-12-10 09:54:38','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(306,'waw','awdawdawd',0,'Accreditation','2024-12-10 09:54:38','2024-12-10 09:54:38','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(307,'awdawd','awdawd',0,'Accreditation','2024-12-10 09:55:18','2024-12-10 09:55:18','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(308,'awdawd','awdawd',0,'Accreditation','2024-12-10 09:55:18','2024-12-10 09:55:18','Christopher G. Arsenal Jr','juniboi@gmail.com',9102699240),(309,'CFD - Catholic Faith Defenders',NULL,2030,'Reaccreditation','2024-12-10 09:55:39','2024-12-10 09:55:39','Christopher G. Arsenal Jr','cfd@gmail.com',9102699240),(310,'CFD - Catholic Faith Defenders',NULL,2030,'Reaccreditation','2024-12-10 09:55:39','2024-12-10 09:55:39','Christopher G. Arsenal Jr','cfd@gmail.com',9102699240),(311,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 09:56:25','2024-12-10 09:56:25','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(312,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 09:56:25','2024-12-10 09:56:25','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(313,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 10:18:40','2024-12-10 10:18:40','Juniboi','bec@gmail.com',9102699240),(314,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 10:18:40','2024-12-10 10:18:40','Juniboi','bec@gmail.com',9102699240),(315,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 10:43:51','2024-12-10 10:43:51','Juniboi','bec@gmail.com',9102699240),(316,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 10:43:51','2024-12-10 10:43:51','Juniboi','bec@gmail.com',9102699240),(317,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 10:45:00','2024-12-10 10:45:00','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(318,'BEC - Basic Ecclesial Community',NULL,2031,'Reaccreditation','2024-12-10 10:45:00','2024-12-10 10:45:00','Christopher G. Arsenal Jr','bec@gmail.com',9102699240),(319,'WATI','AWDAWDA',0,'Accreditation','2024-12-11 09:51:02','2024-12-11 09:51:02','Juniboi','juniboi@gmail.com',9102699240),(320,'WATI','AWDAWDA',0,'Accreditation','2024-12-11 09:51:02','2024-12-11 09:51:02','Juniboi','juniboi@gmail.com',9102699240),(321,'CFD - Catholic Faith Defenders',NULL,2030,'Reaccreditation','2024-12-11 09:52:42','2024-12-11 09:52:42','Christopher G. Arsenal Jr','cfd@gmail.com',9102699240),(322,'CFD - Catholic Faith Defenders',NULL,2030,'Reaccreditation','2024-12-11 09:52:42','2024-12-11 09:52:42','Christopher G. Arsenal Jr','cfd@gmail.com',9102699240);
/*!40000 ALTER TABLE `application_infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application_status_lists`
--

DROP TABLE IF EXISTS `application_status_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `application_status_lists` (
  `StatusID` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ApplicationID` bigint unsigned NOT NULL,
  `StatusType` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`StatusID`),
  KEY `application_status_lists_applicationid_foreign` (`ApplicationID`),
  KEY `application_status_lists_statustype_foreign` (`StatusType`),
  CONSTRAINT `application_status_lists_applicationid_foreign` FOREIGN KEY (`ApplicationID`) REFERENCES `application_infos` (`ApplicationID`) ON DELETE CASCADE,
  CONSTRAINT `application_status_lists_statustype_foreign` FOREIGN KEY (`StatusType`) REFERENCES `status_types` (`StatusType`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1500 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_status_lists`
--

LOCK TABLES `application_status_lists` WRITE;
/*!40000 ALTER TABLE `application_status_lists` DISABLE KEYS */;
INSERT INTO `application_status_lists` VALUES (1428,238,1,'2024-10-28 22:19:10','2024-10-28 22:19:10'),(1429,239,1,'2024-10-28 22:32:38','2024-10-28 22:32:38'),(1430,240,3,'2024-10-28 23:44:55','2024-10-28 23:46:52'),(1431,241,1,'2024-10-29 00:10:37','2024-10-29 00:10:37'),(1432,242,1,'2024-11-24 11:07:50','2024-11-24 11:07:50'),(1433,243,1,'2024-12-04 09:10:02','2024-12-04 09:10:02'),(1434,257,1,'2024-12-08 05:14:28','2024-12-08 05:14:28'),(1435,258,1,'2024-12-08 05:35:33','2024-12-08 05:35:33'),(1436,259,1,'2024-12-08 05:36:30','2024-12-08 05:36:30'),(1437,260,1,'2024-12-08 05:37:03','2024-12-08 05:37:03'),(1438,261,1,'2024-12-08 05:37:03','2024-12-08 05:37:03'),(1439,262,1,'2024-12-08 05:38:43','2024-12-08 05:38:43'),(1440,263,1,'2024-12-08 05:38:43','2024-12-08 05:38:43'),(1441,264,1,'2024-12-08 06:44:04','2024-12-08 06:44:04'),(1442,265,1,'2024-12-08 06:44:04','2024-12-08 06:44:04'),(1443,266,1,'2024-12-08 06:44:52','2024-12-08 06:44:52'),(1444,267,1,'2024-12-08 06:44:52','2024-12-08 06:44:52'),(1445,268,1,'2024-12-08 06:45:29','2024-12-08 06:45:29'),(1446,269,1,'2024-12-08 06:45:29','2024-12-08 06:45:29'),(1447,270,1,'2024-12-08 06:46:30','2024-12-08 06:46:30'),(1448,271,1,'2024-12-08 06:46:30','2024-12-08 06:46:30'),(1449,272,1,'2024-12-08 06:48:07','2024-12-08 06:48:07'),(1450,273,1,'2024-12-08 06:48:07','2024-12-08 06:48:07'),(1451,274,1,'2024-12-08 06:48:11','2024-12-08 06:48:11'),(1452,275,1,'2024-12-08 06:48:13','2024-12-08 06:48:13'),(1453,276,1,'2024-12-08 06:49:42','2024-12-08 06:49:42'),(1454,277,1,'2024-12-08 06:49:42','2024-12-08 06:49:42'),(1455,278,1,'2024-12-08 06:49:43','2024-12-08 06:49:43'),(1456,279,1,'2024-12-08 06:49:44','2024-12-08 06:49:44'),(1457,280,1,'2024-12-08 06:49:45','2024-12-08 06:49:45'),(1458,281,1,'2024-12-08 06:49:45','2024-12-08 06:49:45'),(1459,282,1,'2024-12-08 06:49:46','2024-12-08 06:49:46'),(1460,283,1,'2024-12-08 06:49:46','2024-12-08 06:49:46'),(1461,284,1,'2024-12-08 06:50:00','2024-12-08 06:50:00'),(1462,285,1,'2024-12-08 06:54:51','2024-12-08 06:54:51'),(1463,286,1,'2024-12-08 06:54:51','2024-12-08 06:54:51'),(1464,287,1,'2024-12-08 06:56:05','2024-12-08 06:56:05'),(1465,288,1,'2024-12-08 06:56:05','2024-12-08 06:56:05'),(1466,289,1,'2024-12-08 06:56:57','2024-12-08 06:56:57'),(1467,290,1,'2024-12-08 06:56:57','2024-12-08 06:56:57'),(1468,291,1,'2024-12-08 07:02:39','2024-12-08 07:02:39'),(1469,292,1,'2024-12-08 07:02:39','2024-12-08 07:02:39'),(1470,293,1,'2024-12-08 08:19:04','2024-12-08 08:19:04'),(1471,294,1,'2024-12-08 08:19:04','2024-12-08 08:19:04'),(1472,295,1,'2024-12-08 08:43:16','2024-12-08 08:43:16'),(1473,296,1,'2024-12-08 08:43:16','2024-12-08 08:43:16'),(1474,297,1,'2024-12-08 08:49:36','2024-12-08 08:49:36'),(1475,298,1,'2024-12-08 08:49:36','2024-12-08 08:49:36'),(1476,299,1,'2024-12-10 09:20:50','2024-12-10 09:20:50'),(1477,300,1,'2024-12-10 09:20:50','2024-12-10 09:20:50'),(1478,301,1,'2024-12-10 09:32:32','2024-12-10 09:32:32'),(1479,302,1,'2024-12-10 09:32:32','2024-12-10 09:32:32'),(1480,303,1,'2024-12-10 09:41:28','2024-12-10 09:41:28'),(1481,304,1,'2024-12-10 09:41:28','2024-12-10 09:41:28'),(1482,305,1,'2024-12-10 09:54:38','2024-12-10 09:54:38'),(1483,306,1,'2024-12-10 09:54:38','2024-12-10 09:54:38'),(1484,307,1,'2024-12-10 09:55:18','2024-12-10 09:55:18'),(1485,308,1,'2024-12-10 09:55:18','2024-12-10 09:55:18'),(1486,309,1,'2024-12-10 09:55:39','2024-12-10 09:55:39'),(1487,310,1,'2024-12-10 09:55:39','2024-12-10 09:55:39'),(1488,311,1,'2024-12-10 09:56:25','2024-12-10 09:56:25'),(1489,312,1,'2024-12-10 09:56:25','2024-12-10 09:56:25'),(1490,313,1,'2024-12-10 10:18:40','2024-12-10 10:18:40'),(1491,314,1,'2024-12-10 10:18:40','2024-12-10 10:18:40'),(1492,315,1,'2024-12-10 10:43:51','2024-12-10 10:43:51'),(1493,316,1,'2024-12-10 10:43:51','2024-12-10 10:43:51'),(1494,317,1,'2024-12-10 10:45:00','2024-12-10 10:45:00'),(1495,318,1,'2024-12-10 10:45:00','2024-12-10 10:45:00'),(1496,319,1,'2024-12-11 09:51:02','2024-12-11 09:51:02'),(1497,320,1,'2024-12-11 09:51:02','2024-12-11 09:51:02'),(1498,321,1,'2024-12-11 09:52:42','2024-12-11 09:52:42'),(1499,322,1,'2024-12-11 09:52:42','2024-12-11 09:52:42');
/*!40000 ALTER TABLE `application_status_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cluster_lists`
--

DROP TABLE IF EXISTS `cluster_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cluster_lists` (
  `ClusterID` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Label` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ClusterID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cluster_lists`
--

LOCK TABLES `cluster_lists` WRITE;
/*!40000 ALTER TABLE `cluster_lists` DISABLE KEYS */;
INSERT INTO `cluster_lists` VALUES (1,'N/A',NULL,NULL),(2,'Academic',NULL,NULL),(3,'Socio-Cultural',NULL,NULL),(4,'Sports',NULL,NULL),(5,'Ministry',NULL,NULL);
/*!40000 ALTER TABLE `cluster_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `denied_lists`
--

DROP TABLE IF EXISTS `denied_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `denied_lists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `StatusID` bigint unsigned NOT NULL,
  `Feedback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `denied_lists_statusid_foreign_idx` (`StatusID`),
  CONSTRAINT `denied_lists_statusid_foreign` FOREIGN KEY (`StatusID`) REFERENCES `application_status_lists` (`StatusID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `denied_lists`
--

LOCK TABLES `denied_lists` WRITE;
/*!40000 ALTER TABLE `denied_lists` DISABLE KEYS */;
/*!40000 ALTER TABLE `denied_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` timestamp NOT NULL,
  `end_time` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (11,'shat','2024-10-21 16:00:00','2024-10-22 16:00:00','2024-10-28 23:50:17','2024-10-28 23:50:31'),(12,'hahhaha','2024-10-31 23:00:00','2024-11-01 08:30:00','2024-10-29 00:13:47','2024-10-29 00:13:47'),(13,'USeP 46th Foundation','2024-12-10 16:00:00','2024-12-10 16:00:00','2024-12-10 07:45:44','2024-12-10 07:46:17');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_08_14_195652_createcreate_application_forms_table',1),(5,'2024_08_17_100000_create_cluster_lists_table',1),(6,'2024_08_17_101000_create_organizations_table',1),(7,'2024_08_17_102000_create_document_types_table',1),(8,'2024_08_17_103000_create_organization_document_lists_table',1),(9,'2024_08_17_104000_create_student_infos_table',1),(10,'2024_08_17_105000_create_officer_lists_table',1),(11,'2024_08_17_106000_create_member_lists_table',1),(12,'2024_08_17_107000_create_staff_infos_table',1),(13,'2024_08_17_108000_create_adviser_infos_table',1),(14,'2024_08_17_109000_create_adviser_lists_table',1),(15,'2024_08_17_110000_create_checklists_table',1),(16,'2024_08_17_111000_create_application_infos_table',1),(17,'2024_08_17_112000_create_application_student_lists_table',1),(18,'2024_08_17_113000_create_application_staff_lists_table',1),(19,'2024_08_17_114000_create_application_checklists_table',1),(20,'2024_08_17_115000_create_status_types_table',1),(21,'2024_08_17_116000_create_application_status_lists_table',1),(22,'2024_08_17_117000_create_pending_lists_table',1),(23,'2024_08_17_118000_create_return_lists_table',1),(24,'2024_08_17_119000_create_denied_lists_table',1),(25,'2024_08_17_120000_create_accepted_lists_table',1),(26,'2024_10_08_161714_create_events_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization_document_lists`
--

DROP TABLE IF EXISTS `organization_document_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organization_document_lists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `OrganizationEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `DocumentType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `File` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `organization_document_lists_organizationid_foreign` (`OrganizationEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization_document_lists`
--

LOCK TABLES `organization_document_lists` WRITE;
/*!40000 ALTER TABLE `organization_document_lists` DISABLE KEYS */;
INSERT INTO `organization_document_lists` VALUES (2,'arsenalchristopherjr@gmail.com','2024-11-17 10:08:32','2024-11-17 10:08:32','Accomplished Application Form','1731866912.pdf'),(3,'bec@gmail.com','2024-11-17 12:23:09','2024-11-17 12:23:09','Accomplished Application Form','1731874989.pdf');
/*!40000 ALTER TABLE `organization_document_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `organizations` (
  `OrganizationID` bigint unsigned NOT NULL AUTO_INCREMENT,
  `OrganizationName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrganizationDescription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ClusterID` bigint unsigned DEFAULT NULL,
  `EstablishYear` year DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `OrganizationEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OrganizationStatus` tinyint DEFAULT '0',
  PRIMARY KEY (`OrganizationID`),
  KEY `organization_user_id_idx` (`OrganizationEmail`),
  KEY `cluster_idx` (`ClusterID`),
  CONSTRAINT `cluster` FOREIGN KEY (`ClusterID`) REFERENCES `cluster_lists` (`ClusterID`)
) ENGINE=InnoDB AUTO_INCREMENT=2033 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations`
--

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
INSERT INTO `organizations` VALUES (2028,'OJT',NULL,NULL,2024,'2024-10-28 22:28:37','2024-10-28 22:28:37','Arz Gwapo',0),(2029,'YFC - Youth For Christ',NULL,NULL,2023,'2024-10-28 23:41:56','2024-10-28 23:41:56','Chris Arz',0),(2030,'CFD - Catholic Faith Defenders',NULL,NULL,1998,'2024-11-17 09:32:48','2024-11-17 09:32:48','cfd@gmail.com',0),(2031,'BEC - Basic Ecclesial Community','A catholic ministry',5,2014,'2024-11-17 12:24:10','2024-12-11 12:52:03','bec@gmail.com',1),(2032,'USAO - University Student - Athletes\' Organization',NULL,4,2014,'2024-12-11 10:23:33','2024-12-11 10:23:33','usao@usep.edu.ph',0);
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
INSERT INTO `password_reset_tokens` VALUES ('arzkirigaya@gmail.com','$2y$12$Jwt4KNRBwFOBvyvE5giEDewdx2EvvnpAUPS1GbzQjGvUlwpefQN6m','2024-12-10 07:31:10');
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pending_lists`
--

DROP TABLE IF EXISTS `pending_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pending_lists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `StatusID` bigint unsigned NOT NULL,
  `Feedback` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pending_lists_statusid_foreign_idx` (`StatusID`),
  CONSTRAINT `pending_lists_statusid_foreign` FOREIGN KEY (`StatusID`) REFERENCES `application_status_lists` (`StatusID`)
) ENGINE=InnoDB AUTO_INCREMENT=272 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pending_lists`
--

LOCK TABLES `pending_lists` WRITE;
/*!40000 ALTER TABLE `pending_lists` DISABLE KEYS */;
INSERT INTO `pending_lists` VALUES (195,1428,'balik lng sunod','2024-10-28 22:19:10','2024-11-17 13:09:05'),(196,1428,'Process paper in the OSAS','2024-10-28 22:19:39','2024-10-28 22:19:39'),(197,1429,'','2024-10-28 22:32:38','2024-10-28 22:32:38'),(198,1430,NULL,'2024-10-28 23:44:55','2024-10-28 23:46:52'),(199,1430,'On process for approval','2024-10-28 23:45:50','2024-10-28 23:45:50'),(200,1431,'gwapo kaayo ko','2024-10-29 00:10:37','2024-10-29 00:11:12'),(201,1431,'gwapo kaayo ko','2024-10-29 00:11:12','2024-10-29 00:11:12'),(202,1428,'balik lng sunod','2024-11-17 13:09:05','2024-11-17 13:09:05'),(203,1432,'','2024-11-24 11:07:50','2024-11-24 11:07:50'),(204,1433,'','2024-12-04 09:10:02','2024-12-04 09:10:02'),(205,1434,'','2024-12-08 05:14:28','2024-12-08 05:14:28'),(206,1435,'','2024-12-08 05:35:33','2024-12-08 05:35:33'),(207,1436,'','2024-12-08 05:36:30','2024-12-08 05:36:30'),(208,1437,'','2024-12-08 05:37:03','2024-12-08 05:37:03'),(209,1438,'','2024-12-08 05:37:03','2024-12-08 05:37:03'),(210,1439,'','2024-12-08 05:38:43','2024-12-08 05:38:43'),(211,1440,'','2024-12-08 05:38:43','2024-12-08 05:38:43'),(212,1441,'','2024-12-08 06:44:04','2024-12-08 06:44:04'),(213,1442,'','2024-12-08 06:44:04','2024-12-08 06:44:04'),(214,1443,'','2024-12-08 06:44:52','2024-12-08 06:44:52'),(215,1444,'','2024-12-08 06:44:52','2024-12-08 06:44:52'),(216,1445,'','2024-12-08 06:45:29','2024-12-08 06:45:29'),(217,1446,'','2024-12-08 06:45:29','2024-12-08 06:45:29'),(218,1447,'','2024-12-08 06:46:30','2024-12-08 06:46:30'),(219,1448,'','2024-12-08 06:46:30','2024-12-08 06:46:30'),(220,1449,'','2024-12-08 06:48:07','2024-12-08 06:48:07'),(221,1450,'','2024-12-08 06:48:07','2024-12-08 06:48:07'),(222,1451,'','2024-12-08 06:48:11','2024-12-08 06:48:11'),(223,1452,'','2024-12-08 06:48:13','2024-12-08 06:48:13'),(224,1453,'','2024-12-08 06:49:42','2024-12-08 06:49:42'),(225,1454,'','2024-12-08 06:49:42','2024-12-08 06:49:42'),(226,1455,'','2024-12-08 06:49:43','2024-12-08 06:49:43'),(227,1456,'','2024-12-08 06:49:44','2024-12-08 06:49:44'),(228,1457,'','2024-12-08 06:49:45','2024-12-08 06:49:45'),(229,1458,'','2024-12-08 06:49:45','2024-12-08 06:49:45'),(230,1459,'','2024-12-08 06:49:46','2024-12-08 06:49:46'),(231,1460,'','2024-12-08 06:49:46','2024-12-08 06:49:46'),(232,1461,'','2024-12-08 06:50:00','2024-12-08 06:50:00'),(233,1462,'','2024-12-08 06:54:51','2024-12-08 06:54:51'),(234,1463,'','2024-12-08 06:54:51','2024-12-08 06:54:51'),(235,1464,'','2024-12-08 06:56:05','2024-12-08 06:56:05'),(236,1465,'','2024-12-08 06:56:05','2024-12-08 06:56:05'),(237,1466,'','2024-12-08 06:56:57','2024-12-08 06:56:57'),(238,1467,'','2024-12-08 06:56:57','2024-12-08 06:56:57'),(239,1468,'','2024-12-08 07:02:39','2024-12-08 07:02:39'),(240,1469,'gwapoko','2024-12-08 07:02:39','2024-12-08 07:03:44'),(241,1469,'gwapoko','2024-12-08 07:03:44','2024-12-08 07:03:44'),(242,1470,'','2024-12-08 08:19:04','2024-12-08 08:19:04'),(243,1471,'','2024-12-08 08:19:04','2024-12-08 08:19:04'),(244,1472,'','2024-12-08 08:43:16','2024-12-08 08:43:16'),(245,1473,'','2024-12-08 08:43:16','2024-12-08 08:43:16'),(246,1474,'','2024-12-08 08:49:36','2024-12-08 08:49:36'),(247,1475,'','2024-12-08 08:49:36','2024-12-08 08:49:36'),(248,1476,'','2024-12-10 09:20:50','2024-12-10 09:20:50'),(249,1477,'','2024-12-10 09:20:50','2024-12-10 09:20:50'),(250,1478,'','2024-12-10 09:32:32','2024-12-10 09:32:32'),(251,1479,'','2024-12-10 09:32:32','2024-12-10 09:32:32'),(252,1480,'','2024-12-10 09:41:28','2024-12-10 09:41:28'),(253,1481,'','2024-12-10 09:41:28','2024-12-10 09:41:28'),(254,1482,'','2024-12-10 09:54:38','2024-12-10 09:54:38'),(255,1483,'','2024-12-10 09:54:38','2024-12-10 09:54:38'),(256,1484,'','2024-12-10 09:55:18','2024-12-10 09:55:18'),(257,1485,'','2024-12-10 09:55:18','2024-12-10 09:55:18'),(258,1486,'','2024-12-10 09:55:39','2024-12-10 09:55:39'),(259,1487,'','2024-12-10 09:55:39','2024-12-10 09:55:39'),(260,1488,'','2024-12-10 09:56:25','2024-12-10 09:56:25'),(261,1489,'','2024-12-10 09:56:25','2024-12-10 09:56:25'),(262,1490,'','2024-12-10 10:18:40','2024-12-10 10:18:40'),(263,1491,'','2024-12-10 10:18:40','2024-12-10 10:18:40'),(264,1492,'','2024-12-10 10:43:51','2024-12-10 10:43:51'),(265,1493,'','2024-12-10 10:43:51','2024-12-10 10:43:51'),(266,1494,'','2024-12-10 10:45:00','2024-12-10 10:45:00'),(267,1495,'','2024-12-10 10:45:00','2024-12-10 10:45:00'),(268,1496,'','2024-12-11 09:51:02','2024-12-11 09:51:02'),(269,1497,'','2024-12-11 09:51:02','2024-12-11 09:51:02'),(270,1498,'','2024-12-11 09:52:42','2024-12-11 09:52:42'),(271,1499,'','2024-12-11 09:52:42','2024-12-11 09:52:42');
/*!40000 ALTER TABLE `pending_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('TeTGyQ7NiaElFMM6BnWRND8YpIVOgeykgfq7kN6q',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUzZaa0FiMzhQaFF4ZjI3N0hpenRDaTk1TTZvT1JEQXdKVVhGcmtMbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQvb3JnYW5pemF0aW9uIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1733951812);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_types`
--

DROP TABLE IF EXISTS `status_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status_types` (
  `StatusType` int unsigned NOT NULL,
  `Label` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`StatusType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_types`
--

LOCK TABLES `status_types` WRITE;
/*!40000 ALTER TABLE `status_types` DISABLE KEYS */;
INSERT INTO `status_types` VALUES (1,'Pending',NULL,NULL),(2,'Denied',NULL,NULL),(3,'Accepted',NULL,NULL);
/*!40000 ALTER TABLE `status_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int NOT NULL,
  `email_verified` tinyint NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Christopher Gwapo','arzkirigaya@gmail.com',NULL,'$2y$12$qgzgCpoE6bsylwV0HbT/mOsuWhPsWHRPQEkPNUbyjoAI3YDrst6ka','U78ZV3Fbk2jue3jdCFtwfpZURW7C1Sg5Xl3E19uvWbdufRIxUW62GEwVyjzY','2024-08-22 14:26:01','2024-10-28 20:52:25',1,1),(2,'Christopher Arsenal Jr','test@test.com',NULL,'$2y$12$rsyWK16C/PiFMprYFXZcY.3PRS4ZIzTBUVj05PsfvmVehEbvnzLda',NULL,'2024-10-24 19:44:47','2024-12-11 12:46:20',2,1),(3,'Christopher Gwapo','arsenalchristopherjr@gmail.com',NULL,'$2y$12$7iTfP/CtoQAgRNoZzCxa2Oelhbv1MVClt5Rybd/j5M2RYblbx/btu',NULL,'2024-10-29 00:32:31','2024-12-11 12:52:02',3,1),(4,'CFD - Catholic Faith Defenders','cfd@usep.edu.ph',NULL,'$2y$12$DCXStY8E6BFO.3bS/pmHd.qutGODzAdYnb4Q3ipb7J58wyn9eeTjq',NULL,'2024-11-14 09:58:48','2024-12-11 12:52:02',3,1),(5,'BEC - Basic Ecclesial Community','bec@gmail.com',NULL,'$2y$12$e9AiIpVzXI7W9hKRW2pLKuaTN7mZ5sbZTb4VXDWRMxbwqMNCHZ9SS',NULL,'2024-11-17 12:21:34','2024-12-11 12:52:03',3,1);
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

-- Dump completed on 2024-12-12  5:19:54
