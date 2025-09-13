-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2025 at 03:43 AM
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
-- Database: `hrisystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL DEFAULT ' ',
  `password` varchar(100) NOT NULL DEFAULT ' ',
  `role` varchar(100) NOT NULL DEFAULT ' ',
  `employee_position` varchar(100) NOT NULL DEFAULT ' ',
  `employee_department` varchar(100) NOT NULL DEFAULT ' ',
  `employee_salarygrade` varchar(100) NOT NULL DEFAULT ' ',
  `employee_salarystep` varchar(100) NOT NULL DEFAULT ' ',
  `employee_salarycos` varchar(100) NOT NULL DEFAULT ' ',
  `employee_type` varchar(100) NOT NULL DEFAULT ' ',
  `employee_status` varchar(100) NOT NULL DEFAULT ' ',
  `employee_start` varchar(100) NOT NULL DEFAULT ' ',
  `employee_active` varchar(100) NOT NULL DEFAULT ' ',
  `employee_history` varchar(100) NOT NULL DEFAULT ' ',
  `dated` varchar(100) NOT NULL DEFAULT ' '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id`, `employee_id`, `password`, `role`, `employee_position`, `employee_department`, `employee_salarygrade`, `employee_salarystep`, `employee_salarycos`, `employee_type`, `employee_status`, `employee_start`, `employee_active`, `employee_history`, `dated`) VALUES
(1, '041197', '123456789', 'Admin', 'MIS Staff', 'COLLEGE OF INFORMATION TECHNOLOGY', ' 11', '2', '503/Day', 'Non-Teaching Staff', 'COS/JO', '2021-03-08', 'Active', ' ', ' '),
(2, '00059', '123456789', 'Staff', 'Computer Programmer II', 'COLLEGE OF INFORMATION TECHNOLOGY', '26', '1', '', 'Non-Teaching Staff', 'Contractual', '2021-06-23', 'Active', ' ', ' '),
(3, '00060', '123456789', 'Dean', 'MIS Head', 'CULTURAL OFFICE', '20', '4', ' ', 'Non-Teaching Staff', 'Permanent', '2021-06-23', 'Active', ' ', ' '),
(4, '00001', 'TrSUk', 'Secretary', 'ADMIN', 'COLLEGE OF INFORMATION TECHNOLOGY', '10', '8', ' ', 'Non-Teaching Staff', 'COS/JO', '2021-07-13', 'Active', ' ', ' '),
(5, '032796', '84hdJ', 'Staff', 'Administrative Aide I', 'MANAGEMENT INFORMATION SYSTEM', ' ', ' ', '503/Day', 'Non-Teaching Staff', 'COS/JO', '2021-07-13', 'Active', ' ', ' '),
(6, '000011', 'b47Hm', 'Admin', 'asd', 'MANAGEMENT INFORMATION SYSTEM', '2', '4', ' ', 'Teaching Staff', 'Casual', '2021-07-13', 'Active', ' ', ' '),
(7, '00012_', 'eYuAC', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(8, '00012_', 'NhC1F', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(9, '00012_', 'By9IO', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(10, '00012_', 'TuSZN', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(11, '00012_', 'PgRlh', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(12, '00012_', 'BY32v', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(13, '00012_', '8LhPy', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(14, '00012_', 'Srtqc', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(15, '00012_', 'MdoEL', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(16, '00012_', '59lYU', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(17, '00012_', 'pJswz', 'Staff', 'ASAAAA', 'COLLEGES OF ARTS AND SCIENCES', ' ', ' ', '50,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-15', 'Active', ' ', ' '),
(18, '041562', 'AYs9t', 'Admin', 'was', 'ALUMNI OFFICE', ' ', ' ', '5,000.00', 'Non-Teaching Staff', 'COS/JO', '2021-07-22', 'Active', ' ', ' '),
(19, '123', '9gd6m', 'Admin', 'was', 'CULTURAL OFFICE', '1', '1', ' ', 'Teaching Staff', 'Casual', '2021-07-29', 'Active', ' ', ' '),
(20, '213', 'zWkue', 'Secretary', 'was', 'CULTURAL OFFICE', '9', '2', ' ', 'Teaching Staff', 'Contractual', '2021-07-19', 'Active', ' ', ' '),
(21, '123123', 'UDQCg', 'Dean', 'was', 'CULTURAL OFFICE', ' ', ' ', '131,231.00', 'Teaching Staff', 'COS/JO', '2021-07-22', 'Active', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `dept_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_code`) VALUES
(1, 'COLLEGE OF INFORMATION TECHNOLOGY', 'CIT'),
(2, 'COLLEGE OF TECHNOLOGY', 'COT'),
(3, 'COLLEGE OF ENGINEERING', 'COE'),
(4, 'COLLEGES OF ARTS AND SCIENCES', 'CAS'),
(5, 'COLLEGE OF MANAGEMENT', 'COM'),
(6, 'COLLEGE OF EDUCATION', 'CE'),
(7, 'COLLEGE OF LAW', 'CLAW'),
(8, 'COLLEGE OF GRADUATE STUDIES', 'GCS'),
(9, 'CHANCELLORS OFFICE', 'CHANCELLORS'),
(10, 'HUMAN RESOURCES OFFICE', 'HR'),
(11, 'RESEARCH OFFICE', 'RESEARCH'),
(12, 'BAO OFFICE', 'BAO'),
(13, 'ALUMNI OFFICE', 'ALUMNI'),
(14, 'NSTP OFFICE', 'NSTP'),
(15, 'LIBRARY OFFICE', 'LIBRARY'),
(16, 'FAD OFFICE', 'FAD'),
(17, 'ADMINISTRATIVE SERVICES OFFICE', 'ADMINISTRATIVE'),
(18, 'NTA OFFICE', 'NTA'),
(19, 'CULTURAL OFFICE', 'CULTURAL'),
(20, 'SPORTS OFFICE', 'SPORTS'),
(21, 'FINANCE OFFICE', 'FINANCE'),
(22, 'INSTRUCTION OFFICE', 'INSTRUCTION'),
(23, 'EXTENSION OFFICE', 'EXTENSION'),
(24, 'CBAC OFFICE', 'CBAC'),
(25, 'RECORDS OFFICE', 'RECORDS'),
(26, 'MANAGEMENT INFORMATION SYSTEM', 'MIS'),
(27, 'ADMISSION OFFICE', 'ADMISSION'),
(28, 'CASHIER OFFICE', 'CASHIER'),
(29, 'MOTORPOOL OFFICE', 'MOTORPOOL'),
(30, 'SUPPLY OFFICE', 'SUPPLY '),
(31, 'PLANNING OFFICE', 'PLANNING'),
(32, 'IQAS OFFICE', 'IQAS'),
(33, 'COA OFFICE', 'COA'),
(34, 'PUBLICATION OFFICE', 'PUBLICATION'),
(35, 'SAS OFFICE', 'SAS'),
(36, 'CLINIC OFFICE', 'CLINIC'),
(37, 'AUXILLARY OFFICE', 'AUXILLARY');

-- --------------------------------------------------------

--
-- Table structure for table `emp_child`
--

CREATE TABLE `emp_child` (
  `child_id` int(11) NOT NULL,
  `child_name` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate` varchar(100) NOT NULL DEFAULT ' ',
  `child_name1` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate1` varchar(100) NOT NULL DEFAULT ' ',
  `child_name2` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate2` varchar(100) NOT NULL DEFAULT ' ',
  `child_name3` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate3` varchar(100) NOT NULL DEFAULT ' ',
  `child_name4` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate4` varchar(100) NOT NULL DEFAULT ' ',
  `child_name5` varchar(225) NOT NULL DEFAULT ' ',
  `child_birthdate5` varchar(225) NOT NULL DEFAULT ' ',
  `child_name6` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate6` varchar(100) NOT NULL DEFAULT ' ',
  `child_name7` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate7` varchar(100) NOT NULL DEFAULT ' ',
  `child_name8` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate8` varchar(100) NOT NULL DEFAULT ' ',
  `child_name9` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate9` varchar(100) NOT NULL DEFAULT ' ',
  `child_name10` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate10` varchar(100) NOT NULL DEFAULT ' ',
  `child_name11` varchar(100) NOT NULL DEFAULT ' ',
  `child_birthdate11` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_child`
--

INSERT INTO `emp_child` (`child_id`, `child_name`, `child_birthdate`, `child_name1`, `child_birthdate1`, `child_name2`, `child_birthdate2`, `child_name3`, `child_birthdate3`, `child_name4`, `child_birthdate4`, `child_name5`, `child_birthdate5`, `child_name6`, `child_birthdate6`, `child_name7`, `child_birthdate7`, `child_name8`, `child_birthdate8`, `child_name9`, `child_birthdate9`, `child_name10`, `child_birthdate10`, `child_name11`, `child_birthdate11`, `account_id`) VALUES
(1, ' a', '04/11/1997', ' a', '', ' a', '', ' a', '', ' a', '', ' a', '', ' a', '', ' a', '', ' a', '', ' a', '', ' a', '', ' a', '', 1),
(2, ' A1', ' A1', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', 2),
(3, ' a', '12/31/23__', ' a', '12/31/2321', ' a', '12/31/2312', ' a', '12/31/2312', ' a', '12/31/2___', ' a', '12/31/23__', ' a', '12/31/23__', ' a', '12/31/23__', ' a', '12/31/23__', ' a', '12/31/23__', ' a', '12/31/231_', ' a', '23/12/3123', 3),
(4, ' a', ' ', ' a', ' ', ' a', ' ', ' a', ' ', ' a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', 4),
(5, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(6, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(7, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(8, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(9, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(10, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(11, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(12, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(13, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(14, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(15, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(16, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(17, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(18, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(19, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(20, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(21, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_credit`
--

CREATE TABLE `emp_credit` (
  `cre_id` int(11) NOT NULL,
  `cre_days` varchar(225) NOT NULL,
  `cre_vearned` varchar(225) NOT NULL,
  `cre_vwpay` varchar(225) NOT NULL,
  `cre_vbalance` varchar(225) NOT NULL,
  `cre_vwopay` varchar(225) NOT NULL,
  `cre_searned` varchar(225) NOT NULL,
  `cre_swpay` varchar(225) NOT NULL,
  `cre_sbalance` varchar(225) NOT NULL,
  `cre_swopay` varchar(225) NOT NULL,
  `month_date` varchar(11) NOT NULL,
  `cre_type` varchar(225) NOT NULL,
  `cre_datefrom` varchar(225) NOT NULL,
  `cre_dateto` varchar(225) NOT NULL,
  `cre_status` varchar(225) NOT NULL,
  `leave_id` varchar(225) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_credit`
--

INSERT INTO `emp_credit` (`cre_id`, `cre_days`, `cre_vearned`, `cre_vwpay`, `cre_vbalance`, `cre_vwopay`, `cre_searned`, `cre_swpay`, `cre_sbalance`, `cre_swopay`, `month_date`, `cre_type`, `cre_datefrom`, `cre_dateto`, `cre_status`, `leave_id`, `account_id`) VALUES
(1, '', '1.25', '', '66.38', '', '1.25', '', '66.50', '', 'January', '', '', '', 'Approved', '1', 5),
(2, '', '1.25', '', '57.63', '', '1.25', '', '67.75', '', 'February', '', '', '', 'Approved', '5', 4),
(3, '2', '', '', '57.63', '', '', '2', '65.75', '', '', 'Sick', '2021-07-01 ', '2021-08-31', 'Approved', '8', 2),
(4, '4', '', '', '57.63', '', '', '', '61.75', '4', '', 'Sick', '2021-09-02 ', '2021-06-16', 'Approved', '3', 2),
(5, '1', '', '', '57.63', '', '', '1', '60.75', '', '', 'Sick', '2021-08-18 ', '2021-08-29', 'Approved', '6', 2),
(6, '1', '', '', '57.63', '', '', '', '60.75', '', '', 'Maternity', '2021-09-28 ', '2021-07-01', 'Approved', '', 2),
(7, '1', '', '1', '56.63', '', '', '', '60.75', '', '', 'Vacation', '2021-07-01 ', '2021-08-31', 'Approved', '', 3),
(8, '4', '', '', '57.63', '', '', '4', '56.75', '', '', 'Sick', '2021-09-02 ', '2021-06-16', 'Approved', '', 2),
(9, '1', '', '', '57.63', '', '', '', '55.75', '1', '', 'Sick', '2021-08-18 ', '2021-08-29', 'Approved', '', 2),
(10, '1', '', '', '57.63', '', '', '', '55.75', '', 'January', 'Maternity', '2021-09-28 ', '2021-07-01', 'Approved', '', 1),
(11, '1', '', '1', '55.63', '', '', '', '60.75', '', 'January', 'Vacation', '2021-07-19 ', '2021-07-19', 'Approved', '30', 3),
(12, '1', '', '', '57.63', '', '', '1', '54.75', '', '', 'Sick', '2021-07-12 ', '2021-07-12', 'Approved', '33', 1),
(13, '', '', '', '', '', '', '', '5', '', '', '', '', '', 'Approved', '', 6),
(14, '1', '', '', '55.63', '', '', '', '60.75', '', '', 'Maternity', '2021-07-08 ', '2021-07-08', 'Approved', '28', 3),
(15, '1', '', '', '56.63', '1', '', '', '55.75', '', '', 'Vacation', '2021-07-01 ', '2021-08-31', 'Approved', '1', 2),
(16, '', '1.25', '', '57.88', '', '1.25', '', '57', '', '', '', '', '', 'Approved', '', 2),
(17, '', '1.25', '', '57.88', '', '1.25', '', '57', '', '', '', '', '', 'Approved', '', 2),
(18, '', '1.25', '', '59.13', '', '1.25', '', '58.25', '', '', '', '', '', 'Approved', '', 2),
(19, '', '1.25', '', '59.13', '', '1.25', '', '58.25', '', '', '', '', '', 'Approved', '', 2),
(20, '', '1.25', '', '59.13', '', '1.25', '', '58.25', '', '', '', '', '', 'Approved', '', 2),
(21, '', '1.25', '', '60.38', '', '1.25', '', '59.5', '', '', '', '', '', 'Approved', '', 2),
(22, '', '1.25', '', '61.63', '', '1.25', '', '60.75', '', '', '', '', '', 'Approved', '', 2),
(23, '', '1.25', '', '61.63', '', '1.25', '', '60.75', '', '', '', '', '', 'Approved', '3', 2),
(24, '', '1.25', '', '62.88', '', '1.25', '', '62', '', '', '', '', '', 'Approved', '', 2),
(25, '', '1.25', '', '62.88', '', '1.25', '', '62', '', '', '', '', '', 'Approved', '', 2),
(26, '', '1.25', '', '62.88', '', '1.25', '', '62', '', '', '', '', '', 'Approved', '', 2),
(27, '', '1.25', '', '64.13', '', '1.25', '', '63.25', '', '', '', '', '', 'Approved', '', 2),
(28, '', '1.25', '', '65.38', '', '1.25', '', '64.5', '', '', '', '', '', 'Approved', '', 2),
(29, '', '1.25', '', '65.38', '', '1.25', '', '64.5', '', '', '', '', '', 'Approved', '', 2),
(30, '', '1.25', '', '66.63', '', '1.25', '', '65.75', '', '', '', '', '', 'Approved', '', 2),
(31, '', '1.25', '', '67.88', '', '1.25', '', '67', '', '', '', '', '', 'Approved', '', 2),
(32, '', '1.25', '', '69.13', '', '1.25', '', '68.25', '', '', '', '', '', 'Approved', '', 2),
(33, '', '1.25', '', '70.38', '', '1.25', '', '69.5', '', '', '', '', '', 'Approved', '', 2),
(34, '', '1.25', '', '71.63', '', '1.25', '', '70.75', '', 'July', '', '', '', 'Approved', '', 2),
(35, '', '1.25', '', '72.88', '', '1.25', '', '72', '', 'July', '', '', '', 'Approved', '', 2),
(36, '', '1.25', '', '57.88', '', '1.25', '', '57', '', '', '', '', '', 'Approved', '', 2),
(51, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 21),
(52, '', '1.25', '', '59.13', '', '1.25', '', '58.25', '', 'July', '', '', '', 'Approved', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `emp_distinction`
--

CREATE TABLE `emp_distinction` (
  `distinction_id` int(11) NOT NULL,
  `distinction_name` varchar(100) NOT NULL DEFAULT ' ',
  `distinction_name1` varchar(100) NOT NULL DEFAULT ' ',
  `distinction_name2` varchar(100) NOT NULL DEFAULT ' ',
  `distinction_name3` varchar(100) NOT NULL DEFAULT ' ',
  `distinction_name4` varchar(100) NOT NULL DEFAULT ' ',
  `distinction_name5` varchar(100) NOT NULL DEFAULT ' ',
  `distinction_name6` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_distinction`
--

INSERT INTO `emp_distinction` (`distinction_id`, `distinction_name`, `distinction_name1`, `distinction_name2`, `distinction_name3`, `distinction_name4`, `distinction_name5`, `distinction_name6`, `account_id`) VALUES
(1, ' 1a', ' 1a', ' 1a', ' 1a', ' 1a', ' 1a', ' 1a', 1),
(2, ' A1a', ' Aa', ' Aa', ' Aa', ' Aa', ' Aa', ' Aa', 2),
(3, ' aa', ' aa', ' aa', ' aa', ' aa', ' aa', ' aa', 3),
(4, ' a', 'a', 'a', 'a', 'a', 'a', 'a', 4),
(5, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(6, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(7, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(8, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(9, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(10, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(11, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(12, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(13, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(14, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(15, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(16, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(17, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(18, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(19, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(20, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(21, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_education`
--

CREATE TABLE `emp_education` (
  `education_id` int(11) NOT NULL,
  `elem_name` varchar(100) NOT NULL DEFAULT ' ',
  `elem_degree` varchar(100) NOT NULL DEFAULT ' ',
  `elem_from` varchar(4) NOT NULL DEFAULT ' ',
  `elem_to` varchar(4) NOT NULL DEFAULT ' ',
  `elem_earned` varchar(100) NOT NULL DEFAULT ' ',
  `elem_honor` varchar(100) NOT NULL DEFAULT ' ',
  `sec_name` varchar(100) NOT NULL DEFAULT ' ',
  `sec_degree` varchar(100) NOT NULL DEFAULT ' ',
  `sec_from` varchar(4) NOT NULL DEFAULT ' ',
  `sec_to` varchar(4) NOT NULL DEFAULT ' ',
  `sec_earned` varchar(100) NOT NULL DEFAULT ' ',
  `sec_honor` varchar(100) NOT NULL DEFAULT ' ',
  `voc_name` varchar(100) NOT NULL DEFAULT ' ',
  `voc_degree` varchar(100) NOT NULL DEFAULT ' ',
  `voc_from` varchar(4) NOT NULL DEFAULT ' ',
  `voc_to` varchar(4) NOT NULL DEFAULT ' ',
  `voc_earned` varchar(100) NOT NULL DEFAULT ' ',
  `voc_honor` varchar(100) NOT NULL DEFAULT ' ',
  `col_name` varchar(100) NOT NULL DEFAULT ' ',
  `col_degree` varchar(100) NOT NULL DEFAULT ' ',
  `col_from` varchar(4) NOT NULL DEFAULT ' ',
  `col_to` varchar(4) NOT NULL DEFAULT ' ',
  `col_earned` varchar(100) NOT NULL DEFAULT ' ',
  `col_honor` varchar(100) NOT NULL DEFAULT ' ',
  `gad_name` varchar(100) NOT NULL DEFAULT ' ',
  `gad_degree` varchar(100) NOT NULL DEFAULT ' ',
  `gad_from` varchar(100) NOT NULL DEFAULT ' ',
  `gad_to` varchar(100) NOT NULL DEFAULT ' ',
  `gad_earned` varchar(100) NOT NULL DEFAULT ' ',
  `gad_honor` varchar(100) NOT NULL DEFAULT ' ',
  `gad_namee` varchar(100) NOT NULL DEFAULT ' ',
  `gad_degreee` varchar(100) NOT NULL DEFAULT ' ',
  `gad_frome` varchar(100) NOT NULL DEFAULT ' ',
  `gad_toe` varchar(100) NOT NULL DEFAULT ' ',
  `gad_earnede` varchar(100) NOT NULL DEFAULT ' ',
  `gad_honore` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_education`
--

INSERT INTO `emp_education` (`education_id`, `elem_name`, `elem_degree`, `elem_from`, `elem_to`, `elem_earned`, `elem_honor`, `sec_name`, `sec_degree`, `sec_from`, `sec_to`, `sec_earned`, `sec_honor`, `voc_name`, `voc_degree`, `voc_from`, `voc_to`, `voc_earned`, `voc_honor`, `col_name`, `col_degree`, `col_from`, `col_to`, `col_earned`, `col_honor`, `gad_name`, `gad_degree`, `gad_from`, `gad_to`, `gad_earned`, `gad_honor`, `gad_namee`, `gad_degreee`, `gad_frome`, `gad_toe`, `gad_earnede`, `gad_honore`, `account_id`) VALUES
(1, ' A', ' aA', '2___', '122_', ' a', ' a', ' a', ' a', '22__', '2___', ' aa', ' a', ' a', ' a', '22__', '2___', ' a', ' a', ' a', ' a', '22__', '22__', ' a', ' a', ' a', ' a', '22__', '22__', ' a', ' a', ' ASD', ' ASDAS', '222_', '2222', ' ASDAS', ' ASDA', 1),
(2, ' A1', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' Master', ' Information Techno;ogy', ' 1', ' 1', ' a', ' a', 'a', 'q', 'q', 'q', 'q', 'q1', 2),
(3, ' 1', ' 1', '2___', '2___', ' 2', ' 2', ' 2', ' 2', '2___', '2___', ' 2', ' 2', ' a2', ' 2', '2___', '2___', ' a2', ' a2', ' a2', ' a2', '2___', '2___', ' a2', ' 2', ' a2', ' 2', '2___', '2___', ' a2', ' 2', ' a2', ' a2', '2___', '2___', 'aaaa2', ' aaaaa2', 3),
(4, ' a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 4),
(5, ' d', ' d', ' d', 'd', ' d', ' d', 'd', ' d', ' d', ' d', ' d', ' d', ' d', ' d', 'ld', ' d', ' d', ' d', ' d', ' d', ' d', 'd', ' d', ' d', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 5),
(6, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(7, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(8, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(9, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(10, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(11, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(12, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(13, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(14, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(15, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(16, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(17, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(18, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(19, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(20, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(21, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_eligibility`
--

CREATE TABLE `emp_eligibility` (
  `eligibility_id` int(11) NOT NULL,
  `eligibility_name` varchar(100) NOT NULL DEFAULT ' ',
  `eligibility_rating` varchar(100) NOT NULL DEFAULT ' ',
  `eligibility_date` varchar(100) NOT NULL DEFAULT ' ',
  `eligibility_place` varchar(100) NOT NULL DEFAULT ' ',
  `eligibility_number` varchar(100) NOT NULL DEFAULT ' ',
  `eligibility_validity` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_eligibility`
--

INSERT INTO `emp_eligibility` (`eligibility_id`, `eligibility_name`, `eligibility_rating`, `eligibility_date`, `eligibility_place`, `eligibility_number`, `eligibility_validity`, `account_id`) VALUES
(1, ' aasda', '23.12', '12/31/2312', ' asadasd', ' aasdasd', '03/31/2312', 1),
(2, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(3, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(4, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(5, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(6, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(7, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(8, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(9, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(10, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(11, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(12, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(13, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(14, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(15, ' A1111', ' A1', '11', ' A1', ' A1', ' 11', 2),
(16, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(17, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(18, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(19, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(20, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(21, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(22, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(23, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(24, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(25, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(26, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(27, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(28, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(29, 'CIVIL SERVICE PROFESSIONAL', '99.00', '04/01/2001', 'San Fernando La Union', 'LH66672D51', '04/01/2020', 3),
(30, ' DRIVERS PROFESSIONAL', '', '04/05/2021', 'LTO', '555FSEE556', '04/11/2021', 3),
(31, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(32, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(33, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(34, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(35, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(36, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(37, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(38, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(39, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(40, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(41, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(42, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(43, 'a', 'a', 'a', 'a', 'a', 'a', 4),
(44, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(45, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(46, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(47, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(48, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(49, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(50, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(51, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(52, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(53, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(54, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(55, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(56, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(57, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(58, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(59, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(60, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(61, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(62, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(63, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(64, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(65, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(66, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(67, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(68, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(69, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(70, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(71, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(72, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(73, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(74, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(75, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(76, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(77, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(78, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(79, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(80, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(81, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(82, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(83, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(84, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(85, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(86, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(87, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(88, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(89, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(90, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(91, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(92, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(93, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(94, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(95, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(96, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(97, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(98, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(99, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(100, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(101, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(102, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(103, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(104, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(105, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(106, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(107, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(108, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(109, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(110, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(111, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(112, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(113, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(114, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(115, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(116, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(117, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(118, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(119, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(120, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(121, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(122, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(123, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(124, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(125, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(126, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(127, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(128, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(129, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(130, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(131, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(132, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(133, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(134, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(135, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(136, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(137, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(138, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(139, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(140, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(141, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(142, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(143, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(144, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(145, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(146, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(147, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(148, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(149, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(150, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(151, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(152, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(153, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(154, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(155, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(156, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(157, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(158, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(159, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(160, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(161, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(162, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(163, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(164, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(165, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(166, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(167, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(168, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(169, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(170, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(171, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(172, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(173, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(174, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(175, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(176, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(177, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(178, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(179, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(180, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(181, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(182, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(183, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(184, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(185, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(186, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(187, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(188, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(189, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(190, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(191, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(192, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(193, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(194, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(195, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(196, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(197, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(198, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(199, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(200, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(201, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(202, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(203, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(204, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(205, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(206, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(207, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(208, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(209, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(210, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(211, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(212, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(213, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(214, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(215, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(216, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(217, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(218, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(219, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(220, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(221, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(222, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(223, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(224, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(225, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(226, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(227, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(228, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(229, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(230, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(231, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(232, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(233, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(234, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(235, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(236, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(237, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(238, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(239, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(240, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(241, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(242, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(243, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(244, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(245, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(246, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(247, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(248, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(249, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(250, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(251, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(252, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(253, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(254, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(255, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(256, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(257, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(258, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(259, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(260, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(261, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(262, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(263, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(264, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(265, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(266, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(267, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(268, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(269, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(270, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(271, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(272, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(273, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(274, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(275, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(276, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(277, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(278, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(279, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(280, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(281, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(282, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(283, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(284, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(285, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(286, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(287, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(288, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(289, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(290, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(291, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(292, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(293, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(294, ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_family`
--

CREATE TABLE `emp_family` (
  `fam_id` int(11) NOT NULL,
  `spouse_surname` varchar(100) NOT NULL DEFAULT ' ',
  `spouse_firstname` varchar(100) NOT NULL DEFAULT ' ',
  `spouse_middlename` varchar(100) NOT NULL DEFAULT ' ',
  `spouse_extension` varchar(100) NOT NULL DEFAULT ' ',
  `spouse_occupation` varchar(100) NOT NULL DEFAULT ' ',
  `spouse_business` varchar(100) NOT NULL DEFAULT ' ',
  `spouse_business_add` varchar(225) NOT NULL DEFAULT ' ',
  `spouse_no` varchar(100) NOT NULL DEFAULT ' ',
  `father_surname` varchar(100) NOT NULL DEFAULT ' ',
  `father_firstname` varchar(100) NOT NULL DEFAULT ' ',
  `father_middlename` varchar(100) NOT NULL DEFAULT ' ',
  `father_extensionname` varchar(100) NOT NULL DEFAULT ' ',
  `mother_surname` varchar(100) NOT NULL DEFAULT ' ',
  `mother_firstname` varchar(100) NOT NULL DEFAULT ' ',
  `mother_middlename` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_family`
--

INSERT INTO `emp_family` (`fam_id`, `spouse_surname`, `spouse_firstname`, `spouse_middlename`, `spouse_extension`, `spouse_occupation`, `spouse_business`, `spouse_business_add`, `spouse_no`, `father_surname`, `father_firstname`, `father_middlename`, `father_extensionname`, `mother_surname`, `mother_firstname`, `mother_middlename`, `account_id`) VALUES
(1, ' aaA', ' aA', ' aA', ' a', ' a', ' a', ' a', '', 'Catungal', 'Ernesto', 'Bersola', 'Jr', 'Rilloraza', 'Lilia', 'Gapuz', 1),
(2, ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A1', ' A', ' A', 2),
(3, ' a', ' a', ' a', ' a', ' a', ' a', ' a', '(11_)-____-___', ' a', ' a', ' a', ' a', ' a', ' a', ' a', 3),
(4, ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', ' a', 4),
(5, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(6, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(7, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(8, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(9, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(10, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(11, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(12, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(13, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(14, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(15, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(16, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(17, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(18, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(19, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(20, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(21, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_gov_id`
--

CREATE TABLE `emp_gov_id` (
  `government_id` int(11) NOT NULL,
  `government_name` varchar(100) NOT NULL DEFAULT ' ',
  `government_no` varchar(100) NOT NULL DEFAULT ' ',
  `government_date` varchar(100) NOT NULL DEFAULT ' ',
  `government_place` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_gov_id`
--

INSERT INTO `emp_gov_id` (`government_id`, `government_name`, `government_no`, `government_date`, `government_place`, `account_id`) VALUES
(1, ' aaaa', ' a', 'a', ' a', 1),
(2, ' A1', ' A1', '', '', 2),
(3, 'GSIS', 'SD25555DSW', '11/02/2021', 'SAN FERNDANDO', 3),
(4, ' aQ', 'a', 'a', 'a', 4),
(5, ' ', ' ', ' ', ' ', 5),
(6, ' ', ' ', ' ', ' ', 6),
(7, ' ', ' ', ' ', ' ', 7),
(8, ' ', ' ', ' ', ' ', 8),
(9, ' ', ' ', ' ', ' ', 9),
(10, ' ', ' ', ' ', ' ', 10),
(11, ' ', ' ', ' ', ' ', 11),
(12, ' ', ' ', ' ', ' ', 12),
(13, ' ', ' ', ' ', ' ', 13),
(14, ' ', ' ', ' ', ' ', 14),
(15, ' ', ' ', ' ', ' ', 15),
(16, ' ', ' ', ' ', ' ', 16),
(17, ' ', ' ', ' ', ' ', 17),
(18, ' ', ' ', ' ', ' ', 18),
(19, ' ', ' ', ' ', ' ', 19),
(20, ' ', ' ', ' ', ' ', 20),
(21, ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_history`
--

CREATE TABLE `emp_history` (
  `history_id` int(11) NOT NULL,
  `work_history` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `work_position` varchar(225) NOT NULL,
  `work_status` varchar(225) NOT NULL,
  `date_work` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `emp_history`
--

INSERT INTO `emp_history` (`history_id`, `work_history`, `work_position`, `work_status`, `date_work`, `account_id`) VALUES
(1, 'Employed', '', 'COS', '2021-03-08', 1),
(2, 'Renew', '', '', '2021-07-01', 1),
(3, 'Employed', '', 'Permanent', '2021-06-23', 2),
(4, 'Employed', '', 'Permanent', '2021-06-23', 3),
(5, 'Renew', '', '', '2021-07-01', 3),
(6, 'Renew', 'MIS Staff', 'MIS Head', 'Permanent', 3),
(7, 'Renew', 'MIS Head', 'Permanent', '2021-07-13', 1),
(8, 'Renew', '', '', '2021-07-13', 4),
(9, 'Promote', '', '', '2021-07-13', 5),
(10, 'Employed', '', '', '2021-07-13', 6),
(11, '', '', '', '', 3),
(12, '', '', '', '', 2),
(13, '', '', '', '', 2),
(14, '', '', '', '', 2),
(15, '', '', '', '', 2),
(16, 'Renew', 'Computer Programmer I', 'Contractual', '2021-07-15', 2),
(17, 'Resign', 'Computer Programmer I', 'Permanent', '2021-07-15', 2),
(18, 'Renew', 'Computer Programmer I', 'Permanent', '2021-07-15', 2),
(19, 'Employed', '', '', '2021-07-15', 7),
(20, 'Employed', '', '', '2021-07-15', 8),
(21, 'Employed', '', '', '2021-07-15', 9),
(22, 'Employed', '', '', '2021-07-15', 10),
(23, 'Employed', '', '', '2021-07-15', 11),
(24, 'Employed', '', '', '2021-07-15', 12),
(25, 'Employed', '', '', '2021-07-15', 13),
(26, 'Employed', '', '', '2021-07-15', 14),
(27, 'Employed', '', '', '2021-07-15', 15),
(28, 'Employed', '', '', '2021-07-15', 16),
(29, 'Employed', '', '', '2021-07-15', 17),
(30, 'Employed', '', '', '2021-07-22', 18),
(31, 'Employed', '', '', '2021-07-29', 19),
(32, 'Employed', '', '', '2021-07-19', 20),
(33, 'Employed', '', '', '2021-07-22', 21),
(34, 'Resign', 'Computer Programmer II', 'Contractual', '2021-07-22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `emp_hobbies`
--

CREATE TABLE `emp_hobbies` (
  `hobbies_id` int(11) NOT NULL,
  `hobbies_name` varchar(100) NOT NULL DEFAULT ' ',
  `hobbies_name1` varchar(100) NOT NULL DEFAULT ' ',
  `hobbies_name2` varchar(100) NOT NULL DEFAULT ' ',
  `hobbies_name3` varchar(100) NOT NULL DEFAULT ' ',
  `hobbies_name4` varchar(100) NOT NULL DEFAULT ' ',
  `hobbies_name5` varchar(100) NOT NULL DEFAULT ' ',
  `hobbies_name6` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_hobbies`
--

INSERT INTO `emp_hobbies` (`hobbies_id`, `hobbies_name`, `hobbies_name1`, `hobbies_name2`, `hobbies_name3`, `hobbies_name4`, `hobbies_name5`, `hobbies_name6`, `account_id`) VALUES
(1, ' 1a', ' 1a', ' 1a', ' 1a', ' 1a', ' 1a', ' 1a', 1),
(2, ' A1a', ' Aa', ' Aa', ' Aa', ' Aa', ' Aa', ' Aa', 2),
(3, ' aa', ' Aaa', ' aa', ' aa', ' aa', ' aa', ' aa', 3),
(4, ' 1', ' a', ' a', 'a', 'a', 'a', 'a', 4),
(5, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(6, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(7, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(8, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(9, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(10, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(11, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(12, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(13, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(14, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(15, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(16, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(17, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(18, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(19, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(20, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(21, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave`
--

CREATE TABLE `emp_leave` (
  `leave_Id` int(11) NOT NULL,
  `leave_filling` varchar(100) NOT NULL,
  `leave_days` int(11) NOT NULL,
  `leave_type` varchar(100) NOT NULL DEFAULT ' ',
  `leave_from` varchar(100) NOT NULL DEFAULT ' ',
  `leave_to` varchar(100) NOT NULL DEFAULT ' ',
  `leave_spent` varchar(100) NOT NULL DEFAULT ' ',
  `leave_spent1` varchar(225) NOT NULL DEFAULT ' ',
  `leave_commutation` varchar(100) NOT NULL DEFAULT ' ',
  `leave_recommendation` varchar(100) NOT NULL DEFAULT ' ',
  `leave_recommendation_due` varchar(225) NOT NULL,
  `leave_status` varchar(100) NOT NULL DEFAULT ' ',
  `leave_status_due` varchar(225) NOT NULL,
  `leave_disapproved_due` varchar(225) NOT NULL,
  `month_date` varchar(225) NOT NULL,
  `date_received` varchar(225) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_leave`
--

INSERT INTO `emp_leave` (`leave_Id`, `leave_filling`, `leave_days`, `leave_type`, `leave_from`, `leave_to`, `leave_spent`, `leave_spent1`, `leave_commutation`, `leave_recommendation`, `leave_recommendation_due`, `leave_status`, `leave_status_due`, `leave_disapproved_due`, `month_date`, `date_received`, `account_id`) VALUES
(1, '2021-06-25', 1, 'Vacation', '2021-07-01', '2021-06-30', '', '', 'Requested', 'Approved', '', 'Approved', 'Days without pay', '', 'July', '2021-07-01', 1),
(2, '2021-06-30', 2, 'Sick', '2021-08-01', '2021-05-30', 'Hospital', '', 'Not Requested', 'Approved', '', 'Not Approved', 'asdasdasd', 'Not Valid', 'July', '', 3),
(3, '2021-06-26', 4, 'Sick', '2021-09-02', '2021-10-16', '', '', 'Not Requested', 'Not Approved', '', 'Approved', 'Days with pay', '', '9', '', 2),
(4, '2021-06-25', 2, 'Vacation', '2021-06-02', '2021-07-22', 'Hospital', '', 'Requested', 'Not Approved', '', 'Pending', 'Not Valid', '', 'September', '', 3),
(5, '2021-06-28', 1, 'Sick', '2021-08-18', '2021-08-29', 'Within the Philippines', '', 'Requested', 'Approved', '', 'Approved', 'Days without pay', 'asdasd', 'September', '', 3),
(6, '2021-06-28', 1, 'Maternity', '2021-09-28', '2021-10-01', '', '', 'Requested', 'Not Approved', '', 'Approved', 'Days with pay', '', '9', '', 2),
(7, '2021-06-28', 1, 'Vacation', '2021-10-28', '2021-10-28', 'Hospital', '', 'Requested', 'Approved', '', 'Approved', 'Days with pay', '', 'September', '', 3),
(8, '2021-06-28', 2, 'Other', '2021-07-12', '2021-07-12', '', '', 'Requested', 'Approved', '', 'Approved', 'Days with pay', '', '', '', 2),
(22, '2021-07-31', 1, 'Vacation', '2021-07-19', '2021-07-19', '', '', '', 'Approved', '', 'Approved', 'Days with pay', '', '', '', 2),
(23, '2021-07-02', 2, 'VacationSick', '2021-07-02', '2021-07-02', '', '', 'Not Requested', '', '', 'Pending', '', '', '', '', 2),
(24, '2021-07-02', 9, 'Vacation', '2021-07-02', '2021-07-02', 'Within the Philippines', '', 'Not Requested', '', '', 'Pending', '', '', 'July', '', 2),
(35, '2021-07-19', 1, 'Vacation', '2021-07-19', '2021-07-19', 'Within the Philippines', '', '', 'Approved', '', 'Pending', '', '', 'July', '', 1),
(36, '2021-07-19', 1, 'Sick', '2021-07-19', '2021-07-19', 'Hospital', '', '', 'Not Approved', '', 'Pending', '', '', 'July', '', 1),
(38, '2021-07-19', 1, 'Vacation', '2021-07-19', '2021-07-19', '', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 3),
(39, '2021-07-22', 1, 'Other', '2021-07-22', '2021-07-22', '', '', '', 'Pending', '', 'Not Approved', '', '', 'July', '', 1),
(40, '2021-07-26', 1, 'VacationSick', '2021-07-26', '2021-07-26', 'Out Patient', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(41, '2021-07-26', 1, 'Vacation', '2021-07-26', '2021-07-26', 'Within the Philippines', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(42, '2021-07-26', 5, 'Study Leave', '2021-08-02', '2021-08-06', '', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(43, '2021-07-27', 1, 'Vacation Leave', '2021-07-27', '2021-07-27', 'Within the PhilippinesMonetization of Leave Credits', '', 'Not Requested', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(44, '2021-07-27', 1, 'Vacation Leave', '2021-07-27', '2021-07-27', 'Within the Philippines', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(45, '2021-07-27', 1, 'Sick Leave10-Day VAWC Leave', '2021-07-27', '2021-07-27', 'Out Patient', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(46, '2021-07-27', 1, 'Sick Leave', '2021-07-27', '2021-07-27', 'In Hospital', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(47, '2021-07-27', 1, 'Vacation Leave', '2021-07-27', '2021-07-27', 'Within the Philippines', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(48, '2021-07-27', 1, '', '2021-07-27', '2021-07-27', '', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(49, '2021-07-27', 1, 'Vacation Leave', '2021-07-27', '2021-07-27', 'Abroad', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(50, '2021-07-27', 0, '', '2021-07-27', '2021-07-27', '', '', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(51, '2021-07-27', 0, '', '2021-07-27', '2021-07-27', '', 'asdasdsadasdasd', '', 'Pending', '', 'Pending', '', '', 'July', '', 2),
(52, '2021-07-27', 1, 'Vacation Leave', '2021-07-27', '2021-07-27', 'Within the Philippines', 'Palawan', '', 'Pending', '', 'Pending', '', '', 'July', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `emp_organization`
--

CREATE TABLE `emp_organization` (
  `organization_id` int(11) NOT NULL,
  `organization_name` varchar(100) NOT NULL DEFAULT ' ',
  `organization_name1` varchar(225) NOT NULL DEFAULT ' ',
  `organization_name2` varchar(225) NOT NULL DEFAULT ' ',
  `organization_name3` varchar(225) NOT NULL DEFAULT ' ',
  `organization_name4` varchar(225) NOT NULL DEFAULT ' ',
  `organization_name5` varchar(225) NOT NULL DEFAULT ' ',
  `organization_name6` varchar(225) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_organization`
--

INSERT INTO `emp_organization` (`organization_id`, `organization_name`, `organization_name1`, `organization_name2`, `organization_name3`, `organization_name4`, `organization_name5`, `organization_name6`, `account_id`) VALUES
(1, ' 1a', ' 1a', ' 1a', ' 1a', ' 1a', ' 1a', ' 1a', 1),
(2, ' A1a', ' Aa', ' Aa', ' Aa', ' Aa', ' Aa', ' Aa', 2),
(3, ' aa', ' aa', ' aa', ' aa', ' aa', ' aa', ' aa', 3),
(4, ' a', 'a', 'a', 'a', 'a', 'a', 'a', 4),
(5, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(6, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(7, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(8, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(9, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(10, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(11, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(12, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(13, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(14, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(15, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(16, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(17, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(18, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(19, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(20, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(21, ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_profile`
--

CREATE TABLE `emp_profile` (
  `profile_id` int(11) NOT NULL,
  `employee_picture` varchar(100) NOT NULL DEFAULT ' ',
  `employee_firstname` varchar(100) NOT NULL DEFAULT ' ',
  `employee_middlename` varchar(100) NOT NULL DEFAULT ' ',
  `employee_lastname` varchar(100) NOT NULL DEFAULT ' ',
  `employee_extensionname` varchar(100) NOT NULL DEFAULT ' ',
  `employee_datebirth` date NOT NULL,
  `employee_placebirth` varchar(100) NOT NULL DEFAULT ' ',
  `employee_sex` varchar(100) NOT NULL DEFAULT ' ',
  `employee_civilstatus` varchar(100) NOT NULL DEFAULT ' ',
  `employee_height` varchar(100) NOT NULL DEFAULT ' ',
  `employee_weight` varchar(100) NOT NULL DEFAULT ' ',
  `employee_bloodtype` varchar(100) NOT NULL DEFAULT ' ',
  `employee_citizenship` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Rblock` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Rstreet` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Rvillage` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Rbarangay` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Rcity` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Rprovince` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Rzipcode` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Pblock` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Pstreet` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Pvillage` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Pbarangay` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Pcity` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Pprovince` varchar(100) NOT NULL DEFAULT ' ',
  `employee_Pzipcode` varchar(100) NOT NULL DEFAULT ' ',
  `employee_telephone` varchar(100) NOT NULL DEFAULT ' ',
  `employee_contact` varchar(100) NOT NULL DEFAULT ' ',
  `employee_gsis` varchar(100) NOT NULL DEFAULT ' ',
  `employee_pagibig` varchar(100) NOT NULL DEFAULT ' ',
  `employee_philhealth` varchar(100) NOT NULL DEFAULT ' ',
  `employee_sss` varchar(100) NOT NULL DEFAULT ' ',
  `employee_tin` varchar(100) NOT NULL DEFAULT ' ',
  `employee_agency` varchar(225) NOT NULL DEFAULT ' ',
  `employee_email` varchar(225) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_profile`
--

INSERT INTO `emp_profile` (`profile_id`, `employee_picture`, `employee_firstname`, `employee_middlename`, `employee_lastname`, `employee_extensionname`, `employee_datebirth`, `employee_placebirth`, `employee_sex`, `employee_civilstatus`, `employee_height`, `employee_weight`, `employee_bloodtype`, `employee_citizenship`, `employee_Rblock`, `employee_Rstreet`, `employee_Rvillage`, `employee_Rbarangay`, `employee_Rcity`, `employee_Rprovince`, `employee_Rzipcode`, `employee_Pblock`, `employee_Pstreet`, `employee_Pvillage`, `employee_Pbarangay`, `employee_Pcity`, `employee_Pprovince`, `employee_Pzipcode`, `employee_telephone`, `employee_contact`, `employee_gsis`, `employee_pagibig`, `employee_philhealth`, `employee_sss`, `employee_tin`, `employee_agency`, `employee_email`, `account_id`) VALUES
(1, '../../../PICTURE/IMG_9564.JPG ', 'John Ernest111', 'Rilloraza', 'Catungal', '', '1997-04-11', '', 'Male', 'Single', '17.5_', '85.__', 'O+', 'Filipino', ' a', 'Salapi', ' aa', 'Poblacion Sur', 'Caba', 'La Union', '2502', ' aa', 'Salapi', ' aa', 'Poblacion Sur ', 'Caba', 'La Union', '2502', '', '(090)-5622-223', '21-312321312-3', '31-231212312-1', '12-127482596-0', '21-312312312-3', '21-312312312-3', '21231', 'johnernest.catungal1997@gmail.com', 1),
(2, '../../../PICTURE/IVAN.jpg ', 'Ivan Arjaya', 'A', 'Alicante', '', '1997-01-01', 'A', 'Male', 'Single', 'A', 'A', '', 'Filipino', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', ' A', 'A', 'A', 'A', ' A', 'A', '0000000000', 'N/A', 'A1', '121274825960', 'A', 'A', ' aA', ' A', 2),
(3, '../../../PICTURE/IMG_9564.JPG ', 'Jessie', 'Laureta', 'Mique', '', '1994-10-27', 'aasd', 'Male', 'Married', '11.23', '12.31', '', 'Filipino', ' a', ' a', ' a', ' a', ' a', ' a', '', ' a', ' a', ' a', 'a', 'a', 'a', '11__', '(123)-1231-231', '(000)-0000-000', '11-11_______-_', '11-1________-_', '11-1________-_', '11-_________-_', '11-1________-_', '111', 'sdsdad@_._', 3),
(4, '../PICTURE/logoCCSE.jpg ', 'ADMINaa', 'ADMIN', 'ADMIN', 'ADMIN', '1995-04-11', 'ADMIN', 'Male', 'Single', '55', '55', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'ADMIN', 'ADMIN', 'ADMIN', ' ', '', '123456798', '11111', '111111', '1111', '11111', '1111', ' a', ' aa', 4),
(5, ' ', 'Jansen', 'masd', 'marquez', '', '2021-07-13', '', 'Male', 'Single', '', '', '', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', '', '', ' ', '', '10', '', '', '', '', '', ' ', ' ', 5),
(6, ' ', 'John Ernest111', 'ADMIN', 'ADMIN', '', '2021-07-27', '', 'Male', 'Married', '', '', '', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', '', '', ' ', '', 'asd', '', '', '', '', '', ' ', ' ', 6),
(7, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 7),
(8, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 8),
(9, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 9),
(10, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 10),
(11, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 11),
(12, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 12),
(13, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 13),
(14, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 14),
(15, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 15),
(16, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 16),
(17, ' ', 'JOHN', 'JOHN', 'JOHN', 'JOHN', '2021-07-15', 'JOHN', 'Male', 'Single', '54.55', '45.45', 'A+', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 'SDASD', 'SDASD', 'SASD', ' ', '(015)-545-6454', '(456)-4546-545', '25-654567488-7', '5464-9872-1987', '54-654987925-6', '45-465421547-9', '12-165498797-7', ' ', ' ', 17),
(18, ' ', 'a', 'a', 'a', 'a', '2021-07-19', '', 'Male', 'Single', '', '', '', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', '', '', ' ', '', '(231)-2312-312', '', '', '', '', '', ' ', ' ', 18),
(19, ' ', 'Ivan Arjaya', 'a', 'a', 'a', '2021-07-19', '', 'Male', 'Married', '', '', '', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', '', '', ' ', '', '(123)-12__-___', '', '', '', '', '', ' ', ' ', 19),
(20, ' ', 'Ivan Arjaya', 'a', 'a', 'a', '2021-07-19', '', 'Male', 'Married', '', '', '', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', '', '', ' ', '', '(123)-12__-___', '', '', '', '', '', ' ', ' ', 20),
(21, ' ', 'Ivan Arjaya', 'a', 'a', 'a', '2021-07-14', 'aasd', 'Male', 'Single', '', '', '', 'Filipino', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', '', '', '', ' ', '', '(312)-1231-231', '', '', '', '', '', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_program_attended`
--

CREATE TABLE `emp_program_attended` (
  `attend_id` int(11) NOT NULL,
  `attend_name` varchar(100) NOT NULL DEFAULT ' ',
  `attend_from` varchar(100) NOT NULL DEFAULT ' ',
  `attend_to` varchar(100) NOT NULL DEFAULT ' ',
  `attend_hours` varchar(100) NOT NULL DEFAULT ' ',
  `attend_ld` varchar(100) NOT NULL DEFAULT ' ',
  `attend_sponsored` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_program_attended`
--

INSERT INTO `emp_program_attended` (`attend_id`, `attend_name`, `attend_from`, `attend_to`, `attend_hours`, `attend_ld`, `attend_sponsored`, `account_id`) VALUES
(1, ' sdasd', '12/31/2321', '12/31/2312', '31', ' sda', ' aaa', 1),
(2, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(3, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(4, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(5, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(6, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(7, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(8, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(9, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(10, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(11, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(12, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(13, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(14, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(15, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(16, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(17, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(18, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(19, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(20, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(21, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(22, ' A1111', '11111', ' 11111', ' 11111', ' A1111', ' A1111', 2),
(23, ' aa', ' aaa', ' aa', ' aa', ' aaa', ' aaa', 2),
(24, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(25, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(26, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(27, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(28, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(29, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(30, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(31, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(32, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(33, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(34, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(35, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(36, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(37, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(38, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(39, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(40, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(41, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(42, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(43, 'PROGRAMMING', '11/01/2021', '01/01/2021', '50', 'Technical', 'DMMMSU-MLUC', 3),
(44, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(45, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(46, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(47, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(48, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(49, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(50, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(51, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(52, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(53, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(54, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(55, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(56, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(57, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(58, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(59, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(60, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(61, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(62, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(63, ' aa', '', '', '', ' ', ' ', 3),
(64, 'aA', 'a', 'a', 'a', 'a', 'a', 4),
(65, 'A', 'A', 'A', 'A', 'A', 'A', 4),
(66, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(67, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(68, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(69, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(70, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(71, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(72, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(73, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(74, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(75, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(76, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(77, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(78, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(79, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(80, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(81, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(82, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(83, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(84, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(85, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(86, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(87, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(88, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(89, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(90, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(91, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(92, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(93, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(94, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(95, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(96, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(97, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(98, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(99, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(100, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(101, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(102, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(103, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(104, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(105, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(106, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(107, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(108, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(109, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(110, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(111, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(112, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(113, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(114, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(115, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(116, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(117, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(118, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(119, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(120, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(121, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(122, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(123, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(124, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(125, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(126, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(127, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(128, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(129, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(130, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(131, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(132, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(133, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(134, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(135, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(136, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(137, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(138, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(139, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(140, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(141, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(142, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(143, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(144, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(145, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(146, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(147, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(148, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(149, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(150, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(151, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(152, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(153, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(154, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(155, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(156, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(157, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(158, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(159, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(160, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(161, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(162, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(163, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(164, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(165, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(166, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(167, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(168, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(169, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(170, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(171, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(172, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(173, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(174, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(175, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(176, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(177, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(178, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(179, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(180, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(181, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(182, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(183, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(184, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(185, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(186, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(187, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(188, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(189, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(190, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(191, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(192, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(193, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(194, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(195, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(196, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(197, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(198, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(199, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(200, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(201, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(202, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(203, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(204, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(205, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(206, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(207, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(208, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(209, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(210, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(211, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(212, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(213, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(214, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(215, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(216, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(217, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(218, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(219, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(220, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(221, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(222, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(223, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(224, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(225, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(226, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(227, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(228, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(229, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(230, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(231, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(232, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(233, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(234, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(235, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(236, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(237, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(238, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(239, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(240, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(241, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(242, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(243, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(244, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(245, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(246, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(247, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(248, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(249, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(250, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(251, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(252, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(253, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(254, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(255, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(256, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(257, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(258, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(259, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(260, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(261, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(262, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(263, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(264, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(265, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(266, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(267, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(268, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(269, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(270, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(271, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(272, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(273, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(274, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(275, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(276, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(277, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(278, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(279, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(280, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(281, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(282, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(283, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(284, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(285, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(286, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(287, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(288, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(289, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(290, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(291, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(292, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(293, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(294, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(295, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(296, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(297, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(298, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(299, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(300, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(301, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(302, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(303, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(304, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(305, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(306, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(307, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(308, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(309, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(310, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(311, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(312, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(313, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(314, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(315, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(316, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(317, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(318, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(319, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(320, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(321, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(322, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(323, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(324, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(325, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(326, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(327, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(328, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(329, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(330, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(331, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(332, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(333, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(334, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(335, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(336, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(337, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(338, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(339, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(340, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(341, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(342, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(343, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(344, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(345, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(346, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(347, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(348, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(349, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(350, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(351, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(352, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(353, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(354, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(355, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(356, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(357, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(358, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(359, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(360, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(361, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(362, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(363, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(364, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(365, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(366, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(367, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(368, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(369, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(370, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(371, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(372, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(373, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(374, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(375, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(376, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(377, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(378, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(379, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(380, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(381, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(382, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(383, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(384, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(385, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(386, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(387, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(388, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(389, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(390, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(391, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(392, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(393, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(394, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(395, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(396, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(397, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(398, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(399, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(400, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(401, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(402, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(403, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(404, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(405, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(406, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(407, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(408, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(409, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(410, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(411, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(412, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(413, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(414, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(415, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(416, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(417, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(418, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(419, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(420, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(421, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(422, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(423, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(424, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(425, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(426, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(427, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(428, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(429, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(430, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(431, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(432, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(433, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(434, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(435, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(436, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(437, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(438, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(439, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(440, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(441, ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_reference`
--

CREATE TABLE `emp_reference` (
  `reference_id` int(11) NOT NULL,
  `reference_name` varchar(100) NOT NULL DEFAULT ' ',
  `reference_address` varchar(100) NOT NULL DEFAULT ' ',
  `reference_tel` varchar(100) NOT NULL DEFAULT ' ',
  `reference_name1` varchar(100) NOT NULL DEFAULT ' ',
  `reference_address1` varchar(100) NOT NULL DEFAULT ' ',
  `reference_tel1` varchar(100) NOT NULL DEFAULT ' ',
  `reference_name2` varchar(100) NOT NULL DEFAULT ' ',
  `reference_address2` varchar(100) NOT NULL DEFAULT ' ',
  `reference_tel2` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_reference`
--

INSERT INTO `emp_reference` (`reference_id`, `reference_name`, `reference_address`, `reference_tel`, `reference_name1`, `reference_address1`, `reference_tel1`, `reference_name2`, `reference_address2`, `reference_tel2`, `account_id`) VALUES
(1, ' aqweqw', ' aeqweqw', '(331)-2312-312', ' aqweqwe', ' aeqweqw', '(123)-1231-231', ' aqweqw', ' aeqweqwe', '(112)-3123-123', 1),
(2, ' A1', ' A1', ' A1', ' a', ' a', ' a', ' a', ' a', ' a', 2),
(3, ' aa', ' aa', '(123)-1231-123', ' aa', ' aa', '(123)-1223-123', ' aa', ' aa', '(312)-3123-122', 3),
(4, ' a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 4),
(5, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(6, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(7, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(8, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(9, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(10, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(11, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(12, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(13, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(14, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(15, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(16, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(17, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(18, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(19, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(20, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(21, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_voluntary`
--

CREATE TABLE `emp_voluntary` (
  `voluntary_id` int(11) NOT NULL,
  `voluntary_name` varchar(100) NOT NULL DEFAULT ' ',
  `voluntary_address` varchar(100) NOT NULL DEFAULT ' ',
  `voluntary_from` varchar(100) NOT NULL DEFAULT ' ',
  `voluntary_to` varchar(100) NOT NULL DEFAULT ' ',
  `voluntary_hours` varchar(100) NOT NULL DEFAULT ' ',
  `voluntary_position` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_voluntary`
--

INSERT INTO `emp_voluntary` (`voluntary_id`, `voluntary_name`, `voluntary_address`, `voluntary_from`, `voluntary_to`, `voluntary_hours`, `voluntary_position`, `account_id`) VALUES
(1, 'wsedad', 'adasdas', '11/23/1231', '03/12/3123', '112', 'sdadasd', 1),
(2, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(3, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(4, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(5, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(6, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(7, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(8, ' ', ' ', ' ', ' ', ' ', ' ', 1),
(9, ' A11111', ' A111', ' 1111', ' 1111', ' 111111', ' A111', 2),
(10, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(11, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(12, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(13, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(14, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(15, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(16, ' ', ' ', ' ', ' ', ' ', ' ', 2),
(17, 'LION`S CLUB', 'SAN FERNANDO', '01/01/2018', '07/19/2021', '10', 'MEMBER', 3),
(18, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(19, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(20, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(21, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(22, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(23, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(24, ' ', ' ', ' ', ' ', ' ', ' ', 3),
(25, 'a1A', 'a', 'a', 'a', 'a', 'a', 4),
(26, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(27, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(28, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(29, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(30, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(31, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(32, ' ', ' ', ' ', ' ', ' ', ' ', 4),
(33, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(34, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(35, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(36, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(37, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(38, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(39, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(40, ' ', ' ', ' ', ' ', ' ', ' ', 5),
(41, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(42, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(43, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(44, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(45, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(46, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(47, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(48, ' ', ' ', ' ', ' ', ' ', ' ', 6),
(49, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(50, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(51, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(52, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(53, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(54, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(55, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(56, ' ', ' ', ' ', ' ', ' ', ' ', 7),
(57, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(58, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(59, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(60, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(61, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(62, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(63, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(64, ' ', ' ', ' ', ' ', ' ', ' ', 8),
(65, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(66, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(67, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(68, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(69, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(70, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(71, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(72, ' ', ' ', ' ', ' ', ' ', ' ', 9),
(73, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(74, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(75, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(76, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(77, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(78, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(79, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(80, ' ', ' ', ' ', ' ', ' ', ' ', 10),
(81, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(82, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(83, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(84, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(85, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(86, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(87, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(88, ' ', ' ', ' ', ' ', ' ', ' ', 11),
(89, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(90, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(91, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(92, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(93, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(94, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(95, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(96, ' ', ' ', ' ', ' ', ' ', ' ', 12),
(97, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(98, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(99, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(100, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(101, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(102, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(103, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(104, ' ', ' ', ' ', ' ', ' ', ' ', 13),
(105, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(106, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(107, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(108, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(109, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(110, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(111, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(112, ' ', ' ', ' ', ' ', ' ', ' ', 14),
(113, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(114, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(115, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(116, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(117, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(118, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(119, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(120, ' ', ' ', ' ', ' ', ' ', ' ', 15),
(121, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(122, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(123, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(124, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(125, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(126, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(127, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(128, ' ', ' ', ' ', ' ', ' ', ' ', 16),
(129, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(130, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(131, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(132, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(133, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(134, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(135, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(136, ' ', ' ', ' ', ' ', ' ', ' ', 17),
(137, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(138, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(139, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(140, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(141, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(142, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(143, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(144, ' ', ' ', ' ', ' ', ' ', ' ', 18),
(145, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(146, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(147, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(148, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(149, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(150, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(151, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(152, ' ', ' ', ' ', ' ', ' ', ' ', 19),
(153, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(154, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(155, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(156, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(157, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(158, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(159, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(160, ' ', ' ', ' ', ' ', ' ', ' ', 20),
(161, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(162, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(163, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(164, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(165, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(166, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(167, ' ', ' ', ' ', ' ', ' ', ' ', 21),
(168, ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `emp_work`
--

CREATE TABLE `emp_work` (
  `work_id` int(11) NOT NULL,
  `work_from` varchar(100) NOT NULL DEFAULT ' ',
  `work_to` varchar(100) NOT NULL DEFAULT ' ',
  `work_position` varchar(100) NOT NULL DEFAULT ' ',
  `work_department` varchar(100) NOT NULL DEFAULT ' ',
  `work_salary` varchar(100) NOT NULL DEFAULT ' ',
  `work_grade` varchar(100) NOT NULL DEFAULT ' ',
  `work_status` varchar(100) NOT NULL DEFAULT ' ',
  `work_gov` varchar(100) NOT NULL DEFAULT ' ',
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_work`
--

INSERT INTO `emp_work` (`work_id`, `work_from`, `work_to`, `work_position`, `work_department`, `work_salary`, `work_grade`, `work_status`, `work_gov`, `account_id`) VALUES
(1, '02/13/1231', '1231231231', 'MIS STAFF', 'DMMMSU MLUC', '503/DAY', 'N/A', 'COS', 'Y', 1),
(2, '03/12/y312', '5451512', '3123123123', '', '', '', '', '', 1),
(3, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(4, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(5, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(6, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(7, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(8, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(9, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(10, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(11, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(12, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(13, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(14, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(15, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(16, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(17, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(18, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(19, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(20, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(21, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(22, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(23, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(24, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(25, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(26, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(27, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(28, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 1),
(29, '1111111', ' 11', ' A1', ' A1', ' 11', ' 11', ' A1', ' A1', 2),
(30, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(31, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(32, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(33, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(34, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(35, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(36, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(37, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(38, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(39, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(40, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(41, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(42, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(43, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(44, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(45, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(46, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(47, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(48, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(49, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(50, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(51, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(52, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(53, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(54, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(55, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(56, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 2),
(57, '07/01/2021', 'PRESENT', 'MIS STAFF', 'DMMMSU MLUC', '503/DAY', 'N/A', 'COS', 'Y', 3),
(58, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(59, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(60, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(61, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(62, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(63, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(64, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(65, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(66, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(67, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(68, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(69, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(70, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(71, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(72, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(73, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(74, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(75, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(76, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(77, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(78, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(79, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(80, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(81, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(82, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(83, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(84, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 3),
(85, 'aAa', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 4),
(86, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(87, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(88, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(89, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(90, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(91, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(92, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(93, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(94, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(95, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(96, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(97, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(98, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(99, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(100, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(101, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(102, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(103, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(104, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(105, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(106, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(107, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(108, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(109, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(110, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(111, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(112, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 4),
(113, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(114, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(115, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(116, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(117, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(118, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(119, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(120, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(121, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(122, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(123, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(124, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(125, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(126, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(127, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(128, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(129, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(130, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(131, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(132, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(133, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(134, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(135, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(136, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(137, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(138, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(139, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(140, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 5),
(141, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(142, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(143, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(144, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(145, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(146, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(147, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(148, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(149, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(150, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(151, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(152, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(153, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(154, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(155, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(156, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(157, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(158, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(159, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(160, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(161, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(162, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(163, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(164, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(165, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(166, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(167, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(168, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 6),
(169, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(170, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(171, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(172, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(173, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(174, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(175, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(176, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(177, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(178, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(179, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(180, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(181, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(182, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(183, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(184, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(185, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(186, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(187, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(188, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(189, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(190, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(191, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(192, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(193, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(194, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(195, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(196, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 7),
(197, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(198, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(199, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(200, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(201, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(202, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(203, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(204, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(205, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(206, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(207, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(208, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(209, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(210, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(211, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(212, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(213, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(214, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(215, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(216, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(217, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(218, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(219, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(220, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(221, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(222, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(223, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(224, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 8),
(225, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(226, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(227, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(228, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(229, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(230, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(231, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(232, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(233, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(234, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(235, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(236, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(237, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(238, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(239, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(240, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(241, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(242, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(243, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(244, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(245, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(246, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(247, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(248, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(249, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(250, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(251, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(252, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 9),
(253, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(254, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(255, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(256, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(257, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(258, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(259, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(260, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(261, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(262, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(263, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(264, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(265, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(266, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(267, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(268, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(269, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(270, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(271, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(272, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(273, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(274, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(275, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(276, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(277, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(278, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(279, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(280, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 10),
(281, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(282, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(283, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(284, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(285, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(286, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(287, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(288, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(289, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(290, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(291, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(292, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(293, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(294, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(295, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(296, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(297, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(298, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(299, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(300, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(301, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(302, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(303, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(304, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(305, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(306, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(307, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(308, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 11),
(309, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(310, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(311, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(312, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(313, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(314, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(315, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(316, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(317, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(318, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(319, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(320, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(321, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(322, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(323, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(324, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(325, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(326, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(327, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(328, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(329, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(330, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(331, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(332, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(333, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(334, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(335, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(336, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 12),
(337, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(338, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(339, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(340, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(341, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(342, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(343, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(344, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(345, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(346, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(347, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(348, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(349, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(350, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(351, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(352, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(353, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(354, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(355, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(356, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(357, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(358, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(359, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(360, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(361, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(362, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(363, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(364, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 13),
(365, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(366, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(367, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(368, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(369, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(370, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(371, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(372, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(373, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(374, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(375, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(376, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(377, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(378, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(379, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(380, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(381, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(382, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(383, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(384, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(385, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(386, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(387, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(388, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(389, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(390, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(391, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(392, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 14),
(393, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(394, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(395, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(396, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(397, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(398, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(399, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(400, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(401, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(402, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(403, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(404, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(405, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(406, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(407, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(408, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(409, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(410, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(411, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(412, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(413, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(414, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(415, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(416, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(417, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(418, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(419, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(420, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 15),
(421, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(422, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(423, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(424, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(425, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(426, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(427, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(428, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(429, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(430, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(431, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(432, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(433, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(434, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(435, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(436, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(437, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(438, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(439, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(440, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(441, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(442, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(443, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(444, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(445, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(446, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(447, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(448, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 16),
(449, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(450, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(451, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(452, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(453, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(454, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(455, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(456, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(457, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(458, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(459, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(460, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(461, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(462, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(463, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(464, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(465, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(466, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(467, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(468, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(469, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(470, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(471, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(472, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(473, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(474, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(475, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(476, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 17),
(477, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(478, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(479, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(480, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(481, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(482, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(483, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(484, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(485, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(486, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(487, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(488, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(489, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(490, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(491, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(492, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(493, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(494, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(495, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(496, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(497, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(498, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(499, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(500, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(501, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(502, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(503, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(504, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 18),
(505, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(506, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(507, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(508, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(509, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(510, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(511, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(512, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(513, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(514, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(515, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(516, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(517, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(518, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(519, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(520, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(521, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(522, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(523, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(524, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(525, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(526, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(527, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(528, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(529, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(530, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(531, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(532, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 19),
(533, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(534, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(535, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(536, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(537, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(538, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(539, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(540, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(541, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(542, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(543, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(544, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(545, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(546, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(547, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(548, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(549, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(550, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(551, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(552, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(553, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(554, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(555, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(556, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(557, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(558, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(559, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(560, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 20),
(561, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(562, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(563, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(564, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(565, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(566, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(567, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(568, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(569, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(570, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(571, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(572, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(573, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(574, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(575, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(576, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(577, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(578, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(579, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(580, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(581, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(582, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(583, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(584, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(585, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(586, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(587, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21),
(588, ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', 21);

-- --------------------------------------------------------

--
-- Table structure for table `salary_grade`
--

CREATE TABLE `salary_grade` (
  `salary_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary_grade`
--

INSERT INTO `salary_grade` (`salary_id`, `grade`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33);

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `sal_id` int(10) NOT NULL,
  `step` int(1) DEFAULT NULL,
  `amount` varchar(7) DEFAULT NULL,
  `salary_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`sal_id`, `step`, `amount`, `salary_id`) VALUES
(1, 1, '12,134', 1),
(2, 2, '12,143', 1),
(3, 3, '12,236', 1),
(4, 4, '12,339', 1),
(5, 5, '12,442', 1),
(6, 6, '12,545', 1),
(7, 7, '12,651', 1),
(8, 8, '12,756', 1),
(9, 1, '12,970', 2),
(10, 2, '12,888', 2),
(11, 3, '12,987', 2),
(12, 4, '13,087', 2),
(13, 5, '13,187', 2),
(14, 6, '13,288', 2),
(15, 7, '13,390', 2),
(16, 8, '13,492', 2),
(17, 1, '13,572', 3),
(18, 2, '13,667', 3),
(19, 3, '13,781', 3),
(20, 4, '13,888', 3),
(21, 5, '13,995', 3),
(22, 6, '14,101', 3),
(23, 7, '14,210', 3),
(24, 8, '14,319', 3),
(25, 1, '14,400', 4),
(26, 2, '14,511', 4),
(27, 3, '14,622', 4),
(28, 4, '14,735', 4),
(29, 5, '14,848', 4),
(30, 6, '14,961', 4),
(31, 7, '15,077', 4),
(32, 8, '15,192', 4),
(33, 1, '15,275', 5),
(34, 2, '15,393', 5),
(35, 3, '15,511', 5),
(36, 4, '15,630', 5),
(37, 5, '15,750', 5),
(38, 6, '15,871', 5),
(39, 7, '15,993', 5),
(40, 8, '16,115', 5),
(41, 1, '16,200', 6),
(42, 2, '16,325', 6),
(43, 3, '16,450', 6),
(44, 4, '16,577', 6),
(45, 5, '16,704', 6),
(46, 6, '16,832', 6),
(47, 7, '16,962', 6),
(48, 8, '17,092', 6),
(49, 1, '17,179', 7),
(50, 2, '17,311', 7),
(51, 3, '17,444', 7),
(52, 4, '17,578', 7),
(53, 5, '17,713', 7),
(54, 6, '17,849', 7),
(55, 7, '17,985', 7),
(56, 8, '18,124', 7),
(57, 1, '18,251', 8),
(58, 2, '18,417', 8),
(59, 3, '18,583', 8),
(60, 4, '18,751', 8),
(61, 5, '18,920', 8),
(62, 6, '19,091', 8),
(63, 7, '19,264', 8),
(64, 8, '19,438', 8),
(65, 1, '19,593', 9),
(66, 2, '19,757', 9),
(67, 3, '19,922', 9),
(68, 4, '20,089', 9),
(69, 5, '20,257', 9),
(70, 6, '20,426', 9),
(71, 7, '20,597', 9),
(72, 8, '20,769', 9),
(73, 1, '21,205', 10),
(74, 2, '21,382', 10),
(75, 3, '21,561', 10),
(76, 4, '21,741', 10),
(77, 5, '21,923', 10),
(78, 6, '22,106', 10),
(79, 7, '22,291', 10),
(80, 8, '22,477', 10),
(81, 1, '23,877', 11),
(82, 2, '24,161', 11),
(83, 3, '24,450', 11),
(84, 4, '24,742', 11),
(85, 5, '15,038', 11),
(86, 6, '25,339', 11),
(87, 7, '25,643', 11),
(88, 8, '25,952', 11),
(89, 1, '26,052', 12),
(90, 2, '26,336', 12),
(91, 3, '26,624', 12),
(92, 4, '26,915', 12),
(93, 5, '27,210', 12),
(94, 6, '27,509', 12),
(95, 7, '27,811', 12),
(96, 8, '28,117', 12),
(97, 1, '28,276', 13),
(98, 2, '28,589', 13),
(99, 3, '28,905', 13),
(100, 4, '29,225', 13),
(101, 5, '29,550', 13),
(102, 6, '29,878', 13),
(103, 7, '30,210', 13),
(104, 8, '30,547', 13),
(105, 1, '30,799', 14),
(106, 2, '31,143', 14),
(107, 3, '31,491', 14),
(108, 4, '31,844', 14),
(109, 5, '32,200', 14),
(110, 6, '32,561', 14),
(111, 7, '32,927', 14),
(112, 8, '33,297', 14),
(113, 1, '33,575', 15),
(114, 2, '33,953', 15),
(115, 3, '34,336', 15),
(116, 4, '34,724', 15),
(117, 5, '34,166', 15),
(118, 6, '35,513', 15),
(119, 7, '35,915', 15),
(120, 8, '36,323', 15),
(121, 1, '36,628', 16),
(122, 2, '37,044', 16),
(123, 3, '37,465', 16),
(124, 4, '37,891', 16),
(125, 5, '38,323', 16),
(126, 6, '38,760', 16),
(127, 7, '38,203', 16),
(128, 8, '39,650', 16),
(129, 1, '39,986', 17),
(130, 2, '40,444', 17),
(131, 3, '40,907', 17),
(132, 4, '41,376', 17),
(133, 5, '41,851', 17),
(134, 6, '42,332', 17),
(135, 7, '42,818', 17),
(136, 8, '43,311', 17),
(137, 1, '43,681', 18),
(138, 2, '44,184', 18),
(139, 3, '44,694', 18),
(140, 4, '45,209', 18),
(141, 5, '45,732', 18),
(142, 6, '46,261', 18),
(143, 7, '46,796', 18),
(144, 8, '47,338', 18),
(145, 1, '48,313', 19),
(146, 2, '49,052', 19),
(147, 3, '49,803', 19),
(148, 4, '50,566', 19),
(149, 5, '51,342', 19),
(150, 6, '52,130', 19),
(151, 7, '52,932', 19),
(152, 8, '53,746', 19),
(153, 1, '54,251', 20),
(154, 2, '55,085', 20),
(155, 3, '55,934', 20),
(156, 4, '56,796', 20),
(157, 5, '57,673', 20),
(158, 6, '58,564', 20),
(159, 7, '59,469', 20),
(160, 8, '60,389', 20),
(161, 1, '60,901', 21),
(162, 2, '61,844', 21),
(163, 3, '62,803', 21),
(164, 4, '63,777', 21),
(165, 5, '64,768', 21),
(166, 6, '65,774', 21),
(167, 7, '66,797', 21),
(168, 8, '67,837', 21),
(169, 1, '68,415', 22),
(170, 2, '69,481', 22),
(171, 3, '70,565', 22),
(172, 4, '71,666', 22),
(173, 5, '72,785', 22),
(174, 6, '73,923', 22),
(175, 7, '75,079', 22),
(176, 8, '76,253', 22),
(177, 1, '76,907', 23),
(178, 2, '78,111', 23),
(179, 3, '79,336', 23),
(180, 4, '80,583', 23),
(181, 5, '81,899', 23),
(182, 6, '83,235', 23),
(183, 7, '84,594', 23),
(184, 8, '85,975', 23),
(185, 1, '86,742', 24),
(186, 2, '88,158', 24),
(187, 3, '89,597', 24),
(188, 4, '91,059', 24),
(189, 5, '92,545', 24),
(190, 6, '94,057', 24),
(191, 7, '95,592', 24),
(192, 8, '97,152', 24),
(193, 1, '98,886', 25),
(194, 2, '100,500', 25),
(195, 3, '102,140', 25),
(196, 4, '103,808', 25),
(197, 5, '105,502', 25),
(198, 6, '107,224', 25),
(199, 7, '108,974', 25),
(200, 8, '110,753', 25),
(201, 1, '111,742', 26),
(202, 2, '113,565', 26),
(203, 3, '115,419', 26),
(204, 4, '117,303', 26),
(205, 5, '119,217', 26),
(206, 6, '121,163', 26),
(207, 7, '123,140', 26),
(208, 8, '125,150', 26),
(209, 1, '126,267', 27),
(210, 2, '128,329', 27),
(211, 3, '130,423', 27),
(212, 4, '132,552', 27),
(213, 5, '134,715', 27),
(214, 6, '136,914', 27),
(215, 7, '139,149', 27),
(216, 8, '141,420', 27),
(217, 1, '142,683', 28),
(218, 2, '145,011', 28),
(219, 3, '147,378', 28),
(220, 4, '149,784', 28),
(221, 5, '152,228', 28),
(222, 6, '154,714', 28),
(223, 7, '157,239', 28),
(224, 8, '159,804', 28),
(225, 1, '161,231', 29),
(226, 2, '163,863', 29),
(227, 3, '166,537', 29),
(228, 4, '169,256', 29),
(229, 5, '172,018', 29),
(230, 6, '174,826', 29),
(231, 7, '177,679', 29),
(232, 8, '180,579', 29),
(233, 1, '182,191', 30),
(234, 2, '185,165', 30),
(235, 3, '188,187', 30),
(236, 4, '191,259', 30),
(237, 5, '194,380', 30),
(238, 6, '197,553', 30),
(239, 7, '200,777', 30),
(240, 8, '204,054', 30),
(241, 1, '268,121', 31),
(242, 2, '273,358', 31),
(243, 3, '278,697', 31),
(244, 4, '284,140', 31),
(245, 5, '289,691', 31),
(246, 6, '295,349', 31),
(247, 7, '301,117', 31),
(248, 8, '306,999', 31),
(249, 1, '319,660', 32),
(250, 2, '326,107', 32),
(251, 3, '332,682', 32),
(252, 4, '339,392', 32),
(253, 5, '346,236', 32),
(254, 6, '353,218', 32),
(255, 7, '360,342', 32),
(256, 8, '367,609', 32),
(257, 1, '403,620', 33),
(258, 2, '415,725', 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `emp_child`
--
ALTER TABLE `emp_child`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `emp_credit`
--
ALTER TABLE `emp_credit`
  ADD PRIMARY KEY (`cre_id`);

--
-- Indexes for table `emp_distinction`
--
ALTER TABLE `emp_distinction`
  ADD PRIMARY KEY (`distinction_id`);

--
-- Indexes for table `emp_education`
--
ALTER TABLE `emp_education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `emp_eligibility`
--
ALTER TABLE `emp_eligibility`
  ADD PRIMARY KEY (`eligibility_id`);

--
-- Indexes for table `emp_family`
--
ALTER TABLE `emp_family`
  ADD PRIMARY KEY (`fam_id`);

--
-- Indexes for table `emp_gov_id`
--
ALTER TABLE `emp_gov_id`
  ADD PRIMARY KEY (`government_id`);

--
-- Indexes for table `emp_history`
--
ALTER TABLE `emp_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `emp_hobbies`
--
ALTER TABLE `emp_hobbies`
  ADD PRIMARY KEY (`hobbies_id`);

--
-- Indexes for table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD PRIMARY KEY (`leave_Id`);

--
-- Indexes for table `emp_organization`
--
ALTER TABLE `emp_organization`
  ADD PRIMARY KEY (`organization_id`);

--
-- Indexes for table `emp_profile`
--
ALTER TABLE `emp_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `emp_program_attended`
--
ALTER TABLE `emp_program_attended`
  ADD PRIMARY KEY (`attend_id`);

--
-- Indexes for table `emp_reference`
--
ALTER TABLE `emp_reference`
  ADD PRIMARY KEY (`reference_id`);

--
-- Indexes for table `emp_voluntary`
--
ALTER TABLE `emp_voluntary`
  ADD PRIMARY KEY (`voluntary_id`);

--
-- Indexes for table `emp_work`
--
ALTER TABLE `emp_work`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `salary_grade`
--
ALTER TABLE `salary_grade`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `sheet1`
--
ALTER TABLE `sheet1`
  ADD PRIMARY KEY (`sal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `emp_child`
--
ALTER TABLE `emp_child`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `emp_credit`
--
ALTER TABLE `emp_credit`
  MODIFY `cre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `emp_distinction`
--
ALTER TABLE `emp_distinction`
  MODIFY `distinction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `emp_education`
--
ALTER TABLE `emp_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `emp_eligibility`
--
ALTER TABLE `emp_eligibility`
  MODIFY `eligibility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `emp_family`
--
ALTER TABLE `emp_family`
  MODIFY `fam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `emp_gov_id`
--
ALTER TABLE `emp_gov_id`
  MODIFY `government_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `emp_history`
--
ALTER TABLE `emp_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `emp_hobbies`
--
ALTER TABLE `emp_hobbies`
  MODIFY `hobbies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `emp_leave`
--
ALTER TABLE `emp_leave`
  MODIFY `leave_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `emp_organization`
--
ALTER TABLE `emp_organization`
  MODIFY `organization_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `emp_profile`
--
ALTER TABLE `emp_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `emp_program_attended`
--
ALTER TABLE `emp_program_attended`
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=442;

--
-- AUTO_INCREMENT for table `emp_reference`
--
ALTER TABLE `emp_reference`
  MODIFY `reference_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `emp_voluntary`
--
ALTER TABLE `emp_voluntary`
  MODIFY `voluntary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `emp_work`
--
ALTER TABLE `emp_work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=589;

--
-- AUTO_INCREMENT for table `salary_grade`
--
ALTER TABLE `salary_grade`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sheet1`
--
ALTER TABLE `sheet1`
  MODIFY `sal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
