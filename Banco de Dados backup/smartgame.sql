-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: smartgame
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
-- Table structure for table `tbl_empresa`
--

DROP TABLE IF EXISTS `tbl_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_empresa` (
  `id_sobrenos` int(11) NOT NULL AUTO_INCREMENT,
  `txtSobreNos` varchar(600) NOT NULL,
  `txtNossoProposito` varchar(600) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id_sobrenos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_empresa`
--

LOCK TABLES `tbl_empresa` WRITE;
/*!40000 ALTER TABLE `tbl_empresa` DISABLE KEYS */;
INSERT INTO `tbl_empresa` VALUES (1,'A SmartGames é a empresa vendas jogos do futuro, somos novos mas com potencial, nosso objetivo e cada vez mais trabalhar a gestão da marca de forma constante, pois a consideramos um ativo estratégico cada vez mais importante para alcançar nosso objetivo em expandir nossa gama de produtos. ','\"Levar entretenimento para as pessoas, gerando satisfação, alegria, união e emoção\". ','(11) 4611-4493','smartgames@contato.com');
/*!40000 ALTER TABLE `tbl_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_loja`
--

DROP TABLE IF EXISTS `tbl_loja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_loja` (
  `idLoja` int(11) NOT NULL AUTO_INCREMENT,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `lat` varchar(45) DEFAULT NULL,
  `long` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idLoja`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_loja`
--

LOCK TABLES `tbl_loja` WRITE;
/*!40000 ALTER TABLE `tbl_loja` DISABLE KEYS */;
INSERT INTO `tbl_loja` VALUES (1,'Cotia','SP','José de Anchieta','Jardim Japão','-23.667500','-47.077239'),(2,'Santana de Parnaíba','SP','Rosa Escarpa','Votuparim','-23.451478','-46.915922'),(3,'Nova Friburgo','RJ','Alberto Braune','Centro','-22.288193','-42.531929'),(4,'Salvador','BA','Maciel de Cima','Pelourinho','-12.973062','-38.509111');
/*!40000 ALTER TABLE `tbl_loja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produto`
--

DROP TABLE IF EXISTS `tbl_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(4255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `valor` float NOT NULL,
  `detalhe` varchar(1000) NOT NULL,
  `destaque` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produto`
--

LOCK TABLES `tbl_produto` WRITE;
/*!40000 ALTER TABLE `tbl_produto` DISABLE KEYS */;
INSERT INTO `tbl_produto` VALUES (1,'Dead Rising 4','img/produtos/deadxboxone.png',100.99,'Dead Rising 4 é o novo jogo de ação em terceira pessoa publicado pela Capcom. Disponível somente para Xbox One e PC, o título retorna às origens sem perder os elementos modernos que consagraram o último episódio.',0),(2,'Forza Horizon 4','img/produtos/forzaxone.png',99.99,'O Destiny 2 é um videojogo de tiro em primeira pessoa multiplayer online desenvolvido pela Bungie e publicado pela Activision. Foi lançado para PlayStation 4 e Xbox One em 6 de setembro de 2017, seguido por uma versão do Microsoft Windows no mês seguinte. É a continuação do 2014 Destiny e suas expansões subseqüentes. ',0),(3,'Spider-Man','img/produtos/spidermanps4.png',200.76,'Peter Parker luta com a vida dupla que leva na escola e esconde sua identidade secreta de todos, incluindo seu melhor amigo Harry Osborn.',1),(4,'Tomb Raider','img/produtos/tombxone.png',120.2,'Tomb Raider é um videojogo de ação-aventura, décimo título da série Tomb Raider e o quinto produzido pela Crystal Dynamics. Foi publicado pela Square Enix em 5 de Março de 2013 para Microsoft Windows, PlayStation 3 e Xbox 360.',0),(5,'God of War','img/produtos/gowps4.png',150.2,'God of War é uma série de jogos eletrônicos de ação-aventura vagamente baseado nas mitologias grega e nórdica sendo criado originalmente por David Jaffe da Santa Monica Studio. Iniciada em 2005, a série tornou-se carro-chefe para a marca PlayStation, que consiste em oito jogos em várias plataformas.',0),(6,'Mass Effect 3','img/produtos/massxone.png',85.26,'Mass Effect 3 é um jogo de Ação desenvolvido pela BioWare e publicado pela Electronic Arts para Microsoft Windows, Playstation 3, Xbox 360 e Wii U. O jogo marca o terceiro e último capítulo da trilogia Mass Effect.',0),(7,'Fifa 19','img/produtos/fifa19.png',199.99,'FIFA 19 é um jogo eletrônico de futebol desenvolvido e publicado pela EA Sports, que foi lançado mundialmente em 28 de setembro de 2018. Este é o vigésimo sexto título principal da série FIFA e o terceiro a usar o mecanismo de jogo da Frostbite para Xbox One, PS4 e PC.',0),(8,'Uncharted 4: A Thief\'s End','img/produtos/uncps4.png',99.99,'Uncharted 4: A Thief\'s End é um jogo eletrônico de acção-aventura produzido pela Naughty Dog. Foi lançado no dia 10 de maio de 2016 pela Sony Computer Entertainment sendo um exclusivo para PlayStation 4.',1),(9,'Overwatch','img/produtos/over.png',99.99,'Overwatch é um jogo eletrônico multijogador de tiro em primeira pessoa desenvolvido e publicado pela Blizzard Entertainment. Revelado na BlizzCon de 2014, o jogo enfatiza a jogabilidade cooperativa usando um elenco de vários \"heróis\", cada um com suas próprias habilidades e funções dentro de uma equipe.',1),(10,'NO MAN\'S SKY','img/produtos/nomanps4.png',35.45,'No Man\'s Sky é um videojogo de ficção científica com elementos de aventura e sobrevivência, desenvolvido e publicado pelo estúdio independente Hello Games. ',0);
/*!40000 ALTER TABLE `tbl_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produtoloja`
--

DROP TABLE IF EXISTS `tbl_produtoloja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_produtoloja` (
  `idProdutoLoja` int(11) NOT NULL AUTO_INCREMENT,
  `idProduto` int(11) NOT NULL,
  `idLoja` int(11) NOT NULL,
  `estoque` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProdutoLoja`),
  KEY `fk_tbl_ProdutoLoja_tbl_Produto_idx` (`idProduto`),
  KEY `fk_tbl_ProdutoLoja_tbl_Loja1_idx` (`idLoja`),
  CONSTRAINT `fk_pl_Loja` FOREIGN KEY (`idLoja`) REFERENCES `tbl_loja` (`idLoja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pl_Produto` FOREIGN KEY (`idProduto`) REFERENCES `tbl_produto` (`idProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produtoloja`
--

LOCK TABLES `tbl_produtoloja` WRITE;
/*!40000 ALTER TABLE `tbl_produtoloja` DISABLE KEYS */;
INSERT INTO `tbl_produtoloja` VALUES (1,1,1,20),(2,3,1,5),(3,2,1,43),(4,1,2,5),(5,4,4,12),(6,4,2,220),(7,3,3,10),(8,10,2,16),(9,9,4,18),(10,8,3,12),(11,6,4,23),(12,7,1,6),(13,5,3,7);
/*!40000 ALTER TABLE `tbl_produtoloja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'smartgame'
--

--
-- Dumping routines for database 'smartgame'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-01  9:58:02
