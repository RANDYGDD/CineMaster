-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2016 a las 16:04:13
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cinemasteru`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

CREATE TABLE `accesos` (
  `ID_ACCESO` int(5) NOT NULL,
  `NOMBRE_ACCESO` varchar(150) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`ID_ACCESO`, `NOMBRE_ACCESO`) VALUES
(1, 'Agregar películas'),
(2, 'Actualizar películas'),
(3, 'Eliminar películas'),
(4, 'Reservas de películas'),
(5, 'Consultar productos de ventas (comida rápida)'),
(6, 'Consultar películas en estreno'),
(7, 'Consultar películas añadidas recientemente'),
(8, 'Validar y verificar entradas reservadas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `ID_ADMIN` int(5) NOT NULL,
  `ID_ROL` int(5) NOT NULL,
  `NOMBRES_ADMIN` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDOS_ADMIN` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `TELEFONO_ADMIN` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `CEDULA_ADMIN` varchar(13) COLLATE utf8_spanish2_ci NOT NULL,
  `DIRECCION_ADMIN` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `CONTRASENA_A` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ADMIN_NAME` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`ID_ADMIN`, `ID_ROL`, `NOMBRES_ADMIN`, `APELLIDOS_ADMIN`, `TELEFONO_ADMIN`, `CEDULA_ADMIN`, `DIRECCION_ADMIN`, `CONTRASENA_A`, `ADMIN_NAME`) VALUES
(1, 1, 'Randy Gabriel', 'Diloné', '809-829-7890', '402-1874574-2', 'La Vega, República Dominicana', 'd41e98d1eafa6d6011d3a70f1a5b92f0zakl05p', 'RandyDD'),
(2, 1, 'Luis Miguel', 'Rodríguez', '809-872-9830', '402-7890145-3', 'La Vega, República Dominicana', 'd41e98d1eafa6d6011d3a70f1a5b92f0zakl05p', 'seninRB'),
(3, 2, 'Uchiha', 'Madara', '809-878-8019', '102-7893210-9', 'Nagasaki, Japón', 'd41e98d1eafa6d6011d3a70f1a5b92f0zakl05p', 'narutoShin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `ID_NOTICIA` int(5) NOT NULL,
  `ID_ADMIN` int(5) NOT NULL,
  `FECHA` date NOT NULL,
  `TITULO` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `GENERO` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `NOTA` varchar(400) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`ID_NOTICIA`, `ID_ADMIN`, `FECHA`, `TITULO`, `GENERO`, `NOTA`) VALUES
(1, 2, '2016-11-01', 'Agente 47 - (Hitman: Agent 47)', 'Acción, Crimén', '"Agente 47" narra la historia de un asesino de élite que ha sido genéticamente alterado para convertirse en una perfecta máquina de matar. Su objetivo es acabar con una gran corporación que planea desvelar los secretos de su organización secreta. Para ello, forma equipo con una joven.'),
(2, 1, '2016-11-01', 'Star Wars: El Despertar de la Fuerza', 'Épico, Acción', 'Han pasado más de treinta años desde la caída del Imperio Galáctico, derrotado por la Alianza Rebelde. Luke Skywalker (Mark Hamill) ha desaparecido, pero existe un mapa que revela dónde se encuentra el último guerrero Jedi con vida. '),
(3, 2, '2016-11-02', 'Michael Jackson''s Ghost', 'Musical, Fantástico', 'Un extraño hombre vive en una misteriosa mansión en una colina que el pueblo cree encantada. Un día, el alcalde del lugar con los pueblerinos decide afrontar sus miedos visitando el tenebroso lugar.'),
(4, 1, '2016-11-03', 'Expediente Warren:\nEl Conjuro 1', 'Terror, Misterio', 'Antes de que existiera Amityville, existía Harrisville. Basada en una historia de la vida real, "El Conjuro", cuenta cómo los mundialmente reconocidos investigadores de fenómenos paranormales Ed y Lorraine Warren son llamados para ayudar a una familia aterrorizada por una presencia oscura en una granja alejada de todo.'),
(5, 2, '2016-11-04', 'Los Pingüinos de Madagascar (La Película)', 'Infantil, Animación', 'Tras el éxito alcanzado en televisión, los personajes más queridos por el público infantil, los pingüinos de la película Madagascar, dan el salto a la gran pantalla protagonizando su propia película animada: el ''spin-off'' Los pingüinos de Madagascar.'),
(6, 2, '2016-11-04', 'Río 2', 'Infantil, Animación', 'Blu y Perla son una pareja feliz, viven cómodamente en las afueras de la ciudad de Río de Janeiro, Brasil y tienen tres hijos: Carla, la mayor amante de la música y que nunca se separa de su iPod; Bia, la más inteligente, le gusta sacar cálculos y leer libros; y Tiago, el menor y único varón de los trillizos; amante de la destrucción y de las bromas pesadas. '),
(7, 1, '2016-11-07', 'Dos Pavos en Apuros', 'Infantil, Animación', 'Del director de Horton y el mundo de los quién, y de los productores de SHREK cuenta la historia de dos pavos que ponen de lado sus diferencias y se unen en una aventura a través del tiempo para arruinar la tradición de la cena de fin de año a base de pavo y asi salvar el destino de miles de pavos como ellos. '),
(8, 1, '2016-11-07', 'Cuando las Luces se Apagan', 'Terror, Horror', 'Cuando Rebecca dejó su hogar, ella pensó que había dejado atrás sus temores de la infancia. En su infancia, ella nunca estaba segura de lo que era y no era real cuando se apagaban las luces... y ahora su pequeño hermano Martin, está experimentando los mismos acontecimientos inexplicables y aterradores que habían probado su cordura y amenazado su seguridad. '),
(9, 1, '2016-11-08', 'Independencia', 'Ciencia Ficción, Acción', 'Utilizando la tecnología que los extraterrestres tenían 20 años antes, las naciones de la Tierra, que temen el regreso de los invasores, han colaborado en la elaboración de un gigantesco programa de defensa para proteger el planeta. Pero no es seguro que ese programa sirva para hacer frente a los avanzados e inauditos recursos de los atacantes.'),
(10, 2, '2016-11-09', 'Buscando a Dory', 'Infantil, Animación', 'Un año después de los acontecimientos narrados en "Buscando a Nemo", Dory vive apaciblemente con Marlin y su hijo Nemo. Pero durante un viaje para ver cómo las mantarrayas migran de vuelta a casa, los problemas de memoria de Dory parecen desaparecer durante un segundo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `ID_PELICULA` int(5) NOT NULL,
  `ID_ADMIN` int(5) NOT NULL,
  `NOMBRE_P` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AÑO_P` date NOT NULL,
  `DURACION_P` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DURACION_P_M` int(10) NOT NULL,
  `PRECIO_P` int(11) NOT NULL,
  `SIPNOSIS_P` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GENEROS_P` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `CLASIFICACION_P` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IDIOMAS_P` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PROTAGONISTAS_P` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PAISES_P` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DIR_PIC` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`ID_PELICULA`, `ID_ADMIN`, `NOMBRE_P`, `AÑO_P`, `DURACION_P`, `DURACION_P_M`, `PRECIO_P`, `SIPNOSIS_P`, `GENEROS_P`, `CLASIFICACION_P`, `IDIOMAS_P`, `PROTAGONISTAS_P`, `PAISES_P`, `DIR_PIC`) VALUES
(1, 1, 'Los Vengadores: La Era de Ultrón', '2015-05-01', ' 2h 21min', 141, 450, 'El destino del planeta pende de un hilo cuando Tony Stark intenta hacer funcionar un inactivo programa para mantener la paz.\r\n', 'Acción, Aventura, Ciencia Ficción, Superhéroes.', 'B', 'Inglés, Español', 'Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson.\r\n', 'Estados Unidos (EE.UU)', 'Img/Portadas/1.Vengadores.jpg'),
(2, 1, 'Star Wars: El Despertar de la Fuerza', '2015-12-18', ' 2h 18min', 138, 500, 'Han pasado más de treinta años desde la caída del Imperio Galáctico, derrotado por la Alianza Rebelde. Luke Skywalker (Mark Hamill) ha desaparecido, pero existe un mapa que revela dónde se encuentra el último guerrero Jedi con vida. ', 'Space opera, Épico, Acción, Aventura, Fantasía', 'B', 'Inglés', 'Harrison Ford, Mark Hamill, Carrie Fisher, Adam Driver, Daisy Ridley, John Boyega', 'Estados Unidos (EE.UU)', 'Img/Portadas/2.Star Wars.jpg '),
(3, 2, 'Michael Jackson', '1996-05-09', '40min', 40, 250, 'Un extraño hombre vive en una misteriosa mansión en una colina que el pueblo cree encantada. Un día, el alcalde del lugar con los pueblerinos decide afrontar sus miedos visitando el tenebroso lugar.', 'Musical, Fantástico, Terror, Casas Encantadas, Sobrenatural, Mediometraje ', 'C', 'Inglés', 'Michael Jackson, Maestro Mayor, Super Ghoul, Skeleton, Mayor Ghoul, Dante, Mos Def', 'Estados Unidos (EE.UU)', 'Img/Portadas/3.Michael Jackson Ghost.jpg'),
(4, 2, 'Cincuenta Sombras de Grey', '2015-02-13', '2h 9min', 129, 550, 'Cuando la estudiante de Literatura Anastasia Steele recibe el encargo de entrevistar al exitoso y joven empresario Christian Grey, queda impresionada al encontrarse ante un hombre atractivo, seductor y también muy intimidante. ', 'Drama, Romance, Erótico', 'C', 'Inglés, Español', 'Dakota Johnson, Jamie Dornan, Jennifer Ehle, Eloise Mumford, Luke Grimes\r\n', 'Reino Unido', 'Img/Portadas/4.Cincuenta Sombras de Grey.jpg'),
(5, 2, 'Michael Jackson. De la Motown a Off the Wall', '2016-01-24', '1h 33min', 99, 550, 'Un vistazo a la vida de Michael Jackson, desde sus inicios en Motown hasta la publicación de su exitoso álbum de 1979, Off the Wall.', 'Documental, Musical, Artístico, Arte\r\n', 'A', 'Inglés', 'Patti Austin, Carole Bayer Sager, Kobe Bryant, Larry Carlton, Misty Copeland, Lee Daniels', 'Estados Unidos (EE.UU)', 'Img/Portadas/5.Michael Jackson Motown a Off the Wall.jpg'),
(6, 1, 'Expediente Warren: El Conjuro 1', '2013-06-19', '1h 52min', 112, 250, 'Antes de que existiera Amityville, existía Harrisville. Basada en una historia de la vida real, "El Conjuro", cuenta cómo los mundialmente reconocidos investigadores de fenómenos paranormales Ed y Lorraine Warren son llamados para ayudar a una familia aterrorizada por una presencia oscura en una granja alejada de todo.', 'Terror, Hechos Reales, Sunpenso, Misterio', 'C', 'Inglés, Español', 'Vera Farmiga, Patrick Wilson, Ron Livingston, Lili Taylor, Shanley Caswell\r\nHayley McFarland\r\n', 'Estados Unidos (EE.UU)', 'Img/Portadas/6.Expediente Warren - El Conjuro 1 (The Conjuring).jpg'),
(7, 1, 'Expediente Warren: El Caso Enfield - El Conjuro 2', '2016-06-17', '2h 14min', 134, 520, 'Secuela de la exitosa "Expediente Warren" (2013) que presenta un caso real de los renombrados demonólogos Ed y Lorraine Warren. Para resolverlo viajan al norte de Londres para ayudar a una madre soltera que vive con sus cuatro hijos en una casa plagada de espíritus malignos.', 'Terror, Hechos Reales, Sunpenso, Misterio', 'C', 'Inglés', 'Vera Farmiga, Patrick Wilson, Frances O''Connor, Madison Wolfe, Lauren Esposito\r\n', 'Estados Unidos (EE.UU)', 'Img/Portadas/7. Expediente Warren El Caso Enfield - El Conjuro 2 - (The Conjuring 2).jpg'),
(8, 2, 'Agente 47 - (Hitman: Agent 47)', '2015-10-02', '1h 39min', 99, 400, '"Agente 47" narra la historia de un asesino de élite que ha sido genéticamente alterado para convertirse en una perfecta máquina de matar. Su objetivo es acabar con una gran corporación que planea desvelar los secretos de su organización secreta. Para ello, forma equipo con una joven.', 'Acción, Crimén, Terror\r\n', 'C', 'Inglés, Español', 'Rupert Friend, Zachary Quinto, Hannah Ware\r\nCiarán Hinds, Thomas Kretschmann, Emilio Rivera\r\n', 'Estados Unidos (EE.UU)', 'Img/Portadas/8. Agente 47 - (Hitman Agent 47).jpg'),
(9, 1, 'Bob Esponja: Un Héroe Fuera Del Agua', '2015-01-28', '1h 32min', 92, 250, 'Bob Esponja emprende un viaje para recuperar una receta que ha robado un pirata; para ello lo trae a nuestra dimensión en 3D.', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Español', 'Tom Kenny, Bill Fagerbakke, Rodger Bumpass\r\nClancy Brown, Carolyn Lawrence, Antonio Banderas', 'Estados Unidos (EE.UU)', 'Img/Portadas/9. Bob Esponja Un Heroe Fuera Del Agua.jpg'),
(10, 2, 'Minions', '2015-07-03', '1h 31min', 91, 380, 'La historia de Los Minions se remonta al principio de los tiempos. Empezaron siendo organismos amarillos unicelulares que evolucionaron a través del tiempo, poniéndose siempre al servicio de los amos más despreciables. Ante su incapacidad para mantener a esos amos – desde el T.', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Español', 'Scarlet Overkill: Sandra Bullock\r\nKevin / Stuart / Bob / Minions: Pierre Coffin Herb Overkill: Jon Hamm\r\nWalter Nelson: Michael Keaton\r\nMadge Nelson: Allison Janney', 'Estados Unidos (EE.UU)', 'Img/Portadas/10. Minions.jpg'),
(11, 1, 'Los Pingüinos de Madagascar (La Película)', '2014-11-26', '1h 32min', 92, 450, 'Tras el éxito alcanzado en televisión, los personajes más queridos por el público infantil, los pingüinos de la película Madagascar, dan el salto a la gran pantalla protagonizando su propia película animada: el ''spin-off'' Los pingüinos de Madagascar.\r\n\r\n', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Español', 'Tom McGrath, Chris Miller, Christopher Knights, Conrad Vernon, Benedict Cumberbatch\r\n', 'Estados Unidos (EE.UU)', 'Img/Portadas/11. Los Pinguinos.jpg'),
(12, 2, 'Río 2', '2014-04-11', '1h 42min', 102, 380, 'Blu y Perla son una pareja feliz, viven cómodamente en las afueras de la ciudad de Río de Janeiro, Brasil y tienen tres hijos: Carla, la mayor amante de la música y que nunca se separa de su iPod; Bia, la más inteligente, le gusta sacar cálculos y leer libros; y Tiago, el menor y único varón de los trillizos; amante de la destrucción y de las bromas pesadas. ', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Inglés, Español', 'Jesse Eisenberg, Anne Hathaway, Leslie Mann, Jemaine Clement, George Lopez, Jamie Foxx, Will.i.am', 'Estados Unidos (EE.UU)', 'Img/Portadas/12. Rio 2.jpg'),
(13, 1, 'Río 1', '2011-04-08', '1h 36min', 96, 350, 'Blue es un guacamayo azul que fue capturado en Río de Janeiro por unos traficantes de animales. Siendo una cría, es trasladado a Estados unidos para ser vendido, pero durante su trayecto hacia Minessota su jaula vuelca y sale despedida del camión que le transportaba. Por suuerte, una niña pequeña llamada Linda lo recoge y lo adopta.\r\n\r\n', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Inglés, Español', 'Jesse Eisenberg / Blu, Anne Hathaway / Jewel, George López / Rafael, Jemaine Clemente / Nigel, Will.i.am / Pedro, Jamie Foxx / Nico\r\n', 'Estados Unidos (EE.UU)', 'Img/Portadas/13. Rio 1.jpg'),
(14, 2, 'Dos Pavos en Apuros', '2013-11-01', '1h 31min', 91, 500, 'Del director de Horton y el mundo de los quién, y de los productores de SHREK cuenta la historia de dos pavos que ponen de lado sus diferencias y se unen en una aventura a través del tiempo para arruinar la tradición de la cena de fin de año a base de pavo y asi salvar el destino de miles de pavos como ellos. ', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Inglés, Español', 'Owen Wilson, Woody Harrelson, Amy Poehler, George Takei, Colm Meaney', 'Estados Unidos (EE.UU)', 'Img/Portadas/14. Dos Pavos en Apuros.jpg'),
(16, 2, 'Cuando las Luces se Apagan', '2016-07-22', '1h 21min', 81, 550, 'Cuando Rebecca dejó su hogar, ella pensó que había dejado atrás sus temores de la infancia. En su infancia, ella nunca estaba segura de lo que era y no era real cuando se apagaban las luces... y ahora su pequeño hermano Martin, está experimentando los mismos acontecimientos inexplicables y aterradores que habían probado su cordura y amenazado su seguridad. ', 'Terror, Suspenso, Sobrenatural, Misterio', 'B', 'Inglés', 'Diana, Officer Gomez, Martin, Esther, Rebecca, Sophie, Paul, Officer Form, Emma, Nurse Fuller, Bret', 'Estados Unidos (EE.UU)', 'Img/Portadas/16. Cuando las Luces se Apagan.jpg'),
(17, 1, 'Marias: Fé en la Mujer ', '2016-10-04', '1h 15min', 75, 430, 'Un viaje por Brasil, Cuba, México, Perú y Nicaragua observando las celebraciones del Vírgenes, sus similitudes y diferencias culturales. Lo que demuestra es que la figura de María supera a cualquier religión. ', 'Religioso, Documental, Investigación', 'B', ' Portugués, Español', 'Maria Helena Chartuni, Silvia Rodrigues Rivera, José Maria Vitier Garcia, José Maria Espinal, Maria Lopez Vigil, Maria Guadalupe Torres Rodriguez', 'Brasil, Cuba, México, Perú, Nicaragua', 'Img/Portadas/17. Marias - Fe en la Mujer.jpg'),
(18, 1, 'Moana', '2016-11-23', '1h 53min', 103, 500, 'La historia se desarrolla hace dos milenios en unas islas del sur del Pacífico. La protagonista es Moana Waialiki, una joven que desea explorar el mundo navegando por el océano.', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Inglés, Español', 'John Musker, Ron Clements, Taika Waititi, Jared Bush', 'Estados Unidos (EE.UU)', 'Img/Portadas/22.Maona.jpg'),
(19, 2, 'Escuadrón Suicida', '2016-06-14', '2h 10min', 130, 450, 'Mientras el gobierno de EE.UU no tiene claro cómo responder a una visita alienígena a la Tierra con intenciones malignas, Amanda ''El Muro'' Waller (Viola Davis), la líder de la agencia secreta A.R.G.U.S., ofrece una curiosa solución: reclutar a los villanos más crueles, con habilidades letales e incluso mágicas, para que trabajen para ellos.', 'Fantástico, Policíaco, Acción', 'B', 'Inglés', 'Margot Robbie, Harley Quinn, Jared Leto, Will Smith, Deadshot, Cara Delevingne', 'Nueva York', 'Img/Portadas/19.Escuadron Suicida.jpg'),
(20, 1, 'Frozen: El reino del hielo', '2013-11-27', '1h 49min', 109, 500, 'Cuando una profecía condena a un reino a vivir un invierno eterno, la joven Anna, el temerario montañero Kristoff y el reno Sven emprenden un viaje épico en busca de Elsa, hermana de Anna y Reina de las Nieves, para poner fin al gélido hechizo. Adaptación libre del cuento "La reina de las nieves".', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Inglés', 'Kristen Bell, Idina Menzel, Josh Gad, Jonathan Groff, Más', 'Estados Unidos (EE.UU)', 'Img/Portadas/20.Frozen.jpg'),
(21, 1, 'Rápidos y Furiosos 7', '2015-04-03', '2h 20min', 140, 560, 'Ha pasado un año desde que el equipo de Dominic Torreto y Brian pudiera regresar finalmente a Estados Unidos, tras ser indultados. Desean adaptarse a una vida en la legalidad, pero el entorno ya no es el mismo. Dom intenta acercarse a Letty, y Brian lucha para acostumbrarse a la vida en una urbanización con Mia y su hijo.', 'Policíaco, Suspenso, Acción', 'B', 'Inglés, Español', 'Paul Walker, Vin Diesel, Dominic Toretto, Dwayne Johnson, Jason Statham ', 'Estados Unidos (EE.UU)', 'Img/Portadas/23.Rapido y furioso.jpg'),
(22, 2, 'Tarzán', '2016-06-30', '1h 50min', 110, 470, 'Ya hace años que Tarzán (Alexander Skarsgård) abandonó la jungla africana para llevar una vida aburguesada como John Clayton III, Lord Greystoke, junto a su esposa Jane (Margot Robbie). Pero un día le ofrecen el cargo de embajador en el Congo.', 'Dramático, Acción', 'B', 'Inglés, Español', 'Edgar Rice Burroughs, Craig Brewer, Adam Cozad', 'Rusia', 'Img/Portadas/24.Tarzan.jpg'),
(23, 1, 'Buscando a Dory', '2016-06-17', '1h 45min', 105, 500, 'Un año después de los acontecimientos narrados en "Buscando a Nemo", Dory vive apaciblemente con Marlin y su hijo Nemo. Pero durante un viaje para ver cómo las mantarrayas migran de vuelta a casa, los problemas de memoria de Dory parecen desaparecer durante un segundo: recuerda que tiene una familia e inmediatamente decide emprender viaje para reencontrarse con sus padres, a los que perdió hace años.', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Inglés, Español', 'Ellen DeGeneres, Ty Burrell, Ed O''Neill, Kaitlin Olson', 'Estados Unidos (EE.UU)', 'Img/Portadas/18. Buscando a Dory.jpg'),
(24, 2, 'Zootopia', '2016-04-04', '1h 48min ', 108, 450, 'La moderna metrópoli mamífera de Zootrópolis es una ciudad absolutamente única. Está compuesta de barrios con diferentes hábitats como la lujosa Sahara Square y la gélida Tundratown. Es un crisol donde los animales de cada entorno conviven, un lugar donde no importa lo que seas.', 'Infantil, Animación, Comedia, Familiar, 3-D ', 'A', 'Inglés, Español', 'Jason Bateman, Ginnifer Goodwin, Shakira, Idris Elba', 'Estados Unidos (EE.UU)', 'Img/Portadas/25.Zootopia.jpg'),
(25, 2, 'Independencia', '2016-06-22', '2h 9min', 129, 480, 'Utilizando la tecnología que los extraterrestres tenían 20 años antes, las naciones de la Tierra, que temen el regreso de los invasores, han colaborado en la elaboración de un gigantesco programa de defensa para proteger el planeta. Pero no es seguro que ese programa sirva para hacer frente a los avanzados e inauditos recursos de los atacantes.', 'Fantástico, Ciencia Ficción, Acción', 'B', 'Inglés, Español', 'Jeff Goldblum, Liam Hemsworth, Jake Morrison, Bill Pullman, Thomas J. Whitmore, Jessie Usher\r\n', 'Corea del Sur', 'Img/Portadas/21.Independencia.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `ID_PROMOCION` int(5) NOT NULL,
  `DESCRIPCION` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `AMBIENTE` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`ID_PROMOCION`, `DESCRIPCION`, `AMBIENTE`, `FECHA`) VALUES
(1, 'Aprovecha el gran especial del combo PAPAS + HAMBURGUESA por tan solo RD $ 150.00, Si! Por solo RD $ 150.00 !', 'Comida', '2016-11-04'),
(2, 'Disfruta tu pelicula con la mejor ENSALADA DE FRUTAS y haz que ese tiempo sea una experiencia maravillosa. Compralo por solo RD $ 100.00', 'Comida', '2016-11-07'),
(9, 'Si te quedaste esperando la segunda parte de la secuela El Conjuro. Qué esperas para verla?\r\n\r\nYa está disponible en nuestras salas de cine: Expediente Warren: El Caso Enfield\r\nEl Conjuro 2 - (The Conjuring 2). \r\nReservala ya!', 'Película', '2016-11-09'),
(10, 'Si tu genero favorito es el Pop y tu artista favorito tambien es Michael Jackson!\r\nNo puedes perderte este nuevo documental, acerca de su segundo mejor disco "Off The Wall".\r\nVen a nuestras salas de cine y disfruta de este gran documental: Michael Jackson. De la Motown a Off the Wall.\r\nReservala ya!', 'Película', '2016-11-11'),
(17, 'Porque tenemos de todo y para todos.\r\nNo te puedes perder esta gran pelicula hecha para ti: Star Wars: El Despertar de la Fuerza.\r\nPara que sientas el poder desde otra dimensión.\r\nReservala ya!', 'Película', '2016-11-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_salas`
--

CREATE TABLE `p_salas` (
  `ID_SALA` int(5) NOT NULL,
  `ID_PELICULA` int(5) NOT NULL,
  `HORARIO` datetime NOT NULL,
  `ESTADO` varchar(1) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `p_salas`
--

INSERT INTO `p_salas` (`ID_SALA`, `ID_PELICULA`, `HORARIO`, `ESTADO`) VALUES
(1, 1, '2016-10-04 14:00:00', 'O'),
(1, 3, '2016-10-04 17:00:00', 'O'),
(2, 10, '2016-10-04 14:00:00', 'O'),
(2, 12, '2016-10-04 16:00:00', 'O'),
(1, 7, '2016-10-15 16:00:00', 'O'),
(2, 8, '2016-10-04 17:00:00', 'O'),
(2, 16, '2016-10-18 19:00:00', 'O'),
(1, 17, '2016-10-21 14:00:00', 'O'),
(2, 14, '2016-10-25 14:00:00', 'O'),
(1, 2, '2016-10-21 16:00:00', 'O'),
(1, 4, '2016-12-01 15:00:00', 'O'),
(2, 5, '2016-12-07 14:00:00', 'O'),
(2, 6, '2016-12-08 14:00:00', 'O'),
(1, 9, '2016-12-05 15:00:00', 'O'),
(1, 11, '2016-12-07 14:00:00', 'O'),
(2, 13, '2016-12-03 16:00:00', 'O'),
(1, 18, '2016-12-09 16:00:00', 'O'),
(2, 19, '2016-12-14 15:00:00', 'O'),
(1, 20, '2016-12-19 16:00:00', 'O'),
(1, 21, '2016-12-22 16:00:00', 'O'),
(2, 22, '2016-12-18 16:00:00', 'O'),
(1, 23, '2017-01-22 16:00:00', 'O'),
(2, 24, '2016-12-23 15:00:00', 'O'),
(1, 25, '2016-11-28 16:00:00', 'O');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID_ROL` int(5) NOT NULL,
  `NOMBRE_ROL` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_ROL`, `NOMBRE_ROL`) VALUES
(1, 'Administrador'),
(2, 'Consultador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_accesos`
--

CREATE TABLE `r_accesos` (
  `ID_ROL` int(5) NOT NULL,
  `ID_ACCESO` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `r_accesos`
--

INSERT INTO `r_accesos` (`ID_ROL`, `ID_ACCESO`) VALUES
(1, 8),
(2, 8),
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(2, 5),
(2, 6),
(2, 7),
(2, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `ID_SALA` int(5) NOT NULL,
  `ASIENTOS_S` int(5) NOT NULL,
  `DESCRIPCION_S` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`ID_SALA`, `ASIENTOS_S`, `DESCRIPCION_S`) VALUES
(1, 300, 'Esta sala de cine consta con un total de treciento asientos (300).\r\nLa misma se conforma con aires acodincionados para brindar mejor ambiente a los espectadores; junto con una pantalla HD que es base para la proyección de las películas. Y otras tecnologías más.'),
(2, 230, 'Esta sala de cine consta con un total de dociento treinta asientos (230).\r\nLa misma se conforma con aires acodincionados para brindar mejor ambiente a los espectadores; junto con una pantalla HD que es base para la proyección de las películas. Y otras tecnologías más.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(5) NOT NULL,
  `NOMBRES_U` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `APELLIDOS_U` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `CORREO_U` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `USER_NAME` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `PASS_USER` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `SEXO` varchar(1) COLLATE utf8_spanish2_ci NOT NULL,
  `TARJETA_CREDITO` int(11) NOT NULL,
  `ESTADO_U` varchar(1) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRES_U`, `APELLIDOS_U`, `CORREO_U`, `USER_NAME`, `PASS_USER`, `SEXO`, `TARJETA_CREDITO`, `ESTADO_U`) VALUES
(1, 'Julio', 'Delgado', 'juliodelgadohotmail.com', 'july_blaster', '62398fb63509f679f2128ea6a44a7f9azakl05p', 'M', 0, 'A'),
(3, 'Randy', 'Dilone', 'randydilone@hotmail.com', 'apk', '9f2cdaf2ad34be896470078e6342649dzakl05p', 'M', 0, 'A'),
(4, 'Luis', 'Miguel', 'luismiguel@hotmail.com', 'socio', '3660fe19cb5a26939d9cbda731f5bc96zakl05p', 'M', 0, 'A'),
(5, 'Jerison', 'Martinez', 'jerizonmart12@hotmail.com', 'pacha_23', '36ea6f5eebfa47f96b411d6c0d173108zakl05p', 'M', 0, 'I'),
(6, 'Samuel', 'Ramirez', 'samuelramirez@hotmail.com', 'samuelillo', 'ab46da12ca52a16af65523c12fb9dc8fzakl05p', 'M', 0, 'I'),
(7, 'Vanesa', 'Leonardo', 'vanesaleonardo@hotmail.com', 'vane_12', '32c1a408ccf4973cce6c6650d56f08c3zakl05p', 'F', 0, 'A'),
(8, 'Melissa', 'Rosario', 'melisa_ros@hotmail.com', 'mely', 'e019402a32b936ca85dda62a0fed6acbzakl05p', 'F', 0, 'A'),
(9, 'Rafaelina', 'Caba', 'rafaelina_ca12@hotmail.com', 'la_muñeca', '1d93bdf4ef18cf86b781212fc70de7e3zakl05p', 'F', 0, 'A'),
(10, 'Anlly', 'Polonia', 'anllypolonia12@hotmail.com', 'anlly_2', 'c317795d5cdddc37deeb3b4a9342bd1ezakl05p', 'F', 0, 'A'),
(19, 'Randy', 'Dilone', 'randydilone@outlook.com', 'RandyDD', 'f0524608524eeb03b68b23afc8d8bf4bzakl05p', 'M', 0, 'A'),
(20, 'Macho', 'Man', 'machoman@outlook.com', 'Machon', 'a51e949f1dcc889334caa4ae285dffb8zakl05p', 'M', 0, 'A'),
(21, 'inocencio', 'then', 'ithen@ucateci.edu.do', 'ithen', 'e10adc3949ba59abbe56e057f20f883ezakl05p', 'M', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `u_peliculas`
--

CREATE TABLE `u_peliculas` (
  `ID_PELICULA` int(5) NOT NULL,
  `ID_USUARIO` int(5) NOT NULL,
  `COD_USER` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA_RESERVA` varchar(40) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `u_peliculas`
--

INSERT INTO `u_peliculas` (`ID_PELICULA`, `ID_USUARIO`, `COD_USER`, `FECHA_RESERVA`) VALUES
(1, 3, '1326-11-2016-14:43:47', '26-11-2016-14:43:47'),
(3, 21, '32126-11-2016-15:28:57', '26-11-2016-15:28:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD PRIMARY KEY (`ID_ACCESO`);

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`ID_ADMIN`),
  ADD KEY `ID_ROL` (`ID_ROL`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID_NOTICIA`),
  ADD KEY `ID_ADMIN` (`ID_ADMIN`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`ID_PELICULA`),
  ADD KEY `ID_ADMIN` (`ID_ADMIN`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`ID_PROMOCION`);

--
-- Indices de la tabla `p_salas`
--
ALTER TABLE `p_salas`
  ADD KEY `ID_SALA` (`ID_SALA`),
  ADD KEY `ID_PELICULA` (`ID_PELICULA`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `r_accesos`
--
ALTER TABLE `r_accesos`
  ADD KEY `ID_ROL` (`ID_ROL`),
  ADD KEY `ID_ACCESO` (`ID_ACCESO`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`ID_SALA`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indices de la tabla `u_peliculas`
--
ALTER TABLE `u_peliculas`
  ADD KEY `ID_PELICULA` (`ID_PELICULA`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accesos`
--
ALTER TABLE `accesos`
  MODIFY `ID_ACCESO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `ID_ADMIN` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID_NOTICIA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `ID_PELICULA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `ID_PROMOCION` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID_ROL` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `salas`
--
ALTER TABLE `salas`
  MODIFY `ID_SALA` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`ID_ADMIN`) REFERENCES `administradores` (`ID_ADMIN`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`ID_ADMIN`) REFERENCES `administradores` (`ID_ADMIN`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `p_salas`
--
ALTER TABLE `p_salas`
  ADD CONSTRAINT `p_salas_ibfk_1` FOREIGN KEY (`ID_SALA`) REFERENCES `salas` (`ID_SALA`) ON UPDATE CASCADE,
  ADD CONSTRAINT `p_salas_ibfk_2` FOREIGN KEY (`ID_PELICULA`) REFERENCES `peliculas` (`ID_PELICULA`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `r_accesos`
--
ALTER TABLE `r_accesos`
  ADD CONSTRAINT `r_accesos_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID_ROL`) ON UPDATE CASCADE,
  ADD CONSTRAINT `r_accesos_ibfk_2` FOREIGN KEY (`ID_ACCESO`) REFERENCES `accesos` (`ID_ACCESO`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `u_peliculas`
--
ALTER TABLE `u_peliculas`
  ADD CONSTRAINT `u_peliculas_ibfk_1` FOREIGN KEY (`ID_PELICULA`) REFERENCES `peliculas` (`ID_PELICULA`) ON UPDATE CASCADE,
  ADD CONSTRAINT `u_peliculas_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
