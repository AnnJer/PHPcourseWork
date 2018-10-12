-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2018 at 06:45 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(4) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `description` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `date`, `title`, `text`, `description`, `img`) VALUES
  (0, '2018-06-14', 'Коржики с корицей и кремом', 'Как приготовить коржики с корицей:\r\n\r\n1. Масло оставить при комнатной температуре до размягчения. Духовку разогреть до температуры 180 градусов. Смазать маслом форму размером 33х22 см.\r\n\r\n2. В миске смешать муку, разрыхлитель и соль, отставить в сторону. В отдельной миске взбить миксером масло в пышную массу. Добавить сахар, снова взбить. Постепенно ввести яйца и ванильный сахар, тщательно перемешать.\r\n\r\n3. Добавить муку с солью и разрыхлителем, перемешать до однородного состояния.\r\n\r\n4. Ложкой выложить половину теста в форму, равномерно распределить.\r\n\r\n5. Смешать ингредиенты для коричной начинки. Посыпать смесью тесто.\r\n\r\n6. Чайной ложкой выложить тесто каплями поверх коричной посыпки.\r\n\r\n7. Выпекать 20-25 минут, до золотистого цвета. Готовность проверить зубочисткой. Охлаждать 1 час.\r\n\r\n8. Смешать все ингредиенты для глазури. Сбрызнуть глазурью корж. Разрезать корж с корицей на 24 коржика.\r\n\r\nПриятного аппетита!                                          ', 'Рецепт приготовления коржиков с корицей и кремом', 'p2.jpg'),
  (1, '2018-05-17', 'Рецепт маффинов с голубикой ', 'Культовая ягода, которую научились производить круглый год, в сочетании с рыхлым тестом — это абсолютно беспроигрышный вариант. Маффины с голубикой (да и не только с этой ягодой) стали популярным десертом в Англии и Америке, хотя происхождение их французское. Да и вообще эти маленькие сладкие кексы, какими мы их знаем сейчас, задумывались как обычный хлеб и на вкус были нейтральны. Сегодня существуют сотни рецептов этой выпечки: дрожжевые или с разрыхлителем, с использованием молока или сметаны, сладкие или соленые, с жидким центром или без. Этот ароматный хлеб хорош во всех своих проявлениях. ', 'Культовая ягода сочетании с рыхлым тестом', 'p1.jpg'),
  (2, '2018-06-10', 'Маффины с бананом ', 'Инструкция приготовления 35 минут Распечатать\r\n\r\n\r\n                        1. Смешать муку, сахар, соль, пряность.\r\n                      \r\n\r\n                        2. Добавить сгущенку, молоко, масло (размягченное), яйцо.\r\n                      \r\n    Шпаргалка\r\n    Как проверить качество яиц\r\n\r\n                        3. Добавить разрыхлитель.\r\n                      \r\n\r\n                        4. Смазать формочки растительным маслом, выложить на них тесто.\r\n                      \r\n    Инструмент\r\n    Силиконовые формы для маффинов\r\n\r\n                        5. Поверх теста в каждой из формочек положить по несколько кружочков банана.\r\n                      \r\n\r\n                        6. Посыпать все это дело тертым белым шоколадом.\r\n                      \r\n\r\n                        7. Поставить противень с формочками в разогретую духовку, выпекать примерно 25 минут при температуре 180 градусов.                                                                                                                              ', 'Рецепт приготовления вкуснейших маффинов с бананом', 'p4.jpg'),
  (3, '2018-05-08', 'Кофейные маффины', '\r\n\r\n                      1. Разогрейте духовку до 190 градусов. Смажьте форму для маффинов маслом или положите в каждое отверстие бумажную формочку.\r\n                      \r\n    Инструмент\r\n    Силиконовые формы для маффинов\r\n\r\n                       \r\n 2. В миске смешайте оба сахара, муку, разрыхлитель, кофе, корицу и соль.\r\n                      \r\n\r\n                        \r\n3. В другой миске слегка взбейте яйцо с размягченным сливочным маслом, молоком и ванилью.\r\n                      \r\n    Шпаргалка\r\n    Как проверить качество яиц\r\n\r\n                        \r\n4. Соедините обе смеси и хорошо перемешайте.\r\n                      \r\n\r\n                       \r\n 5. Добавьте шоколадные чипсы и снова перемешайте.\r\n                      \r\n\r\n                        \r\n6. Наполните формочки на две трети тестом и выпекайте 20-25 минут до готовности, проверяя зубочисткой.\r\n                      \r\n\r\n                        \r\n7. Оставьте в форме на 5 минут, затем переложите на блюдо.\r\n                      \r\n                                                                                    ', 'Великолепны по вкусу - мягкие и тающие маффины с  ', 'p3.jpg'),
  (7, '2018-05-12', 'Ванильные панкейки со згущенкой', '    При желании получить кекс шикарного и аппетитного желтого цвета потребуется дополнительное добавление в тесто желтка, растертого с небольшим количеством соли. Но важно помнить, что перед этим куриное яйцо должно быть в холодильной камере не менее восьми часов.\r\n    Для качественного и полноценного выпекания кексов потребуется температура в пределах 180˚С. Помимо этого, первые 15 минут ни в коем случае нельзя открывать дверцу духового шкафа, поскольку только подошедшее тесто сразу же опустится.\r\n    Для того чтобы качественно нарезать воздушный кекс и не разрушить его, необходимо сразу же после выпекания этим заниматься до охлаждения. Вместо ножа стоит использовать нитку крепкой текстуры.\r\n    Для исключения подгорания десерта стоит в духовой шкаф вместе с пирогом поместить емкость с водой. Данный метод подходит для различного теста.\r\n    При желании сделать десерт более аппетитным и праздничным можно предусмотреть дополнительное украшение, для которого используется различная глазурь, присыпка кондитерского предназначения, мастика, различные фрукты, сахарные фигурки, мармелад. Не стоит лениться, а проявить фантазию, результат которых очень порадует родных и близких.\r\n\r\nКекс является прекрасным лакомством, которое любят не только взрослые, но и дети. А если он дополнен еще и сгущенкой, то невозможно оторваться от чаепития. В приготовлении любой кекс очень прост и занимает мало времени. Поэтому для начинающей молодой хозяйки считается самым лучшим стартом.', 'Испечь  кексы со сгущенкой', 'p5.jpg'),
  (8, '2018-05-09', 'Как приготовить шоколадные кексы', 'Как приготовить шоколадные кексы (маффины):\r\n\r\n1. Яйца оставить при комнатной температуре на 30 минут. Тем временем смазать маслом и присыпать небольшим количеством какао-порошка формочки для маффинов диаметром примерно 7,5 см.\r\n\r\nВключить духовку для предварительного разогрева до 180 градусов.\r\n\r\n2. В небольшой миске смешать муку, какао-порошок, разрыхлитель, соду и соль.\r\n\r\n3. В другой, большой миске взбить маргарин (масло) с сахаром в течение 3-5 минут. Добавить яйца и ваниль, еще раз хорошо взбить.\r\n\r\n4. Продолжая взбивать, постепенно ввести сметану и растопленный шоколад.\r\n\r\n5. Насыпать в эту массу примерно 1/3 муки, перемешать, затем налить половину всего молока, перемешать. Снова муку, затем молоко и опять муку. Хорошо перемешать.\r\n\r\n6. Выложить тесто для шоколадных кексов в подготовленные формочки.\r\n\r\n7. Поместить заготовки в разогретую духовку, выпекать маффины около 25 минут, до чистой деревянной палочки при проколе кекса.', 'Рецепт маффинов', 'p4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
  (1, 'Капкейки'),
  (2, 'Торты'),
  (3, 'Пирожные'),
  (4, 'Багеты');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(6) NOT NULL,
  `type` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmed` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `type`, `name`, `email`, `password`, `confirmed`) VALUES
  (1, 'admin', 'admin', 'example@mail.com', 'b59c67bf196a4758191e42f76670ceba', 1),
  (6, 'customer', 'aaa', 'annjer1006@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(4) NOT NULL,
  `img` varchar(50) NOT NULL,
  `author` varchar(12) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `email` varchar(12) NOT NULL,
  `id_articles` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `img`, `author`, `comment`, `email`, `id_articles`) VALUES
  (1, 't4.jpg', 'Anna', 'This looks lively (especially as I picked up plenty of fresh chestnuts) for Xmas gifts, but how many jars does it make? Thanks in advance for your answer.', '', 2),
  (2, 't3.jpg', 'Nick Udell', '100g butter?! Er, no. I make this regularly and it doesn\'t need to be saturated with fat. 1tbsp oil to cook the onion/paste then when the dish is cooked, a teaspoon or two of butter.', '', 1),
  (3, 't2.jpg', 'Olga', 'These Oreo-filled cheesecake brownies are the ultimate indulgence. Bake this rich, squidgy chocolate traybake for an Easter sharing treat', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fields_meta`
--

CREATE TABLE `fields_meta` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `table_name` varchar(50) NOT NULL,
  `type` enum('text','email','disabled','file','password','date','number','bigText') NOT NULL,
  `caption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fields_meta`
--

INSERT INTO `fields_meta` (`id`, `name`, `table_name`, `type`, `caption`) VALUES
  (1, 'id', 'clients', 'disabled', 'Id'),
  (2, 'type', 'clients', 'text', 'Type'),
  (3, 'name', 'clients', 'text', 'Name'),
  (4, 'email', 'clients', 'email', 'Email'),
  (5, 'password', 'clients', 'password', 'Password'),
  (6, 'confirmed', 'clients', 'disabled', 'Сonfirmation'),
  (7, 'id', 'articles', 'disabled', 'Id'),
  (8, 'date', 'articles', 'date', 'Date'),
  (9, 'title', 'articles', 'text', 'Title'),
  (10, 'text', 'articles', 'bigText', 'Text'),
  (11, 'img', 'articles', 'file', 'Image'),
  (12, 'id', 'category', 'disabled', 'Id'),
  (13, 'name', 'category', 'text', 'Name'),
  (14, 'id', 'orders', 'disabled', 'Id'),
  (15, 'id_client', 'orders', 'number', 'Client'),
  (16, 'id_products', 'orders', 'number', 'Id_products'),
  (17, 'amount', 'orders', 'number', 'Amount'),
  (18, 'date', 'orders', 'date', 'Date'),
  (19, 'adress', 'orders', 'text', 'Adress'),
  (20, 'status', 'orders', 'text', 'Status'),
  (21, 'id', 'products', 'disabled', 'Id'),
  (22, 'name', 'products', 'text', 'Name'),
  (23, 'price', 'products', 'number', 'Price'),
  (24, 'img', 'products', 'file', 'Image'),
  (25, 'id_category', 'products', 'number', 'Id_category'),
  (26, 'amount', 'products', 'number', 'Amount'),
  (27, 'description', 'articles', 'text', 'Description');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(3) NOT NULL,
  `id_client` int(6) DEFAULT NULL,
  `id_products` int(6) NOT NULL,
  `amount` int(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adress` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_client`, `id_products`, `amount`, `date`, `adress`, `status`, `phone`) VALUES
  (1, NULL, 1, 10, '2018-06-05 21:39:41', NULL, NULL, '25'),
  (3, NULL, 1, 1, '2018-06-05 21:40:11', NULL, NULL, '456'),
  (4, NULL, 2, 1, '2018-06-05 21:40:11', NULL, NULL, '456'),
  (5, NULL, 1, 3, '2018-06-05 21:41:49', NULL, NULL, '1111'),
  (6, NULL, 2, 1, '2018-06-05 21:41:49', NULL, NULL, '1111'),
  (7, NULL, 1, 3, '2018-06-06 01:01:35', NULL, NULL, '+38(096)849-0218');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `id_category` int(6) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `id_category`, `amount`) VALUES
  (1, 'Капкейки «Шоколадные»', 12, '1.jpg', 1, 20),
  (2, 'Капкейки \"Ванильные\"', 11, 'ab.jpg', 1, 30),
  (3, 'Капкейки с голубикой', 15, '150615095301-1.jpg', 1, 15),
  (4, 'Торт \"Тропический\"', 42, 'p3.jpg', 2, 5),
  (5, 'Карамельный торт', 56, '5.jpg', 2, 10),
  (6, 'Торт «Прага» с абрикосовым джемом', 25, '305.jpg', 2, 10),
  (7, '\r\nТорт «Черный Лес»', 45, '713.jpg', 2, 3),
  (8, '\r\nТорт «Семифредо» с малиной и клубникой', 48, '2136.jpg', 2, 12),
  (9, '\r\nПирожное \"Картошка\" из бисквита', 9, 'pirojnoe_quotkartoshkaquot_iz_biskvita-277430.jpg', 3, 50),
  (10, 'Шоколадное пирожное с теплым шоколадным соусом', 6, 'chocolatecreamcakes1.jpg', 3, 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_articles` (`id_articles`);

--
-- Indexes for table `fields_meta`
--
ALTER TABLE `fields_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_products` (`id_products`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



