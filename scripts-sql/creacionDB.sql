CREATE DATABASE FORO;
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `nombre` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `rol` enum('Moderador','Normal','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

