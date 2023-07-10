create database regime;
use regime;

create table user
(
    id_user int primary key AUTO_INCREMENT,
    nom_user varchar(100),
    mail varchar(100),
    mdp varchar(100)
);

CREATE VIEW V_NOMBRECLIENT AS SELECT COUNT(*) FROM USER;
CREATE TABLE  CODE_ARGENT
(
    ID_ARGENT INT PRIMARY KEY AUTO_INCREMENT ,
    CODE VARCHAR ,
    VALEUR FLOAT
);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES ("123",10000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES ("246",20000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES ("4321",30000);

CREATE TABLE PAIEMENT
(
    ID_PAIEMENT INT PRIMARY KEY AUTO_INCREMENT ,
    ID_USER INT ,
    ID_ARGENT INT ,
    FOREIGN KEY (ID_USER) REFERENCES USER(ID_USER),
    FOREIGN KEY (ID_ARGENT) REFERENCES CODE_ARGENT(ID_ARGENT)
);
