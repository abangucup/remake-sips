-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: sips
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.20.04.1

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
-- Table structure for table `biodatas`
--

DROP TABLE IF EXISTS `biodatas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `biodatas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('l','p') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biodatas`
--

LOCK TABLES `biodatas` WRITE;
/*!40000 ALTER TABLE `biodatas` DISABLE KEYS */;
INSERT INTO `biodatas` VALUES (1,'Aprilia M. Hunta','Marisa','82292055082','p','2023-11-19 14:00:14','2023-11-19 14:00:14'),(2,'Sahrul Gobel','Limboto','81242642469','l','2023-11-19 14:00:14','2023-11-19 14:00:14'),(3,'Salman Mustapa','Dusun 1','082154488769','l','2023-11-20 14:41:00','2023-11-20 14:41:00'),(7,'Arman Pakaya','Dusun 1','082154488769','l','2023-11-20 20:17:42','2023-11-20 20:17:42'),(8,'Marten Haras','Dusun 1','-','l','2023-11-20 20:20:57','2023-11-20 20:20:57'),(9,'Rizki Mantu','-','-','l','2023-11-20 20:21:17','2023-11-20 20:21:17'),(10,'Joni Yunus','-','-','l','2023-11-20 20:21:34','2023-11-20 20:21:34'),(11,'Roy Haras','-','-','l','2023-11-20 20:21:55','2023-11-20 20:21:55'),(12,'Frangky S. Tomayahu','-','-','l','2023-11-20 20:22:20','2023-11-20 20:22:20'),(13,'Sopyan Musa','-','-','l','2023-11-20 20:22:46','2023-11-20 20:22:46'),(14,'Iswan Pakaya','-','-','l','2023-11-20 20:25:22','2023-11-20 20:25:22'),(15,'Arifin Mustapa','-','-','l','2023-11-20 20:25:40','2023-11-20 20:25:40'),(16,'Umar Subuhi','-','-','l','2023-11-20 20:25:59','2023-11-20 20:25:59'),(17,'Lukman Daud','-','-','l','2023-11-20 20:26:14','2023-11-20 20:26:14'),(18,'Saleh Ismail','-','-','l','2023-11-20 20:26:31','2023-11-20 20:26:31'),(19,'Uten Lamusi','-','-','l','2023-11-20 20:26:49','2023-11-20 20:26:49'),(20,'Ungke Ismail','-','-','l','2023-11-20 20:27:02','2023-11-20 20:27:02'),(21,'Ismail Hasan','-','-','l','2023-11-20 20:27:18','2023-11-20 20:27:18'),(23,'Iste nihil quibusdam','Minus aliquid laudan','Voluptatem impedit','p','2023-11-23 09:56:43','2023-11-23 09:56:43'),(24,'Sint in nemo sed ip','Provident elit exe','Possimus cillum qui','p','2023-11-23 09:57:42','2023-11-23 09:57:42');
/*!40000 ALTER TABLE `biodatas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `desas`
--

DROP TABLE IF EXISTS `desas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `desas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desas`
--

LOCK TABLES `desas` WRITE;
/*!40000 ALTER TABLE `desas` DISABLE KEYS */;
INSERT INTO `desas` VALUES (5,'Marisa Utara','2023-11-20 02:41:19','2023-11-20 02:41:19'),(6,'Teratai','2023-11-20 02:41:46','2023-11-20 02:41:46'),(7,'Pohuwato Timur','2023-11-20 02:41:54','2023-11-20 02:41:54'),(8,'Bulangita','2023-11-20 02:42:01','2023-11-20 02:42:01'),(9,'Palopo','2023-11-20 02:42:08','2023-11-20 02:42:08'),(10,'Pohuwato','2023-11-20 02:42:14','2023-11-20 02:42:14'),(11,'Botubilotahu','2023-11-20 02:42:20','2023-11-20 02:42:20'),(12,'Marisa Selatan','2023-11-20 02:42:27','2023-11-20 02:42:27'),(13,'Duhiadaa','2023-11-20 17:59:58','2023-11-20 17:59:58');
/*!40000 ALTER TABLE `desas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `jalurs`
--

DROP TABLE IF EXISTS `jalurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jalurs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kenderaan_id` bigint unsigned NOT NULL,
  `lokasi_id` bigint unsigned NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jalurs_kenderaan_id_foreign` (`kenderaan_id`),
  KEY `jalurs_lokasi_id_foreign` (`lokasi_id`),
  CONSTRAINT `jalurs_kenderaan_id_foreign` FOREIGN KEY (`kenderaan_id`) REFERENCES `kenderaans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `jalurs_lokasi_id_foreign` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasis` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jalurs`
--

LOCK TABLES `jalurs` WRITE;
/*!40000 ALTER TABLE `jalurs` DISABLE KEYS */;
INSERT INTO `jalurs` VALUES (14,2,2,'Senin','2023-11-23 03:45:31','2023-11-23 03:45:31'),(15,2,3,'Senin','2023-11-23 03:45:31','2023-11-23 03:45:31'),(16,2,4,'Senin','2023-11-23 03:45:31','2023-11-23 03:45:31'),(17,2,5,'Senin','2023-11-23 03:45:31','2023-11-23 03:45:31'),(18,2,2,'Rabu','2023-11-23 03:45:47','2023-11-23 03:45:47'),(19,2,3,'Rabu','2023-11-23 03:45:47','2023-11-23 03:45:47'),(20,2,4,'Rabu','2023-11-23 03:45:47','2023-11-23 03:45:47'),(21,2,5,'Rabu','2023-11-23 03:45:47','2023-11-23 03:45:47'),(22,2,2,'Sabtu','2023-11-23 03:46:00','2023-11-23 03:46:00'),(23,2,3,'Sabtu','2023-11-23 03:46:00','2023-11-23 03:46:00'),(24,2,4,'Sabtu','2023-11-23 03:46:00','2023-11-23 03:46:00'),(25,2,5,'Sabtu','2023-11-23 03:46:00','2023-11-23 03:46:00'),(26,2,6,'Selasa','2023-11-23 03:46:34','2023-11-23 03:46:34'),(27,2,7,'Selasa','2023-11-23 03:46:34','2023-11-23 03:46:34'),(28,2,6,'Kamis','2023-11-23 03:46:48','2023-11-23 03:46:48'),(29,2,7,'Kamis','2023-11-23 03:46:48','2023-11-23 03:46:48'),(30,3,15,'Senin','2023-11-23 22:46:14','2023-11-23 22:46:14'),(31,3,16,'Senin','2023-11-23 22:46:14','2023-11-23 22:46:14'),(32,3,17,'Senin','2023-11-23 22:46:14','2023-11-23 22:46:14'),(33,3,18,'Senin','2023-11-23 22:46:14','2023-11-23 22:46:14');
/*!40000 ALTER TABLE `jalurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis`
--

DROP TABLE IF EXISTS `jenis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jenis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jenis_kenderaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis`
--

LOCK TABLES `jenis` WRITE;
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;
INSERT INTO `jenis` VALUES (2,'Dumtruck','2023-11-20 01:31:45','2023-11-20 01:34:05'),(4,'Pickup','2023-11-20 01:35:07','2023-11-20 01:35:07'),(5,'Viar','2023-11-20 01:35:12','2023-11-20 01:35:12');
/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategoris`
--

DROP TABLE IF EXISTS `kategoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kategoris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kategori_sampah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategoris`
--

LOCK TABLES `kategoris` WRITE;
/*!40000 ALTER TABLE `kategoris` DISABLE KEYS */;
INSERT INTO `kategoris` VALUES (2,'Organik','2023-11-20 02:29:45','2023-11-20 02:29:45'),(3,'Non Organik','2023-11-20 02:29:54','2023-11-20 02:29:54'),(4,'Sampah Bahan Berbahaya dan Beracun (B3)','2023-11-20 02:30:46','2023-11-20 02:30:46');
/*!40000 ALTER TABLE `kategoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kenderaans`
--

DROP TABLE IF EXISTS `kenderaans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kenderaans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_kenderaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kenderaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_id` bigint unsigned NOT NULL,
  `nomor_polisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kenderaans_kode_kenderaan_unique` (`kode_kenderaan`),
  UNIQUE KEY `kenderaans_nomor_polisi_unique` (`nomor_polisi`),
  KEY `kenderaans_jenis_id_foreign` (`jenis_id`),
  CONSTRAINT `kenderaans_jenis_id_foreign` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kenderaans`
--

LOCK TABLES `kenderaans` WRITE;
/*!40000 ALTER TABLE `kenderaans` DISABLE KEYS */;
INSERT INTO `kenderaans` VALUES (2,'#K-0656','Mobil Dumptruck',2,'DM 8502 D','2023-11-20 17:51:26','2023-11-20 17:51:26'),(3,'#K-7B9C','Mobil Dumptruck',2,'DM 8041 A','2023-11-20 17:51:49','2023-11-20 17:53:02'),(4,'#K-E16B','Mobil Dumptruck',2,'DM 8043 D','2023-11-20 17:52:04','2023-11-20 17:52:13'),(5,'#K-6FA5','Mobil Dumptruck Kuning',2,'DM 8503','2023-11-20 17:52:55','2023-11-20 17:52:55'),(6,'#K-D92F','Mobil Pickup',4,'DM 8509 DB','2023-11-20 17:53:19','2023-11-20 17:53:19'),(7,'#K-71B9','Mobil Pickup',4,'DM 8538 DB','2023-11-20 17:53:41','2023-11-20 17:53:41'),(8,'#K-31CB','Mobil Armroll',4,'DM 8508 DB','2023-11-20 17:54:16','2023-11-20 17:54:16'),(9,'#K-5616','Mobil Armroll',4,'DM 8044 D','2023-11-20 17:54:39','2023-11-20 17:54:39'),(10,'#K-1F85','Viar',5,'DM 4821 IQ','2023-11-20 17:54:59','2023-11-20 17:54:59'),(11,'#K-1B12','Viar',5,'DM 4822 IQ','2023-11-20 17:55:20','2023-11-20 17:55:20'),(12,'#K-27BD','Viar',5,'DM 6998 DC','2023-11-20 17:55:48','2023-11-20 17:55:48'),(13,'#K-FC61','Viar',5,'DM 6989 D','2023-11-20 17:56:15','2023-11-20 17:56:15'),(14,'#K-C9B6','Viar',5,'DM 5617 D','2023-11-20 17:56:30','2023-11-20 17:56:30'),(15,'#K-3918','Viar',5,'DM 5616 D','2023-11-20 17:56:43','2023-11-20 17:56:43'),(16,'#K-FCE2','Viar',5,'DM 6901 DF','2023-11-20 17:57:00','2023-11-20 17:57:00');
/*!40000 ALTER TABLE `kenderaans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lokasis`
--

DROP TABLE IF EXISTS `lokasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lokasis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lokasis_desa_id_foreign` (`desa_id`),
  CONSTRAINT `lokasis_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lokasis`
--

LOCK TABLES `lokasis` WRITE;
/*!40000 ALTER TABLE `lokasis` DISABLE KEYS */;
INSERT INTO `lokasis` VALUES (2,'Jl. Trans, Perempatan Telkom',6,'2023-11-20 15:27:07','2023-11-20 15:27:43'),(3,'Pertigaan SMK sebelah Toko',6,'2023-11-20 15:27:27','2023-11-20 15:27:36'),(4,'Pertigaan Smk Jl Teratai',6,'2023-11-20 15:28:09','2023-11-20 15:28:09'),(5,'Pertigaan Toko Milda',6,'2023-11-20 15:28:24','2023-11-20 15:28:24'),(6,'DPD 2 Golkar',5,'2023-11-20 15:28:53','2023-11-20 15:28:53'),(7,'Pertigaan RSBP, Terminal Marisa Perempatan Gapura Desa',5,'2023-11-20 15:29:09','2023-11-20 15:29:30'),(8,'Perum Griya Marisa Indah',5,'2023-11-20 17:58:12','2023-11-20 17:58:12'),(9,'Lorong Sahara',5,'2023-11-20 17:58:20','2023-11-20 17:58:20'),(10,'Perum Griya An-nur',5,'2023-11-20 17:58:29','2023-11-20 17:58:29'),(11,'Perum Ruzali Hunowu',5,'2023-11-20 17:58:48','2023-11-20 17:58:48'),(12,'Perum Mega Merona',5,'2023-11-20 17:59:00','2023-11-20 17:59:00'),(13,'Perum Kantor Camat Marisa',5,'2023-11-20 17:59:13','2023-11-20 17:59:13'),(14,'Kost kost an kompleks kantor Camat Marisa',12,'2023-11-20 17:59:25','2023-11-20 17:59:25'),(15,'Pertigaan SMK Duhiadaa',13,'2023-11-20 18:00:08','2023-11-20 18:00:08'),(16,'Jln Duhiadaa dari Perempatan Duhiadaa',13,'2023-11-20 18:00:28','2023-11-20 18:00:28'),(17,'Gapura Desa Botubilotahu',11,'2023-11-20 18:01:05','2023-11-20 18:01:05'),(18,'Toko Mopio',11,'2023-11-20 18:01:18','2023-11-20 18:01:18');
/*!40000 ALTER TABLE `lokasis` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_resets_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1),(3,'2019_12_14_000001_create_personal_access_tokens_table',1),(4,'2023_11_19_000000_create_roles_table',1),(5,'2023_11_19_000001_create_biodatas_table',1),(6,'2023_11_19_000002_create_users_table',1),(7,'2023_11_19_224708_create_desas_table',1),(8,'2023_11_19_224806_create_pengelolas_table',1),(9,'2023_11_19_224844_create_tarifs_table',1),(10,'2023_11_19_224845_create_lokasis_table',1),(11,'2023_11_19_224846_create_pelanggans_table',1),(12,'2023_11_19_230005_create_jenis_table',1),(13,'2023_11_19_230509_create_kenderaans_table',1),(14,'2023_11_19_230819_create_sopirs_table',1),(15,'2023_11_20_054658_create_kategoris_table',1),(16,'2023_11_20_060333_create_jalurs_table',1),(17,'2023_11_23_101952_create_pembayarans_table',1),(18,'2023_11_23_104320_create_timbangans_table',1),(19,'2023_11_23_104414_create_sampahs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelanggans`
--

DROP TABLE IF EXISTS `pelanggans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pelanggans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lokasi_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `tarif_id` bigint unsigned NOT NULL,
  `no_register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pelanggans_no_register_unique` (`no_register`),
  KEY `pelanggans_lokasi_id_foreign` (`lokasi_id`),
  KEY `pelanggans_user_id_foreign` (`user_id`),
  KEY `pelanggans_tarif_id_foreign` (`tarif_id`),
  CONSTRAINT `pelanggans_lokasi_id_foreign` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasis` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pelanggans_tarif_id_foreign` FOREIGN KEY (`tarif_id`) REFERENCES `tarifs` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `pelanggans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelanggans`
--

LOCK TABLES `pelanggans` WRITE;
/*!40000 ALTER TABLE `pelanggans` DISABLE KEYS */;
INSERT INTO `pelanggans` VALUES (2,10,23,8,'#L10P02B3','2023-11-23 09:56:43','2023-11-23 09:56:43'),(3,5,24,2,'#L5P4966','2023-11-23 09:57:42','2023-11-23 09:57:42');
/*!40000 ALTER TABLE `pelanggans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembayarans`
--

DROP TABLE IF EXISTS `pembayarans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pembayarans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pelanggan_id` bigint unsigned NOT NULL,
  `tanggal_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_bayar` enum('lunas','pending') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pembayarans_pelanggan_id_foreign` (`pelanggan_id`),
  CONSTRAINT `pembayarans_pelanggan_id_foreign` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembayarans`
--

LOCK TABLES `pembayarans` WRITE;
/*!40000 ALTER TABLE `pembayarans` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembayarans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengelolas`
--

DROP TABLE IF EXISTS `pengelolas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pengelolas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `desa_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `status` enum('active','disabled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pengelolas_desa_id_foreign` (`desa_id`),
  KEY `pengelolas_user_id_foreign` (`user_id`),
  CONSTRAINT `pengelolas_desa_id_foreign` FOREIGN KEY (`desa_id`) REFERENCES `desas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pengelolas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengelolas`
--

LOCK TABLES `pengelolas` WRITE;
/*!40000 ALTER TABLE `pengelolas` DISABLE KEYS */;
INSERT INTO `pengelolas` VALUES (1,5,2,'active','2023-11-20 06:04:59','2023-11-20 06:04:59'),(2,6,3,'disabled','2023-11-20 14:41:00','2023-11-23 09:57:22');
/*!40000 ALTER TABLE `pengelolas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','P3B3K','2023-11-19 14:00:14','2023-11-19 14:00:14'),(2,'pengelola','Admin Desa','2023-11-19 14:00:14','2023-11-19 14:00:14'),(3,'sopir','Petugas Pengangkut','2023-11-19 14:00:14','2023-11-19 14:00:14'),(4,'pengguna','Pelanggan','2023-11-19 14:00:14','2023-11-19 14:00:14');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sampahs`
--

DROP TABLE IF EXISTS `sampahs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sampahs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` bigint unsigned NOT NULL,
  `nama_sampah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_sampah` int NOT NULL,
  `tanggal_lapor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sampahs_kategori_id_foreign` (`kategori_id`),
  CONSTRAINT `sampahs_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sampahs`
--

LOCK TABLES `sampahs` WRITE;
/*!40000 ALTER TABLE `sampahs` DISABLE KEYS */;
INSERT INTO `sampahs` VALUES (1,2,'Kertas UBah',123,'2023-11-24','2023-11-24 09:37:09','2023-11-24 09:41:45');
/*!40000 ALTER TABLE `sampahs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sopirs`
--

DROP TABLE IF EXISTS `sopirs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sopirs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `kenderaan_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sopirs_user_id_foreign` (`user_id`),
  KEY `sopirs_kenderaan_id_foreign` (`kenderaan_id`),
  CONSTRAINT `sopirs_kenderaan_id_foreign` FOREIGN KEY (`kenderaan_id`) REFERENCES `kenderaans` (`id`) ON DELETE RESTRICT,
  CONSTRAINT `sopirs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sopirs`
--

LOCK TABLES `sopirs` WRITE;
/*!40000 ALTER TABLE `sopirs` DISABLE KEYS */;
INSERT INTO `sopirs` VALUES (3,7,2,'2023-11-20 20:17:42','2023-11-20 20:17:42'),(4,8,3,'2023-11-20 20:20:57','2023-11-20 20:20:57'),(5,9,4,'2023-11-20 20:21:17','2023-11-20 20:21:17'),(6,10,5,'2023-11-20 20:21:34','2023-11-20 20:21:34'),(7,11,6,'2023-11-20 20:21:56','2023-11-20 20:21:56'),(8,12,7,'2023-11-20 20:22:20','2023-11-20 20:22:20'),(9,13,8,'2023-11-20 20:22:46','2023-11-20 20:22:46'),(10,14,9,'2023-11-20 20:25:22','2023-11-20 20:25:22'),(11,15,10,'2023-11-20 20:25:40','2023-11-20 20:25:40'),(12,16,11,'2023-11-20 20:25:59','2023-11-20 20:25:59'),(13,17,12,'2023-11-20 20:26:14','2023-11-20 20:26:14'),(14,18,13,'2023-11-20 20:26:31','2023-11-20 20:26:31'),(15,19,14,'2023-11-20 20:26:49','2023-11-20 20:26:49'),(16,20,15,'2023-11-20 20:27:02','2023-11-20 20:27:02'),(17,21,16,'2023-11-20 20:27:18','2023-11-20 20:27:18');
/*!40000 ALTER TABLE `sopirs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarifs`
--

DROP TABLE IF EXISTS `tarifs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tarifs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sumber_sampah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarifs`
--

LOCK TABLES `tarifs` WRITE;
/*!40000 ALTER TABLE `tarifs` DISABLE KEYS */;
INSERT INTO `tarifs` VALUES (2,'Sampah Rumah Tangga','5000','2023-11-20 04:36:33','2023-11-20 04:36:33'),(4,'Hotel','15000','2023-11-20 04:37:05','2023-11-20 04:37:05'),(5,'Penginapan','10000','2023-11-20 04:37:14','2023-11-20 04:37:14'),(6,'Rumah Kos','15000','2023-11-20 04:37:26','2023-11-20 04:37:26'),(7,'Toko','5000','2023-11-20 04:37:45','2023-11-20 04:37:45'),(8,'Kios','2500','2023-11-20 04:37:53','2023-11-20 04:37:53'),(9,'Rumah Makan','15000','2023-11-20 04:38:04','2023-11-20 04:38:04'),(10,'Warung / Kedai','2500','2023-11-20 04:38:15','2023-11-20 04:38:15'),(11,'Sampah Perkantoran','5000','2023-11-20 04:38:27','2023-11-20 04:38:27'),(12,'Bengkel','5000','2023-11-20 04:38:35','2023-11-20 04:38:35'),(13,'Pasar Swalayan, Super Market, dan Sejenisnya','25000','2023-11-20 04:38:54','2023-11-20 04:38:54');
/*!40000 ALTER TABLE `tarifs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timbangans`
--

DROP TABLE IF EXISTS `timbangans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timbangans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kenderaan_id` bigint unsigned NOT NULL,
  `berat_sampah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `timbangans_kenderaan_id_foreign` (`kenderaan_id`),
  CONSTRAINT `timbangans_kenderaan_id_foreign` FOREIGN KEY (`kenderaan_id`) REFERENCES `kenderaans` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timbangans`
--

LOCK TABLES `timbangans` WRITE;
/*!40000 ALTER TABLE `timbangans` DISABLE KEYS */;
/*!40000 ALTER TABLE `timbangans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned NOT NULL,
  `biodata_id` bigint unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  KEY `users_biodata_id_foreign` (`biodata_id`),
  CONSTRAINT `users_biodata_id_foreign` FOREIGN KEY (`biodata_id`) REFERENCES `biodatas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,1,'p3b3k','p3b3k@gmail.com','$2y$10$Ij8svAmlrAwSZQ3gPk53UekUYusOtfPqttr6H6v3i/u1.0bH4chiS','2023-11-19 14:00:15','2023-11-19 14:00:15'),(2,2,2,'desa','desa@gmail.com','$2y$10$3GSediAJCENhHlRHv/Zxiu6E/2KC9lGC5a680fKTmqoum024MicPy','2023-11-19 14:00:15','2023-11-19 14:00:15'),(3,2,3,'mances',NULL,'$2y$10$9ISf7RU2MgVad9IJ6CEzDOtRmtevlswZX7RWLLqZxl5KLkoGmPl8C','2023-11-20 14:41:00','2023-11-20 14:41:00'),(7,3,7,'arman',NULL,'$2y$10$cyK2cQqkzv0b4qJ8Zbf6vOs/4YVBId1xEA6h1qJ9lXm77D1eRAHcC','2023-11-20 20:17:42','2023-11-21 18:46:57'),(8,3,8,'marten',NULL,'$2y$10$4qY6b83xdQfNH0.UZdvIs.DDxe.mIURbR5amAEvxvvfsoS4SQq8Ie','2023-11-20 20:20:57','2023-11-21 18:47:01'),(9,3,9,'rizki',NULL,'$2y$10$ByF7fz54r/ELOvEx.jPqhuxg1/n9WC9BY9RrEJR3KipPOyIduen6C','2023-11-20 20:21:17','2023-11-21 18:47:05'),(10,3,10,'joni',NULL,'$2y$10$67Gz1mNFuH/ykLMa43lO0u1jMNodE3tLd79uItZjcwIWV3j37GSZu','2023-11-20 20:21:34','2023-11-21 18:47:09'),(11,3,11,'roy',NULL,'$2y$10$AaQ18.rX1kYOlbag9avxTON8BnloK75u/ahid9lgULctb0dBVqEFa','2023-11-20 20:21:56','2023-11-21 18:47:13'),(12,3,12,'frangky',NULL,'$2y$10$6m8t7UB5SMXV5CCUFriD7OABqE4crl37P3uAYpulowsr4XhTIXxSK','2023-11-20 20:22:20','2023-11-21 18:47:17'),(13,3,13,'sopyan',NULL,'$2y$10$3ToiRe02Wn4OlDvSk71GWOPfPapI4saMLhIy5umt2fDGUI22m6lR6','2023-11-20 20:22:46','2023-11-21 18:47:22'),(14,3,14,'iswan',NULL,'$2y$10$lB97CcY.f5lLO.RbgDDIj.iOkQoEj9CIMgvB.TznGZbjm3Wliy2UW','2023-11-20 20:25:22','2023-11-21 18:47:28'),(15,3,15,'arifin',NULL,'$2y$10$sJvyoBxLoGYNl3J0alh1EeRndfGcdUJNkBrQCvl3OPtbRIQOjUaue','2023-11-20 20:25:40','2023-11-21 18:47:32'),(16,3,16,'umar',NULL,'$2y$10$YdlwU.OXlcdx7NyzwXxGa.MJg1Fvo6a.n8JsIi0GpGRbDtY6zP7Oy','2023-11-20 20:25:59','2023-11-21 18:47:36'),(17,3,17,'lukman',NULL,'$2y$10$YzWJXuVTCymaCUl7pUV/ve3ZDOd0UziMftaX.b0KZR0rmTbOTfydW','2023-11-20 20:26:14','2023-11-21 18:47:42'),(18,3,18,'saleh',NULL,'$2y$10$iuk4x96zPDTa6RMgn3ztv.i3Z30m8PCZF/JHic7PUva/vNkw5QLk2','2023-11-20 20:26:31','2023-11-21 18:47:47'),(19,3,19,'uten',NULL,'$2y$10$5BydwASAPRZY7/qsnKgBB.2B/zU.KkpCE1P4VXUxYOsg6sQgLD83S','2023-11-20 20:26:49','2023-11-21 18:47:54'),(20,3,20,'ungke',NULL,'$2y$10$gVgNXyqLBdXjixnxFZxVbOPvEGeuVDEgDk2e1sebdz.uGlPzi9n2S','2023-11-20 20:27:02','2023-11-21 18:47:59'),(21,3,21,'ismail',NULL,'$2y$10$a88c3vFRs68cjP8ZDXrvBO5crtf0IuQETj/JwotpireaW5YkAOS72','2023-11-20 20:27:18','2023-11-21 18:48:04'),(23,4,23,'maman',NULL,'$2y$10$h.89.aB1OzGHGct7pDcfSuzgVrnJVb3it3XtTneAFOhcwUKv1.rGC','2023-11-23 09:56:43','2023-11-23 09:56:43'),(24,4,24,'test',NULL,'$2y$10$HJrzpDhf8kf9vAyo0W9Hq.ifEVL9JtpKUaSdDnxnptPwJdAildI8a','2023-11-23 09:57:42','2023-11-23 09:57:42');
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

-- Dump completed on 2023-11-24 18:21:43
