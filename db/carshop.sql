-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2021 г., 12:31
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
(10, 5, 72000, 0x31, 3),
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
(42, 'Nissan', 'Leaf', 170);

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
(4, 'Denis', '08328fb45f8471397ca6142961fa4c13', 0x30, '2021-12-08 22:35:24');

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
-- AUTO_INCREMENT для таблицы `models`
--
ALTER TABLE `models`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
