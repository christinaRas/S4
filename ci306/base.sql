create database regime;
use regime;

create table user
(
    id_user int,
    nom_user varchar(100),
    mail varchar(100),
    mdp varchar(100)
);
CREATE TABLE  CODE_ARGENT
(
    ID_ARGENT INT PRIMARY KEY AUTO_INCREMENT ,
    CODE VARCHAR ,
    VALEUR FLOAT
);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES ();