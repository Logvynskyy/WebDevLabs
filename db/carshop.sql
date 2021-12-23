-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 19 2021 г., 21:28
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `carshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `ID` int NOT NULL,
  `Name` int NOT NULL,
  `Price` float NOT NULL,
  `isNew` binary(1) NOT NULL DEFAULT '1',
  `Owner` int DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`ID`, `Name`, `Price`, `isNew`, `Owner`) VALUES
(1, 1, 24000, 0x31, 3),
(2, 2, 47000, 0x30, 3),
(3, 3, 77000, 0x31, 3),
(4, 4, 71000, 0x30, 3),
(5, 5, 33000, 0x30, 3),
(6, 6, 17000, 0x31, 3),
(7, 7, 25000, 0x31, 3),
(8, 8, 13000, 0x31, 3),
(9, 6, 40000, 0x30, 3),
(11, 4, 76000, 0x30, 3),
(12, 10, 78000, 0x30, 3),
(13, 15, 75000, 0x30, 3),
(14, 11, 11000, 0x31, 3),
(15, 11, 33500, 0x31, 3),
(16, 14, 75600, 0x30, 3),
(17, 3, 63500, 0x31, 3),
(18, 4, 36900, 0x31, 3),
(19, 1, 52000, 0x30, 3),
(20, 2, 41000, 0x30, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `car_info`
--

CREATE TABLE `car_info` (
  `ID` int NOT NULL,
  `Info` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `car_info`
--

INSERT INTO `car_info` (`ID`, `Info`, `img`) VALUES
(1, 'Максимальная скорость, км/ч: 250 Объем двигателя: 2,925 Разгон 1–100 км/ч, с.: 6,2 Салон: Кожа наппа \"Эксклюзив\" алая/черная Тип топлива: Дизель Цвет: Черный', 'https://avtomarket.ru/stuff/gallery/11433/250x-/b_170159.jpg');
(2, 'Cреднеразмерный кроссовер компании Volkswagen, производится с 2002 года. В настоящее время автомобиль выпускают на заводе Volkswagen в Братиславе (и ранее в Калуге). Touareg стал третьим внедорожником в истории марки после Volkswagen Тур 82 (Kübelwagen) и Volkswagen Iltis.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/VW_Touareg_3.0_TDI_V6_SCR_4Motion_Facelift.JPG/1024px-VW_Touareg_3.0_TDI_V6_SCR_4Motion_Facelift.JPG');
(3, 'Люксовый компактный кроссовер немецкой компании BMW. X3 первого поколения разработан и выпускался совместно с компанией Magna Steyr на заводе в Граце, Австрия. Второе поколение кроссовера было представлено в июле 2010 года, производство автомобиля началось 1 сентября 2010 года. По состоянию на июль 2010 года во всём мире было продано порядка 600 000 экземпляров BMW X3.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/2018_BMW_X3_xDrive30d_M_Sport_Automatic_3.0_Front.jpg/305px-2018_BMW_X3_xDrive30d_M_Sport_Automatic_3.0_Front.jpg');
(4, 'Это полноразмерный роскошный внедорожник , построенный подразделением роскошных автомобилей Nissan Infiniti . QX80 имеет общую платформу с полноразмерным внедорожником серии Y62 Nissan Patrol , также известным в Северной Америке как Nissan Armada .Википедия  site:etnowiki.ru', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/2018_Infiniti_QX80_front_4.2.18.jpg/280px-2018_Infiniti_QX80_front_4.2.18.jpg');
(5, 'На Детройтском автосалоне 2013 года Ford показал прообраз пикапа F-150 следующего поколения — концепт Atlas. Кроме изменённой внешности новое семейство грузовиков Ford получит экономичные моторы семейства EcoBoost, элементы активной аэродинамики и функциональные приспособления.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Ford_F-150_Bauval.png/305px-Ford_F-150_Bauval.png');
(6, 'Двухместный заднеприводный спортивный автомобиль, выпускаемый под маркой Chevrolet компанией General Motors в США с 1953 года. Автомобиль является первым американским спортивным автомобилем, созданным американским производителем.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Chevrolet_Corvette_C8_Stingray_blue.jpg/305px-Chevrolet_Corvette_C8_Stingray_blue.jpg');
(7, '11 ноября 2019 года в Праге состоялась презентация Škoda Octavia четвёртого поколения. В конце ноября 2019-го на заводе в чешском Млада-Болеславе началось серийное производство. Новинка по-прежнему использует модульную платформу MQB концерна Volkswagen AG, с сохранением длины колёсной базы.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Skoda_Octavia_IV_liftback.jpg/305px-Skoda_Octavia_IV_liftback.jpg');
(8, 'Пятиместный среднеразмерный спортивный кроссовер производства немецкой автомобилестроительной компании Porsche. Автомобиль создан при активном участии концерна Volkswagen.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Porsche_Cayenne_S_%2892A%29_%E2%80%93_Frontansicht%2C_10._Oktober_2011%2C_W%C3%BClfrath.jpg/305px-Porsche_Cayenne_S_%2892A%29_%E2%80%93_Frontansicht%2C_10._Oktober_2011%2C_W%C3%BClfrath.jpg');
(9, 'Это полноразмерный роскошный внедорожник , построенный подразделением роскошных автомобилей Nissan Infiniti . QX80 имеет общую платформу с полноразмерным внедорожником серии Y62 Nissan Patrol , также известным в Северной Америке как Nissan Armada .Википедия  site:etnowiki.ru', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/2018_Infiniti_QX80_front_4.2.18.jpg/280px-2018_Infiniti_QX80_front_4.2.18.jpg');
(10, 'Это компактный кроссовер сегмента «люкс», производства британской автомобильной компании Jaguar Land Rover. Четвертая модель в линейке Range Rover', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/2017_Land_Rover_Range_Rover_Velar_First_Edition_D3_3.0_Front.jpg/305px-2017_Land_Rover_Range_Rover_Velar_First_Edition_D3_3.0_Front.jpg');
(11, 'Компактный престижный кроссовер, выпускающийся британской компанией Jaguar Cars с 2016 года, первый кроссовер компании. Впервые был представлен на Североамериканском международном автосалоне в Детройте в январе 2015 года, затем также на Франкфуртском автосалоне в сентябре того же года.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Jaguar_F-Pace_%28front_3-4%29.JPG/305px-Jaguar_F-Pace_%28front_3-4%29.JPG');
(12, 'Автомобиль бизнес-класса с кузовом типа седан, выпускаемый японским автопроизводителем Lexus с 1989 года. Автомобиль собирается на заводе в Японии, расположенном на острове Кюсю. Автомобиль имеет общую платформу с моделью Toyota Avalon.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Lexus_ES_Hybrid_Filderstadt_1Y7A4892.jpg/305px-Lexus_ES_Hybrid_Filderstadt_1Y7A4892.jpg');
(13, 'Автомобиль бизнес-класса с кузовом типа седан, выпускаемый японским автопроизводителем Lexus с 1989 года. Автомобиль собирается на заводе в Японии, расположенном на острове Кюсю. Автомобиль имеет общую платформу с моделью Toyota Avalon.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Lexus_ES_Hybrid_Filderstadt_1Y7A4892.jpg/305px-Lexus_ES_Hybrid_Filderstadt_1Y7A4892.jpg');
(14, 'Кроссовер от компании Maserati, который был официально представлен в 2011 году на автосалоне во Франкфурте как концепт-кар под названием Maserati Kubang, позже серийная модель, дебютировавшая на автосалоне в Женеве в марте 2016 года, получила название Levante.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/20170416_081_chokier.jpg/305px-20170416_081_chokier.jpg');
(15, 'Люксовый компактный кроссовер немецкой компании BMW. X3 первого поколения разработан и выпускался совместно с компанией Magna Steyr на заводе в Граце, Австрия. Второе поколение кроссовера было представлено в июле 2010 года, производство автомобиля началось 1 сентября 2010 года. По состоянию на июль 2010 года во всём мире было продано порядка 600 000 экземпляров BMW X3.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/2018_BMW_X3_xDrive30d_M_Sport_Automatic_3.0_Front.jpg/305px-2018_BMW_X3_xDrive30d_M_Sport_Automatic_3.0_Front.jpg');
(16, 'Это полноразмерный роскошный внедорожник , построенный подразделением роскошных автомобилей Nissan Infiniti . QX80 имеет общую платформу с полноразмерным внедорожником серии Y62 Nissan Patrol , также известным в Северной Америке как Nissan Armada .Википедия  site:etnowiki.ru', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/2018_Infiniti_QX80_front_4.2.18.jpg/280px-2018_Infiniti_QX80_front_4.2.18.jpg');
(17, 'Флагманская серия представительских автомобилей немецкой компании Mercedes-Benz, дочернего подразделения концерна Daimler AG. Представляет собой наиболее значимую линейку моделей в иерархии классов торговой марки.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Mercedes-Benz_S_500_%28W222%29_front_view.jpg/1024px-Mercedes-Benz_S_500_%28W222%29_front_view.jpg');
(18, 'Cреднеразмерный кроссовер компании Volkswagen, производится с 2002 года. В настоящее время автомобиль выпускают на заводе Volkswagen в Братиславе (и ранее в Калуге). Touareg стал третьим внедорожником в истории марки после Volkswagen Тур 82 (Kübelwagen) и Volkswagen Iltis.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/VW_Touareg_3.0_TDI_V6_SCR_4Motion_Facelift.JPG/1024px-VW_Touareg_3.0_TDI_V6_SCR_4Motion_Facelift.JPG');



-- --------------------------------------------------------

--
-- Структура таблицы `models`
--

CREATE TABLE `models` (
  `ID` int NOT NULL,
  `Manufacturer` varchar(20) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Horse Power` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `models`
--

INSERT INTO `models` (`ID`, `Manufacturer`, `Model`, `Horse Power`) VALUES
(1, 'Mercedes-Benz', 'S-Class', 435),
(2, 'Volkswagen', 'Touareg', 249),
(3, 'BMW', 'X3', 198),
(4, 'Infiniti', 'QX80', 400),
(5, 'Ford', 'F-150', 430),
(6, 'Porsche', 'Cayenne', 249),
(7, 'Chevrolet', 'Corvette', 850),
(8, 'Skoda', 'Octavia', 160),
(9, 'Toyota', 'Land Cruiser 300', 249),
(10, 'Land Rover', 'Range Rover Velar', 320),
(11, 'Lexus', 'ES', 198),
(12, 'Volvo', 'XC60', 200),
(13, 'Tesla', 'Model X', 500),
(14, 'Maserati', 'Levante', 400),
(15, 'Jaguar', 'F-Pace', 480),
(16, 'KIA', 'Picanto', 110),
(17, 'Audi', 'Q7', 249),
(18, 'Hyundai', 'Elantra', 180),
(19, 'Subaru', 'Impreza WRX STI', 270),
(20, 'Mitsubishi', 'ASX', 150),
(21, 'Nissan', 'Juke', 200),
(22, 'Mercedes-Benz', 'Sprinter', 205),
(23, 'Volkswagen', 'Passat', 180),
(24, 'BMW', 'M8', 640),
(25, 'Infiniti', 'QX70', 215),
(26, 'Ford', 'Mondeo', 190),
(27, 'Porsche', 'Taycan', 680),
(28, 'Chevrolet', 'Aveo', 90),
(29, 'Skoda', 'Kodiaq', 220),
(30, 'Toyota', 'Camry', 301),
(31, 'Land Rover', 'Discovery', 249),
(32, 'Lexus', 'LX', 310),
(33, 'Volvo', 'V90', 195),
(34, 'Tesla', 'Model S Plaid', 1100),
(35, 'Maserati', 'Ghibli', 350),
(36, 'Jaguar', 'XF', 310),
(37, 'KIA', 'Sorento', 199),
(38, 'Audi', 'A6', 290),
(39, 'Hyundai', 'Accent', 120),
(40, 'Subaru', 'Outback', 188),
(41, 'Mitsubishi', 'Lancer', 190),
(42, 'Nissan', 'Leaf', 170),
(43, 'Alpine', 'CB2', 250);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `ID` int NOT NULL,
  `CarID` int NOT NULL,
  `UserID` int NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAdmin` binary(1) NOT NULL DEFAULT '0',
  `Date of registration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Name`, `Password`, `isAdmin`, `Date of registration`) VALUES
(1, 'Stas', '1a28a8462585778b4656ae03a2c18b2d', 0x30, '2021-12-08 14:58:44'),
(2, 'Dima', '1a28a8462585778b4656ae03a2c18b2d', 0x30, '2021-12-08 15:01:39'),
(3, 'Салон', '123', 0x31, '2021-12-08 22:20:36'),
(4, 'Denis', '08328fb45f8471397ca6142961fa4c13', 0x30, '2021-12-08 22:35:24'),
(5, 'test', 'e1c6fca3c86ec6518cf5be7be2d3b415', 0x30, '2021-12-16 13:19:59'),
(6, 'qwer', '08328fb45f8471397ca6142961fa4c13', 0x30, '2021-12-16 19:55:11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Cars_fk0` (`Name`),
  ADD KEY `Cars_fk1` (`Owner`);

--
-- Индексы таблицы `car_info`
--
ALTER TABLE `car_info`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Orders_fk0` (`CarID`),
  ADD KEY `Orders_fk1` (`UserID`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `car_info`
--
ALTER TABLE `car_info`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `models`
--
ALTER TABLE `models`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `Cars_fk0` FOREIGN KEY (`Name`) REFERENCES `models` (`ID`),
  ADD CONSTRAINT `Cars_fk1` FOREIGN KEY (`Owner`) REFERENCES `users` (`ID`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Orders_fk0` FOREIGN KEY (`CarID`) REFERENCES `cars` (`ID`),
  ADD CONSTRAINT `Orders_fk1` FOREIGN KEY (`UserID`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
