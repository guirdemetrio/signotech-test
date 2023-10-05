use Signotech;

create table dadosUser(
idUser int NOT NULL auto_increment,
nome varchar(200) NOT NULL,
email varchar(300) NOT NULL,
telefone varchar(18) NOT NULL,
bairro varchar(200),
endereco varchar(300),
cep varchar(20),
cidade varchar(200),
uf varchar(20),
PRIMARY KEY(idUser)
);

create table producao(
id int NOT NULL auto_increment,
idUser int NOT NULL,
tipoRevista varchar(50) NOT NULL,
quantidade int,
atracoes text,
sugestoes varchar (30),
imagens longblob,
PRIMARY KEY(id),
FOREIGN KEY(idUser) REFERENCES dadosUser(idUser)
);


