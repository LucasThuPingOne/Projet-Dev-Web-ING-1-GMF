DROP DATABASE IF EXISTS php;

CREATE DATABASE php;
USE php;
CREATE TABLE allo ( `type` TEXT NOT NULL ,  `id_img` TEXT NOT NULL ,  `img` TEXT NOT NULL ,  `id` TEXT NOT NULL ,  `description` TEXT NOT NULL ,  `prix` INT NOT NULL ,  `stock` INT NOT NULL );
CREATE TABLE formation ( `type` TEXT NOT NULL ,  `id_img` TEXT NOT NULL ,  `img` TEXT NOT NULL ,  `id` TEXT NOT NULL ,  `description` TEXT NOT NULL ,  `prix` INT NOT NULL ,  `stock` INT NOT NULL );
CREATE TABLE objet ( `type` TEXT NOT NULL ,  `id_img` TEXT NOT NULL ,  `img` TEXT NOT NULL ,  `id` TEXT NOT NULL ,  `description` TEXT NOT NULL ,  `prix` INT NOT NULL ,  `stock` INT NOT NULL );
CREATE TABLE user ( `nom` TEXT NOT NULL ,  `prenom` TEXT NOT NULL ,  `login` TEXT NOT NULL ,  `password` TEXT NOT NULL );
CREATE TABLE panier ( `type` TEXT NOT NULL , `qte` INT NOT NULL ,  `prix` INT NOT NULL , `total` INT NOT NULL);