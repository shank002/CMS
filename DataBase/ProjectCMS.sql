-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2024 at 04:48 AM
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
-- Database: `ProjectCMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `CourseDetails`
--

CREATE TABLE `CourseDetails` (
  `CourseID` int(255) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `classLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `CourseDetails`
--

INSERT INTO `CourseDetails` (`CourseID`, `CourseName`, `StartDate`, `EndDate`, `Subject`, `classLink`) VALUES
(1, 'EP205', '2024-08-05', '2024-12-01', 'CLASSICAL AND QUANTUM MECHANICS\n', './classroomLink/ep205.php'),
(2, 'CE205', '2024-08-05', '2024-12-01', 'FLUID MECHANICS\n', './classroomLink/ce205.php'),
(3, 'CE301', '2024-08-05', '2024-12-01', 'ANALYSIS OF DETERMINATE STRUCTURES\n', './classroomLink/ce301.php'),
(4, 'IT321', '2024-08-05', '2024-12-01', 'MALWARE ANALYSIS\n', './classroomLink/it321.php'),
(5, 'IT351a', '2024-08-05', '2024-12-01', 'ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING\n', './classroomLink/it351a.php'),
(6, 'CO201', '2024-08-05', '2024-12-01', 'DATA STRUCTURES\n', './classroomLink/co201.php'),
(7, 'CO313', '2024-08-05', '2024-12-01', 'COMPUTER GRAPHICS\n', './classroomLink/co313.php'),
(8, 'SE209a', '2024-08-05', '2024-12-01', 'ENGINEERING ANALYSIS AND DESIGN (SOFTWARE ENGINEERING)\n', './classroomLink/se209a.php'),
(9, 'MC307', '2024-08-05', '2024-12-01', 'OBJECT ORIENTED PROGRAMMING\n', './classroomLink/mc307.php'),
(10, 'EE307', '2024-08-05', '2024-12-01', 'POWER STATION PRACTICES\n', './classroomLink/ee307.php'),
(11, 'EC307', '2024-08-05', '2024-12-01', 'ANTENNA DESIGN\n', './classroomLink/ec307.php'),
(12, 'EC313', '2024-08-05', '2024-12-01', 'MICROPROCESSORS AND INTERFACING\n', './classroomLink/ec313.php'),
(13, 'CH301', '2024-08-05', '2024-12-01', 'POLYMERIC MATERIALS\n', './classroomLink/ch301.php'),
(14, 'CH305', '2024-08-05', '2024-12-01', 'CHARACTERIZATION OF MATERIALS\n', './classroomLink/ch305.php'),
(15, 'CH203', '2024-08-05', '2024-12-01', 'TRANSPORT PHENOMENA\n', './classroomLink/ch203.php'),
(16, 'CH319', '2024-08-05', '2024-12-01', 'RUBBER TECHNOLOGY\n', './classroomLink/ch319.php'),
(17, 'PE361', '2024-08-05', '2024-12-01', 'TOTAL QUALITY MANAGEMENT\n', './classroomLink/pe361.php'),
(18, 'MBA-107', '2024-08-05', '2024-12-01', 'MARKETING MANAGEMENT\n', './classroomLink/mba-107.php'),
(19, 'HU309', '2024-08-05', '2024-12-01', 'Indian Economy\n', './classroomLink/hu309.php'),
(20, 'HU317', '2024-08-05', '2024-12-01', 'Basic Communication Skills\n', './classroomLink/hu317.php'),
(21, 'EP301', '2024-08-05', '2024-12-01', 'SEMICONDUCTOR DEVICES\n', './classroomLink/ep301.php'),
(22, 'EN301', '2024-08-05', '2024-12-01', 'WASTE WATER ENGINEERING: DESIGN AND APPLICATIONS\n', './classroomLink/en301.php'),
(23, 'CE307', '2024-08-05', '2024-12-01', 'ADVANCED GEO-TECHNICAL ENGINEERING\n', './classroomLink/ce307.php'),
(24, 'CE319', '2024-08-05', '2024-12-01', 'APPLICATION OF GEO-INFORMATICS REMOTE SENSING AND GIS IN ENGINEERING\n', './classroomLink/ce319.php'),
(25, 'CE303', '2024-08-05', '2024-12-01', 'DESIGN OF RCC STRUCTURES\n', './classroomLink/ce303.php'),
(26, 'IT303', '2024-08-05', '2024-12-01', 'COMPUTER NETWORKS\n', './classroomLink/it303.php'),
(27, 'IT307', '2024-08-05', '2024-12-01', 'PATTERN RECOGNITION\n', './classroomLink/it307.php'),
(28, 'IT429', '2024-08-05', '2024-12-01', 'CYBER LAWS\n', './classroomLink/it429.php'),
(29, 'CO205', '2024-08-05', '2024-12-01', 'DISCRETE STRUCTURES\n', './classroomLink/co205.php'),
(30, 'CO303', '2024-08-05', '2024-12-01', 'THEORY OF COMPUTATION\n', './classroomLink/co303.php'),
(31, 'CO325', '2024-08-05', '2024-12-01', 'PROBABILITY AND STATISTICS\n', './classroomLink/co325.php'),
(32, 'SE325', '2024-08-05', '2024-12-01', 'WEB TECHNOLOGY\n', './classroomLink/se325.php'),
(33, 'SE409', '2024-08-05', '2024-12-01', 'SOFTWARE MAINTENANCE\n', './classroomLink/se409.php'),
(34, 'EE309', '2024-08-05', '2024-12-01', 'SPECIAL ELECTRICAL MACHINES\n', './classroomLink/ee309.php'),
(35, 'EE317', '2024-08-05', '2024-12-01', 'RENEWABLE ENERGY SYSTEMS\n', './classroomLink/ee317.php'),
(36, 'EE415', '2024-08-05', '2024-12-01', 'DESIGN OF ELECTRICAL MACHINES\n', './classroomLink/ee415.php'),
(37, 'EE417', '2024-08-05', '2024-12-01', 'ADVANCED TOPICS IN ELECTRICAL MACHINES\n', './classroomLink/ee417.php'),
(38, 'EC305', '2024-08-05', '2024-12-01', 'SEMICONDUCTOR DEVICE ELECTRONICS\n', './classroomLink/ec305.php'),
(39, 'EC309', '2024-08-05', '2024-12-01', 'BIO-MEDICAL ELECTRONICS & INSTRUMENTATION\n', './classroomLink/ec309.php'),
(40, 'CH303', '2024-08-05', '2024-12-01', 'MASS TRANSFER -1\n', './classroomLink/ch303.php'),
(41, 'ME361a', '2024-08-05', '2024-12-01', 'INDUSTRIAL ENGINEERING\n', './classroomLink/me361a.php'),
(42, 'ME365a', '2024-08-05', '2024-12-01', 'COMPUTATIONAL FLUID DYNAMICS\n', './classroomLink/me365a.php'),
(43, 'PE351', '2024-08-05', '2024-12-01', 'ADVANCE MACHINING PROCESS\n', './classroomLink/pe351.php'),
(44, 'MBASC221', '2024-08-05', '2024-12-01', 'SUPPLY CHAIN PLANNING AND EXECUTION\n', './classroomLink/mbasc221.php'),
(45, 'HU307', '2024-08-05', '2024-12-01', 'Basic Econometrics\n', './classroomLink/hu307.php'),
(46, 'CH407', '2024-08-05', '2024-12-01', 'Polymer Blends and Composite\n', './classroomLink/ch407.php'),
(47, 'EP305', '2024-08-05', '2024-12-01', 'ATOMIC AND MOLECULAR PHYSICS\n', './classroomLink/ep305.php'),
(48, 'EP317', '2024-08-05', '2024-12-01', 'ADVANCED SEMICONDUCTOR DEVICE PHYSICS\n', './classroomLink/ep317.php'),
(49, 'EN305', '2024-08-05', '2024-12-01', 'SOIL POLLUTION AND REMEDIATION\n', './classroomLink/en305.php'),
(50, 'CE309', '2024-08-05', '2024-12-01', 'ENVIRONMENTAL ENGINEERING DESIGN\n', './classroomLink/ce309.php'),
(51, 'CE315', '2024-08-05', '2024-12-01', 'ROCK ENGINEERING\n', './classroomLink/ce315.php'),
(52, 'IT201', '2024-08-05', '2024-12-01', 'DATA STRUCTURES\n', './classroomLink/it201.php'),
(53, 'IT323', '2024-08-05', '2024-12-01', 'MACHINE LEARNING\n', './classroomLink/it323.php'),
(54, 'IT427', '2024-08-05', '2024-12-01', 'INTRUSION DETECTION AND INFORMATION WARFARE\n', './classroomLink/it427.php'),
(55, 'CO203', '2024-08-05', '2024-12-01', 'OBJECT ORIENTED PROGRAMMING\n', './classroomLink/co203.php'),
(56, 'CO327', '2024-08-05', '2024-12-01', 'MACHINE LEARNING\n', './classroomLink/co327.php'),
(57, 'SE305', '2024-08-05', '2024-12-01', 'SOFTWARE REQUIREMENT ENGINEERING\n', './classroomLink/se305.php'),
(58, 'SE203a', '2024-08-05', '2024-12-01', 'DATA STRUCTURES\n', './classroomLink/se203a.php'),
(59, 'MC205', '2024-08-05', '2024-12-01', 'PROBABILITY & STATISTICS\n', './classroomLink/mc205.php'),
(60, 'MC305', '2024-08-05', '2024-12-01', 'OPERATIONS RESEARCH\n', './classroomLink/mc305.php'),
(61, 'EE321', '2024-08-05', '2024-12-01', 'SOFT COMPUTING TECHNIQUES\n', './classroomLink/ee321.php'),
(62, 'EE323', '2024-08-05', '2024-12-01', 'FUNDAMENTALS OF MACHINE LEARNING\n', './classroomLink/ee323.php'),
(63, 'EE327', '2024-08-05', '2024-12-01', 'INTRODUCTION TO PYTHON PROGRAMMING\n', './classroomLink/ee327.php'),
(64, 'EE407', '2024-08-05', '2024-12-01', 'INSTRUMENTATION AND MEASUREMENT\n', './classroomLink/ee407.php'),
(65, 'EE425', '2024-08-05', '2024-12-01', 'IC TECHNOLOGY\n', './classroomLink/ee425.php'),
(66, 'EE427', '2024-08-05', '2024-12-01', 'COMPUTER ARCHITECTURE\n', './classroomLink/ee427.php'),
(67, 'EC325', '2024-08-05', '2024-12-01', 'PROBABILITY AND RANDOM PROCESS\n', './classroomLink/ec325.php'),
(68, 'CH315', '2024-08-05', '2024-12-01', 'PLASTIC TECHNOLOGY\n', './classroomLink/ch315.php'),
(69, 'CH201', '2024-08-05', '2024-12-01', 'CHEMICAL ENGINEERING PROCESS CALCULATIONS\n', './classroomLink/ch201.php'),
(70, 'ME351a', '2024-08-05', '2024-12-01', 'POWER PLANT ENGINEERING\n', './classroomLink/me351a.php'),
(71, 'ME367a', '2024-08-05', '2024-12-01', 'FINITE ELEMENT METHODS\n', './classroomLink/me367a.php'),
(72, 'AE321', '2024-08-05', '2024-12-01', 'ADVANCE STRENGTH OF MATERIALS\n', './classroomLink/ae321.php'),
(73, 'PE305', '2024-08-05', '2024-12-01', 'ADVANCE MACHINE DESIGN\n', './classroomLink/pe305.php'),
(74, 'MBAMK213', '2024-08-05', '2024-12-01', 'CONSUMER BEHAVIOUR\n', './classroomLink/mbamk213.php'),
(75, 'MBASC213', '2024-08-05', '2024-12-01', 'TOTAL QUALITY MANAGEMENT\n', './classroomLink/mbasc213.php'),
(76, 'BT305', '2024-08-05', '2024-12-01', 'INSTRUMENTATION IN BIOTECHNOLOGY\n', './classroomLink/bt305.php'),
(77, 'HU305', '2024-08-05', '2024-12-01', 'Macroeconomics\n', './classroomLink/hu305.php'),
(78, 'HU403', '2024-08-05', '2024-12-01', 'Economic Growth\n', './classroomLink/hu403.php'),
(79, 'HU325', '2024-08-05', '2024-12-01', 'Creative Writing Skills\n', './classroomLink/hu325.php'),
(80, 'HU413', '2024-08-05', '2024-12-01', 'Advanced Spoken Skills\n', './classroomLink/hu413.php'),
(81, 'EV301', '2024-08-05', '2024-12-01', 'Fundamentals of Eleectric Vehicles\n', './classroomLink/ev301.php'),
(82, 'EP309', '2024-08-05', '2024-12-01', 'QUANTUM INFORMATION AND COMPUTING\n', './classroomLink/ep309.php'),
(83, 'EN311', '2024-08-05', '2024-12-01', 'CLIMATE CHANGE & CDM\n', './classroomLink/en311.php'),
(84, 'CE305', '2024-08-05', '2024-12-01', 'MECHANICS OF MATERIALS\n', './classroomLink/ce305.php'),
(85, 'CE317', '2024-08-05', '2024-12-01', 'SOLID WASTE MANAGEMENT & AIR POLLUTION CONTROL\n', './classroomLink/ce317.php'),
(86, 'IT201', '2024-08-05', '2024-12-01', 'DATA STRUCTURES\n', './classroomLink/it201.php'),
(87, 'IT323', '2024-08-05', '2024-12-01', 'MACHINE LEARNING\n', './classroomLink/it323.php'),
(88, 'CO301', '2024-08-05', '2024-12-01', 'SOFTWARE ENGINEERING\n', './classroomLink/co301.php'),
(89, 'CO305', '2024-08-05', '2024-12-01', 'INFORMATION THEORY AND CODING\n', './classroomLink/co305.php'),
(90, 'CO327', '2024-08-05', '2024-12-01', 'MACHINE LEARNING\n', './classroomLink/co327.php'),
(91, 'MC303', '2024-08-05', '2024-12-01', 'STOCHASTIC PROCESSES\n', './classroomLink/mc303.php'),
(92, 'EE305', '2024-08-05', '2024-12-01', 'SIGNALS AND SYSTEMS\n', './classroomLink/ee305.php'),
(93, 'EE313', '2024-08-05', '2024-12-01', 'ENGINEERING ANALYSIS AND DESIGN\n', './classroomLink/ee313.php'),
(94, 'EE315', '2024-08-05', '2024-12-01', 'DIGITAL CONTROL AND STATE VARIABLE ANALYSIS\n', './classroomLink/ee315.php'),
(95, 'EE319', '2024-08-05', '2024-12-01', 'DIGITAL SYSTEM DESIGN\n', './classroomLink/ee319.php'),
(96, 'EE405', '2024-08-05', '2024-12-01', 'DIGITAL SIGNAL PROCESSING\n', './classroomLink/ee405.php'),
(97, 'EE409', '2024-08-05', '2024-12-01', 'SWITCHGEAR AND PROTECTION\n', './classroomLink/ee409.php'),
(98, 'EC323', '2024-08-05', '2024-12-01', 'CONTROL SYSTEMS\n', './classroomLink/ec323.php'),
(99, 'EC327', '2024-08-05', '2024-12-01', 'TIME FREQUENCY ANALYSIS\n', './classroomLink/ec327.php'),
(100, 'EC431', '2024-08-05', '2024-12-01', 'MEMS AND SENSOR DESIGN\n', './classroomLink/ec431.php'),
(101, 'CH405', '2024-08-05', '2024-12-01', 'FIBER TECHNOLOGY\n', './classroomLink/ch405.php'),
(102, 'ME353a', '2024-08-05', '2024-12-01', 'RENEWABLE SOURCES OF ENERGY\n', './classroomLink/me353a.php'),
(103, 'AE307', '2024-08-05', '2024-12-01', 'COMBUSTION GENERATED POLLUTION\n', './classroomLink/ae307.php'),
(104, 'PE353', '2024-08-05', '2024-12-01', 'SUPPLY CHAIN MANAGEMENT\n', './classroomLink/pe353.php'),
(105, 'MBAMK221', '2024-08-05', '2024-12-01', 'MARKETING OF SERVICES\n', './classroomLink/mbamk221.php'),
(106, 'MBA-105', '2024-08-05', '2024-12-01', 'FINANCIAL & COST ACCOUNTING\n', './classroomLink/mba-105.php'),
(107, 'BT325', '2024-08-05', '2024-12-01', 'CELL BIOLOGY\n', './classroomLink/bt325.php'),
(108, 'HU407', '2024-08-05', '2024-12-01', 'Wealth and Poverty of Nations\n', './classroomLink/hu407.php'),
(109, 'HU327', '2024-08-05', '2024-12-01', 'Non-Verbal Communication\n', './classroomLink/hu327.php'),
(110, 'EV351', '2024-08-05', '2024-12-01', 'E Mobility\n', './classroomLink/ev351.php'),
(111, 'EP307', '2024-08-05', '2024-12-01', 'BIOPHYSICS\n', './classroomLink/ep307.php'),
(112, 'EP321', '2024-08-05', '2024-12-01', 'ADVANCED WAFER PROCESSING\n', './classroomLink/ep321.php'),
(113, 'EN317', '2024-08-05', '2024-12-01', 'ENVIRONMENTAL MANAGEMENT\n', './classroomLink/en317.php'),
(114, 'CE313', '2024-08-05', '2024-12-01', 'EARTHQUAKE TECHNOLOGY\n', './classroomLink/ce313.php'),
(115, 'IT321', '2024-08-05', '2024-12-01', 'MALWARE ANALYSIS\n', './classroomLink/it321.php'),
(116, 'IT407', '2024-08-05', '2024-12-01', 'INFORMATION AND NETWORK SECURITY\n', './classroomLink/it407.php'),
(117, 'CO313', '2024-08-05', '2024-12-01', 'COMPUTER GRAPHICS\n', './classroomLink/co313.php'),
(118, 'CO325', '2024-08-05', '2024-12-01', 'PROBABILITY AND STATISTICS\n', './classroomLink/co325.php'),
(119, 'CO411', '2024-08-05', '2024-12-01', 'COMPUTER VISION\n', './classroomLink/co411.php'),
(120, 'SE323', '2024-08-05', '2024-12-01', 'THEORY OF COMPUTATION\n', './classroomLink/se323.php'),
(121, 'SE327', '2024-08-05', '2024-12-01', 'METHODS FOR DATA ANALYSIS\n', './classroomLink/se327.php'),
(122, 'MC319', '2024-08-05', '2024-12-01', 'COMPLEX ANALYSIS\n', './classroomLink/mc319.php'),
(123, 'EE419', '2024-08-05', '2024-12-01', 'PULSE WIDTH MODULATION FOR POWER CONVERTERS\n', './classroomLink/ee419.php'),
(124, 'EE429', '2024-08-05', '2024-12-01', 'POWER ELECTRONICS APPLICATION TO PHOTO-VOLTAIC SYSTEMS\n', './classroomLink/ee429.php'),
(125, 'EC311', '2024-08-05', '2024-12-01', 'ALGORITHMS ANALYSIS AND DESIGN\n', './classroomLink/ec311.php'),
(126, 'EC319', '2024-08-05', '2024-12-01', 'CMOS ANALOG INTEGRATED CIRCUIT\n', './classroomLink/ec319.php'),
(127, 'CH307', '2024-08-05', '2024-12-01', 'PETROLEUM REFINING ENGINEERING\n', './classroomLink/ch307.php'),
(128, 'ME355a', '2024-08-05', '2024-12-01', 'THERMAL SYSTEMS\n', './classroomLink/me355a.php'),
(129, 'AE317', '2024-08-05', '2024-12-01', 'POWER UNITS AND TRANSMISSION\n', './classroomLink/ae317.php'),
(130, 'BT323', '2024-08-05', '2024-12-01', 'POPULATION GENETICS\n', './classroomLink/bt323.php'),
(131, 'HU425', '2024-08-05', '2024-12-01', 'Soft Skills Development\n', './classroomLink/hu425.php'),
(132, 'IT307', '2024-08-05', '2024-12-01', 'PATTERN RECOGNITION\n', './classroomLink/it307.php'),
(133, 'IT351a', '2024-08-05', '2024-12-01', 'ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING\n', './classroomLink/it351a.php'),
(134, 'IT409', '2024-08-05', '2024-12-01', 'ENTERPRISE JAVA PROGRAMMING\n', './classroomLink/it409.php'),
(135, 'IT417', '2024-08-05', '2024-12-01', 'HIGH PERFORMANCE COMPUTING\n', './classroomLink/it417.php');

-- --------------------------------------------------------

--
-- Table structure for table `FacultyDetails`
--

CREATE TABLE `FacultyDetails` (
  `FID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `CourseID` int(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `FacultyDetails`
--

INSERT INTO `FacultyDetails` (`FID`, `Name`, `CourseID`, `Designation`, `Subject`) VALUES
('F102', 'Darling Sonkar\n', 52, 'Professor', 'DATA STRUCTURES\n'),
('F105', 'Poja Maurya\n', 78, 'Professor', 'Economic Growth\n'),
('F123', 'Dhanunjaya Seth\n', 57, 'PHD', 'SOFTWARE REQUIREMENT ENGINEERING\n'),
('F126', 'Pandari Yadav\n', 75, 'Professor', 'TOTAL QUALITY MANAGEMENT\n'),
('F130', 'Rakesk Tiwari\n', 50, 'Mtech', 'ENVIRONMENTAL ENGINEERING DESIGN\n'),
('F138', 'Kiccha Sonkar\n', 92, 'Assistant Professor', 'SIGNALS AND SYSTEMS\n'),
('F155', 'Jaydeep Vishwakarma\n', 82, 'Professor', 'QUANTUM INFORMATION AND COMPUTING\n'),
('F159', 'Pradheep Srivastav\n', 135, 'Assistant Professor', 'HIGH PERFORMANCE COMPUTING\n'),
('F169', 'Siddesh Gupta\n', 53, 'PHD', 'MACHINE LEARNING\n'),
('F172', 'Partha Pratim Maurrya\n', 99, 'Professor', 'TIME FREQUENCY ANALYSIS\n'),
('F177', 'Madhu Sudan Divedi\n', 47, 'Mtech', 'ATOMIC AND MOLECULAR PHYSICS\n'),
('F183', 'Mahabur Singh\n', 37, 'Assistant Professor', 'ADVANCED TOPICS IN ELECTRICAL MACHINES\n'),
('F184', 'Dundappa Rao\n', 109, 'Professor', 'Non-Verbal Communication\n'),
('F196', 'Raqeeb Divedi\n', 134, 'Mtech', 'ENTERPRISE JAVA PROGRAMMING\n'),
('F205', 'Umesh Yadav\n', 121, 'Mtech', 'METHODS FOR DATA ANALYSIS\n'),
('F206', 'Ravindra Rajput\n', 85, 'PHD', 'SOLID WASTE MANAGEMENT & AIR POLLUTION CONTROL\n'),
('F216', 'Sriparna Pandey\n', 98, 'Assistant Professor', 'CONTROL SYSTEMS\n'),
('F224', 'Saheem Kumari\n', 69, 'Assistant Professor', 'CHEMICAL ENGINEERING PROCESS CALCULATIONS\n'),
('F238', 'Ritupon Maurrya\n', 15, 'Mtech', 'TRANSPORT PHENOMENA\n'),
('F247', 'Lomesh Maurya\n', 13, 'Mtech', 'POLYMERIC MATERIALS\n'),
('F261', 'Raish Vishwakarma\n', 11, 'Professor', 'ANTENNA DESIGN\n'),
('F270', 'Apuii Singh\n', 29, 'Assistant Professor', 'DISCRETE STRUCTURES\n'),
('F279', 'Shiv Charan Divedi\n', 113, 'Assistant Professor', 'ENVIRONMENTAL MANAGEMENT\n'),
('F281', 'Neela Yadav\n', 73, 'Professor', 'ADVANCE MACHINE DESIGN\n'),
('F285', 'Piyarul Kumar\n', 56, 'PHD', 'MACHINE LEARNING\n'),
('F288', 'Arupa Rajput\n', 114, 'Professor', 'EARTHQUAKE TECHNOLOGY\n'),
('F289', 'Jitendrasinh Thakur\n', 90, 'PHD', 'MACHINE LEARNING\n'),
('F303', 'Sures Seth\n', 16, 'Assistant Professor', 'RUBBER TECHNOLOGY\n'),
('F305', 'Ipshita Kumar\n', 79, 'Assistant Professor', 'Creative Writing Skills\n'),
('F320', 'Ramesha Yadav\n', 24, 'Assistant Professor', 'APPLICATION OF GEO-INFORMATICS REMOTE SENSING AND GIS IN ENGINEERING\n'),
('F326', 'Shourya Tiwari\n', 89, 'Mtech', 'INFORMATION THEORY AND CODING\n'),
('F336', 'Gitaben Maurya\n', 86, 'Assistant Professor', 'DATA STRUCTURES\n'),
('F347', 'Rajuraj Thakur\n', 88, 'Assistant Professor', 'SOFTWARE ENGINEERING\n'),
('F355', 'Mahato Srivastav\n', 130, 'Mtech', 'POPULATION GENETICS\n'),
('F360', 'Aawara Yadav\n', 39, 'Professor', 'BIO-MEDICAL ELECTRONICS & INSTRUMENTATION\n'),
('F364', 'Vicky Kumar Rai\n', 9, 'PHD', 'OBJECT ORIENTED PROGRAMMING\n'),
('F374', 'Samina Yadav\n', 36, 'Mtech', 'DESIGN OF ELECTRICAL MACHINES\n'),
('F383', 'Baalaark Rao\n', 65, 'Assistant Professor', 'IC TECHNOLOGY\n'),
('F384', 'Kalsang Singh\n', 128, 'PHD', 'THERMAL SYSTEMS\n'),
('F386', 'Shyam Kumar Yadav\n', 101, 'Mtech', 'FIBER TECHNOLOGY\n'),
('F387', 'Ravikant Devi\n', 51, 'Mtech', 'ROCK ENGINEERING\n'),
('F390', 'Shivang Mishra\n', 61, 'Professor', 'SOFT COMPUTING TECHNIQUES\n'),
('F400', 'P M Rao\n', 119, 'Mtech', 'COMPUTER VISION\n'),
('F403', 'Chethana Gupta\n', 74, 'Assistant Professor', 'CONSUMER BEHAVIOUR\n'),
('F407', 'Rit Rai\n', 58, 'Assistant Professor', 'DATA STRUCTURES\n'),
('F416', 'Chapala Tiwari\n', 27, 'Professor', 'PATTERN RECOGNITION\n'),
('F417', 'Vishal Sharma Gupta\n', 1, 'PHD', 'CLASSICAL AND QUANTUM MECHANICS\n'),
('F439', 'Farzan Rai\n', 44, 'Professor', 'SUPPLY CHAIN PLANNING AND EXECUTION\n'),
('F461', 'Guhan Gupta\n', 80, 'PHD', 'Advanced Spoken Skills\n'),
('F463', 'Shail Gupta\n', 103, 'Mtech', 'COMBUSTION GENERATED POLLUTION\n'),
('F477', 'Ganapathy Rai\n', 64, 'Mtech', 'INSTRUMENTATION AND MEASUREMENT\n'),
('F479', 'Manikarnika Gupta\n', 133, 'Mtech', 'ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING\n'),
('F498', 'Omomi Maurya\n', 26, 'Assistant Professor', 'COMPUTER NETWORKS\n'),
('F501', 'Shrestha Maurya\n', 23, 'Professor', 'ADVANCED GEO-TECHNICAL ENGINEERING\n'),
('F506', 'Balraj Tiwari\n', 77, 'Mtech', 'Macroeconomics\n'),
('F521', 'Velly Seth\n', 10, 'Assistant Professor', 'POWER STATION PRACTICES\n'),
('F522', 'Lalsinh Rajput\n', 12, 'Assistant Professor', 'MICROPROCESSORS AND INTERFACING\n'),
('F523', 'Trideep Pandey\n', 7, 'Mtech', 'COMPUTER GRAPHICS\n'),
('F527', 'Dilipsinh Divedi\n', 28, 'PHD', 'CYBER LAWS\n'),
('F529', 'Sukritika Divedi\n', 31, 'Professor', 'PROBABILITY AND STATISTICS\n'),
('F557', 'Dolat Pratap\n', 97, 'Professor', 'SWITCHGEAR AND PROTECTION\n'),
('F566', 'Yashawant Srivastav\n', 38, 'Assistant Professor', 'SEMICONDUCTOR DEVICE ELECTRONICS\n'),
('F574', 'Hina Divedi\n', 76, 'Assistant Professor', 'INSTRUMENTATION IN BIOTECHNOLOGY\n'),
('F585', 'Asr Pandit\n', 93, 'Mtech', 'ENGINEERING ANALYSIS AND DESIGN\n'),
('F589', 'Rasmiranjan Rao\n', 54, 'Professor', 'INTRUSION DETECTION AND INFORMATION WARFARE\n'),
('F594', 'Sabeel Maurya\n', 124, 'Assistant Professor', 'POWER ELECTRONICS APPLICATION TO PHOTO-VOLTAIC SYSTEMS\n'),
('F603', 'Khem Pandey\n', 48, 'Professor', 'ADVANCED SEMICONDUCTOR DEVICE PHYSICS\n'),
('F604', 'Vasudevan Yadav\n', 18, 'Mtech', 'MARKETING MANAGEMENT\n'),
('F625', 'Jali Sonkar\n', 67, 'Assistant Professor', 'PROBABILITY AND RANDOM PROCESS\n'),
('F632', 'Shadan Divedi\n', 8, 'Mtech', 'ENGINEERING ANALYSIS AND DESIGN (SOFTWARE ENGINEERING)\n'),
('F634', 'Premika Rai\n', 123, 'Professor', 'PULSE WIDTH MODULATION FOR POWER CONVERTERS\n'),
('F646', 'Kruti Yadav\n', 91, 'Mtech', 'STOCHASTIC PROCESSES\n'),
('F647', 'Pitambar Yadav\n', 46, 'Professor', 'Polymer Blends and Composite\n'),
('F653', 'Khursid Rajput\n', 81, 'PHD', 'Fundamentals of Eleectric Vehicles\n'),
('F663', 'Ahmad Raza Pandey\n', 34, 'Assistant Professor', 'SPECIAL ELECTRICAL MACHINES\n'),
('F674', 'Arshi Pratap\n', 49, 'Professor', 'SOIL POLLUTION AND REMEDIATION\n'),
('F678', 'Harjot Pandit\n', 5, 'Professor', 'ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING\n'),
('F687', 'Satosh Gupta\n', 125, 'Mtech', 'ALGORITHMS ANALYSIS AND DESIGN\n'),
('F693', 'Atul Singh Sonkar\n', 55, 'PHD', 'OBJECT ORIENTED PROGRAMMING\n'),
('F713', 'Mahindar Gupta\n', 100, 'Assistant Professor', 'MEMS AND SENSOR DESIGN\n'),
('F721', 'Iftekhar Mishra\n', 129, 'Mtech', 'POWER UNITS AND TRANSMISSION\n'),
('F727', 'Darling Tiwari\n', 106, 'Professor', 'FINANCIAL & COST ACCOUNTING\n'),
('F735', 'Shreyansh Pandit\n', 21, 'Mtech', 'SEMICONDUCTOR DEVICES\n'),
('F741', 'Bajrang Maurya\n', 41, 'Mtech', 'INDUSTRIAL ENGINEERING\n'),
('F754', 'Sakshi Tiwari\n', 68, 'Professor', 'PLASTIC TECHNOLOGY\n'),
('F757', 'Rovi Rai\n', 111, 'PHD', 'BIOPHYSICS\n'),
('F767', 'Dhruv Divedi\n', 72, 'PHD', 'ADVANCE STRENGTH OF MATERIALS\n'),
('F768', 'Yogita Vishwakarma\n', 131, 'Mtech', 'Soft Skills Development\n'),
('F784', 'Ekta Maurrya\n', 33, 'Assistant Professor', 'SOFTWARE MAINTENANCE\n'),
('F793', 'Ruhit Seth\n', 70, 'Assistant Professor', 'POWER PLANT ENGINEERING\n'),
('F797', 'Kuber Divedi\n', 6, 'PHD', 'DATA STRUCTURES\n'),
('F799', 'Trusha Vishwakarma\n', 40, 'Mtech', 'MASS TRANSFER -1\n'),
('F800', 'Sudem Sonkar\n', 3, 'Professor', 'ANALYSIS OF DETERMINATE STRUCTURES\n'),
('F801', 'Md Khalid Pandey\n', 94, 'Assistant Professor', 'DIGITAL CONTROL AND STATE VARIABLE ANALYSIS\n'),
('F803', 'Satvi Srivastav\n', 116, 'PHD', 'INFORMATION AND NETWORK SECURITY\n'),
('F806', 'Tunu Kumari\n', 30, 'Assistant Professor', 'THEORY OF COMPUTATION\n'),
('F815', 'Vishwakarma\n', 4, 'PHD', 'MALWARE ANALYSIS\n'),
('F819', 'Karshan Vishwakarma\n', 22, 'Mtech', 'WASTE WATER ENGINEERING: DESIGN AND APPLICATIONS\n'),
('F827', 'Priya Sonkar\n', 122, 'Assistant Professor', 'COMPLEX ANALYSIS\n'),
('F839', 'Fazil Pandit\n', 66, 'Assistant Professor', 'COMPUTER ARCHITECTURE\n'),
('F846', 'Jatindra Yadav\n', 19, 'Professor', 'Indian Economy\n'),
('F848', 'Rav Singh\n', 108, 'Assistant Professor', 'Wealth and Poverty of Nations\n'),
('F850', 'Pk Pandit\n', 20, 'PHD', 'Basic Communication Skills\n'),
('F851', 'Mir Mishra\n', 112, 'Assistant Professor', 'ADVANCED WAFER PROCESSING\n'),
('F857', 'Sumati Kumari\n', 45, 'PHD', 'Basic Econometrics\n'),
('F861', 'Rituparna Rao\n', 96, 'Professor', 'DIGITAL SIGNAL PROCESSING\n'),
('F871', 'Sulthan Pandey\n', 2, 'Professor', 'FLUID MECHANICS\n'),
('F873', 'Chakrapani Rao\n', 35, 'Assistant Professor', 'RENEWABLE ENERGY SYSTEMS\n'),
('F875', 'Somenath Divedi\n', 71, 'PHD', 'FINITE ELEMENT METHODS\n'),
('F876', 'Jinu Srivastav\n', 102, 'Professor', 'RENEWABLE SOURCES OF ENERGY\n'),
('F877', 'Swarneem Sonkar\n', 132, 'Mtech', 'PATTERN RECOGNITION\n'),
('F880', 'Prudvi Kumar\n', 115, 'Assistant Professor', 'MALWARE ANALYSIS\n'),
('F887', 'Bhishma Vishwakarma\n', 14, 'Assistant Professor', 'CHARACTERIZATION OF MATERIALS\n'),
('F889', 'Biradar Divedi\n', 87, 'PHD', 'MACHINE LEARNING\n'),
('F910', 'Yeshi Vishwakarma\n', 62, 'Mtech', 'FUNDAMENTALS OF MACHINE LEARNING\n'),
('F913', 'Badmash Divedi\n', 42, 'Professor', 'COMPUTATIONAL FLUID DYNAMICS\n'),
('F921', 'Meeran Rai\n', 25, 'Assistant Professor', 'DESIGN OF RCC STRUCTURES\n'),
('F922', 'Niteesh Mishra\n', 43, 'PHD', 'ADVANCE MACHINING PROCESS\n'),
('F936', 'Indal Rajput\n', 17, 'Professor', 'TOTAL QUALITY MANAGEMENT\n'),
('F967', 'Sv Thakur\n', 32, 'PHD', 'WEB TECHNOLOGY\n'),
('F971', 'Sawroop Maurya\n', 117, 'Professor', 'COMPUTER GRAPHICS\n'),
('F987', 'Premal Thakur\n', 59, 'Professor', 'PROBABILITY & STATISTICS\n');

-- --------------------------------------------------------

--
-- Table structure for table `LoginDetails`
--

CREATE TABLE `LoginDetails` (
  `UserID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `LoginDetails`
--

INSERT INTO `LoginDetails` (`UserID`, `Password`) VALUES
('admin', 'admin'),
('F102DS', 'F102@Darling'),
('F105PM', 'F105@Poja'),
('F123DS', 'F123@Dhanunjaya'),
('F126PY', 'F126@Pandari'),
('F130RT', 'F130@Rakesk'),
('F138KS', 'F138@Kiccha'),
('F155JV', 'F155@Jaydeep'),
('F159PS', 'F159@Pradheep'),
('F169SG', 'F169@Siddesh'),
('F172PP', 'F172@Partha'),
('F177MS', 'F177@Madhu'),
('F183MS', 'F183@Mahabur'),
('F184DR', 'F184@Dundappa'),
('F196RD', 'F196@Raqeeb'),
('F205UY', 'F205@Umesh'),
('F206RR', 'F206@Ravindra'),
('F216SP', 'F216@Sriparna'),
('F224SK', 'F224@Saheem'),
('F238RM', 'F238@Ritupon'),
('F247LM', 'F247@Lomesh'),
('F261RV', 'F261@Raish'),
('F270AS', 'F270@Apuii'),
('F279SC', 'F279@Shiv'),
('F281NY', 'F281@Neela'),
('F285PK', 'F285@Piyarul'),
('F288AR', 'F288@Arupa'),
('F289JT', 'F289@Jitendrasinh'),
('F303SS', 'F303@Sures'),
('F305IK', 'F305@Ipshita'),
('F320RY', 'F320@Ramesha'),
('F326ST', 'F326@Shourya'),
('F336GM', 'F336@Gitaben'),
('F347RT', 'F347@Rajuraj'),
('F355MS', 'F355@Mahato'),
('F360AY', 'F360@Aawara'),
('F364VK', 'F364@Vicky'),
('F374SY', 'F374@Samina'),
('F383BR', 'F383@Baalaark'),
('F384KS', 'F384@Kalsang'),
('F386SK', 'F386@Shyam'),
('F387RD', 'F387@Ravikant'),
('F390SM', 'F390@Shivang'),
('F400PM', 'F400@P'),
('F403CG', 'F403@Chethana'),
('F407RR', 'F407@Rit'),
('F416CT', 'F416@Chapala'),
('F417VS', 'F417@Vishal'),
('F439FR', 'F439@Farzan'),
('F461GG', 'F461@Guhan'),
('F463SG', 'F463@Shail'),
('F477GR', 'F477@Ganapathy'),
('F479MG', 'F479@Manikarnika'),
('F498OM', 'F498@Omomi'),
('F501SM', 'F501@Shrestha'),
('F506BT', 'F506@Balraj'),
('F521VS', 'F521@Velly'),
('F522LR', 'F522@Lalsinh'),
('F523TP', 'F523@Trideep'),
('F527DD', 'F527@Dilipsinh'),
('F529SD', 'F529@Sukritika'),
('F557DP', 'F557@Dolat'),
('F566YS', 'F566@Yashawant'),
('F574HD', 'F574@Hina'),
('F585AP', 'F585@Asr'),
('F589RR', 'F589@Rasmiranjan'),
('F594SM', 'F594@Sabeel'),
('F603KP', 'F603@Khem'),
('F604VY', 'F604@Vasudevan'),
('F625JS', 'F625@Jali'),
('F632SD', 'F632@Shadan'),
('F634PR', 'F634@Premika'),
('F646KY', 'F646@Kruti'),
('F647PY', 'F647@Pitambar'),
('F653KR', 'F653@Khursid'),
('F663AR', 'F663@Ahmad'),
('F674AP', 'F674@Arshi'),
('F678HP', 'F678@Harjot'),
('F687SG', 'F687@Satosh'),
('F693AS', 'F693@Atul'),
('F713MG', 'F713@Mahindar'),
('F721IM', 'F721@Iftekhar'),
('F727DT', 'F727@Darling'),
('F735SP', 'F735@Shreyansh'),
('F741BM', 'F741@Bajrang'),
('F754ST', 'F754@Sakshi'),
('F757RR', 'F757@Rovi'),
('F767DD', 'F767@Dhruv'),
('F768YV', 'F768@Yogita'),
('F784EM', 'F784@Ekta'),
('F793RS', 'F793@Ruhit'),
('F797KD', 'F797@Kuber'),
('F799TV', 'F799@Trusha'),
('F800SS', 'F800@Sudem'),
('F801MK', 'F801@Md'),
('F803SS', 'F803@Satvi'),
('F806TK', 'F806@Tunu'),
('F815V', 'F815@Vishwakarma\n'),
('F819KV', 'F819@Karshan'),
('F827PS', 'F827@Priya'),
('F839FP', 'F839@Fazil'),
('F846JY', 'F846@Jatindra'),
('F848RS', 'F848@Rav'),
('F850PP', 'F850@Pk'),
('F851MM', 'F851@Mir'),
('F857SK', 'F857@Sumati'),
('F861RR', 'F861@Rituparna'),
('F871SP', 'F871@Sulthan'),
('F873CR', 'F873@Chakrapani'),
('F875SD', 'F875@Somenath'),
('F876JS', 'F876@Jinu'),
('F877SS', 'F877@Swarneem'),
('F880PK', 'F880@Prudvi'),
('F887BV', 'F887@Bhishma'),
('F889BD', 'F889@Biradar'),
('F910YV', 'F910@Yeshi'),
('F913BD', 'F913@Badmash'),
('F921MR', 'F921@Meeran'),
('F922NM', 'F922@Niteesh'),
('F936IR', 'F936@Indal'),
('F967ST', 'F967@Sv'),
('F971SM', 'F971@Sawroop'),
('F987PT', 'F987@Premal'),
('S1001', 'password1');

-- --------------------------------------------------------

--
-- Table structure for table `StudentDetails`
--

CREATE TABLE `StudentDetails` (
  `SID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Roll_No` varchar(255) NOT NULL,
  `Regulation` varchar(255) NOT NULL,
  `CoursesEnrolled` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `StudentDetails`
--

INSERT INTO `StudentDetails` (`SID`, `Name`, `Roll_No`, `Regulation`, `CoursesEnrolled`) VALUES
('S1001', 'Shashank Soren', '2K22/ME/240', 'Btech Mechanical Engineering', 'IT303, IT407, CO301, ME301, ME303, MG301 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CourseDetails`
--
ALTER TABLE `CourseDetails`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `FacultyDetails`
--
ALTER TABLE `FacultyDetails`
  ADD PRIMARY KEY (`FID`),
  ADD KEY `c1` (`CourseID`);

--
-- Indexes for table `LoginDetails`
--
ALTER TABLE `LoginDetails`
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `StudentDetails`
--
ALTER TABLE `StudentDetails`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CourseDetails`
--
ALTER TABLE `CourseDetails`
  MODIFY `CourseID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `FacultyDetails`
--
ALTER TABLE `FacultyDetails`
  ADD CONSTRAINT `c1` FOREIGN KEY (`CourseID`) REFERENCES `CourseDetails` (`CourseID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
