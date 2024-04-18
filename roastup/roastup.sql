-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 03:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roastup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `item_details` varchar(100) NOT NULL,
  `totalcost` int(8) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `itemtype` varchar(255) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `cost` decimal(10,2) NOT NULL,
  `itemimage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `itemtype`, `itemname`, `description`, `cost`, `itemimage`) VALUES
(101, 'veg', 'Veg Fried Rice', 'Veg Fried Rice is an Asian dish made by stir-frying cooked rice', '199.00', 0x6d656e752f7665672d312e6a7067),
(102, 'veg', 'Veg Manchuria', 'Veg Manchuria is a Chinese dish made with mixed vegetables', '199.00', 0x6d656e752f7665672d322e6a7067),
(103, 'veg', 'Baby Corn Rice', 'Baby Corn Rice is a vegetarian fried rice dish made with baby corn', '199.00', 0x6d656e752f7665672d332e6a706567),
(104, 'veg', 'Mushroom Biryani', 'Mushroom Biryani is a rice dish made with mushrooms and spices', '219.00', 0x6d656e752f7665672d342e6a706567),
(105, 'veg', 'Paneer Biryani', 'Paneer Biryani is a fragrant rice dish made with paneer (cottage cheese) and spices', '229.00', 0x6d656e752f7665672d352e6a706567),
(106, 'nonveg', 'CHICKEN ROAST BIRYANI', 'Chicken Roast Biryani is a flavorful rice dish made with roasted chicken pieces', '249.00', 0x6d656e752f6e6f6e7665672d312e6a706567),
(107, 'nonveg', 'CHICKEN DUM BIRYANI', 'Chicken Dum Biryani is a classic Indian dish made with marinated chicken and fragrant rice', '249.00', 0x6d656e752f6e6f6e7665672d322e6a706567),
(108, 'nonveg', 'MUTTON DUM BIRYANI', '\'Mutton Dum Biryani is a rich and aromatic rice dish made with tender mutton pieces and spices', '399.00', 0x6d656e752f6e6f6e7665672d332e6a706567),
(109, 'nonveg', 'CHICKEN LOLLIPOP BIRYANI', 'Chicken Lollipop is a popular appetizer made with chicken wings coated in a spicy batter', '249.00', 0x6d656e752f6e6f6e7665672d342e6a706567),
(110, 'nonveg', 'PRAWNS BIRYANI', 'Prawns biryani with step by step pictures. Spicy prawn dum biryani made with rice, masala prawns layered and cooked on dum.', '399.00', 0x6d656e752f6e6f6e7665672d352e6a7067),
(111, 'nonveg', 'FULL JOINT BIRYANI', ' full joint chicken biryani just had bagara rice, full chicken joint and a fried egg', '299.00', 0x6d656e752f6e6f6e7665672d362e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `user` varchar(100) NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `userid` varchar(100) NOT NULL,
  `id` int(4) NOT NULL,
  `qty` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
