-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 03:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loanapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Account_ID` int(65) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` enum('admin','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Account_ID`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'staff1', 'nmempc', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `Loan_ID` int(11) NOT NULL,
  `LoanType_ID` int(65) NOT NULL,
  `LoanPlan_ID` int(65) NOT NULL,
  `Member_ID` int(65) NOT NULL,
  `LoanStatus` varchar(255) NOT NULL,
  `Date_Released` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_plan`
--

CREATE TABLE `loan_plan` (
  `LoanPlan_ID` int(65) NOT NULL,
  `Months` int(11) NOT NULL,
  `Interest_rate` int(11) NOT NULL,
  `Penalty_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_schedule`
--

CREATE TABLE `loan_schedule` (
  `LoanSched_ID` int(65) NOT NULL,
  `Loan_ID` int(65) NOT NULL,
  `Due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_type`
--

CREATE TABLE `loan_type` (
  `LoanType_ID` int(65) NOT NULL,
  `Type_name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_ID` int(65) NOT NULL,
  `image` varchar(50) NOT NULL,
  `signature` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cellphoneNum` varchar(11) NOT NULL,
  `age` int(20) NOT NULL,
  `birthdate` date NOT NULL,
  `birthPlace` varchar(100) NOT NULL,
  `civilstatus` enum('Single','Married','Live-In Partner','Widowed','Separated') NOT NULL,
  `religion` varchar(50) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `monthlyIncome` enum('P5000-P10,000','P10,000-P15,000','P15,000-P20,000','P20,000-P25,000') NOT NULL,
  `otherIncome` varchar(50) NOT NULL,
  `spouseName` varchar(50) NOT NULL,
  `numOfDependents` int(11) NOT NULL,
  `employedCompany` varchar(100) NOT NULL,
  `presentEmp` varchar(100) NOT NULL,
  `emergency` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `cellphoneNum2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_ID`, `image`, `signature`, `name`, `address`, `cellphoneNum`, `age`, `birthdate`, `birthPlace`, `civilstatus`, `religion`, `occupation`, `monthlyIncome`, `otherIncome`, `spouseName`, `numOfDependents`, `employedCompany`, `presentEmp`, `emergency`, `address2`, `cellphoneNum2`) VALUES
(1, 'logoo.jpg', '0', '', '', '', 0, '0000-00-00', '', '', '', '', 'P5000-P10,000', '', '', 0, '', '', '', '', ''),
(2, 'user.jpg', 'logoo.jpg', '', '', '', 0, '0000-00-00', '', '', '', '', 'P5000-P10,000', '', '', 0, '', '', '', '', ''),
(3, 'user.jpg', 'logoo.jpg', '', '', '', 0, '0000-00-00', '', '', '', '', 'P5000-P10,000', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(65) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`Loan_ID`),
  ADD KEY `LoanType_ID` (`LoanType_ID`,`LoanPlan_ID`,`Member_ID`),
  ADD KEY `Member_ID` (`Member_ID`),
  ADD KEY `LoanPlan_ID` (`LoanPlan_ID`);

--
-- Indexes for table `loan_plan`
--
ALTER TABLE `loan_plan`
  ADD PRIMARY KEY (`LoanPlan_ID`);

--
-- Indexes for table `loan_schedule`
--
ALTER TABLE `loan_schedule`
  ADD PRIMARY KEY (`LoanSched_ID`),
  ADD KEY `Loan_ID` (`Loan_ID`);

--
-- Indexes for table `loan_type`
--
ALTER TABLE `loan_type`
  ADD PRIMARY KEY (`LoanType_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Account_ID` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `Loan_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_plan`
--
ALTER TABLE `loan_plan`
  MODIFY `LoanPlan_ID` int(65) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_schedule`
--
ALTER TABLE `loan_schedule`
  MODIFY `LoanSched_ID` int(65) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_type`
--
ALTER TABLE `loan_type`
  MODIFY `LoanType_ID` int(65) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `Member_ID` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_ID` int(65) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`Member_ID`) REFERENCES `member` (`Member_ID`),
  ADD CONSTRAINT `loan_ibfk_2` FOREIGN KEY (`LoanType_ID`) REFERENCES `loan_type` (`LoanType_ID`),
  ADD CONSTRAINT `loan_ibfk_3` FOREIGN KEY (`LoanPlan_ID`) REFERENCES `loan_plan` (`LoanPlan_ID`);

--
-- Constraints for table `loan_schedule`
--
ALTER TABLE `loan_schedule`
  ADD CONSTRAINT `loan_schedule_ibfk_1` FOREIGN KEY (`Loan_ID`) REFERENCES `loan` (`Loan_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
