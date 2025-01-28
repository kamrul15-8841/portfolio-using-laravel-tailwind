/*
Navicat MySQL Data Transfer

Source Server         : php74
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : portfolio_front_tailwind

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2025-01-28 14:53:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `abouts`
-- ----------------------------
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `abouts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of abouts
-- ----------------------------
INSERT INTO `abouts` VALUES ('1', 'Md. Kamrul Hasan', 'I am a dynamic and skilled Software Developer with over 3 years of experience in full-stack web development,\r\ncurrently serving as a Application Developer (Ful Stack Web Developer) at Noman Group.', 'With expertise in\r\nPHP, Laravel, JavaScript, MySQL, and a growing proficiency in React.js and React Native, I specialize in\r\ndesigning and implementing scalable, user-focused applications that drive business growth and operational\r\nefficiency.\r\nThroughout my career, I have developed custom solutions such as production tracking systems, inventory\r\nmanagement platforms, and POS systems. My deep understanding of Object-Oriented Programming (OOP)\r\nand the software development lifecycle allows me to create efficient and maintainable code that enhances user\r\nexperience. Passionate about leveraging technology to solve real-world problems, I aim to continue growing in\r\nthe software industry in Bangladesh, contributing innovative solutions while mentoring and empowering others\r\nthrough technology.', 'abouts/jhqLAw3sypD1EDWqgiIqygzOv9VDHdX9JN4OrMcr.jpg', 'active', 'f-asd', '2025-01-25 10:17:37', '2025-01-25 11:47:39');

-- ----------------------------
-- Table structure for `contacts`
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_email_unique` (`email`),
  UNIQUE KEY `contacts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES ('1', 'Kamrul', 'user@gmail.com', '01771883916', 'a sdf asdf', null, 'active', 'kamrul', '2025-01-27 04:03:54', '2025-01-27 04:03:54');
INSERT INTO `contacts` VALUES ('4', 'fa sdf', 'user1@gmail.com', '01771883916', 'a sdf asdf', null, 'active', 'fa-sdf', '2025-01-27 04:05:36', '2025-01-27 04:05:36');
INSERT INTO `contacts` VALUES ('7', 'Kamrul fasdfa', 'admin@test.com', '01723828163', 'a fsdfa', null, 'active', 'kamrul-fasdfa', '2025-01-27 04:08:35', '2025-01-27 04:08:35');
INSERT INTO `contacts` VALUES ('9', 'a sdfs fasdf', 'useafsdfr@gmail.com', '01723828163', 'af sdfasdf', null, 'active', 'a-sdfs-fasdf', '2025-01-27 04:09:14', '2025-01-27 04:09:14');
INSERT INTO `contacts` VALUES ('10', 'fdsasd f', 'userafasd@gmail.com', '01723828163', 'f asdf', null, 'active', 'fdsasd-f', '2025-01-27 04:30:25', '2025-01-27 04:30:25');
INSERT INTO `contacts` VALUES ('11', 'f asdf asdf', 'adminasdfasd@test.com', '01733730039', 'fasdfasdf', null, 'active', 'f-asdf-asdf', '2025-01-27 04:31:37', '2025-01-27 04:31:37');
INSERT INTO `contacts` VALUES ('14', 'fas dfasdf', 'usefasdfr@gmail.com', '01723828163', 'fa sdfasdf', null, 'active', 'fas-dfasdf', '2025-01-27 05:02:24', '2025-01-27 05:02:24');
INSERT INTO `contacts` VALUES ('16', 'fasdfasdf', 'usefasdfasr@gmail.com', '01733730039', 'f asdfasdf', null, 'active', 'fasdfasdf', '2025-01-27 05:03:28', '2025-01-27 05:03:28');
INSERT INTO `contacts` VALUES ('17', 'sdfasdf', 'useasdfasdfr@gmail.com', '01733730039', 'as dfas', null, 'active', 'sdfasdf', '2025-01-27 05:04:03', '2025-01-27 05:04:03');
INSERT INTO `contacts` VALUES ('19', 'fasdfasdfasdf', 'admfasdfasin@test.com', '01733730039', 'f asdfas', null, 'active', 'fasdfasdfasdf', '2025-01-27 05:07:54', '2025-01-27 05:07:54');
INSERT INTO `contacts` VALUES ('20', 'f asdfasdfas df', 'useasdfasdfar@gmail.com', '01757040512', 'f asdfasd', null, 'active', 'f-asdfasdfas-df', '2025-01-27 05:08:09', '2025-01-27 05:08:09');

-- ----------------------------
-- Table structure for `courses`
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `courses_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of courses
-- ----------------------------
INSERT INTO `courses` VALUES ('1', 'PHP With Laravel Dvelopment', 'Course with BITM BASIS Seip Project.', 'BITM', 'Three Month', 'HTML, CSS, Bootstrap, PHP, JavaScript, Laravel', 'courses/E7MeDFKJFIsrO7bVy6WZrjil5VOmVUsB9wWKKk6g.jpg', 'active', 'php-with-laravel-dvelopment', '2025-01-27 09:42:43', '2025-01-27 09:45:36');
INSERT INTO `courses` VALUES ('3', 'sa fasdf asdf', 'a sdf asdfas', 'f asdf asdf', 'a sdfasdf', 'fasdfasdf', 'courses/mMChNWC9R23pDqLX7zaSmwqmgDO2G5ZfO9pGsGaz.jpg', 'active', 'sa-fasdf-asdf', '2025-01-27 09:46:05', '2025-01-27 09:46:05');

-- ----------------------------
-- Table structure for `experiences`
-- ----------------------------
DROP TABLE IF EXISTS `experiences`;
CREATE TABLE `experiences` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date NOT NULL,
  `left_date` date DEFAULT NULL,
  `expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `experiences_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of experiences
-- ----------------------------
INSERT INTO `experiences` VALUES ('1', 'Application Developer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Noman Group', 'Gulshan', '2023-02-01', '2025-01-09', 'PHP, JavaScript, Laravel', 'experiences/J8AervTpiSm0IHXkKvf20LDGb3PYZJDImY54mzE1.jpg', 'active', 'aplication-developer', '2025-01-26 04:12:33', '2025-01-26 11:25:45');
INSERT INTO `experiences` VALUES ('2', 'QA Engineer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'InsideMaps', 'Baridhara DOHS', '2021-09-09', '2022-05-05', 'QA Engineer', 'experiences/2MQNXkyl0uyDWYITlCo5DRYbZpWMVJgVYMTtcmdv.jpg', 'active', 'qa-engineer', '2025-01-26 04:36:58', '2025-01-26 11:26:54');

-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_reset_tokens_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('5', '2025_01_25_033302_create_sliders_table', '1');
INSERT INTO `migrations` VALUES ('6', '2025_01_25_033318_create_abouts_table', '1');
INSERT INTO `migrations` VALUES ('7', '2025_01_25_033450_create_experiences_table', '1');
INSERT INTO `migrations` VALUES ('8', '2025_01_25_033517_create_projects_table', '1');
INSERT INTO `migrations` VALUES ('9', '2025_01_25_033531_create_skills_table', '1');
INSERT INTO `migrations` VALUES ('10', '2025_01_25_033548_create_services_table', '1');
INSERT INTO `migrations` VALUES ('11', '2025_01_25_033600_create_courses_table', '1');
INSERT INTO `migrations` VALUES ('12', '2025_01_25_033614_create_contacts_table', '1');

-- ----------------------------
-- Table structure for `password_reset_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `projects`
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projects_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES ('1', 'Portfolio', 'web-design', 'Full Stack', 'Portfolio using Laravel Tainwind', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply du of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'http://127.0.0.1:8000/', 'http://127.0.0.1:8000/', 'projects/Z9Ol25GE6JMWPkDQo3cwNcFnF73jhN3LFk9ko9Wh.jpg', 'active', 'portfolio', '2025-01-26 10:10:37', '2025-01-26 11:08:20');
INSERT INTO `projects` VALUES ('2', 'Shomriddhi', 'web-development', 'Full Stack', 'Laravel JavaScript Yajra', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown ageMaker including versions of Lorem Ipsum.', 'http://127.0.0.1:8000/projects/', 'http://127.0.0.1:8000/projects/', 'projects/II99I3nrS8Zwecdq4x29yRNnbPtaif5QyqpT17E4.jpg', 'active', 'shomriddhi', '2025-01-26 10:13:58', '2025-01-26 11:08:40');
INSERT INTO `projects` VALUES ('3', 'Fabric Tracker', 'web-development', 'Full Stack', 'PHP JavaScript Ajax', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dumms Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has b', 'http://127.0.0.1:8000/projects/', 'http://127.0.0.1:8000/projects/', 'projects/la3cfOLzbY3HBj0DoH4kgutDgbwZ6NA4Eo0Uff0B.jpg', 'active', 'fabric-tracker', '2025-01-26 10:41:57', '2025-01-26 11:09:32');
INSERT INTO `projects` VALUES ('4', 'Health Profile Manager', 'mobile', 'Mobile Application', 'Java XML Android Studion SQLite', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, w like Aldus PageMaker including versions of Lorem Ipsum.', 'http://127.0.0.1:8000/', 'http://127.0.0.1:8000/', 'projects/99EbUReMVqd8Igk6kkNDzb1QWKq0y9LeHdaAxVVC.jpg', 'active', 'health-profile-manager', '2025-01-26 11:07:11', '2025-01-26 11:09:40');

-- ----------------------------
-- Table structure for `services`
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES ('1', 'web-design', 'Web Design', 'http://127.0.0.1:8000/', 'http://127.0.0.1:8000/services/1/edit', 'I have experience of Web Design with React Js and Vue Js compatible with Bootstrap and Taiwind CSS.', 'services/P4HfqevMwove1yyVNb4Z71peKnZWerLc6E8nlKN4.jpg', 'active', 'web-design', '2025-01-27 06:34:44', '2025-01-27 09:57:04');
INSERT INTO `services` VALUES ('2', 'web-development', 'Web Development', 'http://127.0.0.1:8000/', 'https://sites.google.com/view/kamrul-hasan', 'I have experience of Web Development with PHP and Laravel and also with Node JS and Expres JS with MySQL and MongoDB.', 'services/HqSu91VVJsC5PJyQgDntMQGRQH91fqaB7lIVlXFF.jpg', 'active', 'web-development', '2025-01-27 06:38:22', '2025-01-27 09:57:26');
INSERT INTO `services` VALUES ('3', 'mobile', 'Mobile Application', 'http://127.0.0.1:8000/', 'https://sites.google.com/view/kamrul-hasan', 'I have experience of Mobile App Development with React Native', 'services/7WzIS3YHGBcuMgpxOTPuDoEO5nz2y9z2r63Greqm.jpg', 'active', 'mobile', '2025-01-27 06:44:13', '2025-01-27 09:56:07');

-- ----------------------------
-- Table structure for `skills`
-- ----------------------------
DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `skills_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of skills
-- ----------------------------
INSERT INTO `skills` VALUES ('1', 'PHP', 'PHP', 'PHP', '90', 'skill/2KNCe5GEcILMR34GKnzRTFtsrIxWRp1no6xHuzXu.jpg', 'active', 'php', '2025-01-27 12:10:02', '2025-01-27 12:13:04');
INSERT INTO `skills` VALUES ('2', 'Laravel', 'Laravel', 'Laravel', '80', 'skill/SgkJPmagVFl2koLbITaebDodGiG7TKUwT2sIlvU7.jpg', 'active', 'laravel', '2025-01-27 12:11:04', '2025-01-27 12:14:48');

-- ----------------------------
-- Table structure for `sliders`
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sliders_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES ('9', 'Web Development', 'PHP With Laravel Framework', 'sliders/0J2IJtae97d4lkEiDTQsmnQPRtfWTD8y5suDOYoT.jpg', 'active', 'web-development', '2025-01-25 06:11:42', '2025-01-28 08:45:04');
INSERT INTO `sliders` VALUES ('12', 'Web Design', 'HTML CSS Bootstrap Tailwind CSS JavsScript', 'sliders/DfdzkHmNDzQZhsP164gTuAcsOz4uRDXvForD8VMx.jpg', 'active', 'web-design', '2025-01-25 06:57:52', '2025-01-28 08:49:39');
INSERT INTO `sliders` VALUES ('13', 'Mobile Application', 'React Native', 'sliders/W40CKk7FXXDux6HG1Qb5f9hNQoxeGRdAqr97yNLB.jpg', 'active', 'mobile-application', '2025-01-25 08:43:08', '2025-01-28 08:46:58');
INSERT INTO `sliders` VALUES ('14', 'MERN Stack Web Development', 'Node JS React JS', 'sliders/1YKBx439aUSg4E8EytSrLCzsYMBSWtpTmEQ5HFoO.jpg', 'active', 'mern-stack-web-development', '2025-01-25 08:43:28', '2025-01-28 08:47:47');
INSERT INTO `sliders` VALUES ('15', 'Laravel with Vue JS', 'Vue JS Laravel', 'sliders/SPADzLzGtbeyWFrXigb9KJ2MSMPnAX4jxC76oRor.jpg', 'active', 'laravel-vue-js', '2025-01-25 10:05:04', '2025-01-28 08:49:04');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Kamrul', 'kamrul@gmail.com', null, '$2y$12$Ou9ceB0kSFIbS/KPMz6U/eyAItZPWEZgurWtw306bciWrlACKDe9K', null, '2025-01-28 06:00:45', '2025-01-28 06:00:45');
