-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: coffee_mongers
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `type` int(10) NOT NULL,
  `comment` text,
  `timer1` varchar(100) DEFAULT NULL,
  `timer2` varchar(100) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `comment_approve` int(3) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,3,1,' I help you with the Tchibo Coffee  mixes to get the actual flavot. Between 2 cups of coffee per day will be okay ','1612664285','Saturday, February 6, 2021, 10:18 pm',2,'2','Henry Cook','good1612660886.png',0,NULL),(2,5,1,'I can help you with that','1612664755','Saturday, February 6, 2021, 10:25 pm',2,'2','Henry Cook','good1612660886.png',0,NULL),(3,7,1,'I can help you make good Tchibo Coffee mixes. between 2 cups of coffee per day will do','1612664856','Saturday, February 6, 2021, 10:27 pm',2,'2','Henry Cook','good1612660886.png',0,NULL),(4,7,1,'thanks','1612664871','Saturday, February 6, 2021, 10:27 pm',1,'1','Ann Ball','good1612657607.png',0,NULL),(5,8,1,'Nice Video. Thanks for Sharing','1612665011','Saturday, February 6, 2021, 10:30 pm',2,'2','Henry Cook','good1612660886.png',0,NULL);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(100) DEFAULT NULL,
  `sender_id` varchar(100) DEFAULT NULL,
  `sender_photo` varchar(100) DEFAULT NULL,
  `reciever_id` varchar(100) DEFAULT NULL,
  `status1` int(10) DEFAULT NULL,
  `status2` int(10) DEFAULT NULL,
  `status3` int(10) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends`
--

LOCK TABLES `friends` WRITE;
/*!40000 ALTER TABLE `friends` DISABLE KEYS */;
/*!40000 ALTER TABLE `friends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `userid` int(30) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `photo` text,
  `user_rank` varchar(100) DEFAULT NULL,
  `reciever_id` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title_seo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
INSERT INTO `notification` VALUES (1,'1',2,'Henry Cook','good1612660886.png','Member','1','unread','post','1612661155','I need help on making Special Tchibo Coffee Mixes for my sick Children ','I-need-help-on-making-Special-Tchibo-Coffee-Mixes-for-my-sick-Children--1612661155'),(2,'2',1,'Ann Ball','good1612657607.png','Member','2','unread','post','1612661717','Am an Americans woman living with Alzheimers disease. I need help','Am-an-Americans-woman-living-with-Alzheimers-disease.-I-need-help-1612661717'),(3,'3',1,'Ann Ball','good1612657607.png','Member','2','unread','post','1612662077','Am dying slowly with Stroke can some one help me with Tchibo Medicinal Coffee Mixes','Am-dying-slowly-with-Stroke-can-some-one-help-me-with-Tchibo-Medicinal-Coffee-Mixes-1612662077'),(4,'4',2,'Henry Cook','good1612660886.png','Member','1','unread','post','1612662296','I need Special Tchibo Coffee Mixes for my Examination Study','I-need-Special-Tchibo-Coffee-Mixes-for-my-Examination-Study-1612662296'),(5,'5',2,'Henry Cook','good1612660886.png','Member','1','unread','post','1612662521','I can offer help on How to make best Tchibo Coffee flavour mixes for Pregnant women','I-can-offer-help-on-How-to-make-best-Tchibo-Coffee-flavour-mixes-for-Pregnant-women-1612662521'),(6,'6',2,'Henry Cook','good1612660886.png','Member','1','unread','post','1612664193','I need help making special Tchibo Coffee mixes for a Diabetics','I-need-help-making-special-Tchibo-Coffee-mixes-for-a-Diabetics-1612664193'),(8,'5',2,'Henry Cook','good1612660886.png','Member','2','unread','comment','1612664755','I can offer help on How to make best Tchibo Coffee flavour mixes for Pregnant women','I-can-offer-help-on-How-to-make-best-Tchibo-Coffee-flavour-mixes-for-Pregnant-women-1612662521'),(9,'7',1,'Ann Ball','good1612657607.png','Member','2','read','post','1612664799','I need help making Special Tchibo Coffee Mixes for Diabetics','I-need-help-making-Special-Tchibo-Coffee-Mixes-for-Diabetics-1612664799'),(10,'7',2,'Henry Cook','good1612660886.png','Member','1','read','comment','1612664856','I need help making Special Tchibo Coffee Mixes for Diabetics','I-need-help-making-Special-Tchibo-Coffee-Mixes-for-Diabetics-1612664799'),(11,'7',1,'Ann Ball','good1612657607.png','Member','1','unread','comment','1612664871','I need help making Special Tchibo Coffee Mixes for Diabetics','I-need-help-making-Special-Tchibo-Coffee-Mixes-for-Diabetics-1612664799'),(12,'8',1,'Ann Ball','good1612657607.png','Member','2','read','video','1612664922','How to mix Tchibo Coffee Video','How-to-mix-Tchibo-Coffee-Video-1612664922'),(13,'8',2,'Henry Cook','good1612660886.png','Member','1','unread','comment','1612665011','How to mix Tchibo Coffee Video','How-to-mix-Tchibo-Coffee-Video-1612664922');
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title_seo` varchar(200) DEFAULT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `timer1` varchar(100) DEFAULT NULL,
  `timer2` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `userphoto` varchar(100) DEFAULT NULL,
  `userid` int(30) DEFAULT NULL,
  `points` varchar(100) DEFAULT NULL,
  `help_category` varchar(100) DEFAULT NULL,
  `offering` varchar(100) DEFAULT NULL,
  `total_comments` varchar(100) DEFAULT NULL,
  `post_type` varchar(100) DEFAULT NULL,
  `video_id` varchar(100) DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL,
  `geo_address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'I need help on making Special Tchibo Coffee Mixes for my sick Children ','I-need-help-on-making-Special-Tchibo-Coffee-Mixes-for-my-sick-Children--1612661155','My two Children is suffering is having Liver Problem. Can Tchibo Coffee mixers or Experts help  with details on how to mix Tchibo Coffee to help promotes body enzyme levels within a healthy range for my my Children','1612661155','Saturday, February 6, 2021, 9:25 pm','2','Henry Cook','good1612660886.png',2,'350','Child-Care','Seeking Help','0','posts',NULL,NULL,NULL,NULL),(2,'Am an Americans woman living with Alzheimers disease. I need help','Am-an-Americans-woman-living-with-Alzheimers-disease.-I-need-help-1612661717','My name is an Ann Ball. Am an Americans woman living with Alzheimers disease. I need help on the right does or number of  Tchibo Coffee cups that I can take daily to help ease my  sickness. its urgent','1612661717','Saturday, February 6, 2021, 9:35 pm','1','Ann Ball','good1612657607.png',1,'350','The-Sick','Seeking Help','0','posts',NULL,NULL,NULL,NULL),(3,'Am dying slowly with Stroke can some one help me with Tchibo Medicinal Coffee Mixes','Am-dying-slowly-with-Stroke-can-some-one-help-me-with-Tchibo-Medicinal-Coffee-Mixes-1612662077','I am Ann an American Elderly Woman. I  have stroke. My Doctor suggested that taking of Tchibo Coffee could help lowered my stroke. Am here to seek  help on the Tchibo Coffee mix type that I can used and the number of\ncup dosage I can Take. can someone help me out','1612662077','Saturday, February 6, 2021, 9:41 pm','1','Ann Ball','good1612657607.png',1,'350','Elderly-Care','Seeking Help','1','posts',NULL,NULL,NULL,NULL),(4,'I need Special Tchibo Coffee Mixes for my Examination Study','I-need-Special-Tchibo-Coffee-Mixes-for-my-Examination-Study-1612662296','Hi everyone, my name is Henry Cook. Am Student preparing for  my Degree Exam, can someone help me on how to make Special Tchibo Coffee mixes to help me stay agile and focused on getting my study done effectively','1612662296','Saturday, February 6, 2021, 9:44 pm','2','Henry Cook','good1612660886.png',2,'350','Students','Seeking Help','0','posts',NULL,NULL,NULL,NULL),(5,'I can offer help on How to make best Tchibo Coffee flavour mixes for Pregnant women','I-can-offer-help-on-How-to-make-best-Tchibo-Coffee-flavour-mixes-for-Pregnant-women-1612662521','Hi, Am Henry from United State. I can help on How to make best Tchibo Coffee flavour mixes for Pregnant women. If you are interested please get back to me in the Comments sections','1612662521','Saturday, February 6, 2021, 9:48 pm','2','Henry Cook','good1612660886.png',2,'350','Pregnant-Women','Offering Help','1','posts',NULL,NULL,NULL,NULL),(7,'I need help making Special Tchibo Coffee Mixes for Diabetics','I-need-help-making-Special-Tchibo-Coffee-Mixes-for-Diabetics-1612664799','My grandpa is suffering from type2 Diabetic Patients, Please i need help on making special Tchibo Coffee mixes to improve his \nmedical conditions. Again how many Cups of Coffee can he takes per day.','1612664799','Saturday, February 6, 2021, 10:26 pm','1','Ann Ball','good1612657607.png',1,'350','Elderly-Care','Seeking Help','2','posts',NULL,NULL,NULL,NULL),(8,'How to mix Tchibo Coffee Video','How-to-mix-Tchibo-Coffee-Video-1612664922','Video description','1612664922','Saturday, February 6, 2021, 10:28 pm','1','Ann Ball','good1612657607.png',1,'350','Tchibo-Coffee-Education','Offering Help','1','video','CgMLS0UJCz4',NULL,NULL,NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `user_rank` varchar(200) DEFAULT NULL,
  `user_verified` varchar(200) DEFAULT NULL,
  `user_banned` varchar(200) DEFAULT NULL,
  `created_time` varchar(200) DEFAULT NULL,
  `timer1` varchar(200) DEFAULT NULL,
  `timer2` varchar(200) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `phone_no` varchar(60) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `points` varchar(100) DEFAULT NULL,
  `levels` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'123','Ann Ball','member@gmail.com','good1612657607.png','member','1','0','Saturday, February 6, 2021, 8:26 pm','1612657607',NULL,'ed11db950be2f010f058c164a26899271612657607','Canada','+2348064242019','1612657607','350','1'),(2,NULL,'123','Henry Cook','member2@gmail.com','good1612660886.png','member','1','0','Saturday, February 6, 2021, 9:21 pm','1612660886',NULL,'d4cd7591628f27b0ef699bbcc90894e01612660886','Nigeria','+2348064242019','1612660886','350','1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'coffee_mongers'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-07 20:51:58
