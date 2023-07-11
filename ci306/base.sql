create database regime;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

use regime;
--Front Office =================
CREATE TABLE user (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    nom_user VARCHAR(100),
    mail VARCHAR(100),
    mdp VARCHAR(100)
);

INSERT INTO user VALUES (null, 'Christina', 'christinar@gmail.com', 'huhu');

CREATE TABLE genre (
    id_genre INT PRIMARY KEY AUTO_INCREMENT,
    nom_genre VARCHAR(100)
);

INSERT INTO genre VALUES (null, 'Homme');
INSERT INTO genre VALUES (null, 'Femme');
INSERT INTO genre VALUES (null, 'Transgenre');

create table choixRegime
(
    id_choix int primary key auto_increment,
    nom_choix varchar(100)
);
insert into choixRegime values(null,'Augmenter de poids');
insert into choixRegime values(null,'Diminuer de poids');

CREATE TABLE description (
    idDescription INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_genre INT,
    taille FLOAT,
    poids FLOAT,
    id_choix int not null,
    FOREIGN KEY (id_user) REFERENCES user (id_user),
    FOREIGN KEY (id_genre) REFERENCES genre (id_genre),
    FOREIGN key (id_choix) references choixRegime(id_choix)
);


create table ChoixObjectif(
    idCO int primary key auto_increment not null,
    id_user int not null,
    idDescription int not null,
    id_choix int not null,
    FOREIGN KEY (id_user) REFERENCES User(id_user),
    FOREIGN KEY (idDescription) REFERENCES Description(idDescription),
    FOREIGN key (id_choix) references choix(id_choix)
);

create table regimeMampitomboplat(
    idMampitomboplat int primary key auto_increment,
    nomMampitomboplat varchar (100),
    photoMampitomboplat varchar(100)
);
insert into regimeMampitomboplat values(null,'Poulet et kabaro','images/mampitombo/1.jpg');
insert into regimeMampitomboplat values(null,'Henakisoa sosy','images/mampitombo/2.jpg');
insert into regimeMampitomboplat values(null,'Noulette sauce','images/mampitombo/3.jpg');
insert into regimeMampitomboplat values(null,'Saucice aux oignons','images/mampitombo/4.jpg');
insert into regimeMampitomboplat values(null,'Cassoulet','images/mampitombo/5.jpg');
insert into regimeMampitomboplat values(null,'Hen omby sy anana','images/mampitombo/6.jpg');
insert into regimeMampitomboplat values(null,'Cottelet sauce','images/mampitombo/7.jpg');


create table regimeMampitombosport(
    idMampitombosport int primary key auto_increment not null,
    nomMampitombosport varchar (100),
    dure_a int,
    photoMampitombosport varchar(100)
);


insert into regimeMampitombo values(1,'','public/images/mampitombo/1.jpg');
insert into regimeMampitombo values(2,'','public/images/mampitombo/2.jpg');
insert into regimeMampitombo values(3,'','public/images/mampitombo/3.jpg');
insert into regimeMampitombo values(4,'','public/images/mampitombo/4.jpg');
insert into regimeMampitombo values(5,'','public/images/mampitombo/5.jpg');
insert into regimeMampitombo values(6,'','public/images/mampitombo/6.jpg');
insert into regimeMampitombo values(7,'','public/images/mampitombo/7.jpg');
insert into regimeMampitombo values(8,'','public/images/mampitombo/31.jpg');
insert into regimeMampitombo values(9,'','public/images/mampitombo/32.jpg');
insert into regimeMampitombo values(10'','public/images/mampitombo/33.jpg');


create table regimeMampihenaplat(
    idMampihenaplat int primary key auto_increment not null,
    nomMampihenaplat varchar (100),
    photoMampihenaplat varchar(100)
);
insert into regimeMampihenaplat values(null,'Achard d aricot vert','images/mampihena/8.jpg');
insert into regimeMampihenaplat values(null,'Patte legere','images/mampihena/9.jpg');
insert into regimeMampihenaplat values(null,'Soupe de potirond','images/mampihena/10.jpg');
insert into regimeMampihenaplat values(null,'Coussecousse','images/mampihena/11.jpg');
insert into regimeMampihenaplat values(null,'Poulet et brocolit','images/mampihena/12.jpg');
insert into regimeMampihenaplat values(null,'Salade de legume et patte','images/mampihena/13.jpg');
insert into regimeMampihenaplat values(null,'Tomate et polet','images/mampihena/14.jpg');


create table regimeMampihenasport(
    idMampihenasport int primary key auto_increment not null,
    nomMampihenasport varchar (100),
    dure_d int,
    photoMampihenasport varchar(100)
);


insert into regimeMampitombo values(1,'','images/mampihena/8.jpg');
insert into regimeMampitombo values(2,'','images/mampihena/9.jpg');
insert into regimeMampitombo values(3,'','images/mampihena/10.jpg');
insert into regimeMampitombo values(4,'','images/mampihena/11.jpg');
insert into regimeMampitombo values(5,'','images/mampihena/12.jpg');
insert into regimeMampitombo values(6,'','images/mampihena/13.jpg');
insert into regimeMampitombo values(7,'','images/mampihena/14.jpg');
insert into regimeMampitombo values(8,'','images/mampihena/15.jpg');
insert into regimeMampitombo values(9,'','images/mampihena/16.jpg');
insert into regimeMampitombo values(10'','images/mampihena/17.jpg');

-- create table ActiviteSport(
--     idAS int primary key auto_increment not null,
--     typeSport varchar(100)
-- )engine=innodb;

-- insert into ActiviteSport values(1, 'Pompe 30');
-- insert into ActiviteSport values(1, 'Pompe 50');
-- insert into ActiviteSport values(1, 'Abdominos 30');
-- insert into ActiviteSport values(1, 'Abdominos 50');
-- insert into ActiviteSport values(1, 'Squat 30');
-- insert into ActiviteSport values(1, 'Squat 50');
-- insert into ActiviteSport values(1, 'Squat 100');
-- insert into ActiviteSport values(1, '2 km de footing');
-- insert into ActiviteSport values(1, 'jogging 1h 30');

--Back Office ==================================

create table Evolution(
    idE int primary key auto_increment not null,
    id_user int,
    poids int,
    date Date,
    FOREIGN key (id_user) REFERENCES user(id_user)
);


CREATE VIEW V_NOMBRECLIENT AS SELECT COUNT(*) as nb FROM user;
CREATE TABLE  CODE_ARGENT
(
    ID_ARGENT INT PRIMARY KEY AUTO_INCREMENT ,
    CODE VARCHAR(14) ,
    VALEUR FLOAT
);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"123",10000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"246",20000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"4321",30000);

INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"12",40000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"34",50000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"56",60000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"78",70000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"90",80000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"121",90000);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"122",500);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"124",100);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"990",200);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"3245",300);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"45634",400);
INSERT INTO CODE_ARGENT (ID_ARGENT,CODE,VALEUR) VALUES (NULL,"38488",750);

CREATE TABLE PAIEMENT
(
    ID_PAIEMENT INT PRIMARY KEY AUTO_INCREMENT ,
    ID_USER INT ,
    ID_ARGENT INT ,
    ETAT INT,
    FOREIGN KEY (ID_USER) REFERENCES USER(ID_USER),
    FOREIGN KEY (ID_ARGENT) REFERENCES CODE_ARGENT(ID_ARGENT)
);
INSERT INTO   PAIEMENT (ID_PAIEMENT,ID_USER,ID_ARGENT,ETAT) VALUES(NULL,1,1,1);
INSERT INTO   PAIEMENT (ID_PAIEMENT,ID_USER,ID_ARGENT,ETAT) VALUES(NULL,3,1,1);

-- 1 NON VALIDER
-- 2 VALIDER
CREATE OR REPLACE VIEW PORTE_FEUILLE AS SELECT PAIEMENT.ID_USER,SUM(CODE_ARGENT.VALEUR) AS TOTAL FROM PAIEMENT
JOIN  CODE_ARGENT ON PAIEMENT.ID_ARGENT = CODE_ARGENT.ID_ARGENT  GROUP by PAIEMENT.id_user;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;