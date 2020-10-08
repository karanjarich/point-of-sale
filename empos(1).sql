-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2020 at 07:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empos`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accounts_name` varchar(100) NOT NULL,
  `accounts_code` varchar(100) NOT NULL,
  `accounts_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_operations`
--

CREATE TABLE `accounts_operations` (
  `accounts_operations` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `debit` varchar(100) NOT NULL,
  `credit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accounts_type`
--

CREATE TABLE `accounts_type` (
  `accounts_type` varchar(100) NOT NULL,
  `type_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `businessid` int(11) NOT NULL,
  `businessname` varchar(100) NOT NULL,
  `businessRegistration` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`businessid`, `businessname`, `businessRegistration`, `location`, `contact`, `email`, `pin`, `website`) VALUES
(1, 'GulfMax Nuetral Care Limited', '380-01000', 'Kinangop', '+254723 424257', 'gulfmaxcarelimited@gmail.com', '12', 'www.drag.co.ke');

-- --------------------------------------------------------

--
-- Table structure for table `cash_register`
--

CREATE TABLE `cash_register` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `codesid` int(11) NOT NULL,
  `codes_for` varchar(100) NOT NULL,
  `lastfigure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`codesid`, `codes_for`, `lastfigure`) VALUES
(1, 'payment', '13');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_name` varchar(100) NOT NULL,
  `customer_no` varchar(100) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `customer_location` varchar(100) DEFAULT NULL,
  `customer_address` varchar(100) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `cst_debt` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_name`, `customer_no`, `customer_phone`, `customer_location`, `customer_address`, `customer_email`, `cst_debt`) VALUES
('airbone', 'airbone', 'airbone', 'airbone', 'airbone', 'airbone', '0.00'),
('bitmos', 'bitmos', 'bitmos', 'bitmos', 'bitmos', 'bitmos', '0.00'),
('bob', 'bob', 'bob', 'bob', 'bob', 'bob', '0.00'),
('brivelo', 'brivelo', 'brivelo', 'brivelo', 'brivelo', 'brivelo', '0.00'),
('carn c', 'carn c', 'carn c', 'carn c', 'carn c', 'carn c', '0.00'),
('cartruck', 'cartruck', 'cartruck', 'cartruck', 'cartruck', 'cartruck', '0.00'),
('chopper', 'chopper', 'chopper', 'chopper', 'chopper', 'chopper', '0.00'),
('esther nakuru', 'esther nakuru', 'esther nakuru', 'esther nakuru', 'esther nakuru', 'esther nakuru', '0.00'),
('evans', 'evans', 'evans', NULL, NULL, NULL, '0.00'),
('grogon down', 'grogon down', 'grogon down', 'grogon down', 'grogon down', 'grogon down', '0.00'),
('jacker', 'jacker', 'jacker', 'jacker', 'jacker', 'jacker', '0.00'),
('john eld', 'john eld', 'john eld', 'john eld', 'john eld', 'john eld', '0.00'),
('kuku', 'kuku', 'kuku', NULL, NULL, NULL, '0.00'),
('maasai narok', 'maasai narok', 'maasai narok', 'maasai narok', 'maasai narok', 'maasai narok', '0.00'),
('maggy online', 'maggy online', 'maggy online', 'maggy online', 'maggy online', 'maggy online', '0.00'),
('main ever', 'main ever', 'main ever', 'main ever', 'main ever', 'main ever', '0.00'),
('main street', 'main street', 'main street', 'main street', 'main street', 'main street', '0.00'),
('mid plaza', 'mid plaza', 'mid plaza', 'mid plaza', 'mid plaza', 'mid plaza', '0.00'),
('moments', 'moments', 'moments', 'moments', 'moments', 'moments', '0.00'),
('murera', 'murera', 'murera', 'murera', 'murera', 'murera', '0.00'),
('mwangangi', 'mwangangi', 'mwangangi', 'mwangangi', 'mwangangi', 'mwangangi', '0.00'),
('Ngugi MPESA', 'Ngugi MPESA', 'Ngugi MPESA', 'Ngugi MPESA', 'Ngugi MPESA', 'Ngugi MPESA', '0.00'),
('Njeeris', 'Njeeris', 'Njeeris', 'Njeeris', 'Njeeris', 'Njeeris', '0.00'),
('njemwa a', 'njemwa a', 'njemwa a', 'njemwa a', 'njemwa a', 'njemwa a', '0.00'),
('Njemwa B', 'njemwa b', 'njemwa b', 'njemwa b', 'njemwa b', 'njemwa b', '0.00'),
('Online', 'Online', 'Online', 'Online', 'Online', 'Online', '0.00'),
('pae esther', 'pae esther', 'pae esther', 'pae esther', 'pae esther', 'pae esther', '0.00'),
('patel', 'patel', 'patel', 'patel', 'patel', 'patel', '0.00'),
('power lube', 'power lube', 'power lube', 'power lube', 'power lube', 'power lube', '0.00'),
('primelubes', 'primelubes', 'primelubes', 'primelubes', 'primelubes', 'primelubes', '0.00'),
('tom brake', 'tom brake', 'tom brake', 'tom brake', 'tom brake', 'tom brake', '0.00'),
('topmart', 'topmart', 'topmart', 'topmart', 'topmart', 'topmart', '0.00'),
('toshlee', 'toshlee', 'toshlee', 'toshlee', 'toshlee', 'toshlee', '0.00'),
('versitile', 'versitile', 'versitile', 'versitile', 'versitile', 'versitile', '0.00'),
('wambugu narok', 'wambugu narok', 'wambugu narok', 'wambugu narok', 'wambugu narok', 'wambugu narok', '0.00'),
('willy', 'willy', 'willy', 'willy', 'willy', 'willy', '0.00'),
('zeitu embu', 'zeitu embu', 'zeitu embu', 'zeitu embu', 'zeitu embu', 'zeitu embu', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `customers_orderdetails`
--

CREATE TABLE `customers_orderdetails` (
  `customers_orderdetailsno` int(11) NOT NULL,
  `product_no` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `unitsordered` int(11) NOT NULL,
  `customers_orderno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_orderdetails`
--

INSERT INTO `customers_orderdetails` (`customers_orderdetailsno`, `product_no`, `price`, `unitsordered`, `customers_orderno`) VALUES
(126, '45566', '10.00', 12, '195'),
(127, '45566', '10.00', 6, '196'),
(128, '45566', '10.00', 7, '204'),
(129, '45566', '10.00', 6, '205'),
(130, '45566', '10.00', 5, '208'),
(131, '45566', '10.00', 8, '209'),
(132, '45566', '10.00', 10, '210'),
(133, '45566', '10.00', 9, '212'),
(134, '45566', '10.00', 300, '213'),
(135, '45566', '10.00', 6, '214'),
(136, '45566', '10.00', 40, '222'),
(137, '45566', '10.00', 6, '223'),
(138, '45566', '10.00', 8, '225'),
(139, '45566', '10.00', 10, '226'),
(140, '45566', '10.00', 10, '226'),
(141, '1234', '90.00', 10, '226'),
(142, '1234', '90.00', 20, '226'),
(143, '1234', '90.00', 2, '227'),
(144, '45566', '10.00', 10, '228'),
(145, '1234', '90.00', 50, '228'),
(146, '1234', '90.00', 34, '230'),
(147, '1234', '90.00', 10, '233'),
(148, '1234', '90.00', 6, '234'),
(149, '45566', '10.00', 1000, '234'),
(150, '1234', '90.00', 300, '236'),
(151, '1234', '90.00', 23, '238'),
(152, '1234', '90.00', 8, '242'),
(153, 'greasered', '160.00', 1, '251');

-- --------------------------------------------------------

--
-- Table structure for table `customers_orders`
--

CREATE TABLE `customers_orders` (
  `customer_no` varchar(100) NOT NULL,
  `orderdate` varchar(100) NOT NULL,
  `orderby` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `customers_orderno` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `pre_paid` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_orders`
--

INSERT INTO `customers_orders` (`customer_no`, `orderdate`, `orderby`, `status`, `customers_orderno`, `total_amount`, `pre_paid`) VALUES
('', '2019-09-26', '', '', 192, '0.00', '0.00'),
('', '2019-09-26', '', '', 193, '0.00', '0.00'),
('', '2019-09-26', '', '', 194, '0.00', '0.00'),
('', '2019/09/26', 'admin', 'Waiting to be Delivered', 195, '120.00', '90.00'),
('', '2019/09/26', 'admin', 'Waiting to be Delivered', 196, '60.00', '0.00'),
('', '2019-09-26', '', '', 197, '0.00', '0.00'),
('', '2019-09-26', '', '', 198, '0.00', '0.00'),
('', '2019-09-26', '', '', 199, '0.00', '0.00'),
('', '2019-09-26', '', '', 200, '0.00', '0.00'),
('', '2019-09-26', '', '', 201, '0.00', '0.00'),
('', '2019-09-26', '', '', 202, '0.00', '0.00'),
('', '2019-09-26', '', '', 203, '0.00', '0.00'),
('', '2019/09/26', 'admin', 'Waiting to be Delivered', 204, '70.00', '0.00'),
('', '2019/09/26', 'admin', 'Waiting to be Delivered', 205, '60.00', '0.00'),
('', '2019/09/26', 'admin', 'Waiting to be Delivered', 206, '0.00', '0.00'),
('', '2019-09-26', '', '', 207, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 208, '50.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 209, '80.00', '0.00'),
('', '2019-09-27', '', '', 210, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 211, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 212, '90.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 213, '3000.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 214, '60.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 215, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 216, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 217, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 218, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 219, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 220, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 221, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 222, '400.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 223, '60.00', '500.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 224, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 225, '80.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 226, '2900.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 227, '180.00', '40.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 228, '4600.00', '600.00'),
('', '2019-09-27', '', '', 229, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 230, '3060.00', '0.00'),
('', '2019-09-27', '', '', 231, '0.00', '0.00'),
('', '2019-09-27', '', '', 232, '0.00', '0.00'),
('', '2019-09-27', '', '', 233, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 234, '10540.00', '5000.00'),
('', '2019-09-27', '', '', 235, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 236, '27000.00', '8000.00'),
('', '2019-09-27', '', '', 237, '0.00', '0.00'),
('', '2019/09/27', 'admin', 'Waiting to be Delivered', 238, '2070.00', '0.00'),
('', '2019-09-27', '', '', 239, '0.00', '0.00'),
('', '2019-09-29', '', '', 240, '0.00', '0.00'),
('', '2019-09-29', '', '', 241, '0.00', '0.00'),
('', '2019-10-07', '', '', 242, '0.00', '0.00'),
('', '2019-10-07', '', '', 243, '0.00', '0.00'),
('', '2019-10-12', '', '', 244, '0.00', '0.00'),
('', '2019-10-14', '', '', 245, '0.00', '0.00'),
('', '2020-09-28', '', '', 246, '0.00', '0.00'),
('', '2020-09-28', '', '', 247, '0.00', '0.00'),
('', '2020-09-28', '', '', 248, '0.00', '0.00'),
('', '2020-09-28', '', '', 249, '0.00', '0.00'),
('', '2020-09-28', '', '', 250, '0.00', '0.00'),
('', '2020/09/28', 'admin', 'Waiting to be Delivered', 251, '160.00', '0.00'),
('', '2020-09-28', '', '', 252, '0.00', '0.00'),
('', '2020-09-30', '', '', 253, '0.00', '0.00'),
('', '2020-10-06', '', '', 254, '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `debts_category`
--

CREATE TABLE `debts_category` (
  `debt_categoryno` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `frequency` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoices_no` int(11) NOT NULL,
  `invoices_date` date NOT NULL,
  `sales_no` int(11) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `expected_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payid` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `receipient` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `paid` varchar(100) NOT NULL,
  `datee` date NOT NULL,
  `biil` decimal(10,2) NOT NULL,
  `ref_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payid`, `amount`, `receipient`, `mode`, `paid`, `datee`, `biil`, `ref_no`) VALUES
(26, '3000.00', 'labourand fuel', 'CASH', 'labour', '2020-10-06', '3000.00', 'fw1'),
(27, '3500.00', 'labourand fuel', 'CASH', 'labour and fuel', '2020-10-07', '3500.00', 'f2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_name` varchar(100) NOT NULL,
  `product_no` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `buying` decimal(10,2) NOT NULL,
  `reorder_level` int(11) NOT NULL,
  `products_description` varchar(200) NOT NULL,
  `product_categoryno` int(11) NOT NULL,
  `units_in_stock` int(11) NOT NULL,
  `tax` varchar(100) NOT NULL,
  `units_ordered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_name`, `product_no`, `price`, `buying`, `reorder_level`, `products_description`, `product_categoryno`, `units_in_stock`, `tax`, `units_ordered`) VALUES
('Brake Fluid 250ml', 'b250', '65.00', '45.00', 10, 'Brake Fluid 250ml', 0, 878, '', 0),
('Brake Fluid 500ml', 'b500', '140.00', '95.00', 10, 'Brake Fluid 250ml', 0, 860, '', 0),
('coolant 20l', 'c20', '1600.00', '400.00', 10, 'coolant', 0, 2, '', 0),
('coolant green 1 L', 'cg1', '85.00', '40.00', 10, 'coolant green 1 L', 0, 428, '', 0),
('coolant green 5 L', 'cg5', '400.00', '100.00', 10, 'coolant green 5 L', 0, 840, '', 0),
('coolant Red 1 L', 'cr1', '85.00', '40.00', 10, 'coolant Red 1 L', 0, 1000, '', 0),
('coolant red 5 L', 'cr5', '500.00', '100.00', 5, 'coolant red 5 L', 0, 1000, '', 0),
('15kg Grease ', 'g15', '3600.00', '3000.00', 10, '15kg Grease ', 0, 75, '', 0),
('17kg Grease ', 'g17', '3900.00', '3200.00', 10, '17kg Grease ', 0, 6, '', 0),
('Grease K-MAX', 'gk', '160.00', '104.00', 10, 'Grease K-MAX', 0, 1512, '', 0),
('Grease Red', 'gr', '160.00', '104.00', 10, 'Grease Red', 0, 860, '', 0),
('3kg Grease Red', 'gr3', '900.00', '550.00', 17, '3kg Grease Red', 0, 627, '', 0),
('3kg k-max', 'kmax3', '850.00', '550.00', 10, '3kg k-max', 0, 80, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_categoryno` int(11) NOT NULL,
  `product_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_categoryno`, `product_category`) VALUES
(14, 'coolant'),
(15, 'grease'),
(16, 'brake fluid'),
(19, 'nyama choma');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `supplier_no` varchar(100) NOT NULL,
  `purchases_no` varchar(100) NOT NULL,
  `purchases_date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_ordersdetails`
--

CREATE TABLE `purchase_ordersdetails` (
  `purchase_ordersdetails` int(11) NOT NULL,
  `purchases_no` varchar(100) NOT NULL,
  `product_no` varchar(100) NOT NULL,
  `unitsordered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_no` int(100) NOT NULL,
  `sales_date` date NOT NULL,
  `customer_no` varchar(100) DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL,
  `vat` varchar(5) NOT NULL,
  `additional` decimal(10,2) DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `invoiced` varchar(10) DEFAULT NULL,
  `employee` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_no`, `sales_date`, `customer_no`, `total_amount`, `paid_amount`, `vat`, `additional`, `last_date`, `invoiced`, `employee`) VALUES
(98, '2020-10-05', '', '1300.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(103, '2020-10-05', '', '1600.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(104, '2020-10-05', '', '19500.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(114, '2020-10-06', '', '22440.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(116, '2020-10-06', '', '24000.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(117, '2020-10-06', '', '1300.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(146, '2020-10-07', '', '23460.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(147, '2020-10-07', '', '12800.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(148, '2020-10-07', NULL, '0.00', '0.00', '', NULL, NULL, NULL, NULL),
(149, '2020-10-07', NULL, '0.00', '0.00', '', NULL, NULL, NULL, NULL),
(150, '2020-10-07', '', '6400.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(151, '2020-10-07', NULL, '0.00', '0.00', '', NULL, NULL, NULL, NULL),
(152, '2020-10-07', '', '11520.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(153, '2020-10-07', '', '3600.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(154, '2020-10-07', '', '3600.00', '0.00', 'YES', NULL, NULL, NULL, 'admin'),
(168, '2020-10-07', NULL, '0.00', '0.00', '', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `sales_no` int(100) DEFAULT NULL,
  `product_no` varchar(100) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sales_detailsno` int(11) NOT NULL,
  `buying` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`sales_no`, `product_no`, `quantity`, `price`, `sales_detailsno`, `buying`) VALUES
(98, 'b250', 20, '65.00', 98, '45.00'),
(103, 'cg5', 4, '400.00', 103, '100.00'),
(104, 'g17', 5, '3900.00', 104, '3200.00'),
(114, 'cg1', 264, '85.00', 114, '40.00'),
(116, 'cg5', 60, '400.00', 116, '100.00'),
(117, 'b250', 20, '65.00', 117, '45.00'),
(146, 'cg1', 276, '85.00', 146, '40.00'),
(147, 'cg5', 32, '400.00', 147, '100.00'),
(150, 'c20', 4, '1600.00', 150, '400.00'),
(152, 'gr', 72, '160.00', 152, '104.00'),
(153, 'gr3', 4, '900.00', 153, '550.00'),
(154, 'g15', 1, '3600.00', 154, '3000.00');

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `stock_detailsno` int(11) NOT NULL,
  `product_no` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `stock_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`stock_detailsno`, `product_no`, `quantity`, `stock_date`) VALUES
(1, '1', 1, '2020-10-07'),
(2, '1', 3, '2020-10-08'),
(3, '1', 10, '2020-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `suppliers_name` varchar(100) NOT NULL,
  `suppliers_no` varchar(100) NOT NULL,
  `suppliers_phone` varchar(100) NOT NULL,
  `suppliers_location` varchar(100) NOT NULL,
  `suppliers_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`suppliers_name`, `suppliers_no`, `suppliers_phone`, `suppliers_location`, `suppliers_email`) VALUES
('dedan', '0706384625', '0706384625', '123', 'evans.ryanada@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_no` int(11) NOT NULL,
  `ref_no` varchar(100) NOT NULL,
  `debit` decimal(10,2) NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `transact_date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `account_category` varchar(100) NOT NULL,
  `generated_from` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_no`, `ref_no`, `debit`, `credit`, `account_no`, `transact_date`, `description`, `account_category`, `generated_from`) VALUES
(48, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(49, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(50, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(51, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(52, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(53, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(54, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(55, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(56, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(57, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(58, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(59, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(60, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(61, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(62, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(63, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(64, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(65, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(66, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(67, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(68, '98', '0.00', '1300.00', 'sales', '2020-10-05', 'Sales of goods sales no 98', 'revenue', ''),
(69, '98', '1300.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 98', 'debtors', ''),
(70, '103', '0.00', '1600.00', 'sales', '2020-10-05', 'Sales of goods sales no 103', 'revenue', ''),
(71, '103', '1600.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 103', 'debtors', ''),
(72, '104', '0.00', '19500.00', 'sales', '2020-10-05', 'Sales of goods sales no 104', 'revenue', ''),
(73, '104', '19500.00', '0.00', '', '2020-10-05', 'Sales of goods sales no 104', 'debtors', ''),
(80, '114', '0.00', '22440.00', 'sales', '2020-10-06', 'Sales of goods sales no 114', 'revenue', ''),
(81, '114', '22440.00', '0.00', '', '2020-10-06', 'Sales of goods sales no 114', 'debtors', ''),
(82, '116', '0.00', '24000.00', 'sales', '2020-10-06', 'Sales of goods sales no 116', 'revenue', ''),
(83, '116', '24000.00', '0.00', '', '2020-10-06', 'Sales of goods sales no 116', 'debtors', ''),
(84, '117', '0.00', '1300.00', 'sales', '2020-10-06', 'Sales of goods sales no 117', 'revenue', ''),
(85, '117', '1300.00', '0.00', '', '2020-10-06', 'Sales of goods sales no 117', 'debtors', ''),
(138, '143', '0.00', '100.00', 'sales', '2020-10-06', 'Sales of goods sales no 143', 'revenue', ''),
(139, '143', '100.00', '0.00', '', '2020-10-06', 'Sales of goods sales no 143', 'debtors', ''),
(149, '23', '23.00', '132.00', 'evas', '2020-10-06', 'jjjkk', 'creditors', ''),
(154, '111', '111.00', '0.00', 'expenses', '2020-10-08', 'yyyy', 'expenses', ''),
(155, '111', '0.00', '111.00', 'cash', '2020-10-08', 'yyyy', 'creditors', ''),
(156, '11', '11.00', '0.00', 'expenses', '2020-10-08', '4666', 'expenses', ''),
(157, '11', '1.00', '11.00', '11', '2020-10-08', '4666', 'creditors', ''),
(158, 'fw1', '3000.00', '0.00', 'expenses', '2020-10-06', 'labour', 'expenses', ''),
(159, 'fw1', '0.00', '3000.00', 'cash', '2020-10-06', 'labour', 'creditors', ''),
(160, '146', '0.00', '23460.00', 'sales', '2020-10-07', 'Sales of goods sales no 146', 'revenue', ''),
(161, '146', '23460.00', '0.00', '', '2020-10-07', 'Sales of goods sales no 146', 'debtors', ''),
(162, '147', '0.00', '12800.00', 'sales', '2020-10-07', 'Sales of goods sales no 147', 'revenue', ''),
(163, '147', '12800.00', '0.00', '', '2020-10-07', 'Sales of goods sales no 147', 'debtors', ''),
(164, '150', '0.00', '6400.00', 'sales', '2020-10-07', 'Sales of goods sales no 150', 'revenue', ''),
(165, '150', '6400.00', '0.00', '', '2020-10-07', 'Sales of goods sales no 150', 'debtors', ''),
(166, '152', '11520.00', '0.00', '', '2020-10-07', 'Sales of goods sales no 152', 'debtors', ''),
(167, '152', '0.00', '11520.00', 'sales', '2020-10-07', 'Sales of goods sales no 152', 'revenue', ''),
(168, '153', '0.00', '3600.00', 'sales', '2020-10-07', 'Sales of goods sales no 153', 'revenue', ''),
(169, '153', '3600.00', '0.00', '', '2020-10-07', 'Sales of goods sales no 153', 'debtors', ''),
(170, '154', '0.00', '3600.00', 'sales', '2020-10-07', 'Sales of goods sales no 154', 'revenue', ''),
(171, '154', '3600.00', '0.00', '', '2020-10-07', 'Sales of goods sales no 154', 'debtors', ''),
(172, 'f2', '3500.00', '0.00', 'expenses', '2020-10-07', 'labour and fuel', 'expenses', ''),
(173, 'f2', '0.00', '3500.00', 'cash', '2020-10-07', 'labour and fuel', 'creditors', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `userlevel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `status`, `userlevel`) VALUES
(1, 'admin', 'admin', '1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`businessid`);

--
-- Indexes for table `cash_register`
--
ALTER TABLE `cash_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`codesid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_no`);

--
-- Indexes for table `customers_orderdetails`
--
ALTER TABLE `customers_orderdetails`
  ADD PRIMARY KEY (`customers_orderdetailsno`);

--
-- Indexes for table `customers_orders`
--
ALTER TABLE `customers_orders`
  ADD PRIMARY KEY (`customers_orderno`);

--
-- Indexes for table `debts_category`
--
ALTER TABLE `debts_category`
  ADD PRIMARY KEY (`debt_categoryno`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_no`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_categoryno`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`purchases_no`);

--
-- Indexes for table `purchase_ordersdetails`
--
ALTER TABLE `purchase_ordersdetails`
  ADD PRIMARY KEY (`purchase_ordersdetails`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_no`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`sales_detailsno`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`stock_detailsno`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`suppliers_no`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `businessid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cash_register`
--
ALTER TABLE `cash_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `codesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers_orderdetails`
--
ALTER TABLE `customers_orderdetails`
  MODIFY `customers_orderdetailsno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `customers_orders`
--
ALTER TABLE `customers_orders`
  MODIFY `customers_orderno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `debts_category`
--
ALTER TABLE `debts_category`
  MODIFY `debt_categoryno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_categoryno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `purchase_ordersdetails`
--
ALTER TABLE `purchase_ordersdetails`
  MODIFY `purchase_ordersdetails` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `sales_detailsno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7945567;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `stock_detailsno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
