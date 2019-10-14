/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50727
 Source Host           : localhost:3307
 Source Schema         : news

 Target Server Type    : MySQL
 Target Server Version : 50727
 File Encoding         : 65001

 Date: 14/10/2019 11:34:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for advertising
-- ----------------------------
DROP TABLE IF EXISTS `advertising`;
CREATE TABLE `advertising`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1.Script 2.Image',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for article_category
-- ----------------------------
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category`  (
  `article_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  INDEX `article_category_article_id_foreign`(`article_id`) USING BTREE,
  INDEX `article_category_category_id_foreign`(`category_id`) USING BTREE,
  CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `article_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for article_group
-- ----------------------------
DROP TABLE IF EXISTS `article_group`;
CREATE TABLE `article_group`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `article_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `article_group_article_id_foreign`(`article_id`) USING BTREE,
  INDEX `article_group_group_id_foreign`(`group_id`) USING BTREE,
  CONSTRAINT `article_group_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `article_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for article_tag
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `article_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `article_tag_article_id_foreign`(`article_id`) USING BTREE,
  INDEX `article_tag_tag_id_foreign`(`tag_id`) USING BTREE,
  CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `url_video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `user_id` int(10) UNSIGNED NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `articles_slug_unique`(`slug`) USING BTREE,
  INDEX `articles_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES (1, 'Chính sách', 'chinh-sach', NULL, NULL, NULL, '<p>Ch&iacute;nh s&aacute;ch</p>', 0, 1, NULL, NULL, NULL, 'page', '2019-10-14 04:30:18', '2019-10-14 04:30:18', 1);
INSERT INTO `articles` VALUES (2, 'Điều khoản', 'dieu-khoan', NULL, 'Điều khoản', NULL, '<p>Điều khoản</p>', 0, 1, NULL, NULL, NULL, 'page', '2019-10-14 04:30:49', '2019-10-14 04:30:49', 1);
INSERT INTO `articles` VALUES (3, 'Giá cả', 'gia-ca', NULL, 'Giá cả', NULL, '<p>Gi&aacute; cả</p>', 0, 1, NULL, NULL, NULL, 'page', '2019-10-14 04:31:10', '2019-10-14 04:31:10', 1);

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `icon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sort` tinyint(4) NOT NULL DEFAULT 0,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `category_slug_unique`(`slug`) USING BTREE,
  INDEX `category_parent_id_foreign`(`parent_id`) USING BTREE,
  CONSTRAINT `category_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'Thể thao', 'the-thao', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2019-10-14 03:59:18', '2019-10-14 03:59:18', 1);
INSERT INTO `category` VALUES (2, 'Xã hội', 'xa-hoi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2019-10-14 03:59:34', '2019-10-14 03:59:34', 1);
INSERT INTO `category` VALUES (3, 'Văn hóa', 'van-hoa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2019-10-14 03:59:42', '2019-10-14 03:59:42', 1);
INSERT INTO `category` VALUES (4, 'Thể thao trong nước', 'the-thao-trong-nuoc', 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2019-10-14 03:59:55', '2019-10-14 04:03:26', 1);
INSERT INTO `category` VALUES (5, 'Thể thao quốc tế', 'the-thao-quoc-te', 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'category', '2019-10-14 04:03:43', '2019-10-14 04:03:43', 1);

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES (1, 'Hot', NULL, NULL, 1);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `direct` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `route` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `menu_group_id` int(11) NOT NULL,
  `sort` tinyint(4) NOT NULL DEFAULT 0,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `menu_parent_id_foreign`(`parent_id`) USING BTREE,
  CONSTRAINT `menu_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 'Thể thao', 'the-thao', NULL, NULL, NULL, 1, 0, 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:14');
INSERT INTO `menu` VALUES (2, 'Thể thao trong nước', 'the-thao-trong-nuoc', 1, NULL, NULL, 1, 1, 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:17');
INSERT INTO `menu` VALUES (3, 'Thể thao quốc tế', 'the-thao-quoc-te', 1, NULL, NULL, 1, 2, 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:19');
INSERT INTO `menu` VALUES (4, 'Xã hội', 'xa-hoi', NULL, NULL, NULL, 1, 1, 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:19');
INSERT INTO `menu` VALUES (5, 'Văn hóa', 'van-hoa', NULL, NULL, NULL, 1, 2, 'category', '2019-10-14 04:04:14', '2019-10-14 04:04:19');
INSERT INTO `menu` VALUES (6, 'Giá cả', 'gia-ca', NULL, NULL, NULL, 2, 2, 'page', '2019-10-14 04:32:27', '2019-10-14 04:32:35');
INSERT INTO `menu` VALUES (7, 'Điều khoản', 'dieu-khoan', NULL, NULL, NULL, 2, 1, 'page', '2019-10-14 04:32:27', '2019-10-14 04:32:35');
INSERT INTO `menu` VALUES (8, 'Chính sách', 'chinh-sach', NULL, NULL, NULL, 2, 0, 'page', '2019-10-14 04:32:27', '2019-10-14 04:32:27');

-- ----------------------------
-- Table structure for menu_group
-- ----------------------------
DROP TABLE IF EXISTS `menu_group`;
CREATE TABLE `menu_group`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu_group
-- ----------------------------
INSERT INTO `menu_group` VALUES (1, 'Main menu', '2019-10-14 04:04:02', '2019-10-14 04:04:02', 1);
INSERT INTO `menu_group` VALUES (2, 'Footer Menu', '2019-10-14 04:32:16', '2019-10-14 04:32:16', 1);

-- ----------------------------
-- Table structure for menu_system
-- ----------------------------
DROP TABLE IF EXISTS `menu_system`;
CREATE TABLE `menu_system`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `sort` tinyint(4) NOT NULL DEFAULT 0,
  `show` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1,2',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu_system
-- ----------------------------
INSERT INTO `menu_system` VALUES (1, 'Category', 'icon-grid', 'category', 0, 0, '1,2', 1);
INSERT INTO `menu_system` VALUES (2, 'Create Category', 'icon-plus', 'category.create', 1, 1, '1,2', 1);
INSERT INTO `menu_system` VALUES (3, 'All Category', 'icon-list', 'category.index', 1, 2, '1,2', 1);
INSERT INTO `menu_system` VALUES (4, 'Article', 'icon-book-open', 'post', 0, 0, '1,2', 1);
INSERT INTO `menu_system` VALUES (5, 'Create Article', 'icon-plus', 'post.create', 4, 1, '1,2', 1);
INSERT INTO `menu_system` VALUES (6, 'All Posts', 'icon-list', 'post.index', 4, 2, '1,2', 1);
INSERT INTO `menu_system` VALUES (7, 'Page', 'icon-notebook', 'page', 0, 0, '1,2', 1);
INSERT INTO `menu_system` VALUES (8, 'Create Page', 'icon-plus', 'page.create', 7, 1, '1,2', 1);
INSERT INTO `menu_system` VALUES (9, 'All Pages', 'icon-list', 'page.index', 7, 2, '1,2', 1);
INSERT INTO `menu_system` VALUES (10, 'Users', 'icon-user', 'user', 0, 0, '1', 1);
INSERT INTO `menu_system` VALUES (11, 'Create User', 'icon-user-follow', 'user.create', 10, 1, '1', 1);
INSERT INTO `menu_system` VALUES (12, 'All User', 'icon-users', 'user.index', 10, 2, '1', 1);
INSERT INTO `menu_system` VALUES (13, 'Themes', 'icon-globe', 'setting', 0, 0, '1,2', 1);
INSERT INTO `menu_system` VALUES (14, 'Menu', 'icon-diamond', 'setting.menu', 13, 1, '1,2', 1);
INSERT INTO `menu_system` VALUES (15, 'Setting', 'icon-settings', 'setting.index', 13, 2, '1,2', 1);

-- ----------------------------
-- Table structure for meta_field
-- ----------------------------
DROP TABLE IF EXISTS `meta_field`;
CREATE TABLE `meta_field`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `key_value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `meta_field_article_id_foreign`(`article_id`) USING BTREE,
  CONSTRAINT `meta_field_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
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

-- ----------------------------
-- Table structure for oauth_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE `oauth_access_tokens`  (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `expires_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `oauth_access_tokens_user_id_index`(`user_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for oauth_auth_codes
-- ----------------------------
DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE `oauth_auth_codes`  (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for oauth_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE `oauth_clients`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `oauth_clients_user_id_index`(`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for oauth_personal_access_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE `oauth_personal_access_clients`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `oauth_personal_access_clients_client_id_index`(`client_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for oauth_refresh_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE `oauth_refresh_tokens`  (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `oauth_refresh_tokens_access_token_id_index`(`access_token_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for options
-- ----------------------------
DROP TABLE IF EXISTS `options`;
CREATE TABLE `options`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 66 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of options
-- ----------------------------
INSERT INTO `options` VALUES (1, 'site_heading', 'Tư vấn iso');
INSERT INTO `options` VALUES (2, 'main_menu_id', '1');
INSERT INTO `options` VALUES (3, 'meta_title', 'Tư vấn iso');
INSERT INTO `options` VALUES (4, 'hotline', '0986.111.222');
INSERT INTO `options` VALUES (5, 'email', 'hungnv234@gmail.com');
INSERT INTO `options` VALUES (6, 'company_name', 'Công ty tư vấn iso Hà Phương');
INSERT INTO `options` VALUES (7, 'company_description', 'Công ty tư vấn iso Hà Phương là công ty chuyên nghiệp');
INSERT INTO `options` VALUES (8, 'main_office', '18 Xuân Thủy, Cầu giấy, Hà Nội');
INSERT INTO `options` VALUES (9, 'banner_title_1', 'Tư vấn quản lý và phát triển doanh nghiệp');
INSERT INTO `options` VALUES (10, 'banner_description_1', '15 năm kinh nghiệm');
INSERT INTO `options` VALUES (11, 'banner_title_2', 'Dịch vụ tài chính');
INSERT INTO `options` VALUES (12, 'banner_description_2', '1001 khách hàng');
INSERT INTO `options` VALUES (13, 'banner_title_3', 'Chuyên nghiệp');
INSERT INTO `options` VALUES (14, 'banner_description_3', 'Dễ dàng');
INSERT INTO `options` VALUES (15, 'banner_image_1', '/uploads/setting/2019/10/20191014040849-3.jpg');
INSERT INTO `options` VALUES (16, 'banner_image_2', '/uploads/setting/2019/10/20191014040849-2.jpg');
INSERT INTO `options` VALUES (17, 'banner_image_3', '/uploads/setting/2019/10/20191014040849-4.jpg');
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
INSERT INTO `options` VALUES (42, 'why_us_heading', 'TẠI SAO CHỌN CHÚNG TÔI?');
INSERT INTO `options` VALUES (43, 'why_us_title_1', 'What we do?');
INSERT INTO `options` VALUES (44, 'why_us_description_1', 'Cras eu libero sapien. Nullam metus massa, gravida vitae tortor nec, semper pulvinar leo. In id purus velit. Integer vitae facilisis dui. Sed porttitor fringilla cursus.\r\n\r\nMauris sit amet interdum lacus. Suspendisse potenti. Donec nec augue dui. Proin ornare ligula neque, sit amet cursus felis mattis vitae.');
INSERT INTO `options` VALUES (45, 'why_us_title_2', 'Sứ mệnh');
INSERT INTO `options` VALUES (46, 'why_us_description_2', 'Cras eu libero sapien. Nullam metus massa, gravida vitae tortor nec, semper pulvinar leo. In id purus velit. Integer vitae facilisis dui. Sed porttitor fringilla cursus.\r\n\r\nMauris sit amet interdum lacus. Suspendisse potenti. Donec nec augue dui. Proin ornare ligula neque, sit amet cursus felis mattis vitae.');
INSERT INTO `options` VALUES (47, 'why_us_title_3', 'Tiềm năng');
INSERT INTO `options` VALUES (48, 'why_us_description_3', 'Cras eu libero sapien. Nullam metus massa, gravida vitae tortor nec, semper pulvinar leo. In id purus velit. Integer vitae facilisis dui. Sed porttitor fringilla cursus.\r\n\r\nMauris sit amet interdum lacus. Suspendisse potenti. Donec nec augue dui. Proin ornare ligula neque, sit amet cursus felis mattis vitae.');
INSERT INTO `options` VALUES (49, 'why_us_image', '/uploads/setting/2019/10/20191014042234-why-1.jpg');
INSERT INTO `options` VALUES (50, 'services_heading', 'DỊCH VỤ CỦA CHÚNG TÔI');
INSERT INTO `options` VALUES (51, 'services_description', 'Chúng tôi luôn mong muốn mang lại những giá trị tốt đẹp nhất, vinh quang nhất đến cho mỗi khách hàng.');
INSERT INTO `options` VALUES (52, 'services_title_1', 'TƯ VẤN TIÊU CHUẨN QUỐC TẾ');
INSERT INTO `options` VALUES (53, 'services_description_1', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.');
INSERT INTO `options` VALUES (54, 'services_title_2', 'TƯ VẤN QUẢN TRỊ DOANH NGHIỆP');
INSERT INTO `options` VALUES (55, 'services_description_2', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.');
INSERT INTO `options` VALUES (56, 'services_title_3', 'TƯ VẤN NÂNG CẤP HỆ THỐNG');
INSERT INTO `options` VALUES (57, 'services_description_3', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.');
INSERT INTO `options` VALUES (58, 'services_title_4', 'TƯ VẤN NĂNG SUẤT CHẤT LƯỢNG');
INSERT INTO `options` VALUES (59, 'services_title_5', 'TƯ VẤN QUẢN TRỊ DOANH NGHIỆP');
INSERT INTO `options` VALUES (60, 'services_description_5', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.');
INSERT INTO `options` VALUES (61, 'services_title_6', 'TƯ VẤN ISO 9001');
INSERT INTO `options` VALUES (62, 'services_description_6', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.');
INSERT INTO `options` VALUES (63, 'services_description_4', 'Maecenas et imperdiet enim, tincidunt ullamcorper nunc. Sed elit erat, sollicitudin sed euismod et, ultricies et nisl quis libero.');
INSERT INTO `options` VALUES (64, 'company_logo', '/uploads/setting/2019/10/20191014042900-logo.png');
INSERT INTO `options` VALUES (65, 'footer_menu_id', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_username_index`(`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tags_slug_unique`(`slug`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '1.administrator 2.support',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'hung.nguyen', 'admin', '$2y$10$dIusAVYZf3kAnW1rna0CM.nJN4bwYAQWibs4/tfBN3WUWlNRAFzuW', 1, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
