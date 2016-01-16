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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alunos`
--

LOCK TABLES `alunos` WRITE;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` VALUES (24,'Nilza Tomas','Cossa','2007-01-09','2','1','1','123456789','2015-01-09','2017-01-09','Portuguesa','II'),(25,'Claudio Jose','Cumbana','1999-01-09','1','1','1','1234','2015-01-09','2016-01-09','Portugues','II'),(29,'Luisa Alfredo','Timane','2016-01-09','1','1','1','12345','2016-01-09','2016-01-09','Portugues','II'),(30,'Luisa Alfredo','Timane','2016-01-09','1','1','1','123456','2016-01-09','2016-01-09','Portugues','II'),(31,'Luisa Alfredo','Macamo','2016-01-09','1','1','1','1234567','2016-01-09','2016-01-09','Portugues','III'),(32,'kleber Mario','Tembe','2002-01-09','1','2','1','12345678','2014-01-09','2018-09-09','Portugues','IV'),(33,'kleber Mario','Tete','2010-01-09','1','1','1','12345678','2016-07-09','2018-07-09','Portugues','IV'),(34,'Marcos kente','Macuacua','2014-01-09','1','1','1','00000000','2015-01-09','2017-01-09','Portugues','III'),(35,'Lauro','Dias','2010-01-16','1','1','1','1234567','2014-01-16','2016-01-16','Frances','II Nivel'),(36,'Laurentina','Dias','2008-02-16','2','2','1','112233','2015-01-16','2017-01-16','Ingles','III Nivel');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brothers`
--

LOCK TABLES `brothers` WRITE;
/*!40000 ALTER TABLE `brothers` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encaregados`
--

LOCK TABLES `encaregados` WRITE;
/*!40000 ALTER TABLE `encaregados` DISABLE KEYS */;
INSERT INTO `encaregados` VALUES (7,'Nilza Tomas','Sebastião Júlio Mugunhe','1','987654321B','Magoanine C','Foco Lda','Docente','827878227','sbstmugunhe@focomz.com','827878227'),(8,'Claudio Jose','Manuel Bilal','1','123432165445','Bairro da Polana .Rua da Paz','Mined','inspector','82828282','ana@gamil.com','827878227'),(9,'Luisa Alfredo','Jose TimANE','1','54321','Bairro da Polana .Rua da Paz','mozexport','tesoureiro','87872626','manubila@gmail.com','82345671'),(10,'Luisa Alfredo','Jose TimANE','1','54321','Bairro da Polana .Rua da Paz','Mined','Maquinista','82345671','custodio@gmail.com','82345671'),(11,'Luisa Alfredo','Jose TimANE','1','1234567','Bairro da Polana .Rua da Paz','mozexport','inspector','827878227','sbstmugunhe@focomz.com','827878227'),(12,'Luisa Alfredo','Constatino','1','987654321B','Bairro da Polana .Rua da Paz','mozimport','Docente','82828282','ana@gamil.com','847536962'),(13,'kleber Mario','Berta','1','654321','Aeroporto B Q 03 CN 01','mimos','Servente','8334256781','berta@gmail.com','8352355626'),(14,'kleber Mario','Custodio','1','12345678','Aeroporto B Q 03 CN 01','mimos','Servente','8334256781','manubila@gmail.com','847536962'),(15,'kleber Mario','Custodio','1','12345678','Aeroporto B Q 03 CN 01','mimos','Servente','8334256781','manubila@gmail.com','847536962'),(16,'Marcos kente','Leonora Joao','1','111111111','Magoanine C','CFM','inspector','8334256781','leonora@gmail','827878227'),(17,'Lauro','Dias Mulungo','1','123456','Bairro de Costa do Sol ','Pescom','Marinheiro','841230982','dias@gmail.com','841230982'),(18,'Laurentina','Dias Conceicao','1','1234567','Zimpeto','Mercado Zimpeto','Vendedor','82345678','Conceicao@gmail.com','846544321');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admins','2013-06-22 17:05:29','2013-06-22 17:05:29'),(2,'secretarias','2013-06-23 10:57:28','2015-12-02 18:36:17'),(3,'users','2013-06-24 07:47:48','2013-06-24 07:47:48'),(4,'professores','2015-11-21 18:10:32','2015-11-21 18:10:32'),(5,'Encarregados','2016-01-09 11:48:59','2016-01-09 11:48:59');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notasfinalis`
--

LOCK TABLES `notasfinalis` WRITE;
/*!40000 ALTER TABLE `notasfinalis` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagamentos`
--

LOCK TABLES `pagamentos` WRITE;
/*!40000 ALTER TABLE `pagamentos` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registos`
--

LOCK TABLES `registos` WRITE;
/*!40000 ALTER TABLE `registos` DISABLE KEYS */;
INSERT INTO `registos` VALUES (13,24,2),(14,25,3);
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'manuel','admin','3a3534f6b743387475f37d6c7a4807082c0daff7',1,'2016-01-18 07:57:06','2016-01-18 10:20:13'),(2,'','secretaria','d23d81e7933939364347dc000a644a2c19d9d0f3',2,'2016-01-18 07:57:18','2016-01-02 19:25:50'),(7,'','1234','735d0ca07fb02b9eb13fe0b1c40510a4173125fd',5,'2016-01-09 12:07:11','2016-01-09 12:07:11'),(9,'','12345','5900f401a112eefa927904e69ea2b17b937d77e0',5,'2016-01-09 13:10:57','2016-01-09 13:10:57'),(10,'Luisa Alfredo','123456','3e016177228ede6f45c7411e79a1e5af774153bc',5,'2016-01-09 13:16:23','2016-01-09 13:16:23'),(11,'Luisa Alfredo','1234567','35c781d74a4f7fe53dfc5474d648d2b7e32f7d1a',5,'2016-01-09 13:20:24','2016-01-09 13:20:24'),(12,'kleber Mario','12345678','7bd5b4b22a6f68608308dca06736dd77debd3e06',5,'2016-01-09 17:02:56','2016-01-09 17:02:56'),(18,'Marcos kente','00000000','84a328b3ca0682982763569e1e6b8d47c999b66e',5,'2016-01-09 17:53:07','2016-01-09 17:53:07'),(19,'professor','professor','d23d81e7933939364347dc000a644a2c19d9d0f3',4,'2016-01-13 20:50:23','2016-01-13 20:50:23'),(20,'Claudio','Claudio','5900f401a112eefa927904e69ea2b17b937d77e0',5,'2016-01-16 10:55:56','2016-01-16 10:55:56'),(23,'Laurentina','112233','0351b70d90ebb07d33ddc267db7a429282d8fd01',5,'2016-01-16 11:13:29','2016-01-16 11:13:29'),(26,'Sebas','sebas','1527aaaf1f37866aff1b1c2e2503f3399a17e4c2',4,'2016-01-16 11:23:57','2016-01-16 11:23:57');
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

-- Dump completed on 2016-01-16 13:03:28
