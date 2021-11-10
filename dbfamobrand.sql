-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: dev61_dbfamobrand
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_notifications`
--

DROP TABLE IF EXISTS `admin_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` bigint(20) unsigned NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_notifications_admin_id_foreign` (`admin_id`),
  CONSTRAINT `admin_notifications_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_notifications`
--

LOCK TABLES `admin_notifications` WRITE;
/*!40000 ALTER TABLE `admin_notifications` DISABLE KEYS */;
INSERT INTO `admin_notifications` VALUES (1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue interdum velit euismod in pellentesque massa. In hac habitasse platea dictumst quisque sagittis.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue interdum velit euismod in pellentesque massa. In hac habitasse platea dictumst quisque sagittis. Netus et malesuada fames ac turpis egestas maecenas. Facilisis gravida neque convallis a cras semper. In vitae turpis massa sed elementum tempus egestas sed sed. Adipiscing at in tellus integer feugiat scelerisque varius morbi. Ultrices tincidunt arcu non sodales neque sodales ut. Porttitor massa id neque aliquam vestibulum morbi. Dui ut ornare lectus sit amet est placerat in. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. In mollis nunc sed id semper risus. Volutpat ac tincidunt vitae semper quis. Viverra maecenas accumsan lacus vel facilisis volutpat est velit egestas.','/admin',0,'2020-06-07 07:37:27','2020-06-07 07:37:27',NULL),(2,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue interdum velit euismod in pellentesque massa. In hac habitasse platea dictumst quisque sagittis.','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Augue interdum velit euismod in pellentesque massa. In hac habitasse platea dictumst quisque sagittis. Netus et malesuada fames ac turpis egestas maecenas. Facilisis gravida neque convallis a cras semper. In vitae turpis massa sed elementum tempus egestas sed sed. Adipiscing at in tellus integer feugiat scelerisque varius morbi. Ultrices tincidunt arcu non sodales neque sodales ut. Porttitor massa id neque aliquam vestibulum morbi. Dui ut ornare lectus sit amet est placerat in. Tempor orci dapibus ultrices in iaculis nunc sed augue lacus. In mollis nunc sed id semper risus. Volutpat ac tincidunt vitae semper quis. Viverra maecenas accumsan lacus vel facilisis volutpat est velit egestas.','/admin',0,'2020-06-07 07:37:27','2020-06-07 07:37:27',NULL);
/*!40000 ALTER TABLE `admin_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'Charles Smith','charlestsmith888@gmail.com','$2y$10$zpRexbiIEbWpFWEoctEtiuhbpUEjthgj16bLlP8nUw0Cz4pCwRc1a','cTXpiqWuC0VWoeiJ6TTOLuZnWEEkP9Vd4BoupQq1ovMkC2YxKN989WCgI9Ty','2020-06-05 10:10:35','2020-06-07 07:37:27');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domain_search`
--

DROP TABLE IF EXISTS `domain_search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domain_search` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domain_search`
--

LOCK TABLES `domain_search` WRITE;
/*!40000 ALTER TABLE `domain_search` DISABLE KEYS */;
INSERT INTO `domain_search` VALUES (1,1,'aaa','2020-06-07 08:52:15','2020-06-07 08:52:15',NULL),(2,2,'bbb','2020-06-07 08:52:15','2020-06-07 08:52:15',NULL);
/*!40000 ALTER TABLE `domain_search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'Sam','sam@mailinaotr.com','1111','test','test1',0,'2020-06-07 07:37:27','2020-06-07 10:40:17',NULL),(2,'Martin','martin@mailinator.com','1111','test2','test2',0,'2020-06-07 07:37:27','2020-06-07 10:41:26',NULL);
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_06_05_102243_create_admins_table',1),(5,'2020_06_07_125614_create_packages_table',2),(6,'2020_06_07_143512_create_feedback_table',3),(7,'2020_06_08_061616_create_admin_notifications_table',4),(8,'2020_06_08_072756_add_image_column_to_users_table',5),(9,'2020_06_08_073146_add_is_block_column_to_users_table',6),(10,'2020_06_08_075750_add_phone_no_column_to_users_table',7),(11,'2020_06_08_101149_create_testimonials_table',8),(12,'2020_06_08_115608_create_subscriptions_table',9),(13,'2020_06_08_124543_create_domain_search_table',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL DEFAULT '0.00',
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,'Logo + Revamp','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet aliquam id diam maecenas. Velit ut tortor pretium viverra suspendisse potenti nullam ac tortor. Tristique senectus et netus et malesuada fames ac turpis egestas. Hac habitasse platea dictumst quisque sagittis purus. Natoque penatibus et magnis dis parturient montes nascetur ridiculus. Non quam lacus suspendisse faucibus interdum posuere lorem. Sit amet luctus venenatis lectus magna fringilla urna porttitor. Tincidunt augue interdum velit euismod. Ultricies mi quis hendrerit dolor magna. Donec enim diam vulputate ut. Turpis egestas maecenas pharetra convallis. Tortor pretium viverra suspendisse potenti. In ornare quam viverra orci sagittis eu volutpat.</p><p>Non consectetur a erat nam at lectus urna duis convallis. Morbi tristique senectus et netus et malesuada fames ac turpis. In iaculis nunc sed augue lacus viverra. Id nibh tortor id aliquet lectus proin nibh nisl condimentum. Id leo in vitae turpis massa. Nisl nisi scelerisque eu ultrices vitae auctor eu. Et magnis dis parturient montes nascetur ridiculus mus. Nibh ipsum consequat nisl vel pretium. In hendrerit gravida rutrum quisque non tellus. Etiam erat velit scelerisque in dictum non consectetur a erat. Fermentum et sollicitudin ac orci. Magna fermentum iaculis eu non diam phasellus vestibulum lorem. Placerat vestibulum lectus mauris ultrices eros in cursus. Pharetra vel turpis nunc eget lorem. Nibh praesent tristique magna sit amet purus gravida quis blandit. Nec nam aliquam sem et tortor consequat id. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Consequat nisl vel pretium lectus quam id leo in. At lectus urna duis convallis convallis.</p>',99.00,'active','2020-06-07 08:52:15','2020-06-07 08:52:15',NULL),(2,'Web Desing + Logo','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet aliquam id diam maecenas. Velit ut tortor pretium viverra suspendisse potenti nullam ac tortor. Tristique senectus et netus et malesuada fames ac turpis egestas. Hac habitasse platea dictumst quisque sagittis purus. Natoque penatibus et magnis dis parturient montes nascetur ridiculus. Non quam lacus suspendisse faucibus interdum posuere lorem. Sit amet luctus venenatis lectus magna fringilla urna porttitor. Tincidunt augue interdum velit euismod. Ultricies mi quis hendrerit dolor magna. Donec enim diam vulputate ut. Turpis egestas maecenas pharetra convallis. Tortor pretium viverra suspendisse potenti. In ornare quam viverra orci sagittis eu volutpat.</p><p>Non consectetur a erat nam at lectus urna duis convallis. Morbi tristique senectus et netus et malesuada fames ac turpis. In iaculis nunc sed augue lacus viverra. Id nibh tortor id aliquet lectus proin nibh nisl condimentum. Id leo in vitae turpis massa. Nisl nisi scelerisque eu ultrices vitae auctor eu. Et magnis dis parturient montes nascetur ridiculus mus. Nibh ipsum consequat nisl vel pretium. In hendrerit gravida rutrum quisque non tellus. Etiam erat velit scelerisque in dictum non consectetur a erat. Fermentum et sollicitudin ac orci. Magna fermentum iaculis eu non diam phasellus vestibulum lorem. Placerat vestibulum lectus mauris ultrices eros in cursus. Pharetra vel turpis nunc eget lorem. Nibh praesent tristique magna sit amet purus gravida quis blandit. Nec nam aliquam sem et tortor consequat id. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Consequat nisl vel pretium lectus quam id leo in. At lectus urna duis convallis convallis.</p>',99.00,'active','2020-06-07 08:53:42','2020-06-07 08:53:42',NULL),(3,'Mobile App + Logo','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet aliquam id diam maecenas. Velit ut tortor pretium viverra suspendisse potenti nullam ac tortor. Tristique senectus et netus et malesuada fames ac turpis egestas. Hac habitasse platea dictumst quisque sagittis purus. Natoque penatibus et magnis dis parturient montes nascetur ridiculus. Non quam lacus suspendisse faucibus interdum posuere lorem. Sit amet luctus venenatis lectus magna fringilla urna porttitor. Tincidunt augue interdum velit euismod. Ultricies mi quis hendrerit dolor magna. Donec enim diam vulputate ut. Turpis egestas maecenas pharetra convallis. Tortor pretium viverra suspendisse potenti. In ornare quam viverra orci sagittis eu volutpat.</p><p>Non consectetur a erat nam at lectus urna duis convallis. Morbi tristique senectus et netus et malesuada fames ac turpis. In iaculis nunc sed augue lacus viverra. Id nibh tortor id aliquet lectus proin nibh nisl condimentum. Id leo in vitae turpis massa. Nisl nisi scelerisque eu ultrices vitae auctor eu. Et magnis dis parturient montes nascetur ridiculus mus. Nibh ipsum consequat nisl vel pretium. In hendrerit gravida rutrum quisque non tellus. Etiam erat velit scelerisque in dictum non consectetur a erat. Fermentum et sollicitudin ac orci. Magna fermentum iaculis eu non diam phasellus vestibulum lorem. Placerat vestibulum lectus mauris ultrices eros in cursus. Pharetra vel turpis nunc eget lorem. Nibh praesent tristique magna sit amet purus gravida quis blandit. Nec nam aliquam sem et tortor consequat id. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Consequat nisl vel pretium lectus quam id leo in. At lectus urna duis convallis convallis.</p>',99.00,'active','2020-06-07 08:53:58','2020-06-07 09:27:04',NULL);
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('charlestsmith888@mailinator.com','$2y$10$IwD72WYGcF8MV9UFlQ6RfeIIZ2wpJctczBjf2TGEbDIhdN7rb1PtO','2020-06-07 04:04:11');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `package_id` bigint(20) unsigned NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `transaction_details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_user_id_foreign` (`user_id`),
  KEY `subscriptions_package_id_foreign` (`package_id`),
  CONSTRAINT `subscriptions_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`),
  CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
INSERT INTO `subscriptions` VALUES (1,1,1,99.00,'test','2020-06-07 08:52:15','2020-06-07 08:52:15',NULL),(2,2,1,99.00,'test','2020-06-07 08:52:15','2020-06-07 08:52:15',NULL);
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'John Snow','There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.','2020-06-08 05:47:30','2020-06-08 06:49:38',NULL),(2,'Robert Baratheon','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2020-06-08 05:51:17','2020-06-08 06:03:10','2020-06-08 06:03:10'),(3,'Ned Stark','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.','2020-06-08 05:51:53','2020-06-08 06:49:20',NULL),(4,'Rob Stark','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2020-06-08 05:52:38','2020-06-08 06:03:23','2020-06-08 06:03:23'),(5,'Sansa Stark','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2020-06-08 05:56:24','2020-06-08 06:03:32','2020-06-08 06:03:32'),(6,'Arya Stark','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','2020-06-08 05:57:16','2020-06-08 06:02:58','2020-06-08 06:02:58'),(7,'Robert Baratheon','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like.','2020-06-08 06:48:56','2020-06-08 06:50:03','2020-06-08 06:50:03');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_block` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Steve Owen','200608084707.png','steveowen@mailinator.com','(222) 222-2222','2020-06-08 03:47:07','$2y$10$cxzZRAm4VUxl7t/T7E1Rd.L3.qKA5FWofp2IBHfnQ.ZhJQfQDOAn6',NULL,0,'2020-06-08 03:47:08','2020-06-11 01:51:38'),(2,'David Freed','200608090432.png','davidfreed@mailinator.com','(111) 111-1111','2020-06-08 04:04:32','$2y$10$AikiJsClp1bBQ5OmmhQ3Fu1O/CET85qxN4dSgKASdA7aKfbXQvuTe',NULL,0,'2020-06-08 04:04:32','2020-06-08 05:05:03');
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

-- Dump completed on 2020-06-11 16:56:24
