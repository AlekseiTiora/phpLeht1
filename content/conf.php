<?php
$servernimi='localhost';
$kasutajanimi='aleksei20';
$parool='123123';
$andmebaasinimi='aleksei20';
$yhendus=new mysqli($servernimi,$kasutajanimi,$parool,$andmebaasinimi);
$yhendus->set_charset('UTF8');
/*
 * CREATE TABLE loomad(
    id int PRIMARY KEY AUTO_INCREMENT,
    nimi varchar(50),
    kirjeldus text);

INSERT INTO loomad(nimi,kirjeldus)
VALUES('koer','kirjeldus');

select * from loomad

CREATE TABLE puud(
    id int PRIMARY KEY AUTO_INCREMENT,
    puunimi varchar(20),
    pilt text)


CREATE TABLE kasutajad(
    id int not null PRIMARY  key AUTO_INCREMENT,
    nimi varchar(10),
    parool varchar(200),
    onAdmin tinyint,
    koduleht varchar(100))


CREATE TABLE auto(
    id int PRIMARY KEY AUTO_INCREMENT,
    mark varchar(15),
    pilt text)*/

?>