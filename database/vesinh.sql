/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50727
 Source Host           : localhost:3306
 Source Schema         : vesinh

 Target Server Type    : MySQL
 Target Server Version : 50727
 File Encoding         : 65001

 Date: 27/11/2020 22:13:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for advertising
-- ----------------------------
DROP TABLE IF EXISTS `advertising`;
CREATE TABLE `advertising` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1.Script 2.Image',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of advertising
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for article_category
-- ----------------------------
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category` (
  `article_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  KEY `article_category_article_id_foreign` (`article_id`) USING BTREE,
  KEY `article_category_category_id_foreign` (`category_id`) USING BTREE,
  CONSTRAINT `article_category_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of article_category
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for article_downloads
-- ----------------------------
DROP TABLE IF EXISTS `article_downloads`;
CREATE TABLE `article_downloads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article_downloads_article_id_foreign` (`article_id`),
  CONSTRAINT `article_downloads_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of article_downloads
-- ----------------------------
BEGIN;
INSERT INTO `article_downloads` VALUES (22, 'test 2', 'http://s1.vndoc.com/data/file/2020/05/11/ngu-van-8-bai-viet-so-7-van-nghi-luan-hay-noi-khong-voi-cac-te-nan.doc', 7);
INSERT INTO `article_downloads` VALUES (23, 'test 5555', 'http://test.com', 7);
INSERT INTO `article_downloads` VALUES (24, 'test 1', 'http://24h.vn', 7);
COMMIT;

-- ----------------------------
-- Table structure for article_group
-- ----------------------------
DROP TABLE IF EXISTS `article_group`;
CREATE TABLE `article_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `article_group_article_id_foreign` (`article_id`) USING BTREE,
  KEY `article_group_group_id_foreign` (`group_id`) USING BTREE,
  CONSTRAINT `article_group_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_group_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of article_group
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for article_tag
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `article_tag_article_id_foreign` (`article_id`) USING BTREE,
  KEY `article_tag_tag_id_foreign` (`tag_id`) USING BTREE,
  CONSTRAINT `article_tag_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of article_tag
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `view` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `articles_slug_unique` (`slug`) USING BTREE,
  KEY `articles_user_id_foreign` (`user_id`) USING BTREE,
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of articles
-- ----------------------------
BEGIN;
INSERT INTO `articles` VALUES (4, 'Giới thiệu', 'gioi-thieu', NULL, 'Về chúng tôi', NULL, '<p>Về ch&uacute;ng t&ocirc;i</p>', 0, 1, NULL, NULL, NULL, 'page', '2019-10-14 13:19:23', '2020-10-28 17:47:27', 1);
INSERT INTO `articles` VALUES (5, 'Lãi suất tiền gửi 8- 9%/năm có dễ nhận?', 'lai-suat-tien-gui-8-9nam-co-de-nhan', '/uploads/posts/2019/10/20191014161224-giaodich-3.jpg', 'Trong khi lãi suất trên liên ngân hàng giảm liên tục thì lãi suất trên thị trường 1 vẫn tiếp tục neo cao...', NULL, '<p>Theo b&aacute;o c&aacute;o thị trường tiền tệ mới c&ocirc;ng bố của Bộ phận ph&acirc;n t&iacute;ch v&agrave; tư vấn kh&aacute;ch h&agrave;ng c&aacute; nh&acirc;n (SSI Research), ng&agrave;y 9/10/2019, NHNN tiếp tục giảm l&atilde;i suất t&iacute;n phiếu th&ecirc;m 25 điểm cơ bản (bps) xuống 2,25%/năm, đ&acirc;y l&agrave; lần giảm thứ 3 trong năm 2019 với mức giảm tổng cộng 75bps.&nbsp;</p>\r\n\r\n<p>L&atilde;i suất t&iacute;n phiếu vốn được coi l&agrave; mức chặn dưới đối với l&atilde;i suất tr&ecirc;n li&ecirc;n ng&acirc;n h&agrave;ng nhưng kể từ sau đợt giảm l&atilde;i suất t&iacute;n phiếu về 2,5%/năm v&agrave;o ng&agrave;y 16/9/2019, l&atilde;i suất tr&ecirc;n li&ecirc;n ng&acirc;n h&agrave;ng vẫn li&ecirc;n tục ở dưới ngưỡng n&agrave;y. V&igrave; thế, việc NHNN giảm tiếp một nấc nữa cũng ph&ugrave; hợp với diễn biến thị trường v&agrave; định hướng giảm l&atilde;i suất của cơ quan n&agrave;y.</p>\r\n\r\n<p>Trong tuần, NHNN ph&aacute;t h&agrave;nh 90.000 tỷ đồng t&iacute;n phiếu trong khi lượng t&iacute;n phiếu đến hạn l&agrave; 87 ngh&igrave;n tỷ đồng, h&uacute;t r&ograve;ng qua k&ecirc;nh n&agrave;y 3.000 tỷ đồng. NHNN cũng mua kỳ hạn 7 ng&agrave;y 495 tỷ đồng tr&ecirc;n OMO với l&atilde;i suất 4.5%/năm. T&iacute;nh chung lại, NHNN đ&atilde; h&uacute;t r&ograve;ng 2.504 tỷ đồng tr&ecirc;n thị trường mở. Thanh khoản VND đang dồi d&agrave;o, nguồn cung VND từ c&aacute;c giao dịch b&aacute;n ngoại tệ v&agrave; t&acirc;m l&yacute; t&iacute;ch cực từ l&atilde;i suất t&iacute;n phiếu giảm khiến cho l&atilde;i suất tr&ecirc;n li&ecirc;n ng&acirc;n h&agrave;ng giảm kh&aacute; mạnh sau 1 tuần chững lại trước đ&oacute;. L&atilde;i suất qua đ&ecirc;m VND tr&ecirc;n li&ecirc;n ng&acirc;n h&agrave;ng vafo cuối tuần ở mức 2%/năm &ndash; giảm 30bps so với cuối tuần trước, ch&ecirc;nh lệch l&atilde;i suất VND-USD thu hẹp về s&aacute;t 0.</p>\r\n\r\n<p>Tr&ecirc;n thị trường 1, một số ng&acirc;n h&agrave;ng th&ocirc;ng b&aacute;o biểu l&atilde;i suất huy động tăng cao, c&oacute; thể l&ecirc;n đến 9% nhưng thường k&egrave;m theo c&aacute;c điều kiện như số tiền gửi lớn, kỳ hạn d&agrave;i (24-36 th&aacute;ng), chỉ &aacute;p dụng với kh&aacute;ch h&agrave;ng c&aacute; nh&acirc;n&hellip;n&ecirc;n đối tượng kh&aacute;ch h&agrave;ng được hưởng mức l&atilde;i suất cao kh&ocirc;ng nhiều, thị phần huy động của c&aacute;c NHTM n&agrave;y cũng kh&aacute; nhỏ n&ecirc;n diễn biến n&agrave;y kh&ocirc;ng mang t&iacute;nh đại diện. L&atilde;i suất huy động tr&ecirc;n thị trường 1 &aacute;p dụng với kh&aacute;ch h&agrave;ng tổ chức vẫn duy tr&igrave; ở mức 4,3-5,5%/năm với kỳ hạn dưới 6 th&aacute;ng, 5,5-7,5%/năm với kỳ hạn 6 đến dưới 12 th&aacute;ng v&agrave; 6,4-8,1%/năm với kỳ hạn 12-13 th&aacute;ng.</p>\r\n\r\n<p>Thực tế khảo s&aacute;t của ch&uacute;ng t&ocirc;i cho thấy, nhiều ng&acirc;n h&agrave;ng đẩy l&atilde;i suất kỳ hạn d&agrave;i l&ecirc;n tr&ecirc;n 8,5%/năm, thậm ch&iacute; l&agrave; 9%/năm nhưng k&egrave;m theo y&ecirc;u cầu về số tiền gửi. Chẳng hạn với mức l&atilde;i 9%/năm ở SHB y&ecirc;u cầu kh&aacute;ch h&agrave;ng phải gửi tr&ecirc;n 1 năm v&agrave; số tiền tối thiểu l&agrave; 500 tỷ đồng. Ở một số ng&acirc;n h&agrave;ng như Eximbank, TPBank... để hưởng l&atilde;i cao kh&aacute;ch h&agrave;ng cũng phải c&oacute; v&agrave;i chục tỷ trở l&ecirc;n mang đến gửi. Thế nhưng một số ng&acirc;n h&agrave;ng cũng chẳng y&ecirc;u cầu về số tiền gửi m&agrave; chỉ cần kỳ hạn d&agrave;i 12 th&aacute;ng trở l&ecirc;n l&agrave; c&oacute; l&atilde;i hơn 8%/năm, chẳng hạn Nam &Aacute;, NCB, ABBank, SCB, Vietcapital Bank...</p>\r\n\r\n<p>Tuy nhi&ecirc;n, như nhận x&eacute;t của SSI Research, nh&oacute;m c&aacute;c ng&acirc;n h&agrave;ng &aacute;p l&atilde;i cao lại chiếm thị phần nhỏ n&ecirc;n kh&ocirc;ng mang t&iacute;nh đại diện. Hiện 4 ng&acirc;n h&agrave;ng lớn nhất hệ thống l&agrave; Agribank, BIDV, VietinBank v&agrave; Vietcombank - chiếm hơn nửa tổng thị phần tiền gửi - lại huy động vốn với l&atilde;i suất thấp, với mức cao nhất chỉ quanh 7%/năm. Như vậy so với c&aacute;c ng&acirc;n h&agrave;ng nhỏ, ch&ecirc;nh lệch l&atilde;i suất l&ecirc;n đến 2 điểm phần trăm.</p>', 0, 1, NULL, NULL, NULL, 'article', '2019-10-14 16:12:24', '2019-10-14 16:12:24', 1);
INSERT INTO `articles` VALUES (6, 'Bloomberg: Bamboo kỳ vọng niêm yết đầu năm 2020, vốn hóa lên đến 1 tỷ USD', 'bloomberg-bamboo-ky-vong-niem-yet-dau-nam-2020-von-hoa-len-den-1-ty-usd', '/uploads/posts/2019/10/20191014161413-anh-6.png', 'Bamboo Airways cũng kỳ vọng giá IPO khoảng 50-60.000 đồng/cổ phiếu tương ứng khoảng 2,59USD/cổ phiếu.', NULL, '<p>Theo tin từ Bloomberg, H&atilde;ng h&agrave;ng kh&ocirc;ng Tre Việt (Bamboo Airways) dự kiến sẽ ni&ecirc;m yết ngay trong qu&yacute; đầu ti&ecirc;n của năm tới. Vốn h&oacute;a kỳ vọng l&ecirc;n đến 1 tỷ USD khi l&ecirc;n s&agrave;n.</p>\r\n\r\n<p>Cũng theo Bloomberg, h&atilde;ng h&agrave;ng kh&ocirc;ng non trẻ n&agrave;y sẽ ni&ecirc;m yết tổng cộng khoảng 400 triệu cổ phiếu tr&ecirc;n s&agrave;n HoSE hoặc s&agrave;n H&agrave; Nội. Th&ocirc;ng tin n&agrave;y cũng đ&atilde; được &ocirc;ng Nguyễn Khắc Hải x&aacute;c nhận với Bloomberg qua phỏng vấn điện thoại.</p>\r\n\r\n<p>Bamboo Airways cũng kỳ vọng gi&aacute; IPO khoảng 50-60.000 đồng/cổ phiếu tương ứng khoảng 2,59USD/cổ phiếu.</p>\r\n\r\n<p>Ngay khi Bloomberg đưa tin s&aacute;ng nay, cổ phiếu FLC của Tập đo&agrave;n FLC-đơn vị sở hữu 100% vốn của h&atilde;ng h&agrave;ng kh&ocirc;ng&nbsp;Bamboo Airways đ&atilde; tăng trần sau chuỗi ng&agrave;y giảm s&acirc;u. T&iacute;nh đến 9h50&#39;, cổ phiếu FLC đạt dư mua trần hơn 2 triệu đơn vị.</p>\r\n\r\n<p>Trước đ&oacute;, cũng theo Bloomberg, h&atilde;ng h&agrave;ng kh&ocirc;ng Bamboo Airways kỳ vọng sẽ huy động được khoảng 100 triệu USD từ vụ IPO dự kiến sẽ diễn ra v&agrave;o năm tới để phục vụ cho tham vọng mở rộng mạnh mẽ ở Việt Nam, một trong những thị trường h&agrave;ng kh&ocirc;ng tăng trưởng nhanh nhất thế giới.</p>\r\n\r\n<p>&quot;Số vốn thu được sẽ gi&uacute;p ch&uacute;ng t&ocirc;i mở rộng đội bay với mong muốn chiếm lĩnh 30% thị phần nội địa v&agrave;o năm 2020&quot;, &ocirc;ng Trịnh Văn Quyết, Chủ tịch của Bamboo Airways từng trao đổi với ph&oacute;ng vi&ecirc;n Bloomberg qua điện thoại. &Ocirc;ng cũng cho biết hiện h&atilde;ng đang nắm khoảng hơn 10% thị phần.</p>\r\n\r\n<p>Tầng lớp trung lưu ng&agrave;y c&agrave;ng lớn mạnh trong bối cảnh nền kinh tế đạt tốc độ tăng trưởng khoảng 7% đang gi&uacute;p tăng thu nhập của người ti&ecirc;u d&ugrave;ng Việt Nam c&oacute; th&ecirc;m thu nhập để c&oacute; thể di chuyển bằng m&aacute;y bay nhiều hơn. Theo Cục H&agrave;ng kh&ocirc;ng Việt Nam, năm 2018 c&aacute;c s&acirc;n bay trong nước đ&oacute;n tiếp 106 triệu h&agrave;nh kh&aacute;ch, tăng 13% so với năm trước.</p>\r\n\r\n<p>Bamboo Airways hiện vận h&agrave;nh 10 t&agrave;u bay tr&ecirc;n 25 đường bay cả nội địa v&agrave; quốc tế. Th&aacute;ng 8 vừa qua, Ph&oacute; Thủ tướng Trịnh Đ&igrave;nh Dũng đ&atilde; k&yacute; v&agrave;o quyết định cho ph&eacute;p Bamboo đến năm 2023 c&oacute; thể tăng đội bay l&ecirc;n 30 m&aacute;y bay. Đội bay gồm cả m&aacute;y bay th&acirc;n rộng v&agrave; th&acirc;n hẹp.</p>', 0, 1, NULL, NULL, NULL, 'article', '2019-10-14 16:14:13', '2019-10-14 16:14:13', 1);
INSERT INTO `articles` VALUES (7, 'Bạn đang ở mức độ nào của bệnh trầm cảm', 'ban-dang-o-muc-do-nao-cua-benh-tram-cam', '/uploads/posts/2019/10/20191014161556-giaodich-3.jpg', 'Trầm cảm là một căn bệnh rất phổ biến. Theo thống kê, đến 80% dân số sẽ bị trầm cảm vào một lúc nào đó trong cuộc sống của mình. Bệnh có thể xảy ra ở bất kỳ độ tuổi nào và thường phổ biến ở nữ giới hơn nam giới.', NULL, '<p>Chứng trầm cảm sẽ ảnh hưởng đến c&aacute;ch bạn cảm nhận, suy nghĩ, h&agrave;nh xử v&agrave; c&oacute; thể dẫn đến những vấn đề đa dạng về tinh thần v&agrave; thể chất. Nguy hiểm hơn, n&oacute; c&ograve;n dẫn bạn đến với &yacute; nghĩ v&agrave; h&agrave;nh vi tự s&aacute;t.</p>\r\n\r\n<p>Liệu bạn c&oacute; đang bị trầm cảm kh&ocirc;ng, v&agrave; đang ở mức độ n&agrave;o? 18 c&acirc;u hỏi của Nh&agrave; t&acirc;m thần học<strong>&nbsp;Ivan K. Goldberg&nbsp;</strong>dưới đ&acirc;y sẽ gi&uacute;p bạn tự kiểm tra v&agrave; ph&aacute;t hiện liệu m&igrave;nh hay những người th&acirc;n c&oacute; mắc phải trầm cảm hay kh&ocirc;ng. Vậy n&ecirc;n h&atilde;y cố gắng trả lời trung thực nhất!</p>\r\n\r\n<p><em><strong>T</strong></em><strong><em>rong mỗi c&acirc;u hỏi sẽ c&oacute; 6 mức điểm (0, 1, 2, 3, 4, 5 điểm) tương ứng với c&aacute;c mức độ từ thấp đến cao. Sau khi chọn xong đ&aacute;p &aacute;n của mỗi c&acirc;u hỏi, h&atilde;y cộng lại tất cả điểm v&agrave; xem m&igrave;nh đang ở đ&acirc;u tr&ecirc;n mức thang trầm cảm, v&agrave; nhớ chỉ được chọn 1 đ&aacute;p &aacute;n th&ocirc;i nh&eacute;:</em></strong></p>\r\n\r\n<p><strong>C&acirc;u 1: T&ocirc;i l&agrave;m bất kỳ chuyện g&igrave; cũng chậm r&atilde;i v&agrave; lề mề&nbsp;</strong>(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 2: T&ocirc;i thấy tương lai của m&igrave;nh thật sự m&ugrave; mịt&nbsp;</strong>(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 3: T&ocirc;i cảm thấy rất kh&oacute; tập trung trong việc đọc s&aacute;ch b&aacute;o</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 4: T&ocirc;i kh&ocirc;ng thể cảm nhận được những niềm vui v&agrave; hạnh ph&uacute;c xung quanh bản th&acirc;n</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 5: T&ocirc;i kh&ocirc;ng thể tự đưa ra quyết định cho bất cứ việc g&igrave;</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 6: T&ocirc;i kh&ocirc;ng c&ograve;n hứng th&uacute; với những việc đ&atilde; từng mang lại niềm vui v&agrave; hạnh ph&uacute;c cho bản th&acirc;n</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 7: T&ocirc;i lu&ocirc;n lu&ocirc;n thấy t&acirc;m trạng m&igrave;nh buồn phiền, ch&aacute;n nản v&agrave; mệt mỏi</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 8: T&ocirc;i thường xuy&ecirc;n c&oacute; cảm gi&aacute;c bồn chồn, căng thẳng v&agrave; bứt rứt</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 9: T&ocirc;i thấy cơ thể m&igrave;nh lu&ocirc;n uể oải lẫn mệt nho&agrave;i mỗi ng&agrave;y</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 10: T&ocirc;i lu&ocirc;n thấy rất kh&oacute; khăn khi l&agrave;m bất kể việc g&igrave;, kể cả những thứ b&igrave;nh thường v&agrave; nhỏ nhặt nhất</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>', 0, 1, NULL, NULL, NULL, 'article', '2019-10-14 16:15:56', '2020-06-18 18:47:01', 1);
INSERT INTO `articles` VALUES (8, 'Chính sách', 'chinh-sach', NULL, NULL, NULL, '<p>content</p>', 0, 1, NULL, NULL, NULL, 'page', '2020-07-14 14:17:50', '2020-07-14 14:17:50', 1);
INSERT INTO `articles` VALUES (11, 's12', 's12', NULL, NULL, NULL, '<p>sss</p>', 0, 1, NULL, NULL, NULL, 'service', '2020-11-03 16:58:01', '2020-11-03 16:58:01', 1);
INSERT INTO `articles` VALUES (12, 's13', 's13', NULL, NULL, NULL, '<p>ssss</p>', 0, 1, NULL, NULL, NULL, 'service', '2020-11-09 17:43:31', '2020-11-09 17:43:31', 1);
COMMIT;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` tinyint(4) NOT NULL DEFAULT '0',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `category_slug_unique` (`slug`) USING BTREE,
  KEY `category_parent_id_foreign` (`parent_id`) USING BTREE,
  CONSTRAINT `category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of category
-- ----------------------------
BEGIN;
INSERT INTO `category` VALUES (3, 'Tin tức', 'tin-tuc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2019-10-14 03:59:42', '2020-06-27 00:20:42', 1);
INSERT INTO `category` VALUES (6, 'Giới thiệu', 'gioi-thieu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2020-06-27 00:20:18', '2020-06-27 00:20:18', 1);
INSERT INTO `category` VALUES (7, 'Tuyển sinh', 'tuyen-sinh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2020-06-27 00:20:32', '2020-06-27 00:20:32', 1);
INSERT INTO `category` VALUES (10, 'Dịch vụ', 'dich-vu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2020-10-28 17:47:55', '2020-10-28 17:47:55', 1);
INSERT INTO `category` VALUES (11, 'Sản phẩm', 'san-pham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2020-10-28 17:48:06', '2020-10-28 17:48:06', 1);
INSERT INTO `category` VALUES (12, 'Vệ sinh công nghiệp sau xây dựng', 've-sinh-cong-nghiep-sau-xay-dung', 10, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2020-10-28 17:48:31', '2020-10-28 17:48:31', 1);
INSERT INTO `category` VALUES (13, 'Vệ sinh công nghiệp theo giờ', 've-sinh-cong-nghiep-theo-gio', 10, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2020-10-28 17:48:52', '2020-10-28 17:48:52', 1);
INSERT INTO `category` VALUES (14, 'Vệ sinh công trình sau xây dựng', 've-sinh-cong-trinh-sau-xay-dung', 10, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2020-10-28 17:49:25', '2020-10-28 17:49:25', 1);
COMMIT;

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of customers
-- ----------------------------
BEGIN;
INSERT INTO `customers` VALUES (1, 'aaa@gmail.com', 'Hoang cau', '0011231234', '2020-08-03 17:08:02', '2020-08-03 17:08:02');
INSERT INTO `customers` VALUES (2, 'asdfasf@gmail.com', 'hoangcao', '0931544884', '2020-08-03 17:45:15', '2020-08-03 17:45:15');
INSERT INTO `customers` VALUES (3, 'hongcuong@gmail.com', 'hoangcao', '0931544884', '2020-08-03 17:45:42', '2020-08-03 17:45:42');
INSERT INTO `customers` VALUES (4, 'hung1@gmail.com', 'hoangcao', '0931544884', '2020-08-03 17:47:03', '2020-08-03 17:47:03');
INSERT INTO `customers` VALUES (5, 'yduoc1@gmail.com', 'y duoc', '0921343220', '2020-08-03 17:52:07', '2020-08-03 17:52:07');
INSERT INTO `customers` VALUES (6, 'nhu1@gmai.com', 'nhu', '0923433344', '2020-08-03 17:55:42', '2020-08-03 17:55:42');
COMMIT;

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of groups
-- ----------------------------
BEGIN;
INSERT INTO `groups` VALUES (1, 'Hot', NULL, NULL, 1);
COMMIT;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `direct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_group_id` int(11) NOT NULL,
  `sort` tinyint(4) NOT NULL DEFAULT '0',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `menu_parent_id_foreign` (`parent_id`) USING BTREE,
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of menu
-- ----------------------------
BEGIN;
INSERT INTO `menu` VALUES (29, 'Giới thiệu', 'gioi-thieu', NULL, NULL, NULL, 1, 0, 'category', '2020-06-27 00:22:32', '2020-06-27 00:22:38');
INSERT INTO `menu` VALUES (33, 'Y sĩ đa khoa', 'y-si-da-khoa', NULL, NULL, NULL, 3, 0, 'category', '2020-06-27 00:45:35', '2020-06-27 00:45:35');
INSERT INTO `menu` VALUES (36, 'Điều dưỡng đa khoa', 'dieu-duong-da-khoa', NULL, NULL, NULL, 3, 0, 'category', '2020-06-27 00:45:35', '2020-06-27 00:45:35');
INSERT INTO `menu` VALUES (39, 'Dược sỹ trung cấp', 'duoc-sy-trung-cap', NULL, NULL, NULL, 3, 0, 'category', '2020-06-27 00:45:35', '2020-06-27 00:45:35');
INSERT INTO `menu` VALUES (40, 'Dịch vụ', 'dich-vu', NULL, NULL, NULL, 1, 1, 'category', '2020-10-28 17:50:00', '2020-10-28 17:50:02');
INSERT INTO `menu` VALUES (41, 'Vệ sinh công nghiệp sau xây dựng', 've-sinh-cong-nghiep-sau-xay-dung', 40, NULL, NULL, 1, 2, 'category', '2020-10-28 17:50:00', '2020-10-28 17:50:02');
INSERT INTO `menu` VALUES (42, 'Vệ sinh công nghiệp theo giờ', 've-sinh-cong-nghiep-theo-gio', 40, NULL, NULL, 1, 3, 'category', '2020-10-28 17:50:00', '2020-10-28 17:50:05');
INSERT INTO `menu` VALUES (43, 'Vệ sinh công trình sau xây dựng', 've-sinh-cong-trinh-sau-xay-dung', 40, NULL, NULL, 1, 4, 'category', '2020-10-28 17:50:00', '2020-10-28 17:50:06');
INSERT INTO `menu` VALUES (44, 'Sản phẩm', 'san-pham', NULL, NULL, NULL, 1, 2, 'category', '2020-10-28 17:50:00', '2020-10-28 17:50:06');
INSERT INTO `menu` VALUES (45, 'Tin tức', 'tin-tuc', NULL, NULL, NULL, 8, 1, 'category', '2020-10-28 17:50:35', '2020-10-28 17:51:17');
INSERT INTO `menu` VALUES (46, 'Dự án', 'du-an', NULL, '#', NULL, 8, 0, NULL, '2020-10-28 17:51:10', '2020-10-28 17:51:10');
INSERT INTO `menu` VALUES (47, 'Liên hệ', 'lien-he', NULL, '#', NULL, 8, 2, NULL, '2020-10-28 17:51:15', '2020-10-28 17:51:17');
INSERT INTO `menu` VALUES (48, 'Giới thiệu', 'gioi-thieu', NULL, NULL, NULL, 9, 0, 'category', '2020-10-28 18:25:12', '2020-10-28 18:25:12');
INSERT INTO `menu` VALUES (49, 'Dịch vụ', 'dich-vu', NULL, NULL, NULL, 9, 1, 'category', '2020-10-28 18:25:12', '2020-10-28 18:25:48');
INSERT INTO `menu` VALUES (50, 'Vệ sinh công nghiệp sau xây dựng', 've-sinh-cong-nghiep-sau-xay-dung', 49, NULL, NULL, 9, 2, 'category', '2020-10-28 18:25:12', '2020-10-28 18:25:48');
INSERT INTO `menu` VALUES (51, 'Vệ sinh công nghiệp theo giờ', 've-sinh-cong-nghiep-theo-gio', 49, NULL, NULL, 9, 3, 'category', '2020-10-28 18:25:12', '2020-10-28 18:25:48');
INSERT INTO `menu` VALUES (52, 'Vệ sinh công trình sau xây dựng', 've-sinh-cong-trinh-sau-xay-dung', 49, NULL, NULL, 9, 4, 'category', '2020-10-28 18:25:12', '2020-10-28 18:25:48');
INSERT INTO `menu` VALUES (53, 'Sản phẩm', 'san-pham', NULL, NULL, NULL, 9, 2, 'category', '2020-10-28 18:25:12', '2020-10-28 18:25:48');
INSERT INTO `menu` VALUES (54, 'Dự án', 'du-an', NULL, '#', NULL, 9, 3, NULL, '2020-10-28 18:25:35', '2020-10-28 18:25:48');
INSERT INTO `menu` VALUES (55, 'Tin tức', 'tin-tuc', NULL, NULL, NULL, 9, 4, 'category', '2020-10-28 18:25:41', '2020-10-28 18:25:44');
INSERT INTO `menu` VALUES (57, 's12', 's12', NULL, NULL, NULL, 1, 0, 'service', '2020-11-03 17:01:27', '2020-11-03 17:01:27');
COMMIT;

-- ----------------------------
-- Table structure for menu_group
-- ----------------------------
DROP TABLE IF EXISTS `menu_group`;
CREATE TABLE `menu_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of menu_group
-- ----------------------------
BEGIN;
INSERT INTO `menu_group` VALUES (1, 'Main left menu', '2019-10-14 04:04:02', '2019-10-14 04:04:02', 1);
INSERT INTO `menu_group` VALUES (8, 'Main right menu', '2020-10-28 17:50:20', '2020-10-28 17:50:20', 1);
INSERT INTO `menu_group` VALUES (9, 'Mobile Menu', '2020-10-28 18:25:02', '2020-10-28 18:25:02', 1);
COMMIT;

-- ----------------------------
-- Table structure for menu_system
-- ----------------------------
DROP TABLE IF EXISTS `menu_system`;
CREATE TABLE `menu_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `sort` tinyint(4) NOT NULL DEFAULT '0',
  `show` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1,2',
  `group` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menu_system
-- ----------------------------
BEGIN;
INSERT INTO `menu_system` VALUES (1, 'Category', 'icon-grid', 'category', 0, 0, '1,2', 'category', 1);
INSERT INTO `menu_system` VALUES (2, 'Create Category', 'icon-plus', 'category.create', 1, 1, '1,2', 'category', 1);
INSERT INTO `menu_system` VALUES (3, 'All Category', 'icon-list', 'category.index', 1, 2, '1,2', 'category', 1);
INSERT INTO `menu_system` VALUES (4, 'Article', 'icon-book-open', 'post', 0, 0, '1,2', 'post', 1);
INSERT INTO `menu_system` VALUES (5, 'Create Article', 'icon-plus', 'post.create', 4, 1, '1,2', 'post', 1);
INSERT INTO `menu_system` VALUES (6, 'All Posts', 'icon-list', 'post.index', 4, 2, '1,2', 'post', 1);
INSERT INTO `menu_system` VALUES (7, 'Page', 'icon-notebook', 'page', 0, 0, '1,2', 'page', 1);
INSERT INTO `menu_system` VALUES (8, 'Create Page', 'icon-plus', 'page.create', 7, 1, '1,2', 'page', 1);
INSERT INTO `menu_system` VALUES (9, 'All Pages', 'icon-list', 'page.index', 7, 2, '1,2', 'page', 1);
INSERT INTO `menu_system` VALUES (10, 'Users', 'icon-user', 'user', 0, 0, '1', 'user', 1);
INSERT INTO `menu_system` VALUES (11, 'Create User', 'icon-user-follow', 'user.create', 10, 1, '1', 'user', 1);
INSERT INTO `menu_system` VALUES (12, 'All User', 'icon-users', 'user.index', 10, 2, '1', 'user', 1);
INSERT INTO `menu_system` VALUES (13, 'Themes', 'icon-globe', 'setting', 0, 0, '1,2', 'setting', 1);
INSERT INTO `menu_system` VALUES (14, 'Menu', 'icon-diamond', 'setting.menu', 13, 1, '1,2', 'setting', 1);
INSERT INTO `menu_system` VALUES (15, 'Setting', 'icon-settings', 'setting.index', 13, 2, '1,2', 'setting', 1);
INSERT INTO `menu_system` VALUES (16, 'Partners', 'icon-grid', 'partner', 0, 3, '1,2', 'partner', 0);
INSERT INTO `menu_system` VALUES (17, 'Create Partner', 'icon-plus', 'partner.create', 16, 1, '1,2', 'partner', 1);
INSERT INTO `menu_system` VALUES (18, 'All Partners', 'icon-list', 'partner.index', 16, 2, '1,2', 'partner', 1);
INSERT INTO `menu_system` VALUES (19, 'Create Service', 'icon-plus', 'page.createService', 7, 0, '1,2', 'page', 1);
COMMIT;

-- ----------------------------
-- Table structure for meta_field
-- ----------------------------
DROP TABLE IF EXISTS `meta_field`;
CREATE TABLE `meta_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_value` text COLLATE utf8mb4_unicode_ci,
  `article_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `meta_field_article_id_foreign` (`article_id`) USING BTREE,
  CONSTRAINT `meta_field_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of meta_field
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2016_06_01_000001_create_oauth_auth_codes_table', 1);
INSERT INTO `migrations` VALUES (4, '2016_06_01_000002_create_oauth_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2016_06_01_000004_create_oauth_clients_table', 1);
INSERT INTO `migrations` VALUES (7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1);
INSERT INTO `migrations` VALUES (8, '2017_08_16_045421_create_menu_system_table', 1);
INSERT INTO `migrations` VALUES (9, '2017_09_10_220943_create_articles_table', 1);
INSERT INTO `migrations` VALUES (10, '2017_09_10_221006_create_category_table', 1);
INSERT INTO `migrations` VALUES (11, '2017_09_10_221017_create_article_category_table', 1);
INSERT INTO `migrations` VALUES (12, '2017_09_12_165520_create_tags_table', 1);
INSERT INTO `migrations` VALUES (13, '2017_09_12_165607_create_article_tag_table', 1);
INSERT INTO `migrations` VALUES (14, '2017_09_17_092158_create_meta_field_table', 1);
INSERT INTO `migrations` VALUES (15, '2017_09_17_233557_create_groups_table', 1);
INSERT INTO `migrations` VALUES (16, '2017_09_17_233651_create_article_group_table', 1);
INSERT INTO `migrations` VALUES (17, '2017_09_24_212525_create_menu_table', 1);
INSERT INTO `migrations` VALUES (18, '2017_09_24_214045_create_menu_group_table', 1);
INSERT INTO `migrations` VALUES (19, '2017_11_13_074422_create_options_table', 1);
INSERT INTO `migrations` VALUES (20, '2019_01_11_022612_create_advertising_table', 1);
INSERT INTO `migrations` VALUES (21, '2019_01_11_230439_add_type_to_advertising_table', 1);
INSERT INTO `migrations` VALUES (22, '2019_10_14_135715_create_partners_table', 2);
INSERT INTO `migrations` VALUES (23, '2020_05_11_164049_create_article_downloads_table', 3);
INSERT INTO `migrations` VALUES (24, '2020_08_03_170547_create_customers_table', 4);
COMMIT;

-- ----------------------------
-- Table structure for oauth_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `oauth_access_tokens_user_id_index` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of oauth_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth_auth_codes
-- ----------------------------
DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of oauth_auth_codes
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE `oauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `oauth_clients_user_id_index` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of oauth_clients
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth_personal_access_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of oauth_personal_access_clients
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for oauth_refresh_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of oauth_refresh_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for options
-- ----------------------------
DROP TABLE IF EXISTS `options`;
CREATE TABLE `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of options
-- ----------------------------
BEGIN;
INSERT INTO `options` VALUES (1, 'site_heading', 'Vệ sinh công nghiệp, chống thấm');
INSERT INTO `options` VALUES (2, 'main_menu_id', '1');
INSERT INTO `options` VALUES (3, 'meta_title', 'Vệ sinh công nghiệp, chống thấm');
INSERT INTO `options` VALUES (4, 'hotline', '0986.111.222');
INSERT INTO `options` VALUES (5, 'email', 'contact@ivesinh.vn');
INSERT INTO `options` VALUES (6, 'company_name', 'iCleanPro');
INSERT INTO `options` VALUES (7, 'company_description', 'Công ty iCleanPro là công ty chuyên về các mảng dịch vụ vệ sinh công nghiệp, chống thấm');
INSERT INTO `options` VALUES (8, 'main_office', '18 Xuân Thủy, Cầu giấy, Hà Nội');
INSERT INTO `options` VALUES (9, 'banner_title_1', 'Tư vấn quản lý và phát triển doanh nghiệp');
INSERT INTO `options` VALUES (10, 'banner_description_1', '15 năm kinh nghiệm');
INSERT INTO `options` VALUES (11, 'banner_title_2', 'Dịch vụ tài chính');
INSERT INTO `options` VALUES (12, 'banner_description_2', '1001 khách hàng');
INSERT INTO `options` VALUES (13, 'banner_title_3', 'Chuyên nghiệp');
INSERT INTO `options` VALUES (14, 'banner_description_3', 'Dễ dàng');
INSERT INTO `options` VALUES (15, 'banner_image_1', '/uploads/setting/2020/10/20201028184947-image-01.jpg');
INSERT INTO `options` VALUES (16, 'banner_image_2', '/uploads/setting/2020/10/20201028184947-image-02.jpg');
INSERT INTO `options` VALUES (17, 'banner_image_3', '/uploads/setting/2020/10/20201028184947-image-03.jpg');
INSERT INTO `options` VALUES (18, 'feature_ico_1', 'pencil');
INSERT INTO `options` VALUES (19, 'feature_title_1', 'Giải pháp tối ưu');
INSERT INTO `options` VALUES (20, 'feature_description_1', 'Quisque sagittis lacus eu lorem sodales, id vulputate velit adipiscing. Aenean adipiscing, sem sit amet mollis aliquet');
INSERT INTO `options` VALUES (21, 'feature_ico_2', 'rocket');
INSERT INTO `options` VALUES (22, 'feature_title_2', 'Tư vấn chuyên nghiệp');
INSERT INTO `options` VALUES (23, 'feature_description_2', 'Quisque sagittis lacus eu lorem sodales, id vulputate velit adipiscing. Aenean adipiscing, sem sit amet mollis aliquet');
INSERT INTO `options` VALUES (24, 'feature_ico_3', 'users');
INSERT INTO `options` VALUES (25, 'feature_title_3', 'Thấu hiểu khách hàng');
INSERT INTO `options` VALUES (26, 'feature_description_3', 'Quisque sagittis lacus eu lorem sodales, id vulputate velit adipiscing. Aenean adipiscing, sem sit amet mollis aliquet');
INSERT INTO `options` VALUES (27, 'feature_ico_4', 'money');
INSERT INTO `options` VALUES (28, 'feature_title_4', 'Chi phí hợp lý');
INSERT INTO `options` VALUES (29, 'feature_description_4', 'Quisque sagittis lacus eu lorem sodales, id vulputate velit adipiscing. Aenean adipiscing, sem sit amet mollis aliquet');
INSERT INTO `options` VALUES (30, 'special_ico_1', 'gfx-star-3');
INSERT INTO `options` VALUES (31, 'special_title_1', '10');
INSERT INTO `options` VALUES (32, 'special_description_1', 'Năm kinh nghiệm');
INSERT INTO `options` VALUES (33, 'special_ico_2', 'gfx-users-outline');
INSERT INTO `options` VALUES (34, 'special_title_2', '150');
INSERT INTO `options` VALUES (35, 'special_description_2', 'Khách hàng');
INSERT INTO `options` VALUES (36, 'special_ico_3', 'gfx-like');
INSERT INTO `options` VALUES (37, 'special_title_3', '1500');
INSERT INTO `options` VALUES (38, 'special_description_3', 'Đối tác tin cậy');
INSERT INTO `options` VALUES (39, 'special_ico_4', 'gfx-diamond-1');
INSERT INTO `options` VALUES (40, 'special_title_4', '10');
INSERT INTO `options` VALUES (41, 'special_description_4', 'Nhân lực tài năng');
INSERT INTO `options` VALUES (42, 'why_us_heading', 'Tại sao chọn chúng tôi?');
INSERT INTO `options` VALUES (43, 'why_us_title_1', 'Uy tín trách nhiệm');
INSERT INTO `options` VALUES (44, 'why_us_description_1', 'Số lượng học viên đông nhất (600 người) đã sang ​CHLB Đức học tập và làm việc tính từ năm 2012. Đối tác của 20 trường tại Đức và Châu Âu');
INSERT INTO `options` VALUES (45, 'why_us_title_2', 'Chất lượng hàng đầu');
INSERT INTO `options` VALUES (46, 'why_us_description_2', 'Chương trình đào tạo thiết kế phù hợp với nhiều đối tượng, do giáo viên người nước ngoài phối hợp với giáo viên trợ giảng người Việt giảng dạy');
INSERT INTO `options` VALUES (47, 'why_us_title_3', 'Tiềm năng');
INSERT INTO `options` VALUES (48, 'why_us_description_3', 'Đội ngũ Giáo viên giàu kinh nghiệm, tận tình. Học viên được đào tạo chương trình ngoại ngữ cơ bản tích hợp với chương trình đào tạo');
INSERT INTO `options` VALUES (49, 'why_us_image', '/uploads/setting/2020/10/20201021194333-image-01.jpg');
INSERT INTO `options` VALUES (50, 'services_heading', 'Dịch vụ của chúng tôi');
INSERT INTO `options` VALUES (51, 'services_description', 'Chúng tôi luôn mong muốn mang lại những giá trị tốt đẹp nhất, vinh quang nhất đến cho mỗi khách hàng.');
INSERT INTO `options` VALUES (52, 'services_title_1', 'Vệ sinh công nghiệp theo giờ');
INSERT INTO `options` VALUES (53, 'services_description_1', 'Dịch vụ vệ sinh theo giờ do công ty cung cấp là dịch vụ được nhiều khách hàng đánh giá cao về chất lượng cũng như giá thành dịch vụ.');
INSERT INTO `options` VALUES (54, 'services_title_2', 'Lau kính toà nhà');
INSERT INTO `options` VALUES (55, 'services_description_2', 'Công ty chúng tôi chuyên cung cấp dịch vụ lau kính các tòa nhà cao tầng tại hà nội cũng như các dịch vụ vệ sinh lau kính tóa nhà tại các tỉnh lân cận HN');
INSERT INTO `options` VALUES (56, 'services_title_3', 'Vệ sinh công nghiệp sau xây dựng');
INSERT INTO `options` VALUES (57, 'services_description_3', 'Công ty CÔNG TY BT CarePro nhận cung cấp dịch vụ tổng vệ sinh sau công trình xây dựng cho các tòa nhà/cao ốc văn phòng');
INSERT INTO `options` VALUES (58, 'services_title_4', 'Dịch vụ tổng vệ sinh nhà xưởng');
INSERT INTO `options` VALUES (59, 'services_title_5', 'Dịch vụ chống thấm');
INSERT INTO `options` VALUES (60, 'services_description_5', 'Dịch vụ chống thấm, sửa chửa những công trình bị thấm gây ra hỏng hóc');
INSERT INTO `options` VALUES (63, 'services_description_4', 'Vệ sinh tổng quát nhà xưởng mới xây dựng và nhà xưởng đã hoạt động lâu năm Khu vực ngoại cảnh');
INSERT INTO `options` VALUES (64, 'company_logo', '');
INSERT INTO `options` VALUES (66, 'sidebar_menu_id', '8');
INSERT INTO `options` VALUES (67, 'footer_text', '<p><strong>⛪&nbsp; VĂN PH&Ograve;NG TUYỂN SINH V&Agrave; Đ&Agrave;O TẠO</strong></p>\r\n\r\n<p>⛪&nbsp;&nbsp;<strong>Địa chỉ: </strong>Km14 Đường Ngọc Hồi - X&atilde; Ngọc Hồi - Huyện Thanh Tr&igrave; - TP. H&agrave; Nội. ( To&agrave; nh&agrave; Ho&agrave;ng Sơn, Đường CN 10, khu C&ocirc;ng nghiệp Ngọc Hồi )</p>\r\n\r\n<p>☎&nbsp;&nbsp;<strong>Điện thoại</strong>:&nbsp;0916545151 - 098881111</p>\r\n\r\n<p><strong>Website</strong>: https://ytonthattung.com</p>\r\n\r\n<p><strong>Email</strong>: ytonthattung@gmail.com</p>');
INSERT INTO `options` VALUES (68, 'why_us_title_4', 'Tiềm năng');
INSERT INTO `options` VALUES (69, 'why_us_description_4', 'Đội ngũ Giáo viên giàu kinh nghiệm, tận tình. Học viên được đào tạo chương trình ngoại ngữ cơ bản tích hợp với chương trình đào tạo');
INSERT INTO `options` VALUES (70, 'why_us_title_5', 'Tiềm năng');
INSERT INTO `options` VALUES (71, 'why_us_description_5', '12 phòng học với trang thiết bị rộng rãi, thoáng mát, cơ sở vật chất đầy đủ, tiện nghi sinh hoạt cho học viên. Có ký túc cho các bạn ở xa');
INSERT INTO `options` VALUES (72, 'why_us_icon_1', 'far fa-thumbs-up');
INSERT INTO `options` VALUES (73, 'why_us_icon_2', 'fas fa-graduation-cap');
INSERT INTO `options` VALUES (74, 'why_us_icon_3', 'fas fa-shopping-bag');
INSERT INTO `options` VALUES (75, 'why_us_icon_4', 'fas fa-users');
INSERT INTO `options` VALUES (76, 'why_us_content', '<p style=\"text-align:justify\"><strong>Y T&ocirc;n Thất T&ugrave;ng</strong>&nbsp;được th&agrave;nh lập từ năm 2008 l&agrave; đơn vị h&agrave;ng đầu đầu ti&ecirc;n đi ti&ecirc;n phong trong lĩnh vực đ&agrave;o tạo, li&ecirc;n kết đ&agrave;o tạo v&agrave; du học nghề tại CHLB Đức. Với mong muốn hỗ trợ thanh thiếu ni&ecirc;n Việt Nam định hướng tương lai, l&agrave;m chủ cuộc sống&nbsp;<strong>Y T&ocirc;n Thất T&ugrave;ng</strong>&nbsp;cung cấp một lộ tr&igrave;nh tư vấn v&agrave; đ&agrave;o tạo chuy&ecirc;n nghiệp đồng thời trang bị những kỹ năng sống cần thiết để học vi&ecirc;n v&agrave; người lao động tự tin sống l&agrave;m việc ở m&ocirc;i trường quốc tế h&oacute;a.</p>\r\n\r\n<p style=\"text-align:justify\">Trải qua gần 10 năm ph&aacute;t triển&nbsp;<strong>Y T&ocirc;n Thất T&ugrave;ng</strong>&nbsp;đ&atilde; v&agrave; đang trở th&agrave;nh địa chỉ tin cậy của học sinh v&agrave; c&aacute;c bậc phụ huynh trong lĩnh vực li&ecirc;n kết đ&agrave;o tạo tư vấn du học v&agrave; đ&agrave;o tạo ngoại ngữ cũng như đối t&aacute;c h&agrave;ng đầu của c&aacute;c trường d&agrave;o tạo nghề tại CHLB Đức n&oacute;i ri&ecirc;ng v&agrave; to&agrave;n ch&acirc;u &Acirc;u n&oacute;i chung.</p>');
INSERT INTO `options` VALUES (77, 'about_us_heading', 'Về chúng tôi');
INSERT INTO `options` VALUES (78, 'about_us_content', '<p style=\"text-align:justify\"><strong>Y T&ocirc;n Thất T&ugrave;ng</strong>&nbsp;được th&agrave;nh lập từ năm 2008 l&agrave; đơn vị h&agrave;ng đầu đầu ti&ecirc;n đi ti&ecirc;n phong trong lĩnh vực đ&agrave;o tạo, li&ecirc;n kết đ&agrave;o tạo v&agrave; du học nghề tại CHLB Đức. Với mong muốn hỗ trợ thanh thiếu ni&ecirc;n Việt Nam định hướng tương lai, l&agrave;m chủ cuộc sống&nbsp;<strong>Y T&ocirc;n Thất T&ugrave;ng</strong>&nbsp;cung cấp một lộ tr&igrave;nh tư vấn v&agrave; đ&agrave;o tạo chuy&ecirc;n nghiệp đồng thời trang bị những kỹ năng sống cần thiết để học vi&ecirc;n v&agrave; người lao động tự tin sống l&agrave;m việc ở m&ocirc;i trường quốc tế h&oacute;a.</p>\r\n\r\n<p style=\"text-align:justify\">Trải qua gần 10 năm ph&aacute;t triển&nbsp;<strong>Y T&ocirc;n Thất T&ugrave;ng</strong>&nbsp;đ&atilde; v&agrave; đang trở th&agrave;nh địa chỉ tin cậy của học sinh v&agrave; c&aacute;c bậc phụ huynh trong lĩnh vực li&ecirc;n kết đ&agrave;o tạo tư vấn du học v&agrave; đ&agrave;o tạo ngoại ngữ cũng như đối t&aacute;c h&agrave;ng đầu của c&aacute;c trường d&agrave;o tạo nghề tại CHLB Đức n&oacute;i ri&ecirc;ng v&agrave; to&agrave;n ch&acirc;u &Acirc;u n&oacute;i chung.</p>');
INSERT INTO `options` VALUES (79, 'about_us_image', '/uploads/setting/2020/06/20200626225521-unnamed.png');
INSERT INTO `options` VALUES (80, 'services_image_1', '/uploads/setting/2020/06/20200626230821-ts1.jpg');
INSERT INTO `options` VALUES (81, 'services_image_2', '/uploads/setting/2020/06/20200626230821-ts2.jpg');
INSERT INTO `options` VALUES (82, 'services_image_3', '/uploads/setting/2020/06/20200626230821-ts5.jpg');
INSERT INTO `options` VALUES (83, 'services_url_1', '/');
INSERT INTO `options` VALUES (84, 'services_url_2', '/');
INSERT INTO `options` VALUES (85, 'services_url_3', '/');
INSERT INTO `options` VALUES (86, 'courses_heading', 'KHOÁ HỌC VÀ TUYỂN SINH');
INSERT INTO `options` VALUES (87, 'courses_title_1', 'Các khoá học Trung cấp Y');
INSERT INTO `options` VALUES (88, 'courses_url_1', '/');
INSERT INTO `options` VALUES (89, 'courses_title_2', 'Các khoá học Trung cấp Dược');
INSERT INTO `options` VALUES (90, 'courses_url_2', '/');
INSERT INTO `options` VALUES (91, 'courses_title_3', 'Tuyển sinh');
INSERT INTO `options` VALUES (92, 'courses_url_3', '/');
INSERT INTO `options` VALUES (93, 'courses_image_1', '/uploads/setting/2020/06/20200626234846-hoc-tieng-duc.jpg');
INSERT INTO `options` VALUES (94, 'courses_image_2', '/uploads/setting/2020/06/20200626234846-lich-khai-giang.jpg');
INSERT INTO `options` VALUES (95, 'courses_image_3', '/uploads/setting/2020/06/20200626234846-whyus.jpg');
INSERT INTO `options` VALUES (96, 'courses_title_4', 'test');
INSERT INTO `options` VALUES (97, 'courses_url_4', '/');
INSERT INTO `options` VALUES (98, 'courses_image_4', '/uploads/setting/2020/08/20200824150521-p3.jpg');
INSERT INTO `options` VALUES (101, 'courses_image_5', '');
INSERT INTO `options` VALUES (102, 'courses_title_6', 'test 6');
INSERT INTO `options` VALUES (103, 'courses_url_6', '/');
INSERT INTO `options` VALUES (104, 'courses_image_6', '/uploads/setting/2020/08/20200824150559-p3.jpg');
INSERT INTO `options` VALUES (105, 'services_icon_1', 'features-time');
INSERT INTO `options` VALUES (106, 'services_icon_2', 'features-office-1');
INSERT INTO `options` VALUES (107, 'services_icon_3', 'features-construction');
INSERT INTO `options` VALUES (108, 'services_icon_4', 'features-paint');
INSERT INTO `options` VALUES (109, 'services_icon_5', 'features-water');
INSERT INTO `options` VALUES (110, 'about_us_description', 'Founded in 1995 Cleanmate quickly built a reputation as one of the leading providers of residential and commercial cleaning solutions. Our continuous pursuit for perfection has resulted in consistent growth each year. Our focus is to listen to our clients, understand their needs and provide the exceptional level of residential and commercial cleaning service.\r\n\r\nCông ty CÔNG TY BT CarePro nhận cung cấp dịch vụ tổng vệ sinh sau công trình xây dựng cho các tòa nhà/cao ốc văn phòng, Bệnh viện, Trường học, Trung tâm thương mại, nhà máy, xí nghiệp, phân xưởng sản xuất…');
INSERT INTO `options` VALUES (111, 'mission_heading', 'DO YOU LIKE WHAT YOU SEE?');
INSERT INTO `options` VALUES (112, 'mission_title', 'Sứ mệnh của chúng tôi');
INSERT INTO `options` VALUES (113, 'mission_description', 'Offer a different kind of services to families and professionals\r\nDeliver high quality and consistent services\r\nUse environmentall friendly cleaning products\r\nProvide stable jobs with resonable wages\r\nConcentrate our resources on maintaining standards\r\nMake you an extremely satisfied customer');
INSERT INTO `options` VALUES (114, 'mobile_menu_id', '9');
INSERT INTO `options` VALUES (115, 'banner_1_line_2', 'CHUYÊN NGHIỆP');
INSERT INTO `options` VALUES (116, 'banner_1_line_3', 'TẬN TÂM');
COMMIT;

-- ----------------------------
-- Table structure for partners
-- ----------------------------
DROP TABLE IF EXISTS `partners`;
CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of partners
-- ----------------------------
BEGIN;
INSERT INTO `partners` VALUES (4, '1', '/uploads/partner/2019/10/20191014150650-1.png', 1, '2019-10-14 15:06:20', '2019-10-14 15:06:50');
INSERT INTO `partners` VALUES (5, '2', '/uploads/partner/2019/10/20191014150703-2.png', 1, '2019-10-14 15:07:03', '2019-10-14 15:07:03');
INSERT INTO `partners` VALUES (6, '3', '/uploads/partner/2019/10/20191014150713-3.png', 1, '2019-10-14 15:07:13', '2019-10-14 15:07:13');
INSERT INTO `partners` VALUES (7, '4', '/uploads/partner/2019/10/20191014150724-4.png', 1, '2019-10-14 15:07:24', '2019-10-14 15:07:24');
INSERT INTO `partners` VALUES (8, '5', '/uploads/partner/2019/10/20191014150731-5.png', 1, '2019-10-14 15:07:31', '2019-10-14 15:07:31');
INSERT INTO `partners` VALUES (9, '6', '/uploads/partner/2019/10/20191014150740-6.png', 1, '2019-10-14 15:07:40', '2019-10-14 15:07:40');
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_username_index` (`username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `tags_slug_unique` (`slug`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tags
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '1.administrator 2.support',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'hung.nguyen', 'admin', '$2y$10$dIusAVYZf3kAnW1rna0CM.nJN4bwYAQWibs4/tfBN3WUWlNRAFzuW', 1, 'B36dE3vTiksknLio86OokKpyRf8dMfFRuOWuBJWY1ktuT3VokqVIkTiT983V', NULL, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
