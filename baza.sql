drop database if exists baza;

create database baza default character set utf8;

use baza;

#c:\xampp\mysql\bin\mysql -uedunova -pedunova --default_character_set=utf8 < E:\htdocs\Moj_zavrsni1.0\Moj_zavrsni\baza.sql

create table operater(
	sifra int not null primary key auto_increment,
	email varchar(50) not null,
	lozinka varchar(255) not null,
	ime varchar(50) not null,
	prezime varchar(50) not null,
	uloga varchar(50) not null
);

create table korisnik( 
	sifra int not null primary key auto_increment,	
	ime varchar(50) not null,
	prezime varchar(50) not null
);

create table citat( 
	sifra int not null primary key auto_increment,
	korisnik int not null,
	citat varchar(500) not null
);

create table kategorija( 
	sifra int not null primary key auto_increment, 				
	naziv varchar(50) not null
);

create table citatkategorija (
	sifra int not null primary key auto_increment,
	citat int not null,
	kategorija int not null
);

alter table citatkategorija add foreign key (citat) references citat(sifra);
alter table citatkategorija add foreign key (kategorija) references kategorija(sifra);

alter table citat add foreign key (korisnik) references korisnik(sifra);

insert into korisnik (sifra,ime,prezime) values
(null,'Pero', 'Perić');

insert into citat (sifra,korisnik,citat) values
(null,'1','Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma, which is living with the results of other people’s thinking. Don’t let the noise of others’ opinions drown out your own inner voice. And most important, have the courage to follow your heart and intuition.');

insert into kategorija (sifra,naziv) values
(null,'Život');

insert into citatkategorija (sifra,citat,kategorija) values
(null,1,1);

insert into operater (email,lozinka,uloga,ime,prezime) values 
('andrejh@gmail.com','$2y$12$YtK.8/fpvB8M8k8mKOqnm.eCneZTaJsF/9efMBu7rDj29JRzEG9ly',
'admin','Andrej','Hofšuster'),
('edunova@edunova.hr','$2y$12$rLkAxNcXn8dUY1C3MUYVV.qceDJcVbVYZu7El75qAqkCR.cMnuwRC',
'korisnik','Pero','Perić');









