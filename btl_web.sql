-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 03:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_web`
--
CREATE DATABASE IF NOT EXISTS `btl_web` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `btl_web`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `course_id`, `comment`, `comment_date`) VALUES(1, 1, 1, 'Good. Very good!', '2023-04-24 03:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(200) NOT NULL,
  `ranking_count` int(11) DEFAULT 0,
  `description` text DEFAULT NULL,
  `subject_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `syllabus` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `duration`, `price`, `image`, `ranking_count`, `description`, `subject_id`, `created_at`, `syllabus`) VALUES(1, 'HTML, CSS, and Javascript for Web Developers', 40, '99.00', '/public/images/user_courses/home/img-11.jpg', 0, 'Do you realize that the only functionality of a web application that the user directly interacts with is through the web page? Implement it poorly and, to the user, the server-side becomes irrelevant! Today’s user expects a lot out of the web page: it has to load fast, expose the desired service, and be comfortable to view on all devices: from a desktop computers to tablets and mobile phones.\r\n\r\nIn this course, we will learn the basic tools that every web page coder needs to know. We will start from the ground up by learning how to implement modern web pages with HTML and CSS. We will then advance to learning how to code our pages such that its components rearrange and resize themselves automatically based on the size of the user’s screen. You’ll be able to code up a web page that will be just as useful on a mobile phone as on a desktop computer. No “pinch and zoom” required! Last but certainly not least, we will get a thorough introduction to the most ubiquitous, popular, and incredibly powerful language of the web: Javascript. Using Javascript, you will be able to build a fully functional web application that utilizes Ajax to expose server-side functionality and data to the end user.', 1, '2023-04-23 06:35:24', '/public/data/courses/HTML, CSS, and Javascript for Web Developers.json');
INSERT INTO `courses` (`id`, `name`, `duration`, `price`, `image`, `ranking_count`, `description`, `subject_id`, `created_at`, `syllabus`) VALUES(3, 'Programming Fundamentals', 18, '99.00', '/public/images/user_courses/home/img-12.jpg', 0, 'Programming is an increasingly important skill, whether you aspire to a career in software development, or in other fields. This course is the first in the specialization Introduction to Programming in C, but its lessons extend to any language you might want to learn. This is because programming is fundamentally about figuring out how to solve a class of problems and writing the algorithm, a clear set of steps to solve any problem in its class. This course will introduce you to a powerful problem-solving process—the Seven Steps—which you can use to solve any programming problem. In this course, you will learn how to develop an algorithm, then progress to reading code and understanding how programming concepts relate to algorithms.', 1, '2023-04-23 11:12:14', '/public/data/courses/Programming Fundamentals.json\"');
INSERT INTO `courses` (`id`, `name`, `duration`, `price`, `image`, `ranking_count`, `description`, `subject_id`, `created_at`, `syllabus`) VALUES(4, 'Introduction to Programming with MATLAB', 35, '99.00', '/public/images/user_courses/home/img-07.jpg', 0, 'This course teaches computer programming to those with little to no previous experience. It uses the programming system and language called MATLAB to do so because it is easy to learn, versatile and very useful for engineers and other professionals. MATLAB is a special-purpose language that is an excellent choice for writing moderate-size programs that solve problems involving the manipulation of numbers. The design of the language makes it possible to write a powerful program in a few lines. The problems may be relatively complex, while the MATLAB programs that solve them are relatively simple: relative, that is, to the equivalent program written in a general-purpose language, such as C++ or Java. As a result, MATLAB is being used in a wide variety of domains from the natural sciences, through all disciplines of engineering, to finance, and beyond, and it is heavily used in industry. Hence, a solid background in MATLAB is an indispensable skill in today’s job market.', 1, '2023-04-23 11:29:35', '/public/data/courses/matlab.json');
INSERT INTO `courses` (`id`, `name`, `duration`, `price`, `image`, `ranking_count`, `description`, `subject_id`, `created_at`, `syllabus`) VALUES(5, 'Data Analysis with R Programming', 37, '99.00', '/public/images/user_courses/detail/cu-1.jpg', 0, 'This course is the seventh course in the Google Data Analytics Certificate. These courses will equip you with the skills needed to apply to introductory-level data analyst jobs. In this course, you’ll learn about the programming language known as R. You’ll find out how to use RStudio, the environment that allows you to work with R. This course will also cover the software applications and tools that are unique to R, such as R packages. You’ll discover how R lets you clean, organize, analyze, visualize, and report data in new and more powerful ways.  Current Google data analysts will continue to instruct and provide you with hands-on ways to accomplish common data analyst tasks with the best tools and resources.', 1, '2023-04-23 11:40:49', '/public/data/courses/Data Analysis with R Programming.json');
INSERT INTO `courses` (`id`, `name`, `duration`, `price`, `image`, `ranking_count`, `description`, `subject_id`, `created_at`, `syllabus`) VALUES(6, 'Introduction to CSS3', 11, '99.00', '/public/images/user_courses/home/img-18.jpg\"', 0, 'The web today is almost unrecognizable from the early days of white pages with lists of blue links.  Now, sites are designed with complex layouts, unique fonts, and customized color schemes.   This course will show you the basics of Cascading Style Sheets (CSS3).  The emphasis will be on learning how to write CSS rules, how to test code, and how to establish good programming habits.     \r\n\r\nWhen done correctly, the styling of a webpage can take enhance your page.   When done incorrectly the result can be worse than no styling at all.    To ensure that your sites do not put up  barriers for people with cognitive and/or physical disabilities, you will learn how to evaluate pages using the standardized POUR accessibility guidelines.    Upon completion of the course, learners will be able to sketch a design for a given HTML page.  Using that design they will use CSS to implement the design by adding fonts, colors, and  layouts.    \r\n\r\nThis is the second course in the Web Design For Everybody specialization.   Subsequent courses focus on adding interaction with JavaScript and enhancing the styling with responsive design.\r\n\r\nIt will be difficult to complete this course if you do not have access to a laptop or desktop computer for the homework.', 1, '2023-04-23 11:48:06', '/public/data/courses/Introduction to CSS3.json');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

DROP TABLE IF EXISTS `enrollments`;
CREATE TABLE `enrollments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `enrollment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `user_id`, `course_id`, `enrollment_date`) VALUES(1, 11, 1, '2023-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `published_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `published_at`, `updated_at`, `created_at`) VALUES(4, 'diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent', 'imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est.            ', 'news_img4.png', '2023-04-25', '2023-04-26 14:21:34', '2023-04-26 14:19:34');
INSERT INTO `news` (`id`, `title`, `content`, `image`, `published_at`, `updated_at`, `created_at`) VALUES(5, 'dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies', 'sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit.            ', 'news_img4.png', '2023-04-05', '2023-04-26 14:22:28', '2023-04-26 14:19:34');
INSERT INTO `news` (`id`, `title`, `content`, `image`, `published_at`, `updated_at`, `created_at`) VALUES(6, 'bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum,', 'quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur            ', 'news_img4.png', '2023-03-27', '2023-04-26 14:22:30', '2023-04-26 14:19:34');
INSERT INTO `news` (`id`, `title`, `content`, `image`, `published_at`, `updated_at`, `created_at`) VALUES(7, 'ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus', 'felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris magna. Duis dignissim            ', 'news_img4.png', '2023-04-04', '2023-04-26 14:22:32', '2023-04-26 14:19:34');
INSERT INTO `news` (`id`, `title`, `content`, `image`, `published_at`, `updated_at`, `created_at`) VALUES(8, 'ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 'fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id            ', 'news_img4.png', '2023-03-31', '2023-04-26 14:22:33', '2023-04-26 14:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `order_date` date DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT '0',
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `course_id`, `order_date`, `status`, `price`) VALUES(2, 11, 5, '2023-04-27', '0', NULL);
INSERT INTO `orders` (`id`, `user_id`, `course_id`, `order_date`, `status`, `price`) VALUES(3, 11, 6, '2023-04-27', '0', NULL);
INSERT INTO `orders` (`id`, `user_id`, `course_id`, `order_date`, `status`, `price`) VALUES(4, 9, 1, '2023-04-27', '0', NULL);
INSERT INTO `orders` (`id`, `user_id`, `course_id`, `order_date`, `status`, `price`) VALUES(5, 9, 1, '2023-04-27', '0', NULL);
INSERT INTO `orders` (`id`, `user_id`, `course_id`, `order_date`, `status`, `price`) VALUES(6, 9, 1, '2023-04-27', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`) VALUES(1, 'Programming', '2023-04-08 09:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 2, '2023-04-26 13:38:43');
INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES(6, 'Daquan Bishop', '21232f297a57a5a743894a0e4a801fc3', 'ut.sagittis@yahoo.edu', 0, '2023-04-26 13:51:17');
INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES(7, 'Cullen Bullock', '21232f297a57a5a743894a0e4a801fc3', 'auctor.mauris@hotmail.edu', 0, '2023-04-26 13:51:17');
INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES(8, 'Haviva Vance', '21232f297a57a5a743894a0e4a801fc3', 'tellus@icloud.com', -1, '2023-04-26 13:51:17');
INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES(9, 'Hayley Christensen', '21232f297a57a5a743894a0e4a801fc3', 'urna.ut@protonmail.org', 0, '2023-04-26 13:51:17');
INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES(10, 'Gisela Ramirez', '21232f297a57a5a743894a0e4a801fc3', 'risus.donec.egestas@protonmail.net', -1, '2023-04-26 13:51:17');
INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created_at`) VALUES(11, 'section', '827ccb0eea8a706c4c34a16891f84e7b', 'nhanhoa21012002@gmail.com', 0, '2023-04-26 23:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT 'default-avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `age`, `phone`, `address`, `avatar`) VALUES(4, '', '', 'male', 0, '', '', 'avt_img4.jpeg');
INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `age`, `phone`, `address`, `avatar`) VALUES(6, '', '', 'male', 0, '', '', 'avt_img6.png');
INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `age`, `phone`, `address`, `avatar`) VALUES(7, NULL, NULL, NULL, NULL, NULL, NULL, 'default-avatar.png');
INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `age`, `phone`, `address`, `avatar`) VALUES(8, NULL, NULL, NULL, NULL, NULL, NULL, 'default-avatar.png');
INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `age`, `phone`, `address`, `avatar`) VALUES(9, NULL, NULL, NULL, NULL, NULL, NULL, 'default-avatar.png');
INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `age`, `phone`, `address`, `avatar`) VALUES(10, NULL, NULL, NULL, NULL, NULL, NULL, 'default-avatar.png');
INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `gender`, `age`, `phone`, `address`, `avatar`) VALUES(11, NULL, NULL, NULL, NULL, NULL, NULL, 'default-avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

DROP TABLE IF EXISTS `website_settings`;
CREATE TABLE `website_settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `logo_url` varchar(255) DEFAULT NULL,
  `favicon_url` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(20) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `site_title`, `logo_url`, `favicon_url`, `meta_description`, `meta_keywords`, `contact_email`, `contact_phone`, `contact_address`, `created_at`, `updated_at`) VALUES(1, 'Rapid Bootstrap Template - Index', 'RAPIDDD', 'images/favicon.png', '', '', 'info@example.com', '+1 5589 55488 55', 'A108 Adam Street New York, NY 535022 United States', '2023-04-10 09:56:14', '2023-04-17 04:21:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
