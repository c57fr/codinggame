CREATE TABLE clients_tbl(
  id INT NOT NULL AUTO_INCREMENT,
  prenom VARCHAR (50) NOT NULL,
  nom VARCHAR (50) NOT NULL,
  ne_le DATE NOT NULL,
  ville VARCHAR (90) NOT NULL,
  enfants INT NOT NULL,
  PRIMARY KEY (id)
) phpdebutantclients_tblclients_tblclients_tbl;

ALTER TABLE clients_tbl
ADD tel INT NOT NULL;

ALTER TABLE clients_tbl DROP tel;

DROP TABLE clients_tbl;
