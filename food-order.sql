-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2021 at 07:32 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `fullname`, `username`, `password`) VALUES
(21, 'administration', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(24, 'Mains', 'Food-category_392.jpg', 'Yes', 'Yes'),
(25, 'Sides', 'Food-category_136.jpg', 'Yes', 'Yes'),
(26, 'Drinks', 'Food-category_875.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(8, 'Chicken Pizza', 'Pizza ipsum dolor amet spinach ricotta mushrooms large pizza, philly chicken steak pepperoni pineapple chicken wing pan. Black olives meatball ham string cheese, pepperoni bianca melted cheese. Chicken wing thin crust hawaiian sausage, bbq sauce pork pepperoni ranch. Sauteed onions pepperoni bbq rib mayo, ricotta melted cheese black olives large.', '5.00', 'Food-Name_367.jpg', 24, 'Yes', 'Yes'),
(9, 'Beef Burger', 'Thin crust Chicago style onions melted cheese, mayo garlic sauce stuffed white garlic fresh tomatoes. Thin crust peppers pepperoni ham, garlic parmesan bianca sauteed onions mayo bbq sauce. Meat lovers bacon & tomato philly steak banana peppers onions ham bbq chicken wing black olives ranch broccoli large white garlic extra sauce Chicago style.', '3.00', 'Food-Name_906.jpg', 24, 'Yes', 'Yes'),
(11, 'Mexican Nachos', 'Parmesan anchovies melted cheese party mozzarella bbq rib spinach meatball NY style sausage stuffed garlic sauce. Ricotta platter burnt mouth chicken and bacon lasagna spinach, ranch NY style pork pie garlic parmesan white pizza chicken. Hand tossed stuffed bbq pepperoni meatball chicken wing burnt mouth ricotta string cheese philly chicken philly steak melted cheese. Pepperoni extra sauce peppers philly steak meatball Chicago style. Banana peppers peppers pan string cheese sausage platter.', '1.00', 'Food-Name_259.jpg', 25, 'Yes', 'Yes'),
(12, 'Cheese Burger', 'Epic cheeseburgers come in all kinds of manifestations, but we want them in and around our mouth no matter what. Slide those smashed patties with the gently caramelized meat fat between a toasted brioche bun and pass it over. You fall in love with the cheeseburger itself but the journey ainâ€™t half bad either.', '3.00', 'Food-Name_590.jpg', 24, 'No', 'Yes'),
(13, 'Veg Momo', 'Sometimes we lose sight of what really matters in life. Thereâ€™s something to be said for a gourmet brie and truffle burger paired with parmesan frites, but donâ€™t let that make you forget about the olâ€™ faithful with American cheddar and a squishy bun. Lettuce remind you that cheeseburgers come in all forms - bun intended.', '1.00', 'Food-Name_452.jpg', 25, 'No', 'Yes'),
(14, 'Prawn Dumplings', 'Meat lovers sauteed onions platter philly steak. Anchovies personal melted cheese pan fresh tomatoes pepperoni parmesan. Pesto stuffed crust pork onions peppers hawaiian. Hand tossed black olives garlic deep crust meatball bbq rib pepperoni mozzarella. Personal onions beef lasagna steak party. Broccoli sausage lasagna large. Bacon & tomato Chicago style personal extra sauce ham.', '1.00', 'Food-Name_88.jpg', 25, 'No', 'Yes'),
(15, 'Buffalo Wings', 'Salami buffalo chuck turducken, sausage venison sirloin jowl beef ribs pork loin tenderloin chicken andouille brisket. Salami burgdoggen beef ribs fatback ball tip cow alcatra venison meatball hamburger short ribs biltong jerky pork loin. Chislic burgdoggen jerky kevin. Ribeye strip steak beef beef ribs. Shankle pork ham shank chicken, fatback picanha meatloaf cow kevin ground round spare ribs turkey short ribs rump', '2.00', 'Food-Name_91.jpg', 25, 'No', 'Yes'),
(16, 'Cazun Fries', 'Capicola pork belly venison, ham ball tip porchetta pig short ribs jerky sausage sirloin turkey kielbasa. Tongue ham doner pork belly. Sausage jowl prosciutto, corned beef porchetta beef ribs ground round kielbasa. Brisket pork boudin, kevin turducken cupim bacon tail pastrami porchetta kielbasa jerky chislic prosciutto.', '1.00', 'Food-Name_763.jpg', 25, 'No', 'Yes'),
(17, 'Oreo Milkshake', 'Icing lollipop sesame snaps brownie sweet marzipan. Brownie apple pie gummi bears carrot cake macaroon donut pastry. DragÃ©e jujubes chocolate bar. Tart gummies donut gummi bears. Topping liquorice tiramisu gingerbread pie. Cupcake chocolate dessert croissant chupa chups macaroon gummies fruitcake halvah. Cotton candy liquorice candy chocolate cake carrot cake', '3.00', 'Food-Name_29.jpg', 26, 'Yes', 'Yes'),
(18, 'Magical Mojito', 'Cake wafer gingerbread topping powder caramels muffin tootsie roll. Candy sesame snaps tart macaroon marzipan sesame snaps soufflÃ© caramels. Tiramisu ice cream soufflÃ© jujubes pie. Apple pie toffee danish topping. Jelly muffin jelly beans marshmallow cupcake halvah. DragÃ©e apple pie chocolate cake marshmallow fruitcake donut. Powder dessert bear claw powder chocolate tootsie roll marzipan. Danish biscuit biscuit. Gummies soufflÃ© chocolate cake liquorice dragÃ©e tootsie roll', '3.00', 'Food-Name_346.jpg', 26, 'No', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(100) UNSIGNED NOT NULL,
  `food` varchar(255) NOT NULL,
  `price` decimal(38,2) NOT NULL,
  `qty` int(100) NOT NULL,
  `total` decimal(38,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Beef Burger', '3.00', 2, '6.00', '2021-07-15 06:47:43', 'Ordered', 'Atlas Emoji', '019282822', 'atlas@email.com', '130, Yemen road, Yemen'),
(2, 'Chicken Pizza', '5.00', 4, '20.00', '2021-07-15 06:49:57', 'Delivered', 'Ryan Gosling', '0187623233', 'gosling@yahoo.com', '3rd street, Pirerbag, Indianapolis'),
(3, 'Veg Momo', '1.00', 3, '3.00', '2021-07-15 06:51:30', 'On Delivery', 'Shafiqur Rahman Istiak', '0130223223', 'shafiqbhai@mili.com', '21, Mirpur 10, Ontario, Canada'),
(4, 'Mexican Nachos', '1.00', 3, '3.00', '2021-07-15 07:35:02', 'Cancelled', 'Mimo Mike', '018272722', 'mimomike@gmail.com', 'East Road, Westeros'),
(5, 'Oreo Milkshake', '3.00', 4, '12.00', '2021-07-15 09:25:08', 'Delivered', 'Alex Perry', '0187722232', 'alexperry@gmail.com', '52,Taherbagh, New Jersey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
