--
-- Contenu de la table `car_configuration`
--

INSERT INTO `car_configuration` (`configurationId`, `configurationGameName`, `configurationPresentation`, `configurationMaxLevel`, `configurationExperience`, `configurationSkillPoint`, `configurationExperienceBonus`, `configurationGoldBonus`, `configurationDropBonus`, `configurationAccess`) VALUES
(1, 'Nom de votre jeu', 'Description de votre jeu', 40, 500, 4, 0, 0, 0, 'Closed');

--
-- Contenu de la table `car_items`
--

INSERT INTO `car_items` (`itemId`, `itemItemTypeId`, `itemRaceId`, `itemPicture`, `itemName`, `itemDescription`, `itemLevel`, `itemLevelRequired`, `itemHpEffect`, `itemMpEffect`, `itemStrengthEffect`, `itemMagicEffect`, `itemAgilityEffect`, `itemDefenseEffect`, `itemDefenseMagicEffect`, `itemWisdomEffect`, `itemProspectingEffect`, `itemPurchasePrice`, `itemSalePrice`) VALUES
(1, 6, 0, '../../img/empty.png', 'Potion (1*)', 'Cette potion vous rendra des HP', 1, 1, 100, 0, 0, 0, 0, 0, 0, 0, 0, 100, 50);
--
-- Contenu de la table `car_items_types`
--

INSERT INTO `car_items_types` (`itemTypeId`, `itemTypeName`, `itemTypeNameShow`) VALUES
(1, 'Armor', 'Armure'),
(2, 'Boots', 'Bottes'),
(3, 'Gloves', 'Gants'),
(4, 'Helmet', 'Casque'),
(5, 'Weapon', 'Arme'),
(6, 'Item', 'Objet'),
(7, 'Parchment', 'Parchemin');

--
-- Contenu de la table `car_monsters`
--

INSERT INTO `car_monsters` (`monsterId`, `monsterCategory`, `monsterPicture`, `monsterName`, `monsterDescription`, `monsterLevel`, `monsterHp`, `monsterMp`, `monsterStrength`, `monsterMagic`, `monsterAgility`, `monsterDefense`, `monsterDefenseMagic`, `monsterExperience`, `monsterGold`, `monsterLimited`, `monsterQuantity`, `monsterQuantityBattle`, `monsterQuantityEscaped`, `monsterQuantityVictory`, `monsterQuantityDefeated`, `monsterQuantityDraw`) VALUES
(1, 1, '../../img/empty.png', 'Dragon vert', 'Taille : 1.70m\r\nPoids : 280kg\r\nLorsque les dragons vert ne sont plus avec leur parents c\\\'est qu\\\'ils sont adulte. \r\nLeur alimentation préféré est le maïs et le blé.', 5, 10, 0, 10, 0, 0, 0, 0, 10, 10, 'No', 0, 0, 0, 0, 0, 0);

--
-- Contenu de la table `car_monsters_categories`
--

INSERT INTO `car_monsters_categories` (`monsterCategoryId`, `monsterCategoryName`, `monsterCategoryNameShow`) VALUES
(1, 'Common', 'Commun'),
(2, 'Unusual', 'Peu commun'),
(3, 'Legendary', 'Légendaire'),
(4, 'Mythical', 'Mythique');

--
-- Contenu de la table `car_monsters_drops`
--

INSERT INTO `car_monsters_drops` (`monsterDropID`, `monsterDropMonsterId`, `monsterDropItemId`, `monsterDropItemVisible`, `monsterDropRate`, `monsterDropRateVisible`) VALUES
(1, 1, 1, 'Yes', 100, 'Yes');

--
-- Contenu de la table `car_races`
--

INSERT INTO `car_races` (`raceId`, `racePicture`, `raceName`, `raceDescription`, `raceHpBonus`, `raceMpBonus`, `raceStrengthBonus`, `raceMagicBonus`, `raceAgilityBonus`, `raceDefenseBonus`, `raceDefenseMagicBonus`, `raceWisdomBonus`, `raceProspectingBonus`) VALUES
(1, '../../img/empty.png', 'Chevalier', 'Classe de personnage axé sur la force.', 10, 1, 2, 1, 1, 1, 1, 1, 0);
--
-- Contenu de la table `car_shops`
--

INSERT INTO `car_shops` (`shopId`, `shopPicture`, `shopName`, `shopDescription`) VALUES
(1, '../../img/empty.png', 'La grande aventure', 'Seul magasin dans lequel vous allez pouvoir trouver des articles rares et temporaire.\r\nRevenez chaque jour pour voir si il y a de nouvelles offres');

--
-- Contenu de la table `car_shops_items`
--

INSERT INTO `car_shops_items` (`shopItemId`, `shopItemShopId`, `shopItemItemId`, `shopItemDiscount`) VALUES
(1, '1', '1', 0);

--
-- Contenu de la table `car_places`
--

INSERT INTO `car_places` (`placeId`, `placePicture`, `placeName`, `placeDescription`, `placePriceInn`, `placeChapter`, `placeAccess`) VALUES
(1, '../../img/empty.png', 'Indicia', 'Petit village situé à proximité d\\\'une grand forêt', 10, 1, 'Yes');

--
-- Contenu de la table `car_places_monsters`
--

INSERT INTO `car_places_monsters` (`placeMonsterId`, `placeMonsterPlaceId`, `placeMonsterMonsterId`) VALUES
(1, 1, 1);

--
-- Contenu de la table `car_places_shops`
--

INSERT INTO `car_places_shops` (`placeShopId`, `placeShopPlaceId`, `placeShopShopId`) VALUES
(1, 1, 1);