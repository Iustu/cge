use cge;
create table Pessoas(pessoaId int not null auto_increment primary key, nome varchar(50) not null);
create table Atributos(atributoId int not null auto_increment primary key, nome varchar(30) not null);
create table relacao(id int not null auto_increment primary key,pessoaId int not null , atributoId int not null, constraint fkpessoaId foreign key (pessoaId) references Pessoas(pessoaId),constraint fkatributoId foreign key(atributoId) references Atributos(atributoId));

select * from pessoas;
select * from atributos;
select * from relacao;
