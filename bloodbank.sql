-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 03:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_admin` (IN `admin_name` VARCHAR(50), IN `admin_contact` VARCHAR(50), IN `admin_email` VARCHAR(50), IN `admin_password` VARCHAR(13), IN `admin_status` INT)  BEGIN
INSERT INTO tbl_admin
    	(
			admin_name ,
            admin_contact,
		 admin_email ,
		 admin_password ,
		 admin_status  
        )
        VALUES
            (
         admin_name ,
         admin_contact,
		 admin_email ,
		 admin_password ,
		 admin_status);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_bloodbank` (IN `bloodbank_name` VARCHAR(50), IN `bloodbank_email` VARCHAR(100), IN `bloodbank_area` VARCHAR(20), IN `bloodbank_contact` VARCHAR(13), IN `bloodbank_address` VARCHAR(100), IN `bloodbank_password` VARCHAR(12))  BEGIN
	INSERT INTO tbl_blood_bank
    	(
        	bloodbank_name,
			bloodbank_email,
			bloodbank_area,
			bloodbank_contact,
			bloodbank_address,
			bloodbank_password
        )
        VALUES
            (
            bloodbank_name,
			bloodbank_email,
			bloodbank_area,
			bloodbank_contact,
			bloodbank_address,
			bloodbank_password
	    ) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_camp` (IN `camp_name` VARCHAR(50), IN `camp_org_email` VARCHAR(50), IN `camp_venueDate` DATE, IN `camp_registrationDate` DATE, IN `camp_location` VARCHAR(50), IN `camp_time` TIME, IN `camp_contact` VARCHAR(13))  NO SQL
BEGIN
    INSERT INTO tbl_camp(
        camp_name,
        camp_org_email,
        camp_venueDate,
        camp_registrationDate,
        camp_location,
        camp_time,
        camp_contact
    )
VALUES(
    camp_name,
    camp_org_email,
    camp_venueDate,
    camp_registrationDate,
    camp_location,
    camp_time,
    camp_contact
);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_donor` (IN `donor_name` VARCHAR(50), IN `donor_gender` CHAR(1), IN `donor_dob` DATE, IN `donor_email` VARCHAR(50), IN `donor_city` VARCHAR(20), IN `donor_area` VARCHAR(20), IN `donor_address` VARCHAR(100), IN `donor_contact` VARCHAR(13), IN `donor_blood_group` VARCHAR(3), IN `donation_date` DATE, IN `donor_service` CHAR(1), IN `donor_donation_months` INT(11), IN `donor_password` VARCHAR(12))  BEGIN
    INSERT INTO tbl_donor
        (
            donor_name,
            donor_gender,
            donor_dob,
            donor_email,
            donor_city,
            donor_area,
            donor_address,
            donor_contact,
            donor_blood_group,
            donation_date,
            donor_service,
            donor_donation_months,
            donor_password
        )
        VALUES
            (
           donor_name,
            donor_gender,
            donor_dob,
            donor_email,
            donor_city,
            donor_area,
            donor_address,
            donor_contact,
            donor_blood_group,
            donation_date,
            donor_service,
            donor_donation_months,
            donor_password
        ) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_hospital` (IN `hospital_name` VARCHAR(50), IN `hospital_email` VARCHAR(100), IN `hospital_area` VARCHAR(20), IN `hospital_contact` VARCHAR(13), IN `hospital_address` VARCHAR(100), IN `hospital_password` VARCHAR(12))  BEGIN
	INSERT INTO tbl_hospital
    	(
        hospital_name,
	 hospital_email,
	 hospital_area ,
	 hospital_contact ,
	 hospital_address ,
	  hospital_password 
        )
        VALUES
            (
        hospital_name,
	 hospital_email,
	 hospital_area ,
	 hospital_contact ,
	 hospital_address ,
	  hospital_password 
	    ) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_Organization` (IN `org_name` VARCHAR(20), IN `org_contact` VARCHAR(13), IN `org_email` VARCHAR(100), IN `org_password` VARCHAR(20), IN `org_address` VARCHAR(200))  BEGIN
	INSERT INTO tbl_organization
    	(
			org_name,
			org_contact,
			org_email,
			org_password,
			org_address
		)
        VALUES
            (
            org_name,
			org_contact,
			org_email,
			org_password,
			org_address
	    ) ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pr_recipient` (IN `recipient_name` VARCHAR(50), IN `recipient_gender` CHAR(1), IN `recipient_blood_group` CHAR(3), IN `recipient_contact` VARCHAR(13), IN `recipient_area` VARCHAR(20), IN `recipient_address` VARCHAR(100), IN `recipient_relation` VARCHAR(30), IN `hospital_name` VARCHAR(50), IN `doctor_name` VARCHAR(50), IN `recipient_status` CHAR(1), IN `patient_name` VARCHAR(50))  BEGIN
	INSERT INTO tbl_recipient
    	(
	
		 recipient_name,
		 recipient_gender ,
		recipient_blood_group ,
		 recipient_contact,
		 recipient_area ,
		 recipient_address ,
		 recipient_relation,
		 hospital_name ,
		 doctor_name ,
		 recipient_status,
            patient_name
        )
        VALUES
		(
     
		 recipient_name,
		 recipient_gender ,
		recipient_blood_group ,
		 recipient_contact,
		 recipient_area ,
		 recipient_address ,
		 recipient_relation,
		 hospital_name ,
		 doctor_name ,
		 recipient_status,
            patient_name
	    ) ;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_name` varchar(50) NOT NULL,
  `admin_contact` varchar(13) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_name`, `admin_contact`, `admin_email`, `admin_password`, `admin_status`) VALUES
('Denish', '9157434949', 'drmaniya0196@gmail.com', '123', 1),
('Mahima', '9913705414', 'mahigajiwala@gmail.com', 'mahima', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blood`
--

CREATE TABLE `tbl_blood` (
  `blood_id` bigint(20) NOT NULL,
  `blood_donor_name` varchar(50) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `blood_donor_gender` varchar(6) NOT NULL,
  `blood_givenDate` date NOT NULL,
  `blood_donor_email` varchar(50) DEFAULT NULL,
  `blood_donor_contact` varchar(13) NOT NULL,
  `blood_status` int(11) NOT NULL,
  `uploaded_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blood`
--

INSERT INTO `tbl_blood` (`blood_id`, `blood_donor_name`, `blood_group`, `blood_donor_gender`, `blood_givenDate`, `blood_donor_email`, `blood_donor_contact`, `blood_status`, `uploaded_by`) VALUES
(58, 'Biraj', 'B+', 'Male', '2019-05-12', 'mehtayash687@gmail.com', '7856265696', 0, 'aashka90@outlook.com'),
(60, 'Yash', 'B+', 'Male', '2018-05-12', 'mehtakishori65@gmail.com', '7856265695', 0, 'aga_khan@hotmail.com'),
(61, 'Mahima', 'A+', 'Female', '2019-04-16', 'dhwani.daiict@gmail.com', '7856265695', 0, '201812077@daiict.ac.in'),
(62, 'Biraj', 'B+', 'Male', '2018-05-12', 'hitech_manish@gmail.com', '7856265696', 0, 'hitech_manish@gmail.com'),
(63, 'Mahima', 'A+', 'Female', '2018-05-11', 'yash@gmail.com', '9427660443', 1, 'dhwani.daiict@gmail.com'),
(64, 'Biraj', 'B+', 'Male', '2018-05-12', 'a1@gmail.com', '7856265696', 1, 'dhwani.daiict@gmail.com'),
(65, 'Mahima', 'A+', 'Female', '2018-05-11', 'mahima@gmail.com', '7856265696', 1, 'dhwani.daiict@gmail.com'),
(66, 'Yash', 'B+', 'Male', '2018-05-12', 'mahima@gmail.com', '7856265695', 1, 'dhwani.daiict@gmail.com'),
(67, 'Mahima', 'A+', 'Female', '2018-05-11', 'mahima@gmail.com', '7856265695', 1, 'dhwani.daiict@gmail.com'),
(68, 'Biraj', 'B+', 'Male', '2018-05-12', 'mahima@gmail.com', '7856265696', 1, 'dhwani.daiict@gmail.com'),
(69, 'Mahima', 'A+', 'Female', '2018-05-11', 'yash@gmail.com', '9427660443', 0, '201812077@daiict.ac.in'),
(70, 'Biraj', 'B+', 'Male', '2018-05-12', 'a1@gmail.com', '7856265696', 0, '201812077@daiict.ac.in'),
(71, 'Mahima', 'A+', 'Female', '2018-05-11', 'mahima@gmail.com', '7856265696', 0, '201812077@daiict.ac.in'),
(72, 'Yash', 'B+', 'Male', '2018-05-12', 'mahima@gmail.com', '7856265695', 0, '201812077@daiict.ac.in'),
(73, 'Mahima', 'A+', 'Female', '2018-05-11', 'mahima@gmail.com', '7856265695', 0, '201812077@daiict.ac.in'),
(74, 'Biraj', 'B+', 'Male', '2018-05-12', 'mahima@gmail.com', '7856265696', 0, '201812077@daiict.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blood_bank`
--

CREATE TABLE `tbl_blood_bank` (
  `bloodbank_name` varchar(50) NOT NULL,
  `bloodbank_email` varchar(100) NOT NULL,
  `bloodbank_area` varchar(20) NOT NULL,
  `bloodbank_contact` varchar(13) NOT NULL,
  `bloodbank_address` varchar(100) NOT NULL,
  `bloodbank_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blood_bank`
--

INSERT INTO `tbl_blood_bank` (`bloodbank_name`, `bloodbank_email`, `bloodbank_area`, `bloodbank_contact`, `bloodbank_address`, `bloodbank_password`) VALUES
('Jivanjyot Blood Bank', '201812077@daiict.ac.in', 'ahmedabad', '9978564712', 'JIvandeep  Hospital,  63-A/  B  Vijay  Nagar,  New  Hospital Road', '5r64teu78y12'),
('A- One blood bank', 'dhwani.daiict@gmail.com', 'Sector 5', '9867512345', 'near bata show room, opp. ab jwellers, ahmedabad', '123456'),
('Gayatri Voluntary Blood Bank', 'dhwanikshatriya77@gmail.com', 'memnagar', '9876123456', 'Plot  No.22,C.C.No.4784  Paiki,R.S.No.93,1\'st  Floor,Gayatri Temple', 't87u6j89iu1w'),
('Gujarat Blood Bank ', 'mehtakishori65@gmail.com', 'paldi', '9879568719', '101,Span Trade Centre,Opp.Kochrab Ashram,Nr.Paldi Char Rasta', '123456'),
('Karnavati Blood Bank', 'pulin_kshatriya@yahoo.co.in', 'ahmedabad', '7689450098', '36, Subhlaxmi Complex,Opp. Sanghavi Highschool', 'f96k79h7k8y7'),
('Rakt Kendra', 'raktdaan@gmail.com', 'Sector 11', '7436045558', 'Plot-407, Behind Dena Bank,', 'QQHFDdFR'),
('Health   Care   Blood   Bank', 'shahdevarshib@gmail.com', 'Gazipura', '9814358769', '3-400/401   A,   Ist   Floor,   Taj Complex, Gazipura, Gulbarga-585104 , (Karnataka) ', 'f87fsjfuw84u'),
('Shradhadeep Blood Bank', 'shradhadeep123@gmail.com', 'Sector 17', '7436045558', 'Behind Dena Bank', 'fut2tSba'),
('Shradhadeep Blood Bank', 'shradhadeep@gmail.com', 'Sector 11', '7436045558', 'Opp. Dena Bank', 'lHR0IM9N'),
('Blood Donation Bank RED', 'soniya.daiict@gmail.com', 'Sector 21', '7856996587', 'Gandh', 'DGKxDjVs'),
('Supratch Voluntary Blood Bank', 'supratch@gmail.com', 'bhuyangdev', '8977009465', 'First  Floor,  Mild  stone,  Near  Drive  in  Road,Opp:-T.  V. Tower ', 'i98i7u6yr54r'),
('Ami Pathology Laboratory & Blood Bank ', 'tmz.shaikh@gmail.com', 'ramnagar', '9856749899', '14,15 Baronate Tower, Tolnaka Highwey ,Sabarmati Laxmi Chamber, Nr. Ramji Mandir, Ramnagar', 'h8gj67dj476j'),
('Vijayanagar Hospital Blood Bank', 'vijaybloodbank@gmail.com', 'vijaynagar', '3498764512', 'No. 27, 17th Cross, M.C. Layout, Vijayanagar, Bangalore-560 040', 'y87jtg976u5r'),
('Sheth  V.S.  General  Hospital', 'vsbloodbank@hotmail.com', 'ellisbridge', '8765982345', 'The  Superintendent,  Sheth  V.S.  General  Hospital  &  Blood Bank.Ellisbridge, Ahmedabad', 'y76itjg98nf4'),
('White   Cross   Blood   Bank ', 'whitecross@yahoo.com', 'ahmedabad', '5738239876', '2\'nd    Floor,Kandhari    Bldg.,Opp:-S.T.Work    shop,Naroda Road Patia', 'w34er56g78j3'),
('Yogesh bank', 'yash.201812085@gmail.com', 'Sector 14', '7436045558', 'near dena bank', 'uPqH59ym');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_camp`
--

CREATE TABLE `tbl_camp` (
  `camp_id` bigint(20) UNSIGNED NOT NULL,
  `camp_name` varchar(50) NOT NULL,
  `camp_org_email` varchar(50) NOT NULL,
  `camp_venueDate` date NOT NULL,
  `camp_registrationDate` date NOT NULL,
  `camp_location` varchar(100) NOT NULL,
  `camp_time` time NOT NULL,
  `camp_contact` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_camp`
--

INSERT INTO `tbl_camp` (`camp_id`, `camp_name`, `camp_org_email`, `camp_venueDate`, `camp_registrationDate`, `camp_location`, `camp_time`, `camp_contact`) VALUES
(1, 'Voluntary Blood Donation Wing', 'savanh9898@gmail.com', '2019-04-22', '0000-00-00', 'Shree R.T. school', '04:00:03', '9878679877'),
(2, 'Life saver blood camp', 'sarthak.sk8485@gmail.com', '2018-11-14', '2018-09-04', 'Super school of management', '05:00:00', '9865734875'),
(3, 'Green society blood donation camp', 'pulin_kshatriya@yahoo.co.in', '2019-01-24', '2019-01-31', 'H.B Mehta school', '10:00:00', '9978654366'),
(4, 'Prathma blood donation camp', 'dishamehta218@gmail.com', '2019-04-01', '2019-03-27', 'K.S school of business management', '11:00:00', '5674589790'),
(5, 'Kalp blood donation camp', 'dishamehtad15@gmail.com', '2019-03-12', '2019-03-02', 'K.L vadilal college', '10:00:00', '6879456789'),
(27, 'Manav blood camp', 'yogeshthakkar1998@gmail.com', '2017-10-08', '2017-09-07', 'Madhav school ', '10:00:00', '9877651256'),
(35, 'Yogi ', 'mahima.daiict@gmail.com', '2019-04-20', '2019-04-15', 'DAIICT', '20:00:00', '9427660443'),
(36, 'SambhavBloodCamp', 'f201506100110093@gmail.com', '2019-06-22', '2019-04-16', 'Sector 5', '14:22:00', '7856996587'),
(37, 'SambhavBloodCamp', 'aga_khan@hotmail.com', '2019-05-22', '2019-04-16', 'sector 5', '14:05:00', '8859669856'),
(38, 'SambhavBloodCamp', 'aga_khan@hotmail.com', '2019-05-22', '2019-04-16', 'Sector 5', '12:02:00', '7854585693'),
(39, 'SambhavBloodCamp', 'aga_khan@hotmail.com', '2019-05-22', '2019-04-16', 'Sector 5', '12:02:00', '7854585693'),
(40, 'SambhavBloodCamp', 'aga_khan@hotmail.com', '2019-05-22', '2019-04-16', 'Sector 5', '12:02:00', '7854585693'),
(41, 'asdfvb', 'aga_khan@hotmail.com', '2019-12-02', '2019-04-16', 'sdf', '14:05:00', '7854114587'),
(42, 'asdfvb', 'aga_khan@hotmail.com', '2019-12-02', '0000-00-00', 'sdf', '14:05:00', '7854114587');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor`
--

CREATE TABLE `tbl_donor` (
  `donor_name` varchar(50) NOT NULL,
  `donor_gender` char(1) NOT NULL,
  `donor_dob` date NOT NULL,
  `donor_email` varchar(50) NOT NULL,
  `donor_city` varchar(20) NOT NULL,
  `donor_area` varchar(20) NOT NULL,
  `donor_address` varchar(100) NOT NULL,
  `donor_contact` varchar(13) NOT NULL,
  `donor_blood_group` varchar(3) NOT NULL,
  `donation_date` date NOT NULL,
  `donor_service` char(1) NOT NULL,
  `donor_donation_months` int(11) NOT NULL,
  `donor_password` varchar(12) NOT NULL,
  `donor_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_donor`
--

INSERT INTO `tbl_donor` (`donor_name`, `donor_gender`, `donor_dob`, `donor_email`, `donor_city`, `donor_area`, `donor_address`, `donor_contact`, `donor_blood_group`, `donation_date`, `donor_service`, `donor_donation_months`, `donor_password`, `donor_status`) VALUES
('KanikaAgrawal', 'F', '1997-07-03', 'kanikaagrawal1997@gmail.com', 'Gandhinagar', 'Sector 3', '4/9,umiya park society,sector 3,gandhinagar', '7600744043', 'B+', '2018-11-01', '6', 0, 'xAfiYxCB', 0),
('Yogesh Thakkar', 'M', '1998-02-20', 'yogeshthakkar1998@gmail.com', 'Gandhinagar', 'Sector 12', 'Naroda Navanagar', '9712863112', 'O+', '2018-10-31', '6', 0, 'tRJgSf17', 0),
('Yogesh Thakkar', 'M', '1998-02-20', 'yogeshthakkar@gmail.com', 'Gandhinagar', 'Sector 5', 'Plot-405', '9856123478', 'O+', '2018-10-30', '6', 0, '9Vdcz2ap', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital`
--

CREATE TABLE `tbl_hospital` (
  `hospital_name` varchar(50) NOT NULL,
  `hospital_email` varchar(100) NOT NULL,
  `hospital_area` varchar(20) NOT NULL,
  `hospital_contact` varchar(13) NOT NULL,
  `hospital_address` varchar(100) NOT NULL,
  `hospital_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hospital`
--

INSERT INTO `tbl_hospital` (`hospital_name`, `hospital_email`, `hospital_area`, `hospital_contact`, `hospital_address`, `hospital_password`) VALUES
('Hi Tech', 'hitech_manish@gmail.com', 'Sector 5', '7436045558', 'Next to Pathik Ashram', 'vYEIrFq4'),
('Aashka Hospital ', 'mahigajiwala@gmail.com', 'Sector 14', '9878112390', 'sector 4, near wide angle cinema, gandhinagar', 'PQ7XNIHQ'),
('Aashka Hospital', 'pulin_kshtriya@yahoo.co.in', 'Sector 3', '7436045558', 'Gandhinagar', '123456'),
('shbjn', 'soniya.daiict@gmail.com', 'Sector 1', '7458996585', 'Gandhinagar', 'civil'),
('K.L mandapwala hopital', 'srvaidya2468@gmail.com', 'Sector 19', '9978561236', 'sector 19, near abc complex, gandhinagar', 'K57TFupF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organization`
--

CREATE TABLE `tbl_organization` (
  `org_name` varchar(50) NOT NULL,
  `org_contact` varchar(13) NOT NULL,
  `org_email` varchar(50) NOT NULL,
  `org_password` varchar(12) NOT NULL,
  `org_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_organization`
--

INSERT INTO `tbl_organization` (`org_name`, `org_contact`, `org_email`, `org_password`, `org_address`) VALUES
('anusandhan', '6783126759', 'dhwani.daiict@gmail.com', 'wO1f6m3c', 'sector 9, hanuman temple, kudasan'),
('asmaan foundation', '6573241234', 'dhwanikshatriya77@gmail.com', 'QEUWslh7', 'near ramdev mandir, sector 22,gandhinagar'),
('aga khan rural suppo', '9912675897', 'mahigajiwala@gmail.com', '14789', 'sector 8, near jyoti society'),
('aarya NGO', '9878123487', 'yogeshthakkar1998@gmail.com', 'CoqwBFM4', 'sector 9, oppo. palava mall,gandhinagar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recipient`
--

CREATE TABLE `tbl_recipient` (
  `recipient_id` bigint(20) UNSIGNED NOT NULL,
  `recipient_name` varchar(50) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `recipient_gender` char(1) NOT NULL,
  `recipient_blood_group` char(3) NOT NULL,
  `recipient_contact` varchar(13) NOT NULL,
  `recipient_area` varchar(20) NOT NULL,
  `recipient_address` varchar(100) NOT NULL,
  `recipient_relation` varchar(30) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `recipient_status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_recipient`
--

INSERT INTO `tbl_recipient` (`recipient_id`, `recipient_name`, `patient_name`, `recipient_gender`, `recipient_blood_group`, `recipient_contact`, `recipient_area`, `recipient_address`, `recipient_relation`, `hospital_name`, `doctor_name`, `recipient_status`) VALUES
(19, 'YAsh', 'Yogesh', 'M', 'O+', '7436045558', 'Sector 3', 'cvbnjuytgf', 'brother', 'AASKA', 'Mahima', '1'),
(21, 'Yash Mehta', 'Yogesh Thakkar', 'M', 'O+', '9712863112', 'Sector 8', 'DAIICT', 'Brother', 'Hi Tech', 'Mitesh Shah', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `tbl_blood`
--
ALTER TABLE `tbl_blood`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `tbl_blood_bank`
--
ALTER TABLE `tbl_blood_bank`
  ADD PRIMARY KEY (`bloodbank_email`);

--
-- Indexes for table `tbl_camp`
--
ALTER TABLE `tbl_camp`
  ADD PRIMARY KEY (`camp_id`),
  ADD UNIQUE KEY `camp_id` (`camp_id`);

--
-- Indexes for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  ADD PRIMARY KEY (`donor_email`);

--
-- Indexes for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD PRIMARY KEY (`hospital_email`);

--
-- Indexes for table `tbl_organization`
--
ALTER TABLE `tbl_organization`
  ADD PRIMARY KEY (`org_email`);

--
-- Indexes for table `tbl_recipient`
--
ALTER TABLE `tbl_recipient`
  ADD PRIMARY KEY (`recipient_id`),
  ADD UNIQUE KEY `id` (`recipient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blood`
--
ALTER TABLE `tbl_blood`
  MODIFY `blood_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_camp`
--
ALTER TABLE `tbl_camp`
  MODIFY `camp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_recipient`
--
ALTER TABLE `tbl_recipient`
  MODIFY `recipient_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
