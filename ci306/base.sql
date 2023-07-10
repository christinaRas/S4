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

CREATE TABLE description (
    idDescription INT PRIMARY KEY AUTO_INCREMENT,
    id_user INT NOT NULL,
    id_genre INT,
    taille FLOAT,
    poids FLOAT,
    id_choix int not null,
    FOREIGN KEY (id_user) REFERENCES user (id_user),
    FOREIGN KEY (id_genre) REFERENCES genre (id_genre),
    FOREIGN key (id_choix) references choix(id_choix)
);

create table choixRegime
(
    id_choix int primary key auto_increment,
    nom_choix varchar(100)
);
insert into choixRegime values(null,'Augmenter de poids');
insert into choixRegime values(null,'Diminuer de poids');

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
insert into regimeMampitombo values(null,'Poulet et kabaro','public/images/mampitombo/1.jpg');
insert into regimeMampitombo values(null,'Henakisoa sosy','public/images/mampitombo/2.jpg');
insert into regimeMampitombo values(null,'Noulette sauce','public/images/mampitombo/3.jpg');
insert into regimeMampitombo values(null,'Saucice aux oignons','public/images/mampitombo/4.jpg');
insert into regimeMampitombo values(null,'Cassoulet','public/images/mampitombo/5.jpg');
insert into regimeMampitombo values(null,'Hen omby sy anana','public/images/mampitombo/6.jpg');
insert into regimeMampitombo values(null,'Cottelet sauce','public/images/mampitombo/7.jpg');


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

create table regimeMampihenasport(
    idMampihenasport int primary key auto_increment not null,
    nomMampihenasport varchar (100),
    dure_d int,
    photoMampihenasport varchar(100)
);


insert into regimeMampitombo values(1,'','public/images/mampihena/8.jpg');
insert into regimeMampitombo values(2,'','public/images/mampihena/9.jpg');
insert into regimeMampitombo values(3,'','public/images/mampihena/10.jpg');
insert into regimeMampitombo values(4,'','public/images/mampihena/11.jpg');
insert into regimeMampitombo values(5,'','public/images/mampihena/12.jpg');
insert into regimeMampitombo values(6,'','public/images/mampihena/13.jpg');
insert into regimeMampitombo values(7,'','public/images/mampihena/14.jpg');
insert into regimeMampitombo values(8,'','public/images/mampihena/15.jpg');
insert into regimeMampitombo values(9,'','public/images/mampihena/16.jpg');
insert into regimeMampitombo values(10'','public/images/mampihena/17.jpg');

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
    evolution TIME
)engine=innodb;


CREATE VIEW V_NOMBRECLIENT AS SELECT COUNT(*) FROM USER;
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
-- 1 NON VALIDER
-- 2 VALIDER

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;