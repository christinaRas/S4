create database regime;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

use regime;
--Front Office =================
create table user
(
    id_user int primary key AUTO_INCREMENT,
    nom_user varchar(100),
    mail varchar(100),
    mdp varchar(100)
);

create table Description(
    idDescription int primary key auto_increment not null,
    id_user int not null;
    genre varchar(60),
    taille double,
    poids double,
    FOREIGN KEY (id_user) REFERENCES User(id_user)
)engine=innodb;

insert into Description values();

create table ChoixObjectif(
    idCO int primary key auto_increment not null,
    id_user int not null,
    idDecription int not null,
    choix varchar(60),
    FOREIGN KEY (id_user) REFERENCES User(id_user),
    FOREIGN KEY (idDescription) REFERENCES Description(idDescription)
)engine=innodb;

insert into ChoixObjectif values(1,1,1,'hampihena');
insert into ChoixObjectif values(2,2,2,'hampihena');
insert into ChoixObjectif values(3,3,3,'hampitombo');
insert into ChoixObjectif values(4,4,4,'hampihena');
insert into ChoixObjectif values(5,5,5,'hampitombo');

create table regimeMampitombo(
    idMampitombo int primary key auto_increment not null,
    titre varchar (100),
    imageMampitombo varchar(100)
)engine=innodb;

create table regimeMampihena(
    idMampihena int primary key auto_increment not null,
    titre varchar (100),
    imageMampihena varchar(100)
)engine=innodb;

create table ActiviteSport(
    idAS int primary key auto_increment not null,
    typeSport varchar(100)
)engine=innodb;

--Back Office ==================================

create table Evolution(
    idE int primary key auto_increment not null,
    evolution TIME
)engine=innodb;



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

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;