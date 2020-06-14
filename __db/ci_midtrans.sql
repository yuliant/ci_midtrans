-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2020 at 01:36 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_midtrans`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_requesttransaksi`
--

CREATE TABLE `tbl_requesttransaksi` (
  `id` int(11) NOT NULL,
  `status_code` varchar(3) NOT NULL,
  `status_message` varchar(50) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `gross_amount` decimal(20,2) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `transaction_time` datetime NOT NULL,
  `transaction_status` varchar(40) NOT NULL,
  `bank` varchar(40) NOT NULL,
  `va_number` varchar(40) NOT NULL,
  `fraud_status` varchar(40) NOT NULL,
  `bca_va_number` varchar(40) NOT NULL,
  `permata_va_number` varchar(40) NOT NULL,
  `pdf_url` varchar(200) NOT NULL,
  `finish_redirect_url` varchar(200) NOT NULL,
  `bill_key` varchar(20) NOT NULL,
  `biller_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_requesttransaksi`
--

INSERT INTO `tbl_requesttransaksi` (`id`, `status_code`, `status_message`, `transaction_id`, `order_id`, `gross_amount`, `payment_type`, `transaction_time`, `transaction_status`, `bank`, `va_number`, `fraud_status`, `bca_va_number`, `permata_va_number`, `pdf_url`, `finish_redirect_url`, `bill_key`, `biller_code`) VALUES
(1, '201', 'Success, transaction is found', '3aca1a8b-4fa7-4b70-baf8-823195c7ccb1', '1461978033', '10000.00', 'bank_transfer', '2020-06-01 09:57:55', 'settlement', 'bca', '81586583604', 'accept', '81586583604', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/46f4123b-cbf1-4a06-ba9b-fc6c5d6ec376/pdf', 'http://example.com?order_id=1461978033&status_code=201&transaction_status=pending', '-', '-'),
(2, '201', 'Success, transaction is found', '8e38191c-5dcc-4117-a717-5d09581a65ca', '1412726063', '10000.00', 'bank_transfer', '2020-06-01 10:00:40', 'settlement', 'bca', '81586292405', 'accept', '81586292405', '-', 'https://app.sandbox.midtrans.com/snap/v1/transactions/6f4e48d9-7320-40f1-9b15-eef746138008/pdf', 'http://example.com?order_id=1412726063&status_code=201&transaction_status=pending', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_requesttransaksi`
--
ALTER TABLE `tbl_requesttransaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_requesttransaksi`
--
ALTER TABLE `tbl_requesttransaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
