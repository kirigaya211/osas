CREATE DATABASE  IF NOT EXISTS `practice_osas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `practice_osas`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: practice_osas
-- ------------------------------------------------------
-- Server version	9.0.1

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accepted_lists`
--

LOCK TABLES `accepted_lists` WRITE;
/*!40000 ALTER TABLE `accepted_lists` DISABLE KEYS */;
INSERT INTO `accepted_lists` VALUES (19,1520,'Approved','2025-01-03 19:19:05','2025-01-03 19:19:05'),(20,1521,'Approved','2025-01-03 19:19:29','2025-01-03 19:19:29'),(21,1525,'Approved Congratulations!','2025-01-03 19:44:43','2025-01-03 19:44:43');
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
) ENGINE=InnoDB AUTO_INCREMENT=859 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_check_lists`
--

LOCK TABLES `application_check_lists` WRITE;
/*!40000 ALTER TABLE `application_check_lists` DISABLE KEYS */;
INSERT INTO `application_check_lists` VALUES (690,333,'Accomplished Application Form','2024-12-17 01:49:14','2024-12-17 01:49:14'),(691,333,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-17 01:49:14','2024-12-17 01:49:14'),(692,333,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-17 01:49:14','2024-12-17 01:49:14'),(693,333,'Information Sheet of Student Organization Officer','2024-12-17 01:49:14','2024-12-17 01:49:14'),(694,333,'List of Organization Members','2024-12-17 01:49:14','2024-12-17 01:49:14'),(695,333,'Student Organization Constitution and Bylaws','2024-12-17 01:49:14','2024-12-17 01:49:14'),(696,333,'Mission and Vision Statement','2024-12-17 01:49:14','2024-12-17 01:49:14'),(697,333,'Resolution','2024-12-17 01:49:14','2024-12-17 01:49:14'),(698,333,'Student Organization Official Logo','2024-12-17 01:49:14','2024-12-17 01:49:14'),(699,333,'Action and Financial Plan','2024-12-17 01:49:14','2024-12-17 01:49:14'),(700,334,'Accomplished Application Form','2024-12-17 01:49:14','2024-12-17 01:49:14'),(701,334,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-17 01:49:14','2024-12-17 01:49:14'),(702,334,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-17 01:49:14','2024-12-17 01:49:14'),(703,334,'Information Sheet of Student Organization Officer','2024-12-17 01:49:14','2024-12-17 01:49:14'),(704,334,'List of Organization Members','2024-12-17 01:49:14','2024-12-17 01:49:14'),(705,334,'Student Organization Constitution and Bylaws','2024-12-17 01:49:14','2024-12-17 01:49:14'),(706,334,'Mission and Vision Statement','2024-12-17 01:49:14','2024-12-17 01:49:14'),(707,334,'Resolution','2024-12-17 01:49:14','2024-12-17 01:49:14'),(708,334,'Student Organization Official Logo','2024-12-17 01:49:14','2024-12-17 01:49:14'),(709,334,'Action and Financial Plan','2024-12-17 01:49:14','2024-12-17 01:49:14'),(710,335,'Accomplished Application Form','2024-12-18 00:18:20','2024-12-18 00:18:20'),(711,335,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-18 00:18:20','2024-12-18 00:18:20'),(712,335,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-18 00:18:20','2024-12-18 00:18:20'),(713,335,'Information Sheet of Student Organization Officer','2024-12-18 00:18:20','2024-12-18 00:18:20'),(714,335,'List of Organization Members','2024-12-18 00:18:20','2024-12-18 00:18:20'),(715,335,'Student Organization Constitution and Bylaws','2024-12-18 00:18:20','2024-12-18 00:18:20'),(716,335,'Mission and Vision Statement','2024-12-18 00:18:20','2024-12-18 00:18:20'),(717,335,'Resolution','2024-12-18 00:18:20','2024-12-18 00:18:20'),(718,335,'Student Organization Official Logo','2024-12-18 00:18:20','2024-12-18 00:18:20'),(719,335,'Action and Financial Plan','2024-12-18 00:18:20','2024-12-18 00:18:20'),(720,336,'Accomplished Application Form','2024-12-18 00:18:20','2024-12-18 00:18:20'),(721,336,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-18 00:18:20','2024-12-18 00:18:20'),(722,336,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-18 00:18:20','2024-12-18 00:18:20'),(723,336,'Information Sheet of Student Organization Officer','2024-12-18 00:18:20','2024-12-18 00:18:20'),(724,336,'List of Organization Members','2024-12-18 00:18:20','2024-12-18 00:18:20'),(725,336,'Student Organization Constitution and Bylaws','2024-12-18 00:18:20','2024-12-18 00:18:20'),(726,336,'Mission and Vision Statement','2024-12-18 00:18:20','2024-12-18 00:18:20'),(727,336,'Resolution','2024-12-18 00:18:20','2024-12-18 00:18:20'),(728,336,'Student Organization Official Logo','2024-12-18 00:18:20','2024-12-18 00:18:20'),(729,336,'Action and Financial Plan','2024-12-18 00:18:20','2024-12-18 00:18:20'),(730,337,'Student Organization Constitution and Bylaws','2024-12-18 18:36:56','2024-12-18 18:36:56'),(731,337,'List of Organization Members','2024-12-18 18:36:56','2024-12-18 18:36:56'),(732,337,'Information Sheet of Student Organization Officer','2024-12-18 18:36:56','2024-12-18 18:36:56'),(733,337,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-18 18:36:56','2024-12-18 18:36:56'),(734,337,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-18 18:36:56','2024-12-18 18:36:56'),(740,338,'Student Organization Constitution and Bylaws','2024-12-18 18:37:40','2024-12-18 18:37:40'),(741,338,'List of Organization Members','2024-12-18 18:37:40','2024-12-18 18:37:40'),(742,338,'Information Sheet of Student Organization Officer','2024-12-18 18:37:40','2024-12-18 18:37:40'),(743,338,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-18 18:37:40','2024-12-18 18:37:40'),(744,338,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-18 18:37:40','2024-12-18 18:37:40'),(745,338,'Accomplished Application Form','2024-12-18 18:37:40','2024-12-18 18:37:40'),(746,339,'Accomplished Application Form','2024-12-18 18:57:23','2024-12-18 18:57:23'),(747,339,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-18 18:57:23','2024-12-18 18:57:23'),(748,339,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-18 18:57:23','2024-12-18 18:57:23'),(749,339,'Accomplishment Report','2024-12-18 18:57:23','2024-12-18 18:57:23'),(750,339,'Financial Report','2024-12-18 18:57:23','2024-12-18 18:57:23'),(751,339,'Action Plan and Financial Plan','2024-12-18 18:57:23','2024-12-18 18:57:23'),(752,340,'Accomplished Application Form','2024-12-18 18:57:23','2024-12-18 18:57:23'),(753,340,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-18 18:57:23','2024-12-18 18:57:23'),(754,340,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-18 18:57:23','2024-12-18 18:57:23'),(755,340,'Accomplishment Report','2024-12-18 18:57:23','2024-12-18 18:57:23'),(756,340,'Financial Report','2024-12-18 18:57:23','2024-12-18 18:57:23'),(757,340,'Action Plan and Financial Plan','2024-12-18 18:57:23','2024-12-18 18:57:23'),(763,341,'Accomplished Application Form','2024-12-25 22:39:05','2024-12-25 22:39:05'),(764,341,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2024-12-25 22:39:05','2024-12-25 22:39:05'),(765,341,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2024-12-25 22:39:05','2024-12-25 22:39:05'),(766,341,'Information Sheet of Student Organization Officer','2024-12-25 22:39:05','2024-12-25 22:39:05'),(767,341,'List of Organization Members','2024-12-25 22:39:05','2024-12-25 22:39:05'),(768,341,'Student Organization Constitution and Bylaws','2024-12-25 22:39:05','2024-12-25 22:39:05'),(769,341,'Resolution','2024-12-25 22:39:05','2024-12-25 22:39:05'),(770,341,'Mission and Vision Statement','2024-12-25 22:39:05','2024-12-25 22:39:05'),(771,341,'Student Organization Official Logo','2024-12-25 22:39:05','2024-12-25 22:39:05'),(772,341,'Action and Financial Plan','2024-12-25 22:39:05','2024-12-25 22:39:05'),(773,342,'Accomplished Application Form','2025-01-03 19:03:26','2025-01-03 19:03:26'),(774,343,'Accomplished Application Form','2025-01-03 19:15:33','2025-01-03 19:15:33'),(775,344,'Accomplished Application Form','2025-01-03 19:16:03','2025-01-03 19:16:03'),(776,345,'Accomplished Application Form','2025-01-03 19:16:48','2025-01-03 19:16:48'),(777,346,'Accomplished Application Form','2025-01-03 19:17:14','2025-01-03 19:17:14'),(778,347,'Accomplished Application Form','2025-01-03 19:18:07','2025-01-03 19:18:07'),(779,348,'Accomplished Application Form','2025-01-03 19:43:26','2025-01-03 19:43:26'),(780,348,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2025-01-03 19:43:26','2025-01-03 19:43:26'),(781,348,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2025-01-03 19:43:26','2025-01-03 19:43:26'),(782,348,'Information Sheet of Student Organization Officer','2025-01-03 19:43:26','2025-01-03 19:43:26'),(783,348,'List of Organization Members','2025-01-03 19:43:26','2025-01-03 19:43:26'),(784,348,'Student Organization Constitution and Bylaws','2025-01-03 19:43:26','2025-01-03 19:43:26'),(785,348,'Mission and Vision Statement','2025-01-03 19:43:26','2025-01-03 19:43:26'),(786,348,'Resolution','2025-01-03 19:43:26','2025-01-03 19:43:26'),(787,348,'Student Organization Official Logo','2025-01-03 19:43:26','2025-01-03 19:43:26'),(788,348,'Action and Financial Plan','2025-01-03 19:43:26','2025-01-03 19:43:26'),(789,349,'Accomplished Application Form','2025-02-14 19:25:36','2025-02-14 19:25:36'),(790,349,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2025-02-14 19:25:36','2025-02-14 19:25:36'),(791,349,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2025-02-14 19:25:36','2025-02-14 19:25:36'),(792,349,'Information Sheet of Student Organization Officer','2025-02-14 19:25:36','2025-02-14 19:25:36'),(793,349,'List of Organization Members','2025-02-14 19:25:36','2025-02-14 19:25:36'),(794,349,'Student Organization Constitution and Bylaws','2025-02-14 19:25:36','2025-02-14 19:25:36'),(795,349,'Mission and Vision Statement','2025-02-14 19:25:36','2025-02-14 19:25:36'),(796,349,'Resolution','2025-02-14 19:25:36','2025-02-14 19:25:36'),(797,349,'Student Organization Official Logo','2025-02-14 19:25:36','2025-02-14 19:25:36'),(798,349,'Action and Financial Plan','2025-02-14 19:25:36','2025-02-14 19:25:36'),(799,350,'Accomplished Application Form','2025-02-14 19:25:36','2025-02-14 19:25:36'),(800,350,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2025-02-14 19:25:36','2025-02-14 19:25:36'),(801,350,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2025-02-14 19:25:36','2025-02-14 19:25:36'),(802,350,'Information Sheet of Student Organization Officer','2025-02-14 19:25:36','2025-02-14 19:25:36'),(803,350,'List of Organization Members','2025-02-14 19:25:36','2025-02-14 19:25:36'),(804,350,'Student Organization Constitution and Bylaws','2025-02-14 19:25:36','2025-02-14 19:25:36'),(805,350,'Mission and Vision Statement','2025-02-14 19:25:36','2025-02-14 19:25:36'),(806,350,'Resolution','2025-02-14 19:25:36','2025-02-14 19:25:36'),(807,350,'Student Organization Official Logo','2025-02-14 19:25:36','2025-02-14 19:25:36'),(808,350,'Action and Financial Plan','2025-02-14 19:25:36','2025-02-14 19:25:36'),(809,351,'Accomplished Application Form','2025-02-14 19:50:32','2025-02-14 19:50:32'),(810,351,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2025-02-14 19:50:32','2025-02-14 19:50:32'),(811,351,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2025-02-14 19:50:32','2025-02-14 19:50:32'),(812,351,'Information Sheet of Student Organization Officer','2025-02-14 19:50:32','2025-02-14 19:50:32'),(813,351,'List of Organization Members','2025-02-14 19:50:32','2025-02-14 19:50:32'),(814,351,'Student Organization Constitution and Bylaws','2025-02-14 19:50:32','2025-02-14 19:50:32'),(815,351,'Mission and Vision Statement','2025-02-14 19:50:32','2025-02-14 19:50:32'),(816,351,'Resolution','2025-02-14 19:50:32','2025-02-14 19:50:32'),(817,351,'Student Organization Official Logo','2025-02-14 19:50:32','2025-02-14 19:50:32'),(818,351,'Action and Financial Plan','2025-02-14 19:50:32','2025-02-14 19:50:32'),(829,352,'Accomplished Application Form','2025-02-14 19:51:14','2025-02-14 19:51:14'),(830,352,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2025-02-14 19:51:14','2025-02-14 19:51:14'),(831,352,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2025-02-14 19:51:14','2025-02-14 19:51:14'),(832,352,'Information Sheet of Student Organization Officer','2025-02-14 19:51:14','2025-02-14 19:51:14'),(833,352,'List of Organization Members','2025-02-14 19:51:14','2025-02-14 19:51:14'),(834,352,'Student Organization Constitution and Bylaws','2025-02-14 19:51:14','2025-02-14 19:51:14'),(835,352,'Mission and Vision Statement','2025-02-14 19:51:14','2025-02-14 19:51:14'),(836,352,'Resolution','2025-02-14 19:51:14','2025-02-14 19:51:14'),(837,352,'Student Organization Official Logo','2025-02-14 19:51:14','2025-02-14 19:51:14'),(838,352,'Action and Financial Plan','2025-02-14 19:51:14','2025-02-14 19:51:14'),(839,353,'Accomplished Application Form','2025-03-09 21:39:14','2025-03-09 21:39:14'),(840,353,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2025-03-09 21:39:14','2025-03-09 21:39:14'),(841,353,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2025-03-09 21:39:14','2025-03-09 21:39:14'),(842,353,'Information Sheet of Student Organization Officer','2025-03-09 21:39:14','2025-03-09 21:39:14'),(843,353,'List of Organization Members','2025-03-09 21:39:14','2025-03-09 21:39:14'),(844,353,'Student Organization Constitution and Bylaws','2025-03-09 21:39:14','2025-03-09 21:39:14'),(845,353,'Mission and Vision Statement','2025-03-09 21:39:14','2025-03-09 21:39:14'),(846,353,'Resolution','2025-03-09 21:39:14','2025-03-09 21:39:14'),(847,353,'Student Organization Official Logo','2025-03-09 21:39:14','2025-03-09 21:39:14'),(848,353,'Action and Financial Plan','2025-03-09 21:39:14','2025-03-09 21:39:14'),(849,354,'Accomplished Application Form','2025-03-09 21:39:14','2025-03-09 21:39:14'),(850,354,'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','2025-03-09 21:39:14','2025-03-09 21:39:14'),(851,354,'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','2025-03-09 21:39:14','2025-03-09 21:39:14'),(852,354,'Information Sheet of Student Organization Officer','2025-03-09 21:39:14','2025-03-09 21:39:14'),(853,354,'List of Organization Members','2025-03-09 21:39:14','2025-03-09 21:39:14'),(854,354,'Student Organization Constitution and Bylaws','2025-03-09 21:39:14','2025-03-09 21:39:14'),(855,354,'Mission and Vision Statement','2025-03-09 21:39:14','2025-03-09 21:39:14'),(856,354,'Resolution','2025-03-09 21:39:14','2025-03-09 21:39:14'),(857,354,'Student Organization Official Logo','2025-03-09 21:39:14','2025-03-09 21:39:14'),(858,354,'Action and Financial Plan','2025-03-09 21:39:14','2025-03-09 21:39:14');
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
) ENGINE=InnoDB AUTO_INCREMENT=355 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_infos`
--

LOCK TABLES `application_infos` WRITE;
/*!40000 ALTER TABLE `application_infos` DISABLE KEYS */;
INSERT INTO `application_infos` VALUES (333,'My Organization','This is my organization.',0,'Accreditation','2024-12-17 01:49:14','2024-12-17 01:49:14','Juan Dela Cruz','org@email.com',9129094503),(334,'My Organization','This is my organization.',0,'Accreditation','2024-12-17 01:49:14','2024-12-17 01:49:14','Juan Dela Cruz','org@email.com',9129094503),(335,'YFC - Youth For Christ','test',0,'Accreditation','2024-12-18 00:18:20','2024-12-18 00:18:20','jjj','arzkirigaya@gmail.com',9129094503),(336,'YFC - Youth For Christ','test',0,'Accreditation','2024-12-18 00:18:20','2024-12-18 00:18:20','jjj','arzkirigaya@gmail.com',9129094503),(337,'USAO - University Student-Athletes’ Organization','The University Student-Athletes’ Organization (USAO), aims to foster a close relationship, develop sports camaraderie and sportsmanship among all athletes, promote high standard of athletic and academic achievement and to support the University Sports Office from broader enhancement of all sports related activities.',0,'Accreditation','2024-12-18 18:36:56','2024-12-18 18:36:56','Christopher G. Arsenal Jr','irjcsapar@usep.edu.ph',9129094503),(338,'USAO - University Student-Athletes’ Organization','The University Student-Athletes’ Organization (USAO), aims to foster a close relationship, develop sports camaraderie and sportsmanship among all athletes, promote high standard of athletic and academic achievement and to support the University Sports Office from broader enhancement of all sports related activities.',0,'Accreditation','2024-12-18 18:36:56','2024-12-18 18:36:56','Christopher G. Arsenal Jr','irjcsapar@usep.edu.ph',9129094503),(339,'USAO - University Student-Athletes’ Organization','The University Student-Athletes’ Organization (USAO)\n\n',2033,'Reaccreditation','2024-12-18 18:57:23','2024-12-18 18:57:23','Christopher G. Arsenal Jr','usao@usep.edu.ph',9129094503),(340,'USAO - University Student-Athletes’ Organization','The University Student-Athletes’ Organization (USAO)\n\n',2033,'Reaccreditation','2024-12-18 18:57:23','2024-12-18 18:57:23','Christopher G. Arsenal Jr','usao@usep.edu.ph',9129094503),(341,'YFC - Youth For Christ','A catholic ministry within the university.',0,'Accreditation','2024-12-25 22:33:23','2024-12-25 22:33:23','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(342,'YFC - Youth For Christ','balalalalala',0,'Accreditation','2025-01-03 19:03:25','2025-01-03 19:03:25','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(343,'YFC - Youth For Christ','f SDf e fs',0,'Accreditation','2025-01-03 19:15:33','2025-01-03 19:15:33','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(344,'CFD - Catholic Faith Defenders','ASAWDA DA',0,'Accreditation','2025-01-03 19:16:03','2025-01-03 19:16:03','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(345,'BEC - Basic Ecclesial Community ','as da d',0,'Accreditation','2025-01-03 19:16:48','2025-01-03 19:16:48','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(346,'USAO - University Student-Athletes’ Organization','HAHAHAHAHA',0,'Accreditation','2025-01-03 19:17:14','2025-01-03 19:17:14','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(347,'AITIS - Association of Information Technology ','DASDAW',0,'Accreditation','2025-01-03 19:18:07','2025-01-03 19:18:07','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(348,'BCC - Blockchain Campus Conference','New organization focus on blockchain development',0,'Accreditation','2025-01-03 19:43:26','2025-01-03 19:43:26','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(349,'YFC - Youth For Christ','gwapo ko',0,'Accreditation','2025-02-14 19:25:36','2025-02-14 19:25:36','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(350,'YFC - Youth For Christ','gwapo ko',0,'Accreditation','2025-02-14 19:25:36','2025-02-14 19:25:36','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(351,'YFC - Youth For Christ','test',0,'Accreditation','2025-02-14 19:50:32','2025-02-14 19:50:32','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(352,'YFC - Youth For Christ','test',0,'Accreditation','2025-02-14 19:50:32','2025-02-14 19:50:32','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(353,'BCC - Blockchain Campus Conference','adnawjdhawjdhaw',0,'Accreditation','2025-03-09 21:39:14','2025-03-09 21:39:14','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503),(354,'BCC - Blockchain Campus Conference','adnawjdhawjdhaw',0,'Accreditation','2025-03-09 21:39:14','2025-03-09 21:39:14','Christopher G. Arsenal Jr','arzkirigaya@gmail.com',9129094503);
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
) ENGINE=InnoDB AUTO_INCREMENT=1532 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application_status_lists`
--

LOCK TABLES `application_status_lists` WRITE;
/*!40000 ALTER TABLE `application_status_lists` DISABLE KEYS */;
INSERT INTO `application_status_lists` VALUES (1520,343,2,'2025-01-03 19:15:33','2025-01-03 19:23:35'),(1521,344,3,'2025-01-03 19:16:03','2025-01-03 19:19:29'),(1522,345,1,'2025-01-03 19:16:48','2025-01-03 19:16:48'),(1523,346,1,'2025-01-03 19:17:14','2025-01-03 19:17:14'),(1524,347,1,'2025-01-03 19:18:07','2025-01-03 19:18:07'),(1525,348,3,'2025-01-03 19:43:26','2025-01-03 19:44:43'),(1526,349,1,'2025-02-14 19:25:36','2025-02-14 19:25:36'),(1527,350,1,'2025-02-14 19:25:36','2025-02-14 19:25:36'),(1528,351,1,'2025-02-14 19:50:32','2025-02-14 19:50:32'),(1529,352,1,'2025-02-14 19:50:32','2025-02-14 19:50:32'),(1530,353,1,'2025-03-09 21:39:14','2025-03-09 21:39:14'),(1531,354,1,'2025-03-09 21:39:14','2025-03-09 21:39:14');
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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `denied_lists`
--

LOCK TABLES `denied_lists` WRITE;
/*!40000 ALTER TABLE `denied_lists` DISABLE KEYS */;
INSERT INTO `denied_lists` VALUES (54,1520,'','2025-01-03 19:23:35','2025-01-03 19:23:35');
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (11,'shat','2024-10-21 16:00:00','2024-10-22 16:00:00','2024-10-28 23:50:17','2024-10-28 23:50:31'),(12,'hahhaha','2024-10-31 23:00:00','2024-11-01 08:30:00','2024-10-29 00:13:47','2024-10-29 00:13:47'),(13,'USeP 46th Foundation','2024-12-10 16:00:00','2024-12-10 16:00:00','2024-12-10 07:45:44','2024-12-10 07:46:17'),(14,'new year','2024-12-30 16:00:00','2024-12-31 16:00:00','2024-12-25 22:44:23','2024-12-25 22:44:23'),(15,'Presentation','2025-01-03 16:00:00','2025-01-04 16:00:00','2025-01-03 19:51:49','2025-01-03 19:51:49');
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
  `OrganizationEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `DocumentType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `File` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `organization_document_lists_organizationid_foreign` (`OrganizationEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization_document_lists`
--

LOCK TABLES `organization_document_lists` WRITE;
/*!40000 ALTER TABLE `organization_document_lists` DISABLE KEYS */;
INSERT INTO `organization_document_lists` VALUES (15,'usao@usep.edu.ph','2024-12-18 18:50:54','2024-12-18 18:50:54','Accomplished Application Form','1734576654.pdf'),(16,'usao@usep.edu.ph','2024-12-18 18:54:54','2024-12-18 18:54:54','Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations','1734576894.pdf'),(17,'usao@usep.edu.ph','2024-12-18 18:55:02','2024-12-18 18:55:02','Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations','1734576902.pdf'),(18,'usao@usep.edu.ph','2024-12-18 18:55:11','2024-12-18 18:55:11','Information Sheet of Student Organization Officer','1734576911.pdf'),(19,'usao@usep.edu.ph','2024-12-18 18:55:22','2024-12-18 18:55:22','List of Organization Members','1734576922.pdf'),(20,'usao@usep.edu.ph','2024-12-18 18:55:30','2024-12-18 18:55:30','Student Organization Constitution and Bylaws','1734576930.pdf');
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
  `OrganizationDescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ClusterID` bigint unsigned DEFAULT NULL,
  `EstablishYear` year DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `OrganizationEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OrganizationStatus` tinyint DEFAULT '0',
  `OrganizationLogo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`OrganizationID`),
  KEY `organization_user_id_idx` (`OrganizationEmail`),
  KEY `cluster_idx` (`ClusterID`),
  CONSTRAINT `cluster` FOREIGN KEY (`ClusterID`) REFERENCES `cluster_lists` (`ClusterID`)
) ENGINE=InnoDB AUTO_INCREMENT=2036 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations`
--

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
INSERT INTO `organizations` VALUES (2031,'BEC - Basic Ecclesial Community','A catholic ministry',5,2014,'2024-11-17 12:24:10','2024-12-18 18:46:29','bec@usep.edu.ph',1,'1734005036.png'),(2033,'USAO - University Student-Athletes’ Organization','A sports organization',4,2018,'2024-12-18 18:46:17','2025-04-28 21:55:03','usao@usep.edu.ph',1,'1734576572.png'),(2034,'YFC - Youth For Christ','Catholic Ministry',5,2019,'2025-01-03 19:31:37','2025-01-03 19:34:31','yfc@usep.edu.ph',1,'1735961603.jpg'),(2035,'BCC - Blockchain Campus Conference','Blockchain Community',3,2024,'2025-01-03 19:46:45','2025-01-03 19:48:05','bcc@usep.edu.ph',1,'1735962465.jpg');
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
) ENGINE=InnoDB AUTO_INCREMENT=309 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pending_lists`
--

LOCK TABLES `pending_lists` WRITE;
/*!40000 ALTER TABLE `pending_lists` DISABLE KEYS */;
INSERT INTO `pending_lists` VALUES (296,1520,'','2025-01-03 19:15:33','2025-01-03 19:23:35'),(297,1521,'Approved','2025-01-03 19:16:03','2025-01-03 19:19:29'),(298,1522,'','2025-01-03 19:16:48','2025-01-03 19:16:48'),(299,1523,'','2025-01-03 19:17:14','2025-01-03 19:17:14'),(300,1524,'','2025-01-03 19:18:07','2025-01-03 19:18:07'),(301,1520,'Lacking of documents','2025-01-03 19:20:01','2025-01-03 19:20:01'),(302,1525,'Approved Congratulations!','2025-01-03 19:43:26','2025-01-03 19:44:43'),(303,1526,'','2025-02-14 19:25:36','2025-02-14 19:25:36'),(304,1527,'','2025-02-14 19:25:36','2025-02-14 19:25:36'),(305,1528,'','2025-02-14 19:50:32','2025-02-14 19:50:32'),(306,1529,'','2025-02-14 19:50:32','2025-02-14 19:50:32'),(307,1530,'','2025-03-09 21:39:14','2025-03-09 21:39:14'),(308,1531,'','2025-03-09 21:39:14','2025-03-09 21:39:14');
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
INSERT INTO `sessions` VALUES ('PRvuXOI2SqEkpMB31YQrTjIghvEKQu4bhGAb6wk0',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVTQ1dGw2VmU4Zlp0WmZ5TEVIRWtscnlaeDFzd1hSR0pQOGdnQWZqSCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL29yZ2FuaXphdGlvbi9Eb2N1bWVudCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1745913541),('St12yqB65WJj10yN5794ktkjsWQe7nd4FaO2CE8X',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRGNraktIUFZJQjkxS0ZoUGdxWGRhUms1NWs0NEwzVzdIV2Vkb2tTVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQvcGVuZGluZy8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1746515293),('U7a69YpNjozk5CFVcyVFoEG6vGXFyBZTloB2XcYr',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoidzVZcHJPMm5Vb3g4bnBqZjhuWWwyNjE4ZU8wMXRZd1ZJRENGbGhPViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1745991912),('YkGPs3BnO01KvgTlWhVLgeBpdqViJkpGrVzZeW94',5,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoibnNYRXEwZ0dmNlg1bHVvYkJGTDJXNWN6RDlaMHB0ZENkbkV6S0hOVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vcmdhbml6YXRpb24vRG9jdW1lbnQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=',1745906165);
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
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Christopher Arsenal Jr','admin@usep.edu.ph',NULL,'$2y$12$qgzgCpoE6bsylwV0HbT/mOsuWhPsWHRPQEkPNUbyjoAI3YDrst6ka','29n2FCgA0KtsvMVt7q8hPz3RlZKLLd93QLNlZZ5fxnnJxBEduTGWCtjkmUGJ','2024-08-22 14:26:01','2025-01-03 18:30:37',1,1,'1735957837.png'),(5,'BEC - Basic Ecclesial Community','bec@usep.edu.ph',NULL,'$2y$12$e9AiIpVzXI7W9hKRW2pLKuaTN7mZ5sbZTb4VXDWRMxbwqMNCHZ9SS','6WxNDa5DORibcvbBXZR6VR0gvSAnN5Eu1hmDOhDf9rRfgcOKVFsTgO2Wb3uR','2024-11-17 12:21:34','2024-12-18 18:46:29',3,1,'1734005036.png'),(8,'USAO - University Student-Athletes\' Organization','usao@usep.edu.ph',NULL,'$2y$12$maBIKT13/zOhZJnETZik3ucwST3vSRtLNH/Z4ZJL5KWQRZMJT9QUC',NULL,'2024-12-18 18:47:19','2025-04-28 21:55:03',3,1,'1734576572.png'),(10,'YFC - Youth for Christ','yfc@usep.edu.ph',NULL,'$2y$12$UTxDYs6NW3O1kjkZD4XM4./VtaCpckiHdEfI9GVbDDPe05bxxLfFS',NULL,'2025-01-03 19:30:21','2025-01-03 19:33:23',3,1,'1735961603.jpg'),(11,'BCC- Blockchain Campus Conference','bcc@usep.edu.ph',NULL,'$2y$12$eJG0HWaSe8KvMHF1CAk1Aex/2pTJKg0by2GoKb1hkg1mHCO9fIE2m',NULL,'2025-01-03 19:45:40','2025-01-03 19:47:45',3,1,'1735962465.jpg');
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

-- Dump completed on 2025-06-18 22:05:52
