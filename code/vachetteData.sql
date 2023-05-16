USE php;
INSERT INTO `allo` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Allo crepe', 'crepe', '/img/crepe.png', 'A_01', 'Appelez Paularis pour des crêpes délicieuses', 0, 10);
INSERT INTO `allo` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Allo kidnapping', 'kidnapping', '/img/kidnapping.jpeg', 'A_02', 'Vous voulez disparaitre? Appelez-nous pour un évènement spectaculaire! Tout le monde se souviendra de votre enlevement!', 0, 10);
INSERT INTO `allo` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Allo Taxi', 'taxi', '/img/taxi.jpg', 'A_03', 'Faites appel à nos servies pour  vous déplacer de planète en planètes', 0, 10);
INSERT INTO `allo` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Allo voyance', 'voyance', '/img/voyance.jpg', 'A_04', 'On ne sait jamais de quoi est fait le lendemain... Maintenant on peut.', 0, 10);
INSERT INTO `allo` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Allo sandwich', 'sandwich', '/img/sandwich.jpg', 'A_05', 'Livraison d un délicieux sandwich directement dans votre bouche.', 0, 10);
INSERT INTO `formation` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('La drague en 10 étapes', 'disquette', '/img/disquette.jpg', 'F_01', 'Apprenez facilement et rapidement à accoster des individus dans diverses situations même les plus incongrues', 500, 10);
INSERT INTO `formation` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('S exprimer en public', 'expression', '/img/expression.webp', 'F_02', 'Apprenez à vous exprimer en public facilement et rapidement grace aux conseils de nos formateurs reconnus par l état', 800, 10);
INSERT INTO `formation` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Affronter ses peurs', 'peur', '/img/peur.jpg', 'F_03', 'Il n y a pas de théorie que de la pratique! Nous sommes capables de vous mettre face à toutes vos peur!', 1000, 10);
INSERT INTO `formation` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Devenir riche en moins de 3 mois', 'riche', '/img/riche.jpg', 'F_04', 'Bill Gate n avez pas cette formation... Vous, vous l avez.', 2000, 10);
INSERT INTO `formation` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Décupler sa productivité', 'productivite', '/img/productivite.jpg', 'F_05', '1000 pompes par jour, boire de la lave, se doucher avec de la neige... Vous avez toutes les clés en main', 2500, 10);
INSERT INTO `objet` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('L oreiller', 'oreiller', '/img/oreiller.avif', 'O_01', 'Le plus important dans le développement personnel c est le sommeil.', 50, 10);
INSERT INTO `objet` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Le plaid', 'plaid', '/img/plaid.webp', '0_02', 'La chaleur est la base fondamentale du développement personnel', 70, 10);
INSERT INTO `objet` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('La casquette', 'casquette', '/img/casquette.avif', 'O_03', 'Le soleil est votre ennemi et cette casquette votre ami.', 25, 10);
INSERT INTO `objet` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Le livre', 'livre', '/img/livre.jpg', 'O_04', 'Pour vous inciter à acheter des formations en lignes', 50, 10);
INSERT INTO `objet` (`type`, `id_img`, `img`, `id`, `description`, `prix`, `stock`) VALUES ('Le t-shirt', 'tshirt', '/img/tshirt.jpg', 'O_05', 'Montrer à tous que vous êtes le nouveau Oussama Amar', 80, 10);
INSERT INTO `user` (`nom`, `prenom`, `login`, `password`) VALUES ('admin', 'admin', 'admin', 'admin');
INSERT INTO `user` (`nom`, `prenom`, `login`, `password`) VALUES ('tata', 'tata', 'tata', 'tata');