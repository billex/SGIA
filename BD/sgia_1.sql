CREATE DATABASE  IF NOT EXISTS `sgia` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sgia`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sgia
-- ------------------------------------------------------
-- Server version	5.6.25

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
-- Table structure for table `alunos`
--

DROP TABLE IF EXISTS `alunos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `apelido` varchar(45) NOT NULL,
  `datanascimento` date NOT NULL,
  `genero_id` varchar(45) NOT NULL,
  `nacionalidade_id` varchar(45) NOT NULL,
  `documento_id` varchar(45) NOT NULL,
  `numerodocumento` varchar(45) NOT NULL,
  `dataemissao` date NOT NULL,
  `validade` date NOT NULL,
  `lingua` varchar(45) NOT NULL,
  `nivelengles` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` VALUES (1,'Wesley','Bila','2009-10-24','1','1','1','1110234123','2014-10-24','2018-10-24','Portuguesa','Medio'),(2,'Dinese','Soto','2000-02-22','1','2','2','112232897','2013-03-22','2016-03-22','Inglesa','Elevado'),(3,'Frank','Deboi','2003-10-29','1','1','3','1019234523','2014-09-29','2018-10-29','Francesa','II'),(4,'Helder','Cuna','2008-03-05','1','4','1','1275432221','2014-11-07','2017-11-05','Inglesa','Basico'),(5,'Leonora','Baba','2000-11-05','2','2','2','12345765542','2014-11-05','2018-11-05','Inglesa','III'),(6,'Jessica','Moises','2002-11-05','2','5','1','1223547654','2013-08-13','2016-11-05','Frances','II'),(7,'Claudio','Ismael','2000-02-20','1','4','2','712635421','2012-09-09','2018-09-05','Inglesa','iii'),(8,'Witeney','Escobar','1999-06-15','2','3','2','71625343','2012-08-05','2017-08-05','I','iii'),(9,'Carlos','Macie','2015-11-05','1','1','1','123345867','2014-04-14','2018-04-12','Portuguesa','II'),(10,'Clayton','Moises','2015-11-05','1','1','1','7654321234','1998-02-05','2017-02-05','Portuguesa','II'),(11,'Denise Vasco','Macamo','2003-12-02','2','1','2','1233566777812','2015-12-02','2015-12-02','Portugues','III'),(12,'Jaime Paulino','Zavala','2020-12-02','1','1','1','12263748858','2015-12-02','2015-12-02','Frances','II'),(13,'JorgePaulino','Macamo','2015-12-02','1','1','1','12263748858','2015-12-02','2015-12-02','Portugues','II'),(14,'Denise Tovela','Moises','2015-12-02','1','1','1','122354765467','2015-12-02','2015-12-02','Inglesa','Elevado'),(15,'Carlos sanque','Baba','2015-12-02','1','1','1','123356677781245','2015-12-02','2015-12-02','Portuguesa','II'),(16,'Denise Tovela','Zavala','2015-12-02','1','1','1','12263748858','2015-12-02','2015-12-02','Inglesa','II'),(17,'Titos','Bias','2015-12-04','1','1','1','122334454','2015-12-04','2015-12-04','Frances','Basico'),(18,'Dede','Ceci','2015-12-07','1','1','1','12345763','2015-12-07','2015-12-07','Portugues','II'),(19,'Bebe','Brito','2015-12-07','1','1','1','092342365','2015-12-07','2015-12-07','Inglesa','II'),(20,'Custodio','Tete','2015-12-07','1','1','1','123789772','2015-12-07','2015-12-07','Frances','III'),(21,'Lazaro','Tembe','2015-12-07','1','1','1','123456789','2015-12-07','2015-12-07','Portugues','II'),(22,'Lazaro','Tembe','2015-12-07','1','1','1','123456789','2015-12-07','2015-12-07','Portugues','II');
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anos`
--

DROP TABLE IF EXISTS `anos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anos`
--

LOCK TABLES `anos` WRITE;
/*!40000 ALTER TABLE `anos` DISABLE KEYS */;
INSERT INTO `anos` VALUES (1,'2015'),(2,'2016');
/*!40000 ALTER TABLE `anos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brothers`
--

DROP TABLE IF EXISTS `brothers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brothers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `turma` varchar(45) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brothers`
--

LOCK TABLES `brothers` WRITE;
/*!40000 ALTER TABLE `brothers` DISABLE KEYS */;
INSERT INTO `brothers` VALUES (1,'1','Ester','2 ','este aluna e irmao do wesley'),(2,'4','Catarina','2','Catarina e irma de Helder'),(3,'7','jessica','D3','jessica e irma de Claudio');
/*!40000 ALTER TABLE `brothers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classas`
--

DROP TABLE IF EXISTS `classas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `ano_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classas`
--

LOCK TABLES `classas` WRITE;
/*!40000 ALTER TABLE `classas` DISABLE KEYS */;
INSERT INTO `classas` VALUES (2,'2ª Classe',1),(3,'3ª Classe',1),(4,'4ª Classe',0),(5,'5ª Classe',0),(6,'6ª Classe',0),(7,'7ª Classe',0),(8,'8ª Classe',0),(9,'9ª Classe',0),(10,'10ª Classe',0),(11,'11ª Classe',0),(12,'12ª Classe',0);
/*!40000 ALTER TABLE `classas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disciplinas`
--

DROP TABLE IF EXISTS `disciplinas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `classa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disciplinas`
--

LOCK TABLES `disciplinas` WRITE;
/*!40000 ALTER TABLE `disciplinas` DISABLE KEYS */;
INSERT INTO `disciplinas` VALUES (1,'Português',0),(2,'Matematica',0),(3,'Português',1),(4,'Matematica',1),(5,'Ingles',1),(6,'Educacao Fisica',1),(7,'Português',4),(8,'Matematica',4),(9,'Matematica',2),(10,'Historia',4),(11,'Geografia',4);
/*!40000 ALTER TABLE `disciplinas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
INSERT INTO `documentos` VALUES (1,'Bilhete de Indentificação',''),(2,'Passaporte',''),(3,'Cédula Pessoal','');
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `educacaoanteriores`
--

DROP TABLE IF EXISTS `educacaoanteriores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `educacaoanteriores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `escola` varchar(45) NOT NULL,
  `pais` varchar(45) NOT NULL,
  `lingua` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `classe` varchar(45) NOT NULL,
  `aluno_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `educacaoanteriores`
--

LOCK TABLES `educacaoanteriores` WRITE;
/*!40000 ALTER TABLE `educacaoanteriores` DISABLE KEYS */;
INSERT INTO `educacaoanteriores` VALUES (1,'Pertoria International School','Africa do su','inglesa','2010-10-24','10 classwe','2'),(2,'Brasil International School','Brasil','Portuguesa','2010-10-29','2 classe','3'),(3,'Dae esssalam international Schooll','Tanzania','Inglesa','2014-01-05','2 classe','4');
/*!40000 ALTER TABLE `educacaoanteriores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encaregados`
--

DROP TABLE IF EXISTS `encaregados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encaregados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alunoid` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `documento_id` varchar(45) DEFAULT NULL,
  `numerodocumento` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `localtrabalho` varchar(45) DEFAULT NULL,
  `ocupacao` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefonemergencia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encaregados`
--

LOCK TABLES `encaregados` WRITE;
/*!40000 ALTER TABLE `encaregados` DISABLE KEYS */;
INSERT INTO `encaregados` VALUES (1,'1','Manuel','1','1234567890','Bairro da Polana .Rua da Paz','mozimport','tesoureiro','823801214','manubila@gmail.com','847536962'),(2,'1','Ana','1','123432165','Bairro da Polana .Rua da Paz','mozexport','secretaria','87872626','ana@gamil.com','87875643'),(3,'Carlos sanque','Constatino','1','123432165445','Bairro da Polana .Rua da Paz','mozexport','secretaria','823801214','ana@gamil.com','847536962'),(4,'Denise Tovela','Manuel Bila','1','123432165445','Bairro da Polana .Rua da Paz','mozimport','tesoureiro','','manubila@gmail.com','847536962'),(5,'Titos','Francisco  Tsovo','1','4342526637','Bairro da Polana .Rua da Paz','CFM','Maquinista','82828282','Francisco@gmail.com','823801214');
/*!40000 ALTER TABLE `encaregados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generos`
--

DROP TABLE IF EXISTS `generos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generos`
--

LOCK TABLES `generos` WRITE;
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` VALUES (1,'Masculino','Este é género masculino'),(2,'Femenino','Este é género femenino');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admins','2013-06-22 17:05:29','2013-06-22 17:05:29'),(2,'secretarias','2013-06-23 10:57:28','2015-12-02 18:36:17'),(3,'users','2013-06-24 07:47:48','2013-06-24 07:47:48'),(4,'professores','2015-11-21 18:10:32','2015-11-21 18:10:32');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nacionalidades`
--

DROP TABLE IF EXISTS `nacionalidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nacionalidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nacionalidades`
--

LOCK TABLES `nacionalidades` WRITE;
/*!40000 ALTER TABLE `nacionalidades` DISABLE KEYS */;
INSERT INTO `nacionalidades` VALUES (1,'Moçambicana',''),(2,'Sul Africana',''),(3,'Zimbabweana',''),(4,'Tanzaniana',''),(5,'Francesa','');
/*!40000 ALTER TABLE `nacionalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notasfinalis`
--

DROP TABLE IF EXISTS `notasfinalis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notasfinalis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL,
  `classa_id` int(11) NOT NULL,
  `valorda_nota` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notasfinalis`
--

LOCK TABLES `notasfinalis` WRITE;
/*!40000 ALTER TABLE `notasfinalis` DISABLE KEYS */;
INSERT INTO `notasfinalis` VALUES (1,1,2,1,15),(3,1,2,1,12.5),(4,1,1,1,12),(5,5,2,7,20),(6,1,1,2,15);
/*!40000 ALTER TABLE `notasfinalis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagamentos`
--

DROP TABLE IF EXISTS `pagamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `fax` varchar(45) NOT NULL,
  `situacao` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagamentos`
--

LOCK TABLES `pagamentos` WRITE;
/*!40000 ALTER TABLE `pagamentos` DISABLE KEYS */;
INSERT INTO `pagamentos` VALUES (1,'1','Ana','878765430','258456',''),(2,'1','Manuel','823801214','242424','');
/*!40000 ALTER TABLE `pagamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pauts`
--

DROP TABLE IF EXISTS `pauts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pauts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classa_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL,
  `anos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pauts`
--

LOCK TABLES `pauts` WRITE;
/*!40000 ALTER TABLE `pauts` DISABLE KEYS */;
/*!40000 ALTER TABLE `pauts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,'A title once again','And the post body follows.','2013-06-10 11:05:26',NULL),(3,'Title strikes back','This is really exciting! Not.','2013-06-10 11:05:26',NULL),(4,'Ribamar','Ribamar FS testando.','2013-06-10 11:20:52','2013-06-10 11:20:52'),(5,'Teste','Apenas','2013-10-17 08:20:47','2013-10-17 08:20:47');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privileges`
--

DROP TABLE IF EXISTS `privileges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privileges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` char(11) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `controller` (`controller`,`action`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privileges`
--

LOCK TABLES `privileges` WRITE;
/*!40000 ALTER TABLE `privileges` DISABLE KEYS */;
INSERT INTO `privileges` VALUES (1,'admins','privileges','add'),(2,'admins','privileges','edit'),(3,'admins','privileges','delete'),(4,'admins','privileges','view'),(5,'admins','privileges','index'),(11,'admins','groups','add'),(12,'admins','groups','edit'),(13,'admins','groups','delete'),(14,'admins','groups','view'),(15,'admins','groups','index'),(18,'admins','users','index'),(19,'admins','users','view'),(20,'admins','users','add'),(21,'admins','users','edit'),(22,'admins','users','delete'),(23,'managers','clientes','add'),(24,'managers','clientes','index');
/*!40000 ALTER TABLE `privileges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `professores`
--

DROP TABLE IF EXISTS `professores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `contacto` varchar(45) DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professores`
--

LOCK TABLES `professores` WRITE;
/*!40000 ALTER TABLE `professores` DISABLE KEYS */;
INSERT INTO `professores` VALUES (1,'Manuel Bila','Aereporto','826767886',1),(2,'João Cossa','Zimpeto','21454545',2),(3,'Sara José Macamo','Maxaquene','21454545',5);
/*!40000 ALTER TABLE `professores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registos`
--

DROP TABLE IF EXISTS `registos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) NOT NULL,
  `classa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registos`
--

LOCK TABLES `registos` WRITE;
/*!40000 ALTER TABLE `registos` DISABLE KEYS */;
INSERT INTO `registos` VALUES (1,1,1),(2,2,1),(3,3,1),(4,3,1),(5,10,1),(6,8,0),(7,4,0),(8,10,0),(9,1,2),(10,2,2),(11,10,4),(12,5,2);
/*!40000 ALTER TABLE `registos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saudes`
--

DROP TABLE IF EXISTS `saudes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `perguntamedicacao` varchar(45) DEFAULT NULL,
  `necessidades` varchar(255) DEFAULT NULL,
  `nomemedico` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saudes`
--

LOCK TABLES `saudes` WRITE;
/*!40000 ALTER TABLE `saudes` DISABLE KEYS */;
/*!40000 ALTER TABLE `saudes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'manuel','admin','3a3534f6b743387475f37d6c7a4807082c0daff7',1,'2013-10-18 07:57:06','2013-10-18 10:20:13'),(2,'','secretaria','d23d81e7933939364347dc000a644a2c19d9d0f3',2,'2013-10-18 07:57:18','2015-12-02 19:25:50'),(3,'','professor','b52e9e366231ee58fd7b60da565c370ab28b96f4',4,'2015-11-22 15:14:56','2015-11-22 15:14:56'),(4,'João Cossa','joão','d23d81e7933939364347dc000a644a2c19d9d0f3',4,'2015-12-02 19:10:02','2015-12-02 19:10:02'),(5,'Sara José Macamo','sara','d23d81e7933939364347dc000a644a2c19d9d0f3',4,'2015-12-02 19:11:17','2015-12-02 19:11:17'),(6,'wesley','wesley','eb65b93ffa5de0ddd445d0d216145b4892749f1a',2,'2015-12-03 20:35:39','2015-12-03 20:35:39');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'sgia'
--

--
-- Dumping routines for database 'sgia'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-09 19:59:15
