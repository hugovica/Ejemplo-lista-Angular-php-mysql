CREATE TABLE `dbmascota` (
  `id` bigint(100) UNSIGNED NOT NULL primary key AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `raza` varchar(150) NOT NULL,
  `adoptado` varchar(150) DEFAULT NULL,
  `dueno` varchar(150)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;