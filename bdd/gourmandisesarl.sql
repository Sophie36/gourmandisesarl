-- Creation de la bdd
CREATE DATABASE gourmandisesarl;

-- selection de la base 
USE gourmandisesarl;

-- creation de la table client
CREATE TABLE client(
code_c INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Identifiant client', 
nom VARCHAR(35) NOT NULL COMMENT 'Nom du client', 
adresse VARCHAR(50) NULL DEFAULT NULL COMMENT 'adresse du client', 
cp VARCHAR(5) NOT NULL COMMENT 'code postal', 
ville VARCHAR(25) NOT NULL COMMENT 'ville du client', 
telephone VARCHAR(25) NULL DEFAULT NULL COMMENT 'telephone du client'
) CHARACTER SET UTF8 ENGINE=InnoDB;

-- creation de la table produit
CREATE TABLE produit(
reference INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Reference du produit',
designation VARCHAR(30) NOT NULL COMMENT 'Designation du produit',
quantite INT(11) NULL DEFAULT 0 COMMENT 'Quantite du produit',
descriptif varchar(1) NOT NULL DEFAULT 'G' COMMENT 'Descriptif du produit', 
prix_unitaire_HT DOUBLE NULL DEFAULT 0 COMMENT 'Prix unitaire du produit',
stock  SMALLINT(6) NULL  DEFAULT 0 COMMENT 'Stock',
poids_piece INT(11) NULL DEFAULT 0 COMMENT 'Poids piece en grammes pour les articles vendus par piece'
) CHARACTER SET UTF8 ENGINE=InnoDB;

-- creation de la table vendeur
CREATE TABLE vendeur(
Code_v INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Identifiant du vendeur', 
nom VARCHAR(35) NOT NULL COMMENT 'Nom du vendeur', 
adresse VARCHAR(50) NULL DEFAULT NULL COMMENT 'adresse du vendeur', 
cp VARCHAR(5) NOT NULL COMMENT 'code postal', 
ville VARCHAR(25) NOT NULL COMMENT 'ville du vendeur', 
telephone VARCHAR(25) NULL DEFAULT NULL COMMENT 'telephone du vendeur'
) CHARACTER SET UTF8 ENGINE=InnoDB;

-- creation de la table commande
CREATE TABLE commande(
numero INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Numero de la commande',
code_v INT(11) NOT NULL COMMENT 'Code du vendeur',
code_c INT(11) NOT NULL COMMENT 'Code du client',
date_livraison DATETIME NULL DEFAULT NULL COMMENT 'Date de livraison',
date_commande DATETIME NULL DEFAULT NULL COMMENT 'Date de commande',
total_ht DOUBLE NULL DEFAULT 0 COMMENT 'Total HT',
total_tva DOUBLE NULL DEFAULT 0 COMMENT 'Total TVA',
etat TINYINT(3) UNSIGNED NULL DEFAULT 0 COMMENT 'Etat de la commande',
CONSTRAINT fk_code_v FOREIGN KEY (code_v) REFERENCES vendeur(code_v),
CONSTRAINT fk_code_c FOREIGN KEY (code_c) REFERENCES client(code_c)
) CHARACTER SET UTF8 ENGINE=InnoDB;

-- creation de la table ligne_commande
CREATE TABLE ligne_commande(
numero INT(11) NOT NULL COMMENT 'Numero de la commande',
numero_ligne SMALLINT(6) NOT NULL COMMENT 'Numero de ligne',
reference INT(11) NOT NULL COMMENT 'Reference',
quantite_demandee SMALLINT(6) NOT NULL,
PRIMARY KEY(numero,numero_ligne),
CONSTRAINT  fk_numero FOREIGN KEY (numero) REFERENCES commande(numero),
CONSTRAINT  fk_reference FOREIGN KEY (reference) REFERENCES produit(reference)
) CHARACTER SET UTF8 ENGINE=InnoDB;

-- export donnée de sucrerie
SELECT reference, designation, quantite , descriptif , prix_unitaire_HT , stock, poids_piece INTO OUTFILE 'C:\Users\Arossignol\Desktop\produit.txt' FROM produit;

-- insertion des donnee
LOAD DATA INFILE 'C:\Users\Arossignol\Desktop\produit.txt' INTO TABLE produit;

-- creation de la vue ProduitACommander
CREATE VIEW ProduitACommander AS SELECT reference, designation, stock, 120-stock 'Quantité à commander' FROM produit;

-- insertion des données dans la table produit
INSERT INTO produit (reference, designation, quantite, descriptif, prix_unitaire_HT, stock, poids_piece) VALUES
(1004, 'FEU DE JOIE LIQUEUR ASSORT.', 500, 'G', 23, 50, 0),
(1007, 'TENDRE FRUIT', 500, 'G', 18, 120, 0),
(1015, 'CARACAO', 500, 'G', 24.5, 50, 0),
(1016, 'COKTAIL', 500, 'G', 33, 40, 0),
(1017, 'ORFIN', 500, 'G', 32, 40, 0),
(3002, 'CARRE PECTO', 500, 'G', 29, 40, 0),
(3004, 'ZAN ALESAN', 25, 'P', 15, 50, 20),
(3010, 'PATES GRISES', 500, 'G', 35, 100, 0),
(3016, 'CARAMEL AU LAIT', 500, 'G', 20, 100, 0),
(3017, 'VIOLETTE TRADITION', 500, 'G', 25, 100, 0),
(4002, 'SUCETTE BOULE FRUIT', 25, 'P', 14, 100, 40),
(4004, 'SUCETTE BOULE POP', 25, 'P', 21, 50, 40),
(4010, 'CARAMBAR', 40, 'P', 18, 20, 15),
(4011, 'CARANOUGA', 40, 'P', 18, 100, 15),
(4012, 'CARAMBAR FRUIT', 40, 'P', 18, 100, 15),
(4013, 'CARAMBAR COLA', 40, 'P', 18, 50, 15),
(4015, 'SOURIS REGLISSE', 500, 'G', 24, 50, 0),
(4016, 'SOURIS CHOCO', 500, 'G', 24, 50, 0),
(4019, 'SCHTROUMPFS VERTS', 500, 'G', 24, 50, 0),
(4020, 'CROCODILE', 500, 'G', 21, 50, 0),
(4022, 'PERSICA', 500, 'G', 28, 20, 0),
(4025, 'COLA CITRIQUE', 500, 'G', 21, 50, 0),
(4026, 'COLA LISSE', 500, 'G', 25, 50, 0),
(4027, 'BANANE', 1000, 'G', 23, 20, 0),
(4029, 'OEUF SUR LE PLAT', 500, 'G', 25, 20, 0),
(4030, 'FRAISIBUS', 500, 'G', 25, 50, 0),
(4031, 'FRAISE TSOIN-TSOIN', 500, 'G', 25, 40, 0),
(4032, 'METRE REGLISSE ROULE', 500, 'G', 19, 50, 0),
(4033, 'MAXI COCOBAT', 1000, 'G', 19, 20, 0),
(4034, 'DENTS VAMPIRE', 500, 'G', 22, 50, 0),
(4036, 'LANGUE COLA CITRIQUE', 500, 'G', 21, 40, 0),
(4037, 'OURSON CANDI', 1000, 'G', 21, 50, 0),
(4039, 'SERPENT ACIDULE', 500, 'G', 21, 20, 0),
(4042, 'TETINE CANDI', 500, 'G', 20, 40, 0),
(4045, 'COLLIER PECCOS', 15, 'P', 21, 50, 50),
(4052, 'TWIST ASSORTIS', 500, 'G', 22, 50, 0),
(4053, 'OURSON GUIMAUVE', 500, 'G', 35, 10, 0),
(4054, 'BOULE COCO MULER', 500, 'G', 34, 10, 0),
(4055, 'COCOMALLOW', 500, 'G', 33, 10, 0),
(4057, 'CRIC-CRAC', 500, 'G', 33, 10, 0),
(4058, 'sucette', 10, 'G', 10, 10, 0),
(4059, 'sucette', 10, 'G', 10, 10, 0),
(4060, 'sucette', 10, 'G', 10, 10, 0),
(4061, 'sucette', 10, 'G', 10, 10, 0),
(4062, 'sucette', 10, 'G', 10, 10, 0),
(4063, 'sucette', 10, 'G', 10, 10, 0),
(4064, 'sucette', 10, 'G', 10, 10, 0),
(4065, 'sucette', 10, 'G', 10, 10, 0),
(4066, 'sucette', 10, 'G', 10, 10, 0),
(4067, 'sucette', 100, 'G', 20, 100, 0),
(4068, 'sucette', 200, 'G', 30, 200, 0),
(4069, 'sucette', 200, 'G', 30, 200, 0),
(4070, 'sucette', 200, 'G', 30, 200, 0),
(4071, 'sucette', 200, 'G', 30, 200, 0),
(4072, 'sucette', 100, 'G', 20, 100, 0),
(4073, 'sucette', 100, 'G', 20, 100, 0),
(4074, 'sucette', 100, 'G', 20, 100, 0),
(4075, 'sucette', 100, 'G', 20, 100, 0),
(4076, 'sucette', 100, 'G', 20, 100, 0),
(4077, 'sucette', 10, 'G', 10, 200, 0),
(4078, 'FEU DE JOIE LIQUEUR ASSORT.', 500, 'G', 23, 50, 0);

-- vendeur
SELECT code_v,nom,adresse,cp,ville,telephone INTO OUTFILE 'C:\Users\Arossignol\Desktop\vendeur.txt' FROM vendeur
LOAD DATA INFILE 'C:\Users\Arossignol\Desktop\vendeur.txt' INTO TABLE vendeur;


