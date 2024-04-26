-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla bd_practicaindividualphp.categorias_paquetes: ~0 rows (aproximadamente)
INSERT INTO `categorias_paquetes` (`IdCategoriaPaq`, `CategoriaPaq`) VALUES
	(1, 'Turistico'),
	(2, 'Historico'),
	(3, 'Gastronomico'),
	(4, 'Educativo');

-- Volcando datos para la tabla bd_practicaindividualphp.ofertas: ~2 rows (aproximadamente)
INSERT INTO `ofertas` (`IdOferta`, `Descripcion`, `Porcentaje`, `FechaDesde`, `FechaHasta`, `Estado`) VALUES
	(1, 'Ninguna', 0, '2024-04-26', '2024-04-26', 'ACTIVO'),
	(2, 'Oferta de prueba', 15, '2024-04-26', '2024-04-26', 'ACTIVO');

-- Volcando datos para la tabla bd_practicaindividualphp.paquetes_turisticos: ~3 rows (aproximadamente)
INSERT INTO `paquetes_turisticos` (`IdPaquete`, `Nombre`, `Descripcion`, `Costo`, `Num_personas`, `Edades`, `Idiomas`, `Alojamiento`, `Tiempo_estimado`, `Disponibilidad`, `IdCategoria`, `IdOferta`) VALUES
	(2, 'dasdad', 'dasdasd', 1, 1, 'Todas las edades', 'Español', 'Disponible (Hotel)', 1, 'Disponible', 1, 1),
	(3, 'sadasdas', 'dasdjhggfdfgjk', 10, 12, 'Todas las edades', 'Español', 'Disponible (Hotel)', 34, 'Disponible', 1, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
