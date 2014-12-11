CREATE DATABASE  IF NOT EXISTS `pets_schema` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pets_schema`;
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: pets_schema
-- ------------------------------------------------------
-- Server version	5.5.38

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'admin@pets.com','password','2014-12-08 20:30:05','2014-12-08 20:30:05');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'exotic'),(2,'indoor'),(3,'outdoor'),(4,'feline'),(5,'reptile'),(6,'aquatic'),(7,'prehistoric'),(8,'bird'),(9,'mammal'),(10,'insect');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_has_items`
--

DROP TABLE IF EXISTS `categories_has_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_has_items` (
  `category_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`item_id`),
  KEY `fk_categories_has_items_items1_idx` (`item_id`),
  KEY `fk_categories_has_items_categories1_idx` (`category_id`),
  CONSTRAINT `fk_categories_has_items_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_categories_has_items_items1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_has_items`
--

LOCK TABLES `categories_has_items` WRITE;
/*!40000 ALTER TABLE `categories_has_items` DISABLE KEYS */;
INSERT INTO `categories_has_items` VALUES (2,1),(3,1),(9,1),(1,2),(3,2),(9,2),(1,3),(3,3),(9,3),(3,4),(5,4),(7,4),(2,5),(3,5),(6,5),(3,6),(9,6),(2,7),(10,7),(2,8),(5,8),(3,9),(8,9),(2,10),(5,10),(1,11),(3,11),(9,11),(2,12),(3,12),(9,12),(2,13),(5,13),(3,14),(6,14),(9,14),(3,15),(9,15),(2,16),(5,16),(2,17),(3,17),(4,17),(9,17),(2,18),(3,18),(9,18),(3,19),(6,19),(9,19),(2,20),(3,20),(6,20),(3,21),(9,21),(3,22),(9,22),(2,23),(3,23),(8,23),(2,24),(3,24),(9,24),(2,25),(3,25),(9,25),(2,26),(3,26),(9,26),(1,27),(3,27),(9,27),(1,28),(2,28),(3,28),(5,28),(1,29),(2,29),(3,29),(9,29),(1,30),(3,30),(5,30),(7,30),(1,31),(3,31),(4,31),(9,31);
/*!40000 ALTER TABLE `categories_has_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_informations`
--

DROP TABLE IF EXISTS `customer_informations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_informations` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `fk_customer_informations_customers_idx` (`customer_id`),
  CONSTRAINT `fk_customer_informations_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_informations`
--

LOCK TABLES `customer_informations` WRITE;
/*!40000 ALTER TABLE `customer_informations` DISABLE KEYS */;
INSERT INTO `customer_informations` VALUES (1,'Chris','Jaglois','12345 Test Street','Bellevue','WA','98004','2014-12-10 20:30:05'),(2,'Michael','Jordan','999 CodingDojo Lane','Seattle','WA','98111','2014-12-10 20:30:05'),(3,'Larry','Bird','9876 Countdown Street','Seattle','WA','98112','2014-12-10 20:30:05'),(4,'Gary','Payton','65656 Rainier Ave','Seattle','WA','98121','2014-12-10 20:30:05'),(5,'Magic','Johnson','722 Magic Lane','Los Angeles','CA','87976','2014-12-10 20:30:05'),(6,'Tiger','Woods','79834 Sunny St','NYC','NY','89127','2014-12-10 20:30:05'),(7,'Michael','Jackson','666 Thriller Street','Pasadena','CA','78394','2014-12-10 20:30:05'),(8,'Arnold','Schwarzenegger','6374 Gettothechoppa','Redmond','WA','98012','2014-12-10 20:30:05'),(9,'Donald','Trump','1234 Cool Hair Ln','Hollywood','CA','87932','2014-12-10 20:30:05'),(10,'Tom','Cruise','9086 Scientology Street','Bothell','WA','98011','2014-12-10 20:30:05'),(11,'Herdy','Picklepants','123 Main Street','Anytown','WA','98004','2014-12-11 01:01:46'),(12,'Chucky','Chuckles','456 Main Street','Anytown','WA','98007','2014-12-11 01:11:22'),(13,'Joe','Beable','789 Plain St','Anywhere','MN','72931','2014-12-11 02:34:59'),(14,'Bailey','Stevens','430 Long St','Townsville','WA','98001','2014-12-11 03:12:35'),(15,'Rea','Omalt','230 Sandy Street','River City','WA','98002','2014-12-11 03:39:11'),(16,'Amy','Violet','999 R Street','San ','CA','90001','2014-12-11 03:51:12');
/*!40000 ALTER TABLE `customer_informations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'testing@test.com','password','2014-12-10 20:30:05','2014-12-10 20:30:05'),(2,'mj@air.com','password','2014-12-10 19:00:05','2014-12-10 20:30:05'),(3,'larry@bird.com','password','2014-12-10 19:00:05','2014-12-10 20:30:05'),(4,'gary@payton.com','password','2014-12-10 19:00:26','2014-12-10 20:30:05'),(5,'magic@johnson.com','password','2014-12-10 19:00:39','2014-12-10 20:30:05'),(6,'tiger@woods.com','password','2014-12-10 19:00:52','2014-12-10 20:30:05'),(7,'michael@jackson.com','password','2014-12-10 19:01:01','2014-12-10 20:30:05'),(8,'arnold@schwarzenegger.com','password','2014-12-10 19:01:15','2014-12-10 20:30:05'),(9,'donald@trump.com','password','2014-12-10 19:01:25','2014-12-10 20:30:05'),(10,'tom@cruise.com','password','2014-12-10 19:01:37','2014-12-10 20:30:05'),(11,'test@test.com','5f4dcc3b5aa765d61d8327deb882cf99','2014-12-11 01:01:46','2014-12-11 01:01:46'),(12,'test1@test.com','5f4dcc3b5aa765d61d8327deb882cf99','2014-12-11 01:11:22','2014-12-11 01:11:22'),(13,'test2@test.com','5f4dcc3b5aa765d61d8327deb882cf99','2014-12-11 02:34:59','2014-12-11 02:34:59'),(14,'test3@test.com','5f4dcc3b5aa765d61d8327deb882cf99','2014-12-11 03:12:35','2014-12-11 03:12:35'),(15,'test4@test.com','5f4dcc3b5aa765d61d8327deb882cf99','2014-12-11 03:39:11','2014-12-11 03:39:11'),(16,'test5@test.com','5f4dcc3b5aa765d61d8327deb882cf99','2014-12-11 03:51:12','2014-12-11 03:51:12');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text,
  `image_url` varchar(255) DEFAULT NULL,
  `inventory_count` int(11) DEFAULT NULL,
  `total_sold` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Chumlee',9000000.00,'This is Chumlee, an extremely athletic looking creature. He is lazy and eats a lot of food.','/assets/images/chumlee.jpg',1,0),(2,'Tarsier',9000.00,'Tarsiers are haplorrhine primates of the family Tarsiidae, which is itself the lone extant family within the infraorder Tarsiiformes. Although the group was once more widespread, all the species living today are found in the islands of Southeast Asia.','/assets/images/tarsier.jpg',10,3),(3,'Giraffe',9000.00,'The giraffe (Giraffa camelopardalis) is an African even-toed ungulate mammal, the tallest living terrestrial animal and the largest ruminant. Its species name refers to its camel-like appearance and the patches of color on its fur. \n\nThe giraffe\'s scattered range extends from Chad in the north to South Africa in the south, and from Niger in the west to Somalia in the east. Giraffes usually inhabit savannas, grasslands, and open woodlands. Their primary food source is acacia leaves, which they browse at heights most other herbivores cannot reach. Giraffes are preyed on by lions; their calves are also targeted by leopards, spotted hyenas, and wild dogs. Adult giraffes do not have strong social bonds, though they do gather in loose aggregations if they happen to be moving in the same general direction. Males establish social hierarchies through \"necking\", which are combat bouts where the neck is used as a weapon. Dominant males gain mating access to females, which bear the sole responsibility for raising the young.','/assets/images/giraffe.jpg',15,3),(4,'Triceratops',500000.00,'Triceratops (three-horned face in Greek\") is a genus of herbivorous ceratopsid dinosaur that first appeared during the late Maastrichtian stage of the late Cretaceous period, about 68 million years ago (Mya) in what is now North America. It is one of the last known non-avian dinosaur genera, and became extinct in the Cretaceous–Paleogene extinction event 66 million years ago.[1] The term Triceratops, which literally means \"three-horned face\", is derived from the Greek τρί- (tri-) meaning \"three\", κέρας (kéras) meaning \"horn\", and ὤψ (ops) meaning \"face\".[2][3]\n\nBearing a large bony frill and three horns on its large four-legged body, and conjuring similarities with the modern rhinoceros, Triceratops is one of the most recognizable of all dinosaurs and the best known ceratopsid. It shared the landscape with and was probably preyed upon by the fearsome Tyrannosaurus,[4] though it is less certain that the two did battle in the manner often depicted in traditional museum displays and popular images.','/assets/images/triceratops.jpg',2,1),(5,'Jellyfish',1000.00,'Jellyfish or jellies[1] are the major non-polyp form of individuals of the phylum Cnidaria. They are typified as free-swimming marine animals consisting of a gelatinous umbrella-shaped bell and trailing tentacles. The bell can pulsate for locomotion, while stinging tentacles can be used to capture prey.\n\nJellyfish are found in every ocean, from the surface to the deep sea. Scyphozoans are exclusively marine, but some hydrozoans live in freshwater. Large, often colorful, jellyfish are common in coastal zones worldwide. Jellyfish have roamed the seas for at least 500 million years,[2] and possibly 700 million years or more, making them the oldest multi-organ animal.[3]','/assets/images/seanettlejellyfish.jpg',1000,5),(6,'Pygmy Goat',500.00,'A pygmy goat is a breed of miniature domestic goat. Pygmy goats tend to be kept as pets primarily, though also work well as milk producers and working animals. The pygmy goat is quite hardy, an asset in a wide variety of settings, and can adapt to virtually all climates.[1]','/assets/images/pygmygoat.jpg',43,1),(7,'Cobalt Blue Tarantula',700.00,'The cobalt blue tarantula is a medium size tarantula with a leg span of approximately 13 cm (5\"). The cobalt blue tarantula is noted for its iridescent blue legs and light gray prosoma and opisthosoma, the latter of which may contain darker gray chevrons.[1] Males and females look the same until the ultimate (final) molt of the males. At this point the male will exhibit sexual dimorphism in the form of a light tan or bronze coloration and legginess. Additionally males will gain embolus on the pedipalps and tibial apophysis (mating hooks). The female will eventually become larger than the male and live years longer than the male.[2] The cobalt blue tarantula is a fossorial species and spends nearly all of its time in deep burrows of its own construction. The cobalt blue tarantula inhabits the tropical rain forests of southeast Asia.[3] Here they construct deep burrows, and generally only leave them to find food.','/assets/images/bluetarantula.jpg',15,12),(8,'King Cobra',3000.00,'The king cobra (Ophiophagus hannah) is an elapid found predominantly in forests from India through Southeast Asia. This species is the world\'s longest venomous snake, with a length up to 18.5 to 18.8 ft (5.6 to 5.7 m).[1] Despite the word \"cobra\" in its common name, this snake is not a member of the Naja genus (\"true cobras\"), which contains most cobra species, but the sole member of its own genus. It preys chiefly on other snakes and occasionally on some other vertebrates, such as lizards and rodents. The king cobra is considered to be a dangerous snake and has a fearsome reputation in its range,[2][3][4] although it typically avoids confrontation with humans if possible.[2] It is also considered culturally significant and has many superstitions around it.[5]','/assets/images/kingcobra.jpg',10,4),(9,'Harpy Eagle',4000.00,'The harpy eagle (Harpia harpyja) is a Neotropical species of eagle. It is sometimes known as the American harpy eagle to distinguish it from the Papuan eagle which is sometimes known as the New Guinea harpy eagle or Papuan harpy eagle.[3] It is the largest and most powerful raptor found in the Americas,[4] and among the largest extant species of eagles in the world. It usually inhabits tropical lowland rainforests in the upper (emergent) canopy layer. Destruction of its natural habitat has seen it vanish from many parts of its former range, and it is nearly extirpated in Central America. In Brazil, the harpy eagle is also known as royal-hawk (in Portuguese: gavião-real).[5]\n','/assets/images/harpyeagle.jpg',3,8),(10,'Green Monkey Frog',450.00,'The Monkey frog lives in the Amazon Basin in South America, and can be found in Venezuela, Brazil, Colombia, Peru, Bolivia, and the Guianas. It lives from 0 to 800 meters (2600 feet) above sea level. As you can guess by its name, the Monkey frog likes to climb, and is part of the tree frog family. You can find it in sitting in trees well above the ground in warm tropical rainforest. It has also been found living in drier \'cerrado\' forest in Brazil.  Monkey frogs have a special talent: they produce a waxy poisonous substance which they spread over their skin. It tastes nasty to predators, so it reduces their chances of being eaten. Some Amazonian tribes (the Matses and Mayoruna peoples) living in the rainforest use this poison to heighten their senses and improve their luck when they go hunting, although it does also make them feel very unwell. People are becoming interested in the chemicals found in the poison, in case it is useful for medicine.','/assets/images/greenmonkeyfrog.jpg',23,1),(11,'Elephant',23000.00,'Elephants are large mammals of the family Elephantidae and the order Proboscidea. Male African elephants are the largest surviving terrestrial animals and can reach a height of 4 m (13 ft) and weigh 7,000 kg (15,000 lb). All elephants have several distinctive features the most notable of which is a long trunk or proboscis, used for many purposes, particularly breathing, lifting water and grasping objects. Their incisors grow into tusks, which can serve as weapons and as tools for moving objects and digging. Elephants\' large ear flaps help to control their body temperature. ncave backs while Asian elephants have smaller ears and convex or level backs.\n\nElephants are herbivorous and can be found in different habitats including savannahs, forests, deserts and marshes. They prefer to stay near water. They are considered to be keystone species due to their impact on their environments. Other animals tend to keep their distance, predators such as lions, tigers, hyenas and wild dogs usually target only the young elephants (or \"calves\"). Females (\"cows\") tend to live in family groups, which can consist of one female with her calves or several related females with offspring. The groups are led by an individual known as the matriarch, often the oldest cow. Elephants use infrasound, and seismic communication over long distances.','/assets/images/elephant.jpeg',13,22),(12,'Albino Squirrel',400.00,'Olney, Illinois, known as the \"White Squirrel Capital of the World\", is home of the world\'s largest known white squirrel colony. These squirrels have the right of way on all streets in the town, with a $500 fine for hitting one. The Olney Police Department features the image of a white squirrel on its officers\' uniform patches.[44] One of the ways that squirrels impact human society is inspired by the fascination that people seem to have over local populations of white squirrels (often misidentified as being albino).[41] This manifests itself by the creation of social group communities that form from a commonly shared interest in these rare animals. Other impacts on human society inspired by white squirrels include the creation of organizations that seek to protect them from human predation, and the use of the white squirrel image as a cultural icon.\n\nAlthough these squirrels are commonly referred to as \"albinos\", most of them are likely non-albino squirrels that exhibit a rare white fur coloration known as leucism that is as a result of a recessive gene found within certain Eastern gray squirrel (Sciurus carolinensis) populations, and so technically they ought to be referred to as white squirrels, instead of albino.[41][42]\n','/assets/images/albino_squirell.jpg',19,2),(13,'Chameleon',600.00,'Chameleons or chamaeleons (family Chamaeleonidae) are a distinctive and highly specialized clade of lizards. The approximately 180 species of chameleon come in a range of colors, and many species have the ability to change colors. Chameleons are distinguished by their zygodactylous feet; their very long, highly modified, rapidly extrudable tongues; their swaying gait; and crests or horns on their distinctively shaped heads. Most species, the larger ones in particular, also have a prehensile tail. Chameleons\' eyes are independently mobile, but in aiming at a prey item, they focus forward in coordination, affording the animal stereoscopic vision. Chameleons are adapted for climbing and visual hunting. They are found in warm habitats that range from rain forest to desert conditions, various species occurring in Africa, Madagascar, southern Europe, and across southern Asia as far as Sri Lanka. They also have been introduced to Hawaii, California, and Florida, and often are kept as household pets.','/assets/images/chameleon.jpg',11,0),(14,'Dolphin',3500.00,'Dolphins are cetacean mammals closely related to whales and porpoises. There are almost forty species of dolphin in 17 genera. They vary in size from 1.2 m (4 ft) and 40 kg (90 lb) (Maui\'s dolphin), up to 9.5 m (30 ft) and 10 tonnes (9.8 long tons; 11 short tons) (the orca or killer whale). They are found worldwide, mostly in the shallower seas of the continental shelves and are carnivores, eating mostly fish and squid. The family Delphinidae, the largest in the order Cetacea, evolved relatively recently, about ten million years ago during the Miocene. A group of dolphins is called a \"school\" or a \"pod\". Male dolphins are called \"bulls\", females \"cows\" and young dolphins are called \"calves\".[13]','/assets/images/dolphin.jpg',21,18),(15,'Horse',2000.00,'The horse (Equus ferus caballus)[2][3] is one of two extant subspecies of Equus ferus. It is an odd-toed ungulate mammal belonging to the taxonomic family Equidae. The horse has evolved over the past 45 to 55 million years from a small multi-toed creature into the large, single-toed animal of today. Humans began to domesticate horses around 4000 BC, and their domestication is believed to have been widespread by 3000 BC. Horses in the subspecies caballus are domesticated, although some domesticated populations live in the wild as feral horses. These feral populations are not true wild horses, as this term is used to describe horses that have never been domesticated, such as the endangered Przewalski\'s horse, a separate subspecies, and the only remaining true wild horse. There is an extensive, specialized vocabulary used to describe equine-related concepts, covering everything from anatomy to life stages, size, colors, markings, breeds, locomotion, and behavior.','/assets/images/horse.jpeg',31,28),(16,'Iguana',200.00,'Iguana (/ɪˈɡwɑːnə/,[1][2] Spanish: [iˈɣwana]) is a genus of herbivorous lizards native to tropical areas of Mexico, Central America, and the Caribbean. The genus was first described in 1768 by Austrian naturalist Josephus Nicolaus Laurenti in his book Specimen Medicum, Exhibens Synopsin Reptilium Emendatam cum Experimentis circa Venena. Two species are included in the genus Iguana: the green iguana, which is widespread throughout its range and a popular pet, and the Lesser Antillean iguana, which is native to the Lesser Antilles and endangered due to habitat destruction.\n\nThe word \"iguana\" is derived from the original Taino name for the species, iwana.[3]','/assets/images/iguana.jpeg',85,47),(17,'Kitten',250.00,'A kitten or kitty is a juvenile domesticated cat.[1] A feline litter usually consists of two to five kittens. To survive, kittens need the care of their mother for the first several weeks of their life. Kittens are highly social animals and spend most of their waking hours playing and interacting with available companions. The word \"kitten\" derives from Middle English kitoun (ketoun, kyton etc.), which itself came from Old French chitoun, cheton: \"kitten\".[1] The young of big cats are called cubs rather than kittens. Either term may be used for the young of smaller wild felids such as ocelots, caracals, and lynx, but \"kitten\" is usually more common for these species.','/assets/images/kitten.jpg',9,2),(18,'Koala',4400.00,'Koalas typically inhabit open eucalypt woodlands, and the leaves of these trees make up most of their diet. Because this eucalypt diet has limited nutritional and caloric content, koalas are largely sedentary and sleep for up to 20 hours a day. They are asocial animals, and bonding exists only between mothers and dependent offspring. Adult males communicate with loud bellows that intimidate rivals and attract mates. Males mark their presence with secretions from scent glands located on their chests. Being marsupials, koalas give birth to underdeveloped young that crawl into their mothers\' pouches, where they stay for the first six to seven months of their life. These young koalas are known as joeys, and are fully weaned at around a year. Koalas have few natural predators and parasites but are threatened by various pathogens, like Chlamydiaceae bacteria and the koala retrovirus, as well as by bushfires and droughts.','/assets/images/koala.jpeg',10,1),(19,'Manta Ray',4000.00,'Manta rays are large eagle rays belonging to the genus Manta. The larger species, M. birostris, reaches 7 m (23 ft 0 in) in width while the smaller, M. alfredi, reaches 5.5 m (18 ft 1 in). Both have triangular pectoral fins, horn-shaped cephalic fins and large, forward-facing mouths. They are classified among the Elasmobranchii (sharks and rays) and are placed in the eagle ray family, Myliobatidae.\n\nThey are filter feeders and eat large quantities of zooplankton, which they swallow with their open mouths as they swim. Gestation lasts over a year, producing live pups. Mantas may visit cleaning stations for the removal of parasites. Like whales, they breach, for unknown reasons.\n\nBoth species are listed as vulnerable by the International Union for Conservation of Nature. Anthropogenic threats include pollution, entanglement in fishing nets, and direct harvesting for their gill rakers for use in Chinese medicine. Their slow reproductive rate exacerbates these threats. They are protected in international waters by the Convention on Migratory Species of Wild Animals, but are more vulnerable closer to shore. Areas where mantas congregate are popular with tourists. Only a few aquariums are large enough to house them. In general, these large fish are seldom seen and difficult to study.','/assets/images/manta_ray.jpg',43,12),(20,'Octopus',5000.00,'An octopus (/ˈɒktəpʊs/ or /ˈɒktəpəs/; plural: octopuses, octopi, or octopodes; see below) is a cephalopod mollusc of the order Octopoda. It has two eyes and four pairs of arms and, like other cephalopods, it is bilaterally symmetric. An octopus has a hard beak, with its mouth at the center point of the arms. An octopus has no internal or external skeleton (although some species have a vestigial remnant of a shell inside their mantles), allowing it to squeeze through tight places.[4] Octopuses are among the most intelligent and behaviorally flexible of all invertebrates.\n\nOctopuses inhabits many diverse regions of the ocean, including coral reefs, pelagic waters, and the ocean floor. They have numerous strategies for defending themselves against predators, including the expulsion of ink, the use of camouflage and deimatic displays, their ability to jet quickly through the water, and their ability to hide. An octopus trails its eight arms behind it as it swims. All octopuses are venomous, but only one group, the blue-ringed octopus, is known to be deadly to humans.[5]\n\nAround 300 species are recognized, which is over one-third of the total number of known cephalopod species. The term \'octopus\' may also be used to refer specifically to the genus Octopus.','/assets/images/octopus.jpeg',123,43),(21,'Orangutan',26000.00,'Are the two exclusively Asian species of extant great apes. Native to Indonesia and Malaysia, orangutans are currently found in only the rainforests of Borneo and Sumatra.\n\nOrangutans are the most arboreal of the great apes and spend most of their time in trees. Their hair is typically reddish-brown, instead of the brown or black hair typical of chimpanzees and gorillas. Males and females differ in size and appearance. Dominant adult males have distinctive cheek pads and produce long calls that attract females and intimidate rivals. Younger males do not have these characteristics and resemble adult females. Orangutans are the most solitary of the great apes, with social bonds occurring primarily between mothers and their dependent offspring, who stay together for the first two years. Fruit is the most important component of an orangutan\'s diet; however, the apes will also eat vegetation, bark, honey, insects and even bird eggs. They can live over 30 years in both the wild and captivity.','/assets/images/orangutang.jpg',15,12),(22,'Panda',90000.00,'Also known as panda bear or the giant panda to distinguish it from the unrelated red panda, is a bear[3] native to south central China.[1] It is easily recognized by the large, distinctive black patches around its eyes, over the ears, and across its round body. Though it belongs to the order Carnivora, the panda\'s diet is over 99% bamboo.[4] Pandas in the wild will occasionally eat other grasses, wild tubers, or even meat in the form of birds, rodents or carrion. In captivity, they may receive honey, eggs, fish, yams, shrub leaves, oranges, or bananas along with specially prepared food.[5][6]\n\nThe giant panda lives in a few mountain ranges in central China, mainly in Sichuan province, but also in Shaanxi and Gansu provinces.[7] As a result of farming, deforestation, and other development, the panda has been driven out of the lowland areas where it once lived.\n\nWhile the dragon has often served as China\'s national emblem, internationally the panda appears at least as commonly. As such, it is becoming widely used within China in international contexts, for example as one of the five Fuwa mascots of the Beijing Olympics.\n','/assets/images/panda.jpeg',12,2),(23,'Penguin',1800.00,'Penguins (order Sphenisciformes, family Spheniscidae) are a group of aquatic, flightless birds living almost exclusively in the Southern Hemisphere, especially in Antarctica. Highly adapted for life in the water, penguins have countershaded dark and white plumage, and their wings have evolved into flippers. Most penguins feed on krill, fish, squid and other forms of sealife caught while swimming underwater. They spend about half of their lives on land and half in the oceans.\n\nAlthough all penguin species are native to the Southern Hemisphere, they are not found only in cold climates, such as Antarctica. In fact, only a few species of penguin live so far south. Several species are found in the temperate zone, and one species, the Galápagos penguin, lives near the equator.\n','/assets/images/penguin.jpg',23,21),(24,'Pig',600.00,'A pig is any of the animals in the genus Sus, within the Suidae family of even-toed ungulates. Pigs include the domestic pig and its ancestor, the common Eurasian wild boar (Sus scrofa), along with other species; related creatures outside the genus include the babirusa and the warthog. Pigs, like all suids, are native to the Eurasian and African continents. Juvenile pigs are known as piglets.[1] Pigs are omnivores and are highly social and intelligent animals.[2] A typical pig has a large head with a long snout which is strengthened by a special prenasal bone and by a disk of cartilage at the tip.[3] The snout is used to dig into the soil to find food and is a very acute sense organ. There are four hoofed toes on each trotter (foot), with the two larger central toes bearing most of the weight, but the outer two also being used in soft ground.[4]','/assets/images/pig.jpg',17,4),(25,'Puppy',1000.00,'A puppy is a juvenile dog. Some puppies can weigh 1–3 lb (0.45–1.36 kg), while larger ones can weigh up to 15–23 lb (6.8–10.4 kg). All healthy puppies grow quickly after birth. A puppy\'s coat color may change as the puppy grows older, as is commonly seen in breeds such as the Yorkshire Terrier. In vernacular English, puppy refers specifically to dogs while pup may often be used for other mammals such as seals, giraffes, guinea pigs, or even rats.','/assets/images/puppy.jpg',80,100),(26,'Red Panda',5000.00,'he red panda (Ailurus fulgens), also called lesser panda and red cat-bear, is a small arboreal mammal native to the eastern Himalayas and south-western China that has been classified as vulnerable by IUCN as its wild population is estimated at less than 10,000 mature individuals. The population continues to decline and is threatened by habitat loss and fragmentation, poaching, and inbreeding depression, although red pandas are protected by national laws in their range countries.[1]\n\nThe red panda is slightly larger than a domestic cat. It has reddish-brown fur, a long, shaggy tail, and a waddling gait due to its shorter front legs. It feeds mainly on bamboo, but is omnivorous and also eats eggs, birds, insects, and small mammals. It is a solitary animal, mainly active from dusk to dawn, and is largely sedentary during the day.\n\nThe red panda is the only living species of the genus Ailurus and the family Ailuridae. It has been previously placed in the raccoon and bear families, but results of phylogenetic research indicate strong support for its taxonomic classification in its own family Ailuridae, which along with the weasel family is part of the superfamily Musteloidea.[4] Two subspecies are recognized.[3] It is not closely related to the giant panda.','/assets/images/red_panda.jpg',11,11),(27,'Rhinocerous',56600.00,'Rhinoceros /raɪˈnɒsərəs/, often abbreviated as rhino have relatively small brains for mammals this size (400–600 g); and a large horn. They generally eat leafy material, although their ability to ferment food in their hindgut allows them to subsist on more fibrous plant matter, if necessary. Unlike other perissodactyls, the two African species of rhinoceros lack teeth at the front of their mouths, relying instead on their lips to pluck food.[1]\n\nRhinoceros are killed by humans for their horns, which are bought and sold on the black market, and which are used by some cultures for ornamental or traditional medicinal purposes. East Asia, specifically Vietnam, is the largest market for rhino horns. By weight, rhino horns cost as much as gold on the black market. People grind up the horns and then consume them believing the dust has therapeutic properties.[2] The horns are made of keratin, the same type of protein that makes up hair and fingernails.[3] Both African species and the Sumatran rhinoceros have two horns, while the Indian and Javan rhinoceros have a single horn.','/assets/images/rhinocerous.jpg',12,4),(28,'Sea Turtle',3500.00,'Sea turtles (superfamily Chelonioidea), sometimes called marine turtles[3] are reptiles of the order of Testudines. There are seven species of sea turtles. They are the leatherback sea turtle, green sea turtle, loggerhead sea turtle, Kemp\'s ridley sea turtle, hawksbill sea turtle, flatback sea turtle and olive ridley sea turtle. Four of the species have been identified as \"endangered\" or \"critically endangered\" with another two being classed as \"vulnerable\". The seven living species of sea turtles are: leatherback sea turtle, green sea turtle, loggerhead sea turtle, Kemp\'s ridley sea turtle, hawksbill sea turtle, flatback sea turtle and olive ridley sea turtle.[4] All species except the leatherback are in the family Cheloniidae. The leatherback belongs to the family Dermochelyidae and is its only member.','/assets/images/sea_turtle.jpg',9,1),(29,'Sloth',11000.00,'Sloths are classified as folivores, as the bulk of their diets consist of buds, tender shoots, and leaves, mainly of Cecropia trees. Some two-toed sloths have been documented as eating insects, small reptiles, and birds as a small supplement to their diets. Linnaeus\'s two-toed sloth has recently been documented eating human faeces from open latrines.[4] They have made extraordinary adaptations to an arboreal browsing lifestyle. Leaves, their main food source, provide very little energy or nutrients, and do not digest easily. Sloths, therefore, have large, specialized, slow-acting stomachs with multiple compartments in which symbiotic bacteria break down the tough leaves. Sloths\' tongues have the unique ability to protrude from their mouths 10 to 12 inches, an ability that is useful for collecting leaves just out of reach.[5] As much as two-thirds of a well-fed sloth\'s body weight consists of the contents of its stomach, and the digestive process can take a month or more to complete.','/assets/images/sloth.jpeg',20,19),(30,'T-rex',1000000.00,'Tyrannosaurus (/tɨˌrænəˈsɔrəs/ or /taɪˌrænəˈsɔrəs/ (\"tyrant lizard\", from the Ancient Greek tyrannos (τύραννος), \"tyrant\", and sauros (σαῦρος), \"lizard\"[1]) is a genus of coelurosaurian theropod dinosaur. The species Tyrannosaurus rex (rex meaning \"king\" in Latin), commonly abbreviated to T.rex, is one of the most well-represented of the large theropods. Tyrannosaurus lived throughout what is now western North America, which then was an island continent named Laramidia. Tyrannosaurus had a much wider range than other tyrannosaurids. Fossils are found in a variety of rock formations dating to the Maastrichtian age of the upper Cretaceous Period, 67 to 66 million years ago.[2] It was among the last non-avian dinosaurs to exist before the Cretaceous–Paleogene extinction event.\n\nIt is estimated to be capable of exerting one of the largest bite forces among all terrestrial animals.[8][9]','/assets/images/t-rex.jpeg',1,0),(31,'Lion',120000.00,'The lion (Panthera leo) is one of the five big cats in the genus Panthera and a member of the family Felidae. With some males exceeding 250 kg (550 lb) in weight,[4] it is the second-largest living cat after the tiger.\n\nLions live for 10–14 years in the wild, while in captivity they can live longer than 20 years. In the wild, males seldom live longer than 10 years, as injuries sustained from continual fighting with rival males greatly reduce their longevity.[6] They typically inhabit savanna and grassland, although they may take to bush and forest. Lions are unusually social compared to other cats. A pride of lions consists of related females and offspring and a small number of adult males. Groups of female lions typically hunt together, preying mostly on large ungulates. Lions are apex and keystone predators, although they are also expert scavengers obtaining over 50 percent of their food by scavenging as opportunity allows. While lions do not typically hunt humans, some have been known to do so. Sleeping mainly during the day, lions are primarily nocturnal, although bordering on crepuscular in nature.','/assets/images/lion.jpeg',14,2);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `ordered_on` datetime DEFAULT NULL,
  `shipped_on` datetime DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_method_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`customer_id`,`shipping_method_id`),
  KEY `fk_orders_customers1_idx` (`customer_id`),
  KEY `fk_orders_shipping_methods1_idx` (`shipping_method_id`),
  CONSTRAINT `fk_orders_customers1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_shipping_methods1` FOREIGN KEY (`shipping_method_id`) REFERENCES `shipping_methods` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'Shipped',100000.00,'12345 Testing Road','2014-12-10 20:30:05','2014-12-10 20:30:05',1,1),(2,'Processing',250000.00,'12345 Test Road','2014-12-10 20:30:05',NULL,1,2),(4,'Shipped',234.00,'999 CodingDojo Lane','2014-12-10 20:30:05','2014-12-10 20:30:05',2,3),(5,'Canceled',12345.00,'5555 Mountain View',NULL,NULL,2,2),(6,'Processing',971234.00,'666 Thriller Street','2014-12-10 19:13:10',NULL,7,1),(7,'Shipped',6000.00,'666 Thriller Street','2014-12-10 19:13:36','2014-12-10 20:30:05',7,3),(8,'Canceled',768234.00,'6374 Gettothechoppa','2014-12-10 19:14:21',NULL,8,3),(9,'Shipped',4599.00,'123 Main St Anywhere,MN  72931','2014-12-11 01:01:46','2014-12-11 01:01:46',11,1),(10,'Shipped',4599.00,'456 Main St Anywhere,MN  98005','2014-12-11 01:11:22','2014-12-11 01:11:22',12,1),(11,'Shipped',1099.00,'789 Plain St Anywhere,MN  72931','2014-12-11 02:34:59','2014-12-11 02:34:59',13,1),(12,'Shipped',1269.00,'430 Long St Townsville,WA  98001','2014-12-11 03:12:35','2014-12-11 03:12:35',14,3),(13,'Shipped',1669.00,'230 Sandy Street River City,WA  98002','2014-12-11 03:39:11','2014-12-11 03:39:11',15,3),(14,'Shipped',719.00,'999 R Street San ,CA  90001','2014-12-11 03:51:12','2014-12-11 03:51:12',16,3);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_has_items`
--

DROP TABLE IF EXISTS `orders_has_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_has_items` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`,`item_id`),
  KEY `fk_orders_has_items_items1_idx` (`item_id`),
  KEY `fk_orders_has_items_orders1_idx` (`order_id`),
  CONSTRAINT `fk_orders_has_items_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_items_items1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_has_items`
--

LOCK TABLES `orders_has_items` WRITE;
/*!40000 ALTER TABLE `orders_has_items` DISABLE KEYS */;
INSERT INTO `orders_has_items` VALUES (1,2,2),(1,3,5),(2,4,1),(4,1,4),(4,3,6),(4,5,8),(5,1,1),(5,3,3),(6,21,4),(7,8,2),(8,30,6),(9,6,1),(9,15,2),(10,6,1),(10,15,2),(11,12,1),(11,13,1),(12,10,1),(12,12,2),(13,12,1),(14,17,2);
/*!40000 ALTER TABLE `orders_has_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping_methods`
--

DROP TABLE IF EXISTS `shipping_methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping_methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping_methods`
--

LOCK TABLES `shipping_methods` WRITE;
/*!40000 ALTER TABLE `shipping_methods` DISABLE KEYS */;
INSERT INTO `shipping_methods` VALUES (1,'overnight',99.99),(2,'express',49.99),(3,'ground',19.99);
/*!40000 ALTER TABLE `shipping_methods` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-11 11:06:53
