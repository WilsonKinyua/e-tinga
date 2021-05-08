-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2021 at 12:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etinga`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<p>Dolor sit amet, consectetur adipiscing elit. Ut sed bibendum leo. Mauris mau massa, eleifend et <a href=\"/\">purus vel feugiat rutrum</a> . Cras vitae est vel ipsum fau bus fermentum a ultricies urna cum sociis.</p><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo. Mauris ma massa eleifend et purus vel feugiat rutrum nulla cras vitae est vel ipsum faucibus ferme aultricies urna cum sociis natoque penatibus.</p><p>Famur sit amet consectetur adipiscing elit ut sed bibenum leo. Mauris mauris as sa eleifend et purus vel feugiat rutrum nulla.</p><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo mauris massa, eleifend et purus vel, feugiat rutrum nulla cras vitae est vel ipsum faucibus ferm aultricies urna dum sociis natoque penatibus et magnis.</p><ul><li>Phasellus sit amet velit auctor turpis rhoncus.</li><li>Phasellus sed dolor sodales eleifend ipsum eu.</li><li>Nullam id dolor in ex eleifend tempus.</li><li>Etiam id lorem vel neque faucibus fermentum.</li><li>Nunc tincidunt augue in enim sollicitudin feugiat.</li></ul><p>Dolor sit amet, consectetur adipiscing elit. Ut sed bibendum leo. Mauris mau massa, eleifend et purus vel feugiat rutrum nulla. Cras vitae est vel ipsum fau bus fermentum a ultricies urna cum sociis.</p><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo. Mauris ma massa eleifend et purus vel feugiat rutrum nulla cras vitae est vel ipsum faucibus ferme aultricies urna cum sociis natoque penatibus.</p><p>Famur sit amet consectetur adipiscing elit ut sed bibenum leo. Mauris mauris as sa eleifend et purus vel feugiat rutrum nulla.</p><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo mauris massa, eleifend et purus vel, feugiat rutrum nulla cras vitae est vel ipsum faucibus ferm aultricies urna dum sociis natoque penatibus et magnis.</p>', '2021-05-07 22:23:28', '2021-05-07 22:23:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(1, 'created', 1, 'App\\Models\\Site', 1, '{\"title\":\"Labore sapiente quam\",\"caption\":\"Aliquam non eum pari\",\"open_hours\":\"Quod nobis et adipis\",\"support_phone_1\":\"50\",\"support_phone_2\":\"74\",\"location\":\"Esse commodi aut qu\",\"facebook\":\"Voluptas molestiae a\",\"twitter\":\"Animi consequuntur\",\"google_plus\":\"Deleniti ad laudanti\",\"linkedin\":\"Est laborum tempore\",\"youtube\":\"Cumque ratione expli\",\"email\":\"gyqazut@mailinator.com\",\"updated_at\":\"2021-04-25 21:33:19\",\"created_at\":\"2021-04-25 21:33:19\",\"id\":1,\"logo\":null,\"media\":[]}', '127.0.0.1', '2021-04-25 18:33:19', '2021-04-25 18:33:19'),
(2, 'created', 1, 'App\\Models\\Slider', 1, '{\"title\":\"Your One-Stop Source For All<br> Equipment Rental Needs\",\"caption\":\"Top-Of-The-Line Equipment Ready At Flexible Rates Around\",\"updated_at\":\"2021-04-25 21:53:08\",\"created_at\":\"2021-04-25 21:53:08\",\"id\":1,\"photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-25 18:53:08', '2021-04-25 18:53:08'),
(3, 'created', 2, 'App\\Models\\Slider', 1, '{\"title\":\"Your One-Stop Source For All<br> Equipment Rental Needs\",\"caption\":\"Top-Of-The-Line Equipment Ready At Flexible Rates Around\",\"updated_at\":\"2021-04-25 21:54:55\",\"created_at\":\"2021-04-25 21:54:55\",\"id\":2,\"photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-25 18:54:56', '2021-04-25 18:54:56'),
(4, 'created', 1, 'App\\Models\\Category', 1, '{\"name\":\"Excavators\",\"description\":\"<p>TingA is a project of Quipbank Trust Limited that employs modern technology channels to allow farmers access farm mechanization. One of these being its online based platforms that enable farmers to register and order for services as either groups or individuals using devices such as mobile phones or computers. This accessibility enables even small-scale farmers to enjoy farming equipment on short term leases. TingA Community Model Concept works by allowing farmers to register for mechanization services as groups through already established units such as NGOs, Chama, SACCO, Co-operative Societies, or Churches.<\\/p>\",\"updated_at\":\"2021-04-25 22:11:52\",\"created_at\":\"2021-04-25 22:11:52\",\"id\":1,\"photo\":null,\"media\":[]}', '127.0.0.1', '2021-04-25 19:11:52', '2021-04-25 19:11:52'),
(5, 'created', 1, 'App\\Models\\MachineryCategory', 1, '{\"name\":\"Declan Buckley\",\"category_id\":\"1\",\"description\":\"<p><strong>Best Yanmar powered hydraulic excavator for rent.<\\/strong><\\/p><p>&nbsp;<\\/p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laud antium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto be atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.<\\/p><p>Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam es qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit sed quia non numquam eius modiy.<\\/p><ul><li>Nostrud exercitation ullamco laboris<\\/li><li>Ut aliquip ex ea reprehen deritin voluptate<\\/li><li>Adipisicing elit sed eiusmod tempor incididunt<\\/li><li>Labore dolore magna aliqua veniam nostrud<\\/li><\\/ul>\",\"cost_per_hour\":\"11\",\"cost_per_day\":\"8\",\"cost_per_week\":\"48\",\"cost_per_month\":\"12\",\"two_way_delivery\":\"18\",\"total_rental_price_incl_taxes_before\":\"152\",\"total_rental_price_incl_taxes_after\":\"685\",\"brand\":\"Delectus suscipit c\",\"manufacturer\":\"Quasi officia aut in\",\"model\":\"Iusto aut excepturi\",\"manufacture_year\":\"1985\",\"digging_depth\":\"Enim ea voluptatem\",\"maximum_digging_force\":\"Aliqua Culpa repre\",\"weight\":\"5710kg\",\"rated_power\":\"36.9kW \\/ 2200rpm\",\"standard_bucket_capacity\":\"0.2m3\",\"standard_bucket_width\":\"Est vero odio sed ad\",\"operation_hydraulic_pressure\":\"Corporis ab minima n\",\"gradeadility\":\"Ratione ut nulla ten\",\"pressure_to_the_ground\":\"Reprehenderit quam\",\"status\":\"28\",\"updated_at\":\"2021-05-07 22:37:24\",\"created_at\":\"2021-05-07 22:37:24\",\"id\":1,\"main_photo\":null,\"other_photos\":[],\"brochure\":[],\"media\":[]}', '127.0.0.1', '2021-05-07 19:37:25', '2021-05-07 19:37:25'),
(6, 'created', 1, 'App\\Models\\Aboutu', 1, '{\"description\":\"<p>Dolor sit amet, consectetur adipiscing elit. Ut sed bibendum leo. Mauris mau massa, eleifend et <a href=\\\"https:\\/\\/pro-theme.com\\/\\\">purus vel feugiat rutrum<\\/a> . Cras vitae est vel ipsum fau bus fermentum a ultricies urna cum sociis.<\\/p><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo. Mauris ma massa eleifend et purus vel feugiat rutrum nulla cras vitae est vel ipsum faucibus ferme aultricies urna cum sociis natoque penatibus.<\\/p><p>Famur sit amet consectetur adipiscing elit ut sed bibenum leo. Mauris mauris as sa eleifend et purus vel feugiat rutrum nulla.<\\/p><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo mauris massa, eleifend et purus vel, feugiat rutrum nulla cras vitae est vel ipsum faucibus ferm aultricies urna dum sociis natoque penatibus et magnis.<\\/p><ul><li>Phasellus sit amet velit auctor turpis rhoncus.<\\/li><li>Phasellus sed dolor sodales eleifend ipsum eu.<\\/li><li>Nullam id dolor in ex eleifend tempus.<\\/li><li>Etiam id lorem vel neque faucibus fermentum.<\\/li><li>Nunc tincidunt augue in enim sollicitudin feugiat.<\\/li><\\/ul><p>Dolor sit amet, consectetur adipiscing elit. Ut sed bibendum leo. Mauris mau massa, eleifend et purus vel feugiat rutrum nulla. Cras vitae est vel ipsum fau bus fermentum a ultricies urna cum sociis.<\\/p><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo. Mauris ma massa eleifend et purus vel feugiat rutrum nulla cras vitae est vel ipsum faucibus ferme aultricies urna cum sociis natoque penatibus.<\\/p><p>Famur sit amet consectetur adipiscing elit ut sed bibenum leo. Mauris mauris as sa eleifend et purus vel feugiat rutrum nulla.<\\/p><p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut sed bibendum leo mauris massa, eleifend et purus vel, feugiat rutrum nulla cras vitae est vel ipsum faucibus ferm aultricies urna dum sociis natoque penatibus et magnis.<\\/p>\",\"updated_at\":\"2021-05-08 01:23:28\",\"created_at\":\"2021-05-08 01:23:28\",\"id\":1,\"photo\":[],\"media\":[]}', '127.0.0.1', '2021-05-07 22:23:28', '2021-05-07 22:23:28'),
(7, 'created', 2, 'App\\Models\\Aboutu', 1, '{\"description\":\"<p>asasas<\\/p>\",\"updated_at\":\"2021-05-08 01:31:53\",\"created_at\":\"2021-05-08 01:31:53\",\"id\":2,\"photo\":[],\"media\":[]}', '127.0.0.1', '2021-05-07 22:31:53', '2021-05-07 22:31:53'),
(8, 'created', 1, 'App\\Models\\BlogCategory', 1, '{\"name\":\"Machinery\",\"updated_at\":\"2021-05-08 01:50:52\",\"created_at\":\"2021-05-08 01:50:52\",\"id\":1}', '127.0.0.1', '2021-05-07 22:50:52', '2021-05-07 22:50:52'),
(9, 'created', 2, 'App\\Models\\BlogCategory', 1, '{\"name\":\"Weather\",\"updated_at\":\"2021-05-08 01:51:02\",\"created_at\":\"2021-05-08 01:51:02\",\"id\":2}', '127.0.0.1', '2021-05-07 22:51:02', '2021-05-07 22:51:02'),
(10, 'created', 3, 'App\\Models\\BlogCategory', 1, '{\"name\":\"Harvest\",\"updated_at\":\"2021-05-08 01:51:11\",\"created_at\":\"2021-05-08 01:51:11\",\"id\":3}', '127.0.0.1', '2021-05-07 22:51:11', '2021-05-07 22:51:11'),
(11, 'created', 1, 'App\\Models\\Blog', 1, '{\"title\":\"Generator Components Which You Should Know\",\"blog_category_id\":\"1\",\"description\":\"<p>Magna aliqua umt enimd mini venia quis ulamco aliquip commodo cons equat duis aute irue derit lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua sed ullamco laboris. Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.<\\/p><p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt.<\\/p><figure class=\\\"image\\\"><img src=\\\"https:\\/\\/pro-theme.com\\/html\\/antek\\/assets\\/img\\/img-article-gallery-1.jpg\\\" alt=\\\"gallery\\\"><\\/figure><figure class=\\\"image\\\"><img src=\\\"https:\\/\\/pro-theme.com\\/html\\/antek\\/assets\\/img\\/img-article-gallery-2.jpg\\\" alt=\\\"gallery\\\"><\\/figure><h3><strong>Types of Cranes That You Must Know<\\/strong><\\/h3><p>Mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem ac usantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore ver itatis et quasi architecto beatae vitae dicta sunt explicabo.<\\/p><ul><li>Nostrud exercitation ullamco laboris<\\/li><li>Ut aliquip ex ea reprehen deritin voluptate<\\/li><li>Adipisicing elit sed eiusmod tempor incididunt<\\/li><li>Labore dolore magna aliqua veniam nostrud<\\/li><\\/ul><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conses ur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, quit dolorem ipsum quia dolor sit amet consectetur adipisci velit sed quia eius.<\\/p><blockquote><p>Satisfied With The Facilities At Antek Construction Equipment Rental Services.<\\/p><p><strong>Donald H. James<\\/strong>Rental Customer<\\/p><\\/blockquote><p>Derit lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua sed ullamco laboris. Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Exercitation ullamco laboris nisi ut aliquip ex ea com do consequat. Duis aute irure dolor in reprehenderit in voluptate velit.<\\/p>\",\"created_by_id\":\"1\",\"updated_at\":\"2021-05-08 01:52:28\",\"created_at\":\"2021-05-08 01:52:28\",\"id\":1,\"photo\":null,\"media\":[]}', '127.0.0.1', '2021-05-07 22:52:28', '2021-05-07 22:52:28'),
(12, 'created', 1, 'App\\Models\\Tag', 1, '{\"name\":\"FORKLIFTS\",\"updated_at\":\"2021-05-08 01:52:57\",\"created_at\":\"2021-05-08 01:52:57\",\"id\":1}', '127.0.0.1', '2021-05-07 22:52:57', '2021-05-07 22:52:57'),
(13, 'created', 2, 'App\\Models\\Blog', 1, '{\"title\":\"Generators Components Which You Should Know\",\"blog_category_id\":\"2\",\"description\":\"<p>In <a href=\\\"https:\\/\\/blog.hubspot.com\\/marketing\\/web-design-html-css-javascript\\\"><strong>web design<\\/strong><\\/a>, every detail matters \\u2014 including your links.<\\/p><p>Like any other element, links can be styled with CSS properties. With CSS, you can change their color, <a href=\\\"https:\\/\\/blog.hubspot.com\\/website\\/css-background-position\\\"><strong>background<\\/strong><\\/a>, and <a href=\\\"https:\\/\\/blog.hubspot.com\\/website\\/css-font-size\\\"><strong>font size<\\/strong><\\/a>. You can even remove the underline that appears below links.<\\/p><p>How you write that CSS depends on what state the links are in. These states, also known as pseudo-classes, are <a href=\\\"https:\\/\\/blog.hubspot.com\\/website\\/what-is-css-class\\\"><strong>CSS classes<\\/strong><\\/a> based on user activity. Below the four pseudo-classes are defined.<\\/p><p><strong>a:link<\\/strong> \\u2014 when the user has not visited, hovered, or clicked on a link<\\/p><p><strong>a:visited<\\/strong> \\u2014 after the user has visited the link<\\/p><p><strong>a:hover<\\/strong> \\u2014 when the user hovers their mouse over the link<\\/p><p><strong>a:active<\\/strong> \\u2014 as the user is clicking on the link<\\/p><p>By default, the underline will appear beneath links in every pseudo-state: when hovered over, clicked on, visited, or none of the above. This is shown in the demo below:<\\/p>\",\"created_by_id\":\"1\",\"updated_at\":\"2021-05-08 01:55:51\",\"created_at\":\"2021-05-08 01:55:51\",\"id\":2,\"photo\":null,\"media\":[]}', '127.0.0.1', '2021-05-07 22:55:51', '2021-05-07 22:55:51'),
(14, 'created', 2, 'App\\Models\\Tag', 1, '{\"name\":\"Machinery\",\"updated_at\":\"2021-05-08 01:56:01\",\"created_at\":\"2021-05-08 01:56:01\",\"id\":2}', '127.0.0.1', '2021-05-07 22:56:01', '2021-05-07 22:56:01'),
(15, 'created', 3, 'App\\Models\\Tag', 1, '{\"name\":\"Metal\",\"updated_at\":\"2021-05-08 01:56:11\",\"created_at\":\"2021-05-08 01:56:11\",\"id\":3}', '127.0.0.1', '2021-05-07 22:56:11', '2021-05-07 22:56:11'),
(16, 'created', 1, 'App\\Models\\ContactMessage', 1, '{\"name\":\"Marshall Murray\",\"email\":\"bidefab@mailinator.com\",\"subject\":\"Laborum veniam ut c\",\"message\":\"Qui omnis deleniti e\",\"updated_at\":\"2021-05-08 21:43:53\",\"created_at\":\"2021-05-08 21:43:53\",\"id\":1}', '127.0.0.1', '2021-05-08 18:43:53', '2021-05-08 18:43:53'),
(17, 'created', 2, 'App\\Models\\ContactMessage', 1, '{\"name\":\"dffd\",\"email\":\"wilson@mail.com\",\"subject\":\"sdsd\",\"message\":\"sdsdsd\",\"updated_at\":\"2021-05-08 21:44:37\",\"created_at\":\"2021-05-08 21:44:37\",\"id\":2}', '127.0.0.1', '2021-05-08 18:44:37', '2021-05-08 18:44:37'),
(18, 'created', 3, 'App\\Models\\ContactMessage', 1, '{\"name\":\"dffd\",\"email\":\"wilson@mail.com\",\"subject\":\"sdsd\",\"message\":\"sdsdsd\",\"updated_at\":\"2021-05-08 21:46:09\",\"created_at\":\"2021-05-08 21:46:09\",\"id\":3}', '127.0.0.1', '2021-05-08 18:46:09', '2021-05-08 18:46:09'),
(19, 'created', 4, 'App\\Models\\ContactMessage', 1, '{\"name\":\"Wesley Mathews\",\"email\":\"gokumyjaf@mailinator.com\",\"subject\":\"Maiores aute harum n\",\"message\":\"Et ex velit repellen\",\"updated_at\":\"2021-05-08 21:47:06\",\"created_at\":\"2021-05-08 21:47:06\",\"id\":4}', '127.0.0.1', '2021-05-08 18:47:06', '2021-05-08 18:47:06'),
(20, 'created', 5, 'App\\Models\\ContactMessage', 1, '{\"name\":\"Charde Bolton\",\"email\":\"wogi@mailinator.com\",\"subject\":\"Do officiis eos quid\",\"message\":\"Minim est ipsum fuga\",\"updated_at\":\"2021-05-08 21:47:20\",\"created_at\":\"2021-05-08 21:47:20\",\"id\":5}', '127.0.0.1', '2021-05-08 18:47:20', '2021-05-08 18:47:20'),
(21, 'created', 1, 'App\\Models\\Subscriber', 1, '{\"email\":\"miqufecyzu@mailinator.com\",\"updated_at\":\"2021-05-08 21:51:37\",\"created_at\":\"2021-05-08 21:51:37\",\"id\":1}', '127.0.0.1', '2021-05-08 18:51:37', '2021-05-08 18:51:37'),
(22, 'created', 2, 'App\\Models\\Subscriber', 1, '{\"email\":\"fajytipyca@mailinator.com\",\"updated_at\":\"2021-05-08 21:53:06\",\"created_at\":\"2021-05-08 21:53:06\",\"id\":2}', '127.0.0.1', '2021-05-08 18:53:06', '2021-05-08 18:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`, `blog_category_id`) VALUES
(1, 'Generator Components Which You Should Know', '<p>Magna aliqua umt enimd mini venia quis ulamco aliquip commodo cons equat duis aute irue derit lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua sed ullamco laboris. Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p><p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt.</p><figure class=\"image\"><img src=\"https://pro-theme.com/html/antek/assets/img/img-article-gallery-1.jpg\" alt=\"gallery\"></figure><figure class=\"image\"><img src=\"https://pro-theme.com/html/antek/assets/img/img-article-gallery-2.jpg\" alt=\"gallery\"></figure><h3><strong>Types of Cranes That You Must Know</strong></h3><p>Mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem ac usantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore ver itatis et quasi architecto beatae vitae dicta sunt explicabo.</p><ul><li>Nostrud exercitation ullamco laboris</li><li>Ut aliquip ex ea reprehen deritin voluptate</li><li>Adipisicing elit sed eiusmod tempor incididunt</li><li>Labore dolore magna aliqua veniam nostrud</li></ul><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conses ur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, quit dolorem ipsum quia dolor sit amet consectetur adipisci velit sed quia eius.</p><blockquote><p>Satisfied With The Facilities At Antek Construction Equipment Rental Services.</p><p><strong>Donald H. James</strong>Rental Customer</p></blockquote><p>Derit lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua sed ullamco laboris. Lorem ipsum dolor sit amet cons ectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Exercitation ullamco laboris nisi ut aliquip ex ea com do consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>', '2021-05-07 22:52:28', '2021-05-07 22:52:28', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Machinery', '2021-05-07 22:50:52', '2021-05-07 22:50:52', NULL),
(2, 'Weather', '2021-05-07 22:51:02', '2021-05-07 22:51:02', NULL),
(3, 'Harvest', '2021-05-07 22:51:11', '2021-05-07 22:51:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`blog_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `equipment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_start_date` datetime NOT NULL,
  `order_end_date` datetime NOT NULL,
  `total_cost` decimal(15,2) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Excavators', '<p>TingA is a project of Quipbank Trust Limited that employs modern technology channels to allow farmers access farm mechanization. One of these being its online based platforms that enable farmers to register and order for services as either groups or individuals using devices such as mobile phones or computers. This accessibility enables even small-scale farmers to enjoy farming equipment on short term leases. TingA Community Model Concept works by allowing farmers to register for mechanization services as groups through already established units such as NGOs, Chama, SACCO, Co-operative Societies, or Churches.</p>', '2021-04-25 19:11:52', '2021-04-25 19:11:52', NULL),
(2, 'Scissor Lift', '<p>TingA is a project of Quipbank Trust Limited that employs modern technology channels to allow farmers access farm mechanization. One of these being its online based platforms that enable farmers to register and order for services as either groups or individuals using devices such as mobile phones or computers. This accessibility enables even small-scale farmers to enjoy farming equipment on short term leases. TingA Community Model Concept works by allowing farmers to register for mechanization services as groups through already established units such as NGOs, Chama, SACCO, Co-operative Societies, or Churches.</p>', '2021-04-25 19:11:52', '2021-04-25 19:11:52', NULL),
(3, ' Boomlift', '<p>TingA is a project of Quipbank Trust Limited that employs modern technology channels to allow farmers access farm mechanization. One of these being its online based platforms that enable farmers to register and order for services as either groups or individuals using devices such as mobile phones or computers. This accessibility enables even small-scale farmers to enjoy farming equipment on short term leases. TingA Community Model Concept works by allowing farmers to register for mechanization services as groups through already established units such as NGOs, Chama, SACCO, Co-operative Societies, or Churches.</p>', '2021-04-25 19:11:52', '2021-04-25 19:11:52', NULL),
(4, 'Forklift', '<p>TingA is a project of Quipbank Trust Limited that employs modern technology channels to allow farmers access farm mechanization. One of these being its online based platforms that enable farmers to register and order for services as either groups or individuals using devices such as mobile phones or computers. This accessibility enables even small-scale farmers to enjoy farming equipment on short term leases. TingA Community Model Concept works by allowing farmers to register for mechanization services as groups through already established units such as NGOs, Chama, SACCO, Co-operative Societies, or Churches.</p>', '2021-04-25 19:11:52', '2021-04-25 19:11:52', NULL),
(5, 'Compaction \r\n\r\n', '<p>TingA is a project of Quipbank Trust Limited that employs modern technology channels to allow farmers access farm mechanization. One of these being its online based platforms that enable farmers to register and order for services as either groups or individuals using devices such as mobile phones or computers. This accessibility enables even small-scale farmers to enjoy farming equipment on short term leases. TingA Community Model Concept works by allowing farmers to register for mechanization services as groups through already established units such as NGOs, Chama, SACCO, Co-operative Societies, or Churches.</p>', '2021-04-25 19:11:52', '2021-04-25 19:11:52', NULL),
(6, 'Roller', '<p>TingA is a project of Quipbank Trust Limited that employs modern technology channels to allow farmers access farm mechanization. One of these being its online based platforms that enable farmers to register and order for services as either groups or individuals using devices such as mobile phones or computers. This accessibility enables even small-scale farmers to enjoy farming equipment on short term leases. TingA Community Model Concept works by allowing farmers to register for mechanization services as groups through already established units such as NGOs, Chama, SACCO, Co-operative Societies, or Churches.</p>', '2021-04-25 19:11:52', '2021-04-25 19:11:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Marshall Murray', 'bidefab@mailinator.com', 'Laborum veniam ut c', 'Qui omnis deleniti e', '2021-05-08 18:43:53', '2021-05-08 18:43:53', NULL),
(2, 'dffd', 'wilson@mail.com', 'sdsd', 'sdsdsd', '2021-05-08 18:44:37', '2021-05-08 18:44:37', NULL),
(3, 'dffd', 'wilson@mail.com', 'sdsd', 'sdsdsd', '2021-05-08 18:46:09', '2021-05-08 18:46:09', NULL),
(4, 'Wesley Mathews', 'gokumyjaf@mailinator.com', 'Maiores aute harum n', 'Et ex velit repellen', '2021-05-08 18:47:06', '2021-05-08 18:47:06', NULL),
(5, 'Charde Bolton', 'wogi@mailinator.com', 'Do officiis eos quid', 'Minim est ipsum fuga', '2021-05-08 18:47:20', '2021-05-08 18:47:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `professional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `machinery_categories`
--

CREATE TABLE `machinery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_per_hour` decimal(15,2) NOT NULL,
  `cost_per_day` decimal(15,2) NOT NULL,
  `cost_per_week` decimal(15,2) NOT NULL,
  `cost_per_month` decimal(15,2) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacture_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `digging_depth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maximum_digging_force` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rated_power` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard_bucket_capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard_bucket_width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operation_hydraulic_pressure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gradeadility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pressure_to_the_ground` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `two_way_delivery` decimal(15,2) NOT NULL,
  `total_rental_price_incl_taxes_before` decimal(15,2) NOT NULL,
  `total_rental_price_incl_taxes_after` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machinery_categories`
--

INSERT INTO `machinery_categories` (`id`, `name`, `description`, `cost_per_hour`, `cost_per_day`, `cost_per_week`, `cost_per_month`, `brand`, `manufacturer`, `model`, `manufacture_year`, `digging_depth`, `maximum_digging_force`, `weight`, `rated_power`, `standard_bucket_capacity`, `standard_bucket_width`, `operation_hydraulic_pressure`, `gradeadility`, `pressure_to_the_ground`, `status`, `two_way_delivery`, `total_rental_price_incl_taxes_before`, `total_rental_price_incl_taxes_after`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES
(1, 'Declan Buckley', '<p><strong>Best Yanmar powered hydraulic excavator for rent.</strong></p><p>&nbsp;</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laud antium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto be atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p><p>Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam es qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit sed quia non numquam eius modiy.</p><ul><li>Nostrud exercitation ullamco laboris</li><li>Ut aliquip ex ea reprehen deritin voluptate</li><li>Adipisicing elit sed eiusmod tempor incididunt</li><li>Labore dolore magna aliqua veniam nostrud</li></ul>', '11.00', '8.00', '48.00', '12.00', 'Delectus suscipit c', 'Quasi officia aut in', 'Iusto aut excepturi', '1985', '22 m', 'Aliqua Culpa repre', '5710kg', '36.9kW / 2200rpm', '0.2m3', 'Est vero odio sed ad', 'Corporis ab minima n', 'Ratione ut nulla ten', 'Reprehenderit quam', 28, '18.00', '152.00', '685.00', '2021-05-07 19:37:24', '2021-05-07 19:37:24', NULL, 1),
(2, 'Declan Buckley', '<p><strong>Best Yanmar powered hydraulic excavator for rent.</strong></p><p>&nbsp;</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laud antium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto be atae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.</p><p>Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam es qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit sed quia non numquam eius modiy.</p><ul><li>Nostrud exercitation ullamco laboris</li><li>Ut aliquip ex ea reprehen deritin voluptate</li><li>Adipisicing elit sed eiusmod tempor incididunt</li><li>Labore dolore magna aliqua veniam nostrud</li></ul>', '11.00', '8.00', '48.00', '12.00', 'Delectus suscipit c', 'Quasi officia aut in', 'Iusto aut excepturi', '1985', '22 m', 'Aliqua Culpa repre', '5710kg', '36.9kW / 2200rpm', '0.2m3', 'Est vero odio sed ad', 'Corporis ab minima n', 'Ratione ut nulla ten', 'Reprehenderit quam', 28, '18.00', '152.00', '685.00', '2021-05-07 19:37:24', '2021-05-07 19:37:24', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Site', 1, '3fda790d-2157-4436-bc58-528908b846ec', 'logo', '6085dfe02756a_apple-touch-icon', '6085dfe02756a_apple-touch-icon.png', 'image/png', 'public', 'public', 4561, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 1, '2021-04-25 18:33:19', '2021-04-25 18:33:21'),
(2, 'App\\Models\\Slider', 1, 'a60d1128-b566-4893-b4fe-8f186b4a68c9', 'photo', '6085e4c1eab46_slideshow-1', '6085e4c1eab46_slideshow-1.jpg', 'image/jpeg', 'public', 'public', 844538, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 2, '2021-04-25 18:53:09', '2021-04-25 18:53:09'),
(3, 'App\\Models\\Slider', 2, '6bb6cfe3-b9bd-4086-a248-ceb2d82fb9dc', 'photo', '6085e52dd5620_slideshow-2', '6085e52dd5620_slideshow-2.jpg', 'image/jpeg', 'public', 'public', 755268, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 3, '2021-04-25 18:54:56', '2021-04-25 18:54:56'),
(4, 'App\\Models\\Category', 1, '2f266953-50ef-4993-b26c-7543c0245739', 'photo', '6085e9114523d_bg_blog-decor', '6085e9114523d_bg_blog-decor.jpg', 'image/jpeg', 'public', 'public', 171316, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 4, '2021-04-25 19:11:52', '2021-04-25 19:11:52'),
(5, 'App\\Models\\Category', 2, 'fc0e5f7b-17cb-4f72-8071-086f2480ff0d', 'photo', '6085ea26ef2a3_category-1', '6085ea26ef2a3_category-1.jpg', 'image/jpeg', 'public', 'public', 121024, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 5, '2021-04-25 19:16:08', '2021-04-25 19:16:08'),
(8, 'App\\Models\\Category', 5, '1eb7ce35-9223-4859-a1ac-a78923a7ede4', 'photo', '6085ea48b5f66_category-2', '6085ea48b5f66_category-2.jpg', 'image/jpeg', 'public', 'public', 105222, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 8, '2021-04-25 19:16:43', '2021-04-25 19:16:44'),
(9, 'App\\Models\\Category', 6, 'eaefe754-601d-4261-a369-4a1f8920c151', 'photo', '6085ea5754ab1_category-4', '6085ea5754ab1_category-4.jpg', 'image/jpeg', 'public', 'public', 118352, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 9, '2021-04-25 19:16:56', '2021-04-25 19:16:56'),
(10, 'App\\Models\\Category', 7, 'db430771-6728-4966-84c0-8bc42bed9b31', 'photo', '6085ea707e552_category-2', '6085ea707e552_category-2.jpg', 'image/jpeg', 'public', 'public', 105222, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 10, '2021-04-25 19:17:22', '2021-04-25 19:17:22'),
(11, 'App\\Models\\Category', 8, '2ff60918-bfb4-4fea-b41e-a507fc90a90d', 'photo', '6085ea7d2d28f_category-6', '6085ea7d2d28f_category-6.jpg', 'image/jpeg', 'public', 'public', 107253, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 11, '2021-04-25 19:17:34', '2021-04-25 19:17:34'),
(12, 'App\\Models\\Category', 3, 'bded6cf0-38bd-4251-8a44-ecf86981e470', 'photo', '6085eb014a6b2_bg_blog-decor', '6085eb014a6b2_bg_blog-decor.jpg', 'image/jpeg', 'public', 'public', 171316, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 12, '2021-04-25 19:19:46', '2021-04-25 19:19:46'),
(13, 'App\\Models\\Category', 4, 'e0f9134b-fc36-4deb-8e5b-9e4aa862a5dd', 'photo', '6085eb1b477e2_bg_blog-decor', '6085eb1b477e2_bg_blog-decor.jpg', 'image/jpeg', 'public', 'public', 171316, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 13, '2021-04-25 19:20:12', '2021-04-25 19:20:12'),
(14, 'App\\Models\\MachineryCategory', 1, '509a8214-d75f-415a-a7ce-afa3b2ebf627', 'main_photo', '6095c096a9007_rental-item-1', '6095c096a9007_rental-item-1.jpg', 'image/jpeg', 'public', 'public', 71149, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 14, '2021-05-07 19:37:25', '2021-05-07 19:37:25'),
(15, 'App\\Models\\MachineryCategory', 1, '09322af7-d4ec-470c-b33f-95318ab4547d', 'brochure', '6095c121aa384_proposalpresentationpptchaptertwo', '6095c121aa384_proposalpresentationpptchaptertwo.pdf', 'application/pdf', 'public', 'public', 615558, '[]', '[]', '[]', 15, '2021-05-07 19:37:25', '2021-05-07 19:37:25'),
(16, 'App\\Models\\Aboutu', 1, 'f1830142-6abb-4ad0-8907-219d2772269f', 'photo', '6095e95453c35_bg_contacts', '6095e95453c35_bg_contacts.jpg', 'image/jpeg', 'public', 'public', 208343, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 16, '2021-05-07 22:28:54', '2021-05-07 22:28:54'),
(17, 'App\\Models\\Blog', 1, '0ab5c5b1-2ace-420a-a00d-b761b80fc337', 'photo', '6095ee9eb45d3_blog-1', '6095ee9eb45d3_blog-1.jpg', 'image/jpeg', 'public', 'public', 77644, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 17, '2021-05-07 22:52:28', '2021-05-07 22:52:29'),
(18, 'App\\Models\\Blog', 2, 'eb99ced9-ac2e-4f56-8cf6-8d16568da8fc', 'photo', '6095efa1db6c8_blog-2', '6095efa1db6c8_blog-2.jpg', 'image/jpeg', 'public', 'public', 68805, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 18, '2021-05-07 22:55:51', '2021-05-07 22:55:51');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_04_25_000001_create_audit_logs_table', 1),
(4, '2021_04_25_000002_create_media_table', 1),
(5, '2021_04_25_000003_create_contact_messages_table', 1),
(6, '2021_04_25_000004_create_customer_reviews_table', 1),
(7, '2021_04_25_000005_create_sliders_table', 1),
(8, '2021_04_25_000006_create_aboutus_table', 1),
(9, '2021_04_25_000007_create_blog_categories_table', 1),
(10, '2021_04_25_000008_create_categories_table', 1),
(11, '2021_04_25_000009_create_blogs_table', 1),
(12, '2021_04_25_000010_create_sites_table', 1),
(13, '2021_04_25_000011_create_bookings_table', 1),
(14, '2021_04_25_000012_create_farmers_table', 1),
(15, '2021_04_25_000013_create_machinery_categories_table', 1),
(16, '2021_04_25_000014_create_comments_table', 1),
(17, '2021_04_25_000015_create_users_table', 1),
(18, '2021_04_25_000016_create_tags_table', 1),
(19, '2021_04_25_000017_create_roles_table', 1),
(20, '2021_04_25_000018_create_permissions_table', 1),
(21, '2021_04_25_000019_create_subscribers_table', 1),
(22, '2021_04_25_000020_create_blog_tag_pivot_table', 1),
(23, '2021_04_25_000021_create_role_user_pivot_table', 1),
(24, '2021_04_25_000022_create_permission_role_pivot_table', 1),
(25, '2021_04_25_000023_add_relationship_fields_to_blogs_table', 1),
(26, '2021_04_25_000024_add_relationship_fields_to_machinery_categories_table', 1),
(27, '2021_04_25_000025_add_relationship_fields_to_comments_table', 1),
(28, '2021_04_25_000026_add_verification_fields', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'machinery_access', NULL, NULL, NULL),
(18, 'machinery_category_create', NULL, NULL, NULL),
(19, 'machinery_category_edit', NULL, NULL, NULL),
(20, 'machinery_category_show', NULL, NULL, NULL),
(21, 'machinery_category_delete', NULL, NULL, NULL),
(22, 'machinery_category_access', NULL, NULL, NULL),
(23, 'site_setting_access', NULL, NULL, NULL),
(24, 'site_create', NULL, NULL, NULL),
(25, 'site_edit', NULL, NULL, NULL),
(26, 'site_show', NULL, NULL, NULL),
(27, 'site_delete', NULL, NULL, NULL),
(28, 'site_access', NULL, NULL, NULL),
(29, 'contact_message_show', NULL, NULL, NULL),
(30, 'contact_message_access', NULL, NULL, NULL),
(31, 'blog_create', NULL, NULL, NULL),
(32, 'blog_edit', NULL, NULL, NULL),
(33, 'blog_show', NULL, NULL, NULL),
(34, 'blog_delete', NULL, NULL, NULL),
(35, 'blog_access', NULL, NULL, NULL),
(36, 'blog_management_access', NULL, NULL, NULL),
(37, 'blog_category_create', NULL, NULL, NULL),
(38, 'blog_category_edit', NULL, NULL, NULL),
(39, 'blog_category_show', NULL, NULL, NULL),
(40, 'blog_category_delete', NULL, NULL, NULL),
(41, 'blog_category_access', NULL, NULL, NULL),
(42, 'aboutu_create', NULL, NULL, NULL),
(43, 'aboutu_edit', NULL, NULL, NULL),
(44, 'aboutu_show', NULL, NULL, NULL),
(45, 'aboutu_delete', NULL, NULL, NULL),
(46, 'aboutu_access', NULL, NULL, NULL),
(47, 'slider_create', NULL, NULL, NULL),
(48, 'slider_edit', NULL, NULL, NULL),
(49, 'slider_show', NULL, NULL, NULL),
(50, 'slider_delete', NULL, NULL, NULL),
(51, 'slider_access', NULL, NULL, NULL),
(52, 'customer_review_show', NULL, NULL, NULL),
(53, 'customer_review_access', NULL, NULL, NULL),
(54, 'subscriber_show', NULL, NULL, NULL),
(55, 'subscriber_access', NULL, NULL, NULL),
(56, 'booking_show', NULL, NULL, NULL),
(57, 'booking_access', NULL, NULL, NULL),
(58, 'category_create', NULL, NULL, NULL),
(59, 'category_edit', NULL, NULL, NULL),
(60, 'category_show', NULL, NULL, NULL),
(61, 'category_delete', NULL, NULL, NULL),
(62, 'category_access', NULL, NULL, NULL),
(63, 'farmer_create', NULL, NULL, NULL),
(64, 'farmer_edit', NULL, NULL, NULL),
(65, 'farmer_show', NULL, NULL, NULL),
(66, 'farmer_delete', NULL, NULL, NULL),
(67, 'farmer_access', NULL, NULL, NULL),
(68, 'audit_log_show', NULL, NULL, NULL),
(69, 'audit_log_access', NULL, NULL, NULL),
(70, 'comment_create', NULL, NULL, NULL),
(71, 'comment_edit', NULL, NULL, NULL),
(72, 'comment_show', NULL, NULL, NULL),
(73, 'comment_delete', NULL, NULL, NULL),
(74, 'comment_access', NULL, NULL, NULL),
(75, 'tag_create', NULL, NULL, NULL),
(76, 'tag_edit', NULL, NULL, NULL),
(77, 'tag_show', NULL, NULL, NULL),
(78, 'tag_delete', NULL, NULL, NULL),
(79, 'tag_access', NULL, NULL, NULL),
(80, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69),
(2, 70),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(2, 75),
(2, 76),
(2, 77),
(2, 78),
(2, 79),
(2, 80);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support_phone_1` int(11) NOT NULL,
  `support_phone_2` int(11) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `title`, `caption`, `open_hours`, `support_phone_1`, `support_phone_2`, `location`, `facebook`, `twitter`, `google_plus`, `linkedin`, `youtube`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Labore sapiente quam', 'Aliquam non eum pari', 'Quod nobis et adipis', 50, 74, 'Esse commodi aut qu', 'Voluptas molestiae a', 'Animi consequuntur', 'Deleniti ad laudanti', 'Est laborum tempore', 'Cumque ratione expli', 'gyqazut@mailinator.com', '2021-04-25 18:33:19', '2021-04-25 18:33:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `caption`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Your One-Stop Source For All<br> Equipment Rental Needs', 'Top-Of-The-Line Equipment Ready At Flexible Rates Around', '2021-04-25 18:53:08', '2021-04-25 18:53:08', NULL),
(2, 'Your One-Stop Source For All<br> Equipment Rental Needs', 'Top-Of-The-Line Equipment Ready At Flexible Rates Around', '2021-04-25 18:54:55', '2021-04-25 18:54:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'miqufecyzu@mailinator.com', '2021-05-08 18:51:37', '2021-05-08 18:51:37', NULL),
(2, 'fajytipyca@mailinator.com', '2021-05-08 18:53:06', '2021-05-08 18:53:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'FORKLIFTS', '2021-05-07 22:52:57', '2021-05-07 22:52:57', NULL),
(2, 'Machinery', '2021-05-07 22:56:01', '2021-05-07 22:56:01', NULL),
(3, 'Metal', '2021-05-07 22:56:11', '2021-05-07 22:56:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `verified_at` datetime DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `verified`, `verified_at`, `verification_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$Uc.6LFKZ6DHISWfAZW052emGW6L7GH5/MATT3fP8nHpt7GXg6c5q.', NULL, 1, '2021-03-24 00:08:51', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_3510282` (`created_by_id`),
  ADD KEY `blog_category_fk_3510288` (`blog_category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD KEY `blog_id_fk_3765242` (`blog_id`),
  ADD KEY `tag_id_fk_3765242` (`tag_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_fk_3765233` (`blog_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machinery_categories`
--
ALTER TABLE `machinery_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_3707561` (`category_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_3509912` (`role_id`),
  ADD KEY `permission_id_fk_3509912` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_3509921` (`user_id`),
  ADD KEY `role_id_fk_3509921` (`role_id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `machinery_categories`
--
ALTER TABLE `machinery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blog_category_fk_3510288` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`),
  ADD CONSTRAINT `created_by_fk_3510282` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD CONSTRAINT `blog_id_fk_3765242` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tag_id_fk_3765242` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `blog_fk_3765233` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`);

--
-- Constraints for table `machinery_categories`
--
ALTER TABLE `machinery_categories`
  ADD CONSTRAINT `category_fk_3707561` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_3509912` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_3509912` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_3509921` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_3509921` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
