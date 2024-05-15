-- drop table series;

create table series(
 id_series int(11) AUTO_INCREMENT not null,
 titulo varchar(100) not null,
 ano smallint,
 categoria varchar(100),
 elenco varchar(500),
 ativo char(1) default null, 
 dt_auditoria datetime NOT NULL default current_timestamp(), 
 PRIMARY KEY (`id_series`)
);

insert into series (titulo,ano,categoria,elenco,created_at) values
('Gilmore Girls',2000,'Comédia','Lauren Grahan|Alexis Bledel|Mellissa McCarty',current_timestamp()),
('Bones',2006,'Investigação Policial|Médica|Baseada em livros','Emily Deschanel|David Boreanaz',current_timestamp()),
('Supernatural',2005,'Mistério sobrenatural|Ficção','Jensen Ackles|Jared Padalecki',current_timestamp()),
('House MD',2003,'Médica|Drama|Investigação','Hugh Laurie',current_timestamp()),
('Buffy',1999,'Mistério Sobrenatural|Ficção','Sarah Michelle Gellar|David Boreanaz|Alyson Hannigan',current_timestamp()),
('Stranger Things',2016,'Mistério Sobrenatural|Ficção|De época - anos 80','Millie Bob Brown|Winona Rider',current_timestamp()),
('The Witcher',2020,'Mistério Sobrenatural|Ficção|Baseada em livros','Henry Cavill',current_timestamp()),
('Emily in Paris',2020,'Comédia romântica','Lilly Collins',current_timestamp()),
('Sabrina',2020,'Mistério Sobrenatural|Ficção|Baseada em quadrinhos','Kierna Shipka',current_timestamp()),
('One Tree Hill',2003,'Drama adolescente|Basquete','Chad Michael Murray|Hilary Burton|Sophia Bush',current_timestamp()),
('The Vampire Diaries',2010,'Mistério Sobrenatural|Ficção|Baseada em livros','Nina Dobrev|Ian Somerhalder|Paul Wesley',current_timestamp()),
('Angel',2002,'Mistério Sobrenatural|Ficção','David Boreanaz',current_timestamp()),
('Dexter',2008,'Investigação Policial|Baseada em livros','Michael C Hall',current_timestamp()),
('The Office',2000,'Comédia|Documentário','Steve Carrel|John Krasinsk',current_timestamp()),
('How I met Your mother',2004,'Comédia','Jason Segel|Alyson Hannigan',current_timestamp());

-- alter table series rename to series_old;