-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: sewamobil
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `kendaraan`
--

DROP TABLE IF EXISTS `kendaraan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kendaraan` (
  `no_plat` varchar(10) NOT NULL,
  `id_type` varchar(20) DEFAULT NULL,
  `tahun` year DEFAULT NULL,
  `tarif` int DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`no_plat`),
  KEY `id_type` (`id_type`),
  CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `tipe_kendaraan` (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kendaraan`
--

LOCK TABLES `kendaraan` WRITE;
/*!40000 ALTER TABLE `kendaraan` DISABLE KEYS */;
INSERT INTO `kendaraan` VALUES ('H 3134 T','003',2019,375000,'baik'),('H 4 JI','001',2020,250000,'sangat baik'),('H 412 YO','002',2019,500000,'sangat baik');
/*!40000 ALTER TABLE `kendaraan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pelanggan` (
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`no_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelanggan`
--

LOCK TABLES `pelanggan` WRITE;
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` VALUES ('3374110001010001','Kurt Cobain','Jl. Boulevard East, Seattle','6282200112200'),('3374120001010005','James Hendrix','Jl. Greenwood Cemetary, Renton','6283390931903'),('3374150001010010','Chester Bennington','Seattle','6289930391904');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sopir`
--

DROP TABLE IF EXISTS `sopir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sopir` (
  `id_sopir` int NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `sim` varchar(30) DEFAULT NULL,
  `tarif` int DEFAULT NULL,
  PRIMARY KEY (`id_sopir`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sopir`
--

LOCK TABLES `sopir` WRITE;
/*!40000 ALTER TABLE `sopir` DISABLE KEYS */;
INSERT INTO `sopir` VALUES (20001,'Jarwo','Jl. Sriwibowo No. 21','6285580852905','B1',100000),(20002,'Sopo','Jl Gatot Subroto','6292237415655','A',150000),(20003,'Yono','Jl Candi Paris','6282176552890','A',200000);
/*!40000 ALTER TABLE `sopir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipe_kendaraan`
--

DROP TABLE IF EXISTS `tipe_kendaraan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipe_kendaraan` (
  `id_type` varchar(20) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipe_kendaraan`
--

LOCK TABLES `tipe_kendaraan` WRITE;
/*!40000 ALTER TABLE `tipe_kendaraan` DISABLE KEYS */;
INSERT INTO `tipe_kendaraan` VALUES ('001','Sedan'),('002','SUV'),('003','MPV');
/*!40000 ALTER TABLE `tipe_kendaraan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaksi` (
  `no_transaksi` int NOT NULL,
  `no_plat` varchar(10) DEFAULT NULL,
  `id_sopir` int DEFAULT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `tanggal_pesan` date DEFAULT NULL,
  `tanggal_kembali_rencana` date DEFAULT NULL,
  `jam_kembali_rencana` time DEFAULT NULL,
  `tanggal_kembali_realisasi` date DEFAULT NULL,
  `jam_kembali_realisasi` time DEFAULT NULL,
  `denda` int DEFAULT NULL,
  `kilometer_pinjam` int DEFAULT NULL,
  `kilometer_kembali` int DEFAULT NULL,
  `bbm_pinjam` int DEFAULT NULL,
  `bbm_kembali` int DEFAULT NULL,
  `kondisi_mobil_pinjam` varchar(50) DEFAULT NULL,
  `kondisi_mobil_kembali` varchar(50) DEFAULT NULL,
  `kerusakan` varchar(50) DEFAULT NULL,
  `biaya_kerusakan` int DEFAULT NULL,
  `biaya_bbm` int DEFAULT NULL,
  PRIMARY KEY (`no_transaksi`),
  KEY `no_plat` (`no_plat`),
  KEY `id_sopir` (`id_sopir`),
  KEY `no_ktp` (`no_ktp`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`no_plat`) REFERENCES `kendaraan` (`no_plat`),
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_sopir`) REFERENCES `sopir` (`id_sopir`),
  CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`no_ktp`) REFERENCES `pelanggan` (`no_ktp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (320001,'H 412 YO',20001,'3374110001010001','2020-04-01','2020-04-02','15:00:00','2020-04-05','06:00:00',100000,34005,34900,150,50,'sangat baik','baik','lecet di pintu kanan',150000,125000),(320002,'H 4 JI',20002,'3374120001010005','2020-04-06','2020-04-08','12:30:00','2020-04-09','12:30:00',150000,59300,60133,400,200,'sangat baik','baik','tidak ada',0,200000),(320003,'H 3134 T',20003,'3374150001010010','2020-04-07','2020-04-08','08:30:00','2020-04-08','08:30:00',0,23500,23600,300,150,'sangat baik','baik','tidak ada',0,100000);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-04-11 12:41:40
