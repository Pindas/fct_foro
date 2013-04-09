DROP DATABASE IF EXISTS FORO;
CREATE DATABASE FORO;
USE FORO;
-- Estructura de tabla para la tabla `MensajeRespuesta`
--

CREATE TABLE IF NOT EXISTS `MensajeRespuesta` (
  `idMensaje` int(11) NOT NULL,
  `idMensajeRespondido` int(11) NOT NULL,
  PRIMARY KEY (`idMensaje`),
  KEY `idMensajeRespondido` (`idMensajeRespondido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mensajes`
--

CREATE TABLE IF NOT EXISTS `Mensajes` (
  `idMensaje` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` text NOT NULL,
  `autor` varchar(25) NOT NULL,
  `fecha_publicacion` date NOT NULL,
  PRIMARY KEY (`idMensaje`),
  KEY `autor` (`autor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MensajesPrivados`
--

CREATE TABLE IF NOT EXISTS `MensajesPrivados` (
  `idMensaje` int(11) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `destinatario` varchar(25) NOT NULL,
  PRIMARY KEY (`idMensaje`),
  KEY `destinatario` (`destinatario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MensajesTema`
--

CREATE TABLE IF NOT EXISTS `MensajesTema` (
  `idMensaje` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `seccion` enum('base','base1','base2') NOT NULL,
  `fijo` tinyint(1) NOT NULL,
  `idTema` int(11) NOT NULL,
  PRIMARY KEY (`idMensaje`),
  KEY `seccion` (`seccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Secciones`
--

CREATE TABLE IF NOT EXISTS `Secciones` (
  `idSeccion` enum('base','base1','base2') NOT NULL,
  PRIMARY KEY (`idSeccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `nombre` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `rol` enum('Moderador','Normal','Admin') NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `MensajeRespuesta`
--
ALTER TABLE `MensajeRespuesta`
  ADD CONSTRAINT `MensajeRespuesta_ibfk_2` FOREIGN KEY (`idMensajeRespondido`) REFERENCES `Mensajes` (`idMensaje`),
  ADD CONSTRAINT `MensajeRespuesta_ibfk_1` FOREIGN KEY (`idMensaje`) REFERENCES `Mensajes` (`idMensaje`);

--
-- Filtros para la tabla `Mensajes`
--
ALTER TABLE `Mensajes`
  ADD CONSTRAINT `Mensajes_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `Usuarios` (`nombre`);

--
-- Filtros para la tabla `MensajesPrivados`
--
ALTER TABLE `MensajesPrivados`
  ADD CONSTRAINT `MensajesPrivados_ibfk_1` FOREIGN KEY (`idMensaje`) REFERENCES `Mensajes` (`idMensaje`),
  ADD CONSTRAINT `MensajesPrivados_ibfk_2` FOREIGN KEY (`destinatario`) REFERENCES `Usuarios` (`nombre`);

--
-- Filtros para la tabla `MensajesTema`
--
ALTER TABLE `MensajesTema`
  ADD CONSTRAINT `MensajesTema_ibfk_2` FOREIGN KEY (`idMensaje`) REFERENCES `Mensajes` (`idMensaje`),
  ADD CONSTRAINT `MensajesTema_ibfk_1` FOREIGN KEY (`seccion`) REFERENCES `Secciones` (`idSeccion`);
