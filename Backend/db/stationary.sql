-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2025 at 06:55 PM
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
(1, 'Books', 'Books are a timeless source of knowledge, inspiration, and entertainment, offering a gateway to new ideas and perspectives. They come in various forms, including fiction, non-fiction, poetry, and academic texts, catering to diverse interests and needs. Boo', 'books.png'),
(2, 'Pens', 'Pens are versatile writing instruments that play a vital role in communication, creativity, and documentation. Available in various types, such as ballpoint, fountain, gel, and rollerball, pens cater to different preferences and writing styles. Known for t', 'pens.png'),
(3, 'Spray-Paint', 'Spray paint is a versatile and convenient type of paint that comes in an aerosol can, making it easy to apply evenly without the need for brushes or rollers. It is widely used in art, DIY projects, automotive touch-ups, and industrial applications due to i', 'spray-paint.png');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(256) NOT NULL,
  `customer_email` varchar(256) NOT NULL,
  `customer_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`) VALUES
(1, 'Asad Khan', 'asad@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` varchar(256) NOT NULL,
  `product_quantity` varchar(256) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` varchar(256) NOT NULL,
  `product_description` varchar(256) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_image`, `category_id`) VALUES
(1, 'Art Pencil', '10', 'Art pencils are specialized tools used by artists, illustrators, and designers for creating detailed and expressive drawings. They come in a range of hardness levels, from soft to hard, allowing for different shading techniques, fine lines, and varied text', 'product1.jpg', 2),
(2, 'Desk Organizers', '27', 'A desk organizer is a practical and efficient tool designed to help keep workspaces tidy and well-organized. Typically made from materials like wood, plastic, or metal, desk organizers feature compartments and sections for storing pens, paper, notebooks, g', 'product2.jpg', 1),
(3, 'Paint Brushes ', '27', 'Paint brushes are essential tools for applying paint to various surfaces, allowing for both precision and creativity in artistic and practical applications. They come in a variety of shapes, sizes, and bristle types, each designed for specific tasks, from ', 'product3.jpg', 3),
(4, 'Office Calculators', '23', 'Office calculators are essential tools for performing a wide range of mathematical operations quickly and accurately in professional settings. They are commonly used for tasks such as basic arithmetic, budgeting, accounting, tax calculations, and financial', 'product5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_cpassword` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_cpassword`) VALUES
(1, 'abc', 'abc@gmail.com', '111', '111'),
(2, 'admin', 'admin@gmail.com', '111', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_with_products` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_with_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
