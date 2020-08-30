-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 12:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warsha_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(17, 'General', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `extra_images` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `price`, `qty`, `image`, `extra_images`, `short_desc`, `description`, `status`) VALUES
(20, 17, 'HAND-POURED SMALL BATCH CANDLE', 15, 10, '9762576350_candle1.png', 'candle2.png,\r\ncandle3.png,\r\ncandle4.png', 'hello', '100% soy – additive free - 8oz\r\n\r\nWhat makes soy better?\r\n\r\n-    It burns longer and doesn\'t produce as much heat\r\n\r\n-    Sustainable and renewable\r\n\r\n-    Safer & Better for your health (Produces 90% less soot than regular Paraffin candles)\r\n\r\n-    Won\'t ruin your walls', 0),
(21, 17, 'HAND MADE SOAP <br>[LAVENDAR]', 6, 10, '3524730079_soapbar1.png', 'soapbar-1-2.png', '', 'Our lavender soap is hand made with real pieces of lavender!\r\n\r\nSoothes and exfoliates your skin while relaxing your body and mind and soul.\r\n\r\nThe Power of Lavender:\r\n\r\n-	Detoxifies your skin\r\n\r\n-	Soothes eczema and dry skin\r\n\r\n-	Anti-inflammatory \r\n\r\n-	Prevents Wrinkles', 0),
(22, 17, 'ALL NATURAL BEESWAX LIP-BALM', 5, 123, '6758028107_lipbalm1.png', '', '', '0.5oz\r\n\r\nOur all-natural, chemical free lip balm moisturizes and leaves your lips feeling soft and revitalized. Infused with a hint of citrus essential oils which boost mood, provide antioxidant protection, relieves stress on your immune system, boosts energy and eases anxiety. \r\n\r\nIngredients: Organic Beeswax, Premium citrus essential oil blend, organic coconut oil.\r\n\r\nWhy Beeswax?\r\n\r\n-	Totally natural: can’t damage your skin in any way\r\n\r\n-	Great emollient for dry skin: soothes any discomfort on your skin\r\n\r\n-	Forms a protective barrier: locks in your skins moisture\r\n\r\n-	Great source of Vitamin A\r\n\r\n-Attracts water molecules: helps your skin get the essential moisture it needs\r\n\r\n<b>Free of petrolatum, parabens, phthalates and SLS</b>', 0),
(24, 17, 'ALL-NATURAL PREMIUM BEARD OIL <br> [SANDALWOOD]', 12, 123, '7979934538_beardoil1.png', '', '', 'Our all-natural premium beard oil helps condition and hydrate your skin, while adding a glimmer to your beard. \r\n\r\nPrevents itchiness and flaking with our unique blend of jojoba oil, sweet almond oil, sandalwood and peppermint essential oil.\r\n\r\nIngredients: Premium Organic Sandalwood, Organic Jojoba Oil, Organic Sweet Almond Oil\r\n\r\nWalk around with the subtle yet refreshing smell of sandalwood with you. \r\n\r\nBenefits of Jojoba Oil include:\r\n\r\n-	Nutritious for skin: Full of nutrients like Vitamin E and B as well as anti oxidants like chromium, copper and zinc\r\n\r\n-	Anti Aging: Shown to increase the skin’s suppleness and facial lines\r\n\r\n-	Anti-Microbial\r\n\r\n-	Deep Hydration & Long-lasting moisturization', 0),
(25, 17, 'ALL-NATURAL ROOM MIST', 10, 230, '488627957_Calm_spray.png', '', '', '2 oz\r\n\r\nRelax and let go, with our all natural, chemical-free calming room mist. \r\n\r\nOne spritz of our room mist will convert any room into a space of calm. Or spray it on your pillow for a better night’s sleep.\r\n\r\nMade with a few simple ingredients: witch hazel, filtered water, and essential oils (peppermint, lavender, lime, tangerine). A beautiful blend to help you de-stress and relax. \r\n\r\nSafe to use in any space, on any clothing and even on your body! Just shake, spray and enjoy!', 0),
(26, 17, 'HAND MADE SOAP <br>[POMEGRANATE]', 6, 3230, '8575509335_soapbar2.png', 'soapbar-1-2.png', '', 'Our pomegranate soap is hand made with real pieces of rose!\r\n\r\nSoothes and exfoliates your skin while relaxing your body and mind and soul.', 0),
(27, 17, 'HAND-MADE SOAP <br>[GREEN TEA & CUCUMBER]', 6, 1230, '7281537445_soapbar3.jpg', '', '', 'Our green tea and cucumber soap is hand made with real pieces of chamomile!\r\n\r\nSoothes and exfoliates your skin while relaxing your body and mind and soul.', 0),
(28, 17, 'HAND-MADE MINI DINO SOAP SOAP <br>[GREEN TEA & CUCUMBER]', 6, 123, '518234743_babysoap1.png', '', '', 'Our green tea and cucumber soap is hand made and poured into mini dinosaur molds.\r\n\r\nSoothes and exfoliates your skin while relaxing your body and mind and soul.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `test_products`
--

CREATE TABLE `test_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_products`
--

INSERT INTO `test_products` (`id`, `name`, `price`, `qty`, `description`, `image`) VALUES
(1, 'potato', 3, 0, 'These potatoes were born in PEI', 'potato.jpg'),
(2, 'shoe', 13, 0, 'These shoes were made by monkeys', 'shoe.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_products`
--
ALTER TABLE `test_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `test_products`
--
ALTER TABLE `test_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
