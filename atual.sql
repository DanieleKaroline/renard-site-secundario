-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para renard_site2
CREATE DATABASE IF NOT EXISTS `renard_site2` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `renard_site2`;

-- Copiando estrutura para tabela renard_site2.conteudo
CREATE TABLE IF NOT EXISTS `conteudo` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `corpo` varchar(450) NOT NULL,
  `id_link` int(3) NOT NULL,
  `id_imagem` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_link` (`id_link`),
  KEY `id_imagem` (`id_imagem`),
  CONSTRAINT `id_imagem` FOREIGN KEY (`id_imagem`) REFERENCES `imagem` (`id`),
  CONSTRAINT `id_link` FOREIGN KEY (`id_link`) REFERENCES `link` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela renard_site2.conteudo: ~21 rows (aproximadamente)
DELETE FROM `conteudo`;
/*!40000 ALTER TABLE `conteudo` DISABLE KEYS */;
INSERT INTO `conteudo` (`id`, `titulo`, `corpo`, `id_link`, `id_imagem`) VALUES
	(1, 'Missão', 'Auxiliar pessoas portadoras do Transtorno do Espectro Autista em seu dia-a-dia, podendo, assim, possibilitar a tranquilidade e uma rotina tranquila ao nosso usuário.', 3, 11),
	(3, 'Visão:', 'Abrir portas para novas pesquisas e desenvolvimento acerca do TEA e seus portadores, visando garantir melhor modo de vida.', 3, NULL),
	(4, 'Valores:', 'Confiança, respeito, segurança e apoio.', 3, NULL),
	(6, 'Sobre nossa equipe', 'Nossa Equipe De Criadores E Desenvolvedores:', 9, NULL),
	(7, 'Nossa Equipe De Criadores E Desenvolvedores:', '', 9, NULL),
	(9, 'DIVERSAS APLICAÇÕES EM UM ÚNICO SISTEMA', 'Disponibilizamos meios de comunicação, informação e jogos para excelência de sua comodidade. Pode-se acessar em todos os plataformas seja em seu celular, computador ou site.', 5, 2),
	(10, 'Daniele Karoline.', 'Desenvolvedora e criadora do projeto.', 9, 1),
	(16, 'Júlia Martins.', 'Desenvolvedora e criadora do projeto.', 9, 3),
	(18, 'DESKTOP', 'Nossas plataformas Desktop são voltadas para melhor acompanhamento.', 5, 11),
	(20, 'MOBILE', 'Nossa plataforma Mobile te acompanhará durante todos os momentos do seu cotidiano.', 5, 13),
	(21, 'SITE', 'Em nosso site é possivél conhecer mais sobre nosso trabalho, pessoal e produtos.', 5, 14),
	(22, ' Adeldivo Jr.', 'Desenvolvedor e criador do projeto.', 9, 15),
	(24, 'R. Dr. Waldemar Lopes Ferraz, 232 - Vila Tupy, Registro - SP, 11900-000', 'Funcionamento: 8:00 - 19:00, SEG - SEX.', 6, 17),
	(27, '(13) 3821-7573', 'Atendimento:  8:00 - 19:00, SEG - QUI.', 6, 19),
	(28, 'renard@gmail.com', 'Entre em contato com a nossa equipe de desenvolvimento.', 6, 20),
	(30, 'PLATAFORMA MOBILE', 'Em nosso aplicativo, você pode ter mais conforto e facilidade de acesso e controle.', 7, 21),
	(32, 'PLATAFORMA DESKTOP', 'Na nossa versão para desktop, você pode acessa-lo em sua casa ou trabalho de forma simples e rápida, além da disponibilidade de lazer.', 7, NULL),
	(38, 'Renard', 'Seu conforto é prioridade para nós.', 2, NULL),
	(39, 'Cadastre-se', 'Para utilizar nossas plataformas, por favor, realize seu cadastro:', 10, NULL),
	(40, 'Nossa Empresa', 'Melhorar o modo de vida e garantir maior segurança o usuário de nosso sistema. Um dos nossos objetivos é que buscamos auxiliar no dia a dia os portadores de TEA a fim de que nossos clientes se sintam à-vontade para ter sua vida social aberta para novas experiências e convívio sem maiores complicações.', 3, NULL),
	(41, 'Saiba as diferenças', 'Decida qual a melhor aplicação para você:', 11, NULL);
/*!40000 ALTER TABLE `conteudo` ENABLE KEYS */;

-- Copiando estrutura para tabela renard_site2.imagem
CREATE TABLE IF NOT EXISTS `imagem` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `conteudo_id` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `conteudo_id` (`conteudo_id`),
  CONSTRAINT `conteudo_id` FOREIGN KEY (`conteudo_id`) REFERENCES `conteudo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela renard_site2.imagem: ~15 rows (aproximadamente)
DELETE FROM `imagem`;
/*!40000 ALTER TABLE `imagem` DISABLE KEYS */;
INSERT INTO `imagem` (`id`, `nome`, `conteudo_id`) VALUES
	(1, 'danny.png', 10),
	(2, 'servicos.png', 9),
	(3, 'julia.png', 16),
	(11, 'computer.png', 18),
	(13, 'mobile.png', 20),
	(14, 'site.png', 21),
	(15, 'junior.png', 22),
	(17, 'localizacao.png', 24),
	(19, 'telefone.png', 27),
	(20, 'email.png', 28),
	(21, 'android.png', 30),
	(22, 'win.png', 32),
	(23, 'mission.png', 1),
	(31, 'valor.png', 4),
	(32, 'visao.png', 3);
/*!40000 ALTER TABLE `imagem` ENABLE KEYS */;

-- Copiando estrutura para tabela renard_site2.link
CREATE TABLE IF NOT EXISTS `link` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela renard_site2.link: ~8 rows (aproximadamente)
DELETE FROM `link`;
/*!40000 ALTER TABLE `link` DISABLE KEYS */;
INSERT INTO `link` (`id`, `nome`) VALUES
	(2, 'home'),
	(3, 'sobre'),
	(5, 'galeria'),
	(6, 'contato'),
	(7, 'download'),
	(9, 'equipe'),
	(10, 'cadastro'),
	(11, 'plataforma');
/*!40000 ALTER TABLE `link` ENABLE KEYS */;

-- Copiando estrutura para tabela renard_site2.mensagem
CREATE TABLE IF NOT EXISTS `mensagem` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela renard_site2.mensagem: ~3 rows (aproximadamente)
DELETE FROM `mensagem`;
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
INSERT INTO `mensagem` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
	(1, '', '', '', ''),
	(2, 'Daniele', 'carvalho.danielekr@gmail.com', '13996911157', 'aaaa'),
	(3, 'Silmara Carvalho Farias', 'dader.karolinee@gmail.com', 'aa', 'aa');
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;

-- Copiando estrutura para tabela renard_site2.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `idade` char(2) NOT NULL,
  `bio` varchar(150) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela renard_site2.usuario: ~1 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nome`, `idade`, `bio`, `cidade`, `endereco`, `email`, `senha`) VALUES
	(1, 'Dan', '18', 'a', 'rgt', '3, 60', 'a@gmail.com', '123');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
