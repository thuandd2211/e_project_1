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
-- Table structure for table `about_us_script`
--

DROP TABLE IF EXISTS `about_us_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_us_script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_us_title_id` int(11) DEFAULT NULL,
  `about_us_script` text,
  `about_us_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `about_us_title_id_idx` (`about_us_title_id`),
  CONSTRAINT `about_us_title_id` FOREIGN KEY (`about_us_title_id`) REFERENCES `about_us_title` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us_script`
--

LOCK TABLES `about_us_script` WRITE;
/*!40000 ALTER TABLE `about_us_script` DISABLE KEYS */;
INSERT INTO `about_us_script` VALUES (1,1,NULL,'wedding_7.jpg'),(2,2,'Chặng đường 12 năm xây dựng và phát triển (2010-2022), <b>Tràng An Plaza</b> tự hào là một trong những đơn vị tổ chức sự kiện chuyên nghiệp, uy tín hàng đầu. Chúng tôi luôn nỗ lực với sứ mệnh gắn kết đội ngũ nhân sự toàn diện, đưa hình ảnh, thương hiệu của doanh nghiệp bạn tới gần hơn với khách hàng, đối tác bằng những sự kiện ấn tượng, ý nghĩa cùng mức chi phí hợp lý nhất.',NULL),(3,3,'Trên 12 năm hoạt động',NULL),(4,3,'Hơn 100 nhân sự giàu kinh nghiệm',NULL),(5,3,'Tổ chức hơn 100 sự kiện mỗi năm',NULL),(6,4,'Tiệc cưới','wedding_8.jpg'),(7,4,'Tiệc doanh nghiệp','company_2.jpg'),(8,4,'Tiệc cá nhân','outdoor_2.jpg'),(9,5,'Sự hài lòng của khách hàng là niềm vinh hạnh của chúng tôi!',NULL);
/*!40000 ALTER TABLE `about_us_script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `about_us_title`
--

DROP TABLE IF EXISTS `about_us_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_us_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_us_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_us_title`
--

LOCK TABLES `about_us_title` WRITE;
/*!40000 ALTER TABLE `about_us_title` DISABLE KEYS */;
INSERT INTO `about_us_title` VALUES (1,'Intro'),(2,'VỀ CHÚNG TÔI'),(3,'Kinh nghiệm'),(4,'DỊCH VỤ'),(5,'slogan');
/*!40000 ALTER TABLE `about_us_title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_script`
--

DROP TABLE IF EXISTS `company_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_title_id` int(11) DEFAULT NULL,
  `company_script_title` text,
  `company_script` text,
  `company_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_title_id_idx` (`company_title_id`),
  CONSTRAINT `company_title_id` FOREIGN KEY (`company_title_id`) REFERENCES `company_title` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_script`
--

LOCK TABLES `company_script` WRITE;
/*!40000 ALTER TABLE `company_script` DISABLE KEYS */;
INSERT INTO `company_script` VALUES (1,1,NULL,NULL,'company_1.jpg'),(2,2,NULL,'Là điểm sáng trên bản đồ sự kiện khu vực phía tây Hà Thành, Tràng An Plaza sở hữu những yếu tố quyết định góp phần quan trọng vào tính khả thi và sự thành công của những sự kiện doanh nghiệp, có thể kể đến là:',NULL),(3,2,NULL,'Các sảnh sự kiện đậm tính thẩm mỹ với hệ thống âm thanh – ánh sáng – tiện ích tối tân cho mọi sáng tạo',NULL),(4,2,NULL,'Khả năng tư vấn – hoạch định – triển khai các loại hình set-up chuyên dụng',NULL),(5,2,NULL,'Lựa chọn F&B và ẩm thực cao cấp để nhà tổ chức mang đến những trải nghiệp tốt nhất cho khách mời.',NULL),(6,2,NULL,'Sự linh hoạt của đội ngũ nhân viên, định hướng đến những trải nghiệm cao cấp',NULL),(7,3,'SỰ KIỆN CÔNG TY','Những buổi tiệc trang trọng nhưng không kém phần bùng nổ tại Tràng An Plaza là cơ hội để các thương hiệu lan tỏa bản sắc và câu chuyện của mình. Chúng tôi sẽ cùng bạn chuyên chở ý nghĩa tri ân, ghi nhận, chúc mừng, đánh dấu khởi đầu mới hay nhìn lại hành trình, thành quả đã đạt được bằng những dịch vụ tiệc có chất lượng trên cả mong đợi.','company_2.jpg'),(8,3,'HỘI NGHỊ TRỌN GÓI','Qua các gói hội nghị nửa ngày, hội nghị trọn ngày được thiết kế sẵn, bám sát theo nội dung, Tràng An Plaza mang đến sự hỗ trợ tối ưu phù hợp với nhu cầu của đơn vị tổ chức. Cụ thể, khả năng tối ưu hóa không gian bằng nhiều loại hình set-up tùy biến phối hợp, dịch vụ ẩm thực – F&B tinh tế sẽ bổ trợ cho buổi tọa đàm, thảo luận của các nhóm chuyên môn thêm thuận lợi và suôn sẻ.','company_3.jpg'),(9,3,'THUÊ ĐỊA ĐIỂM','Không gian đa sắc diện tại Tràng An Plaza đầy lý tưởng để những sáng tạo từ bản phác họa giấy được hiện thực hóa trong những sự kiện hoành tráng. Quá trình kiếm tìm giải pháp, thực thi của nhà tổ chức sẽ luôn có sự đồng hành kề cận của đội ngũ Tràng An Plaza, bằng tất cả sự tận tâm và nghiệp vụ chuyên nghiệp.','company_4.jpg'),(10,4,'HỘI NGHỊ HỘI THẢO','Những đường nét quyến rũ và công năng thực tiễn luôn được đảm bảo đã biến Tràng An Plaza thành địa điểm có khả năng biến hóa linh hoạt đáp ứng mọi ý tưởng từ hội thảo chuyên đề quy mô nhỏ ấm cúng vài chục khách đến các buổi hội nghị kinh doanh','company_5.jpg'),(11,4,'TIỆC CHIÊU ĐÃI','Dạ tiệc chiêu đãi, tri ân, họp mặt sẽ là món quà cho chính tổ chức, công ty chia sẻ niềm vui ấy với tất cả đồng nghiệp nhân viên hay đối tác thân thiết. Tràng An Plaza luôn đồng hành kế hoạch tổ chức gắn liền với tinh thần và hình ảnh của công ty.','company_6.jpg'),(12,4,'RA MẮT DỰ ÁN','Tìm kiếm không gian vừa đủ để trưng bày, tối ưu ngân sách nhưng triển khai các ý tưởng cô đọng nhất? Lựa chọn nào cho những nhà tổ chức tin tưởng gửi gắm “đứa con tinh thần” của mình trong buổi đầu ra mắt sản phẩm đến công chúng. Câu trả lời sẽ được tìm thấy tại Tràng An Plaza – nơi tiềm năng được nâng tầm đến thành công.','company_7.jpg'),(13,4,'QUAY PHIM - MV','Bất kỳ nghệ sỹ hay nhà tổ chức nào cũng đều mong muốn giới thiệu đến công chúng những thành quả sáng tạo của mình dưới hình hài chỉn chu nhất. Dưới hiệu quả từ hệ thống ánh sáng và âm thanh chuẩn 5 sao, Tràng An Plaza sẽ trở thành một sân khấu chuyên nghiệp nơi các nghệ sỹ được thăng hoa và truyền tải trọn vẹn ý đồ nghệ thuật của buổi biểu diễn.','company_8.jpg');
/*!40000 ALTER TABLE `company_script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_title`
--

DROP TABLE IF EXISTS `company_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_title`
--

LOCK TABLES `company_title` WRITE;
/*!40000 ALTER TABLE `company_title` DISABLE KEYS */;
INSERT INTO `company_title` VALUES (1,'Intro'),(2,'TIỆC DOANH NGHIỆP - TRÀNG AN PLAZA'),(3,'DỊCH VỤ SỰ KIỆN'),(4,'LOẠI HÌNH SỰ KIỆN');
/*!40000 ALTER TABLE `company_title` ENABLE KEYS */;
UNLOCK TABLES;

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
  `phone` varchar(255) DEFAULT NULL,
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
  `customer_phone` varchar(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `event_type_id` int(11) DEFAULT NULL,
  `customer_description` text,
  `customer_location` varchar(255) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `budget` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_type_id_idx` (`event_type_id`),
  CONSTRAINT `event_type_id` FOREIGN KEY (`event_type_id`) REFERENCES `event_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (10,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(11,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(12,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(13,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(14,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(15,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(16,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(17,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(18,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(19,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(20,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(21,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(22,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(23,'Thuan','0332834012','thuan@aptech.vn',NULL,'',NULL,NULL,NULL),(24,'thuan123','0332834011','thuan1@aptech.vn',NULL,'',NULL,NULL,NULL);
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
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `script` text,
  `image` varchar(45) DEFAULT NULL,
  `time` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'TỔ CHỨC SỰ KIỆN TRUNG THU CHO THIẾU NHI','Trần Hùng','Tổ chức sự kiện lễ Trung thu cho thiếu nhi là sự kiện thường niên luôn được các tổ chức, doanh nghiệp chuẩn bị cho các em thiếu nhi như một món quà tặng bất ngờ, hạnh phúc cho các bé nhân dịp rằm Trung thu về. Tổ chức lễ Trung thu cho thiếu nhi đã trở thành thông lệ tại công ty tổ chức sự kiện Tràng An Plaza trong mỗi dịp trung thu về như một hành động, một việc làm ý nghĩa gián tiếp gửi đến các em thiếu nhi. <br><br> Năm nào cũng vậy, cứ mỗi độ trung thu về là tinh thần các em thiếu nhi lại sôi nổi và mong ngóng cho tới ngày. Với thiếu nhi, niềm hạnh phúc của các em là được gặp chú Cuội, gặp chị Hằng, được xem múa lân xung quanh nhà, khu phố hay trường học. Không những thế, háo hức nhất trong các em là sự nôn nóng mong nhận được những phần quà bánh kẹo hoặc đồ chơi để đi khoe với bạn bè, người thân và cô giáo của mình. Đó là điều kiện để cho ra đời những chương trình tổ chức lễ Trung thu cho các bé thiếu nhi mỗi năm.','record_1.jpg','2022-08-22'),(2,'SUN GROUP – COLOR ME RUN CONNECT & HAVE FUN DA NANG 2022','Bảo Anh','Chiều 23.04.2022 Tràng An Plaza vinh dự được là đơn vị chính thức hợp tác cùng tập đoàn Sun Group để tổ chức sự kiện “Color Me Run Connect & Have Fun – Đường chạy sắc màu, Kết nối niềm vui” tại KĐT Nam Hoà Xuân, Ngũ Hành Sơn, Đà Nẵng đã thu hút hàng nghìn bạn trẻ tham gia. <br>Không chỉ được trải nghiệm một đường chạy sắc màu với các trạm mốc “Xuân – Hạ – Thu – Đông”, hàng nghìn vận động viên đã cùng hoà chung nhịp đập, thoả sức vẫy vùng trong cảnh hoàng hôn tráng lệ trên dải núi Ngũ Hành Sơn, khung cảnh sinh thái hữu tình của khu đô thị Nam Hoà Xuân cùng với sự kiện âm nhạc sôi động cuối chương trình.','record_2.jpg','2022-08-05'),(3,'LỄ KỈ NIỆM 110 NĂM NGÀY QUỐC TẾ PHỤ NỮ 8/3','Huy Hải','Ngày 8.3.2019 tại trụ sở BNG, Nam Từ Liêm, Hà Nội đã diễn ra lễ kỷ niệm 110 năm ngày Quốc tế Phụ nữ 8/3 đặc biệt với sự tham dự của Trưởng đại diện Liên hợp quốc, đồng chủ tịch nhóm Đại sứ về bình đẳng giới Kamal Malhotra, Phó thủ tướng, Bộ trưởng Phạm Bình Minh, Đại sứ Mexico cùng các nữ Đại sứ, Trưởng đại diện và Phu nhân các Đại sứ,Trưởng đại diện các Tổ chức quốc tế, Nhóm phụ nữ Cộng đồng ASEAN tại Hà Nội, đại diện lãnh đạo các hiệp hội, cơ quan liên quan, Phu nhân các đồng chí Lãnh đạo Bộ Ngoại giao, các nữ Đại sứ, Thủ trưởng các đơn vị và đông đảo chị em của Bộ. <br> Tại lễ kỷ niệm ông Kamal Malhotra và Phó thủ tướng Phạm Bình Minh đã lên phát biểu và tặng hoa chị em phụ nữ có mặt tại hội trường chúc mừng nhân ngày Quốc tế Phụ nữ 8/3. Cùng sự trao đổi, chia sẻ từ Đại sứ Mexico tại Việt Nam, Trưởng ban nữ công Bộ Ngoại giao, từ đó tình cảm giao lưu được gắn kết và gần gũi hơn giữa các nước. Xen kẽ trong chương trình là các tiết mục giao lưu văn nghệ, văn hóa Việt Nam như hát then từ các nghệ nhân tỉnh Tuyên Quang, hát quan họ do các nghệ sĩ tỉnh Bắc Giang trình diễn. Các đại sứ và phu nhân đại sứ cùng giao lưu thử đàn, nón quai thao, tham quan các di sản văn hóa trưng bày của Việt Nam và chụp những bức ảnh lưu niệm tại buổi lễ.','record_3.jpg','2019-08-03'),(4,'CHUỖI SỰ KIỆN TRULY LUXURY NGÀY 27&28 THÁNG 6 NĂM 2020','Hồng Ngọc','Không đơn thuần là một chương trình giới thiệu dự án, đến với TRULY LUXURY, quý quan khách đã được trải nghiệm một không gian thượng lưu xa hoa của The Royal – Biểu tượng thượng lưu bên sông Hàn. <br><br>Và không gì vinh hạnh bằng khi Tràng An Plaza được quý khách hàng tin tưởng và hợp tác 2 show liên tiếp để giới thiệu dự án đẳng cấp này tại Hà Nội, ngay từ khi nhận được hạng mục yêu cầu từ khách hàng đến lúc chạy chương trình Tràng An Plaza có đúng 3 ngày để thực hiện từ thiết kế, lên layout, visual, in ấn, nhân sự… đến set up âm thanh ánh sáng, LED P3 nét căng…<br><br>Chúng tôi tuy không phải là người giỏi nhất, không là đơn vị hàng đầu, nhưng khi khách hàng đã chọn Tràng An chúng tôi tự tin khẳng định mình sẽ làm bằng trọn cái tâm với nghề, với một đội ngũ trẻ, năng động, nhiệt huyết và sự cầu tiến, chuyên nghiệp trong nghề, Tràng An Plaza sẽ mang đến cho khách hàng sự hài lòng nhất !','record_4.jpg','2020-01-28'),(5,'LỄ KHAI TRƯƠNG VĂN PHÒNG CÔNG TY CỔ PHẦN MIOSKIN MIỀN BẮC','Trần Hùng','Sáng ngày 8/1, Công ty cổ phần Mioskin Miền Bắc đã khai trương Văn phòng tại Hà Nội với sự có mặt của các nhà phân phối, thành viên công ty và nhiều Nghệ sĩ nổi tiếng như Ca sĩ Hariwon, diễn viên Anh Đức, diễn viên Trúc Anh,… <br><br> Với triết lý kinh doanh “Hướng đến sự tiện lợi nhưng vẫn đảm bảo chất lượng và tính hiệu quả”, Mioskin đã tung ra thị trường dòng mỹ phẩm tiện dụng, đa tính năng và chất lượng vượt trội mang đến sự “tiện lợi” và “hài lòng” cho khách hàng. <br><br> Sản phẩm Xịt dưỡng tế bào gốc 5 in 1 Mioskin là dòng sản phẩm dược mỹ phẩm tích hợp công dụng của 5 bước dưỡng da cơ bản dành cho những người bận rộn mà vẫn đảm bảo sức khỏe của làn da. Mioskin đang tạo ra một cuộc cách mạng tối ưu hóa trong việc chăm sóc làn da của phụ nữ Việt Nam. <br><br>Khai trương Công ty CP Mioskin Miền Bắc này sẽ hứa hẹn mở rộng thêm thị trường, đồng hành gắn kết với các Nhà phân phối, tạo cơ hội cho phụ nữ Việt Nam được tiếp cận với các sản phẩm làm đẹp an toàn, tiện lợi và hiệu quả, giúp chị em tự tin tỏa sáng, đặc biệt tiết kiệm nhiều thời gian vừa hoàn thành công việc xã hội vừa chăm sóc tốt cho bản thân.','record_5.jpg','2023-01-08'),(6,'ELLE WEDDING ART GALLERY 2020','Khánh Linh','Là thương hiệu gắn liền với sự thanh lịch, lòng hiếu khách và tinh thần duy mỹ, suốt hành trình phát triển hơn 12 năm, Tràng An Plaza luôn không ngừng nỗ lực mang đến cho khách hàng những trải nghiệm tối ưu nhất. Sau thành công rực rỡ của hai mùa triển lãm Love Paradise, đầu tháng 10 sắp tới, Tràng An Plaza cùng tạp chí ELLE sẽ mang đến cho bạn một sự kiện thời trang cưới đẳng cấp hàng đầu Việt Nam: ELLE Wedding Art Gallery – Nơi bạn có thể chiêm ngưỡng cùng lúc hàng trăm bộ váy cưới giữa một không gian đậm chất nghệ thuật và thưởng lãm show thời trang cưới của các nhà thiết kế danh tiếng cùng các thương hiệu hàng đầu hiện nay. <br> <br> Được lấy cảm hứng từ những tầng mây bồng bềnh, gợn sóng, kết hợp với ẩn ý nghệ thuật tinh tế, ELLE Wedding Art Gallery truyền tải vẹn nguyên hình ảnh trời mây vào trong ý tưởng thiết kế của toàn bộ sự kiện. Hàng trăm chiếc váy cưới kiêu sa được xếp đặt đầy ẩn ý trên những tầng mây uốn lượn ngẫu nhiên, kết hợp cùng nghệ thuật ánh sáng tạo hiệu ứng thị giác kì ảo, khiến bất kỳ ai lần đầu tiên đến với nơi đây đều không khỏi ngỡ ngàng. Con đường thiên thai giữa những dải mây bồng bềnh sẽ đưa bạn thưởng ngoạn các tác phẩm nghệ thuật mê hoặc đến từ những NTK hàng đầu và những thương hiệu nổi tiếng nhất. Dù bạn đang tìm kiếm chiếc váy dáng suông hiện đại, thanh lịch hay mơ ước được hóa thân thành nàng công chúa trong chiếc váy bồng xòe lộng lẫy, dù bạn yêu thích dáng cổ tròn duyên dáng hay dáng cúp ngực quyến rũ, tất cả những thiết kế váy cưới đặc sắc nhất với đa dạng phong cách đều quy tụ tại ELLE Wedding Art Gallery.','record_6.jpg','2020-10-04'),(7,'TIỆC CƯỚI CHỦ RỂ HỒNG ĐĂNG & CÔ DÂU THANH THẢO','Hồng Đức','Lãng mạn là hương vị không thể thiếu trong tình yêu. Tựa như những cái chạm nhẹ và đầy tinh tế nhất vào trái tim của mỗi con người, khi đứng trong không gian của sảnh tiệc cưới đầy lãng mạn, những cảm xúc như được gợi mở ra. Vào chính thời điểm đó, người tham dự tiệc tại <b>Tràng An Plaza</b> chỉ quan tâm một điều duy nhất, đó là lắng nghe những rung động thổn thức trong tâm hồn mình.','record_7.jpg','2023-02-16'),(8,'TIỆC CƯỚI CHỦ RỂ MINH KHÔI & CÔ DÂU TRÚC ANH','Đình Khải','Lãng mạn là hương vị không thể thiếu trong tình yêu. Tựa như những cái chạm nhẹ và đầy tinh tế nhất vào trái tim của mỗi con người, khi đứng trong không gian của sảnh tiệc cưới đầy lãng mạn, những cảm xúc như được gợi mở ra. Vào chính thời điểm đó, người tham dự tiệc tại <b>Tràng An Plaza</b> chỉ quan tâm một điều duy nhất, đó là lắng nghe những rung động thổn thức trong tâm hồn mình.','record_8.jpg','2022-12-03'),(9,'TIỆC CƯỚI CHỦ RỂ NGUYỄN HUY & CÔ DÂU TRẦN HÀ','Lê Xuân','Lãng mạn là hương vị không thể thiếu trong tình yêu. Tựa như những cái chạm nhẹ và đầy tinh tế nhất vào trái tim của mỗi con người, khi đứng trong không gian của sảnh tiệc cưới đầy lãng mạn, những cảm xúc như được gợi mở ra. Vào chính thời điểm đó, người tham dự tiệc tại <b>Tràng An Plaza</b> chỉ quan tâm một điều duy nhất, đó là lắng nghe những rung động thổn thức trong tâm hồn mình.','record_9.jpg','2023-03-19'),(10,'TIỆC THÔI NÔI BÉ GIA BẢO','Khánh Linh','Tiệc thôi nôi là phong tục của người Việt Nam tổ chức khi em bé đủ 12 tháng, là một bữa tiệc sinh nhật đặc biệt của bé. Khác với tiệc sinh nhật thông thường, khi tổ chức tiệc thôi nôi bố mẹ sẽ chuẩn bị mâm cúng hay làm lễ, tùy theo tập quán của mỗi vùng. Tiệc thôi nôi không chỉ để cảm ơn các bà mụ mà còn cầu mong sự an lành cho bé. Trong tiệc thôi nôi, bé được tự chọn các vật dụng tương ứng với một ngành nghề nào đấy trong tương lai. Mọi người đến tham gia tiệc thôi nôi sẽ tặng quà và chúc phúc với mong muốn đưa đến những điều tốt đẹp nhất cho bé.','record_10.jpg','2022-06-09'),(11,'TIỆC CƯỚI PRODUCER TOULIVER & CA SĨ TÓC TIÊN','Khánh An','Ngày 20/2/2020, ca sĩ Tóc Tiên và producer Hoàng Touliver tổ chức đám cưới tại nhà thờ Con Gà (Đà Lạt) với sự tham gia của một số bạn bè thân thiết. Trước đó, mọi thông tin về hôn lễ được giấu kín. Yêu nhau nhiều năm nhưng cả hai luôn kín tiếng với truyền thông. Sau đám cưới, Tóc Tiên cảm ơn những lời chúc phúc, cho biết không muốn ồn ào và mong khán giả chỉ quan tâm đến mình bằng những sản phẩm âm nhạc','record_11.jpg','2022-02-20');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hall_display_script`
--

DROP TABLE IF EXISTS `hall_display_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hall_display_script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_display_title_id` int(11) DEFAULT NULL,
  `hall_display_script` text,
  `hall_display_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hall_display_title_id_idx` (`hall_display_title_id`),
  CONSTRAINT `hall_display_title_id` FOREIGN KEY (`hall_display_title_id`) REFERENCES `hall_display_title` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hall_display_script`
--

LOCK TABLES `hall_display_script` WRITE;
/*!40000 ALTER TABLE `hall_display_script` DISABLE KEYS */;
INSERT INTO `hall_display_script` VALUES (1,2,'BIẾN HÓA TRONG TỪNG CHI TIẾT','hall_1.jpg'),(2,2,'Được tạo dựng theo phong cách kiến trúc chiết chung – sự giao thoa của nhiều nguồn cảm hứng kết hợp là chất định tính đặc trưng tạo nên phong cách của Tràng An Plaza. Bao phủ các sảnh sự kiện là sự giàu có của các chi tiết, hình khối hoa văn chạm khắc không trùng lặp. Tiếp đó, hình ảnh phản chiếu từ nền đá marble, hệ đèn pha lê còn tạo nên lớp ánh sáng đổ bóng phân bố uyển chuyển chiếu rọi những tác phẩm điêu khắc mang giá trị cao. Có thể thấy Tràng An Plaza là một địa điểm đầy phong thái cho buổi tiệc chiêu đãi và sự kiện của bạn.','hall_9.png'),(3,2,'Cùng với đó, hệ thống trang thiết bị âm thanh, ánh sáng, tiện ích vận hành cùng khả năng điều phối, sắp xếp đa dạng các loại hình set-up chính là những nhân tố quyết định làm nên sự nổi bật của địa điểm.',NULL),(4,3,'KHÔNG GIAN ĐA CHỨC NĂNG VỚI 8 SẢNH TIỆC ĐA DẠNG TỪNG SẢNH','hall_2.png'),(5,3,'HỆ THỐNG SẢNH VÀ SẢNH CHỜ RIÊNG BIỆT TẠO KHÔNG GIAN RIÊNG TƯ','hall_3.png'),(6,3,'ĐỘI NGŨ HÀNG TRĂM NHÂN SỰ CÓ KHẢ NĂNG PHỤC VỤ CÙNG LÚC 3000 KHÁCH','hall_4.png'),(7,3,'HỆ THỐNG ÂM THANH ÁNH SÁNG CAO CẤP','hall_5.jpg'),(8,3,'MÀN HÌNH LED HIỆN ĐẠI','hall_6.jpg'),(9,3,'TRANG THIẾT BỊ TIÊU CHUẨN 5 SAO','hall_7.jpg'),(11,4,NULL,'hall_8.jpg');
/*!40000 ALTER TABLE `hall_display_script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hall_display_title`
--

DROP TABLE IF EXISTS `hall_display_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hall_display_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_display_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hall_display_title`
--

LOCK TABLES `hall_display_title` WRITE;
/*!40000 ALTER TABLE `hall_display_title` DISABLE KEYS */;
INSERT INTO `hall_display_title` VALUES (1,'INTRO'),(2,'SẢNH TIỆC - TRÀNG AN PLAZA'),(3,'VÌ SAO CHỌN CHÚNG TÔI'),(4,'KHÁM PHÁ');
/*!40000 ALTER TABLE `hall_display_title` ENABLE KEYS */;
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
-- Table structure for table `home_script`
--

DROP TABLE IF EXISTS `home_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_title_id` int(11) DEFAULT NULL,
  `home_script_title` text,
  `home_script` text,
  `home_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `home_title_id_idx` (`home_title_id`),
  CONSTRAINT `home_title_id` FOREIGN KEY (`home_title_id`) REFERENCES `home_title` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_script`
--

LOCK TABLES `home_script` WRITE;
/*!40000 ALTER TABLE `home_script` DISABLE KEYS */;
INSERT INTO `home_script` VALUES (1,1,NULL,NULL,'wedding_3.jpg'),(2,1,NULL,NULL,'wedding_2.png'),(3,1,NULL,NULL,'wedding_1.jpg'),(4,2,NULL,'Khởi đầu là một công ty tổ chức sự kiện với nhiều năm kinh nghiệm trong lĩnh vực tiệc cưới, <b>Tràng An Plaza</b> luôn cung cấp cho khách hàng những gói dịch vụ thông minh, tiết kiệm và tiện lợi, là giải pháp cho tất cả các cô dâu chú rể đang chuẩn bị cho ngày trọng đại của mình. Bên cạnh đó, Tràng An Plaza ngày càng mở rộng và phát triển đa dạng trong tất cả các sự kiện đặc biệt khác như tiệc sinh nhật, lễ kỉ niệm, tiệc doanh nghiệp … vẫn theo tiêu chí đem lại những dịch vụ tốt nhất dành cho khách hàng.<br> <b>Tràng An Plaza</b>, với sức mạnh kinh nghiệm của một tập thể đầy năng lực, tác phong chuyên nghiệp, tinh thần làm việc nghiêm túc. Nguồn nhân lực trẻ có sức sáng tạo không ngừng và gu thẩm mỹ nghệ thuật đa phong cách. Sự đầu tư có chiều sâu về đội ngũ nhân viên đầy sáng tạo cũng như hệ thống trang thiết bị chuyên nghiệp. Chúng tôi mang tới cho khách hàng không chỉ là sự thỏa mãn cho công việc mà còn là sự tin tưởng và hợp tác lâu dài. Đẳng cấp và khác biệt chỉ tại Tràng An Plaza các bạn sẽ có 1 đám cưới trong mơ, mang phong cách riêng của chính mình vì bạn xứng đáng với điều đó.','wedding_5.jpg'),(5,3,'TIỆC CƯỚI & KỶ NIỆM','Phút giây lắng đọng, ấm áp bên nhau chính là món quà tinh thần ý nghĩa nhất đánh dấu những mốc son mà bạn luôn mong muốn lưu giữ. Giao hòa trong bầu không khí là nét đẹp kiến trúc đắt giá để câu chuyện kéo dài giữa nhịp cảm xúc và thực đơn hấp dẫn khiến bữa tiệc lan tỏa tính gắn kết nhờ trải nghiệm vị giác.','wedding_6.jpg'),(6,3,'TIỆC DOANH NGHIỆP','Tại Tràng An Plaza, những không gian đa dạng được kết cấu chặt chẽ cùng dịch vụ sự kiện trọn gói là tổng thể hoàn chỉnh để các nhà tổ chức tối ưu hóa kế hoạch của mình. Việc giảm tải gánh nặng tổ chức đồng nghĩa với khả năng tập trung hơn ở các khâu nội dung hay quảng bá.','company_1.jpg'),(7,3,'TIỆC NGOÀI TRỜI','Thay vì bó hẹp không gian và lựa chọn của mình, tại sao bạn không đổi mới và phá cách cho bữa tiệc chiêu đãi cảm xúc của mình bằng việc lựa chọn không gian tổ chức tiệc cưới ngoài trời, hòa mình với thiên nhiên, với sắc xanh nhẹ nhàng mà bay bổng để gây ấn tượng mạnh mẽ với quan khách tham dự. Địa điểm tổ chức tiệc cưới ngoài trời rộng rãi, sang trọng đem đến buổi lễ thành hôn đáng nhớ nhất.','outdoor_1.jpg'),(8,4,'KIẾN TRÚC CỔ ĐIỂN','Khung dáng đắp đá marble, phân bổ thêm những đường cong uốn cạnh, các sảnh tiệc lộ diện theo cá tính không trùng lặp.Tràng An Plaza không che giấu ý định tạo nên ấn tượng choáng ngợp cho bất kỳ ai ghé qua.','architecture.jpg'),(9,4,'DỊCH VỤ THẤU HIỂU','Các dịch vụ tiệc và hội nghị trọn gói theo chuẩn mực cao cấp, chỉn chu cùng mức chi phí hợp lý giúp giảm tải gánh nặng tổ chức, cho phép bạn tập trung hơn ở việc trải nghiệm và tận hưởng','service_1.jpg'),(10,4,'DẤU ẤN ẨM THỰC','Các thực đơn tiệc buffet, tiệc tea-break, tiệc set-menu hay thực đơn tự chọn hài hòa trong cách kết hợp món, dễ tiếp cận đến khẩu vị bản địa nhưng vẫn đủ biến tấu làm thực khách bật lên lời khen tấm tắc.','food_1.jpg');
/*!40000 ALTER TABLE `home_script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_title`
--

DROP TABLE IF EXISTS `home_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_title`
--

LOCK TABLES `home_title` WRITE;
/*!40000 ALTER TABLE `home_title` DISABLE KEYS */;
INSERT INTO `home_title` VALUES (1,'Intro'),(2,'TRÀNG AN PLAZA'),(3,'LĂNG KÍNH TRÀNG AN PLAZA'),(4,'DẤU ẤN TRÀNG AN PLAZA'),(5,'ĐỐI TÁC');
/*!40000 ALTER TABLE `home_title` ENABLE KEYS */;
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
-- Table structure for table `oneyear_birthday_script`
--

DROP TABLE IF EXISTS `oneyear_birthday_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oneyear_birthday_script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oneyear_birthday_title_id` int(11) DEFAULT NULL,
  `oneyear_birthday_script_title` text,
  `oneyear_birthday_script` text,
  `oneyear_birthday_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oneyear_birthday_title_id_idx` (`oneyear_birthday_title_id`),
  CONSTRAINT `oneyear_birthday_title_id` FOREIGN KEY (`oneyear_birthday_title_id`) REFERENCES `oneyear_birthday_title` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oneyear_birthday_script`
--

LOCK TABLES `oneyear_birthday_script` WRITE;
/*!40000 ALTER TABLE `oneyear_birthday_script` DISABLE KEYS */;
INSERT INTO `oneyear_birthday_script` VALUES (1,1,NULL,NULL,'birth_1.jpg'),(2,2,NULL,'Gửi gắm niềm yêu thương, sự kỳ vọng của gia đình đối với các thành viên nhỏ vừa đến với cuộc sống này luôn được đong đầy trong ngày sinh nhật đầu tiên. Tại TRÀNG AN Plaza, hãy biến hóa những nguyên liệu yêu thương của bạn thành món quà tinh thần lớn lao mà bạn muốn dành tặng cho con như một viên kẹo ngọt ngào để đánh dấu bước chân đầu tiên bé xíu vào đời.','birth_9.png'),(3,3,NULL,'Nhìn lại hành trình một năm đầu đời, ta thấy không chỉ có đó sự lớn lên và thay đổi từng ngày của trẻ, mà còn chứa đựng rất nhiều khoảnh khắc, cảm xúc nơi cha mẹ và những người thân yêu. Một bữa tiệc thôi nôi vui tươi, với những mảng màu bung trải rực rỡ sẽ là mảnh ký ức hiện hữu chói lọi mãi về sau cho tất cả thành viên gia đình.','birth_2.jpg'),(4,3,NULL,'Trọn gói sự kiện thôi nôi bao gồm:',NULL),(5,3,NULL,'Dịch vụ ẩm thực',NULL),(6,3,NULL,'Gói trang trí',NULL),(7,3,NULL,'Chương trình biểu diễn',NULL),(8,4,NULL,'Các lựa chọn trang hoàng không gian cho phép Bố Mẹ tạo nên phong cách riêng cho bữa tiệc thôi nôi của con. Chọn chủ đề theo gam màu, theo nhân vật hay theo chính biệt danh của Bé? Cùng TRÀNG AN PLAZA khám phá thêm nhé.','birth_3.jpg'),(9,4,NULL,'','birth_4.jpg'),(10,4,NULL,'','birth_5.jpg'),(11,5,NULL,'Đa dạng lựa chọn từ những menu theo gói hoặc menu chọn món để Bố Mẹ lựa chọn. Mỗi món ăn đều được chế biến từ nguồn nguyên liệu tươi mới và phục vụ bởi phong thái chuyên nghiệp từ đội ngũ của TRÀNG AN PLAZA.','birth_6.jpg'),(12,5,NULL,NULL,'birth_7.jpg'),(13,5,NULL,NULL,'birth_8.jpg');
/*!40000 ALTER TABLE `oneyear_birthday_script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oneyear_birthday_title`
--

DROP TABLE IF EXISTS `oneyear_birthday_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `oneyear_birthday_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oneyear_birthday_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oneyear_birthday_title`
--

LOCK TABLES `oneyear_birthday_title` WRITE;
/*!40000 ALTER TABLE `oneyear_birthday_title` DISABLE KEYS */;
INSERT INTO `oneyear_birthday_title` VALUES (1,'Intro'),(2,'TIỆC THÔI NÔI - TRÀNG AN PLAZA'),(3,'TIỆC THÔI NÔI'),(4,'GÓI TRANG TRÍ TIỆC THÔI NÔI'),(5,'ẨM THỰC');
/*!40000 ALTER TABLE `oneyear_birthday_title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outdoor_script`
--

DROP TABLE IF EXISTS `outdoor_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `outdoor_script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outdoor_title_id` int(11) DEFAULT NULL,
  `outdoor_script_title` text,
  `outdoor_script` text,
  `outdoor_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `outdoor_title_id_idx` (`outdoor_title_id`),
  CONSTRAINT `outdoor_title_id` FOREIGN KEY (`outdoor_title_id`) REFERENCES `outdoor_title` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outdoor_script`
--

LOCK TABLES `outdoor_script` WRITE;
/*!40000 ALTER TABLE `outdoor_script` DISABLE KEYS */;
INSERT INTO `outdoor_script` VALUES (1,1,NULL,NULL,'outdoor_1.png'),(2,2,NULL,'Phối hợp ăn ý với yêu cầu riêng của nhà tổ chức, chúng tôi cung cấp trọn gói tiệc phục vụ tại chỗ (Outside Catering). Việc của bạn là chỉ cần chia sẻ với chúng tôi bất cứ địa điểm nào diễn ra sự kiện để TRÀNG AN PLAZA mang đến trải nghiệm hài lòng và yên tâm từ cung cách phục vụ chuyên nghiệp đến ẩm thực ấn tượng cho khách tham dự.','outdoor_2.png'),(3,3,'KHAI TRƯƠNG RA MẮT DỰ ÁN','Chúng tôi còn cung cấp giải pháp hoàn thiện cho các dịch vụ đặt tiệc Catering tại chỗ. Cho dù lễ khai trương hay ra mắt dự án diễn ra tại không gian trong nhà hay ngoài trời, hãy chia sẻ với chúng tôi kế hoạch của bạn.','outdoor_3.jpg'),(4,3,'LỄ KHỞI CÔNG','Luôn đồng hành cùng với các lễ khởi công, động thổ nhà máy, dự án bất động sản, bất cứ địa điểm nào diễn ra sự kiện của bạn, hãy để cung cách phục vụ chuyên nghiệp, ẩm thực ấn tượng từ TRÀNG AN PLAZA góp phần với khởi đầu mới thành công.','outdoor_4.jpg'),(5,3,'TIỆC NGOÀI TRỜI','Tiệc ngoài trời đa phong cách dành cho bất cứ cá nhân nào như tiệc cưới, lễ báo hỷ, sinh nhật. Hãy biến buổi dạ tiệc ngoài trời mang hơi thở thiên nhiên trong lành, thoáng đãng và tạo nên một dấu ấn riêng cùng trọn gói phục vụ Catering từ TRÀNG AN PLAZA.','outdoor_5.jpg');
/*!40000 ALTER TABLE `outdoor_script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outdoor_title`
--

DROP TABLE IF EXISTS `outdoor_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `outdoor_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outdoor_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outdoor_title`
--

LOCK TABLES `outdoor_title` WRITE;
/*!40000 ALTER TABLE `outdoor_title` DISABLE KEYS */;
INSERT INTO `outdoor_title` VALUES (1,'Intro'),(2,'TIỆC NGOÀI - TRÀNG AN PLAZA'),(3,'DỊCH VỤ');
/*!40000 ALTER TABLE `outdoor_title` ENABLE KEYS */;
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
-- Table structure for table `party_script`
--

DROP TABLE IF EXISTS `party_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `party_script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `party_title_id` int(11) DEFAULT NULL,
  `party_script_title` text,
  `party_script` text,
  `party_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `party_title_id_idx` (`party_title_id`),
  CONSTRAINT `party_title_id` FOREIGN KEY (`party_title_id`) REFERENCES `party_title` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `party_script`
--

LOCK TABLES `party_script` WRITE;
/*!40000 ALTER TABLE `party_script` DISABLE KEYS */;
INSERT INTO `party_script` VALUES (1,1,NULL,NULL,'party_1.jpeg'),(2,2,NULL,'Lên kế hoạch và triển khai một ý tưởng thật mới lạ như một món quà bất ngờ dành tặng cho chính mình hay người thân, tại sao không? Từng cột mốc được ghi dấu qua từng buổi tiệc đầy cảm xúc sẽ chính là món quà tinh thần ý nghĩa nhất đánh dấu những mốc son mà bạn luôn mong muốn đóng khung và lưu giữ.','party_2.png'),(3,3,'TIỆC SINH NHẬT','Buổi tiệc của bạn sẽ nói lên bạn là ai và phong cách của bạn như thế nào? Vì thế đừng bỏ qua cơ hội khẳng định dấu ấn hay thương hiệu cá nhân của mình qua những buổi tiệc sinh nhật. TRÀNG AN PLAZA mang cảm giác ấm áp để bạn có thể tự tin khẳng định trong hành trình đánh dấu tuổi trẻ của chính mình.','party_3.jpg'),(4,3,'TIỆC KỈ NIỆM','Khi kỷ niệm ngày cưới của ba mẹ là ngày “lễ” của gia đình, một bữa tiệc kỷ niệm là không gian mà gia đình có những phút giây lắng đọng, thân mật bên nhau cùng các vị khách mời sẽ chính là món quà tinh thần ý nghĩa nhất đánh dấu những mốc son mà bạn luôn mong muốn đóng khung và lưu giữ.','party_4.jpg'),(5,3,'TIỆC MỪNG THỌ','Lễ mừng thọ luôn được duy trì và trở thành phong tục tập quán đẹp của người Việt. Đã đến lúc bạn dành tặng những gì tốt đẹp cho người thân yêu dấu trong khoảnh khắc một bữa tiệc mừng thọ báo hiếu đầy ý nghĩa.','party_5.jpg');
/*!40000 ALTER TABLE `party_script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `party_title`
--

DROP TABLE IF EXISTS `party_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `party_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `party_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `party_title`
--

LOCK TABLES `party_title` WRITE;
/*!40000 ALTER TABLE `party_title` DISABLE KEYS */;
INSERT INTO `party_title` VALUES (1,'Intro'),(2,'TIỆC CÁ NHÂN - TRÀNG AN PLAZA'),(3,'DỊCH VỤ');
/*!40000 ALTER TABLE `party_title` ENABLE KEYS */;
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `viewer_id` int(11) DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `review` text,
  `date_review` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `viewer_id_idx` (`viewer_id`),
  KEY `gallery_id_idx` (`gallery_id`),
  CONSTRAINT `gallery_id` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`),
  CONSTRAINT `viewer_id` FOREIGN KEY (`viewer_id`) REFERENCES `viewer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rev_event`
--

LOCK TABLES `rev_event` WRITE;
/*!40000 ALTER TABLE `rev_event` DISABLE KEYS */;
INSERT INTO `rev_event` VALUES (1,5,1,'etc','2023-05-14 21:28:08'),(2,5,1,'abc','2023-05-14 21:28:29'),(10,8,10,'nice','2023-05-16 17:56:35'),(11,8,10,'nice','2023-05-16 17:58:16'),(12,8,10,'opp','2023-05-16 17:58:42'),(13,8,10,'opp','2023-05-16 17:58:54'),(14,8,10,'opp','2023-05-16 18:02:37'),(15,8,9,'nice','2023-05-16 18:46:35'),(16,8,9,'opp','2023-05-16 18:47:17'),(17,8,7,'nice','2023-05-19 07:09:26');
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
  `viewer_password` varchar(200) DEFAULT NULL,
  `viewer_name` varchar(255) DEFAULT NULL,
  `viewer_email` varchar(255) DEFAULT NULL,
  `viewer_phone` int(10) DEFAULT NULL,
  `role_id` int(11) DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `role_id_idx` (`role_id`),
  CONSTRAINT `role_id_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewer`
--

LOCK TABLES `viewer` WRITE;
/*!40000 ALTER TABLE `viewer` DISABLE KEYS */;
INSERT INTO `viewer` VALUES (5,'thuandang1122','thuan123','Thuan Dang','thuan@apteach.vn',332834012,2),(6,'admin','thuan1234','Thuan Dang','thuan1@apteach.vn',332834011,1),(7,'thuan123','12345678','Thuan Dang','thuan123@apteach.vn',332834013,2),(8,'thuan221100','$2y$10$d2QTlvfILqtpC9vPcDaHXONbbIG26vZSCFUyRyRX.AFDCutQBCv3m','thuan','thuan@contact.vn',123456789,2);
/*!40000 ALTER TABLE `viewer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wedding_script`
--

DROP TABLE IF EXISTS `wedding_script`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wedding_script` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wedding_title_id` int(11) DEFAULT NULL,
  `wedding_script_title` text,
  `wedding_script` text,
  `wedding_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wedding_title_id_idx` (`wedding_title_id`),
  CONSTRAINT `wedding_title_id` FOREIGN KEY (`wedding_title_id`) REFERENCES `wedding_title` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wedding_script`
--

LOCK TABLES `wedding_script` WRITE;
/*!40000 ALTER TABLE `wedding_script` DISABLE KEYS */;
INSERT INTO `wedding_script` VALUES (1,1,NULL,NULL,'wedding_1.jpg'),(2,2,NULL,'Lãng mạn là hương vị không thể thiếu trong tình yêu. Tựa như những cái chạm nhẹ và đầy tinh tế nhất vào trái tim của mỗi con người, khi đứng trong không gian của sảnh tiệc cưới đầy lãng mạn, những cảm xúc như được gợi mở ra. Vào chính thời điểm đó, người tham dự tiệc tại Tràng An Plaza chỉ quan tâm một điều duy nhất, đó là lắng nghe những rung động thổn thức trong tâm hồn mình.','wedding_2.png'),(3,3,NULL,'Bản kế hoạch cưới của các cặp đôi sẽ trở nên dễ chịu và nhẹ nhàng hơn rất nhiều với sự đồng hành của TRÀNG AN PLAZA. Bởi vì có đó sự phối xếp chuẩn xác của quá trình tư vấn-điều phối, đa dạng dịch vụ tiệc trọn gói với mức chi phí thấu hiểu, khả năng nắm bắt những xu hướng mới nhất và sự bảo chứng được khẳng định từ thương hiệu. Sự tròn vẹn trong mọi khía cạnh tổ chức cưới đang chờ đợi các cặp đôi, hãy chọn cho mình một phong cách và chúng tôi sẽ biến tiệc cưới trong mơ thành hiện thực.','wedding_3.jpg'),(4,3,NULL,'Trọn gói tiệc cưới bao gồm',NULL),(5,3,NULL,'Thực đơn tiệc tự chọn – Set menu',NULL),(6,3,NULL,'Chương trình tiệc tiêu chuẩn',NULL),(7,3,NULL,'Dịch vụ trang trí',NULL),(8,3,NULL,'Chương trình biểu diễn',NULL),(9,4,NULL,'Thanh lịch hay lộng lẫy? Các chuyên viên trang trí của TRÀNG AN PLAZA biết cách tạo nên bức tranh hoàn hiện về ngày trọng đại mà bất kỳ cặp đôi nào cũng kỳ vọng.','wedding_4.jpg'),(10,4,NULL,NULL,'wedding_5.jpg'),(11,4,NULL,NULL,'wedding_6.jpg'),(12,5,NULL,'Nếu yêu thích phong cách ẩm thực đương đại- Fusion, các cặp đôi có thể cho khách mời bắt đầu thử nghiệm khẩu vị tại TRÀNG AN PLAZA. Hãy để vị bếp trưởng tài ba của chúng tôi dẫn dắt bạn và khách mời trong chuyến du ngoạn vị giác đáng nhớ!','wedding_7.jpg'),(13,5,NULL,NULL,'wedding_8.jpg'),(14,5,NULL,NULL,'wedding_9.jpg');
/*!40000 ALTER TABLE `wedding_script` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wedding_title`
--

DROP TABLE IF EXISTS `wedding_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wedding_title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wedding_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wedding_title`
--

LOCK TABLES `wedding_title` WRITE;
/*!40000 ALTER TABLE `wedding_title` DISABLE KEYS */;
INSERT INTO `wedding_title` VALUES (1,'Intro'),(2,'TIỆC CƯỚI - TRÀNG AN PLAZA'),(3,'TIỆC CƯỚI TRỌN GÓI'),(4,'GÓI TRANG TRÍ TIỆC CƯỚI'),(5,'ẨM THỰC');
/*!40000 ALTER TABLE `wedding_title` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-19 14:14:39
