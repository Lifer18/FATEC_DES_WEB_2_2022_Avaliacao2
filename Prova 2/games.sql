-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para games
CREATE DATABASE IF NOT EXISTS `games` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `games`;

-- Copiando estrutura para tabela games.login
CREATE TABLE IF NOT EXISTS `login` (
  `IdLogin` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  PRIMARY KEY (`IdLogin`),
  UNIQUE KEY `Usuario` (`Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela games.login: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`IdLogin`, `Usuario`, `Senha`) VALUES
	(1, 'Fernando', '12345');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Copiando estrutura para tabela games.review
CREATE TABLE IF NOT EXISTS `review` (
  `IdReview` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Nota` int(11) NOT NULL,
  `Review` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdReview`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela games.review: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` (`IdReview`, `Nome`, `Nota`, `Review`) VALUES
	(1, 'Teste', 6, 'testando apenas!'),
	(2, 'God Of War: Ragnarok', 10, 'Continuacao excelente!');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
