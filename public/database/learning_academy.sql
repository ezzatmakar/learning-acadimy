-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: learning_academy
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.2

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_username_unique` (`username`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cats`
--

DROP TABLE IF EXISTS `cats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cats`
--

LOCK TABLES `cats` WRITE;
/*!40000 ALTER TABLE `cats` DISABLE KEYS */;
INSERT INTO `cats` VALUES (1,'programing','2021-07-30 14:31:56','2021-07-30 14:31:56'),(2,'medical','2021-07-30 14:32:24','2021-07-30 14:32:24'),(3,'english','2021-07-30 14:32:32','2021-07-30 14:32:32');
/*!40000 ALTER TABLE `cats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_student`
--

DROP TABLE IF EXISTS `course_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_student` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `student_id` bigint unsigned NOT NULL,
  `status` enum('pending','approve','reject') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_student_course_id_foreign` (`course_id`),
  KEY `course_student_student_id_foreign` (`student_id`),
  CONSTRAINT `course_student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  CONSTRAINT `course_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_student`
--

LOCK TABLES `course_student` WRITE;
/*!40000 ALTER TABLE `course_student` DISABLE KEYS */;
INSERT INTO `course_student` VALUES (1,3,37,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(2,5,17,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(3,9,18,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(4,2,18,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(5,6,25,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(6,5,46,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(7,6,57,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(8,3,26,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(9,7,4,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(10,6,17,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(11,8,38,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(12,9,23,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(13,4,33,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(14,8,13,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(15,7,8,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(16,9,47,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(17,2,37,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(18,7,56,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(19,2,5,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57'),(20,2,17,'pending','2021-07-30 20:13:57','2021-07-30 20:13:57');
/*!40000 ALTER TABLE `course_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` bigint unsigned NOT NULL,
  `trainer_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_cat_id_foreign` (`cat_id`),
  KEY `courses_trainer_id_foreign` (`trainer_id`),
  CONSTRAINT `courses_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `cats` (`id`),
  CONSTRAINT `courses_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,1,3,'course num 1 cat 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',476,'11.png','2021-07-30 15:47:21','2021-07-30 15:47:21'),(2,1,1,'course num 1 cat 2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',218,'12.png','2021-07-30 15:47:21','2021-07-30 15:47:21'),(3,1,2,'course num 1 cat 3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',234,'13.png','2021-07-30 15:47:21','2021-07-30 15:47:21'),(4,2,1,'course num 2 cat 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',155,'21.png','2021-07-30 15:47:21','2021-07-30 15:47:21'),(5,2,3,'course num 2 cat 2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',476,'22.png','2021-07-30 15:47:21','2021-07-30 15:47:21'),(6,2,2,'course num 2 cat 3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',119,'23.png','2021-07-30 15:47:21','2021-07-30 15:47:21'),(7,3,2,'course num 3 cat 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',163,'31.png','2021-07-30 15:47:21','2021-07-30 15:47:21'),(8,3,1,'course num 3 cat 2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',142,'32.png','2021-07-30 15:47:21','2021-07-30 15:47:21'),(9,3,2,'course num 3 cat 3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel augue tempor, accumsan sem nec, pharetra urna. Nulla dictum nec enim ut viverra. Nam id purus a lorem hendrerit commodo. Phasellus sodales quis nisl eget aliquet. Maecenas eget enim vitae ipsum varius iaculis ut et quam. Aliquam auctor ac lacus non faucibus. Sed laoreet, enim sit amet vestibulum condimentum, lorem odio dictum orci, vitae malesuada augue justo quis nulla.',212,'33.png','2021-07-30 15:47:21','2021-07-30 15:47:21');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021_07_29_140914_create_cats_table',1),(2,'2021_07_29_142212_create_trainers_table',1),(3,'2021_07_29_142219_create_courses_table',1),(4,'2021_07_29_142325_create_students_table',1),(5,'2021_07_29_142336_create_admins_table',1),(7,'2021_07_29_151234_create_course_student_table',2),(9,'2021_07_31_004910_create_testimonials_table',3),(10,'2021_07_31_191358_create_settings_table',4),(11,'2021_08_01_095417_create_site_contents_table',5),(16,'2021_08_01_132409_create_news_letters_table',6),(17,'2021_08_01_132445_create_messages_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_letters`
--

DROP TABLE IF EXISTS `news_letters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news_letters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_letters`
--

LOCK TABLES `news_letters` WRITE;
/*!40000 ALTER TABLE `news_letters` DISABLE KEYS */;
INSERT INTO `news_letters` VALUES (1,'m_mostafa1948@yahoo.com','2021-08-01 14:04:11','2021-08-01 14:04:11'),(2,'m_mostafa1948@yahoo.com','2021-08-01 14:04:16','2021-08-01 14:04:16');
/*!40000 ALTER TABLE `news_letters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Learning academy','logo.png','favicon.png','Cario','35 Abou Bakr El-Sedeek, Heliopolis','01067370803','Sun to Thur 9am to 5pm','ezzatmakar93@gmail.com','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.7359937855103!2d31.328786715500833!3d30.10174648186152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458158d55e603dd%3A0xb1d24531fc063b7e!2s35%20Abou%20Bakr%20El-Sedeek%2C%20El-Bostan%2C%20Heliopolis%2C%20Cairo%20Governorate%2C%20Egypt!5e0!3m2!1sen!2sus!4v1627759937220!5m2!1sen!2sus\" width=\"1000\" height=\"400\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>','https://facebook.com','https://twitter.com','https://instagram.com','2021-07-31 19:30:17','2021-07-31 19:30:21');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_contents`
--

DROP TABLE IF EXISTS `site_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `site_contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_contents`
--

LOCK TABLES `site_contents` WRITE;
/*!40000 ALTER TABLE `site_contents` DISABLE KEYS */;
INSERT INTO `site_contents` VALUES (1,'banner_content','{\"title\":\"The purpose of our lives is to be happy. — Dalai Lama\",\"subtitle\":\"Don\'t just promise, prove.\",\"desc\":\"Life will become much easier when we will finally understand which hands to shake and which ones to Hold. Be thankful and proud of the struggles you had in your life. They shaped you in the person you are today. They’ll light your life in the darkness.\"}','2021-08-01 08:07:11','2021-08-01 08:07:11'),(2,'courses_content','{\"title\":\"Latest Courses\",\"subtitle\":\"Find what you need to learn\"}','2021-08-01 11:09:12','2021-08-01 11:09:12');
/*!40000 ALTER TABLE `site_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Maudie Hackett','torp.nakia@rice.net',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(2,'Myrtle Gutkowski','pterry@cummings.org',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(3,'Brandt Bechtelar I','sporer.sunny@kris.net',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(4,'Mr. Shayne Waters DVM','leannon.candida@yahoo.com',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(5,'Garett Stroman','lenore.ullrich@yahoo.com',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(6,'Pasquale Sanford','abashirian@denesik.com',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(7,'Dr. Ava Haag','blick.bria@hotmail.com',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(8,'Mr. Payton Stracke II','orlando.runte@torphy.info',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(9,'Malinda Morar','emie.deckow@fritsch.com',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(10,'Ms. Itzel Kessler','geovanny.abshire@gmail.com',NULL,'2021-07-30 16:15:10','2021-07-30 16:15:10'),(11,'Aurelio Effertz','leannon.bruce@schaefer.info',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(12,'Mia Crooks','gerhold.flossie@kiehn.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(13,'Raquel Trantow','hlabadie@hotmail.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(14,'Emory Roob V','lpadberg@yahoo.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(15,'Nedra Nitzsche','dakota.prohaska@haag.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(16,'Marion Koelpin','graham.roberta@yahoo.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(17,'Raphaelle Considine','kaycee49@parisian.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(18,'Ms. Lavinia Satterfield Jr.','schamberger.sammie@yahoo.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(19,'Ms. Reta Fadel MD','dameon.feest@yahoo.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(20,'Jevon Halvorson','aubrey.watsica@steuber.biz',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(21,'Candelario Hermiston Sr.','camille81@hill.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(22,'Mrs. Lucie Leffler','zulauf.hazle@rogahn.info',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(23,'Dr. Amir Franecki Sr.','liliana29@hotmail.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(24,'Dr. Floy Moen PhD','elfrieda52@kerluke.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(25,'Bernhard Pollich','elmira74@mccullough.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(26,'Kasey Ankunding','zrice@gmail.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(27,'Alycia Hills','ryan.adelbert@botsford.com',NULL,'2021-07-30 16:15:18','2021-07-30 16:15:18'),(28,'Darrin Turcotte','udare@kuvalis.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(29,'Miss Irma Sauer Jr.','peyton.collins@mccullough.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(30,'Marcelle DuBuque','kblick@gmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(31,'Genoveva Spinka','kailee32@hirthe.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(32,'Darian Hegmann','gislason.joel@yahoo.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(33,'Julian Shields','erdman.geoffrey@rutherford.net',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(34,'Pattie Lueilwitz','bradford.upton@cummerata.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(35,'Constance Kassulke IV','jordane.mayer@swift.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(36,'Drew Nienow','elza.treutel@gislason.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(37,'Terrence Hansen','haag.merle@hotmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(38,'Dr. Gunner Hammes Jr.','cleve.reichert@gmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(39,'Graham Block','arvid45@hotmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(40,'Prof. Stan O\'Hara','isabelle.fay@gmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(41,'Kaelyn Leffler','nrogahn@schoen.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(42,'Isabell Hessel III','beatty.dawson@gmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(43,'Prof. Israel Feil Sr.','esteban11@hane.net',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(44,'Aleen Crist','wisoky.florine@gmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(45,'Tate Ledner','tromp.eleonore@hane.org',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(46,'Elna Bruen I','nolan13@mckenzie.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(47,'Tobin Bosco','darron.dach@gmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(48,'Caroline Langworth DDS','zpacocha@hotmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(49,'Prof. Clifton Bechtelar II','mae31@gmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(50,'Prof. Mack Collins IV','chance.cassin@casper.info',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(51,'Della Hoeger V','kory.hickle@farrell.info',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(52,'Cale Walker I','rafaela.kozey@hotmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(53,'Vilma Durgan','blubowitz@schumm.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(54,'Mrs. Brenna Kris','brett86@hotmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(55,'Dr. Hiram Reichel','tquigley@hackett.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(56,'Emile Bahringer','wehner.jamison@kutch.org',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(57,'Rosella Klein','walter.verlie@stanton.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(58,'Prof. Lyric Batz','camylle90@gmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(59,'Maggie Howe','bergnaum.myron@gmail.com',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19'),(60,'Dr. Burley Cormier','wherzog@hilpert.org',NULL,'2021-07-30 16:15:19','2021-07-30 16:15:19');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Girgis Saad','.Net developer','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','1.png','2021-07-31 01:01:00','2021-07-31 01:01:10'),(2,'Ezzat Makar','PHP developer','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','2.png','2021-07-31 01:01:04','2021-07-31 01:01:12'),(3,'Ben Eflic','Actor','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','3.png','2021-07-31 01:01:07','2021-07-31 01:01:14');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trainers`
--

DROP TABLE IF EXISTS `trainers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trainers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spec` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trainers`
--

LOCK TABLES `trainers` WRITE;
/*!40000 ALTER TABLE `trainers` DISABLE KEYS */;
INSERT INTO `trainers` VALUES (1,'Ezzat Malak',NULL,'web development','1.png','2021-07-30 15:27:47','2021-07-30 15:27:47'),(2,'Thomas Malak',NULL,'English teacher','2.png','2021-07-30 15:27:47','2021-07-30 15:27:47'),(3,'Ezzat Makar',NULL,'Software engineering','3.png','2021-07-30 15:27:47','2021-07-30 15:27:47');
/*!40000 ALTER TABLE `trainers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-01 18:08:06
