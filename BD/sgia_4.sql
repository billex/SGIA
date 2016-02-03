/*
Navicat MySQL Data Transfer

Source Server         : phpMyAdmin
Source Server Version : 50625
Source Host           : 127.0.0.1:3306
Source Database       : sgia

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-02-03 12:20:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for alunos
-- ----------------------------
DROP TABLE IF EXISTS `alunos`;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of alunos
-- ----------------------------
INSERT INTO `alunos` VALUES ('1', 'Nilza Fabião', 'Macamo', '2005-02-01', '2', '1', '1', '123456789', '2015-03-19', '2020-11-01', 'Portugues', 'II');

-- ----------------------------
-- Table structure for anos
-- ----------------------------
DROP TABLE IF EXISTS `anos`;
CREATE TABLE `anos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of anos
-- ----------------------------
INSERT INTO `anos` VALUES ('1', '2015');
INSERT INTO `anos` VALUES ('2', '2016');

-- ----------------------------
-- Table structure for brothers
-- ----------------------------
DROP TABLE IF EXISTS `brothers`;
CREATE TABLE `brothers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `turma` varchar(45) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of brothers
-- ----------------------------

-- ----------------------------
-- Table structure for classas
-- ----------------------------
DROP TABLE IF EXISTS `classas`;
CREATE TABLE `classas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `ano_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of classas
-- ----------------------------
INSERT INTO `classas` VALUES ('2', '2ª Classe', '1', '3');
INSERT INTO `classas` VALUES ('3', '3ª Classe', '1', '4');
INSERT INTO `classas` VALUES ('4', '4ª Classe', '0', '0');
INSERT INTO `classas` VALUES ('5', '5ª Classe', '0', '0');
INSERT INTO `classas` VALUES ('6', '6ª Classe', '0', '0');
INSERT INTO `classas` VALUES ('7', '7ª Classe', '0', '0');
INSERT INTO `classas` VALUES ('8', '8ª Classe', '0', '0');
INSERT INTO `classas` VALUES ('9', '9ª Classe', '0', '0');
INSERT INTO `classas` VALUES ('10', '10ª Classe', '0', '0');
INSERT INTO `classas` VALUES ('11', '11ª Classe', '0', '0');
INSERT INTO `classas` VALUES ('12', '12ª Classe', '0', '0');

-- ----------------------------
-- Table structure for disciplinas
-- ----------------------------
DROP TABLE IF EXISTS `disciplinas`;
CREATE TABLE `disciplinas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `classa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of disciplinas
-- ----------------------------
INSERT INTO `disciplinas` VALUES ('1', 'Português', '0');
INSERT INTO `disciplinas` VALUES ('2', 'Matematica', '0');
INSERT INTO `disciplinas` VALUES ('3', 'Português', '1');
INSERT INTO `disciplinas` VALUES ('4', 'Matematica', '1');
INSERT INTO `disciplinas` VALUES ('5', 'Ingles', '1');
INSERT INTO `disciplinas` VALUES ('6', 'Educacao Fisica', '1');
INSERT INTO `disciplinas` VALUES ('7', 'Português', '4');
INSERT INTO `disciplinas` VALUES ('8', 'Matematica', '4');
INSERT INTO `disciplinas` VALUES ('9', 'Matematica', '2');
INSERT INTO `disciplinas` VALUES ('10', 'Historia', '4');
INSERT INTO `disciplinas` VALUES ('11', 'Geografia', '4');

-- ----------------------------
-- Table structure for documentos
-- ----------------------------
DROP TABLE IF EXISTS `documentos`;
CREATE TABLE `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of documentos
-- ----------------------------
INSERT INTO `documentos` VALUES ('1', 'Bilhete de Indentificação', '');
INSERT INTO `documentos` VALUES ('2', 'Passaporte', '');
INSERT INTO `documentos` VALUES ('3', 'Cédula Pessoal', '');

-- ----------------------------
-- Table structure for educacaoanteriores
-- ----------------------------
DROP TABLE IF EXISTS `educacaoanteriores`;
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

-- ----------------------------
-- Records of educacaoanteriores
-- ----------------------------
INSERT INTO `educacaoanteriores` VALUES ('1', 'Pertoria International School', 'Africa do su', 'inglesa', '2010-10-24', '10 classwe', '2');
INSERT INTO `educacaoanteriores` VALUES ('2', 'Brasil International School', 'Brasil', 'Portuguesa', '2010-10-29', '2 classe', '3');
INSERT INTO `educacaoanteriores` VALUES ('3', 'Dae esssalam international Schooll', 'Tanzania', 'Inglesa', '2014-01-05', '2 classe', '4');

-- ----------------------------
-- Table structure for encaregados
-- ----------------------------
DROP TABLE IF EXISTS `encaregados`;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of encaregados
-- ----------------------------
INSERT INTO `encaregados` VALUES ('1', 'Nilza Fabião', 'Sebastiao José Macamo', '1', '987654321', 'Magoanine C', 'Foco', 'Docente', '827878227', 'sbstmugunhe@gmail.com', '827878227');

-- ----------------------------
-- Table structure for generos
-- ----------------------------
DROP TABLE IF EXISTS `generos`;
CREATE TABLE `generos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of generos
-- ----------------------------
INSERT INTO `generos` VALUES ('1', 'Masculino', 'Este é género masculino');
INSERT INTO `generos` VALUES ('2', 'Femenino', 'Este é género femenino');

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'admins', '2013-06-22 17:05:29', '2013-06-22 17:05:29');
INSERT INTO `groups` VALUES ('2', 'secretarias', '2013-06-23 10:57:28', '2015-12-02 18:36:17');
INSERT INTO `groups` VALUES ('3', 'users', '2013-06-24 07:47:48', '2013-06-24 07:47:48');
INSERT INTO `groups` VALUES ('4', 'professores', '2015-11-21 18:10:32', '2015-11-21 18:10:32');

-- ----------------------------
-- Table structure for nacionalidades
-- ----------------------------
DROP TABLE IF EXISTS `nacionalidades`;
CREATE TABLE `nacionalidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nacionalidades
-- ----------------------------
INSERT INTO `nacionalidades` VALUES ('1', 'Moçambicana', '');
INSERT INTO `nacionalidades` VALUES ('2', 'Sul Africana', '');
INSERT INTO `nacionalidades` VALUES ('3', 'Zimbabweana', '');
INSERT INTO `nacionalidades` VALUES ('4', 'Tanzaniana', '');
INSERT INTO `nacionalidades` VALUES ('5', 'Francesa', '');

-- ----------------------------
-- Table structure for notasfinalis
-- ----------------------------
DROP TABLE IF EXISTS `notasfinalis`;
CREATE TABLE `notasfinalis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL,
  `classa_id` int(11) NOT NULL,
  `valorda_nota` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of notasfinalis
-- ----------------------------
INSERT INTO `notasfinalis` VALUES ('1', '1', '1', '3', '12');
INSERT INTO `notasfinalis` VALUES ('2', '1', '2', '3', '14');

-- ----------------------------
-- Table structure for pagamentos
-- ----------------------------
DROP TABLE IF EXISTS `pagamentos`;
CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `fax` varchar(45) NOT NULL,
  `situacao` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pagamentos
-- ----------------------------

-- ----------------------------
-- Table structure for pauts
-- ----------------------------
DROP TABLE IF EXISTS `pauts`;
CREATE TABLE `pauts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classa_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `disciplina_id` int(11) NOT NULL,
  `anos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pauts
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for privileges
-- ----------------------------
DROP TABLE IF EXISTS `privileges`;
CREATE TABLE `privileges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` char(11) NOT NULL,
  `controller` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `controller` (`controller`,`action`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of privileges
-- ----------------------------
INSERT INTO `privileges` VALUES ('1', 'admins', 'privileges', 'add');
INSERT INTO `privileges` VALUES ('2', 'admins', 'privileges', 'edit');
INSERT INTO `privileges` VALUES ('3', 'admins', 'privileges', 'delete');
INSERT INTO `privileges` VALUES ('4', 'admins', 'privileges', 'view');
INSERT INTO `privileges` VALUES ('5', 'admins', 'privileges', 'index');
INSERT INTO `privileges` VALUES ('11', 'admins', 'groups', 'add');
INSERT INTO `privileges` VALUES ('12', 'admins', 'groups', 'edit');
INSERT INTO `privileges` VALUES ('13', 'admins', 'groups', 'delete');
INSERT INTO `privileges` VALUES ('14', 'admins', 'groups', 'view');
INSERT INTO `privileges` VALUES ('15', 'admins', 'groups', 'index');
INSERT INTO `privileges` VALUES ('18', 'admins', 'users', 'index');
INSERT INTO `privileges` VALUES ('19', 'admins', 'users', 'view');
INSERT INTO `privileges` VALUES ('20', 'admins', 'users', 'add');
INSERT INTO `privileges` VALUES ('21', 'admins', 'users', 'edit');
INSERT INTO `privileges` VALUES ('22', 'admins', 'users', 'delete');
INSERT INTO `privileges` VALUES ('23', 'managers', 'clientes', 'add');
INSERT INTO `privileges` VALUES ('24', 'managers', 'clientes', 'index');

-- ----------------------------
-- Table structure for professores
-- ----------------------------
DROP TABLE IF EXISTS `professores`;
CREATE TABLE `professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `contacto` varchar(45) DEFAULT NULL,
  `disciplina_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of professores
-- ----------------------------
INSERT INTO `professores` VALUES ('1', 'Manuel Bila', 'Aereporto', '826767886', '1');
INSERT INTO `professores` VALUES ('2', 'João Cossa', 'Zimpeto', '21454545', '2');
INSERT INTO `professores` VALUES ('3', 'Sara José Macamo', 'Maxaquene', '21454545', '5');

-- ----------------------------
-- Table structure for registos
-- ----------------------------
DROP TABLE IF EXISTS `registos`;
CREATE TABLE `registos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_id` int(11) NOT NULL,
  `classa_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of registos
-- ----------------------------
INSERT INTO `registos` VALUES ('1', '1', '3');

-- ----------------------------
-- Table structure for saudes
-- ----------------------------
DROP TABLE IF EXISTS `saudes`;
CREATE TABLE `saudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `perguntamedicacao` varchar(45) DEFAULT NULL,
  `necessidades` varchar(255) DEFAULT NULL,
  `nomemedico` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of saudes
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'manuel', 'admin', '3a3534f6b743387475f37d6c7a4807082c0daff7', '1', '2016-01-18 07:57:06', '2016-01-18 10:20:13');
INSERT INTO `users` VALUES ('2', '', 'secretaria', 'd23d81e7933939364347dc000a644a2c19d9d0f3', '2', '2016-01-18 07:57:18', '2016-01-02 19:25:50');
INSERT INTO `users` VALUES ('3', 'Roberto José Gune', 'roberto', 'eb65b93ffa5de0ddd445d0d216145b4892749f1a', '4', '2016-02-01 17:50:43', '2016-02-01 17:50:43');
INSERT INTO `users` VALUES ('4', 'Manuel Júlio Bila', 'Manuel', 'eb65b93ffa5de0ddd445d0d216145b4892749f1a', '4', '2016-02-01 18:21:29', '2016-02-01 18:21:29');
INSERT INTO `users` VALUES ('5', 'Nilza Fabião', '123456789', 'eb65b93ffa5de0ddd445d0d216145b4892749f1a', '5', '2016-02-01 18:41:42', '2016-02-01 18:41:42');
