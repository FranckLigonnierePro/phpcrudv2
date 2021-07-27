create database footballTeam;
use footballTeam;
/* creer les club */
create table club (
idClub int primary key not null auto_increment,
nom varchar(50)
);

/* creer les poste */
create table poste (
idPoste int primary key not null auto_increment,
nom varchar(50)
);

/* creer les joueurs */
create table joueur (
idJoueur int primary key not null auto_increment,
nom varchar(50) not null,
numero int(2) not null,
poste varchar(50) not null,
idClub int,
foreign key (idClub) references club(idCLub),
idPoste int,
foreign key (idPoste) references poste(idPoste)
);

/* ajout des nom de club */
use club;
insert into club (nom) values 
("Paris"),
("Nantes"),
("Marseille");

/* ajout des nom de poste */
use poste;
insert into poste (nom) values
("Gardien"),
("Defenceur"),
("Milieu"),
("Attaquant");

ALTER TABLE joueur DROP COLUMN poste;

/* ajout des nom de poste */

use joueur;
insert into joueur (nom, numero, idClub, idPoste) values
("Mbappé",10,1,4),
("Lloris",1,2,1),
("Piqué",19,3,2),
("Zidane",17,3,3);


select joueur.nom, joueur.numero, club.nom, poste.nom from joueur
join club 
on club.idClub = joueur.idClub
join poste 
on poste.idPoste = joueur.idPoste;

