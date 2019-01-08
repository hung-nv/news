/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50723
Source Host           : localhost:3306
Source Database       : news

Target Server Type    : MYSQL
Target Server Version : 50723
File Encoding         : 65001

Date: 2019-01-04 07:20:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for advance_field
-- ----------------------------
DROP TABLE IF EXISTS `advance_field`;
CREATE TABLE `advance_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of advance_field
-- ----------------------------

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system_link_type_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `articles_slug_unique` (`slug`),
  KEY `articles_user_id_foreign` (`user_id`),
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------

-- ----------------------------
-- Table structure for article_category
-- ----------------------------
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category` (
  `article_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  KEY `article_category_article_id_foreign` (`article_id`),
  KEY `article_category_category_id_foreign` (`category_id`),
  CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of article_category
-- ----------------------------

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
  PRIMARY KEY (`id`),
  KEY `article_group_article_id_foreign` (`article_id`),
  KEY `article_group_group_id_foreign` (`group_id`),
  CONSTRAINT `article_group_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_group_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of article_group
-- ----------------------------

-- ----------------------------
-- Table structure for article_tag
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article_tag_article_id_foreign` (`article_id`),
  KEY `article_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of article_tag
-- ----------------------------

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
  `system_link_type_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_slug_unique` (`slug`),
  KEY `category_parent_id_foreign` (`parent_id`),
  CONSTRAINT `category_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('38', 'Tiktok Hot', 'tiktok-hot', null, null, null, null, null, null, null, '0', '1', '2019-01-03 20:34:48', '2019-01-03 20:34:48', '1');
INSERT INTO `category` VALUES ('39', 'Cảm hứng', 'cam-hung', null, null, null, null, null, null, null, '0', '1', '2019-01-03 20:35:02', '2019-01-03 20:35:02', '1');
INSERT INTO `category` VALUES ('40', 'Sáng tạo', 'sang-tao', null, null, null, null, null, null, null, '0', '1', '2019-01-03 20:35:13', '2019-01-03 20:35:13', '1');
INSERT INTO `category` VALUES ('41', 'Kỳ lạ', 'ky-la', null, null, null, null, null, null, null, '0', '1', '2019-01-03 20:35:23', '2019-01-03 20:35:23', '1');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('2', 'Hot', null, null, '1');

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
  `prefix` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system_link_type_id` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_parent_id_foreign` (`parent_id`),
  CONSTRAINT `menu_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menu_group
-- ----------------------------
INSERT INTO `menu_group` VALUES ('1', 'Top Menu', '2018-09-12 07:50:21', '2018-09-12 07:50:21', '1');

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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of menu_system
-- ----------------------------
INSERT INTO `menu_system` VALUES ('1', 'Category', 'icon-grid', 'category', '0', '0', '1,2', '1');
INSERT INTO `menu_system` VALUES ('2', 'Create Category', 'icon-plus', 'category.create', '1', '1', '1,2', '1');
INSERT INTO `menu_system` VALUES ('3', 'All Category', 'icon-list', 'category.index', '1', '2', '1,2', '1');
INSERT INTO `menu_system` VALUES ('4', 'Article', 'icon-book-open', 'post', '0', '0', '1,2', '1');
INSERT INTO `menu_system` VALUES ('5', 'Create Article', 'icon-plus', 'post.create', '4', '1', '1,2', '1');
INSERT INTO `menu_system` VALUES ('6', 'All Posts', 'icon-list', 'post.index', '4', '2', '1,2', '1');
INSERT INTO `menu_system` VALUES ('7', 'Page', 'icon-notebook', 'page', '0', '0', '1,2', '0');
INSERT INTO `menu_system` VALUES ('8', 'Create Page', 'icon-plus', 'page.create', '7', '1', '1,2', '1');
INSERT INTO `menu_system` VALUES ('9', 'Create Landing Page', 'icon-note', 'page.landing', '7', '1', '1,2', '1');
INSERT INTO `menu_system` VALUES ('10', 'All Pages', 'icon-list', 'page.index', '7', '2', '1,2', '1');
INSERT INTO `menu_system` VALUES ('11', 'Custom field', 'icon-puzzle', 'advanceField', '0', '0', '1', '0');
INSERT INTO `menu_system` VALUES ('12', 'Create Field', 'icon-plus', 'advanceField.create', '11', '1', '1', '1');
INSERT INTO `menu_system` VALUES ('13', 'All Custom Field', 'icon-list', 'advanceField.index', '11', '2', '1', '1');
INSERT INTO `menu_system` VALUES ('14', 'Products', 'icon-handbag', 'product', '0', '0', '1,2', '0');
INSERT INTO `menu_system` VALUES ('15', 'Create Product', 'icon-plus', 'product.create', '14', '0', '1,2', '1');
INSERT INTO `menu_system` VALUES ('16', 'All Products', 'icon-list', 'product.index', '14', '0', '1,2', '1');
INSERT INTO `menu_system` VALUES ('17', 'Attributes', 'icon-tag', 'attributeValue.index', '14', '0', '1,2', '1');
INSERT INTO `menu_system` VALUES ('18', 'Users', 'icon-user', 'user', '0', '0', '1', '1');
INSERT INTO `menu_system` VALUES ('19', 'Create User', 'icon-user-follow', 'user.create', '18', '1', '1', '1');
INSERT INTO `menu_system` VALUES ('20', 'All User', 'icon-users', 'user.index', '18', '2', '1', '1');
INSERT INTO `menu_system` VALUES ('21', 'Themes', 'icon-globe', 'setting', '0', '0', '1,2', '1');
INSERT INTO `menu_system` VALUES ('22', 'Menu', 'icon-diamond', 'setting.menu', '21', '1', '1,2', '1');
INSERT INTO `menu_system` VALUES ('23', 'Setting', 'icon-settings', 'setting.index', '21', '2', '1,2', '1');

-- ----------------------------
-- Table structure for meta_field
-- ----------------------------
DROP TABLE IF EXISTS `meta_field`;
CREATE TABLE `meta_field` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_value` text COLLATE utf8mb4_unicode_ci,
  `article_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `meta_field_article_id_foreign` (`article_id`),
  CONSTRAINT `meta_field_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of meta_field
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=324 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('281', '2017_10_12_225924_create_branch_table', '1');
INSERT INTO `migrations` VALUES ('286', '2014_10_12_000000_create_users_table', '2');
INSERT INTO `migrations` VALUES ('287', '2014_10_12_100000_create_password_resets_table', '2');
INSERT INTO `migrations` VALUES ('288', '2016_06_01_000001_create_oauth_auth_codes_table', '2');
INSERT INTO `migrations` VALUES ('289', '2016_06_01_000002_create_oauth_access_tokens_table', '2');
INSERT INTO `migrations` VALUES ('290', '2016_06_01_000003_create_oauth_refresh_tokens_table', '2');
INSERT INTO `migrations` VALUES ('291', '2016_06_01_000004_create_oauth_clients_table', '2');
INSERT INTO `migrations` VALUES ('292', '2016_06_01_000005_create_oauth_personal_access_clients_table', '2');
INSERT INTO `migrations` VALUES ('293', '2017_08_16_045421_create_menu_system_table', '2');
INSERT INTO `migrations` VALUES ('294', '2017_09_10_220943_create_articles_table', '2');
INSERT INTO `migrations` VALUES ('295', '2017_09_10_221006_create_category_table', '2');
INSERT INTO `migrations` VALUES ('296', '2017_09_10_221017_create_article_category_table', '2');
INSERT INTO `migrations` VALUES ('297', '2017_09_12_165520_create_tags_table', '2');
INSERT INTO `migrations` VALUES ('298', '2017_09_12_165607_create_article_tag_table', '2');
INSERT INTO `migrations` VALUES ('299', '2017_09_17_092109_create_advance_field_table', '2');
INSERT INTO `migrations` VALUES ('300', '2017_09_17_092158_create_meta_field_table', '2');
INSERT INTO `migrations` VALUES ('301', '2017_09_17_233557_create_groups_table', '2');
INSERT INTO `migrations` VALUES ('302', '2017_09_17_233651_create_article_group_table', '2');
INSERT INTO `migrations` VALUES ('303', '2017_09_24_212525_create_menu_table', '2');
INSERT INTO `migrations` VALUES ('304', '2017_09_24_214045_create_menu_group_table', '2');
INSERT INTO `migrations` VALUES ('305', '2017_10_11_103824_create_attributes_table', '2');
INSERT INTO `migrations` VALUES ('306', '2017_10_11_103856_create_attribute_values_table', '2');
INSERT INTO `migrations` VALUES ('307', '2017_10_11_110111_create_members_table', '2');
INSERT INTO `migrations` VALUES ('308', '2017_10_11_110126_create_member_information_table', '2');
INSERT INTO `migrations` VALUES ('309', '2017_10_11_110139_create_products_table', '2');
INSERT INTO `migrations` VALUES ('310', '2017_10_11_110152_create_product_catagory_table', '2');
INSERT INTO `migrations` VALUES ('311', '2017_10_11_110226_create_product_tag_table', '2');
INSERT INTO `migrations` VALUES ('312', '2017_10_11_110244_create_product_images_table', '2');
INSERT INTO `migrations` VALUES ('313', '2017_10_11_110304_create_product_attribute_value_table', '2');
INSERT INTO `migrations` VALUES ('314', '2017_10_11_151416_create_orders_table', '2');
INSERT INTO `migrations` VALUES ('315', '2017_10_11_151425_create_order_products_table', '2');
INSERT INTO `migrations` VALUES ('316', '2017_10_11_155311_create_order_product_details_table', '2');
INSERT INTO `migrations` VALUES ('317', '2017_10_11_172231_create_order_product_attributes_table', '2');
INSERT INTO `migrations` VALUES ('318', '2017_10_11_172249_create_order_product_attribute_groups_table', '2');
INSERT INTO `migrations` VALUES ('319', '2017_10_11_172337_create_order_attribute_images_table', '2');
INSERT INTO `migrations` VALUES ('320', '2017_11_09_172417_create_events_table', '2');
INSERT INTO `migrations` VALUES ('321', '2017_11_09_172432_create_product_event_table', '2');
INSERT INTO `migrations` VALUES ('322', '2017_11_13_074422_create_options_table', '2');
INSERT INTO `migrations` VALUES ('323', '2018_08_09_042738_create_system_link_type_table', '2');

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
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_access_tokens
-- ----------------------------

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_auth_codes
-- ----------------------------

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
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_clients
-- ----------------------------
INSERT INTO `oauth_clients` VALUES ('1', null, 'Laravel Personal Access Client', 'SxECDg2IYYHzQh0GGvHOCRNU2gI9Qr4l62XB66Zq', 'http://localhost', '1', '0', '0', '2019-01-03 22:09:56', '2019-01-03 22:09:56');
INSERT INTO `oauth_clients` VALUES ('2', null, 'Laravel Password Grant Client', 'QB4A8tynI9w16dHvwJkBzE3FmvKewd8PjyX8XpCj', 'http://localhost', '0', '1', '0', '2019-01-03 22:09:56', '2019-01-03 22:09:56');

-- ----------------------------
-- Table structure for oauth_personal_access_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_personal_access_clients
-- ----------------------------
INSERT INTO `oauth_personal_access_clients` VALUES ('1', '1', '2019-01-03 22:09:56', '2019-01-03 22:09:56');

-- ----------------------------
-- Table structure for oauth_refresh_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_refresh_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for options
-- ----------------------------
DROP TABLE IF EXISTS `options`;
CREATE TABLE `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of options
-- ----------------------------
INSERT INTO `options` VALUES ('1', 'site_heading', 'Shop chuyên quần áo nam nữ');
INSERT INTO `options` VALUES ('2', 'parent', '5,7,8,9,10,13');
INSERT INTO `options` VALUES ('3', 'meta_title', 'Meta Title');
INSERT INTO `options` VALUES ('4', 'meta_description', 'Description');
INSERT INTO `options` VALUES ('5', 'meta_keywords', 'Keywords');
INSERT INTO `options` VALUES ('6', 'main_menu_id', '1');
INSERT INTO `options` VALUES ('11', 'banner_image_1', '');
INSERT INTO `options` VALUES ('12', 'banner_image_2', '');
INSERT INTO `options` VALUES ('13', 'banner_image_3', '');
INSERT INTO `options` VALUES ('14', 'banner_image_4', '');
INSERT INTO `options` VALUES ('15', 'selectedCatalog', '15,16,17,18,22');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_username_index` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for system_link_type
-- ----------------------------
DROP TABLE IF EXISTS `system_link_type`;
CREATE TABLE `system_link_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `system_link_type_prefix_unique` (`prefix`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of system_link_type
-- ----------------------------
INSERT INTO `system_link_type` VALUES ('1', 'Category Details', 'category', null, null);
INSERT INTO `system_link_type` VALUES ('2', 'Article Details', 'post', null, null);
INSERT INTO `system_link_type` VALUES ('3', 'Page Details', 'page', null, null);
INSERT INTO `system_link_type` VALUES ('4', 'Catalog Details', '', null, null);
INSERT INTO `system_link_type` VALUES ('5', 'Product Details', 'product', null, null);

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'hung.nguyen', 'admin', '$2y$10$9VzkzDI750HZfhqtvE7Sx.BVXH9SS5IbBGH21UB3D3/DMfeXHK0ZK', '1', null, null, null);
