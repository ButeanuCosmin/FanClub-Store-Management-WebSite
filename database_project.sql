-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for site
CREATE DATABASE IF NOT EXISTS `site` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `site`;

-- Dumping structure for table site.developement_squad
CREATE TABLE IF NOT EXISTS `developement_squad` (
  `Name` text,
  `Photo` text,
  `Team` text,
  `Position` text,
  `Number` int(11) DEFAULT NULL,
  `Country` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table site.developement_squad: ~14 rows (approximately)
/*!40000 ALTER TABLE `developement_squad` DISABLE KEYS */;
INSERT INTO `developement_squad` (`Name`, `Photo`, `Team`, `Position`, `Number`, `Country`) VALUES
	('Jamie Cumming', 'Cummings.png', 'Developement Squad', 'Goalkeeper', 1, 'England'),
	('Marcin Bulka', 'Marcin-Bulka.jpg', 'Developement Squad', 'Goalkeeper', 0, 'Poland'),
	('Nicolas Tie', 'Tie.jpg', 'Developement Squad', 'Goalkeeper', 0, 'France'),
	('Ethan Ampadu', 'Ampadu.png', 'Developement Squad', 'Defender', 0, 'Wales'),
	('Juan Castillo', 'Castillo.png', 'Developement Squad', 'Defender', 0, 'Netherlands'),
	('Joseph Colley', 'Joseph-Colley.png', 'Developement Squad', 'Defender', 0, 'Sweden'),
	('Cole DaSilva', 'Cole-Dasilva.png', 'Developement Squad', 'Defender', 0, 'Wales'),
	('Jacob Maddox', 'Jacob-maddox.png', 'Developement Squad', 'Midfielder', 0, 'England'),
	('Ruben Sammut', 'Sammut.png', 'Developement Squad', 'Midfielder', 0, 'England'),
	('Kyle Scott', 'Kyle Scott.png', 'Developement Squad', 'Midfielder', 0, 'England'),
	('Dujon Sterling', 'Dujon-Sterling.png', 'Developement Squad', 'Midfielder', 0, 'England'),
	('Islam Feruz', 'Feruz.jpg', 'Developement Squad', 'Forward', 0, 'Scotland'),
	('Kylian Hazard', 'Kyllian-Hazard.jpg', 'Developement Squad', 'Forward', 0, 'Belgium'),
	('Izzy Brown', 'Isaiah-Brown.png', 'Developement Squad', 'Forward', 0, 'England');
/*!40000 ALTER TABLE `developement_squad` ENABLE KEYS */;

-- Dumping structure for table site.first_team
CREATE TABLE IF NOT EXISTS `first_team` (
  `Name` text,
  `Photo` text,
  `Team` text,
  `Position` text,
  `Number` int(11) DEFAULT NULL,
  `Country` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table site.first_team: ~12 rows (approximately)
/*!40000 ALTER TABLE `first_team` DISABLE KEYS */;
INSERT INTO `first_team` (`Name`, `Photo`, `Team`, `Position`, `Number`, `Country`) VALUES
	('Eden Hazard', 'Hazard.png', 'First Team', 'Midfielder', 10, 'Belgium'),
	('Willy Caballero', 'Caballero.png', 'First Team', 'Goalkeeper', 1, 'Argentina'),
	('Antonio Rudiger', 'Rudiger.png', 'First Team', 'Defender', 2, 'Germany'),
	('Marcos Alonso', 'Alonso.png', 'First Team', 'Defender', 3, 'Spain'),
	('Cesc Fabregas', 'Fabregas.png', 'First Team', 'Midfielder', 4, 'Spain'),
	('Alvaro Morata', 'Morata.png', 'First Team', 'Forward', 9, 'Spain'),
	('NGolo Kante', 'Kante.png', 'First Team', 'Midfielder', 7, 'France'),
	('Pedro', 'Pedro.png', 'First Team', 'Forward', 11, 'Spain'),
	('Thibaut Courtois', 'Courtois.png', 'First Team', 'Goalkeeper', 13, 'Belgium'),
	('Eduardo', 'Eduardo.png', 'First Team', 'Goalkeeper', 37, 'Portugal'),
	('Cesar Azpilicueta', 'Azpilicueta.png', 'First Team', 'Defender', 28, 'Spain');
/*!40000 ALTER TABLE `first_team` ENABLE KEYS */;

-- Dumping structure for table site.kits
CREATE TABLE IF NOT EXISTS `kits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text,
  `Photo` text,
  `Price` text,
  `Size` varchar(50) DEFAULT NULL,
  `Product` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table site.kits: ~12 rows (approximately)
/*!40000 ALTER TABLE `kits` DISABLE KEYS */;
INSERT INTO `kits` (`id`, `Name`, `Photo`, `Price`, `Size`, `Product`) VALUES
	(1, 'Home Shirt', 'Chelsea_Home_Shirt.jpg', '98', 'L', 'Kits'),
	(2, 'Alonso Shirt', 'Alonso_Shirt.jpg', '75', 'L', 'Kits'),
	(3, 'Kante Shirt', 'Kante_Shirt.jpg', '75', 'L', 'Kits'),
	(4, 'Hazard Shirt', 'Hazard_Shirt.jpg', '98', 'L', 'Kits'),
	(5, 'Hudson Odoi Shirt', 'Odoi_Shirt.jpg', '75', 'M', 'Kits'),
	(6, 'Willian Shirt', 'Willian_Shirt.jpg', '75', 'L', 'Kits'),
	(7, 'Away Shirt', 'Chelsea_Away_Shirt.jpg', '98', 'M', 'Kits'),
	(8, 'White Jacket', 'WhiteJacket.jpg', '65', NULL, 'Training'),
	(9, 'Blue Jacket', 'BlueJacket.jpg', '65', NULL, 'Training'),
	(10, 'White Pullover', 'WhitePull.jpg', '120', NULL, 'Training'),
	(11, 'Dark Training Pants', 'BluePants.jpg', '55', NULL, 'Training'),
	(12, 'Blue Training Pants', 'TrainingPants.jpg', '55', NULL, 'Training');
/*!40000 ALTER TABLE `kits` ENABLE KEYS */;

-- Dumping structure for table site.ladies_team
CREATE TABLE IF NOT EXISTS `ladies_team` (
  `Name` text,
  `Photo` text,
  `Team` text,
  `Position` text,
  `Number` int(11) DEFAULT NULL,
  `Country` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table site.ladies_team: ~9 rows (approximately)
/*!40000 ALTER TABLE `ladies_team` DISABLE KEYS */;
INSERT INTO `ladies_team` (`Name`, `Photo`, `Team`, `Position`, `Number`, `Country`) VALUES
	('Hedvig Lindahl', 'Lindahl.png', 'Ladies Team', 'Goalkeeper', 1, 'Sweden'),
	('Carly Telford', 'Telford.png', 'Ladies Team', 'Goalkeeper', 28, 'England'),
	('Hannah Blundell', 'Blundell.png', 'Ladies Team', 'Defender', 3, 'England'),
	('Millie Bright', 'Bright.png', 'Ladies Team', 'Defender', 4, 'England'),
	('Jonna Andersson', 'Andersson.png', 'Ladies Team', 'Defender', 20, 'Sweden'),
	('Maren Mjelde', 'Mjelde.png', 'Ladies Team', 'Midfielder', 18, 'Norway'),
	('So Yun Ji', 'Yun.png', 'Ladies Team', 'Midfielder', 10, 'South Korea'),
	('Anita Asante', 'Asante.png', 'Ladies Team', 'Midfielder', 6, 'England'),
	('Fran Kirby', 'Kirby.png', 'Ladies Team', 'Forward', 14, 'England'),
	('Erin Cuthbert', 'Cuthbert.png', 'Ladies Team', 'Forward', 22, 'England'),
	('Ramona Bachmann', 'Bachmann.png', 'Ladies Team', 'Forward', 23, 'Switzerland');
/*!40000 ALTER TABLE `ladies_team` ENABLE KEYS */;

-- Dumping structure for table site.management
CREATE TABLE IF NOT EXISTS `management` (
  `Name` text,
  `Photo` text,
  `Role` text,
  `Country` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table site.management: ~3 rows (approximately)
/*!40000 ALTER TABLE `management` DISABLE KEYS */;
INSERT INTO `management` (`Name`, `Photo`, `Role`, `Country`) VALUES
	('Antonio Conte', 'Conte.png', 'Manager', 'Italy'),
	('Angelo Alessio', 'Alessio.jpg', 'Assistant Manager', 'Italy'),
	('Gianluca Conte', 'gconte.jpg', 'Assistant Manager', 'Italy');
/*!40000 ALTER TABLE `management` ENABLE KEYS */;

-- Dumping structure for table site.produse
CREATE TABLE IF NOT EXISTS `produse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `poza` text,
  `nume` text,
  `pret` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table site.produse: ~0 rows (approximately)
/*!40000 ALTER TABLE `produse` DISABLE KEYS */;
/*!40000 ALTER TABLE `produse` ENABLE KEYS */;

-- Dumping structure for table site.under18_team
CREATE TABLE IF NOT EXISTS `under18_team` (
  `Name` text,
  `Photo` text,
  `Team` text,
  `Position` text,
  `Number` int(11) DEFAULT NULL,
  `Country` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table site.under18_team: ~11 rows (approximately)
/*!40000 ALTER TABLE `under18_team` DISABLE KEYS */;
INSERT INTO `under18_team` (`Name`, `Photo`, `Team`, `Position`, `Number`, `Country`) VALUES
	('Jamie Cumming', 'Cummings.png', 'Under18 Team', 'Goalkeeper', 0, 'England'),
	('Karlo Ziger', 'Karlo_Ziger.jpg', 'Under18 Team', 'Goalkeeper', 0, 'Croatia'),
	('Nicolas Tie', 'Tie.jpg', 'Under18 Team', 'Goalkeeper', 0, 'France'),
	('Reece James', 'Reece-James.png', 'Under18 Team', 'Defender', 0, 'England'),
	('Trevoh Chalobah', 'Trevoh.jpg', 'Under18 Team', 'Defender', 0, 'England'),
	('Jonathan Panzo', 'Panzo.jpg', 'Under18 Team', 'Defender', 0, 'England'),
	('Billy Gilmour', 'Glimour.jpg', 'Under18 Team', 'Midfielder', 0, 'Scotland'),
	('George McEachran', 'McEachran.jpg', 'Under18 Team', 'Midfielder', 0, 'England'),
	('Connor Gallagher', 'conor-gallagher.jpg', 'Under18 Team', 'Midfielder', 0, 'England'),
	('Callum Hudson Odoi', 'Hudson-Odoi.png', 'Under18 Team', 'Forward', 0, 'England'),
	('Martell Crossdale', 'Crossdale.png', 'Under18 Team', 'Forward', 0, 'England'),
	('Harvey StClair', 'Harvey_St-Clair.png', 'Under18 Team', 'Forward', 0, 'Scotland');
/*!40000 ALTER TABLE `under18_team` ENABLE KEYS */;

-- Dumping structure for table site.users
CREATE TABLE IF NOT EXISTS `users` (
  `username` text,
  `pass` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table site.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`username`, `pass`) VALUES
	('cosmin123', '1234'),
	('cosmin', '123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
