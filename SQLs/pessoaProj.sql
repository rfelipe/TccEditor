CREATE TABLE login (
  id int(3) DEFAULT NULL,
  usuario varchar(25) NOT NULL,
  senha varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

create table pessoas(
idpessoa int Primary key,
idProjeto int,
Nome varchar(100)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE pessoas ADD FOREIGN KEY(idpessoa) REFERENCES login (id);