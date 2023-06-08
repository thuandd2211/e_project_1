CREATE DATABASE  IF NOT EXISTS `event_management_1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `event_management_1`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: event_management_1
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Dang Dinh Thuan','thuan','123456','0332834012','thuan@aptech.vn','Ha Noi'),(2,'Thuan Dang','thuan123','$2y$10$DHByRi3C4lYUgmaKpmt1Wum5gaTVsUfGfnZSyPx4/wDMSveQd/OFW','0332834011','thuan123@apteach.vn','Ha Noi');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text,
  `email` text,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
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
  `name` text,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `description` text,
  `event_type_id` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `event_type_id_idx` (`event_type_id`),
  CONSTRAINT `event_customer` FOREIGN KEY (`event_type_id`) REFERENCES `event_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'Thuan','0332834012','thuan1@aptech.vn','abc',NULL,'2023-06-07 19:16:31'),(2,'Tai','0123456789','tai@aptech.com','etc',NULL,'2023-06-07 19:16:31');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_detail`
--

DROP TABLE IF EXISTS `event_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type_id` int(11) DEFAULT NULL,
  `title` text,
  `image` varchar(45) DEFAULT NULL,
  `script` text,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `event_detail_idx` (`event_type_id`),
  CONSTRAINT `event_detail` FOREIGN KEY (`event_type_id`) REFERENCES `event_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_detail`
--

LOCK TABLES `event_detail` WRITE;
/*!40000 ALTER TABLE `event_detail` DISABLE KEYS */;
INSERT INTO `event_detail` VALUES (1,1,'TIỆC CƯỚI TRỌN GÓI','wedding/wedding_3.jpg','Khi ánh sáng từ hệ đèn trần bắt đầu chiếu rọi, cũng là lúc những câu chuyện tình yêu tỏa sáng. Nồng độ xúc cảm hạnh phúc được sẻ chia trong không gian cưới Tràng An Palace khuếch tán và trở thành điểm chạm quý giá cho ký ức ghi dấu về sau.<br>',0),(2,2,'SỰ KIỆN THÔI NÔI','oneyear_birthday/birth_2.jpg','Mỗi mảnh ký ức vui vẻ mà người lớn chúng ta tạo nên hôm nay, đều sẽ trở thành mảnh ghép vun đắp cho hành trình lớn lên của con trẻ. Vì lẽ đó, Tràng An Palace luôn mong muốn có thể cùng Bố Mẹ điểm tô cho bé những kỷ niệm và trải nghiệm phong phú qua các lựa chọn tổ chức tiệc thôi nôi trọn gói của mình.',0),(3,3,'SỰ KIỆN CÁ NHÂN','party/party_6.jpg','Cùng nâng ly lên để chúc mừng cột mốc và thành tựu! Những bữa tiệc ngập tràn cá tính riêng, khẳng định phong cách sống là điều Tràng An Palace muốn dành đến bạn. Chúng tôi tôn vinh ý nghĩa buổi tiệc bằng những món ăn ngon khiến thực khách hài lòng cùng những tiết mục trình diễn công phu.',0),(4,4,'SỰ KIỆN CÔNG TY','company/company_3.jpg','Trải nghiệm tiệc chiêu đãi cho khách mời của bạn sẽ bắt đầu từ chuỗi những hương vị được kết hợp thú vị, bắt mắt nhưng vẫn gần gũi với vị giác bản địa. Sự lôi cuốn này dần trở thành chất xúc giúp bầu không khí, cuộc trò chuyện trở nên cởi mở, thân mật và thoải mái hơn',0),(5,5,'SỰ KIỆN NGOÀI TRỜI','outdoor/outdoor_6.jpg','Bạn đưa ra đề bài và Tràng An Palace sẽ là người tìm ra giải pháp, đó là cách chúng tôi chinh phục những bản kể hoạch tổ chức tiệc ngoài từ giản đơn đến phức tạp nhất. Với đội ngũ nhiều năm kinh nghiệm, Tràng An Palace bảo đảm duy trì đẳng cấp thương hiệu hàm chứa trong ẩm thực, phong thái phục vụ, tiết mục chương trình và trang trí đến với không gian đia điểm được bạn chỉ định.',0);
/*!40000 ALTER TABLE `event_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_food`
--

DROP TABLE IF EXISTS `event_food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type_id` int(11) DEFAULT NULL,
  `title` text,
  `image` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `event_food_idx` (`event_type_id`),
  CONSTRAINT `event_food` FOREIGN KEY (`event_type_id`) REFERENCES `event_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_food`
--

LOCK TABLES `event_food` WRITE;
/*!40000 ALTER TABLE `event_food` DISABLE KEYS */;
INSERT INTO `event_food` VALUES (1,1,NULL,'wedding/wedding_7.jpg',0),(2,1,NULL,'wedding/wedding_8.jpg',0),(3,1,NULL,'wedding/wedding_9.jpg',0),(4,1,NULL,'wedding/wedding_10.jpg',0),(5,2,NULL,'oneyear_birthday/birth_6.jpg',0),(6,2,NULL,'oneyear_birthday/birth_7.jpg',0),(7,2,NULL,'oneyear_birthday/birth_8.jpg',0),(8,2,NULL,'oneyear_birthday/birth_9.jpg',0),(9,3,NULL,'party/party_7.jpg',0),(10,3,NULL,'party/party_8.jpg',0),(11,3,NULL,'party/party_9.jpg',0),(12,3,NULL,'party/party_10.jpg',0),(13,4,NULL,'company/company_10.jpg',0),(14,4,NULL,'company/company_11.jpg',0),(15,4,NULL,'company/company_12.jpg',0),(16,4,NULL,'company/company_13.jpg',0),(17,5,NULL,'outdoor/outdoor_7.jpg',0),(18,5,NULL,'outdoor/outdoor_8.jpg',0),(19,5,NULL,'outdoor/outdoor_9.jpg',0),(20,5,NULL,'outdoor/outdoor_10.jpg',0);
/*!40000 ALTER TABLE `event_food` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_gallery`
--

DROP TABLE IF EXISTS `event_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_gallery` (
  `id` int(11) NOT NULL,
  `title` text,
  `author` text,
  `script` text,
  `image` varchar(45) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `event_type_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `event_type_id_idx` (`event_type_id`),
  CONSTRAINT `event_gallery` FOREIGN KEY (`event_type_id`) REFERENCES `event_type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_gallery`
--

LOCK TABLES `event_gallery` WRITE;
/*!40000 ALTER TABLE `event_gallery` DISABLE KEYS */;
INSERT INTO `event_gallery` VALUES (1,'TỔ CHỨC SỰ KIỆN TRUNG THU CHO THIẾU NHI','Trần Hùng','Tổ chức sự kiện lễ Trung thu cho thiếu nhi là sự kiện thường niên luôn được các tổ chức, doanh nghiệp chuẩn bị cho các em thiếu nhi như một món quà tặng bất ngờ, hạnh phúc cho các bé nhân dịp rằm Trung thu về. Tổ chức lễ Trung thu cho thiếu nhi đã trở thành thông lệ tại công ty tổ chức sự kiện Tràng An Plaza trong mỗi dịp trung thu về như một hành động, một việc làm ý nghĩa gián tiếp gửi đến các em thiếu nhi. <br><br> Năm nào cũng vậy, cứ mỗi độ trung thu về là tinh thần các em thiếu nhi lại sôi nổi và mong ngóng cho tới ngày. Với thiếu nhi, niềm hạnh phúc của các em là được gặp chú Cuội, gặp chị Hằng, được xem múa lân xung quanh nhà, khu phố hay trường học. Không những thế, háo hức nhất trong các em là sự nôn nóng mong nhận được những phần quà bánh kẹo hoặc đồ chơi để đi khoe với bạn bè, người thân và cô giáo của mình. Đó là điều kiện để cho ra đời những chương trình tổ chức lễ Trung thu cho các bé thiếu nhi mỗi năm.','review/record_1.jpg','2022-08-22',5,0),(2,'SUN GROUP – COLOR ME RUN CONNECT & HAVE FUN DA NANG 2022','Bảo Anh','Chiều 23.04.2022 Tràng An Plaza vinh dự được là đơn vị chính thức hợp tác cùng tập đoàn Sun Group để tổ chức sự kiện “Color Me Run Connect & Have Fun – Đường chạy sắc màu, Kết nối niềm vui” tại KĐT Nam Hoà Xuân, Ngũ Hành Sơn, Đà Nẵng đã thu hút hàng nghìn bạn trẻ tham gia. <br>Không chỉ được trải nghiệm một đường chạy sắc màu với các trạm mốc “Xuân – Hạ – Thu – Đông”, hàng nghìn vận động viên đã cùng hoà chung nhịp đập, thoả sức vẫy vùng trong cảnh hoàng hôn tráng lệ trên dải núi Ngũ Hành Sơn, khung cảnh sinh thái hữu tình của khu đô thị Nam Hoà Xuân cùng với sự kiện âm nhạc sôi động cuối chương trình.','review/record_2.jpg','2022-08-05',4,0),(3,'LỄ KỈ NIỆM 110 NĂM NGÀY QUỐC TẾ PHỤ NỮ 8/3','Huy Hải','Ngày 8.3.2019 tại trụ sở BNG, Nam Từ Liêm, Hà Nội đã diễn ra lễ kỷ niệm 110 năm ngày Quốc tế Phụ nữ 8/3 đặc biệt với sự tham dự của Trưởng đại diện Liên hợp quốc, đồng chủ tịch nhóm Đại sứ về bình đẳng giới Kamal Malhotra, Phó thủ tướng, Bộ trưởng Phạm Bình Minh, Đại sứ Mexico cùng các nữ Đại sứ, Trưởng đại diện và Phu nhân các Đại sứ,Trưởng đại diện các Tổ chức quốc tế, Nhóm phụ nữ Cộng đồng ASEAN tại Hà Nội, đại diện lãnh đạo các hiệp hội, cơ quan liên quan, Phu nhân các đồng chí Lãnh đạo Bộ Ngoại giao, các nữ Đại sứ, Thủ trưởng các đơn vị và đông đảo chị em của Bộ. <br> Tại lễ kỷ niệm ông Kamal Malhotra và Phó thủ tướng Phạm Bình Minh đã lên phát biểu và tặng hoa chị em phụ nữ có mặt tại hội trường chúc mừng nhân ngày Quốc tế Phụ nữ 8/3. Cùng sự trao đổi, chia sẻ từ Đại sứ Mexico tại Việt Nam, Trưởng ban nữ công Bộ Ngoại giao, từ đó tình cảm giao lưu được gắn kết và gần gũi hơn giữa các nước. Xen kẽ trong chương trình là các tiết mục giao lưu văn nghệ, văn hóa Việt Nam như hát then từ các nghệ nhân tỉnh Tuyên Quang, hát quan họ do các nghệ sĩ tỉnh Bắc Giang trình diễn. Các đại sứ và phu nhân đại sứ cùng giao lưu thử đàn, nón quai thao, tham quan các di sản văn hóa trưng bày của Việt Nam và chụp những bức ảnh lưu niệm tại buổi lễ.','review/record_3.jpg','2019-08-03',5,0),(4,'CHUỖI SỰ KIỆN TRULY LUXURY NGÀY 27&28 THÁNG 6 NĂM 2020','Hồng Ngọc','Không đơn thuần là một chương trình giới thiệu dự án, đến với TRULY LUXURY, quý quan khách đã được trải nghiệm một không gian thượng lưu xa hoa của The Royal – Biểu tượng thượng lưu bên sông Hàn. <br><br>Và không gì vinh hạnh bằng khi Tràng An Plaza được quý khách hàng tin tưởng và hợp tác 2 show liên tiếp để giới thiệu dự án đẳng cấp này tại Hà Nội, ngay từ khi nhận được hạng mục yêu cầu từ khách hàng đến lúc chạy chương trình Tràng An Plaza có đúng 3 ngày để thực hiện từ thiết kế, lên layout, visual, in ấn, nhân sự… đến set up âm thanh ánh sáng, LED P3 nét căng…<br><br>Chúng tôi tuy không phải là người giỏi nhất, không là đơn vị hàng đầu, nhưng khi khách hàng đã chọn Tràng An chúng tôi tự tin khẳng định mình sẽ làm bằng trọn cái tâm với nghề, với một đội ngũ trẻ, năng động, nhiệt huyết và sự cầu tiến, chuyên nghiệp trong nghề, Tràng An Plaza sẽ mang đến cho khách hàng sự hài lòng nhất !','review/record_4.jpg','2020-01-28',4,0),(5,'LỄ KHAI TRƯƠNG VĂN PHÒNG CÔNG TY CỔ PHẦN MIOSKIN MIỀN BẮC','Trần Hùng','Sáng ngày 8/1, Công ty cổ phần Mioskin Miền Bắc đã khai trương Văn phòng tại Hà Nội với sự có mặt của các nhà phân phối, thành viên công ty và nhiều Nghệ sĩ nổi tiếng như Ca sĩ Hariwon, diễn viên Anh Đức, diễn viên Trúc Anh,… <br><br> Với triết lý kinh doanh “Hướng đến sự tiện lợi nhưng vẫn đảm bảo chất lượng và tính hiệu quả”, Mioskin đã tung ra thị trường dòng mỹ phẩm tiện dụng, đa tính năng và chất lượng vượt trội mang đến sự “tiện lợi” và “hài lòng” cho khách hàng. <br><br> Sản phẩm Xịt dưỡng tế bào gốc 5 in 1 Mioskin là dòng sản phẩm dược mỹ phẩm tích hợp công dụng của 5 bước dưỡng da cơ bản dành cho những người bận rộn mà vẫn đảm bảo sức khỏe của làn da. Mioskin đang tạo ra một cuộc cách mạng tối ưu hóa trong việc chăm sóc làn da của phụ nữ Việt Nam. <br><br>Khai trương Công ty CP Mioskin Miền Bắc này sẽ hứa hẹn mở rộng thêm thị trường, đồng hành gắn kết với các Nhà phân phối, tạo cơ hội cho phụ nữ Việt Nam được tiếp cận với các sản phẩm làm đẹp an toàn, tiện lợi và hiệu quả, giúp chị em tự tin tỏa sáng, đặc biệt tiết kiệm nhiều thời gian vừa hoàn thành công việc xã hội vừa chăm sóc tốt cho bản thân.','review/record_5.jpg','2023-01-08',4,0),(6,'ELLE WEDDING ART GALLERY 2020','Khánh Linh','Là thương hiệu gắn liền với sự thanh lịch, lòng hiếu khách và tinh thần duy mỹ, suốt hành trình phát triển hơn 12 năm, Tràng An Plaza luôn không ngừng nỗ lực mang đến cho khách hàng những trải nghiệm tối ưu nhất. Sau thành công rực rỡ của hai mùa triển lãm Love Paradise, đầu tháng 10 sắp tới, Tràng An Plaza cùng tạp chí ELLE sẽ mang đến cho bạn một sự kiện thời trang cưới đẳng cấp hàng đầu Việt Nam: ELLE Wedding Art Gallery – Nơi bạn có thể chiêm ngưỡng cùng lúc hàng trăm bộ váy cưới giữa một không gian đậm chất nghệ thuật và thưởng lãm show thời trang cưới của các nhà thiết kế danh tiếng cùng các thương hiệu hàng đầu hiện nay. <br> <br> Được lấy cảm hứng từ những tầng mây bồng bềnh, gợn sóng, kết hợp với ẩn ý nghệ thuật tinh tế, ELLE Wedding Art Gallery truyền tải vẹn nguyên hình ảnh trời mây vào trong ý tưởng thiết kế của toàn bộ sự kiện. Hàng trăm chiếc váy cưới kiêu sa được xếp đặt đầy ẩn ý trên những tầng mây uốn lượn ngẫu nhiên, kết hợp cùng nghệ thuật ánh sáng tạo hiệu ứng thị giác kì ảo, khiến bất kỳ ai lần đầu tiên đến với nơi đây đều không khỏi ngỡ ngàng. Con đường thiên thai giữa những dải mây bồng bềnh sẽ đưa bạn thưởng ngoạn các tác phẩm nghệ thuật mê hoặc đến từ những NTK hàng đầu và những thương hiệu nổi tiếng nhất. Dù bạn đang tìm kiếm chiếc váy dáng suông hiện đại, thanh lịch hay mơ ước được hóa thân thành nàng công chúa trong chiếc váy bồng xòe lộng lẫy, dù bạn yêu thích dáng cổ tròn duyên dáng hay dáng cúp ngực quyến rũ, tất cả những thiết kế váy cưới đặc sắc nhất với đa dạng phong cách đều quy tụ tại ELLE Wedding Art Gallery.','review/record_6.jpg','2020-10-04',1,0),(7,'TIỆC CƯỚI CHỦ RỂ HỒNG ĐĂNG & CÔ DÂU THANH THẢO','Hồng Đức','Lãng mạn là hương vị không thể thiếu trong tình yêu. Tựa như những cái chạm nhẹ và đầy tinh tế nhất vào trái tim của mỗi con người, khi đứng trong không gian của sảnh tiệc cưới đầy lãng mạn, những cảm xúc như được gợi mở ra. Vào chính thời điểm đó, người tham dự tiệc tại <b>Tràng An Plaza</b> chỉ quan tâm một điều duy nhất, đó là lắng nghe những rung động thổn thức trong tâm hồn mình.','review/record_7.jpg','2023-02-16',2,0),(8,'TIỆC CƯỚI CHỦ RỂ MINH KHÔI & CÔ DÂU TRÚC ANH','Đình Khải','Lãng mạn là hương vị không thể thiếu trong tình yêu. Tựa như những cái chạm nhẹ và đầy tinh tế nhất vào trái tim của mỗi con người, khi đứng trong không gian của sảnh tiệc cưới đầy lãng mạn, những cảm xúc như được gợi mở ra. Vào chính thời điểm đó, người tham dự tiệc tại <b>Tràng An Plaza</b> chỉ quan tâm một điều duy nhất, đó là lắng nghe những rung động thổn thức trong tâm hồn mình.','review/record_8.jpg','2022-12-03',2,0),(9,'TIỆC CƯỚI CHỦ RỂ NGUYỄN HUY & CÔ DÂU TRẦN HÀ','Lê Xuân','Lãng mạn là hương vị không thể thiếu trong tình yêu. Tựa như những cái chạm nhẹ và đầy tinh tế nhất vào trái tim của mỗi con người, khi đứng trong không gian của sảnh tiệc cưới đầy lãng mạn, những cảm xúc như được gợi mở ra. Vào chính thời điểm đó, người tham dự tiệc tại <b>Tràng An Plaza</b> chỉ quan tâm một điều duy nhất, đó là lắng nghe những rung động thổn thức trong tâm hồn mình.','review/record_9.jpg','2023-03-19',2,0),(10,'TIỆC THÔI NÔI BÉ GIA BẢO','Khánh Linh','Tiệc thôi nôi là phong tục của người Việt Nam tổ chức khi em bé đủ 12 tháng, là một bữa tiệc sinh nhật đặc biệt của bé. Khác với tiệc sinh nhật thông thường, khi tổ chức tiệc thôi nôi bố mẹ sẽ chuẩn bị mâm cúng hay làm lễ, tùy theo tập quán của mỗi vùng. Tiệc thôi nôi không chỉ để cảm ơn các bà mụ mà còn cầu mong sự an lành cho bé. Trong tiệc thôi nôi, bé được tự chọn các vật dụng tương ứng với một ngành nghề nào đấy trong tương lai. Mọi người đến tham gia tiệc thôi nôi sẽ tặng quà và chúc phúc với mong muốn đưa đến những điều tốt đẹp nhất cho bé.','review/record_10.jpg','2022-06-09',3,0),(11,'TIỆC CƯỚI PRODUCER TOULIVER & CA SĨ TÓC TIÊN','Khánh An','Ngày 20/2/2020, ca sĩ Tóc Tiên và producer Hoàng Touliver tổ chức đám cưới tại nhà thờ Con Gà (Đà Lạt) với sự tham gia của một số bạn bè thân thiết. Trước đó, mọi thông tin về hôn lễ được giấu kín. Yêu nhau nhiều năm nhưng cả hai luôn kín tiếng với truyền thông. Sau đám cưới, Tóc Tiên cảm ơn những lời chúc phúc, cho biết không muốn ồn ào và mong khán giả chỉ quan tâm đến mình bằng những sản phẩm âm nhạc','review/record_11.jpg','2022-02-20',2,0);
/*!40000 ALTER TABLE `event_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_intro`
--

DROP TABLE IF EXISTS `event_intro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_intro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type_id` int(11) DEFAULT NULL,
  `title` text,
  `script` text,
  `image` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `event_intro_idx` (`event_type_id`),
  CONSTRAINT `event_intro` FOREIGN KEY (`event_type_id`) REFERENCES `event_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_intro`
--

LOCK TABLES `event_intro` WRITE;
/*!40000 ALTER TABLE `event_intro` DISABLE KEYS */;
INSERT INTO `event_intro` VALUES (1,1,'SỰ KIỆN CƯỚI – TRÀNG AN PALACE','Ngày vui đã đến! Đó là một ngày tràn ngập nụ cười hạnh phúc và đầy ắp những hình ảnh đẹp đẽ, lãng mạn. Đằng sau những bức ảnh tuyệt đẹp có sự đầu tư về chi tiết, sắp xếp bố cục đẹp và chuẩn mực đó là tất cả tâm tư, sáng tạo bạn đã gửi gắm đằng sau hậu trường. Hãy bắt đầu một chương mới mang tên “hạnh phúc mãi mãi” của bạn bằng việc chọn một nơi để được triển khai ý tưởng “cưới theo cách của bạn”.','wedding/wedding_2.png',0),(2,2,'SỰ KIỆN THÔI NÔI – TRÀNG AN PALACE','Gửi gắm niềm yêu thương, sự kỳ vọng của gia đình đối với các thành viên nhỏ vừa đến với cuộc sống này luôn được đong đầy trong ngày sinh nhật đầu tiên. Tại Tràng An Palace, hãy biến hóa những nguyên liệu yêu thương của bạn thành món quà tinh thần lớn lao mà bạn muốn dành tặng cho con như một viên kẹo ngọt ngào để đánh dấu bước chân đầu tiên bé xíu vào đời.','oneyear_birthday/birth_9.png',0),(3,3,'SỰ KIỆN CÁ NHÂN – TRÀNG AN PALACE','Lên kế hoạch và triển khai một ý tưởng thật mới lạ như một món quà bất ngờ dành tặng cho chính mình hay người thân, tại sao không? Từng cột mốc được ghi dấu qua từng buổi tiệc đầy cảm xúc sẽ chính là món quà tinh thần ý nghĩa nhất đánh dấu những mốc son mà bạn luôn mong muốn đóng khung và lưu giữ.','party/party_2.png',0),(4,4,'TIỆC DOANH NGHIỆP – TRÀNG AN PALACE','Để lý giải các yếu tố làm nên thành công của các sự kiện doanh nghiệp hay thương hiệu, ta sẽ thấy được trong đó là sự liên kết của: những cơ hội được kết nối, sự đồng lòng của một tập thể, tiếng vang của ý tưởng lớn, hay niềm tri ân và lời chúc mừng. Tương ứng với các yếu tố trên, tại Tràng An Palace, chúng tôi tạo nên một không gian là điểm bao hàm của:','company/company_9.png',0),(5,5,'TIỆC NGOÀI – TRÀNG AN PALACE','Phối hợp ăn ý với yêu cầu riêng của nhà tổ chức, chúng tôi cung cấp trọn gói tiệc phục vụ tại chỗ (Outside Catering). Việc của bạn là chỉ cần chia sẻ với chúng tôi bất cứ địa điểm nào diễn ra sự kiện để Tràng An Palace mang đến trải nghiệm hài lòng và yên tâm từ cung cách phục vụ chuyên nghiệp đến ẩm thực ấn tượng cho khách tham dự.','outdoor/outdoor_2.png',0);
/*!40000 ALTER TABLE `event_intro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_service`
--

DROP TABLE IF EXISTS `event_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_service` (
  `id` int(11) NOT NULL,
  `event_detail_id` int(11) DEFAULT NULL,
  `title` text,
  `script` text,
  `image` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `detail_service_idx` (`event_detail_id`),
  CONSTRAINT `detail_service` FOREIGN KEY (`event_detail_id`) REFERENCES `event_detail` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_service`
--

LOCK TABLES `event_service` WRITE;
/*!40000 ALTER TABLE `event_service` DISABLE KEYS */;
INSERT INTO `event_service` VALUES (1,1,'GÓI BLANCHE','Nét hòa quyện của những cụm hoa căng tràn sức sống nở trên chốn rào thưa gợi lên nguồn cảm hứng thật gần gũi, thân thương. Blanche đón chào những xúc cảm tích cực mà bạn và người ấy đem đến Tràng An Palace và sẽ trở thành một phần kí ức ta mãi trân quý về sau.','wedding/wedding_4.jpg',0),(2,1,'GÓI CHÉRIE','Chọn lấy tinh thần thưởng thức ngập vẻ mộng mơ và tưng bừng sức sống, gói trang trí Chérie đã được hình thành dựa theo mỹ cảm sang trọng, thi vị chủ đạo. Ở mặt ý tưởng, dễ nhận thấy bối cảnh dưới Chérie lấy cảm hứng từ biểu tượng của một cuốn sách mở ra những chân trời thênh thang.','wedding/wedding_5.jpg',0),(3,1,'GÓI CÉLINE','Nét hòa hợp tự nhiên của các chất liệu vải canvas dập hoa văn, hoa hồng đỏ và trắng, hoa đền rù,… chính là những điểm nhấn duyên dáng, mềm mại hiện diện giữa khuôn dạng vuông vức, tối giản trong ánh nhìn Céline','wedding/wedding_6.jpg',0),(4,2,'ÁNH SAO LẤP LÁNH','Những quả bong bóng từ lâu đã trở nên nổi tiếng là đồ chơi yêu thích của con trẻ, . Thật đặc biệt khi chọn ánh vàng đồng là chất liệu chính. Golden với cách tạo hình bong bóng bắt mắt, thú vị mang đến một buổi tiệc đầu đời không kém phần tinh tế.','oneyear_birthday/birth_3.jpg',0),(5,2,'PINKY','Một góc bài trí sinh nhật ấm cúng theo sắc màu hồng dịu ngọt luôn là loại màu sắc tuyệt vời nhất cho mọi bé gái. Pinky đem lại cảm giác vui vẻ, ngây thơ cũng là để ba mẹ gửi gắm những mong ước hạnh phúc đến con.','oneyear_birthday/birth_4.jpg',0),(6,2,'KHOẢNG TRỜI NHỎ','Một buổi tiệc sinh nhật được thiết kế dành riêng cho các chàng trai đáng yêu bé bỏng của chúng ta sẽ thế nào nhỉ? Bong bóng xanh trong trẻo, cá tính là tone màu chủ không thể bỏ qua khi ba mẹ tận tay chuẩn bị sinh nhật cho con.','oneyear_birthday/birth_5.jpg',0),(7,3,'TIỆC SINH NHẬT','Buổi tiệc của bạn sẽ nói lên bạn là ai và phong cách của bạn như thế nào? Vì thế đừng bỏ qua cơ hội khẳng định dấu ấn hay thương hiệu cá nhân của mình qua những buổi tiệc sinh nhật. Tràng An Palace mang cảm giác ấm áp để bạn có thể tự tin khẳng định trong hành trình đánh dấu tuổi trẻ của chính mình.','party/party_3.jpg',0),(8,3,'TIỆC KỈ NIỆM','Khi kỷ niệm ngày cưới của ba mẹ là ngày “lễ” của gia đình, một bữa tiệc kỷ niệm là không gian mà gia đình có những phút giây lắng đọng, thân mật bên nhau cùng các vị khách mời sẽ chính là món quà tinh thần ý nghĩa nhất đánh dấu những mốc son mà bạn luôn mong muốn đóng khung và lưu giữ.','party/party_4.jpg',0),(9,3,'TIỆC MỪNG THỌ','Lễ mừng thọ luôn được duy trì và trở thành phong tục tập quán đẹp của người Việt. Đã đến lúc bạn dành tặng những gì tốt đẹp cho người thân yêu dấu trong khoảnh khắc một bữa tiệc mừng thọ báo hiếu đầy ý nghĩa.','party/party_5.jpg',0),(10,4,'HỘI NGHỊ – HỘI THẢO','Những đường nét quyến rũ và công năng thực tiễn luôn được đảm bảo đã biến Tràng An Palace thành địa điểm có khả năng biến hóa linh hoạt đáp ứng mọi ý tưởng từ hội thảo chuyên đề quy mô nhỏ ấm cúng vài chục khách đến các buổi hội nghị kinh doanh','company/company_5.jpg',0),(11,4,'TIỆC CHIÊU ĐÃI','Dạ tiệc chiêu đãi, tri ân, họp mặt sẽ là món quà cho chính tổ chức, công ty chia sẻ niềm vui ấy với tất cả đồng nghiệp nhân viên hay đối tác thân thiết. Tràng An Palace luôn đồng hành kế hoạch tổ chức gắn liền với tinh thần và hình ảnh của công ty.','company/company_6.jpg',0),(12,4,'HỌP BÁO – RA MẮT SẢN PHẨM','Tìm kiếm không gian vừa đủ để trưng bày, tối ưu ngân sách nhưng triển khai các ý tưởng cô đọng nhất? Lựa chọn nào cho những nhà tổ chức tin tưởng gửi gắm “đứa con tinh thần” của mình trong buổi đầu ra mắt sản phẩm đến công chúng. Câu trả lời sẽ được tìm thấy tại Tràng An Palace – nơi tiềm năng được nâng tầm đến thành công.','company/company_7.jpg',0),(13,4,'TRÌNH DIỄN NGHỆ THUẬT','Bất kỳ nghệ sỹ hay nhà tổ chức nào cũng đều mong muốn giới thiệu đến công chúng những thành quả sáng tạo của mình dưới hình hài chỉn chu nhất. Dưới hiệu quả từ hệ thống ánh sáng và âm thanh chuẩn 5 sao, Tràng An Palace sẽ trở thành một sân khấu chuyên nghiệp nơi các nghệ sỹ được thăng hoa và truyền tải trọn vẹn ý đồ nghệ thuật của buổi biểu diễn.','company/company_8.jpg',0),(14,5,'KHAI TRƯƠNG RA MẮT DỰ ÁN','Chúng tôi còn cung cấp giải pháp hoàn thiện cho các dịch vụ đặt tiệc Catering tại chỗ. Cho dù lễ khai trương hay ra mắt dự án diễn ra tại không gian trong nhà hay ngoài trời, hãy chia sẻ với chúng tôi kế hoạch của bạn.','outdoor/outdoor_3.jpg',0),(15,5,'LỄ KHỞI CÔNG','Luôn đồng hành cùng với các lễ khởi công, động thổ nhà máy, dự án bất động sản, bất cứ địa điểm nào diễn ra sự kiện của bạn, hãy để cung cách phục vụ chuyên nghiệp, ẩm thực ấn tượng từ Tràng An Palace góp phần với khởi đầu mới thành công','outdoor/outdoor_4.jpg',0),(16,5,'TIỆC NGOÀI TRỜI','Tiệc ngoài trời đa phong cách dành cho bất cứ cá nhân nào như tiệc cưới, lễ báo hỷ, sinh nhật. Hãy biến buổi dạ tiệc ngoài trời mang hơi thở thiên nhiên trong lành, thoáng đãng và tạo nên một dấu ấn riêng cùng trọn gói phục vụ Catering từ Tràng An Palace.','outdoor/outdoor_5.jpg',0);
/*!40000 ALTER TABLE `event_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_type`
--

DROP TABLE IF EXISTS `event_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_type`
--

LOCK TABLES `event_type` WRITE;
/*!40000 ALTER TABLE `event_type` DISABLE KEYS */;
INSERT INTO `event_type` VALUES (1,'TIỆC CƯỚI','wedding/wedding_1.jpg',0),(2,'TIỆC THÔI NÔI','oneyear_birthday/birth_1.jpg',0),(3,'TIỆC CÁ NHÂN','party/party_1.jpeg',0),(4,'TIỆC DOANH NGHIỆP','company/company_1.jpg',0),(5,'TIỆC NGOÀI TRỜI','outdoor/outdoor_1.png',0);
/*!40000 ALTER TABLE `event_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner`
--

DROP TABLE IF EXISTS `partner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner`
--

LOCK TABLES `partner` WRITE;
/*!40000 ALTER TABLE `partner` DISABLE KEYS */;
INSERT INTO `partner` VALUES (1,'mb bank','0123456789','mbbank@contact.vn','partner/mb-bank.jpg',0),(2,'fpt','0123456789','fpt@contact.vn','partner/fpt.jpg',0),(3,'vin group','0123456789','vingroup@contact.vn','partner/vingroup.jpg',0),(4,'viettel','0123456789','viettel@contact.vn','partner/viettel.png',0);
/*!40000 ALTER TABLE `partner` ENABLE KEYS */;
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
  KEY `viewer_rev_idx` (`viewer_id`),
  KEY `gallery_rev_idx` (`gallery_id`),
  CONSTRAINT `gallery_rev` FOREIGN KEY (`gallery_id`) REFERENCES `event_gallery` (`id`),
  CONSTRAINT `viewer_rev` FOREIGN KEY (`viewer_id`) REFERENCES `viewer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rev_event`
--

LOCK TABLES `rev_event` WRITE;
/*!40000 ALTER TABLE `rev_event` DISABLE KEYS */;
INSERT INTO `rev_event` VALUES (1,1,11,'nice','2023-05-25 16:22:02'),(2,1,10,'noise','2023-05-25 17:12:17'),(3,1,9,'hapi','2023-05-26 10:35:13'),(4,1,10,'good','2023-05-26 10:45:01'),(5,1,8,'nice','2023-06-07 14:16:38'),(6,1,9,'yea','2023-06-07 18:43:56');
/*!40000 ALTER TABLE `rev_event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `viewer`
--

DROP TABLE IF EXISTS `viewer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `viewer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` text,
  `name` text,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `viewer`
--

LOCK TABLES `viewer` WRITE;
/*!40000 ALTER TABLE `viewer` DISABLE KEYS */;
INSERT INTO `viewer` VALUES (1,'thuan','$2y$10$Lhd6El86tyncn2MwLZeeGeUb37phEpkpgZlmmmeezsOzWJgReWhUS','Thuan Dang','thuan@apteach.vn','0332834012');
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

-- Dump completed on 2023-06-08 10:43:28
