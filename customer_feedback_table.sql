-- 
-- Table structure for table `customer_feedback`
--

CREATE TABLE IF NOT EXISTS `customer_feedback` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `tour_package` varchar(100) NOT NULL,
  `travel_date` date NOT NULL,
  `rating` int(1) DEFAULT 0,
  `service_rating` int(1) DEFAULT 0,
  `value_rating` int(1) DEFAULT 0,
  `positive_feedback` text DEFAULT NULL,
  `improvement_feedback` text DEFAULT NULL,
  `share_permission` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;