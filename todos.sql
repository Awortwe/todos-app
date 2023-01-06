-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 03:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todos_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE IF NOT EXISTS `todos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `name`, `description`, `completed`, `created_at`, `updated_at`) VALUES
(2, 'Nemo Consequatur Cupiditate qui ipsum.', 'Facere consectetur sed voluptatem corporis necessitatibus quis Tempore. Enim fugiat vel quia aut enim corporis dolorem porro.', 1, '2023-01-06 16:33:45', '2023-01-06 21:43:58'),
(3, 'Velit Consequuntur ea Color.', 'Quasi repellat nam iure laudantium perspiciatis ipsa vel consequatur. Sint ullam omnis inventore molestias quod eos. Eveniet maxime quisquam ad. Praesentium in atque dolor nemo itaque dolor quis.', 0, '2023-01-06 16:33:45', '2023-01-06 20:35:28'),
(4, 'Reprehenderit est corporis vero repudiandae.', 'Nam vel non molestiae architecto ad. Sint ea nihil totam reiciendis itaque recusandae. Ut cum consequatur est aut praesentium veniam accusantium. Perferendis quia earum dolorum odio iure ea.', 0, '2023-01-06 16:33:45', '2023-01-06 16:33:45'),
(5, 'Praesentium est id impedit ea.', 'Voluptatem ullam nihil velit consequatur aliquam unde cupiditate numquam. A magnam nihil repudiandae accusamus. Id laborum cum in qui minus.', 0, '2023-01-06 16:33:45', '2023-01-06 16:33:45'),
(6, 'Tempore autem a magni.', 'Debitis rerum autem rerum non eligendi. Non illum autem consequatur quisquam. Error omnis omnis similique quisquam. Hic voluptas facere ut sit iste.', 0, '2023-01-06 16:33:45', '2023-01-06 16:33:45'),
(9, 'Drive', 'Drive to the mechanic', 0, '2023-01-06 16:38:46', '2023-01-06 16:38:46'),
(10, 'School', 'Going to school on Monday', 1, '2023-01-06 20:43:53', '2023-01-06 21:44:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
