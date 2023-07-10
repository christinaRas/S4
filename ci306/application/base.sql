CREATE DATABASE facturemen;
USE facturemen;
CREATE TABLE CLIENT
(
    ID_client INT  AUTO_INCREMENT PRIMARY KEY,
    Nom  VARCHAR(100) not null,
    Prenom VARCHAR(100)not null
);
INSERT INTO CLIENT VALUES (NULL,'Rasamimanana','Mendrika');
INSERT INTO CLIENT VALUES (NULL,'Rudy','Lee');
INSERT INTO CLIENT VALUES (NULL,'Rasoamananjara','Christina');

CREATE TABLE PRODUIT
(
    ID_produit INT  AUTO_INCREMENT PRIMARY KEY,
    produit VARCHAR(50),
    imageProduit VARCHAR(50),
    DescriptionProduit VARCHAR(1000),
    prix DECIMAL(10,2)
);
INSERT INTO PRODUIT VALUES (NULL,'Souris Gamer','souris.jpg','Souris sans fil RGB',30000);
INSERT INTO PRODUIT VALUES (NULL,'Ordinateur Gamer','ordi.jpg','Ordinateur PUISSANT',2000000);
INSERT INTO PRODUIT VALUES (NULL,'Iphone 14 Pro MAX','iphone14.png','Iphone 14 Pro Max',2000000);

CREATE TABLE FACTURE
(
        Numero_facture INT  AUTO_INCREMENT PRIMARY KEY,
        Date_emission DATETIME
);
INSERT INTO FACTURE VALUES (NULL,NOW());
INSERT INTO FACTURE VALUES (NULL,NOW());

CREATE TABLE ACHAT
(
    ID_achat INT  AUTO_INCREMENT PRIMARY KEY,
    Numero_facture INT ,
    ID_client INT,
    ID_produit INT,
    quantite int,
    FOREIGN KEY(ID_client) REFERENCES CLIENT(ID_client),
        FOREIGN KEY(Numero_facture) REFERENCES FACTURE(Numero_facture),
    FOREIGN KEY(ID_produit) REFERENCES PRODUIT(ID_produit)
);
INSERT INTO ACHAT VALUES (NULL,1,1,1,1);
INSERT INTO ACHAT VALUES (NULL,1,1,2,2);
INSERT INTO ACHAT VALUES (NULL,1,1,3,4);
INSERT INTO ACHAT VALUES (NULL,2,2,3,2);
INSERT INTO ACHAT VALUES (NULL,2,2,3,1);
INSERT INTO ACHAT VALUES (NULL,2,2,2,1);
INSERT INTO ACHAT VALUES (NULL,3,3,1,1);
INSERT INTO ACHAT VALUES (NULL,3,3,2,2);
INSERT INTO ACHAT VALUES (NULL,3,3,1,5);

CREATE or REPLACE VIEW V_FACTURE AS 
SELECT facture.Numero_facture ,client.Nom ,client.Prenom,produit.produit,ACHAT.quantite,
facture.Date_emission FROM ACHAT JOIN client ON ACHAT.ID_client = client.ID_client
JOIN facture ON  facture.Numero_facture = ACHAT.Numero_facture
JOIN produit ON  produit.ID_produit = ACHAT.ID_produit;
