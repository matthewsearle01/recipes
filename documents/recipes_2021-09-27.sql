# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.35)
# Database: recipes
# Generation Time: 2021-09-27 13:23:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table recipe_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `recipe_data`;

CREATE TABLE `recipe_data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `ingredients` text,
  `method` text,
  `imagelink` varchar(500) DEFAULT NULL,
  `cooktime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `recipe_data` WRITE;
/*!40000 ALTER TABLE `recipe_data` DISABLE KEYS */;

INSERT INTO `recipe_data` (`id`, `name`, `ingredients`, `method`, `imagelink`, `cooktime`)
VALUES
	(1,'Tomato & Lentil Soup','1 tbsp coconut oil|2 onions|5 garlic cloves (minced)|1 tbsp fresh grated ginger|1 tbsp ground cumin|pinch cayenne pepper|pinch salt|1 can chopped tomatoes|1 small lemon|1 cup red lentils|4 cups veg broth|maple syrup|coriander leaves / sour cream to serve','Saute oil, onions, garlic & ginger in a deep pan|Add salt, cumin and cayenne pepper|Add chopped tomatoes, lemon, lentils & veg broth|Simmer for 30 mins and add maple syrup to balance flavour|Garnish with coriander & sour cream','https://i.imgur.com/nU5GuvS.png',45),
	(2,'Quinoa Patties','340g cooked quinoa|4 large eggs|1.2 tsp sea salt|15g fresh chives|1 onion|15g grated parmesan or gruyere (feta is also great)|3 garlic cloves|100g wholegrain breadcrumbs|1 tbsp olive oil or 20g butter','Combine the quinoa, eggs and salt in a bowl|Stir in the chives, onion, cheese and garlic|Add the breadcrumbs, stir and set aside|Heat the oil in a pan and spoon out patty size portions|Flatten with a spatula and fry both sides until golden brown|Lovely served with hummus, salad, tomato & mozzerella','https://i.imgur.com/sN96xl0.png',50),
	(3,'Green Bean & Cashew Curry','1 onion|2 red chillies|2 garlic cloves|2cm of grated ginger|1/4 tsp ground turmeric|pinch cinnamon|squirt of lemon juice|100g cashew nuts|1x 440ml tin of coconut milk|250g french beans (chopped)|halloumi|coriander|salt|rice','Place all ingredients in a pan and bring to a simmer|Don\'t let the liquid boil off too much as this is your sauce - keep the lid on|Boil up the rice and mix with the sauce|Nice served with coriander and halloumi|Can also add peppers, mushrooms or courgette (optional)','https://i.imgur.com/xazuUWE.png',40),
	(4,'Black Bean Burgers','2 cans black beans|4 tbsp veg oil|1 onion, finely chopped|1 pepper, finely chopped|3 garlic cloves|1 chipotle chili, finely chopped|3/4 cup roasted cashews|1/2 cup crumbled feta|2 tbsp mayo|1 egg|3/4 cup bread crumbs','Roast beans on a tray until they split open, approx 20 mins|Fry onion, pepper, garlic & chilli|Blend cashews into chunky powder|Once beans have cooled, blend in food processor (or mash them)|Mix in the feta, onion mixture to the beans, add mayo, eggs, breadcrumbs, cashews and salt & pepper.|Split the mixture into burger portions & fry in a little oil until browned|Serve in a brioche bun with avocado, lettuce, cheddar, ketchup, and gherkins!','https://i.imgur.com/oKtWhfz.png',60),
	(5,'Spinach & Mushroom Pearl Barley Risotto','50g mushrooms (shitake are great!)|1 small onion (diced)|1 tsp fresh thyme|1 garlic clove|pearl barley 50g|500ml veg stock|100g spinach|1 tbsp parmesan','Fry mushrooms and set aside|Fry onion and add thyme & garlic|Add barley & stock|Simmer for 30 mins until barley is tender|Finally stir in spinach, parmesan and mushrooms','https://i.imgur.com/BVYuGP9.png',45);

/*!40000 ALTER TABLE `recipe_data` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
