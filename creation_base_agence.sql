--
-- base de donn�es: 'baseagence'
--
create database if not exists baseagence default character set utf8 collate utf8_general_ci;
use baseagence;
-- --------------------------------------------------------
-- creation des tables

set foreign_key_checks =0;

-- table avion
drop table if exists avion;
create table avion (
	av_id int not null auto_increment primary key,
	av_const varchar(20),
	av_modele varchar(10),
	av_capacite int,
	av_site int not null
)engine=innodb;

-- table pilote
drop table if exists pilote;
create table pilote (
	pi_id int not null auto_increment primary key,
	pi_nom varchar(20),
	pi_site int not null
)engine=innodb;

-- table vol
drop table if exists vol;
create table vol (
	vo_id char(5) not null unique ,
	vo_avion int not null,
	vo_pilote int not null ,
	vo_site_depart int not null,
	vo_site_arrivee int not null,
	vo_heure_depart time,
	vo_heure_arrivee time
)engine=innodb; 

-

set foreign_key_checks =1;
