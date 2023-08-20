-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql109.epizy.com
-- Generation Time: May 12, 2022 at 12:53 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31704798_doctor_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_email`, `admin_password`, `admin_name`) VALUES
(1, 'johnsmith@gmail.com', 'password', 'John smith');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `reason` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `appointment_time` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_comment` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `doctor_name` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_contact` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_expertise` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fee` int(255) NOT NULL,
  `patient_name` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `patient_contact` int(30) NOT NULL,
  `patient_address` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `patient_email` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `payment` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `doctor_email` varchar(22) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`appointment_id`, `doctor_id`, `reason`, `appointment_time`, `doctor_comment`, `doctor_name`, `doctor_contact`, `doctor_expertise`, `fee`, `patient_name`, `patient_contact`, `patient_address`, `patient_email`, `payment`, `date`, `doctor_email`) VALUES
(53, 9, 'asdasd', '11.00am', '', 'Dr. Kevin Wong', '11415918142', 'Pediatrics', 2500, 'Sheldon Cooper', 2147483647, '', 'cooper@gmail.com', 'Bank Transfer', '2022-05-30', 'wong@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `firstname` int(11) NOT NULL,
  `lastname` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `firstname`, `lastname`, `email`, `comment`) VALUES
(1, 0, 0, 0, 'hello i am good'),
(2, 0, 0, 0, 'i have an inquiry');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule_table`
--

CREATE TABLE `doctor_schedule_table` (
  `doctor_schedule_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_schedule_date` date NOT NULL,
  `doctor_schedule_day` enum('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') COLLATE utf8_unicode_ci NOT NULL,
  `doctor_schedule_start_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_schedule_end_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `average_consulting_time` int(5) NOT NULL,
  `doctor_schedule_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor_schedule_table`
--

INSERT INTO `doctor_schedule_table` (`doctor_schedule_id`, `doctor_id`, `doctor_schedule_date`, `doctor_schedule_day`, `doctor_schedule_start_time`, `doctor_schedule_end_time`, `average_consulting_time`, `doctor_schedule_status`) VALUES
(2, 1, '2021-02-19', 'Friday', '09:00', '14:00', 15, 'Active'),
(3, 2, '2021-02-19', 'Friday', '09:00', '12:00', 15, 'Active'),
(4, 5, '2021-02-19', 'Friday', '10:00', '14:00', 10, 'Active'),
(5, 3, '2021-02-19', 'Friday', '13:00', '17:00', 20, 'Active'),
(6, 4, '2021-02-19', 'Friday', '15:00', '18:00', 5, 'Active'),
(7, 5, '2021-02-22', 'Monday', '18:00', '20:00', 10, 'Active'),
(8, 2, '2021-02-24', 'Wednesday', '09:30', '12:30', 10, 'Active'),
(9, 5, '2021-02-24', 'Wednesday', '11:00', '15:00', 10, 'Active'),
(10, 1, '2021-02-24', 'Wednesday', '12:00', '15:00', 10, 'Active'),
(11, 3, '2021-02-24', 'Wednesday', '14:00', '17:00', 15, 'Active'),
(12, 4, '2021-02-24', 'Wednesday', '16:00', '20:00', 10, 'Active'),
(13, 6, '2021-02-24', 'Wednesday', '15:30', '18:30', 10, 'Active'),
(14, 6, '2021-02-25', 'Thursday', '10:00', '13:30', 10, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `doctor_id` int(11) NOT NULL,
  `doctor_email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_profile_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `doctor_date_of_birth` date NOT NULL,
  `doctor_degree` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_expert_in` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL,
  `doctor_added_on` datetime NOT NULL,
  `doctor_fee` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`doctor_id`, `doctor_email`, `doctor_password`, `doctor_name`, `doctor_profile_image`, `doctor_phone_no`, `doctor_address`, `doctor_date_of_birth`, `doctor_degree`, `doctor_expert_in`, `doctor_status`, `doctor_added_on`, `doctor_fee`) VALUES
(1, 'muko@gmail.com', 'password', 'Dr. Analyn Muko', '', '09154593893', 'Malabon City Hospital', '1970-05-08', 'Doctor of Osteopathic Medicine (D.O.)', 'neurologist', 'Active', '2022-05-10 17:04:33', 1500),
(2, 'santos@gmail.com', 'password', 'Dra. Lorna B. Santos', '', '06344593893', 'Dr. Jose Fabella Memorial Hospital', '1905-05-19', 'Doctor of Medicine (M.D.)', 'Gynecologist', 'Active', '2022-05-10 17:04:33', 800),
(3, 'pangilinan@gmail.com', 'password', 'Dr. James V. Pangilinan MD\r\n', '', '5845868365', 'Santa Ana Hospital', '1982-07-08', 'Doctor of Osteopathic Medicine (D.O.)', 'Orthopedics\r\n', 'Active', '2022-06-10 17:04:33', 1500),
(4, 'almazan@gmail.com', 'password', 'Dr. Leon I. Almazan', '', '8462094758', 'Philippine General Hospital', '1982-05-20', 'Doctor of Medicine (M.D.)', 'Neurologist', 'Active', '2022-05-10 17:04:33', 1000),
(5, 'banaag@gmail.com', 'password', 'Dra. Maja Althea O. Banaag', '', '09264518364', 'Metropolitan Medical Center', '1990-09-20', 'Doctor of Osteopathic Medicine (D.O.)', 'Cardiologist', 'Active', '2022-01-10 17:04:33', 1500),
(6, 'dimaano@gmail.com', 'password', 'Dr. Gabriel E. Dimaano', '', '08473625919', 'Chinese General Hospital and Medical Center', '1971-02-20', 'Doctor of Medicine (M.D.)', 'Oncologist', 'Active', '2022-11-10 17:04:33', 700),
(7, 'delmundo@gmail.com', 'password', 'Dr. Jose Benito Del Mundo ', '', '08473625919', 'University of Santo Tomas Hospital', '1969-02-20', 'Doctor of Medicine (M.D.)', 'Pulmonologist', 'Active', '2022-11-10 17:04:33', 1700),
(8, 'mendez@gmail.com', 'password', 'Dr. John Aaron Mendez ', '', '08473625919', 'Our Lady of Lourdes Hospital', '1985-01-20', 'Doctor of Medicine (M.D.)', 'Dermatologist', 'Active', '2022-01-10 17:04:33', 800),
(9, 'wong@gmail.com', 'password', 'Dr. Kevin Wong', '', '11415918142', 'Hospital of the Infant Jesus', '1990-01-20', 'Doctor of Medicine (M.D.)', 'Pediatrics', 'Active', '2022-01-10 17:04:33', 2000),
(10, 'fernandez@gmail.com', 'password', 'Dra. Vanessa T. Fernandez', '', '08273652998', 'United Doctors Medical Center', '1987-01-25', 'Doctor of Medicine (M.D.)', 'Ophthalmologist', 'Active', '2022-01-10 17:04:33', 2000),
(11, 'chaves@gmail.com', 'password', 'Dra. Alicia Mariel D. Chaves', '', '02763565678', 'San Lazaro Hospital', '1991-05-25', 'Doctor of Medicine (M.D.)', 'Otolaryngologist', 'Active', '2022-01-10 17:04:33', 1200),
(12, 'panganiban@gmail.com', 'password', 'Dr. John Mark B. Panganiban', '', '08367549899', 'Our Lady of Lourdes Hospital', '1965-09-25', 'Doctor of Medicine (M.D.)', 'Psychiatrist', 'Active', '2022-01-10 17:04:33', 2200),
(13, 'suarez@gmail.com', 'password', 'Dr. Marcus Franco R. Suarez', '', '02874653212', 'Ospital ng Maynila Medical Center', '1988-09-25', 'Doctor of Medicine (M.D.)', 'Neurologist', 'Active', '2022-01-10 17:04:33', 900),
(14, 'guttierez@gmail.com', 'password', 'Dr. Larry M. Gutierrez', '', '02942842044', 'Mary Chiles General Hospital', '1976-10-25', 'Doctor of Medicine (M.D.)', 'Pediatrician', 'Active', '2022-01-10 17:04:33', 500),
(15, 'tess@gmail.com', 'password', 'Dra. Mary Tess', '', '09249484283', 'ManilaMed', '1980-10-11', 'Doctor of Medicine (M.D.)', 'Gynecologist', 'Active', '2022-01-10 17:04:33', 2000),
(16, 'tolentino@gmail.com', 'password', 'Dra. Melissa H. Tolentino', '', '09998374857', 'Mary Chiles General Hospital', '1955-10-11', 'Doctor of Medicine (M.D.)', 'Oncologist', 'Active', '2022-01-10 17:04:33', 1000),
(17, 'velasco@gmail.com', 'password', 'Dr. Richard K. Velasco', '', '09384756839', 'Manila Doctors Hospital', '1980-10-11', 'Doctor of Medicine (M.D.)', 'Orthopedics', 'Active', '2022-01-10 17:04:33', 1200),
(18, 'carandang@gmail.com', 'password', 'Dra. Chezka I. Carandang', '', '0998652334', 'Metropolitan Medical Center', '1970-10-11', 'Doctor of Medicine (M.D.)', 'Pulmonologist', 'Active', '2022-01-10 17:04:33', 1100),
(19, 'dy@gmail.com', 'password', 'Dra. Kylie Joyce E. Dy', '', '08938490284', 'Chinese General Hospital and Medical Center', '1980-11-11', 'Doctor of Medicine (M.D.)', 'Dermatologist', 'Active', '2022-01-10 17:04:33', 2000),
(20, 'catapang@gmail.com', 'password', 'Dr. Ferdinand John D. Catapang', '', '09283746670', 'Perpetual Help Hospital', '1991-11-11', 'Doctor of Medicine (M.D.)', 'Gastroenterologist', 'Active', '2022-01-10 17:04:33', 2500),
(21, 'delrosario@gmail.com', 'password', 'Dr. Ramon Jose L. Del Rosario', '', '0983748293', 'Philippine General Hospital', '1989-11-11', 'Doctor of Medicine (M.D.)', 'Psychiatrist', 'Active', '2022-01-10 17:04:33', 3000),
(22, 'cabunlog@gmail.com', 'password', 'Dra. Mathew K. Cabunlog', '', '09134524632', 'Tondo Medical Center', '1989-10-11', 'Doctor of Medicine (M.D.)', 'Pediatrics', 'Active', '2022-01-10 17:04:33', 400),
(23, 'drake@gmail.com', 'password', 'Drake Ramoray', '', '123456789', 'Marikina State Hospital', '0000-00-00', '', 'Dermatologist', 'Active', '0000-00-00 00:00:00', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(22) NOT NULL,
  `feedback` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`) VALUES
(1, 'someone@gmail.com', 'love this app');

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `patient_id` int(11) NOT NULL,
  `patient_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `patient_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_bday` date NOT NULL,
  `patient_gender` enum('Male','Female','Other') COLLATE utf8_unicode_ci NOT NULL,
  `patient_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `patient_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `patient_blood` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `doctor_schedule_table`
--
ALTER TABLE `doctor_schedule_table`
  ADD PRIMARY KEY (`doctor_schedule_id`);

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_schedule_table`
--
ALTER TABLE `doctor_schedule_table`
  MODIFY `doctor_schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
