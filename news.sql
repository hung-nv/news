/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50727
 Source Host           : localhost
 Source Database       : news

 Target Server Type    : MySQL
 Target Server Version : 50727
 File Encoding         : utf-8

 Date: 10/15/2019 08:25:08 AM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `advertising`
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
--  Table structure for `article_category`
-- ----------------------------
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category` (
  `article_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  KEY `article_category_article_id_foreign` (`article_id`) USING BTREE,
  KEY `article_category_category_id_foreign` (`category_id`) USING BTREE,
  CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `article_category`
-- ----------------------------
BEGIN;
INSERT INTO `article_category` VALUES ('5', '4'), ('6', '4'), ('7', '4');
COMMIT;

-- ----------------------------
--  Table structure for `article_group`
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
  CONSTRAINT `article_group_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `article_tag`
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `article_tag_article_id_foreign` (`article_id`) USING BTREE,
  KEY `article_tag_tag_id_foreign` (`tag_id`) USING BTREE,
  CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `articles`
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
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `articles`
-- ----------------------------
BEGIN;
INSERT INTO `articles` VALUES ('1', 'Chính sách', 'chinh-sach', null, null, null, '<p>Ch&iacute;nh s&aacute;ch</p>', '0', '1', null, null, null, 'page', '2019-10-14 04:30:18', '2019-10-14 04:30:18', '1'), ('2', 'Điều khoản', 'dieu-khoan', null, 'Điều khoản', null, '<p>Điều khoản</p>', '0', '1', null, null, null, 'page', '2019-10-14 04:30:49', '2019-10-14 04:30:49', '1'), ('3', 'Giá cả', 'gia-ca', null, 'Giá cả', null, '<p>Gi&aacute; cả</p>', '0', '1', null, null, null, 'page', '2019-10-14 04:31:10', '2019-10-14 04:31:10', '1'), ('4', 'Về chúng tôi', 've-chung-toi', null, 'Về chúng tôi', null, '<p>Về ch&uacute;ng t&ocirc;i</p>', '0', '1', null, null, null, 'page', '2019-10-14 13:19:23', '2019-10-14 13:19:23', '1'), ('5', 'Lãi suất tiền gửi 8- 9%/năm có dễ nhận?', 'lai-suat-tien-gui-8-9nam-co-de-nhan', '/uploads/posts/2019/10/20191014161224-giaodich-3.jpg', 'Trong khi lãi suất trên liên ngân hàng giảm liên tục thì lãi suất trên thị trường 1 vẫn tiếp tục neo cao...', null, '<p>Theo b&aacute;o c&aacute;o thị trường tiền tệ mới c&ocirc;ng bố của Bộ phận ph&acirc;n t&iacute;ch v&agrave; tư vấn kh&aacute;ch h&agrave;ng c&aacute; nh&acirc;n (SSI Research), ng&agrave;y 9/10/2019, NHNN tiếp tục giảm l&atilde;i suất t&iacute;n phiếu th&ecirc;m 25 điểm cơ bản (bps) xuống 2,25%/năm, đ&acirc;y l&agrave; lần giảm thứ 3 trong năm 2019 với mức giảm tổng cộng 75bps.&nbsp;</p>\r\n\r\n<p>L&atilde;i suất t&iacute;n phiếu vốn được coi l&agrave; mức chặn dưới đối với l&atilde;i suất tr&ecirc;n li&ecirc;n ng&acirc;n h&agrave;ng nhưng kể từ sau đợt giảm l&atilde;i suất t&iacute;n phiếu về 2,5%/năm v&agrave;o ng&agrave;y 16/9/2019, l&atilde;i suất tr&ecirc;n li&ecirc;n ng&acirc;n h&agrave;ng vẫn li&ecirc;n tục ở dưới ngưỡng n&agrave;y. V&igrave; thế, việc NHNN giảm tiếp một nấc nữa cũng ph&ugrave; hợp với diễn biến thị trường v&agrave; định hướng giảm l&atilde;i suất của cơ quan n&agrave;y.</p>\r\n\r\n<p>Trong tuần, NHNN ph&aacute;t h&agrave;nh 90.000 tỷ đồng t&iacute;n phiếu trong khi lượng t&iacute;n phiếu đến hạn l&agrave; 87 ngh&igrave;n tỷ đồng, h&uacute;t r&ograve;ng qua k&ecirc;nh n&agrave;y 3.000 tỷ đồng. NHNN cũng mua kỳ hạn 7 ng&agrave;y 495 tỷ đồng tr&ecirc;n OMO với l&atilde;i suất 4.5%/năm. T&iacute;nh chung lại, NHNN đ&atilde; h&uacute;t r&ograve;ng 2.504 tỷ đồng tr&ecirc;n thị trường mở. Thanh khoản VND đang dồi d&agrave;o, nguồn cung VND từ c&aacute;c giao dịch b&aacute;n ngoại tệ v&agrave; t&acirc;m l&yacute; t&iacute;ch cực từ l&atilde;i suất t&iacute;n phiếu giảm khiến cho l&atilde;i suất tr&ecirc;n li&ecirc;n ng&acirc;n h&agrave;ng giảm kh&aacute; mạnh sau 1 tuần chững lại trước đ&oacute;. L&atilde;i suất qua đ&ecirc;m VND tr&ecirc;n li&ecirc;n ng&acirc;n h&agrave;ng vafo cuối tuần ở mức 2%/năm &ndash; giảm 30bps so với cuối tuần trước, ch&ecirc;nh lệch l&atilde;i suất VND-USD thu hẹp về s&aacute;t 0.</p>\r\n\r\n<p>Tr&ecirc;n thị trường 1, một số ng&acirc;n h&agrave;ng th&ocirc;ng b&aacute;o biểu l&atilde;i suất huy động tăng cao, c&oacute; thể l&ecirc;n đến 9% nhưng thường k&egrave;m theo c&aacute;c điều kiện như số tiền gửi lớn, kỳ hạn d&agrave;i (24-36 th&aacute;ng), chỉ &aacute;p dụng với kh&aacute;ch h&agrave;ng c&aacute; nh&acirc;n&hellip;n&ecirc;n đối tượng kh&aacute;ch h&agrave;ng được hưởng mức l&atilde;i suất cao kh&ocirc;ng nhiều, thị phần huy động của c&aacute;c NHTM n&agrave;y cũng kh&aacute; nhỏ n&ecirc;n diễn biến n&agrave;y kh&ocirc;ng mang t&iacute;nh đại diện. L&atilde;i suất huy động tr&ecirc;n thị trường 1 &aacute;p dụng với kh&aacute;ch h&agrave;ng tổ chức vẫn duy tr&igrave; ở mức 4,3-5,5%/năm với kỳ hạn dưới 6 th&aacute;ng, 5,5-7,5%/năm với kỳ hạn 6 đến dưới 12 th&aacute;ng v&agrave; 6,4-8,1%/năm với kỳ hạn 12-13 th&aacute;ng.</p>\r\n\r\n<p>Thực tế khảo s&aacute;t của ch&uacute;ng t&ocirc;i cho thấy, nhiều ng&acirc;n h&agrave;ng đẩy l&atilde;i suất kỳ hạn d&agrave;i l&ecirc;n tr&ecirc;n 8,5%/năm, thậm ch&iacute; l&agrave; 9%/năm nhưng k&egrave;m theo y&ecirc;u cầu về số tiền gửi. Chẳng hạn với mức l&atilde;i 9%/năm ở SHB y&ecirc;u cầu kh&aacute;ch h&agrave;ng phải gửi tr&ecirc;n 1 năm v&agrave; số tiền tối thiểu l&agrave; 500 tỷ đồng. Ở một số ng&acirc;n h&agrave;ng như Eximbank, TPBank... để hưởng l&atilde;i cao kh&aacute;ch h&agrave;ng cũng phải c&oacute; v&agrave;i chục tỷ trở l&ecirc;n mang đến gửi. Thế nhưng một số ng&acirc;n h&agrave;ng cũng chẳng y&ecirc;u cầu về số tiền gửi m&agrave; chỉ cần kỳ hạn d&agrave;i 12 th&aacute;ng trở l&ecirc;n l&agrave; c&oacute; l&atilde;i hơn 8%/năm, chẳng hạn Nam &Aacute;, NCB, ABBank, SCB, Vietcapital Bank...</p>\r\n\r\n<p>Tuy nhi&ecirc;n, như nhận x&eacute;t của SSI Research, nh&oacute;m c&aacute;c ng&acirc;n h&agrave;ng &aacute;p l&atilde;i cao lại chiếm thị phần nhỏ n&ecirc;n kh&ocirc;ng mang t&iacute;nh đại diện. Hiện 4 ng&acirc;n h&agrave;ng lớn nhất hệ thống l&agrave; Agribank, BIDV, VietinBank v&agrave; Vietcombank - chiếm hơn nửa tổng thị phần tiền gửi - lại huy động vốn với l&atilde;i suất thấp, với mức cao nhất chỉ quanh 7%/năm. Như vậy so với c&aacute;c ng&acirc;n h&agrave;ng nhỏ, ch&ecirc;nh lệch l&atilde;i suất l&ecirc;n đến 2 điểm phần trăm.</p>', '0', '1', null, null, null, 'article', '2019-10-14 16:12:24', '2019-10-14 16:12:24', '1'), ('6', 'Bloomberg: Bamboo kỳ vọng niêm yết đầu năm 2020, vốn hóa lên đến 1 tỷ USD', 'bloomberg-bamboo-ky-vong-niem-yet-dau-nam-2020-von-hoa-len-den-1-ty-usd', '/uploads/posts/2019/10/20191014161413-anh-6.png', 'Bamboo Airways cũng kỳ vọng giá IPO khoảng 50-60.000 đồng/cổ phiếu tương ứng khoảng 2,59USD/cổ phiếu.', null, '<p>Theo tin từ Bloomberg, H&atilde;ng h&agrave;ng kh&ocirc;ng Tre Việt (Bamboo Airways) dự kiến sẽ ni&ecirc;m yết ngay trong qu&yacute; đầu ti&ecirc;n của năm tới. Vốn h&oacute;a kỳ vọng l&ecirc;n đến 1 tỷ USD khi l&ecirc;n s&agrave;n.</p>\r\n\r\n<p>Cũng theo Bloomberg, h&atilde;ng h&agrave;ng kh&ocirc;ng non trẻ n&agrave;y sẽ ni&ecirc;m yết tổng cộng khoảng 400 triệu cổ phiếu tr&ecirc;n s&agrave;n HoSE hoặc s&agrave;n H&agrave; Nội. Th&ocirc;ng tin n&agrave;y cũng đ&atilde; được &ocirc;ng Nguyễn Khắc Hải x&aacute;c nhận với Bloomberg qua phỏng vấn điện thoại.</p>\r\n\r\n<p>Bamboo Airways cũng kỳ vọng gi&aacute; IPO khoảng 50-60.000 đồng/cổ phiếu tương ứng khoảng 2,59USD/cổ phiếu.</p>\r\n\r\n<p>Ngay khi Bloomberg đưa tin s&aacute;ng nay, cổ phiếu FLC của Tập đo&agrave;n FLC-đơn vị sở hữu 100% vốn của h&atilde;ng h&agrave;ng kh&ocirc;ng&nbsp;Bamboo Airways đ&atilde; tăng trần sau chuỗi ng&agrave;y giảm s&acirc;u. T&iacute;nh đến 9h50&#39;, cổ phiếu FLC đạt dư mua trần hơn 2 triệu đơn vị.</p>\r\n\r\n<p>Trước đ&oacute;, cũng theo Bloomberg, h&atilde;ng h&agrave;ng kh&ocirc;ng Bamboo Airways kỳ vọng sẽ huy động được khoảng 100 triệu USD từ vụ IPO dự kiến sẽ diễn ra v&agrave;o năm tới để phục vụ cho tham vọng mở rộng mạnh mẽ ở Việt Nam, một trong những thị trường h&agrave;ng kh&ocirc;ng tăng trưởng nhanh nhất thế giới.</p>\r\n\r\n<p>&quot;Số vốn thu được sẽ gi&uacute;p ch&uacute;ng t&ocirc;i mở rộng đội bay với mong muốn chiếm lĩnh 30% thị phần nội địa v&agrave;o năm 2020&quot;, &ocirc;ng Trịnh Văn Quyết, Chủ tịch của Bamboo Airways từng trao đổi với ph&oacute;ng vi&ecirc;n Bloomberg qua điện thoại. &Ocirc;ng cũng cho biết hiện h&atilde;ng đang nắm khoảng hơn 10% thị phần.</p>\r\n\r\n<p>Tầng lớp trung lưu ng&agrave;y c&agrave;ng lớn mạnh trong bối cảnh nền kinh tế đạt tốc độ tăng trưởng khoảng 7% đang gi&uacute;p tăng thu nhập của người ti&ecirc;u d&ugrave;ng Việt Nam c&oacute; th&ecirc;m thu nhập để c&oacute; thể di chuyển bằng m&aacute;y bay nhiều hơn. Theo Cục H&agrave;ng kh&ocirc;ng Việt Nam, năm 2018 c&aacute;c s&acirc;n bay trong nước đ&oacute;n tiếp 106 triệu h&agrave;nh kh&aacute;ch, tăng 13% so với năm trước.</p>\r\n\r\n<p>Bamboo Airways hiện vận h&agrave;nh 10 t&agrave;u bay tr&ecirc;n 25 đường bay cả nội địa v&agrave; quốc tế. Th&aacute;ng 8 vừa qua, Ph&oacute; Thủ tướng Trịnh Đ&igrave;nh Dũng đ&atilde; k&yacute; v&agrave;o quyết định cho ph&eacute;p Bamboo đến năm 2023 c&oacute; thể tăng đội bay l&ecirc;n 30 m&aacute;y bay. Đội bay gồm cả m&aacute;y bay th&acirc;n rộng v&agrave; th&acirc;n hẹp.</p>', '0', '1', null, null, null, 'article', '2019-10-14 16:14:13', '2019-10-14 16:14:13', '1'), ('7', 'Bạn đang ở mức độ nào của bệnh trầm cảm: Cùng làm bài test của bác sĩ Mỹ để phát hiện bệnh sớm nhất', 'ban-dang-o-muc-do-nao-cua-benh-tram-cam-cung-lam-bai-test-cua-bac-si-my-de-phat-hien-benh-som-nhat', '/uploads/posts/2019/10/20191014161556-giaodich-3.jpg', 'Trầm cảm là một căn bệnh rất phổ biến. Theo thống kê, đến 80% dân số sẽ bị trầm cảm vào một lúc nào đó trong cuộc sống của mình. Bệnh có thể xảy ra ở bất kỳ độ tuổi nào và thường phổ biến ở nữ giới hơn nam giới.', null, '<p>Chứng trầm cảm sẽ ảnh hưởng đến c&aacute;ch bạn cảm nhận, suy nghĩ, h&agrave;nh xử v&agrave; c&oacute; thể dẫn đến những vấn đề đa dạng về tinh thần v&agrave; thể chất. Nguy hiểm hơn, n&oacute; c&ograve;n dẫn bạn đến với &yacute; nghĩ v&agrave; h&agrave;nh vi tự s&aacute;t.</p>\r\n\r\n<p>Liệu bạn c&oacute; đang bị trầm cảm kh&ocirc;ng, v&agrave; đang ở mức độ n&agrave;o? 18 c&acirc;u hỏi của Nh&agrave; t&acirc;m thần học<strong>&nbsp;Ivan K. Goldberg&nbsp;</strong>dưới đ&acirc;y sẽ gi&uacute;p bạn tự kiểm tra v&agrave; ph&aacute;t hiện liệu m&igrave;nh hay những người th&acirc;n c&oacute; mắc phải trầm cảm hay kh&ocirc;ng. Vậy n&ecirc;n h&atilde;y cố gắng trả lời trung thực nhất!</p>\r\n\r\n<p><em><strong>T</strong></em><strong><em>rong mỗi c&acirc;u hỏi sẽ c&oacute; 6 mức điểm (0, 1, 2, 3, 4, 5 điểm) tương ứng với c&aacute;c mức độ từ thấp đến cao. Sau khi chọn xong đ&aacute;p &aacute;n của mỗi c&acirc;u hỏi, h&atilde;y cộng lại tất cả điểm v&agrave; xem m&igrave;nh đang ở đ&acirc;u tr&ecirc;n mức thang trầm cảm, v&agrave; nhớ chỉ được chọn 1 đ&aacute;p &aacute;n th&ocirc;i nh&eacute;:</em></strong></p>\r\n\r\n<p><strong>C&acirc;u 1: T&ocirc;i l&agrave;m bất kỳ chuyện g&igrave; cũng chậm r&atilde;i v&agrave; lề mề&nbsp;</strong>(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 2: T&ocirc;i thấy tương lai của m&igrave;nh thật sự m&ugrave; mịt&nbsp;</strong>(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 3: T&ocirc;i cảm thấy rất kh&oacute; tập trung trong việc đọc s&aacute;ch b&aacute;o</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 4: T&ocirc;i kh&ocirc;ng thể cảm nhận được những niềm vui v&agrave; hạnh ph&uacute;c xung quanh bản th&acirc;n</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 5: T&ocirc;i kh&ocirc;ng thể tự đưa ra quyết định cho bất cứ việc g&igrave;</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 6: T&ocirc;i kh&ocirc;ng c&ograve;n hứng th&uacute; với những việc đ&atilde; từng mang lại niềm vui v&agrave; hạnh ph&uacute;c cho bản th&acirc;n</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 7: T&ocirc;i lu&ocirc;n lu&ocirc;n thấy t&acirc;m trạng m&igrave;nh buồn phiền, ch&aacute;n nản v&agrave; mệt mỏi</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 8: T&ocirc;i thường xuy&ecirc;n c&oacute; cảm gi&aacute;c bồn chồn, căng thẳng v&agrave; bứt rứt</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 9: T&ocirc;i thấy cơ thể m&igrave;nh lu&ocirc;n uể oải lẫn mệt nho&agrave;i mỗi ng&agrave;y</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>\r\n\r\n<p><strong>C&acirc;u 10: T&ocirc;i lu&ocirc;n thấy rất kh&oacute; khăn khi l&agrave;m bất kể việc g&igrave;, kể cả những thứ b&igrave;nh thường v&agrave; nhỏ nhặt nhất</strong>&nbsp;(<em>Điểm đạt: ......)</em></p>\r\n\r\n<p>0. Kh&ocirc;ng bao giờ</p>\r\n\r\n<p>1. Hơi &iacute;t</p>\r\n\r\n<p>2. Thỉnh thoảng</p>\r\n\r\n<p>3. Vừa phải</p>\r\n\r\n<p>4. Kh&aacute; nhiều</p>\r\n\r\n<p>5. Cực kỳ thường xuy&ecirc;n</p>', '0', '1', null, null, null, 'article', '2019-10-14 16:15:56', '2019-10-14 16:15:56', '1');
COMMIT;

-- ----------------------------
--  Table structure for `category`
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
  CONSTRAINT `category_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `category`
-- ----------------------------
BEGIN;
INSERT INTO `category` VALUES ('1', 'Thể thao', 'the-thao', null, null, null, null, null, null, null, '0', 'category', '2019-10-14 03:59:18', '2019-10-14 03:59:18', '1'), ('2', 'Xã hội', 'xa-hoi', null, null, null, null, null, null, null, '0', 'category', '2019-10-14 03:59:34', '2019-10-14 03:59:34', '1'), ('3', 'Văn hóa', 'van-hoa', null, null, null, null, null, null, null, '0', 'category', '2019-10-14 03:59:42', '2019-10-14 03:59:42', '1'), ('4', 'Thể thao trong nước', 'the-thao-trong-nuoc', '1', null, null, null, null, null, null, '0', 'category', '2019-10-14 03:59:55', '2019-10-14 04:03:26', '1'), ('5', 'Thể thao quốc tế', 'the-thao-quoc-te', '1', null, null, null, null, null, null, '0', 'category', '2019-10-14 04:03:43', '2019-10-14 04:03:43', '1');
COMMIT;

-- ----------------------------
--  Table structure for `groups`
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
--  Records of `groups`
-- ----------------------------
BEGIN;
INSERT INTO `groups` VALUES ('1', 'Hot', null, null, '1');
COMMIT;

-- ----------------------------
--  Table structure for `menu`
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
  CONSTRAINT `menu_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `menu`
-- ----------------------------
BEGIN;
INSERT INTO `menu` VALUES ('1', 'Thể thao', 'the-thao', null, null, null, '1', '0', 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:14'), ('2', 'Thể thao trong nước', 'the-thao-trong-nuoc', '1', null, null, '1', '1', 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:17'), ('3', 'Thể thao quốc tế', 'the-thao-quoc-te', '1', null, null, '1', '2', 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:19'), ('4', 'Xã hội', 'xa-hoi', null, null, null, '1', '1', 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:19'), ('5', 'Văn hóa', 'van-hoa', null, null, null, '1', '2', 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:19'), ('6', 'Giá cả', 'gia-ca', null, null, null, '2', '3', 'page', '2019-10-14 04:32:27', '2019-10-14 13:19:39'), ('7', 'Điều khoản', 'dieu-khoan', null, null, null, '2', '2', 'page', '2019-10-14 04:32:27', '2019-10-14 13:19:39'), ('8', 'Chính sách', 'chinh-sach', null, null, null, '2', '1', 'page', '2019-10-14 04:32:27', '2019-10-14 13:19:39'), ('9', 'Liên hệ', 'contact', null, '/contact', null, '1', '3', null, '2019-10-14 12:57:52', '2019-10-14 12:57:58'), ('10', 'Về chúng tôi', 've-chung-toi', null, null, null, '2', '0', 'page', '2019-10-14 13:19:36', '2019-10-14 13:19:36'), ('11', 'Tư vấn iso 9001', 'tu-van-iso-9001', null, '/', null, '3', '0', null, '2019-10-14 16:46:30', '2019-10-14 16:46:30'), ('12', 'Tư vấn iso 9002', 'tu-van-iso-9002', null, '/', null, '3', '0', null, '2019-10-14 16:46:36', '2019-10-14 16:46:36'), ('13', 'Tư vấn iso 9003', 'tu-van-iso-9003', null, '/', null, '3', '0', null, '2019-10-14 16:46:40', '2019-10-14 16:46:40'), ('14', 'Tư vấn iso 9004', 'tu-van-iso-9004', null, '/', null, '3', '0', null, '2019-10-14 16:46:44', '2019-10-14 16:46:44'), ('15', 'Tư vấn iso 9005', 'tu-van-iso-9005', null, '/', null, '3', '0', null, '2019-10-14 16:46:47', '2019-10-14 16:46:47'), ('16', 'Tư vấn iso 9006', 'tu-van-iso-9006', null, '/', null, '3', '0', null, '2019-10-14 16:46:51', '2019-10-14 16:46:51'), ('17', 'Tư vấn iso 9007', 'tu-van-iso-9007', null, '/', null, '3', '0', null, '2019-10-14 16:46:54', '2019-10-14 16:46:54'), ('18', 'Tư vấn iso 9008', 'tu-van-iso-9008', null, '/', null, '3', '0', null, '2019-10-14 16:46:59', '2019-10-14 16:46:59');
COMMIT;

-- ----------------------------
--  Table structure for `menu_group`
-- ----------------------------
DROP TABLE IF EXISTS `menu_group`;
CREATE TABLE `menu_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `menu_group`
-- ----------------------------
BEGIN;
INSERT INTO `menu_group` VALUES ('1', 'Main menu', '2019-10-14 04:04:02', '2019-10-14 04:04:02', '1'), ('2', 'Footer Menu', '2019-10-14 04:32:16', '2019-10-14 04:32:16', '1'), ('3', 'Sidebar Menu', '2019-10-14 16:46:04', '2019-10-14 16:46:04', '1');
COMMIT;

-- ----------------------------
--  Table structure for `menu_system`
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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `menu_system`
-- ----------------------------
BEGIN;
INSERT INTO `menu_system` VALUES ('1', 'Category', 'icon-grid', 'category', '0', '0', '1,2', '1'), ('2', 'Create Category', 'icon-plus', 'category.create', '1', '1', '1,2', '1'), ('3', 'All Category', 'icon-list', 'category.index', '1', '2', '1,2', '1'), ('4', 'Article', 'icon-book-open', 'post', '0', '0', '1,2', '1'), ('5', 'Create Article', 'icon-plus', 'post.create', '4', '1', '1,2', '1'), ('6', 'All Posts', 'icon-list', 'post.index', '4', '2', '1,2', '1'), ('7', 'Page', 'icon-notebook', 'page', '0', '0', '1,2', '1'), ('8', 'Create Page', 'icon-plus', 'page.create', '7', '1', '1,2', '1'), ('9', 'All Pages', 'icon-list', 'page.index', '7', '2', '1,2', '1'), ('10', 'Users', 'icon-user', 'user', '0', '0', '1', '1'), ('11', 'Create User', 'icon-user-follow', 'user.create', '10', '1', '1', '1'), ('12', 'All User', 'icon-users', 'user.index', '10', '2', '1', '1'), ('13', 'Themes', 'icon-globe', 'setting', '0', '0', '1,2', '1'), ('14', 'Menu', 'icon-diamond', 'setting.menu', '13', '1', '1,2', '1'), ('15', 'Setting', 'icon-settings', 'setting.index', '13', '2', '1,2', '1'), ('16', 'Partners', 'icon-grid', 'partner', '0', '3', '1,2', '1'), ('17', 'Create Partner', 'icon-plus', 'partner.create', '16', '1', '1,2', '1'), ('18', 'All Partners', 'icon-list', 'partner.index', '16', '2', '1,2', '1');
COMMIT;

-- ----------------------------
--  Table structure for `meta_field`
-- ----------------------------
DROP TABLE IF EXISTS `meta_field`;
CREATE TABLE `meta_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_value` text COLLATE utf8mb4_unicode_ci,
  `article_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `meta_field_article_id_foreign` (`article_id`) USING BTREE,
  CONSTRAINT `meta_field_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `migrations`
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1'), ('2', '2014_10_12_100000_create_password_resets_table', '1'), ('3', '2016_06_01_000001_create_oauth_auth_codes_table', '1'), ('4', '2016_06_01_000002_create_oauth_access_tokens_table', '1'), ('5', '2016_06_01_000003_create_oauth_refresh_tokens_table', '1'), ('6', '2016_06_01_000004_create_oauth_clients_table', '1'), ('7', '2016_06_01_000005_create_oauth_personal_access_clients_table', '1'), ('8', '2017_08_16_045421_create_menu_system_table', '1'), ('9', '2017_09_10_220943_create_articles_table', '1'), ('10', '2017_09_10_221006_create_category_table', '1'), ('11', '2017_09_10_221017_create_article_category_table', '1'), ('12', '2017_09_12_165520_create_tags_table', '1'), ('13', '2017_09_12_165607_create_article_tag_table', '1'), ('14', '2017_09_17_092158_create_meta_field_table', '1'), ('15', '2017_09_17_233557_create_groups_table', '1'), ('16', '2017_09_17_233651_create_article_group_table', '1'), ('17', '2017_09_24_212525_create_menu_table', '1'), ('18', '2017_09_24_214045_create_menu_group_table', '1'), ('19', '2017_11_13_074422_create_options_table', '1'), ('20', '2019_01_11_022612_create_advertising_table', '1'), ('21', '2019_01_11_230439_add_type_to_advertising_table', '1'), ('22', '2019_10_14_135715_create_partners_table', '2');
COMMIT;

-- ----------------------------
--  Table structure for `oauth_access_tokens`
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
--  Table structure for `oauth_auth_codes`
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
--  Table structure for `oauth_clients`
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
--  Table structure for `oauth_personal_access_clients`
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
--  Table structure for `oauth_refresh_tokens`
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
--  Table structure for `options`
-- ----------------------------
DROP TABLE IF EXISTS `options`;
CREATE TABLE `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Records of `options`
-- ----------------------------
BEGIN;
INSERT INTO `options` VALUES ('1', 'site_heading', 'Tư vấn iso'), ('2', 'main_menu_id', '1'), ('3', 'meta_title', 'Tư vấn iso'), ('4', 'hotline', '0986.111.222'), ('5', 'email', 'hungnv234@gmail.com'), ('6', 'company_name', 'Công ty tư vấn iso Hà Phương'), ('7', 'company_description', 'Công ty tư vấn iso Hà Phương là công ty chuyên nghiệp'), ('8', 'main_office', '18 Xuân Thủy, Cầu giấy, Hà Nội'), ('9', 'banner_title_1', 'Tư vấn quản lý và phát triển doanh nghiệp'), ('10', 'banner_description_1', '15 năm kinh nghiệm'), ('11', 'banner_title_2', 'Dịch vụ tài chính'), ('12', 'banner_description_2', '1001 khách hàng'), ('13', 'banner_title_3', 'Chuyên nghiệp'), ('14', 'banner_description_3', 'Dễ dàng'), ('15', 'banner_image_1', '/uploads/setting/2019/10/20191014040849-3.jpg'), ('16', 'banner_image_2', '/uploads/setting/2019/10/20191014040849-2.jpg'), ('17', 'banner_image_3', '/uploads/setting/2019/10/20191014040849-4.jpg'), ('18', 'feature_ico_1', 'pencil'), ('19', 'feature_title_1', 'Giải pháp tối ưu'), ('20', 'feature_description_1', 'Quisque sagittis lacus eu lorem sodales, id vulputate velit adipiscing. Aenean adipiscing, sem sit amet mollis aliquet'), ('21', 'feature_ico_2', 'rocket'), ('22', 'feature_title_2', 'Tư vấn chuyên nghiệp'), ('23', 'feature_description_2', 'Quisque sagittis lacus eu lorem sodales, id vulputate velit adipiscing. Aenean adipiscing, sem sit amet mollis aliquet'), ('24', 'feature_ico_3', 'users'), ('25', 'feature_title_3', 'Thấu hiểu khách hàng'), ('26', 'feature_description_3', 'Quisque sagittis lacus eu lorem sodales, id vulputate velit adipiscing. Aenean adipiscing, sem sit amet mollis aliquet'), ('27', 'feature_ico_4', 'money'), ('28', 'feature_title_4', 'Chi phí hợp lý'), ('29', 'feature_description_4', 'Quisque sagittis lacus eu lorem sodales, id vulputate velit adipiscing. Aenean adipiscing, sem sit amet mollis aliquet'), ('30', 'special_ico_1', 'gfx-star-3'), ('31', 'special_title_1', '10'), ('32', 'special_description_1', 'Năm kinh nghiệm'), ('33', 'special_ico_2', 'gfx-users-outline'), ('34', 'special_title_2', '150'), ('35', 'special_description_2', 'Khách hàng'), ('36', 'special_ico_3', 'gfx-like'), ('37', 'special_title_3', '1500'), ('38', 'special_description_3', 'Đối tác tin cậy'), ('39', 'special_ico_4', 'gfx-diamond-1'), ('40', 'special_title_4', '10'), ('41', 'special_description_4', 'Nhân lực tài năng'), ('42', 'why_us_heading', 'TẠI SAO CHỌN CHÚNG TÔI?'), ('43', 'why_us_title_1', 'What we do?'), ('44', 'why_us_description_1', 'Cras eu libero sapien. Nullam metus massa, gravida vitae tortor nec, semper pulvinar leo. In id purus velit. Integer vitae facilisis dui. Sed porttitor fringilla cursus.\r\n\r\nMauris sit amet interdum lacus. Suspendisse potenti. Donec nec augue dui. Proin ornare ligula neque, sit amet cursus felis mattis vitae.'), ('45', 'why_us_title_2', 'Sứ mệnh'), ('46', 'why_us_description_2', 'Cras eu libero sapien. Nullam metus massa, gravida vitae tortor nec, semper pulvinar leo. In id purus velit. Integer vitae facilisis dui. Sed porttitor fringilla cursus.\r\n\r\nMauris sit amet interdum lacus. Suspendisse potenti. Donec nec augue dui. Proin ornare ligula neque, sit amet cursus felis mattis vitae.'), ('47', 'why_us_title_3', 'Tiềm năng'), ('48', 'why_us_description_3', 'Cras eu libero sapien. Nullam metus massa, gravida vitae tortor nec, semper pulvinar leo. In id purus velit. Integer vitae facilisis dui. Sed porttitor fringilla cursus.\r\n\r\nMauris sit amet interdum lacus. Suspendisse potenti. Donec nec augue dui. Proin ornare ligula neque, sit amet cursus felis mattis vitae.'), ('49', 'why_us_image', '/uploads/setting/2019/10/20191014042234-why-1.jpg'), ('50', 'services_heading', 'DỊCH VỤ CỦA CHÚNG TÔI'), ('51', 'services_description', 'Chúng tôi luôn mong muốn mang lại những giá trị tốt đẹp nhất, vinh quang nhất đến cho mỗi khách hàng.'), ('52', 'services_title_1', 'TƯ VẤN TIÊU CHUẨN QUỐC TẾ'), ('53', 'services_description_1', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.'), ('54', 'services_title_2', 'TƯ VẤN QUẢN TRỊ DOANH NGHIỆP'), ('55', 'services_description_2', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.'), ('56', 'services_title_3', 'TƯ VẤN NÂNG CẤP HỆ THỐNG'), ('57', 'services_description_3', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.'), ('58', 'services_title_4', 'TƯ VẤN NĂNG SUẤT CHẤT LƯỢNG'), ('59', 'services_title_5', 'TƯ VẤN QUẢN TRỊ DOANH NGHIỆP'), ('60', 'services_description_5', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.'), ('61', 'services_title_6', 'TƯ VẤN ISO 9001'), ('62', 'services_description_6', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.'), ('63', 'services_description_4', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.'), ('64', 'company_logo', '/uploads/setting/2019/10/20191014042900-logo.png'), ('65', 'footer_menu_id', '2'), ('66', 'sidebar_menu_id', '3');
COMMIT;

-- ----------------------------
--  Table structure for `partners`
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
--  Records of `partners`
-- ----------------------------
BEGIN;
INSERT INTO `partners` VALUES ('4', '1', '/uploads/partner/2019/10/20191014150650-1.png', '1', '2019-10-14 15:06:20', '2019-10-14 15:06:50'), ('5', '2', '/uploads/partner/2019/10/20191014150703-2.png', '1', '2019-10-14 15:07:03', '2019-10-14 15:07:03'), ('6', '3', '/uploads/partner/2019/10/20191014150713-3.png', '1', '2019-10-14 15:07:13', '2019-10-14 15:07:13'), ('7', '4', '/uploads/partner/2019/10/20191014150724-4.png', '1', '2019-10-14 15:07:24', '2019-10-14 15:07:24'), ('8', '5', '/uploads/partner/2019/10/20191014150731-5.png', '1', '2019-10-14 15:07:31', '2019-10-14 15:07:31'), ('9', '6', '/uploads/partner/2019/10/20191014150740-6.png', '1', '2019-10-14 15:07:40', '2019-10-14 15:07:40');
COMMIT;

-- ----------------------------
--  Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_username_index` (`username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
--  Table structure for `tags`
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
--  Table structure for `users`
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
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'hung.nguyen', 'admin', '$2y$10$dIusAVYZf3kAnW1rna0CM.nJN4bwYAQWibs4/tfBN3WUWlNRAFzuW', '1', null, null, null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
