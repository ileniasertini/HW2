drop database if exists SHOP2;
create database SHOP2;
use SHOP2;

/*----------------------------------------------------*/
create table users(
	id int auto_increment primary key,
    username varchar(255),
    nome varchar(255) not null, 
    cognome varchar(255) not null,
    email varchar(255) not null unique,
    password varchar(255) not null,
    created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)ENGINE='InnoDB';

/*----------------------------------------------------*/

create table products(
	id int auto_increment primary key,
    codice int , 
    nome varchar(255),
    descrizione nvarchar(5000),
    immagine nvarchar(5000),
    prezzo varchar(255),
    created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)ENGINE='InnoDB';

select * from products;

insert INTO products( codice, nome, descrizione, immagine, prezzo) VALUES
( '1234', 'T-SHIRT', 'Maglietta bianca con collo rotondo a maniche corte.Orlo con nodo sul davanti.Disponibile anche in nero.', '/IMG_6831.JPEG', '10');
insert INTO products( codice, nome, descrizione, immagine, prezzo) VALUES
( '5678', 'FELPA', 'Felpa gialla con collo rotondo e maniche lunghe.Dettaglio di scritta anteriore combinata a contrasto.', '/IMG_6833.JPEG', '30');
insert INTO products( codice, nome, descrizione, immagine, prezzo) VALUES
( '1122', 'GONNA', 'Gonna-pantalone,color verde, a vita alta con spacco anteriore.Chiusura laterale con cerniera nascosta nella cucitura.', '/IMG_6828.JPEG', '18');
insert INTO products( codice, nome, descrizione, immagine, prezzo) VALUES
( '5555', 'GIUBBOTTO', 'Giacca color panna, effetto pelle con collo a revers .Tasche anteriori e chiusura frontale con cerniera metallica.', '/IMG_6841.JPEG', '40');
insert INTO products( codice, nome, descrizione, immagine, prezzo) VALUES
( '6969', 'VESTITO', 'Dettaglio di nodo anteriore.Chiusura con cerniera laterale nascosta nella cucitura.', '/IMG_6842.JPEG', '28');
insert INTO products( codice, nome, descrizione, immagine, prezzo) VALUES
( '8765', 'GIACCA', 'Giacca disponibile in piu colorazioni.Chiusura con bottoni color oro.Tasche laterlai finte ', '/1_8.jpeg', '40');
insert INTO products( codice, nome, descrizione, immagine, prezzo) VALUES
( '1111', 'TUTA', 'Tuta con polsini sulle ginocchia. Vestibilità stretta.', '/1_7.jpeg', '13');


/*----------------------------------------------------*/

create table new_entrys(
	id int auto_increment primary key,
	products_id int ,
    created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)ENGINE='InnoDB';


insert into new_entrys(products_id) values ('1234');
insert into new_entrys(products_id) values ('1122');
insert into new_entrys(products_id) values ('6969');
insert into new_entrys(products_id) values ('1111');


/*----------------------------------------------------*/

create table carts(
	id int auto_increment primary key,
    users_id int,
    nome varchar(255),
    FOREIGN KEY(users_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
    created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)ENGINE='InnoDB';



/*----------------------------------------------------*/

create table reviews(
	id int auto_increment primary key,
	utente varchar(255),
    descrizione nvarchar(6000),
    created_at timestamp NOT NULL DEFAULT current_timestamp(),
	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)Engine='InnoDB';
