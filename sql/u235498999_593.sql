-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-10-2018 a las 06:29:38
-- Versión del servidor: 10.2.16-MariaDB
-- Versión de PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u235498999_593`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbparticipantes`
--

CREATE TABLE `dbparticipantes` (
  `idparticipante` int(11) NOT NULL,
  `refusuarios` int(11) NOT NULL,
  `nombrecompleto` varchar(160) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `terminoscondiciones` bit(1) NOT NULL,
  `fechacreacion` timestamp(2) NOT NULL DEFAULT current_timestamp(2) ON UPDATE current_timestamp(2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dbparticipantes`
--

INSERT INTO `dbparticipantes` (`idparticipante`, `refusuarios`, `nombrecompleto`, `cedula`, `email`, `terminoscondiciones`, `fechacreacion`) VALUES
(1, 4, 'leandro', '1658986', 'leandro@msn.com', b'0', '2018-10-03 03:12:44.27'),
(2, 4, 'leandro', '1658986', 'leandro@msn.com', b'1', '2018-10-03 03:12:48.80'),
(3, 4, 'daniela', '320065874', 'daniela@msn.com', b'0', '2018-10-03 05:27:40.62'),
(4, 4, 'daniela', '320065874', 'daniela@msn.com', b'1', '2018-10-03 05:27:46.79'),
(5, 4, 'leandro', '23423423', 'leandro@msn.com', b'1', '2018-10-03 05:36:17.73'),
(6, 4, 'ricky', '34534534', 'ricky@martin.com', b'1', '2018-10-03 05:38:23.01'),
(7, 4, 'rob', '1984981', 'rob@msn.com', b'0', '2018-10-03 05:41:01.37'),
(8, 4, 'rob', '1984981', 'rob@msn.com', b'1', '2018-10-03 05:41:05.46'),
(9, 4, 'marta', '684984', 'marta@msn.com', b'0', '2018-10-03 05:42:06.38'),
(10, 4, 'marta', '684984', 'marta@msn.com', b'1', '2018-10-03 05:42:10.47'),
(11, 4, 'sebas', '6849849', 'sebas@msn.com', b'1', '2018-10-03 06:10:48.15'),
(12, 4, 'araujo', '4984699', 'araujo@msn.com', b'1', '2018-10-03 06:45:18.09'),
(13, 4, 'hugo', '654894', 'hugo@ms.com', b'1', '2018-10-03 15:36:27.04'),
(14, 4, 'Jose Díaz', '1234567890', 'jose@diaz.com', b'1', '2018-10-03 16:36:00.78'),
(15, 4, 'Jose Guerra', '1231231323', 'jose@guerra.com', b'1', '2018-10-03 15:44:03.38'),
(16, 4, 'koko', '2354345', 'koko@msn.com', b'1', '2018-10-03 15:44:34.06'),
(17, 3, 'Gabriel González', '1231231231', 'gabriel@diaz.com', b'1', '2018-10-03 16:35:51.78'),
(18, 4, 'María Pino', '1234567891', 'maria@pino.com', b'1', '2018-10-03 16:35:44.68'),
(19, 4, 'gaston', '165189', 'gaston@msn.com', b'1', '2018-10-03 18:34:46.71'),
(20, 4, 'raul', '5416868', 'raul@msn.com', b'1', '2018-10-03 18:48:19.93'),
(21, 4, 'Juan Chávez', '123345678', 'juan@chavez.com', b'1', '2018-10-03 20:08:54.96'),
(22, 3, 'Diego Castro', '343433434', 'diego@castro.com', b'1', '2018-10-03 20:21:37.15'),
(23, 3, 'Yuliett Versalles', '9876543210', 'yuli@vers.com', b'1', '2018-10-03 20:23:15.62'),
(24, 3, 'Jose Andrés', '0987654321', 'jose@andres.com', b'0', '2018-10-03 21:57:48.22'),
(25, 3, 'Jose Andrés', '0987654321', 'jose@andres.com', b'1', '2018-10-03 21:57:55.90'),
(26, 5, 'Pancho Villa', '0998776543', 'pancho@panchito.com', b'1', '2018-10-03 21:59:46.99'),
(27, 5, 'Jorge Ángel', '85746352', 'jorge@jorge.com', b'1', '2018-10-03 22:11:32.61'),
(28, 5, 'Ruben Montúfar', '2342345676', 'ruven@montufar.com', b'1', '2018-10-04 03:19:37.07'),
(29, 5, 'Robson Santos', '233212323', 'web@webn.com', b'1', '2018-10-04 03:33:54.26'),
(30, 5, 'Gabriela Castillo', '0915347722', 'gab.34567@gmail.com', b'0', '2018-10-04 03:34:50.05'),
(31, 5, 'Jorge race', '0915437650', 'jorge@hotmail.com', b'0', '2018-10-04 03:43:30.76'),
(32, 5, 'Jorge race', '0915437650', 'jorge@hotmail.com', b'1', '2018-10-04 03:43:52.76'),
(33, 5, 'Mary jara', '0976543679', 'mja@hotmail.com', b'1', '2018-10-04 03:45:47.56'),
(34, 5, 'Lorem Ipsum', '34545745786', 'lorem@ipsum.com', b'1', '2018-10-04 03:56:34.58'),
(35, 5, 'Ale salas', '0945123452', 'al@hotmail.com', b'0', '2018-10-04 03:59:05.20'),
(36, 5, 'Ale salas', '0945123452', 'al@hotmail.com', b'1', '2018-10-04 03:59:27.17'),
(37, 4, 'fer', '234234', 'fer@msn.com', b'1', '2018-10-04 06:18:54.82'),
(38, 4, 'ger', '324234', 'ger@msn.com', b'1', '2018-10-04 06:20:48.22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbpreguntas`
--

CREATE TABLE `dbpreguntas` (
  `idpregunta` int(11) NOT NULL,
  `secuencia` int(11) NOT NULL,
  `pregunta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `respuestacorrecta` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `respuestaequivocada1` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `respuestaequivocada2` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `respuestaequivocada3` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `valor` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dbpreguntas`
--

INSERT INTO `dbpreguntas` (`idpregunta`, `secuencia`, `pregunta`, `respuestacorrecta`, `respuestaequivocada1`, `respuestaequivocada2`, `respuestaequivocada3`, `valor`) VALUES
(124, 1, 'Cuál es el verdadero nombre de RICKY MARTIN?', 'Martin Morales Enrique José', 'Martin Morales Ricky', 'Morales Negroni Enrique Martin', 'Morales Enrique Martin', 1),
(125, 1, 'En qué fecha nació RICKY MARTIN?', 'Diciembre 24 de 1971', 'Diciembre 24 de 1970', 'Diciembre 14 de 1971', 'Diciembre 04 de 1970', 1),
(126, 1, 'En dónde nació RICKY MARTIN?', 'San Juan, Puerto Rico', 'Acapulco, Mexico', 'Ciudad de Mexico, Mexico', 'Miami, Florida, USA', 1),
(127, 1, 'Bajo qué religión fue criado RICKY MARTIN?', 'Católica', 'Cristiana', 'Budhista', 'Adventista', 1),
(128, 1, 'Cuál es la nacionalidad de RICKY MARTIN?', 'Puertoriqueño Español', 'Español', 'Puertoriqueño', 'Mexicano', 1),
(129, 1, 'Qué le gusta hacer a RICKY MARTIN en su tiempo libre?', 'Yoga y Budhismo', 'Vacacionar en Sudamerica', 'Vacacionar en Canadá', 'Hacer talleres de pintura', 1),
(130, 1, 'Cómo se llaman los hijos de RICKY MARTIN?', 'Matteo y Valentino', 'Matteo y Valentina', 'Marcos y Victoria', 'Marcos y Valentino', 1),
(131, 1, 'Qué método utilizó RICKY MARTIN para convertirse en padre?', 'Vientre de Alquiler', 'Adopción', 'In Vitro', 'Inseminación Artificial', 1),
(132, 1, 'Cuánto mide RICKY MARTIN?', 'Más de 1,80', '1,78', '1,7', '1,9', 1),
(133, 1, 'Cuál es la película favorita de RICKY MARTIN?', 'El Padrino', 'Cara Cortada', 'Carlito´s Way', 'Casino', 1),
(134, 1, 'Cuál es el número favorito de RICKY MARTIN?', 'El 7', 'El 1', 'El 10', 'El 9', 1),
(135, 1, 'Cuál es la raza de perros que más le gusta a RICKY MARTIN?', 'Golden Retriever', 'Pastor Alemán', 'Labrador', 'Boston Terrier', 1),
(136, 1, 'Cuál es la parte de su cuerpo que más le gusta a RICKY MARTIN?', 'Sus manos', 'Sus brazos', 'Sus piernas', 'Su espalda', 1),
(137, 1, 'Dónde nació el esposo actual de RICKY MARTIN?', 'Siria', 'Suecia', 'Londres', 'España', 1),
(138, 1, 'Cómo le dicen a RICKY MARTIN sus amigos cercanos?', 'Kiki', 'Quiquito', 'Ricky', 'Kike', 1),
(139, 1, 'Cuántos años tenía RICKY MARTIN cuando sus padres se separaron?', '2 años', '4 años', '6 años', '10 años', 1),
(140, 1, 'En qué año empieza RICKY MARTIN la relación con su actual esposo?', '2016', '2014', '2015', '2017', 1),
(141, 1, 'RICKY MARTIN es:', 'Zurdo', 'Derecho', 'Ambidiestro', 'Todas las anteriores', 1),
(142, 1, 'Qué tipo de alimentación mantiene RICKY MARTIN actualmente?', 'Vegetariano', 'Vegano', 'Paleo', 'Carnívoro', 1),
(143, 1, 'Cuántos años tiene RICKY MARTIN?', '46', '45', '47', '48', 1),
(144, 2, 'Dónde vive RICKY MARTIN actualmente?', 'Los Angeles, California', 'Madrid, España', 'Miami, USA', 'San Juan, Puerto Rico', 1),
(145, 2, 'A qué se dedica el actual esposo de RICKY MARTIN?', 'Pintor', 'Actor', 'Cantante', 'Escritor', 1),
(146, 2, 'Cuántos hijos tiene RICKY MARTIN?', '2', '1', '3', 'Ninguno', 1),
(147, 2, 'Cuál es la comida favorita de RICKY MARTIN?', 'La puertorriqueña', 'La italiana', 'La española', 'La árabe', 1),
(148, 2, 'Cuál es el segundo nombre de RICKY MARTIN?', 'José', 'Juan', 'Andrés', 'Martín', 1),
(149, 2, 'Cuál es el signo zodiacal de RICKY MARTIN?', 'Capricornio', 'Acuario', 'Geminis', 'Tauro', 1),
(150, 2, 'Cuántos años tienen los hijos de RICKY MARTIN?', '10', '8', '9', '11', 1),
(151, 2, 'Cuál de éstos NO es un apodo común de RICKY MARTIN?', 'Astro Americano', 'Astro del Pop Latino', 'Rey del Pop Latino', 'Astro Boricua', 1),
(152, 2, 'En 1984 a qué grupo infantil pertenece?', 'MENUDO', 'MAGNETO', 'Timbiriche', 'OV7', 1),
(153, 2, 'En qué año entra a formar parte del grupo MENUDO?', '1984', '1983', '1985', '1986', 1),
(154, 2, 'En qué serie de televisión estadounidense participó RICKY MARTIN?', 'Hospital General', 'Amigos', 'Por Siempre Amigos', 'La Voz', 1),
(155, 2, 'Por qué motivo RICKY MARTIN fue rechazado en las audiciones para MENUDO?', 'Porque era muy bajito', 'Porque era muy alto', 'Porque no bailaba bien', 'Porque tenía el pelo largo', 1),
(156, 2, 'En cuál de estas series de TV no apareció RICKY MARTIN?', 'Amigos', 'Glee', 'Hospital General', 'Sos mi vida', 1),
(157, 2, 'En qué ciudad tiene RICKY MARTIN su primera residencia de conciertos?', 'Las Vegas', 'Nueva York', 'Los Angeles', 'Miami, Florida, USA', 1),
(158, 2, 'Con cuál de estas actrices comparte set RICKY MARTIN en la serie American Crime Story?', 'Penélope Cruz', 'Salma Hayek', 'Blanca Suarez', 'Donatella Versace', 1),
(159, 2, 'Cuál es el papel de RICKY MARTIN en la novel a\"Por siempre amigos\"?', 'Ricky', 'Robby', 'Sergio', 'Raymond', 1),
(160, 2, 'En qué novela participa RICKY MARTIN con la actriz y cantante Sasha Sokol?', 'Alcanzar una Estrella 2', 'Alcanzar una Estrella', 'Más que alcanzar una estrella', 'Por Siempre Amigos', 1),
(161, 2, 'La Copa de la Vida de RICKY MARTIN es la canción oficial de qué mundial de fútbol?', 'Francia 1998', 'Italia 1990', 'Alemania 2006', 'Estados Unidos 1994', 1),
(162, 2, 'Cuál es el rango de voz de RICKY MARTIN?', 'Tenor', 'Bajo', 'Barítono', 'Alto', 1),
(163, 2, 'Cuál es el nombre de la modelo ecuatoriana que participó en un video de RICKY MARTIN?', 'María Fernanda Cornejo', 'Ericka Velez', 'María Fernanda Ríos ', 'María Teresa Guerrero', 1),
(164, 3, 'Con quién canta a duó RICKY MARTIN su éxito \"Nobody Wants to be Lonely\"?', 'Christina Aguilera', 'Jennifer López', 'Madonna', 'Natti Natasha', 1),
(165, 3, 'Qué artistas colaboran con RICKY MARTIN en el tema \"Adrenalina\"?', 'Jennifer López y Wisin', 'Wisin y Yandel', 'Jlo y Daddy Yankee', 'Jennifer López', 1),
(166, 3, 'En qué canción colabora RICKY MARTIN con Miguel Bosé en su álbum Papito?', 'Bambú', 'Duende', 'Bandido', 'Como un Lobo', 1),
(167, 3, 'Junto a quién canta RICKY MARTIN la canción \"Lo mejor de mi vida eres tú\"?', 'Natalia Jimenez', 'Sasha', 'Christina Aguilera', 'Jennifer Lopez', 1),
(168, 3, 'Quién colabora con RICKY MARTIN en su último tema \"Fiebre\"?', 'Wisin y Yandel', 'Natti Natasha', 'Pitbull', 'Maluma', 1),
(169, 3, 'En qué película animada aparece el tema de RICKY MARTIN \"Livin la vida loca\"?', 'Shrek 2', 'Minions', 'Hercules', 'Mi Villano Favorito 2', 1),
(170, 3, 'Cuál de éstas canciones NO es una canción de RICKY MARTIN?', 'Corazón', 'Fiebre', 'Perdóname', 'Asignatura pendiente', 1),
(171, 3, 'Cuándo se presentará RICKY MARTIN en Ecuador?', 'El 3 de Noviembre', 'El 1 de Noviembre', 'El 2 de Noviembre', 'El 31 de Octubre', 1),
(172, 3, 'Quién colabora con RICKY MARTIN en la canción \"Vente pa´ca\"?', 'Maluma', 'Wisin y Yandel', 'Jennifer López', 'Pitbull', 1),
(173, 3, 'Cómo se llama el tema que canta RICKY MARTIN junto a Sasha Sokol?', 'Todos mis caminos van a ti', 'Juego de Ajedrez', 'Lo mejor de mi Vida eres tu', 'Tu recuerdo', 1),
(174, 3, 'Cómo se llama la canción que interpreta RICKY MARTIN  para el mundial de Francia 1998?', 'La Copa de la Vida', 'Somos el mundo', 'Puedes llegar', 'Vida', 1),
(175, 3, 'Cuántas veces se ha presentado RICKY MARTIN en Cuenca?', 'Ninguna', '1', '2', '3', 1),
(176, 3, 'En qué localidad se realizará el concierto de RICKY MARTIN en Ecuador?', 'Estadio Alejandro Serrano A', 'Estadio Modelo Alberto Spencer', 'Concha Acústica Parque Samanes', 'Coliseo General Rumiñahui', 1),
(177, 3, 'En el video de qué canción de RICKY MARTIN aparece una modelo ecuatoriana?', 'Adrenalina', 'La Mordidita', 'Fiebre', 'Livin la vida Loca', 1),
(178, 3, 'Cuál es el tipo de fotos favoritas de RICKY MARTIN?', 'Selfies', 'En blanco y negro', 'Improvisadas', 'De estudio', 1),
(179, 3, 'De qué color es la camiseta que sacó RICKY MARTIN a la venta para recaudar fondos para Puerto Rico?', 'Negra', 'Blanca', 'Gris', 'Roja', 1),
(180, 3, 'Cuál es el nombre y la profesión del padre de RICKY MARTIN?', 'Enrique Martin Negroni, Psicólogo', 'Enrique Negroni, Psicólogo', 'Enrique Martin Negroni, Contador', 'Enrique Martin Morales, Contador', 1),
(181, 3, 'Cuántos medios hermanos tiene RICKY MARTIN?', '2 maternos y 3 paternos', '2 maternos y 2 paternos', '3 maternos y 2 paternos', '3 maternos y 3 paternos', 1),
(182, 3, 'Cuál de éstos es uno de los ídolos de RICKY MARTIN?', 'Barbara Streisand', 'Prince', 'Sarah Jessica Parker', 'Madonna', 1),
(183, 3, 'Con quién tuvo RICKY MARTIN una relación de más de catorce años?', 'Rebecca de Alba', 'Daisy Fuentes', 'Alicia Machado', 'Aracely Arámbula', 1),
(184, 4, 'Cuándo se convirtió RICKY MARTIN en padre de mellizos?', 'ago-08', 'jun-08', 'jun-10', 'ago-10', 1),
(185, 4, 'En qué programa de televisión anuncia oficialmente estar en una relación con un hombre?', 'Oprah', 'Ellen', 'Jimmy Fallon', 'Larry King', 1),
(186, 4, 'Cuál es el actor favorito de RICKY MARTIN?', 'Robert DeNiro', 'Al Pacino', 'Joe Pesci', 'Robert Duvall', 1),
(187, 4, 'Dónde está ubicada la isla privada de RICKY MARTIN?', 'Angra Dos Reis, Brasil', 'Islas Mauricio, República de Mauricio', 'Islas Malvinas, Inglaterra', 'Islas Galápagos, Ecuador', 1),
(188, 4, 'Cómo se llama la mamá de los hijos de RICKY MARTIN?', 'Englantina Zingg', 'Valentinna Zingg', 'Rebecca de Alba', 'Valery Youseff', 1),
(189, 4, 'Cómo se llama la mamá de RICKY MARTIN?', 'Nereida Morales', 'María Morales', 'Lucía Morales', 'Valentina Morales', 1),
(190, 4, 'Qué deporte practica RICKY MARTIN para mantenerse en forma?', 'Yoga  ', 'Pilates', 'Spinning', 'Box', 1),
(191, 4, 'Cuántos idiomas habla RICKY MARTIN?', '5', '4', '3', '2', 1),
(192, 4, 'Qué hacía RICKY MARTIN cuando era niño para sentirse en un escenario?', 'Monaguillo', 'Coro del colegio', 'Videos caseros', 'Presentaciones familiares', 1),
(193, 4, 'A qué edad RICKY MARTIN realiza un comercial de leche americana?', '12 años', '10 años', '16 años', '6 años', 1),
(194, 4, 'A qué miembro del grupo MENUDO reemplazó RICKY MARTIN?', 'Ricky Melendez', 'Johnny Lozada', 'Xavier Serbiá', 'René Farrait', 1),
(195, 4, 'Cuánto tiempo perteneció RICKY MARTIN al grupo MENUDO?', '5 años', '3 años', '4 años', '6 años', 1),
(196, 4, 'Cómo se llamaba el personaje de RICKY MARTIN en la telenovela Alcanzar una Estrella II?', 'Pablo Loredo Muriel', 'Miguel Angel Castellar', 'Jorge Puente', 'Leonardo Lascurain', 1),
(197, 4, 'Cuál fue el papel de RICKY MARTIN en la serie Hospital General?', 'Miguel Morez', 'Andrew Jones', 'Lucas Jones', 'Franco Baldwin', 1),
(198, 4, 'A qué personaje de Disney le pone su voz RICKY MARTIN?', 'Hercules', 'Tarzan', 'Flynn Rider', 'Simba', 1),
(199, 4, 'Cuánto tiempo después de unirse al grupo MENUDO RICKY MARTIN hace su debut con ellos?', '1 mes', '1 semana', '4 meses', '1 año', 1),
(200, 4, 'Cómo se llamaba el restaurante de RICKY MARTIN en Miami?', 'Casa Salsa', 'Casa Samba', 'Casa Latina', 'Casa Cuba', 1),
(201, 4, 'Cuántas veces audicionó RICKY MARTIN para pertenecer al grupo MENUDO?', '3 veces', '2 veces', '1 vez', '4 veces', 1),
(202, 4, 'En qué ciudad adquirió su fama RICKY MARTIN?', 'México, México', 'Acapulco, Mexico', 'San Juan, Puerto Rico', 'Miami, Florida, USA', 1),
(203, 4, 'Cuál es el papel de RICKY MARTIN en la serie de televisión GLEE?', 'David Martínez', 'Pablo Loredo', 'Ricky Martin', 'David Loredo', 1),
(204, 5, 'En qué serie estadounidense del 2018 participa RICKY MARTIN?', 'American Crime Story', 'Pose', 'House of Flowers', 'Narcos', 1),
(205, 5, 'RICKY MARTIN colabora en una campaña publicitaria de qué marca de café?', 'Nescafé', 'Nespresso', 'Café Gold', 'Café Gardella', 1),
(206, 5, 'En qué producto se utilizó la imagen de RICKY MARTIN cuando tenía 8 meses de edad?', 'Leche para bebés', 'Pañales ', 'Papilla de bebés', 'Biberones', 1),
(207, 5, 'Cómo se llama el grupo al que pertenece RICKY MARTIN con las coestrellas de la novela Alcanzar una Estrella 2?', 'Muñecos de papel', 'Timbiriche', 'OV/', 'Alcanzar una Estrella', 1),
(208, 5, 'RICKY MARTIN participa en la canción \"puede llegar\" incluída en el álbum de qué Juegos Olímpicos?', 'Atlanta 1996', 'Barcelona 1992', 'Atenas 1996', 'Sydney 2000', 1),
(209, 5, 'Con quién canta RICKY MARTIN la canción \"Be Careful\"', 'Madonna', 'Christina Aguilera', 'Jennifer López', 'Natti Natasha', 1),
(210, 5, 'Qué artista colabora con RICKY MARTIN en su tema \"Tu Recuerdo\"?', 'La Mari de Chambao', 'Sasha Sokol', 'Naya Rivera', 'Shakira', 1),
(211, 5, 'Cuál es considerada la canción más popular de RICKY MARTIN?', 'Livin la vida Loca', 'Lacopa de la vida', 'La Mordidita', 'Maria', 1),
(212, 5, 'En qué canción colabora RICKY MARTIN con Eros Ramazzotti en su álbum E2?', 'No estamos solos', 'Una historia importante', 'Cosas de la vida', 'Otra como tu', 1),
(213, 5, 'En qué idiomas ha grabado discos RICKY MARTIN?', 'Español, inglés y portugués', 'Español e Inglés', 'Español, Ingles y Frances', 'Español', 1),
(214, 5, 'Cuándo fue la última vez que RICKY MARTIN se presentó en Ecuador?', 'En el 2011', 'En el 2010', 'En el 2012', 'En el 2013', 1),
(215, 5, 'En qué ciudad de Ecuador se presentó RICKY MARTIN la última vez que visitó Ecuador?', 'En Guayaquil', 'En Quito', 'En Cuenca', 'En Manta', 1),
(216, 5, 'Cómo se llama el tema que RICKY MARTIN canta junto a Pitbbull?', 'Haciendo Ruido', 'Que se sienta el deseo', 'Fiebre', 'Adrenalina', 1),
(217, 5, 'Quién acompaña a RICKY MARTIN en el tema \"Quimera\"?', 'Pablo Alborán', 'Miguel Bosé', 'Eros Ramazzotti', 'Alejandro Sanz', 1),
(218, 5, 'Cuál es el nombre de la gira de RICKY MARTN 2018?', 'Ricky Martin World Tour', 'All In', 'World Tour', 'One World Tour', 1),
(219, 5, 'Cómo se llama la canción de los Juegos Olímpicos de 1996 en la que colabora RICKY MARTIN?', 'Puedes Llegar', 'La Copa de la Vida', 'Vida', 'Somos el mundo', 1),
(220, 5, 'Cuál de los siguientes temas de RICKY MARTIN no se encuentra en su álbum \"A quien quiera escuchar\"?', 'Fiebre', 'Perdóname', 'Náufrago', 'La Mordidita', 1),
(221, 5, 'Cuál es la disquera actual de RICKY MARTIN?', 'Sony Music', 'Columbia Records', 'Warner Music', 'Universal Music', 1),
(222, 5, 'Cuál es el nombre del soundtrack de la telenovela \"Alcanzar una Estrella 2\"', 'Muñecos de papel', 'Alcanzar una Estrella', 'Estrella de Ilusión', 'Juego de Ajedrez', 1),
(223, 5, 'Quién colabora con RICKY MARTIN en el tema La Mordidita?', 'Yotuel', 'Maluma', 'Pitbull', 'Don Omar', 1),
(224, 6, 'Cuál es el nombre de la canción de RICKY MARTIN incluída en el álbum oficial de la Copa del Mundo Brasil 2014?', 'Vida', 'La Copa de la Vida', 'Lego', 'Allez! Olá! Olé!', 1),
(225, 6, 'Dónde se rodó el video de la canción VIDA de RICKY MARTIN?', 'Rio de Janeiro', 'Sao Paulo', 'Acapulco', 'San Juan, Puerto Rico', 1),
(226, 6, 'Cuántos temas de RICKY MARTIN son parte de las canciones de los mundiales de fútbol?', '2', '3', '5', '4', 1),
(227, 6, 'Dónde se presenta RICKY MARTIN en este mes de Octubre?', 'Puerto Rico', 'México', 'Ecuador', 'España', 1),
(228, 6, 'Quién colabora con RICKY MARTIN en la canción \"Mr. Put it down\"?', 'Pitbull', 'Maluma', 'Wisin y Yandel', 'Wisin', 1),
(229, 6, 'En cuál de estas canciones de Wisin colabora RICKY MARTIN?', 'Que se sienta el deseo', 'Quisiera alejarme', 'Vacaciones', 'Escápate conmigo', 1),
(230, 6, 'Cuántas nominaciones al Emmy ha tenido RICKY MARTIN?', '1', '2', '3', '4', 1),
(231, 6, 'En qué categoría estuvo RICKY MARTIN nominado al Emmy 2018?', 'Mejor actor de reparto', 'Mejor actor principal', 'Mejor actor latino', 'Mejor actor revelación', 1),
(232, 6, 'Cuántas veces RICKY MARTIN ha sido elegido por la revista People como uno de los hombres más bellos del mundo?', '3', '2', '1', 'ninguna', 1),
(233, 6, 'Quién será la artista invitada al concierto de RICKY MARTIN en Cuenca?', 'Natti Natasha', 'Thalía', 'Mirella Cesa', 'Shakira', 1),
(234, 6, 'Cuál es el nombre de la cuenta oficial de Instagram de RICKY MARTIN?', '*ricky_martin', '*rickymartinoficial', '*rickymartin', '*RickyM', 1),
(235, 6, 'Cuél es el sitio web oficial de RICKY MARTIN?', 'www.rickymartinmusic.com', 'www.rickymartin.com', 'www.rickymartinoficial.com', 'www.rickymartin.com.es', 1),
(236, 6, 'Cuál de los videos de RICKY MARTIN es el que tiene más visitas en YouTube?', 'Vente pa´ca', 'La Mordidita', 'La Copa de la Vida', 'Livin la vida loca', 1),
(237, 6, 'Cuál es la profesión del primer novio oficial de RICKY MARTIN?', 'Economista', 'Pintor Artista', 'Matemático', 'Químico', 1),
(238, 6, 'Cuál es el nombre del primer novio oficial de RICKY MARTIN?', 'Carlos Gonzalez Abella', 'Jwan Yosef', 'Eric Rubin', 'Enrique Iglesias', 1),
(239, 6, 'Quién fue la primera novia de RICKY MARTIN?', 'Gabriela Sabatini', 'Alejandra Guzmás', 'Rebecca de Alba', 'Adriana Biega', 1),
(240, 6, 'Qué le hubiesa gustado estudiar a RICKY MARTIN si no fuera artista?', 'Psicólogo', 'Médico', 'Odontólogo', 'Arquitecto', 1),
(241, 6, 'En qué año RICKY MARTIN adquiere la nacionalidad española?', '2011', '2010', '2009', '2012', 1),
(242, 6, 'En qué año RICKY MARTIN termina su relación con Carlos González?', '2014', '2013', '2012', '2015', 1),
(243, 6, 'Cuál era la profesión de la madre de RICKY MARTIN?', 'Contadora', 'Psicóloga', 'Ingeniera', 'Maestra', 1),
(244, 7, 'En qué fecha nacieron los hijos de RICKY MARTIN?', '6-ago-08', '6-ago-07', '1-ago-08', '10-ago-07', 1),
(245, 7, 'Cuántos años tiene el esposo de RICKY MARTIN?', 'Tiene 34', 'Tiene 38', 'Tiene 40', 'Tiene 30', 1),
(246, 7, 'En qué año comenzó RICKY MARTIN su carrera artística?', 'En 1984', 'En 1971', 'En 1977', 'En 1990', 1),
(247, 7, 'En qué año RICKY MARTIN debuta como actor?', 'En 1986', 'En 1987', 'En 1984', 'En 1990', 1),
(248, 7, 'En qué novela RICKY MARTIN hace su debut como actor?', 'Por siempre amigos', 'Alcanzar una estrella', 'Más que alcanzar una estrella', 'Hospital General', 1),
(249, 7, 'En qué ciudad se radica RICKY MARTIN para empezar a producir sus primeros álbumes?', 'Ciudad de México', 'San Juan Puerto Rico', 'Miami, USA', 'Buenos Aires, Argentina', 1),
(250, 7, 'Con un personaje de qué obra debuta RICKY MARTIN en los escenarios de Broadway?', 'Los Miserables', 'El fantasma de la ópera', 'Los Productores', 'Chicago', 1),
(251, 7, 'Cuál era la cláusula incluída en el contrato de RICKY MARTIN de Hospital General respecto a su apariencia?', 'Que debía llevar el pelo largo', 'Que debía llevar el pelo corto', 'Que debía usar barba', 'Que debía mantenerse delgado', 1),
(252, 7, 'Con qué película RICKY MARTIN entra en el mundo del cine?', 'Más que alcanzar una Estrella', 'Alcanzar una Estrella', 'Menudo', 'Por Siempre Amigos', 1),
(253, 7, 'Cuál fue el papel de RICKY MARTIN en la obra Los Miserables?', 'Marius Pontmercy', 'Javert', 'Jean Valjean', 'Thenardier', 1),
(254, 7, 'A qué personaje de la película Minions presta su voz RICKY MARTIN para Hispanoamérica?', 'Herb Overkill', 'Gru', 'Walter Nelson', 'Narrador', 1),
(255, 7, 'De dónde era la novela Por Siempre Amigos en la que participó RICKY MARTIN?', 'Argentina', 'Venezolana', 'Mexicana', 'Puertoriqeña', 1),
(256, 7, 'A qué grupo juvenil representaba RICKY MARTIN hasta hace unos meses?', 'CNCO', 'One Direction', 'BTS', 'Urband 5', 1),
(257, 7, 'Cuál de sus compañeros de Menudo colaboró en la composicipon de alguno de sus hits?', 'Robi Rosa', 'René Farrait', 'Xavier Serbiá', 'Ricky Meléndez', 1),
(258, 7, 'En qué álbum de RICKY MARTIN se encuentra el tema \"Juego de Ajedrez\"?', 'Ricky Martin ', 'Vuelve', 'Me amarás', 'A medio vivir', 1),
(259, 7, 'En qué álbum de RICKY MARTIN se encuentra el tema \"Dime que me quieres\"?', 'Ricky Martin', 'Vuelve', 'Me amarás', 'A medio vivir', 1),
(260, 7, 'En qué canción colabora RICKY MARTIN con el canadiense Paul Anka en su álbum Amigos?', 'Diana', 'Yo te amo', 'Tu eres mi destino', 'Mejor decir adiós', 1),
(261, 7, 'Cuál es el nombre del primer álbum recopilatorio que lanza RICKY MARTIN?', 'Historias', 'Lo mejor de RICKY MARTIN', 'Greatest Hits', 'Ricky Martin Historias', 1),
(262, 7, 'Cuándo fue publicado el video del último tema de RICKY MARTIN \"Fiebre\"?', 'feb-18', 'ene-18', 'abr-18', 'mar-18', 1),
(263, 7, 'Junto a qué agrupación mexicana se presentó RICKY MARTIN en el 2017 en México?', 'Timbiriche', 'Magneto', 'OV7', 'Kairo', 1),
(264, 8, 'Cómo se llama el álbum oficial de la Copa del Mundo Brasil 2014 que incluye el tema de RICKY MARTIN \"Vida\"?', 'One love One rythm', 'Copa del mundo Brasil 2014', 'La Copa de la Vida', 'Alle! Ola! Ole!', 1),
(265, 8, 'Dónde se presentó RICKY MARTIN en Agosto y Septiembre de este año?', 'Europa', 'Estados Unidos', 'Sudamérica', 'Asia', 1),
(266, 8, 'En qué país se presentó RICKY MARTIN en el mes de Agosto de este año?', 'España', 'Italia   ', 'República Checa', 'Hungría', 1),
(267, 8, 'Qué libro de RICKY MARTIN debutó como top ten en la lista de los más vendidos del New York Times?', 'YO', 'Santiago el soñador', 'Moving on', 'La Aventura de Santiago y Alejandro', 1),
(268, 8, 'En dónde recibió RICKY MARTIN un Disco de Oro por su álbum Greatest Hits?', 'Australia', 'México', 'Europa', 'Estados Unidos', 1),
(269, 8, 'A qué edad RICKY MARTIN recibe una Estrella en el Paseo de la Fama de Hollywood?', 'A los 35', 'A los 30', 'A los 40', 'A los 45', 1),
(270, 8, 'Cómo se llama la comunidad en línea que abrió RICKY MARTIN para padres de familia?', 'Piccolo Universe', 'Piccolo Mondo', 'Babys Universe', 'Parents and kids Universe', 1),
(271, 8, 'En qué año RICKY MARTIN hizo pública su homosexualidad?', 'En el 2010', 'En el 2011', 'En el 2012', 'En el 2008', 1),
(272, 8, 'Qué producto sacó RICKY MARTIN  a la venta para recaudar fondos para Puerto Rico?', 'Una camiseta con bandera de Puerto Rico', 'Una pulsera con bandera de Puerto Rico', 'Una chaqueta con bandera de Puerto Rico', 'Una gorra con bandera de Puerto Rico', 1),
(273, 8, 'Qué deporte playero estuvo practicando RICKY MARTIN en una temporada del 2013?', 'Kitesurfing', 'Parapente', 'Surf', 'Tennis de playa', 1),
(274, 8, 'Quién pintó la bandera estampada en las camiseta que RICKY MARTIN sacó a la venta este año?', 'Sus hijos', 'Su esposo', 'Sus alumnos', 'Ninguno de los anteriores', 1),
(275, 8, 'Cuál es el libro favorito de RICKY MARTIN?', 'Los Cuatro Acuerdos', 'El Quinto Acuerdo', 'El Principito', 'Moby Dick', 1),
(276, 8, 'Cómo le dice RICKY MARTIN al ex monje budhista que lo inició en la filosofía oriental?', 'Pequeño Yogui', 'Yogui', 'Señor Miyagui', 'Maestro Yoda', 1),
(277, 8, 'Cuál era la profesión de la bisabuela paterna de RICKY MARTIN?', 'Metafísica', 'Contadora', 'Arquitecta', 'Ingeniera', 1),
(278, 8, 'Cuándo fue publicada la autobiografía de RICKY MARTIN titulada YO?', 'nov-10', 'ago-10', 'sep-10', 'oct-10', 1),
(279, 8, 'En qué año RICKY MARTIN se muda a Australia para participar en La Voz Australia?', '2012', '2011', '2013', '2014', 1),
(280, 8, 'Qué tema de RICKY MARTIN está incluído en el álbum \"Inspiration\" de Willian Hung?', 'She Bangs', 'Livin la vida Loca', 'Maria', 'Vuelve', 1),
(281, 8, 'A cuánto de su dinero tenía acceso RICKY MARTIN mensualmente antes de cumplir los 18 años?', '400 dólares', '100 dólares', '500 dólares', '1000 dólares', 1),
(282, 8, 'En qué año se inició RICKY MARTIN como solista?', '1991', '1996', '1988', '2002', 1),
(283, 8, 'En qué temporada de La Voz Mexico RICKY MARTIN aparece como entrenador?', '4ta temporada', '5ta temporada', '6ta temporada', '7ma temporada', 1),
(284, 9, 'En qué temporada de Operación Triunfo aparece RICKY MARTIN como invitado?', '5ta temporada', '3ra temporada', '4ta temporada', '6ta temporada', 1),
(285, 9, 'En qué programas de Reality ha participado RICKY MARTIN como entrenador?', 'Todas las alternativas', 'La Voz Australia', 'La Voz Mexico', 'La Banda USA', 1),
(286, 9, 'Con qué obra inicia RICKY MARTIN su carrera teatral?', 'Los tenis rojos', 'Los Miserables', 'Por Siempre Amigos', 'Alcanzar una Estrella', 1),
(287, 9, 'En qué obra de teatro participa RICKY MARTIN en el 2012?', 'Evita', 'Los Miserables', 'El Fantasma de la Opera', 'Chicago', 1),
(288, 9, 'Con qué canción debuta RICKY MARTIN en el grupo Menudo?', 'Rayo de Luna', 'Claridad', 'Quiero Ser', 'Dulces Besos', 1),
(289, 9, 'Cuándo lanzó RICKY MARTIN su álbum \"Ricky Martin\" con el que debuta como solista?', 'En Noviembre 1991', 'En Noviembre 1990', 'En Octubre 1991', 'En Diciembre 1990', 1),
(290, 9, 'Quién fue el productor del segundo álbum de estudio de RICKY MARTIN titulado \"Me Amarás\"?', 'Juan Carlos Calderon', 'Mariano Perez', 'K.C.Porter', 'Enrique Martin Negroni', 1),
(291, 9, 'Cuál es el nombre del tercer álbum de estudio q publica RICKY MARTIN?', 'A Medio Vivir', 'Me Amaras', 'Ricky Martin ', 'Historias', 1),
(292, 9, 'Cuál es el nombre del álbum debut en Inglés de RICKY MARTIN?', 'Ricky Martin', 'Sound Loaded', 'Greatest Hits', 'Maria', 1),
(293, 9, 'Cuál es el nombre del séptimo álbum de estudio q publica RICKY MARTIN?', 'Almas del silencio', 'Sound Loaded', 'Ricky Martin', 'A medio vivir', 1),
(294, 9, 'En qué año fue publicado el álbum \"me Amarás\" de RICKY MARTIN?', 'En 1993', 'En 1992', 'En 1994', 'En 1995', 1),
(295, 9, 'Cuál es el nombre del tercer álbum en Inglés de RICKY MARTIN?', 'Life', 'Sound Loaded', 'Ricky Martin', 'Solo tiene dos álbumes en Inglés', 1),
(296, 9, 'Cuántos álbumes de estudio ha lanzado RICKY MARTIN?', '10', '6', '8', '12', 1),
(297, 9, 'Cuántos álbumes recopilatorios tiene RICKY MARTIN?', '5', '4', '3', '6', 1),
(298, 9, 'Cuántos álbumes en vivo tiene RICKY MARTIN?', '2', '3', '4', '5', 1),
(299, 9, 'Cuántas giras de conciertos ha realizado RICKY MARTIN?', '14', '12', '16', '18', 1),
(300, 9, 'Cuál es el álbum más vendido de RICKY MARTIN?', 'Ricky Martin 1999', 'Vuelve', 'A medio vivir', 'Me amarás', 1),
(301, 9, 'Quién fue el productor del álbum debut como solista \"Ricky Martin\"?', 'Mariano Perez', 'Sony Music', 'Juan Carlos Calderón', 'Pedro Fernandez', 1),
(302, 9, 'Cuál es el nombre del cuarto álbum de estudio de RICKY MARTIN?', 'Vuelve', 'Me amaras', 'Sound Loaded', 'A medio vivir', 1),
(303, 9, 'Cuál es el nombre del sexto álbum de estudio de RICKY MARTIN?', 'Sound Loaded', 'Vuelve', 'Me amaras', 'Almas del silencio', 1),
(304, 10, 'En qué año RICKY MARTIN lanza su álbum \"A quien quiera escuchar\"?', '2015', '2014', '2012', '2017', 1),
(305, 10, 'En qué categoriá RICKY MARTIN ganó su primer Grammy?', 'Mejor álbum Pop Latino por \"Vuelve\"', 'Mejor Intérprete Pop Latino por \"Vuelve\"', 'Mejor älbum Pop Masculino', 'Mejor video musical por \"She Bangs\"', 1),
(306, 10, 'Con qué nombramiento RICKY MARTIN fue honrado en Marzo de 2007?', 'Rey del Desfile del Día de Puerto Rico', 'Hombre del año en Puerto Rico', 'Embajador de la ciudad de Puerto Rico', 'Hombre más influyente del año en Puerto Rico', 1),
(307, 10, 'En qué año RICKY MARTIN entró al Top 100 de los Hispanos más influyentes de la revista People?', 'mar-08', 'ene-04', 'feb-05', 'ene-07', 1),
(308, 10, 'Qué premio ganó RICKY MARTIN en los Premios Lo Nuestro en Febrero 2004 en Miami?', 'Premio a la excelencia', 'Canción del año', 'Artista revelación del año', 'Álbum del año', 1),
(309, 10, 'Por cuál de sus álbumes RICKY MARTIN gana dos premios Billboard en 1999?', 'Vuelve', 'Ricky Martin', 'Me amarás', 'A medio Vivir', 1),
(310, 10, 'Cuántas nominaciones a los premios Alma tiene RICKY MARTIN?', '6', '4', '8', '10', 1),
(311, 10, 'Cuántos premios Alma tiene RICKY MARTIN?', '5', '4', '7', '3', 1),
(312, 10, 'En qué categoría RICKY MARTIN ganó el American Music Award?', 'Artista Latino Favorito', 'Artista POP Favorito', 'Artista de rock masculino favorito', 'Artista POP Masculino favorito', 1),
(313, 10, 'Cuántas nominaciones al American Music Award tiene RICKY MARTIN?', '5', '6', '7', '8', 1),
(314, 10, 'Dónde obtuvo RICKY MARTIN sus dos Viewer´s Choice Award?', 'MTV North Latin y MTV Russia', 'MTV Latin América', 'MTV Latin America y MTV Russia', 'MTV Russia', 1),
(315, 10, 'En qué categoría ganó RICKY MARTIN el World Music Award en 1999?', 'Artista Latino más vendido del mundo', 'Mejor cantante POP Masculimo', 'Mejor contribución a la música', 'Mejor canción POP Latino', 1),
(316, 10, 'En qué categoría RICKY MARTIN ganó el Teen Choice Award en 1999?', 'Artista Latino Favorito', 'Artista Masculino Favorito', 'Album favorito', 'Ninguno de los anteriores', 1),
(317, 10, 'En qué año RICKY MARTIN ganó el Grammy a Persona del Año?', 'En el 2006', 'En el 2008', 'En el 2012', 'En el 2010', 1),
(318, 10, 'Cuántos premios Lo Nuestro ha ganado RICKY MARTIN?', '8', '7', '10', '11', 1),
(319, 10, 'En qué año RICKY MARTIN ganó 5 premios Juventud?', '2008', '2007', '2006', '2012', 1),
(320, 10, 'Qué actor le arrebató el Emmy a RICKY MARTIN en la entrega del 2018?', 'Jeff Daniels', 'Edgar Ramirez', 'Fin Wittrock', 'John Letuizano', 1),
(321, 10, 'Cuál es la red social favorita del esposo de RICKY MARTIN?', 'Tumblr', 'Telegram', 'Twitter', 'Instagram', 1),
(322, 10, 'Cuál es el hashtag de la campaña de ayuda de RICKY MARTIN a Puerto Rico?', '#AllIn4PR', '#helppuertorico', '#All4PR', '#helpPR', 1),
(323, 10, 'Cuál es el nombre del tercer álbum recopilatorio de RICKY MARTIN?', 'Ricky Martin 17', 'Greatest Hits', 'The Best of Ricky Martin', 'Life', 1),
(324, 11, '¿ LA CERVEZA 593 ES...', 'la más fria', 'la de todos', 'la más antigua', 'del Nuevo Ecuatoriano', 1),
(325, 11, 'EN QUE PAÍS SE PRODUCE LA CREVEZA 593 PREMIUM LAGER ', 'ECUADOR', 'COLOMBIA', 'ESTADOS UNIDOS', 'ARGENTINA', 1),
(326, 11, 'EN QUE CIUDAD SE PRODUCE LA CREVEZA 593 PREMIUM LAGER ', 'CUENCA', 'QUITO', 'GUAYAQUIL', 'BOGOTÁ', 1),
(327, 11, 'COMO SE LLAMA LA CERVECERÍA QUE PRODUCE 593 PREMIUM LAGER', 'CERVECERÍA LA PAZ', 'CERVECERÍA CUENCANA', 'CERVECERÍA ECUATORIANA', 'CERVECERÍA 593', 1),
(328, 11, 'CUÁNTOS GRADOS DE ALCOHOL TIENE LA CREVEZA 593PREMIUM LAGER', '4', '3', '4.5', '3.5', 1),
(329, 11, '593, EL CÓDIGO MÁGICO, ES EL CÓDIGO DE', 'ECUADOR', 'CUENCA', 'QUITO', 'GUAYAQUIL', 1),
(330, 11, 'QUÉ TIPO DE CERVEZA ES 593', 'PREMIUM LAGER', 'ARTESANAL', 'PILSEN', 'NEGRA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbusuarios`
--

CREATE TABLE `dbusuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `refroles` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombrecompleto` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `terminoscondiciones` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dbusuarios`
--

INSERT INTO `dbusuarios` (`idusuario`, `usuario`, `password`, `refroles`, `email`, `nombrecompleto`, `cedula`, `terminoscondiciones`) VALUES
(3, 'admin', 'admin', 1, 'admin@admin.com', 'Administrador', 31552466, b'1'),
(4, 'juancarlos', 'carlos', 2, 'carlos@msn.com', 'Juan Carlos', 30552466, b'1'),
(5, 'Modelo 1', 'ecuador', 2, '593@593.com', 'Modelo 1', 0, b'0'),
(6, 'Modelo 2', 'ecuador', 2, 'lager@lager.com', 'Modelo 2', 0, b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dbusuariostribia`
--

CREATE TABLE `dbusuariostribia` (
  `idusuariotribia` int(11) NOT NULL,
  `refparticipantes` int(11) NOT NULL,
  `cantidadaciertos` int(11) NOT NULL,
  `intento` int(11) NOT NULL,
  `refestados` int(11) NOT NULL,
  `refpremios` int(11) NOT NULL,
  `puntobonusa` bit(1) NOT NULL,
  `aciertobonusa` bit(1) NOT NULL,
  `puntobonusb` bit(1) NOT NULL,
  `aciertobonusb` bit(1) NOT NULL,
  `fechacreacion` timestamp(2) NOT NULL DEFAULT current_timestamp(2) ON UPDATE current_timestamp(2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dbusuariostribia`
--

INSERT INTO `dbusuariostribia` (`idusuariotribia`, `refparticipantes`, `cantidadaciertos`, `intento`, `refestados`, `refpremios`, `puntobonusa`, `aciertobonusa`, `puntobonusb`, `aciertobonusb`, `fechacreacion`) VALUES
(3, 5, 4, 5, 3, 1, b'0', b'0', b'1', b'1', '2018-10-03 05:37:40.22'),
(4, 6, 4, 5, 3, 1, b'1', b'1', b'1', b'1', '2018-10-03 05:39:35.62'),
(5, 8, 0, 1, 4, 1, b'0', b'0', b'0', b'0', '2018-10-03 05:41:17.78'),
(6, 10, 0, 1, 3, 1, b'1', b'1', b'0', b'0', '2018-10-03 05:42:24.17'),
(7, 11, 0, 0, 1, 1, b'0', b'0', b'0', b'0', '2018-10-03 06:10:52.41'),
(8, 12, 0, 0, 1, 1, b'0', b'0', b'0', b'0', '2018-10-03 06:45:20.95'),
(9, 13, 0, 0, 1, 1, b'0', b'0', b'0', b'0', '2018-10-03 15:36:34.54'),
(10, 14, 0, 0, 1, 1, b'0', b'0', b'0', b'0', '2018-10-03 15:36:41.50'),
(11, 15, 2, 3, 3, 1, b'1', b'1', b'0', b'0', '2018-10-03 15:48:28.23'),
(12, 16, 0, 1, 3, 1, b'1', b'1', b'0', b'0', '2018-10-03 15:48:30.93'),
(13, 17, 0, 1, 3, 1, b'0', b'0', b'0', b'0', '2018-10-03 15:52:36.99'),
(14, 18, 10, 10, 3, 1, b'0', b'0', b'1', b'1', '2018-10-03 16:34:04.06'),
(15, 19, 4, 5, 3, 1, b'1', b'1', b'1', b'1', '2018-10-03 18:36:45.39'),
(16, 20, 1, 1, 4, 1, b'0', b'0', b'0', b'0', '2018-10-03 21:55:34.24'),
(17, 21, 1, 2, 3, 1, b'1', b'1', b'0', b'0', '2018-10-03 20:09:25.06'),
(18, 22, 0, 1, 3, 1, b'0', b'0', b'0', b'0', '2018-10-03 20:21:56.18'),
(19, 23, 10, 10, 3, 1, b'0', b'0', b'0', b'0', '2018-10-03 20:25:53.02'),
(20, 25, 0, 1, 3, 1, b'1', b'1', b'0', b'0', '2018-10-03 21:58:24.12'),
(21, 26, 1, 2, 3, 1, b'1', b'1', b'0', b'0', '2018-10-03 22:00:21.32'),
(22, 27, 0, 0, 1, 1, b'0', b'0', b'0', b'0', '2018-10-03 22:11:34.10'),
(23, 28, 1, 2, 3, 1, b'0', b'0', b'0', b'0', '2018-10-04 03:56:16.24'),
(24, 29, 0, 1, 3, 1, b'1', b'1', b'0', b'0', '2018-10-04 03:34:32.64'),
(25, 32, 0, 1, 3, 1, b'1', b'1', b'0', b'0', '2018-10-04 03:45:00.36'),
(26, 33, 1, 1, 4, 1, b'0', b'0', b'0', b'0', '2018-10-04 03:47:17.25'),
(27, 34, 0, 0, 1, 1, b'0', b'0', b'0', b'0', '2018-10-04 03:56:37.30'),
(28, 36, 0, 1, 4, 1, b'1', b'1', b'0', b'0', '2018-10-04 04:00:54.79'),
(29, 37, 0, 2, 3, 1, b'1', b'1', b'0', b'0', '2018-10-04 06:20:22.91'),
(30, 38, 4, 5, 3, 1, b'0', b'0', b'1', b'1', '2018-10-04 06:21:52.01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `predio_menu`
--

CREATE TABLE `predio_menu` (
  `idmenu` int(11) NOT NULL,
  `url` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `icono` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `Orden` smallint(6) DEFAULT NULL,
  `hover` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `permiso` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `predio_menu`
--

INSERT INTO `predio_menu` (`idmenu`, `url`, `icono`, `nombre`, `Orden`, `hover`, `permiso`) VALUES
(12, '../logout.php', 'icosalir', 'Salir', 30, NULL, 'Administrador'),
(13, '../index.php', 'icodashboard', 'Dashboard', 1, NULL, 'Administrador'),
(21, '../preguntas/', 'icoreportes', 'Preguntas', 3, NULL, 'Administrador'),
(22, '../usuarios/', 'icousuarios', 'Usuarios', 2, NULL, 'Administrador'),
(27, '../premios/', 'icopagos', 'Premios', 4, NULL, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbestados`
--

CREATE TABLE `tbestados` (
  `idestado` int(11) NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbestados`
--

INSERT INTO `tbestados` (`idestado`, `estado`) VALUES
(1, 'Comenzado'),
(2, 'En Curso'),
(3, 'Finalizado'),
(4, 'Sin Terminar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbhorarios`
--

CREATE TABLE `tbhorarios` (
  `idtbhorario` int(11) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbhorarios`
--

INSERT INTO `tbhorarios` (`idtbhorario`, `hora`) VALUES
(1, '08:00:00'),
(2, '08:10:00'),
(3, '08:20:00'),
(4, '08:30:00'),
(5, '08:40:00'),
(6, '08:50:00'),
(7, '09:00:00'),
(8, '09:10:00'),
(9, '09:20:00'),
(10, '09:30:00'),
(11, '09:40:00'),
(12, '09:50:00'),
(13, '10:00:00'),
(14, '10:10:00'),
(15, '10:20:00'),
(16, '10:30:00'),
(17, '10:40:00'),
(18, '10:50:00'),
(19, '11:00:00'),
(20, '11:10:00'),
(21, '11:20:00'),
(22, '11:30:00'),
(23, '11:40:00'),
(24, '11:50:00'),
(25, '12:00:00'),
(26, '12:10:00'),
(27, '12:20:00'),
(28, '12:30:00'),
(29, '12:40:00'),
(30, '12:50:00'),
(31, '13:00:00'),
(32, '13:10:00'),
(33, '13:20:00'),
(34, '13:30:00'),
(35, '13:40:00'),
(36, '13:50:00'),
(37, '14:00:00'),
(38, '14:10:00'),
(39, '14:20:00'),
(40, '14:30:00'),
(41, '14:40:00'),
(42, '14:50:00'),
(43, '15:00:00'),
(44, '15:10:00'),
(45, '15:20:00'),
(46, '15:30:00'),
(47, '15:40:00'),
(48, '15:50:00'),
(49, '16:00:00'),
(50, '16:10:00'),
(51, '16:20:00'),
(52, '16:30:00'),
(53, '16:40:00'),
(54, '16:50:00'),
(55, '17:00:00'),
(56, '17:10:00'),
(57, '17:20:00'),
(58, '17:30:00'),
(59, '17:40:00'),
(60, '17:50:00'),
(61, '18:00:00'),
(62, '18:10:00'),
(63, '18:20:00'),
(64, '18:30:00'),
(65, '18:40:00'),
(66, '18:50:00'),
(67, '19:00:00'),
(68, '19:10:00'),
(69, '19:20:00'),
(70, '19:30:00'),
(71, '19:40:00'),
(72, '19:50:00'),
(73, '20:00:00'),
(74, '20:10:00'),
(75, '20:20:00'),
(76, '20:30:00'),
(77, '20:40:00'),
(78, '20:50:00'),
(79, '21:00:00'),
(80, '21:10:00'),
(81, '21:20:00'),
(82, '21:30:00'),
(83, '21:40:00'),
(84, '21:50:00'),
(85, '22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmeses`
--

CREATE TABLE `tbmeses` (
  `mes` int(11) NOT NULL,
  `nombremes` varchar(80) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbmeses`
--

INSERT INTO `tbmeses` (`mes`, `nombremes`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Julio'),
(7, 'Junio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'Octubre'),
(11, 'Noviembre'),
(12, 'Diciembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpremios`
--

CREATE TABLE `tbpremios` (
  `idpremio` int(11) NOT NULL,
  `premio` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `aciertos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbpremios`
--

INSERT INTO `tbpremios` (`idpremio`, `premio`, `aciertos`) VALUES
(1, 'Nada', 6),
(2, 'Gana Entrada', 7),
(3, 'Gana Meet and Greet', 10),
(4, 'Gana Botella', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbroles`
--

CREATE TABLE `tbroles` (
  `idrol` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `activo` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbroles`
--

INSERT INTO `tbroles` (`idrol`, `descripcion`, `activo`) VALUES
(1, 'Administrador', b'1'),
(2, 'Participante', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dbparticipantes`
--
ALTER TABLE `dbparticipantes`
  ADD PRIMARY KEY (`idparticipante`),
  ADD KEY `fk_p_usua_idx` (`refusuarios`);

--
-- Indices de la tabla `dbpreguntas`
--
ALTER TABLE `dbpreguntas`
  ADD PRIMARY KEY (`idpregunta`);

--
-- Indices de la tabla `dbusuarios`
--
ALTER TABLE `dbusuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_dbusuarios_tbroles1_idx` (`refroles`);

--
-- Indices de la tabla `dbusuariostribia`
--
ALTER TABLE `dbusuariostribia`
  ADD PRIMARY KEY (`idusuariotribia`),
  ADD KEY `fk_ut_usua_idx` (`refparticipantes`),
  ADD KEY `fk_ut_estados_idx` (`refestados`),
  ADD KEY `fk_ut_premios_idx` (`refpremios`);

--
-- Indices de la tabla `predio_menu`
--
ALTER TABLE `predio_menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indices de la tabla `tbestados`
--
ALTER TABLE `tbestados`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `tbhorarios`
--
ALTER TABLE `tbhorarios`
  ADD PRIMARY KEY (`idtbhorario`);

--
-- Indices de la tabla `tbmeses`
--
ALTER TABLE `tbmeses`
  ADD PRIMARY KEY (`mes`);

--
-- Indices de la tabla `tbpremios`
--
ALTER TABLE `tbpremios`
  ADD PRIMARY KEY (`idpremio`);

--
-- Indices de la tabla `tbroles`
--
ALTER TABLE `tbroles`
  ADD PRIMARY KEY (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dbparticipantes`
--
ALTER TABLE `dbparticipantes`
  MODIFY `idparticipante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `dbpreguntas`
--
ALTER TABLE `dbpreguntas`
  MODIFY `idpregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT de la tabla `dbusuarios`
--
ALTER TABLE `dbusuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `dbusuariostribia`
--
ALTER TABLE `dbusuariostribia`
  MODIFY `idusuariotribia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `predio_menu`
--
ALTER TABLE `predio_menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `tbestados`
--
ALTER TABLE `tbestados`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbhorarios`
--
ALTER TABLE `tbhorarios`
  MODIFY `idtbhorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `tbpremios`
--
ALTER TABLE `tbpremios`
  MODIFY `idpremio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbroles`
--
ALTER TABLE `tbroles`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dbparticipantes`
--
ALTER TABLE `dbparticipantes`
  ADD CONSTRAINT `fk_p_usua` FOREIGN KEY (`refusuarios`) REFERENCES `dbusuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `dbusuarios`
--
ALTER TABLE `dbusuarios`
  ADD CONSTRAINT `fk_dbusuarios_tbroles1` FOREIGN KEY (`refroles`) REFERENCES `tbroles` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `dbusuariostribia`
--
ALTER TABLE `dbusuariostribia`
  ADD CONSTRAINT `fk_ut_estados` FOREIGN KEY (`refestados`) REFERENCES `tbestados` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ut_part` FOREIGN KEY (`refparticipantes`) REFERENCES `dbparticipantes` (`idparticipante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ut_premios` FOREIGN KEY (`refpremios`) REFERENCES `tbpremios` (`idpremio`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
