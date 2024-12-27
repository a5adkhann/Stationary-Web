-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 10:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stationary`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(256) NOT NULL,
  `category_description` varchar(256) NOT NULL,
  `category_image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `category_image`) VALUES
(5, 'Books', 'Books are magical companions that transport us to new worlds, fill our minds with knowledge, and spark our imagination. They are like silent friends, offering comfort, wisdom, and adventure whenever we open their pages. Through books, we can explore farawa', 'books.png'),
(6, 'Pens', 'Pens are simple yet powerful tools that bring thoughts to life. They help us express our ideas, emotions, and creativity on paper, turning imagination into words and art. A pen can write stories, solve problems, or capture fleeting moments of inspiration. ', 'pens.png'),
(7, 'Spray-Paint', 'Spray paint is a vibrant medium that turns walls, objects, and spaces into canvases of creativity. It’s a tool for artists to express bold ideas, adding color and life with every spray. Quick and versatile, spray paint is used in everything from graffiti a', 'spray-paint.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` varchar(256) NOT NULL,
  `product_description` varchar(256) NOT NULL,
  `product_image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`) VALUES
(1, 'Art Pencil', '12', 'An art pencil is a delicate yet powerful tool that brings imagination to life on paper. It allows artists to sketch, shade, and create intricate details with precision and grace. Whether its the soft lines of a portrait or the bold strokes of a landscape, ', 'product1.jpg'),
(2, 'Desk Organizers', '35', 'Desk organizers are essential tools that bring order to the chaos of a busy workspace. They keep pens, papers, notebooks, and other essentials neatly arranged, making it easier to stay focused and productive. With their smart compartments and stylish desig', 'product2.jpg'),
(3, 'Paint Brushes ', '55', 'Paint brushes are the artists trusted companions, turning blank surfaces into vibrant expressions of creativity. Each brush, with its unique shape and size, brings different textures and strokes to life, from delicate details to bold, sweeping lines. They ', 'product3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
