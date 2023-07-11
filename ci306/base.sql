create database regime;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

use regime;
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
insert into choixRegime values(null,'Avoir mon IMC ideal');

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
    FOREIGN key (id_choix) references choixre(id_choix)
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


insert into regimeMampitombosport values(null,'Muscle des pieds',60,'images/sportMampitombo/1.jpg');
insert into regimeMampitombosport values(null,'Muscle des bras',60,'images/sportMampitombo/2.jpg');
insert into regimeMampitombosport values(null,'Muscle fessier',60,'images/sportMampitombo/3.jpg');
insert into regimeMampitombosport values(null,'Poitrine',60,'images/sportMampitombo/4.jpg');


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

insert into regimeMampihenasport values(null,'Abdos',10,'images/sportMampihena/1.jpg');
insert into regimeMampihenasport values(null,'Squat',10,'images/sportMampihena/2.jpg');
insert into regimeMampihenasport values(null,'Jump',20,'images/sportMampihena/3.jpg');
insert into regimeMampihenasport values(null,'Velo',60,'images/sportMampihena/4.jpg');
insert into regimeMampihenasport values(null,'Pompe',10,'images/sportMampihena/4.jpg');


create table Evolution(
    idE int primary key auto_increment not null,
    id_user int,
    poids int,
    date Date,
    FOREIGN key (id_user) REFERENCES user(id_user)
);

insert into Evolution(id_user, poids, date) values ( 2, 80, '2023-07-11');
insert into Evolution(id_user, poids, date) values ( 2, 82, '2023-07-21');



create view v_nombreclient as select count(*) as nb from user;

create table code_argent (
    id_argent int primary key auto_increment,
    code varchar(14),
    valeur float
);

insert into code_argent (id_argent, code, valeur) values (null, "123", 10000);
insert into code_argent (id_argent, code, valeur) values (null, "246", 20000);
insert into code_argent (id_argent, code, valeur) values (null, "4321", 30000);
insert into code_argent (id_argent, code, valeur) values (null, "12", 40000);
insert into code_argent (id_argent, code, valeur) values (null, "34", 50000);
insert into code_argent (id_argent, code, valeur) values (null, "56", 60000);
insert into code_argent (id_argent, code, valeur) values (null, "78", 70000);
insert into code_argent (id_argent, code, valeur) values (null, "90", 80000);
insert into code_argent (id_argent, code, valeur) values (null, "121", 90000);
insert into code_argent (id_argent, code, valeur) values (null, "122", 500);
insert into code_argent (id_argent, code, valeur) values (null, "124", 100);
insert into code_argent (id_argent, code, valeur) values (null, "990", 200);
insert into code_argent (id_argent, code, valeur) values (null, "3245", 300);
insert into code_argent (id_argent, code, valeur) values (null, "45634", 400);
insert into code_argent (id_argent, code, valeur) values (null, "38488", 750);

create table paiement (
    id_paiement int primary key auto_increment,
    id_user int,
    id_argent int,
    etat int,
    foreign key (id_user) references user(id_user),
    foreign key (id_argent) references code_argent(id_argent)
);

insert into paiement (id_paiement, id_user, id_argent, etat) values (null, 1, 1, 1);
insert into paiement (id_paiement, id_user, id_argent, etat) values (null, 2, 1, 1);

-- 1 NON VALIDER
-- 2 VALIDER
create or replace view porte_feuille as 
select paiement.id_user, sum(code_argent.valeur) as total
from paiement
join code_argent on paiement.id_argent = code_argent.id_argent
where paiement.etat = 2
group by paiement.id_user;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;