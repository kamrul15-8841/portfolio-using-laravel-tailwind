-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2025 at 10:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_front_tailwind`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_description`, `long_description`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Md. Kamrul Hasan', 'I am a dynamic and skilled Software Developer with over 3 years of experience in full-stack web development,\r\ncurrently serving as a Application Developer (Ful Stack Web Developer) at Noman Group.', 'With expertise in\r\nPHP, Laravel, JavaScript, MySQL, and a growing proficiency in React.js and React Native, I specialize in\r\ndesigning and implementing scalable, user-focused applications that drive business growth and operational\r\nefficiency.\r\nThroughout my career, I have developed custom solutions such as production tracking systems, inventory\r\nmanagement platforms, and POS systems. My deep understanding of Object-Oriented Programming (OOP)\r\nand the software development lifecycle allows me to create efficient and maintainable code that enhances user\r\nexperience. Passionate about leveraging technology to solve real-world problems, I aim to continue growing in\r\nthe software industry in Bangladesh, contributing innovative solutions while mentoring and empowering others\r\nthrough technology.', 'abouts/jhqLAw3sypD1EDWqgiIqygzOv9VDHdX9JN4OrMcr.jpg', 'active', 'f-asd', '2025-01-25 04:17:37', '2025-01-25 05:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `mobile`, `message`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kamrul', 'user@gmail.com', '01771883916', 'a sdf asdf', NULL, 'active', 'kamrul', '2025-01-26 22:03:54', '2025-01-26 22:03:54'),
(4, 'fa sdf', 'user1@gmail.com', '01771883916', 'a sdf asdf', NULL, 'active', 'fa-sdf', '2025-01-26 22:05:36', '2025-01-26 22:05:36'),
(7, 'Kamrul fasdfa', 'admin@test.com', '01723828163', 'a fsdfa', NULL, 'active', 'kamrul-fasdfa', '2025-01-26 22:08:35', '2025-01-26 22:08:35'),
(9, 'a sdfs fasdf', 'useafsdfr@gmail.com', '01723828163', 'af sdfasdf', NULL, 'active', 'a-sdfs-fasdf', '2025-01-26 22:09:14', '2025-01-26 22:09:14'),
(10, 'fdsasd f', 'userafasd@gmail.com', '01723828163', 'f asdf', NULL, 'active', 'fdsasd-f', '2025-01-26 22:30:25', '2025-01-26 22:30:25'),
(11, 'f asdf asdf', 'adminasdfasd@test.com', '01733730039', 'fasdfasdf', NULL, 'active', 'f-asdf-asdf', '2025-01-26 22:31:37', '2025-01-26 22:31:37'),
(14, 'fas dfasdf', 'usefasdfr@gmail.com', '01723828163', 'fa sdfasdf', NULL, 'active', 'fas-dfasdf', '2025-01-26 23:02:24', '2025-01-26 23:02:24'),
(16, 'fasdfasdf', 'usefasdfasr@gmail.com', '01733730039', 'f asdfasdf', NULL, 'active', 'fasdfasdf', '2025-01-26 23:03:28', '2025-01-26 23:03:28'),
(17, 'sdfasdf', 'useasdfasdfr@gmail.com', '01733730039', 'as dfas', NULL, 'active', 'sdfasdf', '2025-01-26 23:04:03', '2025-01-26 23:04:03'),
(19, 'fasdfasdfasdf', 'admfasdfasin@test.com', '01733730039', 'f asdfas', NULL, 'active', 'fasdfasdfasdf', '2025-01-26 23:07:54', '2025-01-26 23:07:54'),
(20, 'f asdfasdfas df', 'useasdfasdfar@gmail.com', '01757040512', 'f asdfasd', NULL, 'active', 'f-asdfasdfas-df', '2025-01-26 23:08:09', '2025-01-26 23:08:09'),
(22, 'sd fas dfasd', 'usefasdfaasdfsr@gmail.com', '01733730039', 'f asdf asd fasd', NULL, 'active', 'sd-fas-dfasd', '2025-01-28 05:10:50', '2025-01-28 05:10:50'),
(23, 'fasd', 'adminasdfsaf@test.com', '01771883333', 'f asd fasd fa', NULL, 'active', 'fasd', '2025-02-08 00:34:41', '2025-02-08 00:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `institute`, `period`, `expertise`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PHP With Laravel Dvelopment', 'Course with BITM BASIS Seip Project.', 'BITM', 'Three Month', 'HTML, CSS, Bootstrap, PHP, JavaScript, Laravel', 'courses/zCf2aqUmGhGjxlnQfQhsaspXB1Ce1CA6WSSQmsp1.png', 'active', 'php-with-laravel-dvelopment', '2025-01-27 03:42:43', '2025-02-08 00:01:23'),
(3, 'sa fasdf asdf', 'a sdf asdfas', 'f asdf asdf', 'a sdfasdf', 'fasdfasdf', 'courses/mMChNWC9R23pDqLX7zaSmwqmgDO2G5ZfO9pGsGaz.jpg', '', 'sa-fasdf-asdf', '2025-01-27 03:46:05', '2025-01-28 03:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `job_title`, `job_description`, `company_name`, `company_address`, `joining_date`, `left_date`, `expertise`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Application Developer', 'As a Full Stack Web Developer at Noman Group’s In-House Software Team, I play a vital role in designing, developing, and maintaining custom software solutions that streamline business operations and enhance productivity. My work focuses on creating robust, scalable, and user-friendly applications tailored to the unique needs of the organization.\r\nKey Contributions & Projects:\r\n1. Samriddhi POS System for Fair Price Super Shop:\r\nCustomized and deployed a point-of-sale (POS) solution to serve a supershop catering to over 15,000 customers, primarily workers and employees at Zaber & Zubair Fabrics Ltd.\r\nThe system supports discounted sales and ensures accurate tracking of transactions, benefiting employees through a fair price initiative.\r\n2. Rack Management System:\r\nDeveloped and maintained a comprehensive production tracking solution that fully digitized the company’s fabric production processes.\r\nEnabled end-to-end traceability, from initial fabric production to final product delivery, ensuring seamless management of fabric inspection and dispatch.\r\nIntegrated barcode tracking for accurate data capture and improved operational efficiency.\r\n3. Fabric Tracker:\r\nImplemented a sophisticated tracking system to monitor fabric production timelines and workflows.\r\nEnhanced visibility into resource allocation, worker efficiency, and delivery schedules through detailed reporting and analytics.\r\n4. Fabric Fair Management Software:\r\nCreated a platform to manage buyer events, showcasing fabrics and facilitating order placements directly through the software.\r\nImproved the buyer experience by streamlining event operations and order processing.\r\n5. Hint Lifestyle POS and E-Commerce Solution:\r\nDeveloped and maintained an integrated POS and e-commerce platform for the sale of company products, including Panjabis, T-shirts, and twill fabrics.\r\nEnsured a seamless shopping experience by optimizing inventory management, payment processing, and customer engagement features.', 'Noman Group', 'Nurul Islam House, 110 Gulshan Avenue, Road 113, Dhaka- 1212', '2023-02-01', '2025-01-09', 'PHP, JavaScript, Laravel, MySQL, Vue.js', 'experiences/9oAaUYLy2oXHnXKdtj4K1lIXVj5iqgiH80KwxaZZ.jpg', 'active', 'aplication-developer', '2025-01-25 22:12:33', '2025-02-08 00:27:17'),
(2, 'QA Engineer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'InsideMaps', 'Baridhara DOHS', '2021-09-09', '2022-05-05', 'QA Engineer', 'experiences/2MQNXkyl0uyDWYITlCo5DRYbZpWMVJgVYMTtcmdv.jpg', '', 'qa-engineer', '2025-01-25 22:36:58', '2025-01-28 02:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_01_25_033302_create_sliders_table', 1),
(6, '2025_01_25_033318_create_abouts_table', 1),
(7, '2025_01_25_033450_create_experiences_table', 1),
(8, '2025_01_25_033517_create_projects_table', 1),
(9, '2025_01_25_033531_create_skills_table', 1),
(10, '2025_01_25_033548_create_services_table', 1),
(11, '2025_01_25_033600_create_courses_table', 1),
(12, '2025_01_25_033614_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `type`, `stack`, `short_description`, `long_description`, `github_link`, `web_link`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'My Portfolio Builder', 'web-design', 'Full Stack', 'My Portfolio | PHP Laravel Tailwind CSS | Jan 2025 - Recent', '• Admin panel for easy addition and management of Profile, Portfolio, Skills, Services, and Projects.\r\n• Efficient maintenance of back end and front end to ensure smooth functioning of the system', 'https://github.com/kamrul15-8841/portfolio', 'https://github.com/kamrul15-8841/portfolio', 'projects/QbbaKyST8CzoNHujTnP0lTrfIBqToXSpgrBAx6Ei.png', 'active', 'my-portfolio-builder', '2025-01-26 04:10:37', '2025-02-08 00:04:25'),
(2, 'Shomriddhi', 'web-development', 'Full Stack', 'Shomriddhi POS Software | Bootstrap, PHP, JavaScript, Laravel, MySQL | Feb 2023 - Dec 2023', '• Efficiently track sales, manage inventory and handle customer transactions for seamless operations.\r\n• Streamline purchase, monitor stock levels, and optimize product availability to meet customer demands.\r\n• Enhance customer experience by providing personalized services', 'https://github.com/kamrul15-8841/Shomriddhi', 'https://github.com/kamrul15-8841/Shomriddhi', 'projects/SOYgrqZIVGxfW18N2scoKjLTPpzorg0ToByRCCtD.png', 'active', 'shomriddhi', '2025-01-26 04:13:58', '2025-02-08 00:05:25'),
(3, 'Fabric Tracker', 'web-development', 'Full Stack', 'Fabric Tracker - Fabric Tracking Software — Based on HTM, CSS, JavaScript, Ajax and PHP', 'It has an admin panel and user panel, where admin have all access, and user can add, view and edit orders section and\r\nbuyer profile section and see event user, order and buyer wise event list. In this list there are individual sorting and\r\nsearching for order no, event by complete or incomplete status, by completion day, and by date from. And according\r\nto status user can click complete and incomplete and hold to change status. And admin have all these accesses including\r\nmanage users, events, buyers, event wise user, department, designation and all the functionalism.', 'https://github.com/kamrul15-8841/Fabric-Tracker', 'https://github.com/kamrul15-8841/Fabric-Tracker', 'projects/GLKL8XIZGJ7VzUABrX63sIASMQOoXwl7REMeWLJI.png', 'active', 'fabric-tracker', '2025-01-26 04:41:57', '2025-02-08 00:06:24'),
(4, 'Health Profile Manager', 'personal', 'Mobile Application', 'Java XML Android Studion SQLite', 'This is my final year project of University.', 'https://github.com/kamrul15-8841/FinalYearProject', 'https://github.com/kamrul15-8841/FinalYearProject', 'projects/Zn7B1o9p87djvsyPs2n3v5xtyjbJXV6Dfp7A9Zc7.jpg', 'active', 'health-profile-manager', '2025-01-26 05:07:11', '2025-02-08 00:10:10'),
(5, 'Rack Management', 'web-development', 'Full Stack', 'Production Software using PHP JavaScript Ajax Bootxtrap', 'Rack Management | Bootstrap, PHP, JavaScript, Ajax, jQuery | Feb 2023 - Dec 2024\r\n• It facilitating inspection, sale, delivery, and inventory management of finished goods.\r\n• The dashboard feature allows users to view detailed information on delivered goods, remaining inventory, and stock\r\nlevels, enhancing overall operational visibility.\r\n• It ensures efficient tracking and monitoring of goods through barcode scanning during delivery.', 'https://github.com/kamrul15-8841/Rack-Management', 'https://github.com/kamrul15-8841/Rack-Management', 'projects/g36q27FZRXdautH9lCDnYUNt9b0NzWTpwg4swwyn.png', 'active', 'rack-management', '2025-02-07 23:09:01', '2025-02-07 23:09:01'),
(6, 'ZNZ Studio', 'web-development', 'Full Stack', 'Fabric Faire Management Software using PHP OOP  PDO Bootstrap JavaScript', 'ZNZ-Studio | Bootstrap, PHP, OOP, JavaScript, Ajax, jQuery | Feb 2024 - Feb 2025\r\n• Mobile app enables users to scan, add items to cart, and submit work orders for processing and sample.\r\n• API developed using PHP OOP and PDO MySQL database to support mobile app functionalities.\r\n• Web component complements the mobile app, facilitating seamless management of Fabric Week event.', 'https://github.com/kamrul15-8841/ZNZ-Studio', 'https://github.com/kamrul15-8841/ZNZ-Studio', 'projects/Eay7CxybIPe6Rj9spJnu0OALD0qpSPqOBr9N2Dzj.png', 'active', 'znz-studio', '2025-02-07 23:11:09', '2025-02-07 23:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stack` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `type`, `stack`, `github`, `link`, `description`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'web-design', 'Web Design', 'http://127.0.0.1:8000/', 'http://127.0.0.1:8000/services/1/edit', 'I have experience of Web Design with React Js and Vue Js compatible with Bootstrap and Taiwind CSS.', 'services/TjbkEoZxD5jAzxpEsiqVj0rs3qcm8h5SycG7Kgxy.jpg', 'active', 'web-design', '2025-01-27 00:34:44', '2025-02-07 23:46:41'),
(2, 'web-development', 'Web Development', 'http://127.0.0.1:8000/', 'https://sites.google.com/view/kamrul-hasan', 'I have experience of Web Development with PHP and Laravel and also with Node JS and Expres JS with MySQL and MongoDB.', 'services/0veYucpEbwxq5YCStEdOz2EUtUHGFNldXgMVaF6Z.png', 'active', 'web-development', '2025-01-27 00:38:22', '2025-02-07 23:47:22'),
(3, 'mobile', 'Mobile Application', 'http://127.0.0.1:8000/', 'https://sites.google.com/view/kamrul-hasan', 'I have experience of Mobile App Development with React Native', 'services/mINhWgZbWgHMZuLeCAUAUBv194uMAXPZIlm0ikR3.jpg', 'active', 'mobile', '2025-01-27 00:44:13', '2025-02-07 23:48:28');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `progress` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `type`, `title`, `description`, `progress`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'PHP', 'PHP', 90, 'skill/2KNCe5GEcILMR34GKnzRTFtsrIxWRp1no6xHuzXu.jpg', 'active', 'php', '2025-01-27 06:10:02', '2025-01-27 06:13:04'),
(2, 'Laravel', 'Laravel', 'Laravel', 85, 'skill/SgkJPmagVFl2koLbITaebDodGiG7TKUwT2sIlvU7.jpg', 'active', 'laravel', '2025-01-27 06:11:04', '2025-02-07 23:12:39'),
(4, 'HTML', 'HTML', 'HTML', 95, NULL, 'active', 'html', '2025-01-28 03:30:40', '2025-01-28 03:30:40'),
(5, 'ReactJS', 'ReactJS', 'ReactJS', 65, NULL, 'active', 'reactjs', '2025-01-28 03:31:43', '2025-01-28 03:31:43'),
(6, 'Vue JS', 'Vue JS', 'Vue JS', 70, NULL, 'active', 'vue-js', '2025-01-28 03:32:11', '2025-02-07 23:12:53'),
(7, 'React Native', 'React Native', 'React Native', 60, NULL, '', 'react-native', '2025-01-28 03:32:37', '2025-02-07 23:23:21'),
(8, 'CSS', 'CSS', 'CSS', 90, NULL, 'active', 'css', '2025-01-28 03:32:56', '2025-01-28 03:32:56'),
(9, 'Bootstrap', 'Bootstrap', 'Bootstrap', 90, NULL, 'active', 'bootstrap', '2025-01-28 03:33:15', '2025-01-28 03:33:15'),
(10, 'Tailwind CSS', 'Tailwind CSS', 'Tailwind CSS', 80, NULL, 'active', 'tailwind-css', '2025-01-28 03:33:33', '2025-02-07 23:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `caption`, `description`, `image`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(9, 'Shomriddhi', 'POS Software | PHP With Laravel Framework', 'sliders/bZjVFLeKbLouvYdJuJgWhaXmIsFcK7dJNkgcU8jP.png', 'active', 'shomriddhi', '2025-01-25 00:11:42', '2025-02-07 21:57:15'),
(12, 'Rack Management', 'Productiotn Software | HTML CSS Bootstrap JavsScript AJAX', 'sliders/ieEFJpDm369aj2aFY7VGWLhcDQC4VZqr8LdFBsNK.png', 'active', 'rack-management', '2025-01-25 00:57:52', '2025-02-07 21:57:47'),
(13, 'Fabric Tracker', 'Fabrick Tracking Software | HTML CSS Bootstrap JavaScript AJAX', 'sliders/mAwp4KUf4hDVK6jExjap4lzhS91yT67pUBwFIwfI.png', 'active', 'fabric-tracker', '2025-01-25 02:43:08', '2025-02-07 21:57:53'),
(14, 'My Portfolio Builder', 'Portfolio Builder | HTML CSS Tailwind CSS JavaScript', 'sliders/TnDNfXhNzFRdznKQsC0cEx59ADnlLg93gO28n9pn.png', 'active', 'my-portfolio-builder', '2025-01-25 02:43:28', '2025-02-07 21:58:16'),
(15, 'Fabric Fair Manamgement', 'Fair Managemaent | HTML CSS Bootstrap JavaScript PHP OOP PDO MYSQL', 'sliders/sVUwIrFWmSKgKuZfdS51HeSNkQXFTdPdTX9jGluN.png', 'active', 'fabric-fair-manamgement', '2025-01-25 04:05:04', '2025-02-07 21:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kamrul', 'kamrul@gmail.com', NULL, '$2y$12$Ou9ceB0kSFIbS/KPMz6U/eyAItZPWEZgurWtw306bciWrlACKDe9K', NULL, '2025-01-28 00:00:45', '2025-01-28 00:00:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `abouts_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`),
  ADD UNIQUE KEY `contacts_slug_unique` (`slug`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `experiences_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_slug_unique` (`slug`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skills_slug_unique` (`slug`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sliders_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
