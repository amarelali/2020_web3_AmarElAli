-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 01:45 AM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web3db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `SectionId` int(11) NOT NULL,
  `Images` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `Name`, `SectionId`, `Images`) VALUES
(1, 'Healthy Breakfast', 2, ''),
(2, 'Healthy Dinner', 2, ''),
(3, 'Low Fat', 2, ''),
(4, 'Vegan', 2, ''),
(5, 'Low Soduim', 2, ''),
(6, 'Low Collesterol', 2, ''),
(7, 'Low Calorie', 2, ''),
(8, 'Diabetic', 2, ''),
(9, 'Desserts', 2, ''),
(10, 'Healthy Drinks', 2, ''),
(11, 'Chicken plates', 1, ''),
(12, 'Meat plates', 1, ''),
(13, 'Seafoods', 1, ''),
(14, 'Mezza', 1, ''),
(15, 'Baking', 1, ''),
(16, 'Pasta', 1, ''),
(17, 'Salads', 1, ''),
(18, 'Desserts', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `favoriterecipes`
--

CREATE TABLE `favoriterecipes` (
  `id` int(11) NOT NULL,
  `itemsId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `nameitem` varchar(255) NOT NULL,
  `imageItem` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favoriterecipes`
--

INSERT INTO `favoriterecipes` (`id`, `itemsId`, `userId`, `nameitem`, `imageItem`) VALUES
(1, 3, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `CategorieId` int(11) NOT NULL,
  `Images` varchar(255) CHARACTER SET latin1 NOT NULL,
  `ingredients` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `HowToMakeIt` varchar(10000) NOT NULL,
  `isFavorite` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Id`, `Name`, `CategorieId`, `Images`, `ingredients`, `HowToMakeIt`, `isFavorite`) VALUES
(3, 'Mojo Chicken', 1, 'MojoChicken.jpg', '1/2 cup sour orange juice - \r\n1 tablespoon olive oil -\r\n 1 tablespoon fresh lime juice -\r\n 2 garlic cloves minced-\r\n 1 teaspoon paprika -\r\n1 teaspoon dried oregano -\r\n 1/2 teaspoon salt -\r\n 1/2 teaspoon crushed red chili flakes -\r\n4 bone-in chicken-breast halves skinned', '', 0),
(2, 'Skilled Chicken and mushroom sauce', 1, 'SkilledChicken.jpg', '1 kilo chicken breast - 1/3 cup of flour - Salt and freshly ground black pepper - 2 tablespoons of olive oil - 250 g mushrooms - 2 cloves garlic minced - Butter 2 tbsp - 3 cups of chicken broth - A small spoon of dried oregano thyme - 2 1/2 teaspoon cornstarch - 1 cup grated Parmesan cheese - 1 cup Creamy Cooking - 2 tablespoons of chopped fresh parsley', 'Leave the chicken slices at room temperature for 10 minutes (while collecting and preparing the remaining ingredients). In a shallow dish, whisk flour, 1/4 teaspoon salt and 1/4 teaspoon pepper. Heat olive oil in a 12-inch skillet over medium heat.\r\n\\ Pour both sides of each piece of chicken into the flour mixture, then put in hot oil in a skillet. Cook until golden brown, about 5 minutes.\r\n\\ Stir the chicken and cook on the opposite side, until golden brown in the bottom 6 minutes.\r\nWhile the chicken is tender, melt the butter in a separate skillet over medium heat, then add the mushrooms and garlic and saute until mushrooms start to soften, about 3 minutes.\r\n \\ Once the chicken has been cooked and removed from the pan, leave the pan over medium heat and pour 1 quarter cup of chicken broth into (chicken pan), with brown bites removed from the bottom.\r\n\\ Add the mushroom mixture to the broth in the pan, as well as oregano. Boil the mixture, then reduce it to a medium medium and leave it on low heat until it becomes homogeneous and becomes more dense about half, about 4 - 5 minutes.\r\n\\ Whisk together the remaining 1 tablespoon chicken broth with cornstarch. Pour the chicken broth mixture into the pan and simmer to boil gently, while whisking constantly for one minute.\r\n\\ Add the parmesan and cream and season with pepper to taste and a pinch of salt if necessary, then bring the chicken back to the pan. Garnish with parsley and serve warm mix with sauce . \r\n', 0),
(4, 'Chicken soulvaki', 1, 'ChickenSoulvaki.jpg', '4 pieces flat bread or pitas -\r\n 2 tomatoes cut into wedges -\r\n 1/2 small red onion, thinly sliced -\r\n3/4 cup crumbled Feta -\r\n1/4 cup kalamata olives, pitted -\r\n1 1/2 teaspoons dried oregano -\r\n1 1/2 teaspoons dried thyme -\r\n1/4 teaspoon freshly ground black pepper -\r\n2 1/2 teaspoons red wine vinegar -\r\n1 tablespoon fresh lemon juice -\r\n5 tablespoons extra-virgin olive oil -\r\n4 boneless skinless chicken breasts cut into pieces -\r\n1/2 cup plain yogurt - 1 small cucumber diced -\r\n1 1/2 tablespoons minced fresh dill', '', 0),
(5, 'Chicken Gacciatore', 1, 'ChickenGacciatore.jpg', '1 tablespoon olive oil -\r\n3 garlic cloves smashed -\r\n1 (14 oz.) Spanish onion 1 green bell pepper sliced into 1/2-inch wide strips -\r\n1 yellow bell pepper sliced into 1/2-inch wide strips -\r\n1 (8 oz.) package baby bella mushrooms quartered -\r\n1 (4 lb.) broiler chicken quartered -\r\n1 teaspoon kosher salt Freshly ground black pepper -\r\n1 (28 oz.) can crushed tomatoes -\r\n1/2 pound uncooked rotini \r\n1/4 cup finely chopped fresh parsley Freshly grated Parmesan cheese, for serving', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`Id`, `Name`) VALUES
(1, 'Global'),
(2, 'Diet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `Email`, `Password`) VALUES
(3, 'Amar', 'ELALi', 'amar@gmail.com', '$2y$10$oNLaifvXj1tPt/c.OQ2x1OB.6iWUOaLldOAz1SpbEIZo2ROInXJ.S'),
(4, 'Amar', 'ELALi', 'amar@gmail.com', '$2y$10$CsBQRRvDuaC0N9ywtxvJp.3jX9poCWhTlnUfo1/97bTadnomm5NeS'),
(5, 'Amar', 'mhmd', 'amarmhmd@gmail.com', '$2y$10$tX6YDevXNLFB3P26ovCiLeJ.j62XDiRETJ6GC9EcTDYnXlgzHvv9.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `favoriterecipes`
--
ALTER TABLE `favoriterecipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `favoriterecipes`
--
ALTER TABLE `favoriterecipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
