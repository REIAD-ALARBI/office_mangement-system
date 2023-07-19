-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 05:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `officedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(10) NOT NULL,
  `departmentName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `departmentName`) VALUES
(1, 'IT'),
(2, 'Accountant'),
(3, 'information'),
(5, 'it'),
(6, 'management'),
(7, 'marketing');

-- --------------------------------------------------------

--
-- Table structure for table `expenditures`
--

CREATE TABLE `expenditures` (
  `ID` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `DESCRIPTION` varchar(50) NOT NULL,
  `EXPENSE_TYPE` varchar(20) NOT NULL,
  `AMOUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenditures`
--

INSERT INTO `expenditures` (`ID`, `DATE`, `DESCRIPTION`, `EXPENSE_TYPE`, `AMOUNT`) VALUES
(4, '2022-05-28', 'Network resources', 'Salary', 2500),
(5, '2022-05-29', 'Manager Monthly Payment ', 'Salary', 2000),
(6, '2022-05-30', 'Workers Monthly Payments', 'Salary', 4000),
(7, '2022-05-28', 'USER TAX', 'PAYMENT', 2400),
(8, '2022-06-01', 'Company Network System', 'Payment', 3000),
(1234, '2022-06-21', 'something else', 'whatever', 232333);

-- --------------------------------------------------------

--
-- Table structure for table `logof`
--

CREATE TABLE `logof` (
  `ID` int(11) NOT NULL,
  `ACCOUNT` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `DESCRIPTION` varchar(20) NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `INCOME_MONEY_IN` int(11) NOT NULL,
  `EXPENSE_MONEY_OUT` int(11) NOT NULL,
  `OVERALL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logof`
--

INSERT INTO `logof` (`ID`, `ACCOUNT`, `DATE`, `DESCRIPTION`, `CATEGORY`, `INCOME_MONEY_IN`, `EXPENSE_MONEY_OUT`, `OVERALL`) VALUES
(1, 'Cash', '2022-05-10', 'Beginning Balance', 'Balance', 750000, 300, 7500000),
(2, 'CREDIT', '2022-05-25', 'BEGINNING BALANCE', 'BALANCE', 100000, 100000, 1000000),
(123, 'account', '2022-06-14', 'something', 'category', 1300, 500, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(10) NOT NULL,
  `employee` varchar(20) NOT NULL,
  `task` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `dueDate` date NOT NULL,
  `priority` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `employee`, `task`, `description`, `dueDate`, `priority`) VALUES
(4, 'zakaria', 'LOGOUT', 'create logout page', '2022-06-14', 'urgent'),
(5, 'REIAD', 'login page', 'create basic html login page', '2022-06-05', 'urgent'),
(8, 'ibrahem', 'database', 'create a table for users', '2022-06-12', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Id` int(11) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `detail_info` varchar(255) NOT NULL,
  `amount` int(30) NOT NULL,
  `balance` int(30) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Id`, `purpose`, `detail_info`, `amount`, `balance`, `stat`, `date`, `time`, `username`) VALUES
(1, 'Salary', 'not sure', 500, 5000000, 'Income', '2022-05-24', '00:00:00', 'User'),
(7, 'bills', 'mklo', 300, 5000300, 'Income', '2022-05-24', '23:38:27', 'User'),
(8, 'purchase', 'new hardware updates', 120000, 4880300, 'Expense', '2022-05-27', '12:15:58', 'User'),
(9, 'others', 'not sure', 12444, 4892744, 'Income', '2022-06-02', '14:45:04', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNumber` varchar(30) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `visitation` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `surname`, `userName`, `password`, `role`, `email`, `phoneNumber`, `salary`, `visitation`) VALUES
(48, 'REIAD', 'ALARBI', 'admin', '1234', 'admin', '19700751@emu.edu.tr', '2147483647', '2000', 18),
(49, 'amro', 'alzahar', 'accountant', '1234', 'accountant', 'amro@gmail.com', '6543355', '2500', 6),
(50, 'ibrahem', 'ali', 'ibrahem', '1234', 'employee', 'ibrahem@gmail.com', '2147483647', '20000000', 4),
(51, 'ZAKARIA', 'NASHWAN', 'zakaria', '1234', 'user', 'zakaria@emu.edu.tr', '2147483647', '2500', 1),
(52, 'MAHMUD', 'RAMADAN', 'marketer', '1234', 'Marketer', 'mahmud@rrr.com', '2147483647', '2500', 4),
(53, 'ramadan', 'alarbi', 'ramadan', '1234', 'employee', 'ramadan@gmail.com', '0911236778', '220000', 1),
(54, 'rawad', 'alarbi', 'rawad', '1234', 'user', 'rawad@gmail.cpm', '09122333122', '2000', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `expenditures`
--
ALTER TABLE `expenditures`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logof`
--
ALTER TABLE `logof`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
