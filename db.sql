-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for mytodo
CREATE DATABASE IF NOT EXISTS `mytodo` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mytodo`;

-- Dumping structure for table mytodo.todos
CREATE TABLE IF NOT EXISTS `todos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `completed_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mytodo.todos: ~9 rows (approximately)
INSERT INTO `todos` (`id`, `name`, `status`, `created_at`, `updated_at`, `completed_at`) VALUES
	(1, 'Field service', 'Completed', '2025-01-25 00:00:00', '2025-05-24 23:00:00', '2025-01-26 00:00:00'),
	(2, 'Field service', 'Completed', '2025-01-25 00:00:00', '2025-05-24 23:00:00', '2025-01-26 00:00:00'),
	(3, 'Prepare for the meeting', 'In progress', '2024-02-25 00:00:00', '2024-01-25 00:00:00', '2025-01-23 00:00:00'),
	(4, 'Library', 'In progress', '2024-02-25 00:00:00', '2024-01-25 00:00:00', '2025-01-23 00:00:00'),
	(5, 'Sleep', 'pending', '2024-02-25 00:00:00', '2024-01-25 00:00:00', '2025-01-23 00:00:00'),
	(6, 'Field service', 'Completed', '2025-01-25 00:00:00', '2025-05-24 23:00:00', '2025-01-26 00:00:00'),
	(7, 'Prepare for the meeting', 'In progress', '2024-02-25 00:00:00', '2024-01-25 00:00:00', '2025-01-23 00:00:00'),
	(8, 'Library', 'In progress', '2024-02-25 00:00:00', '2024-01-25 00:00:00', '2025-01-23 00:00:00'),
	(9, 'Sleep', 'pending', '2024-02-25 00:00:00', '2024-01-25 00:00:00', '2025-01-23 00:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
