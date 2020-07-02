CREATE TABLE Livres(IDLivre INT NOT NULL AUTO_INCREMENT, Prix INT NOT NULL, Titre VARCHAR (250) NOT NULL, CodeGenre VARCHAR (10) NOT NULL, PRIMARY KEY(IDLivre))

INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('40','Le glaive magique','BD');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('40','Gaffes en gros','BD');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('40','Lagaff nous gâte','BD');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('45','QRN sur Bretzelburg','BD');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('80','Tour de manege','RG');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('45','	Le spectre aux balles d\'or','BD');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('30','La bonne chanson','Po');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('50','La jeune Parque','Po');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('50','Michel Strogoff','Ro');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('50','La Serpe d\'or','BD');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('70','Toujours aimer','RG');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('70','Toujours aimante','RG');
INSERT INTO livres(Prix,Titre,CodeGenre) VAlUES('72','Toujours aimé','RG');



CREATE TABLE genres(CodeGenre VARCHAR (10) NOT NULL, LibelleGenre VARCHAR (50) NOT NULL)

INSERT INTO genres(CodeGenre,LibelleGenre) VALUES('BD','Bande dessinée');
INSERT INTO genres(CodeGenre,LibelleGenre) VALUES('Po','Poésie');
INSERT INTO genres(CodeGenre,LibelleGenre) VALUES('RG','Roman de gare');
INSERT INTO genres(CodeGenre,LibelleGenre) VALUES('Ro','Roman');
INSERT INTO genres(CodeGenre,LibelleGenre) VALUES('SF','Science Fiction');

SELECT * FROM livres WHERE IDLivre=7
SELECT * FROM livres WHERE IDLivre = 7 OR IDLivre = 8
SELECT * FROM Livres WHERE IDLivre=7 AND Prix > 50;
SELECT * FROM livres WHERE IDLivre = 7 OR Prix > 50
SELECT * FROM livres WHERE Titre LIKE 'tou%';
SELECT * FROM livres WHERE CodeGenre LIKE 'r_';
SELECT * FROM livres WHERE Prix IN (40, 50,72)
SELECT * FROM livres WHERE Prix NOT IN (40,50,72)
SELECT * FROM livres WHERE Prix BETWEEN 40 AND 50
SELECT * FROM livres WHERE (Prix BETWEEN 40 AND 50) AND (CodeGenre = 'BD')
SELECT * FROM livres, genres WHERE livres.CodeGenre = genres.CodeGenre
SELECT Titre, livres.CodeGenre, LibelleGenre, Prix	FROM livres, genres WHERE livres.CodeGenre = genres.CodeGenre