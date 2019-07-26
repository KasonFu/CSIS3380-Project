-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: Lab09
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Colver','Prydden','cprydden0','cprydden0@dedecms.com','585-686-1406','Male',49,'$2y$10$JHV0Y0yfYhTA2rTA//1CweCZWwfkGEHxK/TnT8VIJIwjDTlGkCCDi'),(2,'Mollie','Stuttard','mstuttard1','mstuttard1@taobao.com','251-305-9376','Female',39,'$2y$10$NcCTPaKoYLWDqE17Ufnlsui0OH8D6jT4P9.n5B6Thcl/AD7pcICnS'),(3,'Hetti','Orritt','horritt2','horritt2@netvibes.com','223-257-6637','Female',45,'$2y$10$KGCumBzgbriICSTRaHJNTOQqqAzWvEvxOls6UuG.Q9blN2cdL16Am'),(4,'Piggy','Chadwell','pchadwell3','pchadwell3@weibo.com','246-899-8894','Male',10,'$2y$10$E.W0gCZb78jqFamiWPy.re4znaEZFXcZnLeYDr7NU7n4PrE/7fYLi'),(5,'Shawna','Matantsev','smatantsev4','smatantsev4@timesonline.co.uk','688-404-8801','Female',66,'$2y$10$0fNIQtbC7VHMbJS/XB6ma.1MxIPHVbFcuu947Ao1U2BDy8cVHJpU.'),(6,'Ainslie','Tuther','atuther5','atuther5@bbc.co.uk','489-143-1765','Female',78,'$2y$10$RHh9rkd4e.xVnDecn7Yepe5zyVybjnoCkyaxrwyIH/TL1png1.Cp2'),(7,'Karlik','Marien','kmarien6','kmarien6@diigo.com','468-356-5579','Male',71,'$2y$10$s/iHmmBqZJIx30iL3f4eluzNJT7v13tmrKuC4ZjMCAX0cm3O.Xcay'),(8,'Audie','McCombe','amccombe7','amccombe7@usnews.com','633-165-2217','Female',35,'$2y$10$imly.3qHRyZKVT7G9S.Ucuba8i/XfM9DkoW5YzYiPrz9IABEeWAzm'),(9,'Saul','Allmen','sallmen8','sallmen8@domainmarket.com','915-220-8229','Male',82,'$2y$10$XA13VPxUm4AlVJBdAaHe3uIkbcMQ1KFFIgOU7hRt9ePaOBqv6/b2G'),(10,'Katina','Ellett','kellett9','kellett9@hexun.com','412-765-7527','Female',30,'$2y$10$rpJ9/AM6azYcTfY/lMQaSOAYIqm5TPAtU4Fyo4JQnjMnRzwb/QVRu'),(11,'Dario','Amesbury','damesburya','damesburya@ning.com','486-479-0826','Male',41,'$2y$10$6h7Mrgf00QmmB.CzrJSYLOX96hDRBmT6VIM4E4N8.D1c/lDluRjWm'),(12,'Reuben','Bidewel','rbidewelb','rbidewelb@yellowbook.com','398-513-2261','Male',38,'$2y$10$j57uNn8kk/PIxy9uG7yJgOL/wqLgIrXjciNjIee4p32HLdhxhqTnO'),(13,'Travus','Donahue','tdonahuec','tdonahuec@booking.com','296-968-0047','Male',57,'$2y$10$ahTtFR2V8pTN6FQ8YzuSsODdqXAuc84Vstjc1rLeiQTmNp3n9xyO6'),(14,'Chad','Scamel','cscameld','cscameld@blogtalkradio.com','724-873-0001','Female',29,'$2y$10$0AISCbglQXZjvNFDYRzyouVy1pVnWu.yBRU.fqsVd5dLl7/BfbKrG'),(15,'Penn','Playdon','pplaydone','pplaydone@rakuten.co.jp','991-859-8252','Male',1,'$2y$10$Gwml3/JeosAe1ufnD6WHDud6eIX7nXg9JsVdS5WqonohLC93GOgfK'),(16,'Gavrielle','Hefferon','ghefferonf','ghefferonf@tinypic.com','165-294-8571','Female',88,'$2y$10$Iq3u6shmyA7nkqb3VbXsx.AMNLyWQgRdaLbhrSyE1hJYvGhhU4Ssm'),(17,'Kanya','Culmer','kculmerg','kculmerg@mysql.com','300-138-3381','Female',20,'$2y$10$cjlf.Y5yh0/FlFpcjza4QeKXkHBje3nV8i3eQmP2mioSpQIQX6J3O'),(18,'Iolanthe','Merrett','imerretth','imerretth@chicagotribune.com','481-854-9695','Female',34,'$2y$10$W9Hcyh3LGFIWlD/3hxReD.mSJEh2g6ya65xOaX3Wgkci/TREGYT76'),(19,'Nikki','Safont','nsafonti','nsafonti@ibm.com','419-550-8512','Male',34,'$2y$10$F3QUMFN4Kd/SAdOAdRCIU.HkxI95wuDw1cgLjvUjBuasnWC2AMOwe'),(20,'Candis','Stanway','cstanwayj','cstanwayj@bing.com','526-392-3601','Female',100,'$2y$10$xXRFrXDwEizNEEAzeoPxZ.3GCmNxAePHAzkR0KdAFUTRiklzRWcQ2');
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

-- Dump completed on 2019-07-09 11:23:56
