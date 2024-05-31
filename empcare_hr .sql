-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 08:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empcare_hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `AppID` int(11) NOT NULL,
  `NID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Contact` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`AppID`, `NID`, `Fname`, `Lname`, `Contact`) VALUES
(1, 996840840, 'Chathumi', 'Abeywickrama', '0702222222'),
(2, 1234567789, 'tharumi', 'navodya', '0700000000'),
(9, 2147483647, 'Irumi', 'Theekshana', '0700000000');

-- --------------------------------------------------------

--
-- Stand-in structure for view `applicant1_application_info`
-- (See below for the actual view)
--
CREATE TABLE `applicant1_application_info` (
`InterviewDate` date
,`Title` varchar(20)
,`Description` varchar(1000)
,`Status` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `applicant1_info`
-- (See below for the actual view)
--
CREATE TABLE `applicant1_info` (
`Fname` varchar(50)
,`Lname` varchar(50)
,`NID` int(11)
,`Contact` char(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `applicant2_info`
-- (See below for the actual view)
--
CREATE TABLE `applicant2_info` (
`Fname` varchar(50)
,`Lname` varchar(50)
,`NID` int(11)
,`Contact` char(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `ApplicationID` int(11) NOT NULL,
  `InterviewDate` date NOT NULL,
  `Status` varchar(100) NOT NULL,
  `JobOpID` int(11) NOT NULL,
  `AppID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`ApplicationID`, `InterviewDate`, `Status`, `JobOpID`, `AppID`) VALUES
(2, '2023-10-20', 'Active', 1, 1),
(22, '2023-11-22', 'first interview', 1, 1),
(25, '2023-11-18', 'active', 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `AID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ArivalTime` time NOT NULL,
  `DepartureTime` time NOT NULL,
  `EmpID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`AID`, `Date`, `ArivalTime`, `DepartureTime`, `EmpID`) VALUES
(13, '2023-11-13', '08:17:00', '17:00:00', 14),
(14, '2023-11-14', '08:59:00', '16:23:00', 14),
(15, '2023-11-13', '07:30:00', '17:24:00', 30),
(16, '2023-11-14', '08:00:00', '17:00:00', 30);

-- --------------------------------------------------------

--
-- Stand-in structure for view `delete_app1_info`
-- (See below for the actual view)
--
CREATE TABLE `delete_app1_info` (
`AppID` int(11)
,`NID` int(11)
,`Fname` varchar(50)
,`Lname` varchar(50)
,`Contact` char(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DeptID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DeptID`, `Name`) VALUES
(1, 'IT'),
(2, 'Quality Assurance');

-- --------------------------------------------------------

--
-- Table structure for table `dept_jobrole`
--

CREATE TABLE `dept_jobrole` (
  `DeptID` int(11) NOT NULL,
  `JobID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dept_jobrole`
--

INSERT INTO `dept_jobrole` (`DeptID`, `JobID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` int(11) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` char(1) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ManagerID` int(11) NOT NULL,
  `BasicSalary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `Fname`, `Lname`, `Gender`, `DOB`, `Email`, `Address`, `ManagerID`, `BasicSalary`) VALUES
(14, 'krish', 'sing', 'M', '1994-06-07', 'gth@gmail.com', 'qqqqq', 1, 20000),
(30, 'omer', 'arduc', 'M', '2000-06-14', 'www@gmail.com', 'mgngf', 1, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `employee_worksin`
--

CREATE TABLE `employee_worksin` (
  `EmpID` int(11) NOT NULL,
  `JobID` int(11) NOT NULL,
  `DeptID` int(11) NOT NULL,
  `JoinedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_worksin`
--

INSERT INTO `employee_worksin` (`EmpID`, `JobID`, `DeptID`, `JoinedDate`) VALUES
(14, 2, 2, '2023-02-10'),
(30, 1, 1, '2023-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `jobopening`
--

CREATE TABLE `jobopening` (
  `JobOpID` int(11) NOT NULL,
  `PostedDate` date NOT NULL,
  `Deadline` date NOT NULL,
  `JobID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobopening`
--

INSERT INTO `jobopening` (`JobOpID`, `PostedDate`, `Deadline`, `JobID`) VALUES
(1, '2023-10-12', '2023-11-12', 1),
(17, '2023-11-15', '2023-11-25', 2),
(18, '2023-11-20', '2023-12-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobrole`
--

CREATE TABLE `jobrole` (
  `JobID` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobrole`
--

INSERT INTO `jobrole` (`JobID`, `Title`, `Description`) VALUES
(1, 'Intern', 'undergraduate'),
(2, 'assosiate SE', '6 months experience');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `LeaveID` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `EmpID` int(11) NOT NULL,
  `Approved` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ManagerID` int(11) NOT NULL,
  `EmpID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`ManagerID`, `EmpID`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mng1_attendance`
-- (See below for the actual view)
--
CREATE TABLE `mng1_attendance` (
`ArivalTime` time
,`DepartureTime` time
,`Date` date
,`Fname` varchar(100)
,`Lname` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mng1_attendence`
-- (See below for the actual view)
--
CREATE TABLE `mng1_attendence` (
`ArivalTime` time
,`DepartureTime` time
,`Date` date
,`Fname` varchar(100)
,`Lname` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mng1_emp_info`
-- (See below for the actual view)
--
CREATE TABLE `mng1_emp_info` (
`Fname` varchar(100)
,`Lname` varchar(50)
,`Gender` char(1)
,`DOB` date
,`Email` varchar(100)
,`Address` varchar(100)
,`BasicSalary` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mng1_profiles`
-- (See below for the actual view)
--
CREATE TABLE `mng1_profiles` (
`Fname` varchar(100)
,`Lname` varchar(50)
,`Gender` char(1)
,`DOB` date
,`Email` varchar(100)
,`Address` varchar(100)
,`BasicSalary` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mng2_attendance`
-- (See below for the actual view)
--
CREATE TABLE `mng2_attendance` (
`ArivalTime` time
,`DepartureTime` time
,`Date` date
,`Fname` varchar(100)
,`Lname` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mng2_emp_info`
-- (See below for the actual view)
--
CREATE TABLE `mng2_emp_info` (
`Fname` varchar(100)
,`Lname` varchar(50)
,`Gender` char(1)
,`DOB` date
,`Email` varchar(100)
,`Address` varchar(100)
,`BasicSalary` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mng2_profiles`
-- (See below for the actual view)
--
CREATE TABLE `mng2_profiles` (
`Fname` varchar(100)
,`Lname` varchar(50)
,`Gender` char(1)
,`DOB` date
,`Email` varchar(100)
,`Address` varchar(100)
,`BasicSalary` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `payslip`
--

CREATE TABLE `payslip` (
  `SlipID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Allowance` decimal(10,0) NOT NULL,
  `Bonus` decimal(10,0) NOT NULL,
  `EmpID` int(11) NOT NULL,
  `Deduction` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `AppID` int(11) NOT NULL,
  `Qualification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`AppID`, `Qualification`) VALUES
(1, 'Pass AL'),
(2, ''),
(9, 'al pass'),
(9, 'graduate in CS');

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_1`
-- (See below for the actual view)
--
CREATE TABLE `student_1` (
`ArivalTime` time
,`DepartureTime` time
,`Date` date
,`Fname` varchar(100)
,`Lname` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `applicant1_application_info`
--
DROP TABLE IF EXISTS `applicant1_application_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `applicant1_application_info`  AS SELECT `application`.`InterviewDate` AS `InterviewDate`, `jobrole`.`Title` AS `Title`, `jobrole`.`Description` AS `Description`, `application`.`Status` AS `Status` FROM ((`application` join `jobopening` on(`application`.`JobOpID` = `jobopening`.`JobOpID`)) join `jobrole` on(`jobopening`.`JobID` = `jobrole`.`JobID`)) WHERE `application`.`AppID` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `applicant1_info`
--
DROP TABLE IF EXISTS `applicant1_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `applicant1_info`  AS SELECT `applicant`.`Fname` AS `Fname`, `applicant`.`Lname` AS `Lname`, `applicant`.`NID` AS `NID`, `applicant`.`Contact` AS `Contact` FROM `applicant` WHERE `applicant`.`AppID` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `applicant2_info`
--
DROP TABLE IF EXISTS `applicant2_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `applicant2_info`  AS SELECT `applicant`.`Fname` AS `Fname`, `applicant`.`Lname` AS `Lname`, `applicant`.`NID` AS `NID`, `applicant`.`Contact` AS `Contact` FROM `applicant` WHERE `applicant`.`AppID` = 2 ;

-- --------------------------------------------------------

--
-- Structure for view `delete_app1_info`
--
DROP TABLE IF EXISTS `delete_app1_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `delete_app1_info`  AS SELECT `applicant`.`AppID` AS `AppID`, `applicant`.`NID` AS `NID`, `applicant`.`Fname` AS `Fname`, `applicant`.`Lname` AS `Lname`, `applicant`.`Contact` AS `Contact` FROM `applicant` WHERE `applicant`.`AppID` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `mng1_attendance`
--
DROP TABLE IF EXISTS `mng1_attendance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mng1_attendance`  AS SELECT `attendance`.`ArivalTime` AS `ArivalTime`, `attendance`.`DepartureTime` AS `DepartureTime`, `attendance`.`Date` AS `Date`, `employee`.`Fname` AS `Fname`, `employee`.`Lname` AS `Lname` FROM (`attendance` join `employee` on(`attendance`.`EmpID` = `employee`.`EmpID`)) WHERE `employee`.`ManagerID` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `mng1_attendence`
--
DROP TABLE IF EXISTS `mng1_attendence`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mng1_attendence`  AS SELECT `attendance`.`ArivalTime` AS `ArivalTime`, `attendance`.`DepartureTime` AS `DepartureTime`, `attendance`.`Date` AS `Date`, `employee`.`Fname` AS `Fname`, `employee`.`Lname` AS `Lname` FROM (`attendance` join `employee` on(`attendance`.`EmpID` = `employee`.`EmpID`)) WHERE `employee`.`ManagerID` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `mng1_emp_info`
--
DROP TABLE IF EXISTS `mng1_emp_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mng1_emp_info`  AS SELECT `employee`.`Fname` AS `Fname`, `employee`.`Lname` AS `Lname`, `employee`.`Gender` AS `Gender`, `employee`.`DOB` AS `DOB`, `employee`.`Email` AS `Email`, `employee`.`Address` AS `Address`, `employee`.`BasicSalary` AS `BasicSalary` FROM `employee` WHERE `employee`.`ManagerID` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `mng1_profiles`
--
DROP TABLE IF EXISTS `mng1_profiles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mng1_profiles`  AS SELECT `employee`.`Fname` AS `Fname`, `employee`.`Lname` AS `Lname`, `employee`.`Gender` AS `Gender`, `employee`.`DOB` AS `DOB`, `employee`.`Email` AS `Email`, `employee`.`Address` AS `Address`, `employee`.`BasicSalary` AS `BasicSalary` FROM `employee` WHERE `employee`.`ManagerID` = 1 ;

-- --------------------------------------------------------

--
-- Structure for view `mng2_attendance`
--
DROP TABLE IF EXISTS `mng2_attendance`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mng2_attendance`  AS SELECT `attendance`.`ArivalTime` AS `ArivalTime`, `attendance`.`DepartureTime` AS `DepartureTime`, `attendance`.`Date` AS `Date`, `employee`.`Fname` AS `Fname`, `employee`.`Lname` AS `Lname` FROM (`attendance` join `employee` on(`attendance`.`EmpID` = `employee`.`EmpID`)) WHERE `employee`.`ManagerID` = 2 ;

-- --------------------------------------------------------

--
-- Structure for view `mng2_emp_info`
--
DROP TABLE IF EXISTS `mng2_emp_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mng2_emp_info`  AS SELECT `employee`.`Fname` AS `Fname`, `employee`.`Lname` AS `Lname`, `employee`.`Gender` AS `Gender`, `employee`.`DOB` AS `DOB`, `employee`.`Email` AS `Email`, `employee`.`Address` AS `Address`, `employee`.`BasicSalary` AS `BasicSalary` FROM `employee` WHERE `employee`.`ManagerID` = 2 ;

-- --------------------------------------------------------

--
-- Structure for view `mng2_profiles`
--
DROP TABLE IF EXISTS `mng2_profiles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mng2_profiles`  AS SELECT `employee`.`Fname` AS `Fname`, `employee`.`Lname` AS `Lname`, `employee`.`Gender` AS `Gender`, `employee`.`DOB` AS `DOB`, `employee`.`Email` AS `Email`, `employee`.`Address` AS `Address`, `employee`.`BasicSalary` AS `BasicSalary` FROM `employee` WHERE `employee`.`ManagerID` = 2 ;

-- --------------------------------------------------------

--
-- Structure for view `student_1`
--
DROP TABLE IF EXISTS `student_1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_1`  AS SELECT `attendance`.`ArivalTime` AS `ArivalTime`, `attendance`.`DepartureTime` AS `DepartureTime`, `attendance`.`Date` AS `Date`, `employee`.`Fname` AS `Fname`, `employee`.`Lname` AS `Lname` FROM (`attendance` join `employee` on(`attendance`.`EmpID` = `employee`.`EmpID`)) WHERE `employee`.`ManagerID` = 1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`AppID`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ApplicationID`),
  ADD KEY `JobOpID` (`JobOpID`),
  ADD KEY `AppID` (`AppID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`AID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DeptID`);

--
-- Indexes for table `dept_jobrole`
--
ALTER TABLE `dept_jobrole`
  ADD PRIMARY KEY (`DeptID`,`JobID`),
  ADD KEY `DeptID` (`DeptID`,`JobID`),
  ADD KEY `JobID` (`JobID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`),
  ADD KEY `ManagerID` (`ManagerID`);

--
-- Indexes for table `employee_worksin`
--
ALTER TABLE `employee_worksin`
  ADD PRIMARY KEY (`EmpID`,`JobID`),
  ADD KEY `EmpID` (`EmpID`,`JobID`,`DeptID`),
  ADD KEY `JobID` (`JobID`),
  ADD KEY `DeptID` (`DeptID`);

--
-- Indexes for table `jobopening`
--
ALTER TABLE `jobopening`
  ADD PRIMARY KEY (`JobOpID`),
  ADD KEY `JobRole` (`JobID`);

--
-- Indexes for table `jobrole`
--
ALTER TABLE `jobrole`
  ADD PRIMARY KEY (`JobID`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`LeaveID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ManagerID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `payslip`
--
ALTER TABLE `payslip`
  ADD PRIMARY KEY (`SlipID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`AppID`,`Qualification`),
  ADD KEY `AppID` (`AppID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `AppID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `ApplicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DeptID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `jobopening`
--
ALTER TABLE `jobopening`
  MODIFY `JobOpID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobrole`
--
ALTER TABLE `jobrole`
  MODIFY `JobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `LeaveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `ManagerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payslip`
--
ALTER TABLE `payslip`
  MODIFY `SlipID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `AppID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`JobOpID`) REFERENCES `jobopening` (`JobOpID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`AppID`) REFERENCES `applicant` (`AppID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dept_jobrole`
--
ALTER TABLE `dept_jobrole`
  ADD CONSTRAINT `dept_jobrole_ibfk_1` FOREIGN KEY (`DeptID`) REFERENCES `department` (`DeptID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dept_jobrole_ibfk_2` FOREIGN KEY (`JobID`) REFERENCES `jobrole` (`JobID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`ManagerID`) REFERENCES `manager` (`ManagerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_worksin`
--
ALTER TABLE `employee_worksin`
  ADD CONSTRAINT `employee_worksin_ibfk_1` FOREIGN KEY (`JobID`) REFERENCES `jobrole` (`JobID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_worksin_ibfk_2` FOREIGN KEY (`DeptID`) REFERENCES `department` (`DeptID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_worksin_ibfk_3` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobopening`
--
ALTER TABLE `jobopening`
  ADD CONSTRAINT `jobopening_ibfk_1` FOREIGN KEY (`JobID`) REFERENCES `jobrole` (`JobID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD CONSTRAINT `leave_request_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payslip`
--
ALTER TABLE `payslip`
  ADD CONSTRAINT `payslip_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qualification`
--
ALTER TABLE `qualification`
  ADD CONSTRAINT `qualification_ibfk_1` FOREIGN KEY (`AppID`) REFERENCES `applicant` (`AppID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
