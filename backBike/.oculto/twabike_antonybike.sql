-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2013 a las 18:17:19
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `twabike_antonybike`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academia`
--

CREATE TABLE IF NOT EXISTS `academia` (
  `IDMODULO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBREMODULO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONMODULO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DIRECCIONWEB` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBREACADEMIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `UBICACIONACADEMIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHAFUNDACIONACADEMIA` date DEFAULT NULL,
  `NOMBREFUNDADORACADEMIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONOCONTACTOACADEMIA` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HORARIOAPERTURAACADEMIA` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HORARIOCIERREACADEMIA` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDMODULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCIONWEB` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PRIMERAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `RUTUSUARIO` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONOUSUARIO` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COMUNAUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CIUDADUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `EMAILUSUARIO` varchar(1024) COLLATE utf8_spanish2_ci NOT NULL,
  `PRIMERNOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `SEGUNDONOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEGUNDOAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IDCLASE` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONOEMERGENCIAAPODERADOALUMNO` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBREAPODERADOALUMNO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONOEMERGENCIAFAMILIARALUMNO` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBREFAMILIAREMERGENCIAALUMNO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`NOMBREUSUARIO`),
  KEY `FK_ESENTRENADO` (`IDCLASE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audio`
--

CREATE TABLE IF NOT EXISTS `audio` (
  `IDMEDIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBREMEDIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `UBICACIONMEDIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHAPUBLICACIONMEDIA` datetime DEFAULT NULL,
  `PESOMEDIA` float DEFAULT NULL,
  `FORMATOMEDIA` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONMEDIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `AUTORMEDIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHACAPTURAMEDIA` date DEFAULT NULL,
  `DURACION_` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `BITRATOAUDIO` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDMEDIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorianoticias`
--

CREATE TABLE IF NOT EXISTS `categorianoticias` (
  `IDCATEGORIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `IDMODULO` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBRECATEGORIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONCATEGORIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDCATEGORIA`),
  KEY `FK_RELATIONSHIP_40` (`IDMODULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE IF NOT EXISTS `clase` (
  `IDCLASE` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `IDMODULO` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `TIPOCLASE` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NIVELCLASE` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDCLASE`),
  KEY `FK_DICTA` (`IDMODULO`),
  KEY `FK_ENTRENA` (`NOMBREUSUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCIONWEB` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PRIMERNOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEGUNDONOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PRIMERAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEGUNDOAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RUTUSUARIO` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONOUSUARIO` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COMUNAUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CIUDADUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `EMAILUSUARIO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CONVENIOCLIENTE` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCUENTOESPECIALCLIENTE` float DEFAULT NULL,
  `DIRECCIONDESPACHOCLIENTE` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CIUDADDESPACHOCLIENTE` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PREFERENCIAVOUCHERCLIENTE` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`NOMBREUSUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE IF NOT EXISTS `detalleventa` (
  `FECHAVENTA` datetime NOT NULL,
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `CLI_NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `OBSERVACIONESVENTA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`FECHAVENTA`,`NOMBREUSUARIO`,`CLI_NOMBREUSUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `IDEVENTO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `IDTIPOEVENTO` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBREEVENTO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONEVENTO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RUTAEVENTO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHAINICIOEVENTO` datetime DEFAULT NULL,
  `FECHATERMINOEVENTO` datetime DEFAULT NULL,
  PRIMARY KEY (`IDEVENTO`),
  KEY `FK_CONTIENE` (`IDTIPOEVENTO`),
  KEY `FK_RELATIONSHIP_29` (`NOMBREUSUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidad`
--

CREATE TABLE IF NOT EXISTS `habilidad` (
  `IDNIVELHABILIDA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBREHABILIDAD` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONHABILIDAD` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDNIVELHABILIDA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `IDMEDIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBREMEDIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `UBICACIONMEDIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHAPUBLICACIONMEDIA` datetime DEFAULT NULL,
  `PESOMEDIA` float DEFAULT NULL,
  `FORMATOMEDIA` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONMEDIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `AUTORMEDIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHACAPTURAMEDIA` date DEFAULT NULL,
  `NOMBREIMAGEN` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ALTOIMAGEN` int(11) DEFAULT NULL,
  `LARGOIMAGEN` int(11) DEFAULT NULL,
  `RESOLUCIONIMAGEN` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDMEDIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructorencargado`
--

CREATE TABLE IF NOT EXISTS `instructorencargado` (
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `PRIMERAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `RUTUSUARIO` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONOUSUARIO` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COMUNAUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CIUDADUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `EMAILUSUARIO` varchar(1024) COLLATE utf8_spanish2_ci NOT NULL,
  `PRIMERNOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `SEGUNDONOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEGUNDOAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DIRECCIONWEB` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ESPECIALIDADENCARGADO` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `LUGARESPECIALIDADENCARGADO` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ANOCONTRATACIONENCARGADO` date DEFAULT NULL,
  `ANOSEXPERIENCIAENCARGADO` int(11) DEFAULT NULL,
  `COMENTARIOSENCARGADO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`NOMBREUSUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `IDMEDIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBREMEDIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `UBICACIONMEDIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHAPUBLICACIONMEDIA` datetime DEFAULT NULL,
  `PESOMEDIA` float DEFAULT NULL,
  `FORMATOMEDIA` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONMEDIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `AUTORMEDIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHACAPTURAMEDIA` date DEFAULT NULL,
  PRIMARY KEY (`IDMEDIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `IDMENSAJE` int(11) NOT NULL,
  `asuntoMensaje` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `textoMensaje` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechaCreacionMensaje` datetime DEFAULT NULL,
  PRIMARY KEY (`IDMENSAJE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE IF NOT EXISTS `modulo` (
  `IDMODULO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRESITIOWEB` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBREMODULO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONMODULO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDMODULO`),
  KEY `FK_RELATIONSHIP_7` (`NOMBRESITIOWEB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `IDNOTICIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `IDCATEGORIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHAPUBLICACION` datetime DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `TITULOPRINCIPAL` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `LEAD` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TEXTONOTICIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDNOTICIA`),
  KEY `FK_RELATIONSHIP_27` (`IDCATEGORIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticiamedia`
--

CREATE TABLE IF NOT EXISTS `noticiamedia` (
  `IDNOTICIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `IDMEDIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHAINSERCIONNOTICIA` datetime DEFAULT NULL,
  `COMENTARIOREFERENCIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDNOTICIA`,`IDMEDIA`),
  KEY `FK_RELATIONSHIP_42` (`IDMEDIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patologia`
--

CREATE TABLE IF NOT EXISTS `patologia` (
  `IDPATOLOGIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBREPATOLOGIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONPATOLOGIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PRECAUCIONESPATOLOGIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDPATOLOGIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portalnoticias`
--

CREATE TABLE IF NOT EXISTS `portalnoticias` (
  `IDMODULO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `IDNOTICIADESTACADA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `IDIMAGENPRINCIPAL` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBREMODULO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONMODULO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DIRECCIONWEB` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TITULOPORTAL` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDMODULO`),
  KEY `FK_RELATIONSHIP_46` (`IDNOTICIADESTACADA`),
  KEY `FK_RELATIONSHIP_47` (`IDIMAGENPRINCIPAL`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productomedia`
--

CREATE TABLE IF NOT EXISTS `productomedia` (
  `IDMEDIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `IDPRODUCTO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`IDMEDIA`,`IDPRODUCTO`),
  KEY `fk_media_has_producto_producto1_idx` (`IDPRODUCTO`),
  KEY `fk_media_has_producto_media1_idx` (`IDMEDIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IDROL` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBREROL` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONROL` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDROL`),
  KEY `FK_RELATIONSHIP_14` (`NOMBREUSUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicioentrenamiento`
--

CREATE TABLE IF NOT EXISTS `servicioentrenamiento` (
  `vendible` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombreSistemaEntrenamiento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `especificacionesEntrenamiento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `materialApoyoEntrenamiento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `duracionEntrenamiento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `costoEntrenamiento` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`vendible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitioweb`
--

CREATE TABLE IF NOT EXISTS `sitioweb` (
  `NOMBRESITIOWEB` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCIONWEB` varchar(1024) COLLATE utf8_spanish2_ci NOT NULL,
  `TITULOSITIOWEB` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `ADMINISTRADORSITIOWEB` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`NOMBRESITIOWEB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sitioweb`
--

INSERT INTO `sitioweb` (`NOMBRESITIOWEB`, `DIRECCIONWEB`, `TITULOSITIOWEB`, `ADMINISTRADORSITIOWEB`) VALUES
('antonybike', 'http://localhost/antonybike/', 'Academia de Ciclismo proBike', 'Rene Ventu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE IF NOT EXISTS `tienda` (
  `IDMODULO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCIONWEB` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBREMODULO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONMODULO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `NOMBRETIENDA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ADMINISTRADORTIENDA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONOTIENDA` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DIRECCIONTIENDA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COMUNATIENDA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CIUDADTIENDA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PAISTIENDA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESPACHODOMICILIOTIENDA` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`IDMODULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoevento`
--

CREATE TABLE IF NOT EXISTS `tipoevento` (
  `IDMODULO` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IDTIPOEVENTO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRETIPOEVENTO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRICIONTIPOEVENTO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDTIPOEVENTO`),
  KEY `FK_ORGANIZA` (`IDMODULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `CONTRASENAUSUARIO` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRESITIOWEB` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PRIMERNOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `SEGUNDONOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PRIMERAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `SEGUNDOAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RUTUSUARIO` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCIONUSUARIO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COMUNAUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CIUDADUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `MOVILUSUARIO` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `EMAILUSUARIO` varchar(1024) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`NOMBREUSUARIO`),
  KEY `FK_RELATIONSHIP_4` (`NOMBRESITIOWEB`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariomensaje`
--

CREATE TABLE IF NOT EXISTS `usuariomensaje` (
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `IDMENSAJE` int(11) NOT NULL,
  `fechaEntregaMensaje` datetime DEFAULT NULL,
  PRIMARY KEY (`NOMBREUSUARIO`,`IDMENSAJE`),
  KEY `fk_usuarioMensaje_mensaje1_idx` (`IDMENSAJE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE IF NOT EXISTS `vendedor` (
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCIONWEB` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PRIMERNOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEGUNDONOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `PRIMERAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `SEGUNDOAPELLIDOUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `RUTUSUARIO` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TELEFONOUSUARIO` varchar(8) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COMUNAUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `CIUDADUSUARIO` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `EMAILUSUARIO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `IDMODULO` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `COMISIONVENDEDOR` float DEFAULT NULL,
  PRIMARY KEY (`NOMBREUSUARIO`),
  KEY `FK_RELATIONSHIP_25` (`IDMODULO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `FECHAVENTA` datetime NOT NULL,
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `CLI_NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `OBSERVACIONESVENTA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`FECHAVENTA`,`NOMBREUSUARIO`,`CLI_NOMBREUSUARIO`),
  KEY `FK_RELATIONSHIP_38` (`NOMBREUSUARIO`),
  KEY `FK_RELATIONSHIP_45` (`CLI_NOMBREUSUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `IDMEDIA` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBREMEDIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `UBICACIONMEDIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHAPUBLICACIONMEDIA` datetime DEFAULT NULL,
  `PESOMEDIA` float DEFAULT NULL,
  `FORMATOMEDIA` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `DESCRIPCIONMEDIA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `AUTORMEDIA` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHACAPTURAMEDIA` date DEFAULT NULL,
  `ALTOVIDEO` int(11) DEFAULT NULL,
  `ANCHOVIDEO` int(11) DEFAULT NULL,
  `DURACIONVIDEO` float DEFAULT NULL,
  `MINIATURAVIDEO` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`IDMEDIA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
  `FECHAVENTA` datetime NOT NULL,
  `NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `CLI_NOMBREUSUARIO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `OBSERVACIONESVENTA` varchar(1024) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TEXTOINICIOVOUCHER` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TEXTODESPEDIDAVOUCHER` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `TIPOVOUCHER` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`FECHAVENTA`,`NOMBREUSUARIO`,`CLI_NOMBREUSUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `academia`
--
ALTER TABLE `academia`
  ADD CONSTRAINT `FK_INHERITANCE_2` FOREIGN KEY (`IDMODULO`) REFERENCES `modulo` (`IDMODULO`);

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `FK_ESENTRENADO` FOREIGN KEY (`IDCLASE`) REFERENCES `clase` (`IDCLASE`),
  ADD CONSTRAINT `FK_INHERITANCE_11` FOREIGN KEY (`NOMBREUSUARIO`) REFERENCES `usuario` (`NOMBREUSUARIO`);

--
-- Filtros para la tabla `audio`
--
ALTER TABLE `audio`
  ADD CONSTRAINT `FK_INHERITANCE_9` FOREIGN KEY (`IDMEDIA`) REFERENCES `media` (`IDMEDIA`);

--
-- Filtros para la tabla `categorianoticias`
--
ALTER TABLE `categorianoticias`
  ADD CONSTRAINT `FK_RELATIONSHIP_40` FOREIGN KEY (`IDMODULO`) REFERENCES `portalnoticias` (`IDMODULO`);

--
-- Filtros para la tabla `clase`
--
ALTER TABLE `clase`
  ADD CONSTRAINT `FK_DICTA` FOREIGN KEY (`IDMODULO`) REFERENCES `academia` (`IDMODULO`),
  ADD CONSTRAINT `FK_ENTRENA` FOREIGN KEY (`NOMBREUSUARIO`) REFERENCES `instructorencargado` (`NOMBREUSUARIO`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `FK_INHERITANCE_13` FOREIGN KEY (`NOMBREUSUARIO`) REFERENCES `usuario` (`NOMBREUSUARIO`);

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `FK_INHERITANCE_16` FOREIGN KEY (`FECHAVENTA`, `NOMBREUSUARIO`, `CLI_NOMBREUSUARIO`) REFERENCES `venta` (`FECHAVENTA`, `NOMBREUSUARIO`, `CLI_NOMBREUSUARIO`);

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `FK_CONTIENE` FOREIGN KEY (`IDTIPOEVENTO`) REFERENCES `tipoevento` (`IDTIPOEVENTO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_29` FOREIGN KEY (`NOMBREUSUARIO`) REFERENCES `instructorencargado` (`NOMBREUSUARIO`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `FK_INHERITANCE_6` FOREIGN KEY (`IDMEDIA`) REFERENCES `media` (`IDMEDIA`);

--
-- Filtros para la tabla `instructorencargado`
--
ALTER TABLE `instructorencargado`
  ADD CONSTRAINT `FK_INHERITANCE_12` FOREIGN KEY (`NOMBREUSUARIO`) REFERENCES `usuario` (`NOMBREUSUARIO`);

--
-- Filtros para la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`NOMBRESITIOWEB`) REFERENCES `sitioweb` (`NOMBRESITIOWEB`);

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `FK_RELATIONSHIP_27` FOREIGN KEY (`IDCATEGORIA`) REFERENCES `categorianoticias` (`IDCATEGORIA`);

--
-- Filtros para la tabla `noticiamedia`
--
ALTER TABLE `noticiamedia`
  ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`IDNOTICIA`) REFERENCES `noticia` (`IDNOTICIA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_42` FOREIGN KEY (`IDMEDIA`) REFERENCES `media` (`IDMEDIA`);

--
-- Filtros para la tabla `portalnoticias`
--
ALTER TABLE `portalnoticias`
  ADD CONSTRAINT `FK_INHERITANCE_8` FOREIGN KEY (`IDMODULO`) REFERENCES `modulo` (`IDMODULO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_46` FOREIGN KEY (`IDNOTICIADESTACADA`) REFERENCES `noticia` (`IDNOTICIA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_47` FOREIGN KEY (`IDIMAGENPRINCIPAL`) REFERENCES `imagen` (`IDMEDIA`);

--
-- Filtros para la tabla `productomedia`
--
ALTER TABLE `productomedia`
  ADD CONSTRAINT `fk_media_has_producto_media1` FOREIGN KEY (`IDMEDIA`) REFERENCES `media` (`IDMEDIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_media_has_producto_producto1` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `vendible` (`IDVENDIBLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`NOMBREUSUARIO`) REFERENCES `usuario` (`NOMBREUSUARIO`);

--
-- Filtros para la tabla `servicioentrenamiento`
--
ALTER TABLE `servicioentrenamiento`
  ADD CONSTRAINT `fk_servicio_vendible1` FOREIGN KEY (`vendible`) REFERENCES `vendible` (`IDVENDIBLE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `FK_INHERITANCE_14` FOREIGN KEY (`IDMODULO`) REFERENCES `modulo` (`IDMODULO`);

--
-- Filtros para la tabla `tipoevento`
--
ALTER TABLE `tipoevento`
  ADD CONSTRAINT `FK_ORGANIZA` FOREIGN KEY (`IDMODULO`) REFERENCES `academia` (`IDMODULO`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`NOMBRESITIOWEB`) REFERENCES `sitioweb` (`NOMBRESITIOWEB`);

--
-- Filtros para la tabla `usuariomensaje`
--
ALTER TABLE `usuariomensaje`
  ADD CONSTRAINT `fk_usuarioMensaje_usuario1` FOREIGN KEY (`NOMBREUSUARIO`) REFERENCES `usuario` (`NOMBREUSUARIO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarioMensaje_mensaje1` FOREIGN KEY (`IDMENSAJE`) REFERENCES `mensaje` (`IDMENSAJE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `FK_INHERITANCE_15` FOREIGN KEY (`NOMBREUSUARIO`) REFERENCES `usuario` (`NOMBREUSUARIO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_25` FOREIGN KEY (`IDMODULO`) REFERENCES `tienda` (`IDMODULO`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `FK_RELATIONSHIP_38` FOREIGN KEY (`NOMBREUSUARIO`) REFERENCES `vendedor` (`NOMBREUSUARIO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_45` FOREIGN KEY (`CLI_NOMBREUSUARIO`) REFERENCES `cliente` (`NOMBREUSUARIO`);

--
-- Filtros para la tabla `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `FK_INHERITANCE_10` FOREIGN KEY (`IDMEDIA`) REFERENCES `media` (`IDMEDIA`);

--
-- Filtros para la tabla `voucher`
--
ALTER TABLE `voucher`
  ADD CONSTRAINT `FK_INHERITANCE_17` FOREIGN KEY (`FECHAVENTA`, `NOMBREUSUARIO`, `CLI_NOMBREUSUARIO`) REFERENCES `detalleventa` (`FECHAVENTA`, `NOMBREUSUARIO`, `CLI_NOMBREUSUARIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
