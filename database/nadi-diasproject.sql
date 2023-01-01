-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 12:29 AM
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
-- Database: `nadi-diasproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `text1` varchar(400) DEFAULT NULL,
  `text2` varchar(400) DEFAULT NULL,
  `text_button` varchar(256) DEFAULT NULL,
  `button_link` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `image`, `text1`, `text2`, `text_button`, `button_link`) VALUES
('d91749d5-842c-11ed-bfb0-b0227a7395f6', 0, '2022-12-25 09:18:36', '2022-12-31 09:22:39', NULL, NULL, 'banner-4.jpg', 'Big Sale, All new fashion brands items up to 70% off', 'Online Purchases Only', 'View Sale', 'category');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `title` varchar(400) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `blog_category_id` varchar(36) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(256) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tag` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `title`, `image`, `blog_category_id`, `date`, `author`, `short_description`, `description`, `tag`) VALUES
('6cd8b349-845c-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 14:57:43', NULL, NULL, NULL, 'Top New Collection', 'post-1.jpg', NULL, '2022-12-25', 'Aurora', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean pretium convallis lorem, sit amet dapibus ante mollis a. Integer bibendum interdum sem, eget volutpat purus pulvinar in. Sed tristique augue vitae sagittis porta. Phasellus ullamcorper, dolor suscipit mattis viverra, sapien elit condimentum odio, ut imperdiet nisi risus sit amet ante. Sed sem lorem, laoreet et facilisis quis, tincidunt non lorem. Etiam tempus, dolor in sollicitudin faucibus, sem massa accumsan erat.\r\n\r\n“ Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model search for evolved over sometimes by accident, sometimes on purpose ”\r\nAenean lorem diam, venenatis nec venenatis id, adipiscing ac massa. Nam vel dui eget justo dictum pretium a rhoncus ipsum. Donec venenatis erat tincidunt nunc suscipit, sit amet bibendum lacus posuere. Sed scelerisque, dolor a pharetra sodales, mi augue consequat sapien, et interdum tellus leo et nunc. Nunc imperdiet eu libero ut imperdiet.', 'Article, Chat');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `name`, `image`) VALUES
('0fd97a37-845b-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 14:49:29', NULL, NULL, NULL, 'brand5', 'brand5.png'),
('0fd9ef01-845b-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 14:49:29', NULL, NULL, NULL, 'brand6', 'brand6.png'),
('d960c371-845a-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 14:46:49', NULL, NULL, NULL, 'brand1', 'brand1.png'),
('d961124b-845a-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 14:46:49', NULL, NULL, NULL, 'brand2', 'brand2.png'),
('f33869c7-845a-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 14:48:44', NULL, NULL, NULL, 'brand3', 'brand3.png'),
('f3388956-845a-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 14:48:44', NULL, NULL, NULL, 'brand4', 'brand4.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `product_id` varchar(36) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `keyword` text DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `text1_status` tinyint(4) DEFAULT 1,
  `text1_text` varchar(150) DEFAULT NULL,
  `text2_status` tinyint(4) DEFAULT 1,
  `text2_text` varchar(100) DEFAULT NULL,
  `header_top_status` tinyint(4) NOT NULL DEFAULT 1,
  `frontend_logo_name` varchar(256) DEFAULT NULL,
  `extranet_logo_name` varchar(256) DEFAULT NULL,
  `phone` varchar(36) DEFAULT NULL,
  `header_middle_status` tinyint(4) NOT NULL DEFAULT 1,
  `guarantee_status` tinyint(4) DEFAULT 1,
  `promotion_status` tinyint(4) NOT NULL DEFAULT 1,
  `product_new_arrival_status` tinyint(4) NOT NULL DEFAULT 1,
  `support_status` tinyint(4) NOT NULL DEFAULT 1,
  `blog_status` tinyint(4) NOT NULL DEFAULT 1,
  `brand_status` tinyint(4) NOT NULL DEFAULT 1,
  `address` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `working_day` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `copyright` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `title`, `keyword`, `author`, `text1_status`, `text1_text`, `text2_status`, `text2_text`, `header_top_status`, `frontend_logo_name`, `extranet_logo_name`, `phone`, `header_middle_status`, `guarantee_status`, `promotion_status`, `product_new_arrival_status`, `support_status`, `blog_status`, `brand_status`, `address`, `email`, `working_day`, `description`, `copyright`) VALUES
('76c26f41-8397-11ed-8270-b0227a7395f6', 1, '2022-12-24 15:26:24', NULL, NULL, NULL, 'Dias Project', 'Dias Project, Ecommerce Website', NULL, 0, 'Get Up to 40% OFF New-Season Styles MEN WOMEN * Limited time only.', 0, 'FREE RETURNS. STANDARD SHIPPING ORDERS $99+', 0, '1672235346_71bbf69cc574224f678f.png', '1672235346_c4aecbdb867c4fdc7ff4.png', '+123 5678 890', 1, 0, 0, 0, 0, 0, 0, '123 Street Name, City, England', 'mail@example.com', 'Mon - Sun / 9:00 AM - 8:00 PM', 'Dias Project, Ecommerce Website', '© Dias Project. 2022. All Rights Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `exclusive`
--

CREATE TABLE `exclusive` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `text1` varchar(256) DEFAULT NULL,
  `text2` varchar(256) DEFAULT NULL,
  `text_button` varchar(256) DEFAULT NULL,
  `button_link` varchar(256) DEFAULT NULL,
  `text3` varchar(256) DEFAULT NULL,
  `text4` varchar(256) DEFAULT NULL,
  `text5` varchar(256) DEFAULT NULL,
  `text6` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exclusive`
--

INSERT INTO `exclusive` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `name`, `image`, `text1`, `text2`, `text_button`, `button_link`, `text3`, `text4`, `text5`, `text6`) VALUES
('0d4b1537-8439-11ed-bfb0-b0227a7395f6', 0, '2022-12-25 10:45:23', '2022-12-31 09:40:23', NULL, '51cd4cd0-852c-11ed-8355-b0227a7395f6', 'Fashion Deals', 'banner-5.jpg', '$100', 'OFF', 'View Sale', 'category', 'Exclusive COUPON', 'UP TO', '$100', 'OFF');

-- --------------------------------------------------------

--
-- Table structure for table `guarantee`
--

CREATE TABLE `guarantee` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `icon` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guarantee`
--

INSERT INTO `guarantee` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `icon`, `name`, `description`) VALUES
('6744363f-8400-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 03:59:46', NULL, NULL, NULL, 'icon-shipping', 'FREE SHIPPING &amp; RETURN', 'Free shipping on all orders over $99.'),
('6744577c-8400-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 03:59:46', NULL, NULL, NULL, 'icon-money', 'MONEY BACK GUARANTEE', '100% money back guarantee'),
('7e52b6c5-8400-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 04:01:23', NULL, NULL, NULL, 'icon-support', 'ONLINE SUPPORT 24/7', 'Lorem ipsum dolor sit amet.');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) DEFAULT 1,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `user_id` varchar(36) DEFAULT NULL,
  `order_number` varchar(36) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `total_discount` double DEFAULT NULL,
  `shipping_fee` double DEFAULT NULL,
  `voucher` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `user_id`, `order_number`, `total`, `total_discount`, `shipping_fee`, `voucher`) VALUES
('328c9490-89ca-11ed-829c-b0227a7395f6', 3, '2023-01-01 05:48:18', '2023-01-01 08:02:34', '004ec56b-87de-11ed-86c0-c465162ee099', '51cd4cd0-852c-11ed-8355-b0227a7395f6', '004ec56b-87de-11ed-86c0-c465162ee099', 'ORD1495334500', 2550000, NULL, NULL, NULL),
('4554c980-89c8-11ed-829c-b0227a7395f6', 1, '2023-01-01 05:34:31', '2023-01-01 05:34:31', '004ec56b-87de-11ed-86c0-c465162ee099', '004ec56b-87de-11ed-86c0-c465162ee099', '004ec56b-87de-11ed-86c0-c465162ee099', 'ORD1617872094', 1200000, NULL, NULL, NULL),
('49058660-89c9-11ed-829c-b0227a7395f6', 1, '2023-01-01 05:41:46', '2023-01-01 05:41:46', '004ec56b-87de-11ed-86c0-c465162ee099', '004ec56b-87de-11ed-86c0-c465162ee099', '004ec56b-87de-11ed-86c0-c465162ee099', 'ORD357361209', 1275000, NULL, NULL, NULL),
('eea80335-89ca-11ed-829c-b0227a7395f6', 1, '2023-01-01 05:53:34', '2023-01-01 05:53:34', '004ec56b-87de-11ed-86c0-c465162ee099', '004ec56b-87de-11ed-86c0-c465162ee099', '004ec56b-87de-11ed-86c0-c465162ee099', 'ORD336443319', 3675000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) DEFAULT 1,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `order_id` varchar(36) DEFAULT NULL,
  `product_id` varchar(36) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `total_discount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `order_id`, `product_id`, `qty`, `price`, `discount`, `total_price`, `total_discount`) VALUES
('32939364-89ca-11ed-829c-b0227a7395f6', 1, '2023-01-01 05:48:18', NULL, NULL, NULL, '328c9490-89ca-11ed-829c-b0227a7395f6', '16f00fcb-83f9-11ed-bfb0-b0227a7395f6', 1, 1500000, 20, 1200000, 300000),
('32947efe-89ca-11ed-829c-b0227a7395f6', 1, '2023-01-01 05:48:18', NULL, NULL, NULL, '328c9490-89ca-11ed-829c-b0227a7395f6', '9a349426-842b-11ed-bfb0-b0227a7395f6', 1, 1500000, 10, 1350000, 150000),
('455ac44d-89c8-11ed-829c-b0227a7395f6', 1, '2023-01-01 05:34:31', NULL, NULL, NULL, '4554c980-89c8-11ed-829c-b0227a7395f6', '16f00fcb-83f9-11ed-bfb0-b0227a7395f6', 1, 1500000, 20, 1200000, 300000),
('490da9f1-89c9-11ed-829c-b0227a7395f6', 1, '2023-01-01 05:41:46', NULL, NULL, NULL, '49058660-89c9-11ed-829c-b0227a7395f6', 'd6f282cc-842b-11ed-bfb0-b0227a7395f6', 1, 1500000, 15, 1275000, 225000),
('eeaf5366-89ca-11ed-829c-b0227a7395f6', 1, '2023-01-01 05:53:34', NULL, NULL, NULL, 'eea80335-89ca-11ed-829c-b0227a7395f6', 'd6f282cc-842b-11ed-bfb0-b0227a7395f6', 1, 1500000, 15, 1275000, 225000),
('eeb014ec-89ca-11ed-829c-b0227a7395f6', 1, '2023-01-01 05:53:34', NULL, NULL, NULL, 'eea80335-89ca-11ed-829c-b0227a7395f6', '16f00fcb-83f9-11ed-bfb0-b0227a7395f6', 2, 1500000, 20, 2400000, 600000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `product_category_id` varchar(36) DEFAULT NULL,
  `sku` varchar(256) DEFAULT NULL,
  `name` varchar(400) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` double DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `tag` text DEFAULT NULL,
  `image1` varchar(256) DEFAULT NULL,
  `image2` varchar(256) DEFAULT NULL,
  `image3` varchar(256) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `is_new_arrival` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `product_category_id`, `sku`, `name`, `rating`, `short_description`, `description`, `price`, `qty`, `discount`, `tag`, `image1`, `image2`, `image3`, `is_featured`, `is_new_arrival`) VALUES
('16f00fcb-83f9-11ed-bfb0-b0227a7395f6', 1, '2023-01-01 01:28:28', '2023-01-01 01:28:28', '51cd4cd0-852c-11ed-8355-b0227a7395f6', '51cd4cd0-852c-11ed-8355-b0227a7395f6', '7936525b-83ab-11ed-8270-b0227a7395f6', '654613612', 'Celana Wanita', 4, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris\r\n                                    placerat eleifend leo.', 1500000, 27, 20, 'CLOTHES, SWEATER', '1672557999_1afbf6727ab99256e766.jpg', '1672558108_c1af42bc10b29ca6e758.jpg', NULL, NULL, NULL),
('9a349426-842b-11ed-bfb0-b0227a7395f6', 1, '2023-01-01 05:59:38', '2023-01-01 01:29:18', '51cd4cd0-852c-11ed-8355-b0227a7395f6', '51cd4cd0-852c-11ed-8355-b0227a7395f6', '7936525b-83ab-11ed-8270-b0227a7395f6', '654613612', 'Blouse Wanita', 4, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris\r\n                                    placerat eleifend leo.', 1500000, 29, 10, 'CLOTHES, SWEATER', '1672558158_655a39db4649516b984c.webp', '1672558158_91071da6352dfe2622b1.webp', NULL, 1, 0),
('d6f282cc-842b-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 03:07:11', NULL, NULL, NULL, '7936525b-83ab-11ed-8270-b0227a7395f6', '654613612', 'Men Black Sports Shoes', 4, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris\n                                    placerat eleifend leo.', 1500000, 29, 15, 'CLOTHES, SWEATER', 'product-1.jpg', 'product-1-2.jpg', NULL, 1, 1),
('e12bcf1b-842b-11ed-bfb0-b0227a7395f6', 0, '2023-01-01 01:29:38', NULL, '51cd4cd0-852c-11ed-8355-b0227a7395f6', NULL, '7936525b-83ab-11ed-8270-b0227a7395f6', '654613612', 'Men Black Sports Shoes', 4, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris\r\n                                    placerat eleifend leo.', 1500000, 30, 13, 'CLOTHES, SWEATER', 'product-1.jpg', 'product-1-2.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `code` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `code`, `name`, `image`) VALUES
('27f728ec-89e1-11ed-829c-b0227a7395f6', 1, '2023-01-01 08:32:39', NULL, '51cd4cd0-852c-11ed-8355-b0227a7395f6', NULL, 'Test', 'Test Category', '1672583559_c7d465c8a9636591ab3d.jpg'),
('7936525b-83ab-11ed-8270-b0227a7395f6', 1, '2022-12-24 17:52:56', NULL, NULL, NULL, 'dress', 'Dress', 'category-3.jpg'),
('92fb57f1-83ab-11ed-8270-b0227a7395f6', 1, '2022-12-24 17:53:23', '2022-12-31 02:47:32', NULL, '004ec56b-87de-11ed-86c0-c465162ee099', 'watches', 'Watches', 'category-4.jpg'),
('b1d37591-83ab-11ed-8270-b0227a7395f6', 1, '2022-12-24 17:54:16', NULL, NULL, NULL, 'machine', 'Machine', 'category-6.jpg'),
('b994f43b-83aa-11ed-8270-b0227a7395f6', 1, '2022-12-24 17:47:41', NULL, NULL, NULL, 'sofa', 'Sofa', 'category-1.jpg'),
('cd03c98e-83aa-11ed-8270-b0227a7395f6', 1, '2022-12-24 17:48:00', NULL, NULL, NULL, 'headphone', 'Headphone', 'category-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `text1` varchar(256) DEFAULT NULL,
  `text2` varchar(256) DEFAULT NULL,
  `text_button` varchar(256) DEFAULT NULL,
  `button_link` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `name`, `image`, `text1`, `text2`, `text_button`, `button_link`) VALUES
('08fc36e1-840b-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 05:16:24', NULL, NULL, NULL, 'Handbag', 'banner-3.jpg', 'Handbags', 'Starting at $99', 'Shop Now', 'category'),
('e3674474-840a-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 05:12:49', NULL, NULL, NULL, 'watch', 'banner-1.jpg', 'Porto Watches', '30% OFF', 'Shop Now', 'category'),
('e36764c5-840a-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 05:12:49', NULL, NULL, NULL, 'Deal', 'banner-2.jpg', 'Deal Promos', 'Starting at $99', 'Shop Now', 'category');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `text1` varchar(256) DEFAULT NULL,
  `text2` varchar(256) DEFAULT NULL,
  `text3` varchar(256) DEFAULT NULL,
  `text4` varchar(256) DEFAULT NULL,
  `text5` varchar(256) DEFAULT NULL,
  `text_button` varchar(256) DEFAULT NULL,
  `button_link` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `name`, `image`, `text1`, `text2`, `text3`, `text4`, `text5`, `text_button`, `button_link`) VALUES
('6894bdc0-8407-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 04:48:13', '2022-12-31 06:19:31', NULL, '004ec56b-87de-11ed-86c0-c465162ee099', 'Slider Summer Sale', 'slide-1.jpg', 'Find the Boundaries. Push Through!', 'Summer Sale', '70% Off', 'Starting At', 'Rp. 250.000', 'Shop Now!', 'category'),
('689516fb-8407-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 04:48:13', NULL, NULL, NULL, 'Slider Accessories', 'slide-2.jpg', 'Extra', '20% off', 'Accessories', 'Summer Sale', NULL, 'Shop All Sale', 'category');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `icon` varchar(256) DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `name`, `icon`, `link`) VALUES
('950aab9b-83a8-11ed-8270-b0227a7395f6', 1, '2022-12-24 17:31:58', NULL, NULL, NULL, 'facebook', 'social-facebook icon-facebook', '#'),
('a8b0182c-83a8-11ed-8270-b0227a7395f6', 1, '2022-12-24 17:32:41', NULL, NULL, NULL, 'twitter', 'social-twitter icon-twitter', '#'),
('be0d24fc-83a8-11ed-8270-b0227a7395f6', 1, '2022-12-24 17:33:13', NULL, NULL, NULL, 'instagram', 'social-instagram icon-instagram', '#');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `icon` varchar(256) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `text1` varchar(400) DEFAULT NULL,
  `text2` varchar(400) DEFAULT NULL,
  `text3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `icon`, `name`, `text1`, `text2`, `text3`) VALUES
('dc8311c5-8436-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 10:29:17', NULL, NULL, NULL, 'icon-earphones-alt', 'Customer Support', 'Customer Support', 'You Won\'t Be Alone', 'We really care about you and your website as much as you do. Purchasing Porto or any other theme from us you get 100% free support.'),
('dc83272c-8436-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 10:29:17', NULL, NULL, NULL, 'icon-credit-card', 'Fully Customizable', 'Fully Customizable', 'Tons Of Options', 'With Porto you can customize the layout, colors and styles within only a few minutes. Start creating an amazing website right now!'),
('fe8fc2c1-8436-11ed-bfb0-b0227a7395f6', 1, '2022-12-25 10:31:13', NULL, NULL, NULL, 'icon-action-undo', 'Powerful Admin', 'Powerful Admin', 'Made To Help You', 'Porto has very powerful admin features to help customer to build their own shop in minutes without any special skills in web development.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime DEFAULT NULL,
  `creator_id` varchar(36) DEFAULT NULL,
  `modifier_id` varchar(36) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `role_code` tinyint(4) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `status`, `created_at`, `modified_at`, `creator_id`, `modifier_id`, `name`, `email`, `password`, `role_code`, `image`, `address`) VALUES
('004ec56b-87de-11ed-86c0-c465162ee099', 1, '2022-12-29 19:05:07', '2023-01-01 05:27:59', NULL, '004ec56b-87de-11ed-86c0-c465162ee099', 'Dodi Novembri', 'dodinovembri32@gmail.com', '$2y$10$X3FkzNW2bngKPRJVyjyKZOxZ5yb095jEAp5vVRTeBp4Lxn9wb5.Ya', 1, NULL, 'Jl. Melati No.21C, RT.13/RW.10, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530'),
('51cd4cd0-852c-11ed-8355-b0227a7395f6', 1, '2022-12-26 15:47:17', NULL, NULL, NULL, 'Dias Project', 'diasproject@gmail.com', '$2y$10$Dy439KYYQ1qI8VmbSjoEwe3cpzBt5tjmtq5Dv9OzdzkZztjI8DfHK', 0, NULL, NULL),
('62a81ac0-89a6-11ed-829c-b0227a7395f6', 0, '2023-01-01 01:32:00', NULL, NULL, NULL, 'Tri', 'triratna.trs@gmail.com', '$2y$10$BWkC3TF9Kn/l2zPBXTplBuv.CnKiZYoTRcwi55/GZvK5343oWmuN6', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exclusive`
--
ALTER TABLE `exclusive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guarantee`
--
ALTER TABLE `guarantee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
