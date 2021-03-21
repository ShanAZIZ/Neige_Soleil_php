SET NAMES utf8;

DROP DATABASE IF EXISTS BTS_Entreprise_Crud;
CREATE DATABASE BTS_Entreprise_Crud;

USE BTS_Entreprise_Crud;
 
CREATE TABLE Utilisateur(
    utilisateur_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    utilisateur_nom VARCHAR (200),
    utilisateur_mail VARCHAR (200),
    utilisateur_mdp VARCHAR (200)
);

CREATE TABLE Client(
    client_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    client_nom VARCHAR(200),
    client_prenom VARCHAR(200),
    client_adresse VARCHAR(200),
    client_telephone VARCHAR(200)  
);

CREATE TABLE Produit(
    produit_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    produit_nom VARCHAR(200),
    produit_prix VARCHAR(200),
    produit_stock VARCHAR(200),
    produit_categorie ENUM("Domestique", "Vetements", "Bureau"),    
);

CREATE TABLE Commande(
    commande_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    commande_client_id INT,
    commande_produit_id INT,
    commande_produit_quantite INT,
    FOREIGN KEY (commande_client_id) REFERENCES Client(client_id),
    FOREIGN KEY (commande_produit_id) REFERENCES Produit(produit_id)
);


