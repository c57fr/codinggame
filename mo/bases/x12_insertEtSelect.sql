INSERT INTO client_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES (
    '1',
    'Patrick',
    'Martin',
    '1965-10-08',
    'Bordeaux',
    '2'
  )
INSERT INTO client_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES (
    '1',
    'Patrick',
    'Martin',
    '1965/10/08',
    'Bordeaux',
    '2'
  )
INSERT INTO client_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES ('2', 'Julien', 'Lebreton', '1964/02/21', 'Paris', '2')
INSERT INTO client_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES ('3', 'Marc', 'Richard', '1958/04/15', 'Lille', '4')
INSERT INTO client_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES ('4', 'Francis', 'Perrin', '1982/12/05', 'Paris', '0')
INSERT INTO client_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES ('5', 'Daniel', 'Bacon', '1974/07/13', 'Reims', '1')
SELECT *
FROM client_tbl
WHERE enfants = '2'
SELECT nom,
  prenom
FROM client_tbl
WHERE enfants = '2'
SELECT *
FROM client_tbl
WHERE ne_le < "1978-01-01"
SELECT *
FROM client_tbl
WHERE enfants != '0'
SELECT *
FROM client_tbl
WHERE nom LIKE 'le%'
SELECT *
FROM client_tbl
WHERE nom LIKE '%ri%' / / Mes Exemples persos CREATE TABLE cliente_tbl(
    id INT NOT NULL AUTO_INCREMENT,
    prenom VARCHAR (50) NOT NULL,
    nom VARCHAR (50) NOT NULL,
    ne_le DATE NOT NULL,
    ville VARCHAR (90) NOT NULL,
    enfants INT NOT NULL,
    PRIMARY KEY (id)
  )
INSERT INTO cliente_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES (
    '1',
    'Patrick',
    'Martin',
    '1965/10/08',
    'Bordeaux',
    '2'
  )
INSERT INTO cliente_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES('2', 'Momo', 'Seck', '1986/07/29', 'Casablanca', '0')
INSERT INTO cliente_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES ('3', 'Yaye', 'Seck', '1968/05/21', 'Dakar', '3')
INSERT INTO cliente_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES('4', 'Adou', 'Seck', '1958/06/20', 'Dakar', '3')
INSERT INTO cliente_tbl(id, prenom, nom, ne_le, ville, enfants)
VALUES('5', 'Tapha', 'Sarr', '1954/11/18', 'Nimes', '6')
SELECT *
FROM cliente_tbl
WHERE enfants = '3'
SELECT nom,
  prenom
FROM cliente_tbl
WHERE enfants = '2'
SELECT *
FROM cliente_tbl
WHERE ne_le > '1970/01/10'
SELECT *
FROM cliente_tbl
WHERE enfants != '0'
SELECT *
FROM cliente_tbl
WHERE nom LIKE 's%'
SELECT *
FROM cliente_tbl
WHERE nom LIKE 'se%'
