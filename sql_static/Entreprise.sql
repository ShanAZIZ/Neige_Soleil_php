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





