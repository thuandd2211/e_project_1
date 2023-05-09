CREATE DATABASE  IF NOT EXISTS `event_management` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `event_management`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: event_management
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'41 Hàng Bún, Ba Đình, Hà Nội','contact@tranganplaza.vn','0243 8888 999 - 0688 888 888');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `event_type_id` int(11) DEFAULT NULL,
  `customer_description` text,
  `customer_location` varchar(255) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `budget` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_type_id_idx` (`event_type_id`),
  CONSTRAINT `event_type_id` FOREIGN KEY (`event_type_id`) REFERENCES `event_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `engaged`
--

DROP TABLE IF EXISTS `engaged`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `engaged` (
  `id` int(11) NOT NULL,
  `show_id` int(11) DEFAULT NULL,
  `has_role_id` int(11) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `cost_planned` float DEFAULT NULL,
  `cost_actual` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `has_role_id_idx` (`has_role_id`),
  KEY `show_id_3_idx` (`show_id`),
  CONSTRAINT `has_role_id` FOREIGN KEY (`has_role_id`) REFERENCES `has_role` (`id`),
  CONSTRAINT `show_id_3` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `engaged`
--

LOCK TABLES `engaged` WRITE;
/*!40000 ALTER TABLE `engaged` DISABLE KEYS */;
/*!40000 ALTER TABLE `engaged` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `equipment_type_id` int(11) DEFAULT NULL,
  `avaiable` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipment_type_id_idx` (`equipment_type_id`),
  CONSTRAINT `equipment_type_id` FOREIGN KEY (`equipment_type_id`) REFERENCES `equipment_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment_type`
--

DROP TABLE IF EXISTS `equipment_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipment_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment_type`
--

LOCK TABLES `equipment_type` WRITE;
/*!40000 ALTER TABLE `equipment_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipment_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `event_type_id` int(11) DEFAULT NULL,
  `event_location` varchar(255) DEFAULT NULL,
  `event_description` text,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id_idx` (`customer_id`),
  CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_type`
--

DROP TABLE IF EXISTS `event_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_type`
--

LOCK TABLES `event_type` WRITE;
/*!40000 ALTER TABLE `event_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `has_role`
--

DROP TABLE IF EXISTS `has_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `has_role` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_id_idx` (`employee_id`),
  KEY `role_id_idx` (`role_id`),
  CONSTRAINT `employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`),
  CONSTRAINT `role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `has_role`
--

LOCK TABLES `has_role` WRITE;
/*!40000 ALTER TABLE `has_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `has_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_display_script`
--

DROP TABLE IF EXISTS `home_display_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_display_script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_display_name` text,
  `home_display_script` text,
  `home_display_other` text,
  `home_display_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_display_script`
--

LOCK TABLES `home_display_script` WRITE;
/*!40000 ALTER TABLE `home_display_script` DISABLE KEYS */;
INSERT INTO `home_display_script` VALUES (1,'TRÀNG AN PLAZA','Khởi đầu là một công ty tổ chức sự kiện với nhiều năm kinh nghiệm trong lĩnh vực tiệc cưới, Tràng An Plaza luôn cung cấp cho khách hàng những gói dịch vụ thông minh, tiết kiệm và tiện lợi, là giải pháp cho tất cả các cô dâu chú rể đang chuẩn bị cho ngày trọng đại của mình. Bên cạnh đó, Tràng An Plaza ngày càng mở rộng và phát triển đa dạng trong tất cả các sự kiện đặc biệt khác như tiệc sinh nhật, lễ kỉ niệm, tiệc doanh nghiệp … vẫn theo tiêu chí đem lại những dịch vụ tốt nhất dành cho khách hàng.','Tràng An Plaza, với sức mạnh kinh nghiệm của một tập thể đầy năng lực, tác phong chuyên nghiệp, tinh thần làm việc nghiêm túc. Nguồn nhân lực trẻ có sức sáng tạo không ngừng và gu thẩm mỹ nghệ thuật đa phong cách. Sự đầu tư có chiều sâu về đội ngũ nhân viên đầy sáng tạo cũng như hệ thống trang thiết bị chuyên nghiệp. Chúng tôi mang tới cho khách hàng không chỉ là sự thỏa mãn cho công việc mà còn là sự tin tưởng và hợp tác lâu dài. Đẳng cấp và khác biệt chỉ tại Tràng An Plaza các bạn sẽ có 1 đám cưới trong mơ, mang phong cách riêng của chính mình vì bạn xứng đáng với điều đó.','wedding_5.jpg'),(2,'TIỆC CƯỚI & KỶ NIỆM','Phút giây lắng đọng, ấm áp bên nhau chính là món quà tinh thần ý nghĩa nhất đánh dấu những mốc son mà bạn luôn mong muốn lưu giữ. Giao hòa trong bầu không khí là nét đẹp kiến trúc đắt giá để câu chuyện kéo dài giữa nhịp cảm xúc và thực đơn hấp dẫn khiến bữa tiệc lan tỏa tính gắn kết nhờ trải nghiệm vị giác.',NULL,'wedding_6.jpg'),(3,'TIỆC DOANH NGHIỆP','Tại Tràng An Plaza, những không gian đa dạng được kết cấu chặt chẽ cùng dịch vụ sự kiện trọn gói là tổng thể hoàn chỉnh để các nhà tổ chức tối ưu hóa kế hoạch của mình. Việc giảm tải gánh nặng tổ chức đồng nghĩa với khả năng tập trung hơn ở các khâu nội dung hay quảng bá.',NULL,'company_1.jpg'),(4,'TIỆC NGOÀI TRỜI','Thay vì bó hẹp không gian và lựa chọn của mình, tại sao bạn không đổi mới và phá cách cho bữa tiệc chiêu đãi cảm xúc của mình bằng việc lựa chọn không gian tổ chức tiệc cưới ngoài trời, hòa mình với thiên nhiên, với sắc xanh nhẹ nhàng mà bay bổng để gây ấn tượng mạnh mẽ với quan khách tham dự. Địa điểm tổ chức tiệc cưới ngoài trời rộng rãi, sang trọng đem đến buổi lễ thành hôn đáng nhớ nhất.',NULL,'outdoor_1.jpg'),(5,'KIẾN TRÚC CỔ ĐIỂN','Khung dáng đắp đá marble, phân bổ thêm những đường cong uốn cạnh, các sảnh tiệc lộ diện theo cá tính không trùng lặp.Tràng An Plaza không che giấu ý định tạo nên ấn tượng choáng ngợp cho bất kỳ ai ghé qua.',NULL,'architecture.jpg'),(6,'DỊCH VỤ THẤU HIỂU','Các dịch vụ tiệc và hội nghị trọn gói theo chuẩn mực cao cấp, chỉn chu cùng mức chi phí hợp lý giúp giảm tải gánh nặng tổ chức, cho phép bạn tập trung hơn ở việc trải nghiệm và tận hưởng',NULL,'service_1.jpg'),(7,'DẤU ẤN ẨM THỰC','Các thực đơn tiệc buffet, tiệc tea-break, tiệc set-menu hay thực đơn tự chọn hài hòa trong cách kết hợp món, dễ tiếp cận đến khẩu vị bản địa nhưng vẫn đủ biến tấu làm thực khách bật lên lời khen tấm tắc.',NULL,'food_1.jpg');
/*!40000 ALTER TABLE `home_display_script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `is_partner`
--

DROP TABLE IF EXISTS `is_partner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `is_partner` (
  `id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `partner_id` int(11) DEFAULT NULL,
  `partner_role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `partner_id_idx` (`partner_id`),
  KEY `partner_role_id_idx` (`partner_role_id`),
  KEY `event__id_idx` (`event_id`),
  CONSTRAINT `event_id_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  CONSTRAINT `partner_id` FOREIGN KEY (`partner_id`) REFERENCES `partner` (`id`),
  CONSTRAINT `partner_role_id` FOREIGN KEY (`partner_role_id`) REFERENCES `partner_role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `is_partner`
--

LOCK TABLES `is_partner` WRITE;
/*!40000 ALTER TABLE `is_partner` DISABLE KEYS */;
/*!40000 ALTER TABLE `is_partner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participate`
--

DROP TABLE IF EXISTS `participate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `participate` (
  `id` int(11) NOT NULL,
  `show_id` int(11) DEFAULT NULL,
  `performer_id` int(11) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `cost_planned` float DEFAULT NULL,
  `cost_actual` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `show_id_1_idx` (`show_id`),
  KEY `performer_id_idx` (`performer_id`),
  CONSTRAINT `performer_id` FOREIGN KEY (`performer_id`) REFERENCES `performer` (`id`),
  CONSTRAINT `show_id_1` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participate`
--

LOCK TABLES `participate` WRITE;
/*!40000 ALTER TABLE `participate` DISABLE KEYS */;
/*!40000 ALTER TABLE `participate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner`
--

DROP TABLE IF EXISTS `partner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_name` varchar(255) DEFAULT NULL,
  `partner_phone` int(11) DEFAULT NULL,
  `partner_email` varchar(255) DEFAULT NULL,
  `partner_logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner`
--

LOCK TABLES `partner` WRITE;
/*!40000 ALTER TABLE `partner` DISABLE KEYS */;
INSERT INTO `partner` VALUES (1,'mb bank',123456789,'mbbank@contact.vn','mb-bank.jpg'),(2,'fpt',123456789,'fpt@contact.vn','fpt.jpg'),(3,'vin group',123456789,'vingroup@contact.vn','vingroup.jpg'),(4,'viettel',123456789,'viettel@contact.vn','viettel.png');
/*!40000 ALTER TABLE `partner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner_role`
--

DROP TABLE IF EXISTS `partner_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partner_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner_role`
--

LOCK TABLES `partner_role` WRITE;
/*!40000 ALTER TABLE `partner_role` DISABLE KEYS */;
INSERT INTO `partner_role` VALUES (1,'diamond'),(2,'platium'),(3,'gold'),(4,'silver'),(5,'bronze');
/*!40000 ALTER TABLE `partner_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `performer`
--

DROP TABLE IF EXISTS `performer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `performer` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `contact_detail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `performer`
--

LOCK TABLES `performer` WRITE;
/*!40000 ALTER TABLE `performer` DISABLE KEYS */;
/*!40000 ALTER TABLE `performer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `required`
--

DROP TABLE IF EXISTS `required`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `required` (
  `id` int(11) NOT NULL,
  `show_id` int(11) DEFAULT NULL,
  `equiqment_id` int(11) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `cost_planned` float DEFAULT NULL,
  `cost_actual` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipment_id_idx` (`equiqment_id`),
  KEY `show_id_2_idx` (`show_id`),
  CONSTRAINT `equipment_id` FOREIGN KEY (`equiqment_id`) REFERENCES `equipment` (`id`),
  CONSTRAINT `show_id_2` FOREIGN KEY (`show_id`) REFERENCES `show` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `required`
--

LOCK TABLES `required` WRITE;
/*!40000 ALTER TABLE `required` DISABLE KEYS */;
/*!40000 ALTER TABLE `required` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rev_event`
--

DROP TABLE IF EXISTS `rev_event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rev_event` (
  `id` int(11) NOT NULL,
  `viewer_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `review` text,
  PRIMARY KEY (`id`),
  KEY `viewer_id_idx` (`viewer_id`),
  KEY `event_id_idx` (`event_id`),
  CONSTRAINT `event_id` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  CONSTRAINT `viewer_id` FOREIGN KEY (`viewer_id`) REFERENCES `viewer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rev_event`
--

LOCK TABLES `rev_event` WRITE;
/*!40000 ALTER TABLE `rev_event` DISABLE KEYS */;
/*!40000 ALTER TABLE `rev_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'admin'),(2,'user');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `show`
--

DROP TABLE IF EXISTS `show`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `show` (
  `id` int(11) NOT NULL,
  `show_name` varchar(255) DEFAULT NULL,
  `show_location` varchar(255) DEFAULT NULL,
  `show_description` varchar(255) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id_idx` (`event_id`),
  CONSTRAINT `event_id_3` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `show`
--

LOCK TABLES `show` WRITE;
/*!40000 ALTER TABLE `show` DISABLE KEYS */;
/*!40000 ALTER TABLE `show` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viewer`
--

DROP TABLE IF EXISTS `viewer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `viewer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `viewer_username` varchar(15) DEFAULT NULL,
  `viewer_password` varchar(15) DEFAULT NULL,
  `viewer_name` varchar(255) DEFAULT NULL,
  `viewer_gender` varchar(45) DEFAULT NULL,
  `viewer_email` varchar(255) DEFAULT NULL,
  `viewer_phone` int(10) DEFAULT NULL,
  `role_id` int(11) DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `role_id_idx` (`role_id`),
  CONSTRAINT `role_id_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewer`
--

LOCK TABLES `viewer` WRITE;
/*!40000 ALTER TABLE `viewer` DISABLE KEYS */;
INSERT INTO `viewer` VALUES (5,'thuandang1122','thuan123','Thuan Dang','male','thuan@apteach.vn',332834012,2),(6,'admin','thuan1234','Thuan Dang','male','thuan1@apteach.vn',332834011,1),(7,'thuan123','12345678','Thuan Dang','male','thuan123@apteach.vn',332834013,2);
/*!40000 ALTER TABLE `viewer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-09 17:47:38
