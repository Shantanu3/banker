-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: Bankman
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Credit`
--

DROP TABLE IF EXISTS `Credit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Credit` (
  `Account_no` varchar(40) NOT NULL,
  `Account_to` varchar(40) NOT NULL,
  `Amount` bigint(20) NOT NULL,
  KEY `Account_no` (`Account_no`),
  CONSTRAINT `Credit_ibfk_1` FOREIGN KEY (`Account_no`) REFERENCES `Customer_list` (`Account_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Credit`
--

LOCK TABLES `Credit` WRITE;
/*!40000 ALTER TABLE `Credit` DISABLE KEYS */;
INSERT INTO `Credit` VALUES ('3621457899','3698574896',200),('3698574896','3621457899',200),('3986799548','3698574896',300),('3478951247','3986799548',400),('3986799548','3789654214',500),('3698521479','3986799548',200),('3478951247','3214789644',500),('3621457899','3214789644',555),('3698521479','3214789644',111),('3698574896','3698521479',500);
/*!40000 ALTER TABLE `Credit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Customer_list`
--

DROP TABLE IF EXISTS `Customer_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Customer_list` (
  `Account_no` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `DOB` varchar(40) NOT NULL,
  `Account_type` varchar(40) NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Mobile_no` varchar(40) NOT NULL,
  PRIMARY KEY (`Account_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Customer_list`
--

LOCK TABLES `Customer_list` WRITE;
/*!40000 ALTER TABLE `Customer_list` DISABLE KEYS */;
INSERT INTO `Customer_list` VALUES ('3025445898','Akshay Kumar','12/4/1996','Savings','Male','Velankani','9876543231'),('3214789644','Alia Bhat','15/3/1965','Current','Female','Yashwantpur','9851475639'),('3478951247','Aishwarya Rai','1/11/1975','Savings','Female','Koramangala','9741256387'),('3621457899','Amitabh Bachan','10/10/1968','Recurring Deposit','Male','Malleshwaram','9852314763'),('3698521479','Varun Dhawan','8/9/1990','Current','Male','Basavanagudi','9632587896'),('3698574896','Salman Khan','2/9/1985','Recurring Deposit','Male','Banashankari','9889663697'),('3789456123','Siddharth Malhotra','3/7/1985','Current','Male','Whitefield','9412378566'),('3789654214','Tiger Shroff','18/9/1998','Fixed Deposit','Male','Hebbal','9841275639'),('3981269745','Hema Malini','16/10/1975','Savings','Female','Yelahanka','9568932699'),('3986799548','Kareena Khan','14/8/1968','Fixed Deposit','Female','Electronic City','9631478526');
/*!40000 ALTER TABLE `Customer_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Login`
--

DROP TABLE IF EXISTS `Login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Login` (
  `Account_no` varchar(40) NOT NULL,
  `Password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Account_no`),
  CONSTRAINT `Login_ibfk_1` FOREIGN KEY (`Account_no`) REFERENCES `Customer_list` (`Account_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Login`
--

LOCK TABLES `Login` WRITE;
/*!40000 ALTER TABLE `Login` DISABLE KEYS */;
INSERT INTO `Login` VALUES ('3025445898','twinkle'),('3214789644','soty'),('3478951247','adhm'),('3621457899','jaya'),('3698521479','badri'),('3698574896','dabbang'),('3789456123','gentleman'),('3789654214','disha'),('3981269745','basanti'),('3986799548','taimur');
/*!40000 ALTER TABLE `Login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Remaining_Amt`
--

DROP TABLE IF EXISTS `Remaining_Amt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Remaining_Amt` (
  `Account_no` varchar(40) NOT NULL,
  `Total_amt` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`Account_no`),
  CONSTRAINT `Remaining_Amt_ibfk_1` FOREIGN KEY (`Account_no`) REFERENCES `Customer_list` (`Account_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Remaining_Amt`
--

LOCK TABLES `Remaining_Amt` WRITE;
/*!40000 ALTER TABLE `Remaining_Amt` DISABLE KEYS */;
INSERT INTO `Remaining_Amt` VALUES ('3025445898',2870),('3214789644',4980),('3478951247',5456666),('3621457899',697865),('3698521479',192616),('3698574896',3549),('3789456123',150065),('3789654214',5870),('3981269745',77500),('3986799548',16300);
/*!40000 ALTER TABLE `Remaining_Amt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Transaction`
--

DROP TABLE IF EXISTS `Transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Transaction` (
  `Account_no` varchar(40) NOT NULL,
  `Account_to` varchar(40) NOT NULL,
  `Amount` bigint(20) NOT NULL,
  KEY `Account_no` (`Account_no`),
  CONSTRAINT `Transaction_ibfk_1` FOREIGN KEY (`Account_no`) REFERENCES `Customer_list` (`Account_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Transaction`
--

LOCK TABLES `Transaction` WRITE;
/*!40000 ALTER TABLE `Transaction` DISABLE KEYS */;
INSERT INTO `Transaction` VALUES ('3214789644','3025445898',200),('3214789644','3025445898',100),('3214789644','3698574896',500),('3214789644','3698574896',500),('3214789644','3698521479',100),('3621457899','3214789644',500),('3621457899','3478951247',100),('3214789644','3621457899',10),('3214789644','3478951247',100),('3214789644','3698521479',50),('3621457899','3214789644',2000),('3621457899','3698574896',100),('3621457899','3698574896',100),('3621457899','3698574896',200),('3698574896','3621457899',200),('3698574896','3986799548',300),('3986799548','3478951247',400),('3789654214','3986799548',500),('3986799548','3698521479',200),('3214789644','3478951247',500),('3214789644','3621457899',555),('3214789644','3698521479',111),('3698521479','3698574896',500);
/*!40000 ALTER TABLE `Transaction` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-24 10:46:29
