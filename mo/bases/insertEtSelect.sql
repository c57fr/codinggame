INSERT INTO client_tbl(id,prenom,nom,ne_le,ville,enfants) VALUES ('1','Patrick','Martin','1965-10-08','Bordeaux', '2')



INSERT INTO client_tbl(id,prenom,nom,ne_le,ville,enfants) VALUES ('1','Patrick','Martin','1965/10/08','Bordeaux', '2')
INSERT INTO client_tbl(id,prenom,nom,ne_le,ville,enfants) VALUES ('2','Julien','Lebreton','1964/02/21','Paris','2')
INSERT INTO client_tbl(id,prenom,nom,ne_le,ville,enfants) VALUES ('3','Marc','Richard','1958/04/15','Lille','4')
INSERT INTO client_tbl(id,prenom,nom,ne_le,ville,enfants) VALUES ('4','Francis','Perrin','1982/12/05','Paris','0')
INSERT INTO client_tbl(id,prenom,nom,ne_le,ville,enfants) VALUES ('5','Daniel','Bacon','1974/07/13','Reims','1')


SELECT * FROM client_tbl WHERE enfants='2'

SELECT nom, prenom FROM client_tbl WHERE enfants='2'

SELECT * FROM client_tbl WHERE ne_le < "1978-01-01"

SELECT* FROM client_tbl WHERE enfants !='0'

SELECT * FROM client_tbl WHERE nom LIKE 'le%'

SELECT * FROM client_tbl WHERE nom LIKE '%ri%'

//2do MO Exemple perso + rebaptiser fichier (  11...?)
