CREATE DATABASE  IF NOT EXISTS `pets_schema` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pets_schema`;
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: pets_schema
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin@pets.com','password',NULL,NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'exotic'),(2,'indoor'),(3,'outdoor'),(4,'feline'),(5,'reptile'),(6,'aquatic'),(7,'prehistoric'),(8,'bird'),(9,'mammal');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_has_items`
--

DROP TABLE IF EXISTS `categories_has_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_has_items` (
  `category_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`item_id`),
  KEY `fk_categories_has_items_items1_idx` (`item_id`),
  KEY `fk_categories_has_items_categories1_idx` (`category_id`),
  CONSTRAINT `fk_categories_has_items_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_categories_has_items_items1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_has_items`
--

LOCK TABLES `categories_has_items` WRITE;
/*!40000 ALTER TABLE `categories_has_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories_has_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_informations`
--

DROP TABLE IF EXISTS `customer_informations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_informations` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `fk_customer_informations_customers_idx` (`customer_id`),
  CONSTRAINT `fk_customer_informations_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_informations`
--

LOCK TABLES `customer_informations` WRITE;
/*!40000 ALTER TABLE `customer_informations` DISABLE KEYS */;
INSERT INTO `customer_informations` VALUES (1,'Chris','Jaglois','12345 Test Street','Bellevue','WA','98004',NULL),(2,'Michael','Jordan','999 CodingDojo Lane','Seattle','WA','98111',NULL),(3,'Larry','Bird','9876 Countdown Street','Seattle','WA','98112',NULL),(4,'Gary','Payton','65656 Rainier Ave','Seattle','WA','98121',NULL),(5,'Magic','Johnson','722 Magic Lane','Los Angeles','CA','87976',NULL),(6,'Tiger','Woods','79834 Sunny St','NYC','NY','89127',NULL),(7,'Michael','Jackson','666 Thriller Street','Pasadena','CA','78394',NULL),(8,'Arnold','Schwarzenegger','6374 Gettothechoppa','Redmond','WA','98012',NULL),(9,'Donald','Trump','1234 Cool Hair Ln','Hollywood','CA','87932',NULL),(10,'Tom','Cruise','9086 Scientology Street','Bothell','WA','98011',NULL);
/*!40000 ALTER TABLE `customer_informations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'testing@test.com','password',NULL,NULL),(2,'mj@air.com','password',NULL,NULL),(3,'larry@bird.com','password','2014-12-10 19:00:05',NULL),(4,'gary@payton.com','password','2014-12-10 19:00:26',NULL),(5,'magic@johnson.com','password','2014-12-10 19:00:39',NULL),(6,'tiger@woods.com','password','2014-12-10 19:00:52',NULL),(7,'michael@jackson.com','password','2014-12-10 19:01:01',NULL),(8,'arnold@schwarzenegger.com','password','2014-12-10 19:01:15',NULL),(9,'donald@trump.com','password','2014-12-10 19:01:25',NULL),(10,'tom@cruise.com','password','2014-12-10 19:01:37',NULL);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text,
  `image_url` varchar(255) DEFAULT NULL,
  `inventory_count` int(11) DEFAULT NULL,
  `total_sold` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'chumlee',9999999.00,'The coolest dog ever','/assets/images/chumlee.jpg',1,0),(2,'tarsier',9000.00,'tarsier','/assets/images/tarsier.jpg',3,3),(3,'giraffe',9000.00,'long neck','/assets/images/giraffe.jpg',15,3),(4,'triceratops',500000.00,'triceratops','/assets/images/triceratops.jpg',23,1),(5,'jellyfish',1000.00,'jellyfish','/assets/images/seanettlejellyfish.jpg',1,5),(6,'goat',500.00,'pygmy goat','/assets/images/pygmygoat.jpg',2,1),(7,'bluetarantula',700.00,'tarantula','/assets/images/bluetarantula.jpg',15,12),(8,'king cobra',3000.00,'king cobra','/assets/images/kingcobra.jpg',10,4),(9,'harpy eagle',4000.00,'harpy eagle','/assets/images/harpyeagle.jpg',3,8),(10,'green monkey frog',8000.00,'green monkey frog','/assets/images/greenmonkeyfrog.jpg',6,15),(11,'elephant',23000.00,'elephant','/assets/images/elephant.jpeg',13,22),(12,'albino squirell',600.00,'squirell','/assets/images/albino_squirell.jpg',45,50),(13,'chameleon',100.00,'chameleon','/assets/images/chameleon.jpg',13,2),(14,'dolphin',2500.00,'dolphin','/assets/images/dolphin.jpg',21,18),(15,'horse',2000.00,'horse','/assets/images/horse.jpeg',31,28),(16,'iguana',200.00,'iguana','/assets/images/iguana.jpeg',85,47),(17,'kitten',50.00,'kitten','/assets/images/kitten.jpg',9,2),(18,'koala',24.00,'koala','/assets/images/koala.jpeg',1,1),(19,'manta ray',4000.00,'manta ray','/assets/images/manta_ray.jpg',43,12),(20,'octopus',5000.00,'octopus','/assets/images/octopus.jpeg',123,43),(21,'orangutan',6000.00,'orangutan','/assets/images/orangutang.jpg',15,12),(22,'panda',9000.00,'panda','/assets/images/panda.jpeg',67,92),(23,'penguin',1800.00,'penguin','/assets/images/penguin.jpg',23,21),(24,'pig',600.00,'pig','/assets/images/pig.jpg',2,4),(25,'puppy',1000.00,'puppy','/assets/images/puppy.jpg',80,100),(26,'red panda',5000.00,'red panda','/assets/images/red_panda.jpg',11,11),(27,'rhinocerous',6600.00,'rhinocerous','/assets/images/rhinocerous.jpg',12,4),(28,'sea turtle',3500.00,'sea turtle','/assets/images/sea_turtle.jpg',9,1),(29,'sloth',11000.00,'sloth','/assets/images/sloth.jpeg',20,19),(30,'T-rex',1000000.00,'t-rex','/assets/images/t-rex.jpeg',1,0),(31,'lion',12000.00,'lion','/assets/images/lion.jpeg',14,2);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `ordered_on` datetime DEFAULT NULL,
  `shipped_on` datetime DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_method_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`customer_id`,`shipping_method_id`),
  KEY `fk_orders_customers1_idx` (`customer_id`),
  KEY `fk_orders_shipping_methods1_idx` (`shipping_method_id`),
  CONSTRAINT `fk_orders_customers1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_shipping_methods1` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_methods` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'Shipped',100000.00,'12345 Testing Road',NULL,NULL,1,1),(2,'Processing',250000.00,'12345 Test Road',NULL,NULL,1,2),(4,'Shipped',234.00,'999 CodingDojo Lane',NULL,NULL,2,3),(5,'Canceled',12345.00,'5555 Mountain View',NULL,NULL,2,2),(6,'Processing',971234.00,'666 Thriller Street','2014-12-10 19:13:10',NULL,7,1),(7,'Shipped',768234.00,'666 Thriller Street','2014-12-10 19:13:36',NULL,7,3),(8,'Canceled',768234.00,'6374 Gettothechoppa','2014-12-10 19:14:21',NULL,8,3);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_has_items`
--

DROP TABLE IF EXISTS `orders_has_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_has_items` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`,`item_id`),
  KEY `fk_orders_has_items_items1_idx` (`item_id`),
  KEY `fk_orders_has_items_orders1_idx` (`order_id`),
  CONSTRAINT `fk_orders_has_items_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_items_items1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_has_items`
--

LOCK TABLES `orders_has_items` WRITE;
/*!40000 ALTER TABLE `orders_has_items` DISABLE KEYS */;
INSERT INTO `orders_has_items` VALUES (1,2,2),(1,3,5),(2,4,1),(4,1,4),(4,3,6),(4,5,8),(5,1,1),(5,3,3);
/*!40000 ALTER TABLE `orders_has_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping_methods`
--

DROP TABLE IF EXISTS `shipping_methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping_methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping_methods`
--

LOCK TABLES `shipping_methods` WRITE;
/*!40000 ALTER TABLE `shipping_methods` DISABLE KEYS */;
INSERT INTO `shipping_methods` VALUES (1,'overnight',99.99),(2,'express',49.99),(3,'ground',19.99);
/*!40000 ALTER TABLE `shipping_methods` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-10 19:34:39
